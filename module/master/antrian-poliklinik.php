<?php
$page = "Antrian Poliklinik";
require '../admin/view.php';
$query = tampildata("SELECT * FROM loket_radiologi");
$data = mysqli_query($koneksi, "SELECT id FROM loket_radiologi");
$totaldata = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require '../admin/head.php';
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
      require '../admin/header.php';
      ?>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
         <!-- Page Sidebar Start-->
         <?php
         require '../admin/sidebar.php';
         ?>
         <!-- Page Sidebar Ends-->
         <div class="page-body">
            <div class="container-fluid">
               <div class="page-title">
                  <div class="row">
                     <div class="col-6">
                        <h3>Antrian</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Antrian</li>
                           <li class="breadcrumb-item active">Poliklinik</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-8">
                     <div class="card">
                        <div class="card-header bg-success text-center">NOMOR ANTREAN SEDANG BERJALAN
                        </div>
                        <div class="card-body text-center">
                           <H1 class="card-title">B-88</H1>
                           <p class="card-text">
                              Total Antrean 22
                           </p>
                           <button class="btn btn-light col-12">Display Monitoring</button>
                        </div>
                     </div>
                  </div>
                  <div class="col-4">
                     <div class="card">
                        <div class="card-header bg-success text-center"><strong>LOKET 1</strong>
                        </div>
                        <div class="card-body text-center">
                           <p class="card-text">
                              <button class="btn btn-success col-12">Panggil Berikutnya</button>
                           </p>
                           <p class="card-text">
                              <button class="btn btn-primary col-12">Panggil Ulang</button>
                           </p>
                           <p class="card-text">
                              <button class="btn btn-light col-12">Cetak Antrian Poli</button>
                           </p>
                           <p class="card-text">
                              <button class="btn btn-danger col-12">Batal</button>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid Ends-->
         </div>
         <!-- footer start-->
         <?php
         require '../../template/footer.php';
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
            <form action="../controller/dokter" method="POST">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="nama" class="form-label">Sebutan</label>
                     <input type="text" required="" name="nama" id="nama" class="form-control">
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <?php
   include '../admin/library.php';
   ?>
</body>

</html>