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
                           <li class="breadcrumb-item active">Penilaian Keperawatan Bayi & Anak </li>
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
                                 <li class="nav-item"><a class="nav-link" id="pills-imunisasi-tab" data-bs-toggle="pill" href="#pills-imunisasi" role="tab" aria-controls="pills-imunisasi" aria-selected="false"><i class="icofont icofont-files"></i>Imunisasi</a></li>
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
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Berat Badan</label>
                                                <input type="text" class="form-control" placeholder="Kg">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Tinggi Badan</label>
                                                <input type="text" class="form-control" placeholder="cm">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">LP</label>
                                                <input type="text" class="form-control" placeholder="cm">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">LK</label>
                                                <input type="text" class="form-control" placeholder="cm">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">LD</label>
                                                <input type="text" class="form-control" placeholder="cm">
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <h6>Riwayat Kesehatan Dahulu</h6>
                                       <div class="row mb-3">
                                          <div class="col-12">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Keluhan Utama</label>
                                                <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Riwayat Penyakit Keluarga</label>
                                                <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Riwayat Penyakit Dahulu</label>
                                                <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Riwayat Pengobatan</label>
                                                <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Riwayat Alergi</label>
                                                <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                             </div>
                                          </div>

                                       </div>
                                       <hr>
                                       <h6>Riwayat Tumbuh Kembang dan Perinatal Care</h6>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Kelahiran Anak Ke</label>
                                                <input type="text" class="form-control form-sm" placeholder="Dari">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Saudara</label>
                                                <input type="text" class="form-control form-sm" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Cara Kelahiran</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Spontant</option>
                                                   <option value="">Sectio Caesaria</option>
                                                   <option value="">Lain Lain</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Catatan Kelahiran</label>
                                                <input type="text" class="form-control form-sm" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Umur Kelahiran</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Cukup Bulan</option>
                                                   <option value="">Kurang Bulan</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Kelainan Bawaan</label>
                                                <select name="" class="form-select" id="">
                                                   <option value="">Tidak Ada</option>
                                                   <option value="">Ada</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-8">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Catatan</label>
                                                <input type="text" class="form-control form-sm" placeholder="">
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <h6>Riwayat Tumbuh Kembang Anak</h6>
                                       <div class="row">
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Tengkurap, Usia </label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Duduk, Usia </label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Berdiri, Usia </label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Gigi Pertama, Usia </label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Berjalan,mnmmnnnnb , Usia </label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                       </div>
                                       <hr>


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

                                 <div class="tab-pane fade" id="pills-imunisasi" role="tabpanel" aria-labelledby="pills-imunisasi-tab">
                                    <div class="row">
                                       <div class="mb-3 row">
                                          <label for="tanggal" class="col-sm-2 col-form-label">Imunisasi</label>
                                          <div class="col-sm-2">
                                             <select name="" class="form-select" id="">
                                                <option value="">BCG</option>
                                                <option value="">Cacar Air</option>
                                                <option value="">Campak</option>
                                                <option value="">DPT</option>
                                                <option value="">Hepatitis A</option>
                                                <option value="">HIB</option>
                                                <option value="">HPV</option>
                                                <option value="">Influenza</option>
                                                <option value="">IPD</option>
                                                <option value="">MMR</option>
                                                <option value="">Polio</option>
                                                <option value="">Rotavirus</option>
                                                <option value="">Thypoid</option>
                                             </select>
                                          </div>
                                          <div class="col-sm-2">
                                             <select name="" class="form-select" id="">
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                                <option value="">6</option>
                                             </select>
                                          </div>
                                          <div class="col-sm-6">
                                             <input type="text" class="form-control" placeholder="Catatan">
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