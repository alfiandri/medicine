<?php
$master = "RM";
$page = "Pengkajian Restraint Dan Persetujuan Tindakan";
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
                                    <div class="col-sm-12 text-end">
                                        <h6>Diisi Oleh Perawat</h6>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Tanggal Pengkajian</label>
                                        <input class="form-control" placeholder="" type="date">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Diisi OLeh</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Pengkajian Restraint</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Kebutuhan untuk restraint</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Fisik</option>
                                            <option value="1">Obat - Obatan</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Tujuan restraint</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Kebutuhan untuk restraint</label>
                                        <select id="butuh" class="form-select from-control btn-square"
                                            onchange="muncul();">
                                            <option value="0">Ya</option>
                                            <option value="1">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3" id="tanggal">
                                        <label class="col-form-label">Tanggal</label>
                                        <input class="form-control" placeholder="" type="date">
                                    </div>
                                    <script>
                                    muncul = () => {
                                        var select1 = document.getElementById('butuh');
                                        var select2 = document.getElementById('tanggal');

                                        if (select1.value == "0") {
                                            select2.style.display = "block";
                                        } else {
                                            select2.style.display = "none";
                                        }
                                    }
                                    </script>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Tipe Restraint</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Lamanya Restraint</label>
                                        <input class="form-control" placeholder="" type="number">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Jam</label>
                                        <input class="form-control" placeholder="" type="time">
                                    </div>
                                    <div class="col-sm-3" style="margin-top: 35px;">
                                        <button class="btn btn-success">Tambah</button>
                                    </div>
                                    <div class="col-sm-12 my-3">
                                        <div class="table-responsive">
                                            <table class="table table-border-vertical">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Tipe Restraint</th>
                                                        <th scope="col">Lamanya Restraint</th>
                                                        <th scope="col" colspan="8">Frekuensi Evaluasi Penggunaan
                                                            Restraint (minimal
                                                            setiap 24 jam)</th>
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
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 text-end">
                                        <h6>Diisi Oleh Dokter</h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <h5>PERSETUJUAN OLEH DOKTER YANG MERAWAT</h5>
                                        <p>Saya menyetujui pengekangan (restraint) berdasarkan pada:</p>
                                    </div>
                                    <hr>
                                    <div class="col-sm-5">
                                        <label class="col-form-label">Kebutuhan untuk restraint</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Observasi</option>
                                            <option value="1">Informasi / Komunikasi dengan Perawat</option>
                                            <option value="2">Komunikasi antar tim kesehatan</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">Nama Dokter</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Saksi</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-4 offset-5 text-center" style="margin-top: 35px;">
                                        <button class="btn btn-success">Tanda Tangan Dokter</button>
                                    </div>
                                    <div class="col-sm-3 text-center" style="margin-top: 35px;">
                                        <button class="btn btn-success">Tanda Tangan Dokter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 text-end">
                                        <h6>Diisi Oleh Perawat</h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <h5>PEMBERITAHUAN KEPADA KELUARGA</h5>
                                    </div>
                                    <hr>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Keluarga Sudah Diberitahu</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Ya</option>
                                            <option value="1">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5">
                                        <label class="col-form-label">Nama</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">Hubungan Dengan Pasien</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 text-end">
                                        <h6>Diisi Oleh Keluarga Pasien</h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <p>Saya sudah menerima informasi dan mengerti perlunya tindakan ini</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Tanggal</label>
                                        <input class="form-control" placeholder="" type="date">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Jam</label>
                                        <input class="form-control" placeholder="" type="time">
                                    </div>
                                    <div class="col-sm-6 text-center" style="margin-top: 35px;">
                                        <button class="btn btn-success">Tanda Tangan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 text-end">
                                        <h6>Diisi Oleh Perawat</h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <p>Nama dan tanda tangan pihak yang memberikan informasi</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Tanggal</label>
                                        <input class="form-control" placeholder="" type="date">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Jam</label>
                                        <input class="form-control" placeholder="" type="time">
                                    </div>
                                    <div class="col-sm-6 text-center" style="margin-top: 35px;">
                                        <button class="btn btn-success">Tanda Tangan</button>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Tanggal</label>
                                        <input class="form-control" placeholder="" type="date">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Jam</label>
                                        <input class="form-control" placeholder="" type="time">
                                    </div>
                                    <div class="col-sm-6 text-center" style="margin-top: 35px;">
                                        <button class="btn btn-success">Tanda Tangan Saksi</button>
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