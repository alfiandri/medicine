<?php
$path = 'master';
$page = "Dokter";
$id = $_GET['id'];
require '../../db/connect.php';
require '../admin/view.php';
$datacheck = mysqli_query($koneksi, "SELECT * FROM dokter WHERE uid_dokter='$id'");
$data = mysqli_fetch_array($datacheck);
$gelardepan = $data['gelar_depan'];
$nip = $data['nip'];
$sip = $data['sip'];
$id_card = $data['id_card'];
$gelarbelakang = $data['gelarbelakang'];
$nama = $data['nama'];
$tempatlahir = $data['tempat_lahir'];
$tanggallahir = $data['tanggal_lahir'];
$agama = $data['agama'];
$gender = $data['gender'];
$pendidikan = $data['pendidikan'];
$email = $data['email'];
$telepon = $data['telepon'];
$kategori = $data['kategori'];
$spesialis = $data['spesialis'];
$sub = $data['sub'];
$layanan = $data['layanan'];
$status_kawin = $data['status_kawin'];
$warga_negara = $data['warga_negara'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require '../admin/head.php';
   ?>
   <script type="text/javascript" src="../admin/signature.js"></script>
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
      require '../admin/header.php';
      ?>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
         <!-- Page Sidebar Start-->
         <?php
         require '../admin/sidebar.php';
         ?>
         <!-- Page Sidebar Ends-->
         <div class="page-body">
            <div class="container-fluid">
               <div class="page-title">
                  <div class="row">
                     <div class="col-6">
                        <h3>Dokter</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Dokter</li>
                           <li class="breadcrumb-item active">Detail Informasi </li>
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
                                 <li class="nav-item"><a class="nav-link active" id="pills-warninghome-tab" data-bs-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Profil</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Pendidikan</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-warningcontact-tab" data-bs-toggle="pill" href="#pills-warningcontact" role="tab" aria-controls="pills-warningcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Alamat</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-keluarga-tab" data-bs-toggle="pill" href="#pills-keluarga" role="tab" aria-controls="pills-keluarga" aria-selected="false"><i class="icofont icofont-contacts"></i>Keluarga</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-idcard-tab" data-bs-toggle="pill" href="#pills-idcard" role="tab" aria-controls="pills-idcard" aria-selected="false"><i class="icofont icofont-contacts"></i>Dokumen</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-catatan-tab" data-bs-toggle="pill" href="#pills-catatan" role="tab" aria-controls="pills-catatan" aria-selected="false"><i class="icofont icofont-contacts"></i>Catatan Khusus</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-fotodiri-tab" data-bs-toggle="pill" href="#pills-fotodiri" role="tab" aria-controls="pills-fotodiri" aria-selected="false"><i class="icofont icofont-contacts"></i>Signature</a></li>
                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div class="tab-pane fade show active" id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-3">
                                                   <input type="text" class="form-control" placeholder="Gelar Depan" name="gelardepan" value="<?= $gelardepan ?>" id="">
                                                </div>
                                                <div class="col-sm-3">
                                                   <input type="text" placeholder="Nama Lengkap" class="form-control" name="nama" value="<?= $nama ?>">
                                                </div>
                                                <div class="col-sm-4">
                                                   <input type="text" class="form-control" name="gelarbelakang" placeholder="Gelar Belakang" value="<?= $gelarbelakang ?>">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">No.ID</label>
                                                <div class="col-sm-3">
                                                   <input type="text" class="form-control" name="nip" placeholder="NIP" value="<?= $nip ?>" id="">
                                                </div>
                                                <div class="col-sm-3">
                                                   <input type="text" value="<?= $sip ?>" class="form-control" name="sip" placeholder="SIP" id="">
                                                </div>
                                                <div class="col-sm-4">
                                                   <input type="text" class="form-control" name=nik" value="<?= $id_card ?>" placeholder="NIK" id="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-3">
                                                   <input type="text" name="tempatlahir" value="<?= $tempatlahir ?>" class="form-control">
                                                </div>
                                                <div class="col-sm-3">
                                                   <input type="date" class="form-control" name="tanggallahir" value="<?= $tanggallahir ?>" id="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Identitas Diri</label>
                                                <div class="col-sm-3">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM gender WHERE statusGender=1");
                                                   ?>
                                                   <select name="gender" class="form-select" id="">
                                                      <option value="<?= $gender ?>"><?= $gender ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['gender'] ?>"><?= $row['gender'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-3">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM pendidikan WHERE statusPendidikan=1");
                                                   ?>
                                                   <select name="" class="form-select" id="">
                                                      <option value="<?= $pendidikan ?>"><?= $pendidikan ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['pendidikan'] ?>"><?= $row['pendidikan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-3">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM pekerjaan WHERE statusPekerjaan=1");
                                                   ?>
                                                   <select name="" class="form-select" id="">
                                                      <option value="<?= $pekerjaan ?>"><?= $pekerjaan ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['pekerjaan'] ?>"><?= $row['pekerjaan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-3">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM agama WHERE statusAgama=1");
                                                   ?>
                                                   <select name="" class="form-select" id="">
                                                      <option value="<?= $agama ?>"><?= $agama ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['agama'] ?>"><?= $row['agama'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-3">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM status_kawin WHERE statusData=1");
                                                   ?>
                                                   <select name="" class="form-select" id="">
                                                      <option value="<?= $status_kawin ?>"><?= $status_kawin ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kawin'] ?>"><?= $row['kawin'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-3">
                                                   <select name="" class="form-select" id="">
                                                      <option value="<?= $warga_negara ?>"><?= $warga_negara ?></option>
                                                      <option value="">WNI</option>
                                                      <option value="">WNA</option>
                                                   </select>
                                                </div>
                                             </div>

                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Spesialis</label>
                                                <div class="col-sm-3">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM kategori_dokter WHERE status=1");
                                                   ?>
                                                   <select name="" class="form-select" id="">
                                                      <option value="<?= $kategori ?>"><?= $kategori ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-3">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM spesialis WHERE status=1");
                                                   ?>
                                                   <select name="" class="form-select" id="">
                                                      <option value="<?= $spesialis ?>"><?= $spesialis ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['spesialis'] ?>"><?= $row['spesialis'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-3">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM layanan WHERE status=1");
                                                   ?>
                                                   <select name="" class="form-select" id="">
                                                      <option value="<?= $layanan ?>"><?= $layanan ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['layanan'] ?>"><?= $row['layanan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button class="btn btn-success" name="simpandokterdetail">Simpan</button>
                                                   <a href="<?= $path ?>/dokter">
                                                      <button class="btn btn-light">Kembali</button>
                                                   </a>
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
                                                <div class="card-header">
                                                   <div class="media">
                                                      <div class="media-body text-end">
                                                         <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addpendidikan"> <i data-feather="plus-square"></i>Tambah</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="card-body file-manager">
                                                   <div class="table-responsive">
                                                      <table class="table" id="">
                                                         <thead>
                                                            <tr>
                                                               <th>Pendidikan</th>
                                                               <th>Institusi</th>
                                                               <th>Jurusan</th>
                                                               <th>Masuk</th>
                                                               <th>Lulus</th>
                                                               <th class="text-center">Actions</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <?php
                                                            $query = tampildata("SELECT * FROM dokter_pendidikan WHERE uid='$id'");
                                                            ?>
                                                            <?php foreach ($query as $row) : ?>
                                                               <tr>
                                                                  <td><?= $row['pendidikan'] ?></td>
                                                                  <td><?= $row['institusi'] ?></td>
                                                                  <td><?= $row['jurusan'] ?></td>
                                                                  <td><?= $row['masuk'] ?></td>
                                                                  <td><?= $row['lulus'] ?></td>
                                                                  <td class="text-center col-1">
                                                                     <button class="btn btn-warning">Update</button>
                                                                  </td>
                                                               </tr>
                                                            <?php endforeach ?>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>

                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-warningcontact" role="tabpanel" aria-labelledby="pills-warningcontact-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                                <div class="col-sm-3">
                                                   <select name="warganegara" class="form-select" id="warganegara">
                                                      <option selected>Pilih Kewarganegaraan</option>
                                                      <option value="WNI">WNI</option>
                                                      <option value="WNA">WNA</option>
                                                   </select>
                                                </div>
                                                <div class="col-sm-7">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM negara");
                                                   ?>
                                                   <select name="negara" class="form-select" id="negara">
                                                      <option selected>Pilih Negara</option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['negara'] ?>"><?= $row['negara'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                   <textarea name="alamat" class="form-control" id="" cols="30" rows="4"></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Wilayah</label>
                                                <div class="col-sm-2">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM wil_provinsi");
                                                   ?>
                                                   <select name="provinsi" class="form-select" id="provinsi">
                                                      <option selected>Provinsi</option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['provinsi'] ?>"><?= $row['provinsi'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM wil_kabupaten");
                                                   ?>
                                                   <select name="kabupaten" class="form-select" id="kabupaten">
                                                      <option selected>Kabupaten</option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kab'] ?>"><?= $row['kab'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM wil_kecamatan");
                                                   ?>
                                                   <select name="kecamatan" class="form-select" id="kecamatan">
                                                      <option selected>Kecamatan</option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kec'] ?>"><?= $row['kec'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM wil_kelurahan");
                                                   ?>
                                                   <select name="kelurahan" class="form-select" id="">
                                                      <option selected>Kelurahan</option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kel'] ?>"><?= $row['kel'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2">
                                                   <input type="text" class="form-control" placeholder="RT/RW" name="rtrw" id="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label">Kode Pos</label>
                                                <div class="col-sm-2">
                                                   <input type="text" class="form-control" name="kodepost" id="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button class="btn btn-success" type="submit" name="simpanalamat">Simpan</button>
                                                   <a href="<?= $path ?>/dokter">
                                                      <button type="button" class="btn btn-light">Kembali</button>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="tab-pane fade" id="pills-keluarga" role="tabpanel" aria-labelledby="pills-keluarga-tab">
                                    <div class="row">
                                       <div class="col-xl-12 col-md-12 box-col-12">
                                          <div class="file-content">
                                             <div class="card">
                                                <div class="card-header">
                                                   <div class="media">
                                                      <div class="media-body text-end">
                                                         <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addkeluarga"> <i data-feather="plus-square"></i>Tambah</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="card-body file-manager">
                                                   <div class="table-responsive">
                                                      <table class="table" id="basic-7">
                                                         <thead>
                                                            <tr>
                                                               <th>Hubungan</th>
                                                               <th>Nama</th>
                                                               <th>No.Telepon</th>
                                                               <th>Alamat</th>
                                                               <th class="text-center">Actions</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <?php
                                                            $query = tampildata("SELECT * FROM dokter_keluarga WHERE uid='$id'");
                                                            ?>
                                                            <?php foreach ($query as $row) : ?>
                                                               <tr>
                                                                  <td><?= $row['hubungan'] ?></td>
                                                                  <td><?= $row['nama'] ?></td>
                                                                  <td><?= $row['telepon'] ?></td>
                                                                  <td><?= $row['alamat'] ?></td>
                                                                  <td class="text-center col-1">
                                                                     <button class="btn btn-warning">Update</button>
                                                                  </td>
                                                               </tr>
                                                            <?php endforeach ?>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>

                                          </div>
                                       </div>
                                    </div>

                                 </div>
                                 <div class="tab-pane fade" id="pills-idcard" role="tabpanel" aria-labelledby="pills-idcard-tab">
                                    <div class="row">
                                       <div class="col-xl-12 col-md-12 box-col-12">
                                          <div class="file-content">
                                             <div class="card">
                                                <div class="card-header">
                                                   <div class="media">
                                                      <div class="media-body text-end">
                                                         <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#adddokumen"> <i data-feather="plus-square"></i>Tambah</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="card-body file-manager">
                                                   <div class="table-responsive">
                                                      <table class="table" id="basic-7">
                                                         <thead>
                                                            <tr>
                                                               <th>ID Tipe</th>
                                                               <th>Nomor</th>
                                                               <th>Dokumen</th>
                                                               <th>Masa Berlaku</th>
                                                               <th class="text-center">Actions</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <?php
                                                            $query = tampildata("SELECT * FROM 	dokter_dokumen WHERE uid='$id'");
                                                            ?>
                                                            <?php foreach ($query as $row) : ?>
                                                               <tr>
                                                                  <td><?= $row['kategori'] ?></td>
                                                                  <td><?= $row['nomor'] ?></td>
                                                                  <td>
                                                                     <a href="../file/dokumen/dokter/<?= $row['dokumen'] ?>" target="_blank">
                                                                        <span class="badge bg-primary">Lihat File</span>
                                                                     </a>
                                                                  </td>
                                                                  <td><?= $row['berlaku'] ?></td>
                                                                  <td class="text-center col-1">
                                                                     <button class="btn btn-warning">Update</button>
                                                                  </td>
                                                               </tr>
                                                            <?php endforeach ?>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>

                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-catatan" role="tabpanel" aria-labelledby="pills-catatan-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                                                <div class="col-sm-10">
                                                   <textarea name="catatan" class="form-control" id="" cols="30" rows="10"></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button class="btn btn-success" name="simpancatatan" type="submit">Simpan</button>
                                                   <a href="<?= $path ?>/dokter">
                                                      <button type="button" class="btn btn-light">Kembali</button>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div class="tab-pane fade" id="pills-fotodiri" role="tabpanel" aria-labelledby="pills-fotodiri-tab">
                                    <div class="row">
                                       <div class="col-4">
                                          <div class="card">
                                             <img src="../assets/notfoundimage.jpeg" class="card-img-top" alt="...">
                                             <div class="card-body">
                                                <h5 class="card-title">Foto Diri</h5>
                                                <p class="card-text">Foto dapat diperbarui dengan cara upload file ataupun menggunakan capture langsung dengan memanfaatkan webcam</p>
                                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#uploadfoto" class="btn btn-primary">Upload</a>
                                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#webcam" class="btn btn-primary">Webcam</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="card">
                                             <img src="../assets/notfoundimage.jpeg" class="card-img-top" alt="...">
                                             <div class="card-body">
                                                <h5 class="card-title">Tanda Tangan</h5>
                                                <p class="card-text">Tanda tangan dapat dilakukan langsung di mediapad area yang telah disediakan untuk dapat digunakan sebagai identitas assesment</p>
                                                <a href="javascript:;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ttd">Tanda Tangan</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-4">
                                          <div class="card">
                                             <img src="../assets/notfoundimage.jpeg" class="card-img-top" alt="...">
                                             <div class="card-body">
                                                <h5 class="card-title">QR Code</h5>
                                                <p class="card-text">Generate QR Code berdasarkan kebutuhan pengguna dari informasi yang bersifat unik dari sebuah entitas data dokter</p>
                                                <a href="javascript:;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#qrcode">Generate QR</a>
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
   <!-- Modal -->

   <div class="modal fade" id="addpendidikan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
               <input type="hidden" name="id" value="<?= $id ?>">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="pendidikan" class="form-label">Pendidikan</label>
                     <?php
                     $query = tampildata("SELECT * FROM pendidikan WHERE statusPendidikan=1");
                     ?>
                     <select name="pendidikan" id=pendidikan"" class="form-select">
                        <option selected>Pilih Pendidikan</option>
                        <?php foreach ($query as $row) : ?>
                           <option value="<?= $row['pendidikan'] ?>"><?= $row['pendidikan'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="institusi" class="form-label">Institusi</label>
                     <?php
                     $query = tampildata("SELECT * FROM institusi WHERE statusInstitusi=1");
                     ?>
                     <select name=institusi" id="institusi" class="form-select">
                        <option selected>Pilih Institusi</option>
                        <?php foreach ($query as $row) : ?>
                           <option value="<?= $row['institusi'] ?>"><?= $row['institusi'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="jurusan" class="form-label">Jurusan</label>
                     <?php
                     $query = tampildata("SELECT * FROM jurusan WHERE statusJurusan=1");
                     ?>
                     <select name="jurusan" id="jurusan" class="form-select">
                        <option selected>Pilih Jurusan</option>
                        <?php foreach ($query as $row) : ?>
                           <option value="<?= $row['jurusan'] ?>"><?= $row['jurusan'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <div class="row">
                        <div class="col">
                           <label for="masuk" class="form-label">Tahun Masuk</label>
                           <input type="year" class="form-control" id="masuk">
                        </div>
                        <div class="col">
                           <label for="lulus" class="form-label">Tahun Lulus</label>
                           <input type="year" class="form-control" id="lulus">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary" name="simpanpendidikan">Simpan</button>
               </div>
            </form>
         </div>
      </div>
   </div>


   <div class="modal fade" id="addkeluarga" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
               <input type="hidden" name="id" value="<?= $id ?>">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="hubungan" class="form-label">Hubungan</label>
                     <?php
                     $query = tampildata("SELECT * FROM hubungan WHERE statusHubungan=1");
                     ?>
                     <select name="hubungan" id="hubungan" class="form-select">
                        <option selected>Pilih Hubungan</option>
                        <?php foreach ($query as $row) : ?>
                           <option value="<?= $row['hubungan'] ?>"><?= $row['hubungan'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="nama" class="form-label">Nama</label>
                     <input type="text" class="form-control" id="nama" name="nama">
                  </div>
                  <div class="mb-3">
                     <label for="telepon" class="form-label">No.Telepon</label>
                     <input type="text" class="form-control" id="telepon" name="telepon">
                  </div>
                  <div class="mb-3">
                     <label for="alamat" class="form-label">Alamat</label>
                     <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="5"></textarea>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpankeluarga" class="btn btn-primary">Simpan</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <div class="modal fade" id="adddokumen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="kategori" class="form-label">ID Tipe</label>
                     <?php
                     $query = tampildata("SELECT * FROM tipe_dokumen WHERE statusTipe=1 AND tipe=1");
                     ?>
                     <select name="kategori" id="kategori" class="form-select">
                        <option selected>Pilih Tipe Dokumen</option>
                        <?php foreach ($query as $row) : ?>
                           <option value="<?= $row['tipeDokumen'] ?>"><?= $row['tipeDokumen'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>

                  <div class="mb-3">
                     <label for="nomor" class="form-label">Nomor Dokumen</label>
                     <input type="text" class="form-control" id="nomor" name="nomor">
                  </div>
                  <div class="mb-3">
                     <label for="dokumen" class="form-label">File</label>
                     <input type="file" class="form-control" id="dokumen" name="dokumen">
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary" name="simpandokumen">Simpan</button>
               </div>
            </form>
         </div>
      </div>
   </div>



   <script>
      var wrapper = document.getElementById("signature-pad");
      var clearButton = wrapper.querySelector("[data-action=clear]");
      var savePNGButton = wrapper.querySelector("[data-action=save-png]");
      var canvas = wrapper.querySelector("canvas");
      var el_note = document.getElementById("note");
      var signaturePad;
      signaturePad = new SignaturePad(canvas);
      clearButton.addEventListener("click", function(event) {
         document.getElementById("note").innerHTML = "The signature should be inside box";
         signaturePad.clear();
      });
      savePNGButton.addEventListener("click", function(event) {
         if (signaturePad.isEmpty()) {
            alert("Please provide signature first.");
            event.preventDefault();
         } else {
            var canvas = document.getElementById("the_canvas");
            var dataUrl = canvas.toDataURL();
            document.getElementById("signature").value = dataUrl;
         }
      });

      function my_function() {
         document.getElementById("note").innerHTML = "";
      }
   </script>
   <?php
   include '../admin/library.php';
   ?>
</body>

</html>