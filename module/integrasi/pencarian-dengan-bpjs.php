<?php
error_reporting(E_ALL&~E_NOTICE);
// require '../function.php';
require_once 'vendor/autoload.php';
include 'fungsi.php';
$id = $_POST['nokartu'];
$fullname = $_SESSION['namalengkap'];

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
"user_key: " .$userkey ." ",
"Content-Type:application/json"
 );
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Peserta/nokartu/" . $id . "/tglSEP/" . $tanggal . "");
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
 $message = $string->metaData->message;
 $code = $string->metaData->code;
 $dtdecrypt = $string->response;
 if ($string->metaData->code!="200") {
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

$nama = $uhuy->peserta->nama;
$tgllahir = $uhuy->peserta->tglLahir;
$jeniskelamin = $uhuy->peserta->sex;
$jenislayanan = $uhuy->peserta->hakKelas->keterangan;
$umur = $uhuy->peserta->umur->umurSekarang;
$jenispeserta = $uhuy->peserta->jenisPeserta->keterangan;
$nokartu = $uhuy->peserta->noKartu;
$nik = $uhuy->peserta->nik;
$kdstatus = $uhuy->peserta->statusPeserta->kode;
$ketstatus = $uhuy->peserta->statusPeserta->keterangan;

if ($uhuy->peserta->sex=="L") {
    $jeniskelamin = "Pria";
    } else {
    $jeniskelamin = "Wanita";
    }
if ($uhuy->peserta->statusPeserta->kode=="0") {
    $warna = "success";
    } else {
    $warna = "danger";
    }

// include 'connect.php';
// $admin = $mysqli->query("SELECT * FROM tpasien WHERE nik='$nik'");
// $n = mysqli_fetch_array($admin);
// $norm = $n['nomorrm'];
include('head.php');
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
                                <h3><?= $page ?></h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">V-Claim</li>
                                    <li class="breadcrumb-item">Cek Kepesertaan</li>
                                    <li class="breadcrumb-item active">BPJS</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-sm-12 text-center">
                                        <img src="assets/dist/img/bpjsprofile.png" width="250px" height="225px">
                                    </div>
                                    <div class="col-sm-12 my-4">
                                        <h5 class="profile-username text-center"><?php echo ucwords($nama);?></h5>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <p><?php echo strtoupper($jenispeserta);?></p>
                                    </div>
                                    <div class="col-sm-12" style="margin-top: 15px;">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <p><b>No. Kartu BPJS</b></p>
                                            </div>
                                            <div class="col-sm-5 text-end" style="color: blue;">
                                                <p><?php echo "{$uhuy->peserta->noKartu}";?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p><b>NIK KTP</b></p>
                                            </div>
                                            <div class="col-sm-8 text-end" style="color: blue;">
                                                <P><?php echo "{$uhuy->peserta->nik}";?></P>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row col-sm-12">
                                        <div class="col-sm-6">
                                            <h6>Nama Lengkap</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p><?php echo ucwords($nama);?></p>
                                        </div>
                                    </div>
                                    <div class="row col-sm-12 my-2">
                                        <div class="col-sm-6">
                                            <h6>Tanggal Lahir</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p><?php echo $tgllahir;?></p>
                                        </div>
                                    </div>
                                    <div class="row col-sm-12 my-2">
                                        <div class="col-sm-6">
                                            <h6>Jenis Kelamin</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p><?php echo $jeniskelamin; ?></p>
                                        </div>
                                    </div>
                                    <div class="row col-sm-12 my-2">
                                        <div class="col-sm-6">
                                            <h6>Jenis Layanan</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p><?php echo $jenislayanan;?></p>
                                        </div>
                                    </div>
                                    <div class="row col-sm-12 my-2">
                                        <div class="col-sm-6">
                                            <h6>Usia</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p><?php echo $umur;?></p>
                                        </div>
                                    </div>
                                    <div class="row col-sm-12 my-2">
                                        <div class="col-sm-6">
                                            <h6>Jenis Peserta</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p><?php echo $jenispeserta;?></p>
                                        </div>
                                    </div>
                                    <div class="row col-sm-12 my-2">
                                        <div class="col-sm-6">
                                            <h6>No. Kartu</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p><?php echo $nokartu;?></p>
                                        </div>
                                    </div>
                                    <div class="row col-sm-12 my-2">
                                        <div class="col-sm-6">
                                            <h6>NIK</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p><?php echo $nik;?></p>
                                        </div>
                                    </div>
                                    <div class="row col-sm-12 my-2">
                                        <div class="col-sm-6">
                                            <h6>Kode Status</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p><?php echo $kdstatus;?></p>
                                        </div>
                                    </div>
                                    <div class="row col-sm-12 my-2">
                                        <div class="col-sm-6">
                                            <h6>Keterangan Status</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p><?php echo $ketstatus;?></p>
                                        </div>
                                    </div>
                                    <div class="row col-sm-12 my-2">
                                        <div class="col-sm-6">
                                            <h6>No. Rekam Medis RSK MATA</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p><?php echo $norm;?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require 'footer.php';?>
        </div>
    </div>
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