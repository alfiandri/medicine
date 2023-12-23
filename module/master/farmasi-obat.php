<?php
$page = "Farmasi Obat";
require '../admin/view.php';
require '../../controller/master/farmasi.php';
$query = tampildata("SELECT * FROM obat");
$data = mysqli_query($koneksi, "SELECT id FROM obat");
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
                        <h3>Farmasi Obat</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Farmasi</li>
                           <li class="breadcrumb-item active">Obat</li>
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
                                          <th>Kategori</th>
                                          <th>Jenis</th>
                                          <th>Golongan</th>
                                          <th>Nama Obat</th>
                                          <th>Kandungan</th>
                                          <th>Unit</th>
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
                                             <td><?= $row['kategori'] ?></td>
                                             <td><?= $row['jenis'] ?></td>
                                             <td><?= $row['golongan'] ?></td>
                                             <td><?= $row['nama'] ?>
                                                <br>
                                                <p>
                                                   Alias : <?= $row['alias'] ?>
                                                </p>
                                             </td>
                                             <td><?= $row['kandungan'] ?></td>
                                             <td><?= $row['unit'] ?></td>
                                             <td class="text-center col-2">
                                                <a href="master/obat-detail?tipe=1&id=<?= $row['id'] ?>">
                                                   <button class="btn btn-primary">Detail</button>
                                                </a>
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
                                                         <div class="row">
                                                            <div class="col">
                                                               <div class="mb-3">
                                                                  <label for="kategori" class="form-label">kategori</label>
                                                                  <select name="kategori" id="kategori" class="form-select" required>
                                                                     <?php
                                                                     $query = tampildata("SELECT * FROM barang_kategori WHERE tipe=1");
                                                                     ?>
                                                                     <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
                                                                     <?php foreach ($query as $data) : ?>
                                                                        <option value="<?= $data['kategori'] ?>"><?= $data['kategori'] ?></option>
                                                                     <?php endforeach ?>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                            <div class="col">
                                                               <div class="mb-3">
                                                                  <label for="jenis" class="form-label">Jenis</label>
                                                                  <select name="jenis" id="jenis" class="form-select" required>
                                                                     <?php
                                                                     $query = tampildata("SELECT * FROM barang_jenis WHERE tipe=1");
                                                                     ?>
                                                                     <option value="<?= $row['jenis'] ?>"><?= $row['jenis'] ?></option>
                                                                     <?php foreach ($query as $data) : ?>
                                                                        <option value="<?= $data['jenis'] ?>"><?= $data['jenis'] ?></option>
                                                                     <?php endforeach ?>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="row">
                                                            <div class="col">
                                                               <div class="mb-3">
                                                                  <label for="golongan" class="form-label">Golongan</label>
                                                                  <select name="golongan" id="golongan" class="form-select" required>
                                                                     <?php
                                                                     $query = tampildata("SELECT * FROM farmasi_golonganobat");
                                                                     ?>
                                                                     <option value="<?= $row['golongan'] ?>"><?= $row['golongan'] ?></option>
                                                                     <?php foreach ($query as $data) : ?>
                                                                        <option value="<?= $data['golongan'] ?>"><?= $data['golongan'] ?></option>
                                                                     <?php endforeach ?>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                            <div class="col">
                                                               <div class="mb-3">
                                                                  <label for="satuan" class="form-label">Unit (Satuan)</label>
                                                                  <select name="satuan" id="satuan" class="form-select" required>
                                                                     <?php
                                                                     $query = tampildata("SELECT * FROM satuan WHERE tipe=1");
                                                                     ?>
                                                                     <option value="<?= $row['unit'] ?>"><?= $row['unit'] ?></option>
                                                                     <?php foreach ($query as $data) : ?>
                                                                        <option value="<?= $data['satuan'] ?>"><?= $data['satuan'] ?></option>
                                                                     <?php endforeach ?>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="nama" class="form-label">Nama Obat</label>
                                                            <input type="text" name="namaobat" id="nama" required="" value="<?= $row['nama'] ?>" class="form-control">
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="kandungan" class="form-label">Kandungan</label>
                                                            <textarea name="kandungan" id="" cols="30" rows="4" class="form-control"><?= $row['kandungan'] ?></textarea>
                                                         </div>
                                                         <div class="mb-3">
                                                            <label for="alias" class="form-label">Alias</label>
                                                            <textarea name="alias" id="" cols="30" rows="4" class="form-control"><?= $row['alias'] ?></textarea>
                                                         </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="ubahobat" class="btn btn-primary">Simpan</button>
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
                                                         <p>Apakah anda yakin menghapus data obat <strong><?= $row['nama'] ?></strong> secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="hapusobat" class="btn btn-danger">Ya, Hapus</button>
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
                  <div class="row">
                     <div class="col">
                        <div class="mb-3">
                           <label for="kategori" class="form-label">kategori</label>
                           <select name="kategori" id="kategori" class="form-select" required>
                              <?php
                              $query = tampildata("SELECT * FROM barang_kategori WHERE tipe=1");
                              ?>
                              <option value="">PILIH</option>
                              <?php foreach ($query as $data) : ?>
                                 <option value="<?= $data['kategori'] ?>"><?= $data['kategori'] ?></option>
                              <?php endforeach ?>
                           </select>
                        </div>
                     </div>
                     <div class="col">
                        <div class="mb-3">
                           <label for="jenis" class="form-label">Jenis</label>
                           <select name="jenis" id="jenis" class="form-select" required>
                              <?php
                              $query = tampildata("SELECT * FROM barang_jenis WHERE tipe=1");
                              ?>
                              <option value="">PILIH</option>
                              <?php foreach ($query as $data) : ?>
                                 <option value="<?= $data['jenis'] ?>"><?= $data['jenis'] ?></option>
                              <?php endforeach ?>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="mb-3">
                           <label for="golongan" class="form-label">Golongan</label>
                           <select name="golongan" id="golongan" class="form-select" required>
                              <?php
                              $query = tampildata("SELECT * FROM farmasi_golonganobat");
                              ?>
                              <option value="">PILIH</option>
                              <?php foreach ($query as $data) : ?>
                                 <option value="<?= $data['golongan'] ?>"><?= $data['golongan'] ?></option>
                              <?php endforeach ?>
                           </select>
                        </div>
                     </div>
                     <div class="col">
                        <div class="mb-3">
                           <label for="satuan" class="form-label">Unit (Satuan)</label>
                           <select name="satuan" id="satuan" class="form-select" required>
                              <?php
                              $query = tampildata("SELECT * FROM satuan WHERE tipe=1");
                              ?>
                              <option value="">PILIH</option>
                              <?php foreach ($query as $data) : ?>
                                 <option value="<?= $data['satuan'] ?>"><?= $data['satuan'] ?></option>
                              <?php endforeach ?>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="mb-3">
                     <label for="nama" class="form-label">Nama Obat</label>
                     <input type="text" name="namaobat" id="nama" required="" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="kandungan" class="form-label">Kandungan</label>
                     <textarea name="kandungan" id="" cols="30" rows="4" class="form-control"></textarea>
                  </div>
                  <div class="mb-3">
                     <label for="alias" class="form-label">Alias</label>
                     <textarea name="alias" id="" cols="30" rows="4" class="form-control"></textarea>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanobat" class="btn btn-primary">Simpan</button>
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