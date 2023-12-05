<?php
session_start();
$page = "Admisi Lab";
require '../../db/connect.php';
require '../../controller/admisi/admisi.php';
require 'view.php';
$query = tampildata("SELECT * FROM pasien_visit LEFT OUTER JOIN pasien ON pasien.uid_pasien = pasien_visit.uid_pasien WHERE sumber='Lab' AND status_visit=0");
$data = mysqli_query($koneksi, "SELECT id FROM pasien_visit WHERE sumber='Lab'  AND status_visit=0");
$totaldata = mysqli_num_rows($data);
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
                        <h3><?= $page ?></h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="admisi/index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Pendaftaran</li>
                           <li class="breadcrumb-item">Onsite</li>
                           <li class="breadcrumb-item active">Lab</li>
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
                                    <a href="admisi/admisi-list?tipe=1&id=1">
                                       <div class="btn btn-outline-primary btn-sm"> <i data-feather="list"></i>Daftar Pasien</div>
                                    </a>
                                    <a href="admisi/admisi-add?sumber=RJ">
                                       <div class="btn btn-primary btn-sm"> <i data-feather="plus-square"></i>Baru</div>
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
                                          <th>Registrasi</th>
                                          <th>No.Pendaftaran</th>
                                          <th>No.RM</th>
                                          <th>Pasien</th>
                                          <th>Gender</th>
                                          <th>Asal</th>
                                          <th>Dokter</th>
                                          <th class="text-center">Aksi</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['status_visit'];
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
                                             <td><?= $row['tanggal'] ?> <?= $row['waktu'] ?></td>
                                             <td><?= $row['nomor_visit'] ?></td>
                                             <td><?= $row['nomor_rm'] ?></td>
                                             <td><?= $row['nama_pasien'] ?></td>
                                             <td><?= $row['gender'] ?></td>
                                             <td><?= $row['layanan'] ?></td>
                                             <td><?= $row['dokter'] ?></td>
                                             <td class="text-center col-1">
                                                <div class="dropdown">
                                                   <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      Actions
                                                   </button>
                                                   <ul class="dropdown-menu">
                                                      <li><a class="dropdown-item" href="admisi/admisi-add-detail?tipe=1&id=<?= $row['uid_pasien'] ?>&status=1">Lihat Data</a></li>
                                                      <li><a class="dropdown-item" href="admisi/admisi-ri-detail?tipe=1&id=<?= $row['uid_pasien'] ?>&status=1">Lengkapi Pendaftaran</a></li>
                                                      <li><a class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#batal<?= $row['id'] ?>" href="javascript:;">Batal</a></li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>


                                          <!-- Modal -->
                                          <div class="modal fade" id="batal<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Pembatalan Layanan Pasien</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <form action="" method="POST">
                                                      <input type="hidden" name="id" value="<?= $row['uid_pasien'] ?>">
                                                      <div class="modal-body">
                                                         <div class="mb-3">
                                                            <label for="nomorRM" class="form-label">No.RM</label>
                                                            <input type="text" class="form-control" readonly id="nomorRM" value="<?= $row['nomor_rm'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="namapasien" class="form-label">Nama Pasien</label>
                                                            <input type="text" class="form-control" readonly id="namapasien" value="<?= $row['nama_pasien'] ?>">
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
                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
                              </div>
                              <hr>
                              Keterangan Warna : <span class="badge bg-warning">Registrasi</span>
                              <span class="badge bg-danger">Antrian</span> <span class="badge bg-success">Dilayani</span>
                              <span class="badge bg-dark">Batal</span> <span class="badge bg-secondary">Dipulangkan</span>
                              <span class="badge bg-info">Rujukan</span><span class="badge bg-primary">Checkin JKN</span>
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
         require '../../template/footer.php';
         ?>
      </div>
   </div>


   <?php
   require 'library.php';
   ?>
</body>

</html>