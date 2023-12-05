<?php
$page = "Jadwal Dokter";
require '../db/connect.php';
require '../controller/view.php';
$query = tampildata("SELECT * FROM dokter");
$data = mysqli_query($koneksi, "SELECT id FROM dokterJadwal");
$totaldata = mysqli_num_rows($data);
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
                        <h3>Jadwal</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Dokter</li>
                           <li class="breadcrumb-item active">Jadwal </li>
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
                                 <table class="display" id="basic-2">
                                    <thead>
                                       <tr>
                                          <th></th>
                                          <th>Nama Lengkap</th>
                                          <th>Layanan</th>
                                          <th class="col-4 text-center">Jadwal</th>
                                          <th class="text-center">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['statusSch'];
                                             if ($status == 1) {
                                                $warna = 'bg-success'; //Hadir
                                             } else if ($status == 0) {
                                                $warna = 'bg-danger'; //Tidak Hadir
                                             } else if ($status == 3) {
                                                $warna = 'bg-primary'; //Perubahan Jadwal
                                             }
                                             ?>
                                             <td class="<?= $warna ?>"></td>
                                             <td><?= $row['nama'] ?></td>
                                             <td><?= $row['layanan'] ?></td>
                                             <td>
                                                <?php
                                                $id = $row['uidDokter'];
                                                $query = tampildata("SELECT * FROM dokterJadwal WHERE uid='$id' ");
                                                ?>
                                                <table class="table">
                                                   <thead>
                                                      <tr>
                                                         <th>Hari</th>
                                                         <th>Waktu</th>
                                                         <th>Status</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <?php foreach ($query as $row) : ?>
                                                         <tr>
                                                            <td><?= $row['hari'] ?></td>
                                                            <td><?= $row['mulai'] ?> s/d <?= $row['akhir'] ?></td>
                                                            <td>
                                                               <?php
                                                               $st = $row['statusSch'];
                                                               if ($st == 1) {
                                                                  $note = 'Hadir';
                                                                  $col = 'bg-success';
                                                               } else {
                                                                  $note = 'Cancel';
                                                                  $col = 'bg-danger';
                                                               }
                                                               ?>
                                                               <span class="badge <?= $col ?>"><?= $note ?></span>
                                                            </td>
                                                         </tr>
                                                      <?php endforeach ?>
                                                   </tbody>
                                                </table>
                                             </td>
                                             <td class="text-center col-1">
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update<?= $row['id'] ?>">Jadwal</button>
                                             </td>
                                          </tr>
                                          <!-- Modal -->
                                          <div class="modal fade" id="update<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <form action="../controller/dokter" method="POST">
                                                      <div class="modal-body">
                                                         <div class="mb-3">
                                                            <label for="iddokter" class="form-label">Dokter</label>
                                                            <input type="text" readonly class="form-control" value="<?= $row['nama'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="iddokter" class="form-label">Hari</label>
                                                            <select name="" class="form-select" id="">
                                                               <option selected>Pilih</option>
                                                               <option value="Senin">Senin</option>
                                                               <option value="Selasa">Selasa</option>
                                                               <option value="Rabu">Rabu</option>
                                                               <option value="Kamis">Kamis</option>
                                                               <option value="Jumat">Jumat</option>
                                                               <option value="Sabtu">Sabtu</option>
                                                               <option value="Minggu">Minggu</option>
                                                            </select>
                                                         </div>
                                                         <div class="mb-3">
                                                            <div class="row">
                                                               <div class="col">
                                                                  <label for="nama" class="form-label">Mulai</label>
                                                                  <input type="time" required="" name="nama" id="nama" class="form-control">
                                                               </div>
                                                               <div class="col">
                                                                  <label for="nama" class="form-label">Akhir</label>
                                                                  <input type="time" required="" name="nama" id="nama" class="form-control">
                                                               </div>
                                                            </div>
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
                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
                                 <hr>
                                 Keterangan Warna : <span class="badge bg-success">Hadir</span>
                                 <span class="badge bg-danger">Tidak Hadir</span>
                                 <span class="badge bg-primary">Perubahan Jadwal</span>
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
   <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
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
</body>

</html>