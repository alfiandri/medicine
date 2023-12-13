<?php
date_default_timezone_set('Asia/Jakarta');
require '../../controller/base/integrasi.php';
$kodePoli = 'ANA';
// $tanggal = date('Y-m-d');
$tanggal = '2023-12-08';
// API Endpoint URL
$apiUrl = "$baseUrl/$serviceNameAntrean/jadwaldokter/kodepoli/$kodePoli/tanggal/$tanggal";

$response = get($apiUrl, $consId, $secretKey, $userKeyAntrean);

// Initialize an empty HTML string
$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);

// Check if metadata->code is equal to 1
if (isset($jsonData['metadata']['code']) && $jsonData['metadata']['code'] == 200) {
   // The API response is successful, you can access the response data
   $responseData = $jsonData['response'];
   $key = $consId . $secretKey . $timeStamp;
   $responseData = decrypt($key, $responseData);

   echo $responseData;
   exit;
}
echo json_encode([]);
exit;
