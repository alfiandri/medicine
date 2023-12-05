<?php
$page = "BO";
require 'view.php';
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
                              <h5 class="card-title">Registarasi Pasien Baru</h5>
                              <hr>
                              <form action="" method="POST">
                                 <div class="row">
                                    <div class="col-3">
                                       <div class="mb-3">
                                          <label for="nik" class="form-label">NIK</label>
                                          <input type="text" required="" class="form-control" id="nik" placeholder="Nomor Induk Kependudukan" name="nik">
                                       </div>
                                    </div>
                                    <div class="col-3">
                                       <div class="mb-3">
                                          <label for="nama" class="form-label">Nama Lengkap</label>
                                          <input type="text" class="form-control" id="nama" name="nama" required="">
                                       </div>
                                    </div>
                                    <div class="col-3">
                                       <div class="mb-3">
                                          <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                                          <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" required="">
                                       </div>
                                    </div>
                                    <div class=" col-3">
                                       <div class="mb-3">
                                          <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                                          <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" required="">
                                       </div>
                                    </div>
                                    <div class=" col-12">
                                       <div class="mb-3">
                                          <label for="alamat" class="form-label">Alamat</label>
                                          <input type="text" class="form-control" id="alamat" name="alamat" required="">
                                       </div>
                                    </div>
                                    <div class=" col-2">
                                       <div class="mb-3">
                                          <label for="gender" class="form-label">Jenis Kelamin</label>
                                          <select name="gender" class="form-select" id=gender" required="">
                                             <option value="">Pilih</option>
                                             <option value="L">Laki Laki</option>
                                             <option value="P">Perempuan</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class=" col-2">
                                       <div class="mb-3">
                                          <label for="agama" class="form-label">Agama</label>
                                          <select name="agama" class="form-select" id="" required="">
                                             <option value="">Pilih</option>
                                             <option value="Islam">Islam</option>
                                             <option value="Kristen Protestan">Kristen Protestan</option>
                                             <option value="Kristen Katolik">Kristen Katolik</option>
                                             <option value="Hindu">Hindu</option>
                                             <option value="Budha">Budha</option>
                                             <option value="Konghucu">Konghucu</option>
                                             <option value="Lain">Lain</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class=" col-2">
                                       <div class="mb-3">
                                          <label for="statuskawin" class="form-label">Status Kawin</label>
                                          <select name="statuskawin" class="form-select" id="statuskawin" required="">
                                             <option value="">Pilih</option>
                                             <option value="Belum Kawin">Belum Kawin</option>
                                             <option value="Kawin">Kawin</option>
                                             <option value="Cerai">Cerai</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class=" col-2">
                                       <div class="mb-3">
                                          <label for="pendidikan" class="form-label">Pendidikan</label>
                                          <select name="pendidikan" class="form-select" id="pendidikan" required="">
                                             <option value="">Pilih</option>
                                             <option value="SD">SD</option>
                                             <option value="SMP">SMP</option>
                                             <option value="SMK/SEDERAJAT">SMK/SEDERAJAT</option>
                                             <option value="D1">D1</option>
                                             <option value="D2">D2</option>
                                             <option value="D3">D3</option>
                                             <option value="S1">S1</option>
                                             <option value="S2">S2</option>
                                             <option value="S3">S3</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class=" col-2">
                                       <div class="mb-3">
                                          <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                          <select name="pekerjaan" class="form-select" id="pekerjaan" required="">
                                             <option value="">Pilih</option>
                                             <?php
                                             $query = tampildata("SELECT * FROM pekerjaan");
                                             ?>
                                             <?php foreach ($query as $row) : ?>
                                                <option value="<?= $row['pekerjaan'] ?>"><?= $row['pekerjaan'] ?></option>
                                             <?php endforeach ?>
                                          </select>
                                       </div>
                                    </div>
                                    <div class=" col-2">
                                       <div class="mb-3">
                                          <label for="notelepon" class="form-label">No.Telepon</label>
                                          <input type="tel" class="form-control" name="notelepon" id="notelepon" required="">
                                       </div>
                                    </div>
                                 </div>
                                 <button type="submit" name="simpanbobaru" class="btn btn-success">Simpan</button>
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