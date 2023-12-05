<?php
session_start();
$page = "Pemeriksaan Radiologi";
require '../../db/connect.php';
require 'view.php';
require '../../controller/radiologi/hasil.php';
$query = tampildata("SELECT * FROM permintaan_radiologi WHERE status=0");
$data = mysqli_query($koneksi, "SELECT * FROM permintaan_radiologi WHERE status=0");
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
      require '../admin/header.php';
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
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Pusat Registrasi</li>
                           <li class="breadcrumb-item active"><?= $page ?></li>
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
                                       <div class="btn btn-primary btn-sm"> <i data-feather="list"></i>Daftar Antrian</div>
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
                                          <th>No.Permintaan</th>
                                          <th>Tanggal</th>
                                          <th>Waktu</th>
                                          <th>Unit</th>
                                          <th>Catatan</th>
                                          <th>Pemeriksaan</th>
                                          <th class="text-center">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['status'];
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
                                             <td><?= $row['nopermintaan'] ?></td>
                                             <td><?= $row['tanggal'] ?></td>
                                             <td><?= $row['waktu'] ?></td>
                                             <td><?= $row['unit'] ?></td>
                                             <td><?= $row['catatan'] ?></td>
                                             <td class=" col-4">
                                                <?php
                                                $no = $row['nopermintaan'];
                                                $query = tampildata("SELECT * FROM permintaan_radiologi_detail WHERE nopermintaan='$no'")
                                                ?>
                                                <ol class="list-group list-group-numbered">

                                                   <ol class="list-group list-group-numbered">
                                                      <?php foreach ($query as $d) : ?>
                                                         <li class="list-group-item d-flex justify-content-between align-items-start">
                                                            <div class="ms-2 me-auto">
                                                               <div class="fw-bold"><?= $d['radiologi'] ?></div>
                                                               Catatan : <? $d['catatan'] ?>
                                                               <hr>
                                                               Hasil : <?= $d['hasil'] ?>
                                                            </div>
                                                            <span class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hasil<?= $d['id'] ?>">Isi Hasil Pemeriksaan</span>
                                                         </li>
                                                         <!-- Modal -->
                                                         <div class="modal fade" id="hasil<?= $d['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <h1 class="modal-title fs-5" id="staticBackdropLabel">Hasil Pemeriksaan Pasien</h1>
                                                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                  </div>
                                                                  <form action="" method="POST">
                                                                     <input type="hidden" name="id" value="<?= $d['id'] ?>">
                                                                     <div class="modal-body">
                                                                        <div class="mb-3">
                                                                           <label for="hasil" class="form-label">Hasil</label>
                                                                           <textarea name="hasil" class="form-control" id="" cols="30" rows="10" required=""></textarea>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                           <label for="catatan" class="form-label">Upload Hasil</label>
                                                                           <input type="file" class="form-control">
                                                                        </div>
                                                                     </div>

                                                                     <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit" name="simpanhasil" class="btn btn-primary">Simpan</button>
                                                                     </div>
                                                                  </form>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      <?php endforeach ?>
                                                   </ol>

                                                </ol>
                                             </td>
                                             <td class="text-center">
                                                <button class="btn btn-success">Selesai</button>
                                             </td>
                                          </tr>





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