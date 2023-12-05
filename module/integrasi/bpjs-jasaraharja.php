<?php
session_start();
$master = "V-Claim";
$page = "Suplesi Jasa Raharja";

?>

<head>
   <base href="../">
   <?php require 'head.php'; ?>
</head>

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
                        <div class="mb-1 row">
                           <div class="col-sm-8">
                              <input type="text" class="form-control form-control-sm" placeholder="Nomor Kartu Peserta" name="" id="">
                           </div>
                           <div class="col-sm-4">
                              <div class="input-group">
                                 <input type="date" class="form-control form-control-sm">
                                 <button class=" btn btn-danger btn-sm">Cari</button>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                           <table class="display table-sm" id="basic-1">
                              <thead>
                                 <tr>
                                    <th>No</th>
                                    <th>No.Register</th>
                                    <th>No.SEP</th>
                                    <th>No.SEP Awal</th>
                                    <th>No.SRT Jaminan</th>
                                    <th>Tgl.Kejadian</th>
                                    <th>Tgl.SEP</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid Ends-->
         </div>
         <!-- Page Sidebar Ends-->

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