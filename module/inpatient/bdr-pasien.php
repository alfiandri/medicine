<?php
session_start();
$page = "BDR";
require 'view.php';
$query = tampildata("SELECT * FROM pasien_visit LEFT OUTER JOIN pasien ON pasien.uid_pasien = pasien_visit.uid_pasien");
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
                        <h3>BDR</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">BDR</li>
                           <li class="breadcrumb-item active">Data Pasien </li>
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
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th></th>
                                          <th>No.RM</th>
                                          <th>Nama Pasien</th>
                                          <th>Tanggal Masuk</th>
                                          <th>Poliklinik</th>
                                          <th>Jaminan</th>
                                          <th class="text-center">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['status_visit'];
                                             if ($status == 1) {
                                                $color  = 'success';
                                             } else if ($status == 2) {
                                                $color = 'warning';
                                             } else if ($status == 3) {
                                                $color = 'dark';
                                             } else if ($status == 4) {
                                                $color = 'secondary';
                                             } else {
                                                $color = 'info';
                                             }
                                             ?>
                                             <td class="bg-<?= $color ?>"></td>
                                             <td><?= $row['nomor_rm'] ?></td>
                                             <td><?= $row['nama_pasien'] ?></td>
                                             <td><?= $row['create_at'] ?></td>
                                             <td><?= $row['layanan'] ?></td>
                                             <td><?= $row['jenis_bayar'] ?></td>
                                             <td class="text-center col-2">
                                                <a href="inpatient/bdr-pasien-ass?id=<?= $row['uid_pasien'] ?>&no=<?= $row['nomor_visit'] ?>">
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
                        Keterangan Warna : <span class="badge bg-warning">Dilayani</span>
                        <span class="badge bg-success">Daftar</span>
                        <span class="badge bg-dark">Batal</span> <span class="badge bg-secondary">Dipulangkan</span>
                        <span class="badge bg-info">Rujukan</span>
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