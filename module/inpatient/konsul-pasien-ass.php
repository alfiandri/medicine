<?php
$page = "Konsultasi Mata";
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
                        <h3>Konsultasi Mata</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Konsultasi Mata</li>
                           <li class="breadcrumb-item active">Pemeriksaan Pasien </li>
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
                                 <li class="nav-item">
                                    <a class="nav-link active" id="pills-awalpasien-tab" data-bs-toggle="pill" href="#pills-awalpasien" role="tab" aria-controls="pills-awalpasien" aria-selected="true"><i class="icofont icofont-ui-home"></i>Ass.Awal Pasien</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="pills-catatanrj-tab" data-bs-toggle="pill" href="#pills-catatanrj" role="tab" aria-controls="pills-catatanrj" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Catatan RJ</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="pills-resumerj-tab" data-bs-toggle="pill" href="#pills-resumerj" role="tab" aria-controls="pills-resumerj" aria-selected="false"><i class="icofont icofont-contacts"></i>Resume RJ
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="pills-formulir-tab" data-bs-toggle="pill" href="#pills-formulir" role="tab" aria-controls="pills-formulir" aria-selected="false"><i class="icofont icofont-contacts"></i>Formulir
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="pills-permintaan-tab" data-bs-toggle="pill" href="#pills-permintaan" role="tab" aria-controls="pills-permintaan" aria-selected="false"><i class="icofont icofont-contacts"></i>Permintaan Penunjang
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="pills-sitemarking-tab" data-bs-toggle="pill" href="#pills-sitemarking" role="tab" aria-controls="pills-sitemarking" aria-selected="false"><i class="icofont icofont-contacts"></i>Sitemarking
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="pills-status-tab" data-bs-toggle="pill" href="#pills-status" role="tab" aria-controls="pills-status" aria-selected="false"><i class="icofont icofont-contacts"></i>Status
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div class="tab-pane fade show active" id="pills-awalpasien" role="tabpanel" aria-labelledby="pills-awalpasien-tab">
                                    <h6 class="bg-success">Identitas Pasien</h6>
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
                                                <input type="text" class="form-control" value="dr Indah">
                                             </div>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="Poli Mata">
                                             </div>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" placeholder="21-08-2023">
                                             </div>
                                             <div class="col-sm-1">
                                                <input type="text" class="form-control" placeholder="09:12">
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
                                       <div class="col-12">
                                          <div class="mb-3 row">
                                             <label for="inputPassword" class="col-sm-2 col-form-label">Rujukan</label>
                                             <div class="col-sm-3">
                                                <input type="text" class="form-control" value="Datang Sendiri">
                                             </div>
                                             <div class="col-sm-7">
                                                <input type="text" class="form-control" placeholder="Catatan">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <h6 class="bg-success">Ass.Keperawatan</h6>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Keadaan Umum</label>
                                       <div class="col-sm-8">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Kesadaran</label>
                                       <div class="col-sm-8">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Kondisi Fisik</label>
                                       <div class="col-sm-2">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="BB TB : ">
                                       </div>
                                       <div class="col-sm-2">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="TD : ">
                                       </div>
                                       <div class="col-sm-2">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="NADI : ">
                                       </div>
                                       <div class="col-sm-2">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="NAPAS : ">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Status Gizi</label>
                                       <div class="col-sm-8">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Pengkajian Nyeri</label>
                                       <div class="col-sm-4">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Nyeri : ">
                                       </div>
                                       <div class="col-sm-4">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Lokasi :">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Pengkajian Nyeri</label>
                                       <div class="col-sm-4">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Pencetus : ">
                                       </div>
                                       <div class="col-sm-4">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Durasi :">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Pengkajian Nyeri</label>
                                       <div class="col-sm-4">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Skala : ">
                                       </div>
                                       <div class="col-sm-4">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Skor Nyeri :">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Risiko Jatuh/Cedera</label>
                                       <div class="col-sm-8">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Pengetahuan Penyakit</label>
                                       <div class="col-sm-8">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Penyimpangan Prilaku</label>
                                       <div class="col-sm-8">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Hambatan Komunikasi</label>
                                       <div class="col-sm-8">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Riwayat Penyakit</label>
                                       <div class="col-sm-8">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Riwayat Obat</label>
                                       <div class="col-sm-8">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Riwayat Operasi</label>
                                       <div class="col-sm-8">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Diagnosa Keperawatan</label>
                                       <div class="col-sm-8">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="staticEmail" class="col-sm-4 col-form-label">Rencana Keperawatan</label>
                                       <div class="col-sm-8">
                                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=":">
                                       </div>
                                    </div>
                                    <h6 class="bg-success">Pemeriksaan Medis Mata</h6>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Anamnesa / Keluhan Utama <strong>(S)</strong> </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Pemeriksaan <strong>(O)</strong> </label>
                                       <div class="col-sm-5">
                                          <div class="card">
                                             <div class="card-body">
                                                <p><strong>Kanan</strong></p>
                                                <p>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Visus</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Kaca Mata Lama</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Refraksi</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">T. Intra Okuler</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Schiotz</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">NCT</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">OD</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">OS</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-5">
                                          <div class="card">
                                             <div class="card-body">
                                                <p><strong>Kiri</strong></p>
                                                <p>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Visus</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Kaca Mata Lama</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Refraksi</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">T. Intra Okuler</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Schiotz</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">NCT</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">OD Funduscopy</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">OS Funduscopy</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Pemeriksaan <strong>(O)</strong> </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Riwayat Alergi </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Riwayat Penyakit Dahulu </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Riwayat Penyakit Keluarga </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Riwayat Pengobatan </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Diagnosa Utama</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control" placeholder="Code ICD 10">
                                       </div>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Diagnosa Sekunder</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control" placeholder="Code ICD 10">
                                       </div>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Penyulit</label>
                                       <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Perencanaan Tindakan <strong>(P)</strong> </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Terapi / Rencana Pelayanan<strong>(P)</strong> </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Penunjang</label>
                                       <div class="col-sm-10">
                                          <select name="" class="form-select" id="">
                                             <option value="">Pilih</option>
                                             <option value="">USG</option>
                                             <option value="">Lab</option>
                                          </select>
                                       </div>
                                    </div>
                                    <h6 class="bg-success">Hasil Diagnostik & Lab</h6>
                                    <div class="mb-3 row">
                                       <div class="col-sm-6">
                                          <div class="card">
                                             <img src="../assets/notfoundimage.jpeg" class="card-img-top" alt="...">
                                             <div class="card-body">
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-6">
                                          <div class="card">
                                             <img src="../assets/notfoundimage.jpeg" class="card-img-top" alt="...">
                                             <div class="card-body">
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                 </div>
                                 <div class="tab-pane fade" id="pills-catatanrj" role="tabpanel" aria-labelledby="pills-catatanrj-tab">
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Anamnesa / Keluhan Utama <strong>(S)</strong> </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                       <div class="col-sm-5">
                                          <div class="card">
                                             <div class="card-body">
                                                <p><strong>Kanan</strong></p>
                                                <p>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">UCVA OD</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">UCVA OS</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">BCVA OD</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">BCVA OS</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Kacamata OD</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">TIO</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Hirschberg OD</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Hirschberg OS</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-12">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">AutoREF</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-5">
                                          <div class="card">
                                             <div class="card-body">
                                                <p><strong>Kiri</strong></p>
                                                <p>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">UCVA OD</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">UCVA OS</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">BCVA OD</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">BCVA OS</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Kacamata OD</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">TIO</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Hirschberg OD</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Hirschberg OS</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-12">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">AutoREF</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Pemeriksaan <strong>(O)</strong></label>
                                       <div class="col-sm-5">
                                          <div class="card">
                                             <div class="card-body">
                                                <p><strong>OD</strong></p>
                                                <p>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Palbera</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Conjuctiva</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Cornea</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">COA</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Iris</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Pupil</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Lensa</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Hirschberg OS</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Vitreous</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Fundus</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-sm-5">
                                          <div class="card">
                                             <div class="card-body">
                                                <p><strong>OS</strong></p>
                                                <p>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Palbera</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Conjuctiva</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Cornea</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">COA</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Iris</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Pupil</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Lensa</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Hirschberg OS</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Vitreous</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                   <div class="col">
                                                      <div class="">
                                                         <label for="exampleInputEmail1" class="form-label">Fundus</label>
                                                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                      </div>
                                                   </div>
                                                </div>
                                                </p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Diagnosa Utama</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control" placeholder="Code ICD 10">
                                       </div>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Diagnosa Sekunder</label>
                                       <div class="col-sm-2">
                                          <input type="text" class="form-control" placeholder="Code ICD 10">
                                       </div>
                                       <div class="col-sm-8">
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Penyulit</label>
                                       <div class="col-sm-10">
                                          <input type="text" class="form-control">
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Perencanaan Tindakan <strong>(P)</strong> </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Terapi / Rencana Pelayanan<strong>(P)</strong> </label>
                                       <div class="col-sm-10">
                                          <textarea name="" class="form-control" id="" cols="30" rows="4"></textarea>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label">Penunjang</label>
                                       <div class="col-sm-10">
                                          <select name="" class="form-select" id="">
                                             <option value="">Pilih</option>
                                             <option value="">USG</option>
                                             <option value="">Lab</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="mb-3 row">
                                       <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                       <div class="col-sm-10">
                                          <button class="btn btn-sm btn-primary">Simpan</button>
                                          <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#riwayat">Lihat Riwayat</button>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-resumerj" role="tabpanel" aria-labelledby="pills-resumerj-tab">
                                    <div class="row">
                                       <div class="col">
                                          <table class="table">
                                             <thead class="bg-primary">
                                                <tr>
                                                   <th>Tanggal</th>
                                                   <th>Riwayat Alergi</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>-</td>
                                                   <td>-</td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                       <div class="col">
                                          <table class="table">
                                             <thead class="bg-primary">
                                                <tr>
                                                   <th>Tanggal</th>
                                                   <th>Riwayat Inap-Operasi</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>-</td>
                                                   <td>-</td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col">
                                          <table class="table">
                                             <thead class="bg-primary">
                                                <tr>
                                                   <th>Tgl.Kunjungan</th>
                                                   <th>Nama Dokter</th>
                                                   <th>Diagnosis</th>
                                                   <th>Terapi</th>
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
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane fade" id="pills-formulir" role="tabpanel" aria-labelledby="pills-formulir-tab">
                                    <table class="table">
                                       <thead class="bg-primary">
                                          <tr>
                                             <th scope="col">Nama Dokumen</th>
                                             <th class="text-center col-2">Actions</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>Persetujuan Rawat Inap</td>
                                             <td class="text-center">
                                                <button class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#persetujuanrawatinap">Isi Data</button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Formulir Pernyataan Telah Diberikan Informasi</td>
                                             <td class="text-center">
                                                <button class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#informasi">Isi Data</button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Bukti Edukasi Integrasi</td>
                                             <td class="text-center">
                                                <button class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#edukasi">Isi Data</button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Surat Permintaan Konsultaasi - Perawatan Bersama - Alih Rawat</td>
                                             <td class="text-center">
                                                <button class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#konsul">Isi Data</button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Formulir Permintaan Privasi</td>
                                             <td class="text-center">
                                                <button class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#privasi">Isi Data</button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Penerima Informasi Kondisi Pasien</td>
                                             <td class="text-center">
                                                <button class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#kondisi">Isi Data</button>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td>Form Penggantian DPJP</td>
                                             <td class="text-center">
                                                <button class=" btn btn-primary" data-bs-toggle="modal" data-bs-target="#dpjp">Isi Data</button>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>

                                 <div class="tab-pane fade" id="pills-permintaan" role="tabpanel" aria-labelledby="pills-permintaan-tab">
                                    <div class="card">
                                       <div class="card-header">
                                          <div class="media">
                                             <div class="media-body text-end">
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
                                                      <th>Jenis Pemeriksaan</th>
                                                      <th>Pengambilan Sample</th>
                                                      <th>Penerimaan Hasil</th>
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
                                                         <button class="btn btn-sm btn-outline-primary text-dark">Cetak</button>
                                                      </td>
                                                   </tr>
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>

                                 </div>

                                 <div class="tab-pane fade" id="pills-sitemarking" role="tabpanel" aria-labelledby="pills-sitemarking-tab">
                                    <div class="row">
                                       <div class="col">
                                          <img src="../assets/rm/sitemarking01.png" width="1100" alt="">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="tab-pane fade" id="pills-status" role="tabpanel" aria-labelledby="pills-status-tab">


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

   <!-- Modal -->
   <div class="modal fade" id="riwayat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">Riwayat Catatan Rawat Jalan</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <table class="table">
                  <thead class="bg-primary">
                     <tr>
                        <th>Tanggal/Waktu</th>
                        <th>Anamnesa (S) dan Pemeriksaan Fisik (O)</th>
                        <th>Diagnosa (A) ICD-10</th>
                        <th>Terapi (P) dan Edukasi (E)</th>
                        <th>Nama Paraf Dokter</th>
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
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Cetak</button>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="persetujuanrawatinap" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-xl">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">Anjuran & Persetujuan Rawat Inap</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Nama Dokter</label>
                  <div class="col-sm-10">
                     <select name="" class="form-select" id=""></select>
                  </div>
               </div>
               <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Poli Rawat</label>
                  <div class="col-sm-10">
                     <select name="" class="form-select" id=""></select>
                  </div>
               </div>
               <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Diagnosa</label>
                  <div class="col-sm-10">
                     <select name="" class="form-select" id=""></select>
                  </div>
               </div>
               <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Rencana Tindakan Operasi </label>
                  <div class="col-sm-10">
                     <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                  </div>
               </div>
               <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Indikasi Rawat Inap </label>
                  <div class="col-sm-10">
                     <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Cetak</button>
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
   <!-- Plugin used-->
</body>

</html>