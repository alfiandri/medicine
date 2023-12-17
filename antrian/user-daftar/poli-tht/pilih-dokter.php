<?php
$page = "Pendaftaran";
require 'head.php';
?>
<style>
body {
    margin: 20px;
}

.logo {
    width: 100px;
    height: 100px;
}

.menu {
    height: 500px;
    width: 80%;
    margin: 4% 10%;
}

.box {
    height: 100%;
    width: 120px;
    text-align: center;
}

.contain {
    margin-top: 10px;
}

.wd {
    color: blue;
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
    <div class="header" id="fullscreen-container">
        <div class="row">
            <div class="col-md-1">
                <img class="logo" src="../../assets/images/avtar/11.jpg" alt="klik Untuk Fullscreen" onclick="full();">
            </div>
            <div class="col-md-3">
                <h1>Rumah Sakit</h1>
                <h2>POLIKLINIK</h2>
            </div>
            <div class="col-md-3 offset-5 text-end">
                <a href="../index.php"><button class="btn btn-info"><span>
                            < Kembali</span></button></a>
                <h6>Home / Poliklinik / Pilih Dokter</h6>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="page-title">
            <div class="menu">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
                        <a data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="card custom-card p-0">
                                <div class="card-profile"><img class="rounded-circle"
                                        src="../../assets/images/avtar/3.jpg" alt=""></div>
                                <div class="text-center profile-details">
                                    <h5 class="wd">Dr. Agus Setiawan Ginting</h5>
                                    <h6>UMUM</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 box-col-6">
                        <a data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <div class="card custom-card p-0">
                                <div class="card-profile"><img class="rounded-circle"
                                        src="../../assets/images/avtar/3.jpg" alt=""></div>
                                <div class="text-center profile-details">
                                    <h5 class="wd">Dr. Susi Wati</h5>
                                    <h6>UMUM</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Pilih Tanggal Booking</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class=" calendar-sec box-col-6">
                        <div class="card gradient-primary o-hidden">
                            <div class="card-body">
                                <div class="setting-dot">
                                    <div class="setting-bg-primary date-picker-setting position-set pull-right"><i
                                            class="fa fa-spin fa-cog"></i></div>
                                </div>
                                <div class="default-datepicker">
                                    <div class="datepicker-here" data-language="en"></div>
                                </div><span class="default-dots-stay overview-dots full-width-dots"><span
                                        class="dots-group"><span class="dots dots1"></span><span
                                            class="dots dots2 dot-small"></span><span
                                            class="dots dots3 dot-small"></span><span
                                            class="dots dots4 dot-medium"></span><span
                                            class="dots dots5 dot-small"></span><span
                                            class="dots dots6 dot-small"></span><span
                                            class="dots dots7 dot-small-semi"></span><span
                                            class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">
                                        </span></span></span>
                            </div>
                            <button class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#konfirmasi">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal pembayaran -->
    <div class="modal fade" id="konfirmasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Pilih Jenis Pembayaran Yang Digunakan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="tombol text-center">
                        <!-- berikan id saat pengiriman -->
                        <a href="../booking/adaakun.php" style="margin: 50px;"><button
                                class="btn btn-success">UMUM</button></a>
                        <a href="../booking/adaakun.php" style="margin: 50px;"><button
                                class="btn btn-success">ASURANSI</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
    document.documentElement.requestFullscreen().then(() => console.log('full screen'))

    function full() {
        let halaman = document.documentElement;
        if (halaman.requestFullscreen) {
            halaman.requestFullscreen();
        } else if (halaman.mozRequestFullScreen) { // Untuk Firefox
            halaman.mozRequestFullScreen();
        } else if (halaman.webkitRequestFullscreen) { // Untuk Chrome, Safari, dan Opera
            halaman.webkitRequestFullscreen();
        } else if (halaman.msRequestFullscreen) { // Untuk Internet Explorer
            halaman.msRequestFullscreen();
        }
    }
    </script>
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
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