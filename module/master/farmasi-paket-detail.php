<?php
$path = 'master';
$page = "Paket Obat";
require '../admin/view.php';
require '../../controller/master/farmasi.php';
$id = $_GET['id'];
$query = tampildata("SELECT * FROM obat_paket_detail WHERE kode='$id'");
$data = mysqli_query($koneksi, "SELECT id FROM obat_paket_detail WHERE kode='$id'");
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
                        <h3>Farmasi Obat Paket</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Farmasi</li>
                           <li class="breadcrumb-item active">List Obat</li>
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
                                    <a href="master/farmasi-paket">
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
                                          <th class="col-1"></th>
                                          <th>Obat</th>
                                          <th>Satuan</th>
                                          <th>Dosis</th>
                                          <th>Frekuensi</th>
                                          <th>Cara Pakai</th>
                                          <th>Qty</th>
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
                                             <td><?= $row['obat'] ?></td>
                                             <td><?= $row['satuan'] ?></td>
                                             <td><?= $row['dosis'] ?></td>
                                             <td><?= $row['frekuensi'] ?></td>
                                             <td><?= $row['cara_pakai'] ?></td>
                                             <td><?= number_format($row['qty']) ?></td>
                                             <td class="text-center col-1">
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
                                                         <p>Apakah anda yakin menghapus data obat <strong><?= $row['obat'] ?></strong> secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="hapuspaketdetail" class="btn btn-danger">Ya, Hapus</button>
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
               <input type="hidden" name="kode" value="<?= $id ?>">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="obat" class="form-label">Nama Obat</label>
                     <input class="form-control" list="dataobat" id="obat" name="obat" placeholder="Cari Obat ....">
                     <?php
                     $query = tampildata("SELECT * FROM obat");
                     ?>
                     <datalist id="dataobat">
                        <?php foreach ($query as $data) : ?>
                           <option value="<?= $data['nama'] ?>">
                           <?php endforeach ?>
                     </datalist>
                  </div>
                  <div class="mb-3">
                     <label for="satuan" class="form-label">Satuan</label>
                     <input class="form-control" list="datasatuan" id="satuan" name="satuan" placeholder="Cari Satuan ....">
                     <?php
                     $query = tampildata("SELECT * FROM satuan WHERE tipe=1");
                     ?>
                     <datalist id="datasatuan">
                        <?php foreach ($query as $data) : ?>
                           <option value="<?= $data['satuan'] ?>">
                           <?php endforeach ?>
                     </datalist>
                  </div>
                  <div class="mb-3">
                     <label for="qty" class="form-label">Qty</label>
                     <input type="number" name="qty" id="qty" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="dosis" class="form-label">Dosis</label>
                     <input class="form-control" list="datadosis" id="dosis" name="dosis" placeholder="Cari Dosis ....">
                     <?php
                     $query = tampildata("SELECT * FROM farmasi_dosis");
                     ?>
                     <datalist id="datadosis">
                        <?php foreach ($query as $data) : ?>
                           <option value="<?= $data['dosis'] ?>">
                           <?php endforeach ?>
                     </datalist>
                  </div>
                  <div class="mb-3">
                     <label for="frekuensi" class="form-label">Frekuensi</label>
                     <input class="form-control" list="datafrekuensi" id="frekuensi" name="frekuensi" placeholder="Cari Frekuensi ....">
                     <?php
                     $query = tampildata("SELECT * FROM farmasi_signa");
                     ?>
                     <datalist id="datafrekuensi">
                        <?php foreach ($query as $data) : ?>
                           <option value="<?= $data['signa'] ?>">
                           <?php endforeach ?>
                     </datalist>
                  </div>
                  <div class="mb-3">
                     <label for="cara_pakai" class="form-label">Cara Pakai</label>
                     <input class="form-control" list="datapakai" id="cara_pakai" name="cara_pakai" placeholder="Cari Cara Pakai ....">
                     <?php
                     $query = tampildata("SELECT * FROM farmasi_cara_pemberian");
                     ?>
                     <datalist id="datapakai">
                        <?php foreach ($query as $data) : ?>
                           <option value="<?= $data['cara_pemberian'] ?>">
                           <?php endforeach ?>
                     </datalist>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanpaketdetail" class="btn btn-primary">Simpan</button>
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