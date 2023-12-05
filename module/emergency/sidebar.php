<?php
$path = 'emergency';
?>
<div class="sidebar-wrapper">
   <div>
      <div class="logo-wrapper"><a href="index"><img class="img-fluid for-light" src="../assets/Logo - Primary.png" width="85" alt=""><img class="img-fluid for-dark" src="../assets/Logo - Secondary.png" width="85" alt=""></a>
         <div class="back-btn"><i class="fa fa-angle-left"></i></div>
         <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="index"><img class="img-fluid" src="../assets/Logo - Secondary.png" width="85" alt=""></a></div>
      <nav class="sidebar-main">
         <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
         <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
               <li class="back-btn"><a href="index"><img class="img-fluid" src="../assets/Icon.png" alt=""></a>
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
               </li>
               <li class="sidebar-main-title">
                  <div>
                     <h6>EIS</h6>
                     <p>Dashboards, Analytics and Reports</p>
                  </div>
               </li>
               <li class="sidebar-list">
                  <label class="badge badge-success">Update</label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="home"></i><span>Dashboards </span></a>
                  <ul class="sidebar-submenu">
                     <li><a class="" href="javascrtipt:;">Registrasi Pasien</a></li>
                     <li><a class="" href="javascrtipt:;">Billing</a></li>
                     <li><a class="" href="javascrtipt:;">Jadwal Dokter</a></li>
                  </ul>
               </li>
               <li class="sidebar-list"> <label class="badge badge-success">Update</label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="layout"></i><span class="">Laporan</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="javascrtipt:;">Informasi Dokter Jaga</a></li>
                     <li><a href="javascrtipt:;">Buku Register UGD</a></li>
                     <li><a href="javascrtipt:;">Detail Sensus Harian</a></li>
                  </ul>
               </li>
               <li class="sidebar-list"> <label class="badge badge-success">Update</label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="airplay"></i><span>Monitoring</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="javascript:;">IGD</a></li>
                     <li><a href="javascript:;">Ketersediaan Bed</a></li>
                  </ul>
               </li>
               <li class="sidebar-main-title">
                  <div>
                     <h6>IGD</h6>
                     <p>Emergency Unit</p>
                  </div>
               </li>
               <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="file-text"></i><span>Registrasi</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="emergency/admisi-ugd">Pendaftaran UGD</a></li>
                  </ul>
               </li>
               <li class="sidebar-list">
                  <label class="badge badge-danger">New</label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>RME</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="<?= $path ?>/perawatan-tindakan-general">Perawatan & Tindakan</a></li>
                     <li><a href="<?= $path ?>/riwayat-pasien">Riwayat Pasien</a></li>
                     <li><a href="<?= $path ?>/input-resep">Input Resep</a></li>
                     <li><a href="<?= $path ?>/copy-resep">Copy Resep</a></li>
                     <li><a href="<?= $path ?>/resep-luar">Resep Luar</a></li>
                     <li><a href="<?= $path ?>/data-obat">Data Obat & BHP</a></li>
                     <li><a href="<?= $path ?>/berkas-digital">Berkas Digital</a></li>
                     <li><a href="<?= $path ?>/permintaan-lab">Permintaan Lab</a></li>
                     <li><a href="<?= $path ?>/permintaan-rad">Permintaan Rad</a></li>
                     <li><a href="<?= $path ?>/jadwal-operasi">Jadwal Operasi</a></li>
                     <li><a href="<?= $path ?>/surat-kontrol">Surat Kontrol</a></li>
                     <li><a href="<?= $path ?>/kamar-inap">Kamar Inap</a></li>
                     <li><a href="<?= $path ?>/triase">Triase IGD</a></li>
                     <li><a href="<?= $path ?>/rujukan-internal">Rujuk Internal</a></li>
                     <li><a href="<?= $path ?>/resume-pasien">Resume Pasien</a></li>
                     <li><a href="<?= $path ?>/awal-kep-igd">Awal Keperawatan IGD</a></li>
                     <li><a href="<?= $path ?>/awal-medis-igd">Awal Medis IGD</a></li>
                     <li><a href="<?= $path ?>/rujukan-keluar">Rujuk Keluar</a></li>
                     <li><a href="<?= $path ?>/catatan-pasien">Catatan Pasien</a></li>
                     <li><a href="<?= $path ?>/catatan-observasi-igd">Observasi IGD</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Catatan Cek GDS</a></li>
                     <li><a href="<?= $path ?>/pews-anak">Pemantauan PEWS Anak</a></li>
                     <li><a href="<?= $path ?>/pews-dewasa">Pemantauan EWS Dewasa</a></li>
                     <li><a href="<?= $path ?>/meows-obstetri">Pemantauan MEOWS Obstetri</a></li>
                     <li><a href="<?= $path ?>/ews-neonatus">Pemantauan EWS Neonatus</a></li>
                     <li><a href="<?= $path ?>/reaksi-tranfusi">Monitoring Reaksi Tranfusi</a></li>
                     <li><a href="<?= $path ?>/uji-fungsi">Uji Fungsi / Prosedur KFR</a></li>
                     <li><a href="<?= $path ?>/checklist-hcu">Check List Masuk HCU</a></li>
                     <li><a href="<?= $path ?>/checklist-icu">Check List Masuk ICU</a></li>
                     <li><a href="<?= $path ?>/checklist-pre-operasi">Check List Pre Operasi</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Sign-In Sebelum Insisi</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Sign-Out Sebelum Menutup Luka</a></li>
                     <li><a href="checklist-post-operasi">Check List Post Operasi</a></li>
                     <li><a href="penilaian-pre-operasi">Penilaian Pre Operasi</a></li>
                     <li><a href="penilaian-pre-anastesi">Penilaian Pre Anestesi</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Medical Check Up</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Penilaian Psikolog</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Lanjutan Resiko Jatuh Anak</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Lenjutan Resiko Jatuh Lansia</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Lanjutan Resiko Jatuh Neonatus</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Lanjutan Resiko Jatuh Geriatri</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Dokumentasi Tindakan ESWI</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Transfer Antar Ruang</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Edukasi Pasien Dan Keluarga</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Penilaian Pasien Terminal</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Penilaian Korban Kekerasan</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Pasien Penyakit Menular</a></li>
                     <li><a href="javascrtipt:;" class="text-danger">Pasien Keracunan</a></li>
                     <li><a href="<?= $path ?>/tambahan-griatri">Pasien Geriatri</a></li>
                     <li><a href="<?= $path ?>/bunuh-diri">Bunuh Diri</a></li>
                     <li><a href="<?= $path ?>/perilaku-kekerasan">Perilaku Kekerasan</a></li>
                     <li><a href="<?= $path ?>/melarikan-diri">Melarikan Diri</a></li>
                  </ul>
               </li>
               <!-- 
               <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="file-text"></i><span>Pemeriksaan</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="javascript:;">Triase</a></li>
                     <li><a href="javascript:;">Rawat Inap</a></li>
                     <li><a href="javascript:;">Catatan Integrasi</a></li>
                     <li><a href="javascript:;">Transfer Rujukan</a></li>
                     <li><a href="javascript:;">Pemeriksaan Kritis</a></li>
                     <li><a href="javascript:;">Pengkajian Resiko Jatuh</a></li>
                     <li><a href="javascript:;">EKG</a></li>
                  </ul>
               </li> -->
               <!-- <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="shopping-bag"></i><span>RM</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="javascript:;">Pengkajian Awal Pasien</a></li>
                     <li><a href="javascript:;">Pengkajian Awal UGD</a></li>
                     <li><a href="javascript:;">Rekam Medis Triase dan Pengkajian</a></li>
                     <li><a href="javascript:;">Persetujuan Rawat Inap</a></li>
                     <li><a href="javascript:;">Surat Pernyataan Pembayaran</a></li>
                     <li><a href="javascript:;">Transfer Rujukan Eksternal</a></li>
                     <li><a href="javascript:;">General Consent</a></li>
                     <li><a href="javascript:;">Perintah Lisan Telepon</a></li>
                     <li><a href="javascript:;">Checklist Pra Operasi</a></li>
                     <li><a href="javascript:;">Code Blue</a></li>
               </li> -->
            </ul>
         </div>
         <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </nav>
   </div>
</div>