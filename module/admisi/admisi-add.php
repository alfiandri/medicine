<?php
session_start();
$page = "Registrasi Pasien Baru";
require '../../db/connect.php';
require 'view.php';
require '../../controller/admisi/admisi.php';
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
                        <h3>Registrasi Pasien Baru</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Registrasi</li>
                           <li class="breadcrumb-item active">Pasien Baru </li>
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
                           <div class="card-body file-manager">
                              <div class="row">
                                 <div class="col-12">
                                    <div class="mb-2 row">
                                       <label for="nama" class="col-sm-2 col-form-label">No.Rekam Medis <span class="text-danger">*</span></label>
                                       <div class="col-sm-10">
                                          <form method="POST" action="../controller/admisi/validasi-rm?&tipe=<?= @$_GET['tipe'] ?>">
                                             <div class="input-group">
                                                <?php
                                                $rm = @$_GET['rm'];
                                                if ($rm == NULL) {
                                                   $rm = generateUniqueNRM();
                                                } else {
                                                   $rm = $rm;
                                                }
                                                ?>
                                                <input type="text" name="nomorrm" required="" class="form-control form-control-sm" value="<?= $rm ?>" aria-describedby="basic-addon2">
                                                <button class="btn btn-outline-danger" type="submit">Cek RM</button>
                                             </div>
                                          </form>

                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="mb-2 row">
                                       <label for="tglsep" class="col-sm-2 col-form-label">Tanggal SEP / Pelayanan</label>
                                       <div class="col-sm-10">
                                          <input type="date" class="form-control form-control-sm" name="tglsep" id="tglsep" placeholder="Tanggal SEP / Pelayanan">
                                       </div>
                                    </div>
                                 </div>
                                 <form action="" method="POST">
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">No.KTP <span class="text-danger">*</span></label>
                                          <div class="col-sm-10">
                                             <div class="input-group">
                                                <input type="text" name="nokartu" id="nokartu" class="form-control form-control-sm" placeholder="Nomor Induk Kependudukan" aria-describedby="basic-addon2">
                                                <button class="btn btn-outline-danger caribpjs">Cari</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">No.BPJS</label>
                                          <div class="col-sm-10">
                                             <div class="input-group">
                                                <input type="text" name="nobpjs" id="nobpjs" class="form-control form-control-sm" placeholder="Nomor BPJS" aria-describedby="basic-addon2">
                                                <button class="btn btn-outline-danger caribpjs">Cari</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <input type="hidden" name="tipe" value="<?= @$_GET['tipe'] ?>">
                                    <input type="hidden" name="nomorrm" value="<?= $rm ?>">
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="nama" class="col-sm-2 col-form-label">Nama <span class="text-danger">*</span> </label>
                                          <div class="col-sm-3">
                                             <select name="sebutan" class="form-select form-select-sm" id="sebutan" required="">
                                                <option value="">--PILIH SEBUTAN--</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM sebutan");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['sebutan'] ?>"><?= $row['sebutan'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                          <div class="col-sm-7">
                                             <input type="text" class="form-control form-control-sm" name="nama" id="nama" placeholder="Nama Lengkap Sesuai Identitas">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="kodebooking" class="col-sm-2 col-form-label">Kode Booking</label>
                                          <div class="col-sm-10">
                                             <input type="text" class="form-control form-control-sm" name="kodebooking" id="kodebooking" placeholder="Kode Booking">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="ttl" class="col-sm-2 col-form-label">Tempat Tanggal Lahir <span class="text-danger">*</span></label>
                                          <div class="col-sm-5">
                                             <input type="text" class="form-control form-control-sm" name="tempatlahir" placeholder="Tempat Lahir" required="">
                                          </div>
                                          <div class="col-sm-5">
                                             <input type="date" class="form-control form-control-sm" name="tanggallahir" id="tanggallahir" required="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="agama" class="col-sm-2 col-form-label">Agama <span class="text-danger">*</span></label>
                                          <div class="col-sm-10">
                                             <select name="agama" class="form-select form-select-sm" id="agama" required="">
                                                <option value="">--PILIH AGAMA--</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM agama");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['agama'] ?>"><?= $row['agama'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                                          <div class="col-sm-10">
                                             <select name="gender" class="form-select form-select-sm" id="gender" required="">
                                                <option value="">--PILIH JENIS KELAMIN--</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM gender");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['gender'] ?>"><?= $row['gender'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Pendidikan <span class="text-danger">*</span></label>
                                          <div class="col-sm-10">
                                             <select name="pendidikan" class="form-select form-select-sm" id="pendidikan" required="">
                                                <option value="">--PILIH PENDIDIKAN--</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM pendidikan");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['pendidikan'] ?>"><?= $row['pendidikan'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Pekerjaan <span class="text-danger">*</span></label>
                                          <div class="col-sm-10">
                                             <select name="pekerjaan" class=" form-select form-select-sm" id="pekerjaan" required="">
                                                <option value="">--PILIH PEKERJAAN--</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM pekerjaan");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['pekerjaan'] ?>"><?= $row['pekerjaan'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="golongandarah" class="col-sm-2 col-form-label">Golongan Darah</label>
                                          <div class="col-sm-10">
                                             <select name="golongandarah" class="form-select form-select-sm" id="golongandarah">
                                                <option value="-">BELUM DIKETAHUI</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM golongan_darah");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['blood'] ?>"><?= $row['blood'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                       </div>

                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="golongandarah" class="col-sm-2 col-form-label">Status Perkawinan</label>
                                          <div class="col-sm-10">
                                             <select name="statuskawin" class="form-select form-select-sm" id="statuskawin" required="">
                                                <option value="">--PILIH STATUS KAWIN--</option>
                                                <?php
                                                $query = tampildata("SELECT * FROM status_kawin");
                                                ?>
                                                <?php foreach ($query as $row) : ?>
                                                   <option value="<?= $row['kawin'] ?>"><?= $row['kawin'] ?></option>
                                                <?php endforeach ?>
                                             </select>
                                          </div>
                                       </div>

                                    </div>
                                    <div class="col-12">
                                       <div class="mb-2 row">
                                          <label for="notelepon" class="col-sm-2 col-form-label">Narahubung <span class="text-danger">*</span></label>
                                          <div class="col-sm-3">
                                             <input type="text" class="form-control form-control-sm" required="" name="notelepon" id="notelepon" placeholder="No.Handphone">
                                          </div>
                                          <div class="col-sm-7">
                                             <input type="email" class="form-control form-control-sm" placeholder="Email" name="email" id="email">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                          <div class="col-sm-10">
                                             <button type="submit" name="simpanpasien" class="btn btn-success btn-sm">Simpan</button>
                                             <a href="admisi/admisi-rj">
                                                <button type="button" class="btn btn-light btn-sm">Batal</button>
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
         require '../../template/footer.php';
         ?>
      </div>
   </div>
   <?php
   require 'library.php';
   ?>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   <script>
      $('.caribpjs').on('click', function(e) {
         e.preventDefault();

         const nokartu = $('#nokartu').val();
         const nobpjs = $('#nobpjs').val();
         const tglsep = $('#tglsep').val();

         $.ajax({
            url: '../controller/admisi/cari-bpjs',
            type: 'POST',
            data: {
               nokartu: nokartu,
               nobpjs: nobpjs,
               tglsep: tglsep,
            },
            dataType: 'json',
            success: function(data) {
               const metadata = data.metadata;
               if (metadata.code == 201) {
                  swal(metadata.message);
                  return;
               }
               $('#sebutan').val(data.data.sebutan);
               $('#nama').val(data.data.nama);
               $('#nokartu').val(data.data.nokartu);
               $('#nobpjs').val(data.data.nobpjs);
               $('#tanggallahir').val(data.data.tanggallahir);
               $('#gender').val(data.data.gender);

            },
            error: function(xhr, status, error) {
               console.error('Error:', error);
            }
         });
      });
   </script>
</body>

</html>