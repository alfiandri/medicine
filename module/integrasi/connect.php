<?php
global $mysqli;
$host = "localhost";
$user = "root";
$password = "";
$database = "db_rsmata";
$mysqli =  new mysqli($host,$user,$password,$database);
if (mysqli_connect_errno()) {
    trigger_error('Koneksi Ke Database Gagal: ' . mysqli_connect_error(), E_USER_ERROR);
}
