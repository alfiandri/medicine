<?php
$page = "Status PTKP";
require '../admin/view.php';
require '../../controller/master/hrd.php';
$query = tampildata("SELECT * FROM status_ptkp");
$data = mysqli_query($koneksi, "SELECT id FROM status_ptkp");
$totaldata = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require '../admin/head.php';
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
         require '../admin/sidebar.php';
         ?>
         <!-- Page Sidebar Ends-->
         <div class="page-body">
            <div class="container-fluid">
               <div class="page-title">
                  <div class="row">
                     <div class="col-6">
                        <h3>Status Karyawan</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">HRD</li>
                           <li class="breadcrumb-item active">Status PTKP</li>
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
                                 <p>Total data
                                    <strong><?= $totaldata ?></strong> <?= $page ?>
                                 </p>
                                 <div class="media-body text-end">
                                    <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add"> <i data-feather="plus-square"></i>Tambah</div>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display" id="basic-2">
                                    <thead>
                                       <tr>
                                          <th class="col-1"></th>
                                          <th>Golongan</th>
                                          <th>Keterangan</th>
                                          <th class="text-center col-1">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['status'];
                                             if ($status == 1) {
                                                $warna = 'bg-success'; //Active
                                             } else if ($status == 0) {
                                                $warna = 'bg-danger'; //InActive
                                             }
                                             ?>
                                             <td class="<?= $warna ?>"></td>
                                             <td><?= $row['golongan'] ?></td>
                                             <td>
                                                <table class="table">
                                                   <thead>
                                                      <tr>
                                                         <th>Kode</th>
                                                         <th>Tarif PTKP</th>
                                                         <th class="text-center">Actions</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <?php
                                                      $id = $row['id'];
                                                      $query = tampildata("SELECT * FROM status_ptkp_detail WHERE golongan='$id'");
                                                      ?>
                                                      <?php foreach ($query as $d) : ?>
                                                         <tr>
                                                            <td><?= $d['kode'] ?></td>
                                                            <td><?= number_format($d['tarif']) ?></td>
                                                            <td class="text-center">
                                                               <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubahptkp<?= $d['id'] ?>">Ubah</button>
                                                               <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusptkp<?= $d['id'] ?>">Hapus</button>
                                                            </td>
                                                         </tr>


                                                         <!-- Modal -->
                                                         <div class="modal fade" id="ubahptkp<?= $d['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <h1 class="modal-title fs-5" id="staticBackdropLabel">Perubahan Data</h1>
                                                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                  </div>
                                                                  <form action="" method="POST">
                                                                     <input type="hidden" name="id" value="<?= $d['id'] ?>">
                                                                     <div class="modal-body">
                                                                        <div class="mb-3">
                                                                           <label for="kode" class="form-label">Kode</label>
                                                                           <input type="text" required="" value="<?= $d['kode'] ?>" name="kode" id="kode" class="form-control">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                           <label for="tarif" class="form-label">Tarif</label>
                                                                           <input type="number" value="<?= $d['tarif'] ?>" required="" name="tarif" id="tarif" class="form-control">
                                                                        </div>
                                                                     </div>
                                                                     <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit" name="ubahtarif" class="btn btn-primary">Simpan</button>
                                                                     </div>
                                                                  </form>
                                                               </div>
                                                            </div>
                                                         </div>

                                                         <!-- Modal -->
                                                         <div class="modal fade" id="hapusptkp<?= $d['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                               <div class="modal-content">
                                                                  <div class="modal-header">
                                                                     <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
                                                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                  </div>
                                                                  <form action="" method="POST">
                                                                     <input type="hidden" name="id" value="<?= $d['id'] ?>">
                                                                     <div class="modal-body">
                                                                        <p>Apakah anda yakin menghapus data kode <strong><?= $d['kode'] ?></strong> secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                                     </div>
                                                                     <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit" name="hapustarif" class="btn btn-danger">Ya, Hapus</button>
                                                                     </div>
                                                                  </form>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      <?php endforeach ?>
                                                   </tbody>
                                                </table>
                                             </td>
                                             <td class="text-center col-3">
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add<?= $row['id'] ?>">Tarif PTKP</button>
                                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubah<?= $row['id'] ?>">Ubah</button>
                                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?= $row['id'] ?>">Hapus</button>
                                             </td>
                                          </tr>


                                          <!-- Modal -->
                                          <div class="modal fade" id="add<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <form action="" method="POST">
                                                      <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                      <div class="modal-body">
                                                         <div class="mb-3">
                                                            <label for="kode" class="form-label">Kode</label>
                                                            <input type="text" required="" name="kode" id="kode" class="form-control">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="tarif" class="form-label">Tarif</label>
                                                            <input type="number" required="" name="tarif" id="tarif" class="form-control">
                                                         </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="simpantarif" class="btn btn-primary">Simpan</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>

                                          <!-- Modal -->
                                          <div class="modal fade" id="ubah<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Perubahan Data</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <form action="" method="POST">
                                                      <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                      <div class="modal-body">
                                                         <div class="mb-3">
                                                            <label for="golongan" class="form-label">Golongan</label>
                                                            <input type="text" required="" value="<?= $row['golongan'] ?>" name="golongan" id="golongan" class="form-control">
                                                         </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="ubahptkp" class="btn btn-primary">Simpan</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>

                                          <!-- Modal -->
                                          <div class="modal fade" id="hapus<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <form action="" method="POST">
                                                      <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                      <div class="modal-body">
                                                         <p>Apakah anda yakin menghapus data golongan <strong><?= $row['golongan'] ?></strong> secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="hapusptkp" class="btn btn-danger">Ya, Hapus</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
                                 <hr>
                                 Keterangan Warna : <span class="badge bg-success">Active</span>
                                 <span class="badge bg-danger">InActive</span>
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



   <!-- Modal -->
   <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="golongan" class="form-label">Golongan</label>
                     <input type="text" required="" name="golongan" id="golongan" class="form-control">
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanptkp" class="btn btn-primary">Simpan</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <?php
   include '../admin/library.php';
   ?>
</body>

</html>