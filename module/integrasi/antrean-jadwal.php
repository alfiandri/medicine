<?php
session_start();
$master = "Antrean";
$page = "Jadwal Dokter";

require 'view.php';
$query = tampildata("SELECT * FROM dokter");
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
               <div class="col-md-12 project-list">
                  <div class="card">
                     <div class="row">
                        <div class="col-md-12">
                           <ul class="nav nav-pills" id="pills-icontab" role="tablist">
                              <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-user"></i>Dokter</a></li>

                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-jasa-tab" data-bs-toggle="pill" href="#pills-jasa" role="tab" aria-controls="pills-jasa" aria-selected="false"><i class="icofont icofont-list"></i>Jadwal Dokter</a></li>

                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-update-tab" data-bs-toggle="pill" href="#pills-update" role="tab" aria-controls="pills-update" aria-selected="false"><i class="icofont icofont-list"></i>Update Jadwal Dokter</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12">
                  <div class="card">
                     <div class="card-body">
                        <div class="tab-content" id="pills-icontabContent">
                           <div class="tab-pane fade show active" id="pills-iconhome" role="tabpanel" aria-labelledby="pills-iconhome-tab">
                              <div class="table-responsive">
                                 <table class="display table-sm" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>Kode</th>
                                          <th>Nama Dokter</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <td><?= rand(1111, 9999); ?></td>
                                             <td><?= $row['nama'] ?></td>
                                          </tr>
                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-jasa" role="tabpanel" aria-labelledby="pills-jasa-tab">
                              <div class="table-responsive">
                                 <table class="display table-sm" id="basic-8">
                                    <thead>
                                       <tr>
                                          <th>Kode Subspesialis</th>
                                          <th>Hari</th>
                                          <th>Kapasitas Pasien</th>
                                          <th>Libur</th>
                                          <th>Hari</th>
                                          <th>Jadwal</th>
                                          <th>Sub Spesialis</th>
                                          <th>Nama Dokter</th>
                                          <th>Kode Poli</th>
                                          <th>Nama Poli</th>
                                          <th>Kode Dokter</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                 </table>
                              </div>
                           </div>

                           <div class="tab-pane fade" id="pills-update" role="tabpanel" aria-labelledby="pills-jasa-tab">
                              <div class="mb-3 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label">Kode Poli</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select" id="">
                                       <option value="">PILIH</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-3 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label">Kode Subspesialis</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select" id="">
                                       <option value="">PILIH</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-3 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label">Kode Dokter</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select" id="">
                                       <option value="">PILIH</option>
                                    </select>
                                 </div>
                              </div>
                              <hr>
                              <div class="mb-3 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label">Jadwal</label>
                                 <div class="col-sm-4">
                                    <select name="" class="form-select" id="">
                                       <option value="">HARI</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="time" class="form-control" name="" id="">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="time" class="form-control" name="" id="">
                                 </div>
                                 <div class="col-sm-2">
                                    <button class="btn btn-success">Tambah</button>
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