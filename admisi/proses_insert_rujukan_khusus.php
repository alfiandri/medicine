<?php
include 'connect.php';
include 'fungsi.php';
require_once 'vendor/autoload.php';

$noRujukan = $_POST['noRujukan'];
$ps = $_POST['ps'];
$kode = $_POST['kode'];
$pro = $_POST['procedure'];
$user = $_POST['user'];

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
 );

 for($i=0;$i<count($ps);$i++){
  $kods[] = array("kode"=>"$ps[$i];$kode[$i]");
  $diag[] = "$ps[$i];$kode[$i]";
  }
  for($a=0;$a<count($pro);$a++){
  $procedure[] = array("kode"=>"$pro[$a]");
  }
  
 $arr = array("noRujukan"=>"$noRujukan","diagnosa"=>$kods,"procedure"=>$procedure,"user"=>"$user");

 $json = json_encode($arr);

 curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Rujukan/Khusus/insert");
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
    echo "<script>alert('$code - $message'); window.location='bpjs-r-khusus.php';</script>";
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
$norujukan = $uhuy->noRujukan;
$nokapst = $uhuy->nokapst;
$nmpst = $uhuy->nmpst;
$diagppk = $uhuy->diagppk;
$tglrujukan_awal = $uhuy->tglrujukan_awal;
$tglrujukan_berakhir = $uhuy->tglrujukan_berakhir;

$diagnosa = implode(", ",$diag);
$prosedur = implode(", ",$pro);

if ($code=="200") {

$sql = ("INSERT INTO t_rujukankh(id,noRujukan,diagnosa,prosedur,nokapst,nmpst,diagppk,tglrujukan_awal,tglrujukan_berakhir,user) 
VALUES('','$norujukan','$diagnosa','$prosedur','$nokapst','$nmpst','$diagppk','$tglrujukan_awal','$tglrujukan_berakhir')");

if (mysqli_query($mysqli, $sql))  
      {  
        echo "<script type='text/javascript'> document.location='bpjs-r-khusus.php?kd=sukses';</script>";
      } else {
        echo "<script type='text/javascript'> document.location='bpjs-r-khusus.php?kd=gagal';</script>";  
      }

}
?>