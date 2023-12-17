<?php
$page = "Manual Billing";
require '../admin/view.php';
require '../../controller/intpatient/transaksi.php';
$id = $_GET['id'];
$norawat = $_GET['norawat'];
$query = tampildata("SELECT * FROM billing_manual WHERE uid_pasien='$id' AND no_bill='$norawat'");
$totalitem = mysqli_query($koneksi, "SELECT SUM(harga * qty) as total FROM billing_manual  WHERE uid_pasien='$id' AND no_bill='$norawat'");
$dataitemidr = mysqli_fetch_array($totalitem);
$itemidr = $dataitemidr['total'];
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
      require '../inpatient/header.php';
      ?>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
         <!-- Page Sidebar Start-->
         <?php
         require '../inpatient/sidebar-ass.php';
         ?>
         <!-- Page Sidebar Ends-->
         <div class="page-body">
            <div class="container-fluid">
               <div class="page-title">
                  <div class="row">
                     <div class="col-6">
                        <h3>Billing Manual</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Transaksi</li>
                           <li class="breadcrumb-item">Pasien</li>
                           <li class="breadcrumb-item active">Billing Manual</li>
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
                                 <p>Total Biaya Transaksi Pasien Rp.
                                    <strong><?= number_format($itemidr) ?></strong>
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
                                          <th>Tanggal</th>
                                          <th>Kategori</th>
                                          <th>Item</th>
                                          <th class="text-center">Harga Satuan</th>
                                          <th class="text-center">QTY</th>
                                          <th class="text-center">Total</th>
                                          <th class="text-center">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <td><?= $row['tanggal'] ?></td>
                                             <td><?= $row['kategori'] ?></td>
                                             <td><?= $row['item'] ?> <br>
                                                <p class="text-primary">Catatan : <?= $row['catatan'] ?></p>
                                             </td>
                                             <td class="text-center"><?= number_format($row['harga']) ?></td>
                                             <td class="text-center"><?= number_format($row['qty']) ?></td>
                                             <td class="text-center"><?= number_format($row['harga'] * $row['qty']) ?></td>
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
                                                      <input type="hidden" name="uid" value="<?= $_GET['id'] ?>">
                                                      <input type="hidden" name="norawat" value="<?= $_GET['norawat'] ?>">
                                                      <div class="modal-body">
                                                         <p>Apakah anda yakin menghapus data ICD <strong><?= $row['icd_name'] ?></strong> secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="hapus" class="btn btn-danger">Ya, Hapus</button>
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
               <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
               <input type="hidden" name="norawat" value="<?= $_GET['norawat'] ?>">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="kategori" class="form-label">Kategori Transaksi</label>
                     <select name="kategori" id="kategori" class="form-control" required="">
                        <option value="">--PILIH--</option>
                        <option value="Admnistrasi">Admnistrasi</option>
                        <option value="Obat">Obat</option>
                        <option value="BHP">BHP</option>
                        <option value="Tindakan">Tindakan</option>
                        <option value="Lainnya">Lainnya</option>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="item" class="form-label">Nama Item</label>
                     <input type="text" name="item" id="item" class="form-control" required>
                  </div>
                  <div class="mb-3">
                     <label for="hargasatuan" class="form-label">Harga Satuan</label>
                     <input type="number" name="hargasatuan" id="hargasatuan" class="form-control" required>
                  </div>
                  <div class="mb-3">
                     <label for="qty" class="form-label">Qty</label>
                     <input type="number" name="qty" id="qty" value="1" class="form-control" required>
                  </div>
                  <div class="mb-3">
                     <label for="catatan" class="form-label">Catatan</label>
                     <textarea name="catatan" id="catatan" cols="30" rows="5" class="form-control"></textarea>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanbill" class="btn btn-primary">Simpan</button>
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