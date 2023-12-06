<?php
$page = "Ketersediaan Tempat Tidur";
require 'view.php';
require '../../controller/base/integrasi.php';
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
                           <li class="breadcrumb-item">Aplicares</li>
                           <li class="breadcrumb-item active"><?= $page ?> </li>
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
                                 <!-- <p>Hari ini kamu memiliki
                                    <strong>1</strong> Antrian Pasien -->
                                 </p>
                                 <div class="media-body text-end">
                                    <a href="integrasi/aplicares-tt-add">
                                       <div class="btn btn-primary btn-sm"> <i data-feather="plus-square"></i>Ruangan Baru</div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="table-responsive">
                                 <table class="display" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>Kode Kelas</th>
                                          <th>Kode Ruang</th>
                                          <th>Nama Ruang</th>
                                          <th>Kapasitas</th>
                                          <th>Tersedia</th>
                                          <th>Tersedia Pria</th>
                                          <th>Tersedia Wanita</th>
                                          <th>Tersedia PW</th>
                                          <th>Actions</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       // API Endpoint URL
                                       $start = 1;
                                       $limit = 1000;
                                       $kodePpk = '0038R060';
                                       $apiUrl = "$baseUrlAplicare/$serviceNameAplicare/rest/bed/read/$kodePpk/$start/$limit";

                                       $response = get($apiUrl, $consIdAplicare, $secretKeyAplicare, $userKeyAplicare);

                                       $jsonData = json_decode($response[0], true);
                                       // Check if metadata->code is equal to 1
                                       if (isset($jsonData['metadata']['code']) && $jsonData['metadata']['code'] == 1) {
                                          // The API response is successful, you can access the response data
                                          $responseData = $jsonData['response']['list'];
                                          foreach ($responseData as $row) {
                                       ?>
                                             <tr>
                                                <td><?= $row['kodekelas'] ?></td>
                                                <td><?= $row['koderuang'] ?></td>
                                                <td><?= $row['namaruang'] ?></td>
                                                <td><?= $row['kapasitas'] ?></td>
                                                <td><?= $row['tersedia'] ?></td>
                                                <td><?= $row['tersediapria'] ?></td>
                                                <td><?= $row['tersediawanita'] ?></td>
                                                <td><?= $row['tersediapriawanita'] ?></td>
                                                <td>
                                                   <button class="btn btn-primary btn-sm edit" data-kodekelas="<?= $row['kodekelas'] ?>" data-koderuang="<?= $row['koderuang'] ?>" data-namaruang="<?= $row['namaruang'] ?>" data-kapasitas="<?= $row['kapasitas'] ?>" data-tersedia="<?= $row['tersedia'] ?>" data-tersediapria="<?= $row['tersediapria'] ?>" data-tersediawanita="<?= $row['tersediawanita'] ?>" data-tersediapriawanita="<?= $row['tersediapriawanita'] ?>">
                                                      Edit
                                                   </button>
                                                   <button class="btn btn-danger btn-sm hapus" data-bs-toggle="modal" data-kodekelas="<?= $row['kodekelas'] ?>" data-koderuang="<?= $row['koderuang'] ?>">Hapus</button>
                                                </td>
                                             </tr>
                                       <?php }
                                       } ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid Ends-->
         </div>

         <!-- Modal -->
         <div class="modal fade" id="hapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="../module/integrasi/aplicares-delete-api" method="POST">
                     <input type="hidden" name="kodekelas" value="">
                     <input type="hidden" name="koderuang" value="">
                     <div class="modal-body">
                        <p>Apakah anda yakin menghapus data tempat tidur <strong>[<span id="kodekelas"></span>] <span id="koderuang"></span></strong> secara permanent, karena data yang telah anda hapus tidak dapat dikembalikan lagi</p>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="hapus" class="btn btn-danger">Ya, Hapus</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>

         <div class="modal fade" id="edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
               <div class="modal-content">
                  <div class="modal-header">
                     <h1 class="modal-title fs-5" id="staticBackdropLabel">Perbarui Data</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="../module/integrasi/aplicares-update-api" method="POST">
                     <div class="modal-body">
                        <div class="col-12">
                           <div class="mb-3 row">
                              <label for="inputPassword" class="col-sm-2 col-form-label">Kode Kelas</label>
                              <div class="col-sm-10">
                                 <select name="kodekelas" id="kodekelas" class="form-select" required>
                                    <?php
                                    // API Endpoint URL
                                    $apiUrl = "$baseUrlAplicare/$serviceNameAplicare/rest/ref/kelas";

                                    $response = get($apiUrl, $consIdAplicare, $secretKeyAplicare, $userKeyAplicare);

                                    $jsonData = json_decode($response[0], true);
                                    // Check if metadata->code is equal to 1
                                    if (isset($jsonData['metadata']['code']) && $jsonData['metadata']['code'] == 1) {
                                       // The API response is successful, you can access the response data
                                       $responseData = $jsonData['response']['list'];
                                       foreach ($responseData as $row) {
                                    ?>
                                          <option value="<?= $row['kodekelas'] ?>"><?= $row['kodekelas'] ?></option>
                                    <?php }
                                    } ?>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="mb-3 row">
                              <label for="inputPassword" class="col-sm-2 col-form-label">Kode Ruang</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" name="koderuang" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="mb-3 row">
                              <label for="inputPassword" class="col-sm-2 col-form-label">Nama Ruang</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" name="namaruang" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="mb-3 row">
                              <label for="inputPassword" class="col-sm-2 col-form-label">Kapasitas</label>
                              <div class="col-sm-10">
                                 <input type="number" class="form-control" name="kapasitas" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="mb-3 row">
                              <label for="inputPassword" class="col-sm-2 col-form-label">Tersedia</label>
                              <div class="col-sm-2">
                                 <input type="number" class="form-control" name="tersedia" required>
                              </div>
                              <div class="col-sm-2">
                                 <input type="number" class="form-control" name="tersediapria" placeholder="Pria" required>
                              </div>
                              <div class="col-sm-2">
                                 <input type="number" class="form-control" name="tersediawanita" placeholder="Wanita" required>
                              </div>
                              <div class="col-sm-2">
                                 <input type="number" class="form-control" name="tersediapriawanita" placeholder="Pria dan Wanita" required>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="hapus" class="btn btn-success">Perbarui</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <!-- footer start-->
         <?php
         require '../../template/footer.php';
         ?>
      </div>
   </div>
   <?php
   include 'library.php';
   ?>
   <script>
      $('.hapus').click(function() {
         // Show the modal
         const kodekelas = $(this).data('kodekelas');
         const koderuang = $(this).data('koderuang');
         $('[name="kodekelas"]').val(kodekelas)
         $('[name="koderuang"]').val(koderuang)
         $('#kodekelas').html(kodekelas)
         $('#koderuang').html(koderuang)
         $('#hapus').modal('show');
      });

      $('.edit').click(function() {
         // Show the modal
         const kodekelas = $(this).data('kodekelas');
         const koderuang = $(this).data('koderuang');
         const namaruang = $(this).data('namaruang');
         const kapasitas = $(this).data('kapasitas');
         const tersedia = $(this).data('tersedia');
         const tersediapria = $(this).data('tersediapria');
         const tersediawanita = $(this).data('tersediawanita');
         const tersediapriawanita = $(this).data('tersediapriawanita');
         $('[name="kodekelas"]').val(kodekelas)
         $('[name="koderuang"]').val(koderuang)
         $('[name="namaruang"]').val(namaruang)
         $('[name="kapasitas"]').val(kapasitas)
         $('[name="tersedia"]').val(tersedia)
         $('[name="tersediapria"]').val(tersediapria)
         $('[name="tersediawanita"]').val(tersediawanita)
         $('[name="tersediapriawanita"]').val(tersediapriawanita)
         $('#edit').modal('show');
      });
   </script>
</body>

</html>