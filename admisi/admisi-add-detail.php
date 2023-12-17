<?php
$page = "Registrasi Pasien Baru";
require '../db/connect.php';
require '../controller/view.php';
require '../controller/admisi.php';
$id = $_GET['id'];
$info = mysqli_query($koneksi, "SELECT * FROM pasien WHERE uidPasien='$id'");
$data = mysqli_fetch_array($info);
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
                        <h3>Registrasi Pasien Baru</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Registrasi</li>
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
                                 <li class="nav-item"><a class="nav-link active" id="pills-warninghome-tab" data-bs-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Profil Pasien</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Layanan</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-warningcontact-tab" data-bs-toggle="pill" href="#pills-warningcontact" role="tab" aria-controls="pills-warningcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Alamat</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-keluarga-tab" data-bs-toggle="pill" href="#pills-keluarga" role="tab" aria-controls="pills-keluarga" aria-selected="false"><i class="icofont icofont-contacts"></i>Keluarga</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-idcard-tab" data-bs-toggle="pill" href="#pills-idcard" role="tab" aria-controls="pills-idcard" aria-selected="false"><i class="icofont icofont-contacts"></i>ID Card</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-catatan-tab" data-bs-toggle="pill" href="#pills-catatan" role="tab" aria-controls="pills-catatan" aria-selected="false"><i class="icofont icofont-contacts"></i>Catatan</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-datalain-tab" data-bs-toggle="pill" href="#pills-datalain" role="tab" aria-controls="pills-datalain" aria-selected="false"><i class="icofont icofont-contacts"></i>Data Lain</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-fotodiri-tab" data-bs-toggle="pill" href="#pills-fotodiri" role="tab" aria-controls="pills-fotodiri" aria-selected="false"><i class="icofont icofont-contacts"></i>Foto & TTD</a></li>
                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div class="tab-pane fade show active" id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <form action="" method="POST">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="nama" class="col-sm-2 col-form-label">No.Rekam Medis</label>
                                                <div class="col-sm-3">
                                                   <input type="text" class="form-control" name="nomorRM" value="<?= $data['nomorRM'] ?>">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-3">
                                                   <select name=sebutan"" class="form-select" id="nama" required="">
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
                                                   <input type="text" class="form-control" name="nama" id="nama" value="<?= $data['namaPasien'] ?>" placeholder="Nama Lengkap Sesuai Identitas">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="kategori" class="col-sm-2 col-form-label">No.ID</label>
                                                <div class="col-sm-3">
                                                   <select name=kategori"" class="form-select" id="kategori" required="">
                                                      <option value="<?= $data['kategoriID'] ?>"><?= $data['kategoriID'] ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM kategoriIdentitas");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="text" class="form-control" name="nokartu" id="nokartu" value="<?= $data['nomorKartu'] ?>" required="" placeholder="No.Kartu Identitas">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="ttl" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                                                <div class="col-sm-3">
                                                   <input type="text" class="form-control" name="tempatlahir" value="<?= $data['tempatLahir'] ?>" placeholder="Tempat Lahir" required="">
                                                </div>
                                                <div class="col-sm-3">
                                                   <input type="date" class="form-control" name="tanggallahir" value="<?= $data['tanggalLahir'] ?>" id="tanggallahir" required="">
                                                </div>
                                                <div class="col-sm-3">
                                                   <select name="agama" class="form-select" id="agama" required="">
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
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Identitas Diri</label>
                                                <div class="col-sm-3">
                                                   <select name="gender" class="form-select" id="gender" required="">
                                                      <option value="<?= $data['gender'] ?>"><?= $data['gender'] ?></option>
                                                      <option value="L">Laki Laki</option>
                                                      <option value="P">Perempuan</option>
                                                   </select>
                                                </div>
                                                <div class="col-sm-3">
                                                   <select name=pendidikan"" class="form-select" id="pendidikan" required="">
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
                                                   <select name=pekerjaan"" class="form-select" id="pekerjaan" required="">
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
                                             <div class="mb-3 row">
                                                <label for="golongandarah" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-3">
                                                   <select name=golongandarah"" class="form-select" id="golongandarah">
                                                      <option value="<?= $data['golonganDarah'] ?>"><?= $data['golonganDarah'] ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM golonganDarah");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['golonganDarah'] ?>"><?= $row['golonganDarah'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-3">
                                                   <select name=statuskawin"" class="form-select" id="statuskawin" required="">
                                                      <option value="<?= $data['statusKawin'] ?>"><?= $data['statusKawin'] ?></option>
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
                                             <div class="mb-3 row">
                                                <label for="notelepon" class="col-sm-2 col-form-label">Narahubung</label>
                                                <div class="col-sm-3">
                                                   <input type="text" class="form-control" name="notelepon" value="<?= $data['noHandphone'] ?>" id="notelepon" placeholder="No.Handphone">
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="email" class="form-control" placeholder="Email" value="<?= $data['email'] ?>" name="email" id="email">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button type="submit" name="simpanpasienbaru" class="btn btn-success">Simpan</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="tab-pane fade" id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                                    <form action="" method="POST">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="jenislayanan" class="col-sm-2 col-form-label">Jenis Layanan</label>
                                                <div class="col-sm-3">
                                                   <select name=jenislayanan"" class="form-select" id="jenislayanan" required="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM jenisLayanan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['jenis'] ?>"><?= $row['jenis'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="rujukan" class="col-sm-2 col-form-label">Rujukan</label>
                                                <div class="col-sm-3">
                                                   <select name=rujukan"" class="form-select" id="rujukan" required="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM jenisRujukan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['rujukan'] ?>"><?= $row['rujukan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="text" class="form-control" placeholder="Catatan" name="catatanrujukan">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="jenisbayar" class="col-sm-2 col-form-label">Jenis Bayar (Jaminan)</label>
                                                <div class="col-sm-3">
                                                   <select name=jenisbayar"" class="form-select" id="jenisbayar" required="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM jenisBayar");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['jenis'] ?>"><?= $row['jenis'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="text" class="form-control" placeholder="Catatan" name="catatanbayar">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="layanan" class="col-sm-2 col-form-label">Layanan RS</label>
                                                <div class="col-sm-3">
                                                   <select name=layanan"" class="form-select" id="layanan" required="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM layanan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['layanan'] ?>"><?= $row['layanan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <select name=dokter"" class="form-select" id="dokter" required="">
                                                      <option value="">Dokter</option>
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
                                                   <button type="submit" name="simpanlayanan" class="btn btn-success">Simpan</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>

                                 </div>
                                 <div class="tab-pane fade" id="pills-warningcontact" role="tabpanel" aria-labelledby="pills-warningcontact-tab">
                                    <form action="" method="POST">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="warganegara" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                                <div class="col-sm-3">
                                                   <select name="warganegara" class="form-select" id="warganegara" req>
                                                      <option value="WNI">WNI</option>
                                                      <option value="WNA">WNA</option>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <select name=negara"" class="form-select" id="negara" required="">
                                                      <?php
                                                      $query = tampildata("SELECT * FROM negara");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['negara'] ?>"><?= $row['negara'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="alamat" class="col-sm-2 col-form-label">Alamat Domisili</label>
                                                <div class="col-sm-10">
                                                   <textarea name="alamat" class="form-control" id="" cols="30" rows="4"></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="wilayah" class="col-sm-2 col-form-label">Wilayah</label>
                                                <div class="col-sm-2">
                                                   <select name="provinsi" class="form-select" id="provinsi" required="">
                                                      <option value="">Provinsi</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM wilProvinsi");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['provinsi'] ?>"><?= $row['provinsi'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2">
                                                   <select name="kabupaten" class="form-select" id="kabupaten" required="">
                                                      <option value="">Kabupaten</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM wilKabupaten");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kabupaten'] ?>"><?= $row['kabupaten'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2">
                                                   <select name="kecamatan" class="form-select" id="kecamatan" required="">
                                                      <option value="">Kecamatan</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM wilKecamatan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kecamatan'] ?>"><?= $row['kecamatan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2">
                                                   <select name="kelurahan" class="form-select" id="kelurahan" required="">
                                                      <option value="">Kelurahan</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM wilKelurahan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kelurahan'] ?>"><?= $row['kelurahan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2">
                                                   <input type="text" class="form-control" placeholder="RT/RW" name="rtrw" id="rtrw">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control" name="kodepos" id="kodepos">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="kodepos" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button class="btn btn-success">Simpan</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="tab-pane fade" id="pills-keluarga" role="tabpanel" aria-labelledby="pills-keluarga-tab">
                                    <form action="" method="POST">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="hubungan" class="col-sm-2 col-form-label">Hubungan</label>
                                                <div class="col-sm-3">
                                                   <select name="hubungan" class="form-select" id="hubungan" required="">
                                                      <option value="">Hubungan Keluarga</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM hubungan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['hubungan'] ?>"><?= $row['hubungan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" id="nama" required="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                   <textarea name="alamat" class="form-control" id="" cols="30" required="" rows="2"></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="notelepon" class="col-sm-2 col-form-label">No.Kontak</label>
                                                <div class="col-sm-3">
                                                   <input type="tel" class="form-control" placeholder="No.Handphone" name="notelepon" id="notelepon">
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="notelepon" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button class="btn btn-success">Simpan</button>
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
                                                   <th class="text-center"></th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php
                                                $query = tampildata("SELECT * FROM pasienKeluarga WHERE uidPasien='$id'");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <tr>
                                                      <td><?= $row['namaKeluarga'] ?></td>
                                                      <td><?= $row['hubungan'] ?></td>
                                                      <td><?= $row['noTelepon'] ?></td>
                                                      <td><?= $row['alamat'] ?></td>
                                                      <td class="text-center col-1">
                                                         <button class="btn btn-warning">Perbarui</button>
                                                      </td>
                                                   </tr>
                                                <?php endforeach ?>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>

                                 </div>
                                 <div class="tab-pane fade" id="pills-idcard" role="tabpanel" aria-labelledby="pills-idcard-tab">
                                    <form action="" method="POST">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="kategori" class="col-sm-2 col-form-label">Kategori ID</label>
                                                <div class="col-sm-3">
                                                   <select name="kategori" class="form-select" id="kategori" required="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM kategoriIdentitas");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="text" class="form-control" placeholder="No.Kartu Identitas" name="nomorKartu" id="nomorKartu" required="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-3">
                                                   <button class="btn btn-success" type="submit" name="simpanID">Simpan</button>
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
                                                   <th class="text-center"></th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php
                                                $query = tampildata("SELECT * FROM pasienIdentitas WHERE uidPasien='$id'");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <tr>
                                                      <td><?= $row['kategoriID'] ?></td>
                                                      <td><?= $row['nomorKartu'] ?></td>
                                                      <td>
                                                         <a href="../file/pasien/dokumen/<?= $row['dokumen'] ?>" target="_blank">
                                                            <span class="badge bg-primary">Lihat File</span>
                                                         </a>
                                                      </td>
                                                      <td><?= $row['createAt'] ?></td>
                                                      <td class="text-center col-1">
                                                         <button class="btn btn-warning">Perbarui</button>
                                                      </td>
                                                   </tr>
                                                <?php endforeach ?>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-catatan" role="tabpanel" aria-labelledby="pills-catatan-tab">
                                    <form action="" method="POST">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                                                <div class="col-sm-10">
                                                   <textarea name="catatan" class="form-control" id="" cols="30" rows="10"><?= $data['catatanKhusus'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="catatan" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button class="btn btn-success" type="submit" name="simpancatatan">Simpan</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="tab-pane fade" id="pills-datalain" role="tabpanel" aria-labelledby="pills-idcard-tab">
                                    <form action="" method="POST">
                                       <div class="row">
                                          <div class="col">
                                             <div class="col-12">
                                                <div class="mb-3 row">
                                                   <label for="nomorKK" class="col-sm-2 col-form-label">No.KK</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="nomorKK" id="nomorKK">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="mb-3 row">
                                                   <label for="suku" class="col-sm-2 col-form-label">Suku</label>
                                                   <div class="col-sm-10">
                                                      <select name="suku" class="form-select" id="suku" required="">
                                                         <option value="">Pilih</option>
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
                                                      <select name="bahasa" class="form-select" id="bahasa" required="">
                                                         <option value="">Pilih</option>
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
                                                      <button class="btn btn-success">Simpan</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="tab-pane fade" id="pills-fotodiri" role="tabpanel" aria-labelledby="pills-fotodiri-tab">
                                    <div class="row">
                                       <div class="col-4">
                                          <div class="card">
                                             <img src="../assets/notfoundimage.jpeg" class="card-img-top" alt="...">
                                             <div class="card-body">
                                                <h5 class="card-title">Foto Diri</h5>
                                                <p class="card-text">Foto dapat diperbarui dengan cara upload file ataupun menggunakan capture langsung dengan memanfaatkan webcam</p>
                                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#uploadfoto" class="btn btn-primary">Upload</a>
                                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#webcam" class="btn btn-primary">Webcam</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="card">
                                             <img src="../assets/notfoundimage.jpeg" class="card-img-top" alt="...">
                                             <div class="card-body">
                                                <h5 class="card-title">Tanda Tangan</h5>
                                                <p class="card-text">Tanda tangan dapat dilakukan langsung di mediapad area yang telah disediakan untuk dapat digunakan sebagai identitas assesment</p>
                                                <a href="javascript:;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ttd">Tanda Tangan</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="card">
                                             <img src="../assets/notfoundimage.jpeg" class="card-img-top" alt="...">
                                             <div class="card-body">
                                                <h5 class="card-title">QR Code</h5>
                                                <p class="card-text">Generate QR Code berdasarkan kebutuhan pengguna dari informasi yang bersifat unik dari sebuah entitas data dokter</p>
                                                <a href="javascript:;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#qrcode">Generate QR</a>
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
         require 'footer.php';
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
            <div class="modal-body">
               <div class="mb-3">
                  <label for="telepon" class="form-label">File</label>
                  <input type="file" class="form-control" id="telepon">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="webcam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div id="my_camera"></div>

               <!-- First, include the Webcam.js JavaScript Library -->
               <script type="text/javascript" src="../assets/webcamjs-master/webcam.min.js"></script>

               <!-- Configure a few settings and attach camera -->
               <script language="JavaScript">
                  Webcam.set({
                     width: 470,
                     height: 300,
                     image_format: 'jpeg',
                     jpeg_quality: 90
                  });
                  Webcam.attach('#my_camera');
               </script>


               <!-- Code to handle taking the snapshot and displaying it locally -->
               <script language="JavaScript">
                  function take_snapshot() {
                     // take snapshot and get image data
                     Webcam.snap(function(data_uri) {
                        // display results in page
                        document.getElementById('results').innerHTML =
                           '<h2>Here is your image:</h2>' +
                           '<img src="' + data_uri + '"/>';
                     });
                  }
               </script>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onClick="take_snapshot()">Simpan</button>
            </div>
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

   <div class="modal fade" id="qrcode" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="telepon" class="form-label">Identitas ID</label>
                  <input type="text" class="form-control" name="" id="">
               </div>
               <div class="mb-3">
                  <img src="../assets/notfoundimage.jpeg" width="470" alt="">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Generate QR Code</button>
            </div>
         </div>
      </div>
   </div>



   <script>
      var wrapper = document.getElementById("signature-pad");
      var clearButton = wrapper.querySelector("[data-action=clear]");
      var savePNGButton = wrapper.querySelector("[data-action=save-png]");
      var canvas = wrapper.querySelector("canvas");
      var el_note = document.getElementById("note");
      var signaturePad;
      signaturePad = new SignaturePad(canvas);
      clearButton.addEventListener("click", function(event) {
         document.getElementById("note").innerHTML = "The signature should be inside box";
         signaturePad.clear();
      });
      savePNGButton.addEventListener("click", function(event) {
         if (signaturePad.isEmpty()) {
            alert("Please provide signature first.");
            event.preventDefault();
         } else {
            var canvas = document.getElementById("the_canvas");
            var dataUrl = canvas.toDataURL();
            document.getElementById("signature").value = dataUrl;
         }
      });

      function my_function() {
         document.getElementById("note").innerHTML = "";
      }
   </script>
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
   <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
   <script src="../assets/js/rating/jquery.barrating.js"></script>
   <script src="../assets/js/rating/rating-script.js"></script>
   <script src="../assets/js/owlcarousel/owl.carousel.js"></script>
   <script src="../assets/js/ecommerce.js"></script>
   <script src="../assets/js/product-list-custom.js"></script>
   <script src="../assets/js/tooltip-init.js"></script>
   <!-- Plugins JS Ends-->
   <!-- Theme js-->
   <script src="../assets/js/script.js"></script>
   <script src="../assets/js/theme-customizer/customizer.js"></script>
   <!-- Plugin used-->
</body>

</html>