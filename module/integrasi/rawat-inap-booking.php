<?php
$page = "List Pasien";
require '../db/connect.php';
require '../controller/view.php';
require '../controller/admisi.php';
$query = tampildata("SELECT * FROM pasienBooking WHERE statusBooking=0");
$data = mysqli_query($koneksi, "SELECT id FROM pasienBooking WHERE statusBooking=0");
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
                        <h3>Pasien Booking</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item"> <a href="gawat-darurat">Gawat Darurat</a></li>
                           <li class="breadcrumb-item active">List Pasien </li>
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
                                 <p>Total pasien booking di Faskes
                                    <strong><?= number_format($totaldata) ?></strong>
                                 </p>
                                 <div class="media-body text-end">
                                    <a href="<?= $point ?>">
                                       <div class="btn btn-light btn-sm"> <i data-feather="arrow-left-circle"></i>Kembali</div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th></th>
                                          <th>No.Booking</th>
                                          <th>Tanggal</th>
                                          <th>Waktu</th>
                                          <th>NIK</th>
                                          <th>Nama</th>
                                          <th>L/P</th>
                                          <th>No.Handphone</th>
                                          <th>Layanan</th>
                                          <th class="text-center col-1">Aksi</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $tipe = $row['tipe'];
                                             if ($tipe == "Booking Online") {
                                                $color = 'primary';
                                             } else if ($tipe == "E-KIOSK") {
                                                $color = 'danger';
                                             } else if ($tipe == "M-JKN") {
                                                $color = 'info';
                                             } else {
                                                $color = 'success';
                                             }
                                             ?>
                                             <td class="bg-<?= $color ?>"></td>
                                             <td><?= $row['noBooking'] ?></td>
                                             <td><?= $row['tanggalBooking'] ?></td>
                                             <td><?= $row['waktuBooking'] ?></td>
                                             <td><?= $row['nik'] ?></td>
                                             <td><?= $row['namaPasien'] ?></td>
                                             <td><?= $row['gender'] ?></td>
                                             <td><?= $row['noHandphone'] ?></td>
                                             <td><?= $row['layanan'] ?></td>
                                             <td class="text-center">
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add<?= $row['id'] ?>">Daftarkan</button>
                                             </td>
                                          </tr>

                                          <!-- Modal -->
                                          <div class="modal fade" id="add<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrasi Pasien</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <div class="modal-body">
                                                      <form action="" method="POST">
                                                         <input type="hidden" name="uid" value="<?= $row['uidPasien'] ?>">
                                                         <div class="mb-3">
                                                            <label for="nomorRM" class="form-label">Nomor Rekam Medis</label>
                                                            <input type="text" class="form-control" id="nomorRM" name="nomorRM" readonly value="<?= $row['nomorRM'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="namaPasien" class="form-label">Nama Pasien</label>
                                                            <input type="text" class="form-control" id="namaPasien" name="namaPasien" readonly value="<?= $row['namaPasien'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="noRegistrasi" class="form-label">No.Registrasi</label>
                                                            <input type="text" class="form-control" id="noRegistrasi" name="noRegistrasi" required="" value="<?= rand(111, 999) ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="noRawat" class="form-label">No.Rawat</label>
                                                            <input type="text" class="form-control" id="noRawat" name="noRawat" required="" value="<?= date('Ymd') . rand(111, 999) ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="layanan" class="form-label">Poliklinik</label>
                                                            <?php
                                                            $query = tampildata("SELECT * FROM layanan");
                                                            ?>
                                                            <select name="layanan" id="layanan" class="form-select" required="">
                                                               <option value="">Pilih</option>
                                                               <?php foreach ($query as $row) : ?>
                                                                  <option value="<?= $row['layanan'] ?>"><?= $row['layanan'] ?></option>
                                                               <?php endforeach ?>
                                                            </select>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="dokter" class="form-label">Dokter</label>
                                                            <?php
                                                            $query = tampildata("SELECT * FROM dokter");
                                                            ?>
                                                            <select name="dokter" id="dokter" class="form-select" required="">
                                                               <option value="">Pilih</option>
                                                               <?php foreach ($query as $row) : ?>
                                                                  <option value="<?= $row['nama'] ?>"><?= $row['nama'] ?></option>
                                                               <?php endforeach ?>
                                                            </select>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="jenisBayar" class="form-label">Jenis Bayar</label>
                                                            <?php
                                                            $query = tampildata("SELECT * FROM jenisBayar");
                                                            ?>
                                                            <select name="jenisBayar" id="jenisBayar" class="form-select" required="">
                                                               <option value="">Pilih</option>
                                                               <?php foreach ($query as $row) : ?>
                                                                  <option value="<?= $row['jenis'] ?>"><?= $row['jenis'] ?></option>
                                                               <?php endforeach ?>
                                                            </select>
                                                         </div>
                                                   </div>
                                                   <div class="modal-footer">
                                                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                      <button type="submit" class="btn btn-success" name="simpanpasienrj">Simpan</button>
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
                        Keterangan Warna : <span class="badge bg-danger">IGD</span>
                        <span class="badge bg-primary">Poliklinik</span> <span class="badge bg-success">Rujukan</span>
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