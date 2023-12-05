<?php
$page = "BO";
require 'view.php';
$ticket = $_GET['ticket'];
$kode = $_GET['kode'];
$dok = $_GET['dok'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require 'head.php';
   ?>
   <style>

   </style>
</head>

<body>
   <!-- login page start-->
   <div class="container-fluid p-0">
      <div class="row m-0">
         <div class="col-12 p-0">
            <div class="login-card">
               <div>
                  <div><a class="logo"><img class=" img-fluid for-light" src="../assets/Logo - Primary.png" width="200" alt="looginpage"><img class="img-fluid for-dark" src="../assets/Logo - Secondary.png" width="200" alt="looginpage"></a></div>
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                              <p class="card-text">SKetentuan Umum Pendaftaran Online RS.Medicine yakni pendaftaran hanya dapat dilakukan pada jam operasional 08.00 sd 17.20.00 pendaftaran tidak dapat dilakukan Hari tersebut kecuali menggunakan fitur layanan registeri E-KISOK yang terdapat di Rumah Sakit selanjutnya pendaftaran yang tidak ada konfirmasi di hari registrasi booking maka akan di batalkan secara otomatis melalui sistem.</p>
                              <div class="row">
                                 <div class="col-2">
                                    <span class="badge bg-danger mb-2">1</span>
                                    <p>Kategori Pasien</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-danger mb-2">2</span>
                                    <p>Identitas Diri</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-danger mb-2">3</span>
                                    <p>Layanan & Dokter</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-success mb-2">4</span>
                                    <p>Metode Pembayaran</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-dark mb-2">5</span>
                                    <p>Tanda Tangan</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-dark mb-2">6</span>
                                    <p>E-Ticket Download</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title">Metode Pembayaran</h5>
                              <hr>
                              <form action="" method="POST">
                                 <input type="hidden" name="ticket" value="<?= $ticket ?>">
                                 <input type="hidden" name="dok" value="<?= $dok ?>">
                                 <input type="hidden" name="kode" value="<?= $kode ?>">
                                 <div class="row">
                                    <div class=" col-2">
                                       <div class="mb-3">
                                          <label for="tanggal" class="form-label">Tanggal Booking </label>
                                          <input type="date" class="form-control" name="tanggal" id="tanggal">
                                       </div>
                                    </div>
                                    <div class=" col-2">
                                       <div class="mb-3">
                                          <label for="waktu" class="form-label">Jam </label>
                                          <input type="time" class="form-control" name="waktu" id="waktu">
                                       </div>
                                    </div>
                                    <div class=" col-3">
                                       <div class="mb-3">
                                          <label for="jenisBayar" class="form-label">Jenis Bayar</label>
                                          <select name="jenisBayar" class="form-select" id="jenisBayar" required="">
                                             <option value="">Pilih</option>
                                             <?php
                                             $query = tampildata("SELECT * FROM jenis_bayar");
                                             ?>
                                             <?php foreach ($query as $row) : ?>
                                                <option value="<?= $row['jenis'] ?>"><?= $row['jenis'] ?></option>
                                             <?php endforeach ?>
                                          </select>
                                       </div>
                                    </div>
                                    <div class=" col-5">
                                       <div class="mb-3">
                                          <label for="noKartu" class="form-label">No.Kartu </label>
                                          <input type="text" class="form-control" name="noKartu" id="noKartu">
                                       </div>
                                    </div>
                                 </div>
                                 <p><strong>Catatan</strong> : <span class="text-danger">No.Kartu Wajib Diisi apabila menggunakan Metode Pembayaran selain UMUM</span></p>
                                 <button type="submit" name="simpanmetodebayar" class="btn btn-success">Simpan</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- latest jquery-->
      <script src="../assets/js/jquery-3.5.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="../assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="../assets/js/script.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
   </div>
</body>

</html>