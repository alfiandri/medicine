<?php
require '../../controller/base/integrasi.php';

$param = $_POST['param'];
$kodedokter = $_POST['kodedokter'];

// API Endpoint URL
$apiUrl = "$baseUrlIcare/$serviceNameIcare/api/rs/validate";

$data = [
    "param" => $param,
    "kodedokter" => intval($kodedokter),
];

$contentType = 'application/json';
$response = post($apiUrl, $data, $consIdIcare, $secretKeyIcare, $userKeyIcare, $contentType);

$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);

// Check if metadata->code is equal to 200
if (isset($jsonData['metaData']['code'])) {
    // The API response is successful, you can access the response data
    $responseData = $jsonData['response'];
    $key = $consId . $secretKey . $timeStamp;
    $responseData = decrypt($key, $responseData);
    $responseData = json_decode($responseData, true);
    $message = $jsonData['metaData']['message'];

    if ($jsonData['metaData']['code'] == 200) {
        $url = $responseData['url'];

        header("Location: $url", true, 301);
        exit;
    } else {
        echo " <script>alert ('$message');
   document.location='../integrasi/icare-rekam-medis'</script>";
        exit;
    }
}

echo " <script>alert ('Terjadi kesalahan');
document.location='../integrasi/icare-rekam-medis'</script>";
exit;
