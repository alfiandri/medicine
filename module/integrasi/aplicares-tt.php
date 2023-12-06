<?php
$page = "Keteresediaan Tempat Tidur";
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
                  <div class="col-xl-12 col-md-12 box-col-12">
                     <div class="file-content">
                        <div class="card">
                           <div class="card-header">

                              <div class="media">
                                 <!-- <p>Hari ini kamu memiliki
                                    <strong>1</strong> Antrian Pasien -->
                                 </p>
                                 <div class="media-body text-end">
                                    <a href="integrasi/aplicares-tt-add">
                                       <div class="btn btn-primary btn-sm"> <i data-feather="plus-square"></i>Ruangan Baru</div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>Kode Kelas</th>
                                          <th>Kode Ruang</th>
                                          <th>Nama Ruang</th>
                                          <th>Kapasitas</th>
                                          <th>Tersedia</th>
                                          <th>Tersedia Pria</th>
                                          <th>Tersedia Wanita</th>
                                          <th>Tersedia PW</th>
                                          <th>Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <td><?= $row['kodekelas'] ?></td>
                                             <td><?= $row['koderuang'] ?></td>
                                             <td><?= $row['namaruang'] ?></td>
                                             <td><?= $row['kapasitas'] ?></td>
                                             <td><?= $row['tersedia'] ?></td>
                                             <td><?= $row['tersediapria'] ?></td>
                                             <td><?= $row['tersediawanita'] ?></td>
                                             <td><?= $row['tersediapriawanita'] ?></td>
                                             <td>
                                                <button class="btn btn-primary btn-sm">Detail</button>
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