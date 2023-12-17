<?php
error_reporting(E_ALL&~E_NOTICE);
include 'connect.php';
include 'fungsi.php';
require 'function.php';
require_once 'vendor/autoload.php';
$noSep = $_POST['noSep'];
$klsRawatHak = $_POST['klsRawatHak'];
$klsRawatNaik = $_POST['klsRawatNaik'];
$pembiayaan = $_POST['pembiayaan'];
$penanggungJawab = $_POST['penanggungJawab'];
$noMR = $_POST['noMR'];
$catatan = $_POST['catatan'];
$diagAwal = $_POST['diagAwal'];
$tujuan = $_POST['tujuan'];
$eksekutif = $_POST['eksekutif'];
$cob = $_POST['cob'];
$katarak = $_POST['katarak'];
$lakaLantas = $_POST['lakaLantas'];
$tglKejadian = $_POST['tglKejadian'];
$keterangan = $_POST['keterangan'];
$suplesi = $_POST['suplesi'];
$noSepSuplesi = $_POST['noSepSuplesi'];
$kdPropinsi = $_POST['kdPropinsi'];
$kdKabupaten = $_POST['kdKabupaten'];
$kdKecamatan = $_POST['kdKecamatan'];
$dpjpLayan = $_POST['dpjpLayan'];
$noTelp = $_POST['noTelp'];
$user = $_POST['user'];

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
 );

$arr = array("request"=>
array("t_sep"=>
    array(
            "noSep"=>"$noSep",
            "klsRawat"=>array("klsRawatHak"=>"$klsRawatHak",
                  "klsRawatNaik"=>"$klsRawatNaik",
                  "pembiayaan"=>"$pembiayaan",
                  "penanggungJawab"=>"$penanggungJawab"),
            "noMR"=>"$noMR",
            "catatan"=>"$catatan",
            "diagAwal"=>"$diagAwal",
            "poli"=>array("tujuan"=>"$tujuan","eksekutif"=>"$eksekutif"),
            "cob"=>array("cob"=>"$cob"),
            "katarak"=>array("katarak"=>"$katarak"),
            "jaminan"=>array("lakaLantas"=>"$lakaLantas",
                            "penjamin"=>array("tglKejadian"=>"$tglKejadian",
                                              "keterangan"=>"$keterangan",
                                              "suplesi"=>array("suplesi"=>"$suplesi",
                                                                "noSepSuplesi"=>"$noSepSuplesi",
                                                                "lokasiLaka"=>array("kdPropinsi"=>"$kdPropinsi",
                                                                                    "kdKabupaten"=>"$kdKabupaten",
                                                                                    "kdKecamatan"=>"$kdKecamatan"),
                                                              ),
                                              ),
                              ),
            "dpjpLayan"=>"$dpjpLayan ",
            "noTelp"=>"$noTelp",
            "user"=>"$user"
        )   
    ),
 );

 $json = json_encode($arr);

 curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/SEP/2.0/update");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
 curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_TIMEOUT, 3);

 $string = curl_exec($ch);
 $err = curl_error($ch);
 curl_close($ch);
 print_r($string);

 $key = $consid . $secretKey . $tStamp;
 $string = json_decode($string);
 $message = $string->metaData->message;
 $code = $string->metaData->code;
 $dtdecrypt = $string->response;
 if ($code=="201") {
   echo "<script>alert('$message'); window.history.go(-1);</script>";
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
//echo $alihi;
$uhuy = json_decode($alihi);
$userid = $_SESSION['iduser'];
$username = $_SESSION['username'];
$fullname = $_SESSION['namalengkap'];
$aktivitas = "Update";
$objek = "SEP";
$keterangan = $noSep;

if ($code=="200") {
   $sql = ("UPDATE t_sep SET noSep='$noSep',
                              klsRawatHak='$klsRawatHak',
                              klsRawatNaik='$klsRawatNaik',
                              pembiayaan='$pembiayaan',
                              penanggungJawab='$penanggungJawab',
                              noMR='$noMR',
                              catatan='$catatan',
                              diagAwal='$diagAwal',
                              tujuan='$tujuan',
                              eksekutif='$eksekutif',
                              cob='$cob',
                              katarak='$katarak',
                              lakaLantas='$lakaLantas',
                              tglKejadian='$tglKejadian',
                              keterangan='$keterangan',
                              suplesi='$suplesi',
                              noSepSuplesi='$noSepSuplesi',
                              kdPropinsi='$kdPropinsi',
                              kdKabupaten='$kdKabupaten',
                              kdKecamatan='$kdKecamatan',
                              dpjpLayan='$dpjpLayan',
                              noTelp='$noTelp',
                              user='$user' WHERE noSep='$noSep'");
    $sql2 = ("INSERT INTO t_loguser(userid,username,fullname,aktivitas,objek,keterangan,tanggal) VALUES('$userid','$username','$fullname','$aktivitas','$objek','$keterangan',NOW())");

  if (mysqli_query($mysqli, $sql) && mysqli_query($mysqli, $sql2))
   {  
     echo "<script type='text/javascript'> document.location='bpjs-sep.php?kd=updsukses';</script>";
   } else {
     echo "<script type='text/javascript'> document.location='bpjs-sep.php?kd=updgagal';</script>";  
   }
 
 }

?>