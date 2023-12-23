<?php
$path = 'master';
$page = "Jadwal Dokter";
require '../admin/view.php';
require '../../controller/master/dokter.php';
$query = tampildata("SELECT * FROM dokter");
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
                           <li class="breadcrumb-item active">Jadwal </li>
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
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display" id="basic-2">
                                    <thead>
                                       <tr>
                                          <th></th>
                                          <th>Nama Lengkap</th>
                                          <th>Layanan</th>
                                          <th class="col-6 text-center">Jadwal</th>
                                          <th class="text-center">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['status_kehadiran'];
                                             if ($status == 1) {
                                                $warna = 'bg-success'; //Hadir
                                             } else if ($status == 0) {
                                                $warna = 'bg-danger'; //Tidak Hadir
                                             } else if ($status == 3) {
                                                $warna = 'bg-primary'; //Perubahan Jadwal
                                             }
                                             ?>
                                             <td class="<?= $warna ?>"></td>
                                             <td><?= $row['nama'] ?></td>
                                             <td><?= $row['layanan'] ?></td>
                                             <td class="col-5">
                                                <?php
                                                $id = $row['uid_dokter'];
                                                $query = tampildata("SELECT * FROM dokter_sch WHERE uid='$id' ");
                                                ?>
                                                <table class="table">
                                                   <thead>
                                                      <tr>
                                                         <th>Hari</th>
                                                         <th>Waktu</th>
                                                         <th>Status</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <?php foreach ($query as $data) : ?>
                                                         <tr>
                                                            <td><?= $data['hari'] ?></td>
                                                            <td><?= $data['mulai'] ?> s/d <?= $data['akhir'] ?></td>
                                                            <td>
                                                               <?php
                                                               $st = $data['status'];
                                                               if ($st == 1) {
                                                                  $note = 'Hadir';
                                                                  $col = 'bg-success';
                                                               } else {
                                                                  $note = 'Cancel';
                                                                  $col = 'bg-danger';
                                                               }
                                                               ?>
                                                               <span class="badge <?= $col ?>"><?= $note ?></span>
                                                            </td>
                                                         </tr>
                                                      <?php endforeach ?>
                                                   </tbody>
                                                </table>
                                             </td>
                                             <td class="text-center col-2">
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#jadwal<?= $row['uid_dokter'] ?>">Jadwal</button>
                                                <a href="<?= $path ?>/sch-update?id=<?= $row['uid_dokter'] ?>">
                                                   <button class="btn btn-warning">Ubah</button>
                                                </a>
                                             </td>
                                          </tr>
                                          <!-- Modal -->
                                          <div class="modal fade" id="jadwal<?= $row['uid_dokter'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <form action="" method="POST">
                                                      <input type="hidden" name="id" value="<?= $row['uid_dokter'] ?>">
                                                      <div class="modal-body">
                                                         <div class="mb-3">
                                                            <label for="nama" class="form-label">Dokter</label>
                                                            <input type="text" name="nama" readonly class="form-control" value="<?= $row['nama'] ?>">
                                                         </div>
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

                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="simpanjadwal" class="btn btn-primary">Simpan</button>
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

   <?php
   include '../admin/library.php';
   ?>
</body>

</html>