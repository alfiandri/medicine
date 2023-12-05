<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <?php
  require '../function.php';
  require 'headertop.php';
  include 'lteheader.php';
  ?>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://momentjs.com/downloads/moment.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip({
          placement : 'top'
      });
  });
  </script>
</head>

<body id="page-top">
<div id="wrapper">
<?php
require 'menu.php';
?>
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">
<?php
require 'navbar.php';
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');
$id_nama = $_SESSION['namalengkap'];
if (!empty($_GET['kode'])) {
  $noSep = $_GET['kode'];
  $tglSep = $_GET['tgl'];
} else {
  $noSep = "";
  $tglSep = "";
}
?>

    <section class="content-header">
      <div class="container-fluid">
          <div style="text-align: center">
            <h1>INSERT RUJUKAN PESERTA</h1>
          </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <form role="form" method="post" action="proses_insert_rujukan.php">
        <div class="row">
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">INSERT DATA</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->             
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputnoSEP">No. SEP</label>
                    <input type="text" class="form-control" name="noSep" value="<?php echo $noSep;?>" placeholder="Masukkan No SEP" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtglRujukan">Tanggal Rujukan</label>
                    <input type="date" class="form-control" name="tglRujukan" value="<?php echo $tglSep;?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtglRencanaKunjungan">Tanggal Rencana Kunjungan</label>
                    <input type="date"  name="tglRencanaKunjungan"  class="form-control" value="<?php echo $tanggal;?>" required/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputppkDirujuk">PPK Dirujuk</label>
                    <div class="row">
                      <div class="col-8">
                        <input type="text" class="form-control" name="ppkDirujuk" id='fas' placeholder="Masukkan Kode Faskes" required>
                      </div>
                      <div class="col-2">
                      <a href="javascript:void(0);" name="Cari Faskes" title="Cari Faskes" onClick='javascript:window.open("cari_faskes_popup.php","Ratting", "width=550,height=170,left=150,top=200,toolbar=1,status=1");'>
                          <button type="button" class="btn btn-primary btn-s"><i class="fa fa-search" data-toggle="tooltip" data-original-title="Cari Faskes"></i></button>
                        </a>
                      </div>
                    </div>  
                  </div>
                  <div class="form-group">
                    <label for="exampleInputjnsPelayanan">Jenis Pelayanan</label>
                    <select class="custom-select form-control-border border-width-2" name="jnsPelayanan" required="true">
                    <option value="">-- Pilih Jenis Pelayanan --</option>
                    <option value="1">Rawat Inap</option>
                    <option value="2">Rawat Jalan</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
              <h3 class="card-title">INSERT DATA</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->             
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputcatatan">Catatan</label>
                    <textarea class="form-control" rows="2" name="catatan" placeholder="Tambahkan Catatan Jika Ada"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputdiagRujukan">Diagnosa Rujukan</label>
                    <div class="row">
                      <div class="col-8">
                        <input type="text" class="form-control" name="diagRujukan" id="diag" placeholder="Masukkan Kode Diagnosa" required>
                      </div>
                      <div class="col-2">
                      <a href="javascript:void(0);" name="Cari Diagnosa" title="Cari Diagnosa" onClick='javascript:window.open("cari_diagnosa_popup.php","Ratting", "width=550,height=170,left=150,top=200,toolbar=1,status=1");'>
                          <button type="button" class="btn btn-primary btn-s"><i class="fa fa-search" data-toggle="tooltip" data-original-title="Cari Diagnosa"></i></button>
                      </a>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtipeRujukan">Tipe Rujukan</label>
                    <select class="custom-select form-control-border border-width-2" name="tipeRujukan" onchange="if (this.selectedIndex==1 || this.selectedIndex==2){ document.getElementById('tampil_tipe').style.display='inline'} else { document.getElementById('tampil_tipe').style.display='none'};" required="true">
                    <option value="">-- Pilih Tipe Rujukan --</option>
                    <option value="0">Penuh</option>
                    <option value="1">Partial</option>
                    <option value="2">Balik PRB</option>
                    </select>
                  </div>
                  <span id="tampil_tipe" style="display:none;">
                  <div class="form-group">
                    <label for="exampleInputpoliRujukan">Poli Rujukan</label>
                    <div class="row">
                      <div class="col-8">
                        <input type="text" class="form-control" name="poliRujukan" id="pol" placeholder="Masukkan Poli Rujukan">
                      </div>
                      <div class="col-2">
                      <a href="javascript:void(0);" name="Cari Poli" title="Cari Poli" onClick='javascript:window.open("data_list_spesialistik_rujukan_pop.php","Ratting", "width=750,height=170,left=150,top=200,toolbar=1,status=1,");'>
                      <button type="button" class="btn btn-primary btn-s"><i class="fa fa-search" data-toggle="tooltip" data-original-title="Cari Poli"></i></button>
                      </a>
                      </div>
                    </div>
                  </div>
                  </span>
                  <div class="form-group">
                    <label for="exampleInputuser">User Insert</label>
                    <input type="text" class="form-control" name="user" value="<?php echo $id_nama; ?>" readonly>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
          </div>
        </div>     
        <!-- /.row -->
      </form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?php require '../template/footer.php';?>
</div><div>
<?php 
include 'script.php';
?>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
</body>
</html>