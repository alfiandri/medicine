<?php
session_start();
$master = "Rawat Jalan";
$page = "Monitoring";
require 'head.php';
require '../db/connect.php';
require '../controller/view.php';
require '../controller/admisi.php';
$query = tampildata("SELECT * FROM pasien_visit LEFT OUTER JOIN pasien ON pasien.uid_pasien = pasien_visit.uid_pasien");
$data = mysqli_query($koneksi, "SELECT id FROM pasien_visit");
$totaldata = mysqli_num_rows($data);
$datanatrian = mysqli_query($koneksi, "SELECT * FROM pasien_visit");
$antrian = mysqli_num_rows($datanatrian);
?>

<body>
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
                           <li class="breadcrumb-item"><?= $master ?></li>
                           <li class="breadcrumb-item active"><?= $page ?></li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="col-sm-12">
                  <div class="card">
                     <div class="card-body">
                        <div class="table-responsive">
                           <table class="display table-sm" id="basic-1">
                              <thead>
                                 <tr>
                                    <th></th>
                                    <th>No.Register</th>
                                    <th>No.RM</th>
                                    <th>Nama</th>
                                    <th>TTL</th>
                                    <th>Layanan</th>
                                    <th>Dokter</th>
                                    <th>Tanggal</th>
                                    <th>Jaminan</th>
                                    <th>Timestamp</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($query as $row) : ?>
                                    <tr>
                                       <?php
                                       $status = $row['status_visit'];
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
                                       <td><?= $row['nomor_visit'] ?></td>
                                       <td><?= $row['nomor_rm'] ?></td>
                                       <td><?= $row['nama_pasien'] ?></td>
                                       <td><?= $row['tempat_lahir'] ?>/<?= $row['tanggal_lahir'] ?></td>
                                       <td><?= $row['layanan'] ?></td>
                                       <td><?= $row['dokter'] ?></td>
                                       <td><?= $row['tanggal'] ?></td>
                                       <td><?= $row['jenis_bayar'] ?></td>
                                       <td><?= $row['create_at'] ?></td>
                                    </tr>
                                 <?php endforeach ?>
                              </tbody>
                           </table>
                        </div>
                        <hr>
                        Keterangan Warna : <span class="badge bg-warning">Registrasi</span>
                        <span class="badge bg-danger">Antrian</span> <span class="badge bg-success">Dilayani</span>
                        <span class="badge bg-dark">Batal</span> <span class="badge bg-secondary">Dipulangkan</span>
                        <span class="badge bg-info">Rujukan</span><span class="badge bg-primary">Checkin JKN</span>
                     </div>

                  </div>
               </div>
            </div>
            <!-- Container-fluid Ends-->
         </div>
         <!-- Page Sidebar Ends-->

         <!-- footer start-->
         <?php
         require '../template/footer.php';
         ?>
      </div>
   </div>

   <?php
   include 'library.php';
   ?>
</body>

</html>