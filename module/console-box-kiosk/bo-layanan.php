<?php
$page = "BO";
require 'view.php';
$ticket = $_GET['ticket'];
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
                              <p class="card-text">SKetentuan Umum Pendaftaran Online RS.Medicine yakni pendaftaran hanya dapat dilakukan pada jam operasional 08.00 sd 17.20.00 pendaftaran tidak dapat dilakukan Hari tersebut kecuali menggunakan fitur layanan registeri E-KISOK yang terdapat di Rumah Sakit selanjutnya pendaftaran yang tidak ada konfirmasi di hari registrasi booking maka akan di batalkan secara otomatis melalui sistem.</p>
                              <div class="row">
                                 <div class="col-2">
                                    <span class="badge bg-danger mb-2">1</span>
                                    <p>Kategori Pasien</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-danger mb-2">2</span>
                                    <p>Identitas Diri</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-success mb-2">3</span>
                                    <p>Layanan & Dokter</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-dark mb-2">4</span>
                                    <p>Metode Pembayaran</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-dark mb-2">5</span>
                                    <p>Tanda Tangan</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-dark mb-2">6</span>
                                    <p>E-Ticket Download</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title">Layanan & Dokter</h5>
                              <hr>
                              <div class="table-responsive">
                                 <table class="display" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>Layanan</th>
                                          <th>Deskripsi</th>
                                          <th class="text-center">Status</th>
                                          <th class="text-center">Pengaturan</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       $query = tampildata("SELECT * FROM layanan");
                                       ?>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <td><?= $row['layanan'] ?></td>
                                             <?php
                                             $status = $row['statusLayanan'];
                                             if ($status == 1) {
                                                $color = 'success';
                                                $ket = "Buka";
                                             } else {
                                                $color = 'danger';
                                                $ket = "Tutup";
                                             }
                                             ?>
                                             <td class="text-wrap col-8"><?= $row['deskripsi'] ?></td>
                                             <td class="text-center">
                                                <span class="badge bg-<?= $color ?>"><?= $ket ?></span>
                                             </td>
                                             <td class="text-center">
                                                <?php
                                                if ($status == 1) { ?>
                                                   <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add<?= $row['id'] ?>">Pilih Dokter</button>
                                                <?php }
                                                ?>

                                             </td>
                                          </tr>

                                          <!-- Modal -->
                                          <div class="modal fade" id="add<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Daftar Dokter</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <div class="modal-body">
                                                      <ol class="list-group list-group-numbered">
                                                         <?php
                                                         $layanan = $row['layanan'];
                                                         $idlayanan = $row['id'];
                                                         $query = tampildata("SELECT * FROM dokter WHERE layanan='$layanan'");
                                                         ?>
                                                         <?php foreach ($query as $row) : ?>
                                                            <a href="bo-metodebayar?ticket=<?= $ticket ?>&kode=<?= $idlayanan ?>&dok=<?= $row['iddokter'] ?>">
                                                               <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                  <div class="ms-2 me-auto">
                                                                     <div class="fw-bold"><?= $row['nama'] ?>
                                                                     </div>
                                                                  </div>
                                                                  <?php
                                                                  $statusDokter  = $row['status_dokter'];
                                                                  if ($statusDokter == 1) {
                                                                     $col = 'success';
                                                                     $note = "Tersedia";
                                                                  } else {
                                                                     $col = 'danger';
                                                                     $note = "Tidak Tersedia";
                                                                  }
                                                                  ?>
                                                                  <span class="badge bg-<?= $col ?> rounded-pill"><?= $note ?></span>
                                                               </li>
                                                            </a>
                                                         <?php endforeach ?>

                                                      </ol>
                                                   </div>
                                                   <div class="modal-footer">
                                                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       <?php endforeach ?>
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
      <!-- Plugin used-->
      <!-- Plugin used-->
   </div>
</body>

</html>