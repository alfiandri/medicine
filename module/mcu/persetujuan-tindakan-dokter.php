<?php
$master = "RM";
$page = "PERSETUJUAN TINDAKAN KEDOKTERAN/INFORMED";
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
                                        <label class="col-form-label">Nama Pemberi Informasi</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Nama Penerima Informasi / Pemberi
                                            Persetujuan</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col" colspan="2">Isi Informasi</th>
                                                <th scope=" col">Tanda</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Diagnosis (WD dan DD)</td>
                                                <td>-</td>
                                                <td>
                                                    <div class="media-body icon-state">
                                                        <label class="switch">
                                                            <input type="checkbox"><span class="switch-state"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Dasar Diagnosis</td>
                                                <td>-</td>
                                                <td>
                                                    <div class="media-body icon-state">
                                                        <label class="switch">
                                                            <input type="checkbox"><span class="switch-state"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Tindakan Kedokteran</td>
                                                <td>-</td>
                                                <td>
                                                    <div class="media-body icon-state">
                                                        <label class="switch">
                                                            <input type="checkbox"><span class="switch-state"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Indikasi / Tujuan Tindakan</td>
                                                <td>-</td>
                                                <td>
                                                    <div class="media-body icon-state">
                                                        <label class="switch">
                                                            <input type="checkbox"><span class="switch-state"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Tata Cara</td>
                                                <td>-</td>
                                                <td>
                                                    <div class="media-body icon-state">
                                                        <label class="switch">
                                                            <input type="checkbox"><span class="switch-state"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Resiko dan Komplikasi</td>
                                                <td>-</td>
                                                <td>
                                                    <div class="media-body icon-state">
                                                        <label class="switch">
                                                            <input type="checkbox"><span class="switch-state"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Prognosis </td>
                                                <td>-</td>
                                                <td>
                                                    <div class="media-body icon-state">
                                                        <label class="switch">
                                                            <input type="checkbox"><span class="switch-state"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Alternatif</td>
                                                <td>-</td>
                                                <td>
                                                    <div class="media-body icon-state">
                                                        <label class="switch">
                                                            <input type="checkbox"><span class="switch-state"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Lain-Lain</td>
                                                <td>-</td>
                                                <td>
                                                    <div class="media-body icon-state">
                                                        <label class="switch">
                                                            <input type="checkbox"><span class="switch-state"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-10 my-3">
                                            <p>Dengan ini menyatakan bahwa saya telah menerangkan hal-hal di atas secara
                                                benar
                                                dan jujur dan memberikan kesempatan untuk bertanya dan atau berdiskusi
                                            </p>
                                        </div>
                                        <div class="col-sm-2">
                                            <button class="btn btn-success">Tanda Tangan</button>
                                        </div>
                                        <div class="col-sm-10 my-4">
                                            <p>Dengan ini menyatakan bahwa saya telah menerangkan hal-hal di atas secara
                                                benar
                                                dan jujur dan memberikan kesempatan untuk bertanya dan atau berdiskusi
                                            </p>
                                        </div>
                                        <div class="col-sm-2 my-3">
                                            <button class="btn btn-success">Tanda Tangan</button>
                                        </div>
                                        <div class="col-sm-12 my-3">
                                            <p>* Bila pasien tidak kompeten atau tidak mau menerima informasi maka
                                                penerima informasi adalah wali atau keluarga terdekat.</p>
                                            <h6>Keterangan : </h6>
                                            <p>WD : Work Diagnosa/Diagnosa Kerja</p>
                                            <p>DD : Differential Diagnosa/ Diagnosa Banding</p>
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