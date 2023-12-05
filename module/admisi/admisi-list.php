<?php
session_start();
$id = $_GET['id'];
if ($id == 1) {
   $point = "admisi-rj";
   $ket = "Rawat Jalan";
} else if ($id == 2) {
   $point = "gawat-darurat";
   $ket = "Rawat Darurat";
} else if ($id == 3) {
   $point = "rawat-inap";
   $ket = "Rawat Inap";
}
$page = "List Pasien";
require '../../db/connect.php';
require '../../controller/admisi/admisi.php';
require 'view.php';
$query = tampildata("SELECT * FROM pasien");
$data = mysqli_query($koneksi, "SELECT id FROM pasien");
$totaldata = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require 'head.php';
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
      require 'header.php';
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
                        <h3><?= $page ?></h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item"> <a href="<?= $point ?>"><?= $ket ?></a></li>
                           <li class="breadcrumb-item active"><?= $page ?></li>
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
                                 <p>Total pasien di Faskes
                                    <strong><?= number_format($totaldata) ?></strong>
                                 </p>
                                 <div class="media-body text-end">
                                    <a href="admisi/<?= $point ?>">
                                       <div class="btn btn-light btn-sm"> <i data-feather="arrow-left-circle"></i>Kembali</div>
                                    </a>
                                    <a href="admisi/admisi-add?tipe=1">
                                       <div class="btn btn-primary btn-sm"> <i data-feather="plus-circle"></i>Pasien Baru</div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th class="w-20"></th>
                                          <th>No.RM</th>
                                          <th>NIK</th>
                                          <th>Nama Pasien</th>
                                          <th>TTL</th>
                                          <th>L/P</th>
                                          <th>Agama</th>
                                          <th>Alamat</th>
                                          <th class="text-center col-1">Aksi</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = $row['status_pasien'];
                                             if ($status == 1) {
                                                $color = 'success';
                                             } else {
                                                $color = 'danger';
                                             }
                                             ?>
                                             <td class="bg-<?= $color ?>"></td>
                                             <td><?= $row['nomor_rm'] ?></td>
                                             <td><?= $row['nik'] ?></td>
                                             <td><?= $row['nama_pasien'] ?></td>
                                             <td><?= $row['tempat_lahir'] ?>/<?= $row['tanggal_lahir'] ?></td>
                                             <td><?= $row['gender'] ?></td>
                                             <td><?= $row['agama'] ?></td>
                                             <td><?= $row['alamat'] ?></td>
                                             <td class="text-center col-2">
                                                <div class="dropdown">
                                                   <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                      Daftarkan
                                                   </button>
                                                   <ul class="dropdown-menu">
                                                      <li><a class="dropdown-item" href="admisi/admisi-rj-detail?tipe=1&id=<?= $row['uid_pasien'] ?>&status=1">Rawat Jalan</a></li>
                                                      <li><a class="dropdown-item" href="admisi/admisi-ri-detail?tipe=1&id=<?= $row['uid_pasien'] ?>&status=1">Rawat Inap</a></li>
                                                      <li><a class="dropdown-item" href="admisi/admisi-ugd-detail?tipe=1&id=<?= $row['uid_pasien'] ?>&status=1">Rawat Darurat</a></li>
                                                      <li><a class="dropdown-item" href="admisi/admisi-pn-detail?tipe=1&id=<?= $row['uid_pasien'] ?>&status=1">Penunjang Medis</a></li>
                                                      <li><a class="dropdown-item" href="admisi/admisi-pk-detail?tipe=1&id=<?= $row['uid_pasien'] ?>&status=1">Perawatan Kecantikan</a></li>
                                                      <li><a class="dropdown-item" href="admisi/admisi-newborn-detail?tipe=1&id=<?= $row['uid_pasien'] ?>&status=1">Bayi Baru Lahir</a></li>
                                                      <li><a class="dropdown-item" href="admisi/admisi-mcu-detail?tipe=1&id=<?= $row['uid_pasien'] ?>&status=1">MCU</a></li>
                                                      <li><a class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#hapus<?= $row['id'] ?>" href="javascript:;">Hapus</a></li>
                                                   </ul>
                                                </div>
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
                              </div>
                              <hr>
                              Keterangan Warna : <span class="badge bg-success">Pasien Baru</span>
                              <span class="badge bg-danger">Pasien Lama</span>
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
   require 'library.php';
   ?>

   <!-- Plugin used-->
</body>

</html>