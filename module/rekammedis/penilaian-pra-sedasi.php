<?php
$page = "Pemeriksaan Operasi";
require '../db/connect.php';
require '../controller/view.php';
require '../controller/ass-kep-umum.php';
$id = $_GET['id'];
$norawat = $_GET['norawat'];
$info = mysqli_query($koneksi, "SELECT * FROM pasienVisit WHERE uidPasien='$id'");
$data = mysqli_fetch_array($info);
$infopasien = mysqli_query($koneksi, "SELECT * FROM pasien WHERE uidPasien='$id'");
$datapasien = mysqli_fetch_array($infopasien);
$kepumum = mysqli_query($koneksi, "SELECT * FROM assKepUmum_Keadaan WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$datakepumum = mysqli_fetch_array($kepumum);
$nutrisi = mysqli_query($koneksi, "SELECT * FROM assKepUmum_Nutrisi WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$datanutrisi = mysqli_fetch_array($nutrisi);
$kesehatan = mysqli_query($koneksi, "SELECT * FROM assKepUmum_Kesehatan WHERE uidPasien='$id' AND nomorRawat='$norawat'");
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
                        <h3>Penilaian Pra Sedasi</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Pelaksanaan Operasi</li>
                           <li class="breadcrumb-item active">Status </li>
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
                                 <li class="nav-item"><a class="nav-link active" id="pills-warninghome-tab" data-bs-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Penilaian Pra Sedasi</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-warningcontact-tab" data-bs-toggle="pill" href="#pills-warningcontact" role="tab" aria-controls="pills-warningcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Assesment OK</a></li>
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
                                                <input type="text" readonly class="form-control-plaintext" id="noRawat" value=": <?= $data['nomorRawat'] ?>">
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
                                    </div>
                                    <hr>
                                    <h6>Kajian Sistem</h6>
                                    <div class="row">
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Hilangnya gigi</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Masalah mobilitasi leher</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Leher pendek</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Stroke</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Sesak nafas</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Sakit dada</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Denyut jantung tidak normal</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Sedang hamil</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Kejang</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Obesitas</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <hr>
                                    <h6>Pemeriksaan Fisik</h6>
                                    <div class="row">
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                GCS</label>
                                             <input type="text" class="form-control" value="-">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Tinggi Badan</label>
                                             <input type="text" class="form-control" value="165">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Berat Badan</label>
                                             <input type="text" class="form-control" value="70">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Tekanan Darah</label>
                                             <input type="text" class="form-control" value="110/80">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Nadi</label>
                                             <input type="text" class="form-control" value="70">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                RR</label>
                                             <input type="text" class="form-control" value="70">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                VAS</label>
                                             <input type="text" class="form-control" value="-">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                BMI</label>
                                             <input type="text" class="form-control" value="165">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Suhu</label>
                                             <input type="text" class="form-control" value="35">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Buka mulut > 2 jari</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Jarak Thyromental > 3 jari</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Gerakan leher maksimal</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Gigi palsu</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Mallampati</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">I</option>
                                                <option value="">II</option>
                                                <option value="">III</option>
                                                <option value="">IV</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <hr>
                                    <h6>Keadaan Umum</h6>
                                    <div class="row">
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Kepala</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Normal</option>
                                                <option value="">Abnormal</option>
                                                <option value="">Tidak Diperiksa</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-9">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Catatan</label>
                                             <input type="text" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Sklera</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Normal</option>
                                                <option value="">Abnormal</option>
                                                <option value="">Tidak Diperiksa</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-9">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Catatan</label>
                                             <input type="text" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Conjungtiva</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Normal</option>
                                                <option value="">Abnormal</option>
                                                <option value="">Tidak Diperiksa</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-9">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Catatan</label>
                                             <input type="text" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Leher</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Normal</option>
                                                <option value="">Abnormal</option>
                                                <option value="">Tidak Diperiksa</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-9">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Catatan</label>
                                             <input type="text" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Paru-paru</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Normal</option>
                                                <option value="">Abnormal</option>
                                                <option value="">Tidak Diperiksa</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-9">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Catatan</label>
                                             <input type="text" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Jantung</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Normal</option>
                                                <option value="">Abnormal</option>
                                                <option value="">Tidak Diperiksa</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-9">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Catatan</label>
                                             <input type="text" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Abdomen</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Normal</option>
                                                <option value="">Abnormal</option>
                                                <option value="">Tidak Diperiksa</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-9">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Catatan</label>
                                             <input type="text" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Ekstremitas</label>
                                             <select name="" class="form-select" id="">
                                                <option value="">Normal</option>
                                                <option value="">Abnormal</option>
                                                <option value="">Tidak Diperiksa</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-9">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Catatan</label>
                                             <input type="text" class="form-control">
                                          </div>
                                       </div>
                                    </div>

                                    <hr>
                                    <h6>Diagnosis</h6>
                                    <p>Code A00.0 - Cholera due to Vibrio cholerae 01, biovar cholerae</p>
                                    <hr>
                                    <h6>Perencanaan Anestesia</h6>
                                    <div class="row">
                                       <div class="mb-3 row">
                                          <label for="staticEmail" class="col-sm-4 col-form-label">Teknik Anastesia dan Sedasi :</label>
                                          <div class="col-sm-8">
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Sedasi : Obat (dosis & rute) :
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   GA
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Regional
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Spinal
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Epidural
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Kaudal
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Blok Perifer
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="mb-3 row">
                                          <label for="staticEmail" class="col-sm-4 col-form-label">Monitoring :</label>
                                          <div class="col-sm-8">
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   EKG
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   SpO2
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   NIPB
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Temp
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Lain Lain
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="mb-3 row">
                                          <label for="staticEmail" class="col-sm-4 col-form-label">Perawatan pasca anesthesia :</label>
                                          <div class="col-sm-8">
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Rawat Inap
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Rawat Jalan
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Rawat Khusus : ICU
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Rawat Khusus : HCU
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <hr>
                                    <h6>Persiapan Pra Anastesia</h6>
                                    <div class="row">
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Puasa Mulai</label>
                                             <input type="time" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Tanggal</label>
                                             <input type="date" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Rencana Operasi</label>
                                             <input type="time" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-3">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Tanggal</label>
                                             <input type="date" class="form-control">
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-3">
                                             <label for="exampleFormControlInput1" class="form-label">
                                                Catatan</label>
                                             <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <button class="btn btn-success">Simpan</button>
                                 <a href="pelaksanaan-operasi-ass?id=d57edf2d2082b0865e15d11edaecdb20&norawat=RJ20230902466/468">
                                    <button class="btn btn-light">Batal</button>
                                 </a>


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