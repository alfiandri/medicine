<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= include 'head.php'; ?>
</head>

<body>
    <?php
error_reporting(E_ALL&~E_NOTICE);
include '../db/connect.php';
include 'fungsi.php';
require_once 'vendor/autoload.php';

$noKartu = $_POST['noKartu'];
$tglSep = $_POST['tglSep'];
$jnsPelayanan = $_POST['jnsPelayanan'];
$jnsPengajuan = $_POST['jnsPengajuan'];
$keterangan = $_POST['keterangan'];
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
            "noKartu"=>"$noKartu",
            "tglSep"=>"$tglSep",
            "jnsPelayanan"=>"$jnsPelayanan",
            "jnsPengajuan"=>"$jnsPengajuan",
            "keterangan"=>"$keterangan",
            "user"=>"$user"
        )   
    ),
 );

 $json = json_encode($arr);

 curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/Sep/pengajuanSEP");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_TIMEOUT, 3);

 $string = curl_exec($ch);
 $err = curl_error($ch);
 curl_close($ch);
//  print_r($string);

 $key = $consid . $secretKey . $tStamp;
 $string = json_decode($string);
 $message = $string->metaData->message;
 $code = $string->metaData->code;
 $dtdecrypt = $string->response;
 if ($code=="201") {
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
            document.location = "bpjs-pengajuan.php";
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
?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?php echo $alihi;?>',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location = "bpjs-pengajuan.php";
        }
    })
    </script>
    <?php
$uhuy = json_decode($alihi);

if ($code=="200") {

  $sql = mysqli_query($koneksi, "INSERT INTO t_pengajuan (`noKartu`,`tglSep`,`jnsPelayanan`,`jnsPengajuan`,`keterangan`,`ureq`,`code`,`pesan`,`stat`) VALUES ('$noKartu','$tglSep','$jnsPelayanan','$jnsPengajuan','$keterangan','$user','$code','$message','1')");
  if ($sql)  
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
            document.location = "bpjs-pengajuan.php";
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
            document.location = "bpjs-pengajuan.php";
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