<?php
$page = "Apotik";
require 'head.php';
?>
<style>
.box {
    width: 20px;
    height: 20px;
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
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <?php require 'header.php'; ?>
        <div class="page-body-wrapper">
            <?php require 'sidebar.php'; ?>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3>Pemanggil Apotik</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i
                                                data-feather="folder-plus"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">Antrian Apotik</li>
                                    <li class="breadcrumb-item active">Pemanggil Apotik</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Informasi Data</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display" id="basic-2">
                                            <thead>
                                                <tr>
                                                    <th>No Antrian</th>
                                                    <th>Jenis Antrian</th>
                                                    <th>Nama Pasien</th>
                                                    <th>Waktu Pendaftaran</th>
                                                    <th>Dipanggil Loket</th>
                                                    <th>Panggil Manual</th>
                                                    <th>Konfirmasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="text-align: center;">
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td><button class="btn btn-success"
                                                            onclick="panggil();">Panggil</button></td>
                                                    <td>
                                                        <div class="box" style="background-color: green;"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <viw class="row">
                                            <div class="col-sm-3">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="box" style="background-color: green;"></div>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <p>: Sudah Dipanggil</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="box" style="background-color: yellow;"></div>
                                                    </div>
                                                    <div class=" col-sm-10">
                                                        <p>: Terkonfirmasi</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="box" style="background-color: black;"></div>
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <p>: Belum Terpanggil</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </viw>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require 'footer.php';
        ?>
    </div>
    </div>
    <script type="text/javascript">
    function panggil() {
        let open = new Audio('../../sound/open.mp3');
        let nomor = new Audio('../../sound/a1.mp3');
        let loket = new Audio('../../sound/loket.mp3');
        open.play();
        setTimeout(function() {
            nomor.play();
        }, 1900);
        setTimeout(function() {
            loket.play();
        }, 3500);
    }
    </script>
    <!-- latest jquery-->
    <script src="../../assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../../assets/js/scrollbar/simplebar.js"></script>
    <script src="../../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../../assets/js/sidebar-menu.js"></script>
    <script src="../../assets/js/chart/chartist/chartist.js"></script>
    <script src="../../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="../../assets/js/chart/knob/knob.min.js"></script>
    <script src="../../assets/js/chart/knob/knob-chart.js"></script>
    <script src="../../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../../assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="../../assets/js/dashboard/default.js"></script>
    <script src="../../assets/js/notify/index.js"></script>
    <script src="../../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../../assets/js/typeahead/handlebars.js"></script>
    <script src="../../assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="../../assets/js/typeahead/typeahead.custom.js"></script>
    <script src="../../assets/js/typeahead-search/handlebars.js"></script>
    <script src="../../assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="../../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../../assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../../assets/js/script.js"></script>
    <!-- <script src="../../assets/js/theme-customizer/customizer.js"></script> -->
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>