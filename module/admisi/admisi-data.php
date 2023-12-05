<?php
session_start();
$page = "Registrasi Pasien";
require 'view.php';
require '../../controller/admisi/admisi.php';
$id = $_GET['id'];
$status = $_GET['status'];
$info = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nomor_kartu='$id'");
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
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="nama" class="col-sm-2 col-form-label">No.Rekam Medis <span class="text-danger">*</span></label>
                                                <div class="col-sm-3">
                                                   <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="<?= $data['nomor_rm'] ?>">
                                                </div>
                                             </div>
                                          </div>
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
                                                   <input type="text" class="form-control form-control-sm" value="<?= $data['nama_pasien'] ?>" name="nama" id="nama" placeholder="Nama Lengkap Sesuai Identitas">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="kategori" class="col-sm-2 col-form-label">No.ID <span class="text-danger">*</span></label>
                                                <div class="col-sm-3">
                                                   <select name="kategori" class="form-select form-select-sm" id="kategori" required="">
                                                      <option value="<?= $data['kategori_identitas'] ?>"><?= $data['kategori_identitas'] ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM kategori_identitas");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="text" class="form-control form-control-sm" value="<?= $data['nomor_kartu'] ?>" name="nokartu" id="nokartu" required="" placeholder="No.Kartu Identitas">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="ttl" class="col-sm-2 col-form-label">Tempat Tanggal Lahir<span class="text-danger">*</span></label>
                                                <div class="col-sm-3">
                                                   <input type="text" class="form-control form-control-sm" value="<?= $data['tempat_lahir'] ?>" name="tempatlahir" placeholder="Tempat Lahir" required="">
                                                </div>
                                                <div class="col-sm-3">
                                                   <input type="date" class="form-control form-control-sm" value="<?= $data['tanggal_lahir'] ?>" name="tanggallahir" id="tanggallahir" required="">
                                                </div>
                                                <div class="col-sm-3">
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
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Identitas Diri <span class="text-danger">*</span></label>
                                                <div class="col-sm-3">
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
                                                <div class="col-sm-3">
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
                                                <div class="col-sm-3">
                                                   <select name="pekerjaan" class="form-select form-select-sm" id="pekerjaan" required="">
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
                                                <label for="golongandarah" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-3">
                                                   <select name=golongandarah"" class="form-select form-select-sm" id="golongandarah">
                                                      <option value="<?= $data['golongan_darah'] ?>"><?= $data['golongan_darah'] ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM golongan_darah");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['blood'] ?>"><?= $row['blood'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-3">
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
                                                   <input type="email" class="form-control form-control-sm" value="<?= $data['email'] ?>" placeholder="Email" name="email" id="email">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button type="submit" name="ubahpasien" class="btn btn-success btn-sm">Simpan</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div <?php if ($status == 2) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                                    <?php
                                    $visit = $_GET['visit'];
                                    $infovisit = mysqli_query($koneksi, "SELECT * FROM pasien_visit WHERE nomor_visit='$visit'");
                                    $datavisit = mysqli_fetch_array($infovisit);
                                    ?>
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="nomorRM" value="<?= $data['nomor_rm'] ?>">
                                       <input type="hidden" name="tipe" value="<?= $_GET['tipe'] ?>">
                                       <div class="row">
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
                                                         $ket_bayar = "--PILIH JENIS BAYAR--";
                                                      } else {
                                                         $ket_bayar = $bayar;
                                                      }
                                                      ?>
                                                      <option value="<?= $ket_bayar ?>"><?= $ket_bayar ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM jenis_bayar");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['jenis'] ?>"><?= $row['jenis'] ?></option>
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
                                                      $query = tampildata("SELECT * FROM layanan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['layanan'] ?>"><?= $row['layanan'] ?></option>
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
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="nomorRM" value="<?= $data['nomor_rm'] ?>">
                                       <input type="hidden" name="visit" value="<?= $_GET['visit'] ?>">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="warganegara" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                                <div class="col-sm-3">
                                                   <select name="warganegara" class="form-select form-select-sm" id="warganegara" req>
                                                      <?php
                                                      $warganegara = $data['warga_negara'];
                                                      if ($warganegara == NULL) {
                                                         $ket_warga = "--PILIH WARGA NEGARA--";
                                                      } else {
                                                         $ket_warga = $warganegara;
                                                      }
                                                      ?>
                                                      <option value="<?= $ket_warga ?>"><?= $ket_warga ?></option>
                                                      <option value="WNI">WNI</option>
                                                      <option value="WNA">WNA</option>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <select name="negara" class="form-select form-select-sm" id="negara" required="">
                                                      <?php
                                                      $negara = $data['negara'];
                                                      if ($negara == NULL) {
                                                         $ket_negara = "--PILIH NEGARA--";
                                                      } else {
                                                         $ket_negara = $negara;
                                                      }
                                                      ?>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM negara");
                                                      ?>
                                                      <option value="<?= $ket_negara ?>"><?= $ket_negara ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['negara'] ?>"><?= $row['negara'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="alamat" class="col-sm-2 col-form-label">Alamat Domisili</label>
                                                <div class="col-sm-10">
                                                   <textarea name="alamat" class="form-control form-control-sm" id="" cols="30" rows="4"><?= $data['alamat'] ?></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="wilayah" class="col-sm-2 col-form-label">Wilayah</label>
                                                <div class="col-sm-2">
                                                   <select name="provinsi" class="form-select form-select-sm" id="provinsi" required="">
                                                      <?php
                                                      $prov = $data['provinsi'];
                                                      if ($prov == NULL) {
                                                         $ket_prov = "--PROVINSI--";
                                                      } else {
                                                         $ket_prov = $prov;
                                                      }
                                                      ?>
                                                      <option value="<?= $ket_prov ?>"><?= $ket_prov ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM wil_provinsi");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['provinsi'] ?>"><?= $row['provinsi'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2">
                                                   <select name="kabupaten" class="form-select form-select-sm" id="kabupaten" required="">
                                                      <?php
                                                      $kab = $data['kabupaten'];
                                                      if ($kab == NULL) {
                                                         $ket_kab = "--KABUPATEN--";
                                                      } else {
                                                         $ket_kab = $kab;
                                                      }
                                                      ?>
                                                      <option value="<?= $ket_kab ?>"><?= $ket_kab ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM wil_kabupaten");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kab'] ?>"><?= $row['kab'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2">
                                                   <select name="kecamatan" class="form-select form-select-sm" id="kecamatan" required="">
                                                      <?php
                                                      $kec = $data['kecamatan'];
                                                      if ($kec == NULL) {
                                                         $ket_kec = "--KECAMATAN--";
                                                      } else {
                                                         $ket_kec = $kec;
                                                      }
                                                      ?>
                                                      <option value="<?= $ket_kec ?>"><?= $ket_kec ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM wil_kecamatan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kec'] ?>"><?= $row['kec'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2">
                                                   <select name="kelurahan" class="form-select form-select-sm" id="kelurahan" required="">
                                                      <?php
                                                      $kel = $data['kelurahan'];
                                                      if ($kel == NULL) {
                                                         $ket_kel = "--KELURAHAN--";
                                                      } else {
                                                         $ket_kel = $kel;
                                                      }
                                                      ?>
                                                      <option value="<?= $ket_kel   ?>"><?= $ket_kel ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM wil_kelurahan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kel'] ?>"><?= $row['kel'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2">
                                                   <input type="text" class="form-control form-control-sm" placeholder="RT/RW" name="rtrw" id="rtrw" value="<?= $data['rtrw'] ?>">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                                                <div class="col-sm-10">
                                                   <input type="text" value="<?= $data['kodepos'] ?>" class="form-control form-control-sm" name="kodepos" id="kodepos">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button class="btn btn-success btn-sm" type="submit" name="simpanalamat">Simpan</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div <?php if ($status == 4) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-keluarga" role="tabpanel" aria-labelledby="pills-keluarga-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="nomorRM" value="<?= $data['nomor_rm'] ?>">
                                       <input type="hidden" name="visit" value="<?= $_GET['visit'] ?>">
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
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php
                                                $query = tampildata("SELECT * FROM pasien_keluarga WHERE uid_pasien='$id'");
                                                ?>
                                                <?php foreach ($query as $rows) : ?>
                                                   <tr>
                                                      <td><?= $rows['nama_keluarga'] ?></td>
                                                      <td><?= $rows['hubungan'] ?></td>
                                                      <td><?= $rows['no_telepon'] ?></td>
                                                      <td><?= $rows['alamat'] ?></td>
                                                   </tr>

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
                                       <input type="hidden" name="nomorRM" value="<?= $data['nomor_rm'] ?>">
                                       <input type="hidden" name="visit" value="<?= $_GET['visit'] ?>">
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
                                       <input type="hidden" name="nomorRM" value="<?= $data['nomor_rm'] ?>">
                                       <input type="hidden" name="visit" value="<?= $_GET['visit'] ?>">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                                                <div class="col-sm-10">
                                                   <textarea name="catatan" class="form-control form-control-sm" id="" cols="30" rows="10"><?= $data['catatan_khusus'] ?><?= $data['catatan'] ?></textarea>
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
                                       <input type="hidden" name="nomorRM" value="<?= $data['nomor_rm'] ?>">
                                       <input type="hidden" name="visit" value="<?= $visit ?>">
                                       <div class="row">
                                          <div class="col">
                                             <div class="col-12">
                                                <div class="mb-3 row">
                                                   <label for="nomorKK" class="col-sm-2 col-form-label">No.KK</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control form-control-sm" name="nomorKK" id="nomorKK" value="<?= $data['nomor_kk'] ?>">
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
                                                         <?php foreach ($query as $row) : ?>
                                                            <option value="<?= $row['suku'] ?>"><?= $row['suku'] ?></option>
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
                                                         <?php foreach ($query as $row) : ?>
                                                            <option value="<?= $row['bahasa'] ?>"><?= $row['bahasa'] ?></option>
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
                                                <a href="capture?id=<?= $id ?>&status=8" target="_blank" class="btn btn-primary">Webcam</a>
                                                <br>
                                                <?php
                                                $foto = $data['foto'];
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
                                                $ttd = $data['tandatangan'];
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
</body>

</html>