<?php
error_reporting(E_ALL & ~E_NOTICE);
include 'fungsi.php';
require_once 'vendor/autoload.php';
$id = $_POST['no'];
if ($_POST['id'] == "0") {
    $url = "RS";
} else {
    $url = "RS/Peserta";
}

$ch = curl_init();
$headers = array(
    'X-cons-id: ' . $consid . '',
    'X-timestamp: ' . $tStamp . '',
    'X-signature: ' . $encodedSignature . '',
    'user_key: ' . $userkey . '',
    'Content-Type:application/json'
);
curl_setopt($ch, CURLOPT_URL, "" . $base_url . "/" . $service . "/Rujukan/" . $url . "/" . $id . "");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 3);
curl_setopt($ch, CURLOPT_HTTPGET, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$string = curl_exec($ch);
$err = curl_error($ch);
curl_close($ch);
//print_r($string);

$key = $consid . $secretKey . $tStamp;
$string = json_decode($string);
$dtdecrypt = $string->response;
$message = $string->metaData->message;
$code = $string->metaData->code;

function stringDecrypt($key, $dtdecrypt)
{
    $encrypt_method = 'AES-256-CBC';
    $key_hash = hex2bin(hash('sha256', $key));
    $iv = substr(hex2bin(hash('sha256', $key)), 0, 16);
    $output = openssl_decrypt(base64_decode($dtdecrypt), $encrypt_method, $key_hash, OPENSSL_RAW_DATA, $iv);
    return $output;
}

$aloha = stringDecrypt($key, $dtdecrypt);
function decompress($aloha)
{
    return \LZCompressor\LZString::decompressFromEncodedURIComponent($aloha);
}

$alihi = decompress($aloha);
//echo $alihi;
$uhuy = json_decode($alihi);

if ($uhuy->rujukan->peserta->sex == "L") {
    $jenis_kelamin = "Pria";
} else {
    $jenis_kelamin = "Wanita";
}
if ($uhuy->asalFaskes == "1") {
    $asalfaskes = "Faskes Tingkat I";
}
if ($uhuy->asalFaskes == "2") {
    $asalfaskes = "Faskes Tingkat II";
}
if ($uhuy->rujukan->peserta->statusPeserta->keterangan == "AKTIF") {
    $warna = "green";
} else {
    $warna = "red";
}
$notelp = $uhuy->rujukan->peserta->mr->noTelepon;
if ($notelp == "") {
    $notelp = "-";
}
$noMR = $uhuy->rujukan->peserta->mr->noMR;
if ($noMR == "") {
    $noMR = "-";
}
$keluhan = $uhuy->rujukan->keluhan;
if ($keluhan == "") {
    $keluhan = "-";
}

if ($code != "200") {
    $response = [
        'success' => false,
        'message' => $message,
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
} else {

    include '../db/connect.php';
    $admin = $koneksi->query("SELECT * FROM pasien WHERE nik='$nik'");
    $n = mysqli_fetch_array($admin);
    $norm = $n['nomorrm'];

    $response = [
        'success' => true,
        'message' => $message,
        'peserta' => [
            'nama' => $uhuy->rujukan->peserta->nama,
            'nokartu' => $uhuy->rujukan->peserta->noKartu,
            'asalrujuk' => $asalfaskes,
            'asalrujukkode' => $uhuy->asalFaskes,
            'tglkunjung' => $uhuy->rujukan->tglKunjungan,
            'norujuk' => $uhuy->rujukan->noKunjungan,
            'kdfaskesrujukan' => $uhuy->rujukan->provPerujuk->kode,
            'nmfaskesrujukan' => $uhuy->rujukan->provPerujuk->nama,
            'politujuan' => $uhuy->rujukan->poliRujukan->kode,
            'jenispelayanan' => $uhuy->rujukan->pelayanan->nama,
            'jenispelayanankode' => $uhuy->rujukan->pelayanan->kode,
            'kddiagawal' => $uhuy->rujukan->diagnosa->kode,
            'notelp' => $notelp,
            'sex' => $jenis_kelamin,
            'statuspeserta' => $uhuy->rujukan->peserta->statusPeserta->keterangan,
            'noMR' => $noMR,
            'kelasrawathak' => $uhuy->rujukan->peserta->hakKelas->kode,
            'nik' => $uhuy->rujukan->peserta->nik,
            'keluhan' => $keluhan,
            'pisa' => $uhuy->rujukan->peserta->pisa,
            'tgllahir' => $uhuy->rujukan->peserta->tglLahir,
            'jnspeserta' => $uhuy->rujukan->peserta->jenisPeserta->keterangan,
            'norm' => $norm,
            'nokunjung' => $uhuy->rujukan->noKunjungan,
            'kodeproum' => $uhuy->rujukan->peserta->provUmum->kdProvider,
            'namaproum' => $uhuy->rujukan->peserta->provUmum->nmProvider,
            'ndiagnosa' => $uhuy->rujukan->diagnosa->nama,
            'ndiagnosakode' => $uhuy->rujukan->diagnosa->kode,
            'namapoli' => $uhuy->rujukan->poliRujukan->nama,
        ]
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
}
