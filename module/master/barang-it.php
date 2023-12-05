<?php
$page = "Barang IT";
require '../admin/view.php';
require '../../controller/master/barang.php';
$query = tampildata("SELECT * FROM barang_it");
$data = mysqli_query($koneksi, "SELECT id FROM barang_it");
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
                        <h3>Barang IT</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Barang</li>
                           <li class="breadcrumb-item active">IT</li>
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
                                          <th>Jenis</th>
                                          <th>Kategori</th>
                                          <th>Satuan</th>
                                          <th>Nama Barang</th>
                                          <th>Catatan</th>
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
                                             <td><?= $row['jenis'] ?></td>
                                             <td><?= $row['kategori'] ?></td>
                                             <td><?= $row['satuan'] ?></td>
                                             <td>
                                                <?= $row['nama_barang'] ?>
                                                <br>
                                                <span class="badge bg-danger">Barcode : <?= $row['barcode'] ?></span>
                                             </td>
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
                                                      <input type="hidden" name="tipe" value="5">
                                                      <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                      <div class="modal-body">
                                                         <div class="mb-3">
                                                            <label for="kategori" class="form-label">Kategori</label>
                                                            <select name="kategori" id="kategori" class="form-select" required="">
                                                               <?php
                                                               $query = tampildata("SELECT * FROM barang_kategori WHERE tipe=5");
                                                               ?>
                                                               <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
                                                               <?php foreach ($query as $data) : ?>
                                                                  <option value="<?= $data['kategori'] ?>"><?= $data['kategori'] ?></option>
                                                               <?php endforeach ?>
                                                            </select>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="jenis" class="form-label">Jenis</label>
                                                            <select name="jenis" id="jenis" class="form-select" required="">
                                                               <?php
                                                               $query = tampildata("SELECT * FROM barang_jenis WHERE tipe=5");
                                                               ?>
                                                               <option value="<?= $row['jenis'] ?>"><?= $row['jenis'] ?></option>
                                                               <?php foreach ($query as $data) : ?>
                                                                  <option value="<?= $data['jenis'] ?>"><?= $data['jenis'] ?></option>
                                                               <?php endforeach ?>
                                                            </select>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="satuan" class="form-label">Satuan</label>
                                                            <select name="satuan" id="satuan" class="form-select" required="">
                                                               <?php
                                                               $query = tampildata("SELECT * FROM satuan WHERE tipe=5");
                                                               ?>
                                                               <option value="<?= $row['satuan'] ?>"><?= $row['satuan'] ?></option>
                                                               <?php foreach ($query as $data) : ?>
                                                                  <option value="<?= $data['satuan'] ?>"><?= $data['satuan'] ?></option>
                                                               <?php endforeach ?>
                                                            </select>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama Barang</label>
                                                            <input type="text" value="<?= $row['nama_barang'] ?>" required="" name="nama" id="nama" class="form-control">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="barcode" class="form-label">Barcode ID</label>
                                                            <input type="text" name="barcode" value="<?= $row['barcode'] ?>" id="barcode" class="form-control">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="catatan" class="form-label">Catatan</label>
                                                            <textarea name="catatan" class="form-control" id="catatan" cols="30" rows="5"><?= $row['catatan'] ?></textarea>
                                                         </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="ubahbarang" class="btn btn-primary">Simpan</button>
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
                                                      <input type="hidden" name="tipe" value="5">
                                                      <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                      <div class="modal-body">
                                                         <p>Apakah anda yakin menghapus data barang <strong><?= $row['nama_barang'] ?></strong> secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="hapusbarang" class="btn btn-danger">Ya, Hapus</button>
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
               <input type="hidden" name="tipe" value="5">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="kategori" class="form-label">Kategori</label>
                     <select name="kategori" id="kategori" class="form-select" required="">
                        <?php
                        $query = tampildata("SELECT * FROM barang_kategori WHERE tipe=5");
                        ?>
                        <option value="">PILIH</option>
                        <?php foreach ($query as $data) : ?>
                           <option value="<?= $data['kategori'] ?>"><?= $data['kategori'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="jenis" class="form-label">Jenis</label>
                     <select name="jenis" id="jenis" class="form-select" required="">
                        <?php
                        $query = tampildata("SELECT * FROM barang_jenis WHERE tipe=5");
                        ?>
                        <option value="">PILIH</option>
                        <?php foreach ($query as $data) : ?>
                           <option value="<?= $data['jenis'] ?>"><?= $data['jenis'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>

                  <div class="mb-3">
                     <label for="satuan" class="form-label">Satuan</label>
                     <select name="satuan" id="satuan" class="form-select" required="">
                        <?php
                        $query = tampildata("SELECT * FROM satuan WHERE tipe=5");
                        ?>
                        <option value="">PILIH</option>
                        <?php foreach ($query as $data) : ?>
                           <option value="<?= $data['satuan'] ?>"><?= $data['satuan'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="nama" class="form-label">Nama Barang</label>
                     <input type="text" required="" name="nama" id="nama" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="barcode" class="form-label">Barcode ID</label>
                     <input type="text" name="barcode" id="barcode" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="catatan" class="form-label">Catatan</label>
                     <textarea name="catatan" class="form-control" id="catatan" cols="30" rows="5"></textarea>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanbarang" class="btn btn-primary">Simpan</button>
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