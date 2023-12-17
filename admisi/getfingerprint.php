<?php
include 'fungsi.php';
require_once 'vendor/autoload.php';
$noKartu = $_GET['kode'];

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/SEP/FingerPrint/Peserta/" . $noKartu . "/TglPelayanan/" . $tanggal . "");
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


function stringDecrypt($key, $dtdecrypt){
    
    $encrypt_method = 'AES-256-CBC';

    // hash
    $key_hash = hex2bin(hash('sha256', $key));

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
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
$status = $uhuy->status;
echo "<script>alert('$status'); window.location = 'bpjs-pengajuan.php';</script>";

?>