<?php
require '../../controller/base/integrasi.php';

$kodekelas = $_POST['kodekelas'];
$koderuang = $_POST['koderuang'];
$kodePpk = '0038R060';

// API Endpoint URL
$apiUrl = "$baseUrlAplicare/$serviceNameAplicare/rest/bed/delete/$kodePpk";

$data = [
   "kodekelas" => $kodekelas,
   "koderuang" => $koderuang,
];

$response = post($apiUrl, $data, $consIdAplicare, $secretKeyAplicare, $userKeyAplicare);

$jsonData = json_decode($response[0], true);

// Check if metadata->code is equal to 1
if (isset($jsonData['metadata']['code'])) {
   // The API response is successful, you can access the response data
   $message = $jsonData['metadata']['message'];
      echo " <script>alert ('$message');
   document.location='../integrasi/aplicares-tt'</script>";
      exit;
}
echo " <script>alert ('Terjadi kesalahan');
document.location='../integrasi/aplicares-tt'</script>";
exit;