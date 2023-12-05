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
                        <h3>Surgical Safety Checklist</h3>
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
                                 <li class="nav-item"><a class="nav-link active" id="pills-warninghome-tab" data-bs-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Surgical Safety Checklist</a></li>
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
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                       <div class="accordion-item">
                                          <h2 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                <strong> SIGN IN | JAM : 00:00</strong>
                                             </button>
                                          </h2>
                                          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                             <div class="accordion-body">
                                                Dengan Perawat dan Dokter Spesialis Anestesi
                                                <hr>
                                                Apakah pasien sudah memberi konfirmasi identitas, Lokasi Operasi, Prosedur dan Persetujuan ?
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Ya
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                   <label class="form-check-label" for="flexRadioDefault2">
                                                      Tidak
                                                   </label>
                                                </div>
                                                <hr>
                                                Apakah lokasi operasi di tandai ?
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Ya
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                   <label class="form-check-label" for="flexRadioDefault2">
                                                      Tidak dapat diberlakukan
                                                   </label>
                                                </div>
                                                <hr>
                                                Apakah mesin anestesi dan cek medikasi sudah lengkap ?
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Ya
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                   <label class="form-check-label" for="flexRadioDefault2">
                                                      Tidak
                                                   </label>
                                                </div>
                                                <hr>
                                                Apakah Pulse Oksimeter sudah terpasang pada pasien dan berfungsi ?
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Ya
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                   <label class="form-check-label" for="flexRadioDefault2">
                                                      Tidak
                                                   </label>
                                                </div>
                                                <hr>
                                                Alergi tertentu ?
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Ya
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                   <label class="form-check-label" for="flexRadioDefault2">
                                                      Tidak
                                                   </label>
                                                </div>
                                                <hr>
                                                Kesulitan Nafas atau risiko aspirasi ?
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Ya
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                   <label class="form-check-label" for="flexRadioDefault2">
                                                      Tidak
                                                   </label>
                                                </div>
                                                <hr>
                                                Risiko pendarahan > 500 ml (7ml/kg pada anak) ?
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Tidak
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                   <label class="form-check-label" for="flexRadioDefault2">
                                                      Ya, dan adakah akses sentra vena yang direncanakan
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-item">
                                          <h2 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                <strong> TIME OUT | JAM : 00:00</strong>
                                             </button>
                                          </h2>
                                          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                             <div class="accordion-body">
                                                Dengan Perawat, Dokter Spesialis Anestesi dan Dokter Bedah
                                                <hr>
                                                Lakukan konfirmasi semua anggota tim bedah telah memperkenalkan diri (nama dan perannya)
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Ya
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                   <label class="form-check-label" for="flexRadioDefault2">
                                                      Tidak
                                                   </label>
                                                </div>
                                                <hr>
                                                Lakukan konfirmasi nama pasien, prosedur operasi, dan lokasi insisi yang akan dikerjakan ?
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Ya
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                   <label class="form-check-label" for="flexRadioDefault2">
                                                      Tidak
                                                   </label>
                                                </div>
                                                <hr>
                                                Apakah antibiotik pencegah telah diberikan dalam rentang waktu 60 menit sebelum ini ?
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Ya
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                   <label class="form-check-label" for="flexRadioDefault2">
                                                      Tidak dapat diberlakukan
                                                   </label>
                                                </div>
                                                <hr>
                                                Kemungkinan kejadian tidak diharapkan ; Terhadap Ahli Bedah
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Apakah langkah - langkah kritis atau non rutin
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                   <label class="form-check-label" for="flexRadioDefault2">
                                                      Berapa lama Kasus ini mengambil waktu
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                   <label class="form-check-label" for="flexRadioDefault2">
                                                      Apa Antisipasi bila terjadi pendarahan
                                                   </label>
                                                </div>
                                                <hr>
                                                Kemungkinan kejadian tidak diharapkan ; Terhadap Ahli Anestesi
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Apakah ada perhatian khusus
                                                   </label>
                                                </div>
                                                <hr>
                                                Kemungkinan kejadian tidak diharapkan ; Terhadap Tim Perawat
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Apakah Sterilitas ( termasuk indikator ) sudah di konfirmasi ?
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Apakah Apakah ada masalah alat atau kepedulian lain ?
                                                   </label>
                                                </div>
                                                <hr>
                                                Apakah hasil MRI, CT-scan, Rontgen diperlihatkan?
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Ya
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Tidak dapat diberlakukan
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="accordion-item">
                                          <h2 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                <strong> SIGN OUT | JAM : 00:00</strong>
                                             </button>
                                          </h2>
                                          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                             <div class="accordion-body">
                                                Dengan Perawat, Dokter Spesialis Anestesi dan Dokter Bedah
                                                <hr>
                                                Perawat secara lisan mengkonfirmasi :
                                                <div class="form-check">
                                                   <input class="form-check-input" type="check" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Nama Prosedur
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="check" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Kelengkapan alat spons dan jumlah jarum
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="check" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Labelisasi spesimen (bacakan keras label specimen termasuk nama pasien)
                                                   </label>
                                                </div>
                                                <div class="form-check">
                                                   <input class="form-check-input" type="check" name="flexRadioDefault" id="flexRadioDefault1">
                                                   <label class="form-check-label" for="flexRadioDefault1">
                                                      Apakah ada problem alat-alat yang harus disampaikan ?
                                                   </label>
                                                </div>
                                             </div>
                                             <hr>
                                             <div class="row">
                                                <div class="col-6">
                                                   <div class="mb-3">
                                                      <label for="exampleFormControlInput1" class="form-label">Tanda Tangan Perawat</label>
                                                      <select name="" class="form-select" id="">
                                                         <option value=""></option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-6">
                                                   <div class="mb-3">
                                                      <label for="exampleFormControlInput1" class="form-label">Tanda Tangan Dokter Anestesi</label>
                                                      <select name="" class="form-select" id="">
                                                         <option value=""></option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-6">
                                                   <div class="mb-3">
                                                      <label for="exampleFormControlInput1" class="form-label">Tanda Tangan Dokter Bedah 1</label>
                                                      <select name="" class="form-select" id="">
                                                         <option value=""></option>
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="col-6">
                                                   <div class="mb-3">
                                                      <label for="exampleFormControlInput1" class="form-label">Tanda Tangan Dokter Bedah 2</label>
                                                      <select name="" class="form-select" id="">
                                                         <option value=""></option>
                                                      </select>
                                                   </div>
                                                </div>
                                             </div>

                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>

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