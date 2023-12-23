<?php
error_reporting(0);
$page = "Kode Pos";
require '../admin/view.php';
require '../../controller/master/wilayah.php';
$id = " " . $_GET['id'];
$query = tampildata("SELECT * FROM wil_kodepos WHERE kecamatan='$id'");
$data = mysqli_query($koneksi, "SELECT * FROM wil_kodepos WHERE kecamatan='$id'");
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
                        <h3>Kode Pos</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Wilayah</li>
                           <li class="breadcrumb-item active">Kode Pos</li>
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
                                    <div class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#cari"> <i data-feather="filter"></i>Pilih Kecamatan</div>
                                    <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add"> <i data-feather="plus-square"></i>Tambah</div>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display" id="basic-2">
                                    <thead>
                                       <tr>
                                          <th>Kode Wilayah</th>
                                          <th>Kode Pos</th>
                                          <th>Provinsi</th>
                                          <th>Kabupaten</th>
                                          <th>Kecamatan</th>
                                          <th>Kelurahan</th>
                                          <th class="text-center col-1">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <td><?= $row['kode_wilayah'] ?></td>
                                             <td><?= $row['kode_pos'] ?></td>
                                             <td><?= $row['provinsi'] ?></td>
                                             <td><?= $row['kabupaten'] ?></td>
                                             <td><?= $row['kecamatan'] ?></td>
                                             <td><?= $row['kelurahan'] ?></td>
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
                                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <form action="" method="POST">
                                                      <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                      <div class="modal-body">
                                                         <div class="mb-3">
                                                            <label for="provinsi" class="form-label">Provinsi</label>
                                                            <input type="text" name="provinsi" id="provinsi" class="form-control" value="<?= $row['provinsi'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="kabupaten" class="form-label">Kabupaten</label>
                                                            <input type="text" name="kabupaten" id="kabupaten" class="form-control" value="<?= $row['kabupaten'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="kecamatan" class="form-label">Kecamatan</label>
                                                            <input type="text" name="kecamatan" id="kecamatan" class="form-control" value="<?= $row['kecamatan'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="kelurahan" class="form-label">Kelurahan</label>
                                                            <input type="text" name="kelurahan" id="kelurahan" class="form-control" value="<?= $row['kelurahan'] ?>">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="kode_wilayah" class="form-label">Kode Wilayah</label>
                                                            <input type="text" required="" name="kode_wilayah" value="<?= $row['kode_wilayah'] ?>" id="kode_wilayah" class="form-control">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="kodepos" class="form-label">Kode Pos</label>
                                                            <input type="text" required="" name="kodepos" value="<?= $row['kode_pos'] ?>" id="kodepos" class="form-control">
                                                         </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="ubahkodepos" class="btn btn-primary">Simpan</button>
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
                                                         <p>Apakah anda yakin menghapus data kode pos <strong><?= $row['kode_pos'] ?></strong> secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="hapuskodepos" class="btn btn-danger">Ya, Hapus</button>
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
                     <label for="provinsi" class="form-label">Provinsi</label>
                     <?php
                     $query = tampildata("SELECT * FROM wil_provinsi");
                     ?>
                     <input class="form-control" list="dataprov" id="provinsi" name="provinsi" placeholder="Provinsi to search...">
                     <datalist id="dataprov">
                        <?php foreach ($query as $row) : ?>
                           <option value="<?= $row['provinsi'] ?>">
                           <?php endforeach ?>
                     </datalist>
                  </div>
                  <div class="mb-3">
                     <label for="kabupaten" class="form-label">Kabupaten</label>
                     <?php
                     $query = tampildata("SELECT * FROM wil_kabupaten");
                     ?>
                     <input class="form-control" list="datakab" id="kabupaten" name="kabupaten" placeholder="Kabupaten to search...">
                     <datalist id="datakab">
                        <?php foreach ($query as $row) : ?>
                           <option value="<?= $row['kab'] ?>">
                           <?php endforeach ?>
                     </datalist>
                  </div>
                  <div class="mb-3">
                     <label for="kecamatan" class="form-label">Kecamatan</label>
                     <?php
                     $query = tampildata("SELECT * FROM wil_kecamatan");
                     ?>
                     <input class="form-control" list="datakec" id="kecamatan" name="kecamatan" placeholder="Kecamatan to search...">
                     <datalist id="datakec">
                        <?php foreach ($query as $row) : ?>
                           <option value="<?= $row['kec'] ?>">
                           <?php endforeach ?>
                     </datalist>
                  </div>
                  <div class="mb-3">
                     <label for="kelurahan" class="form-label">Kelurahan</label>
                     <?php
                     $query = tampildata("SELECT * FROM wil_kelurahan");
                     ?>
                     <input class="form-control" list="datakel" id="kelurahan" name="kelurahan" placeholder="Kelurahan to search...">
                     <datalist id="datakel">
                        <?php foreach ($query as $row) : ?>
                           <option value="<?= $row['kel'] ?>">
                           <?php endforeach ?>
                     </datalist>
                  </div>
                  <div class="mb-3">
                     <label for="kode_wilayah" class="form-label">Kode Wilayah</label>
                     <input type="text" required="" name="kode_wilayah" id="kode_wilayah" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="kodepos" class="form-label">Kode Pos</label>
                     <input type="text" required="" name="kodepos" id="kodepos" class="form-control">
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpankodepos" class="btn btn-primary">Simpan</button>
               </div>
            </form>
         </div>
      </div>
   </div>


   <!-- Modal -->
   <div class="modal fade" id="cari" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Cari Data</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="kecamatan" class="form-label">Kecamatan</label>
                     <?php
                     $query = tampildata("SELECT * FROM wil_kecamatan");
                     ?>
                     <input class="form-control" list="datakec" id="kecamatan" name="kecamatan" placeholder="Kecamatan to search...">
                     <datalist id="datakec">
                        <?php foreach ($query as $row) : ?>
                           <option value="<?= $row['kec'] ?>">
                           <?php endforeach ?>
                     </datalist>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="carikodepos" class="btn btn-primary">Cari Data</button>
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