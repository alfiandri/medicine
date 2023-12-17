<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'head.php';?>
</head>

<body>
    <?php
include '../db/connect.php';
include 'fungsi.php';
require 'function.php';
require_once 'vendor/autoload.php';
$noRujukan = $_POST['noRujukan'];
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
    ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Tanggal Tidak Boleh Kurang Dari Tanggal Sekarang',
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
            "noRujukan"=>"$noRujukan",
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

 curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/Rujukan/2.0/Update");
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
            document.location = "bpjs-rujukan.php";
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
$objek = "Rujukan Keluar RS";
$keterangan = $noRujukan;

if ($code=="200") {
  $sql = ("UPDATE t_rujukan SET noRujukan='$noRujukan',
                             tglRujukan='$tglRujukan',
                             tglRencanaKunjungan='$tglRencanaKunjungan',
                             ppkDirujuk='$ppkDirujuk',
                             jnsPelayanan='$jnsPelayanan',
                             catatan='$catatan',
                             diagRujukan='$diagRujukan',
                             tipeRujukan='$tipeRujukan',
                             poliRujukan='$poliRujukan',
                             user='$user' WHERE noRujukan='$noRujukan'");
  $sql2 = ("INSERT INTO t_loguser(id,userid,username,fullname,aktivitas,objek,keterangan,tanggal) VALUES('','$userid','$username','$fullname','$aktivitas','$objek','$keterangan',NOW())");

  if (mysqli_query($koneksi, $sql) && mysqli_query($koneksi, $sql2))
  {  
      ?>
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: 'Data Berhasil Di Update',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location = "bpjs-rujukan.php";
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
        text: 'Data Gagal Update',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location = "bpjs-rujukan.php";
        }
    })
    </script>
    <?php
  }
}
?>
    <?= include 'script.php';?>
</body>

</html>