<?php
$page = "BPJS Antrean";
$kode = 3;
require '../admin/view.php';
require '../../controller/bpjs/setting.php';
$query = tampildata("SELECT * FROM setting_anteran");
$data = mysqli_query($koneksi, "SELECT id FROM setting_anteran");
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
                        <h3>BPJS Antrean</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Cons ID BPJS Services</li>
                           <li class="breadcrumb-item active">Antrean</li>
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
                                          <th>Stag</th>
                                          <th>Base URL</th>
                                          <th>CONS</th>
                                          <th>Secret Key</th>
                                          <th>User Key</th>
                                          <th>Service</th>
                                          <th class="text-center">Actions</th>
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
                                             <td>
                                                <?php
                                                $lv = $row['level'];
                                                if ($lv == 0) {
                                                   $ket = 'Development';
                                                } else {
                                                   $ket = 'Production';
                                                }
                                                ?>
                                                <?= $ket ?>
                                             </td>
                                             <td><?= $row['base_url'] ?></td>
                                             <td><?= $row['cons_id'] ?></td>
                                             <td><?= $row['secret_key'] ?></td>
                                             <td><?= $row['user_key'] ?></td>
                                             <td><?= $row['service_name'] ?></td>
                                             <td class="text-center col-2">
                                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubah<?= $row['id'] ?>">Ubah</button>

                                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?= $row['id'] ?>">Hapus</button>
                                             </td>
                                          </tr>

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
                                                            <label for="stag" class="form-label">Stag Level</label>
                                                            <select name="stag" id="stag" class="form-select" required="">
                                                               <?php
                                                               $lv = $row['level'];
                                                               if ($lv == 0) {
                                                                  $ket = 'Development';
                                                               } else {
                                                                  $ket = 'Production';
                                                               }
                                                               ?>
                                                               <option value="<?= $row['level'] ?>"><?= $ket ?></option>
                                                               <option value="0">Development</option>
                                                               <option value="1">Production</option>
                                                            </select>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="baseurl" class="form-label">Base URL</label>
                                                            <input type="text" value="<?= $row['base_url'] ?>" name="baseurl" id="baseurl" class="form-control" required>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="cons" class="form-label">Cons ID</label>
                                                            <input type="text" value="<?= $row['cons_id'] ?>" name="cons" id="cons" class="form-control" required>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="secret" class="form-label">Secret Key</label>
                                                            <input type="text" value="<?= $row['secret_key'] ?>" name="secret" id="secret" class="form-control" required>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="userkey" class="form-label">User Key</label>
                                                            <input type="text" value="<?= $row['user_key'] ?>" name="userkey" id="userkey" class="form-control" required>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="services" class="form-label">Services Name</label>
                                                            <input type="text" name="services" value="<?= $row['service_name'] ?>" id="services" class="form-control" required>
                                                         </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <?php
                                                         $status = $row['status'];
                                                         if ($status == 1) {
                                                            $mdl = 'disable';
                                                            $keterangan = 'InActive';
                                                            $color = 'danger';
                                                            $level = 'Production';
                                                         } else {
                                                            $mdl = 'enable';
                                                            $keterangan = 'Active';
                                                            $color = 'success';
                                                            $level = 'Development';
                                                         }
                                                         ?>
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button class="btn btn-<?= $color ?>" data-bs-toggle="modal" data-bs-target="#<?= $mdl ?><?= $row['id'] ?>"><?= $keterangan ?></button>
                                                         <button type="submit" name="ubahservices" class="btn btn-primary">Simpan</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="modal fade" id="<?= $mdl ?><?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="staticBackdropLabel"><?= $keterangan ?></h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <form action="" method="POST">
                                                      <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                      <input type="hidden" name="tipe" value="<?= $kode ?>">
                                                      <div class="modal-body">
                                                         <p>Apakah anda yakin <strong><?= $mdl ?></strong> level service ini <strong><?= $ket ?></strong> Base URL : <?= $row['base_url'] ?><?= $row['service_name'] ?>, dan pastikan anda mengaktifkan level <strong><?= $level ?></strong> agar service berjalan</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="<?= $mdl ?>" class="btn btn-<?= $color ?>">Ya, <?= $keterangan ?></button>
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
                                                      <input type="te" name="id" value="<?= $row['id'] ?>">
                                                      <input type="hidden" name="tipe" value="<?= $kode ?>">
                                                      <div class="modal-body">
                                                         <p>Apakah anda yakin <strong><?= $mdl ?></strong> level service ini <strong><?= $ket ?></strong> Base URL : <?= $row['base_url'] ?><?= $row['service_name'] ?>, dan pastikan anda mengaktifkan level <strong><?= $level ?></strong> agar service berjalan</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="hapusservices" class="btn btn-danger">Ya, Hapus</button>
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
               <input type="hidden" name="tipe" value="<?= $kode ?>">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="stag" class="form-label">Stag Level</label>
                     <select name="stag" id="stag" class="form-select" required="">
                        <option value="">PILIH</option>
                        <option value="0">Development</option>
                        <option value="1">Production</option>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="baseurl" class="form-label">Base URL</label>
                     <input type="text" name="baseurl" id="baseurl" class="form-control" required>
                  </div>
                  <div class="mb-3">
                     <label for="cons" class="form-label">Cons ID</label>
                     <input type="text" name="cons" id="cons" class="form-control" required>
                  </div>
                  <div class="mb-3">
                     <label for="secret" class="form-label">Secret Key</label>
                     <input type="text" name="secret" id="secret" class="form-control" required>
                  </div>
                  <div class="mb-3">
                     <label for="userkey" class="form-label">User Key</label>
                     <input type="text" name="userkey" id="userkey" class="form-control" required>
                  </div>
                  <div class="mb-3">
                     <label for="services" class="form-label">Services Name</label>
                     <input type="text" name="services" id="services" class="form-control" required>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanservices" class="btn btn-primary">Simpan</button>
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