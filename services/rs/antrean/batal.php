<?php
require_once '../../../variable.php';
require_once '../../../curl.php';
require_once '../../../decrypt.php';
require_once '../../../database.php';
require_once '../../../function.php';
require_once '../auth.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Parse the JSON payload from the request
    $jsonPayload = file_get_contents('php://input');
    $requestData = json_decode($jsonPayload, true);

    // Check if the JSON payload was successfully parsed
    if ($requestData !== null) {
        $kodebooking = validateFieldNotEmpty($requestData, 'kodebooking');
        $keterangan = validateFieldNotEmpty($requestData, 'keterangan');

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

        if ($antrean['sudah_dilayani'] == 1) {
            echo json_encode(["metadata" => ["message" => "Pasien Sudah Dilayani, Antrean Tidak Dapat Dibatalkan", "code" => 201]]);
            exit; // Exit the script                
        }

        if ($antrean['batal'] == 1) {
            echo json_encode(["metadata" => ["message" => "Antrean Tidak Ditemukan atau Sudah Dibatalkan", "code" => 201]]);
            exit; // Exit the script                
        }

        $connection->beginTransaction();

        $sql = "UPDATE antrian_poli SET batal = 1, keterangan = '$keterangan' WHERE kodebooking = '$kodebooking'";
        executeQuery($connection, $sql);

        // post batal from bpjs service
        // API Endpoint URL
        $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/batal";

        $data = [
            "kodebooking" => $kodebooking,
            "keterangan" => $keterangan,
        ];
        $response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

        $timeStamp = $response[1];
        $jsonData = json_decode($response[0], true);

        if (($jsonData['metadata']['code'] ?? null) != 200) {
            echo json_encode(["metadata" => ["message" => $jsonData['metadata']['message'], "code" => 201]]);
            exit; // Exit the script 
        }

        $connection->commit();

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
