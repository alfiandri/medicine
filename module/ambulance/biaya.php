<?php
$path = 'master';
$page = "Permintaan Ambulance";
require '../admin/view.php';
require '../../controller/ambulance/master.php';
$query = tampildata("SELECT * FROM permintaan_ambulance");
$data = mysqli_query($koneksi, "SELECT id FROM permintaan_ambulance");
$totaldata = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require '../admin/head.php';
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
      require '../admin/header.php';
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
                        <h3>Permintaan</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Ambulance</li>
                           <li class="breadcrumb-item active">Permintaan</li>
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
                                 <p>Total data
                                    <strong><?= $totaldata ?></strong> <?= $page ?>
                                 </p>
                                 <div class="media-body text-end">
                                    <!-- <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add"> <i data-feather="plus-square"></i>Tambah</div> -->
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display" id="basic-2">
                                    <thead>
                                       <tr>
                                          <th class="col-1"></th>
                                          <th>No.Permintaan</th>
                                          <th>Nama</th>
                                          <th>Tanggal</th>
                                          <th>Tujuan</th>
                                          <th>Supir</th>
                                          <th>Plat</th>
                                          <th>Total</th>
                                          <th class="text-center col-1">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['status'];
                                             if ($status == 1) {
                                                $warna = 'bg-success'; //Active
                                             } else if ($status == 0) {
                                                $warna = 'bg-danger'; //InActive
                                             }
                                             ?>
                                             <td class="<?= $warna ?>"></td>
                                             <td><?= $row['nopermintaan'] ?></td>
                                             <td><?= $row['nama'] ?></td>
                                             <td><?= $row['tanggal'] ?></td>
                                             <td><?= $row['tujuan'] ?></td>
                                             <td><?= $row['supir'] ?></td>
                                             <td><?= $row['plat'] ?></td>
                                             <td>
                                                <?php
                                                $no = $row['nopermintaan'];
                                                $totalitem = mysqli_query($koneksi, "SELECT SUM(biaya) as total FROM ambulance_biaya WHERE nopermintaan='$no'");
                                                $dataitemidr = mysqli_fetch_array($totalitem);
                                                $itemidr = $dataitemidr['total'];
                                                ?>
                                                <?= number_format($itemidr) ?>
                                             </td>
                                             <td class="text-center col-1">
                                                <a href="ambulance/biaya-detail?id=<?= $row['nopermintaan'] ?>">
                                                   <button class="btn btn-primary">Tambah</button>
                                                </a>
                                             </td>
                                          </tr>

                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
                                 <hr>
                                 Keterangan Warna : <span class="badge bg-success">Active</span>
                                 <span class="badge bg-danger">InActive</span>
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
   include '../admin/library.php';
   ?>
</body>

</html>