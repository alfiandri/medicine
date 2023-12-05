<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">


<head>
   <base href="../">
   <?php
   $page = "Home";
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
                        <h3>Fisioterapi</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Home</li>
                           <li class="breadcrumb-item active">Fisioterapi </li>
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
                              <h4 class="f-w-600"><span class="text-dark" id="">OVERVIEW MODUL FISIOTERAPI</span> <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
                              <p><span class="text-dark">
                                    Tindakan rehabilitasi pada pasien pascacedera atau mengalami penyakit tertentu dengan tujuan meminimalisir keterbatasan fisik, dapat melihat order pemeriksaan, riwayat pemeriksaan, treatment fisoterapi dan penggunaan obat dan BMHP dalam mendukung layanan fisioterapi.
                                 </span></p>
                              <p><span class="text-dark">Anda Punya Pertanyaan ? Silahkan Kunjungi <a href="javascript:;"> Pusat Bantuan</a></span></p>
                              <div class="whatsnew-btn"><a class="btn btn-primary">Whats New !</a></div>

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
   <script src="../assets/js/chart/chartist/chartist.js"></script>
   <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
   <script src="../assets/js/chart/knob/knob.min.js"></script>
   <script src="../assets/js/chart/knob/knob-chart.js"></script>
   <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
   <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
   <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
   <script src="../assets/js/dashboard/default.js"></script>
   <script src="../assets/js/notify/index.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
   <script src="../assets/js/typeahead/handlebars.js"></script>
   <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
   <script src="../assets/js/typeahead/typeahead.custom.js"></script>
   <script src="../assets/js/typeahead-search/handlebars.js"></script>
   <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
   <!-- Plugins JS Ends-->
   <!-- Theme js-->
   <script src="../assets/js/script.js"></script>

   <!-- login js-->
   <!-- Plugin used-->
</body>

</html>