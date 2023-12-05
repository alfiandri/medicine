<?php
$master = "RM";
$page = "Pemantauan Harian Kejadian Infeksi";
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
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr class="text-center">
                                                    <th scope="col" rowspan="2">No</th>
                                                    <th scope="col" rowspan="2">Pemakaian Alat Medis</th>
                                                    <th scope="col" rowspan="2">Tgl Pasang</th>
                                                    <th scope="col" rowspan="2">Tgl Lepas</th>
                                                    <th scope="col" colspan="4">Pemantauan Infeksi</th>
                                                </tr>
                                                <tr class="text-center">
                                                    <th scope="col"> <input class="form-control" placeholder="" type="date"></th>
                                                    <th scope="col"> <input class="form-control" placeholder="" type="date"></th>
                                                    <th scope="col"> <input class="form-control" placeholder="" type="date"></th>
                                                    <th scope="col"> <input class="form-control" placeholder="" type="date"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <th>1</th>
                                                    <td>Keteter Intra Vena</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak Ada Keluhan</option>
                                                            <option value="1">Panas</option>
                                                            <option value="2">Merah</option>
                                                            <option value="3">Bengkak</option>
                                                            <option value="4">Nyeri</option>
                                                            <option value="5">Pus/Cairan</option>
                                                            <option value="6">Kultur Negatif</option>
                                                            <option value="7">Kultur Positif</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak Ada Keluhan</option>
                                                            <option value="1">Panas</option>
                                                            <option value="2">Merah</option>
                                                            <option value="3">Bengkak</option>
                                                            <option value="4">Nyeri</option>
                                                            <option value="5">Pus/Cairan</option>
                                                            <option value="6">Kultur Negatif</option>
                                                            <option value="7">Kultur Positif</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak Ada Keluhan</option>
                                                            <option value="1">Panas</option>
                                                            <option value="2">Merah</option>
                                                            <option value="3">Bengkak</option>
                                                            <option value="4">Nyeri</option>
                                                            <option value="5">Pus/Cairan</option>
                                                            <option value="6">Kultur Negatif</option>
                                                            <option value="7">Kultur Positif</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak Ada Keluhan</option>
                                                            <option value="1">Panas</option>
                                                            <option value="2">Merah</option>
                                                            <option value="3">Bengkak</option>
                                                            <option value="4">Nyeri</option>
                                                            <option value="5">Pus/Cairan</option>
                                                            <option value="6">Kultur Negatif</option>
                                                            <option value="7">Kultur Positif</option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="text-end">Phlebitis</td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <th>2</th>
                                                    <td>Daerah Operasi</td>
                                                    <td>Tgl Operasi</td>
                                                    <td>-</td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak Ada Keluhan</option>
                                                            <option value="1">Panas</option>
                                                            <option value="2">Merah</option>
                                                            <option value="3">Bengkak</option>
                                                            <option value="4">Nyeri</option>
                                                            <option value="5">Pus/Cairan</option>
                                                            <option value="6">Kultur Negatif</option>
                                                            <option value="7">Kultur Positif</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak Ada Keluhan</option>
                                                            <option value="1">Panas</option>
                                                            <option value="2">Merah</option>
                                                            <option value="3">Bengkak</option>
                                                            <option value="4">Nyeri</option>
                                                            <option value="5">Pus/Cairan</option>
                                                            <option value="6">Kultur Negatif</option>
                                                            <option value="7">Kultur Positif</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak Ada Keluhan</option>
                                                            <option value="1">Panas</option>
                                                            <option value="2">Merah</option>
                                                            <option value="3">Bengkak</option>
                                                            <option value="4">Nyeri</option>
                                                            <option value="5">Pus/Cairan</option>
                                                            <option value="6">Kultur Negatif</option>
                                                            <option value="7">Kultur Positif</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak Ada Keluhan</option>
                                                            <option value="1">Panas</option>
                                                            <option value="2">Merah</option>
                                                            <option value="3">Bengkak</option>
                                                            <option value="4">Nyeri</option>
                                                            <option value="5">Pus/Cairan</option>
                                                            <option value="6">Kultur Negatif</option>
                                                            <option value="7">Kultur Positif</option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="text-end">IDO</td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <th>3</th>
                                                    <td>Kateter urine Menetap</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak Ada Keluhan</option>
                                                            <option value="1">Panas</option>
                                                            <option value="2">Merah</option>
                                                            <option value="3">Bengkak</option>
                                                            <option value="4">Nyeri</option>
                                                            <option value="5">Pus/Cairan</option>
                                                            <option value="6">Kultur Negatif</option>
                                                            <option value="7">Kultur Positif</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak Ada Keluhan</option>
                                                            <option value="1">Panas</option>
                                                            <option value="2">Merah</option>
                                                            <option value="3">Bengkak</option>
                                                            <option value="4">Nyeri</option>
                                                            <option value="5">Pus/Cairan</option>
                                                            <option value="6">Kultur Negatif</option>
                                                            <option value="7">Kultur Positif</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak Ada Keluhan</option>
                                                            <option value="1">Panas</option>
                                                            <option value="2">Merah</option>
                                                            <option value="3">Bengkak</option>
                                                            <option value="4">Nyeri</option>
                                                            <option value="5">Pus/Cairan</option>
                                                            <option value="6">Kultur Negatif</option>
                                                            <option value="7">Kultur Positif</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak Ada Keluhan</option>
                                                            <option value="1">Panas</option>
                                                            <option value="2">Merah</option>
                                                            <option value="3">Bengkak</option>
                                                            <option value="4">Nyeri</option>
                                                            <option value="5">Pus/Cairan</option>
                                                            <option value="6">Kultur Negatif</option>
                                                            <option value="7">Kultur Positif</option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="text-end">ISK</td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select></td>
                                                    <td><select class="form-select from-control btn-square">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" rowspan="2">Nama dan Tanda tangan PJ Shift </td>
                                                    <td><input class="form-control" placeholder="Nama" type="text"></td>
                                                    <td><input class="form-control" placeholder="Nama" type="text"></td>
                                                    <td><input class="form-control" placeholder="Nama" type="text"></td>
                                                    <td><input class="form-control" placeholder="Nama" type="text"></td>
                                                </tr>
                                                <tr class="text-center">
                                                    <!-- disabled jika sudah di ttd -->
                                                    <td><button class="btn btn-success disabled">tanda tangan</button>
                                                    </td>
                                                    <td><button class="btn btn-success">tanda tangan</button></td>
                                                    <td><button class="btn btn-success">tanda tangan</button></td>
                                                    <td><button class="btn btn-success">tanda tangan</button></td>
                                                </tr>

                                            </tbody>
                                            </tbody>
                                        </table>
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