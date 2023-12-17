<?php
$master = "V-Claim ";
$page = "Rencana Kontrol";
require 'head.php';
include '../db/connect.php';
error_reporting(0);
require_once 'vendor/autoload.php';
require 'function.php';
include 'fungsi.php';
$id_nama = $_SESSION['namalengkap'];
if (!empty($_GET['kode']) && ($_GET['poli'])) {
   $noSep = $_GET['kode'];
   $poli = $_GET['poli'];
} else {
   $noSep = "";
   $poli = "";
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
                                <div class="col-md-12">
                                    <ul class="nav nav-pills" id="pills-icontab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab"
                                                data-bs-toggle="pill" href="#pills-iconhome" role="tab"
                                                aria-controls="pills-iconhome" aria-selected="true"><i
                                                    class="icofont icofont-ui-home"></i>Formulir</a></li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconprofile-tab"
                                                data-bs-toggle="pill" href="#pills-iconprofile" role="tab"
                                                aria-controls="pills-iconprofile" aria-selected="false"><i
                                                    class="icofont icofont-list"></i>Data Rencana Kontrol</a></li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconprofile-tab"
                                                data-bs-toggle="pill" href="#pills-cari" role="tab"
                                                aria-controls="pills-cari" aria-selected="false"><i
                                                    class="icofont icofont-list"></i>Cek Surat Rencana Kontrol</a></li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconprofile-tab"
                                                data-bs-toggle="pill" href="#pills-carisep" role="tab"
                                                aria-controls="pills-carisep" aria-selected="false"><i
                                                    class="icofont icofont-folder"></i>Cari SEP Rencana Kontrol</a></li>
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
                                        <form action="proses_insert_rencana_kontrol.php" method="post">
                                            <div class="mb-1 row">
                                                <label for="inputPassword"
                                                    class="col-sm-2 col-form-label-sm ">No.SEP</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm" id="idnosep"
                                                        value="<?php echo $noSep;?>" name="noSep" require>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal
                                                    RK</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control form-control-sm"
                                                        id="idtanggal" name="tglRencanaKontrol" require>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword"
                                                    class="col-sm-2 col-form-label-sm ">Poli</label>
                                                <div class="col-sm-10">
                                                    <select name="poliKontrol" id="idpoli"
                                                        class="form-select form-select-sm">
                                                        <option selected></option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nama
                                                    Dokter</label>
                                                <div class="col-sm-10">
                                                    <select name="kodeDokter" id="iddokter"
                                                        class="form-select form-select-sm">
                                                        <option selected></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">User
                                                    Insert</label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly class="form-control form-control-sm"
                                                        id="inputPassword" name="user" value="<?php echo $id_nama; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                <div class="col-sm-10">
                                                    <button class="btn btn-success btn-sm" type="submit">Kirim</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-iconprofile" role="tabpanel"
                                        aria-labelledby="pills-iconprofile-tab">
                                        <div class="table-responsive">
                                            <table class="display table-sm" id="basic-1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>No.Kontrol</th>
                                                        <th>No.SEP</th>
                                                        <th>Tgl.Kontrol</th>
                                                        <th>Poli Tujuan</th>
                                                        <th>Kode Dokter</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                         $no = 0;
                                                         $admin = $koneksi->query("SELECT * FROM t_skontrol ORDER BY id DESC");
                                                         while ($n=mysqli_fetch_array($admin)) {
                                                            $no++;
                                                         ?>
                                                    <tr>
                                                        <td><?php echo $no;?></td>
                                                        <td><?php echo $n['noSuratKontrol'];?></td>
                                                        <td><?php echo $n['noSep'];?></td>
                                                        <td><?php echo $n['tglRencanaKontrol'];?></td>
                                                        <td><?php echo $n['poliKontrol'];?></td>
                                                        <td><?php echo $n['kodeDokter'];?></td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <button class="btn btn-sm btn-dark dropdown-toggle"
                                                                    id="btnGroupDrop1" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">Actions</button>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="btnGroupDrop1">
                                                                    <a class="dropdown-item"
                                                                        href="update_rencana_kontrol.php?nosrtktrl=<?php echo $n['noSuratKontrol'];?>">Ubah</a>
                                                                    <a class="dropdown-item"
                                                                        href="delete_rencana_kontrol.php?kode=<?php echo $n['noSuratKontrol'];?>"
                                                                        onclick="return confirm('Yakin akan menghapus data?')">Hapus</a>
                                                                    <a class="dropdown-item"
                                                                        href="detail_data_no_renc_kontrol.php?nosrtktrl=<?php echo $n['noSuratKontrol'];?>">Lihat</a>
                                                                    <a class="dropdown-item"
                                                                        href="cetaksuratkontrol/suratkontrol.php?kode=<?php echo $n['noSuratKontrol'];?>&user=<?=$id_nama;?>"
                                                                        target="_blank">Print</a>
                                                                </div>
                                                        </td>
                                                    </tr>
                                                    <?php }  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-cari" role="tabpanel"
                                        aria-labelledby="pills-cari-tab">
                                        <div class="card">
                                            <h5 class="card-header">Data Nomor Surat Kontrol Berdasarkan Tanggal
                                            </h5>
                                            <form action="data_no_surat_kontrol.php" method="post" role="form">
                                                <div class="card-body">
                                                    <div class="mb-1 row">
                                                        <label for="inputPassword"
                                                            class="col-sm-2 col-form-label-sm ">Tanggal
                                                            Awal</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control form-control-sm"
                                                                name="tglawal" id="" require>
                                                        </div>
                                                    </div>
                                                    <div class="mb-1 row">
                                                        <label for="inputPassword"
                                                            class="col-sm-2 col-form-label-sm ">Tanggal
                                                            Akhir</label>
                                                        <div class="col-sm-10">
                                                            <input type="date" class="form-control form-control-sm"
                                                                name="tglakhir" id="" require>
                                                        </div>
                                                    </div>
                                                    <div class="mb-1 row">
                                                        <label for="inputPassword"
                                                            class="col-sm-2 col-form-label-sm ">Filter</label>
                                                        <div class="col-sm-10">
                                                            <select name="filter" class="form-select form-select-sm"
                                                                id="" require>
                                                                <option value="" readonly>-- Pilih Filter --</option>
                                                                <option value="1">Tanggal Entri</option>
                                                                <option value="2">Tanggal Rencana Kontrol</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="mb-1 row">
                                                        <label for="inputPassword"
                                                            class="col-sm-2 col-form-label-sm "></label>
                                                        <div class="col-sm-10">
                                                            <button class="btn btn-success btn-sm"
                                                                type="submit">Cari</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="card">
                                            <h5 class="card-header">Data Nomor Surat Kontrol Berdasarkan Nomor</h5>
                                            <div class="card-body">
                                                <form action="detail_data_no_renc_kontrol.php" method="post"
                                                    role="form">
                                                    <div class="mb-1 row">
                                                        <label for="inputPassword"
                                                            class="col-sm-2 col-form-label-sm ">No.
                                                            Surat Kontrol</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="nosrtktrl" require>
                                                        </div>
                                                    </div>
                                                    <div class="mb-1 row">
                                                        <label for="inputPassword"
                                                            class="col-sm-2 col-form-label-sm "></label>
                                                        <div class="col-sm-10">
                                                            <button class="btn btn-success btn-sm"
                                                                type="submit">Cari</button>
                                                        </div>
                                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-carisep" role="tabpanel"
                                        aria-labelledby="pills-carisep-tab">
                                        <form action="detail_sep_rencana_kontrol.php" method="post" role="form">
                                            <div class="mb-1 row">
                                                <label for="inputPassword"
                                                    class="col-sm-2 col-form-label-sm ">No.SEP</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="inputPassword" name="noSep" require>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                <div class="col-sm-10">
                                                    <button class="btn btn-success btn-sm" type="submit">Proses</button>
                                                </div>
                                            </div>
                                        </form>
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
    <script type="text/javascript">
    $(document).ready(function() {
        $('body').on("change", "#idtanggal", function() {
            var a = document.getElementById("idnosep").value;
            var b = document.getElementById("idtanggal").value;
            var data = "data=poli&jenis=2&nomor=" + a +
                "&tanggal=" + b;
            $.ajax({
                type: 'POST',
                url: "getpolirenkontrol.php",
                data: data,
                success: function(hasil) {
                    $("#idpoli").html(hasil);
                    $("#idpoli").show();
                }
            });
        });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('body').on("change", "#idpoli", function() {
            var a = document.getElementById("idpoli").value;
            var b = document.getElementById("idtanggal").value;
            var data = "data=dokter&jenis=2&poli=" + a +
                "&tanggal=" + b;
            $.ajax({
                type: 'POST',
                url: "getpolirenkontrol.php",
                data: data,
                success: function(hasil) {
                    $("#iddokter").html(hasil);
                    $("#iddokter").show();
                }
            });
        });
    });
    </script>
</body>

</html>