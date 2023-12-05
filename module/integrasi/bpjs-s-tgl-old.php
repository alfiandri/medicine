<?php
$master = "V-Claim ";
$page = "Data Tanggal Pulang";
require 'head.php';
require 'function.php';
error_reporting(0);
include 'connect.php';
include 'fungsi.php';
require_once 'vendor/autoload.php';
if ($_GET['kd'] == 'updsukses') {
    echo "<script type='text/javascript'>toastr.success('Tanggal Pulang Berhasil Di Update')</script>";
} elseif ($_GET['kd'] == 'updgagal') {
    echo "<script type='text/javascript'>toastr.error('Tanggal Pulang Gagal Di Update')</script>";
}



if (!empty($_POST['tahun']) && ($_POST['bulan'])) {
    $tahun = $_POST['tahun'];
    $bulan = $_POST['bulan'];
    $filter = $_POST['filter'];
    $info = "Bulan: " . $bulan . "&emsp;Tahun: " . $tahun . "&emsp;Filter: " . $filter;
} else {
    $tahun = '';
    $bulan = '';
    $filter = '';
    $info = "Bulan: " . $bulan . "&emsp;Tahun: " . $tahun . "&emsp;Filter: " . $filter;
}

$ch = curl_init();
$headers = array(
    'X-cons-id: ' . $consid . '',
    'X-timestamp: ' . $tStamp . '',
    'X-signature: ' . $encodedSignature . '',
    'user_key: ' . $userkey . '',
    'Content-Type:application/json'
);
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Sep/updtglplg/list/bulan/" . $bulan . "/tahun/" . $tahun . "/" . $filter . "");
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
$data = json_decode($alihi, true);
$items = $data['list'];

?>
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
                                    <li class="breadcrumb-item active"><?= $page ?> </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="col-md-12 project-list">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="nav nav-pills" id="pills-icontab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Data Tanggal Pulang</a></li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconprofile-tab" data-bs-toggle="pill" href="#pills-iconprofile" role="tab" aria-controls="pills-iconprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Detail Data</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="pills-icontabContent">
                                    <div class="tab-pane fade show active" id="pills-iconhome" role="tabpanel" aria-labelledby="pills-iconhome-tab">
                                        <div class="table-responsive">
                                            <table class="display table-sm" id="basic-1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>No.SEP</th>
                                                        <th>Status Pulang</th>
                                                        <th>Tanggal Pulang</th>
                                                        <th>User</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 0;
                                                    $admin = $mysqli->query("SELECT * FROM t_tglplg");
                                                    while ($n = mysqli_fetch_array($admin)) {
                                                        $no++;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $n['noSep']; ?></td>
                                                            <td><?php echo $n['statusPulang']; ?></td>
                                                            <td><?php echo $n['tglPulang']; ?></td>
                                                            <td><?php echo $n['user']; ?></td>
                                                        </tr>
                                                    <?php }  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-iconprofile" role="tabpanel" aria-labelledby="pills-iconprofile-tab">
                                        <form action="" method="post">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <select class="form-control form-control-border border-width-2" name="bulan" required="true">
                                                            <option selected="true" disabled="disabled">-- Pilih Bulan
                                                                --</option>
                                                            <option value="1">Januari</option>
                                                            <option value="2">Februari</option>
                                                            <option value="3">Maret</option>
                                                            <option value="4">April</option>
                                                            <option value="5">Mei</option>
                                                            <option value="6">Juni</option>
                                                            <option value="7">Juli</option>
                                                            <option value="8">Agustus</option>
                                                            <option value="9">September</option>
                                                            <option value="10">Oktober</option>
                                                            <option value="11">November</option>
                                                            <option value="12">Desember</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="number" class="form-control" name="tahun" min="2000" max="2100" placeholder="Masukkan Tahun" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="text" class="form-control" name="filter" placeholder="Masukkan Filter">
                                                    </div>
                                                    <div class="col-sm-2 my-1">
                                                        <button type="submit" name="submit" class="btn btn-outline-primary"><i class="fa fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                        if (isset($_POST['submit'])) {
                                            echo $info;
                                        }
                                        ?>
                                        <div class="table-responsive">
                                            <table class="display table-sm" id="basic-3">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>No.SEP</th>
                                                        <th>No.SEP UPDT</th>
                                                        <th>JNS LAYANAN</th>
                                                        <th>PPK</th>
                                                        <th>No.Kartu</th>
                                                        <th>Nama</th>
                                                        <th>Tgl.SEP</th>
                                                        <th>Tgl.PLG</th>
                                                        <th>Status</th>
                                                        <th>Tgl.Meninggal</th>
                                                        <th>No.Surat</th>
                                                        <th>Keterangan</th>
                                                        <th>User</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 0;
                                                    if (is_array($items)) {
                                                        foreach ($items as $item) {
                                                            $no++;
                                                    ?>
                                                            <tr>
                                                                <td><?php echo $no; ?></td>
                                                                <td><?php echo $item['noSep']; ?></td>
                                                                <td><?php echo $item['noSepUpdating']; ?></td>
                                                                <td><?php echo $item['jnsPelayanan']; ?></td>
                                                                <td><?php echo $item['ppkTujuan']; ?></td>
                                                                <td><?php echo $item['noKartu']; ?></td>
                                                                <td><?php echo $item['nama']; ?></td>
                                                                <td><?php echo $item['tglSep']; ?></td>
                                                                <td><?php echo $item['tglPulang']; ?></td>
                                                                <td><?php echo $item['status']; ?></td>
                                                                <td><?php echo $item['tglMeninggal']; ?></td>
                                                                <td><?php echo $item['noSurat']; ?></td>
                                                                <td><?php echo $item['keterangan']; ?></td>
                                                                <td><?php echo $item['user']; ?></td>
                                                            </tr>
                                                    <?php }
                                                    }  ?>
                                                </tbody>
                                            </table>
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