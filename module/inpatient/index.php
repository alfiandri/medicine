<?php
session_start();
$page = "Home";
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
                        <h3>Rawat Jalan</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Home</li>
                           <li class="breadcrumb-item active">Rawat Jalan </li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="row second-chart-list third-news-update">
                  <div class="col-xl-12 col-lg-12 xl-100 morning-sec box-col-12">
                     <div class="card o-hidden profile-greeting">
                        <div class="card-body">
                           <div class="media">
                              <div class="badge-groups w-100">
                                 <div class="badge f-12"><i class="me-1" data-feather="clock"></i><span id="txt"></span></div>
                                 <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
                              </div>
                           </div>
                           <div class="greeting-user text-center">
                              <div class="profile-vector"><img class="img-fluid" src="../assets/images/dashboard/welcome.png" alt=""></div>
                              <h4 class="f-w-600"><span class="text-dark" id="">OVERVIEW MODUL RAWAT JALAN</span> <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
                              <p><span class="text-dark">
                                    Melihat history dan riwayat pasien, informasi tagihan serta pembatalan pendaftaran rawat jalan. Pencatatan tanda vital, anamnesa, ICD 9,ICD 10, tindakan BHP, Resep,Penunjang dan Pemberkasan RM. Terintegrasi dengan Apotek, Rawat Inap, Penunjang Medis,termasuk konsul ke unit Rawat Jalan lainnya.
                                 </span></p>
                              <p><span class="text-dark">Anda Punya Pertanyaan ? Silahkan Kunjungi <a href="javascript:;"> Pusat Bantuan</a></span></p>
                              <div class="whatsnew-btn"><a class="btn btn-primary">Apa yang baru !</a></div>

                              <div class="left-icon"><i class="fa fa-bell"></i></div>
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