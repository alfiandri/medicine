<?php
$master = "RM";
$page = "Persetujuan Tindakan Kedokteran";
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
                                        <h6>CEK IN</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Perawat melakukan konfirmasi Identitas</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Ya</option>
                                            <option value="1">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Surat Izin Tindakan</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Bedah</option>
                                            <option value="1">Anastesi</option>
                                            <option value="2">Prosedur</option>
                                            <option value="3">Area</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Pemandangan Area Operasi Dan Site
                                            Marketing</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Ada</option>
                                            <option value="1">Tidak Ada</option>
                                            <option value="2">Tidak Diperlukan</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Keadaan Umum Pasien</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Baik</option>
                                            <option value="1">Sedang</option>
                                            <option value="2">Lemah</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Pemeriksaan Pre Anastesi</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">H-1</option>
                                            <option value="1">H-2</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Hasil Pemeriksaan Penunjang</label>
                                        <select class="form-select from-control btn-square" id="hasil" onchange="a();">
                                            <option value="0">LAB</option>
                                            <option value="1">EKG</option>
                                            <option value="2">Radiologi</option>
                                            <option value="3">USG</option>
                                            <option value="4">Keratometri</option>
                                            <option value="5">Biommetri</option>
                                            <option value="6">Tidak Diperlukan</option>
                                            <option value="7">Lain - lain</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6" id="tampil">
                                        <label class="form-label">Lainnya</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <script>
                                    var select2 = document.getElementById('tampil');
                                    select2.style.display = "none";
                                    a = () => {
                                        var select1 = document.getElementById('hasil');

                                        if (select1.value == "7") {
                                            select2.style.display = "block";
                                        } else {
                                            select2.style.display = "none";
                                        }
                                    }
                                    </script>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Persiapan Darah</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Ada</option>
                                            <option value="1">Tidak Ada</option>
                                            <option value="2">Tidak Diperlukan</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Perlengkapan Khusus, alat/implan</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Ada</option>
                                            <option value="1">Tidak Ada</option>
                                            <option value="2">Tidak Diperlukan</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 my-4 text-center">
                                        <button class="btn btn-success">Rawat Inap</button>
                                    </div>
                                    <div class="col-sm-6 my-4 text-center">
                                        <button class="btn btn-success">Tuang Oprasi</button>
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