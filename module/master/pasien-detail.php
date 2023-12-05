<?php
$path = 'master';
$page = "Pasien";
$id = $_GET['id'];
$tipe = $_GET['tipe'];
require '../../db/connect.php';
require '../admin/view.php';
require '../../controller/master/pasien.php';
$datacheck = mysqli_query($koneksi, "SELECT * FROM pasien WHERE uid_pasien='$id'");
$data = mysqli_fetch_array($datacheck);
$nik = $data['nik'];
$nomor_kartu = $data['nomor_kartu'];
$nomor_rm = $data['nomor_rm'];
$sebutan = $data['sebutan'];
$nama = $data['nama_pasien'];
$tempatlahir = $data['tempat_lahir'];
$tanggallahir = $data['tanggal_lahir'];
$agama = $data['agama'];
$gender = $data['gender'];
$pendidikan = $data['pendidikan'];
$email = $data['email'];
$telepon = $data['no_handphone'];
$status_kawin = $data['status_kawin'];
$pekerjaan = $data['pekerjaan'];
$catatan = $data['catatan'];
$golongandarah = $data['golongan_darah'];
$nomorkk = $data['nomor_kk'];
$suku = $data['suku'];
$bahasa = $data['bahasa'];
$alamat = $data['alamat'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require '../admin/head.php';
   ?>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                        <h3>Pasien</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Pasien</li>
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
                                 <li class="nav-item"><a <?php if ($tipe == 1) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-warninghome-tab" data-bs-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Profil</a></li>
                                 <li class="nav-item"><a <?php if ($tipe == 2) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Riwayat Pasien</a></li>
                                 <li class="nav-item"><a <?php if ($tipe == 3) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-warningcontact-tab" data-bs-toggle="pill" href="#pills-warningcontact" role="tab" aria-controls="pills-warningcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Alamat</a></li>
                                 <li class="nav-item"><a <?php if ($tipe == 4) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-keluarga-tab" data-bs-toggle="pill" href="#pills-keluarga" role="tab" aria-controls="pills-keluarga" aria-selected="false"><i class="icofont icofont-contacts"></i>Keluarga</a></li>
                                 <li class="nav-item"><a <?php if ($tipe == 5) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-idcard-tab" data-bs-toggle="pill" href="#pills-idcard" role="tab" aria-controls="pills-idcard" aria-selected="false"><i class="icofont icofont-contacts"></i>Dokumen</a></li>
                                 <li class="nav-item"><a <?php if ($tipe == 6) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-catatan-tab" data-bs-toggle="pill" href="#pills-catatan" role="tab" aria-controls="pills-catatan" aria-selected="false"><i class="icofont icofont-contacts"></i>Catatan Khusus</a></li>
                                 <li class="nav-item"><a <?php if ($tipe == 7) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-fotodiri-tab" data-bs-toggle="pill" href="#pills-fotodiri" role="tab" aria-controls="pills-fotodiri" aria-selected="false"><i class="icofont icofont-contacts"></i>Signature</a></li>
                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div <?php if ($tipe == 1) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="tipe" value="1">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="nik" class="col-sm-4 col-form-label">NIK</label>
                                                <div class="col-sm-8">
                                                   <input type="text" class="form-control" placeholder="Nomor Induk Kependudukan" name="nik" value="<?= $nik ?>" id="">
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="nomorkk" class="col-sm-4 col-form-label">No.KK</label>
                                                <div class="col-sm-8">
                                                   <input type="text" placeholder="No.Kartu Keluarga" class="form-control" name="nama" value="<?= $nomorkk ?>">
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="nama" class="col-sm-4 col-form-label">Sebutan</label>
                                                <div class="col-sm-8">
                                                   <select name="" class="form-select" id="">
                                                      <option value=""></option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM sebutan");
                                                      ?>
                                                      <?php foreach ($query as $data) : ?>
                                                         <option value="<?= $data['sebutan'] ?>"><?= $data['sebutan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="nomorrm" class="col-sm-4 col-form-label">Nomor RM</label>
                                                <div class="col-sm-8">
                                                   <input type="text" class="form-control" name="nomorrm" placeholder="Nomor Rekam Medis" value="<?= $nomor_rm ?>" id="">
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="tempatlahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                                <div class="col-sm-8">
                                                   <input type="text" value="<?= $tempatlahir ?>" class="form-control" name="tempatlahir" placeholder="Tempat Lahir" id="">
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="tanggallahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                                <div class="col-sm-8">
                                                   <input type="date" class="form-control" name="tanggallahir" value="<?= $tanggallahir ?>" placeholder="Tanggal Lahir" id="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
                                                <div class="col-sm-8">
                                                   <input type="text" name="nama" value="<?= $nama ?>" class="form-control">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                                <div class="col-sm-8">
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
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="pekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
                                                <div class="col-sm-8">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM pekerjaan ");
                                                   ?>
                                                   <select name="pekerjaan" class="form-select" id="">
                                                      <option value="<?= $pekerjaan ?>"><?= $pekerjaan ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['pekerjaan'] ?>"><?= $row['pekerjaan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-4 col-form-label">Pendidikan</label>
                                                <div class="col-sm-8">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM pendidikan WHERE statusPendidikan=1");
                                                   ?>
                                                   <select name="pendidikan" class="form-select" id="">
                                                      <option value="<?= $pendidikan ?>"><?= $pendidikan ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['pendidikan'] ?>"><?= $row['pendidikan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-4 col-form-label">Agama</label>
                                                <div class="col-sm-8">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM agama WHERE statusAgama=1");
                                                   ?>
                                                   <select name="agama" class="form-select" id="">
                                                      <option value="<?= $agama ?>"><?= $agama ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['agama'] ?>"><?= $row['agama'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="statuskawin" class="col-sm-4 col-form-label">Status</label>
                                                <div class="col-sm-8">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM status_kawin WHERE statusData=1");
                                                   ?>
                                                   <select name="statuskawin" class="form-select" id="">
                                                      <option value="<?= $status_kawin ?>"><?= $status_kawin ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kawin'] ?>"><?= $row['kawin'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="handphone" class="col-sm-4 col-form-label">No.Handphone</label>
                                                <div class="col-sm-8">
                                                   <input type="tel" class="form-control" name="handphone" id="handphone">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="email" class="col-sm-4 col-form-label">Email</label>
                                                <div class="col-sm-8">
                                                   <input type="email" class="form-control" name="email" id="email">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="bahasa" class="col-sm-4 col-form-label">Bahasa</label>
                                                <div class="col-sm-8">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM bahasa ");
                                                   ?>
                                                   <select name="bahasa" class="form-select" id="">
                                                      <option value="<?= $bahasa ?>"><?= $bahasa ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['bahasa'] ?>"><?= $row['bahasa'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="suku" class="col-sm-4 col-form-label">Suku</label>
                                                <div class="col-sm-8">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM suku ");
                                                   ?>
                                                   <select name="suku" class="form-select" id="">
                                                      <option value="<?= $suku ?>"><?= $suku ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['suku'] ?>"><?= $row['suku'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="golongandarah" class="col-sm-4 col-form-label">Golongan Darah</label>
                                                <div class="col-sm-8">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM golongan_darah ");
                                                   ?>
                                                   <select name="golongandarah" class="form-select" id="">
                                                      <option value="<?= $golongandarah ?>"><?= $golongandarah ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['blood'] ?>"><?= $row['blood'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button class="btn btn-success" name="simpanpasiendetail">Simpan</button>
                                                   <a href="<?= $path ?>/dokter">
                                                      <button class="btn btn-light">Kembali</button>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div <?php if ($tipe == 2) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                                    <div class="row">
                                       <div class="col-xl-12 col-md-12 box-col-12">
                                          <div class="file-content">
                                             <div class="card">
                                                <div class="card-body file-manager">
                                                   <div class="table-responsive">
                                                      <table class="table" id="basic-3">
                                                         <thead>
                                                            <tr>
                                                               <th>Tanggal</th>
                                                               <th>Jenis Layanan</th>
                                                               <th>Poliklinik</th>
                                                               <th>Jaminan</th>
                                                               <th>Dokter</th>
                                                               <th>Diagnosa</th>
                                                               <th>Sumber</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <?php
                                                            $query = tampildata("SELECT * FROM pasien_visit WHERE uid_pasien='$id'");
                                                            ?>
                                                            <?php foreach ($query as $row) : ?>
                                                               <tr>
                                                                  <td><?= $row['create_at'] ?></td>
                                                                  <td><?= $row['jenis_layanan'] ?></td>
                                                                  <td><?= $row['layanan'] ?></td>
                                                                  <td><?= $row['jenis_bayar'] ?></td>
                                                                  <td><?= $row['dokter'] ?></td>
                                                                  <td><?= $row['diagnosa'] ?></td>
                                                                  <td><?= $row['sumber'] ?></td>
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
                                 <div <?php if ($tipe == 3) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-warningcontact" role="tabpanel" aria-labelledby="pills-warningcontact-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="tipe" value="3">
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
                                                   <input class="form-control" list="datanegara" id="neagara" name="negara" placeholder="cari negara...">
                                                   <datalist id="datanegara">
                                                      <?php foreach ($query as $data) : ?>
                                                         <option value="<?= $data['name'] ?>">
                                                         <?php endforeach ?>
                                                   </datalist>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                                <div class="col-sm-10">
                                                   <textarea name="alamat" class="form-control" id="" cols="30" rows="4"><?= $alamat ?></textarea>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-2 row">
                                                <label for="wilayah" class="col-sm-2 col-form-label">Wilayah</label>
                                                <div class="col-sm-2">
                                                   <select name="provinsi" class="form-select form-select-sm" id="provinsi" required="">
                                                      <option value="">Pilih Provinsi</option>
                                                      <?php
                                                      $sql1 = mysqli_query($koneksi, "SELECT * FROM wil_provinsi");
                                                      while ($prov = mysqli_fetch_array($sql1)) { ?>
                                                         <option value="<?php echo $prov['id']; ?>"><?php echo $prov['provinsi']; ?></option>
                                                      <?php } ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2" id="a">
                                                   <select name="kabupaten" id="kabupaten" required="" class="form-select form-select-sm">
                                                      <option selected>Pilih Kabupaten</option>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2" id="b">
                                                   <select name="kecamatan" id="kecamatan" required="" class="form-select form-select-sm">
                                                      <option selected>Pilih Kecamatan</option>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2" id="c">
                                                   <select name="kelurahan" id="kelurahan" required="" class="form-select form-select-sm">
                                                      <option selected>Pilih Kelurahan</option>
                                                   </select>
                                                </div>

                                                <div class="col-sm-2">
                                                   <input type="text" class="form-control form-control-sm" placeholder="RT/RW" name="rtrw" id="rtrw" value="<?= $data['rtrw'] ?>">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button class="btn btn-success" type="submit" name="simpanalamat">Simpan</button>
                                                   <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#alamat">Lihat Data</button>
                                                   <a href="<?= $path ?>/pasien">
                                                      <button type="button" class="btn btn-light">Kembali</button>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>

                                 <!-- Modal -->
                                 <div class="modal fade" id="alamat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h1 class="modal-title fs-5" id="staticBackdropLabel">Alamat Pasien</h1>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <form action="" method="POST">
                                             <?php
                                             $dataalamat = mysqli_query($koneksi, "SELECT * FROM pasien WHERE uid_pasien='$id'");
                                             $checkalamat = mysqli_fetch_array($dataalamat);
                                             ?>
                                             <div class="modal-body">
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="mb-3">
                                                         <label for="warganegara" class="form-label">Warga Negara</label>
                                                         <input type="text" class="form-control" readonly name="warganegara" value="<?= $checkalamat['warga_negara'] ?>" id="">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="mb-3">
                                                         <label for="negara" class="form-label">Negara</label>
                                                         <input type="text" " class=" form-control" readonly name="negara" value="<?= $checkalamat['negara'] ?>" id="">
                                                      </div>
                                                   </div>
                                                </div>


                                                <div class="mb-3">
                                                   <label for="alamat" class="form-label">Alamat</label>
                                                   <input type="text" " class=" form-control" readonly name="alamat" value="<?= $checkalamat['alamat'] ?>" id="">
                                                </div>
                                                <div class="mb-3">
                                                   <label for="provinsi" class="form-label">Provinsi</label>
                                                   <input type="text" " class=" form-control" readonly name="provinsi" value="<?= $checkalamat['provinsi'] ?>" id="">
                                                </div>
                                                <div class="mb-3">
                                                   <label for="kabupaten" class="form-label">Kabupaten</label>
                                                   <input type="text" " class=" form-control" readonly name="kabupaten" value="<?= $checkalamat['kabupaten'] ?>" id="">
                                                </div>
                                                <div class="mb-3">
                                                   <label for="kecamatan" class="form-label">Kecamatan</label>
                                                   <input type="text" " class=" form-control" readonly name="kecamatan" value="<?= $checkalamat['kecamatan'] ?>" id="">
                                                </div>
                                                <div class="mb-3">
                                                   <label for="kelurahan" class="form-label">Kelurahan</label>
                                                   <input type="text" " class=" form-control" readonly name="kelurahan" value="<?= $checkalamat['kelurahan'] ?>" id="">
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="mb-3">
                                                         <label for="rtrw" class="form-label">RT/RW</label>
                                                         <input type="text" " class=" form-control" readonly name="rtrw" value="<?= $checkalamat['rtrw'] ?>" id="">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="mb-3">
                                                         <label for="kodepos" class="form-label">Kode Pos</label>
                                                         <input type="text" " class=" form-control" readonly name="kodepos" value="<?= $checkalamat['kodepos'] ?>" id="">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>

                                 <div <?php if ($tipe == 4) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-keluarga" role="tabpanel" aria-labelledby="pills-keluarga-tab">
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
                                                            $query = tampildata("SELECT * FROM pasien_keluarga WHERE uid_pasien='$id'");
                                                            ?>
                                                            <?php foreach ($query as $row) : ?>
                                                               <tr>
                                                                  <td><?= $row['hubungan'] ?></td>
                                                                  <td><?= $row['nama'] ?></td>
                                                                  <td><?= $row['telepon'] ?></td>
                                                                  <td><?= $row['alamat'] ?></td>
                                                                  <td class="text-center col-2">
                                                                     <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubah<?= $row['id'] ?>">Ubah</button>
                                                                     <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?= $row['id'] ?>">Hapus</button>
                                                                  </td>
                                                               </tr>

                                                               <div class="modal fade" id="ubah<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                  <div class="modal-dialog">
                                                                     <div class="modal-content">
                                                                        <div class="modal-header">
                                                                           <h1 class="modal-title fs-5" id="staticBackdropLabel">Perubahan Data</h1>
                                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <form action="" method="POST">
                                                                           <input type="hidden" name="uid" value="<?= $id ?>">
                                                                           <input type="hidden" name="tipe" value="4">
                                                                           <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                                           <div class="modal-body">
                                                                              <div class="mb-3">
                                                                                 <label for="hubungan" class="form-label">Hubungan</label>
                                                                                 <?php
                                                                                 $query = tampildata("SELECT * FROM hubungan WHERE statusHubungan=1");
                                                                                 ?>
                                                                                 <select name="hubungan" id="hubungan" class="form-select">
                                                                                    <option value="<?= $row['hubungan'] ?>"><?= $row['hubungan'] ?></option>
                                                                                    <?php foreach ($query as $data) : ?>
                                                                                       <option value="<?= $data['hubungan'] ?>"><?= $data['hubungan'] ?></option>
                                                                                    <?php endforeach ?>
                                                                                 </select>
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                 <label for="nama" class="form-label">Nama</label>
                                                                                 <input type="text" value="<?= $row['nama'] ?>" class="form-control" id="nama" name="nama">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                 <label for="telepon" class="form-label">No.Telepon</label>
                                                                                 <input type="text" value="<?= $row['telepon'] ?>" class="form-control" id="telepon" name="telepon">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                 <label for="alamat" class="form-label">Alamat</label>
                                                                                 <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="5"><?= $row['alamat'] ?></textarea>
                                                                              </div>
                                                                           </div>
                                                                           <div class="modal-footer">
                                                                              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                              <button type="submit" name="ubahkeluarga" class="btn btn-primary">Simpan</button>
                                                                           </div>
                                                                        </form>
                                                                     </div>
                                                                  </div>
                                                               </div>

                                                               <!-- Modal -->
                                                               <div class="modal fade" id="hapus<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                  <div class="modal-dialog">
                                                                     <div class="modal-content">
                                                                        <div class="modal-header">
                                                                           <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
                                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <form action="" method="POST">
                                                                           <input type="hidden" name="uid" value="<?= $id ?>">
                                                                           <input type="hidden" name="tipe" value="4">
                                                                           <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                                           <div class="modal-body">
                                                                              <p>Apakah anda yakin menghapus data keluarga <strong><?= $row['nama'] ?></strong> secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                                           </div>
                                                                           <div class="modal-footer">
                                                                              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                              <button type="submit" name="hapuskeluarga" class="btn btn-danger">Ya, Hapus</button>
                                                                           </div>
                                                                        </form>
                                                                     </div>
                                                                  </div>
                                                               </div>
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

                                 <div <?php if ($tipe == 5) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-idcard" role="tabpanel" aria-labelledby="pills-idcard-tab">
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
                                                      <table class="table" id="basic-8">
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
                                                            $query = tampildata("SELECT * FROM 	pasien_dokumen WHERE uid='$id'");
                                                            ?>
                                                            <?php foreach ($query as $row) : ?>
                                                               <tr>
                                                                  <td><?= $row['kategori'] ?></td>
                                                                  <td><?= $row['nomor'] ?></td>
                                                                  <td>
                                                                     <a href="../file/dokumen/<?= $row['dokumen'] ?>" target="_blank">
                                                                        <span class="badge bg-primary">Lihat File</span>
                                                                     </a>
                                                                  </td>
                                                                  <td><?= $row['berlaku'] ?></td>
                                                                  <td class="text-center col-2">
                                                                     <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubah<?= $row['id'] ?>">Ubah</button>
                                                                     <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?= $row['id'] ?>">Hapus</button>
                                                                  </td>
                                                               </tr>

                                                               <div class="modal fade" id="ubah<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                  <div class="modal-dialog">
                                                                     <div class="modal-content">
                                                                        <div class="modal-header">
                                                                           <h1 class="modal-title fs-5" id="staticBackdropLabel">Perubahan Data</h1>
                                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <form action="" method="POST" enctype="multipart/form-data">
                                                                           <input type="hidden" name="uid" value="<?= $id ?>">
                                                                           <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                                           <input type="hidden" name="tipe" value="5">
                                                                           <div class="modal-body">
                                                                              <div class="mb-3">
                                                                                 <label for="kategori" class="form-label">ID Tipe</label>
                                                                                 <?php
                                                                                 $query = tampildata("SELECT * FROM kategori_identitas");
                                                                                 ?>
                                                                                 <select name="kategori" id="kategori" class="form-select">
                                                                                    <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
                                                                                    <?php foreach ($query as $data) : ?>
                                                                                       <option value="<?= $data['kategori'] ?>"><?= $data['kategori'] ?></option>
                                                                                    <?php endforeach ?>
                                                                                 </select>
                                                                              </div>

                                                                              <div class="mb-3">
                                                                                 <label for="nomor" class="form-label">Nomor Dokumen</label>
                                                                                 <input type="text" class="form-control" value="<?= $row['nomor'] ?>" id="nomor" name="nomor">
                                                                              </div>
                                                                              <div class="mb-3">
                                                                                 <label for="dokumen" class="form-label">File</label>
                                                                                 <input type="file" class="form-control" id="dokumen" required="" name="dokumen">
                                                                              </div>
                                                                           </div>
                                                                           <div class="modal-footer">
                                                                              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                              <button type="submit" class="btn btn-primary" name="ubahdokumen">Simpan</button>
                                                                           </div>
                                                                        </form>
                                                                     </div>
                                                                  </div>
                                                               </div>

                                                               <!-- Modal -->
                                                               <div class="modal fade" id="hapus<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                  <div class="modal-dialog">
                                                                     <div class="modal-content">
                                                                        <div class="modal-header">
                                                                           <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
                                                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <form action="" method="POST">
                                                                           <input type="hidden" name="uid" value="<?= $id ?>">
                                                                           <input type="hidden" name="tipe" value="5">
                                                                           <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                                           <div class="modal-body">
                                                                              <p>Apakah anda yakin menghapus data dokumen <strong><?= $row['kategori'] ?></strong> secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                                           </div>
                                                                           <div class="modal-footer">
                                                                              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                              <button type="submit" name="hapusdokumen" class="btn btn-danger">Ya, Hapus</button>
                                                                           </div>
                                                                        </form>
                                                                     </div>
                                                                  </div>
                                                               </div>
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
                                 <div <?php if ($tipe == 6) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-catatan" role="tabpanel" aria-labelledby="pills-catatan-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="tipe" value="6">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="catatan" class="col-sm-2 col-form-label">Catatan</label>
                                                <div class="col-sm-10">
                                                   <textarea name="catatan" class="form-control" id="" cols="30" rows="10"><?= $catatan ?></textarea>
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
         <?php if (@$_SESSION['sukses']) { ?>
            <script>
               swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
            </script>
         <?php unset($_SESSION['sukses']);
         } ?>
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
               <input type="hidden" name="tipe" value="2">
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
                     <select name="institusi" id="institusi" class="form-select">
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
                           <input type="year" class="form-control" id="masuk" name="masuk">
                        </div>
                        <div class="col">
                           <label for="lulus" class="form-label">Tahun Lulus</label>
                           <input type="year" class="form-control" id="lulus" name="lulus">
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
               <input type="hidden" name="tipe" value="4">
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
               <input type="hidden" name="id" value="<?= $id ?>">
               <input type="hidden" name="tipe" value="5">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="kategori" class="form-label">ID Tipe</label>
                     <?php
                     $query = tampildata("SELECT * FROM kategori_identitas ");
                     ?>
                     <select name="kategori" id="kategori" class="form-select">
                        <option selected>Pilih Tipe Dokumen</option>
                        <?php foreach ($query as $row) : ?>
                           <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
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


   <script>
      var kab = document.getElementById('a');
      var kec = document.getElementById('b');
      var kel = document.getElementById('c');
      var prov = document.getElementById('provinsi');
      var kabu = document.getElementById('kabupaten');
      var kelu = document.getElementById('kecamatan');
      kab.style.display = 'none';
      kec.style.display = 'none';
      kel.style.display = 'none';

      $(document).ready(function() {
         $('body').on('change', '#provinsi', function() {
            if (prov.value == "") {
               kab.style.display = 'none';
               kec.style.display = 'none';
               kel.style.display = 'none';
            } else {
               kab.style.display = 'block';
               kec.style.display = 'none';
               kel.style.display = 'none';
            }
            var a = document.getElementById('provinsi').value;
            var data = "data=kab&no=" + a;
            $.ajax({
               type: 'GET',
               url: "admisi/proses.php",
               data: data,
               success: function(hasil) {
                  $("#kabupaten").html(hasil);
               },
               error: function() {
                  alert("Terjadi kesalahan saat mengambil data.");
               }
            })
         })
      })
      $(document).ready(function() {
         $('body').on('change', '#kabupaten', function() {
            if (kabu.value == "") {
               kec.style.display = 'none';
               kel.style.display = 'none';
            } else {
               kec.style.display = 'block';
               kel.style.display = 'none';
            }
            var a = document.getElementById('kabupaten').value;
            var data = "data=kec&no=" + a;
            $.ajax({
               type: 'GET',
               url: "admisi/proses.php",
               data: data,
               success: function(hasil) {
                  $("#kecamatan").html(hasil);
               },
               error: function() {
                  alert("Terjadi kesalahan saat mengambil data.");
               }
            })
         })
      })
      $(document).ready(function() {
         $('body').on('change', '#kecamatan', function() {
            if (kabu.value == "") {
               kel.style.display = 'none';
            } else {
               kel.style.display = 'block';
            }
            var a = document.getElementById('kecamatan').value;
            var data = "data=kel&no=" + a;
            $.ajax({
               type: 'GET',
               url: "admisi/proses.php",
               data: data,
               success: function(hasil) {
                  $("#kelurahan").html(hasil);
               },
               error: function() {
                  alert("Terjadi kesalahan saat mengambil data.");
               }
            })
         })
      })
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
   </script>
</body>

</html>