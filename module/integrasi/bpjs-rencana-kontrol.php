<?php
session_start();
$master = "V-Claim ";
$page = "Rencana Kontrol";

?>

<head>
   <base href="../">
   <?php
   require 'head.php';
   ?>
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
                              <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Formulir</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconprofile-tab" data-bs-toggle="pill" href="#pills-iconprofile" role="tab" aria-controls="pills-iconprofile" aria-selected="false"><i class="icofont icofont-list"></i>Data Rencana Kontrol</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconprofile-tab" data-bs-toggle="pill" href="#pills-cari" role="tab" aria-controls="pills-cari" aria-selected="false"><i class="icofont icofont-list"></i>Cek Surat Rencana Kontrol</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconprofile-tab" data-bs-toggle="pill" href="#pills-carisep" role="tab" aria-controls="pills-carisep" aria-selected="false"><i class="icofont icofont-folder"></i>Cari SEP Rencana Kontrol</a></li>
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
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.SEP</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal RK</label>
                                 <div class="col-sm-10">
                                    <input type="date" class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Poli</label>
                                 <div class="col-sm-10">
                                    <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nama Dokter</label>
                                 <div class="col-sm-10">
                                    <select name="" id="" class="form-select form-select-sm">
                                       <option selected></option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">User Insert</label>
                                 <div class="col-sm-10">
                                    <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                 <div class="col-sm-10">
                                    <button class="btn btn-success btn-sm">Kirim</button>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-iconprofile" role="tabpanel" aria-labelledby="pills-iconprofile-tab">
                              <div class="table-responsive">
                                 <table class="display table-sm" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>No</th>
                                          <th>No.Kontrol</th>
                                          <th>No.SEP</th>
                                          <th>Tgl.Kontrol</th>
                                          <th>Poli Tujuan</th>
                                          <th>Kode Dokter</th>
                                          <th>Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td class="text-center">
                                             <div class="btn-group" role="group">
                                                <button class="btn btn-sm btn-dark dropdown-toggle" id="btnGroupDrop1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</button>
                                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                   <a class="dropdown-item" href="booking-check-in?ref=">Ubah</a>
                                                   <a class="dropdown-item" href="#">Hapus</a>
                                                   <a class="dropdown-item" href="#">Lihat</a>
                                                   <a class="dropdown-item" href="#">Print</a>
                                                </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-cari" role="tabpanel" aria-labelledby="pills-cari-tab">
                              <div class="card">
                                 <h5 class="card-header">Data Nomor Surat Kontrol Berdasarkan Tanggal</h5>
                                 <div class="card-body">
                                    <div class="mb-1 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal Awal</label>
                                       <div class="col-sm-10">
                                          <input type="date" class="form-control form-control-sm" name="" id="">
                                       </div>
                                    </div>
                                    <div class="mb-1 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal Akhir</label>
                                       <div class="col-sm-10">
                                          <input type="date" class="form-control form-control-sm" name="" id="">
                                       </div>
                                    </div>
                                    <div class="mb-1 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Filter</label>
                                       <div class="col-sm-10">
                                          <select name="" class="form-select form-select-sm" id=""></select>
                                       </div>
                                    </div>
                                    <div class="mb-1 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                       <div class="col-sm-10">
                                          <button class="btn btn-success btn-sm">Simpan</button>
                                       </div>
                                    </div>

                                 </div>
                              </div>

                              <div class="card">
                                 <h5 class="card-header">Data Nomor Surat Kontrol Berdasarkan Nomor</h5>
                                 <div class="card-body">
                                    <div class="mb-1 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No. Surat Kontrol</label>
                                       <div class="col-sm-10">
                                          <input type="text" class="form-control form-control-sm" name="" id="">
                                       </div>
                                    </div>
                                    <div class="mb-1 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                       <div class="col-sm-10">
                                          <button class="btn btn-success btn-sm">Simpan</button>
                                       </div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-carisep" role="tabpanel" aria-labelledby="pills-carisep-tab">
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.SEP</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                 <div class="col-sm-10">
                                    <button class="btn btn-success btn-sm">Proses</button>
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