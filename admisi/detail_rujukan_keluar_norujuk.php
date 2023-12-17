<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= include 'head.php'; ?>
</head>
<?php
$master = "V-Claim ";
$page = "Detail Rujukan Keluar";
error_reporting(E_ALL&~E_NOTICE);
require 'function.php';
include 'fungsi.php';
require_once 'vendor/autoload.php';
if (!empty($_GET['kode'])) {
  $norujukan = $_GET['kode'];
} else {
  $norujukan = $_POST['norujukan'];
}

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
 curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/Rujukan/Keluar/".$norujukan."");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_TIMEOUT, 3);
 curl_setopt($ch, CURLOPT_HTTPGET, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 $string = curl_exec($ch);
 $err = curl_error($ch);
 curl_close($ch);
 //print_r($string);

 $key = $consid . $secretKey . $tStamp;
 $string = json_decode($string);
 $dtdecrypt = $string->response;
 $code = $string->metaData->code;
 $pesan = $string->metaData->message;
 if ($code != "200"){
     ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: '<?= $pesan?>',
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ok'
}).then((result) => {
    if (result.isConfirmed) {
        document.location = "bpjs-r-keluar-rs.php";
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

//Data Form Insert SEP
$norujukans = $uhuy->rujukan->noRujukan;
$nosep = $uhuy->rujukan->noSep;
$noKartu = $uhuy->rujukan->noKartu;
$nama = $uhuy->rujukan->nama;
$kelasRawat = $uhuy->rujukan->kelasRawat;
$kelamin = $uhuy->rujukan->kelamin;
$tglLahir = $uhuy->rujukan->tglLahir;
$tglSep = $uhuy->rujukan->tglSep;
$tglRujukan = $uhuy->rujukan->tglRujukan;
$tglRencanaKunjungan = $uhuy->rujukan->tglRencanaKunjungan;
$ppkDirujuk = $uhuy->rujukan->ppkDirujuk;
$namaPpkDirujuk = $uhuy->rujukan->namaPpkDirujuk;
$jnsPelayanan = $uhuy->rujukan->jnsPelayanan;
$catatan = $uhuy->rujukan->catatan;
$diagRujukan = $uhuy->rujukan->diagRujukan;
$namaDiagRujukan = $uhuy->rujukan->namaDiagRujukan;
$tipeRujukan = $uhuy->rujukan->tipeRujukan;
$namaTipeRujukan = $uhuy->rujukan->namaTipeRujukan;
$poliRujukan = $uhuy->rujukan->poliRujukan;
$namaPoliRujukan = $uhuy->rujukan->namaPoliRujukan;

if ($kelamin=="L") {
  $jenis_kelamin = "Pria";
  }
if ($kelamin=="P") {
  $jenis_kelamin = "Wanita";
  }
if ($jnsPelayanan=="1") {
    $pelayanan = "Rawat Inap";
  }
if ($jnsPelayanan=="2") {
    $pelayanan = "Rawat Jalan";
  }
?>

<body id="page-top">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php
      require 'header.php';
      ?>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php require 'sidebar.php';?>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3></h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">V-Claim</li>
                                    <li class="breadcrumb-item">Rujukan Keluar RS</li>
                                    <li class="breadcrumb-item active">Nomor</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <h4 style="text-align: center;">DETAIL RUJUKAN KELUAR RS NO. RUJUKAN &nbsp;&nbsp;
                        |&nbsp;&nbsp;<b><?php echo $norujukan;?></b></h4>
                    <hr>
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card card-success">
                                        <div class="card-header" style="background-color: #2a9d8f; color:white;">
                                            <h5 class="card-title">
                                                <i class="fas fa-newspaper text-white"></i>
                                                &nbsp;&nbsp;DATA RUJUKAN KELUAR
                                            </h5>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <dl class="row">
                                                <dt class="col-sm-5">No. Rujukan</dt>
                                                <dd class="col-sm-7"><?php echo $norujukans;?></dd>
                                                <dt class="col-sm-5">No. SEP</dt>
                                                <dd class="col-sm-7"><?php echo $nosep;?></dd>
                                                <dt class="col-sm-5">No. Kartu</dt>
                                                <dd class="col-sm-7"><?php echo $noKartu;?></dd>
                                                <dt class="col-sm-5">Nama</dt>
                                                <dd class="col-sm-7"><?php echo $nama;?>
                                                <dd>
                                                <dt class="col-sm-5">Kelas Rawat</dt>
                                                <dd class="col-sm-7"><?php echo $kelasRawat;?></dd>
                                                <dt class="col-sm-5">Jenis Kelamin</dt>
                                                <dd class="col-sm-7"><?php echo $jenis_kelamin;?></dd>
                                                <dt class="col-sm-5">Tanggal Lahir</dt>
                                                <dd class="col-sm-7"><?php echo $tglLahir;?></dd>
                                                <dt class="col-sm-5">Tanggal SEP</dt>
                                                <dd class="col-sm-7"><?php echo $tglSep;?></dd>
                                                <dt class="col-sm-5">Tanggal Rujukan</dt>
                                                <dd class="col-sm-7"><?php echo $tglRujukan;?></dd>
                                                <dt class="col-sm-5">Tanggal Rencana Kunjungan</dt>
                                                <dd class="col-sm-7"><?php echo $tglRencanaKunjungan;?></dd>
                                            </dl>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-success">
                                        <div class="card-header" style="background-color: #2a9d8f; color:white;">
                                            <h5 class="card-title">
                                                <i class="fas fa-newspaper text-white"></i>
                                                &nbsp;&nbsp;DATA RUJUKAN KELUAR
                                            </h5>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <dl class="row">
                                                <dt class="col-sm-5">PPK Dirujuk</dt>
                                                <dd class="col-sm-7"><?php echo $ppkDirujuk;?></dd>
                                                <dt class="col-sm-5">Nama PPK Dirujuk</dt>
                                                <dd class="col-sm-7"><?php echo $namaPpkDirujuk;?></dd>
                                                <dt class="col-sm-5">Jenis Pelayanan</dt>
                                                <dd class="col-sm-7"><?php echo $pelayanan;?></dd>
                                                <dt class="col-sm-5">Catatan</dt>
                                                <dd class="col-sm-7"><?php echo $catatan;?></dd>
                                                <dt class="col-sm-5">Kode Diagnosa</dt>
                                                <dd class="col-sm-7"><?php echo $diagRujukan;?></dd>
                                                <dt class="col-sm-5">Nama Diagnosa</dt>
                                                <dd class="col-sm-7"><?php echo $namaDiagRujukan;?></dd>
                                                <dt class="col-sm-5">Tipe Rujukan</dt>
                                                <dd class="col-sm-7"><?php echo $tipeRujukan;?></dd>
                                                <dt class="col-sm-5">Nama Tipe Rujukan</dt>
                                                <dd class="col-sm-7"><?php echo $namaTipeRujukan;?></dd>
                                                <dt class="col-sm-5">KodePoli Rujukan</dt>
                                                <dd class="col-sm-7"><?php echo $poliRujukan;?></dd>
                                                <dt class="col-sm-5">Nama Poli Rujukan</dt>
                                                <dd class="col-sm-7"><?php echo $namaPoliRujukan;?>
                                                <dd>
                                                </dd>
                                            </dl>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <?php require 'footer.php';?>
        </div>
    </div>
    <?= include 'script.php'; ?>
</body>

</html>