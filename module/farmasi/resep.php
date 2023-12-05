<?php
session_start();
$page = "Resep";
require '../../db/connect.php';
require 'view.php';
require '../../controller/farmasi/resep.php';
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
                           <li class="breadcrumb-item">Farmasi</li>
                           <li class="breadcrumb-item active"><?= $page ?> </li>
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
                              <ul class="nav nav-pills" id="pills-icontab" role="tablist">
                                 <li class="nav-item"><a class="nav-link active" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Poliklinik</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-iconprofile-tab" data-bs-toggle="pill" href="#pills-iconprofile" role="tab" aria-controls="pills-iconprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Unit Gawat Darurat</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-iconcontact-tab" data-bs-toggle="pill" href="#pills-iconcontact" role="tab" aria-controls="pills-iconcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Rawat Inap</a></li>
                              </ul>

                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-icontabContent">
                                 <div class="tab-pane fade show active" id="pills-iconhome" role="tabpanel" aria-labelledby="pills-iconhome-tab">
                                    <p class="mb-0 m-t-30">
                                    <div class="table-responsive">
                                       <table class="display table-striped" id="basic-1">
                                          <thead>
                                             <tr>
                                                <th></th>
                                                <th>Tgl.Masuk</th>
                                                <th>No.Pendaftaran</th>
                                                <th>No.RM</th>
                                                <th>Kode Booking</th>
                                                <th>Nama Pasien</th>
                                                <th>Catatan</th>
                                                <th class="text-center">Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <?php
                                             $query = tampildata("SELECT * FROM permintaan_resep LEFT OUTER JOIN pasien ON pasien.nomor_rm =  permintaan_resep.nomor_rm LEFT OUTER JOIN pasien_visit ON pasien_visit.nomor_rm = permintaan_resep.nomor_rm
                                            WHERE tipe='RJ' AND status=0")
                                             ?>
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
                                                   <td><?= $row['tanggal'] ?> <?= $row['waktu'] ?></td>
                                                   <td><?= $row['nopermintaan'] ?></td>
                                                   <td>
                                                      <a href="pasien"><?= $row['nomor_rm'] ?></a>
                                                   </td>
                                                   <td><?= $row['kodebooking'] ?></td>
                                                   <td><?= $row['nama_pasien'] ?></td>
                                                   <td><?= $row['catatan'] ?></td>
                                                   <td class="text-center col-1">
                                                      <a href="../controller/farmasi/approve?id=1&nopermintaan=<?= $row['nopermintaan'] ?>&rm=<?= $row['nomor_rm'] ?>">
                                                         <button class="btn btn-sm btn-primary">Terima</button>
                                                      </a>
                                                   </td>
                                                </tr>
                                             <?php endforeach ?>
                                          </tbody>
                                       </table>
                                       <hr>
                                       Keterangan Warna : <span class="badge bg-warning">Masuk</span>
                                       <span class="badge bg-danger">Antrian</span> <span class="badge bg-success">Dilayani</span>
                                       <span class="badge bg-dark">Selesai</span>
                                    </div>
                                    </p>
                                 </div>
                                 <div class="tab-pane fade" id="pills-iconprofile" role="tabpanel" aria-labelledby="pills-iconprofile-tab">
                                    <p class="mb-0 m-t-30">
                                    <div class="table-responsive">
                                       <table class="display table-striped" id="basic-2">
                                          <thead>
                                             <tr>
                                                <th></th>
                                                <th>Tgl.Masuk</th>
                                                <th>No.Pendaftaran</th>
                                                <th>No.RM</th>
                                                <th>Nama Pasien</th>
                                                <th>Resep</th>
                                                <th class="text-center">Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <?php
                                             $query = tampildata("SELECT * FROM permintaan_resep LEFT OUTER JOIN pasien ON pasien.nomor_rm =  permintaan_resep.nomor_rm
                                           WHERE tipe='UGD'")
                                             ?>
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
                                                   <td><?= $row['tanggal'] ?> <?= $row['waktu'] ?></td>
                                                   <td><?= $row['nopermintaan'] ?></td>
                                                   <td>
                                                      <a href="pasien"><?= $row['nomor_rm'] ?></a>
                                                   </td>
                                                   <td><?= $row['nama_pasien'] ?></td>
                                                   <td class="col-4">
                                                      <?php
                                                      $rm = $row['nomor_rm'];
                                                      $no = $row['nopermintaan'];
                                                      $query = tampildata("SELECT * FROM permintaan_resep_detail WHERE nomor_rm='$rm' AND nopermintaan='$no'");
                                                      ?>
                                                      <ol class="list-group list-group-numbered">
                                                         <?php foreach ($query as $data) : ?>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                               <div class="ms-2 me-auto">
                                                                  <div class="fw-bold"><?= $data['resep'] ?></div>
                                                                  <p>Satuan : <?= $data['satuan'] ?></p>
                                                                  <p>Catatan : <?= $data['catatan'] ?></p>
                                                               </div>
                                                               <span class="badge bg-primary rounded-pill"><?= $data['signa'] ?></span>
                                                            </li>
                                                         <?php endforeach ?>
                                                      </ol>
                                                   </td>
                                                   <td class="text-center col-1">
                                                      <a href="../controller/farmasi/approve?id=1&nopermintaan=<?= $row['nopermintaan'] ?>&rm=<?= $row['nomor_rm'] ?>">
                                                         <button class="btn btn-sm btn-primary">Terima</button>
                                                      </a>
                                                   </td>
                                                </tr>
                                             <?php endforeach ?>
                                          </tbody>
                                       </table>
                                       <hr>
                                       Keterangan Warna : <span class="badge bg-warning">Masuk</span>
                                       <span class="badge bg-danger">Antrian</span> <span class="badge bg-success">Dilayani</span>
                                       <span class="badge bg-dark">Selesai</span>
                                    </div>
                                    </p>
                                 </div>
                                 <div class="tab-pane fade" id="pills-iconcontact" role="tabpanel" aria-labelledby="pills-iconcontact-tab">
                                    <p class="mb-0 m-t-30">
                                    <div class="table-responsive">
                                       <table class="display table-striped" id="basic-3">
                                          <thead>
                                             <tr>
                                                <th></th>
                                                <th>Tgl.Masuk</th>
                                                <th>No.Pendaftaran</th>
                                                <th>No.RM</th>
                                                <th>Nama Pasien</th>
                                                <th>Resep</th>
                                                <th class="text-center">Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <?php
                                             $query = tampildata("SELECT * FROM permintaan_resep LEFT OUTER JOIN pasien ON pasien.nomor_rm =  permintaan_resep.nomor_rm
                                            WHERE tipe='RI'")
                                             ?>
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
                                                   <td><?= $row['tanggal'] ?> <?= $row['waktu'] ?></td>
                                                   <td><?= $row['nopermintaan'] ?></td>
                                                   <td>
                                                      <a href="pasien"><?= $row['nomor_rm'] ?></a>
                                                   </td>
                                                   <td><?= $row['nama_pasien'] ?></td>
                                                   <td class="col-4">
                                                      <?php
                                                      $rm = $row['nomor_rm'];
                                                      $no = $row['nopermintaan'];
                                                      $query = tampildata("SELECT * FROM permintaan_resep_detail WHERE nomor_rm='$rm' AND nopermintaan='$no'");
                                                      ?>
                                                      <ol class="list-group list-group-numbered">
                                                         <?php foreach ($query as $data) : ?>
                                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                               <div class="ms-2 me-auto">
                                                                  <div class="fw-bold"><?= $data['resep'] ?></div>
                                                                  <p>Satuan : <?= $data['satuan'] ?></p>
                                                                  <p>Catatan : <?= $data['catatan'] ?></p>
                                                               </div>
                                                               <span class="badge bg-primary rounded-pill"><?= $data['signa'] ?></span>
                                                            </li>
                                                         <?php endforeach ?>
                                                      </ol>
                                                   </td>
                                                   <td class="text-center col-1">
                                                      <a href="../controller/farmasi/approve?id=1&nopermintaan=<?= $row['nopermintaan'] ?>&rm=<?= $row['nomor_rm'] ?>">
                                                         <button class="btn btn-sm btn-primary">Terima</button>
                                                      </a>
                                                   </td>
                                                </tr>
                                             <?php endforeach ?>
                                          </tbody>
                                       </table>
                                       <hr>
                                       Keterangan Warna : <span class="badge bg-warning">Masuk</span>
                                       <span class="badge bg-danger">Antrian</span> <span class="badge bg-success">Dilayani</span>
                                       <span class="badge bg-dark">Selesai</span>
                                    </div>
                                    </p>
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