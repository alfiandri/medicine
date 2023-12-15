<?php
require '../../db/connect.php';
require '../../controller/base/integrasi.php';
header('Content-Type: application/json');

$tipe = @$_POST['tipe']; //1 KTP, 2 BPJS
$nomor = $_POST['nomor'];

// $nomor = $_GET['nomor'];
// $tipe = @$_GET['tipe']; //1 KTP, 2 BPJS

if ($tipe == 1) {
    $checkdata = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nik='$nomor'");
    $getdata = mysqli_fetch_array($checkdata);
} else {
    $checkdata = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nomor_kartu='$nomor'");
    $getdata = mysqli_fetch_array($checkdata);
}

if ($getdata == NULL) {
    $tipe = $_POST['tipe'] == 1 ? 'KTP' : 'BPJS';
    echo json_encode([
        'metadata' => [
            'code' => 201,
            'message' => "Nomor $tipe tidak ditemukan."
        ]
    ]);
    exit;
}
$nomor = @$getdata['nomor_kartu'];

$rujukan = [];

$apiUrl = "$baseUrl/$serviceNameVclaim/Rujukan/List/Peserta/$nomor";
$response = get($apiUrl, $consIdVclaim, $secretKeyVclaim, $userKeyVclaim);

$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);
// Check if metaData->code is equal to 1
if (isset($jsonData['metaData']['code']) && $jsonData['metaData']['code'] == 200) {
    $responseData = $jsonData['response'];
    $key = $consIdVclaim . $secretKeyVclaim . $timeStamp;
    $responseData = decrypt($key, $responseData);
    $listData = json_decode($responseData, true);

    foreach ($listData['rujukan'] as $row) {
        $rujukan[] = [
            'no_kunjungan' => $row['noKunjungan'],
            'jenis_rujukan' => $row['pelayanan']['nama'],
            'nama_rs' => $row['peserta']['provUmum']['nmProvider'],
            'no_kartu' => $row['peserta']['noKartu'],
            'nik' => $row['peserta']['nik'],
            'tgl_rujukan' => $row['tglKunjungan'],
            'nama_poli' => $row['poliRujukan']['nama'],
            'kode_poli' => $row['poliRujukan']['kode'],
            'jeniskunjungan' => $row['pelayanan']['kode'],
        ];
    }
}

$apiUrl = "$baseUrl/$serviceNameVclaim/Rujukan/RS/List/Peserta/$nomor";
$response = get($apiUrl, $consIdVclaim, $secretKeyVclaim, $userKeyVclaim);

$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);
// Check if metaData->code is equal to 1
if (isset($jsonData['metaData']['code']) && $jsonData['metaData']['code'] == 200) {
    $responseData = $jsonData['response'];
    $key = $consIdVclaim . $secretKeyVclaim . $timeStamp;
    $responseData = decrypt($key, $responseData);
    $listData = json_decode($responseData, true);

    foreach ($listData['rujukan'] as $row) {
        $rujukan[] = [
            'no_kunjungan' => $row['noKunjungan'],
            'jenis_rujukan' => $row['pelayanan']['nama'],
            'nama_rs' => $row['peserta']['provUmum']['nmProvider'],
            'no_kartu' => $row['peserta']['noKartu'],
            'nik' => $row['peserta']['nik'],
            'tgl_rujukan' => $row['tglKunjungan'],
            'nama_poli' => $row['poliRujukan']['nama'],
            'kode_poli' => $row['poliRujukan']['kode'],
            'jeniskunjungan' => $row['pelayanan']['kode'],
        ];
    }
}
echo json_encode([
    'metadata' => [
        'code' => 200,
        'message' => 'Ok'
    ],
    'data' => $rujukan
]);
exit;
