<?php
$page = "Pendaftaran";
require 'head.php';
?>
<style>
body {
    margin: 20px;
    background-color: #2a9d8f;
}

.menu {
    height: 330px;
    width: 80%;
    margin: 10% 10%;
    color: #264653;
    cursor: pointer;
}

.box {
    text-align: center;
    background-color: #e9c46a;
}

.contain {
    margin-top: 10px;
}

.back span {
    font-size: 20px;
}

.kotak {
    width: 100%;
    height: 80px;
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
    <div class="container-fluid">
        <div class="page-title">
            <div class="menu">
                <div class="row">
                    <div class="col-sm-4">
                        <a data-bs-toggle="modal" data-bs-target="#daftar">
                            <div class="card box">
                                <div class="contain">
                                    <img class="img-100 b-r-8" src="../assets/images/blog/comment.jpg">
                                    <h4><b>ASURANSI</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a data-bs-toggle="modal" data-bs-target="#daftar">
                            <div class="card box">
                                <div class="contain">
                                    <img class="img-100 b-r-8" src="../assets/images/blog/comment.jpg">
                                    <h4><b>PERUSAHAAN</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a data-bs-toggle="modal" data-bs-target="#daftar">
                            <div class="card box">
                                <div class="contain">
                                    <img class="img-100 b-r-8" src="../assets/images/blog/comment.jpg">
                                    <h4><b>UMUM</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a data-bs-toggle="modal" data-bs-target="#jadwal">
                            <div class="card box">
                                <div class="contain">
                                    <img class="img-100 b-r-8" src="../assets/images/blog/comment.jpg">
                                    <h4><b>JADWAL PRAKTEK DOKTER</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a data-bs-toggle="modal" data-bs-target="#daftar">
                            <div class="card box">
                                <div class="contain">
                                    <img class="img-100 b-r-8" src="../assets/images/blog/comment.jpg">
                                    <h4><b>PENDAFTARAN PASIEN JKN</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Modal Daftar -->
    <div class="modal fade" id="daftar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Masukan No RM</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input class="form-control" id="exampleFormControlInput1" type="number">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="antrian.php"><button type="button" class="btn btn-primary">Lanjut</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="jadwal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Daftar Poliklinik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a data-bs-toggle="modal" data-bs-target="#table">
                            <div class="card box" style="background-color: #e9c46a; cursor:pointer;">
                                <div class="contain">
                                    <img class="img-100 b-r-8" src="../assets/images/blog/comment.jpg">
                                    <h4><b>THT</b></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="table" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Daftar Poliklinik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                    <div class="table-responsive">
                        <table class="table table-dashed">
                            <thead>
                                <tr>
                                    <th scope="col">Hari</th>
                                    <th scope="col">Dokter</th>
                                    <th scope="col">Jam Pelayanan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Senin</th>
                                    <td>Mario</td>
                                    <td>12:00/16:00</td>

                                <tr>
                                    <th scope="row">Selasa</th>
                                    <td>Dede</td>
                                    <td>12:00/16:00</td>

                                </tr>
                                <tr>
                                    <th scope="row">Rabu</th>
                                    <td>Ucok</td>
                                    <td>12:00/16:00</td>
                                </tr>
                            </tbody>
                        </table>
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