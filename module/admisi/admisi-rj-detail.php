<?php
session_start();
$page = "Registrasi Pasien Baru";
require 'view.php';
require '../../controller/admisi/admisi.php';
$id = $_GET['id'];
$status = $_GET['status'];
$visit = @$_GET['visit'];
$info = mysqli_query($koneksi, "SELECT * FROM pasien WHERE uid_pasien='$id'");
$data = mysqli_fetch_array($info);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require 'head.php';
   ?>
   <script type="text/javascript" src="signature.js"></script>
   <style>
      body {
         padding: 15px;
      }

      #note {
         position: absolute;
         left: 50px;
         top: 35px;
         padding: 0px;
         margin: 0px;
         cursor: default;
      }
   </style>
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
                        <h3><?= $page ?></h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Pasien Baru</li>
                           <li class="breadcrumb-item active">Kelengkapan Informasi </li>
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
                           <div class="card-header">
                              <ul class="nav nav-tabs nav-primary" id="pills-warningtab" role="tablist">
                                 <li class="nav-item"><a <?php if ($status == 1) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-warninghome-tab" data-bs-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Profil Pasien</a></li>
                                 <li class="nav-item"><a <?php if ($status == 2) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Layanan</a></li>
                                 <li class="nav-item"><a <?php if ($status == 3) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-warningcontact-tab" data-bs-toggle="pill" href="#pills-warningcontact" role="tab" aria-controls="pills-warningcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Alamat</a></li>
                                 <li class="nav-item"><a <?php if ($status == 4) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-keluarga-tab" data-bs-toggle="pill" href="#pills-keluarga" role="tab" aria-controls="pills-keluarga" aria-selected="false"><i class="icofont icofont-contacts"></i>Keluarga</a></li>
                                 <li class="nav-item"><a <?php if ($status == 5) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-idcard-tab" data-bs-toggle="pill" href="#pills-idcard" role="tab" aria-controls="pills-idcard" aria-selected="false"><i class="icofont icofont-contacts"></i>ID Card</a></li>
                                 <li class="nav-item"><a <?php if ($status == 6) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-catatan-tab" data-bs-toggle="pill" href="#pills-catatan" role="tab" aria-controls="pills-catatan" aria-selected="false"><i class="icofont icofont-contacts"></i>Catatan</a></li>
                                 <li class="nav-item"><a <?php if ($status == 7) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-datalain-tab" data-bs-toggle="pill" href="#pills-datalain" role="tab" aria-controls="pills-datalain" aria-selected="false"><i class="icofont icofont-contacts"></i>Data Lain</a></li>
                                 <li class="nav-item"><a <?php if ($status == 8) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-fotodiri-tab" data-bs-toggle="pill" href="#pills-fotodiri" role="tab" aria-controls="pills-fotodiri" aria-selected="false"><i class="icofont icofont-contacts"></i>Foto & TTD</a></li>
                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div <?php if ($status == 1) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="mb-2 row">
                                             <label for="nama" class="col-sm-2 col-form-label">No.Rekam Medis <span class="text-danger">*</span></label>
                                             <div class="col-sm-10">
                                                <form method="POST" action="../controller/admisi/validasi-rm?&tipe=<?= $_GET['tipe'] ?>">
                                                   <div class="input-group">
                                                      <?php
                                                      $rm = @$_GET['rm'];
                                                      if ($rm != NULL) {
                                                         $rm = 0;
                                                      } else {
                                                         $rm = $data['nomor_rm'];
                                                      }
                                                      ?>
                                                      <input type="text" name="nomorrm" required="" class="form-control form-control-sm" value="<?= $rm ?>" aria-describedby="basic-addon2">
                                                      <button class="btn btn-outline-danger" type="submit">Cek RM</button>
                                                   </div>
                                                </form>

                                             </div>
                                          </div>
                                       </div>
                                       <form action="" method="POST">
                                          <input type="hidden" name="tipe" value="<?= $_GET['tipe'] ?>">
                                          <input type="hidden" name="id" value="<?= $id ?>">
                                          <input type="hidden" name="nomorrm" value="<?= $data['nomor_rm'] ?>">
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama <span class="text-danger">*</span> </label>
                                                <div class="col-sm-3">
                                                   <select name="sebutan" class="form-select form-select-sm" id="sebutan" required="">
                                                      <option value="<?= $data['sebutan'] ?>"><?= $data['sebutan'] ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM sebutan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['sebutan'] ?>"><?= $row['sebutan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="text" class="form-control form-control-sm" name="nama" id="nama" value="<?= $data['nama_pasien'] ?>" placeholder="Nama Lengkap Sesuai Identitas">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="kategori" class="col-sm-2 col-form-label">No.KTP <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control form-control-sm" name="nokartu" id="nokartu" value="<?= $data['nik'] ?>" required="" placeholder="Nomor Induk Kependudukan">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="kategori" class="col-sm-2 col-form-label">No.Kartu BPJS</label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control form-control-sm" name="nobpjs" id="nobpjs" value="<?= $data['nomor_kartu'] ?>" placeholder="Nomor Kartu BPJS">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="ttl" class="col-sm-2 col-form-label">Tempat Tanggal Lahir </label>
                                                <div class="col-sm-5">
                                                   <input type="text" class="form-control form-control-sm" name="tempatlahir" value="<?= $data['tempat_lahir'] ?>" placeholder="Tempat Lahir" required="">
                                                </div>
                                                <div class="col-sm-5">
                                                   <input type="date" class="form-control form-control-sm" name="tanggallahir" value="<?= $data['tanggal_lahir'] ?>" id="tanggallahir" required="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="agama" class="col-sm-2 col-form-label">Agama <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                   <select name="agama" class="form-select form-select-sm" id="agama" required="">
                                                      <option value="<?= $data['agama'] ?>"><?= $data['agama'] ?></option>
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
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                   <select name="gender" class="form-select form-select-sm" id="gender" required="">
                                                      <option value="<?= $data['gender'] ?>"><?= $data['gender'] ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM gender");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['gender'] ?>"><?= $row['gender'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Pendidikan <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                   <select name="pendidikan" class="form-select form-select-sm" id="pendidikan" required="">
                                                      <option value="<?= $data['pendidikan'] ?>"><?= $data['pendidikan'] ?></option>
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
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan <span class="text-danger">*</span></label>
                                                <div class="col-sm-10">
                                                   <select name="pekerjaan" class=" form-select form-select-sm" id="pekerjaan" required="">
                                                      <option value="<?= $data['pekerjaan'] ?>"><?= $data['pekerjaan'] ?></option>
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
                                                <label for="golongandarah" class="col-sm-2 col-form-label">Golongan Darah</label>
                                                <div class="col-sm-10">
                                                   <select name="golongandarah" class="form-select form-select-sm" id="golongandarah">
                                                      <option value="<?= $data['golongan_darah'] ?>"><?= $data['golongan_darah'] ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM golongan_darah");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['blood'] ?>"><?= $row['blood'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>

                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="golongandarah" class="col-sm-2 col-form-label">Status Perkawinan</label>
                                                <div class="col-sm-10">
                                                   <select name="statuskawin" class="form-select form-select-sm" id="statuskawin" required="">
                                                      <option value="<?= $data['status_kawin'] ?>"><?= $data['status_kawin'] ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM status_kawin");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kawin'] ?>"><?= $row['kawin'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>

                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="notelepon" class="col-sm-2 col-form-label">Narahubung <span class="text-danger">*</span></label>
                                                <div class="col-sm-3">
                                                   <input type="text" class="form-control form-control-sm" value="<?= $data['no_handphone'] ?>" required="" name="notelepon" id="notelepon" placeholder="No.Handphone">
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="email" class="form-control form-control-sm" placeholder="Email" value="<?= $data['email'] ?>" name="email" id="email">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button type="submit" name="ubahpasien" class="btn btn-success btn-sm">Simpan</button>
                                                   <a href="admisi/admisi-rj">
                                                      <button type="button" class="btn btn-light btn-sm">Batal</button>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                    </div>
                                    </form>
                                 </div>
                                 <div <?php if ($status == 2) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                                    <?php
                                    $visit = @$_GET['visit'];
                                    $infovisit = mysqli_query($koneksi, "SELECT * FROM pasien_visit WHERE nomor_visit='$visit'");
                                    $datavisit = mysqli_fetch_array($infovisit);
                                    ?>
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="nomorRM" value="<?= $data['nomor_rm'] ?>">
                                       <input type="hidden" name="tipe" value="<?= @$_GET['tipe'] ?>">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="nomorreferensi" class="col-sm-2 col-form-label">Nomor Referensi</label>
                                                <div class="col-sm-10">
                                                   <div class="input-group">
                                                      <input type="text" name="nomorreferensi" id="nomorreferensi" class="form-control form-control-sm" placeholder="Nomor Referensi" aria-describedby="basic-addon2">
                                                      <button class="btn btn-outline-danger carireferensi">Cari</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="jenislayanan" class="col-sm-2 col-form-label">Jenis Layanan</label>
                                                <div class="col-sm-3">
                                                   <select name="jenislayanan" class="form-select form-select-sm" id="jenislayanan" required="">
                                                      <?php
                                                      $layanan = $datavisit['jenis_layanan'];
                                                      if ($layanan == NULL) {
                                                         $ket_layanan = "--PILIH JENIS LAYANAN--";
                                                      } else {
                                                         $ket_layanan = $layanan;
                                                      }
                                                      ?>
                                                      <option value="<?= $ket_layanan ?>"><?= $ket_layanan ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM jenis_layanan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['jenis'] ?>"><?= $row['jenis'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="jeniskunjungan" class="col-sm-2 col-form-label">Jenis Kunjungan</label>
                                                <div class="col-sm-3">
                                                   <select name="jeniskunjungan" id="jeniskunjungan" class="form-select form-select-sm" required>
                                                      <option value="">--PILIH--</option>
                                                      <option value="1">Rujukan FKTP</option>
                                                      <option value="2">Rujukan Internal</option>
                                                      <option value="3">Kontrol</option>
                                                      <option value="4">Rujukan Antar RS</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="rujukan" class="col-sm-2 col-form-label">Rujukan</label>
                                                <div class="col-sm-3">
                                                   <select name="rujukan" class="form-select form-select-sm" id="rujukan" required="">
                                                      <?php
                                                      $rujukan = $datavisit['rujukan'];
                                                      if ($rujukan == NULL) {
                                                         $ket_rujukan = "--PILIH JENIS RUJUKAN--";
                                                      } else {
                                                         $ket_rujukan = $rujukan;
                                                      }
                                                      ?>
                                                      <option value="<?= $ket_rujukan ?>"><?= $ket_rujukan ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM jenis_rujukan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['rujukan'] ?>"><?= $row['rujukan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="text" class="form-control form-control-sm" placeholder="Catatan" name="catatanrujukan">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="jenisbayar" class="col-sm-2 col-form-label">Jenis Bayar (Jaminan)</label>
                                                <div class="col-sm-3">
                                                   <select name="jenisbayar" class="form-select form-select-sm" id="jenisbayar" required="">
                                                      <?php
                                                      $bayar = $datavisit['jenis_bayar'];
                                                      if ($bayar == NULL) {
                                                         $ket_bayar = "--PILIH JAMINAN--";
                                                      } else {
                                                         $ket_bayar = $bayar;
                                                      }
                                                      ?>
                                                      <option value="<?= $ket_bayar ?>"><?= $ket_bayar ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM jaminan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['jaminan'] ?>"><?= $row['jaminan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="text" class="form-control form-control-sm" placeholder="Catatan" name="catatanbayar">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="layanan" class="col-sm-2 col-form-label">Layanan RS</label>
                                                <div class="col-sm-3">
                                                   <select name="layanan" class="form-select form-select-sm" id="layanan" required="">
                                                      <?php
                                                      $lay = $datavisit['layanan'];
                                                      if ($lay == NULL) {
                                                         $ket_lay = "--PILIH LAYANAN--";
                                                      } else {
                                                         $ket_lay = $lay;
                                                      }
                                                      ?>
                                                      <option value=""><?= $ket_lay ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM poli");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kdpoli'] ?>"><?= $row['nmpoli'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <select name="dokter" class="form-select form-select-sm" id="dokter" required="">
                                                      <?php
                                                      $dokter = $datavisit['dokter'];
                                                      if ($dokter == NULL) {
                                                         $ket_dokter = "--PILIH DOKTER--";
                                                      } else {
                                                         $ket_dokter = $dokter;
                                                      }
                                                      ?>
                                                      <option value="<?= $ket_dokter ?>"><?= $ket_dokter ?></option>
                                                   </select>
                                                </div>
                                                <input type="hidden" name="jadwal" class="jadwal">
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="kodebooking" class="col-sm-2 col-form-label">Kode Booking</label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control form-control-sm" name="kodebooking" id="kodebooking" value="<?= @$data['kodebooking'] ?>" placeholder="Kode Booking">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="layanan" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-3">
                                                   <button type="submit" name="simpanlayanan" class="btn btn-success btn-sm">Simpan</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>

                                 </div>
                                 <div <?php if ($status == 3) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-warningcontact" role="tabpanel" aria-labelledby="pills-warningcontact-tab">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="mb-2 row">
                                             <label for="warganegara" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control form-control-sm" value="<?= $data['warga_negara'] ?>" readonly name="" id="">
                                             </div>
                                             <div class="col-sm-7">
                                                <input type="text" class="form-control form-control-sm" value="<?= $data['negara'] ?>" readonly name="" id="">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-2 row">
                                             <label for="alamat" class="col-sm-2 col-form-label">Alamat Domisili</label>
                                             <div class="col-sm-10">
                                                <textarea name="alamat" readonly class="form-control form-control-sm" id="" cols="30" rows="4"><?= $data['alamat'] ?></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-2 row">
                                             <label for="kodepos" class="col-sm-2 col-form-label">Provinsi</label>
                                             <div class="col-sm-10 mb-2">
                                                <input type="text" value="<?= $data['provinsi'] ?>" class="form-control form-control-sm" readonly name="kodepos" id="kodepos">
                                             </div>
                                             <label for="kodepos" class="col-sm-2 col-form-label">Kabupaten</label>
                                             <div class="col-sm-10 mb-2">
                                                <input type="text" value="<?= $data['kabupaten'] ?>" class="form-control form-control-sm" readonly name="kodepos" id="kodepos">
                                             </div>
                                             <label for="kodepos" class="col-sm-2 col-form-label">Kecamatan</label>
                                             <div class="col-sm-10 mb-2">
                                                <input type="text" value="<?= $data['kecamatan'] ?>" class="form-control form-control-sm" readonly name="kodepos" id="kodepos">
                                             </div>
                                             <label for="kodepos" class="col-sm-2 col-form-label">Kelurahan</label>
                                             <div class="col-sm-10 mb-2">
                                                <input type="text" value="<?= $data['kelurahan'] ?>" class="form-control form-control-sm" readonly name="kodepos" id="kodepos">
                                             </div>
                                             <label for="kodepos" class="col-sm-2 col-form-label">RT/RW</label>
                                             <div class="col-sm-10 mb-2">
                                                <input type="text" value="<?= $data['rtrw'] ?>" class="form-control form-control-sm" readonly name="kodepos" id="kodepos">
                                             </div>
                                             <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                                             <div class="col-sm-10">
                                                <input type="text" value="<?= $data['kodepos'] ?>" class="form-control form-control-sm" readonly name="kodepos" id="kodepos">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="" class="col-sm-2 col-form-label"></label>
                                             <div class="col-sm-10">
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addalamat" type="button">Simpan</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="modal fade" id="addalamat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <form action="" method="POST" enctype="multipart/form-data">
                                             <input type="hidden" name="id" value="<?= $id ?>">
                                             <input type="hidden" name="status" value="<?= $_GET['status'] ?>">
                                             <input type="hidden" name="visit" value="<?= $_GET['visit'] ?>">
                                             <div class="modal-body">
                                                <div class="mb-3">
                                                   <label for="dokumen" class="form-label">Warga Negara</label>
                                                   <select name="warganegara" class="form-select form-select-sm" id="warganegara" required="">
                                                      <option value="">PILIH</option>
                                                      <option value="WNI">WNI</option>
                                                      <option value="WNA">WNA</option>
                                                   </select>
                                                </div>
                                                <div class="mb-3">
                                                   <label for="negara" class="form-label">Negara</label>
                                                   <input class="form-control" list="datalistOptions" id="negara" name="negara" placeholder="Type to search...">
                                                   <datalist id="datalistOptions">
                                                      <?php
                                                      $query = tampildata("SELECT * FROM negara");
                                                      ?>
                                                      <?php foreach ($query as $data) : ?>
                                                         <option value="<?= $data['name'] ?>">
                                                         <?php endforeach ?>
                                                   </datalist>
                                                </div>
                                                <div class="mb-3">
                                                   <label for="alamat" class="form-label">Alamat</label>
                                                   <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="5"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                   <label for="provinsi" class="form-label">Provinsi</label>
                                                   <select name="provinsi" class="form-select form-select-sm" id="provinsi" required="">
                                                      <option value="">Pilih Provinsi</option>
                                                      <?php
                                                      $sql1 = mysqli_query($koneksi, "SELECT * FROM wil_provinsi");
                                                      while ($prov = mysqli_fetch_array($sql1)) { ?>
                                                         <option value="<?php echo $prov['id']; ?>"><?php echo $prov['provinsi']; ?></option>
                                                      <?php } ?>
                                                   </select>
                                                </div>
                                                <div class="mb-3" id="a">
                                                   <label for="kabupaten" class="form-label">Kabupaten</label>
                                                   <select name="kabupaten" id="kabupaten" required="" class="form-select form-select-sm">
                                                      <option selected>Pilih Kabupaten</option>
                                                   </select>
                                                </div>
                                                <div class="mb-3" id="b">
                                                   <label for="kecamatan" class="form-label">Kecamatan</label>
                                                   <select name="kecamatan" id="kecamatan" required="" class="form-select form-select-sm">
                                                      <option selected>Pilih Kecamatan</option>
                                                   </select>
                                                </div>
                                                <div class="mb-3" id="c">
                                                   <label for="kelurahan" class="form-label">Kelurahan</label>
                                                   <select name="kelurahan" id="kelurahan" required="" class="form-select form-select-sm">
                                                      <option selected>Pilih Kelurahan</option>
                                                   </select>
                                                </div>
                                                <div class="mb-3">
                                                   <label for="rtrw" class="form-label">RT RW</label>
                                                   <input type="text" class="form-control" name="rtrw" id="rtrw">
                                                </div>
                                             </div>
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary" name="simpanalamat">Simpan</button>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>

                                 <div <?php if ($status == 4) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-keluarga" role="tabpanel" aria-labelledby="pills-keluarga-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="nomorRM" value="<?= @$data['nomor_rm'] ?>">
                                       <input type="hidden" name="visit" value="<?= @$_GET['visit'] ?>">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="hubungan" class="col-sm-2 col-form-label">Hubungan</label>
                                                <div class="col-sm-3">
                                                   <select name="hubungan" class="form-select form-select-sm" id="hubungan" required="">
                                                      <option value="">--PILIH HUBUNGAN--</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM hubungan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['hubungan'] ?>"><?= $row['hubungan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="text" class="form-control form-control-sm" placeholder="Nama Lengkap" name="nama" id="nama" required="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                   <textarea name="alamat" class="form-control form-control-sm" id="" cols="30" required="" rows="2"></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="notelepon" class="col-sm-2 col-form-label">No.Kontak</label>
                                                <div class="col-sm-3">
                                                   <input type="tel" class="form-control form-control-sm"" placeholder=" No.Handphone" name="notelepon" id="notelepon">
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="email" class="form-control form-control-sm" placeholder="Email" name="email" id="email">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="notelepon" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button class="btn btn-success btn-sm" type="submit" name="simpankeluarga">Simpan</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                    <hr>
                                    <div class="row">
                                       <div class="col-12">
                                          <table class="table table-primary table-responsive table-striped">
                                             <thead class="bg-dark">
                                                <tr class="table-success">
                                                   <th class="text-dark">Nama</th>
                                                   <th class="text-dark">Hubungan</th>
                                                   <th class="text-dark">No.Telepon</th>
                                                   <th class="text-dark">Alamat</th>
                                                   <th class="text-dark">Email</th>
                                                   <th class="text-center text-dark">Actions</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php
                                                $query = tampildata("SELECT * FROM pasien_keluarga WHERE uid_pasien='$id'");
                                                ?>
                                                <?php foreach ($query as $rows) : ?>
                                                   <tr>
                                                      <td><?= $rows['nama'] ?></td>
                                                      <td><?= $rows['hubungan'] ?></td>
                                                      <td><?= $rows['telepon'] ?></td>
                                                      <td><?= $rows['alamat'] ?></td>
                                                      <td><?= $rows['email'] ?></td>
                                                      <td class="text-center col-3">
                                                         <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ubah<?= $rows['id'] ?>">Ubah</button>
                                                         <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?= $rows['id'] ?>">Hapus</button>
                                                      </td>
                                                   </tr>
                                                   <div class="modal fade" id="ubah<?= $rows['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <h1 class="modal-title fs-5" id="staticBackdropLabel">Perubahan Data</h1>
                                                               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="" method="POST">
                                                               <input type="hidden" name="id" value="<?= $id ?>">
                                                               <input type="hidden" name="status" value="<?= $_GET['status'] ?>">
                                                               <input type="hidden" name="visit" value="<?= $_GET['visit'] ?>">
                                                               <input type="hidden" name="iddata" value="<?= $rows['id'] ?>">
                                                               <div class="modal-body">
                                                                  <div class="mb-3">
                                                                     <label for="dokumen" class="form-label">Hubungan</label>
                                                                     <select name="hubungan" class="form-select form-select-sm" id="hubungan" required="">
                                                                        <option value="<?= $rows['hubungan'] ?>"><?= $rows['hubungan'] ?></option>
                                                                        <?php
                                                                        $query = tampildata("SELECT * FROM hubungan");
                                                                        ?>
                                                                        <?php foreach ($query as $row) : ?>
                                                                           <option value="<?= $row['hubungan'] ?>"><?= $row['hubungan'] ?></option>
                                                                        <?php endforeach ?>
                                                                     </select>
                                                                  </div>
                                                                  <div class="mb-3">
                                                                     <label for="nama" class="form-label">Nama</label>
                                                                     <input type="text" name="nama" id="nama" value="<?= $rows['nama'] ?>" class="form-control">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                     <label for="telepon" class="form-label">No.Telepon</label>
                                                                     <input type="tel" name="telepon" id="telepon" value="<?= $rows['telepon'] ?>" class="form-control">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                     <label for="email" class="form-label">Email</label>
                                                                     <input type="email" name="email" id="email" value="<?= $rows['email'] ?>" class="form-control">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                     <label for="alamat" class="form-label">Alamat</label>
                                                                     <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="5"><?= $rows['alamat'] ?></textarea>
                                                                  </div>
                                                               </div>
                                                               <div class="modal-footer">
                                                                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                  <button type="submit" class="btn btn-primary" name="ubahkeluarga">Simpan</button>
                                                               </div>
                                                            </form>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!-- Modal -->
                                                   <div class="modal fade" id="hapus<?= $rows['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
                                                               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="" method="POST">
                                                               <input type="hidden" name="id" value="<?= $id ?>">
                                                               <input type="hidden" name="status" value="<?= $_GET['status'] ?>">
                                                               <input type="hidden" name="visit" value="<?= $_GET['visit'] ?>">
                                                               <input type="hidden" name="iddata" value="<?= $rows['id'] ?>">
                                                               <div class="modal-body">
                                                                  <p>Apakah anda yakin menghapus data keluarga <strong><?= $rows['nama'] ?></strong> secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                               </div>
                                                               <div class="modal-footer">
                                                                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                  <button type="submit" name="hapuskeluarga" class="btn btn-danger">Ya, Hapus</button>
                                                               </div>
                                                            </form>
                                                         </div>
                                                      </div>
                                                   </div>

                                                <?php endforeach ?>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>

                                 </div>
                                 <div <?php if ($status == 5) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-idcard" role="tabpanel" aria-labelledby="pills-idcard-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="nomorRM" value="<?= @$data['nomor_rm'] ?>">
                                       <input type="hidden" name="visit" value="<?= @$_GET['visit'] ?>">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="kategori" class="col-sm-2 col-form-label">Kategori ID</label>
                                                <div class="col-sm-3">
                                                   <select name="kategori" class="form-select form-select-sm" id="kategori" required="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM kategori_identitas");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="text" class="form-control form-control-sm" placeholder="No.Kartu Identitas" name="nomorKartu" id="nomorKartu" required="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-3">
                                                   <button class="btn btn-success btn-sm" type="submit" name="simpanid">Simpan</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                    <hr>
                                    <div class="row">
                                       <div class="col-12">
                                          <table class="table table-primary table-responsive table-striped">
                                             <thead class="bg-dark">
                                                <tr class="table-success">
                                                   <th class="text-dark">Kategori ID</th>
                                                   <th class="text-dark">No.Kartu</th>
                                                   <th class="text-dark">File</th>
                                                   <th class="text-dark">Upload Time</th>
                                                   <th class="text-dark text-center">Aksi</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php
                                                $query = tampildata("SELECT * FROM pasien_id WHERE uid_pasien='$id'");
                                                ?>
                                                <?php foreach ($query as $ro) : ?>
                                                   <tr>
                                                      <td><?= $ro['kategori'] ?></td>
                                                      <td><?= $ro['nomor_kartu'] ?></td>
                                                      <td>
                                                         <?php
                                                         $dok = $ro['dokumen'];
                                                         if ($dok == NULL) { ?>
                                                            <span class="badge bg-danger">File Belum di Upload</span>
                                                         <?php } else { ?>
                                                            <a href="../file/dokumen/<?= $ro['dokumen'] ?>" target="_blank">
                                                               <span class="badge bg-primary">Lihat File</span>
                                                            </a>
                                                         <?php }
                                                         ?>
                                                      </td>
                                                      <td><?= $row['createAt'] ?></td>
                                                      <td class="text-center col-sm-2">
                                                         <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#upload<?= $ro['id'] ?>">Upload File</button>
                                                      </td>
                                                   </tr>

                                                   <!-- Modal -->
                                                   <div class="modal fade" id="upload<?= $ro['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                         <div class="modal-content">
                                                            <div class="modal-header">
                                                               <h1 class="modal-title fs-5" id="staticBackdropLabel">Upload File</h1>
                                                               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="" enctype="multipart/form-data" method="POST">
                                                               <input type="hidden" name="id" value="<?= $ro['id'] ?>">
                                                               <input type="hidden" name="uid" value="<?= $id ?>">
                                                               <input type="hidden" name="nomorRM" value="<?= $data['nomor_rm'] ?>">
                                                               <input type="hidden" name="visit" value="<?= $_GET['visit'] ?>">
                                                               <div class="modal-body">
                                                                  <div class="mb-3">
                                                                     <label for="dokumen" class="form-label">File</label>
                                                                     <input type="file" class="form-control" id="dokumen" name="dokumen">
                                                                  </div>
                                                               </div>
                                                               <div class="modal-footer">
                                                                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                  <button type="submit" name="simpanfileid" class="btn btn-success">Upload File</button>
                                                               </div>
                                                            </form>
                                                         </div>
                                                      </div>
                                                   </div>
                                                <?php endforeach ?>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                                 <div <?php if ($status == 6) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-catatan" role="tabpanel" aria-labelledby="pills-catatan-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="nomorRM" value="<?= @$data['nomor_rm'] ?>">
                                       <input type="hidden" name="visit" value="<?= @$_GET['visit'] ?>">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                                                <div class="col-sm-10">
                                                   <textarea name="catatan" class="form-control form-control-sm" id="" cols="30" rows="10"><?= @$data['catatan'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="catatan" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button class="btn btn-success btn-sm" type="submit" name="simpancatatan">Simpan</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div <?php if ($status == 7) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-datalain" role="tabpanel" aria-labelledby="pills-idcard-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="nomorRM" value="<?= @$data['nomor_rm'] ?>">
                                       <input type="hidden" name="visit" value="<?= @$visit ?>">
                                       <div class="row">
                                          <div class="col">
                                             <div class="col-12">
                                                <div class="mb-3 row">
                                                   <label for="nomorKK" class="col-sm-2 col-form-label">No.KK</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control form-control-sm" name="nomorKK" id="nomorKK" value="<?= @$data['nomor_kk'] ?>">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="mb-3 row">
                                                   <label for="suku" class="col-sm-2 col-form-label">Suku</label>
                                                   <div class="col-sm-10">
                                                      <select name="suku" class="form-select form-select-sm" id="suku" required="">
                                                         <?php
                                                         $suku = $data['suku'];
                                                         if ($suku == NULL) {
                                                            $ket_suku = "--PILIH SUKU--";
                                                         } else {
                                                            $ket_suku = $suku;
                                                         }
                                                         ?>
                                                         <option value="<?= $ket_suku ?>"><?= $ket_suku ?></option>
                                                         <?php
                                                         $query = tampildata("SELECT * FROM suku");
                                                         ?>
                                                         <?php foreach ($query as $rowss) : ?>
                                                            <option value="<?= $rowss['suku'] ?>"><?= $rowss['suku'] ?></option>
                                                         <?php endforeach ?>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="mb-3 row">
                                                   <label for="bahasa" class="col-sm-2 col-form-label">Bahasa</label>
                                                   <div class="col-sm-10">
                                                      <select name="bahasa" class="form-select form-select-sm" id="bahasa" required="">
                                                         <?php
                                                         $bahasa = $data['bahasa'];
                                                         if ($bahasa == NULL) {
                                                            $ket_bahasa = "--PILIH BAHASA--";
                                                         } else {
                                                            $ket_bahasa = $bahasa;
                                                         }
                                                         ?>
                                                         <option value="<?= $ket_bahasa ?>"><?= $ket_bahasa ?></option>
                                                         <?php
                                                         $query = tampildata("SELECT * FROM bahasa");
                                                         ?>
                                                         <?php foreach ($query as $rowss) : ?>
                                                            <option value="<?= $rowss['bahasa'] ?>"><?= $rowss['bahasa'] ?></option>
                                                         <?php endforeach ?>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="mb-3 row">
                                                   <label for="bahasa" class="col-sm-2 col-form-label"></label>
                                                   <div class="col-sm-10">
                                                      <button class="btn btn-success btn-sm" type="submit" name="simpantambahan">Simpan</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div <?php if ($status == 8) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-fotodiri" role="tabpanel" aria-labelledby="pills-fotodiri-tab">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="card">
                                             <div class="card-body">
                                                <h5 class="card-title">Foto Diri</h5>
                                                <p class="card-text">Foto dapat diperbarui dengan cara upload file ataupun menggunakan capture langsung dengan memanfaatkan webcam</p>
                                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#uploadfoto" class="btn btn-primary">Upload</a>
                                                <a href="admisi/capture?id=<?= $id ?>&status=8" target="_blank" class="btn btn-primary">Webcam</a>
                                                <br>
                                                <?php
                                                $foto = @$data['foto'];
                                                if ($foto == NULL) {
                                                   $pathfoto = '../assets/notfoundimage.jpeg';
                                                } else {
                                                   $pathfoto = '../file/fotopasien/' . $foto;
                                                }
                                                ?>
                                                <img src="<?= $pathfoto ?>" class="card-img-top mt-4" alt="...">
                                             </div>

                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="card">
                                             <div class="card-body">
                                                <h5 class="card-title">Tanda Tangan</h5>
                                                <p class="card-text">Tanda tangan dapat dilakukan langsung di mediapad area yang telah disediakan untuk dapat digunakan sebagai identitas assesment</p>
                                                <a href="tandatangan?id=<?= $id ?>&status=8" target="blank" class="btn btn-primary">Tanda Tangan</a>
                                                <?php
                                                $ttd = @$data['tandatangan'];
                                                if ($ttd == NULL) {
                                                   $pathttd = '../assets/notfoundimage.jpeg';
                                                } else {
                                                   $pathttd = '../file/ttdpasien/' . $ttd;
                                                }
                                                ?>
                                                <img src="<?= $pathttd ?>" class="card-img-top mt-4" alt="...">
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

   <div class="modal fade" id="uploadfoto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
               <input type="hidden" name="uidpasien" value="<?= $id ?>">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="dokumen" class="form-label">File</label>
                     <input type="file" class="form-control form-control-sm" id="dokumen" name="dokumen">
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary" name="simpanfoto">Simpan</button>
               </div>
            </form>
         </div>
      </div>
   </div>


   <div class="modal fade" id="ttd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form method="POST" action="../controller/ttd" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?= $_SESSION['uid'] ?>">
                  <div id="signature-pad">
                     <div style="border:solid 1px teal; width:470px;height:400px;padding:3px;position:relative;">
                        <div id="note" onmouseover="my_function();">Lakukan Tanda Tangan Digital Disini</div>
                        <canvas id="the_canvas" width="470px" height="400px"></canvas>
                     </div>
                  </div>
            </div>
            <div class="modal-footer">
               <input type="hidden" id="signature" name="signature">
               <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
               <button type="button" id="clear_btn" class="btn btn-light" data-action="clear"><span class="glyphicon glyphicon-remove"></span>Hapus</button>
               <button type="button" class="btn btn-primary" data-action="save-png"><span class="glyphicon glyphicon-ok">Simpan</button>
            </div>
            <form>
         </div>
      </div>
   </div>

   <?php
   require 'library.php';
   ?>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   <script>
      var kab = document.getElementById('a');
      var kec = document.getElementById('b');
      var kel = document.getElementById('c');
      var prov = document.getElementById('provinsi');
      var kabu = document.getElementById('kabupaten');
      var kelu = document.getElementById('kecamatan');
      kab.style.display = 'none';
      kec.style.display = 'none';
      kel.style.display = 'none';

      $(document).ready(function() {
         $('body').on('change', '#provinsi', function() {
            if (prov.value == "") {
               kab.style.display = 'none';
               kec.style.display = 'none';
               kel.style.display = 'none';
            } else {
               kab.style.display = 'block';
               kec.style.display = 'none';
               kel.style.display = 'none';
            }
            var a = document.getElementById('provinsi').value;
            var data = "data=kab&no=" + a;
            $.ajax({
               type: 'GET',
               url: "admisi/proses.php",
               data: data,
               success: function(hasil) {
                  $("#kabupaten").html(hasil);
               },
               error: function() {
                  alert("Terjadi kesalahan saat mengambil data.");
               }
            })
         })
      })
      $(document).ready(function() {
         $('body').on('change', '#kabupaten', function() {
            if (kabu.value == "") {
               kec.style.display = 'none';
               kel.style.display = 'none';
            } else {
               kec.style.display = 'block';
               kel.style.display = 'none';
            }
            var a = document.getElementById('kabupaten').value;
            var data = "data=kec&no=" + a;
            $.ajax({
               type: 'GET',
               url: "admisi/proses.php",
               data: data,
               success: function(hasil) {
                  $("#kecamatan").html(hasil);
               },
               error: function() {
                  alert("Terjadi kesalahan saat mengambil data.");
               }
            })
         })
      })
      $(document).ready(function() {
         $('body').on('change', '#kecamatan', function() {
            if (kabu.value == "") {
               kel.style.display = 'none';
            } else {
               kel.style.display = 'block';
            }
            var a = document.getElementById('kecamatan').value;
            var data = "data=kel&no=" + a;
            $.ajax({
               type: 'GET',
               url: "admisi/proses.php",
               data: data,
               success: function(hasil) {
                  $("#kelurahan").html(hasil);
               },
               error: function() {
                  alert("Terjadi kesalahan saat mengambil data.");
               }
            })
         })
      });

      function caridokter(poli) {
         // Make an AJAX request
         $.ajax({
            url: '../controller/antrian/ambil-dokter',
            type: 'POST',
            data: {
               poli: poli
            },
            dataType: 'json',
            success: function(data) {
               // Clear existing options
               $('#dokter').empty();

               // Populate options based on the response
               $('#dokter').append(`<option value="">-- Pilih Dokter --</option>`);

               $.each(data, function(index, dokter) {
                  $('#dokter').append(`<option value="${dokter.kodedokter}" data-jadwal="${dokter.jadwal}">${dokter.namadokter}</option>`);
               });
            },
            error: function(xhr, status, error) {
               console.error('Error:', error);
            }
         });
      }

      $('#layanan').on('change', function() {
         // Get the selected category value
         const poli = $(this).val();
         caridokter(poli);
      });

      $('#dokter').on('change', function() {
         // Get the selected category value
         var selectedOption = $(this).find('option:selected');

         var jadwal = selectedOption.data('jadwal');

         $('.jadwal').val(jadwal);
      });

      $('.carireferensi').on('click', function(e) {
         e.preventDefault();

         const nomorreferensi = $('#nomorreferensi').val();

         $.ajax({
            url: '../controller/admisi/cari-referensi',
            type: 'POST',
            data: {
               nomorreferensi: nomorreferensi,
            },
            dataType: 'json',
            success: function(data) {
               const metadata = data.metadata;
               if (metadata.code != 200) {
                  swal(metadata.message);
                  return;
               }
               $('#jenislayanan').val(data.data.jenislayanan);
               $('#layanan').val(data.data.layanan);
               $('#jenisbayar').val(data.data.jenisbayar);

               caridokter(data.data.layanan);
            },
            error: function(xhr, status, error) {
               console.error('Error:', error);
            }
         });
      });
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
   </script>
</body>

</html>