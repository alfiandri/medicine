<?php
$master = "RM";
$page = "OBSERVASI RESTRAINT/PENGENDALIAN GERAK";
require 'head.php';
?>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    th,
    td {
        padding: 10px;
        text-align: center;
    }

    .center-text {
        vertical-align: middle;
    }
</style>

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
                                    <div class="col-sm-6">
                                        <label class="form-label">Diagnosa Pasien</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Alasan penggunaan restraint</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Tanggal mulai restraint</label>
                                        <input class="form-control" type="date">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Jam</label>
                                        <input class="form-control" type="time">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">JENIS RESTRAINT YG DIGUNAKAN </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <label class="form-label">Tanggal</label>
                                            <input class="form-control" type="date">
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="form-label">Jam</label>
                                            <input class="form-control" type="time">
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="form-label">Tensi</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="form-label">Nadi</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="form-label">Nafas</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="form-label">Suhu</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="form-label">Skala Nyeri</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="form-label">Sirkulasi Darah</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="form-label">Kulit Memar</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="form-label">Makan
                                            </label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="form-label">Minum</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="form-label">Miring Ka/Ki</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="form-label">BAB BAK</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label">Keterangan</label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="col-sm-12 my-3 text-end">
                                            <a href="#"><button class="btn btn-outline-info">Simpan</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="table-primary">
                                                <tr class="center-text ">
                                                    <th rowspan="2">Tanggal</th>
                                                    <th rowspan="2">Jam</th>
                                                    <th colspan="2">Tanda Tanda Fital</th>
                                                    <th rowspan="2">Sirkulasi Darah</th>
                                                    <th rowspan="2">Kulit Memar</th>
                                                    <th colspan="2">Asupan Gizi</th>
                                                    <th rowspan="2">Miring KA/KI</th>
                                                    <th rowspan="2">BAB BAK</th>
                                                    <th rowspan="2">Keterangan</th>
                                                </tr>
                                                <tr class="center-text ">
                                                    <th>Temsi,Nadi,Nafas,Suhu</th>
                                                    <th>Skala Nyeri</th>
                                                    <th>Makan</th>
                                                    <th>Minum</th>
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
                                                    <td>-</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6" style="margin: 20px;">
                                            <h5>Catatan :</h5>
                                            <p>• Pasien mika–miki* setiap 2 jam</p>
                                            <p>• Retstraint dilonggarkan </p>
                                            <div style="margin-left: 30px;">
                                                <p>> Usia ≥18 thn → 4 jam sekali</p>
                                                <p>> Usia 9 s/d 17 thn → 2 jam sekali</p>
                                                <p>> Usia ≤ 9 thn → 1jam sekali</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-5" style="margin: 20px;">
                                            <p>• Bebas dari restraint</p>
                                            <div class="col-sm-6">
                                                <label class="form-label">Jam</label>
                                                <input class="form-control" type="time">
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label">Tanggal</label>
                                                <input class="form-control" type="date">
                                            </div>
                                            <div class="col-sm-10">
                                                <label class="form-label">Perawat Yang Bertugas</label>
                                                <input class="form-control" type="text">
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