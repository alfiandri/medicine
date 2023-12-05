<?php
$master = "RM";
$page = "ASSESMEN KEPERAWATAN";
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
                                    <div class="col-sm-12 text-end">
                                        <p><b>(dilengkapi dalam waktu 2 jam pertama pasien masuk ruang rawat inap) </b>
                                        </p>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label">- Tanggal Masuk</label>
                                        <input class="form-control" placeholder="" type="date">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">- Resiko Cedera/Jatuh</label>
                                        <select name="" class="form-select from-control btn-square">
                                            <option value="0">Tidak</option>
                                            <option value="1">Ya</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-7 my-4">
                                        <p>Bila ya, Lampirkan dan isi formulir penilaian risiko jatuh, Jika nilainya
                                            risiko tinggi , pasien dipasang gelang risiko jatuh berwarna kuning.</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">- Diberitakukan Ke Dokkter</label>
                                        <select name="" id="info" class="form-select from-control btn-square"
                                            onchange="aksi();">
                                            <option value="0">Ya</option>
                                            <option value="1">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2" id="waktu">
                                        <label class="col-form-label">- Pukul</label>
                                        <input class="form-control" placeholder="" type="time">
                                    </div>
                                    <script>
                                    aksi = () => {
                                        var select1 = document.getElementById('info');
                                        var select2 = document.getElementById('waktu');

                                        if (select1.value == "0") {
                                            select2.style.display = "block";
                                        } else {
                                            select2.style.display = "none";
                                        }
                                    }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h5>SKIRING NYERI</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">- Berapa Skala Nyeri Anda?</label>
                                        <select name="" class="form-select from-control btn-square">
                                            <option value="0">Tidak Nyeri (0)</option>
                                            <option value="1">Ringan (1 - 3)</option>
                                            <option value="2">Sedang (4 - 6)</option>
                                            <option value="3">Berat (7 - 10)</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label">- Lokasi</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label">- Karakteristik</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label">- Durasi</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label">- Frekuansi</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">- Nyeri Hilang Bila</label>
                                        <select name="" id="nyeri" class="form-select from-control btn-square"
                                            onchange="a();">
                                            <option value="0">Minum Obat</option>
                                            <option value="1">Mendengarkan Musik</option>
                                            <option value="2">Istirahat</option>
                                            <option value="3">Berubah Posisi</option>
                                            <option value="4">Lain - Lain. Sebutkan</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2" id="sebutkan">
                                        <label class="col-form-label">- Sebutkan</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">- Diberitahukan Ke Dokter</label>
                                        <select name="" id="info-dokter" class="form-select from-control btn-square"
                                            onchange="b();">
                                            <option value="0">Ya</option>
                                            <option value="1">TIdak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2" id="tampil">
                                        <label class="col-form-label">- Pukul</label>
                                        <input class="form-control" placeholder="" type="time">
                                    </div>
                                    <script>
                                    b = () => {
                                        var select1 = document.getElementById('info-dokter');
                                        var select2 = document.getElementById('tampil');

                                        if (select1.value == "0") {
                                            select2.style.display = "block";
                                        } else {
                                            select2.style.display = "none";
                                        }
                                    }
                                    var select4 = document.getElementById('sebutkan');
                                    select4.style.display = "none";
                                    a = () => {
                                        var select3 = document.getElementById('nyeri');

                                        if (select3.value == "4") {
                                            select4.style.display = "block";
                                        } else {
                                            select4.style.display = "none";
                                        }
                                    }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h6>KEBUTUHAN EDUKASI (dikaji pada pasien dan atau keluarga)
                                        </h6>
                                        <p>Kebutuhan pembelajaran pasien (pilih topik pembelajaran pada kotak yang
                                            tersedia)</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">- Diagnosa dan Manajemen</label>
                                        <select name="" id="diagnosa" class="form-select from-control btn-square"
                                            onchange="c();">
                                            <option value="0">Obat Obatan</option>
                                            <option value="1">Perawatan Luka</option>
                                            <option value="2">Manajemen Nyeri</option>
                                            <option value="3">Diet Dan Nutrisi</option>
                                            <option value="4">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5" id="lain">
                                        <label class="col-form-label">- Lainnya</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <script>
                                    var select6 = document.getElementById('lain');
                                    select6.style.display = "none";
                                    c = () => {
                                        var select5 = document.getElementById('diagnosa');

                                        if (select5.value == "4") {
                                            select6.style.display = "block";
                                        } else {
                                            select6.style.display = "none";
                                        }
                                    }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 text-center">
                                        <button class="btn btn-warning">Yang melakukan Asesmen
                                        </button>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <button class="btn btn-warning">Perawat yang melengkapi Asesemen
                                        </button>
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