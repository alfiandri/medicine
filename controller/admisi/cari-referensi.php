<?php
require __DIR__ . '/../../db/connect.php';
require __DIR__ . '/../../controller/base/integrasi.php';
header('Content-Type: application/json');

$nomorreferensi = @$_POST['nomorreferensi'];

$peserta = [];
if ($nomorreferensi) {
   $apiUrl = "$baseUrl/$serviceNameVclaim/Rujukan/$nomorreferensi";
   $apiUrl = "$baseUrl/$serviceNameVclaim/Rujukan/List/Peserta/0002071670095";
} else {
   echo json_encode([
      'metadata' => [
         'code' => 201,
         'message' => 'Nomor rujukan harus diisi'
      ],
   ]);
   exit;
}
$response = get($apiUrl, $consIdVclaim, $secretKeyVclaim, $userKeyVclaim);

$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);

if (isset($jsonData['metaData']['code'])) {
   if ($jsonData['metaData']['code'] == 200) {
      $responseData = $jsonData['response'];
      $key = $consIdVclaim . $secretKeyVclaim . $timeStamp;
      $responseData = decrypt($key, $responseData);
      $listData = json_decode($responseData, true)['rujukan'][0];

      $peserta = [
         'jenislayanan' => 'Poliklinik',
         'jenisbayar' => 'BPJS Kesehatan',
         'layanan' => $listData['poliRujukan']['kode'],
      ];
   } else {
      echo json_encode([
         'metadata' => [
            'code' => $jsonData['metaData']['code'],
            'message' => $jsonData['metaData']['message']
         ],
      ]);
      exit;
   }
}

if (empty($peserta)) {
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
