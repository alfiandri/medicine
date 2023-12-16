<?php
session_start();
$page = "Tindakan RJ";
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
                        <h3>Tindakan RJ</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Tindakan</li>
                           <li class="breadcrumb-item active">Rawat Jalan </li>
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
                                 <div class="media-body text-end">
                                    <a href="inpatient/askep-rj">
                                       <div class="btn btn-primary btn-sm"> <i data-feather="list"></i>ASKEP RJ</div>
                                    </a>
                                    <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#datahis"> <i data-feather="list"></i>Data HIS</div>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th></th>
                                          <th>Klinik</th>
                                          <th>Dokter</th>
                                          <th>No.Pendaftaran</th>
                                          <th>Masuk</th>
                                          <th>No.RM</th>
                                          <th>Pasien</th>
                                          <th>Alamat</th>
                                          <th>L/P</th>
                                          <th>Jaminan</th>
                                          <th class="text-center">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td class="bg-success">
                                          </td>
                                          <td>Poli Gigi</td>
                                          <td>drg. Budi Santoso</td>
                                          <td>RJ0129312031</td>
                                          <td>21-08-2023 16:34:22</td>
                                          <td>00001</td>
                                          <td>Jaka Prayudha</td>
                                          <td>Jl.Gaharu</td>
                                          <td>L</td>
                                          <td>Umum</td>
                                          <td class="text-center col-2">
                                             <a href="inpatient/tindakan-rj-detail?id=<?= md5(1222) ?>">
                                                <button class="btn btn-sm btn-primary">Pemeriksaan</button>
                                             </a>
                                          </td>
                                       </tr>
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

   <?php
   include 'library.php';
   ?>
</body>

</html>