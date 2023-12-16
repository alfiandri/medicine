<?php
session_start();
$page = "BDR";
$id = $_GET['id'];
$no = $_GET['no'];
require 'view.php';
$info = mysqli_query($koneksi, "SELECT * FROM pasien_visit LEFT OUTER JOIN pasien ON pasien.uid_pasien = pasien_visit.uid_pasien WHERE nomor_visit='$no'");
$data = mysqli_fetch_array($info);
// $pemeriksaan = mysqli_query($koneksi, "SELECT * FROM assPemeriksaanFisik WHERE uidPasien='$id' AND nomorRawat='$no'");
// $datapemeriksaan = mysqli_fetch_array($pemeriksaan);
// $kesehatan = mysqli_query($koneksi, "SELECT * FROM assRiwayatKesehatan WHERE uidPasien='$id' AND nomorRawat='$no'");
// $datakesehatan = mysqli_fetch_array($kesehatan);
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
                        <h3>BDR</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">BDR</li>
                           <li class="breadcrumb-item active">Pemeriksaan Awal Pasien </li>
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
                                 <li class="nav-item">
                                    <a class="nav-link active" id="pills-warninghome-tab" data-bs-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Pasien</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Keperawatan</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="pills-medismata-tab" data-bs-toggle="pill" href="#pills-medismata" role="tab" aria-controls="pills-medismata" aria-selected="false"><i class="icofont icofont-contacts"></i>Pemeriksaan Medis Mata
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="pills-medisumum-tab" data-bs-toggle="pill" href="#pills-medisumum" role="tab" aria-controls="pills-medisumum" aria-selected="false"><i class="icofont icofont-contacts"></i>Pemeriksaan Medis Umum
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="pills-diagnostik-tab" data-bs-toggle="pill" href="#pills-diagnostik" role="tab" aria-controls="pills-diagnostik" aria-selected="false"><i class="icofont icofont-contacts"></i>Hasil Diagnostik & EKG
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div class="tab-pane fade show active" id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $data['uidPasien'] ?>">
                                       <input type="hidden" name="noregistrasi" value="<?= $no ?>">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="nomorRegistrasi" class="col-sm-2 col-form-label">No.Pendaftaran</label>
                                                <div class="col-sm-3">
                                                   <input type="text" class="form-control form-control-sm" value="<?= $no ?>" name="nomorRegistrasi" id="nomorRegistrasi" readonly>
                                                </div>
                                                <div class="col-sm-3">
                                                   <input type="text" class="form-control form-control-sm" readonly name="tanggal" value="<?= $data['createAt'] ?>" id="">
                                                </div>
                                                <div class="col-sm-4">
                                                   <input type="text" class="form-control form-control-sm" readonly name="jenisbayar" value="<?= $data['jenisBayar'] ?>" id="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-3">
                                                   <input type="text" readonly class="form-control form-control-sm" value="<?= $data['nomorRM'] ?>" name="nomorRM" id="nomorRM">
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="text" class="form-control form-control-sm" name="namaPasien" value="<?= $data['namaPasien'] ?>" id="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="ttl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                <div class="col-sm-3">
                                                   <input type="text" class="form-control form-control-sm" readonly value="<?= $data['tempatLahir'] ?>" name="tempatLahir">
                                                </div>
                                                <div class="col-sm-3">
                                                   <input type="date" class="form-control form-control-sm" value="<?= $data['tanggalLahir'] ?>" name="tanggalLahir">
                                                </div>
                                                <div class="col-sm-4">
                                                   <input type="text" class="form-control form-control-sm" value="" placeholder="Usia">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="layanan" class="col-sm-2 col-form-label">Layanan</label>
                                                <div class="col-sm-3">
                                                   <input type="text" name="layanan" readonly value="<?= $data['layanan'] ?>" class="form-control form-control-sm">
                                                </div>
                                                <div class="col-sm-3">
                                                   <input type="text" readonly value="<?= $data['kelas'] ?>" name="kelas" class="form-control form-control-sm">
                                                </div>
                                                <div class="col-sm-4">
                                                   <input type="text" readonly value="<?= $data['jenisBayar'] ?>" name="jenisbayar" class="form-control form-control-sm">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                   <textarea name="alamat" readonly id="alamat" class="form-control form-control-sm" cols="30" rows="3"><?= $data['alamat'] ?>,Provinsi <?= $data['provinsi'] ?> Kabupaten <?= $data['kabupaten'] ?> Kecamatan <?= $data['kecamatan'] ?> Kelurahan <?= $data['kelurahan'] ?> RTRW : <?= $data['rtrw'] ?> Kode Pos : <?= $data['kodepos'] ?></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="dokter" class="col-sm-2 col-form-label">Dokter</label>
                                                <div class="col-sm-3">
                                                   <select name="dokter" class="form-select form-select-sm" id="dokter">
                                                      <option value="<?= $data['dokter'] ?>"><?= $data['dokter'] ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM dokter");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['nama'] ?>"><?= $row['nama'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2">
                                                   <input type="text" readonly class="form-control form-control-sm" value="<?= date('Y-m-d') ?>">
                                                </div>
                                                <div class="col-sm-1">
                                                   <input type="text" readonly class="form-control form-control-sm" value="<?= date('H:i:s') ?>">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="kondisimasuk" class="col-sm-2 col-form-label">Kondisi Masuk</label>
                                                <div class="col-sm-3">
                                                   <select name="kondisimasuk" class="form-select form-select-sm" id="kondisimasuk">
                                                      <option value="<?= $data['kondisiMasuk'] ?>"><?= $data['kondisiMasuk'] ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM kondisiMasuk");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kondisiMasuk'] ?>"><?= $row['kondisiMasuk'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="text" class="form-control form-control-sm" placeholder="Catatan" value="<?= $data['catatanKondisi'] ?>" name="catatankondisi">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="rujukan" class="col-sm-2 col-form-label">Rujukan</label>
                                                <div class="col-sm-3">
                                                   <select name="rujukan" class="form-select form-select-sm" id="rujukan">
                                                      <option value="<?= $data['rujukan'] ?>"><?= $data['rujukan'] ?></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM jenisRujukan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['rujukan'] ?>"><?= $row['rujukan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <input type="text" class="form-control form-control-sm" placeholder="Catatan" value="<?= $data['catatanRujukan'] ?>" name="catatanrujukan">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="rujukan" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button class="btn btn-sm btn-success" type="submit" name="ubahpasienbdr">Simpan</button>
                                                   <a href="bdr-pasien">
                                                      <button type="button" class="btn btn-sm btn-light">Kembai</button>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>

                                    </form>
                                 </div>
                                 <div class="tab-pane fade" id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                                    <div class="row">
                                       <div class="col-sm-3 col-xs-12">
                                          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                             <a class="nav-link active" id="v-pills-fisik-tab" data-bs-toggle="pill" href="#v-pills-fisik" role="tab" aria-controls="v-pills-fisik" aria-selected="true">Pemeriksaan Fisik</a>
                                             <a class="nav-link" id="v-pills-penyakit-tab" data-bs-toggle="pill" href="#v-pills-penyakit" role="tab" aria-controls="v-pills-penyakit" aria-selected="false">Riwayat Penyakit</a>
                                             <a class="nav-link" id="v-pills-diagnosakeperawatan-tab" data-bs-toggle="pill" href="#v-pills-diagnosakeperawatan" role="tab" aria-controls="v-pills-diagnosakeperawatan" aria-selected="false">Diagnosa Keperawatan</a>
                                             <a class="nav-link" id="v-pills-rencanakeperawatan-tab" data-bs-toggle="pill" href="#v-pills-rencanakeperawatan" role="tab" aria-controls="v-pills-rencanakeperawatan" aria-selected="false">Rencana Keperawatan</a>
                                          </div>
                                       </div>
                                       <div class="col-sm-9 col-xs-12">
                                          <div class="tab-content" id="v-pills-tabContent">
                                             <div class="tab-pane fade show active" id="v-pills-fisik" role="tabpanel" aria-labelledby="v-pills-fisik-tab">
                                                <div class="row">
                                                   <label for="keadaanumum" class="col-sm-4 col-form-label">Keadaan Umum</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" id="keadaanumum" value=": <?= $datapemeriksaan['keadaanUmum'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="kesadaran" class="col-sm-4 col-form-label">Kesadaran</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $datapemeriksaan['kesadaran'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Kondisi Fisik</label>
                                                   <div class="col-sm-3">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="BB : <?= $datapemeriksaan['bb'] ?> Kg | TB : <?= $datapemeriksaan['tb'] ?> cm ">
                                                   </div>
                                                   <div class="col-sm-2">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="TD : <?= $datapemeriksaan['td'] ?> mmHg">
                                                   </div>
                                                   <div class="col-sm-2">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="NADI :  <?= $datapemeriksaan['nadi'] ?> x/menit ">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-2">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="NAPAS :  <?= $datapemeriksaan['napas'] ?> % ">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Status Gizi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $datapemeriksaan['statusgizi'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Pengkajian Nyeri</label>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Nyeri : <?= $datapemeriksaan['nyeri'] ?> ">
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Lokasi : <?= $datapemeriksaan['lokasi'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Pencetus : <?= $datapemeriksaan['pencetus'] ?>">
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Durasi : <?= $datapemeriksaan['durasi'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Skala : <?= $datapemeriksaan['skala'] ?> ">
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Skor  : <?= $datapemeriksaan['skor'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Risiko Jatuh/Cedera</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $datapemeriksaan['risikoJatuh'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Pengetahuan Penyakit</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $datapemeriksaan['kognitif'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Penyimpangan Prilaku</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $datapemeriksaan['penyimpangan'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Hambatan Komunikasi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $datapemeriksaan['komunikasi'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-8">
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addfisik">Pengisian Data</button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-penyakit" role="tabpanel" aria-labelledby="v-pills-penyakit-tab">
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Riwayat Penyakit</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $datakesehatan['riwayatPenyakit'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Riwayat Obat</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":  <?= $datakesehatan['riwayatObat'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Riwayat Operasi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":  <?= $datakesehatan['riwayatOperasi'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-8">
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addriwayat">Pengisian Data</button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-diagnosakeperawatan" role="tabpanel" aria-labelledby="v-pills-diagnosakeperawatan-tab">
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Diagnosa Keperawatan</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $datakesehatan['diagnosaKeperawatan'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-8">
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#adddiagnosa">Pengisian Data</button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-rencanakeperawatan" role="tabpanel" aria-labelledby="v-pills-rencanakeperawatan-tab">
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Rencana Keperawatan</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": <?= $datakesehatan['rencanaKeperawatan'] ?>">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-8">
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addkeperawatan">Pengisian Data</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-medismata" role="tabpanel" aria-labelledby="pills-medismata-tab">
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Anamnesa / Keluhan Utama <strong>(S)</strong> </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Pemeriksaan <strong>(O)</strong> </label>
                                       <div class="col-sm-5">
                                          <div class="card">
                                             <div class="card-body">
                                                <p><strong>Kanan</strong></p>
                                                <p>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Visus</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Kaca Mata Lama</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Refraksi</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">T. Intra Okuler</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Schiotz</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">NCT</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">OD</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">OS</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-5">
                                          <div class="card">
                                             <div class="card-body">
                                                <p><strong>Kiri</strong></p>
                                                <p>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Visus</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Kaca Mata Lama</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Refraksi</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">T. Intra Okuler</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Schiotz</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">NCT</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">OD Funduscopy</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">OS Funduscopy</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                       <div class="col-sm-10">
                                          <button class="btn btn-sm btn-primary">Simpan</button>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-medisumum" role="tabpanel" aria-labelledby="pills-medisumum-tab">
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Pemeriksaan <strong>(O)</strong> </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Riwayat Alergi </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Riwayat Penyakit Dahulu </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Riwayat Penyakit Keluarga </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Riwayat Pengobatan </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Diagnosa Utama</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control" placeholder="Code ICD 10">
                                       </div>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Diagnosa Sekunder</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control" placeholder="Code ICD 10">
                                       </div>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Penyulit</label>
                                       <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Perencanaan Tindakan <strong>(P)</strong> </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Terapi / Rencana Pelayanan<strong>(P)</strong> </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Penunjang</label>
                                       <div class="col-sm-10">
                                          <select name="" class="form-select" id="">
                                             <option value="">Pilih</option>
                                             <option value="">USG</option>
                                             <option value="">Lab</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                       <div class="col-sm-10">
                                          <button class="btn btn-sm btn-primary">Simpan</button>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-diagnostik" role="tabpanel" aria-labelledby="pills-diagnostik-tab">
                                    <div class="mb-3 row">
                                       <div class="col-sm-6">
                                          <div class="card">
                                             <img src="../assets/notfoundimage.jpeg" class="card-img-top" alt="...">
                                             <div class="card-body">
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="card">
                                             <img src="../assets/notfoundimage.jpeg" class="card-img-top" alt="...">
                                             <div class="card-body">
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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

   <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Evaluasi</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Dokter / Perawat</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">S (Keluhan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">O (Pemeriksaan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">A (Kesimpulan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">P (Penatalaksanaan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="soap" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Template SOAP</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama Template</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">COVID 19</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">S (Keluhan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4">Tidak mencium bau</textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">O (Pemeriksaan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4">Lakukan check darah</textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">A (Kesimpulan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4">Covid</textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">P (Penatalaksanaan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4">Antigen atau Vaksinasi</textarea>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="edukasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Edukasi Integrasi </h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tanggal dan Waku</label>
                  <div class="row">
                     <div class="col">
                        <input type="date" class="form-control" name="" id="">
                     </div>
                     <div class="col">
                        <input type="time" class="form-control" name="" id="">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Topik Edukasi</label>
                  <input type="text" class="form-control">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Uraian Informasi</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="subjektif" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Subjektf</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tanggal dan Waku</label>
                  <div class="row">
                     <div class="col">
                        <input type="date" class="form-control" name="" id="">
                     </div>
                     <div class="col">
                        <input type="time" class="form-control" name="" id="">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Disampaikan Oleh</label>
                  <input type="text" class="form-control">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Keluhan</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="diagnosa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Diagnosis</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Petugas</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Diagnosis</label>

                  <input type="text" class="form-control" name="" id="">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="eliminasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Eliminasi</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">BAB</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Konstipasi</option>
                     <option value="">Diare</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Frekuensi BAB (Par Hari)</label>
                  <input type="text" class="form-control" name="" id="">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">BAK</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Inkontinensia</option>
                     <option value="">Hematuria</option>
                     <option value="">Disuria</option>
                     <option value="">Urine Menetes</option>
                     <option value="">Nokturia</option>
                     <option value="">Tetentio Urine</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Frekuensi BAK (Par Hari)</label>
                  <input type="text" class="form-control" name="" id="">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="headtotoe" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Head To Toe</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Rambut & Kepala</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Bersih</option>
                     <option value="">Kotor</option>
                     <option value="">Benjolan</option>
                     <option value="">Luka Luka</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Wajah</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Tic Fasilis</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Mata</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Anammia</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Hidung & Tenggorokan</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Epiktaksi</option>
                     <option value="">Pembesaran Tonsil & Kemerahan</option>
                     <option value="">Nyeri Telan</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Mulut Lidah & Gigi</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Anammia</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Leher</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Anammia</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Respirasi</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Anammia</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Mammae</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Anammia</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Jantung</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Anammia</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Abdomen</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Anammia</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="fisik" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pemeriksaan Fisik</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Keadaan Umum</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Tampak Normal</option>
                     <option value="">Sakit Ringan</option>
                     <option value="">Sakit Sedang</option>
                     <option value="">Sakit Berat</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">GCS</label>
                  <div class="row">
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text" id="basic-addon1">E</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text" id="basic-addon1">M</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text" id="basic-addon1">V</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tingkat Kesadaran</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Compos Mentis</option>
                     <option value="">Apatis</option>
                     <option value="">Delirium</option>
                     <option value="">Somnolen</option>
                     <option value="">Sopor</option>
                     <option value="">Semi Koma</option>
                     <option value="">Koma</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tanda Vital</label>
                  <div class="row">
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">Tekanan Darah</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">Detak Jantung</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">Suhu Badan</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">Nafas</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Anamnesa</label>
                  <div class="row">
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">Tinggi Badan</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">Berat Badan</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">IMT</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">Berat Badan Ideal</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Skala Nyeri</label>
                  <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Resiko Jatuh (Morse)</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Risiko Rendah (0-24)</option>
                     <option value="">Risiko Sedang (25-44)</option>
                     <option value="">Risiko Tinggi (45>)</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Status Fungsional</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Mandiri</option>
                     <option value="">Perlu Bantuan</option>
                     <option value="">Ketergantungan Total</option>
                  </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="gigi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pemeriksaan Gigi</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Keluhan Utama</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tekanan Darah</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Hipertensi</option>
                     <option value="">Hipotensi</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Diabetes Melitus</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Ada</option>
                     <option value="">Tidak</option>
                  </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="klinis" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pemeriksaan Klinis</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <h4>ANAMNESA</h4>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Keluhan Saat Ini</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Riwayat Pengobatan</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Riwayat Penyakit Dahulu</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Riwayat Penyakit Keluarga</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Riwayat Alergi</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
               </div>
               <h4>PEMERIKSAAN FISIK</h4>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesadaran</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Suhu (C)</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">TD (mmHg)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">BB (Kg)</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">RR (x/menit)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">RB (cm)</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">N (x/menit)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                     </div>
                  </div>
               </div>
               <h6>Kepala Leher</h6>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Mata</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Benjolan</option>
                           <option value="">Secret</option>
                           <option value="">Hipermi</option>
                        </select>
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Pupil</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Isokor</option>
                           <option value="">Anisokor</option>
                           <option value="">Refleks Cahaya</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Hidung</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Epistaksis</option>
                           <option value="">Hipermi</option>
                           <option value="">Polip</option>
                        </select>
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Telinga</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Intak</option>
                           <option value="">Perforasi</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Membran Timpani</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Epistaksis</option>
                           <option value="">Hipermi</option>
                           <option value="">Polip</option>
                        </select>
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Mulut</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Intak</option>
                           <option value="">Perforasi</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Tenggorkan</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Epistaksis</option>
                           <option value="">Hipermi</option>
                           <option value="">Polip</option>
                        </select>
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Leher</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Intak</option>
                           <option value="">Perforasi</option>
                        </select>
                     </div>
                  </div>
               </div>
               <h6>Paru</h6>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Gerak Dada </label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Epistaksis</option>
                           <option value="">Hipermi</option>
                           <option value="">Polip</option>
                        </select>
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Suara Nafas</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Intak</option>
                           <option value="">Perforasi</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="gizi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Gizi</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Penurunan Nafsu Makan</label>
                        <select name="" class="form-select" id="">
                           <option value="">Tidak</option>
                           <option value="">Ya</option>
                        </select>
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Penurunan BB 6 Bulan</label>
                        <select name="" class="form-select" id="">
                           <option value="">Tidak</option>
                           <option value="">Ya</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Penyakit Terkait Nutrisi</label>
                  <select name="" class="form-select" id="">
                     <option value="">Diabetes Melitus</option>
                     <option value="">Kanker</option>
                     <option value="">Fungsi Hati</option>
                     <option value="">Obesitas</option>
                     <option value="">Penyakit Paru Kronis</option>
                     <option value="">Diare</option>
                     <option value="">Penyakit Jantung</option>
                     <option value="">Hipertensi</option>
                     <option value="">Gangguan Elektrolit</option>
                  </select>
               </div>
               <h6>Antropometri</h6>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">BB (Kg)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">TB (cm)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">IMT (Kg/m)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">BBI</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">LILA</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <hr>
               <h6>Biokimia</h6>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">GDP (mg/dl)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">GD2PP (mg/dl)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Cholesterol Total</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">LDL</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">UA</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <hr>
               <h6>Fisik-Klinis</h6>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">TN</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <hr>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Riwayat Gizi</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Riwayat Personal</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Diagnosa Gizi</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Rencana Intervensi Gizi</label>
                  <input type="text" class="form-control">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Intervensi Gizi</label>
                  <input type="text" class="form-control">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Perubahan DIIT</label>
                  <input type="text" class="form-control">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Rencana Monitoring dan Evaluasi</label>
                  <input type="text" class="form-control">
               </div>
               <hr>
               <h6>Monitoring & Evaluasi</h6>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                        <input type="date" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">BB (Kg)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Energy (kkal)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Protein (g)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Lemak (g)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Karbohidrat (g)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Uji Klinis</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Laboratorium</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Lain-Lain</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Konseling Gizi</label>
                  <input type="text" class="form-control">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="agama" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Sosial Budaya</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Agama</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tinggal Bersama</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Pendidikan</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Suku</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Kewarganegaraan</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="addfisik" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Pemeriksaan Fisik</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
               <input type="hidden" name="id" value="<?= $id ?>">
               <input type="hidden" name="noregistrasi" value="<?= $no ?>">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="keadaanumum" class="form-label">Keadaan Umum <span class="text-danger">*</span></label>
                     <input type="text" class="form-control" id="keadaanumum" name="keadaanumum" required="">
                  </div>
                  <div class="mb-3">
                     <label for="kesadaran" class="form-label">Kesadaran <span class="text-danger">*</span></label>
                     <input type="text" class="form-control" id="kesadaran" name="kesadaran" required="">
                  </div>
                  <div class="mb-3">
                     <div class="row mb-3">
                        <div class="col">
                           <label for="bb" class="form-label">Berat Badan <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" id="bb" placeholder="Kg" name="bb" required="">
                        </div>
                        <div class="col">
                           <label for="tb" class="form-label">Tinggi Badan <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" id="tb" name="tb" placeholder="cm" required="">
                        </div>
                        <div class="col">
                           <label for="td" class="form-label">TD <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" id="td" name="td" placeholder="mmHg" required="">
                        </div>
                        <div class="col">
                           <label for="nadi" class="form-label">Nadi <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" id="nadi" name="nadi" placeholder="mmHg" required="">
                        </div>
                        <div class="col">
                           <label for="napas" class="form-label">Napas <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" id="napas" name="napas" placeholder="x/menit" required="">
                        </div>
                     </div>
                     <div class="row mb-3">
                        <div class="col">
                           <label for="nyeri" class="form-label">Nyeri <span class="text-danger">*</span></label>
                           <select name="nyeri" class="form-select" id="nyeri">
                              <option value="Tidak">Tidak</option>
                              <option value="Ya">Ya</option>
                           </select>
                        </div>
                        <div class="col">
                           <label for="lokasi" class="form-label">Lokasi <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" id="lokasi" name="lokasi" required="">
                        </div>
                        <div class="col">
                           <label for="pencetus" class="form-label">Pencetus</label>
                           <input type="text" class="form-control" id="pencetus" name="pencetus">
                        </div>
                        <div class="col">
                           <label for="durasi" class="form-label">Durasi</label>
                           <input type="text" class="form-control" id="durasi" name="durasi" required="">
                        </div>
                        <div class="col">
                           <label for="skala" class="form-label">Skala Nyeri <span class="text-danger">*</span></label>
                           <select name="skala" class="form-select" id="skala">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                           </select>
                        </div>
                        <div class="col">
                           <label for="skornyeri" class="form-label">Skor Nyeri <span class="text-danger">*</span></label>
                           <select name="skornyeri" class="form-select" id="skornyeri">
                              <option value="Tidak Nyeri (0)">Tidak Nyeri (0)</option>
                              <option value="Ringan (1-3)">Ringan (1-3)</option>
                              <option value="Sedang (4-6)">Sedang (4-6)</option>
                              <option value="Berat (7-10)">Berat (7-10)</option>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col">
                           <div class="mb-3">
                              <label for="statusgizi" class="form-label">Status Gizi </label>
                              <select name="statusgizi" class="form-select" id="statusgizi">
                                 <option value="Baik">Baik</option>
                                 <option value="Cukup">Cukup</option>
                                 <option value="Kurang">Kurang</option>
                              </select>
                           </div>
                        </div>
                        <div class="col">
                           <div class="mb-3">
                              <label for="risikojatuh" class="form-label">Risiko Jatuh/Cedera </label>
                              <select name="risikojatuh" class="form-select" id="risikojatuh">
                                 <option value="Cara berjalan tidak seimbang">Cara berjalan tidak seimbang</option>
                                 <option value="Perlu / menggunakan penopang">Perlu / menggunakan penopang</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col">
                           <div class="mb-3">
                              <label for="penyakit" class="form-label">Kognitif Psiko Penyakit </label>
                              <select name="penyakit" class="form-select" id="penyakit">
                                 <option value="Tahu">Tahu</option>
                                 <option value="Sedikit Tahu">Sedikit Tahu</option>
                                 <option value="Tidak Tahu">Tidak Tahu</option>
                              </select>
                           </div>
                        </div>
                        <div class="col">
                           <div class="mb-3">
                              <label for="prilaku" class="form-label">Penyimpangan Prilaku </label>
                              <select name="prilaku" class="form-select" id="prilaku">
                                 <option value="Tenang">Tenang</option>
                                 <option value="Marah">Marah</option>
                                 <option value="Takut">Takut</option>
                                 <option value="Sedih">Sedih</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="-6">
                           <div class="mb-3">
                              <label for="komunikasi" class="form-label">Hambatan Komunikasi </label>
                              <select name="komunikasi" class="form-select" id="komunikasi">
                                 <option value="Tidak">Tidak</option>
                                 <option value="Ada">Ada</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanpemeriksaanfisik" class="btn btn-success">Simpan</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="addriwayat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Riwayat Kesehatan</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
               <input type="hidden" name="id" value="<?= $id ?>">
               <input type="hidden" name="noregistrasi" value="<?= $no ?>">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="keadaanumum" class="form-label">Penyakit <span class="text-danger">*</span></label>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Diabetes" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                           Diabetes
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Hipertensi" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                           Hipertensi
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Sakit Jantung" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                           Sakit Jantung
                        </label>
                     </div>
                  </div>
                  <div class="mb-3">
                     <label for="kesadaran" class="form-label">Obat <span class="text-danger">*</span></label>
                     <input type="text" class="form-control" id="kesadaran" name="kesadaran" required="">
                  </div>
                  <div class="mb-3">
                     <label for="kesadaran" class="form-label">Pernah Operasi <span class="text-danger">*</span></label>
                     <select name="" id="" class="form-select">
                        <option value="">Tidak</option>
                        <option value="">Ya</option>
                     </select>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanpemeriksaanfisik" class="btn btn-success">Simpan</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="addriwayat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Riwayat Kesehatan</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
               <input type="hidden" name="id" value="<?= $id ?>">
               <input type="hidden" name="noregistrasi" value="<?= $no ?>">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="keadaanumum" class="form-label">Penyakit <span class="text-danger">*</span></label>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Diabetes" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                           Diabetes
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Hipertensi" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                           Hipertensi
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Sakit Jantung" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                           Sakit Jantung
                        </label>
                     </div>
                  </div>
                  <div class="mb-3">
                     <label for="kesadaran" class="form-label">Obat <span class="text-danger">*</span></label>
                     <input type="text" class="form-control" id="kesadaran" name="kesadaran" required="">
                  </div>
                  <div class="mb-3">
                     <label for="kesadaran" class="form-label">Pernah Operasi <span class="text-danger">*</span></label>
                     <select name="" id="" class="form-select">
                        <option value="">Tidak</option>
                        <option value="">Ya</option>
                     </select>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanpemeriksaanfisik" class="btn btn-success">Simpan</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <?php
   require 'library.php';
   ?>
</body>

</html>