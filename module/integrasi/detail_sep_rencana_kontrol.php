<?php
error_reporting(E_ALL&~E_NOTICE);
include 'fungsi.php';
require_once 'vendor/autoload.php';
if (!empty($_POST['noSep'])) {
  $idsep = $_POST['noSep'];
} else {
  $idsep = $_GET['kode'];
}

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/RencanaKontrol/nosep/".$idsep."");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_TIMEOUT, 3);
 curl_setopt($ch, CURLOPT_HTTPGET, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 $string = curl_exec($ch);
 $err = curl_error($ch);
 curl_close($ch);
 

 $key = $consid . $secretKey . $tStamp;
 $string = json_decode($string);
 $code = $string->metaData->code;
 $message = $string->metaData->message;
 $dtdecrypt = $string->response;
 if ($string->metaData->code=="201") {
  echo "<script>alert('$code - $message'); window.history.go(-1);</script>";
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

if ($uhuy->peserta->kelamin=="L") {
  $jenis_kelamin = "Pria";
  }
if ($uhuy->peserta->kelamin=="P") {
  $jenis_kelamin = "Wanita";
  }
if ($uhuy->provPerujuk->asalRujukan=="1") {
  $faskes = "Faskes Tk I";
  }
if ($uhuy->provPerujuk->asalRujukan=="2") {
  $faskes = "Faskes Tk II";
  }
?>

<!DOCTYPE html>

<head>
    <?php
  require 'function.php';
  require 'head.php';
  ?>
</head>

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
                                    <li class="breadcrumb-item">SEP</li>
                                    <li class="breadcrumb-item active">Cari Nomor</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <br>
                    <h3 style="text-align: center;">DETAIL DATA SEP RENCANA KONTROL&nbsp;&nbsp;
                        |&nbsp;&nbsp;<b><?php echo $uhuy->noSep;?></b></h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-success">
                                <div class="card-header" style="background-color: #06d6a0; color:white;">
                                    <h4 class="card-title">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <style>
                                            svg {
                                                fill: #ffffff
                                            }
                                            </style>
                                            <path
                                                d="M96 96c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H80c-44.2 0-80-35.8-80-80V128c0-17.7 14.3-32 32-32s32 14.3 32 32V400c0 8.8 7.2 16 16 16s16-7.2 16-16V96zm64 24v80c0 13.3 10.7 24 24 24H296c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24H184c-13.3 0-24 10.7-24 24zm208-8c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zM160 304c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z" />
                                        </svg>
                                        &nbsp;&nbsp;DATA SEP
                                    </h4>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <dl class="row">
                                        <dt class="col-sm-4">No. SEP</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->noSep;?></dd>
                                        <dt class="col-sm-4">Tanggal SEP</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->tglSep;?></dd>
                                        <dt class="col-sm-4">Jenis Pelayanan</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->jnsPelayanan;?></dd>
                                        <dt class="col-sm-4">Poli</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->poli;?></dd>
                                        <dt class="col-sm-4">Diagnosa</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->diagnosa;?></dd>
                                        <dt class="col-sm-4">No. Kartu</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->peserta->noKartu;?></dd>
                                        <dt class="col-sm-4">Nama Peserta</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->peserta->nama;?></dd>
                                        <dt class="col-sm-4">Tanggal Lahir</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->peserta->tglLahir;?></dd>
                                        <dt class="col-sm-4">Kelamin</dt>
                                        <dd class="col-sm-8"><?php echo $jenis_kelamin;?></dd>
                                        <dt class="col-sm-4">Hak Kelas</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->peserta->hakKelas;?>
                                        <dd>
                                    </dl>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-md-6">
                            <div class="card card-success">
                                <div class="card-header" style="background-color: #06d6a0; color:white;">
                                    <h4 class="card-title">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <style>
                                            svg {
                                                fill: #ffffff
                                            }
                                            </style>
                                            <path
                                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                        </svg>
                                        &nbsp;&nbsp;PROVIDER UMUM
                                    </h4>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <dl class="row">
                                        <dt class="col-sm-4">Kode Provider</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->provUmum->kdProvider;?></dd>
                                        <dt class="col-sm-4">Nama Provider</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->provUmum->nmProvider;?></dd>
                                    </dl>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="col-md-14">
                                <div class="card card-success">
                                    <div class="card-header" style="background-color: #06d6a0; color:white;">
                                        <h4 class="card-title">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <style>
                                                svg {
                                                    fill: #ffffff
                                                }
                                                </style>
                                                <path
                                                    d="M0 48C0 21.5 21.5 0 48 0H368c26.5 0 48 21.5 48 48V96h50.7c17 0 33.3 6.7 45.3 18.7L589.3 192c12 12 18.7 28.3 18.7 45.3V256v32 64c17.7 0 32 14.3 32 32s-14.3 32-32 32H576c0 53-43 96-96 96s-96-43-96-96H256c0 53-43 96-96 96s-96-43-96-96H48c-26.5 0-48-21.5-48-48V48zM416 256H544V237.3L466.7 160H416v96zM160 464a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm368-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM176 80v48l-48 0c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h48v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V192h48c8.8 0 16-7.2 16-16V144c0-8.8-7.2-16-16-16H240V80c0-8.8-7.2-16-16-16H192c-8.8 0-16 7.2-16 16z" />
                                            </svg>
                                            &nbsp;&nbsp;PROVIDER PERUJUK
                                        </h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <dl class="row">
                                            <dt class="col-sm-4">Kode Provider</dt>
                                            <dd class="col-sm-8"><?php echo $uhuy->provPerujuk->kdProviderPerujuk;?>
                                            </dd>
                                            <dt class="col-sm-4">Nama Provider</dt>
                                            <dd class="col-sm-8"><?php echo $uhuy->provPerujuk->nmProviderPerujuk;?>
                                            </dd>
                                            <dt class="col-sm-4">Asal Rujukan</dt>
                                            <dd class="col-sm-8"><?php echo $faskes;?></dd>
                                            <dt class="col-sm-4">No. Rujukan</dt>
                                            <dd class="col-sm-8"><?php echo $uhuy->provPerujuk->noRujukan;?></dd>
                                            <dt class="col-sm-4">Tanggal Rujukan</dt>
                                            <dd class="col-sm-8"><?php echo $uhuy->provPerujuk->tglRujukan;?></dd>
                                        </dl>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- ./col -->
                    </div>
                </div>
            </div>
        </div>
        <?php require 'footer.php';?>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/chart/chartist/chartist.js"></script>
    <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="../assets/js/chart/knob/knob.min.js"></script>
    <script src="../assets/js/chart/knob/knob-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="../assets/js/dashboard/default.js"></script>
    <script src="../assets/js/notify/index.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- <script src="../assets/js/theme-customizer/customizer.js"></script> -->
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>