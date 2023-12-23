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
        $connection = connectToDatabase();

        $kodepoli = validateFieldNotEmpty($requestData, 'kodepoli');
        $kodedokter = validateFieldNotEmpty($requestData, 'kodedokter');
        $tanggalperiksa = validateFieldNotEmpty($requestData, 'tanggalperiksa');
        $jampraktek = validateFieldNotEmpty($requestData, 'jampraktek');

        // Validasi Poli Tidak Ditemukan
        $sql = "SELECT * FROM poli WHERE kdpoli = :kdpoli";
        $params = [
            ':kdpoli' => $kodepoli,
        ];

        $result = executeQuery($connection, $sql, $params);
        $poli = $result->fetch(PDO::FETCH_ASSOC);
        if (!$poli) {
            echo json_encode(["metadata" => ["message" => "Poli Tidak Ditemukan", "code" => 201]]);
            exit; // Exit the script
        }

        // Validasi Dokter Tidak Ditemukan
        $sql = "SELECT * FROM dokter WHERE kode_dokter = :kodedokter";
        $params = [
            ':kodedokter' => $kodedokter,
        ];

        $result = executeQuery($connection, $sql, $params);
        $dokter = $result->fetch(PDO::FETCH_ASSOC);
        if (!$dokter) {
            echo json_encode(["metadata" => ["message" => "Dokter Tidak Ditemukan", "code" => 201]]);
            exit; // Exit the script
        }

        // Validasi Format Tanggal Tidak Sesuai
        try {
            $date = new DateTime($tanggalperiksa);
            // Check if the date is a backdate (date in the past)
            $currentDate = new DateTime();
            $currentDate->setTime(0, 0, 0); // Set the time to midnight for today
            if ($date < $currentDate) {
                // Backdate detected
                echo json_encode(["metadata" => ["message" => "Tanggal Periksa Tidak Berlaku", "code" => 201]]);
                exit; // Exit the script
            }
        } catch (Exception $e) {
            // Invalid date format
            echo json_encode(["metadata" => ["message" => "Format Tanggal Tidak Sesuai, format yang benar adalah yyyy-mm-dd", "code" => 201]]);
            exit; // Exit the script
        }
        [$jamAwal, $jamAkhir] = explode('-', $jampraktek);
        $sql = "SELECT * FROM antrian_poli WHERE kodepoli = :kodepoli AND kodedokter = :kodedokter AND tanggalperiksa = :tanggalperiksa AND batal = 0 AND sudah_dilayani = 0 AND (TIME_TO_SEC(SUBSTRING_INDEX(jampraktek, '-', 1)) <= TIME_TO_SEC(:jamakhir) AND TIME_TO_SEC(SUBSTRING_INDEX(jampraktek, '-', -1)) >= TIME_TO_SEC(:jamawal)) ORDER BY nomor ASC LIMIT 1";
        $params = [
            ':kodepoli' => $kodepoli,
            ':kodedokter' => $kodedokter,
            ':tanggalperiksa' => $tanggalperiksa,
            ':jamawal' => $jamAwal,
            ':jamakhir' => $jamAkhir,
        ];

        $result = executeQuery($connection, $sql, $params);
        $antrean = $result->fetch(PDO::FETCH_ASSOC);
        if (!$antrean) {
            echo json_encode(["metadata" => ["message" => "Antrean Tidak Ditemukan", "code" => 201]]);
            exit; // Exit the script
        }

        $kuotajkn = $poli['kuotajkn'];
        $sisakuotajkn = $kuotajkn;
        $kuotanonjkn = $poli['kuotanonjkn'];
        $sisakuotanonjkn = $kuotanonjkn;

        // get sisa kuota jkn
        $sql = "SELECT COUNT(*) as count FROM antrian_poli WHERE kodepoli = :kodepoli AND tanggalperiksa = :tanggalperiksa AND batal = 0 AND sudah_dilayani = 0 AND (nokartu is not null AND nokartu != '')";
        $params = [
            ':kodepoli' => $kodepoli,
            ':tanggalperiksa' => $tanggalperiksa,
        ];
        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $sisakuotajkn = $sisakuotajkn - $row['count'];
        }

        // get sisa kuota non jkn
        $sql = "SELECT COUNT(*) as count FROM antrian_poli WHERE kodepoli = :kodepoli AND tanggalperiksa = :tanggalperiksa AND batal = 0 AND sudah_dilayani = 0 AND (nokartu is null OR nokartu = '')";
        $params = [
            ':kodepoli' => $kodepoli,
            ':tanggalperiksa' => $tanggalperiksa,
        ];
        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $sisakuotanonjkn = $sisakuotanonjkn - $row['count'];
        }

        // get totalantrean
        $totalAntrean = 0;
        $sql = "SELECT COUNT(*) as count FROM antrian_poli WHERE kodepoli = :kodepoli AND tanggalperiksa = :tanggalperiksa";
        $params = [
            ':kodepoli' => $kodepoli,
            ':tanggalperiksa' => $tanggalperiksa,
        ];
        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $totalAntrean = $row['count'];
        }

        // get sisa antrean
        $sisaAntrean = 0;
        $sql = "SELECT COUNT(*) as count FROM antrian_poli WHERE kodepoli = :kodepoli AND tanggalperiksa = :tanggalperiksa AND batal = 0 AND sudah_dilayani = 0";
        $params = [
            ':kodepoli' => $kodepoli,
            ':tanggalperiksa' => $tanggalperiksa,
        ];
        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $sisaAntrean = $row['count'];
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

        // Process the payload data and generate the response
        $response = [
            "response" => [
                "namapoli" => $poli['nmpoli'],
                "namadokter" => $dokter['nama'],
                "totalantrean" => $totalAntrean,
                "sisaantrean" => $sisaAntrean,
                "antreanpanggil" => $antreanpanggil,
                "sisakuotajkn" => $sisakuotajkn,
                "kuotajkn" => $kuotajkn,
                "sisakuotanonjkn" => $sisakuotanonjkn,
                "kuotanonjkn" => $kuotanonjkn,
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
