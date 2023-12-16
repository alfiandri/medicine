<?php
$page = "Tindakan RJ";
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
                        <h3>Tindakan RJ</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Tindakan</li>
                           <li class="breadcrumb-item active">Rawat Jalan</li>
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
                                 <li class="nav-item">
                                    <a class="nav-link" id="pills-askep-tab" data-bs-toggle="pill" href="#pills-askep" role="tab" aria-controls="pills-askep" aria-selected="false"><i class="icofont icofont-contacts"></i>ASKEP</a>
                                 </li>
                                 <li class="nav-item"><a class="nav-link" id="pills-evaluasi-tab" data-bs-toggle="pill" href="#pills-evaluasi" role="tab" aria-controls="pills-evaluasi" aria-selected="false"><i class="icofont icofont-contacts"></i>Pelayanan Medis</a></li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="pills-billing-tab" data-bs-toggle="pill" href="#pills-billing" role="tab" aria-controls="pills-billing" aria-selected="false"><i class="icofont icofont-contacts"></i>Billing</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="pills-konsul-tab" data-bs-toggle="pill" href="#pills-konsul" role="tab" aria-controls="pills-konsul" aria-selected="false"><i class="icofont icofont-contacts"></i>Konsul</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="pills-selesai-tab" data-bs-toggle="pill" href="#pills-selesai" role="tab" aria-controls="pills-selesai" aria-selected="false"><i class="icofont icofont-contacts"></i>Selesai Pelayanan</a>
                                 </li>

                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div class="tab-pane fade show active" id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <div class="row">
                                       <div class="col-sm-3 col-xs-12">
                                          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                             <a class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">RM Pasien</a>
                                             <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Riwayat Pasien</a>
                                             <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Terima RM</a>
                                             <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Rekening Pasien</a>
                                             <a class="nav-link" id="v-pills-headtotoe-tab" data-bs-toggle="pill" href="#v-pills-headtotoe" role="tab" aria-controls="v-pills-headtotoe" aria-selected="false">Form RM</a>
                                             <a class="nav-link" id="v-pills-belajar-tab" data-bs-toggle="pill" href="#v-pills-belajar" role="tab" aria-controls="v-pills-belajar" aria-selected="false">Surat Medis</a>
                                             <a class="nav-link" id="v-pills-fisik-tab" data-bs-toggle="pill" href="#v-pills-fisik" role="tab" aria-controls="v-pills-fisik" aria-selected="false">Penjadwalan Operasi</a>
                                             <a class="nav-link" id="v-pills-gigi-tab" data-bs-toggle="pill" href="#v-pills-gigi" role="tab" aria-controls="v-pills-gigi" aria-selected="false">CPPT</a>
                                          </div>
                                       </div>
                                       <div class="col-sm-9 col-xs-12">
                                          <div class="tab-content" id="v-pills-tabContent">
                                             <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
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
                                             <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                   <li class="nav-item"><a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Alergi</a></li>
                                                   <li class="nav-item"><a class="nav-link" id="profile-tabs" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Operasi</a></li>
                                                   <li class="nav-item"><a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Penyakit</a></li>
                                                   <li class="nav-item"><a class="nav-link" id="keluarga-tab" data-bs-toggle="tab" href="#keluarga" role="tab" aria-controls="keluarga" aria-selected="false">Penyakit Keluarga</a></li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                      <div class="card-header">
                                                         <div class="media">
                                                            <div class="media-body text-end">
                                                               <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#subjektif"> <i data-feather="plus-square"></i>Buat Baru</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-5">
                                                            <thead class="bg-warning">
                                                               <tr>
                                                                  <th>Jenis</th>
                                                                  <th>Alergi</th>
                                                                  <th>Mulai</th>
                                                                  <th class="text-center">Actions</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td class="text-center col-3">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                     <button class="btn btn-sm btn-outline-danger text-dark">Batal</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </div>
                                                   </div>
                                                   <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                      <div class="card-header">
                                                         <div class="media">
                                                            <div class="media-body text-end">
                                                               <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#subjektif"> <i data-feather="plus-square"></i>Buat Baru</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-5">
                                                            <thead class="bg-warning">
                                                               <tr>
                                                                  <th>Keterangan</th>
                                                                  <th>Tempat</th>
                                                                  <th>Tanggal</th>
                                                                  <th class="text-center">Actions</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td class="text-center col-3">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                     <button class="btn btn-sm btn-outline-danger text-dark">Batal</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </div>
                                                   </div>
                                                   <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                      <div class="card-header">
                                                         <div class="media">
                                                            <div class="media-body text-end">
                                                               <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#subjektif"> <i data-feather="plus-square"></i>Buat Baru</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-5">
                                                            <thead class="bg-warning">
                                                               <tr>
                                                                  <th>Nama</th>
                                                                  <th>Menular</th>
                                                                  <th>Tanggal</th>
                                                                  <th class="text-center">Actions</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td class="text-center col-3">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                     <button class="btn btn-sm btn-outline-danger text-dark">Batal</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </div>
                                                   </div>
                                                   <div class="tab-pane fade" id="keluarga" role="tabpanel" aria-labelledby="contact-tab">
                                                      <div class="card-header">
                                                         <div class="media">
                                                            <div class="media-body text-end">
                                                               <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#subjektif"> <i data-feather="plus-square"></i>Buat Baru</div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-5">
                                                            <thead class="bg-warning">
                                                               <tr>
                                                                  <th>Nama</th>
                                                                  <th>Menular</th>
                                                                  <th>Keterangan</th>
                                                                  <th>Tanggal</th>
                                                                  <th class="text-center">Actions</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td class="text-center col-3">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                     <button class="btn btn-sm btn-outline-danger text-dark">Batal</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                <div class="mb-3 row">
                                                   <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal</label>
                                                   <div class="col-sm-4">
                                                      <input type="date" class="form-control" id="inputPassword">
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <input type="date" class="form-control" id="inputPassword">
                                                   </div>
                                                   <div class="col-sm-2">
                                                      <button class="btn btn-danger">Gabung</button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <div class="table-responsive">
                                                   <table class="table" id="basic-5">
                                                      <thead class="bg-warning">
                                                         <tr>
                                                            <th>Kategori</th>
                                                            <th>Keterangan</th>
                                                            <th>Biaya</th>
                                                            <th class="text-center">Actions</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td class="text-center col-3">
                                                               <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                               <button class="btn btn-sm btn-outline-danger text-dark">Batal</button>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                      <tr>
                                                         <td colspan="2">Total</td>
                                                         <td>Rp.</td>
                                                         <td></td>
                                                      </tr>
                                                   </table>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-headtotoe" role="tabpanel" aria-labelledby="v-pills-headtotoe-tab">
                                                <div class="table-responsive table-sm">
                                                   <table class="display" id="basic-1">
                                                      <thead class="bg-warning text-dark">
                                                         <tr>
                                                            <th>Kode</th>
                                                            <th>Formulir</th>
                                                            <th class="text-center">Actions</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-belajar" role="tabpanel" aria-labelledby="v-pills-belajar-tab">
                                                <div class="table-responsive table-sm">
                                                   <table class="table" id="basic-5">
                                                      <thead class="bg-warning text-dark">
                                                         <tr>
                                                            <th>Surat</th>
                                                            <th class="text-center">Actions</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>

                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-fisik" role="tabpanel" aria-labelledby="v-pills-fisik-tab">
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Tanggal Operasi</label>
                                                   <div class="col-sm-4">
                                                      <input type="date" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <input type="time" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Dokter</label>
                                                   <div class="col-sm-8">
                                                      <input type="text" readonly class="form-control-plaintext" value="-">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Kamar Operasi</label>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="Ruangan">
                                                   </div>
                                                   <div class="col-sm-4">
                                                      <input type="text" readonly class="form-control-plaintext" value="Bed">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label">Catatan</label>
                                                   <div class="col-sm-8">
                                                      <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                                   </div>
                                                </div>
                                                <div class="mt-3 row">
                                                   <label for="staticEmail" class="col-sm-4 col-form-label"></label>
                                                   <div class="col-sm-8">
                                                      <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#fisik">Isi Data</button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-gigi" role="tabpanel" aria-labelledby="v-pills-gigi-tab">
                                                <div class="card-header">
                                                   <div class="media">
                                                      <div class="media-body text-end">
                                                         <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#cppt"> <i data-feather="plus-square"></i>Buat Baru</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="table-responsive">
                                                   <table class="table" id="basic-5">
                                                      <thead class="bg-warning">
                                                         <tr>
                                                            <th>Tanggal & Jam</th>
                                                            <th>Profesi / Bagian</th>
                                                            <th>Hasil Pengkajian/Pemeriksaan, Analisa Penatalaksanaan Pasien, Instruksi Tenaga Kesehatan (SOAP SBAR)</th>
                                                            <th>Instruksi DPJP</th>
                                                            <th>Verifikasi</th>
                                                            <th class="text-center">Actions</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td>-</td>
                                                            <td class="text-center col-3">
                                                               <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                               <button class="btn btn-sm btn-outline-danger text-dark">Batal</button>
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

                                 <div class="tab-pane fade" id="pills-evaluasi" role="tabpanel" aria-labelledby="pills-evaluasi-tab">
                                    <div class="row">
                                       <div class="col-sm-3 col-xs-12">
                                          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                             <a class="nav-link active" id="v-pills-soap-tab" data-bs-toggle="pill" href="#v-pills-soap" role="tab" aria-controls="v-pills-soap" aria-selected="true">SOAP</a><a class="nav-link" id="v-pills-pemeriksaan-tab" data-bs-toggle="pill" href="#v-pills-pemeriksaan" role="tab" aria-controls="v-pills-pemeriksaan" aria-selected="false">Pemeriksaan</a>
                                             <a class="nav-link" id="v-pills-diagnosa-tab" data-bs-toggle="pill" href="#v-pills-diagnosa" role="tab" aria-controls="v-pills-diagnosa" aria-selected="false">Diagnosa (ICD 10)</a>
                                             <a class="nav-link" id="v-pills-prosedur-tab" data-bs-toggle="pill" href="#v-pills-prosedur" role="tab" aria-controls="v-pills-prosedur" aria-selected="false">Prosedur (ICD 9CM)</a>
                                             <a class="nav-link" id="v-pills-file-tab" data-bs-toggle="pill" href="#v-pills-file" role="tab" aria-controls="v-pills-file" aria-selected="false">File</a>
                                             <a class="nav-link" id="v-pills-anatomi-tab" data-bs-toggle="pill" href="#v-pills-anatomi" role="tab" aria-controls="v-pills-anatomi" aria-selected="false">Gambar Anatomi</a>
                                             <a class="nav-link" id="v-pills-gizitb-tab" data-bs-toggle="pill" href="#v-pills-gizitb" role="tab" aria-controls="v-pills-gizitb" aria-selected="false">Gizi & Tumbuh Kembang</a>
                                             <a class="nav-link" id="v-pills-anc-tab" data-bs-toggle="pill" href="#v-pills-anc" role="tab" aria-controls="v-pills-anc" aria-selected="false">ANC</a>
                                          </div>
                                       </div>
                                       <div class="col-sm-9 col-xs-12">
                                          <div class="tab-content" id="v-pills-tabContent">
                                             <div class="tab-pane fade show active" id="v-pills-soap" role="tabpanel" aria-labelledby="v-pills-soap-tab">
                                                <div class="media-body text-end mb-3">
                                                   <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#soap"> <i data-feather="plus-square"></i>SOAP Template</div>
                                                   <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add"> <i data-feather="plus-square"></i>Tambah Baru</div>
                                                </div>
                                                <div class="card">
                                                   <div class="card-body file-manager">
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-1">
                                                            <thead class="bg-warning text-dark">
                                                               <tr>
                                                                  <th>Tanggal</th>
                                                                  <th>Dokter/PPA</th>
                                                                  <th>Subject (Keluhan)</th>
                                                                  <th>Object (Pemeriksaan)</th>
                                                                  <th>Assesment (Kesimpulan)</th>
                                                                  <th>Plan (Penatalaksanaan)</th>
                                                                  <th class="text-center">Actions</th>
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
                                                                  <td class="text-center col-2">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </div>
                                                   </div>
                                                </div>

                                             </div>
                                             <div class="tab-pane fade" id="v-pills-pemeriksaan" role="tabpanel" aria-labelledby="v-pills-pemeriksaan-tab">
                                                <div class="media-body text-end mb-3">
                                                   <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add"> <i data-feather="plus-square"></i>Tambah Baru</div>
                                                </div>
                                                <div class="card">
                                                   <div class="card-body file-manager">
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-1">
                                                            <thead class="bg-warning text-dark">
                                                               <tr>
                                                                  <th>Tanggal</th>
                                                                  <th>Pemeriksaan</th>
                                                                  <th class="text-center">Actions</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td class="text-center col-2">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-diagnosa" role="tabpanel" aria-labelledby="v-pills-diagnosa-tab">
                                                <div class="media-body text-end mb-3">
                                                   <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add"> <i data-feather="plus-square"></i>Tambah Baru</div>
                                                </div>
                                                <div class="card">
                                                   <div class="card-body file-manager">
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-1">
                                                            <thead class="bg-warning text-dark">
                                                               <tr>
                                                                  <th>Code</th>
                                                                  <th>Keterangan</th>
                                                                  <th class="text-center">Actions</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td class="text-center col-2">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-prosedur" role="tabpanel" aria-labelledby="v-pills-prosedur-tab">
                                                <div class="media-body text-end mb-3">
                                                   <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add"> <i data-feather="plus-square"></i>Tambah Baru</div>
                                                </div>
                                                <div class="card">
                                                   <div class="card-body file-manager">
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-1">
                                                            <thead class="bg-warning text-dark">
                                                               <tr>
                                                                  <th>Code</th>
                                                                  <th>Keterangan</th>
                                                                  <th class="text-center">Actions</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td class="text-center col-2">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-file" role="tabpanel" aria-labelledby="v-pills-file-tab">
                                                <div class="media-body text-end mb-3">
                                                   <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add"> <i data-feather="plus-square"></i>Tambah Baru</div>
                                                </div>
                                                <div class="card">
                                                   <div class="card-body file-manager">
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-1">
                                                            <thead class="bg-warning text-dark">
                                                               <tr>
                                                                  <th>Nama</th>
                                                                  <th>Link</th>
                                                                  <th>Keterangan</th>
                                                                  <th class="text-center">Actions</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td class="text-center col-2">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-anatomi" role="tabpanel" aria-labelledby="v-pills-anatomi-tab">
                                                <div class="media-body text-end mb-3">
                                                   <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add"> <i data-feather="plus-square"></i>Tambah Baru</div>
                                                </div>
                                                <div class="card">
                                                   <div class="card-body file-manager">
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-1">
                                                            <thead class="bg-warning text-dark">
                                                               <tr>
                                                                  <th>Gambar Anatomi</th>
                                                                  <th>Nama</th>
                                                                  <th>Keterangan</th>
                                                                  <th>Dibuat Oleh</th>
                                                                  <th>Tanggal Pembuatan</th>
                                                                  <th class="text-center">Actions</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td class="text-center col-2">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-gizitb" role="tabpanel" aria-labelledby="v-pills-giztb-tab">
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">Berat Badan (Kg)</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">Tinggi Badan (cm)</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">Panjang Badan (cm)</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">BB Per Usia</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">TB Per Usia</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">PB Per Usia</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">BB Naik Adekuat</label>
                                                         <div class="col-sm-7">
                                                            <select name="" class="form-select" id="">
                                                               <option value="">Ya</option>
                                                               <option value="">Tidak</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">SDIDTK</label>
                                                         <div class="col-sm-7">
                                                            <select name="" class="form-select" id="">
                                                               <option value="">Ya</option>
                                                               <option value="">Tidak</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">Asli Eksklusif</label>
                                                         <div class="col-sm-7">
                                                            <select name="" class="form-select" id="">
                                                               <option value="">Ya</option>
                                                               <option value="">Tidak</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">MPASI</label>
                                                         <div class="col-sm-7">
                                                            <select name="" class="form-select" id="">
                                                               <option value="">Ya</option>
                                                               <option value="">Tidak</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                   <div class="col">
                                                      <button class="btn btn-primary">Simpan</button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-anc" role="tabpanel" aria-labelledby="v-pills-anc-tab">
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">Sistolik (mmHg)</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">Diastolik (mmHg)</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">Tinggi Badan (cm)</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">Berat Badan (Kg)</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">Lingkar L. Atas</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">Tinggi Fundus (cm)</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">BB Sbl.Hamil</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">IMT Sbl.Hamil</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">D.Jantung (x/mnt)</label>
                                                         <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">Imunisasi TT</label>
                                                         <div class="col-sm-7">
                                                            <select name="" class="form-select" id="">
                                                               <option value="">Ya</option>
                                                               <option value="">Tidak</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="mb-3 row">
                                                         <label for="inputPassword" class="col-sm-5 col-form-label">Status</label>
                                                         <div class="col-sm-7">
                                                            <select name="" class="form-select" id="">

                                                               <option value="">Pilih</option>
                                                            </select>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col">

                                                   </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                   <div class="col">
                                                      <button class="btn btn-primary">Simpan</button>
                                                   </div>
                                                </div>
                                             </div>

                                          </div>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="tab-pane fade" id="pills-billing" role="tabpanel" aria-labelledby="pills-evaluasi-tab">
                                    <div class="row">
                                       <div class="col-sm-3 col-xs-12">
                                          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                             <a class="nav-link active" id="v-pills-tindakan-tab" data-bs-toggle="pill" href="#v-pills-tindakan" role="tab" aria-controls="v-pills-tindakan" aria-selected="true">Tindakan</a>
                                             <a class="nav-link" id="v-pills-bhp-tab" data-bs-toggle="pill" href="#v-pills-bhp" role="tab" aria-controls="v-pills-bhp" aria-selected="false">BHP</a>
                                             <a class="nav-link" id="v-pills-resep-tab" data-bs-toggle="pill" href="#v-pills-resep" role="tab" aria-controls="v-pills-resep" aria-selected="false">Resep</a>
                                             <a class="nav-link" id="v-pills-penunjang-tab" data-bs-toggle="pill" href="#v-pills-penunjang" role="tab" aria-controls="v-pills-penunjang" aria-selected="false">Penunjang</a>
                                             <a class="nav-link" id="v-pills-imunisasi-tab" data-bs-toggle="pill" href="#v-pills-imunisasi" role="tab" aria-controls="v-pills-imunisasi" aria-selected="false">Imunisasi</a>
                                             <a class="nav-link" id="v-pills-operasi-tab" data-bs-toggle="pill" href="#v-pills-operasi" role="tab" aria-controls="v-pills-operasi" aria-selected="false">Tindakan Operasi</a>
                                          </div>
                                       </div>
                                       <div class="col-sm-9 col-xs-12">
                                          <div class="tab-content" id="v-pills-tabContent">
                                             <div class="tab-pane fade show active" id="v-pills-tindakan" role="tabpanel" aria-labelledby="v-pills-tindakan-tab">
                                                <div class="media-body text-end mb-3">
                                                   <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#"> <i data-feather="plus-square"></i>Tambah Baru</div>
                                                </div>
                                                <div class="card">
                                                   <div class="card-body file-manager">
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-1">
                                                            <thead class="bg-warning text-dark">
                                                               <tr>
                                                                  <th>Tindakan</th>
                                                                  <th>Pelaksana</th>
                                                                  <th>Jumlah</th>
                                                                  <th>Keterangan</th>
                                                                  <th>Tanggal</th>
                                                                  <th>Waktu</th>
                                                                  <th>Biaya</th>
                                                                  <th class="text-center">Actions</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                  <td>Pencabutan Gigi</td>
                                                                  <td>drg. Medhy</td>
                                                                  <td>1</td>
                                                                  <td>-</td>
                                                                  <td>21-08-2023</td>
                                                                  <td>18:21:20</td>
                                                                  <td><?= number_format(150000) ?></td>
                                                                  <td class="text-center col-2">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                            <tr>
                                                               <td colspan="6">Sub Total</td>
                                                               <td>150.000</td>
                                                               <td></td>
                                                            </tr>
                                                         </table>

                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-bhp" role="tabpanel" aria-labelledby="v-pills-bhp-tab">
                                                <div class="media-body text-end mb-3">
                                                   <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#"> <i data-feather="plus-square"></i>Tambah Baru</div>
                                                </div>
                                                <div class="card">
                                                   <div class="card-body file-manager">
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-1">
                                                            <thead class="bg-warning text-dark">
                                                               <tr>
                                                                  <th>Barang</th>
                                                                  <th>Satuan</th>
                                                                  <th>Stok</th>
                                                                  <th>Jumlah</th>
                                                                  <th>Harga</th>
                                                                  <th>Sub Total</th>
                                                                  <th>Keterangan</th>
                                                                  <th>Pelaksana</th>
                                                                  <th>Depo</th>
                                                                  <th>Tanggal</th>
                                                                  <th>Waktu</th>
                                                                  <th>Ditagih</th>
                                                                  <th class="text-center">Actions</th>
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
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td class="text-center col-2">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                            <tr>
                                                               <td colspan="5">Total</td>
                                                               <td>Rp.</td>
                                                               <td></td>
                                                            </tr>
                                                         </table>

                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-resep" role="tabpanel" aria-labelledby="v-pills-resep-tab">
                                                <div class="media-body text-end mb-3">
                                                   <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#"> <i data-feather="plus-square"></i>Tambah Baru</div>
                                                </div>
                                                <div class="card">
                                                   <div class="card-body file-manager">
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-1">
                                                            <thead class="bg-warning text-dark">
                                                               <tr>
                                                                  <th>No.Order Resep</th>
                                                                  <th>Kategori</th>
                                                                  <th>Tanggal</th>
                                                                  <th>Status</th>
                                                                  <th class="text-center">Actions</th>
                                                               </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td class="text-center col-2">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>

                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-penunjang" role="tabpanel" aria-labelledby="v-pills-penunjang-tab">
                                                <div class="media-body text-end mb-3">
                                                   <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#"> <i data-feather="plus-square"></i>Tambah Baru</div>
                                                </div>
                                                <div class="card">
                                                   <div class="card-body file-manager">
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-1">
                                                            <thead class="bg-warning text-dark">
                                                               <tr>
                                                                  <th>Jenis</th>
                                                                  <th>Pemeriksaan</th>
                                                                  <th>Jumlah</th>
                                                                  <th>Tanggal</th>
                                                                  <th>Waktu</th>
                                                                  <th>Keterangan</th>
                                                                  <th class="text-center">Actions</th>
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
                                                                  <td class="text-center col-2">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>

                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-imunisasi" role="tabpanel" aria-labelledby="v-pills-imunisasi-tab">
                                                <div class="media-body text-end mb-3">
                                                   <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#"> <i data-feather="plus-square"></i>Tambah Baru</div>
                                                </div>
                                                <div class="card">
                                                   <div class="card-body file-manager">
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-1">
                                                            <thead class="bg-warning text-dark">
                                                               <tr>
                                                                  <th>Barang</th>
                                                                  <th>Satuan</th>
                                                                  <th>Stok</th>
                                                                  <th>Dosis</th>
                                                                  <th>Dosis Diinginkan</th>
                                                                  <th>Harga</th>
                                                                  <th>Sub Total</th>
                                                                  <th>Metode</th>
                                                                  <th>Pelaksana</th>
                                                                  <th class="text-center">Actions</th>
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
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td class="text-center col-2">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
                                                                  </td>
                                                               </tr>
                                                            </tbody>
                                                         </table>

                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-operasi" role="tabpanel" aria-labelledby="v-pills-operasi-tab">
                                                <div class="media-body text-end mb-3">
                                                   <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#"> <i data-feather="plus-square"></i>Tambah Baru</div>
                                                </div>
                                                <div class="card">
                                                   <div class="card-body file-manager">
                                                      <div class="table-responsive">
                                                         <table class="table" id="basic-1">
                                                            <thead class="bg-warning text-dark">
                                                               <tr>
                                                                  <th>Tanggal</th>
                                                                  <th>Nama Operasi</th>
                                                                  <th>Jenis</th>
                                                                  <th>Golongan</th>
                                                                  <th>Jumlah</th>
                                                                  <th>Tgl.Mulai</th>
                                                                  <th>Jam Mulai</th>
                                                                  <th>Tgl.Selesai</th>
                                                                  <th>Jam Selesai</th>
                                                                  <th class="text-center">Actions</th>
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
                                                                  <td>-</td>
                                                                  <td>-</td>
                                                                  <td class="text-center col-2">
                                                                     <button class="btn btn-sm btn-outline-warning text-dark">Edit</button>
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

                                 <div class="tab-pane fade" id="pills-selesai" role="tabpanel" aria-labelledby="pills-selesai-tab">
                                    <div class="row">
                                       <!-- <div class="media-body text-end mb-3">
                                          <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add"> <i data-feather="plus-square"></i>Tambah Baru</div>
                                       </div> -->
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal & Waktu</label>
                                          <div class="col-sm-5">
                                             <input type="date" class="form-control">
                                          </div>
                                          <div class="col-sm-5">
                                             <input type="time" class="form-control">
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Cara Keluar</label>
                                          <div class="col-sm-10">
                                             <select name="" class="form-select" id="">
                                                <option value="">Pilih</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Kondisi Keluar</label>
                                          <div class="col-sm-10">
                                             <select name="" class="form-select" id="">
                                                <option value="">Pilih</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Catatan</label>
                                          <div class="col-sm-10">
                                             <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                          <div class="col-sm-10">
                                             <button class="btn btn-primary">Simpan</button>
                                          </div>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="tab-pane fade" id="pills-konsul" role="tabpanel" aria-labelledby="pills-selesai-tab">
                                    <div class="row">
                                       <!-- <div class="media-body text-end mb-3">
                                          <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add"> <i data-feather="plus-square"></i>Tambah Baru</div>
                                       </div> -->
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Unit tujuan</label>
                                          <div class="col-sm-10">
                                             <select name="" class="form-select" id="">
                                                <option value="">Pilih</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Dokter</label>
                                          <div class="col-sm-10">
                                             <select name="" class="form-select" id="">
                                                <option value="">Pilih</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Catatan</label>
                                          <div class="col-sm-10">
                                             <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                          </div>
                                       </div>
                                       <div class="mb-3 row">
                                          <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                          <div class="col-sm-10">
                                             <button class="btn btn-primary">Simpan</button>
                                          </div>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="tab-pane fade" id="pills-askep" role="tabpanel" aria-labelledby="pills-askep-tab">
                                    <div class="row">
                                       <div class="col-sm-3 col-xs-12">
                                          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                             <a class="nav-link active" id="v-pills-vitalsign-tab" data-bs-toggle="pill" href="#v-pills-vitalsign" role="tab" aria-controls="v-pills-vitalsign" aria-selected="true">Tanda Vital & Anamnesa</a>
                                             <a class="nav-link" id="v-pills-soapier-tab" data-bs-toggle="pill" href="#v-pills-soapier" role="tab" aria-controls="v-pills-soapier" aria-selected="false">SOAPIER</a>
                                             <a class="nav-link" id="v-pills-keperawatan-tab" data-bs-toggle="pill" href="#v-pills-keperawatan" role="tab" aria-controls="v-pills-keperawatan" aria-selected="false">Diagnosa Keperawatan</a>
                                             <a class="nav-link" id="v-pills-adime-tab" data-bs-toggle="pill" href="#v-pills-adime" role="tab" aria-controls="v-pills-adime" aria-selected="false">ADIME</a>
                                             <a class="nav-link" id="v-pills-sbar-tab" data-bs-toggle="pill" href="#v-pills-sbar" role="tab" aria-controls="v-pills-sbar" aria-selected="false">SBAR</a>
                                             <a class="nav-link" id="v-pills-gbranatomi-tab" data-bs-toggle="pill" href="#v-pills-gbranatomi" role="tab" aria-controls="v-pills-gbranatomi" aria-selected="false">Gambar Anatomi</a>
                                             <a class="nav-link" id="v-pills-diet-tab" data-bs-toggle="pill" href="#v-pills-diet" role="tab" aria-controls="v-pills-diet" aria-selected="false">Diet</a>
                                          </div>
                                       </div>
                                       <div class="col-sm-9 col-xs-12">
                                          <div class="tab-content" id="v-pills-tabContent">
                                             <div class="tab-pane fade show active" id="v-pills-vitalsign" role="tabpanel" aria-labelledby="v-pills-vitalsign-tab">
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="row mb-3">
                                                         <label for="inputPassword" class="col-sm-6 col-form-label">Tinggi Badan (cm)</label>
                                                         <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                         <label for="inputPassword" class="col-sm-6 col-form-label">IMT (Kg/m2)</label>
                                                         <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="row mb-3">
                                                         <label for="inputPassword" class="col-sm-6 col-form-label">Berat Badan (Kg)</label>
                                                         <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                         <label for="inputPassword" class="col-sm-6 col-form-label">BB Ideal (Kg)</label>
                                                         <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="row mb-3">
                                                         <label for="inputPassword" class="col-sm-6 col-form-label">Tekanan Darah (mmHg)</label>
                                                         <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                         <label for="inputPassword" class="col-sm-6 col-form-label">Detak Jantung (bpm)</label>
                                                         <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="row mb-3">
                                                         <label for="inputPassword" class="col-sm-6 col-form-label">Suhu Badan (C)</label>
                                                         <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                         <label for="inputPassword" class="col-sm-6 col-form-label">Nafas (x/menit)</label>
                                                         <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="row mb-3">
                                                         <label for="inputPassword" class="col-sm-6 col-form-label">Lingkar Perut (cm)</label>
                                                         <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                         <label for="inputPassword" class="col-sm-6 col-form-label">Lingkar Dada (cm)</label>
                                                         <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="row mb-3">
                                                         <label for="inputPassword" class="col-sm-6 col-form-label">Lingkar Kepala (cm)</label>
                                                         <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                         <label for="inputPassword" class="col-sm-6 col-form-label">Ket.Tambahan</label>
                                                         <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputPassword">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                   <div class="col">
                                                      <button class="btn btn-primary">Simpan</button>
                                                   </div>
                                                   <div class="col"></div>
                                                </div>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-soapier" role="tabpanel" aria-labelledby="v-pills-soapier-tab">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                             </div>
                                             <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                             </div>

                                             <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                             </div>

                                             <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                                             </div>

                                             <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
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

   <div class="modal fade" id="cppt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah CPPT</h1>
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
                  <label for="exampleFormControlInput1" class="form-label">Profesi/Bagian</label>
                  <div class="row">
                     <div class="col">
                        <select name="" class="form-select" id="">
                           <option value="">Pilih</option>
                        </select>
                     </div>
                     <div class="col">
                        <select name="" class="form-select" id="">
                           <option value="">Pilih Tenaga Kesehatan</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="form-floating">
                     <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                     <label for="floatingTextarea2">[S] Subjective/Situation</label>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="form-floating">
                     <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                     <label for="floatingTextarea2">[O] Objective/Background</label>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="form-floating">
                     <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                     <label for="floatingTextarea2">[A] Assessment</label>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="form-floating">
                     <textarea class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
                     <label for="floatingTextarea2">[P] Plan/Recomendation</label>
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
   <div class="modal fade" id="fisik" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Jadwal Operasi</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Tanggal Operasi</label>
                  <div class="row">
                     <div class="col">
                        <input type="date" class="form-control">
                     </div>
                     <div class="col">
                        <input type="time" class="form-control">
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Dokter</label>
                  <select name="" class="form-select" id="">
                     <option value="">Pilih</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Catatan</label>
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
      <div class="modal-dialog modal-dialog-scrollable modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Gizi</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3">
                  <div class="row">
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Penurunan Nafsu Makan</label>
                        <select name="" class="form-select" id="">
                           <option value="">Tidak</option>
                           <option value="">Ya</option>
                        </select>
                     </div>
                     <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Penurunan BB 6 Bulan</label>
                        <select name="" class="form-select" id="">
                           <option value="">Tidak</option>
                           <option value="">Ya</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Penyakit Terkait Nutrisi</label>
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