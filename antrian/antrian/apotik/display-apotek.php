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

.waktu {
    background-color: #023047;
    color: #edede9;
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
            <div class="col-sm-4 offset-4 waktu">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 id="hari" style="color:#ffb703;">/h2>
                    </div>
                    <div class="col-sm-6 text-end">
                        <h2 id="tanggal"></h2>
                    </div>
                    <div class="col-sm-12 text-end">
                        <h2 id="jam"></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="page-title">
            <div class="row my-4 gx-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="row text-center">
                            <div class="col-sm-12" style="background-color: #023047; color:aliceblue; padding:10px;">
                                <h3>LOKET 1 - PENDAFTARAN</h3>
                                <h4>NOMOR ANTRIAN</h4>
                                <div class="nomor"
                                    style="width: 100%; height: 400px; background-color:white; color:#ffb703; justify-content: center; align-items: center; display: flex;">
                                    <span style="font-size:150px;">A30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%"
                            height="470" type="text/html"
                            src="https://www.youtube.com/embed/1tnxD7LOVls?autoplay=1&mute=1&loop=1&fs=0&playlist=1tnxD7LOVls&origin=https://youtubeembedcode.com">
                            <div><small><a href="https://youtubeembedcode.com/nl/">youtubeembedcode.com/nl/</a></small>
                            </div>
                            <div><small><a href="https://utaninkomst.se/">https://utaninkomst.se/</a></small></div>
                            <div><small><a href="https://youtubeembedcode.com/nl/">youtubeembedcode nl</a></small></div>
                            <div><small><a href="https://sms-lån-utan-uc.se/">sms lån utan uc med
                                        betalningsanmärkningar</a></small></div>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function updateClock() {
        const now = new Date();
        const daysOfWeek = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
        const dayOfWeek = daysOfWeek[now.getDay()];
        const date = now.getDate();
        const month = now.getMonth() + 1; // Perhatikan: Januari dimulai dari 0
        const year = now.getFullYear();
        const hours = now.getHours();
        const minutes = now.getMinutes();
        const seconds = now.getSeconds();

        const formathari = `${dayOfWeek}`;
        const formattanggal = `${date}/${month}/${year}`;
        const formattedTime =
            `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

        const formatjam = `${formattedTime}`;

        document.getElementById("jam").textContent = formatjam;
        document.getElementById("tanggal").textContent = formattanggal;
        document.getElementById("hari").textContent = formathari;
    }

    setInterval(updateClock, 1000);
    updateClock();

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