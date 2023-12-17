<?php
$master = "V-Claim ";
$page = "Pengajuan";
require 'head.php';
include '../db/connect.php';
error_reporting(0);
require 'function.php';
include 'fungsi.php';
$_SESSION['namalengkap'] = 'Agus';
$id_nama = $_SESSION['namalengkap'];
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');

if (!empty($_POST['cari'])) {
  $cari = $_POST['cari'];
} else {
  $cari = '';
}

if($_GET['kd']=='sukses'){
  echo "<script type='text/javascript'>alert('Berhasil Menambahkan Data');</script>";
} elseif ($_GET['kd']=='gagal') {
  echo "<script type='text/javascript'>alert('Data Request Gagal Di Tambahkan Database')</script>";
} elseif ($_GET['kd']=='hpssukses') {
  echo "<script type='text/javascript'>alert('Data Sukses Di Hapus')</script>";
} elseif ($_GET['kd']=='hpsgagal') {
  echo "<script type='text/javascript'>alert('Data Gagal Di Hapus')</script>"; 
} elseif ($_GET['kd']=='updsukses') {
  echo "<script type='text/javascript'>alert('Data Approval Berhasil Di Update Database')</script>"; 
} elseif ($_GET['kd']=='updgagal') {
  echo "<script type='text/javascript'>alert('Data Approval Gagal Di Update Database')</script>"; 
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
                                                                    $admin = $koneksi->query("SELECT * FROM t_pengajuan ORDER BY id DESC");
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
    <?= include 'script.php'; ?>
</body>

</html>