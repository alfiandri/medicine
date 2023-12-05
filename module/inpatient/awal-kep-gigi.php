<?php
session_start();
$page = "Awal Keperawatan";
require '../../db/connect.php';
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
$oral = mysqli_query($koneksi, "SELECT * FROM assKepUmum_Intraoral WHERE uidPasien='$id' AND nomorRawat='$norawat'");
$dataoral = mysqli_fetch_array($oral);
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
                           <li class="breadcrumb-item active">Penilaian Keperawatan Gigi & Mulut </li>
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
                                          <div class="row mb-3">
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="td" class="form-label">TD</label>
                                                   <input type="text" name="td" class="form-control form-sm" value="<?= $datakepumum['td'] ?>" placeholder="mmHg">
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="nd" class="form-label">Nadi</label>
                                                   <input type="text" class="form-control" name="nd" value="<?= $datakepumum['nadi'] ?>" placeholder="x/menit">
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="rr" class="form-label">RR</label>
                                                   <input type="text" name="rr" class="form-control" value="<?= $datakepumum['rr'] ?>" placeholder="x/menit">
                                                </div>
                                             </div>
                                             <div class="col-2">
                                                <div class="mb-3">
                                                   <label for="suhu" class="form-label">Suhu</label>
                                                   <input type="text" name="suhu" class="form-control" value="<?= $datakepumum['suhu'] ?>" placeholder="c">
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="gcs" class="form-label">GCS</label>
                                                   <div class="row">
                                                      <div class="col">
                                                         <input type="text" name="gcsE" class="form-control" value="<?= $datakepumum['gcsE'] ?>" placeholder="E">
                                                      </div>
                                                      <div class="col">
                                                         <input type="text" name="gcsV" class="form-control" value="<?= $datakepumum['gcsV'] ?>" placeholder="V">
                                                      </div>
                                                      <div class="col">
                                                         <input type="text" name="gcsM" class="form-control" value="<?= $datakepumum['gcsM'] ?>" placeholder="M">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <h6>Status Nutrisi</h6>
                                       <div class="row mb-3">
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="bb" class="form-label">Berat Badan</label>
                                                <input type="text" class="form-control" name="bb" id="bb" value="<?= $datanutrisi['bb'] ?>" placeholder="Kg">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="tb" class="form-label">Tinggi Badan</label>
                                                <input type="text" name="tb" class="form-control" id="tb" value="<?= $datanutrisi['tb'] ?>" placeholder=" cm">
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="bmi" class="form-label">BMI</label>
                                                <input type="text" name="bmi" id="bmi" class="form-control" value="<?= $datanutrisi['bmi'] ?>" placeholder=" Kg/m2">
                                             </div>
                                          </div>
                                       </div>
                                       <h6>Riwayat Kesehatan</h6>
                                       <div class="row mb-3">
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="keluhanutama" class="form-label">Keluhan Utama</label>
                                                <textarea name="keluhanutama" class="form-control" id="keluhanutama" cols="30" rows="4"><?= $datakesehatan['keluhanaUtama'] ?></textarea>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="alergi" class="form-label">Riwayat Alergi</label>
                                                <textarea name="alergi" class="form-control" id="alergi" cols="30" rows="4"><?= $datakesehatan['alergri'] ?></textarea>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="obat" class="form-label">Obat yang diminum saat ini </label>
                                                <textarea name="obat" class="form-control" id="obat" cols="30" rows="4"><?= $datakesehatan['obat'] ?></textarea>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="sikatgigi" class="form-label">Kebiasaan sikat gigi </label>
                                                <select name="sikatgigi" class="form-select" id="sikatgigi">
                                                   <option value="1x">1x</option>
                                                   <option value="2x">2x</option>
                                                   <option value="3x">3x</option>
                                                   <option value="Mandi">Mandi</option>
                                                   <option value="Setelah Mandi">Setelah Makan</option>
                                                   <option value="Sebelum Tidur">Sebelum Tidur</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="penyakit" class="form-label">Riwayat Penyakit </label>
                                                <select name="penyakit" class="form-select" id="penyakit">
                                                   <option value="Tidak Ada">Tidak Ada</option>
                                                   <option value="Diabetes Melitus">Diabetes Melitus</option>
                                                   <option value="Hipertensi">Hipertensi</option>
                                                   <option value="Penyakit Jantung">Penyakit Jantung</option>
                                                   <option value="HIV">HIV</option>
                                                   <option value="Hepatitis">Hepatitis</option>
                                                   <option value="Haemophlia">Haemophlia</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="perawatangigi" class="form-label">Riwayat Perawatan Gigi </label>
                                                <select name="perawatangigi" class="form-select" id="perawatangigi">
                                                   <option value="Tidak Ada">Tidak Ada</option>
                                                   <option value="Ya, Kapan">Ya, Kapan</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="waktuperawatan" class="form-label">.</label>
                                                <input type="text" class="form-control" name="waktuperawatan" id="waktuperawatan">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="kebiasaan" class="form-label">Kebiasaan Lain </label>
                                                <select name="kebiasaan" class="form-select" id="kebiasaan">
                                                   <option value="Tidak Ada">Tidak Ada</option>
                                                   <option value="Minum Kopi/Teh">Minum Kopi/Teh</option>
                                                   <option value="Minum Alkohol">Minum Alkohol</option>
                                                   <option value="Bruxism">Bruxism</option>
                                                   <option value="Menggigit Pensil">Menggigit Pensil</option>
                                                   <option value="Mengunyah 1 sisi rahang">Mengunyah 1 sisi rahang</option>
                                                   <option value="Merokok">Merokok</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <h6>Fungsional</h6>
                                       <div class="row mb-3">
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="alatbantu" class="form-label">Alat Bantu </label>
                                                <select name="alatbantu" class="form-select" id="alatbantu">
                                                   <option value="<?= $datafungsional['alatBantu'] ?>"><?= $datafungsional['alatBantu'] ?></option>
                                                   <option value="Tidak">Tidak</option>
                                                   <option value="Ya">Ya</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="catatanalatbantu" class="form-label">.</label>
                                                <input type="text" class="form-control" name="catatanalatbantu" value="<?= $datafungsional['alatBantuCatatan'] ?>">
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
                                                <label for="catatanprothesa" class="form-label">.</label>
                                                <input type="text" class="form-control" name="catatanprothesa" value=" <?= $datafungsional['prothesaCatatan'] ?> " id="catatanprothesa">
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3">
                                                <label for="cacatfisik" class="form-label">Cacat Fisik</label>
                                                <input type="text" class="form-control" name="cacatfisik" value=" <?= $datafungsional['cacatFisik'] ?> " id="cacatfisik">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="adl" class="form-label">Aktivitas Kehidupan Hari Hari (ADL)</label>
                                                <select name="adl" class="form-select" id="adl">
                                                   <option value=" <?= $datafungsional['adl'] ?> "> <?= $datafungsional['ADL'] ?> </option>
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
                                                <select name="statuspsikologis" class="form-select" id="statuspsikologis">
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
                                                <label for="catatanpsikologis" class="form-label">.</label>
                                                <input type="text" class="form-control" name="catatanpsikologis" value="<?= $datapsikolog['catatanPsikologis'] ?>" id="catatanpsikologis">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="bahasa" class="form-label">Bahasa Digunakan Sehari Hari</label>
                                                <select name="bahasa" class="form-select" id="bahasa">
                                                   <option value="<?= $datapsikolog['bahasa'] ?>"><?= $datapsikolog['bahasa'] ?></option>
                                                   <option value="Indonesia">Indonesia</option>
                                                   <option value="Daerah">Daerah</option>
                                                   <option value="Asing">Asing</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="catatanbahasa" class="form-label">.</label>
                                                <input type="text" class="form-control" name="catatanbahasa" value="<?= $datapsikolog['catatanBahasa'] ?>" id="catatanbahasa">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="hubungan" class="form-label">Hubungan Dengan Keluarga</label>
                                                <select name="hubungan" class="form-select" id="hubungan">
                                                   <option value="<?= $datapsikolog['hubungan'] ?>"><?= $datapsikolog['hubungan'] ?></option>
                                                   <option value="Baik">Baik</option>
                                                   <option value="Tidak Baik">Tidak Baik</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="tinggal" class="form-label">Tinggal Dengan</label>
                                                <select name="tinggal" class="form-select" id="tinggal">
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
                                                   <option value="Baik">Baik</option>
                                                   <option value="Cukup">Cukup</option>
                                                   <option value="Kurang">Kurang</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-1">
                                             <div class="mb-3">
                                                <label for="kepercayaan" class="form-label">Kepercayaan</label>
                                                <select name="kepercayaan" class="form-select" id="kepercayaan">
                                                   <option value="<?= $datapsikolog['kepercayaan'] ?>"><?= $datapsikolog['kepercayaan'] ?></option>
                                                   <option value="Tidak Ada">Tidak Ada</option>
                                                   <option value="Ada">Ada</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-2">
                                             <div class="mb-3">
                                                <label for="catatankepercayaan" class="form-label">.</label>
                                                <input type="text" name="catatankepercayaan" id="catatankepercayaan" value="<?= $datapsikolog['catatanKepercayaan'] ?>" class="form-control">
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="edukasi" class="form-label">Edukasi Diberikan Kepada</label>
                                                <select name="edukasi" class="form-select" id="edukasi">
                                                   <option value="<?= $datapsikolog['edukasi'] ?>"><?= $datapsikolog['edukasi'] ?></option>
                                                   <option value="Pasien">Pasien</option>
                                                   <option value="Pasien">Keluarga</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="catatanedukasi" class="form-label">.</label>
                                                <input type="text" name="catatanedukasi" class="form-control" value="<?= $datapsikolog['catatanEdukasi'] ?>" id="catatanedukasi">
                                             </div>
                                          </div>
                                       </div>
                                       <h6>Penilaian Resiko Jatuh</h6>
                                       <div class="row mb-3">
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="seimbang" class="form-label">Tidak Seimbang/Sempoyong</label>
                                                <select name="seimbang" class="form-select" id="seimbang">
                                                   <option value="<?= $datajatuh['seimbang'] ?>"><?= $datajatuh['seimbang'] ?></option>
                                                   <option value="Tidak">Tidak</option>
                                                   <option value="Ya">Ya</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="alatbantu" class="form-label">Jalan dengan Alat Bantu</label>
                                                <select name="alatbantu" class="form-select" id="alatbantu">
                                                   <option value="<?= $datajatuh['alatBantu'] ?>"><?= $datajatuh['alatBantu'] ?></option>
                                                   <option value="Tidak">Tidak</option>
                                                   <option value="Ya">Ya</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="menopang" class="form-label">Menopang saat akan duduk</label>
                                                <select name="menopang" class="form-select" id="menopang">
                                                   <option value="<?= $datajatuh['menopang'] ?>"><?= $datajatuh['menopang'] ?></option>
                                                   <option value="Tidak">Tidak</option>
                                                   <option value="Ya">Ya</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="hasil" class="form-label">Hasil</label>
                                                <select name="hasil" class="form-select" id="hasil">
                                                   <option value="<?= $datajatuh['hasil'] ?>"><?= $datajatuh['hasil'] ?></option>
                                                   <option value="Tidak Beresiko (Tidak ditermukan a dan b)">Tidak Beresiko (Tidak ditermukan a dan b)</option>
                                                   <option value="Resiko Rendah (ditermukan a/b)">Resiko Rendah (ditermukan a/b)</option>
                                                   <option value="Resiko Tinggi (ditemukan a dan b)">Resiko Tinggi (ditemukan a dan b)</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="dilaporkan" class="form-label">Dilaporkan kepada dokter</label>
                                                <select name="dilaporkan" class="form-select" id="dilaporkan">
                                                   <option value="<?= $datajatuh['dilaporkan'] ?>"><?= $datajatuh['dilaporkan'] ?></option>
                                                   <option value="Tidak">Tidak</option>
                                                   <option value="Ya">Ya</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="jam" class="form-label">Jam</label>
                                                <input type="time" class="form-control" name="jam" value="<?= $datajatuh['jam'] ?>" id="">
                                             </div>
                                          </div>
                                       </div>
                                       <h6>Penilaian Intraoral</h6>
                                       <div class="row mb-3">
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="kebersihanmulut" class="form-label">Kebersihan Mulut</label>
                                                <select name="kebersihanmulut" class="form-select" id="kebersihanmulut">
                                                   <option value=" <?= $dataoral['kebersihanMulut'] ?> "> <?= $dataoral['kebersihanMulut'] ?> </option>
                                                   <option value="Baik">Baik</option>
                                                   <option value="Cukup">Cukup</option>
                                                   <option value="Kurang">Kurang</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="karies" class="form-label">Karies</label>
                                                <select name="karies" class="form-select" id="karies">
                                                   <option value=" <?= $dataoral['karies'] ?> "> <?= $dataoral['karies'] ?> </option>
                                                   <option value="Ada">Ada</option>
                                                   <option value="Tidak Ada">Tidak Ada</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="gingiva" class="form-label">Gingiva</label>
                                                <select name="gingiva" class="form-select" id="gingiva">
                                                   <option value=" <?= $dataoral['gingiva'] ?> "> <?= $dataoral['gingiva'] ?> </option>
                                                   <option value="Ada">Ada</option>
                                                   <option value="Tidak Ada">Tidak Ada</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="mukosa" class="form-label">Mukosa Mulut</label>
                                                <select name="mukosa" class="form-select" id="mukosa">
                                                   <option value=" <?= $dataoral['mukosa'] ?> "> <?= $dataoral['mukosa'] ?> </option>
                                                   <option value="Normal">Normal</option>
                                                   <option value="Pigmentasi">Pigmentasi</option>
                                                   <option value="Radang">Radang</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="karang" class="form-label">Karang Gigi</label>
                                                <select name="karang" class="form-select" id="karang">
                                                   <option value=" <?= $dataoral['karang'] ?> "> <?= $dataoral['karang'] ?> </option>
                                                   <option value="Ada">Ada</option>
                                                   <option value="Tidak Ada">Tidak Ada</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-3">
                                             <div class="mb-3">
                                                <label for="palatum" class="form-label">Palatum</label>
                                                <select name="palatum" class="form-select" id="palatum">
                                                   <option value=" <?= $dataoral['palatum'] ?> "> <?= $dataoral['palatum'] ?> </option>
                                                   <option value="Normal">Normal</option>
                                                   <option value="Radang">Radang</option>
                                                </select>
                                             </div>
                                          </div>


                                          <h6>Penilaian Tingkat Nyeri</h6>
                                          <div class="row mb-3">
                                             <div class="col-6 mt-3">
                                                <div class="card">
                                                   <img src="../assets/rm/nyeri.jpeg" alt="...">
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
                                                         <label for="penyabab" class="form-label">Penyebab</label>
                                                         <select name="penyabab" class="form-select" id="penyabab">
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
                                                         <select name="kualitas" class="form-select" id="kualitas">
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
                                                         <input type="text" class="form-control" name="lokasi" id="lokasi" value="<?= $datanyeri['lokasi'] ?>">
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="menyebar" class="form-label">Menyebar</label>
                                                         <select name="menyebar" class="form-select" id="menyebar">
                                                            <option value="<?= $datanyeri['menyebar'] ?>"><?= $datanyeri['menyebar'] ?></option>
                                                            <option value="Tidak">Tidak</option>
                                                            <option value="Ya">Ya</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="skala" class="form-label">Severity Skala</label>
                                                         <select name="skala" class="form-select" id="skala">
                                                            <option value="<?= $datanyeri['skala'] ?>"><?= $datanyeri['skala'] ?></option>
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
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
                                                         <input type="text" name="waktudurasi" id="waktudurasi" value="<?= $datanyeri['waktuDurasi'] ?>" class="form-control" placeholder="/menit">
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
                                                         <select name="dilaporkan" class="form-select" id="dilaporkan">
                                                            <option value="<?= $datanyeri['dilaporkan'] ?>"><?= $datanyeri['dilaporkan'] ?></option>
                                                            <option value="Tidak">Tidak</option>
                                                            <option value="Ya">Ya</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                   <div class="col-6">
                                                      <div class="mb-3">
                                                         <label for="jam" class="form-label">Jam</label>
                                                         <input type="time" class="form-control" value="<?= $datanyeri['jam'] ?>" placeholder="/menit" name="jam" id="jam">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <button class="btn btn-success">Simpan</button>
                                 </div>

                                 <div class="tab-pane fade" id="pills-masalahkeperawatan" role="tabpanel" aria-labelledby="pills-masalahkeperawatan-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="norawat" value="<?= $norawat ?>">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="table-responsive">
                                                <table class="display" id="basic-2">
                                                   <thead>
                                                      <tr>
                                                         <th>Kode</th>
                                                         <th>Diagnosa Menurut SDKI</th>
                                                         <th>Intervensi</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM diagnosa_keperawatan");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <tr>
                                                            <td><?= $row['kode'] ?></td>
                                                            <td><?= $row['diagnosa'] ?></td>
                                                            <td class="">
                                                               <?php
                                                               $kode = $row['kode'];
                                                               $query = tampildata("SELECT * FROM  diagnosa_keperawatan_detail WHERE kode='$kode'");
                                                               ?>
                                                               <ul class="list-group">
                                                                  <?php foreach ($query as $d) : ?>
                                                                     <li class="list-group-item">
                                                                        <div class="form-check">
                                                                           <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                           <label class="form-check-label" for="flexCheckDefault">
                                                                              <?= $d['intervensi'] ?>
                                                                           </label>
                                                                        </div>
                                                                     </li>
                                                                  <?php endforeach ?>
                                                               </ul>
                                                            </td>
                                                         </tr>
                                                      <?php endforeach ?>
                                                   </tbody>
                                                </table>
                                                <hr>
                                                Keterangan Warna : <span class="badge bg-success">Active</span>
                                                <span class="badge bg-danger">InActive</span>
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
                                                   $query = tampildata("SELECT * FROM pasien_visit WHERE uid_pasien='$id' AND nomor_visit='$norawat'");
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