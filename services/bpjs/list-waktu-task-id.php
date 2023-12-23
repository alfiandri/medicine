<?php
require_once '../../variable.php';
require_once '../../curl.php';
require_once '../../decrypt.php';

// API Endpoint URL
$apiUrl = "$baseUrl/$serviceNameAntrean/antrean/getlisttask";

$data = [
    "kodebooking" => "16942565831",
];
$response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

// Initialize an empty HTML string
$html = '';
$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);

// Check if metadata->code is equal to 1
if (isset($jsonData['metadata']['code'])) {
    if ($jsonData['metadata']['code'] == 204) {
        $html .= 'Tidak ada data';
    }
    if ($jsonData['metadata']['code'] == 200) {
    // The API response is successful, you can access the response data
    $responseData = $jsonData['response'];

    $key = $consId . $secretKey . $timeStamp;
    $responseData = decrypt($key, $responseData);
    $listData = json_decode($responseData, true);

    // Generate HTML for the list of items
    $html .= '<ul>';
    foreach ($listData as $item) {
        $html .= '<li>';
        $html .= 'Waktu RS: ' . $item['wakturs'] . '<br>';
        $html .= 'Waktu: ' . $item['waktu'] . '<br>';
        $html .= 'Taskname: ' . $item['taskname'] . '<br>';
        $html .= 'Task Id: ' . $item['taskid'] . '<br>';
        $html .= 'Kode Booking: ' . $item['kodebooking'] . '<br>';
        $html .= '</li>';
    }
    $html .= '</ul>';
}
} else {
    $html = 'Error from the API.';
}
echo $html;
