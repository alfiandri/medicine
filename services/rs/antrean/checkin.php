<?php

require_once __DIR__ . '/../../db/connect.php';
require_once __DIR__ . '/../auth.php';
require_once __DIR__ . '/../../../controller/base/integrasi.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Parse the JSON payload from the request
    $jsonPayload = file_get_contents('php://input');
    $requestData = json_decode($jsonPayload, true);

    // Check if the JSON payload was successfully parsed
    if ($requestData !== null) {
        // Check if the kodebooking is valid
        $kodebooking = validateFieldNotEmpty($requestData, 'kodebooking');
        $waktu = validateFieldNotEmpty($requestData, 'waktu');

        $sql = "SELECT * FROM antrian_poli WHERE kodebooking = :kodebooking";
        $params = [
            ':kodebooking' => $kodebooking,
        ];

        $result = executeQuery($connection, $sql, $params);
        $antrean = $result->fetch(PDO::FETCH_ASSOC);
        if (!$antrean) {
            echo json_encode(["metadata" => ["message" => "Antrean Tidak Ditemukan", "code" => 201]]);
            exit; // Exit the script
        }

        // tambah task id
        $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/updatewaktu";

        $data = [
            "kodebooking" => $kodebooking,
            "taskid" => 1,
            "waktu" => $waktu,
        ];
        $response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);
        // echo $response[0];die;

        $sql = "UPDATE antrian_poli SET status = 1 WHERE kodebooking = :kodebooking";
        $params = [
            ':kodebooking' => $kodebooking,
        ];

        $result = executeQuery($connection, $sql, $params);

        // Process the payload data and generate the response
        $response = [
            "metadata" => [
                "message" => "Ok",
                "code" => 200
            ]
        ];

        // Send the JSON response
        echo json_encode($response);
    } else {
        // Invalid JSON payload
        http_response_code(400); // Bad Request
        echo json_encode(["metadata" => ["message" => "Invalid JSON payload", "code" => 400]]);
    }
} else {
    // Unsupported method
    http_response_code(405); // Method Not Allowed
    echo json_encode(["metadata" => ["message" => "Method not allowed", "code" => 405]]);
}
