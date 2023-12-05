<?php
$page = "Registrasi Pasien Baru";
require '../db/connect.php';
require '../controller/view.php';
require '../controller/admisi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   require 'head.php';
   ?>
</head>

<body onload="startTime()">
   <div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
         <defs></defs>
         <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
         </filter>
      </svg>
   </div>
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
         <!-- Page Sidebar Ends-->
         <div class="page-body">
            <div class="container-fluid">
               <div class="page-title">
                  <div class="row">
                     <div class="col-6">
                        <h3>Registrasi Pasien Baru</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Registrasi</li>
                           <li class="breadcrumb-item active">Pasien Baru </li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-12 col-md-12 box-col-12">
                     <div class="file-content">
                        <div class="card">
                           <div class="card-body file-manager">
                              <form action="" method="POST">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">No.Rekam Medis <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="<?= rand(11111, 99999) ?>">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">Nama <span class="text-danger">*</span> </label>
                                          <div class="col-sm-3">
                                             <select name=sebutan"" class="form-select form-select-sm" id="sebutan" required="">
                                                <option value="">--PILIH SEBUTAN--</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM sebutan");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['sebutan'] ?>"><?= $row['sebutan'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                          <div class="col-sm-7">
                                             <input type="text" class="form-control form-control-sm" name="nama" id="nama" placeholder="Nama Lengkap Sesuai Identitas">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="kategori" class="col-sm-2 col-form-label">No.ID <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <select name=kategori"" class="form-select form-select-sm" id="kategori" required="">
                                                <option value="">--PILIH KATEGORI ID--</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM kategoriIdentitas");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                          <div class="col-sm-7">
                                             <input type="text" class="form-control form-control-sm" name="nokartu" id="nokartu" required="" placeholder="No.Kartu Identitas">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="ttl" class="col-sm-2 col-form-label">Tempat Tanggal Lahir <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" name="tempatlahir" placeholder="Tempat Lahir" required="">
                                          </div>
                                          <div class="col-sm-3">
                                             <input type="date" class="form-control form-control-sm" name="tanggallahir" id="tanggallahir" required="">
                                          </div>
                                          <div class="col-sm-3">
                                             <select name="agama" class="form-select form-select-sm" id="agama" required="">
                                                <option value="">--PILIH AGAMA--</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM agama");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['agama'] ?>"><?= $row['agama'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Identitas Diri <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <select name="gender" class="form-select form-select-sm" id="gender" required="">
                                                <option value="">--PILIH JENIS KELAMIN--</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM gender");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['gender'] ?>"><?= $row['gender'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                          <div class="col-sm-3">
                                             <select name=pendidikan"" class="form-select form-select-sm" id="pendidikan" required="">
                                                <option value="">--PILIH PENDIDIKAN--</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM pendidikan");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['pendidikan'] ?>"><?= $row['pendidikan'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                          <div class="col-sm-3">
                                             <select name=pekerjaan"" class="form-select form-select-sm" id="pekerjaan" required="">
                                                <option value="">--PILIH PEKERJAAN--</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM pekerjaan");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['pekerjaan'] ?>"><?= $row['pekerjaan'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="golongandarah" class="col-sm-2 col-form-label"></label>
                                          <div class="col-sm-3">
                                             <select name=golongandarah"" class="form-select form-select-sm" id="golongandarah">
                                                <option value="-">BELUM DIKETAHUI</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM golonganDarah");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['golonganDarah'] ?>"><?= $row['golonganDarah'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                          <div class="col-sm-3">
                                             <select name=statuskawin"" class="form-select form-select-sm" id="statuskawin" required="">
                                                <option value="">--PILIH STATUS KAWIN--</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM statusKawin");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['statusKawin'] ?>"><?= $row['statusKawin'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                       </div>

                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="notelepon" class="col-sm-2 col-form-label">Narahubung <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="notelepon" id="notelepon" placeholder="No.Handphone">
                                          </div>
                                          <div class="col-sm-7">
                                             <input type="email" class="form-control form-control-sm" placeholder="Email" name="email" id="email">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                          <div class="col-sm-10">
                                             <button type="submit" name="simpanpasienbaru" class="btn btn-success btn-sm">Simpan</button>
                                             <a href="admisi-rj">
                                                <button type="button" class="btn btn-light btn-sm">Batal</button>
                                             </a>
                                          </div>
                                       </div>
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
   <script src="../assets/js/datepicker/date-time-picker/moment.min.js"></script>
   <script src="../assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
   <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
   <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
   <script src="../assets/js/tooltip-init.js"></script>
   <script src="../assets/js/datepicker/date-time-picker/datetimepicker.custom.js"></script>
   <!-- Plugins JS Ends-->
   <!-- Theme js-->
   <script src="../assets/js/script.js"></script>
   <script src="../assets/js/theme-customizer/customizer.js"></script>
   <!-- login js-->
   <!-- Plugin used-->
   <!-- Plugin used-->
</body>

</html>