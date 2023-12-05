<?php
session_start();
$page = "CS";
require '../../db/connect.php';
require 'view.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
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
                        <h3>Customer Service</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Daftar Mandiri</li>
                           <li class="breadcrumb-item active">CS</li>
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
                        <form action="" method="POST">
                           <div class="card">
                              <div class="card-header">
                                 <ul class="nav nav-tabs nav-primary" id="pills-warningtab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="pills-warninghome-tab" data-bs-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Profil Pasien</a></li>
                                    <li class="nav-item"><a class="nav-link" id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Layanan & Dokter</a></li>
                                 </ul>
                              </div>
                              <div class="card-body file-manager">
                                 <div class="tab-content" id="pills-warningtabContent">
                                    <div class="tab-pane fade show active" id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="via" class="col-sm-2 col-form-label">Sumber Registrasi</label>
                                                <div class="col-sm-10">
                                                   <select name="via" class="form-select form-select-sm" id="via" required="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM sumber_registrasi");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['sumber'] ?>"><?= $row['sumber'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="sebutan" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control form-control-sm" name="nama" id="nama" required="" placeholder="Nama Lengkap Sesuai Identitas">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="ttl" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                                                <div class="col-sm-3">
                                                   <input type="text" class="form-control form-control-sm" name="tempatlahir" placeholder="Tempat Lahir" required="">
                                                </div>
                                                <div class="col-sm-3">
                                                   <input type="date" class="form-control form-control-sm" name="tanggallahir" required="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="gender" class="col-sm-2 col-form-label">Identitas</label>
                                                <div class="col-sm-3">
                                                   <select name="gender" class="form-select form-select-sm" id="gender" required="">
                                                      <option value="">Jenis Kelamin</option>
                                                      <option value="L">Laki Laki</option>
                                                      <option value="P">Perempuan</option>
                                                   </select>
                                                </div>
                                                <div class="col-sm-3">
                                                   <select name="pekerjaan" class="form-select form-select-sm" id="pekerjaan" required="">
                                                      <option value="">Pekerjaan</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM pekerjaan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['pekerjaan'] ?>"><?= $row['pekerjaan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-3">
                                                   <select name="pendidikan" class="form-select form-select-sm" id="pendidikan" required="">
                                                      <option value="">Pendidikan</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM pendidikan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['pendidikan'] ?>"><?= $row['pendidikan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-3">
                                                   <select name="statuskawin" class="form-select form-select-sm" id="statuskawin" required="">
                                                      <option value="">Status</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM status_kawin");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kawin'] ?>"><?= $row['kawin'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-3">
                                                   <select name="jenisbayar" class="form-select form-select-sm" id="jenisbayar" required="">
                                                      <option value="">Jenis Bayar</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM jaminan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['jaminan'] ?>"><?= $row['jaminan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="nohandphone" class="col-sm-2 col-form-label">Narahubung</label>
                                                <div class="col-sm-3">
                                                   <input type="tel" name="nohandphone" id="nohandphone" required="" class="form-control form-control-sm" placeholder="No.Handphone">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                   <textarea name="alamat" class="form-control form-control-sm" id="alamat" cols="30" required="" rows="5"></textarea>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                    </div>
                                    <div class="tab-pane fade" id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="layanan" class="col-sm-2 col-form-label">Poliklinik</label>
                                                <div class="col-sm-10">
                                                   <select name="layanan" class="form-select form-select-sm" id="layanan" required="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM poli");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['nmpoli'] ?>"><?= $row['nmpoli'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="dokter" class="col-sm-2 col-form-label">Dokter</label>
                                                <div class="col-sm-10">
                                                   <select name="dokter" class="form-select form-select-sm" id="dokter" required="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM dokter");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['nama'] ?>"><?= $row['nama'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-2 row">
                                             <label for="tanggal" class="col-sm-2 col-form-label">Tanggal & Waktu</label>
                                             <div class="col-sm-2">
                                                <input type="date" class="form-control form-control-sm" required="" name="tanggal" id="tanggal">
                                             </div>
                                             <div class="col-sm-2">
                                                <input type="time" class="form-control form-control-sm" required="" name="tanggal" id="tanggal">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="row">
                                             <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                                             <div class="col-sm-10">
                                                <textarea name="catatan" class="form-control" id="catatan" cols="30" rows="10"></textarea>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" name="simpanadmisics" class="btn btn-success">Simpan</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid Ends-->
         </div>
         <!-- footer start-->
         <?php
         require '../../template/footer.php';
         ?>
      </div>
   </div>
   <?php
   include 'library.php';
   ?>
</body>

</html>