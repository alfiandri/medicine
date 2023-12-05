<?php
session_start();
$page = "Pemeriksaan HD";
require '../db/connect.php';
require '../controller/view.php';
$id = $_GET['id'];
$norawat = $_GET['no'];
$info = mysqli_query($koneksi, "SELECT * FROM pasienVisit WHERE uidPasien='$id'");
$data = mysqli_fetch_array($info);
$infopasien = mysqli_query($koneksi, "SELECT * FROM pasien WHERE uidPasien='$id'");
$datapasien = mysqli_fetch_array($infopasien);

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
                        <h3><?= $page ?></h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item"><a href="registrasi-awal">Permintaan HD</a></li>
                           <li class="breadcrumb-item active">Assesment </li>
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
                                 <li class="nav-item"><a class="nav-link" id="pills-masalahkeperawatan-tab" data-bs-toggle="pill" href="#pills-masalahkeperawatan" role="tab" aria-controls="pills-masalahkeperawatan" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Masalah Keperawatan</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Data Penilaian</a></li>
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
                                                <input type="text" readonly class="form-control-plaintext" id="noRegistrasi" value=": <?= $data['nomorRegistrasi'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="noRawat" class="col-sm-4 col-form-label">No.Rawat</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="noRawat" value=": <?= $data['nomorRegistrasi'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="tglVisit" class="col-sm-4 col-form-label">Tgl.Registrasi</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="tglVisit" value=": <?= $data['tanggalVisit'] ?>">
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
                                                <input type="text" readonly class="form-control-plaintext" id="kondisiMasuk" value=": <?= $data['kondisiMasuk'] ?>">
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
                                                <input type="text" readonly class="form-control-plaintext" id="nomorRM" value=": <?= $datapasien['nomorRM'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="namaPasien" class="col-sm-4 col-form-label">Nama Pasien</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="namaPasien" value=": <?= $datapasien['namaPasien'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="ttl" class="col-sm-4 col-form-label">TTL</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="ttl" value=": <?= $datapasien['tempatLahir'] ?>/<?= $datapasien['tanggalLahir'] ?>">
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
                                                <input type="text" readonly class="form-control-plaintext" id="pj" value=": <?= $data['jenisBayar'] ?>">
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <h6>Keluhan Utama</h6>
                                       <div class="row mb-2">
                                          <div class="col-12">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">Keluhan</label>
                                                <textarea name="" class="form-control form-control-sm" id="" cols="30" rows="5"></textarea>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">Skor Nyeri</label>
                                                <select name="" class="form-select form-select-sm" id="">
                                                   <option value="">Tidak</option>
                                                   <option value="">Ringan (1-3)</option>
                                                   <option value="">Sedang (4-6)</option>
                                                   <option value="">Berat (7-10)</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                       <h6>Pemeriksaan Fisik</h6>
                                       <div class="col-2">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">Keadaan Umum</label>
                                             <select name="" class="form-select form-select-sm" id="">
                                                <option value="">Baik</option>
                                                <option value="">Sedang</option>
                                                <option value="">Buruk</option>
                                                <option value="">Lain Lain</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-2">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">Kesadaran</label>
                                             <select name="" class="form-select form-select-sm" id="">
                                                <option value="">Compos Mentis</option>
                                                <option value="">Apatis</option>
                                                <option value="">Delirium</option>
                                                <option value="">Somnolen</option>
                                                <option value="">Sopor</option>
                                                <option value="">Coma</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-2">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">Tekanan Darah</label>
                                             <input type="text" class="form-control form-control-sm" placeholder="mmHg">
                                          </div>
                                       </div>
                                       <div class="col-2">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">MAP</label>
                                             <input type="text" class="form-control form-control-sm" placeholder="">
                                          </div>
                                       </div>
                                       <div class="col-1">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">Suhu</label>
                                             <input type="text" class="form-control form-control-sm" placeholder="C">
                                          </div>
                                       </div>
                                       <div class="col-2">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">Nadi</label>
                                             <select name="" class="form-select form-select-sm" id="">
                                                <option value="">Reguler</option>
                                                <option value="">Ireguler</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-1">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">Frekuensi</label>
                                             <input type="text" class="form-control form-control-sm" placeholder="x/menit">
                                          </div>
                                       </div>
                                       <div class="col-2">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">Respirasi</label>
                                             <select name="" class="form-select form-select-sm" id="">
                                                <option value="">Normal</option>
                                                <option value="">Kusmaul</option>
                                                <option value="">Dispnea</option>
                                                <option value="">Edema Paru</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-2">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">Frekuensi</label>
                                             <input type="text" class="form-control form-control-sm" placeholder="x/menit">
                                          </div>
                                       </div>
                                       <div class="col-2">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">Konjungtiva</label>
                                             <select name="" class="form-select form-select-sm" id="">
                                                <option value="">Tidak Anemis</option>
                                                <option value="">Anemis</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-2">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">Ekstrimitas</label>
                                             <select name="" class="form-select form-select-sm" id="">
                                                <option value="">Tidak Edema</option>
                                                <option value="">Dehidrasi</option>
                                                <option value="">Edema</option>
                                                <option value="">Edema Anarsaka</option>
                                                <option value="">Pucat & Dingin</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-2">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">BB Pre HD </label>
                                             <input type="text" class="form-control form-control-sm" placeholder="Kg">
                                          </div>
                                       </div>
                                       <div class="col-2">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">BB Post HD </label>
                                             <input type="text" class="form-control form-control-sm" placeholder="Kg">
                                          </div>
                                       </div>
                                       <div class="col-2">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">BB Kering </label>
                                             <input type="text" class="form-control form-control-sm" placeholder="Kg">
                                          </div>
                                       </div>
                                       <div class="col-2">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">BB Post HD </label>
                                             <input type="text" class="form-control form-control-sm" placeholder="Kg">
                                          </div>
                                       </div>
                                       <div class="col-2">
                                          <div class="mb-2">
                                             <label for="td" class="form-label">Akses Vaskuler</label>
                                             <select name="" class="form-select form-select-sm" id="">
                                                <option value="">AV-fistula</option>
                                                <option value="">Femoral</option>
                                                <option value="">HD Kateter</option>
                                             </select>
                                          </div>
                                       </div>
                                       <hr>
                                       <h6>Risiko Jatuh (Morse Scale)</h6>
                                       <table class="table table-primary">
                                          <thead>
                                             <tr>
                                                <th>Parameter</th>
                                                <th>Penilaian</th>
                                                <th>Skor</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Riwayat jatuh yang baru atau dalam 3 bulan akhir</td>
                                                <td>
                                                   <select name="" class="form-select form-select-sm" id="">
                                                      <option value="0">Tidak</option>
                                                      <option value="25">Ya</option>
                                                   </select>
                                                </td>
                                                <td>0</td>
                                             </tr>
                                             <tr>
                                                <td>Diagnosis medis sekunder > 1</td>
                                                <td>
                                                   <select name="" class="form-select form-select-sm" id="">
                                                      <option value="0">Tidak</option>
                                                      <option value="15">Ya</option>
                                                   </select>
                                                </td>
                                                <td>0</td>
                                             </tr>
                                             <tr>
                                                <td>Alat bantu jalan</td>
                                                <td>
                                                   <select name="" class="form-select form-select-sm" id="">
                                                      <option value="0">Bed rest / Normal</option>
                                                      <option value="15">Penopang tongkat</option>
                                                      <option value="30">Furnitur</option>
                                                   </select>
                                                </td>
                                                <td>0</td>
                                             </tr>
                                             <tr>
                                                <td>Memakai terapi heparin lock/iv</td>
                                                <td>
                                                   <select name="" class="form-select form-select-sm" id="">
                                                      <option value="0">Tidak</option>
                                                      <option value="20">Ya</option>
                                                   </select>
                                                </td>
                                                <td>0</td>
                                             </tr>
                                             <tr>
                                                <td>Cara berjalan/berpindah</td>
                                                <td>
                                                   <select name="" class="form-select form-select-sm" id="">
                                                      <option value="0">Normal/bedrest/imobilisasi</option>
                                                      <option value="10">Lemah </option>
                                                      <option value="20">Terganggu</option>
                                                   </select>
                                                </td>
                                                <td>0</td>
                                             </tr>
                                             <tr>
                                                <td>Status Mental</td>
                                                <td>
                                                   <select name="" class="form-select form-select-sm" id="">
                                                      <option value="0">Orientasi sesuai kemampuan</option>
                                                      <option value="15">Lupa Keterbatasan </option>
                                                   </select>
                                                </td>
                                                <td>0</td>
                                             </tr>
                                             <tr>
                                                <td colspan="3">
                                                   <span>Kesimpulan : <span class="badge bg-primary">0-24 (Tidak Beresiko)</span></span>
                                                   <span class="badge bg-warning">25-45 (Resiko Sedang)</span></span>
                                                   <span class="badge bg-danger">> 45 (Resiko Tinggi)</span></span>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <hr>
                                       <h6>Instruksi Program</h6>
                                       <div class="row mb-2">
                                          <div class="col-2">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">Lama</label>
                                                <input type="text" class="form-control form-control-sm" placeholder="Jam">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">Dialist</label>
                                                <input type="text" class="form-control form-control-sm" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">Penarikan Cairan</label>
                                                <input type="text" class="form-control form-control-sm" placeholder="ml">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">Akses</label>
                                                <input type="text" class="form-control form-control-sm" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">Transfusi</label>
                                                <input type="text" class="form-control form-control-sm" placeholder="Kalf/Durante HD">
                                             </div>
                                          </div>
                                          <div class="col-1">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">QB</label>
                                                <input type="number" class="form-control form-control-sm" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-1">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">QD</label>
                                                <input type="number" class="form-control form-control-sm" placeholder="">
                                             </div>
                                          </div>
                                          <hr>
                                          <h6>Hasil Laboratorium</h6>
                                          <div class="col-2">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">Ureum</label>
                                                <input type="number" class="form-control form-control-sm" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">HbsAg</label>
                                                <input type="number" class="form-control form-control-sm" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">HIV</label>
                                                <input type="number" class="form-control form-control-sm" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">Hb</label>
                                                <input type="number" class="form-control form-control-sm" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">Creatinin</label>
                                                <input type="number" class="form-control form-control-sm" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">HCV</label>
                                                <input type="number" class="form-control form-control-sm" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">Lain Lain</label>
                                                <input type="number" class="form-control form-control-sm" placeholder="">
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-2">
                                                <label for="td" class="form-label">Diagnosa</label>
                                                <select name="" class="form-select form-select-sm" id=""></select>
                                             </div>
                                          </div>
                                       </div>
                                       <hr>
                                    </div>
                                    <button class="btn btn-success">Simpan</button>
                                 </div>

                                 <div class="tab-pane fade" id="pills-masalahkeperawatan" role="tabpanel" aria-labelledby="pills-masalahkeperawatan-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="norawat" value="<?= $norawat ?>">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="masalah" class="col-sm-2 col-form-label">Masalah Keperawatan</label>
                                                <div class="col-sm-10">
                                                   <textarea name="masalah" id="masalah" class="form-control" cols="30" rows="10"><?= $dataperawatan['masalah'] ?></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="row">
                                                <label for="masalahkeperawatan" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button class="btn btn-success" type="submit" name="simpanmasalahkeparawatan">Simpan</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>

                                 <div class="tab-pane fade" id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                                    <div class="row">
                                       <div class="col-xl-12 col-md-12 box-col-12">
                                          <div class="file-content">
                                             <div class="card">
                                                <div class="card-body file-manager">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM pasienVisit WHERE uidPasien='$id' AND nomorRegistrasi='$norawat'");
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
         <!-- footer start-->
         <?php
         require 'footer.php';
         ?>
      </div>
   </div>

   <?php
   require 'library.php';
   ?>
</body>

</html>