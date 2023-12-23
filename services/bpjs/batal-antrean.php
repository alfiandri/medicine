<?php
require_once '../../variable.php';
require_once '../../curl.php';
require_once '../../decrypt.php';

// API Endpoint URL
$apiUrl = "$baseUrl/$serviceNameAntrean/antrean/batal";

$data = [
    "kodebooking" => "16032021A001",
    "keterangan" => "Terjadi perubahan jadwal dokter, silahkan daftar kembali",
];
$response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

// Initialize an empty HTML string
$html = '';
$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);

// Check if metadata->code is equal to 1
if (isset($jsonData['metadata']['code']) && $jsonData['metadata']['code'] == 200) {
    $html = 'Antrean have been canceled.';
} else {
    $html = 'Error from the API.';
}
echo $html;
