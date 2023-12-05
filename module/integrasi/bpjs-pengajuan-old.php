<?php
$master = "V-Claim ";
$page = "Pengajuan";
require 'head.php';
include 'connect.php';
error_reporting(0);
require 'function.php';
include 'fungsi.php';
$id_nama = $_SESSION['namalengkap'];
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');

if (!empty($_POST['cari'])) {
  $cari = $_POST['cari'];
} else {
  $cari = '';
}

if($_GET['kd']=='sukses'){
  echo "<script type='text/javascript'>toastr.success('Data Request Berhasil Di Tambahkan Database')</script>";
} elseif ($_GET['kd']=='gagal') {
  echo "<script type='text/javascript'>toastr.error('Data Request Gagal Di Tambahkan Database')</script>";
} elseif ($_GET['kd']=='hpssukses') {
  echo "<script type='text/javascript'>toastr.success('Data Sukses Di Hapus')</script>";
} elseif ($_GET['kd']=='hpsgagal') {
  echo "<script type='text/javascript'>toastr.error('Data Gagal Di Hapus')</script>"; 
} elseif ($_GET['kd']=='updsukses') {
  echo "<script type='text/javascript'>toastr.success('Data Approval Berhasil Di Update Database')</script>"; 
} elseif ($_GET['kd']=='updgagal') {
  echo "<script type='text/javascript'>toastr.error('Data Approval Gagal Di Update Database')</script>"; 
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
                    <div class="col-md-12 project-list">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="nav nav-pills" id="pills-icontab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab"
                                                data-bs-toggle="pill" href="#pills-iconhome" role="tab"
                                                aria-controls="pills-iconhome" aria-selected="true"><i
                                                    class="icofont icofont-ui-home"></i>SEP Backdate</a></li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconprofile-tab"
                                                data-bs-toggle="pill" href="#pills-iconprofile" role="tab"
                                                aria-controls="pills-iconprofile" aria-selected="false"><i
                                                    class="icofont icofont-man-in-glasses"></i>Validasi Fingerprint</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-test-tab"
                                                data-bs-toggle="pill" href="#pills-test" role="tab"
                                                aria-controls="pills-test" aria-selected="false"><i
                                                    class="icofont icofont-list"></i>Data Pengajuan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="pills-icontabContent">
                                    <div class="tab-pane fade show active" id="pills-iconhome" role="tabpanel"
                                        aria-labelledby="pills-iconhome-tab">
                                        <form action="proses_pengajuan.php" method="post" role="form">
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.Kartu
                                                    BPJS</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="inputPassword" name="noKartu" required>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal
                                                    SEP</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control form-control-sm"
                                                        id="inputPassword" name="tglSep" require>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jenis
                                                    Pelayanan</label>
                                                <div class="col-sm-10">
                                                    <select name="jnsPelayanan" class="form-select form-select-sm"
                                                        require>
                                                        <option>-- Pilih Jenis Pelayanan --</option>
                                                        <option value="1">Rawat Inap</option>
                                                        <option value="2">Rawat Jalan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword"
                                                    class="col-sm-2 col-form-label-sm ">Keterangan</label>
                                                <div class="col-sm-10">
                                                    <textarea name="keterangan" class="form-control" cols="30"
                                                        rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="jnsPengajuan" value="1">
                                                <input type="hidden" class="form-control" name="user"
                                                    value="<?php echo $id_nama; ?>">
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                <div class="col-sm-10">
                                                    <button class="btn btn-success btn-sm" type="submit">Proses</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-iconprofile" role="tabpanel"
                                        aria-labelledby="pills-iconprofile-tab">
                                        <form action="proses_pengajuan.php" method="post" role="form">
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.Kartu
                                                    BPJS</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="inputPassword" name="noKartu">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal
                                                    SEP</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control form-control-sm"
                                                        id="inputPassword" name="tglSep" value="<?php echo $tanggal;?>"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jenis
                                                    Pelayanan</label>
                                                <div class="col-sm-10">
                                                    <select name="jnsPelayanan" class="form-select form-select-sm"
                                                        require>
                                                        <option>-- Pilih Jenis Pelayanan --</option>
                                                        <option value="1">Rawat Inap</option>
                                                        <option value="2">Rawat Jalan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword"
                                                    class="col-sm-2 col-form-label-sm ">Keterangan</label>
                                                <div class="col-sm-10">
                                                    <textarea name="keterangan" class="form-control" id="" cols="30"
                                                        rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="jnsPengajuan" value="2">
                                                <input type="hidden" class="form-control" name="user"
                                                    value="<?php echo $id_nama; ?>">
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                <div class="col-sm-10">
                                                    <button class="btn btn-success btn-sm" type="submit">Proses</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-test" role="tabpanel"
                                        aria-labelledby="pills-test-tab">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="display table-sm" id="basic-1">
                                                            <thead>
                                                                <tr>
                                                                    <th>No.</th>
                                                                    <th>No.Kartu</th>
                                                                    <th>Tgl.SEP</th>
                                                                    <th>Jenis Pelayanan</th>
                                                                    <th>Jenis Pengajuan</th>
                                                                    <th>Keterangan</th>
                                                                    <th>Status</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php $no = 0;
                                                                    $admin = $mysqli->query("SELECT * FROM t_pengajuan ORDER BY id DESC");
                                                                    while ($n=mysqli_fetch_array($admin)) {
                                                                        $no++;
                                                                        if ($n['jnsPelayanan']=="1") {
                                                                        $jnsPelayanan = "Rawat Inap";
                                                                        }
                                                                        if ($n['jnsPelayanan']=="2") {
                                                                        $jnsPelayanan = "Rawat Jalan";
                                                                        }
                                                                        if ($n['jnsPengajuan']=="1") {
                                                                        $jnsPengajuan = "SEP Backdate";
                                                                        }
                                                                        if ($n['jnsPengajuan']=="2") {
                                                                        $jnsPengajuan = "Finger Print";
                                                                        }
                                                                        if ($n['stat']=="1") {
                                                                        $status = "Request";
                                                                        }
                                                                        if ($n['stat']=="2") {
                                                                        $status = "Approved";
                                                                        }
                                                                    ?>
                                                                <tr>
                                                                    <td><?php echo $no;?></td>
                                                                    <td><?php echo $n['noKartu'];?></td>
                                                                    <td><?php echo $n['tglSep'];?></td>
                                                                    <td><?php echo $jnsPelayanan;?></td>
                                                                    <td><?php echo $jnsPengajuan;?></td>
                                                                    <td><?php echo $n['keterangan'];?></td>
                                                                    <td><?php echo $status;?></td>
                                                                    <td>
                                                                        <a
                                                                            href="approval_finger.php?kode=<?php echo $n['noKartu'];?>">
                                                                            <?php if ($n['jnsPengajuan']=="2" && $n['uapp']=="") { ?>
                                                                            <button type="button"
                                                                                class="btn btn-primary btn-xs"><i
                                                                                    class="fa fa-check-circle"
                                                                                    data-toggle="tooltip"
                                                                                    data-original-title="Approve Pengajuan"></i></button>
                                                                            <?php } ?> </a>
                                                                        <a
                                                                            href="getfingerprint.php?kode=<?php echo $n['noKartu'];?>">
                                                                            <?php if ($n['jnsPengajuan']=="2") { ?>
                                                                            <button type="button"
                                                                                class="btn btn-warning btn-xs"><i
                                                                                    class="fa fa-eye"
                                                                                    data-toggle="tooltip"
                                                                                    data-original-title="Cek Pengajuan"></i></button>
                                                                            <?php } ?> </a>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
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
    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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