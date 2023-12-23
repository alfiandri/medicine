<?php

// Set the response content type to JSON
header('Content-Type: application/json');

// Get the headers from the request
$headers = getallheaders();

$username = $headers['x-username'] ?? null;
$token = $headers['x-token'] ?? null;

$connection = connectToDatabase();

$sql = "SELECT * FROM users WHERE username = :username AND api_token = :token";
$params = [
    ':username' => $username,
    ':token' => $token,
];

$result = executeQuery($connection, $sql, $params);
$row = $result->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    echo json_encode(["metadata" => ["message" => "Authentication failed", "code" => 201]]);
    exit;
}

// check expired token
if (time() > $row['token_expired_at']) {
    echo json_encode(["metadata" => ["message" => "Token Expired", "code" => 201]]);
    exit;
}
