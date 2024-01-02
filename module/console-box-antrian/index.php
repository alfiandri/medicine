<?php
$page = "BO";
require 'view.php';
$jenisPasien = $_GET['jenispasien'] ?? null;

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require 'head.php';
   ?>
   <style>
      .rujukan {
         border: 1px solid #0d6efd !important;
         width: 100%;
      }

      .rujukan-header {
         background-color: rgba(76, 160, 247, 0.6) !important;
         padding: 10px !important;
         font-weight: 700;
         text-align: center;
      }

      .rujukan-body {
         padding: 0px !important;
      }
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
                              <p class="card-text">Ambil No.Antrian anda sesuai dengan kebutuhan anda. Untuk anda yang sudah melakukan registrasi online silahkan ambil antrian poliklinik, dan untuk belum melakukan registrasi silahkan ambil antrian loket, dan untuk anda yang telah selesai melakukan pemeriksaan silahkan ambil antrian farmasi </p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <?php

                  if (!$jenisPasien) {
                  ?>
                     <div class="row">
                        <div class="col-6">
                           <a href="../module/console-box-antrian/index?jenispasien=bpjs" class="card">
                              <div class="card-body bg-primary">
                                 <h5 class="card-title">BPJS</h5>
                                 <p class="card-text">Pasien yang terdaftar di BPJS Kesehatan dengan kepesertaan aktif dapat langsung menunggu panggilan antrian di loket BPJS</p>
                              </div>
                           </a>
                        </div>
                        <div class="col-6">
                           <a href="console-box-antrian/print/print-umum" class="card">
                              <div class="card-body bg-success">
                                 <h5 class="card-title">Non BPJS</h5>
                                 <p class="card-text">Pasien umum yang tidak menggunakan layanan jaminan kesehatan BPJS/Asuransi ini digunakan untuk pasien baru atau umum</p>
                              </div>
                           </a>
                        </div>

                        <div class="col-6">
                           <div class="card" data-bs-toggle="modal" data-bs-target="#mjkn">
                              <div class="card-body bg-danger">
                                 <h5 class="card-title">M-JKN</h5>
                                 <p class="card-text">Pasien dengan registrasi layanan kesehatan M-JKN untuk check in onsite</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="card" data-bs-toggle="modal" data-bs-target="#loketfarmasi">
                              <div class="card-body bg-warning">
                                 <h5 class="card-title">Farmasi</h5>
                                 <p class="card-text">Antrian untuk pasien telah selesai dilakukan pemeriksaan di poliklinik </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php
                  }

                  if (@$jenisPasien == 'bpjs') {
                  ?>
                     <div class="row" id="jenis-pasien">
                        <div class="col-6">
                           <a href="console-box-antrian/print/print-bpjs?tipe=baru" class="card">
                              <div class="card-body bg-primary">
                                 <h5 class="card-title">Pasien Baru</h5>
                                 <p class="card-text">Pasien yang belum terdaftar silakan menunggu antrian pendaftaran admisi.</p>
                              </div>
                           </a>
                        </div>

                        <div class="col-6">
                           <div class="card" data-bs-toggle="modal" data-bs-target="#admisibpjslama">
                              <div class="card-body bg-success">
                                 <h5 class="card-title">Pasien Lama</h5>
                                 <p class="card-text">Pasien lama yang sudah terdaftar pada sistem.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php
                  }
                  ?>
               </div>
            </div>
         </div>
      </div>

      <!-- Modal Rujukan -->
      <div class="modal fade" id="getrujukan" data-bs-backdrop="static" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Rujukan</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form action="">
                  <div class="modal-body" id='container-rujukan'>

                  </div>
               </form>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="admisibpjslama" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Pasien BPJS</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form action="console-box-antrian/check-bpjs" method="POST">
                  <div class="modal-body">
                     <div class="mb-3">
                        <label for="tipe" class="form-label">Identitas</label>
                        <select class="form-select" aria-label="Default select example" name="tipe" id="tipe">
                           <option value="">Tipe Identitas </option>
                           <option value="1">NIK</option>
                           <option value="2">No.Kartu BPJS</option>
                        </select>
                     </div>
                     <div class="mb-3">
                        <label for="nomor" class="form-label">No.Kartu Identitas</label>
                        <div class="input-group">
                           <input type="text" class="form-control" id="nomor" name="nomor" required="">
                           <div class="input-group-append">
                              <button class="btn btn-outline-primary" type="button" id="carirujukan">Cari</button>
                           </div>
                        </div>
                     </div>

                     <div class="mb-3">
                        <label for="tipe" class="form-label">Nomor Rujukan</label>
                        <input type="text" name="no_rujukan" id="no_rujukan" class="form-control" readonly>
                        <input type="hidden" name="poli" id="poli">
                        <input type="hidden" name="nik" id="nik">
                        <input type="hidden" name="no_kartu" id="noKartu">
                        <input type="hidden" name="jadwal" id="jadwal">
                        <input type="hidden" name="jeniskunjungan" id="jeniskunjungan">
                        <input type="hidden" name="jenis_rujukan" id="jenis_rujukan">
                        <input type="hidden" name="provperujuk" id="provperujuk">
                        <input type="hidden" name="jenispeserta" id="jenispeserta">
                     </div>

                     <div class="mb-3">
                        <label for="dokter" class="form-label">Dokter</label>
                        <select class="form-select dokter" aria-label="Default select example" name="dokter" id="dokter">
                        </select>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                     <button type="submit" name="caripasienbpjslama" class="btn btn-primary">Proses</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="pasienlama" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Pasien Umum</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form action="console-box-antrian/check-umum" method="POST">
                  <div class="modal-body">
                     <div class="mb-3">
                        <label for="nomor" class="form-label">NIK (Nomor Induk Kependudukan)</label>
                        <input type="text" class="form-control" id="nomor" name="nomor" required="">
                     </div>

                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                     <button type="submit" name="simpanadmisiumum" class="btn btn-primary">Proses</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="loketfarmasi" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Antrian Farmasi</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form action="console-box-antrian/check-farmasi" method="POST">
                  <div class="modal-body">
                     <div class="mb-3">
                        <label for="kode" class="form-label">Kode Booking</label>
                        <input type="text" class="form-control" id="kode" name="kode">
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                     <button type="submit" name="carifarmasi" class="btn btn-primary">Proses</button>
                  </div>
               </form>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="mjkn" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">M-JKN Check In</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form action="console-box-antrian/check-in" method="POST">
                  <div class="modal-body">
                     <div class="mb-3">
                        <label for="nomor" class="form-label">Nomor Booking</label>
                        <input type="text" class="form-control" id="nomor" name="nomor" required="">
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                     <button type="submit" name="carijkn" class="btn btn-primary">Proses</button>
                  </div>
               </form>
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

      <script>
         $('#carirujukan').on('click', function() {
            // Get the selected category value
            const tipe = $('#tipe').val();
            const nomor = $('#nomor').val();
            if (!tipe) {
               alert('Tipe identitas tidak boleh kosong!');
               return;
            }

            if (!nomor) {
               alert('Nomor kartu identitas tidak boleh kosong!');
               return;
            }
            // // Make an AJAX request
            $.ajax({
               url: '../module/console-box-antrian/check-rujukan',
               type: 'POST',
               data: {
                  tipe: tipe,
                  nomor: nomor
               },
               dataType: 'json',
               success: function(data) {
                  const metadata = data.metadata;
                  if (metadata.code == 201) {
                     alert(metadata.message);
                     return;
                  }
                  const container = document.getElementById("container-rujukan");
                  container.innerHTML = null;

                  data.data.forEach(function(item) {
                     const itemHTML = createHtmlRujukan(item);
                     container.innerHTML += itemHTML;
                  });

                  $('#admisibpjslama').modal('hide');
                  $('#getrujukan').modal('show');
               },
               error: function(xhr, status, error) {
                  console.error('Error:', error);
               }
            });
         });

         $(document).on("click", ".pilihrujuk", function(e) {
            e.preventDefault();

            const noRujukan = $(this).data('norujuk');
            const poli = $(this).data('poli');
            const noKartu = $(this).data('nokartu');
            const nik = $(this).data('nik');
            const jeniskunjungan = $(this).data('jeniskunjungan');
            const jenis_rujukan = $(this).data('jenis_rujukan');
            const provperujuk = $(this).data('provperujuk');
            const jenispeserta = $(this).data('jenispeserta');

            $('#no_rujukan').val(noRujukan);
            $('#poli').val(poli);
            $('#nik').val(nik);
            $('#noKartu').val(noKartu);
            $('#jeniskunjungan').val(jeniskunjungan);
            $('#jenis_rujukan').val(jenis_rujukan);
            $('#provperujuk').val(provperujuk);
            $('#jenispeserta').val(jenispeserta);

            // Make an AJAX request
            $.ajax({
               url: '../controller/antrian/ambil-dokter',
               type: 'POST',
               data: {
                  poli: poli,
               },
               dataType: 'json',
               success: function(data) {
                  $('#getrujukan').modal('hide');
                  $('#admisibpjslama').modal('show');

                  // Clear existing options
                  $('#dokter').empty();

                  // Populate options based on the response
                  $('#dokter').append(`<option value="">-- Pilih Dokter --</option>`);

                  $.each(data, function(index, dokter) {
                     $('#dokter').append(`<option value="${dokter.kodedokter}" data-jadwal="${dokter.jadwal}">${dokter.namadokter} (${dokter.jadwal})</option>`);
                  });
               },
               error: function(xhr, status, error) {
                  console.error('Error:', error);
               }
            });
         });

         $('.dokter').on('change', function() {
            // Get the selected category value
            var selectedOption = $(this).find('option:selected');

            var jadwal = selectedOption.data('jadwal');

            $('#jadwal').val(jadwal);
         });

         function createHtmlRujukan(item) {
            var html = `
    <div class="rujukan card border-primary mb-3">
        <div class="card-header rujukan-header">${item.no_kunjungan}</div>
        <div class="card-body rujukan-body">
           <table class="table">
              <tr>
                 <th>Jenis Rujukan</th>
                 <td>${item.jenis_rujukan}</td>
              </tr>
              <tr>
                 <th>Nama RS</th>
                 <td>${item.nama_rs}</td>
              </tr>
              <tr>
                 <th>Tgl Rujukan</th>
                 <td>${item.tgl_rujukan}</td>
              </tr>
              <tr>
                 <th>Poli</th>
                 <td>${item.nama_poli}</td>
              </tr>
              <tr>
                 <td colspan="2">
                    <button class="btn btn-success form-control pilihrujuk" data-poli="${item.kode_poli}" data-norujuk="${item.no_kunjungan}" data-nokartu="${item.no_kartu}" data-nik="${item.nik}" data-jeniskunjungan="${item.jeniskunjungan}" data-jenis_rujukan="${item.jenis_rujukan}" data-provperujuk="${item.provperujuk}" data-jenispeserta="${item.jenispeserta}">PILIH</button>
                 </td>
              </tr>
           </table>
        </div>
     </div>
  `;
            return html;
         }
      </script>
   </div>
</body>

</html>