<?php
session_start();
$page = "Status Pasien";
require __DIR__ . '../../../db/connect.php';
require __DIR__ . '../../../controller/intpatient/permintaan.php';
require __DIR__ . '../../../controller/intpatient/status.php';
require __DIR__ . '/view.php';
$id = $_GET['id'];
$info = mysqli_query($koneksi, "SELECT * FROM pasien_visit WHERE uid_pasien='$id'");
$data = mysqli_fetch_array($info);
$infopasien = mysqli_query($koneksi, "SELECT * FROM pasien WHERE uid_pasien='$id'");
$datapasien = mysqli_fetch_array($infopasien);

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
         require 'sidebar-ass.php';
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
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item"><a href="registrasi-awal">Registrasi Awal</a></li>
                           <li class="breadcrumb-item active"><?= $page ?> </li>
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
                                 <li class="nav-item"><a class="nav-link active" id="pills-warninghome-tab" data-bs-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Pemeriksaan</a></li>
                                 <li class="nav-item"><a href="inpatient/registrasi-awal" class="nav-link" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Daftar Pasien</a></li>
                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div class="tab-pane fade show active" id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <form action="" method="POST">
                                       <div class="row">
                                          <div class="col-5">
                                             <div class="row">
                                                <label for="noRegistrasi" class="col-sm-4 col-form-label">No.Registrasi</label>
                                                <div class="col-sm-8">
                                                   <input type="text" readonly class="form-control-plaintext" id="noRegistrasi" value=": <?= $data['nomor_visit'] ?>">
                                                </div>
                                             </div>
                                             <div class="row">
                                                <label for="tglVisit" class="col-sm-4 col-form-label">Tgl.Registrasi</label>
                                                <div class="col-sm-8">
                                                   <input type="text" readonly class="form-control-plaintext" id="tglVisit" value=": <?= $data['tanggal'] ?>">
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
                                                   <input type="text" readonly class="form-control-plaintext" id="kondisiMasuk" value=": <?= $data['kondisi_masuk'] ?>">
                                                </div>
                                             </div>
                                             <div class="row">
                                                <label for="catatan" class="col-sm-4 col-form-label">Catatan</label>
                                                <div class="col-sm-8">
                                                   <input type="text" readonly class="form-control-plaintext" id="catatan" value=": <?= @$data['catatan_kondisi'] ?>">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="row">
                                                <label for="nomorRM" class="col-sm-4 col-form-label">No.Rekam Medik</label>
                                                <div class="col-sm-8">
                                                   <input type="text" readonly class="form-control-plaintext" id="nomorRM" value=": <?= $datapasien['nomor_rm'] ?>">
                                                </div>
                                             </div>
                                             <div class="row">
                                                <label for="namaPasien" class="col-sm-4 col-form-label">Nama Pasien</label>
                                                <div class="col-sm-8">
                                                   <input type="text" readonly class="form-control-plaintext" id="namaPasien" value=": <?= $datapasien['nama_pasien'] ?>">
                                                </div>
                                             </div>
                                             <div class="row">
                                                <label for="ttl" class="col-sm-4 col-form-label">TTL</label>
                                                <div class="col-sm-8">
                                                   <input type="text" readonly class="form-control-plaintext" id="ttl" value=": <?= $datapasien['tempat_lahir'] ?>/<?= $datapasien['tanggal_lahir'] ?>">
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
                                                   <input type="text" readonly class="form-control-plaintext" id="pj" value=": <?= $data['jenis_bayar'] ?>">
                                                </div>
                                             </div>
                                          </div>
                                          <hr>
                                          <div class="row mb-3">
                                             <input type="hidden" name="nomorrm" value="<?= $datapasien['nomor_rm'] ?>">
                                             <input type="hidden" name="kode" value="<?= $datapasien['kodebooking'] ?>">
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="status" class="form-label">Status Pulang</label>
                                                   <select name="status" class="form-select" id="kamstatusar" required="">
                                                      <?php
                                                      $query = tampildata("SELECT * FROM status_pulang ");
                                                      ?>
                                                      <option value="">Pilih</option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['status'] ?>"><?= $row['status'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="mb-3">
                                                   <label for="jenisresep" class="form-label">Jenis Resep</label>
                                                   <select name="jenisresep" class="form-select" id="jenisresep" required="">
                                                      <option value="Tidak ada">Tidak ada</option>
                                                      <option value="Racikan">Racikan</option>
                                                      <option value="Non racikan">Non racikan</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                                <div class="">
                                                   <label for="catatan" class="form-label">Catatan</label>
                                                   <textarea name="catatan" class="form-control" id="catatan" cols="30" rows="5"></textarea>
                                                </div>
                                             </div>
                                          </div>

                                       </div>
                                       <button class="btn btn-success" type="submit" name="simpanstatus">Simpan</button>
                                    </form>
                                 </div>

                                 <div class="tab-pane fade" id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                                    <div class="row">
                                       <div class="col-xl-12 col-md-12 box-col-12">
                                          <div class="file-content">
                                             <div class="card">
                                                <div class="card-body file-manager">
                                                   <div class="table-responsive">
                                                      <table class="table table-sm" id="basic-1">
                                                         <thead>
                                                            <tr>
                                                               <th>No.Tiket</th>
                                                               <th>Tanggal</th>
                                                               <th>Waktu</th>
                                                               <th>Catatan</th>
                                                               <th>Pemeriksaan</th>
                                                               <th class="text-center">Actions</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <?php
                                                            $rm = $datapasien['nomor_rm'];
                                                            $query = tampildata("SELECT * FROM permintaan_radiologi WHERE nomor_rm='$rm'");
                                                            ?>
                                                            <?php foreach ($query as $row) : ?>
                                                               <tr>
                                                                  <td><?= $row['nopermintaan'] ?></td>
                                                                  <td><?= $row['tanggal'] ?></td>
                                                                  <td><?= $row['waktu'] ?></td>
                                                                  <td><?= $row['catatan'] ?></td>
                                                                  <td class="col-4">
                                                                     <?php
                                                                     $no = $row['nopermintaan'];
                                                                     $query = tampildata("SELECT * FROM permintaan_radiologi_detail WHERE nopermintaan='$no'");
                                                                     ?>
                                                                     <ol class="list-group list-group-numbered">
                                                                        <?php foreach ($query as $data) : ?>
                                                                           <li class="list-group-item d-flex justify-content-between align-items-start">
                                                                              <div class="ms-2 me-auto">
                                                                                 <div class="fw-bold"><?= $data['radiologi'] ?></div>
                                                                                 Catatan : <?= $data['catatan'] ?>
                                                                                 <hr>
                                                                                 Hasil : <?= $data['catatan'] ?>
                                                                              </div>
                                                                           </li>
                                                                        <?php endforeach ?>
                                                                     </ol>
                                                                  </td>
                                                                  <td class=" text-center">
                                                                     <?= $data['create_at'] ?>
                                                                  </td>
                                                               </tr>


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
   require '../../template/footer.php';
   ?>
   </div>
   </div>

   <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Permintaan</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
               <input type="hidden" name="nomorrm" value="<?= $datapasien['nomor_rm'] ?>">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="catatan" class="form-label">Catatan</label>
                     <textarea name="catatan" class="form-control" id="" cols="30" rows="10" name="catatan"></textarea>
                  </div>

               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanradiologi" class="btn btn-primary">Simpan</button>
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