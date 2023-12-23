<?php

require_once '../../../../database.php';
require_once '../../../../function.php';
require_once '../../../../variable.php';
require_once '../../../../curl.php';
require_once '../../../../decrypt.php';
require_once '../../auth.php';

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
            echo json_encode(["metadata" => ["message" => "Kode Booking tidak ditemukan", "code" => 201]]);
            exit; // Exit the script
        }
        $tanggal = $antrean['tanggalperiksa'];

        // check if antrian_farmasi is exists
        $sql = "SELECT * FROM antrian_farmasi WHERE kodebooking = :kodebooking AND tanggal = :tanggal";
        $params = [
            ':kodebooking' => $kodebooking,
            ':tanggal' => $tanggal,
        ];
        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            echo json_encode(["metadata" => ["message" => "Antrean farmasi sudah ada", "code" => 201]]);
            exit; // Exit the script
        }

        // get last antrian_farmasi
        $sql = "SELECT * FROM antrian_farmasi WHERE tanggal = :tanggal ORDER BY nomor DESC LIMIT 1";
        $params = [
            ':tanggal' => $tanggal,
        ];
        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            $nomor = 1;
        } else {
            $nomor = $row['nomor'] + 1;
        }

        $connection->beginTransaction();

        // insert antrean farmasi
        $sql = "INSERT INTO antrian_farmasi (kodebooking, jenisresep, keterangan, nomor, tanggal) 
        VALUES (:kodebooking, :jenisresep, :keterangan, :nomor, :tanggal)";

        // Your array of parameters
        $params = [
            ':kodebooking' => $antrean['kodebooking'],
            ':jenisresep' => $antrean['jenisresep'],
            ':keterangan' => $antrean['keteranganresep'],
            ':nomor' => $nomor,
            ':tanggal' => $tanggal,
        ];

        $result = executeQuery($connection, $sql, $params);
        if ($result) {
            $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/farmasi/add";

            $data = [
                "kodebooking" => $antrean['kodebooking'],
                "jenisresep" => $antrean['jenisresep'],
                "nomorantrean" => $nomor,
                "keterangan" => $antrean['keteranganresep'],
            ];
            $response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

            $timeStamp = $response[1];
            $jsonData = json_decode($response[0], true);

            // Check if metadata->code is equal to 1
            if (isset($jsonData['metadata']['code'])) {
                if ($jsonData['metadata']['code'] != 200) {
                    $connection->rollBack();
                    echo json_encode(
                        [
                            "metadata" => [
                                "message" => $jsonData['metadata']['message'] ?? 'Terjadi kesalahan ketka mengambil data farmasi',
                                "code" => $jsonData['metadata']['code']
                            ]
                        ]
                    );
                    exit;
                }
            }

            $connection->commit();

            // Process the payload data and generate the response
            $response = [
                "response" => [
                    "jenisresep" => $antrean['jenisresep'],
                    "nomorantrean" => $nomor,
                    "keterangan" => $antrean['keteranganresep']
                ],
                "metadata" => [
                    "message" => "Ok",
                    "code" => 200
                ]
            ];
            // Send the JSON response
            echo json_encode($response);
            exit;
        }
        $connection->rollBack();
        http_response_code(400); // Bad Request
        echo json_encode(["metadata" => ["message" => 'Terjadi kesalahan ketika memproses data.', "code" => 400]]);
        exit;
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
