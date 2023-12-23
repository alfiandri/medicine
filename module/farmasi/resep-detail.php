<?php
$page = "Resep";
require '../admin/view.php';
require '../../controller/farmasi/resep.php';
$id = $_GET['id'];
$nopermintaan = $_GET['nopermintaan'];
$rm = $_GET['rm'];
$query = tampildata("SELECT * FROM permintaan_resep_detail WHERE nopermintaan='$nopermintaan' AND status!=2");
$data = mysqli_query($koneksi, "SELECT id FROM permintaan_resep_detail WHERE nopermintaan='$nopermintaan' AND status!=2");
$totaldata = mysqli_num_rows($data);
if ($id == 1) {
   $pathroute = "resep";
} else {
   $pathroute = "non-resep";
}
if (empty($rm)) {
   $permintaanresep = mysqli_query($koneksi, "SELECT * FROM permintaan_resep WHERE nopermintaan='$nopermintaan'");
   $permintaanresep = mysqli_fetch_array($permintaanresep);
   $rm = $permintaanresep['nomor_rm'];
}
// var_dump($permintaanresep);
// echo $rm;die;
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
                        <h3>Resep Obat</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Farmasi</li>
                           <li class="breadcrumb-item">Resep</li>
                           <li class="breadcrumb-item active">Detail</li>
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
                                    <a href="farmasi/<?= $pathroute ?>">
                                       <div class="btn btn-light btn-sm"> <i data-feather="chevron-left"></i>Kembali</div>
                                    </a>
                                    <div class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#call"> <i data-feather="user"></i>Panggil</div>
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
                                          <th>Nama Obat</th>
                                          <th>Signa</th>
                                          <th>Satuan</th>
                                          <th>Qty</th>
                                          <th>Catatan</th>
                                          <th class="text-center col-1">Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($query as $row) : ?>
                                          <tr>
                                             <?php
                                             $status = @$row['status'];
                                             if ($status == 1) {
                                                $warna = 'bg-success'; //Active
                                             } else if ($status == 0) {
                                                $warna = 'bg-danger'; //InActive
                                             }
                                             ?>
                                             <td class="<?= $warna ?>"></td>
                                             <td><?= @$row['resep'] ?></td>
                                             <td><?= @$row['signa'] ?></td>
                                             <td><?= @$row['satuan'] ?></td>
                                             <td><?= number_format($row['qty']) ?></td>
                                             <td class="col-3"><?= $row['catatan'] ?></td>
                                             <td class="text-center col-3">
                                                <!-- <a href="../controller/farmasi/approve-list-obat?tipe=1&id=<?= $row['id'] ?>&nopermintaan=<?= $_GET['nopermintaan'] ?>&rm=<?= $_GET['rm'] ?>">
                                                   <button class="btn btn-success">Approve</button>
                                                </a> -->
                                                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#resep<?= $row['id'] ?>">Ganti</button>
                                                <a href="../controller/farmasi/approve-list-obat?tipe=2&id=<?= $row['id'] ?>&nopermintaan=<?= $_GET['nopermintaan'] ?>&rm=<?= $_GET['rm'] ?>">
                                                   <button class="btn btn-danger">Hapus</button>
                                                </a>
                                             </td>
                                          </tr>

                                          <div class="modal fade" id="resep<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                             <div class="modal-dialog">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Rincian Obat</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                   </div>
                                                   <form action="" method="POST">
                                                      <input type="hidden" name="nomorrm" value="<?= $_GET['rm'] ?>">
                                                      <input type="hidden" name="nopermintaan" value="<?= $_GET['nopermintaan'] ?>">
                                                      <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                                      <div class="modal-body">
                                                         <div class="mb-3">
                                                            <input class="form-control" list="dataobat" id="obat" name="obat" placeholder="Cari Obat...">
                                                            <datalist id="dataobat">
                                                               <?php
                                                               $query = tampildata("SELECT * FROM obat ");
                                                               ?>
                                                               <?php foreach ($query as $data) : ?>
                                                                  <option value="<?= $data['nama'] ?>">
                                                                  <?php endforeach ?>
                                                            </datalist>
                                                         </div>
                                                         <div class="mb-3">
                                                            <input class="form-control" list="datasigna" id="signa" name="signa" placeholder="Cari Signa...">
                                                            <datalist id="datasigna">
                                                               <?php
                                                               $query = tampildata("SELECT * FROM farmasi_signa ");
                                                               ?>
                                                               <?php foreach ($query as $data) : ?>
                                                                  <option value="<?= $data['signa'] ?>">
                                                                  <?php endforeach ?>
                                                            </datalist>
                                                         </div>
                                                         <div class="mb-3">
                                                            <input class="form-control" list="datasatuan" id="satuan" name="satuan" placeholder="Cari Satuan...">
                                                            <datalist id="datasatuan">
                                                               <?php
                                                               $query = tampildata("SELECT * FROM satuan WHERE tipe=1 ");
                                                               ?>
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
                                                            <label for="catatan" class="form-label">Catatan</label>
                                                            <textarea name="catatan" class="form-control" id="" cols="30" rows="5" name="catatan"></textarea>
                                                         </div>

                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                         <button type="submit" name="simpanresepdetail" class="btn btn-primary">Simpan</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
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

   <!-- Modal -->
   <div class="modal fade" id="call" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Call Pasien</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
               <div class="modal-body text-center">
                  <div class="card-body">
                     <img src="../assets/icon-antrian.png" width="100" class="text-center">
                     <?php
                     $rm = $_GET['rm'];
                     $datapasien = mysqli_query($koneksi, "SELECT * FROM pasien_visit WHERE nomor_rm='$rm'");
                     $datainfo = mysqli_fetch_array($datapasien);
                     $kode = $datainfo['kodebooking'];

                     $checkdata = mysqli_query($koneksi, "SELECT * FROM antrian_farmasi WHERE kodebooking='$kode'");
                     $check = mysqli_fetch_array($checkdata);
                     ?>
                     <h1 class="card-title"><?= $check['tipe'] ?>-<?= $check['nomor'] ?></h1>
                     <p class="card-text">Apabila pasien tidak datang klik panggil lagi untuk melakukan pemanggilan ulang, dan untuk pasien yang hadir klik obat diterima untuk menyelesaikan alur farmasi</p>
                     <input type="hidden" name="rm" value="<?= $_GET['rm'] ?>">
                     <input type="hidden" name="kode" value="<?= $kode ?>">
                     <input type="hidden" name="no" value="<?= $_GET['nopermintaan'] ?>">
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanterimaobat" class="btn btn-danger">Obat Terima</button>
                  <button type="button" onclick="panggil('Antrian Nomor <?php echo $check['tipe']. '-'. $check['nomor']; ?> Dipanggil Ke loket farmasi');" class="btn btn-primary">Panggil Ulang</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <?php
   include '../admin/library.php';
   ?>

   <script type="text/javascript">
      function panggil(text) {
         if (text.trim() !== "") {
            var kataKata = text.split(' ');
            for (var i = 0; i < kataKata.length; i++) {
               setTimeout(function(kata) {
                  return function() {
                     var suara = new SpeechSynthesisUtterance(kata);
                     suara.lang = 'id-ID';
                     window.speechSynthesis.speak(suara);
                  };
               }(kataKata[i]), i * 1000);
            }
         }
      }
   </script>
</body>

</html>