<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include 'fungsi.php';
    include '../db/connect.php';
    include 'head.php';
    require_once 'vendor/autoload.php';?>
</head>

<body>
    <?php

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

if($tglRujukan == ""){
   ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Tanggal Tidak Boleh Kosong',
    }).then((result) => {
        if (result.isConfirmed) {
            document.location = "bpjs-rujukan.php";
        }
    })
    </script>
    <?php
}

if($tglRencanaKunjungan < date('Y-m-d')){
    ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Tanggal Tidak Boleh Lebih Kecil Dari Sekarang',
    }).then((result) => {
        if (result.isConfirmed) {
            document.location = "bpjs-rujukan.php";
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

 curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/Rujukan/2.0/insert");
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
echo $alihi;
$uhuy = json_decode($alihi);
$norujukan = $uhuy->rujukan->noRujukan;

if ($code=="200") {

$sql = ("INSERT INTO t_rujukan(noRujukan,noSep,tglRujukan,tglRencanaKunjungan,ppkDirujuk,jnsPelayanan,catatan,diagRujukan,tipeRujukan,poliRujukan,user) 
VALUES('$norujukan','$noSep','$tglRujukan','$tglRencanaKunjungan','$ppkDirujuk','$jnsPelayanan','$catatan','$diagRujukan','$tipeRujukan','$poliRujukan','$user')");

if (mysqli_query($koneksi, $sql))  
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
        text: 'Gagal Menambahkan Data',
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
    <?php include 'script.php';?>
</body>

</html>