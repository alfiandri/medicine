<?php
session_start();
$page = "Awal Medis";
require '../../db/connect.php';
require 'view.php';
$id = $_GET['id'];
$norawat = $_GET['norawat'];
$info = mysqli_query($koneksi, "SELECT * FROM pasien_visit WHERE uid_pasien='$id'");
$data = mysqli_fetch_array($info);
$infopasien = mysqli_query($koneksi, "SELECT * FROM pasien WHERE uid_pasien='$id'");
$datapasien = mysqli_fetch_array($infopasien);
$kesehatan = mysqli_query($koneksi, "SELECT * FROM assKepUmum_Kesehatan WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$datakesehatan = mysqli_fetch_array($kesehatan);
$kepumum = mysqli_query($koneksi, "SELECT * FROM assKepUmum_Keadaan WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$datakepumum = mysqli_fetch_array($kepumum);
$nutrisi = mysqli_query($koneksi, "SELECT * FROM assKepUmum_Nutrisi WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$datanutrisi = mysqli_fetch_array($nutrisi);
$fisik = mysqli_query($koneksi, "SELECT * FROM assMedUmum_Fisik WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$datafisik = mysqli_fetch_array($fisik);
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
                           <li class="breadcrumb-item active">Penilaian Medis Umum </li>
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
                                 <li class="nav-item"><a class="nav-link" id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Data Penilaian</a></li>
                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div class="tab-pane fade show active" id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="norawat" value="<?= $norawat ?>">
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
                                          <h6>Riwayat Kesehatan</h6>
                                          <div class="row mb-3">
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="keluhanutama" class="form-label">Keluhan Utama</label>
                                                   <textarea name="keluhanutama" class="form-control" id="keluhanutama" cols="30" rows="4"><?= $datakesehatan['keluhanUtama'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="penyakitsekarang" class="form-label">Riwayat Penyakit Sekarang</label>
                                                   <textarea name="penyakitsekarang" class="form-control" id="penyakitsekarang" cols="30" rows="4"><?= $datakesehatan['penyakitSekarang'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="penyakitkeluarga" class="form-label">Riwayat Penyakit Keluarga</label>
                                                   <textarea name="penyakitkeluarga" class="form-control" id="penyakitkeluarga" cols="30" rows="4"><?= $datakesehatan['penyakitKeluarga'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="penyakitdahulu" class="form-label">Riwayat Penyakit Dahulu</label>
                                                   <textarea name="penyakitdahulu" class="form-control" id="penyakitdahulu" cols="30" rows="4"><?= $datakesehatan['penyakitDahulu'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="penggunaanobat" class="form-label">Riwayat Penggunaan Obat</label>
                                                   <textarea name="penggunaanobat" class="form-control" id="penggunaanobat" cols="30" rows="4"><?= $datakesehatan['penggunaanObat'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="alergi" class="form-label">Riwayat Alergi</label>
                                                   <textarea name="alergi" class="form-control" id="alergi" cols="30" rows="4"><?= $datakesehatan['alergi'] ?></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <h6>Pemeriksaan Fisik</h6>
                                          <div class="row mb-3">
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="keadaanumum" class="form-label">Keadaan Umum</label>
                                                   <select name="keadaanumum" class="form-select" id="keadaanumum">
                                                      <option value="Sehat">Sehat</option>
                                                      <option value="Sakit Ringan">Sakit Ringan</option>
                                                      <option value="Sakit Sedang">Sakit Sedang</option>
                                                      <option value="Sakit Berat">Sakit Berat</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="kesadaran" class="form-label">Kesadaran</label>
                                                   <select name="kesadaran" class="form-select" id="kesadaran">
                                                      <option value="Compos Mentis">Compos Mentis</option>
                                                      <option value="Apatis">Apatis</option>
                                                      <option value="Somnolen">Somnolen</option>
                                                      <option value="Sopor">Sopor</option>
                                                      <option value="Koma">Koma</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="td" class="form-label">TD</label>
                                                   <input type="text" class="form-control form-sm" name="td" value="<?= $datakepumum['td'] ?>" placeholder="mmHg">
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="nadi" class="form-label">Nadi</label>
                                                   <input type="text" class="form-control" name="nadi" id="nadi" value="<?= $datakepumum['nadi'] ?>" placeholder="x/menit">
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="rr" class="form-label">RR</label>
                                                   <input type="text" class="form-control" name="rr" value="<?= $datakepumum['rr'] ?>" placeholder="x/menit">
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="suhu" class="form-label">Suhu</label>
                                                   <input type="text" name="suhu" value="<?= $datakepumum['suhu'] ?>" class="form-control" placeholder="c">
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="spo" class="form-label">Spo2</label>
                                                   <input type="text" name="spo" value="<?= $datakepumum['spo'] ?>" class="form-control" placeholder="%">
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="bb" class="form-label">Berat Badan</label>
                                                   <input type="text" class="form-control" name="bb" value="<?= $datanutrisi['bb'] ?>" placeholder="Kg">
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="tb" class="form-label">Tinggi Badan</label>
                                                   <input type="text" name="tb" value="<?= $datanutrisi['tb'] ?>" class="form-control" placeholder="cm">
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
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="kepala" class="form-label">Kepala</label>
                                                   <select name="kepala" class="form-select" id="kepala">
                                                      <option value="<?= $datafisik['kepala'] ?>"><?= $datafisik['kepala'] ?></option>
                                                      <option value="Normal">Normal</option>
                                                      <option value="Abnormal">Abnormal</option>
                                                      <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="gigi" class="form-label">Gigi & Mulut</label>
                                                   <select name="gigi" class="form-select" id="gigi">
                                                      <option value="<?= $datafisik['gigimulut'] ?>"><?= $datafisik['gigimulut'] ?></option>
                                                      <option value="Normal">Normal</option>
                                                      <option value="Abnormal">Abnormal</option>
                                                      <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="tht" class="form-label">THT</label>
                                                   <select name="tht" class="form-select" id="tht">
                                                      <option value="<?= $datafisik['THT'] ?>"><?= $datafisik['THT'] ?></option>
                                                      <option value="Normal">Normal</option>
                                                      <option value="Abnormal">Abnormal</option>
                                                      <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="thoraks" class="form-label">Thoraks</label>
                                                   <select name="thoraks" class="form-select" id="thoraks">
                                                      <option value="<?= $datafisik['thorax'] ?>"><?= $datafisik['thorax'] ?></option>
                                                      <option value="Normal">Normal</option>
                                                      <option value="Abnormal">Abnormal</option>
                                                      <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="exampleFormControlInput1" class="form-label">Abdomen</label>
                                                   <select name="abdomen" class="form-select" id="abdomen">
                                                      <option value="<?= $datafisik['abdomen'] ?>"><?= $datafisik['abdomen'] ?></option>
                                                      <option value="Normal">Normal</option>
                                                      <option value="Abnormal">Abnormal</option>
                                                      <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="genital" class="form-label">Genital & Anus</label>
                                                   <select name=genital" class="form-select" id="genital">
                                                      <option value="<?= $datafisik['genital'] ?>"><?= $datafisik['genital'] ?></option>
                                                      <option value="Normal">Normal</option>
                                                      <option value="Abnormal">Abnormal</option>
                                                      <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="ekstremitas" class="form-label">Ekstremitas</label>
                                                   <select name="ekstremitas" class="form-select" id="ekstremitas">
                                                      <option value="<?= $datafisik['ekstremitas'] ?>"><?= $datafisik['ekstremitas'] ?></option>
                                                      <option value="Normal">Normal</option>
                                                      <option value="Abnormal">Abnormal</option>
                                                      <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="kulit" class="form-label">Kulit</label>
                                                   <select name="kulit" class="form-select" id="kulit">
                                                      <option value="<?= $datafisik['kulit'] ?>"><?= $datafisik['kulit'] ?></option>
                                                      <option value="Normal">Normal</option>
                                                      <option value="Abnormal">Abnormal</option>
                                                      <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-8">
                                                <div class="mb-3">
                                                   <label for="catatan" class="form-label">Catatan</label>
                                                   <textarea name="catatan" class="form-control" id="catatan" cols="30" rows="4"><?= $datafisik['catatan'] ?></textarea>
                                                </div>
                                             </div>

                                          </div>
                                          <h6>Status Lokalis</h6>
                                          <div class="row">
                                             <div class="col-12">
                                                <div class="card">
                                                   <img src="../assets/rm/lokalis.jpg" class="card-img-top" alt="...">
                                                   <div class="card-body">
                                                      <p>Keterangan</p>
                                                      <textarea name="keteranganlokalis" class="form-control" id="keteranganlokalis" cols="30" rows="10"><?= $datafisik['lokalis'] ?></textarea>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <h6>Pemeriksaan Penunjang</h6>
                                          <div class="row mb-3">
                                             <div class="col-12">
                                                <textarea name="penunjang" class="form-control" id="penunjang" cols="30" rows="3"><?= $datafisik['penunjang'] ?></textarea>
                                             </div>
                                          </div>
                                          <h6>Diagnosis / Assemen</h6>
                                          <div class="row mb-3">
                                             <div class="col-12">
                                                <textarea name="diagnosis" class="form-control" id="diagnosis" cols="30" rows="3"><?= $datafisik['diagnosa'] ?></textarea>
                                             </div>
                                          </div>
                                          <h6>Tatalaksana</h6>
                                          <div class="row mb-3">
                                             <div class="col-12">
                                                <textarea name="tatalaksana" class="form-control" id="tatalaksana" cols="30" rows="3"><?= $datafisik['tatalaksana'] ?></textarea>
                                             </div>
                                          </div>
                                          <h6>Konsul/Rujuk </h6>
                                          <div class="row mb-3">
                                             <div class="col-12">
                                                <textarea name="konsul" class="form-control" id="konsul" cols="30" rows="3"><?= $datafisik['konsul'] ?></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <button type="submit" class="btn btn-success" name="simpanmedisumum">Simpan</button>
                                    </form>
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
                                                                           <td>SPO</td>
                                                                           <td>Kedaaan Umum</td>
                                                                           <td>Kesadaran</td>
                                                                           <td>Rilis</td>
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
                                                                              <td><?= $row['spo']; ?>%</td>
                                                                              <td><?= $row['keadaanUmum']; ?></td>
                                                                              <td><?= $row['kesadaran']; ?></td>
                                                                              <td><?= $row['createAt']; ?></td>
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
                                                                           <td>Rilis Data</td>
                                                                        </tr>
                                                                     </thead>
                                                                     <tbody>
                                                                        <?php foreach ($query as $row) : ?>
                                                                           <tr>
                                                                              <td><?= $row['tb']; ?>cm</td>
                                                                              <td><?= $row['bb']; ?>Kg</td>
                                                                              <td><?= $row['bmi']; ?>Kg/m2</td>
                                                                              <td><?= $row['createAt'] ?></td>
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
                                                                           <td>Penyakit Sekarang</td>
                                                                           <td>Penggunaan Obat</td>
                                                                           <td>Rilis Data</td>
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
                                                                              <td><?= $row['penyakitSekarang']; ?></td>
                                                                              <td><?= $row['penggunaanObat']; ?></td>
                                                                              <td><?= $row['createAt']; ?></td>
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
                                                                  <hr>
                                                                  <h6>Pemeriksaan Fisik</h6>
                                                                  <?php
                                                                  $query = tampildata("SELECT * FROM assMedUmum_Fisik WHERE uidPasien='$id'");
                                                                  ?>
                                                                  <table class="table table-primary">
                                                                     <thead>
                                                                        <tr>
                                                                           <td>Fisik</td>
                                                                           <td>Lokalis</td>
                                                                           <td>Penunjang</td>
                                                                           <td>Diagnosis</td>
                                                                           <td>Tata Laksana</td>
                                                                           <td>Konsul</td>
                                                                           <td>Rilis Data</td>
                                                                        </tr>
                                                                     </thead>
                                                                     <tbody>
                                                                        <?php foreach ($query as $row) : ?>
                                                                           <tr>
                                                                              <td>
                                                                                 Kepala : <?= $row['kepala'] ?> <br>
                                                                                 Gigi & Mulut : <?= $row['gigimulut'] ?> <br>
                                                                                 THT : <?= $row['THT'] ?> <br>
                                                                                 Thorax : <?= $row['thorax'] ?> <br>
                                                                                 Abdomen : <?= $row['abdomen'] ?> <br>
                                                                                 Genital : <?= $row['genital'] ?> <br>
                                                                                 Ekstremitas : <?= $row['ekstremitas'] ?> <br>
                                                                                 kulit : <?= $row['kulit'] ?> <br>
                                                                                 Catatan : <?= $row['catatan'] ?> <br>
                                                                              </td>
                                                                              <td><?= $row['lokalis'] ?></td>
                                                                              <td><?= $row['penunjang'] ?></td>
                                                                              <td><?= $row['diagnosa'] ?></td>
                                                                              <td><?= $row['tatalaksana'] ?></td>
                                                                              <td><?= $row['konsul'] ?></td>
                                                                              <td><?= $row['createAt'] ?></td>
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