<?php
$page = "User List";
require '../admin/view.php';
require '../../controller/master/user.php';
$query = tampildata("SELECT * FROM user");
$data = mysqli_query($koneksi, "SELECT id FROM user");
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
                        <h3>User List</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">User</li>
                           <li class="breadcrumb-item active">User List</li>
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
                                          <th>Nama Lengkap</th>
                                          <th>Username</th>
                                          <th>Role</th>
                                          <th>Rilis</th>
                                          <th class="text-center col-1">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['status_user'];
                                             if ($status == 1) {
                                                $warna = 'bg-success'; //Active
                                             } else if ($status == 0) {
                                                $warna = 'bg-danger'; //InActive
                                             }
                                             ?>
                                             <td class="<?= $warna ?>"></td>
                                             <td><?= $row['fullname'] ?></td>
                                             <td><?= $row['username'] ?></td>
                                             <td><?= $row['roles'] ?></td>
                                             <td><?= $row['create_at'] ?></td>
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
                                                      <input type="hidden" name="id" id="id" value="<?= $row['id'] ?>">
                                                      <div class="modal-body">
                                                         <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                                            <input type="text" required="" value="<?= $row['fullname'] ?>" name="nama" id="nama" class="form-control">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="username" class="form-label">Username</label>
                                                            <input type="text" required="" value="<?= $row['username'] ?>" name="username" id="username" class="form-control">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="password" class="form-label">Password</label>
                                                            <input type="password" value="<?= $row['password'] ?>" required="" name="password" id="password" class="form-control">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="role" class="form-label">Role</label>
                                                            <select name="role" class="form-select" id="role" required="">
                                                               <option value="<?= $row['roles'] ?>"><?= $row['roles'] ?></option>
                                                               <option value="admin">Admin</option>
                                                               <option value="admisi">Admisi</option>
                                                               <option value="ambulance">Ambulance</option>
                                                               <option value="antrian">Antrian</option>
                                                               <option value="aset">Aset</option>
                                                               <option value="audit">Audit</option>
                                                               <option value="blood-bank">Blood Bankd (UTD)</option>
                                                               <option value="console-box-antrian">Console Box Antrian</option>
                                                               <option value="console-box-kiosk">KIOSK</option>
                                                               <option value="diagnostik">Diagnostik</option>
                                                               <option value="display">Display</option>
                                                               <option value="emergency">Emergency</option>
                                                               <option value="farmasi">Farmasi</option>
                                                               <option value="fisioterapi">Fisioterapi</option>
                                                               <option value="hemodialisas">Hemodialisas</option>
                                                               <option value="hrd">HRD (Kepegawaian)</option>
                                                               <option value="inpatient">Rawat Jalan</option>
                                                               <option value="integrasi">Integrasi</option>
                                                               <option value="jenazah">Kamar Jenazah</option>
                                                               <option value="kasir">Kasir</option>
                                                               <option value="keuangan">Keuangan</option>
                                                               <option value="laboratorium">Laboratorium</option>
                                                               <option value="laundry">Laundry</option>
                                                               <option value="logistic">Logistic</option>
                                                               <option value="maintenance">Perawatan & Perbaikan</option>
                                                               <option value="mcu">MCU</option>
                                                               <option value="ok">Kamar Operasi & Kamar Bersalin</option>
                                                               <option value="outpatient">Rawat Inap</option>
                                                               <option value="patologi">Patologi</option>
                                                               <option value="purchase">Purchase</option>
                                                               <option value="rekammedis">Rekam Medis</option>
                                                               <option value="ris">Radiologi</option>
                                                               <option value="simulasi-jkn">Simulasi JKN</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="ubahuser" class="btn btn-primary">Simpan</button>
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
                                                         <p>Apakah anda yakin menghapus data user <strong><?= $row['fullname'] ?></strong> secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="hapususer" class="btn btn-danger">Ya, Hapus</button>
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
                     <label for="nama" class="form-label">Nama Lengkap</label>
                     <input type="text" required="" name="nama" id="nama" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="username" class="form-label">Username</label>
                     <input type="text" required="" name="username" id="username" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="password" class="form-label">Password</label>
                     <input type="password" required="" name="password" id="password" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="role" class="form-label">Role</label>
                     <select name="role" class="form-select" id="role" required="">
                        <option value="">PILIH</option>
                        <option value="admin">Admin</option>
                        <option value="admisi">Admisi</option>
                        <option value="ambulance">Ambulance</option>
                        <option value="antrian">Antrian</option>
                        <option value="aset">Aset</option>
                        <option value="audit">Audit</option>
                        <option value="blood-bank">Blood Bankd (UTD)</option>
                        <option value="console-box-antrian">Console Box Antrian</option>
                        <option value="console-box-kiosk">KIOSK</option>
                        <option value="diagnostik">Diagnostik</option>
                        <option value="display">Display</option>
                        <option value="emergency">Emergency</option>
                        <option value="farmasi">Farmasi</option>
                        <option value="fisioterapi">Fisioterapi</option>
                        <option value="hemodialisas">Hemodialisas</option>
                        <option value="hrd">HRD (Kepegawaian)</option>
                        <option value="inpatient">Rawat Jalan</option>
                        <option value="integrasi">Integrasi</option>
                        <option value="jenazah">Kamar Jenazah</option>
                        <option value="kasir">Kasir</option>
                        <option value="keuangan">Keuangan</option>
                        <option value="laboratorium">Laboratorium</option>
                        <option value="laundry">Laundry</option>
                        <option value="logistic">Logistic</option>
                        <option value="maintenance">Perawatan & Perbaikan</option>
                        <option value="mcu">MCU</option>
                        <option value="ok">Kamar Operasi & Kamar Bersalin</option>
                        <option value="outpatient">Rawat Inap</option>
                        <option value="patologi">Patologi</option>
                        <option value="purchase">Purchase</option>
                        <option value="rekammedis">Rekam Medis</option>
                        <option value="ris">Radiologi</option>
                        <option value="simulasi-jkn">Simulasi JKN</option>
                     </select>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanuser" class="btn btn-primary">Simpan</button>
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