<?php
$page = "Farmasi";
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
                                <h3>Setting Antrian Farmasi</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i
                                                data-feather="folder-plus"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">Antrian Farmasi</li>
                                    <li class="breadcrumb-item active">Setting Antrian Farmasi</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="header-faq">
                            <h5 class="mb-0">Daftar Unit</h5>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media"><i class="m-r-30" data-feather="play"></i>
                                                <div class="media-body">
                                                    <h6 class="f-w-600">Penyakit Dalam</h6>
                                                    <p><b>Jadwal</b></p>
                                                    <p>- Poli MCU [00:00:00 - 23:23:23] Dr. saya</p>
                                                    <p>- Poli MCU [00:00:00 - 23:23:23] Dr. saya</p>
                                                    <p>- Poli MCU [00:00:00 - 23:23:23] Dr. saya</p>
                                                    <p><b>Keterangan</b></p>
                                                    <p>- </p>
                                                    <div class="col-md-12">
                                                        <div class="tampilkan text-end">
                                                            <a href="display-farmasi.php" target="_blank"><button
                                                                    class="btn btn-warning">Tampilkan</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media"><i class="m-r-30" data-feather="play"></i>
                                                <div class="media-body">
                                                    <h6 class="f-w-600">Penyakit Dalam</h6>
                                                    <p><b>Jadwal</b></p>
                                                    <p>- Poli MCU [00:00:00 - 23:23:23] Dr. saya</p>
                                                    <p>- Poli MCU [00:00:00 - 23:23:23] Dr. saya</p>
                                                    <p>- Poli MCU [00:00:00 - 23:23:23] Dr. saya</p>
                                                    <p><b>Keterangan</b></p>
                                                    <p>- </p>
                                                    <div class="col-md-12">
                                                        <div class="tampilkan text-end">
                                                            <a href="#"><button
                                                                    class="btn btn-warning">Tampilkan</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../../assets/js/script.js"></script>
    <!-- <script src="../../assets/js/theme-customizer/customizer.js"></script> -->
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>