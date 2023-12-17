<!DOCTYPE html>

<head>
    <?php
  require 'function.php';
  include 'fungsi.php';
  include '../db/connect.php';
  include 'head.php';

  $noSPRI = $_GET['noSPRI'];
  $id_nama = $_SESSION['namalengkap'];

  $query = $koneksi->query("SELECT * FROM t_spri WHERE noSPRI='$noSPRI' ");
  $data = mysqli_fetch_array($query);

  $noSPRI2 = $data['noSPRI'];
  $kodeDokter = $data['kodeDokter'];
  $poliKontrol = $data['poliKontrol'];
  $tglRencanaKontrol = $data['tglRencanaKontrol'];
    ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Content Wrapper. Contains page content -->
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div style="text-align: center">
                            <h1>UPDATE SPRI</h1>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <form role="form" method="post" action="proses_update_spri.php">
                            <div class="row">
                                <div class="col-md-6" style="margin: 0 auto;">
                                    <!-- general form elements -->
                                    <div class="card card-success">
                                        <div class="card-header">
                                            <h3 class="card-title">UPDATE DATA</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputnoSuratKontrol">No. SPRI</label>
                                                <input type="text" class="form-control" name="noSPRI"
                                                    value="<?php echo $noSPRI2;?>" required readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputkodeDokter">Kode Dokter</label>
                                                <input type="text" class="form-control" name="kodeDokter"
                                                    value="<?php echo $kodeDokter;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputpoliKontrol">Kode Poli Kontrol</label>
                                                <input type="text" class="form-control" name="poliKontrol"
                                                    value="<?php echo $poliKontrol;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputtglRencanaKontrol">Tanggal Rencana
                                                    Kontrol</label>
                                                <input type="date" class="form-control" name="tglRencanaKontrol"
                                                    value="<?php echo $tglRencanaKontrol;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputnoTelp">User Update</label>
                                                <input type="text" class="form-control" name="user"
                                                    value="<?php echo $id_nama;?>" readonly>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
        <div>
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
</body>

</html>