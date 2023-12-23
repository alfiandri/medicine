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
        // check null or not
        $nopeserta = validateFieldNotEmpty($requestData, 'nopeserta');

        // Validasi Nomor Kartu yang dimasukkan tidak valid (Hanya Numeric) dan <> 13 digit
        // Periksa panjangnya harus 13 digit
        if (preg_match('/^[0-9]+$/', $nopeserta) && strlen($nopeserta) !== 13) {
            echo json_encode(["metadata" => ["message" => "Nomor Kartu yang dimasukkan tidak valid", "code" => 201]]);
            exit; // Exit the script                
        }

        $sql = "SELECT * FROM jadwal_operasi WHERE nopeserta = :nopeserta";
        $params = [
            ':nopeserta' => $nopeserta,
        ];

        $result = executeQuery($connection, $sql, $params);
        $operasi = $result->fetchAll(PDO::FETCH_ASSOC);
        if (!$operasi) {
            echo json_encode(["metadata" => ["message" => "Data Jadwal Operasi tidak ditemukan", "code" => 201]]);
            exit; // Exit the script
        }

        $lists = [];
        foreach ($operasi as $data) {
            $lists[] = [
                "kodebooking" => $data['kodebooking'],
                "tanggaloperasi" => $data['tanggaloperasi'],
                "jenistindakan" => $data['jenistindakan'],
                "kodepoli" => $data['kodepoli'],
                "namapoli" => $data['namapoli'],
                "terlaksana" => $data['terlaksana']
            ];
        }

        // Process the payload data and generate the response
        $response = [
            "response" => [
                "list" => $lists
            ],
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
