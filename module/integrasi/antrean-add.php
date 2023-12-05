<?php
session_start();
$page = "Tambah Antrean";
require '../db/connect.php';
require '../controller/view.php';
require '../controller/admisi.php';
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
                        <h3>Anteran Baru</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Registrasi</li>
                           <li class="breadcrumb-item active">Tambah Antrean </li>
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
                                 <div class="media-body text-end">
                                    <a href="antrean">
                                       <div class="btn btn-light btn-sm"> <i data-feather="arrow-left"></i>Kembali</div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <form action="" method="POST">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">Kode Booking <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="<?= $_GET['id'] ?>">
                                          </div>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="Pasien Baru">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">Jenis Pasien <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="JKN">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">Nomor Kartu <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="00012345678">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">NIK <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="3212345678987654">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">No.Handphone <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="085635228888">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">Poliklinik <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="ANA">
                                          </div>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="ANAK">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">No.RM <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="123345">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">Tanggal Periksa <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="date" class="form-control form-control-sm" required="" name="nomorRM" value="<?= date('Y-m-d') ?>">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">Dokter <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="12345">
                                          </div>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="dr Hendra">
                                          </div>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="08:00-16:00">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">Jenis Kunjungan <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="Rujukan Antar RS">
                                          </div>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="" placeholder="No.Referensi">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">No.Antrian <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="A-12">
                                          </div>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="" placeholder="12">
                                          </div>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="" placeholder="35 Menit dilayani">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">Sisa Kuota JKN <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="5">
                                          </div>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="" placeholder="30 Kuota JKN">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">Sisa Kuota NON JKN <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="5">
                                          </div>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="nomorRM" value="" placeholder="30 Kuota NON JKN">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label"><span class="text-danger">*</span></label>
                                          <div class="col-sm-10">
                                             <p>
                                                Peserta harap 30 menit lebih awal guna pencatatan administrasi.
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                          <div class="col-sm-10">
                                             <button type="submit" name="simpanpasien" class="btn btn-success btn-sm">Simpan</button>
                                             <a href="antrean">
                                                <button type="button" class="btn btn-danger btn-sm">Batal Layanan</button>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
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
         require '../template/footer.php';
         ?>
      </div>
   </div>
   <?php
   require 'library.php';
   ?>
</body>

</html>