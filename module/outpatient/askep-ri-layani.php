<?php
$page = "Askep RI";
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
                        <h3>ASKEP</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">ASKEP</li>
                           <li class="breadcrumb-item active">Asessmen RI </li>
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
                                 <li class="nav-item"><a class="nav-link" id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Assesment</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-evaluasi-tab" data-bs-toggle="pill" href="#pills-evaluasi" role="tab" aria-controls="pills-evaluasi" aria-selected="false"><i class="icofont icofont-contacts"></i>Evaluasi</a></li>
                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div class="tab-pane fade show active" id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label">No.Pendaftaran</label>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" value="RJ10231923123" name="" id="">
                                             </div>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" name="" value="21-08-2023 16:34:22" id="">
                                             </div>
                                             <div class="col-sm-4">
                                                <input type="text" class="form-control" name="" value="Pasien Umum" id="">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" value="00001" name="" id="">
                                             </div>
                                             <div class="col-sm-7">
                                                <input type="text" class="form-control" name="" value="Jaka Prayudha" id="">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" value="Medan">
                                             </div>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" value="20 Mei 1992">
                                             </div>
                                             <div class="col-sm-4">
                                                <input type="text" class="form-control" value="31 Tahun 5 Bulan 12 Hari">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label">Ruang</label>
                                             <div class="col-sm-3">
                                                <input type="text" value="Poli Gigi" class="form-control">
                                             </div>
                                             <div class="col-sm-3">
                                                <input type="text" value="Non Kelas" class="form-control">
                                             </div>
                                             <div class="col-sm-4">
                                                <input type="text" value="Umum" class="form-control">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                                             <div class="col-sm-10">
                                                <input type="text" class="form-control" value="Jl.Medan Gaharu No.15 Medan Timur">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label">Dokter</label>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" value="drg. Hendra">
                                             </div>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="Kamar">
                                             </div>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="Jenis Pelayanan">
                                             </div>
                                             <div class="col-sm-1">
                                                <input type="text" class="form-control" placeholder="Bed">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label">Kondisi Masuk</label>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" value="-">
                                             </div>
                                             <div class="col-sm-7">
                                                <input type="text" class="form-control" placeholder="Catatan">
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                 </div>
                                 <div class="tab-pane fade" id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                                    <div class="row">
                                       <div class="col-sm-3 col-xs-12">
                                          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                             <a class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Catatan Edukasi Integrasi</a>
                                             <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Data Subjektif</a>
                                             <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Diagnosis</a>
                                             <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Eliminasi</a>
                                             <a class="nav-link" id="v-pills-headtotoe-tab" data-bs-toggle="pill" href="#v-pills-headtotoe" role="tab" aria-controls="v-pills-headtotoe" aria-selected="false">Head to Toe</a>
                                             <a class="nav-link" id="v-pills-belajar-tab" data-bs-toggle="pill" href="#v-pills-belajar" role="tab" aria-controls="v-pills-belajar" aria-selected="false">Kebutuhan Belajar</a>
                                             <a class="nav-link" id="v-pills-fisik-tab" data-bs-toggle="pill" href="#v-pills-fisik" role="tab" aria-controls="v-pills-fisik" aria-selected="false">Pemeriksaan Fisik</a>
                                             <a class="nav-link" id="v-pills-gigi-tab" data-bs-toggle="pill" href="#v-pills-gigi" role="tab" aria-controls="v-pills-gigi" aria-selected="false">Pemeriksaan Gigi</a>
                                             <a class="nav-link" id="v-pills-klinis-tab" data-bs-toggle="pill" href="#v-pills-klinis" role="tab" aria-controls="v-pills-klinis" aria-selected="false">Pengkajian Awal Klinis</a>
                                             <a class="nav-link" id="v-pills-emosional-tab" data-bs-toggle="pill" href="#v-pills-emosional" role="tab" aria-controls="v-pills-emosional" aria-selected="false">Respon Emosional</a>
                                             <a class="nav-link" id="v-pills-gizi-tab" data-bs-toggle="pill" href="#v-pills-gizi" role="tab" aria-controls="v-pills-gizi" aria-selected="false">Skrining Gizi</a>
                                             <a class="nav-link" id="v-pills-budaya-tab" data-bs-toggle="pill" href="#v-pills-budaya" role="tab" aria-controls="v-pills-budaya" aria-selected="false">Sosial Budaya</a>
                                          </div>
                                       </div>
                                       <div class="col-sm-9 col-xs-12">
                                          <div class="tab-content" id="v-pills-tabContent">
                                             <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <div class="card-header">
                                                   <div class="media">
                                                      <div class="media-body text-end">
                                                         <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edukasi"> <i data-feather="plus-square"></i>Buat Baru</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="card-body">
                                                   <div class="table-responsive">
                                                      <table class="table" id="basic-2">
                                                         <thead>
                                                            <tr>
                                                               <th>Waktu</th>
                                                               <th>Topik Edukasi</th>
                                                               <th>Uraian Informasi</th>
                                                               <th class="text-center">Actions</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <td>21-08-2023 19:12:20</td>
                                                               <td>Penggunaan Obat</td>
                                                               <td>-</td>
                                                               <td class="text-center">
                                                                  <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                  <button class="btn btn-sm btn-outline-danger text-dark">Batal</button>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <div class="card-header">
                                                   <div class="media">
                                                      <div class="media-body text-end">
                                                         <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#subjektif"> <i data-feather="plus-square"></i>Buat Baru</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="card-body">
                                                   <div class="table-responsive">
                                                      <table class="table" id="basic-5">
                                                         <thead>
                                                            <tr>
                                                               <th>Waktu</th>
                                                               <th>Disampaikan Oleh</th>
                                                               <th>Keluhan</th>
                                                               <th class="text-center">Actions</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <td>21-08-2023 19:12:20</td>
                                                               <td>-</td>
                                                               <td>-</td>
                                                               <td class="text-center">
                                                                  <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                  <button class="btn btn-sm btn-outline-danger text-dark">Batal</button>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                <div class="card-header">
                                                   <div class="media">
                                                      <div class="media-body text-end">
                                                         <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#diagnosa"> <i data-feather="plus-square"></i>Buat Baru</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="card-body">
                                                   <div class="table-responsive">
                                                      <table class="table" id="basic-5">
                                                         <thead>
                                                            <tr>
                                                               <th>Petugas</th>
                                                               <th>Diagnosis</th>
                                                               <th class="text-center">Actions</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <td>-</td>
                                                               <td>-</td>
                                                               <td class="text-center">
                                                                  <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                  <button class="btn btn-sm btn-outline-danger text-dark">Batal</button>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">BAB</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Frekuensi BAB (Per Hari)</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">BAK</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Frekuensi BAK (Per Hari)</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="mt-3 row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-8">
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#eliminasi">Update</button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-headtotoe" role="tabpanel" aria-labelledby="v-pills-headtotoe-tab">
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Rambut & Kepala</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Wajah</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Mata</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Telinga</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Hidung & Tenggorokan</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Mulit Lidah & Gigi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Leher</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Respirasi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Mammae</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Jantung</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Abdomen</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Ginjal (Nyeri Ketuk)</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Genitalia</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Extremitas Atas</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Extremitas Bawah</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Integumen</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="mt-3 row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-8">
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#headtotoe">Update</button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-belajar" role="tabpanel" aria-labelledby="v-pills-belajar-tab">
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Bicara</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Bahasa Sehari Hari</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Penerjemah</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Bahasa Isyarat</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Pemahaman Penyakit</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Pemahaman Pengobatan</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Pemahaman Perawatan</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Pemahaman Nutrisi Diet</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Hambatan Belajar</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="mt-3 row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-8">
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#kebutuhanbelajar">Update</button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-fisik" role="tabpanel" aria-labelledby="v-pills-fisik-tab">
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Keadaan Umum</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Tingkat Kesadaran</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="- | GCS">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Tanda Vital</label>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="Tekanan Darah (mmHg)">
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="Detak Jantung(bpm)">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="Suhu Badan (c)">
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="Nafas (x/menit)">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Anamnesa</label>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="Tinggi Badan (cm)">
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="Berat Badan (Kg)">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="IMT (Kg/m2)">
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="Berat Badan Ideal (Kg)">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Skala Nyeri</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Status Fungsional</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Membesar Sesuai Usia</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Bekas Operasi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Palpasi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="TFU - | - |">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Presentasi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Penurunan Bagian Terendah</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">TBJ</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Auskultasi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">His / Kontraksi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Pemeriksaan Dalam</label>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="Inspeksi">
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="Inspekulo">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="VT">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Ginekologi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="mt-3 row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-8">
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#fisik">Update</button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-gigi" role="tabpanel" aria-labelledby="v-pills-gigi-tab">
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Keluhan Utama</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Tekanan Darah</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Penyakit Jantung</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>

                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Diabetes Melitus</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Hemophilia</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Hepatitis</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Penyakit Lain</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Alergi Terhadap Obat</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Alergi Terhadap Makanan</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <img src="../assets/Screenshot 2023-08-23 at 19.59.17.png" alt="">
                                                </div>
                                                <div class="row">
                                                   <img src="../assets/Screenshot 2023-08-23 at 20.00.05.png" alt="">
                                                </div>
                                                <div class="mt-3 row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-8">
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#gigi">Update</button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-klinis" role="tabpanel" aria-labelledby="v-pills-klinis-tab">
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Keluhan Saat Ini</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Riwayat Pengobatan</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Riwayat Penyakit Dahulu</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>

                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Riwayat Penyakit Keluarga</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Riwayat Alergi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Pemeriksaan Fisik</label>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="Kesadaran ">
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="Suhu (C) ">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="TD (mmHg) ">
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="BB (Kg) ">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="RR (x/menit) ">
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="TB (cm) ">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="N (x/menit) ">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Mata</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Pupil</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Hidung</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Telinga</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Membran Timpani</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Mulut</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Tenggorokan</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Leher</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Pemeriksaan Lain</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Gerak Dada</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Suara Nafas</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Pemeriksaan Lain</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="mt-3 row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-8">
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#klinis">Update</button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-gizi" role="tabpanel" aria-labelledby="v-pills-gizi-tab">
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Tampak Kurus</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">BB Turun/T.Naik (3 Bulan)</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Asupan Makan Berkurang</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>

                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Penyakit Risiko Malnutrisi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Total Skor</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="mt-3 row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-8">
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#gizi">Update</button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-emosional" role="tabpanel" aria-labelledby="v-pills-emosional-tab">
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Kecematan</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Koping Mekanisme</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Respon Emosi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="mt-3 row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-8">
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#gizi">Update</button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-budaya" role="tabpanel" aria-labelledby="v-pills-budaya-tab">
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Agama</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Pekerjaan</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Tinggal Bersama</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>

                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Pendidikan Pasien</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Suku</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Kewarganegraan</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>

                                                <div class="mt-3 row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-8">
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#agama">Update</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-evaluasi" role="tabpanel" aria-labelledby="pills-evaluasi-tab">
                                    <div class="card">
                                       <div class="card-header">

                                          <div class="media">
                                             <div class="media-body text-end">
                                                <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#soap"> <i data-feather="plus-square"></i>SOAP Template</div>
                                                <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add"> <i data-feather="plus-square"></i>Tambah Baru</div>

                                             </div>
                                          </div>
                                       </div>
                                       <div class="card-body file-manager">
                                          <div class="table-responsive">
                                             <table class="display" id="basic-1">
                                                <thead>
                                                   <tr>
                                                      <th>Tanggal</th>
                                                      <th>Dokter/Perawat</th>
                                                      <th>Subject (Keluhan)</th>
                                                      <th>Object (Pemeriksaan)</th>
                                                      <th>Assesment (Kesimpulan)</th>
                                                      <th>Plan (Penatalaksanaan)</th>
                                                      <th class="text-center">Actions</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                   <tr>
                                                      <td>04-08-2023</td>
                                                      <td>Muhammad Farhad</td>
                                                      <td>Sakit Tenggorokan</td>
                                                      <td>Pemerikaan</td>
                                                      <td>Coba assesment</td>
                                                      <td>Rencana tindakan pasien</td>
                                                      <td class="text-center col-2">
                                                         <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                         <button class="btn btn-sm btn-outline-primary text-dark">Cetak</button>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
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
            </div>
            <!-- Container-fluid Ends-->
         </div>
         <!-- footer start-->
         <?php
         require 'footer.php';
         ?>
      </div>
   </div>

   <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Evaluasi</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Dokter / Perawat</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">S (Keluhan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">O (Pemeriksaan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">A (Kesimpulan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">P (Penatalaksanaan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="soap" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Template SOAP</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Nama Template</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">COVID 19</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">S (Keluhan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4">Tidak mencium bau</textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">O (Pemeriksaan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4">Lakukan check darah</textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">A (Kesimpulan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4">Covid</textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">P (Penatalaksanaan)</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="4">Antigen atau Vaksinasi</textarea>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="edukasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Edukasi Integrasi </h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tanggal dan Waku</label>
                  <div class="row">
                     <div class="col">
                        <input type="date" class="form-control" name="" id="">
                     </div>
                     <div class="col">
                        <input type="time" class="form-control" name="" id="">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Topik Edukasi</label>
                  <input type="text" class="form-control">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Uraian Informasi</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="subjektif" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Subjektf</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tanggal dan Waku</label>
                  <div class="row">
                     <div class="col">
                        <input type="date" class="form-control" name="" id="">
                     </div>
                     <div class="col">
                        <input type="time" class="form-control" name="" id="">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Disampaikan Oleh</label>
                  <input type="text" class="form-control">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Keluhan</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="diagnosa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Diagnosis</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Petugas</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Diagnosis</label>

                  <input type="text" class="form-control" name="" id="">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="eliminasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Eliminasi</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">BAB</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Konstipasi</option>
                     <option value="">Diare</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Frekuensi BAB (Par Hari)</label>
                  <input type="text" class="form-control" name="" id="">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">BAK</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Inkontinensia</option>
                     <option value="">Hematuria</option>
                     <option value="">Disuria</option>
                     <option value="">Urine Menetes</option>
                     <option value="">Nokturia</option>
                     <option value="">Tetentio Urine</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Frekuensi BAK (Par Hari)</label>
                  <input type="text" class="form-control" name="" id="">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="headtotoe" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Head To Toe</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Rambut & Kepala</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Bersih</option>
                     <option value="">Kotor</option>
                     <option value="">Benjolan</option>
                     <option value="">Luka Luka</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Wajah</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Tic Fasilis</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Mata</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Anammia</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Hidung & Tenggorokan</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Epiktaksi</option>
                     <option value="">Pembesaran Tonsil & Kemerahan</option>
                     <option value="">Nyeri Telan</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Mulut Lidah & Gigi</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Anammia</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Leher</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Anammia</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Respirasi</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Anammia</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Mammae</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Anammia</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Jantung</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Anammia</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Abdomen</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Anammia</option>
                     <option value="">Asimteris</option>
                  </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="kebutuhanbelajar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Kebutuhan Belajar</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Bicara</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Tidak Normal</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Bahasa Sehari Hari</label>
                  <input type="text" class="form-control" name="" id="">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Penerjemah</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Ada</option>
                     <option value="">Tidak</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Bahasa Isyarat</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Ada</option>
                     <option value="">Tidak</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Pemahaman Penyakit</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Ada</option>
                     <option value="">Tidak</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Pemahaman Pengobatan</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Ada</option>
                     <option value="">Tidak</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Pemahaman Perawatan</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Ada</option>
                     <option value="">Tidak</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Pemahaman Nutrisi Diet</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Ada</option>
                     <option value="">Tidak</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Hambatan Belajar</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Ada</option>
                     <option value="">Tidak</option>
                  </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="fisik" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pemeriksaan Fisik</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Keadaan Umum</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Tampak Normal</option>
                     <option value="">Sakit Ringan</option>
                     <option value="">Sakit Sedang</option>
                     <option value="">Sakit Berat</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">GCS</label>
                  <div class="row">
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text" id="basic-addon1">E</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text" id="basic-addon1">M</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text" id="basic-addon1">V</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tingkat Kesadaran</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Compos Mentis</option>
                     <option value="">Apatis</option>
                     <option value="">Delirium</option>
                     <option value="">Somnolen</option>
                     <option value="">Sopor</option>
                     <option value="">Semi Koma</option>
                     <option value="">Koma</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tanda Vital</label>
                  <div class="row">
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">Tekanan Darah</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">Detak Jantung</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">Suhu Badan</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">Nafas</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Anamnesa</label>
                  <div class="row">
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">Tinggi Badan</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">Berat Badan</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
                  <div class="row mt-3">
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">IMT</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                     <div class="col">
                        <div class="input-group">
                           <span class="input-group-text col-8" id="basic-addon1">Berat Badan Ideal</span>
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Skala Nyeri</label>
                  <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Resiko Jatuh (Morse)</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Risiko Rendah (0-24)</option>
                     <option value="">Risiko Sedang (25-44)</option>
                     <option value="">Risiko Tinggi (45>)</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Status Fungsional</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Mandiri</option>
                     <option value="">Perlu Bantuan</option>
                     <option value="">Ketergantungan Total</option>
                  </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="gigi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pemeriksaan Gigi</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Keluhan Utama</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tekanan Darah</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Normal</option>
                     <option value="">Hipertensi</option>
                     <option value="">Hipotensi</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Diabetes Melitus</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                     <option value="">Ada</option>
                     <option value="">Tidak</option>
                  </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="klinis" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Pemeriksaan Klinis</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <h4>ANAMNESA</h4>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Keluhan Saat Ini</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Riwayat Pengobatan</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Riwayat Penyakit Dahulu</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Riwayat Penyakit Keluarga</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Riwayat Alergi</label>
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
               </div>
               <h4>PEMERIKSAAN FISIK</h4>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesadaran</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Suhu (C)</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">TD (mmHg)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">BB (Kg)</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">RR (x/menit)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">RB (cm)</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">N (x/menit)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                     </div>
                  </div>
               </div>
               <h6>Kepala Leher</h6>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Mata</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Benjolan</option>
                           <option value="">Secret</option>
                           <option value="">Hipermi</option>
                        </select>
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Pupil</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Isokor</option>
                           <option value="">Anisokor</option>
                           <option value="">Refleks Cahaya</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Hidung</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Epistaksis</option>
                           <option value="">Hipermi</option>
                           <option value="">Polip</option>
                        </select>
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Telinga</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Intak</option>
                           <option value="">Perforasi</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Membran Timpani</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Epistaksis</option>
                           <option value="">Hipermi</option>
                           <option value="">Polip</option>
                        </select>
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Mulut</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Intak</option>
                           <option value="">Perforasi</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Tenggorkan</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Epistaksis</option>
                           <option value="">Hipermi</option>
                           <option value="">Polip</option>
                        </select>
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Leher</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Intak</option>
                           <option value="">Perforasi</option>
                        </select>
                     </div>
                  </div>
               </div>
               <h6>Paru</h6>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Gerak Dada </label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Epistaksis</option>
                           <option value="">Hipermi</option>
                           <option value="">Polip</option>
                        </select>
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Suara Nafas</label>
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                           <option value="">Intak</option>
                           <option value="">Perforasi</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="gizi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Gizi</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Tampak Kurus</label>
                        <select name="" class="form-select" id="">
                           <option value="">Tidak</option>
                           <option value="">Ya</option>
                        </select>
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">BB Turun / Tidak Naik (3 Bulan)</label>
                        <select name="" class="form-select" id="">
                           <option value="">Tidak</option>
                           <option value="">Ya</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Asupan Berkurang</label>
                  <select name="" class="form-select" id="">
                     <option value="">Diabetes Melitus</option>
                     <option value="">Kanker</option>
                     <option value="">Fungsi Hati</option>
                     <option value="">Obesitas</option>
                     <option value="">Penyakit Paru Kronis</option>
                     <option value="">Diare</option>
                     <option value="">Penyakit Jantung</option>
                     <option value="">Hipertensi</option>
                     <option value="">Gangguan Elektrolit</option>
                  </select>
               </div>
               <h6>Antropometri</h6>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">BB (Kg)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">TB (cm)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">IMT (Kg/m)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">BBI</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">LILA</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <hr>
               <h6>Biokimia</h6>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">GDP (mg/dl)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">GD2PP (mg/dl)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Cholesterol Total</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">LDL</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">UA</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <hr>
               <h6>Fisik-Klinis</h6>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">TN</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <hr>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Riwayat Gizi</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Riwayat Personal</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Diagnosa Gizi</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Rencana Intervensi Gizi</label>
                  <input type="text" class="form-control">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Intervensi Gizi</label>
                  <input type="text" class="form-control">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Perubahan DIIT</label>
                  <input type="text" class="form-control">
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Rencana Monitoring dan Evaluasi</label>
                  <input type="text" class="form-control">
               </div>
               <hr>
               <h6>Monitoring & Evaluasi</h6>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                        <input type="date" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">BB (Kg)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Energy (kkal)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Protein (g)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Lemak (g)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Karbohidrat (g)</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Uji Klinis</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Laboratorium</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Lain-Lain</label>
                        <input type="text" class="form-control">
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Kesimpulan</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Konseling Gizi</label>
                  <input type="text" class="form-control">
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="agama" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Sosial Budaya</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Agama</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tinggal Bersama</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Pendidikan</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Suku</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Kewarganegaraan</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
               <button type="button" class="btn btn-primary">Simpan</button>
            </div>
         </div>
      </div>
   </div>
   <?php
   include 'library.php';
   ?>
</body>

</html>