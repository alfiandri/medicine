<?php

include 'fungsi.php';
$curl = curl_init();
require_once 'vendor/autoload.php';

$a = "1206061307000001";


curl_setopt_array($curl, array(
    CURLOPT_URL => "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Peserta/nik/" . $a . "/tglSEP/" . $tanggal . "",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'X-cons-id: '.$consid .'',
        'X-timestamp: '.$tStamp.'',
        'X-signature: '.$encodedSignature.'',
        'user_key: '.$userkey.'',
        'Content-Type:application/json'
    ),
));

$string = curl_exec($curl);

curl_close($curl);
// echo $string;

function stringDecrypt($key, $dtdecrypt){   
    $encrypt_method = 'AES-256-CBC';
    $key_hash = hex2bin(hash('sha256', $key));
    $iv = substr(hex2bin(hash('sha256', $key)), 0, 16);
    $output = openssl_decrypt(base64_decode($dtdecrypt), $encrypt_method, $key_hash, OPENSSL_RAW_DATA, $iv);
    return $output;
}
function decompress($string){
    return \LZCompressor\LZString::decompressFromEncodedURIComponent($string);
}

$key = $consid . $secretKey . $tStamp;
$string = json_decode($string);
$message = $string->metaData->message;
$code = $string->metaData->code;
$dtdecrypt = $string->response;

$hasil = decompress(stringDecrypt($key, $dtdecrypt));
$hasil_akhir = json_decode($hasil);
$nama = $hasil_akhir->peserta->nama;
echo $hasil;