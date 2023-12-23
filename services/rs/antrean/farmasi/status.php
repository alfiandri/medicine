<?php
require_once __DIR__ . '/../../../../db/connect.php';
require_once __DIR__ . '/../../../../controller/base/integrasi.php';
require_once __DIR__ . '/../../auth.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Parse the JSON payload from the request
    $jsonPayload = file_get_contents('php://input');
    $requestData = json_decode($jsonPayload, true);

    // Check if the JSON payload was successfully parsed
    if ($requestData !== null) {
        $kodebooking = validateFieldNotEmpty($requestData, 'kodebooking');

        $sql = "SELECT * FROM antrian_farmasi WHERE kodebooking = :kodebooking";
        $params = [
            ':kodebooking' => $kodebooking,
        ];

        $result = executeQuery($connection, $sql, $params);
        $antrean = $result->fetch(PDO::FETCH_ASSOC);
        if (!$antrean) {
            echo json_encode(["metadata" => ["message" => "Kode Booking tidak ditemukan", "code" => 201]]);
            exit; // Exit the script
        }

        $antreanpanggil = '-';
        $sql = "SELECT * FROM antrian_farmasi WHERE tanggal = :tanggal AND sudah_dilayani = 1 ORDER BY angkaantrean DESC LIMIT 1";
        $params = [
            ':tanggal' => $antrean['tanggal'],
        ];
        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $antreanpanggil = $row['nomorantrean'];
        }

        $sisaAntrean = 0;
        $sql = "SELECT COUNT(*) as count FROM antrian_farmasi WHERE tanggal = :tanggal AND sudah_dilayani = 0";
        $params = [
            ':tanggal' => $antrean['tanggal'],
        ];
        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $sisaAntrean = $row['count'];
        }

        $totalAntrean = 0;
        $sql = "SELECT COUNT(*) as count FROM antrian_farmasi WHERE tanggal = :tanggal";
        $params = [
            ':tanggal' => $antrean['tanggal'],
        ];
        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $totalAntrean = $row['count'];
        }

        // Process the payload data and generate the response
        $response = [
            "response" => [
                "jenisresep" => "Racikan/Non Racikan",
                "totalantrean" => $totalAntrean,
                "sisaantrean" => $sisaAntrean,
                "antreanpanggil" => $antreanpanggil,
                "keterangan" => $antrean['keterangan']
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
