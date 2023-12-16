<?php
$id = $_GET['id'];
$norawat = $_GET['norawat'];
$path = 'id=' . $id . '&' . 'norawat=' . $norawat;
?>
<div class="sidebar-wrapper">
   <div>
      <div class="logo-wrapper"><a href="index"><img class="img-fluid for-light" src="../assets/Logo - Primary.png" width="100" alt=""><img class="img-fluid for-dark" src="../assets/Logo - Secondary.png" width="100" alt=""></a>
         <div class="back-btn"><i class="fa fa-angle-left"></i></div>
         <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="index"><img class="img-fluid" src="../assets/Logo - Secondary.png" width="100" alt=""></a></div>
      <nav class="sidebar-main">
         <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
         <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
               <li class="back-btn"><a href="index"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
               </li>
               <li class="sidebar-main-title">
                  <div>
                     <h6>Rekam Medis</h6>
                     <p>Seluruh Riwayat Medis Pasien</p>
                  </div>
               </li>

               <li class="sidebar-list">
                  <label class="badge badge-success"></label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>Rawat Jalan </span></a>
                  <ul class="sidebar-submenu">
                     <li><a class="submenu-title" href="javascript:;">Awal Keperawatan<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                           <li><a href="inpatient/awal-kep-umum?<?= $path ?>">Umum</a></li>
                           <li><a href="inpatient/awal-kep-gigi?<?= $path ?>">Gigi & Mulut</a></li>
                           <li><a href="inpatient/awal-kep-obg?<?= $path ?>">Kebidanan & Kandungan</a></li>
                           <!-- <li><a href="inpatient/awal-kep-bayi-anak?<?= $path ?>">Bayi/Anak</a></li>
                           <li><a href="inpatient/awal-kep-psikiatri?<?= $path ?>">Psikiatri </a></li>
                           <li><a href="inpatient/awal-kep-geriatri?<?= $path ?>">Geriatri </a></li> -->
                        </ul>
                     </li>
                     <li><a class="submenu-title" href="javascript:;">Awal Medis<span class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                        <ul class="nav-sub-childmenu submenu-content">
                           <li><a href="inpatient/awal-med-umum?<?= $path ?>">Umum</a></li>
                           <li><a href="inpatient/awal-med-obg?<?= $path ?>">Kebidanan & Kandungan</a></li>
                           <!-- <li><a href="javascript::">Bayi/Anak</a></li>
                           <li><a href="javascript::">THT</a></li>
                           <li><a href="javascript::">Psikiatri</a></li>
                           <li><a href="javascript::">Penyakit Dalam</a></li>
                           <li><a href="javascript::">Mata</a></li>
                           <li><a href="javascript::">Neurologi</a></li>
                           <li><a href="javascript::">Orthopedi</a></li>
                           <li><a href="javascript::">Bedah</a></li>
                           <li><a href="javascript::">Bedah Mulut</a></li>
                           <li><a href="javascript::">Geriatri</a></li> -->
                        </ul>
                     </li>
                     <li><a href="inpatient/hasil-usg?<?= $path ?>">Hasil Pemeriksaan USG</a></li>
                     <li><a href="inpatient/tindakan-eswl?<?= $path ?>">Tindakan ESWL</a></li>
                     <li><a href="inpatient/status?<?= $path ?>">Status Pasien</a></li>
                  </ul>
               </li>
               <li class="sidebar-list">
                  <label class="badge badge-success"></label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>ICD Code </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="inpatient/icd-09?<?= $path ?>">ICD 09-Procedures</a></li>
                     <li><a href="inpatient/icd-10?<?= $path ?>">ICD 10-Diagnose</a></li>
                  </ul>
               </li>
               <li class="sidebar-list">
                  <label class="badge badge-success"></label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>Resiko Jatuh </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="inpatient/rj-dewasa?<?= $path ?>">Resiko Jatuh Dewasa</a></li>
                     <li><a href="javascript:;">Resiko Jatuh Anak</a></li>
                     <li><a href="javascript:;">Resiko Jatuh Lansia</a></li>
                     <li><a href="javascript:;">Resiko JatuhNeonatus</a></li>
                     <li><a href="javascript:;">Resiko Jatuh Geriatri</a></li>
                  </ul>
               </li>
               <li class="sidebar-list">
                  <label class="badge badge-success">Update</label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>Penilaian </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="javascript:;">Pasien Geriatri</a></li>
                     <li><a href="javascript:;">Bunuh Diri</a></li>
                     <li><a href="javascript:;">Perilaku Kekerasan</a></li>
                     <li><a href="javascript:;">Melarikan Diri</a></li>
                     <li><a href="javascript:;">Pasien Terminal</a></li>
                     <li><a href="javascript:;">Korban Kekerasan</a></li>
                     <li><a href="javascript:;">Penyakit Menular</a></li>
                     <li><a href="javascript:;">Fisioterapi</a></li>
                     <li><a href="javascript:;">Psikolog</a></li>
                     <li><a href="javascript:;">Medical Check Up</a></li>
                     <li><a href="javascript:;">Hemodialisa</a></li>
                     <li><a href="javascript:;">Uji Fungsi KFR</a></li>
                  </ul>
               </li>
               <li class="sidebar-list">
                  <label class="badge badge-success">Update</label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>Gizi & Nutrisi</span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="javascript:;">Pasien Dewasa</a></li>
                     <li><a href="javascript:;">Pasien Lansia</a></li>
                     <li><a href="javascript:;">Pasien Anak</a></li>
                     <li><a href="javascript:;">Gizi Lanjut</a></li>
                     <li><a href="javascript:;">Asuhan Gizi</a></li>
                     <li><a href="javascript:;">Monitoring Gizi</a></li>
                     <li><a href="javascript:;">Catatan ADIME Gizi</a></li>
                  </ul>
               </li>
               <li class="sidebar-list">
                  <label class="badge badge-success">Update</label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>Tambahan </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="javascript:;">Transfer Antar Ruang</a></li>
                     <li><a href="javascript:;">Edukasi Pasien & Keluarga</a></li>
                     <li><a href="javascript:;">Resume</a></li>
                     <li><a href="javascript:;">Riwayat Perawatan</a></li>
                     <li><a href="javascript:;">Deteksi Dini Corona</a></li>
                  </ul>
               </li>
               <li class="sidebar-main-title">
                  <div>
                     <h6>Permintaan & Informasi</h6>
                     <p>Seluruh Aktivitas Permintaan Penunjang</p>
                  </div>
               </li>
               <li class="sidebar-list">
                  <label class="badge badge-success"></label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>Permintaan </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="inpatient/permintaan-ok?<?= $path ?>">Jadwal Operasi</a></li>
                     <li><a href="inpatient/permintaan-lab?<?= $path ?>">Pemeriksaan Lab</a></li>
                     <li><a href="inpatient/permintaan-rad?<?= $path ?>">Pemeriksaan Radiologi</a></li>
                     <li><a href="inpatient/permintaan-ri?<?= $path ?>">Rawat Inap</a></li>
                     <li><a href="inpatient/permintaan-resep?<?= $path ?>">Resep Obat</a></li>
                  </ul>
               </li>
               <li class="sidebar-list">
                  <label class="badge badge-success">Update</label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>Informasi </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="javascript:;">Antrian Masuk Poli</a></li>
                     <li><a href="javascript:;">Kamar Inap</a></li>
                  </ul>
               </li>
               <li class="sidebar-main-title">
                  <div>
                     <h6>Tindakan</h6>
                     <p>Seluruh Aktivitas Tindakan Medis</p>
                  </div>
               </li>
               <li class="sidebar-list">
                  <label class="badge badge-success">Update</label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>Pemeriksaan </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="javascript:;">Tindakan Rawat Jalan</a></li>
                     <li><a href="javascript:;">Periksa Lab PK</a></li>
                     <li><a href="javascript:;">Periksa Lab PA</a></li>
                     <li><a href="javascript:;">Periksa Lab MB</a></li>
                     <li><a href="javascript:;">Periksa Radiologi</a></li>
                     <li><a href="javascript:;">Tagihan OK/VK</a></li>
                  </ul>
               </li>
               <li class="sidebar-list">
                  <label class="badge badge-success">Update</label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>Obat </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="javascript:;">Pemberian Obat</a></li>
                     <li><a href="javascript:;">Input No.Resep</a></li>
                     <li><a href="javascript:;">Input Resep Dokter</a></li>
                     <li><a href="javascript:;">Total Tagihan Obat</a></li>
                     <li><a href="javascript:;">Pemberian Obat</a></li>
                     <li><a href="javascript:;">Penjualan Obat/Alkes/Barang</a></li>
                     <li><a href="javascript:;">Piutang Obat/Alkes/Barang</a></li>
                     <li><a href="javascript:;">Copy Resep Dokter</a></li>
                  </ul>
               </li>
               <li class="sidebar-list">
                  <label class="badge badge-success"></label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>Billing </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="inpatient/billing-manual?<?= $path ?>">Manual Bill</a></li>
                     <li><a href="javascript:;">Rekonsilisasi</a></li>
                  </ul>
               </li>
               <li class="sidebar-main-title">
                  <div>
                     <h6>Perencanaan</h6>
                     <p>Seluruh Aktivitas Perencanaan Medis</p>
                  </div>
               </li>
               <li class="sidebar-list">
                  <label class="badge badge-success">Update</label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>Rujukan </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="javascript:;">Keluar</a></li>
                     <li><a href="javascript:;">Internal</a></li>
                  </ul>
               </li>

               <li class="sidebar-list">
                  <label class="badge badge-success">Update</label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>Input Data </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="javascript:;">Catatan Pasien</a></li>
                     <li><a href="javascript:;">Berkas Digital Perawatan</a></li>
                     <li><a href="javascript:;">Insiden Keselamatan Pasien</a></li>
                  </ul>
               </li>
               <li class="sidebar-list">
                  <label class="badge badge-success">Update</label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="folder"></i><span>Ganti </span></a>
                  <ul class="sidebar-submenu">
                     <li><a href="javascript:;">Poliklinik</a></li>
                     <li><a href="javascript:;">Dokter Poli</a></li>
                     <li><a href="javascript:;">Jenis Bayar</a></li>
                  </ul>
               </li>
            </ul>
         </div>
         <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </nav>
   </div>
</div>