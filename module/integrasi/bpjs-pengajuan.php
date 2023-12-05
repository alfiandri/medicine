<?php
session_start();
$master = "V-Claim ";
$page = "Pengajuan";

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
                        <div class="col-md-6">
                           <ul class="nav nav-pills" id="pills-icontab" role="tablist">
                              <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>SEP Backdate</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconprofile-tab" data-bs-toggle="pill" href="#pills-iconprofile" role="tab" aria-controls="pills-iconprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Validasi Fingerprint</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-test-tab" data-bs-toggle="pill" href="#pills-test" role="tab" aria-controls="pills-test" aria-selected="false"><i class="icofont icofont-list"></i>Data Pengajuan</a></li>
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
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.Kartu BPJS</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal SEP</label>
                                 <div class="col-sm-10">
                                    <input type="date" class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jenis Pelayanan</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option selected>Pilih Jenis Pelayanan</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Keterangan</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                 <div class="col-sm-10">
                                    <button class="btn btn-success btn-sm">Proses</button>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-iconprofile" role="tabpanel" aria-labelledby="pills-iconprofile-tab">
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.Kartu BPJS</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal SEP</label>
                                 <div class="col-sm-10">
                                    <input type="date" class="form-control form-control-sm" id="inputPassword">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jenis Pelayanan</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option selected>Pilih Jenis Pelayanan</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Keterangan</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                 <div class="col-sm-10">
                                    <button class="btn btn-success btn-sm">Proses</button>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-test" role="tabpanel" aria-labelledby="pills-test-tab">
                              <div class="col-sm-12">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="table-responsive">
                                          <table class="display table-sm" id="basic-1">
                                             <thead>
                                                <tr>
                                                   <th>No.</th>
                                                   <th>No.Kartu</th>
                                                   <th>Tgl.SEP</th>
                                                   <th>Jenis Pelayanan</th>
                                                   <th>Jenis Pengajuan</th>
                                                   <th>Keterangan</th>
                                                   <th>Status</th>
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