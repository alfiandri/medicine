<?php
require __DIR__ . '/../../db/connect.php';
require __DIR__ . '/../../controller/base/integrasi.php';
header('Content-Type: application/json');

$nokartu = @$_POST['nokartu'];
$nobpjs = @$_POST['nobpjs'];
$tglsep = @$_POST['tglsep'];

if (!$tglsep) {
   echo json_encode([
      'metadata' => [
         'code' => 201,
         'message' => 'Tanggal SEP harus diisi untuk pencarian data'
      ],
   ]);
   exit;
}

$peserta = [];
if ($nokartu) {
   $apiUrl = "$baseUrl/$serviceNameVclaim/Peserta/nik/$nokartu/tglSEP/$tglsep";
} else {
   $apiUrl = "$baseUrl/$serviceNameVclaim/Peserta/nokartu/$nobpjs/tglSEP/$tglsep";
}
$response = get($apiUrl, $consIdVclaim, $secretKeyVclaim, $userKeyVclaim);

$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);
// Check if metaData->code is equal to 1
if (isset($jsonData['metaData']['code']) && $jsonData['metaData']['code'] == 200) {
   $responseData = $jsonData['response'];
   $key = $consIdVclaim . $secretKeyVclaim . $timeStamp;
    $responseData = decrypt($key, $responseData);
   $listData = json_decode($responseData, true)['peserta'];

   $peserta = [
      'sebutan' => $listData['sex'] == 'P' ? 'Ny' : 'Tn',
      'gender' => $listData['sex'] == 'P' ? 'Perempuan' : 'Laki Laki',
      'nama' => $listData['nama'],
      'nokartu' => $listData['nik'],
      'nobpjs' => $listData['noKartu'],
      'tanggallahir' => $listData['tglLahir'],
   ];
}

if(empty($peserta)) {
   echo json_encode([
      'metadata' => [
         'code' => 201,
         'message' => 'Data tidak ditemukan'
      ],
   ]);
   exit;
   
}

echo json_encode([
   'metadata' => [
      'code' => 200,
      'message' => 'Ok'
   ],
   'data' => $peserta
]);
exit;
