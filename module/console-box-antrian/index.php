<?php
$page = "BO";
require 'view.php';
$jenisPasien = $_GET['jenispasien'] ?? null;

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require 'head.php';
   ?>
   <style>

   </style>
</head>

<body>
   <!-- login page start-->
   <div class="container-fluid p-0">
      <div class="row m-0">
         <div class="col-12 p-0">
            <div class="login-card">
               <div>
                  <div><a class="logo"><img class=" img-fluid for-light" src="../assets/Logo - Primary.png" width="200" alt="looginpage"><img class="img-fluid for-dark" src="../assets/Logo - Secondary.png" width="200" alt="looginpage"></a></div>
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                              <p class="card-text">Ambil No.Antrian anda sesuai dengan kebutuhan anda. Untuk anda yang sudah melakukan registrasi online silahkan ambil antrian poliklinik, dan untuk belum melakukan registrasi silahkan ambil antrian loket, dan untuk anda yang telah selesai melakukan pemeriksaan silahkan ambil antrian farmasi </p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <?php

                  if (!$jenisPasien) {
                  ?>
                     <div class="row">
                        <div class="col-6">
                           <a href="../module/console-box-antrian/index?jenispasien=bpjs" class="card">
                              <div class="card-body bg-primary">
                                 <h5 class="card-title">BPJS</h5>
                                 <p class="card-text">Pasien yang terdaftar di BPJS Kesehatan dengan kepesertaan aktif dapat langsung menunggu panggilan antrian di loket BPJS</p>
                              </div>
                           </a>
                        </div>
                        <div class="col-6">
                           <a href="console-box-antrian/print/print-umum" class="card">
                              <div class="card-body bg-success">
                                 <h5 class="card-title">Non BPJS</h5>
                                 <p class="card-text">Pasien umum yang tidak menggunakan layanan jaminan kesehatan BPJS/Asuransi ini digunakan untuk pasien baru atau umum</p>
                              </div>
                           </a>
                        </div>

                        <div class="col-6">
                           <div class="card" data-bs-toggle="modal" data-bs-target="#mjkn">
                              <div class="card-body bg-danger">
                                 <h5 class="card-title">M-JKN</h5>
                                 <p class="card-text">Pasien dengan registrasi layanan kesehatan M-JKN untuk check in onsite</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="card" data-bs-toggle="modal" data-bs-target="#loketfarmasi">
                              <div class="card-body bg-warning">
                                 <h5 class="card-title">Farmasi</h5>
                                 <p class="card-text">Antrian untuk pasien telah selesai dilakukan pemeriksaan di poliklinik </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php
                  }

                  if (@$jenisPasien == 'bpjs') {
                  ?>
                     <div class="row" id="jenis-pasien">
                        <div class="col-6">
                           <a href="console-box-antrian/print/print-bpjs?tipe=B" class="card">
                              <div class="card-body bg-primary">
                                 <h5 class="card-title">Pasien Baru</h5>
                                 <p class="card-text">Pasien yang belum terdaftar silakan menunggu antrian pendaftaran admisi.</p>
                              </div>
                           </a>
                        </div>

                        <div class="col-6">
                           <div class="card" data-bs-toggle="modal" data-bs-target="#admisibpjslama">
                              <div class="card-body bg-success">
                                 <h5 class="card-title">Pasien Lama</h5>
                                 <p class="card-text">Pasien lama yang sudah terdaftar pada sistem.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php
                  }
                  ?>
               </div>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="admisibpjsbaru" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Pasien BPJS Baru</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form action="console-box-antrian/check-bpjs" method="POST">
                  <div class="modal-body">
                     <div class="mb-3">
                        <label for="nomor" class="form-label">No.Kartu Identitas</label>
                        <input type="text" class="form-control" id="nomor" name="nomor" required="">
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                     <button type="submit" name="caripasienbpjsbaru" class="btn btn-primary">Proses</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="admisibpjslama" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Pasien BPJS</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form action="console-box-antrian/check-bpjs" method="POST">
                  <div class="modal-body">
                     <div class="mb-3">
                        <label for="tipe" class="form-label">Identitas</label>
                        <select class="form-select" aria-label="Default select example" name="tipe" id="tipe">
                           <option value="">Tipe Identitas </option>
                           <option value="1">NIK</option>
                           <option value="2">No.Kartu BPJS</option>
                        </select>
                     </div>
                     <div class="mb-3">
                        <label for="nomor" class="form-label">No.Kartu Identitas</label>
                        <div class="input-group">
                           <input type="text" class="form-control" id="nomor" name="nomor" required="">
                           <div class="input-group-append">
                              <button class="btn btn-outline-primary" type="button">Cari</button>
                           </div>
                        </div>
                     </div>

                     <div class="mb-3">
                        <label for="tipe" class="form-label">Nomor Rujukan</label>
                        <select class="form-select" aria-label="Default select example" name="tipe" id="tipe">
                           <option value="" selected>Pilih </option>
                           <option value="1">NIK</option>
                           <option value="2">No.Kartu BPJS</option>
                        </select>
                     </div>

                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                     <button type="submit" name="caripasienbpjslama" class="btn btn-primary">Proses</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="pasienlama" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Pasien Umum</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form action="console-box-antrian/check-umum" method="POST">
                  <div class="modal-body">
                     <div class="mb-3">
                        <label for="nomor" class="form-label">NIK (Nomor Induk Kependudukan)</label>
                        <input type="text" class="form-control" id="nomor" name="nomor" required="">
                     </div>

                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                     <button type="submit" name="simpanadmisiumum" class="btn btn-primary">Proses</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="loketfarmasi" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Antrian Farmasi</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form action="console-box-antrian/check-farmasi" method="POST">
                  <div class="modal-body">
                     <div class="mb-3">
                        <label for="kode" class="form-label">Kode Booking</label>
                        <input type="text" class="form-control" id="kode" name="kode">
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                     <button type="submit" name="carifarmasi" class="btn btn-primary">Proses</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="mjkn" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">M-JKN Check In</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form action="console-box-antrian/check-in" method="POST">
                  <div class="modal-body">
                     <div class="mb-3">
                        <label for="nomor" class="form-label">Nomor Booking</label>
                        <input type="text" class="form-control" id="nomor" name="nomor" required="">
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                     <button type="submit" name="carijkn" class="btn btn-primary">Proses</button>
                  </div>
               </form>
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
      <!-- Sidebar jquery-->
      <script src="../assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="../assets/js/script.js"></script>
      <!-- login js-->
      <!-- Plugin used-->

      <script>

      </script>
   </div>
</body>

</html>