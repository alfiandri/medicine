<?php
session_start();
$page = "Admisi Monitoring";
require '../../db/connect.php';
require 'view.php';
$query = tampildata("SELECT * FROM admisi_jkn ");
$data = mysqli_query($koneksi, "SELECT id FROM admisi_jkn");
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
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>No.Booking</th>
                                          <th>Tanggal</th>
                                          <th>Waktu</th>
                                          <th>Poliklinik</th>
                                          <th>Dokter</th>
                                          <th>Jenis</th>
                                          <th>Task ID</th>
                                          <th class="text-center">No.Antrian</th>
                                          <th class="text-center">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <td><?= $row['kodebooking'] ?></td>
                                             <td><?= $row['tanggalperiksa'] ?></td>
                                             <td><?= $row['estimasidilayani'] ?></td>
                                             <td><?= $row['namapoli'] ?></td>
                                             <td><?= $row['namadokter'] ?></td>
                                             <td><?= $row['jeniskunjungan'] ?></td>
                                             <td><?= $row['task_id'] ?></td>
                                             <td class="text-center"><?= $row['nomorantrean'] ?></td>
                                             <td class="text-center">
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#task<?= $row['id'] ?>">Task ID</button>
                                             </td>
                                          </tr>

                                          <!-- Modal -->
                                          <div class="modal fade" id="task<?= $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                             <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="exampleModalLabel">List Task ID</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <div class="modal-body">
                                                      <ol class="list-group list-group-numbered">
                                                         <?php
                                                         $kode = $row['kodebooking'];
                                                         $query = tampildata("SELECT * FROM admisi_taskid WHERE kodebooking='$kode'");
                                                         ?>
                                                         <?php foreach ($query as $data) : ?>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                               <div class="ms-2 me-auto">
                                                                  <div class="fw-bold"><?= $data['waktu'] ?></div>
                                                                  <?php
                                                                  $task = $data['task_id'];
                                                                  if ($task == 1) {
                                                                     $keterangan = "Pasien Antrian Pelayanan Loket Admisi";
                                                                  } else if ($task == 2) {
                                                                     $keterangan = "Pasien Selesai Pelayanan Registrasi";
                                                                  } else if ($task == 3) {
                                                                     $keterangan = "Pasien Antrian Pelayanan Poliklinik";
                                                                  } else if ($task == 4) {
                                                                     $keterangan = "Pasien Sedang Pemeriksaan Di Poli";
                                                                  } else if ($task == 5) {
                                                                     $keterangan = "Pasien Selesai Pemeriksaan";
                                                                  } else if ($task == 6) {
                                                                     $keterangan = "Pasien Antrian Obat di Farmasi";
                                                                  } else if ($task == 7) {
                                                                     $keterangan = "Pasien Telah Menerima Obat dan Pulang";
                                                                  }
                                                                  ?>
                                                                  <p><?= $keterangan ?></p>
                                                               </div>
                                                               <span class="badge bg-primary rounded-pill"><?= $data['task_id'] ?></span>
                                                            </li>
                                                         <?php endforeach ?>
                                                      </ol>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
                              </div>
                              <!-- Keterangan Warna :
                              <span class="badge bg-success">Pasien Baru</span> <span class="badge bg-danger">Pasien Lama</span> -->
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