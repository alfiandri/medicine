<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   $page = "Home";
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
                        <h3>Medicine</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Medcine</li>
                           <li class="breadcrumb-item active">V 3.1.2 </li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-users text-danger mb-2"></i>
                           <h5 class="card-title">Admisi</h5>
                           <p class="card-text">Module untuk pendaftaran pasien dan pencetakan dokumen asuransi</p>
                           <a href="admisi/" target="_blank" class="btn btn-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-list text-danger mb-2"></i>
                           <h5 class="card-title">Antrian</h5>
                           <p class="card-text">Module untuk pengelolaan antrian loket, poliklinik dan farmasi</p>
                           <a href="antrian/" target="_blank" class="btn btn-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-tv text-danger mb-2"></i>
                           <h5 class="card-title">Console Antrian</h5>
                           <p class="card-text">Module untuk pengambilan nomor antrian di console box (self service)</p>
                           <a href="console-box-antrian/" target="_blank" class="btn btn-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-spin fa-refresh text-danger mb-2"></i>
                           <h5 class="card-title">Integrasi</h5>
                           <p class="card-text">Module untuk layanan integrasi stakeholder BPJS dan Kemenkes</p>
                           <a href="integrasi/" target="_blank" class="btn btn-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-stethoscope text-danger mb-2"></i>
                           <h5 class="card-title">Rawat Jalan</h5>
                           <p class="card-text">Module untuk pelayanan medis Rawat Jalan (Inpatient)</p>
                           <a href="inpatient/" target="_blank" class="btn btn-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-bed text-danger mb-2"></i>
                           <h5 class="card-title">UGD</h5>
                           <p class="card-text">Module untuk pelayanan medis Unit Gawat Darurat (Emergency)</p>
                           <a href="emergency/" target="_blank" class="btn btn-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-hospital-o text-danger mb-2"></i>
                           <h5 class="card-title">Rawat Inap</h5>
                           <p class="card-text">Module untuk pelayanan medis pasien Rawat Inap (Outpatient) </p>
                           <a href="outpatient/" target="_blank" class="btn btn-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-building text-danger mb-2"></i>
                           <h5 class="card-title">Farmasi</h5>
                           <p class="card-text">Module untuk farmasi untuk pelayanan obat pasien</p>
                           <a href="farmasi/" target="_blank" class="btn btn-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-glass text-danger mb-2"></i>
                           <h5 class="card-title">Laboratorium</h5>
                           <p class="card-text">Module untuk pelayanan medis laboratorium dan pemeriksaan patologi </p>
                           <a href="laboratorium/" target="_blank" class="btn btn-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-video-camera text-danger mb-2"></i>
                           <h5 class="card-title">Radiologi</h5>
                           <p class="card-text">Module untuk pengeolaan permintaan dan pemeriksaan radiologi </p>
                           <a href="ris/" target="_blank" class="btn btn-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-heart-o text-danger mb-2"></i>
                           <h5 class="card-title">Blood Bank</h5>
                           <p class="card-text">Module untuk pengelolaan Unit Transfusi Darah (UTD) Sentralisasi</p>
                           <!-- <a href="blood-bank/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-magic text-danger mb-2"></i>
                           <h5 class="card-title">Diagnostik</h5>
                           <p class="card-text">Module untuk pengelolaan permintaan dan pemeriksaan diagnostik</p>
                           <!-- <a href="diagnostik/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-wheelchair text-danger mb-2"></i>
                           <h5 class="card-title">Fisioterapi</h5>
                           <p class="card-text">Module untuk pelayanan medis tindakan perawatan fisioterapi</p>
                           <!-- <a href="fisioterapi/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-tint text-danger mb-2"></i>
                           <h5 class="card-title">Hemodialisa</h5>
                           <p class="card-text">Module untuk pelayanan medis tindakan perawatan hemodialisa</p>
                           <!-- <a href="hemodialisa/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-medkit text-danger mb-2"></i>
                           <h5 class="card-title">MCU</h5>
                           <p class="card-text">Module untuk pelayanan medis Medical Checkup (MCU) </p>
                           <!-- <a href="mcu/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-ambulance text-danger mb-2"></i>
                           <h5 class="card-title">OK & VK</h5>
                           <p class="card-text">Module untuk pelayanan medis Kamar Operasi dan Kamar Bersalin </p>
                           <!-- <a href="ok/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>

                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-child text-danger mb-2"></i>
                           <h5 class="card-title">Patologi</h5>
                           <p class="card-text">Module untuk pelayanan penunjang medis patologi klinis dan anatomi </p>
                           <!-- <a href="patologi/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-car text-danger mb-2"></i>
                           <h5 class="card-title">Ambulance</h5>
                           <p class="card-text">Module untuk permintaan penggunaan ambulance dan tracking operasional</p>
                           <!-- <a href="ambulance/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-dot-circle-o text-danger mb-2"></i>
                           <h5 class="card-title">Kamar Jenazah</h5>
                           <p class="card-text">Module untuk pengelolaan unit kamar jenazah Rumah Sakit </p>
                           <!-- <a href="jenazah/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-server text-danger mb-2"></i>
                           <h5 class="card-title">Rekam Medis</h5>
                           <p class="card-text">Module untuk pengeolaan data rekam medis pasien dan laporan RL </p>
                           <!-- <a href="rekammedis/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>

                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-folder text-danger mb-2"></i>
                           <h5 class="card-title">Aset</h5>
                           <p class="card-text">Module untuk pengelolaan aset rumah sakit secara otomatis</p>
                           <!-- <a href="aset/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-bar-chart-o text-danger mb-2"></i>
                           <h5 class="card-title">Audit</h5>
                           <p class="card-text">Module untuk audit layanan dan keuangan rumah sakit secara komprehensif</p>
                           <!-- <a href="audit/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>

                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-laptop text-danger mb-2"></i>
                           <h5 class="card-title">KIOSK</h5>
                           <p class="card-text">Module untuk pelayanan self service registrasi pasien baru</p>
                           <!-- <a href="console-box-kiosk/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-folder-open-o text-danger mb-2"></i>
                           <h5 class="card-title">Arsip</h5>
                           <p class="card-text">Module untuk pengelolaan surat dan dokumen penting lainnya secara digital</p>
                           <!-- <a href="arsip/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-users text-danger mb-2"></i>
                           <h5 class="card-title">HRD</h5>
                           <p class="card-text">Module untuk pengelolaan sumber daya manusia (SDM)</p>
                           <!-- <a href="hrd/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>

                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-tasks text-danger mb-2"></i>
                           <h5 class="card-title">Logisitik</h5>
                           <p class="card-text">Module untuk pengelolaan barang dan distribusi serta persediaan</p>
                           <!-- <a href="logistic/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-money text-danger mb-2"></i>
                           <h5 class="card-title">Kasir</h5>
                           <p class="card-text">Module untuk pelayanan keuangan langsung medis (Kasir Layanan)</p>
                           <!-- <a href="kasir/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-exchange text-danger mb-2"></i>
                           <h5 class="card-title">Keuangan</h5>
                           <p class="card-text">Module untuk pengelolaan keuangan rumah sakit secara realtime</p>
                           <!-- <a href="keuangan/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>

                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-cog text-danger mb-2"></i>
                           <h5 class="card-title">Maintenance</h5>
                           <p class="card-text">Module untuk pengelolaan perawatan dan perbaikan peralatan </p>
                           <!-- <a href="maintenance/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>

                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-shopping-cart text-danger mb-2"></i>
                           <h5 class="card-title">Purchase</h5>
                           <p class="card-text">Module untuk pengeolaan permintaan dan pembelian barang </p>
                           <!-- <a href="purchase/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>

                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-suitcase text-danger mb-2"></i>
                           <h5 class="card-title">Laundary</h5>
                           <p class="card-text">Module untuk pengelolaan laundary (kebersihan peralatan medis) </p>
                           <!-- <a href="laundry/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
                        </div>
                     </div>
                  </div>

                  <div class="col-3">
                     <div class="card">
                        <div class="card-body">
                           <i class="fa fa-phone text-danger mb-2"></i>
                           <h5 class="card-title">Simulasi M-JKN</h5>
                           <p class="card-text">Module untuk pengujian penggunaan M-JKN BPJS Kesehatan </p>
                           <!-- <a href="simulasi-jkn/" target="_blank" class="btn btn-primary col-12">Lihat Module</a> -->
                           <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#fitur" class="btn btn-outline-primary col-12">Lihat Module</a>
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

   <!-- Modal -->
   <div class="modal fade" id="fitur" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header bg-danger">
               <h1 class="modal-title fs-5" id="staticBackdropLabel">Informasi Fitur</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="modal-body">
               <p>Fitur ini hanya tersedia di access roles <strong>super admin</strong>, hubungi super admin SIMRS di Faskes anda atau dapat menghubungi developer melalui call center whatsapp +62 821 6652 4717 atau mail : jakaprayudha3@gmail.com ini untuk dapat membuat dan manage fitur ini.</p>
            </div>
         </div>
      </div>
   </div>
   <?php
   include_once 'library.php';
   ?>
</body>

</html>