<?php
session_start();
$master = "V-Claim";
$page = "Data Integrasi SEP - INACBG";

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
                           <div class="col-sm-12">
                              <div class="input-group">
                                 <input type="text" class="form-control form-control-sm" placeholder="No.SEP">
                                 <button class=" btn btn-danger btn-sm">Cari</button>
                              </div>
                           </div>
                        </div>
                        <hr>
                        <div class="card">
                           <div class="card-header bg-success">
                              SEP - INACBG
                           </div>
                           <div class="card-body">
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.Kartu BPJS</label>
                                 <div class="col-sm-10">
                                    <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.Rujukan</label>
                                 <div class="col-sm-10">
                                    <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nama</label>
                                 <div class="col-sm-10">
                                    <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal Lahir</label>
                                 <div class="col-sm-10">
                                    <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jenis Kelamin</label>
                                 <div class="col-sm-10">
                                    <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.MR</label>
                                 <div class="col-sm-10">
                                    <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Kelas Rawat</label>
                                 <div class="col-sm-10">
                                    <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal Pelayanan</label>
                                 <div class="col-sm-10">
                                    <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tingkat Pelayanan</label>
                                 <div class="col-sm-10">
                                    <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
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