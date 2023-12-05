<?php
include 'connect.php';
include 'fungsi.php';
require 'function.php';
require_once 'vendor/autoload.php';
$skontrol = $_GET['kode'];
$id_nama = $_SESSION['nama'];

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
 );

$arr = array("request"=>
array("t_suratkontrol"=>
    array(
            "noSuratKontrol"=>"$skontrol",
            "user"=>"$id_nama"
        )   
    ),
);

$json = json_encode($arr);

 curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/RencanaKontrol/Delete");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
 curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_TIMEOUT, 3);

 $string = curl_exec($ch);
 $err = curl_error($ch);
 curl_close($ch);

 $key = $consid . $secretKey . $tStamp;
 $string = json_decode($string);
 $dtdecrypt = $string->response;
 $message = $string->metaData->message;
 $code = $string->metaData->code;
 if ($code!="200") {
    echo "<script>alert('$message'); window.location='data_insert_surat_kontrol.php';</script>";
 }

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

$userid = $_SESSION['iduser'];
$username = $_SESSION['username'];
$fullname = $_SESSION['namalengkap'];
$aktivitas = "Delete";
$objek = "Rencana Kontrol";
$keterangan = $_GET['kode'];

if ($code=="200") {

    $sql = ("DELETE FROM t_skontrol WHERE noSuratKontrol='$_GET[kode]'");
    $sql2 = ("INSERT INTO t_loguser(id,userid,username,fullname,aktivitas,objek,keterangan,tanggal) VALUES('','$userid','$username','$fullname','$aktivitas','$objek','$keterangan',NOW())");

    if (mysqli_query($mysqli, $sql) && mysqli_query($mysqli, $sql2))  
    {  
      echo "<script type='text/javascript'> document.location='data_insert_surat_kontrol.php?kd=hpssukses';</script>";
    } else {
        echo "<script type='text/javascript'> document.location='data_insert_surat_kontrol.php?kd=hpsgagal';</script>";
    }
  
  }

?>