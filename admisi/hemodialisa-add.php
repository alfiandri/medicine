<?php
$page = "Admisi Hemodialisa";
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
                        <h3>Hemodialisa</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Admisi</li>
                           <li class="breadcrumb-item active">Hemodialisa </li>
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
                              <ul class="nav nav-tabs nav-primary" id="pills-warningtab" role="tablist">
                                 <li class="nav-item"><a class="nav-link active" id="pills-warninghome-tab" data-bs-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Pasien</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Detail</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-warningcontact-tab" data-bs-toggle="pill" href="#pills-warningcontact" role="tab" aria-controls="pills-warningcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Tindakan</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-penunjang-tab" data-bs-toggle="pill" href="#pills-penunjang" role="tab" aria-controls="pills-penunjang" aria-selected="false"><i class="icofont icofont-contacts"></i>Penunjang</a></li>
                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div class="tab-pane fade show active" id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="No.RM" name="" id="">
                                             </div>
                                             <div class="col-sm-7">
                                                <input type="text" class="form-control" name="" id="">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                             <div class="col-sm-10">
                                                <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label">No.Telepon</label>
                                             <div class="col-sm-3">
                                                <input type="tel" class="form-control">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label">Tgl.Daftar Pertama</label>
                                             <div class="col-sm-3">
                                                <input type="date" class="form-control">
                                             </div>
                                             <div class="col-sm-3">
                                                <input type="text" placeholder="Layanan HD Ke " class="form-control">
                                             </div>
                                             <div class="col-sm-4">
                                                <input type="text" placeholder="Catatan " class="form-control">
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                 </div>
                                 <div class="tab-pane fade" id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
                                             <div class="col-sm-3">
                                                <select name="" class="form-select" id="">
                                                   <option value="">Kelas</option>
                                                   <option value="">Kelas I</option>
                                                   <option value="">Kelas II</option>
                                                </select>
                                             </div>
                                             <div class="col-sm-3">
                                                <select name="" class="form-select" id="">
                                                   <option value="">Cara Masuk</option>
                                                   <option value="">Datang Sendiri</option>
                                                </select>
                                             </div>
                                             <div class="col-sm-4">
                                                <select name="" class="form-select" id="">
                                                   <option value="">Ruang/Kamar/Bed/Kelas</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label">Dokter Menangani</label>
                                             <div class="col-sm-3">
                                                <select name="" class="form-select" id="">
                                                   <option value="">Pilih</option>
                                                   <option value="">dr. Andi</option>
                                                   <option value="">dr. Budi</option>
                                                </select>
                                             </div>
                                             <div class="col-sm-3">
                                                <select name="" class="form-select" id="">
                                                   <option value="">Paket</option>
                                                </select>
                                             </div>
                                             <div class="col-sm-4">
                                                <select name="" class="form-select" id="">
                                                   <option value="">Biaya Admin</option>
                                                   <option value="">Ya</option>
                                                   <option value="">Tidak</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Pembayaran</label>
                                          <div class="col-sm-3">
                                             <select name="" class="form-select" id="">
                                                <option value="">Pilih</option>
                                                <option value="">Eko</option>
                                                <option value="">Budi</option>
                                             </select>
                                          </div>
                                          <div class="col-sm-3">
                                             <input type="date" class="form-control" name="" id="">
                                          </div>
                                          <div class="col-sm-4">
                                             <input type="time" class="form-control" name="" id="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-12">
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Catatan</label>
                                          <div class="col-sm-10">

                                             <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-warningcontact" role="tabpanel" aria-labelledby="pills-warningcontact-tab">
                                    <div class="table-responsive">
                                       <table class="display" id="basic-1">
                                          <thead>
                                             <tr>
                                                <th>Tindakan</th>
                                                <th>Biaya (Rp.)</th>
                                                <th>Diskon (%)</th>
                                                <th>Pot (Rp.)</th>
                                                <th>Sub Total</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-penunjang" role="tabpanel" aria-labelledby="pills-penunjang-tab">
                                    <div class="table-responsive">
                                       <table class="table" id="basic-2">
                                          <thead>
                                             <tr>
                                                <th>Jenis</th>
                                                <th>Pemeriksaan</th>
                                                <th>Harga (Rp.)</th>
                                                <th>Jumlah</th>
                                                <th>Tanggal Pemeriskaan</th>
                                                <th>Waktu Pemeriksaan</th>
                                                <th>Keterangan</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <button class="btn btn-success">Simpan</button>
                        <button class="btn btn-light">Tanda Tangan Elektronik</button>
                        <a href="admisi-rj">
                           <button class="btn btn-outline-danger">Batal</button>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid Ends-->
         </div>
         <!-- footer start-->
         <?php
         require 'footer.php';
         ?>
      </div>
   </div>
   <!-- Modal -->
   <div class="modal fade" id="verifikasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Verifikasi Pasien</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <table class="table">
                  <thead>
                     <tr>

                        <th>Nomor Loket</th>
                        <th>Penanggung</th>
                        <th>No.RM</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>No.Hp</th>
                        <th>Poli</th>
                        <th>Dokter</th>
                        <th>No.Antrian</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>00001</td>
                        <td>1111</td>
                        <td>Budi Kurniawan</td>
                        <td>092123123123</td>
                        <td>Poli Gigi</td>
                        <td>dr. Eko</td>
                        <td>1</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="booking" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-fullscreen">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Pasien Booking</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <table class="table">
                  <thead>
                     <tr>
                        <th></th>
                        <th>Kode Booking</th>
                        <th>Tgl.Submit</th>
                        <th>Tgl.Booking</th>
                        <th>No.RM</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>No.Hp</th>
                        <th>Poli</th>
                        <th>Dokter</th>
                        <th>No.Antrian</th>
                        <th>Keterangan</th>
                        <th>Jam Pelayanan</th>
                        <th>Asal Booking</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           <div class="dropdown">
                              <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 Aksi
                              </button>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="#">Pilih</a></li>
                                 <li><a class="dropdown-item" href="#">Hapus</a></li>
                                 <li><a class="dropdown-item" href="#">Batal Mobile JKN</a></li>
                                 <li><a class="dropdown-item" href="#">Tambah Antrean JKN</a></li>
                                 <li><a class="dropdown-item" href="#">Update NIK</a></li>
                                 <li><a class="dropdown-item" href="#">Export</a></li>
                              </ul>
                           </div>
                        </td>
                        <td>EOER02223</td>
                        <td>21-08-2023</td>
                        <td>22-08-2023</td>
                        <td>-</td>
                        <td>123123123</td>
                        <td>Jaka Prayudha</td>
                        <td>08123123123</td>
                        <td>Poli Penyakit Dalam</td>
                        <td>dr. Eko</td>
                        <td>-</td>
                        <td>-</td>
                        <td>19:20:</td>
                        <td>M JKN</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cari</button>
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
         </div>
      </div>
   </div>


   <!-- Modal -->
   <div class="modal fade" id="cari" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Cari Pasien</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Filter</label>
                  <select name="" class="form-select" id="">
                     <option value="">NIK</option>
                     <option value="">No.RM</option>
                     <option value="">Nama Pasien</option>
                     <option value="">Dokter</option>
                     <option value="">Status</option>
                     <option value="">Jaminan</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Cari</label>
                  <input type="text" class="form-control">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Cari</button>
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
   <script src="../assets/js/scrollbar/simplebar.js"></script>
   <script src="../assets/js/scrollbar/custom.js"></script>
   <!-- Sidebar jquery-->
   <script src="../assets/js/config.js"></script>
   <!-- Plugins JS start-->
   <script src="../assets/js/sidebar-menu.js"></script>
   <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
   <script src="../assets/js/rating/jquery.barrating.js"></script>
   <script src="../assets/js/rating/rating-script.js"></script>
   <script src="../assets/js/owlcarousel/owl.carousel.js"></script>
   <script src="../assets/js/ecommerce.js"></script>
   <script src="../assets/js/product-list-custom.js"></script>
   <script src="../assets/js/tooltip-init.js"></script>
   <!-- Plugins JS Ends-->
   <!-- Theme js-->
   <script src="../assets/js/script.js"></script>
   <script src="../assets/js/theme-customizer/customizer.js"></script>
   <!-- Plugin used-->
</body>

</html>