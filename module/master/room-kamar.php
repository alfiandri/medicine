<?php
$page = "Ruangan Kamar";
require '../admin/view.php';
require '../../controller/master/ruangan.php';
$query = tampildata("SELECT * FROM ruangan_kamar");
$data = mysqli_query($koneksi, "SELECT id FROM ruangan_kamar");
$totaldata = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require '../admin/head.php';
   ?>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                        <h3>Kamar</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Ruangan</li>
                           <li class="breadcrumb-item active">Kamar</li>
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
                                          <th>Gedung</th>
                                          <th>Lantai</th>
                                          <th>Kamar</th>
                                          <th>Kelas</th>
                                          <th class="text-center">Total Kamar</th>
                                          <th class="text-center">Total Tempat Tidur</th>
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
                                             <td><?= $row['gedung'] ?></td>
                                             <td><?= $row['lantai'] ?></td>
                                             <td><?= $row['kamar'] ?></td>
                                             <td><?= $row['kelas'] ?></td>
                                             <td class="text-center"><?= number_format($row['total_kamar']) ?></td>
                                             <td class="text-center">
                                                <?php
                                                $kode = $row['kamar'];
                                                $data = mysqli_query($koneksi, "SELECT id FROM ruangan_tt WHERE kamar='$kode'");
                                                $totaldata = mysqli_num_rows($data);
                                                ?>
                                                <?= number_format($totaldata) ?>
                                             </td>
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
                                                            <label for="gedung" class="form-label">Gedung</label>
                                                            <?php
                                                            $query = tampildata("SELECT * FROM ruangan_gedung")
                                                            ?>
                                                            <select name="gedung" id="gedung" class="form-select">
                                                               <option value="<?= $row['gedung'] ?>"><?= $row['gedung'] ?></option>
                                                               <?php foreach ($query as $data) : ?>
                                                                  <option value="<?= $data['gedung'] ?>"><?= $data['gedung'] ?></option>
                                                               <?php endforeach ?>
                                                            </select>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="lantai" class="form-label">Lantai</label>
                                                            <?php
                                                            $query = tampildata("SELECT * FROM ruangan_lantai")
                                                            ?>
                                                            <select name="lantai" id="lantai" class="form-select">
                                                               <option value="<?= $row['lantai'] ?>"><?= $row['lantai'] ?></option>
                                                               <?php foreach ($query as $data) : ?>
                                                                  <option value="<?= $data['lantai'] ?>"><?= $data['lantai'] ?></option>
                                                               <?php endforeach ?>
                                                            </select>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama Kamar</label>
                                                            <input type="text" value="<?= $row['kamar'] ?>" required="" name="nama" id="nama" class="form-control">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="kelas" class="form-label">Kelas</label>
                                                            <?php
                                                            $query = tampildata("SELECT * FROM ruangan_kelas")
                                                            ?>
                                                            <select name="kelas" id="kelas" class="form-select">
                                                               <option value="<?= $row['kelas'] ?>"><?= $row['kelas'] ?></option>
                                                               <?php foreach ($query as $data) : ?>
                                                                  <option value="<?= $data['kelas'] ?>"><?= $data['kelas'] ?></option>
                                                               <?php endforeach ?>
                                                            </select>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="totalkamar" class="form-label">Total Kamar</label>
                                                            <input type="number" value="<?= $row['total_kamar'] ?>" required="" name="totalkamar" id="totalkamar" class="form-control">
                                                         </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="ubahkamar" class="btn btn-primary">Simpan</button>
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
                                                         <p>Apakah anda yakin menghapus data kamar <strong><?= $row['kamar'] ?></strong> secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="hapuskamar" class="btn btn-danger">Ya, Hapus</button>
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
         <?php if (@$_SESSION['sukses']) { ?>
            <script>
               swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
            </script>
         <?php unset($_SESSION['sukses']);
         } ?>
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
                     <label for="gedung" class="form-label">Gedung</label>
                     <?php
                     $query = tampildata("SELECT * FROM ruangan_gedung")
                     ?>
                     <select name="gedung" id="gedung" class="form-select">
                        <option value="">PILIH</option>
                        <?php foreach ($query as $data) : ?>
                           <option value="<?= $data['gedung'] ?>"><?= $data['gedung'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="lantai" class="form-label">Lantai</label>
                     <?php
                     $query = tampildata("SELECT * FROM ruangan_lantai")
                     ?>
                     <select name="lantai" id="lantai" class="form-select">
                        <option value="">PILIH</option>
                        <?php foreach ($query as $data) : ?>
                           <option value="<?= $data['lantai'] ?>"><?= $data['lantai'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="nama" class="form-label">Nama Kamar</label>
                     <input type="text" required="" name="nama" id="nama" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="kelas" class="form-label">Kelas</label>
                     <?php
                     $query = tampildata("SELECT * FROM ruangan_kelas")
                     ?>
                     <select name="kelas" id="kelas" class="form-select">
                        <option value="">PILIH</option>
                        <?php foreach ($query as $data) : ?>
                           <option value="<?= $data['kelas'] ?>"><?= $data['kelas'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="totalkamar" class="form-label">Total Kamar</label>
                     <input type="number" required="" name="totalkamar" id="totalkamar" class="form-control">
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpankamar" class="btn btn-primary">Simpan</button>
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