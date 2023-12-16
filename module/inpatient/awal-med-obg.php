<?php
$page = "Awal Medis Obgyn";
require '../../db/connect.php';
require '../../controller/intpatient/ass-medis-obgyn.php';
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
$kandungan = mysqli_query($koneksi, "SELECT * FROM ass_kebidanan WHERE uid_pasien='$id' AND nomor_rawat='$norawat'");
$datakandungan = mysqli_fetch_array($kandungan);
$medisobgyn = mysqli_query($koneksi, "SELECT * FROM ass_medis_obgyn WHERE uid_pasien='$id' AND nomor_rawat='$norawat'");
$dataobyn = mysqli_fetch_array($medisobgyn);
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
                           <li class="breadcrumb-item active">Penilaian Medis Kebidanan & Kandungan </li>
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
                                                   <textarea name="keluhanutama" class="form-control" id="" cols="30" rows="4"><?= $datakesehatan['keluhanUtama'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="penyakitsekarang" class="form-label">Riwayat Penyakit Sekarang</label>
                                                   <textarea name="penyakitsekarang" class="form-control" id="" cols="30" rows="4"><?= $datakesehatan['penyakitSekarang'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="penyakitkeluarga" class="form-label">Riwayat Penyakit Keluarga</label>
                                                   <textarea name="penyakitkeluarga" class="form-control" id="" cols="30" rows="4"><?= $datakesehatan['penyakitKeluarga'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="penyakitdahulu" class="form-label">Riwayat Penyakit Dahulu</label>
                                                   <textarea name="penyakitdahulu" class="form-control" id="" cols="30" rows="4"><?= $datakesehatan['penyakitDahulu'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="penggunaanobat" class="form-label">Riwayat Penggunaan Obat</label>
                                                   <textarea name="penggunaanobat" class="form-control" id="" cols="30" rows="4"><?= $datakesehatan['penggunaanObat'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="alergi" class="form-label">Riwayat Alergi</label>
                                                   <textarea name="alergi" class="form-control" id="" cols="30" rows="4"><?= $datakesehatan['alergi'] ?></textarea>
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
                                                   <select name="genital" class="form-select" id="genital">
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
                                          <h6>Status Obstetri/Ginekologi</h6>
                                          <div class="row">
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="tfu" class="form-label">TFU</label>
                                                   <input type="text" class="form-control" name="tfu" value="<?= $datakandungan['tfu'] ?>" id="" placeholder="cm">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="tbj" class="form-label">TBJ</label>
                                                   <input type="text" class="form-control" name="tbj" value="<?= $datakandungan['tbj'] ?>" id="" placeholder="gram">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="his" class="form-label">HIS</label>
                                                   <input type="text" class="form-control" name="his" value="<?= $datakandungan['his'] ?>" id="" placeholder="x/10 menit">
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="kontraksi" class="form-label">Kontraksi</label>
                                                   <select name="kontraksi" class="form-select" id="kontraksi">
                                                      <option value="<?= $datakandungan['kontraksi'] ?>"><?= $datakandungan['kontraksi'] ?></option>
                                                      <option value="Ada">Ada</option>
                                                      <option value="Tidak Ada">Tidak Ada</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-1">
                                                <div class="mb-3">
                                                   <label for="djj" class="form-label">DJJ</label>
                                                   <input type="text" class="form-control" name="djj" value="<?= $datakandungan['djj'] ?>" id="" placeholder="dpm">
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="inspeksi" class="form-label">Inspeksi</label>
                                                   <textarea name="inspeksi" class="form-control" id="" cols="30" rows="4"><?= $datakandungan['inspeksi'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="vt" class="form-label">VT</label>
                                                   <textarea name="vt" class="form-control" id="" cols="30" rows="4"><?= $datakandungan['vt'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="inspekulo" class="form-label">Inspekulo</label>
                                                   <textarea name="inspekulo" class="form-control" id="" cols="30" rows="4"><?= $datakandungan['inspekulo'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-6">
                                                <div class="mb-3">
                                                   <label for="rt" class="form-label">RT</label>
                                                   <textarea name="rt" class="form-control" id="" cols="30" rows="4"><?= $datakandungan['rt'] ?></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <h6>Pemeriksaan Penunjang</h6>
                                          <div class="row mb-3">
                                             <div class="col-4">
                                                <div class="mb-3">
                                                   <label for="usg" class="form-label">Ultrasonografi</label>
                                                   <textarea name="usg" class="form-control" id="" cols="30" rows="4"><?= $dataobyn['usg'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-4">
                                                <div class="mb-3">
                                                   <label for="kardio" class="form-label">Kardiotokografi</label>
                                                   <textarea name="kardio" class="form-control" id="" cols="30" rows="4"><?= $dataobyn['kardio'] ?></textarea>
                                                </div>
                                             </div>
                                             <div class="col-4">
                                                <div class="mb-3">
                                                   <label for="lab" class="form-label">Laboratorium</label>
                                                   <textarea name="lab" class="form-control" id="" cols="30" rows="4"><?= $dataobyn['lab'] ?></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <h6>Diagnosis / Assemen</h6>
                                          <div class="row mb-3">
                                             <div class="col-12">
                                                <textarea name="diagnosis" class="form-control" id="" cols="30" rows="3"><?= $dataobyn['diagnosis'] ?></textarea>
                                             </div>
                                          </div>
                                          <h6>Tatalaksana</h6>
                                          <div class="row mb-3">
                                             <div class="col-12">
                                                <textarea name="tatalaksana" class="form-control" id="" cols="30" rows="3"><?= $dataobyn['tatalaksana'] ?></textarea>
                                             </div>
                                          </div>
                                          <h6>Konsul/Rujuk </h6>
                                          <div class="row mb-3">
                                             <div class="col-12">
                                                <textarea name="konsul" class="form-control" id="" cols="30" rows="3"><?= $dataobyn['konsul'] ?></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <button class="btn btn-success" type="submit" name="simpanpemeriksaan">Simpan</button>
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
   <!-- Plugin used-->
</body>

</html>