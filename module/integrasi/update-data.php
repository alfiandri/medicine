<?php
$page = "Update Data Pendaftaran";
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
                        <h3>Update Data Pendaftaran</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Update Data</li>
                           <li class="breadcrumb-item active">Informasi </li>
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
                                    <strong>1</strong> Data Pasien
                                 </p>
                                 <div class="media-body text-end">
                                    <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#cari"> <i data-feather="list"></i>Cari</div>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th></th>
                                          <td>No.Pendaftaran</td>
                                          <td>Tgl.Pendaftaran</td>
                                          <td>No.RM</td>
                                          <td>Pasien</td>
                                          <td>Alamat</td>
                                          <td>L/P</td>
                                          <td>Biaya Adm.</td>
                                          <td class="text-center"></td>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <th class="bg-success"></th>
                                          <td>RJ0123123</td>
                                          <td>12-12-2023</td>
                                          <td>AM-0123123</td>
                                          <td>Jaka Prayudha</td>
                                          <td>Jl.Medan</td>
                                          <td>L</td>
                                          <td><?= number_format(200000) ?></td>
                                          <td>
                                             <div class="dropdown">
                                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                   Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                   <li><a class="dropdown-item" href="#">Hapus Biaya Admin</a></li>
                                                   <li><a class="dropdown-item" href="#">Ubah Tanggal Pendaftaran</a></li>
                                                   <li><a class="dropdown-item" href="#">Batal Kunjungan</a></li>
                                                   <li><a class="dropdown-item" href="#">Detail</a></li>
                                                </ul>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr>
                     Keterangan Warna :
                     <span class="badge bg-success">Daftar</span> <span class="badge bg-primary">Dilayani</span>
                     <span class="badge bg-dark">Batal</span>
                     <span class="badge bg-secondary">Sudah Terbayar</span>

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
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Libur Nasional</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Kategori Libur</label>
                  <select name="" class="form-select" id="">
                     <option value="">Nasional</option>
                     <option value="">Idul Fitri</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tanggal Libur</label>
                  <div class="row">
                     <div class="col">
                        <input type="date" class="form-control">
                     </div>
                     <div class="col">
                        <input type="date" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Pelayanan OFF</label>
                  <select name="" class="form-select" id="">
                     <option value="">Ya</option>
                     <option value="">Tidak</option>
                  </select>
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