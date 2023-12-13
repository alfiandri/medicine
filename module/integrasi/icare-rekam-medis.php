<?php
require 'view.php';
$page = "I-Care Rekam Medis";
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
                        <h3>I-Care Rekam Medis</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item active">I-Care</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-6">
                     <div class="card text-center" data-bs-toggle="modal" data-bs-target="#noka">
                        <div class="card-body bg-primary">
                           <h1 class="card-title">Nomor Kartu</h1>
                        </div>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="card text-center" data-bs-toggle="modal" data-bs-target="#nik">
                        <div class="card-body bg-warning">
                           <h1 class="card-title">NIK</h1>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid Ends-->
         </div>
         <!-- Modal -->
         <div class="modal fade" id="noka" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
               <div class="modal-content">
                  <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">I-Care</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="../module/integrasi/icare-validate" id="form-noka" method="POST">
                     <div class="modal-body">
                        <div class="mb-3">
                           <label for="param" class="form-label">No.Kartu BPJS</label>
                           <input type="text" name="param" id="paramnoka" class="form-control" required>
                        </div>
                        <div class="mb-3">
                           <label for="kodedokter" class="form-label">Pilih Dokter</label>
                           <select name="kodedokter" id="kodedokter" class="form-control select2" required>
                              <?php
                              $query = tampildata("SELECT * FROM dokter");
                              foreach ($query as $row) {
                              ?>
                                 <option value="<?= $row['kode_dokter'] ?>"><?= $row['nama'] ?></option>
                              <?php
                              }
                              ?>
                           </select>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="caridatanoka" class="btn btn-primary">Proses</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <!-- Modal -->
         <div class="modal fade" id="nik" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered">
               <div class="modal-content">
                  <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">I-Care</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="../module/integrasi/icare-validate" id="form-nik" method="POST">
                     <div class="modal-body">
                        <div class="mb-3">
                           <label for="param" class="form-label">NIK</label>
                           <input type="text" name="param" id="paramnik" class="form-control" required>
                        </div>
                        <div class="mb-3">
                           <label for="kodedokter" class="form-label">Pilih Dokter</label>
                           <select name="kodedokter" id="kodedokter" class="form-control" required>
                              <option value="">-- Pilih Dokter --</option>
                              <?php
                              $query = tampildata("SELECT * FROM dokter");
                              foreach ($query as $row) {
                              ?>
                                 <option value="<?= $row['kode_dokter'] ?>"><?= $row['nama'] ?></option>
                              <?php
                              }
                              ?>
                           </select>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="caridatanik" class="btn btn-primary">Proses</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>

         <!-- footer start-->
         <?php
         require '../../template/footer.php';
         ?>
      </div>
   </div>
   <?php
   include 'library.php';
   ?>
   <script src="../assets/js/select2/select2.full.min.js"></script>
   <script src="../assets/js/select2/select2-custom.js"></script>

   <script>
      $('#form-noka').submit(function(event) {
         // Perform validation
         const param = $('#paramnoka').val();
         if (param.length < 13) {
            alert('Panjang nomor kartu tidak boleh di bawah 13 digit!');
            event.preventDefault();
         }
         if (param.length > 13) {
            alert('Panjang nomor kartu tidak boleh lebih dari 13 digit!');
            event.preventDefault();
         }
      });

      $('#form-nik').submit(function(event) {
         // Perform validation
         const param = $('#paramnik').val();
         if (param.length < 16) {
            alert('Panjang NIK tidak boleh dibawah 16 digit!');
            event.preventDefault();
         }
         if (param.length > 16) {
            alert('Panjang NIK tidak boleh lebih dari 16 digit!');
            event.preventDefault();
         }
      });
   </script>
</body>

</html>