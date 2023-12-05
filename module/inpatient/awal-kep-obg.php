<?php
session_start();
$page = "Awal Keperawatan";
require '../../db/connect.php';
require 'view.php';
$id = $_GET['id'];
$info = mysqli_query($koneksi, "SELECT * FROM pasien_visit WHERE uid_pasien='$id'");
$data = mysqli_fetch_array($info);
$infopasien = mysqli_query($koneksi, "SELECT * FROM pasien WHERE uid_pasien='$id'");
$datapasien = mysqli_fetch_array($infopasien);
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
         require 'sidebar-ass.php';
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
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item"><a href="registrasi-awal">Registrasi Awal</a></li>
                           <li class="breadcrumb-item active">Penilaian Keperawatan Kebidanan & Kandungan </li>
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
                                 <li class="nav-item"><a class="nav-link active" id="pills-warninghome-tab" data-bs-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Penilaian</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-persalinan-tab" data-bs-toggle="pill" href="#pills-persalinan" role="tab" aria-controls="pills-persalinan" aria-selected="false"><i class="icofont icofont-files"></i>Persalinan</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-kebidanan-tab" data-bs-toggle="pill" href="#pills-kebidanan" role="tab" aria-controls="pills-kebidanan" aria-selected="false"><i class="icofont icofont-list"></i>Masalah Kebidanan</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-folder"></i>Data Penilaian</a></li>
                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div class="tab-pane fade show active" id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <div class="row">
                                       <div class="col-5">
                                          <div class="row">
                                             <label for="noRegistrasi" class="col-sm-4 col-form-label">No.Registrasi</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="noRegistrasi" value=": <?= $data['nomor_visit'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="tglVisit" class="col-sm-4 col-form-label">Tgl.Registrasi</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="tglVisit" value=": <?= $data['tanggal'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="layanan" class="col-sm-4 col-form-label">Layanan Unit</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="layanan" value=": <?= $data['layanan'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="dokter" class="col-sm-4 col-form-label">Dokter</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="dokter" value=": <?= $data['dokter'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="kondisiMasuk" class="col-sm-4 col-form-label">Kondisi Masuk</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="kondisiMasuk" value=": <?= $data['kondisi_masuk'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="catatan" class="col-sm-4 col-form-label">Catatan</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="catatan" value=": <?= $data['catatan'] ?>">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-6">
                                          <div class="row">
                                             <label for="nomorRM" class="col-sm-4 col-form-label">No.Rekam Medik</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="nomorRM" value=": <?= $datapasien['nomor_rm'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="namaPasien" class="col-sm-4 col-form-label">Nama Pasien</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="namaPasien" value=": <?= $datapasien['nama_pasien'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="ttl" class="col-sm-4 col-form-label">TTL</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="ttl" value=": <?= $datapasien['tempat_lahir'] ?>/<?= $datapasien['tanggal_lahir'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="agama" value=": <?= $datapasien['agama'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="gender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="gender" value=": <?= $datapasien['gender'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="alamat" value=": <?= $datapasien['alamat'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="inputPassword" class="col-sm-4 col-form-label">Jenis Bayar</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="pj" value=": <?= $data['jenis_bayar'] ?>">
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <h6>Keadaan Umum</h6>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">TD</label>
                                                <input type="text" class="form-control form-sm" placeholder="mmHg">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nadi</label>
                                                <input type="text" class="form-control" placeholder="x/menit">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">RR</label>
                                                <input type="text" class="form-control" placeholder="x/menit">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Suhu</label>
                                                <input type="text" class="form-control" placeholder="c">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">GCS</label>
                                                <div class="row">
                                                   <div class="col">
                                                      <input type="text" class="form-control" placeholder="E">
                                                   </div>
                                                   <div class="col">
                                                      <input type="text" class="form-control" placeholder="V">
                                                   </div>
                                                   <div class="col">
                                                      <input type="text" class="form-control" placeholder="M">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Berat Badan</label>
                                                <input type="text" class="form-control" placeholder="Kg">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Tinggi Badan</label>
                                                <input type="text" class="form-control" placeholder="cm">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">LILA</label>
                                                <input type="text" class="form-control" placeholder="cm">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">BMI</label>
                                                <input type="text" class="form-control" placeholder="Kg/m2">
                                             </div>
                                          </div>
                                       </div>
                                       <h6>Pemeriksaan Kebidanan</h6>
                                       <div class="row mb-3">
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">TFU</label>
                                                <input type="text" class="form-control" placeholder="cm">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">TBJ</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Letak</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Presentasi</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Penurunan</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Kontraksi/HIS</label>
                                                <input type="text" class="form-control" placeholder="x/10">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Kekuatan</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Lamanya</label>
                                                <input type="text" class="form-control" placeholder="detik">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Gerak Janin x/30menit</label>
                                                <input type="text" class="form-control" placeholder="menit">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">.</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Teratur</option>
                                                   <option value="">Tidak Teratur</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Portio</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>

                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Pembukaan Serviks</label>
                                                <input type="text" class="form-control" placeholder="cm">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Ketuban</label>
                                                <input type="text" class="form-control" placeholder="kep/bok">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Hodge</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Inspekulo</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Dilakukan</option>
                                                   <option value="">Tidak</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Hasil</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">CTG</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Dilakukan</option>
                                                   <option value="">Tidak</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Hasil</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Laboratorium</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Dilakukan</option>
                                                   <option value="">Tidak</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Hasil</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">USG</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Dilakukan</option>
                                                   <option value="">Tidak</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Hasil</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Lakmus</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Dilakukan</option>
                                                   <option value="">Tidak</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Hasil</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Pemeriksaan Panggula</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Luas</option>
                                                   <option value="">Sedang</option>
                                                   <option value="">Sempit</option>
                                                   <option value="">Tidak Dilakukan Pemeriksaan</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">.</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                       </div>

                                       <h6>Riwayat Kesehatan</h6>
                                       <div class="row mb-3">
                                          <div class="col-12">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Keluhan Utama</label>
                                                <textarea name="" class="form-control" id="" cols="30" rows="2"></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <p>Riwayat Menstruasi</p>
                                       <div class="row">
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Umur menarche</label>
                                                <input type="text" class="form-control" placeholder="tahun">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Lamanya</label>
                                                <input type="text" class="form-control" placeholder="hari">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Banyaknya</label>
                                                <input type="text" class="form-control" placeholder="pembalut">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Haid Terakhir</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Siklus</label>
                                                <input type="text" class="form-control" placeholder="hari">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Kondisi</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Teratur</option>
                                                   <option value="">Tidak Teratur</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Masalah yang dirasakan menstruasi</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Tidak ada masalah</option>
                                                   <option value="">Dispemnorhea</option>
                                                   <option value="">Spoting</option>
                                                   <option value="">Menohorgai</option>
                                                   <option value="">PMS</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <p>Riwayat Perkawinan</p>
                                       <div class="row">
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Status Menikah</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Menikah</option>
                                                   <option value="">Tidak / Belum Menikah</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Usia Perkawinan K1</label>
                                                <input type="text" class="form-control" placeholder="Tahun">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Status</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Masih Menikah</option>
                                                   <option value="">Cerai</option>
                                                   <option value="">Meninggal</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Catatan</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                       </div>
                                       <p>Riwayat Kehamilan Tetap</p>
                                       <div class="row mb-3">
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">HPHT</label>
                                                <input type="date" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Usia Hamil</label>
                                                <input type="text" class="form-control" placeholder="bln/mgg">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">TP</label>
                                                <input type="date" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Riwayat Imunisasi</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Tidak</option>
                                                   <option value="">Ya</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Imunisasi</label>
                                                <input type="text" class="form-control" placeholder="Kali">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">G</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">P</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">A</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Hidup</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Riwayat KB</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Belum Pernah</option>
                                                   <option value="">Suntik</option>
                                                   <option value="">Pil</option>
                                                   <option value="">AKDR</option>
                                                   <option value="">MOW</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Lamanya</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Komplikasi</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>
                                          </div>
                                       </div>
                                       <h6>Fungsional</h6>
                                       <div class="row mb-3">
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Alat Bantu </label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Tidak</option>
                                                   <option value="">Ya</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">.</label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Prothesa </label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Tidak</option>
                                                   <option value="">Ya</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">.</label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Cacat Fisik</label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Aktivitas Kehidupan Sehari Hari (ADL)</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Mandiri</option>
                                                   <option value="">Dibantu</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <h6>Riwayat Psiko-Sosial-Spritual-Budaya</h6>
                                       <div class="row mb-3">
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Status Psikologis</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Tenang</option>
                                                   <option value="">Takut</option>
                                                   <option value="">Cemas</option>
                                                   <option value="">Depresi</option>
                                                   <option value="">Lain</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">.</label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Bahasa Digunakan Sehari Hari</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Indonesia</option>
                                                   <option value="">Daerah</option>
                                                   <option value="">Asing</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">.</label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Hubungan Dengan Keluarga</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Baik</option>
                                                   <option value="">Tidak Baik</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Tinggal Dengan</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Sendiri</option>
                                                   <option value="">Orang Tua</option>
                                                   <option value="">Suami Istri</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Ekonomi</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Baik</option>
                                                   <option value="">Cukup</option>
                                                   <option value="">Kurang</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-1">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Kepercayaan</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Tidak Ada</option>
                                                   <option value="">Ada</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">.</label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Edukasi Diberikan Kepada</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Pasien</option>
                                                   <option value="">Keluarga</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">.</label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                       </div>
                                       <h6>Penilaian Resiko Jatuh</h6>
                                       <div class="row mb-3">
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Tidak Seimbang/Sempoyong</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Tidak</option>
                                                   <option value="">Ya</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Jalan dengan Ala Bantu</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Tidak</option>
                                                   <option value="">Ya</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Menopang saat akan duduk</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Tidak</option>
                                                   <option value="">Ya</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Hasil</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Tidak Beresiko (Tidak ditermukan a dan b)</option>
                                                   <option value="">Resiko Rendah (ditermukan a/b)</option>
                                                   <option value="">Resiko Tinggi (ditemukan a dan b)</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Dilaporkan kepada dokter</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Tidak</option>
                                                   <option value="">Ya</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Jam</label>
                                                <input type="time" class="form-control">
                                             </div>
                                          </div>
                                       </div>
                                       <h6>Skrining Gizi</h6>
                                       <div class="row mb-3">
                                          <div class="col-6">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Apakah ada penurunan berat badan selama 6 bulan terakhir</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="0">Tidak</option>
                                                   <option value="2">Tidak Yakin</option>
                                                   <option value="1">Ya, 1-5 Kg</option>
                                                   <option value="2">Ya, 6-10 Kg</option>
                                                   <option value="3">Ya, 11-15 Kg</option>
                                                   <option value="4">Ya, >15 Kg</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Apakah nafsu makan berkurang karena tidak nafsu makan</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="0">Tidak</option>
                                                   <option value="1">Ya</option>
                                                </select>
                                             </div>
                                          </div>
                                          <h6>Penilaian Tingkat Nyeri</h6>
                                          <div class="row mb-3">
                                             <div class="col-6">
                                                <div class="card">
                                                   <img src="../assets/rm/nyeri.jpeg" class="card-img-top" alt="...">
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="row">
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="exampleFormControlInput1" class="form-label">Rasa Nyeri</label>
                                                         <select name="" class="form-select" id="">
                                                            <option value="0">Tidak ada Nyeri</option>
                                                            <option value="1">Nyeri Akut</option>
                                                            <option value="">Nyeri Kronis</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="exampleFormControlInput1" class="form-label">Penyebab</label>
                                                         <select name="" class="form-select" id="">
                                                            <option value="0">Proses Penyakit</option>
                                                            <option value="1">Benturan</option>
                                                            <option value="">Lain Lain</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="exampleFormControlInput1" class="form-label">Kualitas</label>
                                                         <select name="" class="form-select" id="">
                                                            <option value="0">Seperti ditusuk</option>
                                                            <option value="1">Berdenyut</option>
                                                            <option value="">Teriris</option>
                                                            <option value="">Tertindih</option>
                                                            <option value="">Tertiban</option>
                                                            <option value="">Lain</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
                                                         <input type="text" class="form-control">
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="exampleFormControlInput1" class="form-label">Menyebar</label>
                                                         <select name="" class="form-select" id="">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="exampleFormControlInput1" class="form-label">Severity Skala</label>
                                                         <select name="" class="form-select" id="">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="">2</option>
                                                            <option value="">3</option>
                                                            <option value="">4</option>
                                                            <option value="">5</option>
                                                            <option value="">6</option>
                                                            <option value="">7</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="exampleFormControlInput1" class="form-label">Waktu Durasi</label>
                                                         <input type="text" class="form-control" placeholder="/menit">
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="exampleFormControlInput1" class="form-label">Nyeri hilang bila</label>
                                                         <select name="" class="form-select" id="">
                                                            <option value="0">Istirahat</option>
                                                            <option value="1">Mendengar musik</option>
                                                            <option value="">Minum obat</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="exampleFormControlInput1" class="form-label">Diberitahukan Dokter ?</label>
                                                         <select name="" class="form-select" id="">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="exampleFormControlInput1" class="form-label">Jam</label>
                                                         <input type="time" class="form-control" placeholder="/menit">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <button class="btn btn-success">Simpan</button>
                                 </div>

                                 <div class="tab-pane fade" id="pills-persalinan" role="tabpanel" aria-labelledby="pills-persalinan-tab">
                                    <div class="row">
                                       <div class="mb-3 row">
                                          <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                          <div class="col-sm-2">
                                             <input type="date" class="form-control" id="tanggal">
                                          </div>
                                          <div class="col-sm-2">
                                             <input type="year" placeholder="Tahun" class="form-control" id="tanggal">
                                          </div>
                                          <div class="col-sm-2">
                                             <select name="" class="form-select" id="">
                                                <option value="">Laki Laki</option>
                                                <option value="">Perempuan</option>
                                             </select>
                                          </div>
                                          <div class="col-sm-2">
                                             <input type="text" placeholder="Berat Badan" class="form-control" id="tanggal">
                                          </div>
                                          <div class="col-sm-2">
                                             <input type="text" placeholder="Panjang Badan" class="form-control" id="tanggal">
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="tanggal" class="col-sm-2 col-form-label">Tempat Persalinan</label>
                                          <div class="col-sm-4">
                                             <select name="" id="" class="form-select">
                                                <option value="">Pilih</option>
                                                <option value="">Rumah Sakit</option>
                                                <option value="">Klinik</option>
                                                <option value="">Rumah</option>
                                             </select>
                                          </div>
                                          <div class="col-sm-6">
                                             <input type="text" placeholder="Nama Faskes" class="form-control" id="tanggal">
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="tanggal" class="col-sm-2 col-form-label">Usia Kehamlian</label>
                                          <div class="col-sm-2">
                                             <input type="text" class="form-control" id="tanggal" placeholder="Minggu">
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="tanggal" class="col-sm-2 col-form-label">Jenis Persalinan</label>
                                          <div class="col-sm-2">
                                             <select name="" id="" class="form-select">
                                                <option value="">Pilih</option>
                                                <option value="">Normal</option>
                                                <option value="">Cesar</option>
                                             </select>
                                          </div>
                                          <div class="col-sm-2">
                                             <select name="" id="" class="form-select">
                                                <option value="">Keadaan</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="tanggal" class="col-sm-2 col-form-label">Penolong</label>
                                          <div class="col-sm-10">
                                             <input type="text" class="form-control" id="tanggal">
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="tanggal" class="col-sm-2 col-form-label">Penyulit</label>
                                          <div class="col-sm-10">
                                             <input type="text" class="form-control" id="tanggal">
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="tanggal" class="col-sm-2 col-form-label">Catatan</label>
                                          <div class="col-sm-10">
                                             <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="tanggal" class="col-sm-2 col-form-label"></label>
                                          <div class="col-sm-10">
                                             <button class="btn btn-success">Simpan</button>
                                          </div>
                                       </div>

                                    </div>
                                 </div>

                                 <div class="tab-pane fade" id="pills-kebidanan" role="tabpanel" aria-labelledby="pills-kebidanan-tab">
                                    <div class="row">
                                       <div class="mb-3 row">
                                          <label for="tanggal" class="col-sm-2 col-form-label">Masalah</label>
                                          <div class="col-sm-10">
                                             <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="tanggal" class="col-sm-2 col-form-label"></label>
                                          <div class="col-sm-10">
                                             <button class="btn btn-success">Simpan</button>
                                          </div>
                                       </div>

                                    </div>
                                 </div>

                                 <div class="tab-pane fade" id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                                    <div class="row">
                                       <div class="col-xl-12 col-md-12 box-col-12">
                                          <div class="file-content">
                                             <div class="card">
                                                <div class="card-body file-manager">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM pasien_visit WHERE uid_pasien='$id' AND nomor_visit='$norawat' ");
                                                   ?>
                                                   <div class="accordion" id="accordionExample">
                                                      <?php foreach ($query as $row) : ?>
                                                         <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                               <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                  Tanggal : <?= $row['tanggalVisit'] ?> <?= $row['waktuVisit'] ?> | <?= $row['dokter'] ?>
                                                               </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                                               <div class="accordion-body">
                                                                  <h6>Keadaan Umum</h6>
                                                                  <?php
                                                                  $query = tampildata("SELECT * FROM assKepUmum_Keadaan WHERE uidPasien='$id'");
                                                                  ?>
                                                                  <table class="table table-primary">
                                                                     <thead>
                                                                        <tr>
                                                                           <td>TD</td>
                                                                           <td>Nadi</td>
                                                                           <td>RR</td>
                                                                           <td>Suhu</td>
                                                                           <td>GCS</td>
                                                                        </tr>
                                                                     </thead>
                                                                     <tbody>
                                                                        <?php foreach ($query as $row) : ?>
                                                                           <tr>
                                                                              <td><?= $row['td']; ?> mmHg</td>
                                                                              <td><?= $row['nadi']; ?>x/menit</td>
                                                                              <td><?= $row['rr']; ?>x/menit</td>
                                                                              <td><?= $row['suhu']; ?>c</td>
                                                                              <td>
                                                                                 E : <?= $row['gcsE'] ?> V : <?= $row['gcsV'] ?> M : <?= $row['gcsM'] ?>
                                                                              </td>
                                                                           </tr>
                                                                        <?php endforeach ?>
                                                                     </tbody>
                                                                  </table>
                                                                  <hr>
                                                                  <h6>Status Nutrisi</h6>
                                                                  <?php
                                                                  $query = tampildata("SELECT * FROM assKepUmum_Nutrisi WHERE uidPasien='$id'");
                                                                  ?>
                                                                  <table class="table table-primary">
                                                                     <thead>
                                                                        <tr>
                                                                           <td>Berat Badan</td>
                                                                           <td>Tinggi Badan</td>
                                                                           <td>BMI</td>
                                                                        </tr>
                                                                     </thead>
                                                                     <tbody>
                                                                        <?php foreach ($query as $row) : ?>
                                                                           <tr>
                                                                              <td><?= $row['tb']; ?>cm</td>
                                                                              <td><?= $row['bb']; ?>Kg</td>
                                                                              <td><?= $row['bmi']; ?>Kg/m2</td>
                                                                           </tr>
                                                                        <?php endforeach ?>
                                                                     </tbody>
                                                                  </table>
                                                                  <hr>
                                                                  <h6>Riwayat Kesehatan</h6>
                                                                  <?php
                                                                  $query = tampildata("SELECT * FROM assKepUmum_Kesehatan WHERE uidPasien='$id'");
                                                                  ?>
                                                                  <table class="table table-primary">
                                                                     <thead>
                                                                        <tr>
                                                                           <td>Keluhan Utama</td>
                                                                           <td>Penyakit Keluarga</td>
                                                                           <td>Penyakit Dahulu</td>
                                                                           <td>Pengobatan</td>
                                                                           <td>Alergi</td>
                                                                        </tr>
                                                                     </thead>
                                                                     <tbody>
                                                                        <?php foreach ($query as $row) : ?>
                                                                           <tr>
                                                                              <td><?= $row['keluhanUtama']; ?></td>
                                                                              <td><?= $row['penyakitKeluarga']; ?></td>
                                                                              <td><?= $row['penyakutDahulu']; ?></td>
                                                                              <td><?= $row['pengobatan']; ?></td>
                                                                              <td><?= $row['alergi']; ?></td>
                                                                           </tr>
                                                                        <?php endforeach ?>
                                                                     </tbody>
                                                                  </table>
                                                                  <hr>
                                                                  <h6>Fungsional</h6>
                                                                  <?php
                                                                  $query = tampildata("SELECT * FROM assKepUmum_Fungisonal WHERE uidPasien='$id'");
                                                                  ?>
                                                                  <table class="table table-primary">
                                                                     <thead>
                                                                        <tr>
                                                                           <td>Alat Bantu</td>
                                                                           <td>Prothesa</td>
                                                                           <td>Cacat Fisik</td>
                                                                           <td>ADL</td>
                                                                        </tr>
                                                                     </thead>
                                                                     <tbody>
                                                                        <?php foreach ($query as $row) : ?>
                                                                           <tr>
                                                                              <td><?= $row['alatBantu']; ?> | Catatan : <?= $row['alatBantuCatatan'] ?></td>
                                                                              <td><?= $row['prothesa']; ?> | Catatan : <?= $row['prothesaCatatan'] ?></td>
                                                                              <td><?= $row['cacatFisik']; ?></td>
                                                                              <td><?= $row['ADL']; ?></td>
                                                                           </tr>
                                                                        <?php endforeach ?>
                                                                     </tbody>
                                                                  </table>
                                                                  <hr>
                                                                  <h6>Riwayat Psiko-Sosial-Spritual-Budaya</h6>
                                                                  <?php
                                                                  $query = tampildata("SELECT * FROM assKepUmum_Psikolog WHERE uidPasien='$id'");
                                                                  ?>
                                                                  <table class="table table-primary">
                                                                     <thead>
                                                                        <tr>
                                                                           <td>Psikologis</td>
                                                                           <td>Bahasa</td>
                                                                           <td>Hubungan</td>
                                                                           <td>Tinggal</td>
                                                                           <td>Ekonomi</td>
                                                                           <td>Kepercayaan</td>
                                                                           <td>Edukasi</td>
                                                                        </tr>
                                                                     </thead>
                                                                     <tbody>
                                                                        <?php foreach ($query as $row) : ?>
                                                                           <tr>
                                                                              <td><?= $row['statusPsikologis']; ?> | Catatan : <?= $row['catatanPsikologis'] ?></td>
                                                                              <td><?= $row['bahasa']; ?> | Catatan : <?= $row['catatanBahasa'] ?></td>
                                                                              <td><?= $row['hubunganKeluarga']; ?></td>
                                                                              <td><?= $row['tinggal']; ?></td>
                                                                              <td><?= $row['ekonomi']; ?></td>
                                                                              <td><?= $row['kepercayaan']; ?> | Catatan : <?= $row['catatanKepercayaan'] ?></td>
                                                                              <td><?= $row['edukasi']; ?> | Catatan : <?= $row['catatanEdukasi'] ?></td>
                                                                           </tr>
                                                                        <?php endforeach ?>
                                                                     </tbody>
                                                                  </table>
                                                                  <hr>
                                                                  <h6>Penilaian Resiko Jatuh</h6>
                                                                  <?php
                                                                  $query = tampildata("SELECT * FROM assKepUmum_Jatuh WHERE uidPasien='$id'");
                                                                  ?>
                                                                  <table class="table table-primary">
                                                                     <thead>
                                                                        <tr>
                                                                           <td>Tidak Seimbang</td>
                                                                           <td>Alat Bantu</td>
                                                                           <td>Menopang</td>
                                                                           <td>Hasil</td>
                                                                           <td>Dilaporkan</td>
                                                                           <td>Jam</td>
                                                                        </tr>
                                                                     </thead>
                                                                     <tbody>
                                                                        <?php foreach ($query as $row) : ?>
                                                                           <tr>
                                                                              <td><?= $row['seimbang']; ?> </td>
                                                                              <td><?= $row['alatBantu']; ?> </td>
                                                                              <td><?= $row['menopang']; ?></td>
                                                                              <td><?= $row['hasil']; ?></td>
                                                                              <td><?= $row['dilaporkan']; ?></td>
                                                                              <td><?= $row['jam']; ?> </td>
                                                                           </tr>
                                                                        <?php endforeach ?>
                                                                     </tbody>
                                                                  </table>
                                                                  <hr>
                                                                  <h6>Skrining Gizi</h6>
                                                                  <?php
                                                                  $query = tampildata("SELECT * FROM assKepUmum_Gizi WHERE uidPasien='$id'");
                                                                  ?>
                                                                  <table class="table table-primary">
                                                                     <thead>
                                                                        <tr>
                                                                           <td>Penurunan BB</td>
                                                                           <td>Nafsu Makan</td>
                                                                        </tr>
                                                                     </thead>
                                                                     <tbody>
                                                                        <?php foreach ($query as $row) : ?>
                                                                           <tr>
                                                                              <td><?= $row['penurunanBB']; ?> </td>
                                                                              <td><?= $row['nafsuMakan']; ?> </td>
                                                                           </tr>
                                                                        <?php endforeach ?>
                                                                     </tbody>
                                                                  </table>
                                                                  <hr>
                                                                  <h6>Penilaian Tingkat Nyeri</h6>
                                                                  <?php
                                                                  $query = tampildata("SELECT * FROM assKepUmum_TingkatNyeri WHERE uidPasien='$id'");
                                                                  ?>
                                                                  <table class="table table-primary">
                                                                     <thead>
                                                                        <tr>
                                                                           <td>Rasa Nyeri</td>
                                                                           <td>Penyebab</td>
                                                                           <td>Kualitas</td>
                                                                           <td>Lokasi</td>
                                                                           <td>Menyebar</td>
                                                                           <td>Severity Skala</td>
                                                                           <td>Waktu Durasi</td>
                                                                           <td>Nyeri hilang bila</td>
                                                                           <td>Diberitahukan Dokter</td>
                                                                           <td>Jam</td>
                                                                        </tr>
                                                                     </thead>
                                                                     <tbody>
                                                                        <?php foreach ($query as $row) : ?>
                                                                           <tr>
                                                                              <td><?= $row['rasaNyeri']; ?> </td>
                                                                              <td><?= $row['penyebab']; ?> </td>
                                                                              <td><?= $row['kualitas']; ?> </td>
                                                                              <td><?= $row['lokasi']; ?> </td>
                                                                              <td><?= $row['menyebar']; ?> </td>
                                                                              <td><?= $row['skala']; ?> </td>
                                                                              <td><?= $row['waktuDurasi']; ?> </td>
                                                                              <td><?= $row['nyeriHilang']; ?> </td>
                                                                              <td><?= $row['dilaporkan']; ?> </td>
                                                                              <td><?= $row['jam']; ?> </td>
                                                                           </tr>
                                                                        <?php endforeach ?>
                                                                     </tbody>
                                                                  </table>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      <?php endforeach ?>
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