<?php
require_once '../../variable.php';
require_once '../../curl.php';
require_once '../../decrypt.php';

// API Endpoint URL
$apiUrl = "$baseUrl/$serviceNameAntrean/jadwaldokter/updatejadwaldokter";

$data = [
    "kodepoli" => "ANA",
    "kodesubspesialis" => "ANA",
    "kodedokter" => 30195,
    "jadwal" => [
        [
            "hari" => "2",
            "buka" => "08:00",
            "tutup" => "16:00"
        ],
        [
            "hari" => "3",
            "buka" => "15:00",
            "tutup" => "17:00"
        ]
    ]
];
$response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

// Initialize an empty HTML string
$html = '';
$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);

// Check if metadata->code is equal to 1
if (isset($jsonData['metadata']['code'])) {
    if ($jsonData['metadata']['code'] == 200) {
        $html = 'Jadwal Dokter have been updated.';
    }

    if ($jsonData['metadata']['code'] == 201) {
        $html = $jsonData['metadata']['message'];
    }
} else {
    $html = 'Error from the API.';
}
echo $html;
