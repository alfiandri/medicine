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
    height: 150px;
    width: 120px;
    text-align: center;
}

.contain {
    margin-top: 10px;
}

.back span {
    font-size: 20px;
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
                <img class="logo" src="../assets/images/avtar/11.jpg" alt="klik Untuk Fullscreen" onclick="full();">
            </div>
            <div class="col-md-3">
                <h1>Rumah Sakit</h1>
                <h2>POLIKLINIK</h2>
            </div>
            <div class="col-md-3 offset-5 text-end">
                <h6>Home / Poliklinik</h6>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="page-title">
            <div class="menu">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="card box">
                            <div class="contain">
                                <a href="poli-tht/pilih-dokter.php"><img class="img-100 b-r-8"
                                        src="../assets/images/blog/comment.jpg">
                                    <p><b>Poli THT</b></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card box">
                            <div class="contain">
                                <a href="#"><img class="img-100 b-r-8" src="../assets/images/blog/comment.jpg">
                                    <p><b>Poli THT</b></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card box">
                            <div class="contain">
                                <a href="#"><img class="img-100 b-r-8" src="../assets/images/blog/comment.jpg">
                                    <p><b>Poli THT</b></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card box">
                            <div class="contain">
                                <a href="#"><img class="img-100 b-r-8" src="../assets/images/blog/comment.jpg">
                                    <p><b>Poli THT</b></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card box">
                            <div class="contain">
                                <a href="#"><img class="img-100 b-r-8" src="../assets/images/blog/comment.jpg">
                                    <p><b>Poli THT</b></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card box">
                            <div class="contain">
                                <a href="#"><img class="img-100 b-r-8" src="../assets/images/blog/comment.jpg">
                                    <p><b>Poli THT</b></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
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
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../assets/js/typeahead/handlebars.js"></script>
    <script src="../assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="../assets/js/typeahead/typeahead.custom.js"></script>
    <script src="../assets/js/typeahead-search/handlebars.js"></script>
    <script src="../assets/js/typeahead-search/typeahead-custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- <script src="../../assets/js/theme-customizer/customizer.js"></script> -->
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>