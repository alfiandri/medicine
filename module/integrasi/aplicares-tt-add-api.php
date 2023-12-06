<?php
require '../../controller/base/integrasi.php';

$kodekelas = $_POST['kodekelas'];
$koderuang = $_POST['koderuang'];
$namaruang = $_POST['namaruang'];
$kapasitas = $_POST['kapasitas'];
$tersedia = $_POST['tersedia'];
$tersediapria = $_POST['tersediapria'];
$tersediawanita = $_POST['tersediawanita'];
$tersediapriawanita = $_POST['tersediapriawanita'];
$kodePpk = '0038R060';

// API Endpoint URL
$apiUrl = "$baseUrlAplicare/$serviceNameAplicare/rest/bed/create/$kodePpk";

$data = [
   "kodekelas" => $kodekelas,
   "koderuang" => $koderuang,
   "namaruang" => $namaruang,
   "kapasitas" => $kapasitas,
   "tersedia" => $tersedia,
   "tersediapria" => $tersediapria,
   "tersediawanita" => $tersediawanita,
   "tersediapriawanita" => $tersediapriawanita,
];

$response = post($apiUrl, $data, $consIdAplicare, $secretKeyAplicare, $userKeyAplicare);

$jsonData = json_decode($response[0], true);

// Check if metadata->code is equal to 1
if (isset($jsonData['metadata']['code'])) {
   // The API response is successful, you can access the response data
   $message = $jsonData['metadata']['message'];

   if ($jsonData['metadata']['code'] == 1) {
      echo " <script>alert ('$message');
   document.location='../integrasi/aplicares-tt'</script>";
      exit;
   } else {
      echo " <script>alert ('$message');
   document.location='../integrasi/aplicares-tt-add'</script>";
      exit;
   }
}
echo " <script>alert ('Terjadi kesalahan');
document.location='../module/integrasi/aplicares-tt'</script>";
exit;
