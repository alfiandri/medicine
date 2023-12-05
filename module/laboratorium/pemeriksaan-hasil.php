<?php
session_start();
$page = "Pemeriksaan Lab";
require '../db/connect.php';
require '../controller/view.php';
$id = $_GET['id'];
$no = $_GET['no'];
$query = tampildata("SELECT * FROM lab_data_pemeriksaan WHERE nomorRegistrasi='$no'");
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
                        <h3>Permintaan Lab</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Pasien</li>
                           <li class="breadcrumb-item active">Pemeriksaan </li>
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
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display table-striped" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>Pemeriksaan</th>
                                          <th>Hasil</th>
                                          <th>Satuan</th>
                                          <th>Nilai Rujukan</th>
                                          <th class="text-center">Aksi</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <td><?= $row['parameter'] ?></td>
                                             <td><input type="text" class="form-control"></td>
                                             <td><?= $row['satuan'] ?></td>
                                             <td><?= $row['nilairujukan'] ?></td>
                                             <td class="text-center col-1">
                                                <button class="btn btn-sm btn-primary"><i data-feather="check-circle"></i></button>
                                             </td>
                                          </tr>
                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
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