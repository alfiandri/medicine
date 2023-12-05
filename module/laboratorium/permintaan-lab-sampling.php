<?php
session_start();
$page = "Pemeriksaan Lab";
require '../db/connect.php';
require '../controller/view.php';
$id = $_GET['id'];
$no = $_GET['no'];
$query = tampildata("SELECT * FROM lab_pemeriksaan WHERE nomorRegistrasi='$no'");
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
                           <div class="card-header">

                              <div class="media">
                                 <p>Hari ini kamu memiliki
                                    <strong><?= number_format($totaldata) ?></strong> antrian pasien
                                 </p>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display table-striped" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>Pemeriksaan</th>
                                          <th class="text-center">BMHP</th>
                                          <th>Satuan</th>
                                          <th class="text-center">Qty</th>
                                          <th class="text-center">Waktu Pengambilan Sampling</th>
                                          <th class="text-center">Approve</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <td><?= $row['pemeriksaan'] ?></td>
                                             <td class="text-center">
                                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#add"><i data-feather="plus-circle"></i></button>
                                             </td>
                                             <td><?= $row['satuan'] ?></td>
                                             <td class="text-center"><?= $row['qty'] ?></td>
                                             <td class="text-center"><?= $row['waktu_sampling'] ?></td>
                                             <td class="text-center col-1">
                                                <button class="btn btn-sm btn-success"><i data-feather="check-circle"></i></button>
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
         require 'footer.php';
         ?>
      </div>
   </div>


   <!-- Modal -->
   <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
               <div class="modal-body">
                  <label for="bmhp" class="form-label">BMHP</label>
                  <input class="form-control" list="databmhp" id="bmhp" placeholder="Type to search...">
                  <datalist id="databmhp">
                     <?php
                     $query = tampildata("SELECT * FROM bmhp");
                     ?>
                     <?php foreach ($query as $row) : ?>
                        <option value="<?= $row['bmhp'] ?>">
                        <?php endforeach ?>
                  </datalist>

                  <label for="satuan" class="form-label">Satuan</label>
                  <input class="form-control" list="datasatuan" id="satuan" placeholder="Type to search...">
                  <datalist id="datasatuan">
                     <?php
                     $query = tampildata("SELECT * FROM satuan_bmhp");
                     ?>
                     <?php foreach ($query as $row) : ?>
                        <option value="<?= $row['satuan'] ?>">
                        <?php endforeach ?>
                  </datalist>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success">Simpan</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <?php
   require 'library.php';
   ?>
</body>

</html>