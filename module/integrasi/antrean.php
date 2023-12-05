<?php

session_start();
$master = "V-Claim ";
$page = "Antrean";

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
                              <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-list"></i>Antrean Poli</a></li>

                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-jasa-tab" data-bs-toggle="pill" href="#pills-jasa" role="tab" aria-controls="pills-jasa" aria-selected="false"><i class="icofont icofont-list"></i>Antrean Farmasi</a></li>

                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-update-tab" data-bs-toggle="pill" href="#pills-update" role="tab" aria-controls="pills-update" aria-selected="false"><i class="icofont icofont-list"></i>Antrean Belum Dilayani</a></li>
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
                                          <th>Kode Booking</th>
                                          <th>Jenis Pasien</th>
                                          <th>NIK</th>
                                          <th>No.Handphone</th>
                                          <th>Nama Poli</th>
                                          <th>No.RM</th>
                                          <th>Tanggal Periksa</th>
                                          <th>Dokter</th>
                                          <th class="text-center">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>16032021A001</td>
                                          <td>JKN</td>
                                          <td>3212345678987654</td>
                                          <td>085635228888</td>
                                          <td>Anak</td>
                                          <td>123345</td>
                                          <td>2021-01-28</td>
                                          <td>Dr. Hendra</td>
                                          <td class="text-center">
                                             <a href="antrean-add?id=16032021A001">
                                                <button class="btn btn-primary">Tambah</button>
                                             </a>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-jasa" role="tabpanel" aria-labelledby="pills-jasa-tab">
                              <div class="table-responsive">
                                 <table class="display table-sm" id="basic-8">
                                    <thead>
                                       <tr>
                                          <th>Kode Booking</th>
                                          <th>Jenis Pasien</th>
                                          <th>NIK</th>
                                          <th>Nama Poli</th>
                                          <th>No.RM</th>
                                          <th>Dokter</th>
                                          <th>Jenis Resep</th>
                                          <th>No.Antrian</th>
                                          <th>Keterangan</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>16032021A001</td>
                                          <td>JKN</td>
                                          <td>3212345678987654</td>
                                          <td>Anak</td>
                                          <td>123345</td>
                                          <td>Dr. Hendra</td>
                                          <td>Racikan</td>
                                          <th>2</th>
                                          <th>Keterangan</th>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>

                           <div class="tab-pane fade" id="pills-update" role="tabpanel" aria-labelledby="pills-jasa-tab">
                              <div class="table-responsive">
                                 <table class="display table-sm" id="basic-7">
                                    <thead>
                                       <tr>
                                          <th>Kode Booking</th>
                                          <th>Jenis Pasien</th>
                                          <th>NIK</th>
                                          <th>No.Handphone</th>
                                          <th>Nama Poli</th>
                                          <th>No.RM</th>
                                          <th>Tanggal Periksa</th>
                                          <th>Dokter</th>
                                          <th class="text-center">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>

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