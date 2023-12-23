<?php
require_once '../../../database.php';
require_once '../auth.php';
require_once '../../../function.php';
require_once '../../../variable.php';
require_once '../../../curl.php';
require_once '../../../decrypt.php';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Parse the JSON payload from the request
    $jsonPayload = file_get_contents('php://input');
    $requestData = json_decode($jsonPayload, true);

    // Check if the JSON payload was successfully parsed
    if ($requestData !== null) {
        // Check if the tanggalperiksa date format is valid
        $nomorkartu = $requestData['nomorkartu'] ?? null;
        $nik = validateFieldNotEmpty($requestData, 'nik');
        $nohp = validateFieldNotEmpty($requestData, 'nohp');
        $kodepoli = validateFieldNotEmpty($requestData, 'kodepoli');
        $norm = validateFieldNotEmpty($requestData, 'norm');
        $tanggalperiksa = validateFieldNotEmpty($requestData, 'tanggalperiksa');
        $kodedokter = validateFieldNotEmpty($requestData, 'kodedokter');
        $jampraktek = validateFieldNotEmpty($requestData, 'jampraktek');
        $jeniskunjungan = validateFieldNotEmpty($requestData, 'jeniskunjungan');
        $nomorreferensi = $requestData['nomorreferensi'] ?? null;

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

        try {
            $date = new DateTime($tanggalperiksa);
            // If no exception is thrown, the date format is valid
        } catch (Exception $e) {
            // Invalid date format
            echo json_encode(["metadata" => ["message" => "Format Tanggal Tidak Sesuai, format yang benar adalah yyyy-mm-dd", "code" => 201]]);
            exit; // Exit the script
        }

        // Nomor Antrean Hanya Dapat Diambil 1 Kali Pada Tanggal dan Poli Yang Sama
        $sql = "SELECT * FROM antrian_poli WHERE kodepoli = :kodepoli AND tanggalperiksa = :tanggalperiksa AND batal = :batal AND nik = :nik";
        $params = [
            ':kodepoli' => $kodepoli,
            ':tanggalperiksa' => $tanggalperiksa,
            ':batal' => 0,
            ':nik' => $nik,
        ];
        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            echo json_encode(["metadata" => ["message" => "Nomor Antrean Hanya Dapat Diambil 1 Kali Pada Tanggal dan Poli Yang Sama", "code" => 201]]);
            exit; // Exit the script                
        }

        // Check pendaftaran poli
        if ($poli['buka'] == 0) {
            echo json_encode(["metadata" => ["message" => "Pendaftaran ke Poli Ini Sedang Tutup", "code" => 201]]);
            exit; // Exit the script                
        }

        // check jadwal dokter di endpoint bpjs
        // API Endpoint URL
        $apiUrl = "$baseUrl/$serviceNameAntrean/jadwaldokter/kodepoli/$kodepoli/tanggal/$tanggalperiksa";

        $response = get($apiUrl, $consId, $secretKey, $userKeyAntrean);

        $timeStamp = $response[1];
        $jsonData = json_decode($response[0], true);

        // Check if metadata->code is equal to 1
        if (isset($jsonData['metadata']['code'])) {
            if ($jsonData['metadata']['code'] == 200) {
                // The API response is successful, you can access the response data
                $responseData = $jsonData['response'];
                $key = $consId . $secretKey . $timeStamp;
                $responseData = decrypt($key, $responseData);
                $listData = json_decode($responseData, true);

                $found = false;

                $explodejampraktek = explode('-', $jampraktek);

                $desiredStartTime = strtotime($explodejampraktek[0]);
                $desiredEndTime = strtotime($explodejampraktek[1]);

                foreach ($listData as $item) {
                    if ($item['kodedokter'] == $kodedokter) {

                        // Split the "jadwal" into start and end times
                        [$doctorStartTime, $doctorEndTime] = explode('-', $item['jadwal']);
                        $doctorStartTime = strtotime(trim($doctorStartTime));
                        $doctorEndTime = strtotime(trim($doctorEndTime));


                        if (($desiredStartTime < $doctorEndTime && $desiredEndTime > $doctorStartTime)) {
                            $found = true;
                            break;
                        }
                    }
                }
                if (!$found) {
                    echo json_encode(["metadata" => ["message" => "Jadwal {$dokter['namadokter']} Tersebut Belum Tersedia, Silahkan Reschedule Tanggal dan Jam Praktek Lainnya", "code" => 201]]);
                    exit; // Exit the script    
                }
            } else {
                echo json_encode(["metadata" => ["message" => "Jadwal {$dokter['namadokter']} Tersebut Belum Tersedia, Silahkan Reschedule Tanggal dan Jam Praktek Lainnya", "code" => 201]]);
                exit; // Exit the script    
            }
        }

        // Get the current time
        if ($poli['jam_tutup']) {
            date_default_timezone_set('Asia/Jakarta');

            $currentTime = date('Y-m-d H:i', time());

            $jam_tutup = date('Y-m-d H:i', strtotime($poli['jam_tutup']));
            $formattedJam = date('H:i', strtotime($jam_tutup));

            if ($currentTime > $jam_tutup) {
                echo json_encode(["metadata" => ["message" => "Pendaftaran Ke Poli {$poli['nmpoli']} Sudah Tutup Jam $formattedJam", "code" => 201]]);
                exit; // Exit the script                
            }
        }

        // Check if new pasien
        $sql = "SELECT * FROM pasien WHERE nik = :nik";
        $params = [
            ':nik' => $nik,
        ];
        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            echo json_encode(["metadata" => ["message" => "Data pasien ini tidak ditemukan, silahkan Melakukan Registrasi Pasien Baru", "code" => 202]]);
            exit; // Exit the script                
        }

        // get last antrean
        $sql = "SELECT * FROM antrian_poli WHERE kodepoli = :kodepoli AND tanggalperiksa = :tanggalperiksa ORDER BY nomor DESC  LIMIT 1";
        $params = [
            ':kodepoli' => $kodepoli,
            ':tanggalperiksa' => $tanggalperiksa,
        ];
        $result = executeQuery($connection, $sql, $params);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            $angkaantrean = 1;
            $tipe = $poli['kode_antri'];
        } else {
            $angkaantrean = ($row['nomor'] + 1);
            $tipe = $poli['kode_antri'];
        }

        $estimasidilayani = time() + 600;

        // kodebooking
        $date = date("Ymd");
        $prefix = $poli['kode_antri'];
        // Generate the kodebooking
        $kodebooking = $date . $prefix . sprintf('%04d', $angkaantrean);
        $keterangan = 'Peserta harap 60 menit lebih awal guna pencatatan administrasi.';

        $connection->beginTransaction();

        $sql = "INSERT INTO antrian_poli (kodebooking, nomor, tipe, nokartu, nik, kodepoli, tanggalperiksa, estimasi, sudah_dilayani, keterangan, kodedokter, jampraktek) 
        VALUES (:kodebooking, :nomor, :tipe, :nokartu, :nik, :kodepoli, :tanggalperiksa, :estimasidilayani, :sudah_dilayani, :keterangan, :kodedokter, :jampraktek)";

        // Your array of parameters
        $params = [
            ':kodebooking' => $kodebooking,
            ':nomor' => $angkaantrean,
            ':tipe' => $tipe,
            ':nokartu' => $nomorkartu,
            ':nik' => $nik,
            ':kodepoli' => $kodepoli,
            ':tanggalperiksa' => $tanggalperiksa,
            ':estimasidilayani' => $estimasidilayani,
            ':sudah_dilayani' => 0,
            ':keterangan' => $keterangan,
            ':kodedokter' => $kodedokter,
            ':jampraktek' => $jampraktek,
        ];

        $result = executeQuery($connection, $sql, $params);
        if ($result) {
            $kuotajkn = $poli['kuotajkn'];
            $sisakuotajkn = $kuotajkn;
            $kuotanonjkn = $poli['kuotanonjkn'];
            $sisakuotanonjkn = $kuotanonjkn;

            // get sisa kuota jkn
            $sql = "SELECT COUNT(*) as count FROM antrian_poli WHERE kodepoli = :kodepoli AND tanggalperiksa = :tanggalperiksa AND batal = 0 AND sudah_dilayani = 0 AND nokartu is not null";
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

            // hit tambah antrian bpjs
            // API Endpoint URL
            $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/add";

            $jenispasien = 'NON JKN';
            if (!empty($nomorkartu)) {
                $jenispasien = 'JKN';
            }
            $nomorantrean = $tipe . '-' . $angkaantrean;
            $data = [
                "kodebooking" => $kodebooking,
                "jenispasien" => $jenispasien,
                "nomorkartu" => $nomorkartu,
                "nik" => $nik,
                "nohp" => $nohp,
                "kodepoli" => $kodepoli,
                "namapoli" => $poli['nmpoli'],
                "pasienbaru" => 0,
                "norm" => $norm,
                "tanggalperiksa" => $tanggalperiksa,
                "kodedokter" => $kodedokter,
                "namadokter" => $dokter['nama'],
                "jampraktek" => $jampraktek,
                "jeniskunjungan" => $jeniskunjungan,
                "nomorreferensi" => $nomorreferensi,
                "nomorantrean" => $nomorantrean,
                "angkaantrean" => $angkaantrean,
                "estimasidilayani" => strtotime($tanggalperiksa),
                "sisakuotajkn" => $sisakuotajkn,
                "kuotajkn" => $kuotajkn,
                "sisakuotanonjkn" => $sisakuotanonjkn,
                "kuotanonjkn" => $kuotajkn,
                "keterangan" => $keterangan,
            ];
            $response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

            $timeStamp = $response[1];
            $jsonData = json_decode($response[0], true);

            // Check if metadata->code is equal to 1
            if (isset($jsonData['metadata']['code'])) {
                if ($jsonData['metadata']['code'] != 200) {
                    $connection->rollBack();
                    http_response_code(400); // Bad Request
                    echo json_encode(["metadata" => ["message" => $jsonData['metadata']['message'], "code" => 400]]);
                    exit;
                }
            } else {
                $connection->rollBack();
                http_response_code(400); // Bad Request
                echo json_encode(["metadata" => ["message" => "Failed to ambil antrean, please contact IT", "code" => 400]]);
                exit;
            }

            // tambah task id
            $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/updatewaktu";

            $data = [
                "kodebooking" => $kodebooking,
                "taskid" => 3,
                "waktu" => microtime(true) * 1000,
            ];
            $response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);
            // echo $response[0];

            $response = [
                "response" => [
                    "nomorantrean" => $nomorantrean,
                    "angkaantrean" => $angkaantrean,
                    "kodebooking" => $kodebooking,
                    "norm" => $norm,
                    "namapoli" => $poli['nmpoli'],
                    "namadokter" => $dokter['nama'],
                    "estimasidilayani" => $estimasidilayani,
                    "sisakuotajkn" => $sisakuotajkn,
                    "kuotajkn" => $kuotajkn,
                    "sisakuotanonjkn" => $sisakuotanonjkn,
                    "kuotanonjkn" => $kuotanonjkn,
                    "keterangan" => $keterangan,
                ],
                "metadata" => [
                    "message" => "Ok",
                    "code" => 200
                ]
            ];

            $connection->commit();

            // Send the JSON response
            echo json_encode($response);
            exit;
        }
        http_response_code(400); // Bad Request
        echo json_encode(["metadata" => ["message" => "Failed to ambil antrean, please contact IT", "code" => 400]]);
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
