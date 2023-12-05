<?php
$page = "Display Tempat Tidur";
require 'view.php';
$query = tampildata("SELECT * FROM kamar_ketersediaan_tempattidur");
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
                           <li class="breadcrumb-item">Aplicares</li>
                           <li class="breadcrumb-item active"><?= $page ?> </li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="row">
                  <?php foreach ($query as $row) : ?>
                     <div class="col-sm-6 col-xl-6 col-lg-6">
                        <div class=" card o-hidden">
                           <div class="bg-primary b-r-4 card-body">
                              <div class="media static-top-widget">
                                 <div class="align-self-center text-center"><i data-feather="database"></i></div>
                                 <div class="media-body">
                                    <span class="m-0"><?= $row['namaruang'] ?>
                                    </span>
                                    <h4 class="mb-0 counter">Kapasitas : <?= $row['kapasitas'] ?> | Tersedia : <?= $row['tersedia'] ?></h4><i class="icon-bg" data-feather="database"></i>
                                    <p>Update : <?= $row['create_at'] ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php endforeach ?>
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