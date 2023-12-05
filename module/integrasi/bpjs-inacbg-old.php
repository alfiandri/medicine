<?php
$master = "V-Claim";
$page = "Data Integrasi SEP - INACBG";
require 'head.php';
error_reporting(0);
require 'function.php';
include 'fungsi.php';
require_once 'vendor/autoload.php';
if (!empty($_POST['noSep'])) {
    $noSep = $_POST['noSep'];
    $info = "No. SEP: " . $noSep;
} else {
    $noSep = '';
    $info = "No. SEP: " . $noSep;
}

$ch = curl_init();
$headers = array(
    'X-cons-id: ' . $consid . '',
    'X-timestamp: ' . $tStamp . '',
    'X-signature: ' . $encodedSignature . '',
    'user_key: ' . $userkey . '',
    'Content-Type:application/json'
);
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/sep/cbg/" . $noSep . "");
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
if ($code == "201") {
    echo "<script>alert('$message');</script>";
}

function stringDecrypt($key, $dtdecrypt)
{
    $encrypt_method = 'AES-256-CBC';
    $key_hash = hex2bin(hash('sha256', $key));
    $iv = substr(hex2bin(hash('sha256', $key)), 0, 16);
    $output = openssl_decrypt(base64_decode($dtdecrypt), $encrypt_method, $key_hash, OPENSSL_RAW_DATA, $iv);
    return $output;
}

$aloha = stringDecrypt($key, $dtdecrypt);
function decompress($aloha)
{
    return \LZCompressor\LZString::decompressFromEncodedURIComponent($aloha);
}

$alihi = decompress($aloha);
//echo $alihi;
$uhuy = json_decode($alihi);

$kelamin = $uhuy->pesertasep->kelamin;
$klsRawat = $uhuy->pesertasep->klsRawat;
$nama = $uhuy->pesertasep->nama;
$noKartuBpjs = $uhuy->pesertasep->noKartuBpjs;
$noMr = $uhuy->pesertasep->noMr;
$noRujukan = $uhuy->pesertasep->noRujukan;
$tglLahir = $uhuy->pesertasep->tglLahir;
$tglPelayanan = $uhuy->pesertasep->tglPelayanan;
$tktPelayanan = $uhuy->pesertasep->tktPelayanan;

if ($kelamin == "L") {
    $jeniskelamin = "Pria";
} elseif ($kelamin == "P") {
    $jeniskelamin = "Wanita";
} else {
    $jeniskelamin = "-";
}

?>

<body>
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
            <?php
            require 'sidebar.php';
            ?>
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
                                    <li class="breadcrumb-item"><?= $master ?></li>
                                    <li class="breadcrumb-item active"><?= $page ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="mb-1 row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" placeholder="No.SEP">
                                                <button class=" btn btn-danger btn-sm">Cari</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div class="card">
                                    <div class="card-header bg-success">
                                        SEP - INACBG
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-1 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.Kartu
                                                BPJS</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control form-control-sm" id="inputPassword" value="<?php echo $noKartuBpjs; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.Rujukan</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control form-control-sm" id="inputPassword" value="<?php echo $noRujukan; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control form-control-sm" id="inputPassword" value="<?php echo $nama; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal
                                                Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control form-control-sm" id="inputPassword" value="<?php echo $tglLahir; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jenis
                                                Kelamin</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control form-control-sm" id="inputPassword" value="<?php echo $jeniskelamin; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.MR</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control form-control-sm" id="inputPassword" value="<?php echo $noMr; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Kelas
                                                Rawat</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control form-control-sm" id="inputPassword" value="<?php echo $klsRawat; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal
                                                Pelayanan</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control form-control-sm" id="inputPassword" value="<?php echo $tglPelayanan; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tingkat
                                                Pelayanan</label>
                                            <div class="col-sm-10">
                                                <input type="text" readonly class="form-control form-control-sm" id="inputPassword" value="<?php echo $tktPelayanan; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- Page Sidebar Ends-->

            <!-- footer start-->
            <?php
            require 'footer.php';
            ?>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tempat & Tanggal Lahir</label>
                        <div class="row">
                            <div class="col-7">
                                <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="col-5">
                                <input type="date" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                        <select name="" class="form-select" id="">
                            <option value="">Laki-Laki</option>
                            <option value="">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No.Handphone</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Booking Via</label>
                        <select name="" class="form-select" id="">
                            <option value="">Mobile JKN</option>
                            <option value="">On-Site</option>
                            <option value="">Online Channel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Layanan</label>
                        <select name="" class="form-select" id="">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
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
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>