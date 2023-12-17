<?php
error_reporting(E_ALL&~E_NOTICE);
require 'function.php';
require_once 'vendor/autoload.php';
include 'fungsi.php';
if($_POST['id'] == "ktp"){
    $url = "nik";
    $id = $_POST['noktp'];
    $pencarian = "KTP";
}else{
    $url = "nokartu";
    $id = $_POST['nokartu'];
    $pencarian = "BPJS";
}
$fullname = $_SESSION['namalengkap'];

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
"user_key: " .$userkey ." ",
"Content-Type:application/json"
 );
curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/Peserta/".$url."/" . $id . "/tglSEP/" . $tanggal . "");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_TIMEOUT, 3);
 curl_setopt($ch, CURLOPT_HTTPGET, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 $string = curl_exec($ch);
 $err = curl_error($ch);
 curl_close($ch);

 $key = $consid . $secretKey . $tStamp;
 $string = json_decode($string);
 $message = $string->metaData->message;
 $code = $string->metaData->code;
 $dtdecrypt = $string->response;
 if ($code!="200") {
    $response = [
        'success' => false,
        'message' => $message
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
 }else{

function stringDecrypt($key, $dtdecrypt){   
    $encrypt_method = 'AES-256-CBC';
    $key_hash = hex2bin(hash('sha256', $key));
    $iv = substr(hex2bin(hash('sha256', $key)), 0, 16);
    $output = openssl_decrypt(base64_decode($dtdecrypt), $encrypt_method, $key_hash, OPENSSL_RAW_DATA, $iv);
    return $output;
}
$aloha = stringDecrypt($key, $dtdecrypt);
function decompress($aloha){
    return \LZCompressor\LZString::decompressFromEncodedURIComponent($aloha);
}
$alihi = decompress($aloha);
$uhuy = json_decode($alihi);
if ($uhuy->peserta->sex=="L") {
    $jeniskelamin = "Pria";
    } else {
    $jeniskelamin = "Wanita";
    }
if ($uhuy->peserta->statusPeserta->kode=="0") {
    $warna = "success";
    } else {
    $warna = "danger";
    }
$response = [
        'success' => true,
        'message' => $message,
        'data'=> [
            'nama' => $uhuy->peserta->nama,
            'tgllahir' => $uhuy->peserta->tglLahir,
            'jeniskelamin' => $jeniskelamin,
            'jenislayanan' => $uhuy->peserta->hakKelas->keterangan,
            'umur' => $uhuy->peserta->umur->umurSekarang,
            'jenispeserta' => $uhuy->peserta->jenisPeserta->keterangan,
            'nokartu' => $uhuy->peserta->noKartu,
            'nik' => $uhuy->peserta->nik,
            'kdstatus' => $uhuy->peserta->statusPeserta->kode,
            'ketstatus' => $uhuy->peserta->statusPeserta->keterangan,
            'pencarian' => $pencarian
        ]
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
}