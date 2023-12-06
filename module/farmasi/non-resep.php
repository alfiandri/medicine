<?php
$page = "Non-Resep";
require '../admin/view.php';
require '../../controller/farmasi/resep.php';
$query = tampildata("SELECT * FROM permintaan_nonresep ");
$data = mysqli_query($koneksi, "SELECT id FROM permintaan_nonresep");
$totaldata = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require 'head.php';
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
         require 'sidebar.php';
         ?>
         <!-- Page Sidebar Ends-->
         <div class="page-body">
            <div class="container-fluid">
               <div class="page-title">
                  <div class="row">
                     <div class="col-6">
                        <h3>Non-Resep Obat</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Farmasi</li>
                           <li class="breadcrumb-item">Non-Resep</li>
                           <li class="breadcrumb-item active">Permintaan</li>
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
                                          <th>No.Permintaan</th>
                                          <th>Tanggal</th>
                                          <th>Nama</th>
                                          <th>Telepon</th>
                                          <th>Sumber Resep</th>
                                          <th>Catatan</th>
                                          <th class="text-center col-1">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['status'];
                                             if ($status == 0) {
                                                $warna = 'bg-success'; //Active
                                             } else if ($status == 1) {
                                                $warna = 'bg-danger'; //InActive
                                             }
                                             ?>
                                             <td class="<?= $warna ?>"></td>
                                             <td><?= $row['nopermintaan'] ?></td>
                                             <td><?= $row['tanggal'] ?></td>
                                             <td><?= $row['nama'] ?></td>
                                             <td><?= $row['telepon'] ?></td>
                                             <td><?= $row['sumber'] ?></td>
                                             <td><?= $row['catatan'] ?></td>
                                             <td class="text-center col-2">
                                                <a href="farmasi/resep-detail?id=2&nopermintaan=<?= $row['nopermintaan'] ?>">
                                                   <button class="btn btn-success">Resep Obat</button>
                                                </a>
                                             </td>
                                          </tr>
                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
                                 <hr>
                                 Keterangan Warna : <span class="badge bg-success">Telah Selesai</span>
                                 <span class="badge bg-danger">Belum Disiapkan</span>
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
                     <label for="nik" class="form-label">Kode</label>
                     <input type="text" required="" name="nik" id="nik" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="nik" class="form-label">Barcode</label>
                     <input type="text" required="" name="nik" id="nik" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="nik" class="form-label">Nama Obat</label>
                     <input type="text" required="" name="nik" id="nik" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="nik" class="form-label">Satuan</label>
                     <select name="" class="form-select" id="">
                        <option value="">PILIH</option>
                        <?php
                        $query = tampildata("SELECT * FROM satuan");
                        ?>
                        <?php foreach ($query as $data) : ?>
                           <option value="<?= $data['satuan'] ?>"><?= $data['satuan'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="nik" class="form-label">Catatan</label>
                     <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                  </div>

               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanpermintaan" class="btn btn-primary">Simpan</button>
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