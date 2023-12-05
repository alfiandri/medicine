<?php
$page = "Jadwal Dokter";
require '../admin/view.php';
$query = tampildata("SELECT * FROM dokter");
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
                              <p class="card-text">Jadwal dokter ini dapat digunakan untuk mengetahui waktu layanan dari poliklinik dand dokter yang anda perlukan untuk melakukan pemeriksaan dan perawatan kesehatan anda. Jadwal dokter ini realtime untuk memastikan ketersediaan waktu dan layanan pada rumah sakit ini.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card col-12">
                     <div class="card-body file-manager">
                        <div class="table-responsive">
                           <table class="display" id="basic-2">
                              <thead>
                                 <tr>
                                    <th></th>
                                    <th>Nama Lengkap</th>
                                    <th>Layanan</th>
                                    <th class="col-4 text-center">Jadwal</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($query as $row) : ?>
                                    <tr>
                                       <?php
                                       $status = $row['statusSch'];
                                       if ($status == 1) {
                                          $warna = 'bg-success'; //Hadir
                                       } else if ($status == 0) {
                                          $warna = 'bg-danger'; //Tidak Hadir
                                       } else if ($status == 3) {
                                          $warna = 'bg-primary'; //Perubahan Jadwal
                                       }
                                       ?>
                                       <td class="<?= $warna ?>"></td>
                                       <td><?= $row['nama'] ?></td>
                                       <td><?= $row['layanan'] ?></td>
                                       <td>
                                          <?php
                                          $id = $row['uid_dokter'];
                                          $query = tampildata("SELECT * FROM dokter_sch WHERE uid='$id' ");
                                          ?>
                                          <table class="table">
                                             <thead>
                                                <tr>
                                                   <th>Hari</th>
                                                   <th>Waktu</th>
                                                   <th>Status</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php foreach ($query as $row) : ?>
                                                   <tr>
                                                      <td><?= $row['hari'] ?></td>
                                                      <td><?= $row['mulai'] ?> s/d <?= $row['akhir'] ?></td>
                                                      <td>
                                                         <?php
                                                         $st = $row['statusSch'];
                                                         if ($st == 1) {
                                                            $note = 'Hadir';
                                                            $col = 'bg-success';
                                                         } else {
                                                            $note = 'Cancel';
                                                            $col = 'bg-danger';
                                                         }
                                                         ?>
                                                         <span class="badge <?= $col ?>"><?= $note ?></span>
                                                      </td>
                                                   </tr>
                                                <?php endforeach ?>
                                             </tbody>
                                          </table>
                                       </td>
                                    </tr>
                                 <?php endforeach ?>
                              </tbody>
                           </table>
                           <hr>
                           Keterangan Warna : <span class="badge bg-success">Hadir</span>
                           <span class="badge bg-danger">Tidak Hadir</span>
                           <span class="badge bg-primary">Perubahan Jadwal</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <?php
      include '../admin/library.php';
      ?>
   </div>
   <!-- login page start-->

</body>

</html>