<?php
$page = "Jadwal Dokter";
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
                        <h3>Jadwal Dokter</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Jadwal Dokter</li>
                           <li class="breadcrumb-item active">Tambah Data </li>
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
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Poli/Unit/Ruang</label>
                                          <div class="col-sm-10">
                                             <select name="" class="form-select" id=""></select>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Poli Sub Spesialis</label>
                                          <div class="col-sm-10">
                                             <select name="" class="form-select" id=""></select>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Nama Dokter</label>
                                          <div class="col-sm-10">
                                             <select name="" class="form-select" id=""></select>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Pasien</label>
                                          <div class="col-sm-10">
                                             <select name="" class="form-select" id=""></select>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>
                                          <div class="col-sm-10">
                                             <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                          <div class="col-sm-10">
                                             <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Tambah Hari</button>
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
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Jadwal</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Hari</label>
                  <select name="" class="form-select" id="">
                     <option value="">Senin</option>
                     <option value="">Selasa</option>
                     <option value="">Rabu</option>
                     <option value="">Kamis</option>
                     <option value="">Jum'at</option>
                     <option value="">Sabtu</option>
                     <option value="">Minggu</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Waktu</label>
                  <div class="row">
                     <div class="col">
                        <input type="time" class="form-control">
                     </div>
                     <div class="col">
                        <input type="time" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Kuota Pasien Online</label>
                  <input type="number" class="form-control">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Kuota Pasien Onsite</label>
                  <input type="number" class="form-control">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Estimasi (min)</label>
                  <input type="time" class="form-control">
               </div>

            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
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
   <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
   <script src="../assets/js/rating/jquery.barrating.js"></script>
   <script src="../assets/js/rating/rating-script.js"></script>
   <script src="../assets/js/owlcarousel/owl.carousel.js"></script>
   <script src="../assets/js/ecommerce.js"></script>
   <script src="../assets/js/product-list-custom.js"></script>
   <script src="../assets/js/tooltip-init.js"></script>
   <!-- Plugins JS Ends-->
   <!-- Theme js-->
   <script src="../assets/js/script.js"></script>
   <script src="../assets/js/theme-customizer/customizer.js"></script>
   <!-- Plugin used-->
</body>

</html>