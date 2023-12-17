<!DOCTYPE html>

<head>
    <?php
  require_once 'vendor/autoload.php';
  require 'function.php';
  include 'head.php';
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
</head>

<body id="page-top">
    <div id="wrapper">

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <!-- Content Wrapper. Contains page content -->
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div style="text-align: center;">
                            <h1>INSERT RENCANA KONTROL</h1>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <form role="form" method="post" action="proses_insert_rencana_kontrol.php">
                            <div class="row">
                                <div class="col-md-6" style="margin: 0 auto;">
                                    <!-- general form elements -->
                                    <div class="card card-success">
                                        <div class="card-header" style=" background-color:#06d6a0;color:white;">
                                            <h3 class="card-title">RENCANA KONTROL</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputnoSEP">No. SEP</label>
                                                <input type="text" class="form-control" name="noSep" id="idnosep"
                                                    value="<?php echo $noSep;?>" placeholder="Masukkan No SEP" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="exampleInputtglRencanaKontrol">Tanggal Rencana
                                                        Kontrol</label>
                                                    <input type="date" class="form-control" name="tglRencanaKontrol"
                                                        id="idtanggal" placeholder="Masukkan Tanggal Rencana Kontrol"
                                                        required>
                                                </div>
                                                <label for="exampleInputpoliKontrol">Poli Kontrol</label>
                                                <input type="text" class="form-control" name="poliKontrol" id="idpoli"
                                                    value="<?php echo $poli;?>" required readonly>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputkodeDokter">Dokter</label>
                                                <select
                                                    class="custom-select form-control form-control-sm form-control-border border-width-2"
                                                    name="kodeDokter" id="iddokter" required="true">
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputuser">User Insert</label>
                                                <input type="text" class="form-control" name="user"
                                                    value="<?php echo $id_nama; ?>" readonly>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <!-- /.row -->
                        </form>
                    </div><!-- /.container-fluid -->
                </section>
            </div>
        </div>
        <div>
            <script type="text/javascript">
            $(document).ready(function() {
                $('body').on("change", "#idtanggal", function() {
                    var a = document.getElementById("idnosep").value;
                    var b = document.getElementById("idtanggal").value;
                    var data = "data=poli&jenis=2&nomor=" + a + "&tanggal=" + b;
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
                $('body').on("change", "#idtanggal", function() {
                    var a = document.getElementById("idpoli").value;
                    var b = document.getElementById("idtanggal").value;
                    var data = "data=dokter&jenis=2&poli=" + a + "&tanggal=" + b;
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
            <?= include 'script.php';?>
</body>

</html>