<?php
$page = "Keteresediaan Tempat Tidur";
require 'view.php';
$query = tampildata("SELECT * FROM kamar_ketersediaan_tempattidur");
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
                                    <a href="integrasi/aplicares-tt">
                                       <div class="btn btn-light btn-sm"> <i data-feather="arrow-left"></i>Kembali</div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div class="row">
                                 <div class="col-12">
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Kode Kelas</label>
                                       <div class="col-sm-10">
                                          <select name="kodekelas" id="kodekelas" class="form-select">
                                             <?php
                                             $query = tampildata("SELECT * FROM kamar_referensi");
                                             ?>
                                             <?php foreach ($query as $row) : ?>
                                                <option value="<?= $row['namakelas'] ?>"><?= $row['namakelas'] ?></option>
                                             <?php endforeach ?>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Kode Ruang</label>
                                       <div class="col-sm-10">
                                          <input type="text" class="form-control" name="koderuang">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Nama Ruang</label>
                                       <div class="col-sm-10">
                                          <input type="text" class="form-control" name="koderuang">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Kapasitas</label>
                                       <div class="col-sm-10">
                                          <input type="number" class="form-control" name="kapasitas">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Tersedia</label>
                                       <div class="col-sm-2">
                                          <input type="number" class="form-control" name="kapasitas">
                                       </div>
                                       <div class="col-sm-2">
                                          <input type="number" class="form-control" name="kapasitas" placeholder="Pria">
                                       </div>
                                       <div class="col-sm-2">
                                          <input type="number" class="form-control" name="kapasitas" placeholder="Wanita">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                       <div class="col-sm-10">
                                          <button class="btn btn-success btn-sm">Simpan</button>
                                          <a href="integrasi/aplicares-tt">
                                             <button type="button" class="btn btn-light btn-sm">Batal</button>
                                          </a>
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
         <!-- footer start-->
         <?php
         require '../../template/footer.php';
         ?>
      </div>

   </div>


   <?php
   include 'library.php';
   ?>
</body>

</html>