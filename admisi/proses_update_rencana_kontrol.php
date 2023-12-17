<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= include 'head.php';?>
</head>

<body>
    <?php
include '../db/connect.php';
include 'fungsi.php';
require 'function.php';
require_once 'vendor/autoload.php';
error_reporting(0);
$srtktrl = $_POST['noSuratKontrol'];
$NoSep = $_POST['noSEP'];
$kddokter = $_POST['kodeDokter'];
$kodepoli = $_POST['poliKontrol'];
$tglktrl = $_POST['tglRencanaKontrol'];
$user = $_POST['user'];

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
 );

$arr = array("request"=>
    array(
            "noSuratKontrol"=>"$srtktrl",
            "noSEP"=>"$NoSep",
            "kodeDokter"=>"$kddokter",
            "poliKontrol"=>"$kodepoli",
            "tglRencanaKontrol"=>"$tglktrl",
            "user"=>"$user"
          ),   
    );

 $json = json_encode($arr);

 curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/RencanaKontrol/Update");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
 curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
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
   ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?= $message?>',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok'
    }).then((result) => {
        if (result.isConfirmed) {
            window.history.go(-1);
        }
    })
    </script>
    <?php
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
$objek = "Rencana Kontrol";
$keterangan = $srtktrl;

if ($code=="200") {
  $sql = ("UPDATE t_skontrol SET noSuratKontrol='$srtktrl',
                             noSep='$NoSep',
                             kodeDokter='$kddokter',
                             poliKontrol='$kodepoli',
                             tglRencanaKontrol='$tglktrl',
                             user='$user' WHERE noSuratKontrol='$srtktrl'");
  $sql2 = ("INSERT INTO t_loguser(id,userid,username,fullname,aktivitas,objek,keterangan,tanggal) VALUES('','$userid','$username','$fullname','$aktivitas','$objek','$keterangan',NOW())");

  if (mysqli_query($koneksi, $sql) && mysqli_query($koneksi, $sql2))
  {  
    ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Berhasil Menambahkan Data',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location = "bpjs-rencana-kontrol.php";
        }
    })
    </script>
    <?php
  } else {
    ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Opss..',
        text: 'Gagal Menambahkan Data',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location = "bpjs-rencana-kontrol.php";
        }
    })
    </script>
    <?php
  }

}


?>
    <?= include 'script.php'; ?>
</body>

</html>