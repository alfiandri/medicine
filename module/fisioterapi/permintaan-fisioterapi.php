<?php
session_start();
$page = "Pemeriksaan Fisioterapi";
require '../db/connect.php';
require '../controller/view.php';
require '../controller/admisi.php';
$query = tampildata("SELECT * FROM pasienVisit LEFT OUTER JOIN pasien ON pasien.uidPasien = pasienVisit.uidPasien WHERE sumber='RI' AND statusFisoterapi=0");
$data = mysqli_query($koneksi, "SELECT id FROM pasienVisit WHERE sumber='RI' AND statusFisoterapi=0 ");
$totaldata = mysqli_num_rows($data);
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
                        <h3>Permintaan Fisioterapi</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">FO Permintaan</li>
                           <li class="breadcrumb-item active">Fisioterapi </li>
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
                                    <strong><?= number_format($totaldata) ?></strong> antrian pasien
                                 </p>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display table-striped" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th></th>
                                          <th>Tgl.Masuk</th>
                                          <th>No.Pendaftaran</th>
                                          <th>No.RM</th>
                                          <th>Pasien</th>
                                          <th>Umur</th>
                                          <th>Dignosis</th>
                                          <th class="text-center">Aksi</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['statusVisit'];
                                             if ($status == 0) {
                                                $color = 'warning';
                                             } else if ($status == 1) {
                                                $color = 'danger';
                                             } else if ($status == 2) {
                                                $color = 'dark';
                                             } else if ($status == 3) {
                                                $color = 'success';
                                             } else if ($status == 4) {
                                                $color = 'secondary';
                                             } else if ($status == 5) {
                                                $color = 'info';
                                             } else if ($status == 6) {
                                                $color = 'primary';
                                             }
                                             ?>
                                             <td class="bg-<?= $color ?>"></td>
                                             <td><?= $row['tanggal'] ?> <?= $row['waktu'] ?></td>
                                             <td><?= $row['nomorRegistrasi'] ?></td>
                                             <td>
                                                <a href="pasien"><?= $row['nomorRM'] ?></a>
                                             </td>
                                             <td><?= $row['namaPasien'] ?></td>
                                             <td><?= $row['usia'] ?></td>
                                             <td><?= $row['diagnosa'] ?></td>
                                             <td class="text-center col-1">
                                                <a href="permintaan-list?id=<?= $row['uidPasien'] ?>&no=<?= $row['nomorRegistrasi'] ?>">
                                                   <button class="btn btn-sm btn-primary">Pemeriksaan</button>
                                                </a>
                                             </td>
                                          </tr>


                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <hr>
                        Keterangan Warna : <span class="badge bg-warning">Registrasi</span>
                        <span class="badge bg-danger">Antrian</span> <span class="badge bg-success">Dilayani</span>
                        <span class="badge bg-dark">Batal</span> <span class="badge bg-secondary">Selesai</span>
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

   <?php
   require 'library.php';
   ?>
</body>

</html>