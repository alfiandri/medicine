<?php
$host = "localhost";
$username = "root";
$password = "";
// $database = "db_simrs";
$database = "db_antrean";
$koneksi = mysqli_connect($host, $username, $password, $database);



function connectToDatabase()
{
    global $host;
    global $username;
    global $password;
    global $database;

    try {
        $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (Exception $e) {
        throw new Exception("Connection failed: " . $$e->getMessage(), 400);
    }
}

function executeQuery($connection, $sql, $params = [])
{
    try {
        $statement = $connection->prepare($sql);
        $statement->execute($params);
        return $statement;
    } catch (Exception $e) {
        throw new Exception("Query failed: " . $e->getMessage(), 400);
    }
}
