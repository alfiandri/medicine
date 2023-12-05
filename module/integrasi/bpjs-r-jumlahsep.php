<?php
session_start();
$master = "V-Claim ";
$page = "Jumlah SEP";

?>

<head>
   <base href="../">
   <?php
   require 'head.php';
   ?>
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
                           <li class="breadcrumb-item">Rujukan</li>
                           <li class="breadcrumb-item active"><?= $page ?> </li>
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
                           <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jenis Rujukan</label>
                           <div class="col-sm-10">
                              <select name="" class="form-select form-select-sm" id="">
                                 <option value="">Pilih</option>
                              </select>
                           </div>
                        </div>
                        <div class="mb-1 row">
                           <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No. Rujukan</label>
                           <div class="col-sm-10">
                              <input type="text" class="form-control form-control-sm" id="inputPassword">
                           </div>
                        </div>
                        <div class="mb-1 row">
                           <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                           <div class="col-sm-10">
                              <button class="btn btn-success btn-sm">Proses</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-sm-12">
                  <div class="card">
                     <div class="card-body">
                        <div class="mb-1 row">
                           <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No. Rujukan</label>
                           <div class="col-sm-10">
                              <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                           </div>
                        </div>
                        <div class="mb-1 row">
                           <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jenis Rujukan</label>
                           <div class="col-sm-10">
                              <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                           </div>
                        </div>
                        <div class="mb-1 row">
                           <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jumlah SEP</label>
                           <div class="col-sm-10">
                              <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                           </div>
                        </div>
                        <div class="mb-1 row">
                           <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Status</label>
                           <div class="col-sm-10">
                              <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
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