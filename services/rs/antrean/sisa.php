<?php
require_once '../../../database.php';
require_once '../auth.php';
require_once '../../../function.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Parse the JSON payload from the request
    $jsonPayload = file_get_contents('php://input');
    $requestData = json_decode($jsonPayload, true);

    // Check if the JSON payload was successfully parsed
    if ($requestData !== null) {
        $kodebooking = validateFieldNotEmpty($requestData, 'kodebooking');

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

        // get poli
        $sql = "SELECT * FROM poli WHERE kdpoli = :kdpoli";
        $params = [
            ':kdpoli' => $antrean['kodepoli'],
        ];

        $result = executeQuery($connection, $sql, $params);
        $poli = $result->fetch(PDO::FETCH_ASSOC);
        if (!$poli) {
            echo json_encode(["metadata" => ["message" => "Poli Tidak Ditemukan", "code" => 201]]);
            exit; // Exit the script
        }

        $sql = "SELECT * FROM dokter WHERE kode_dokter = :kodedokter";
        $params = [
            ':kodedokter' => $antrean['kodedokter'],
        ];

        $result = executeQuery($connection, $sql, $params);
        $dokter = $result->fetch(PDO::FETCH_ASSOC);
        if (!$dokter) {
            echo json_encode(["metadata" => ["message" => "Dokter Tidak Ditemukan", "code" => 201]]);
            exit; // Exit the script
        }

        $antreanpanggil = '-';
        $sql = "SELECT * FROM antrian_poli WHERE kodepoli = :kodepoli AND tanggalperiksa = :tanggalperiksa AND batal = 0 AND sudah_dilayani = 1 ORDER BY nomor DESC LIMIT 1";
        $params = [
            ':kodepoli' => $antrean['kodepoli'],
            ':tanggalperiksa' => $antrean['tanggalperiksa'],
        ];
        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $antreanpanggil = $row['nomorantrean'];
        }

        $sisaAntrean = 0;
        $sql = "SELECT COUNT(*) as count FROM antrian_poli WHERE kodepoli = :kodepoli AND tanggalperiksa = :tanggalperiksa AND batal = 0 AND sudah_dilayani = 0";
        $params = [
            ':kodepoli' => $antrean['kodepoli'],
            ':tanggalperiksa' => $antrean['tanggalperiksa'],
        ];
        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $sisaAntrean = $row['count'];
        }

        // Process the payload data and generate the response
        $response = [
            "response" => [
                "nomorantrean" => $antrean['nomor'],
                "namapoli" => $poli['nmpoli'],
                "namadokter" => $dokter['kode_dokter'],
                "sisaantrean" => $sisaAntrean,
                "antreanpanggil" => $antreanpanggil,
                "waktutunggu" => 600,
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
