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
                                    <span class="badge bg-danger mb-2">4</span>
                                    <p>Metode Pembayaran</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-danger mb-2">5</span>
                                    <p>Tanda Tangan</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-success mb-2">6</span>
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
                           <div class="card-body text-center">
                              <h5 class="card-title">E-Ticket</h5>
                              <center>
                                 <img src="../assets/qr.png" width="250" alt="">
                                 <table style='width:350; font-size:12pt;' cellspacing='2'>
                                    <tr></br>
                                       <span>Harap Hadir <strong>30 Menit</strong> Sebelum Waktu Pemeriksaan</span>
                                       <td align='center'>****** TERIMAKASIH ******</br></td>
                                    </tr>
                                 </table>
                              </center>
                              <a href="../assets/qr.png" download="">
                                 <button class="btn btn-danger">Download</button>
                              </a>
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