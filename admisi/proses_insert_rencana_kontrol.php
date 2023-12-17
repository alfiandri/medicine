<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= include 'head.php'; ?>
</head>

<body>
    <?php
include '../db/connect.php';
include 'fungsi.php';
require_once 'vendor/autoload.php';

$noSep = $_POST['noSep'];
$kodeDokter = $_POST['kodeDokter'];
$poliKontrol = $_POST['poliKontrol'];
$tglRencanaKontrol = $_POST['tglRencanaKontrol'];
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
             "noSEP"=>"$noSep",
             "kodeDokter"=>"$kodeDokter",
             "poliKontrol"=>"$poliKontrol",
             "tglRencanaKontrol"=>"$tglRencanaKontrol",
             "user"=>"$user"
            ),
    );
 
 $json = json_encode($arr);

 curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/RencanaKontrol/insert");
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
            document.location = "bpjs-rencana-kontrol.php";
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
$uhuy = json_decode($alihi);
$skontrol = $uhuy->noSuratKontrol;

if ($code=="200") {
  
$sql = ("INSERT INTO t_skontrol(id,noSuratKontrol,noSep,kodeDokter,poliKontrol,tglRencanaKontrol,user) 
VALUES('','$skontrol','$noSep','$kodeDokter','$poliKontrol','$tglRencanaKontrol','$user')");

if (mysqli_query($mysqli, $sql))  
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