<?php
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
                        <h3>Kasir</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Home</li>
                           <li class="breadcrumb-item active">Kasir </li>
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
                              <h4 class="f-w-600"><span class="text-dark" id="">OVERVIEW MODUL KASIR</span> <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
                              <p><span class="text-dark">
                                    Kasir terpusat untuk semua pelayanan, review semua tagihan, termasuk kartu pasien, biaya naik kelas dan biaya non layanan. Melayani pembayaran cash, kredit, debit dan transfer. Termasuk penerimaman deposit, refund dan penerapan diskon. Cetak tagihan secara rinci atau terpisah, per unit atau tindakan, Bisa menggabungkan rincian tagihan beberapa pasien. Pelunasan hutang piutang pasien dengan mudah dan cepat disertai notifikasi. Perhitungan jasa dokter secara otomatis dan pembayaranyya. Tukar faktur, pelunsana hutang vendor, pengajuan dan pelunasan klaim asuransi, reimburse dan mencetak semua laporan uang masuk dan keluar secara lengkap per periode, per unit, per aktivitas yang bisa di export ke excel dan PDF
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
   <?php
   require 'library.php';
   ?>
</body>

</html>