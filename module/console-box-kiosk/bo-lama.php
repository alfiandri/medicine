<?php
$page = "BO";
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
                                    <span class="badge bg-success mb-2">2</span>
                                    <p>Identitas Diri</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-dark mb-2">3</span>
                                    <p>Layanan & Dokter</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-dark mb-2">4</span>
                                    <p>Metode Pembayaran</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-dark mb-2">5</span>
                                    <p>E-Ticket Download</p>
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
                              <h5 class="card-title">Registarasi Pasien Lama</h5>
                              <hr>
                              <form action="" method="POST">
                                 <div class="row">
                                    <div class="col-4">
                                       <div class="mb-3">
                                          <label for="nomorRM" class="form-label">No.RM</label>
                                          <input type="text" class="form-control" id="nomorRM" name="nomorRM" required="">
                                       </div>
                                    </div>
                                    <div class="col-4">
                                       <div class="mb-3">
                                          <label for="nik" class="form-label">NIK</label>
                                          <input type="text" required="" class="form-control" id="nik" placeholder="Nomor Induk Kependudukan" name="nik">
                                       </div>
                                    </div>
                                    <div class="col-4">
                                       <div class="mb-3">
                                          <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                                          <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" required="">
                                       </div>
                                    </div>
                                 </div>
                                 <button type="submit" name="caridatapasien" class="btn btn-success">Cari Data</button>
                                 <a href="e-kiosk/index" class="btn btn-light">Kembali</a>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php
      include ''
      ?>
   </div>
</body>

</html>