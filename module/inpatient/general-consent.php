<?php
$master = "Rawat Jalan";
$page = "General Consent";
require 'head.php';
?>

<body>
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
         <div class="page-body">
            <div class="container-fluid">
               <div class="page-title">
                  <div class="row">
                     <div class="col-6">
                        <h3><?= $page ?></h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item"><?= $master ?></li>
                           <li class="breadcrumb-item active"><?= $page ?></li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="col-sm-12">
                  <div class="card">
                     <div class="card-body">
                        <p>
                           Berdasarkan Peraturan Menteri Kesehatan nomor 4 tahun 2018 tentang Kewajiban Rumah Sakit dan Kewajiban Pasien, disebutkan Hak dan Kewajiban Pasien sebagai berikut :
                           <hr>
                        <h6 class="bg-primary">
                           Setiap pasien mempunyai hak :
                        </h6>
                        <ol class="list-group list-group-numbered">
                           <li class="list-group-item">1. Memperoleh informasi mengenai tata tertib dan peraturan yang berlaku di Rumah Sakit;</li>
                           <li class="list-group-item">2. Memperoleh informasi tentang hak dan kewajiban pasien;</li>
                           <li class="list-group-item">3. Memperoleh layanan yang manusiawi, adil, jujur dan tanpa diskriminasi;</li>
                           <li class="list-group-item">4. Memperoleh layanan kesehatan yang bermutu sesuai dengan standart profesi dan standart prosedur operasional;</li>
                           <li class="list-group-item">5. Memperoleh layanan yang efektif dan efisien sehingga pasien terhindar dari kerugian fisik dan materi;</li>
                        </ol>
                        <br>
                        <h6 class="bg-primary">
                           Setiap pasien mempunyai kewajiban :
                        </h6>
                        <ol class="list-group list-group-numbered">
                           <li class="list-group-item">1. Mematuhi peraturan yang berlaku di Rumah Sakit;</li>
                           <li class="list-group-item">2. Menggunakan fasilitas Rumah Sakit secara bertanggung jawab;</li>
                           <li class="list-group-item">3. Menghormati hak Pasien lain, pengunjung dan hak Tenaga Kesehatan serta petugas lainnya yang bekerja di Rumah Sakit;</li>
                           <li class="list-group-item">4. Memberikan informasi yang jujur, lengkap dan akurat sesuai dengan kemampuan dan pengetahuannya tentang masalah kesehatannya;</li>
                           <li class="list-group-item">5. Memberikan informasi mengenai kemampuan financial dan jaminan kesehatan yang dimilikinya;</li>
                        </ol>
                        <br>
                        <h6 class="bg-danger">
                           General Consent
                        </h6>
                        <ol class="list-group list-group-numbered">
                           <li class="list-group-item">1. Saya Mengakui Bahwa Saya Telah Mendapat Informasi Tentang Hak-Hak Dan Kewajiban Saya Di UPT. RS KHUSUS MATA PROVINSI SUMATERA UTARA, termasuk rencana perawatan dan catatan perkembangan tentang penyakit saya.</li>
                           <li class="list-group-item">2. Saya menyetujui dan memberikan persetujuan untuk dirawat di UPT. RS KHUSUS MATA PROVINSI SUMATERA UTARA, dan dengan ini saya meminta dan memberi kuasa kepada UPT. RS KHUSUS MATA PROVINSI SUMATERA UTARA, dokter, perawat didampingi oleh pegawai UPT. RS KHUSUS MATA PROVINSI SUMATERA UTARA untuk memberikan asuhan perawatan, pemeriksaan fisik yang dilakukan oleh dokter dan perawat, melakukan prosedur diagnostic, radiologi dan atau terpai dari tata laksana sesuai pertimbangan dokter yang diperlukan atau disarankan pada perawatan saya. Hal ini mencakup seluruh pemeriksaan dan prosedur diagnostic rutin, pemberian dan atau penyuntikan produk farmasi dan obat-obatan, pemasangan alat kesehatan (kecuali yang membutuhkan persetujuan khusus) dan pengambilan darah untuk pemeriksaan laboratorium atau pemeriksaan patologi.

                           </li>
                           <li class="list-group-item">3. Saya Memberi Kuasa Kepada Setiap Atau Seluruh Orang Yang Merawat Saya Untuk Memeriksa Dan Atau Memberikan Informasi Kesehatan Saya Kepada Pemberi Kesehatan Lain Yang Turut Merawat Saya Selama Di Rumah Sakit Ini.

                           </li>
                           <li class="list-group-item">4. Saya Setuju Rumah Sakit Wajib Menjamin Kerahasiaan Informasi Medis Saya Baik Untuk Kepentingan Perawatan Dan Pengobatan, Pendidikan Maupun Penelitian, Kecuali Saya Mengungkapkan Sendiri Atau Orang Lain Yang Saya Beri Kuasa Untuk Itu (Orang Tua Kandung /Suami/ Istri/ Kakak/Adik Saya)</li>
                           <li class="list-group-item">5. Saya Memberi Kuasa Kepada Rumah Sakit Untuk Menjaga Privasi Dan Kerahasian Penyakit Saya Selama Dalam Perawatan Dan UPT. RS KHUSUS MATA PROVINSI SUMATERA UTARA Memberikan Privasi Kepada Saya Di Dalam Membuat Keputusan Dalam Tindakan Prosedur Yang Disarakan.</li>
                        </ol>
                        </p>
                        <br>
                        <button class="btn btn-sm btn-success">Simpan</button>
                        <button class="btn btn-sm btn-info">Cetak</button>
                        <button class="btn btn-sm btn-light">Tanda Tangan</button>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid Ends-->
         </div>
         <!-- Page Sidebar Ends-->

         <!-- footer start-->
         <?php
         require 'footer.php';
         ?>
      </div>
   </div>
   <!-- Modal -->
   <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tempat & Tanggal Lahir</label>
                  <div class="row">
                     <div class="col-7">
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                     </div>
                     <div class="col-5">
                        <input type="date" class="form-control" id="exampleFormControlInput1">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                  <select name="" class="form-select" id="">
                     <option value="">Laki-Laki</option>
                     <option value="">Perempuan</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">No.Handphone</label>
                  <input type="tel" class="form-control" id="exampleFormControlInput1">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Booking Via</label>
                  <select name="" class="form-select" id="">
                     <option value="">Mobile JKN</option>
                     <option value="">On-Site</option>
                     <option value="">Online Channel</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Layanan</label>
                  <select name="" class="form-select" id="">
                     <option value=""></option>
                  </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Simpan</button>
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
   <script src="../assets/js/chart/chartist/chartist.js"></script>
   <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
   <script src="../assets/js/chart/knob/knob.min.js"></script>
   <script src="../assets/js/chart/knob/knob-chart.js"></script>
   <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
   <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
   <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
   <script src="../assets/js/dashboard/default.js"></script>
   <script src="../assets/js/notify/index.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
   <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
   <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
   <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
   <!-- Plugins JS Ends-->
   <!-- Theme js-->
   <script src="../assets/js/script.js"></script>
   <script src="../assets/js/theme-customizer/customizer.js"></script>
   <!-- login js-->
   <!-- Plugin used-->
</body>

</html>