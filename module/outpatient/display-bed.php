<?php
$page = "Ketersediaan Kamar";
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
                        <h3>Display Ketersediaan Kamar</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Display</li>
                           <li class="breadcrumb-item active">Ketersediaan Kamar </li>
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
                              <h5>Total TT : <span class="text-danger">154</span></h5>
                              <hr>
                              <div class="table-responsive">
                                 <table class="display" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>Ruang</th>
                                          <th>Kelas</th>
                                          <th>Jumlah Bed</th>
                                          <th>Bed Kosong</th>
                                          <th>Bed Terpakai</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>Melati</td>
                                          <td>Kelas II</td>
                                          <td>120</td>
                                          <td>80</td>
                                          <td>40</td>
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
         <!-- footer start-->
         <?php
         require 'footer.php';
         ?>
      </div>
   </div>

   <div class="modal fade" id="kembali" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-fullscreen">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Ketersediaan Ruangan</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <table class="table">
                  <thead>
                     <tr>
                        <th>Kelas</th>
                        <th>Ruang</th>
                        <th>Kamar</th>
                        <th>Bed</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Kelas II</td>
                        <td>Melati</td>
                        <td>230</td>
                        <td>A3</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cari</button>
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
         </div>
      </div>
   </div>


   <!-- Modal -->
   <div class="modal fade" id="cari" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Cari Pasien</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Filter</label>
                  <select name="" class="form-select" id="">
                     <option value="">NIK</option>
                     <option value="">No.RM</option>
                     <option value="">Nama Pasien</option>
                     <option value="">Dokter</option>
                     <option value="">Status</option>
                     <option value="">Jaminan</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Cari</label>
                  <input type="text" class="form-control">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Cari</button>
            </div>
         </div>
      </div>
   </div>
   <?php
   include 'library.php';
   ?>
</body>

</html>