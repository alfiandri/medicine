<?php
require_once '../../variable.php';
require_once '../../curl.php';
require_once '../../decrypt.php';

// API Endpoint URL
$apiUrl = "$baseUrl/$serviceNameAntrean/antrean/add";

$tanggalPeriksa = '2023-09-19';
$unixTanggal = strtotime($tanggalPeriksa);
$data = [
    "kodebooking" => "16032021A001",
    "jenispasien" => "NON JKN",
    "nomorkartu" => "",
    "nik" => "3212345678987654",
    "nohp" => "085635228888",
    "kodepoli" => "ANA",
    "namapoli" => "Anak",
    "pasienbaru" => 0,
    "norm" => "123345",
    "tanggalperiksa" => $tanggalPeriksa,
    "kodedokter" => 30195,
    "namadokter" => "Tenaga Medis 3780",
    "jampraktek" => "08:00-16:00",
    "jeniskunjungan" => 1,
    "nomorreferensi" => "0001R0040116A000001",
    "nomorantrean" => "A-1",
    "angkaantrean" => 1,
    "estimasidilayani" => $unixTanggal,
    "sisakuotajkn" => 5,
    "kuotajkn" => 30,
    "sisakuotanonjkn" => 5,
    "kuotanonjkn" => 30,
    "keterangan" => "Peserta harap 30 menit lebih awal guna pencatatan administrasi."
];
$response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);
// Initialize an empty HTML string
$html = '';
$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);

// Check if metadata->code is equal to 1
if (isset($jsonData['metadata']['code'])) {
    if ($jsonData['metadata']['code'] == 200) {
        $html = 'Antrean have been added.';
    } else {
        // if ($jsonData['metadata']['code'] == 201) {
        $html = $jsonData['metadata']['message'];
    }
} else {
    $html = 'Error from the API.';
}
echo $html;
