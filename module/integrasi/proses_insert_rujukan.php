<?php
include 'fungsi.php';
include 'connect.php';
require_once 'vendor/autoload.php';

$noSep = $_POST['noSep'];
$tglRujukan = $_POST['tglRujukan'];
$tglRencanaKunjungan = $_POST['tglRencanaKunjungan'];
$ppkDirujuk = $_POST['ppkDirujuk'];
$jnsPelayanan = $_POST['jnsPelayanan'];
$catatan = $_POST['catatan'];
$diagRujukan = $_POST['diagRujukan'];
$tipeRujukan = $_POST['tipeRujukan'];
$poliRujukan = $_POST['poliRujukan'];
$user = $_POST['user'];

if($tglRencanaKunjungan < date('Y-m-d')){
  echo "<script>alert('Tanggal Tidak Boleh Lebih Kecil Dari Sekarang'); window.history.go(-1);</script>";
}

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
 );

 $arr = array("request"=>
  array("t_rujukan"=>
      array(
             "noSep"=>"$noSep",
             "tglRujukan"=>"$tglRujukan",
             "tglRencanaKunjungan"=>"$tglRencanaKunjungan",
             "ppkDirujuk"=>"$ppkDirujuk",
             "jnsPelayanan"=>"$jnsPelayanan",
             "catatan"=>"$catatan",
             "diagRujukan"=>"$diagRujukan",
             "tipeRujukan"=>"$tipeRujukan",
             "poliRujukan"=>"$poliRujukan",
             "user"=>"$user"
            )
        ),
    );
 
 $json = json_encode($arr);

 curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Rujukan/2.0/insert");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_TIMEOUT, 3);

 $string = curl_exec($ch);
 $err = curl_error($ch);
 curl_close($ch);
 //print_r($string);

 $key = $consid . $secretKey . $tStamp;
 $string = json_decode($string);
 $message = $string->metaData->message;
 $code = $string->metaData->code;
 $dtdecrypt = $string->response;
 if ($code!="200") {
    echo "<script>alert('$code - $message'); window.location = 'data_sep.php';</script>";
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
echo $alihi;
$uhuy = json_decode($alihi);
$norujukan = $uhuy->rujukan->noRujukan;

if ($code=="200") {

$sql = ("INSERT INTO t_rujukan(id,noRujukan,noSep,tglRujukan,tglRencanaKunjungan,ppkDirujuk,jnsPelayanan,catatan,diagRujukan,tipeRujukan,poliRujukan,user) 
VALUES('','$norujukan','$noSep','$tglRujukan','$tglRencanaKunjungan','$ppkDirujuk','$jnsPelayanan','$catatan','$diagRujukan','$tipeRujukan','$poliRujukan','$user')");

if (mysqli_query($mysqli, $sql))  
      {  
        echo "<script type='text/javascript'> document.location='data_insert_rujukan.php?kd=sukses';</script>";
      } else {
        echo "<script type='text/javascript'> document.location='data_insert_rujukan.php?kd=gagal';</script>";  
      }

}
?>