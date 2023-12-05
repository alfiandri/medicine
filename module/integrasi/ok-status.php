<?php
$page = "OK Status";
require '../db/connect.php';
require '../controller/view.php';
require '../controller/admisi.php';
$id = $_GET['id'];
$info = mysqli_query($koneksi, "SELECT * FROM pasienVisit WHERE uidPasien='$id'");
$data = mysqli_fetch_array($info);
$infopasien = mysqli_query($koneksi, "SELECT * FROM pasien WHERE uidPasien='$id'");
$datapasien = mysqli_fetch_array($infopasien);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   require 'head.php';
   ?>
   <script type="text/javascript" src="signature.js"></script>
   <style>
      body {
         padding: 15px;
      }

      #note {
         position: absolute;
         left: 50px;
         top: 35px;
         padding: 0px;
         margin: 0px;
         cursor: default;
      }
   </style>
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
                        <h3>Operate Kamer Status</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">OK</li>
                           <li class="breadcrumb-item active">Status </li>
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
                              <ul class="nav nav-tabs nav-primary" id="pills-warningtab" role="tablist">
                                 <li class="nav-item"><a class="nav-link active" id="pills-warninghome-tab" data-bs-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Rawat Inap</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Intensice Care</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-idcard-tab" data-bs-toggle="pill" href="#pills-idcard" role="tab" aria-controls="pills-idcard" aria-selected="false"><i class="icofont icofont-contacts"></i>Exit</a></li>
                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div class="tab-pane fade show active" id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <div class="row">
                                       <div class="col-5">
                                          <div class="row">
                                             <label for="noRegistrasi" class="col-sm-4 col-form-label">No.Registrasi</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="noRegistrasi" value=": <?= $data['nomorRegistrasi'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="noRawat" class="col-sm-4 col-form-label">No.Rawat</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="noRawat" value=": <?= $data['nomorRawat'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="tglVisit" class="col-sm-4 col-form-label">Tgl.Registrasi</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="tglVisit" value=": <?= $data['tanggalVisit'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="layanan" class="col-sm-4 col-form-label">Layanan Unit</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="layanan" value=": <?= $data['layanan'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="dokter" class="col-sm-4 col-form-label">Dokter</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="dokter" value=": <?= $data['dokter'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="kondisiMasuk" class="col-sm-4 col-form-label">Kondisi Masuk</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="kondisiMasuk" value=": <?= $data['kondisiMasuk'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="catatan" class="col-sm-4 col-form-label">Catatan</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="catatan" value=": <?= $data['catatan'] ?>">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-6">
                                          <div class="row">
                                             <label for="nomorRM" class="col-sm-4 col-form-label">No.Rekam Medik</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="nomorRM" value=": <?= $datapasien['nomorRM'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="namaPasien" class="col-sm-4 col-form-label">Nama Pasien</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="namaPasien" value=": <?= $datapasien['namaPasien'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="ttl" class="col-sm-4 col-form-label">TTL</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="ttl" value=": <?= $datapasien['tempatLahir'] ?>/<?= $datapasien['tanggalLahir'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="agama" value=": <?= $datapasien['agama'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="gender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="gender" value=": <?= $datapasien['gender'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="alamat" value=": <?= $datapasien['alamat'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="inputPassword" class="col-sm-4 col-form-label">Jenis Bayar</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="pj" value=": <?= $data['jenisBayar'] ?>">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                       <div class="col-12">
                                          <table class="table table-primary table-responsive table-striped">
                                             <thead class="bg-dark">
                                                <tr class="table-success">
                                                   <th></th>
                                                   <th class="text-dark">Kelas</th>
                                                   <th class="text-dark">Ruangan</th>
                                                   <th class="text-dark">Kamar</th>
                                                   <th class="text-dark">No.Bed</th>
                                                   <th class="text-center"></th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php
                                                $query = tampildata("SELECT * FROM ruanganRI");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <tr>
                                                      <?php
                                                      $status = $row['statusBed'];
                                                      if ($status == 0) {
                                                         $color = 'success';
                                                      } elseif ($status == 1) {
                                                         $color = 'primary';
                                                      } elseif ($status == 2) {
                                                         $color = 'danger';
                                                      } elseif ($status == 3) {
                                                         $color = 'warning';
                                                      }
                                                      ?>
                                                      <td class="bg-<?= $color ?>"></td>
                                                      <td><?= $row['kelas'] ?></td>
                                                      <td><?= $row['ruangan'] ?></td>
                                                      <td><?= $row['kamar'] ?></td>
                                                      <td><?= $row['noBed'] ?></td>
                                                      <td class="text-center col-1">
                                                         <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add<?= $row['id'] ?>">Gunakan</button>
                                                      </td>
                                                   </tr>
                                                <?php endforeach ?>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <hr>
                                    Keterangan Warna : <span class="badge bg-success">Tersedia</span>
                                    <span class="badge bg-primary">Sedang Digunakan</span>
                                    <span class="badge bg-danger">Rusak</span> <span class="badge bg-warning">Proses Pasien Pulang</span>
                                 </div>
                                 <div class="tab-pane fade" id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                                    <div class="row">
                                       <div class="col-5">
                                          <div class="row">
                                             <label for="noRegistrasi" class="col-sm-4 col-form-label">No.Registrasi</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="noRegistrasi" value=": <?= $data['nomorRegistrasi'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="noRawat" class="col-sm-4 col-form-label">No.Rawat</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="noRawat" value=": <?= $data['nomorRawat'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="tglVisit" class="col-sm-4 col-form-label">Tgl.Registrasi</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="tglVisit" value=": <?= $data['tanggalVisit'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="layanan" class="col-sm-4 col-form-label">Layanan Unit</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="layanan" value=": <?= $data['layanan'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="dokter" class="col-sm-4 col-form-label">Dokter</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="dokter" value=": <?= $data['dokter'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="kondisiMasuk" class="col-sm-4 col-form-label">Kondisi Masuk</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="kondisiMasuk" value=": <?= $data['kondisiMasuk'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="catatan" class="col-sm-4 col-form-label">Catatan</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="catatan" value=": <?= $data['catatan'] ?>">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-6">
                                          <div class="row">
                                             <label for="nomorRM" class="col-sm-4 col-form-label">No.Rekam Medik</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="nomorRM" value=": <?= $datapasien['nomorRM'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="namaPasien" class="col-sm-4 col-form-label">Nama Pasien</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="namaPasien" value=": <?= $datapasien['namaPasien'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="ttl" class="col-sm-4 col-form-label">TTL</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="ttl" value=": <?= $datapasien['tempatLahir'] ?>/<?= $datapasien['tanggalLahir'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="agama" value=": <?= $datapasien['agama'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="gender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="gender" value=": <?= $datapasien['gender'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="alamat" value=": <?= $datapasien['alamat'] ?>">
                                             </div>
                                          </div>
                                          <div class="row">
                                             <label for="inputPassword" class="col-sm-4 col-form-label">Jenis Bayar</label>
                                             <div class="col-sm-8">
                                                <input type="text" readonly class="form-control-plaintext" id="pj" value=": <?= $data['jenisBayar'] ?>">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                       <div class="col-12">
                                          <table class="table table-primary table-responsive table-striped">
                                             <thead class="bg-dark">
                                                <tr class="table-success">
                                                   <th></th>
                                                   <th class="text-dark">Ruangan</th>
                                                   <th class="text-dark">No.Bed</th>
                                                   <th class="text-center"></th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php
                                                $query = tampildata("SELECT * FROM ruanganICU");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <tr>
                                                      <?php
                                                      $status = $row['statusBed'];
                                                      if ($status == 0) {
                                                         $color = 'success';
                                                      } elseif ($status == 1) {
                                                         $color = 'primary';
                                                      } elseif ($status == 2) {
                                                         $color = 'danger';
                                                      } elseif ($status == 3) {
                                                         $color = 'warning';
                                                      }
                                                      ?>
                                                      <td class="bg-<?= $color ?>"></td>
                                                      <td><?= $row['ruangan'] ?></td>
                                                      <td><?= $row['noBed'] ?></td>
                                                      <td class="text-center col-1">
                                                         <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add<?= $row['id'] ?>">Gunakan</button>
                                                      </td>
                                                   </tr>
                                                <?php endforeach ?>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <hr>
                                    Keterangan Warna : <span class="badge bg-success">Tersedia</span>
                                    <span class="badge bg-primary">Sedang Digunakan</span>
                                    <span class="badge bg-danger">Rusak</span> <span class="badge bg-warning">Proses Pasien Pulang</span>

                                 </div>
                                 <div class="tab-pane fade" id="pills-idcard" role="tabpanel" aria-labelledby="pills-idcard-tab">
                                    <form action="" method="POST">
                                       <div class="row">
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="transportasi" class="col-sm-2 col-form-label">Transportasi</label>
                                                <div class="col-sm-3">
                                                   <select name="kategori" class="form-select" id="transportasi" required="">
                                                      <option value="">Pilih</option>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM transportasi");
                                                      ?>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['transportasi'] ?>"><?= $row['transportasi'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                                <div class="col-sm-2">
                                                   <input type="date" class="form-control" name="tanggal" required="">
                                                </div>
                                                <div class="col-sm-2">
                                                   <input type="time" class="form-control" name="waktu" required="">
                                                </div>
                                                <div class="col-sm-3">
                                                   <input type="text" class="form-control" name="supir" placeholder="Driver" required="">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-3">
                                                   <button class="btn btn-success" type="submit" name="simpanID">Simpan</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
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