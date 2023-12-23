<?php

require_once __DIR__ . '/../../db/connect.php';
require_once __DIR__ . '/../auth.php';
require_once __DIR__ . '/../../../controller/base/integrasi.php';

function generateUniqueNRM()
{
    global $connection;
    $sql = "SELECT * FROM pasien order by nomor_rm DESC";
    $result = executeQuery($connection, $sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        $rm = intval($row['nomor_rm']) + 1;
        return sprintf("%06d", $rm);
    }
    return sprintf("%06d", 1);
}

// Fungsi untuk memeriksa apakah NRM sudah ada di basis data
function checkIfNRMExists($connection, $nrm)
{
    $sql = "SELECT * FROM pasien WHERE nomor_rm = :norm";
    $params = [
        ':norm' => $nrm,
    ];

    $result = executeQuery($connection, $sql, $params);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        return true;
    }
    return false;
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Parse the JSON payload from the request
    $jsonPayload = file_get_contents('php://input');
    $requestData = json_decode($jsonPayload, true);

    // Check if the JSON payload was successfully parsed
    if ($requestData !== null) {
        // check null or not
        $nomorkartu = validateFieldNotEmpty($requestData, 'nomorkartu');
        $nik = validateFieldNotEmpty($requestData, 'nik');
        $nomorkk = validateFieldNotEmpty($requestData, 'nomorkk');
        $nama = validateFieldNotEmpty($requestData, 'nama');
        $jeniskelamin = validateFieldNotEmpty($requestData, 'jeniskelamin');
        $tanggallahir = validateFieldNotEmpty($requestData, 'tanggallahir');
        $nohp = validateFieldNotEmpty($requestData, 'nohp');
        $alamat = validateFieldNotEmpty($requestData, 'alamat');
        $kodeprop = validateFieldNotEmpty($requestData, 'kodeprop');
        $namaprop = validateFieldNotEmpty($requestData, 'namaprop');
        $kodedati2 = validateFieldNotEmpty($requestData, 'kodedati2');
        $namadati2 = validateFieldNotEmpty($requestData, 'namadati2');
        $kodekec = validateFieldNotEmpty($requestData, 'kodekec');
        $namakec = validateFieldNotEmpty($requestData, 'namakec');
        $kodekel = validateFieldNotEmpty($requestData, 'kodekel');
        $namakel = validateFieldNotEmpty($requestData, 'namakel');
        $rt = validateFieldNotEmpty($requestData, 'rt');
        $rw = validateFieldNotEmpty($requestData, 'rw');

        $waktu = time();

        // Validasi Format Nomor Kartu Tidak Sesuai (Hanya Numeric) dan <> 13 digit
        // Periksa panjangnya harus 13 digit
        if (preg_match('/^[0-9]+$/', $nomorkartu) && strlen($nomorkartu) !== 13) {
            http_response_code(201); // Bad Request
            echo json_encode(["metadata" => ["message" => "Format Nomor Kartu Tidak Sesuai", "code" => 201]]);
            exit; // Exit the script                
        }

        // Validasi Format NIK Tidak Sesuai (Hanya Numeric) dan <> 16 digit
        // Periksa panjangnya harus 16 digit
        if (preg_match('/^[0-9]+$/', $nik) && strlen($nik) !== 16) {
            http_response_code(201); // Bad Request
            echo json_encode(["metadata" => ["message" => "Format NIK Tidak Sesuai", "code" => 201]]);
            exit; // Exit the script                
        }

        try {
            $tanggallahirDatetime = new DateTime($tanggallahir);

            // Check if the date is a backdate (date in the past)
            $currentDate = new DateTime();
            if ($tanggallahirDatetime > $currentDate) {
                // Backdate detected
                http_response_code(201); // Bad Request
                echo json_encode(["metadata" => ["message" => "Format Tanggal Lahir Tidak Sesuai", "code" => 201]]);
                exit; // Exit the script
            }
            // If no exception is thrown, the date format is valid
        } catch (Exception $e) {
            // Invalid date format
            http_response_code(201); // Bad Request
            echo json_encode(["metadata" => ["message" => "Format Tanggal Lahir Tidak Sesuai", "code" => 201]]);
            exit; // Exit the script
        }

        $sql = "SELECT * FROM pasien WHERE nik = :nik AND nomor_kartu = :nomorkartu AND nomor_kk = :nomorkk";
        $params = [
            ':nik' => $nik,
            ':nomorkartu' => $nomorkartu,
            ':nomorkk' => $nomorkk,
        ];

        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            echo json_encode(["metadata" => ["message" => "Data Peserta Sudah Pernah Dientrikan", "code" => 201]]);
            exit; // Exit the script
        }

        $norm = generateUniqueNRM();

        $uid = md5($norm);

        $sql = "INSERT INTO pasien (uid_pasien, nomor_rm, nik, nama_pasien, nomor_kartu, nomor_kk, gender, tanggal_lahir, no_handphone, alamat, kodeprop, namaprop, kodedati2, namadati2, kodekec, namakec, kodekel, namakel, rw, rt)
        VALUES (:uid_pasien, :nomor_rm, :nik, :nama, :nomorkartu, :nomorkk, :jeniskelamin, :tanggallahir, :nohp, :alamat, :kodeprop, :namaprop, :kodedati2, :namadati2, :kodekec, :namakec, :kodekel, :namakel, :rw, :rt)";
        $params = [
            'uid_pasien' => $uid,
            'nomor_rm' => $norm,
            'nik' => $nik,
            'nama' => $nama,
            'nomorkartu' => $nomorkartu,
            'nomorkk' => $nomorkk,
            'jeniskelamin' => $jeniskelamin,
            'tanggallahir' => $tanggallahir,
            'nohp' => $nohp,
            'alamat' => $alamat,
            'kodeprop' => $kodeprop,
            'namaprop' => $namaprop,
            'kodedati2' => $kodedati2,
            'namadati2' => $namadati2,
            'kodekec' => $kodekec,
            'namakec' => $namakec,
            'kodekel' => $kodekel,
            'namakel' => $namakel,
            'rw' => $rw,
            'rt' => $rt,
        ];

        $result = executeQuery($connection, $sql, $params);
        if ($result) {
            $response = [
                "response" => [
                    "norm" => $norm
                ],
                "metadata" => [
                    "message" => "Harap datang ke admisi untuk melengkapi data rekam medis",
                    "code" => 200
                ]
            ];
            // Send the JSON response
            echo json_encode($response);
            exit;
        }
        $response = [
            "metadata" => [
                "message" => "Terjadi kesalahan ketika memproses data",
                "code" => 201
            ]
        ];
        // Send the JSON response
        echo json_encode($response);
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
