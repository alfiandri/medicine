<?php
$path = 'master';
$page = "Pasien";
require '../admin/view.php';
require '../../controller/master/pasien.php';
$query = tampildata("SELECT * FROM pasien");
$data = mysqli_query($koneksi, "SELECT id FROM pasien");
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
                        <h3>Pasien</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Pasien</li>
                           <li class="breadcrumb-item active">List </li>
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
                                          <th></th>
                                          <th>No.RM</th>
                                          <th>Nama Lengkap</th>
                                          <th>TTL</th>
                                          <th>Agama</th>
                                          <th class="text-center">L/P</th>
                                          <th>Alamat</th>
                                          <th class="text-center">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['status_pasien'];
                                             if ($status == 2) {
                                                $warna = 'bg-success'; //Active
                                             } else {
                                                $warna = 'bg-danger'; //Active
                                             }
                                             ?>
                                             <td class="<?= $warna ?>"></td>
                                             <td><?= $row['nomor_rm'] ?></td>
                                             <td><?= $row['nama_pasien'] ?></td>
                                             <td><?= $row['tempat_lahir'] ?> / <?= $row['tanggal_lahir'] ?></td>
                                             <td><?= $row['agama'] ?></td>
                                             <td class="text-center"><?= $row['gender'] ?></td>
                                             <td><?= $row['alamat'] ?></td>
                                             <td class="text-center">
                                                <a href="<?= $path ?>/pasien-detail?tipe=1&id=<?= $row['uid_pasien'] ?>">
                                                   <button class="btn btn-primary btn-xs">Detail</button>
                                                </a>
                                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?= $row['id'] ?>">Hapus</button>
                                             </td>
                                          </tr>
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
                                                         <p>Apakah anda yakin menghapus data pasien <strong><?= $row['nama_pasien'] ?></strong> secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="hapuspasien" class="btn btn-danger">Ya, Hapus</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
                                 <hr>
                                 Keterangan Warna : <span class="badge bg-success">Baru</span>
                                 <span class="badge bg-danger">Lama</span>
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
                     <label for="nomorrm" class="form-label">Nomor RM</label>
                     <input type="text" required="" name="nomorrm" id="nomorrm" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="nama" class="form-label">Nama Lengkap</label>
                     <input type="text" required="" name="nama" id="nama" class="form-control">
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="mb-3">
                           <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                           <input type="text" required="" name="tempatlahir" id="tempatlahir" class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="mb-3">
                           <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                           <input type="date" required="" name="tanggallahir" id="tanggallahir" class="form-control">
                        </div>
                     </div>
                  </div>

                  <div class="mb-3">
                     <label for="agama" class="form-label">Agama</label>
                     <select name="agama" required="" class="form-select" id="agama">
                        <?php
                        $query = tampildata("SELECT * FROM agama WHERE statusAgama=1");
                        ?>
                        <option selected>Pilih</option>
                        <?php foreach ($query as $row) : ?>
                           <option value="<?= $row['agama'] ?>"><?= $row['agama'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="gender" class="form-label">Jenis Kelamin</label>
                     <select name="gender" required="" class="form-select" id="gender">
                        <?php
                        $query = tampildata("SELECT * FROM gender WHERE statusGender=1");
                        ?>
                        <option selected>Pilih</option>
                        <?php foreach ($query as $row) : ?>
                           <option value="<?= $row['gender'] ?>"><?= $row['gender'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="alamat" class="form-label">Alamat</label>
                     <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="3"></textarea>
                  </div>

               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanpasien" class="btn btn-primary">Simpan</button>
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