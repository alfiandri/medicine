<?php
session_start();
$master = "V-Claim ";
$page = "Referensi";

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
                              <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Faskes</a></li>

                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-riwayat-tab" data-bs-toggle="pill" href="#pills-riwayat" role="tab" aria-controls="pills-riwayat" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Kode Poli</a></li>

                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-klaim-tab" data-bs-toggle="pill" href="#pills-klaim" role="tab" aria-controls="pills-klaim" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Kode DPJP</a></li>

                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-jasa-tab" data-bs-toggle="pill" href="#pills-jasa" role="tab" aria-controls="pills-jasa" aria-selected="false"><i class="icofont icofont-list"></i>Diagnosa</a></li>
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
                                 <div class="mb-1 row">
                                    <div class="col-sm-8">
                                       <input type="text" class="form-control form-control-sm" placeholder="Masukkan Kata Kunci">
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="input-group">
                                          <select name="" class="form-select form-select-sm" id="">
                                             <option selected>Pilih Jenis Layanan</option>
                                             <option value=""></option>
                                          </select>
                                          <button class="btn btn-danger btn-sm">Cari</button>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <table class="display table-sm" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>No</th>
                                          <th>Kode Faskes</th>
                                          <th>Nama Faskes</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-riwayat" role="tabpanel" aria-labelledby="pills-riwayat-tab">
                              <div class="table-responsive">
                                 <div class="mb-1 row">
                                    <div class="col-sm-12">
                                       <div class="input-group">
                                          <input type="text" class="form-control form-control-sm" placeholder="Masukkan Kata Kunci">
                                          <button class="btn btn-danger btn-sm">Cari</button>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <table class="display table-sm" id="basic-2">
                                    <thead>
                                       <tr>
                                          <th>No</th>
                                          <th>Kode Poli</th>
                                          <th>Nama Poli</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-klaim" role="tabpanel" aria-labelledby="pills-klaim-tab">
                              <div class="table-responsive">
                                 <div class="mb-1 row">
                                    <div class="col-sm-4">
                                       <select name="" class="form-select form-select-sm" id="">
                                          <option selected>Pilih Jenis Layanan</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-4">
                                       <select name="" class="form-select form-select-sm" id="">
                                          <option selected>Pilih Spesialis</option>
                                       </select>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="input-group">
                                          <input type="date" class="form-control form-control-sm" placeholder="No.Kartu Peserta">
                                          <button class="btn btn-danger btn-sm">Cari</button>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <table class="display table-sm" id="basic-7">
                                    <thead>
                                       <tr>
                                          <th>No</th>
                                          <th>Kode DPJP</th>
                                          <th>Nama DPJP</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-jasa" role="tabpanel" aria-labelledby="pills-jasa-tab">
                              <div class="table-responsive">
                                 <div class="mb-1 row">
                                    <div class="col-sm-12">
                                       <div class="input-group">
                                          <input type="date" class="form-control form-control-sm" placeholder="Masukkan Kata Kunci" name="" id="">
                                          <button class="btn btn-danger btn-sm">Cari</button>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <table class="display table-sm" id="basic-8">
                                    <thead>
                                       <tr>
                                          <th>No</th>
                                          <th>Kode Diagnosa</th>
                                          <th>Nama Diagnosa</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                       </tr>
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