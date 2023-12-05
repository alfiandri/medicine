<?php
$page = "Display TT";
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
   <div class="container-fluid p-0">
      <div class="row m-0">
         <div class="col-12 p-0">
            <div class="login-card">
               <div>
                  <!-- <div><a class="logo"><img class=" img-fluid for-light" src="../assets/Logo - Primary.png" width="200" alt="looginpage"><img class="img-fluid for-dark" src="../assets/Logo - Secondary.png" width="200" alt="looginpage"></a></div> -->
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                              <p class="card-text">Status kamar ini di update 5 menit sekali dan terintegrasi dengan layanan status kamar BPJS untuk memastikan pasien dapat mengetahui secara realtime keterseidaan ruangan rawat inap yang saat ini kami sediakan untuk beragam kelas dan layanan. Informasi ini dapat anda akses melalui aplikasi M-JKN untuk mengetahui ketersediaan kamar atau di website rumah sakit ini</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <?php
                     $query = tampildata("SELECT * FROM ruangan_kamar");
                     ?>
                     <?php foreach ($query as $row) : ?>
                        <div class="col-3">
                           <table class="table">
                              <thead>
                                 <tr>
                                    <th colspan="2" class="bg-danger">
                                       <h3><?= $row['kamar'] ?></h3>
                                    </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 $kamar = $row['kamar'];
                                 $query = tampildata("SELECT * FROM ruangan_kelas WHERE kamar='$kamar'");
                                 ?>
                                 <?php foreach ($query as $data) : ?>
                                    <tr>
                                       <td class="bg-success">
                                          <h3>
                                             <?= $data['kelas'] ?>
                                          </h3>
                                       </td>
                                       <?php
                                       $kelas = $data['kelas'];
                                       $data = mysqli_query($koneksi, "SELECT * FROM ruangan_tt WHERE kamar='$kamar' AND kelas='$kelas' AND status='1'");
                                       $totaltt = mysqli_num_rows($data);
                                       ?>
                                       <td class="bg-primary text-center col-3">
                                          <h3>
                                             <?= number_format($totaltt) ?>
                                          </h3>
                                       </td>
                                    </tr>
                                 <?php endforeach ?>
                              </tbody>
                           </table>
                        </div>
                     <?php endforeach ?>
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
   <!-- login page start-->

</body>

</html>