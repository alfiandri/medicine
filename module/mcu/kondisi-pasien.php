<?php
$master = "RM";
$page = "Penerima Informasi Kondisi Pasien";
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
                    <form action="" method="post">
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
                                        <h6>Saya Yang Bertanda Tangan Dibawah Ini :</h6>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Nama</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Tanggal Pemeriksaan</label>
                                        <div class="input-group date" id="dt-local" data-target-input="nearest">
                                            <input class="form-control datetimepicker-input digits" type="text" data-target="#dt-local">
                                            <div class="input-group-text" data-target="#dt-local" data-toggle="datetimepicker"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">No. Rekam Medis</label>
                                        <input class="form-control" placeholder="" type="number">
                                    </div>
                                    <div class="col-sm-12 my-4">
                                        <p>Menyatakan bahwa sesuai kewajiban Simpan Rahasia Kedokteran dan mengacu pada
                                            Peraturan Menteri Kesehatan Republik Indonesia Nomor 4 tahun 2018 tentang
                                            Hak dan Kewajiban Pasien, maka saya menunjuk yang tersebut di bawah ini
                                            untuk dapat diberitahukan tentang kondisi kesehatan saya:</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="col-sm-8 offset-1">
                                                <h2>A</h2>
                                            </div>
                                            <div class="col-sm-8 offset-1">
                                                <label class="form-label">Nama</label>
                                                <input class="form-control" placeholder="" type="text">
                                            </div>
                                            <div class="col-sm-8 offset-1">
                                                <label class="form-label">Nomor Telepon</label>
                                                <input class="form-control" placeholder="" type="number">
                                            </div>
                                            <div class="col-sm-8 offset-1">
                                                <label class="col-form-label">Hubungan Pasien</label>
                                                <select class="form-select from-control btn-square">
                                                    <option value="0">-</option>
                                                    <option value="1">Wali</option>
                                                    <option value="2">Anak</option>
                                                    <option value="3">Saudara</option>
                                                    <option value="4">Orang Tua</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="col-sm-8 offset-3">
                                                <h2>B</h2>
                                            </div>
                                            <div class="col-sm-8 offset-3">
                                                <label class="form-label">Nama</label>
                                                <input class="form-control" placeholder="" type="text">
                                            </div>
                                            <div class="col-sm-8 offset-3">
                                                <label class="form-label">Nomor Telepon</label>
                                                <input class="form-control" placeholder="" type="number">
                                            </div>
                                            <div class="col-sm-8 offset-3">
                                                <label class="col-form-label">Hubungan Pasien</label>
                                                <select class="form-select from-control btn-square">
                                                    <option value="0">-</option>
                                                    <option value="1">Wali</option>
                                                    <option value="2">Anak</option>
                                                    <option value="3">Saudara</option>
                                                    <option value="4">Orang Tua</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 my-3">
                                            <h7>Demikian pernyataan dibuat dengan penuh kesadaran dan tanpa paksaan.
                                            </h7>
                                        </div>
                                        <div class="col-sm-12 text-end">
                                            <a href="#"><button class="btn btn-outline-info">Tanda Tangan Pembuat
                                                    Pernyataan</button></a>
                                        </div>
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
    <script>
    </script>
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