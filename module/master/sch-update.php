<?php
$path = 'master';
$page = "Jadwal Dokter";
require '../admin/view.php';
require '../../controller/master/dokter.php';
$id = $_GET['id'];
$query = tampildata("SELECT * FROM dokter_sch WHERE uid='$id'");
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
                        <h3>Jadwal Dokter</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Dokter</li>
                           <li class="breadcrumb-item active">Perubahan Jadwal </li>
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
                                 <div class="media-body text-end">
                                    <a href="<?= $path ?>/sch">
                                       <div class="btn btn-light btn-sm"> <i data-feather="chevron-left"></i>Kembali</div>
                                    </a>
                                    <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add"> <i data-feather="plus-square"></i>Tambah</div>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display" id="basic-2">
                                    <thead>
                                       <tr>
                                          <th></th>
                                          <th>Hari</th>
                                          <th>Mulai</th>
                                          <th>Akhir</th>
                                          <th>Catatan</th>
                                          <th class="text-center">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['status'];
                                             if ($status == 1) {
                                                $warna = 'bg-success'; //Hadir
                                             } else if ($status == 0) {
                                                $warna = 'bg-danger'; //Tidak Hadir
                                             } else if ($status == 3) {
                                                $warna = 'bg-primary'; //Perubahan Jadwal
                                             }
                                             ?>
                                             <td class="<?= $warna ?>"></td>
                                             <td><?= $row['hari'] ?></td>
                                             <td><?= $row['mulai'] ?></td>
                                             <td><?= $row['akhir'] ?></td>
                                             <td><?= $row['catatan'] ?></td>
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
                                                            <label for="hari" class="form-label">Hari</label>
                                                            <select name="hari" class="form-select" id="hari">
                                                               <option value="<?= $row['hari'] ?>"><?= $row['hari'] ?></option>
                                                               <option value="Senin">Senin</option>
                                                               <option value="Selasa">Selasa</option>
                                                               <option value="Rabu">Rabu</option>
                                                               <option value="Kamis">Kamis</option>
                                                               <option value="Jumat">Jumat</option>
                                                               <option value="Sabtu">Sabtu</option>
                                                               <option value="Minggu">Minggu</option>
                                                            </select>
                                                         </div>
                                                         <div class="mb-3">
                                                            <div class="row">
                                                               <div class="col">
                                                                  <label for="mulai" class="form-label">Mulai</label>
                                                                  <input type="time" value="<?= $row['mulai'] ?>" required="" name="mulai" id="mulai" class="form-control">
                                                               </div>
                                                               <div class="col">
                                                                  <label for="akhir" class="form-label">Akhir</label>
                                                                  <input type="time" value="<?= $row['akhir'] ?>" required="" name="akhir" id="akhir" class="form-control">
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="catatan" class="form-label">Catatan</label>
                                                            <textarea name="catatan" id="catatan" class="form-control" cols="30" rows="5"><?= $row['catatan'] ?></textarea>
                                                         </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="ubahjadwal" class="btn btn-primary">Simpan</button>
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
                                                         <p>Apakah anda yakin menghapus data Jadwal Dokter untuk hari <strong><?= $row['hari'] ?> | <?= $row['mulai'] ?> - <?= $row['akhir'] ?></strong>
                                                            secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="hapusjadwal" class="btn btn-danger">Ya, Hapus</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>

                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
                                 <hr>
                                 Keterangan Warna : <span class="badge bg-success">Hadir</span>
                                 <span class="badge bg-danger">Tidak Hadir</span>
                                 <span class="badge bg-primary">Perubahan Jadwal</span>
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
               <input type="hidden" name="id" value="<?= $id ?>">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="hari" class="form-label">Hari</label>
                     <select name="hari" class="form-select" id="hari">
                        <option selected>Pilih</option>
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                     </select>
                  </div>
                  <div class="mb-3">
                     <div class="row">
                        <div class="col">
                           <label for="mulai" class="form-label">Mulai</label>
                           <input type="time" required="" name="mulai" id="mulai" class="form-control">
                        </div>
                        <div class="col">
                           <label for="akhir" class="form-label">Akhir</label>
                           <input type="time" required="" name="akhir" id="akhir" class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="mb-3">
                     <label for="catatan" class="form-label">Catatan</label>
                     <textarea name="catatan" id="catatan" class="form-control" cols="30" rows="5"></textarea>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanjadwal" class="btn btn-primary">Simpan</button>
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