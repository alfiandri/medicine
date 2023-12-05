<?php
$page = "Askep RJ";
require '../controller/view.php';
$query = tampildata("SELECT * FROM pasienVisit INNER JOIN pasien ON pasien.uidPasien = pasienVisit.uidPasien");
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
                        <h3>Asuhan Keperawatan</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">ASKEP</li>
                           <li class="breadcrumb-item active">Pelayanan RJ </li>
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
                                          <th class="w-1"></th>
                                          <th>No.RM</th>
                                          <th>Nama Pasien</th>
                                          <th>Tanggal Masuk</th>
                                          <th>Poliklinik</th>
                                          <th>Jaminan</th>
                                          <th>Status Pasien</th>
                                          <th class="text-center">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['statusVisit'];
                                             if ($status == 0) { //Belum Verifikasi
                                                $color = 'warning';
                                             } else if ($status == 1) { //Daftar
                                                $color = 'success';
                                             } else if ($status == 2) { //Dilayanu
                                                $color = 'gray text-dark';
                                             } else if ($status == 3) { //Batal
                                                $color = 'dark';
                                             } else if ($status == 5) { //Dipulangkan
                                                $color = 'secondary';
                                             } else if ($status == 6) { //Rujukan
                                                $color = 'info';
                                             }
                                             ?>
                                             <td class="bg-<?= $color ?>"></td>
                                             <td><?= $row['nomorRM'] ?></td>
                                             <td><?= $row['namaPasien'] ?></td>
                                             <td><?= $row['createAt'] ?></td>
                                             <td><?= $row['layanan'] ?></td>
                                             <td><?= $row['jenisBayar'] ?></td>
                                             <?php
                                             $statusPasien = $row['statusPasien'];
                                             if ($statusPasien == 1) {
                                                $ket = 'Baru';
                                             } else {
                                                $ket = 'Baru';
                                             }
                                             ?>
                                             <td><?= $ket ?></td>
                                             <td class="text-center col-2">
                                                <a href="askep-rj-layani?id=<?= $row['uidPasien'] ?>">
                                                   <button class="btn btn-sm btn-primary">Layani</button>
                                                </a>
                                                <a href="askep-rj-rm?id=<?= $row['uidPasien'] ?>">
                                                   <button class="btn btn-sm btn-danger">Lihat RM</button>
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
                        Keterangan Warna : <span class="badge bg-warning">Belum Verifikasi</span>
                        <span class="badge bg-success">Daftar</span> <span class="badge bg-gray text-dark">Dilayani</span>
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