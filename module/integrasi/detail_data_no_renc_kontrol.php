<!DOCTYPE html>

<head>
    <script>
    if (typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", 'detail_data_no_renc_kontrol.php');
    }
    </script>
    <?php
    $page ="Detail Data";
    include('head.php');
  error_reporting(E_ALL&~E_NOTICE);
  ?>
</head>
<?php
include 'fungsi.php';
require_once 'vendor/autoload.php';
if (!empty($_POST['nosrtktrl'])) {
  $skontrol = $_POST['nosrtktrl'];
} else {
  $skontrol = $_GET['nosrtktrl'];
}

if($_GET['kd']=='sukses'){
  echo "<script type='text/javascript'>toastr.success('Data Berhasil Di Update')</script>";
} elseif ($_GET['kd']=='gagal') {
  echo "<script type='text/javascript'>toastr.error('Data Gagal Di Update')</script>";
}


$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/RencanaKontrol/noSuratKontrol/".$skontrol."");
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
 $message = $string->metaData->message;
 if ($string->metaData->code=="201") {
    echo "<script>alert('$message'); window.location = 'cari_rencana_kontrol.php';</script>";
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

if ($uhuy->sep->peserta->kelamin=="L") {
  $jenis_kelamin = "Pria";
  }
if ($uhuy->sep->peserta->kelamin=="W") {
  $jenis_kelamin = "Wanita";
  }
if ($uhuy->sep->provPerujuk->asalRujukan=="1") {
  $asalrujukan = "Faskes Tingkat I";
  }
if ($uhuy->sep->provPerujuk->asalRujukan=="2") {
  $asalrujukan = "Faskes Tingkat II";
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
                                    <li class="breadcrumb-item">SEP</li>
                                    <li class="breadcrumb-item active">Cari Nomor</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <br>
                    <h3 style="text-align: center;">DETAIL DATA NO. SURAT KONTROL&nbsp;&nbsp;
                        |&nbsp;&nbsp;<b><?php echo $uhuy->noSuratKontrol;?></b></h3>
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
                                        &nbsp;&nbsp;DATA KONTROL
                                    </h4>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <dl class="row">
                                        <dt class="col-sm-5">No. Surat Kontrol</dt>
                                        <dd class="col-sm-7"><?php echo $uhuy->noSuratKontrol;?></dd>
                                        <dt class="col-sm-5">Tanggal Rencana Kontrol</dt>
                                        <dd class="col-sm-7"><?php echo $uhuy->tglRencanaKontrol;?></dd>
                                        <dt class="col-sm-5">Tanggal Terbit Kontrol</dt>
                                        <dd class="col-sm-7"><?php echo $uhuy->tglTerbit;?></dd>
                                        <dt class="col-sm-5">Jenis Kontrol</dt>
                                        <dd class="col-sm-7"><?php echo $uhuy->jnsKontrol;?>
                                        <dd>
                                        <dt class="col-sm-5">Nama Jenis Kontrol</dt>
                                        <dd class="col-sm-7"><?php echo $uhuy->namaJnsKontrol;?></dd>
                                        <dt class="col-sm-5">Poli Tujuan</dt>
                                        <dd class="col-sm-7"><?php echo $uhuy->poliTujuan;?></dd>
                                        <dt class="col-sm-5">Nama Poli Tujuan</dt>
                                        <dd class="col-sm-7"><?php echo $uhuy->namaPoliTujuan;?></dd>
                                        <dt class="col-sm-5">Kode Dokter</dt>
                                        <dd class="col-sm-7"><?php echo $uhuy->kodeDokter;?></dd>
                                        <dt class="col-sm-5">Nama Dokter</dt>
                                        <dd class="col-sm-7"><?php echo $uhuy->namaDokter;?></dd>
                                        </dd>
                                    </dl>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="col-md-14">
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
                                            &nbsp;&nbsp;DATA PESERTA
                                        </h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <dl class="row">
                                            <dt class="col-sm-4">No. Kartu</dt>
                                            <dd class="col-sm-8">
                                                <?php echo $uhuy->sep->peserta->noKartu;?></dd>
                                            <dt class="col-sm-4">Nama</dt>
                                            <dd class="col-sm-8"><?php echo $uhuy->sep->peserta->nama;?>
                                            </dd>
                                            <dt class="col-sm-4">Tanggal Lahir</dt>
                                            <dd class="col-sm-8">
                                                <?php echo $uhuy->sep->peserta->tglLahir;?></dd>
                                            <dt class="col-sm-4">Jenis Kelamin</dt>
                                            <dd class="col-sm-8"><?php echo $jenis_kelamin;?></dd>
                                            <dt class="col-sm-4">Hak Kelas</dt>
                                            <dd class="col-sm-8">
                                                <?php echo $uhuy->sep->peserta->hakKelas;?></dd>
                                            </dd>
                                        </dl>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- ./col -->
                        <div class="col-md-6">
                            <div class="card card-success">
                                <div class="card-header" style="background-color: #06d6a0; color:white;">
                                    <h4 class="card-title">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <style>
                                            svg {
                                                fill: #ffffff
                                            }
                                            </style>
                                            <path
                                                d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z" />
                                        </svg>
                                        &nbsp;&nbsp;DATA SEP
                                    </h4>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <dl class="row">
                                        <dt class="col-sm-4">No. SEP</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->sep->noSep;?></dd>
                                        <dt class="col-sm-4">Tanggal SEP</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->sep->tglSep;?></dd>
                                        <dt class="col-sm-4">Jenis Pelayanan</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->sep->jnsPelayanan;?></dd>
                                        <dt class="col-sm-4">Poli</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->sep->poli;?></dd>
                                        <dt class="col-sm-4">Diagnosa</dt>
                                        <dd class="col-sm-8"><?php echo $uhuy->sep->diagnosa?></dd>
                                        </dd>
                                    </dl>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="col-md-14">
                                <div class="card card-success">
                                    <div class="card-header" style="background-color: #06d6a0; color:white;">
                                        <h4 class="card-title">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <style>
                                                svg {
                                                    fill: #ffffff
                                                }
                                                </style>
                                                <path
                                                    d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z" />
                                            </svg>
                                            &nbsp;&nbsp;PROVIDER UMUM
                                        </h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <dl class="row">
                                            <dt class="col-sm-4">Kode Provider</dt>
                                            <dd class="col-sm-8">
                                                <?php echo $uhuy->sep->provUmum->kdProvider?></dd>
                                            <dt class="col-sm-4">Nama Provider</dt>
                                            <dd class="col-sm-8">
                                                <?php echo $uhuy->sep->provUmum->nmProvider?></dd>
                                            </dd>
                                        </dl>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="col-md-14">
                                <div class="card card-success">
                                    <div class="card-header" style="background-color: #06d6a0; color:white;">
                                        <h4 class="card-title">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <style>
                                                svg {
                                                    fill: #ffffff
                                                }
                                                </style>
                                                <path
                                                    d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16z" />
                                            </svg>
                                            &nbsp;&nbsp;PROVIDER PERUJUK
                                        </h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <dl class="row">
                                            <dt class="col-sm-4">Kode Provider</dt>
                                            <dd class="col-sm-8">
                                                <?php echo $uhuy->sep->provPerujuk->kdProviderPerujuk?>
                                            </dd>
                                            <dt class="col-sm-4">Nama Provider</dt>
                                            <dd class="col-sm-8">
                                                <?php echo $uhuy->sep->provPerujuk->nmProviderPerujuk?>
                                            </dd>
                                            <dt class="col-sm-4">Asal Rujukan</dt>
                                            <dd class="col-sm-8"><?php echo $asalrujukan;?></dd>
                                            <dt class="col-sm-4">No. Rujukan</dt>
                                            <dd class="col-sm-8">
                                                <?php echo $uhuy->sep->provPerujuk->noRujukan?></dd>
                                            <dt class="col-sm-4">Tanggal Rujukan</dt>
                                            <dd class="col-sm-8">
                                                <?php echo $uhuy->sep->provPerujuk->tglRujukan?></dd>
                                            </dd>
                                        </dl>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="card-footer">
                            <a href="update_rencana_kontrol.php?nosrtktrl=<?php echo $uhuy->noSuratKontrol;?>"><button
                                    type="submit" class="btn btn-primary">UPDATE DATA</button></a>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- END TYPOGRAPHY -->
                </div><!-- /.container-fluid -->
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