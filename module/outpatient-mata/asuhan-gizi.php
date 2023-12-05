<?php
$master = "RM";
$page = "Assesmen Lanjutan Asuhan Gizi";
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
                                            <label class="form-label">Alamat</label>
                                            <textarea class="form-control" rows="7" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label class="col-form-label">Tanggal Lahir</label>
                                        <input class="form-control" placeholder="" type="date">
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label">Pukul / Jam</label>
                                        <input class="form-control" placeholder="" type="time">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Unit Kerja</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-5">
                                        <label class="col-form-label">Diagnosis Medis</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-12 my-3">
                                        <h6>HASIL SKRINING GIZI DENGAN MALNUTRITION SCREENING TOOL (MST) </h6>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="row">
                                            <p>A. Nilai 0-1 Malnutrisi Rendah</p>
                                            <p>B. Nilai 2-3 Malnutrisi Sedang</p>
                                            <p>C. Nilai 4-5 Malnutrisi Tinggi</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label">Jumlah Skor :</label>
                                        <input class="form-control" placeholder="" type="number" min="0" max="5"
                                            id="nilai">
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">Kategori</label>
                                        <input class="form-control" type="text" id="hasil">
                                    </div>
                                    <script>
                                    var nilai = document.getElementById('nilai');
                                    var hasil = document.getElementById('hasil');
                                    nilai.addEventListener('input', function() {
                                        var angka = parseInt(nilai.value);
                                        if (angka >= 0 && angka <= 1) {
                                            hasil.value = "Malnutrisi Rendah";
                                        } else if (angka >= 2 && angka <= 3) {
                                            hasil.value = "Malnutrisi Sedang";
                                        } else {
                                            hasil.value = "Malnutrisi Tinggi";
                                        }
                                    })
                                    </script>
                                    <div class="col-sm-12 my-3 text-center">
                                        <h6>Asesmen Gizi</h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-2 my-3">
                                                <p>Antropometri</p>
                                            </div>
                                            <div class="row col-sm-9">
                                                <div class="col-sm-3">
                                                    <label class="form-label" for="validationCustomUsername">BB
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="validationCustomUsername"
                                                            type="number" aria-describedby="inputGroupPrepend"
                                                            value="0">
                                                        <span class="input-group-text" id="inputGroupPrepend">Kg</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-label" for="validationCustomUsername">TB
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="validationCustomUsername"
                                                            type="number" aria-describedby="inputGroupPrepend"
                                                            value="0">
                                                        <span class="input-group-text" id="inputGroupPrepend">Cm</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-label" for="validationCustomUsername">IMT
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="validationCustomUsername"
                                                            type="number" aria-describedby="inputGroupPrepend"
                                                            value="0">
                                                        <span class="input-group-text"
                                                            id="inputGroupPrepend">Kg/m2</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-label" for="validationCustomUsername">LLA
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="validationCustomUsername"
                                                            type="number" aria-describedby="inputGroupPrepend"
                                                            value="0">
                                                        <span class="input-group-text" id="inputGroupPrepend">Cm</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 my-2">
                                                    <label class="form-label" for="validationCustomUsername">BB Ideal
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control" id="validationCustomUsername"
                                                            type="number" aria-describedby="inputGroupPrepend"
                                                            value="0">
                                                        <span class="input-group-text" id="inputGroupPrepend">Kg</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Status Gizi</label>
                                                    <input class="form-control" placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label">Biokimia</label>
                                                <textarea class="form-control" rows="2" placeholder=""></textarea>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label">Klinik/Fisik</label>
                                                <textarea class="form-control" rows="2" placeholder=""></textarea>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label">Riwayat Gizi</label>
                                                <textarea class="form-control" rows="2" placeholder=""></textarea>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label">Pola Makan</label>
                                                <textarea class="form-control" rows="2" placeholder=""></textarea>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="col-form-label">Alergi Makanan</div>
                                                <select class="js-example-basic-hide-search col-sm-12"
                                                    multiple="multiple">
                                                    <optgroup label="Developer">
                                                        <option value="0">Telur</option>
                                                        <option value="1">Susu Sapi</option>
                                                        <option value="2">Kacang Kedelai</option>
                                                        <option value="3">Gandum</option>
                                                        <option value="4">Udang</option>
                                                        <option value="5">Ikan</option>
                                                        <option value="6">Hazelnut/almond</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 my-3 text-end">
                                                <button class="btn btn-success">Simpan</button>
                                            </div>
                                        </div>
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
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>
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