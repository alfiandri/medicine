<?php
$page = "Loket";
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
                <!-- <h2>MITRA SEJATI</h2> -->
            </div>
        </div>
    </div>
    <div class="container-fluid" style="margin-top:50px;">
        <div class="page-title">
            <div class=" row my-4 gx-5">
                <div class="col-md-6 g-0">
                    <div class="row gx-5">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="row text-center">
                                    <div class="col-sm-12"
                                        style="background-color: #023047; color:aliceblue; padding:10px;">
                                        <h2>LOKET 1</h2>
                                        <h3>Resep</h3>
                                        <div class="nomor"
                                            style="width: 100%; height: 365px; background-color:#99d98c; color:white; justify-content: center; align-items: center; display: flex;">
                                            <span style="font-size:80px;">A7</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="row text-center">
                                    <div class="col-sm-12"
                                        style="background-color: #023047; color:aliceblue; padding:10px;">
                                        <h2>LOKET 2</h2>
                                        <h3>Non-Resep</h3>
                                        <div class="nomor"
                                            style="width: 100%; height: 363px; background-color:#5fa8d3; color:white; justify-content: center; align-items: center; display: flex;">
                                            <span style="font-size:80px;">A28</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <!-- jika ingin menambahkan fideo lain harap ubah link youtube dengan di > https://youtubeembedcode.com/en/ == ukuran w=100% h=470px-->
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%"
                            height="470" type="text/html"
                            src="https://www.youtube.com/embed/1tnxD7LOVls?autoplay=1&mute=1&loop=1&fs=0&playlist=1tnxD7LOVls&origin=https://youtubeembedcode.com">
                            <div><small><a href="https://youtubeembedcode.com/nl/">youtubeembedcode.com/nl/</a></small>
                            </div>
                            <div><small><a href="https://utaninkomst.se/">https://utaninkomst.se/</a></small></div>
                            <div><small><a href="https://youtubeembedcode.com/nl/">youtubeembedcode nl</a></small>
                            </div>
                            <div><small><a href="https://sms-lån-utan-uc.se/">sms lån utan uc med
                                        betalningsanmärkningar</a></small></div>
                        </iframe>
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