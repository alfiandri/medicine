<?php
$master = "Rawat Jalan";
$page = "Monitoring";
require 'head.php';
?>

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
                           <ul class="nav nav-tabs border-tab btn-sm" id="top-tab" role="tablist">
                              <li class="nav-item"><a class="nav-link btn-sm" href="onsite"><i data-feather="target"></i>All</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" href="onsite?ref=3"><i data-feather="aperture"></i>Proses</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" href="onsite?ref=2"><i data-feather="alert-circle"></i>Menunggu</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" href="onsite?ref=1"><i data-feather="check-circle"></i>Selesai</a></li>

                           </ul>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group mb-0 me-0"></div><a class="btn btn-sm btn-danger" data-bs-toggle="modal" data-original-title="test" data-bs-target="#add" href="javascript:;"> <i data-feather="refresh-ccw"> </i>Antrian</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12">
                  <div class="card">
                     <div class="card-body">
                        <div class="table-responsive">
                           <table class="display table-sm" id="basic-1">
                              <thead>
                                 <tr>
                                    <th>No.Register</th>
                                    <th>No.RM</th>
                                    <th>Nama</th>
                                    <th>TTL</th>
                                    <th>Layanan</th>
                                    <th>Dokter</th>
                                    <th>Tanggal</th>
                                    <th>Jaminan</th>
                                    <th>Timestamp</th>
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
                                    <td></td>
                                 </tr>
                              </tbody>
                           </table>
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
         require 'footer.php';
         ?>
      </div>
   </div>
   <!-- Modal -->
   <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tempat & Tanggal Lahir</label>
                  <div class="row">
                     <div class="col-7">
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                     </div>
                     <div class="col-5">
                        <input type="date" class="form-control" id="exampleFormControlInput1">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                  <select name="" class="form-select" id="">
                     <option value="">Laki-Laki</option>
                     <option value="">Perempuan</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">No.Handphone</label>
                  <input type="tel" class="form-control" id="exampleFormControlInput1">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Booking Via</label>
                  <select name="" class="form-select" id="">
                     <option value="">Mobile JKN</option>
                     <option value="">On-Site</option>
                     <option value="">Online Channel</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Layanan</label>
                  <select name="" class="form-select" id="">
                     <option value=""></option>
                  </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>
   <!-- latest jquery-->
   <script src="../assets/js/jquery-3.5.1.min.js"></script>
   <!-- Bootstrap js-->
   <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
   <!-- feather icon js-->
   <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
   <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
   <!-- scrollbar js-->
   <script src="../assets/js/scrollbar/simplebar.js"></script>
   <script src="../assets/js/scrollbar/custom.js"></script>
   <!-- Sidebar jquery-->
   <script src="../assets/js/config.js"></script>
   <!-- Plugins JS start-->
   <script src="../assets/js/sidebar-menu.js"></script>
   <script src="../assets/js/chart/chartist/chartist.js"></script>
   <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
   <script src="../assets/js/chart/knob/knob.min.js"></script>
   <script src="../assets/js/chart/knob/knob-chart.js"></script>
   <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
   <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
   <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
   <script src="../assets/js/dashboard/default.js"></script>
   <script src="../assets/js/notify/index.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
   <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
   <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
   <!-- Plugins JS Ends-->
   <!-- Theme js-->
   <script src="../assets/js/script.js"></script>
   <script src="../assets/js/theme-customizer/customizer.js"></script>
   <!-- login js-->
   <!-- Plugin used-->
</body>

</html>