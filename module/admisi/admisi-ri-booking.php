<?php
session_start();
$page = "Admisi RI";
require '../../db/connect.php';
require 'view.php';
$query = tampildata("SELECT * FROM pasien_visit LEFT OUTER JOIN pasien ON pasien.uid_pasien = pasien_visit.uid_pasien WHERE sumber='RI'");
$data = mysqli_query($koneksi, "SELECT id FROM pasien_visit WHERE sumber='RI'");
$totaldata = mysqli_num_rows($data);
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
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Pusat Registrasi</li>
                           <li class="breadcrumb-item active"><?= $page ?></li>
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

                              <div class="media">
                                 <p>Hari ini kamu memiliki
                                    <strong>1</strong> Antrian Pasien
                                 </p>
                                 <div class="media-body text-end">
                                    <a href="admisi/admisi-ri">
                                       <div class="btn btn-light btn-sm"> <i data-feather="chevron-left"></i>Kembali</div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th></th>
                                          <th>Masuk</th>
                                          <th>No.Pendaftaran</th>
                                          <th>No.RM</th>
                                          <th>Pasien</th>
                                          <th>Dokter</th>
                                          <th>Ruangan</th>
                                          <th class="text-center">Aksi</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['status_visit'];
                                             if ($status == 0) {
                                                $color = 'success';
                                             } else if ($status == 1) {
                                                $color = 'danger';
                                             } else if ($status == 2) {
                                                $color = 'dark';
                                             } else if ($status == 3) {
                                                $color = 'warning';
                                             } else if ($status == 4) {
                                                $color = 'info';
                                             }
                                             ?>
                                             <td class="bg-<?= $color ?>"></td>
                                             <td><?= $row['tanggal'] ?> <?= $row['waktu'] ?></td>
                                             <td><?= $row['nomor_visit'] ?></td>
                                             <td>
                                                <a href="pasien"><?= $row['nomor_rm'] ?></a>
                                             </td>
                                             <td><?= $row['nama_pasien'] ?></td>
                                             <td><?= $row['dokter'] ?></td>
                                             <td><?= $row['ruangan'] ?></td>
                                             <td class="text-center">
                                                <a href="rawat-inap-status?id=<?= $row['uid_pasien'] ?>">
                                                   <button class="btn btn-danger">Status</button>
                                                </a>
                                             </td>
                                          </tr>
                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
                              </div>
                              <hr>
                              Keterangan Warna :
                              <span class="badge bg-success">Dilayani</span> <span class="badge bg-danger">Naik Kelas</span>
                              <span class="badge bg-dark">Batal</span> <span class="badge bg-warning">Titip Kamar</span>
                              <span class="badge bg-primary">Pulang</span>
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
   <!-- Plugin used-->
</body>

</html>