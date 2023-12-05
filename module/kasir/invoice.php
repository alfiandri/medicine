<?php
session_start();
$page = "Kasir RJ";
require '../db/connect.php';
require '../controller/view.php';
require '../controller/admisi.php';
$id = $_GET['id'];
$no = $_GET['no'];
$info = mysqli_query($koneksi, "SELECT * FROM kasirInvoice WHERE uidPasien='$id' AND nomorRegistrasi='$no'");
$data = mysqli_fetch_array($info);

$pasien = mysqli_query($koneksi, "SELECT * FROM pasien LEFT OUTER JOIN pasienVisit ON pasienVisit.uidPasien = pasien.uidPasien WHERE nomorRegistrasi='$no' ");
$datapasien = mysqli_fetch_array($pasien);
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
                        <h3>Invoice</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Rawat Jalan</li>
                           <li class="breadcrumb-item active">Invoice </li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="invoice">
                              <div>
                                 <div>
                                    <div class="row">
                                       <div class="col-sm-6">
                                          <div class="media">
                                             <div class="media-left"><img class="media-object img-60" src="../assets/Icon.png" alt=""></div>
                                             <div class="media-body m-l-20 text-right">
                                                <h4 class="media-heading">RS.Medicine</h4>
                                                <p>medicine@imzack.id<br><span>+62 821 6652 4717</span></p>
                                             </div>
                                          </div>
                                          <!-- End Info-->
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="text-md-end text-xs-center">
                                             <h3>Invoice #<span class="counter"><?= $data['noInvoice'] ?></span></h3>
                                             <p>Tanggal: <?= $data['tanggal'] ?> <br> <span class="badge bg-danger">Belum Bayar</span>
                                          </div>
                                          <!-- End Title-->
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <!-- End InvoiceTop-->
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div class="media">
                                          <div class="media-left"><img class="media-object rounded-circle img-60" src="../assets/images/user/1.jpg" alt=""></div>
                                          <div class="media-body m-l-20">
                                             <h4 class="media-heading"><?= $datapasien['namaPasien'] ?></h4>
                                             <p>No.RM : <?= $datapasien['nomorRM'] ?><br><span>No.Handphone : <?= $datapasien['noHandphone'] ?></span></p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-8">
                                       <div class="text-md-end" id="project">
                                          <h6>Layanan Unit : <?= $datapasien['layanan'] ?></h6>
                                          <p><?= $datapasien['dokter'] ?></p>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- End Invoice Mid-->
                                 <div>
                                    <div class="table-responsive invoice-table" id="table">
                                       <table class="table table-bordered table-striped">
                                          <tbody>
                                             <tr>
                                                <td class="item">
                                                   <h6 class="p-2 mb-0">Item</h6>
                                                </td>
                                                <td class="Hours">
                                                   <h6 class="p-2 mb-0">Harga Satuan</h6>
                                                </td>
                                                <td class="Rate">
                                                   <h6 class="p-2 mb-0">QTY</h6>
                                                </td>
                                                <td class="subtotal">
                                                   <h6 class="p-2 mb-0">Jumlah</h6>
                                                </td>
                                             </tr>
                                             <?php
                                             $query = tampildata("SELECT * FROM kasirDetail WHERE nomorRegistrasi='$no'");
                                             ?>
                                             <?php foreach ($query as $row) : ?>
                                                <tr>
                                                   <td>
                                                      <label><strong><?= $row['klasifikasi'] ?></strong></label>
                                                      <p class="m-0"><?= $row['item'] ?></p>
                                                   </td>
                                                   <td>
                                                      <p class="itemtext"><?= number_format($row['hargaSatuan']) ?></p>
                                                   </td>
                                                   <td>
                                                      <p class="itemtext"><?= $row['qty'] ?></p>
                                                   </td>
                                                   <td>
                                                      <p class="itemtext"><?= number_format($row['jumlah']) ?></p>
                                                   </td>
                                                </tr>
                                             <?php endforeach ?>
                                             <tr>
                                                <td></td>
                                                <td></td>
                                                <td class="Rate">
                                                   <h6 class="mb-0 p-2">Total</h6>
                                                </td>
                                                <td class="payment">
                                                   <h6 class="mb-0 p-2"><?= number_format($data['total']) ?></h6>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                    <!-- End Table-->
                                    <div class="row">
                                       <div class="col-md-8">
                                          <div>
                                             <p class="legal"><strong>Mohon Periksa Kembali !!</strong>  Seluruh transaksi diatas mohon dilakukan koreksi kembali karena setelah dilakukan pembayaran tidak dapat dilakukan perbaikan data.</p>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="text-end">
                                             <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#bayar">Bayar</button>
                                             <a href="kasir-inpatient">
                                                <button type="submit" class="btn btn-light">Batal</button>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- End InvoiceBot-->
                              </div>
                              <!-- End Invoice-->
                              <!-- End Invoice Holder-->
                              <!-- Container-fluid Ends-->
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
         require 'footer.php';
         ?>
      </div>
   </div>


   <!-- Modal -->
   <div class="modal fade" id="bayar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Pembayaran Transaksi</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
               <input type="hidden" name="id" value="<?= $id ?>">
               <input type="hidden" name="nomorregistrasi" value="<?= $no ?>">
               <input type="hidden" name="bayar" value="<?= $row['total'] ?>">
               <div class="modal-body">
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Total Bayar</label>
                     <input type="text" value="<?= number_format($data['total']) ?>" readonly class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Diskon </label>
                     <input type="number" class="form-control">
                  </div>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Metode Pembayaran </label>
                     <?php
                     $query = tampildata("SELECT * FROM metodeBayar");
                     ?>
                     <select name="" class="form-select" id="">
                        <option value="">--PILIH METODE PEMBAYARAN--</option>
                        <?php foreach ($query as $row) : ?>
                           <option value="<?= $row['metode'] ?>"><?= $row['metode'] ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">No.Kartu / No.Transaksi </label>
                     <input type="text" class="form-control">
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" name="simpanbayar" class="btn btn-success">Simpan</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <?php
   require 'library.php';
   ?>
</body>

</html>