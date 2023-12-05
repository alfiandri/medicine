<?php
error_reporting(0);
session_start();
$page = "Registrasi Pasien Baru";
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
                              <form action="../controller/integrasi/antrean.php" method="POST">
                                 <div class="row">
                                    <div class="col-6">
                                       <div class="mb-2">
                                          <label for="jenispasien" class="form-label">Jenis Pasien</label>
                                          <select name="jenispasien" id="jenispasien" class="form-select form-select-sm">
                                             <option value="JKN">JKN</option>
                                             <option value="NON JKN">NON JKN</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-2">
                                          <label for="nomorkartu" class="form-label">No.Kartu BPJS</label>
                                          <input type="text" name="nomorkartu" id="nomorkartu" class="form-control form-control-sm">
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-2">
                                          <label for="nik" class="form-label">NIK</label>
                                          <input type="text" name="nik" id="nik" class="form-control form-control-sm">
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-2">
                                          <label for="nama" class="form-label">Nama</label>
                                          <input type="text" name="nama" id="nama" class="form-control form-control-sm">
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-2">
                                          <label for="nohp" class="form-label">No.Handphone</label>
                                          <input type="tel" name="nohp" id="nohp" class="form-control form-control-sm">
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-2">
                                          <label for="namapoli" class="form-label">Poliklinik</label>
                                          <select name="namapoli" id="namapoli" class="form-select form-select-sm">
                                             <?php
                                             $query = tampildata("SELECT * FROM poli");
                                             ?>
                                             <?php foreach ($query as $row) : ?>
                                                <option value="<?= $row['kdpoli'] ?>"><?= $row['nmpoli'] ?></option>
                                             <?php endforeach ?>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-2">
                                          <label for="pasienbaru" class="form-label">Pasien Baru</label>
                                          <select name="pasienbaru" id="pasienbaru" class="form-select form-select-sm">
                                             <option value="1">Ya</option>
                                             <option value="0">Tidak</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-2">
                                          <label for="norm" class="form-label">No.RM</label>
                                          <input type="text" name="norm" id="norm" class="form-control form-control-sm">
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-2">
                                          <label for="tanggalperiksa" class="form-label">Tanggal Periksa</label>
                                          <input type="date" name="tanggalperiksa" id="tanggalperiksa" class="form-control form-control-sm">
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-2">
                                          <label for="namadokter" class="form-label">Dokter</label>
                                          <select name="namadokter" id="namadokter" class="form-select form-select-sm">
                                             <?php
                                             $query = tampildata("SELECT * FROM dokter");
                                             ?>
                                             <?php foreach ($query as $row) : ?>
                                                <option value="<?= $row['nama'] ?>"><?= $row['nama'] ?></option>
                                             <?php endforeach ?>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-2">
                                          <label for="jampraktek" class="form-label">Jadwal Dokter</label>
                                          <select name="jampraktek" id="jampraktek" class="form-select form-select-sm">
                                             <?php
                                             $query = tampildata("SELECT * FROM dokter_sch LIMIT 10");
                                             ?>
                                             <?php foreach ($query as $data) : ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['hari'] ?>, <?= $data['mulai'] ?>-<?= $data['akhir'] ?></option>
                                             <?php endforeach ?>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-2">
                                          <label for="jeniskunjungan" class="form-label">Jenis Kunjungan</label>
                                          <select name="jeniskunjungan" id="jeniskunjungan" class="form-select form-select-sm">
                                             <option value="1">Rujukan FKTP</option>
                                             <option value="2">Rujukan Internal</option>
                                             <option value="3">Kontrol</option>
                                             <option value="4">Rujukan Antar RS</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="mb-2">
                                          <label for="nomorreferensi" class="form-label">No.Referensi</label>
                                          <input type="text" name="nomorreferensi" id="nomorreferensi" class="form-control form-control-sm">
                                       </div>
                                    </div>
                                 </div>
                                 <button class="btn btn-sm btn-success mt-2" type="submit" name="simpanantrean">Simpan</button>
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
      require '../../template/footer.php';
      ?>
   </div>
   </div>
   <?php
   require 'library.php';
   ?>
</body>

</html>