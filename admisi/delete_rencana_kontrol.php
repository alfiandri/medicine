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
require 'function.php';
require_once 'vendor/autoload.php';
$skontrol = $_GET['kode'];
$id_nama = $_SESSION['namalengkap'];

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

 curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/RencanaKontrol/Delete");
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

$userid = $_SESSION['iduser'];
$username = $_SESSION['username'];
$fullname = $_SESSION['namalengkap'];
$aktivitas = "Delete";
$objek = "Rencana Kontrol";
$keterangan = $_GET['kode'];

if ($code=="200") {

    $sql = ("DELETE FROM t_skontrol WHERE noSuratKontrol='$_GET[kode]'");
    $sql2 = ("INSERT INTO t_loguser(userid,username,fullname,aktivitas,objek,keterangan,tanggal) VALUES('$userid','$username','$fullname','$aktivitas','$objek','$keterangan',NOW())");

    if (mysqli_query($koneksi, $sql) && mysqli_query($koneksi, $sql2))  
    {  
      ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Berhasil Menghapus Data',
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
        text: 'Gagal Menghapus Data',
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