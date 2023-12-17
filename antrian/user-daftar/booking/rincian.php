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
    color: blue;
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
                <img class="logo" src="../../assets/images/avtar/11.jpg" alt="klik Untuk Fullscreen" onclick="full();">
            </div>
            <div class="col-md-3">
                <h1>Rumah Sakit</h1>
                <h2>POLIKLINIK</h2>
            </div>
            <div class="col-md-3 offset-5 text-end">
                <a href="../poli-tht/pilih-dokter.php"><button class="btn btn-info"><span>
                            < Kembali</span></button></a>
                <h6>Home / Poliklinik</h6>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="page-title">
            <div class="menu">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row">
                            <h4 stye>RINCIAN BOOKING</h4>
                            <div class="col-sm-6">
                                <div class="card box">
                                    <div class="contain">
                                        <img class="img-100 b-r-8" src="../../assets/images/blog/comment.jpg">
                                        <p><b>Poli THT</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card box">
                                    <div class="contain">
                                        <img class="img-100 b-r-8" src="../../assets/images/blog/comment.jpg">
                                        <p style="font-size: 10px;"><b>Dr. Andre</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card box">
                                    <div class="contain" style="margin-top:40px;">
                                        <p style="margin: 0px;"><b>SENIN</b></p>
                                        <p style="margin: 0px;"><b>28/8/2023</b></p>
                                        <p style="margin: 0px;"><b>Poli THT</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card box">
                                    <div class="contain">
                                        <img class="img-100 b-r-8" src="../../assets/images/blog/comment.jpg">
                                        <p><b>UMUM</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <h4>RINCIAN PASIEN</h4>
                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <label class="form-label" for="exampleFormControlInput1">Nomor Rekam Medis</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" disabled
                                        placeholder="3182531752">
                                </div>
                                <div class="col-sm-12 my-2">
                                    <label class="form-label" for="exampleFormControlInput1">Jenis Kelamin</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" disabled
                                        placeholder="Laki - Laki">
                                </div>
                                <div class="col-sm-12 my-2">
                                    <label class="form-label" for="exampleFormControlInput1">No Hp</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" disabled
                                        placeholder="08987212516">
                                </div>
                                <div class="col-sm-12 my-2">
                                    <label class="form-label" for="exampleFormControlInput1">Tanggal Lahir</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" disabled
                                        placeholder="13/12/2000">
                                </div>
                                <div class="col-sm-12 my-2">
                                    <label class="form-label" for="exampleFormControlInput1">NIK</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" disabled
                                        placeholder="1251724162551">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-12">
                                    <label class="form-label" for="exampleFormControlInput1">Nama Pasien</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" disabled
                                        placeholder="Agus Susila">
                                </div>
                                <div class="col-sm-12 my-2">
                                    <label class="form-label" for="exampleFormControlInput1">Alamat</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" disabled
                                        placeholder="Jalan Pancing Medan Area">
                                </div>
                                <div class="col-sm-12 my-2">
                                    <label class="form-label" for="exampleFormControlInput1">Alamat Email</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" disabled
                                        placeholder="agus@gmail.com">
                                </div>
                                <div class="col-sm-12 my-2">
                                    <label class="form-label" for="exampleFormControlInput1">Keterangan</label>
                                    <input class="form-control" id="exampleFormControlInput1" type="text" disabled
                                        placeholder="-">
                                </div>
                                <div class="col-sm-12 my-2">
                                    <a href="#"><button class="btn btn-success" style="width: 100%;">Booking
                                            Sekarang</button></a>
                                </div>
                                <div class="col-sm-12 my-2">
                                    <a href="#"><button class="btn btn-outline-success" style="width: 100%;">Ubah
                                            Jadwal</button></a>
                                </div>
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