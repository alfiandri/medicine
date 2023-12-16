<?php

$page = "Awal Keperawatan Obgyn";
require '../../db/connect.php';
require '../../controller/intpatient/ass-kep-obgyn.php';
require 'view.php';
$id = $_GET['id'];
$norawat = $_GET['norawat'];
$info = mysqli_query($koneksi, "SELECT * FROM pasien_visit WHERE uid_pasien='$id'");
$data = mysqli_fetch_array($info);
$infopasien = mysqli_query($koneksi, "SELECT * FROM pasien WHERE uid_pasien='$id'");
$datapasien = mysqli_fetch_array($infopasien);
$kepumum = mysqli_query($koneksi, "SELECT * FROM assKepUmum_Keadaan WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$datakepumum = mysqli_fetch_array($kepumum);
$nutrisi = mysqli_query($koneksi, "SELECT * FROM assKepUmum_Nutrisi WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$datanutrisi = mysqli_fetch_array($nutrisi);
$kesehatan = mysqli_query($koneksi, "SELECT * FROM asskepumum_kesehatangigi WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$datakesehatan = mysqli_fetch_array($kesehatan);
$fungsional = mysqli_query($koneksi, "SELECT * FROM assKepUmum_Fungisonal WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$datafungsional = mysqli_fetch_array($fungsional);
$psikolog = mysqli_query($koneksi, "SELECT * FROM assKepUmum_Psikolog WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$datapsikolog = mysqli_fetch_array($psikolog);
$jatuh = mysqli_query($koneksi, "SELECT * FROM assKepUmum_Jatuh WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$datajatuh = mysqli_fetch_array($jatuh);
$gizi = mysqli_query($koneksi, "SELECT * FROM assKepUmum_Gizi WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$datagizi = mysqli_fetch_array($gizi);
$nyeri = mysqli_query($koneksi, "SELECT * FROM assKepUmum_TingkatNyeri WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$datanyeri = mysqli_fetch_array($nyeri);
$perawatan = mysqli_query($koneksi, "SELECT * FROM assKepUmum_masalahKeperawatan WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$dataperawatan = mysqli_fetch_array($perawatan);
$kebidanan = mysqli_query($koneksi, "SELECT * FROM ass_kebidanan WHERE uid_pasien='$id' AND nomor_rawat='$norawat' ");
$datakebidanan = mysqli_fetch_array($kebidanan);
$menstruasi = mysqli_query($koneksi, "SELECT * FROM ass_kebidanan_menstruasi WHERE uid_pasien='$id' AND nomor_rawat='$norawat' ");
$datamenstruasi = mysqli_fetch_array($menstruasi);
$kehamlilan = mysqli_query($koneksi, "SELECT * FROM ass_kebidanan_riwayat_kehamilan WHERE uid_pasien='$id' AND nomor_rawat='$norawat' ");
$datakehamlilan = mysqli_fetch_array($kehamlilan);
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
                                 <li class="nav-item"><a class="nav-link" id="pills-perkawinan-tab" data-bs-toggle="pill" href="#pills-perkawinan" role="tab" aria-controls="pills-perkawinan" aria-selected="false"><i class="icofont icofont-user"></i>Riwayat Perkawinan</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-folder"></i>Data Penilaian</a></li>
                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div class="tab-pane fade show active" id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                       <input type="hidden" name="norawat" value="<?= $_GET['norawat'] ?>">
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
                                                   <label for="td" class="form-label">TD</label>
                                                   <input type="text" name="td" value="<?= $datakepumum['td'] ?>" class="form-control form-sm" placeholder="mmHg">
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="nd" class="form-label">Nadi</label>
                                                   <input type="text" name="nd" class="form-control" value="<?= $datakepumum['nadi'] ?>" placeholder="x/menit">
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="rr" class="form-label">RR</label>
                                                   <input type="text" name="rr" value="<?= $datakepumum['rr'] ?>" class="form-control" placeholder="x/menit">
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="suhu" class="form-label">Suhu</label>
                                                   <input type="text" name="suhu" value="<?= $datakepumum['suhu'] ?>" class="form-control" placeholder="c">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="gcs" class="form-label">GCS</label>
                                                   <div class="row">
                                                      <div class="col">
                                                         <input type="text" name="gcsE" value="<?= $datakepumum['gcsE'] ?>" class="form-control" placeholder="E">
                                                      </div>
                                                      <div class="col">
                                                         <input type="text" name="gcsV" value="<?= $datakepumum['gcsV'] ?>" class="form-control" placeholder="V">
                                                      </div>
                                                      <div class="col">
                                                         <input type="text" name="gcsM" value="<?= $datakepumum['gcsM'] ?>" class="form-control" placeholder="M">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="bb" class="form-label">Berat Badan</label>
                                                   <input type="text" name="bb" value="<?= $datakepumum['bb'] ?>" class="form-control" placeholder="Kg">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="tb" class="form-label">Tinggi Badan</label>
                                                   <input type="text" name="tb" value="<?= $datakepumum['tb'] ?>" class="form-control" placeholder="cm">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="lila" class="form-label">LILA</label>
                                                   <input type="text" name="lila" class="form-control" value="<?= $datanutrisi['lila'] ?>" placeholder="cm">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="bmi" class="form-label">BMI</label>
                                                   <input type="text" name="bmi" value="<?= $datanutrisi['bmi'] ?>" class="form-control" placeholder="Kg/m2">
                                                </div>
                                             </div>
                                          </div>
                                          <h6>Pemeriksaan Kebidanan</h6>
                                          <div class="row mb-3">
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="tfu" class="form-label">TFU</label>
                                                   <input type="text" name="tfu" value="<?= $datakebidanan['tfu'] ?>" class="form-control" placeholder="cm">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="tbj" class="form-label">TBJ</label>
                                                   <input type="text" name="tbj" value="<?= $datakebidanan['tbj'] ?>" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="letak" class="form-label">Letak</label>
                                                   <input type="text" name="letak" value="<?= $datakebidanan['letak'] ?>" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="presentasi" class="form-label">Presentasi</label>
                                                   <input type="text" name="presentasi" value="<?= $datakebidanan['presentasi'] ?>" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="penurunan" class="form-label">Penurunan</label>
                                                   <input type="text" name="penurunan" value="<?= $datakebidanan['penurunan'] ?>" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="kontraksi" class="form-label">Kontraksi/HIS</label>
                                                   <input type="text" name="kontraksi" value="<?= $datakebidanan['kontraksi'] ?>" class="form-control" placeholder="x/10">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="kekuatan" class="form-label">Kekuatan</label>
                                                   <input type="text" name="kekuatan" value="<?= $datakebidanan['kekuatan'] ?>" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="lamanya" class="form-label">Lamanya</label>
                                                   <input type="text" name="lamanya" value="<?= $datakebidanan['lamanya'] ?>" class="form-control" placeholder="detik">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="gerakjanin" class="form-label">Gerak Janin x/30menit</label>
                                                   <input type="text" name="gerakjanin" value="<?= $datakebidanan['gerak_janin'] ?>" class="form-control" placeholder="menit">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="gerakjanin_catatan" class="form-label">Keterangan</label>
                                                   <select name="gerakjanin_catatan" class="form-select" id="">
                                                      <option value="<?= $datakebidanan['gerak_janin_catatan'] ?>"><?= $datakebidanan['gerak_janin_catatan'] ?></option>
                                                      <option value="Teratur">Teratur</option>
                                                      <option value="Tidak Teratur">Tidak Teratur</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="portio" class="form-label">Portio</label>
                                                   <input type="text" name="portio" value="<?= $datakebidanan['portio'] ?>" class="form-control" placeholder="">
                                                </div>
                                             </div>

                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="pembukaan_serviks" class="form-label">Pembukaan Serviks</label>
                                                   <input type="text" class="form-control" name="pembukaan_serviks" value="<?= $datakebidanan['pembukaan_serviks'] ?>" placeholder="cm">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="ketuban" class="form-label">Ketuban</label>
                                                   <input type="text" name="ketuban" value="<?= $datakebidanan['ketuban'] ?>" class="form-control" placeholder="kep/bok">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="hodge" class="form-label">Hodge</label>
                                                   <input type="text" name="hodge" value="<?= $datakebidanan['hodge'] ?>" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="inspekulo" class="form-label">Inspekulo</label>
                                                   <select name="inspekulo" class="form-select" id="">
                                                      <option value="<?= $datakebidanan['inspekulo'] ?>"><?= $datakebidanan['inspekulo'] ?></option>
                                                      <option value="Dilakukan">Dilakukan</option>
                                                      <option value="Tidak">Tidak</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="inspekulo_catatan" class="form-label">Hasil</label>
                                                   <input type="text" name="inspekulo_catatan" value="<?= $datakebidanan['inspekulo_catatan'] ?>" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="ctg" class="form-label">CTG</label>
                                                   <select name="ctg" class="form-select" id="">
                                                      <option value="<?= $datakebidanan['ctg'] ?>"><?= $datakebidanan['ctg'] ?></option>
                                                      <option value="Dilakukan">Dilakukan</option>
                                                      <option value="Tidak">Tidak</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="ctg_catatan" class="form-label">Hasil</label>
                                                   <input type="text" name="ctg_catatan" value="<?= $datakebidanan['ctg_catatan'] ?>" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="lab" class="form-label">Laboratorium</label>
                                                   <select name="lab" class="form-select" id="">
                                                      <option value="<?= $datakebidanan['lab'] ?>"><?= $datakebidanan['lab'] ?></option>
                                                      <option value="Dilakukan">Dilakukan</option>
                                                      <option value="Tidak">Tidak</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="lab_catatan" class="form-label">Hasil</label>
                                                   <input type="text" name="lab_catatan" value="<?= $datakebidanan['lab_catatan'] ?>" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="usg" class="form-label">USG</label>
                                                   <select name="usg" class="form-select" id="">
                                                      <option value="<?= $datakebidanan['usg'] ?>"><?= $datakebidanan['usg'] ?></option>
                                                      <option value="Dilakukan">Dilakukan</option>
                                                      <option value="Tidak">Tidak</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="usg_catatan" class="form-label">Hasil</label>
                                                   <input type="text" name="usg_catatan" value="<?= $datakebidanan['usg_catatan'] ?>" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="lakmus" class="form-label">Lakmus</label>
                                                   <select name="lakmus" class="form-select" id="">
                                                      <option value="<?= $datakebidanan['lakmus'] ?>"><?= $datakebidanan['lakmus'] ?></option>
                                                      <option value="Dilakukan">Dilakukan</option>
                                                      <option value="Tidak">Tidak</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="lakmus_catatan" class="form-label">Hasil</label>
                                                   <input type="text" class="form-control" name="lakmus_catatan" value="<?= $datakebidanan['lakmus_catatan'] ?>" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="panggula" class="form-label">Pemeriksaan Panggula</label>
                                                   <select name="panggula" class="form-select" id="">
                                                      <option value="<?= $datakebidanan['panggula'] ?>"><?= $datakebidanan['panggula'] ?></option>
                                                      <option value="Luas">Luas</option>
                                                      <option value="Sedang">Sedang</option>
                                                      <option value="Sempit">Sempit</option>
                                                      <option value="Tidak Dilakukan Pemeriksaan">Tidak Dilakukan Pemeriksaan</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="panggula_catatan" class="form-label">Catatan Panggula</label>
                                                   <input type="text" name="panggula_catatan" value="<?= $datakebidanan['panggula_catatan'] ?>" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                          </div>
                                          <h6>Riwayat Kesehatan</h6>
                                          <div class="row mb-3">
                                             <div class="col-12">
                                                <div class="mb-3">
                                                   <label for="keluhanutama" class="form-label">Keluhan Utama</label>
                                                   <textarea name="keluhanutama" class="form-control" id="" cols="30" rows="2"><?= $datakesehatan['keluhanUtama'] ?></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <p>Riwayat Menstruasi</p>
                                          <div class="row">
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="umur_menarche" class="form-label">Umur menarche</label>
                                                   <input type="text" name="umur_menarche" value="<?= $datamenstruasi['umur_menarche'] ?>" class="form-control" placeholder="tahun">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="lamanya_menarche" class="form-label">Lamanya</label>
                                                   <input type="text" value="<?= $datamenstruasi['lamanya'] ?>" name="lamanya_menarche" class="form-control" placeholder="hari">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="banyaknya_menarche" class="form-label">Banyaknya</label>
                                                   <input type="text" value="<?= $datamenstruasi['banyaknya'] ?>" name="banyaknya_menarche" class="form-control" placeholder="pembalut">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="haid_terakhir" class="form-label">Haid Terakhir</label>
                                                   <input type="text" value="<?= $datamenstruasi['haid_terakhir'] ?>" name="haid_terakhir" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="siklus" class="form-label">Siklus</label>
                                                   <input type="text" value="<?= $datamenstruasi['siklus'] ?>" name="siklus" class="form-control" placeholder="hari">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="kondisi" class="form-label">Kondisi</label>
                                                   <select name="kondisi" class="form-select" id="kondisi">
                                                      <option value="<?= $datamenstruasi['kondisi'] ?>"><?= $datamenstruasi['kondisi'] ?></option>
                                                      <option value="Teratur">Teratur</option>
                                                      <option value="Tidak Teratur">Tidak Teratur</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="masalah_menstruasi" class="form-label">Masalah yang dirasakan menstruasi</label>
                                                   <select name="masalah_menstruasi" class="form-select" id="">
                                                      <option value="<?= $datamenstruasi['masalah_menstruasi'] ?>"><?= $datamenstruasi['masalah_menstruasi'] ?></option>
                                                      <option value="Tidak Ada Masalah">Tidak ada masalah</option>
                                                      <option value="Dispemnorhea">Dispemnorhea</option>
                                                      <option value="Spoting">Spoting</option>
                                                      <option value="Menohorgai">Menohorgai</option>
                                                      <option value="PMS">PMS</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <p>Riwayat Kehamilan Tetap</p>
                                          <div class="row mb-3">
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="hpht" class="form-label">HPHT</label>
                                                   <input type="date" value="<?= $datakehamlilan['hpht'] ?>" name="hpht" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="usia_hamil" class="form-label">Usia Hamil</label>
                                                   <input type="text" value="<?= $datakehamlilan['usiahamil'] ?>" name="usia_hamil" class="form-control" placeholder="bln/mgg">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="tp" class="form-label">TP</label>
                                                   <input type="date" value="<?= $datakehamlilan['tp'] ?>" name="tp" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="riwayat_imunisasi" class="form-label">Riwayat Imunisasi</label>
                                                   <select name="riwayat_imunisasi" class="form-select" id="riwayat_imunisasi">
                                                      <option value="<?= $datakehamlilan['riwayat_imunisasi'] ?>"><?= $datakehamlilan['riwayat_imunisasi'] ?></option>
                                                      <option value="Tidak">Tidak</option>
                                                      <option value="Ya">Ya</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="imunisasi" class="form-label">Imunisasi</label>
                                                   <input type="text" value="<?= $datakehamlilan['imunisasi'] ?>" name="imunisasi" class="form-control" placeholder="Kali">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="g" class="form-label">G</label>
                                                   <input type="text" value="<?= $datakehamlilan['g'] ?>" name="g" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="p" class="form-label">P</label>
                                                   <input type="text" value="<?= $datakehamlilan['p'] ?>" name="p" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="a" class="form-label">A</label>
                                                   <input type="text" value="<?= $datakehamlilan['a'] ?>" name="a" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="hidup" class="form-label">Hidup</label>
                                                   <input type="text" value="<?= $datakehamlilan['hidup'] ?>" name="hidup" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="riwayat_kb" class="form-label">Riwayat KB</label>
                                                   <select name="riwayat_kb" class="form-select" id="">
                                                      <option value="<?= $datakehamlilan['riwayat_kb'] ?>"><?= $datakehamlilan['riwayat_kb'] ?></option>
                                                      <option value="Belum Pernah">Belum Pernah</option>
                                                      <option value="Suntik">Suntik</option>
                                                      <option value="Pil">Pil</option>
                                                      <option value="AKDR">AKDR</option>
                                                      <option value="MOW">MOW</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="lamanya_kb" class="form-label">Lamanya</label>
                                                   <input type="text" value="<?= $datakehamlilan['kb_lamanya'] ?>" class="form-control" placeholder="">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="komplikasi" class="form-label">Komplikasi</label>
                                                   <input type="text" value="<?= $datakehamlilan['komplikasi'] ?>" class="form-control" name="komplikasi" placeholder="">
                                                </div>
                                             </div>
                                          </div>
                                          <h6>Fungsional</h6>
                                          <div class="row mb-3">
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="alatbantu" class="form-label">Alat Bantu </label>
                                                   <select name="alatbantu" class="form-select" id="">
                                                      <option value="<?= $datafungsional['alatBantu'] ?>"><?= $datafungsional['alatBantu'] ?></option>
                                                      <option value="Tidak">Tidak</option>
                                                      <option value="Ya">Ya</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="catatanalatbantu" class="form-label">Catatan</label>
                                                   <input type="text" class="form-control" value="<?= $datafungsional['alatBantuCatatan'] ?>" name="catatanalatbantu">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="prothesa" class="form-label">Prothesa </label>
                                                   <select name="prothesa" class="form-select" id="prothesa">
                                                      <option value="<?= $datafungsional['prothesa'] ?>"><?= $datafungsional['prothesa'] ?></option>
                                                      <option value="Tidak">Tidak</option>
                                                      <option value="Ya">Ya</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="catatanprothesa" class="form-label">Catatan</label>
                                                   <input type="text" name="catatanprothesa" class="form-control" value="<?= $datafungsional['prothesaCatatan'] ?>">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="cacatfisik" class="form-label">Cacat Fisik</label>
                                                   <input type="text" name="cacatfisik" value="<?= $datafungsional['cacatFisik'] ?>" class="form-control">
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="adl" class="form-label">Aktivitas Kehidupan Sehari Hari (ADL)</label>
                                                   <select name="adl" class="form-select" id="">
                                                      <option value="<?= $datafungsional['ADL'] ?>"><?= $datafungsional['ADL'] ?></option>
                                                      <option value="Mandiri">Mandiri</option>
                                                      <option value="Dibantu">Dibantu</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <h6>Riwayat Psiko-Sosial-Spritual-Budaya</h6>
                                          <div class="row mb-3">
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="statuspsikologis" class="form-label">Status Psikologis</label>
                                                   <select name="statuspsikologis" class="form-select" id="">
                                                      <option value="<?= $datapsikolog['statusPsikologis'] ?>"><?= $datapsikolog['statusPsikologis'] ?></option>
                                                      <option value="Tenang">Tenang</option>
                                                      <option value="Takut">Takut</option>
                                                      <option value="Cemas">Cemas</option>
                                                      <option value="Depresi">Depresi</option>
                                                      <option value="Lain">Lain</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="catatanpsikologis" class="form-label">Catatan</label>
                                                   <input type="text" name="catatanpsikologis" value="<?= $datapsikolog['catatanPsikologis'] ?>" class="form-control">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="bahasa" class="form-label">Bahasa Digunakan Sehari Hari</label>
                                                   <select name="bahasa" class="form-select" id="">
                                                      <option value="<?= $datapsikolog['bahasa'] ?>"><?= $datapsikolog['bahasa'] ?></option>
                                                      <option value="Indonesia">Indonesia</option>
                                                      <option value="Daerah">Daerah</option>
                                                      <option value="Asing">Asing</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="catatanbahasa" class="form-label">Catatan</label>
                                                   <input type="text" name="catatanbahasa" value="<?= $datapsikolog['catatanBahasa'] ?>" class="form-control">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="hubungan" class="form-label">Hubungan Dengan Keluarga</label>
                                                   <select name="hubungan" class="form-select" id="hubungan">
                                                      <option value="<?= $datapsikolog['hubunganKeluarga'] ?>"><?= $datapsikolog['hubunganKeluarga'] ?></option>
                                                      <option value="Baik">Baik</option>
                                                      <option value="Tidak Baik">Tidak Baik</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="tinggal" class="form-label">Tinggal Dengan</label>
                                                   <select name="tinggal" class="form-select" id="">
                                                      <option value="<?= $datapsikolog['tinggal'] ?>"><?= $datapsikolog['tinggal'] ?></option>
                                                      <option value="Sendiri">Sendiri</option>
                                                      <option value="Orang Tua">Orang Tua</option>
                                                      <option value="Suami Istri">Suami Istri</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="ekonomi" class="form-label">Ekonomi</label>
                                                   <select name="ekonomi" class="form-select" id="ekonomi">
                                                      <option value="<?= $datapsikolog['ekonomi'] ?>"><?= $datapsikolog['ekonomi'] ?></option>
                                                      <option value="">Baik</option>
                                                      <option value="">Cukup</option>
                                                      <option value="">Kurang</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-1">
                                                <div class="mb-3">
                                                   <label for="kepercayaan" class="form-label">Kepercayaan</label>
                                                   <select name="" class="form-select" id="">
                                                      <option value="<?= $datapsikolog['kepercayaan'] ?>"><?= $datapsikolog['kepercayaan'] ?></option>
                                                      <option value="Tidak Ada">Tidak Ada</option>
                                                      <option value="Ada">Ada</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="catatankepercayaan" class="form-label">Catatan</label>
                                                   <input type="text" name="catatankepercayaan" value="<?= $datapsikolog['catatanKepercayaan'] ?>" class="form-control">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="edukasi" class="form-label">Edukasi Diberikan Kepada</label>
                                                   <select name="edukasi" class="form-select" id="">
                                                      <option value="<?= $datapsikolog['edukasi'] ?>"><?= $datapsikolog['edukasi'] ?></option>
                                                      <option value="Pasien">Pasien</option>
                                                      <option value="Keluarga">Keluarga</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="catatanedukasi" class="form-label">Catatan</label>
                                                   <input type="text" name="catatanedukasi" value="<?= $datapsikolog['catatanEdukasi'] ?>" class="form-control">
                                                </div>
                                             </div>
                                          </div>
                                          <h6>Penilaian Resiko Jatuh</h6>
                                          <div class="row mb-3">
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="seimbang" class="form-label">Tidak Seimbang/Sempoyong</label>
                                                   <select name="seimbang" class="form-select" id="">
                                                      <option value="<?= $datajatuh['seimbang'] ?>"><?= $datapsikolog['seimbang'] ?></option>
                                                      <option value="Tidak">Tidak</option>
                                                      <option value="Ya">Ya</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="alatbantu" class="form-label">Jalan dengan Ala Bantu</label>
                                                   <select name="alatbantu" class="form-select" id="">
                                                      <option value="<?= $datajatuh['alatBantu'] ?>"><?= $datapsikolog['alatBantu'] ?></option>
                                                      <option value="Tidak">Tidak</option>
                                                      <option value="Ya">Ya</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="menopang" class="form-label">Menopang saat akan duduk</label>
                                                   <select name="menopang" class="form-select" id="">
                                                      <option value="<?= $datajatuh['menopang'] ?>"><?= $datapsikolog['menopang'] ?></option>
                                                      <option value="Tidak">Tidak</option>
                                                      <option value="Ya">Ya</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="hasil" class="form-label">Hasil</label>
                                                   <select name="hasil" class="form-select" id="hasil">
                                                      <option value="<?= $datajatuh['hasil'] ?>"><?= $datapsikolog['hasil'] ?></option>
                                                      <option value="Tidak Beresiko (Tidak ditermukan a dan b)">Tidak Beresiko (Tidak ditermukan a dan b)</option>
                                                      <option value="Resiko Rendah (ditermukan a/b)">Resiko Rendah (ditermukan a/b)</option>
                                                      <option value="Resiko Tinggi (ditemukan a dan b)">Resiko Tinggi (ditemukan a dan b)</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="dilaporkan" class="form-label">Dilaporkan kepada dokter</label>
                                                   <select name="dilaporkan" class="form-select" id="">
                                                      <option value="<?= $datajatuh['dilaporkan'] ?>"><?= $datapsikolog['dilaporkan'] ?></option>
                                                      <option value="Tidak">Tidak</option>
                                                      <option value="Ya">Ya</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="jam" class="form-label">Jam</label>
                                                   <input type="time" name="jam" value="<?= $datajatuh['jam'] ?>" class="form-control">
                                                </div>
                                             </div>
                                          </div>
                                          <h6>Skrining Gizi</h6>
                                          <div class="row mb-3">
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="penurunanbb" class="form-label">Apakah ada penurunan berat badan selama 6 bulan terakhir</label>
                                                   <select name="penurunanbb" class="form-select" id="penurunanbb">
                                                      <option value="<?= $datagizi['penurunanBB'] ?>"><?= $datagizi['penurunanBB'] ?></option>
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
                                                   <label for="nafsumakan" class="form-label">Apakah nafsu makan berkurang karena tidak nafsu makan</label>
                                                   <select name="nafsumakan" class="form-select" id="">
                                                      <option value="<?= $datagizi['nafsuMakan'] ?>"><?= $datagizi['nafsuMakan'] ?></option>
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
                                                            <label for="rasanyeri" class="form-label">Rasa Nyeri</label>
                                                            <select name="rasanyeri" class="form-select" id="rasanyeri">
                                                               <option value="<?= $datanyeri['rasaNyeri'] ?>"><?= $datanyeri['rasaNyeri'] ?></option>
                                                               <option value="Tidak ada Nyeri">Tidak ada Nyeri</option>
                                                               <option value="Nyeri Akut">Nyeri Akut</option>
                                                               <option value="Nyeri Kronis">Nyeri Kronis</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="col-6">
                                                         <div class="mb-3">
                                                            <label for="penyebab" class="form-label">Penyebab</label>
                                                            <select name="penyebab" class="form-select" id="">
                                                               <option value="<?= $datanyeri['penyebab'] ?>"><?= $datanyeri['penyebab'] ?></option>
                                                               <option value="Proses Penyakit">Proses Penyakit</option>
                                                               <option value="Benturan">Benturan</option>
                                                               <option value="Lain Lain">Lain Lain</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="col-6">
                                                         <div class="mb-3">
                                                            <label for="kualitas" class="form-label">Kualitas</label>
                                                            <select name="kualitas" class="form-select" id="">
                                                               <option value="<?= $datanyeri['kualitas'] ?>"><?= $datanyeri['kualitas'] ?></option>
                                                               <option value="Seperti Ditusuk">Seperti ditusuk</option>
                                                               <option value="Berdenyut">Berdenyut</option>
                                                               <option value="Teriris">Teriris</option>
                                                               <option value="Tertindih">Tertindih</option>
                                                               <option value="Tertiban">Tertiban</option>
                                                               <option value="Lain">Lain</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="col-6">
                                                         <div class="mb-3">
                                                            <label for="lokasi" class="form-label">Lokasi</label>
                                                            <input type="text" name="lokasi" value="<?= $datanyeri['lokasi'] ?>" class="form-control">
                                                         </div>
                                                      </div>
                                                      <div class="col-6">
                                                         <div class="mb-3">
                                                            <label for="menyebar" class="form-label">Menyebar</label>
                                                            <select name="menyebar" class="form-select" id="menyebar">
                                                               <option value="<?= $datanyeri['menyebar'] ?>"><?= $datanyeri['menyebar'] ?></option>
                                                               <option value="0">Tidak</option>
                                                               <option value="1">Ya</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="col-6">
                                                         <div class="mb-3">
                                                            <label for="skalar" class="form-label">Severity Skala</label>
                                                            <select name="skalar" class="form-select" id="">
                                                               <option value="<?= $datanyeri['skala'] ?>"><?= $datanyeri['skala'] ?></option>
                                                               <option value="0">0</option>
                                                               <option value="1">1</option>
                                                               <option value="3">2</option>
                                                               <option value="3">3</option>
                                                               <option value="4">4</option>
                                                               <option value="5">5</option>
                                                               <option value="6">6</option>
                                                               <option value="7">7</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="col-6">
                                                         <div class="mb-3">
                                                            <label for="waktudurasi" class="form-label">Waktu Durasi</label>
                                                            <input type="text" name="waktudurasi" value="<?= $datanyeri['waktuDurasi'] ?>" class="form-control" placeholder="/menit">
                                                         </div>
                                                      </div>
                                                      <div class="col-6">
                                                         <div class="mb-3">
                                                            <label for="nyerihilang" class="form-label">Nyeri hilang bila</label>
                                                            <select name="nyerihilang" class="form-select" id="nyerihilang">
                                                               <option value="<?= $datanyeri['nyeriHilang'] ?>"><?= $datanyeri['nyeriHilang'] ?></option>
                                                               <option value="Istirahat">Istirahat</option>
                                                               <option value="Mendengar Musik">Mendengar musik</option>
                                                               <option value="Minum Obat">Minum obat</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="col-6">
                                                         <div class="mb-3">
                                                            <label for="dilaporkan" class="form-label">Diberitahukan Dokter ?</label>
                                                            <select name="dilaporkan" class="form-select" id="">
                                                               <option value="0">Tidak</option>
                                                               <option value="1">Ya</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="col-6">
                                                         <div class="mb-3">
                                                            <label for="jam" class="form-label">Jam</label>
                                                            <input type="time" name="jam" class="form-control" placeholder="/menit">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <button class="btn btn-success" type="submit" name="simpankeperawatan">Simpan</button>
                                    </form>
                                 </div>

                                 <div class="tab-pane fade" id="pills-persalinan" role="tabpanel" aria-labelledby="pills-persalinan-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="uid" value="<?= $_GET['id'] ?>">
                                       <input type="hidden" name="norawat" value="<?= $_GET['norawat'] ?>">
                                       <div class="row">
                                          <div class="mb-3 row">
                                             <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                             <div class="col-sm-2">
                                                <input type="date" name="tanggal" class="form-control" id="tanggal">
                                             </div>
                                             <div class="col-sm-2">
                                                <input type="year" name="tahun" placeholder="Tahun" class="form-control" id="tahun">
                                             </div>
                                             <div class="col-sm-2">
                                                <select name="gender" class="form-select" id="">
                                                   <option value="Laki Laki">Laki Laki</option>
                                                   <option value="Perempuan">Perempuan</option>
                                                </select>
                                             </div>
                                             <div class="col-sm-2">
                                                <input type="text" name="berat" placeholder="Berat Badan" class="form-control" id="tanggal">
                                             </div>
                                             <div class="col-sm-2">
                                                <input type="text" name="tinggi" placeholder="Panjang Badan" class="form-control" id="tanggal">
                                             </div>
                                          </div>
                                          <div class="mb-3 row">
                                             <label for="persalinan" class="col-sm-2 col-form-label">Tempat Persalinan</label>
                                             <div class="col-sm-4">
                                                <select name="persalinan" id="" class="form-select">
                                                   <option value="">Pilih</option>
                                                   <option value="Rumah Sakit">Rumah Sakit</option>
                                                   <option value="Klinik">Klinik</option>
                                                   <option value="Rumah">Rumah</option>
                                                </select>
                                             </div>
                                             <div class="col-sm-6">
                                                <input type="text" name="nama_persalinan" placeholder="Nama Faskes" class="form-control" id="nama_persalinan">
                                             </div>
                                          </div>
                                          <div class="mb-3 row">
                                             <label for="usia_kehamilan" class="col-sm-2 col-form-label">Usia Kehamlian</label>
                                             <div class="col-sm-2">
                                                <input type="text" class="form-control" name="usia_kehamilan" id="tanggal" placeholder="Minggu">
                                             </div>
                                          </div>
                                          <div class="mb-3 row">
                                             <label for="jenis" class="col-sm-2 col-form-label">Jenis Persalinan</label>
                                             <div class="col-sm-2">
                                                <select name="jenis" id="" class="form-select">
                                                   <option value="">Pilih</option>
                                                   <option value="Normal">Normal</option>
                                                   <option value="Cesar">Cesar</option>
                                                </select>
                                             </div>
                                             <div class="col-sm-2">
                                                <select name="keadaan" id="" class="form-select">
                                                   <option value="Normal">Normal</option>
                                                   <option value="Abnormal">Abnormal</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="mb-3 row">
                                             <label for="penolong" class="col-sm-2 col-form-label">Penolong</label>
                                             <div class="col-sm-10">
                                                <input type="text" class="form-control" id="penolong" name="penolong">
                                             </div>
                                          </div>
                                          <div class="mb-3 row">
                                             <label for="penyulit" class="col-sm-2 col-form-label">Penyulit</label>
                                             <div class="col-sm-10">
                                                <input type="text" class="form-control" id="penyulit" name="penyulit">
                                             </div>
                                          </div>
                                          <div class="mb-3 row">
                                             <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                                             <div class="col-sm-10">
                                                <textarea name="catatan" class="form-control" id="" cols="30" rows="5"></textarea>
                                             </div>
                                          </div>
                                          <div class="mb-3 row">
                                             <label for="tanggal" class="col-sm-2 col-form-label"></label>
                                             <div class="col-sm-10">
                                                <button class="btn btn-success" type="submit" name="simpanpersalinan">Simpan</button>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#datapersalinan">Lihat Data</button>
                                             </div>
                                          </div>

                                       </div>
                                    </form>
                                 </div>

                                 <div class="tab-pane fade" id="pills-kebidanan" role="tabpanel" aria-labelledby="pills-kebidanan-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="uid" value="<?= $_GET['id'] ?>">
                                       <input type="hidden" name="norawat" value="<?= $_GET['norawat'] ?>">
                                       <div class="row">
                                          <div class="mb-3 row">
                                             <label for="masalah" class="col-sm-2 col-form-label">Uraian</label>
                                             <div class="col-sm-10">
                                                <textarea name="masalah" class="form-control" id="" cols="30" rows="10"><?= $dataperawatan['masalah'] ?></textarea>
                                             </div>
                                          </div>
                                          <div class="mb-3 row">
                                             <label for="tanggal" class="col-sm-2 col-form-label"></label>
                                             <div class="col-sm-10">
                                                <button class="btn btn-success" type="submit" name="simpanmasalahkeperawatan">Simpan</button>
                                             </div>
                                          </div>

                                       </div>
                                    </form>
                                 </div>

                                 <div class="tab-pane fade" id="pills-perkawinan" role="tabpanel" aria-labelledby="pills-perkawinan-tab">
                                    <div class="row">
                                       <div class="mb-3 row">
                                          <label for="tanggal" class="col-sm-2 col-form-label">Status Menikah</label>
                                          <div class="col-sm-10">
                                             <select name="" class="form-select" id="">
                                                <option value="Menikah">Menikah</option>
                                                <option value="Tidak / Belum Menikah">Tidak / Belum Menikah</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="tanggal" class="col-sm-2 col-form-label">Usia Perkawinan</label>
                                          <div class="col-sm-10">
                                             <input type="text" placeholder="Tahun" class="form-control" id="tanggal">
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="tanggal" class="col-sm-2 col-form-label">Status</label>
                                          <div class="col-sm-10">
                                             <select name="" class="form-select" id="">
                                                <option value="Masih Menikah">Masih Menikah</option>
                                                <option value="Cerai">Cerai</option>
                                                <option value="Meninggal">Meninggal</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                                          <div class="col-sm-10">
                                             <textarea name="catatan" class="form-control" id="" cols="30" rows="10"></textarea>
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
                                                                  Tanggal : <?= $row['tanggal'] ?> <?= $row['waktu'] ?> | Layanan : <?= $row['layanan'] ?> | <?= $row['dokter'] ?>
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


   <!-- Modal -->
   <div class="modal fade" id="datapersalinan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Persalinan</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <table class="display" id="basic-2">
                  <thead>
                     <tr>
                        <th>No.Rawat</th>
                        <th>Tanggal</th>
                        <th>Tahun</th>
                        <th>L/P</th>
                        <th>Berat</th>
                        <th>Tinggi</th>
                        <th>Persalinan</th>
                        <th>Tempat</th>
                        <th>Usia Kehamilan</th>
                        <th>Jenis</th>
                        <th>Keadaan</th>
                        <th>Penolong</th>
                        <th>Penyulit</th>
                        <th>Catatan</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $id = $_GET['id'];
                     $query = tampildata("SELECT * FROM ass_kebidanan_persalinan WHERE uid_pasien='$id'");
                     ?>
                     <?php foreach ($query as $row) : ?>
                        <tr>
                           <td><?= $row['nomor_rawat'] ?></td>
                           <td><?= $row['tanggal'] ?></td>
                           <td><?= $row['tahun'] ?></td>
                           <td><?= $row['gender'] ?></td>
                           <td><?= $row['berat'] ?></td>
                           <td><?= $row['tinggi'] ?></td>
                           <td><?= $row['persalinan'] ?></td>
                           <td><?= $row['nama_persalinan'] ?></td>
                           <td><?= $row['usia_kehamilan'] ?></td>
                           <td><?= $row['jenis'] ?></td>
                           <td><?= $row['keadaan'] ?></td>
                           <td><?= $row['penolong'] ?></td>
                           <td><?= $row['penyulit'] ?></td>
                           <td><?= $row['catatan'] ?></td>
                        </tr>


                     <?php endforeach ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
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