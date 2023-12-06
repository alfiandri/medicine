<?php

function validateFieldNotEmpty($request, $fieldName)
{
    if (empty($request[$fieldName])) {
        http_response_code(201); // Bad Request
        echo json_encode(["metadata" => ["message" => "$fieldName Belum Diisi", "code" => 201]]);
        exit; // Keluar dari skrip
    }
    return $request[$fieldName];
}

function getSetting($key, $table)
{
    require "../../db/connect.php";

    $sql = "SELECT * FROM $table WHERE status = 1";

    $result = mysqli_query($koneksi, $sql);

    $row = mysqli_fetch_assoc($result);
    return @$row[$key];
}

function dd(...$args)
{
    echo '<div style="background-color:#f5f5f5; padding:10px;">';
    echo '<pre style="background-color:#fff; padding:10px; border:1px solid #ccc; border-radius:5px;">';
    foreach ($args as $arg) {
        var_dump($arg);
        echo '<hr>';
    }
    echo '</pre>';
    echo '</div>';
    die();
}

function generateQueryString($sql, $params)
{
    foreach ($params as $key => $value) {
        // Enclose string values in single quotes
        if (is_string($value)) {
            $value = "'" . $value . "'";
        }
        $sql = str_replace($key, $value, $sql);
    }
    echo $sql;
    die;
}
