<?php
$path = 'master';
$page = "Obat";
$id = $_GET['id'];
$tipe = $_GET['tipe'];
require '../../db/connect.php';
require '../admin/view.php';
require '../../controller/master/farmasi.php';
$datacheck = mysqli_query($koneksi, "SELECT * FROM obat WHERE id='$id'");
$data = mysqli_fetch_array($datacheck);
$no_obat = isset($data['no_obat']) ? $data['no_obat'] : 'BELUM DI ISI';
$kategori = isset($data['kategori']) ? $data['kategori'] : 'BELUM DI ISI';
$jenis = isset($data['jenis']) ? $data['jenis'] : 'BELUM DI ISI';
$golongan = isset($data['golongan']) ? $data['golongan'] : 'BELUM DI ISI';
$barcode = isset($data['barcode']) ? $data['barcode'] : 'BELUM DI ISI';
$nama = isset($data['nama']) ? $data['nama'] : 'BELUM DI ISI';
$kandungan = isset($data['kandungan']) ? $data['kandungan'] : 'BELUM DI ISI';
$alias = isset($data['alias']) ? $data['alias'] : 'BELUM DI ISI';
$unit = isset($data['unit']) ? $data['unit'] : 'BELUM DI ISI';
$deskripsi = isset($data['deskripsi']) ? $data['deskripsi'] : 'BELUM DI ISI';
$tarif_dasar = isset($data['tarif_dasar']) ? $data['tarif_dasar'] : '0';
$harga_beli = isset($data['harga_beli']) ? $data['harga_beli'] : '0';
$harga_jual = isset($data['harga_jual']) ? $data['harga_jual'] : '0';
$stock_awal = isset($data['stock_awal']) ? $data['stock_awal'] : '0';
$stock_min = isset($data['stock_min']) ? $data['stock_min'] : '0';
$stock_max = isset($data['stock_max']) ? $data['stock_max'] : '0';

$totalitem = mysqli_query($koneksi, "SELECT SUM(masuk-keluar) as total FROM obat_persediaan WHERE no_obat='$no_obat'");
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
   <script type="text/javascript" src="../admin/signature.js"></script>
   <style>
      body {
         padding: 15px;
      }

      #note {
         position: absolute;
         left: 50px;
         top: 35px;
         padding: 0px;
         margin: 0px;
         cursor: default;
      }
   </style>
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
                        <h3>Obat</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Obat</li>
                           <li class="breadcrumb-item active">Detail Informasi </li>
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
                              <ul class="nav nav-tabs nav-primary" id="pills-warningtab" role="tablist">
                                 <li class="nav-item"><a <?php if ($tipe == 1) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-warninghome-tab" data-bs-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Obat Informasi</a></li>
                                 <li class="nav-item"><a <?php if ($tipe == 2) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Persediaan</a></li>
                                 <li class="nav-item"><a <?php if ($tipe == 3) echo "class='nav-link active'";
                                                         echo "class='nav-link'" ?> id="pills-warningcontact-tab" data-bs-toggle="pill" href="#pills-warningcontact" role="tab" aria-controls="pills-warningcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Permintaan</a></li>

                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div <?php if ($tipe == 1) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <form action="" method="POST">
                                       <input type="hidden" name="id" value="<?= $id ?>">
                                       <input type="hidden" name="tipe" value="1">
                                       <div class="row">
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="no_obat" class="col-sm-4 col-form-label">No. Obat</label>
                                                <div class="col-sm-8">
                                                   <input type="text" class="form-control" name="no_obat" value="<?= $no_obat ?>" id="">
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="kategori" class="col-sm-4 col-form-label">Kategori</label>
                                                <div class="col-sm-8">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM barang_kategori WHERE tipe=1");
                                                   ?>
                                                   <select name="kategori" class="form-select" id="">
                                                      <option value="<?= $kategori ?>"><?= $kategori ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['kategori'] ?>"><?= $row['kategori'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="jenis" class="col-sm-4 col-form-label">Jenis</label>
                                                <div class="col-sm-8">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM barang_jenis WHERE tipe=1");
                                                   ?>
                                                   <select name="jenis" class="form-select" id="">
                                                      <option value="<?= $jenis ?>"><?= $jenis ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['jenis'] ?>"><?= $row['jenis'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="golongan" class="col-sm-4 col-form-label">Golongan </label>
                                                <div class="col-sm-8">
                                                   <?php
                                                   $query = tampildata("SELECT * FROM farmasi_golonganobat");
                                                   ?>
                                                   <select name="golongan" class="form-select" id="">
                                                      <option value="<?= $golongan ?>"><?= $golongan ?></option>
                                                      <?php foreach ($query as $row) : ?>
                                                         <option value="<?= $row['golongan'] ?>"><?= $row['golongan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="barcode" class="col-sm-4 col-form-label">Barcode ID</label>
                                                <div class="col-sm-8">
                                                   <input type="text" class="form-control" name="barcode" value="<?= $barcode ?>" id="">
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="nama" class="col-sm-4 col-form-label">Nama Obat </label>
                                                <div class="col-sm-8">
                                                   <input type="text" value="<?= $nama ?>" class="form-control" name="nama" id="nama">
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="kandungan" class="col-sm-4 col-form-label">Kandungan</label>
                                                <div class="col-sm-8">
                                                   <input type="text" class="form-control" name="kandungan" value="<?= $kandungan ?>" id="kandungan">
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="alias" class="col-sm-4 col-form-label">Alias</label>
                                                <div class="col-sm-8">
                                                   <input type="text" class="form-control" name="alias" value="<?= $alias ?>" id="alias">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                                                <div class="col-sm-8">
                                                   <input type="text" class="form-control" name=" deskripsi" value="<?= $deskripsi ?>" id="">
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="stock_awal" class="col-sm-4 col-form-label">Stock Awal</label>
                                                <div class="col-sm-8">
                                                   <input type="number" class="form-control" name="stock_awal" value="<?= $stock_awal ?>" id="stock_awal">
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="stock_min" class="col-sm-4 col-form-label">Stock Minimum</label>
                                                <div class="col-sm-8">
                                                   <input type="number" class="form-control" name="stock_min" value="<?= $stock_min ?>" id="stock_min">
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="stock_max" class="col-sm-4 col-form-label">Stock Maksimum</label>
                                                <div class="col-sm-8">
                                                   <input type="number" class="form-control" name="stock_max" value="<?= $stock_max ?>" id="stock_max">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="satuan" class="col-sm-4 col-form-label">Satuan </label>
                                                <div class="col-sm-8">
                                                   <select name="satuan" id="satuan" class="form-select" required>
                                                      <?php
                                                      $query = tampildata("SELECT * FROM satuan WHERE tipe=1");
                                                      ?>
                                                      <option value="<?= $unit ?>"><?= $unit ?></option>
                                                      <?php foreach ($query as $data) : ?>
                                                         <option value="<?= $data['satuan'] ?>"><?= $data['satuan'] ?></option>
                                                      <?php endforeach ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="stock_akhir" class="col-sm-4 col-form-label">Stock Akhir</label>
                                                <div class="col-sm-8">
                                                   <input type="number" class="form-control" name="stock_akhir" value="<?= $itemidr ?>" readonly id="stock_akhir">
                                                </div>
                                             </div>

                                          </div>
                                          <div class="col-6">
                                             <div class="mb-3 row">
                                                <label for="tarif_dasar" class="col-sm-4 col-form-label">Tarif Dasar</label>
                                                <div class="col-sm-8">
                                                   <input type="number" class="form-control" name="tarif_dasar" value="<?= $tarif_dasar ?>" id="tarif_dasar">
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="harga_beli" class="col-sm-4 col-form-label">Harga Beli</label>
                                                <div class="col-sm-8">
                                                   <input type="number" class="form-control" name="harga_beli" value="<?= $harga_beli ?>" id="harga_beli">
                                                </div>
                                             </div>
                                             <div class="mb-3 row">
                                                <label for="harga_jual" class="col-sm-4 col-form-label">Harga Jual</label>
                                                <div class="col-sm-8">
                                                   <input type="number" class="form-control" name="harga_jual" value="<?= $harga_jual ?>" id="harga_jual">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-12">
                                             <div class="mb-3 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                   <button class="btn btn-success" name="simpanobatdetail">Simpan</button>
                                                   <a href="<?= $path ?>/farmasi-obat">
                                                      <button type="button" class="btn btn-light">Kembali</button>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div <?php if ($tipe == 2) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                                    <div class="row">
                                       <div class="col-xl-12 col-md-12 box-col-12">
                                          <div class="file-content">
                                             <div class="card">
                                                <div class="card-body file-manager">
                                                   <div class="table-responsive">
                                                      <table class="table" id="basic-3">
                                                         <thead>
                                                            <tr>
                                                               <th class="text-center">Tanggal</th>
                                                               <th class="text-center">Masuk</th>
                                                               <th class="text-center">Keluar</th>
                                                               <th class="text-center">Stock</th>
                                                               <th class="text-center">Status</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <?php
                                                            $query = tampildata("SELECT * FROM obat_persediaan WHERE no_obat='$id'");
                                                            ?>
                                                            <?php foreach ($query as $row) : ?>
                                                               <tr>
                                                                  <td class="text-center"><?= $row['tanggal'] ?></td>
                                                                  <td class="text-end"><?= number_format($row['masuk']) ?></td>
                                                                  <td class="text-end"><?= number_format($row['keluar']) ?></td>
                                                                  <td class="text-end"><?= number_format($row['masuk'] - $row['keluar']) ?></td>
                                                                  <td class="text-center">
                                                                     <?php
                                                                     $status = $row['status'];
                                                                     if ($status == 1) {
                                                                        $ket  = 'Validasi';
                                                                        $color = 'success';
                                                                     } else {
                                                                        $ket  = 'Belum Validasi';
                                                                        $color = 'danger';
                                                                     }
                                                                     ?>
                                                                     <span class="badge bg-<?= $color ?>"><?= $ket ?></span>
                                                                  </td>
                                                               </tr>


                                                            <?php endforeach ?>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>

                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div <?php if ($tipe == 3) echo "class='tab-pane fade show active'";
                                       echo "class='tab-pane fade'" ?> id="pills-warningcontact" role="tabpanel" aria-labelledby="pills-warningcontact-tab">
                                    <div class="row">
                                       <div class="col-xl-12 col-md-12 box-col-12">
                                          <div class="file-content">
                                             <div class="card">
                                                <div class="card-body file-manager">
                                                   <div class="table-responsive">
                                                      <table class="table" id="basic-4">
                                                         <thead>
                                                            <tr>
                                                               <th class="text-center">Tanggal</th>
                                                               <th class="text-center">Nomor</th>
                                                               <th class="text-start">Unit</th>
                                                               <th class="text-start">Catatan</th>
                                                               <th class="text-center">Status</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <?php
                                                            $query = tampildata("SELECT * FROM obat_permintaan WHERE no_obat='$id'");
                                                            ?>
                                                            <?php foreach ($query as $row) : ?>
                                                               <tr>
                                                                  <td class="text-center"><?= $row['tanggal'] ?></td>
                                                                  <td class="text-center"><?= $row['nomor'] ?></td>
                                                                  <td class="text-start"><?= $row['unit'] ?></td>
                                                                  <td class="text-start"><?= $row['catatan'] ?></td>
                                                                  <td class="text-center">
                                                                     <?php
                                                                     $status = $row['status'];
                                                                     if ($status == 1) {
                                                                        $ket  = 'Validasi';
                                                                        $color = 'success';
                                                                     } else {
                                                                        $ket  = 'Belum Validasi';
                                                                        $color = 'danger';
                                                                     }
                                                                     ?>
                                                                     <span class="badge bg-<?= $color ?>"><?= $ket ?></span>
                                                                  </td>
                                                               </tr>
                                                            <?php endforeach ?>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>

                                          </div>
                                       </div>
                                    </div>
                                 </div>
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