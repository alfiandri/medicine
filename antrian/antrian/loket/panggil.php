<?php
$page = "Memanggil";
require 'head.php';
$koneksi = mysqli_connect("localhost", "root", "", "db_antrean");
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
                                <h3>Pemanggilan Antrian</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="folder-plus"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">Antrian Loket</li>
                                    <li class="breadcrumb-item active">Pemanggilan Antrian</li>
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
                                                    <th>Kode</th>
                                                    <th>Waktu Pendaftaran</th>
                                                    <th>Dipanggil Loket</th>
                                                    <th>Panggil Manual</th>
                                                    <th>Verifikasi Berkas RM</th>
                                                    <th>RM Pasien</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = mysqli_query($koneksi, "SELECT * FROM `loket`");
                                                while ($hasil = mysqli_fetch_array($sql)) {
                                                ?>
                                                    <tr style="text-align: center;">
                                                        <td><?php echo $hasil['noantrian']; ?></td>
                                                        <td><?php echo $hasil['kelas']; ?></td>
                                                        <td>-</td>
                                                        <td><?php echo $hasil['waktu']; ?></td>
                                                        <td><?php echo $hasil['loket']; ?></td>
                                                        <td><button class="btn btn-success" onclick="panggil('Antrian Nomor <?php echo $hasil['noantrian']; ?> Dipanggil KeLoket <?php echo $hasil['loket']; ?>');">Panggil</button>
                                                        </td>
                                                        <td>-</td>
                                                        <td><?php echo $hasil['norm']; ?></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
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
        function panggil(text) {
            if (text.trim() !== "") {
                var kataKata = text.split(' ');
                for (var i = 0; i < kataKata.length; i++) {
                    setTimeout(function(kata) {
                        return function() {
                            var suara = new SpeechSynthesisUtterance(kata);
                            suara.lang = 'id-ID';
                            window.speechSynthesis.speak(suara);
                        };
                    }(kataKata[i]), i * 1000);
                }
            }
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