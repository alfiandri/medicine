<?php
$page = "Admisi MCU";
require '../db/connect.php';
require '../controller/view.php';
require '../controller/admisi.php';
$query = tampildata("SELECT * FROM pasienVisit LEFT OUTER JOIN pasien ON pasien.uidPasien = pasienVisit.uidPasien WHERE visitor=5");
$data = mysqli_query($koneksi, "SELECT id FROM pasienVisit WHERE visitor=5");
$totaldata = mysqli_num_rows($data);
$datanatrian = mysqli_query($koneksi, "SELECT * FROM pasienVisit WHERE visitor=5");
$antrian = mysqli_num_rows($datanatrian);
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
                        <h3>MCU</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">FO Registrasi</li>
                           <li class="breadcrumb-item active">MCU </li>
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
                                    <strong><?= number_format($totaldata) ?></strong> antrian pasien
                                 </p>
                                 <div class="media-body text-end">
                                    <a href="admisi-list?id=1">
                                       <div class="btn btn-primary btn-sm"> <i data-feather="list"></i>Daftar Pasien</div>
                                    </a>
                                    <a href="admisi-booking?id=1">
                                       <div class="btn btn-primary btn-sm"> <i data-feather="list"></i>Pasien Booking</div>
                                    </a>
                                    <a href="admisi-add">
                                       <div class="btn btn-primary btn-sm"> <i data-feather="plus-square"></i>Pasien Baru</div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display table-striped" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th></th>
                                          <th>Tgl.Masuk</th>
                                          <th>No.Pendaftaran</th>
                                          <th>No.RM</th>
                                          <th>Pasien</th>
                                          <th>Poli</th>
                                          <th>Dokter</th>
                                          <th>No.Antrian</th>
                                          <th class="text-center"></th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['statusVisit'];
                                             if ($status == 0) {
                                                $color = 'warning';
                                             } else if ($status == 1) {
                                                $color = 'danger';
                                             } else if ($status == 2) {
                                                $color = 'dark';
                                             } else if ($status == 3) {
                                                $color = 'success';
                                             } else if ($status == 4) {
                                                $color = 'secondary';
                                             } else if ($status == 5) {
                                                $color = 'info';
                                             } else if ($status == 6) {
                                                $color = 'primary';
                                             }
                                             ?>
                                             <td class="bg-<?= $color ?>"></td>
                                             <td><?= $row['tanggalVisit'] ?> <?= $row['waktuVisit'] ?></td>
                                             <td><?= $row['nomorRawat'] ?></td>
                                             <td>
                                                <a href="pasien"><?= $row['nomorRM'] ?></a>
                                             </td>
                                             <td><?= $row['namaPasien'] ?></td>
                                             <td><?= $row['layanan'] ?></td>
                                             <td><?= $row['dokter'] ?></td>
                                             <td class="text-center">
                                                <h4><?= $row['noAntrian'] ?></h4>
                                             </td>
                                             <td class="text-center col-2">
                                                <?php
                                                $status = $row['statusVisit'];
                                                if ($status == 0) { ?>
                                                   <button class="btn btn-sm btn-warning text-dark" data-bs-toggle="modal" data-bs-target="#antrian<?= $row['id'] ?>">No.Antrian</button>
                                                   <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#batal<?= $row['id'] ?>">Batal</button>
                                                <?php } else if ($status == 1) { ?>
                                                   <button class="btn btn-sm btn-primary">Panggil</button>
                                                   <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#batal<?= $row['id'] ?>">Batal</button>
                                                <?php } else if ($status == 2) { ?>
                                                   <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#daftarulang<?= $row['id'] ?>">Daftar Ulang</button>
                                                <?php }
                                                ?>
                                             </td>
                                          </tr>
                                          <!-- Modal -->
                                          <div class="modal fade" id="antrian<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">No.Antrian Pasien</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <div class="modal-body">
                                                      <div class="text-center">
                                                         <div class="card text-center">
                                                            <form action="" method="POST">
                                                               <input type="hidden" name="id" value="<?= $row['uidPasien'] ?>">
                                                               <div class="card-body">
                                                                  <img src="../assets/icon-antrian.png" width="100" class="text-center">
                                                                  <?php
                                                                  $data = $antrian;
                                                                  ?>
                                                                  <input type="hidden" name="antrian" value="<?= $data ?>">
                                                                  <h1 class="card-title">A-<?= $data ?></h1>
                                                                  <p class="card-text">Total Antrian anda saat ini akan membutuhkan waktu antri lebih kurang <strong>30</strong> menit, karena saat ini rata waktu layanan kami per pasian 10 menit</p>
                                                                  <button type="submit" name="simpanantrian" class="btn btn-primary">Set Antrian</button>
                                                               </div>
                                                            </form>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <!-- Modal -->
                                          <div class="modal fade" id="batal<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Pembatalan Layanan Pasien</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <form action="" method="POST">
                                                      <input type="hidden" name="id" value="<?= $row['uidPasien'] ?>">
                                                      <div class="modal-body">
                                                         <div class="mb-3">
                                                            <label for="nomorRM" class="form-label">No.RM</label>
                                                            <input type="text" class="form-control" readonly id="nomorRM" value="<?= $row['nomorRM'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="namapasien" class="form-label">Nama Pasien</label>
                                                            <input type="text" class="form-control" readonly id="namapasien" value="<?= $row['namaPasien'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="layanan" class="form-label">Layanan</label>
                                                            <input type="text" class="form-control" readonly id="layanan" value="<?= $row['layanan'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="dokter" class="form-label">Dokter</label>
                                                            <input type="dokter" class="form-control" readonly id="dokter" value="<?= $row['dokter'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="catatan" class="form-label">Catatan Pembatalan</label>
                                                            <textarea name="catatan" class="form-control" id="" cols="30" rows="5" required=""></textarea>
                                                         </div>
                                                      </div>

                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="simpanbatal" class="btn btn-success">Simpan</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>

                                          <!-- Modal -->
                                          <div class="modal fade" id="daftarulang<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Daftar Ulang Pasien</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <form action="" method="POST">
                                                      <input type="hidden" name="id" value="<?= $row['uidPasien'] ?>">
                                                      <div class="modal-body">
                                                         <div class="mb-3">
                                                            <label for="nomorRM" class="form-label">No.RM</label>
                                                            <input type="text" class="form-control" readonly id="nomorRM" value="<?= $row['nomorRM'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="namapasien" class="form-label">Nama Pasien</label>
                                                            <input type="text" class="form-control" readonly id="namapasien" value="<?= $row['namaPasien'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="layanan" class="form-label">Layanan</label>
                                                            <input type="text" class="form-control" readonly id="layanan" value="<?= $row['layanan'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="dokter" class="form-label">Dokter</label>
                                                            <input type="dokter" class="form-control" readonly id="dokter" value="<?= $row['dokter'] ?>">
                                                         </div>
                                                      </div>

                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="simpandaftarulang" class="btn btn-success">Simpan</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>

                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                        <hr>
                        Keterangan Warna : <span class="badge bg-warning">Registrasi</span>
                        <span class="badge bg-danger">Antrian</span> <span class="badge bg-success">Dilayani</span>
                        <span class="badge bg-dark">Batal</span> <span class="badge bg-secondary">Dipulangkan</span>
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

   <div class="modal fade" id="booking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-fullscreen">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasien Booking</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <table class="table">
                  <thead>
                     <tr>
                        <th></th>
                        <th>Kode Booking</th>
                        <th>Tgl.Submit</th>
                        <th>Tgl.Booking</th>
                        <th>No.RM</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>No.Hp</th>
                        <th>Poli</th>
                        <th>Dokter</th>
                        <th>No.Antrian</th>
                        <th>Keterangan</th>
                        <th>Jam Pelayanan</th>
                        <th>Asal Booking</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           <div class="dropdown">
                              <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 Aksi
                              </button>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="#">Pilih</a></li>
                                 <li><a class="dropdown-item" href="#">Hapus</a></li>
                                 <li><a class="dropdown-item" href="#">Batal Mobile JKN</a></li>
                                 <li><a class="dropdown-item" href="#">Tambah Antrean JKN</a></li>
                                 <li><a class="dropdown-item" href="#">Update NIK</a></li>
                                 <li><a class="dropdown-item" href="#">Export</a></li>
                              </ul>
                           </div>
                        </td>
                        <td>EOER02223</td>
                        <td>21-08-2023</td>
                        <td>22-08-2023</td>
                        <td>-</td>
                        <td>123123123</td>
                        <td>Jaka Prayudha</td>
                        <td>08123123123</td>
                        <td>Poli Penyakit Dalam</td>
                        <td>dr. Eko</td>
                        <td>-</td>
                        <td>-</td>
                        <td>19:20:</td>
                        <td>M JKN</td>
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
</body>

</html>