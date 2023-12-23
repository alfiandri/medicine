<?php
require_once '../../variable.php';
require_once '../../curl.php';
require_once '../../decrypt.php';

// API Endpoint URL
$apiUrl = "$baseUrl/$serviceNameAntrean/antrean/updatewaktu";

$data = [
    "kodebooking" => "16942565831",
    "taskid" => 5,
    "waktu" => 1616559330000,
    "jenisresep" => "Racikan"
];
$response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

// Initialize an empty HTML string
$html = '';
$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);

// Check if metadata->code is equal to 1
if (isset($jsonData['metadata']['code'])) {
    if ($jsonData['metadata']['code'] == 200) {
        $html = 'Antrean have been updated.';
    }
    if ($jsonData['metadata']['code'] == 201) {
        $html = $jsonData['metadata']['message'];
    }
} else {
    $html = 'Error from the API.';
}
echo $html;
