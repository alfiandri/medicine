<?php
$page = "Rekam Medis";
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
                        <h3>Rekam Medis</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">ASKEP</li>
                           <li class="breadcrumb-item active">Rekam Medis </li>
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
                                 <li class="nav-item"><a class="nav-link" id="pills-warningprofile-tab" data-bs-toggle="pill" href="#pills-warningprofile" role="tab" aria-controls="pills-warningprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Riwayat</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-evaluasi-tab" data-bs-toggle="pill" href="#pills-evaluasi" role="tab" aria-controls="pills-evaluasi" aria-selected="false"><i class="icofont icofont-contacts"></i>File</a></li>
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
                                                <input type="text" class="form-control" value="RM : 00001" name="" id="">
                                             </div>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" name="" value="NIK : 1721921312312" id="">
                                             </div>
                                             <div class="col-sm-4">
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
                                             <label for="inputPassword" class="col-sm-2 col-form-label">Kontak</label>
                                             <div class="col-sm-3">
                                                <input type="text" value="08212931231" class="form-control">
                                             </div>
                                             <div class="col-sm-7">
                                                <input type="text" value="jaka@gmail.com" class="form-control">
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
                                             <label for="inputPassword" class="col-sm-2 col-form-label">Informasi</label>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" value="L">
                                             </div>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="Islam">
                                             </div>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="Menikah">
                                             </div>
                                             <div class="col-sm-1">
                                                <input type="text" class="form-control" placeholder="A+">
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                             <div class="col-sm-10">
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detail">Detail Profile</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                 </div>
                                 <div class="tab-pane fade" id="pills-warningprofile" role="tabpanel" aria-labelledby="pills-warningprofile-tab">
                                    <div class="row">
                                       <div class="col-sm-3 col-xs-12">
                                          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                             <a class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Kunjungan</a>
                                             <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Alergi</a>
                                             <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Fisik</a>
                                             <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">SOAP</a>
                                             <a class="nav-link" id="v-pills-headtotoe-tab" data-bs-toggle="pill" href="#v-pills-headtotoe" role="tab" aria-controls="v-pills-headtotoe" aria-selected="false">Penyakit</a>
                                             <a class="nav-link" id="v-pills-belajar-tab" data-bs-toggle="pill" href="#v-pills-belajar" role="tab" aria-controls="v-pills-belajar" aria-selected="false">Operasi</a>
                                             <a class="nav-link" id="v-pills-fisik-tab" data-bs-toggle="pill" href="#v-pills-fisik" role="tab" aria-controls="v-pills-fisik" aria-selected="false">Tindakan</a>
                                             <a class="nav-link" id="v-pills-gigi-tab" data-bs-toggle="pill" href="#v-pills-gigi" role="tab" aria-controls="v-pills-gigi" aria-selected="false">Terapi</a>
                                             <a class="nav-link" id="v-pills-klinis-tab" data-bs-toggle="pill" href="#v-pills-klinis" role="tab" aria-controls="v-pills-klinis" aria-selected="false">Resep</a>
                                             <a class="nav-link" id="v-pills-emosional-tab" data-bs-toggle="pill" href="#v-pills-emosional" role="tab" aria-controls="v-pills-emosional" aria-selected="false">Penunjang Medis</a>
                                             <a class="nav-link" id="v-pills-gizi-tab" data-bs-toggle="pill" href="#v-pills-gizi" role="tab" aria-controls="v-pills-gizi" aria-selected="false">Membership</a>
                                             <a class="nav-link" id="v-pills-budaya-tab" data-bs-toggle="pill" href="#v-pills-budaya" role="tab" aria-controls="v-pills-budaya" aria-selected="false">SBAR</a>
                                             <a class="nav-link" id="v-pills-budaya-tab" data-bs-toggle="pill" href="#v-pills-budaya" role="tab" aria-controls="v-pills-budaya" aria-selected="false">ADIME</a>
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
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#headtotoe">Update</button>
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
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Antropemtri</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Biokimia</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Fisik-Klinis</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>

                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Riwayat Gizi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Riwayat Personal</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Diagnosa Gizi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Rencana Intervensi Gizi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Perubahan DIIT</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Rencana Monitoring & Evaluasi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Monitoring & Evaluasi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Konseling Gizi</label>
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
                                    <div class="row">
                                       <div class="col-sm-3 col-xs-12">
                                          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                             <a class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Lampiran</a>
                                             <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">File</a>
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
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#headtotoe">Update</button>
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
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Antropemtri</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Biokimia</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Fisik-Klinis</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>

                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Riwayat Gizi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Riwayat Personal</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Diagnosa Gizi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Rencana Intervensi Gizi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Perubahan DIIT</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Rencana Monitoring & Evaluasi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Monitoring & Evaluasi</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Konseling Gizi</label>
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

   <div class="modal fade" id="detail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Jaka Prayudha</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col">
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">No.RM</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": 00011">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">NIK</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">L/P</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">No.Hp</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Golongan Darah</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Kelurahan</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Kecamatan</label>
                        <div class="col-sm-8">:
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Domisili</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                  </div>
                  <div class="col">
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">No.KK</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Pekerjaan</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">No.Asuransi</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Status Nikah</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Pendidikan</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Kota</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Provinsi</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Negara</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>

                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Agama</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Suku</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">NIP</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
                     </div>
                     <div class="row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Jabatan</label>
                        <div class="col-sm-8">
                           <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                        </div>
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

   <?php
   include 'library.php';
   ?>
</body>

</html>