<?php
$master = "RM";
$page = "Form Pernyataan DNR";
require 'head.php';
?>

<body onload="startTime()">
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
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
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><?= $master ?></li>
                                    <li class="breadcrumb-item active"><?= $page ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <form action="">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="sm-3">
                                            <label class="form-label">No RM</label>
                                            <input class="form-control" placeholder="" type="text">
                                        </div>
                                        <div class="sm-3 my-1">
                                            <label class="form-label">Nama</label>
                                            <input class="form-control" placeholder="" type="text">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Jenis Kelamin</label>
                                                <select class="form-select from-control btn-square">
                                                    <option value="0">Laki - Laki</option>
                                                    <option value="1">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Tanggal Lahir</label>
                                                <input class="form-control" placeholder="" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="sm-6">
                                            <div>
                                                <label class="form-label">Alamat</label>
                                                <textarea class="form-control" rows="7" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>Formulir ini adalah perintah dokter dimana tenaga medis tidak boleh melakukan
                                            resusitasi bila pasien dengan identitas di bawah ini mengalami henti jantung
                                            (di mana tidak ada denyut nadi) atau henti napas (tidak ada pernapasan
                                            spontan). Formulir ini juga menginstruksikan kepada tenaga medis untuk tetap
                                            melakukan intervensi atau pengobatan atau tatalaksana lainnya sebelum
                                            terjadi henti napas atau henti jantung.
                                            saya yang bertanda tangan di bawah ini:
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h5>Identitas Pasien</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">- Nama</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label">- Tempat Lahir</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label">- Tanggl Lahir</label>
                                        <input class="form-control" placeholder="" type="date">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">- No Rekam Medis</label>
                                        <input class="form-control" placeholder="" type="number">
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label">- Ruang Rawat</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h5>Pernyataan dan Instruksi Dokter</h5>
                                    </div>
                                    <div class="col-sm-12">
                                        <p>Saya, dokter yang bertanda tangan di bawah ini menginstruksikan tenaga medis
                                            untuk melakukan hal yang tertulis di bawah ini:
                                        </p>
                                        <ul style="list-style-type: square; margin-left:20px;">
                                            <li>Usaha komprehensif untuk mencegah henti napas atau henti jantung TANPA
                                                melakukan intubasi. DNR jika henti napas atau henti jantung terjadi.
                                                TIDAK melakukan CPR.</li>
                                            <li>Usaha suportif sebelum terjadi henti napas atau henti jantung yang
                                                meliputi pembukaan jalan napas secara non-invasif, pemberian oksigen,
                                                mengontrol perdarahan, memposisikan pasien dengan nyaman, bidai,
                                                obat-obatan anti-nyeri. TIDAK melakukan CPR bila henti napas atau henti
                                                jantung terjadi.</li>
                                        </ul>
                                        <p style="margin-top: 30px;">Saya, dokter yang bertanda tangan di bawah ini
                                            menyatakan
                                            bahwa
                                            keputusan DNR
                                            di atas diambil setelah pasien diberi penjelasan; dan informed consent
                                            diperoleh dari:
                                        </p>
                                        <ul style="list-style-type: square; margin-left:20px;">
                                            <li>Pasien Sendiri</li>
                                            <li>Tenaga Kesehatan Yang Ditunjuk Pasien </li>
                                            <li>Wali yang sah atas pasien (termasuk yang ditunjuk pengadilan)</li>
                                            <li>Anggota Keluarga Pasien</li>
                                        </ul>
                                        <p style="margin-top: 30px;">Jika hal di atas tidak dimungkinkan, maka saya,
                                            dokter yang bertanda tangan di bawah ini memberikan perintah DNR di atas
                                            berdasarkan pada:
                                        </p>
                                        <ul style="list-style-type: square; margin-left:20px;">
                                            <li>Instruksi pasien sebelumnya</li>
                                            <li>Keputusan dua orang dokter bahwa CPR akan memberikan hasil yang tidak
                                                efektif</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5 my-1">
                                        <label class="form-label">Nama Lengkap Dokter</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3 my-1">
                                        <label class="form-label">Tanggal Menyatakan</label>
                                        <input class="form-control" placeholder="" type="date">
                                    </div>
                                    <div class="col-sm-4" style="margin-top: 34px;">
                                        <a href="#"><button class="btn btn-outline-info">Tanda
                                                Tangan
                                                Dokter
                                                Yang
                                                Menyatakan
                                            </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        require 'footer.php';
        ?>
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
    <script src="../assets/js/datepicker/date-time-picker/moment.min.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/datetimepicker.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>