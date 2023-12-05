<?php
$page = "Admisi UGD";
require '../db/connect.php';
require '../controller/view.php';
require '../controller/admisi.php';
$query = tampildata("SELECT * FROM pasienVisit LEFT OUTER JOIN pasien ON pasien.uidPasien = pasienVisit.uidPasien WHERE visitor=2");
$data = mysqli_query($koneksi, "SELECT id FROM pasienVisit WHERE visitor=2");
$totaldata = mysqli_num_rows($data);
$datanatrian = mysqli_query($koneksi, "SELECT * FROM pasienVisit WHERE visitor=2");
$antrian = mysqli_num_rows($datanatrian);
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
                        <h3>Rawat Darurat</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">FO Registrasi</li>
                           <li class="breadcrumb-item active">Rawat Darurat </li>
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
                                 <div class="media-body text-end">
                                    <a href="admisi-list?id=2">
                                       <div class="btn btn-primary btn-sm"> <i data-feather="list"></i>Daftar Pasien</div>
                                    </a>
                                    <a href="admisi-booking?id=2">
                                       <div class="btn btn-primary btn-sm"> <i data-feather="list"></i>Pasien Booking</div>
                                    </a>
                                    <a href="admisi-add">
                                       <div class="btn btn-primary btn-sm"> <i data-feather="plus-square"></i>Pasien Baru</div>
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
                                          <th>Tgl.Masuk</th>
                                          <th>No.Pendaftaran</th>
                                          <th>No.RM</th>
                                          <th>Pasien</th>
                                          <th>Poli</th>
                                          <th>Dokter IGD</th>
                                          <th>PJ</th>
                                          <th class="text-center"></th>
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
                                             }
                                             ?>
                                             <td class="bg-<?= $color ?>"></td>
                                             <td><?= $row['tanggalVisit'] ?> <?= $row['waktuVisit'] ?></td>
                                             <td><?= $row['nomorRawat'] ?></td>
                                             <td>
                                                <a href="pasien"><?= $row['nomorRM'] ?></a>
                                             </td>
                                             <td><?= $row['namaPasien'] ?></td>
                                             <td><?= $row['layanan'] ?></td>
                                             <td><?= $row['dokter'] ?></td>
                                             <td class="text-center"><?= $row['PJ'] ?></td>
                                             <td class="text-center col-1">
                                                <a href="gawat-darurat-status?id=<?= $row['uidPasien'] ?>">
                                                   <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#batal<?= $row['id'] ?>">Status</button>
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
                        <span class="badge bg-danger">Rawat Inap</span> <span class="badge bg-success">Pulang</span>
                        <span class="badge bg-dark">Intensive Care</span> <span class="badge bg-secondary">Exit</span>
                        <span class="badge bg-info">Batal</span>
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