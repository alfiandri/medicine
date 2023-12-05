<?php
$path = "outpatient-mata";
?>
<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="../assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo_dark.png" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>EIS</h6>
                            <p>Dashboards, Analytics and Reports</p>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <label class="badge badge-success">3</label><a class="sidebar-link sidebar-title" href="javascript:;"><i data-feather="home"></i><span>Dashboards </span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="javascript:;">Registrasi Pasien</a></li>
                            <li><a href="javascript:;">Billing</a></li>
                            <li><a href="javascript:;">Ketersediaan Bed</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="layout"></i><span class="">Laporan</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="javascript:;">Pasien Dirawat Terkini</a></li>
                            <li><a href="javascript:;">Handover Perawat Ruangan</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Rawat Inap</h6>
                            <p>Pelayanan Medis Rawat Inao</p>
                        </div>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="file-text"></i><span>Registrasi</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="javascript:;">Permintaan RI </a></li>
                            <li><a href="javascript:;">Daftar Kunjungan</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="shopping-bag"></i><span>RM</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="<?= $path ?>/pasien-baru">Identifikasi Pasien Baru</a></li>
                            <li><a href="javascript:;">General Consent</a></li>
                            <li><a href="perintah-lisan">Perintah Lisan</a></li>
                            <li><a href="javascript:;">Permintaan Konsul Internal</a></li>
                            <li><a href="permintaan-privasi">Formulir Permintaan Privasi</a></li>
                            <li><a href="kondisi-pasien">Informasi Kondisi Pasien</a></li>
                            <li><a href="penggantian-dpjp">Form Penggantian DPJP</a></li>
                            <li><a href="s-gizi">Gizi Skrining</a></li>
                            <li><a href="cppt.php">CPPT</a></li>
                            <li><a href="observasi-pasien">Observasi Keadaan Umum Pasien</a></li>
                            <li><a href="p-penunjang">Permintaan Penunjang</a></li>
                            <li><a href="rekonsialiasi-terapi">Rekonsialiasi Terapi & STO</a></li>
                            <li><a href="site-marking">Site Marking</a></li>
                            <li><a href="checklist-keselamatan">Checklist Keselamatan Pasien</a></li>
                            <li><a href="serahterimaok">Serah Terima Ke OK</a></li>
                            <li><a href="asuhan-gizi">Form Asuhan Gizi</a></li>
                            <li><a href="pemantauan-harian">Pemantauan Harian Infeksi</a></li>
                            <li><a href="persetujuan-tindakan-dokter">Informasi dan Edukasi Dokter</a></li>
                            <li><a href="penolakan-tindakan-dokter">Informasi dan Edukasi Medis</a></li>
                            <li><a href="setuju-tindakan">Persetujuan Tindakan Medis</a></li>
                            <li><a href="tolak-tindakan">Penolakan Tindakan Medis</a></li>
                            <li><a href="operasi-strabismus">Operasi Strabismus</a></li>
                            <li><a href="operasi-lainnya">Laporan Operasi Lainnya</a></li>
                            <li><a href="pulang-ranap">Resume Ringkasan Pulang</a></li>
                            <li><a href="javascript:;">Serah Terima Pasien OK</a></li>
                            <li><a href="obatpulang">Form Obat Pulang</a></li>
                            <li><a href="javascript:;">Discharge Planning Pasien Pulang</a></li>
                            <li><a href="javascript:;">Pasien Keluar RS</a></li>
                            <li><a href="p-pulangmandiri">Permintaan Pulang Atas Permintaan Sendiri</a></li>
                            <li><a href="kajian-restrain">Pengkajian & Persetujuan Restraint</a></li>
                            <li><a href="form-restrain">Form Restraint</a></li>
                            <li><a href="pengendalian-gerak">Observasi Restraint</a></li>
                            <li><a href="code-blue">Code Blue</a></li>
                            <li><a href="pernyataan-dnr">Surat Pernyataan DNR</a></li>
                            <li><a href="resusitasi">Surat Pernyataan Jangan Resusitasi</a></li>
                            <li><a href="pasien-terminal">Asesmen Khusus Pasien Terminal</a></li>
                    </li>
                </ul>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="file-text"></i><span>Data Pasien</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="javascript:;">Nota</a></li>
                        <li><a href="javascript:;">ID Card</a></li>
                        <li><a href="javascript:;">Gelang Pasien</a></li>
                        <li><a href="javascript:;">Sticker</a></li>
                        <li><a href="javascript:;">Label</a></li>
                        <li><a href="javascript:;">Status</a></li>
                        <li><a href="javascript:;">CPPT</a></li>
                        <li><a href="javascript:;">Upload Dokumen</a></li>
                        <li><a href="javascript:;">Rekam Medis</a></li>
                        <li><a href="javascript:;">Biaya Adm</a></li>
                    </ul>
                </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>