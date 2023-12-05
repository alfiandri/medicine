<?php
$master = "Pemeriksaan";
$page = "ASSESMENT KHUSUS PASIEN TERMINAL";
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
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            Data
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="card-body">
                                                <div class="sm-2 row my-2">
                                                    <label class="col-sm-2 col-form-label">No - RM</label>
                                                    <div class="col-sm-5">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <input class="form-control" type="text" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row sm-2">
                                                    <label class="col-sm-2 col-form-label">Nama </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="row sm-2">
                                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                    <div class="col-sm-5">
                                                        <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                                            <div
                                                                class="form-check form-check-inline radio radio-primary">
                                                                <input class="form-check-input" id="pria" type="radio"
                                                                    name="kelamin" value="option1">
                                                                <label class="form-check-label mb-0" for="pria">Laki -
                                                                    laki<span class="digits"></span></label>
                                                            </div>
                                                            <div
                                                                class="form-check form-check-inline radio radio-primary">
                                                                <input class="form-check-input" id="wanita" type="radio"
                                                                    name="kelamin" value="option1">
                                                                <label class="form-check-label mb-0"
                                                                    for="wanita">Perempuan<span
                                                                        class="digits"></span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row sm-2">
                                                    <label class="col-sm-2 col-form-label">Tanggal Lahir </label>
                                                    <div class="col-sm-5">
                                                        <input type="date" class="form-control" value="12/05/1965">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row sm-2">
                                                    <label class="col-sm-2 col-form-label">Alamat </label>
                                                    <div class="col-sm-5">
                                                        <textarea class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row sm-2 my-2">
                                                    <label class="col-sm-2 col-form-label">Tanggal Pengisian </label>
                                                    <div class="col-sm-5">
                                                        <input type="date" class="form-control" value="12/05/1965">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Anamnesa
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="row sm-2">
                                                    <label class="col-sm-2 col-form-label">Keluhan Saat Ini</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="row sm-2 my-2">
                                                    <label class="col-sm-2 col-form-label">Apakah Ada Nyeri</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control"
                                                            placeholder="Lokasi Nyeri">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Pemeriksaan Fisik
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="row sm-2">
                                                    <label class="col-sm-2 col-form-label">Kesadaran GCS : </label>
                                                    <div class="col-sm-2">
                                                        <div class="input-group">
                                                            <input class="form-control" id="validationCustomUsername"
                                                                type="number" aria-describedby="inputGroupPrepend"
                                                                value="0">
                                                            <span class="input-group-text"
                                                                id="inputGroupPrepend">E</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="input-group">
                                                            <input class="form-control" id="validationCustomUsername"
                                                                type="number" aria-describedby="inputGroupPrepend"
                                                                value="0">
                                                            <span class="input-group-text"
                                                                id="inputGroupPrepend">M</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="input-group">
                                                            <input class="form-control" id="validationCustomUsername"
                                                                type="number" aria-describedby="inputGroupPrepend"
                                                                value="0">
                                                            <span class="input-group-text"
                                                                id="inputGroupPrepend">V</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row sm-2 gy-2">
                                                    <label class="col-sm-2 col-form-label">Tanda - Tanda Vital :
                                                    </label>
                                                    <div class="col-sm-2">
                                                        <label class="form-label" for="validationCustomUsername">TD
                                                        </label>
                                                        <div class="input-group">
                                                            <input class="form-control" id="validationCustomUsername"
                                                                type="number" aria-describedby="inputGroupPrepend"
                                                                value="0">
                                                            <span class="input-group-text"
                                                                id="inputGroupPrepend">mmHg</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label class="form-label" for="validationCustomUsername">HR
                                                        </label>
                                                        <div class="input-group">
                                                            <input class="form-control" id="validationCustomUsername"
                                                                type="number" aria-describedby="inputGroupPrepend"
                                                                value="0">
                                                            <span class="input-group-text"
                                                                id="inputGroupPrepend">x/menit</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label class="form-label" for="validationCustomUsername">RR
                                                        </label>
                                                        <div class="input-group">
                                                            <input class="form-control" id="validationCustomUsername"
                                                                type="number" aria-describedby="inputGroupPrepend"
                                                                value="0">
                                                            <span class="input-group-text"
                                                                id="inputGroupPrepend">x/menit</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <label class="form-label" for="validationCustomUsername">Suhu
                                                        </label>
                                                        <div class="input-group">
                                                            <input class="form-control" id="validationCustomUsername"
                                                                type="number" aria-describedby="inputGroupPrepend"
                                                                value="0">
                                                            <span class="input-group-text"
                                                                id="inputGroupPrepend">'C</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 my-2">
                                                        <label class="form-label">Skor Nyeri : NRS / WBFPS / CS</label>
                                                        <input class="form-control" placeholder="" type="text">
                                                    </div>
                                                    <div class="col-sm-3 offset-1">
                                                        <label class="col-form-label">Pemakaian Alat Bantu Hidup
                                                            Dasar</label>
                                                        <select class="form-select from-control btn-square">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                            aria-expanded="false" aria-controls="collapsefour">
                                            Psikososial dan Spiritual
                                        </button>
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-sm-12 row">
                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">- Keluarga memerlukan
                                                            rohaniawan</label>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <select id="rohani" class="form-select from-control btn-square"
                                                            onchange="muncul();">
                                                            <option value="0">Ya</option>
                                                            <option value="1">Tidak</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="pilihan" class="col-sm-12 row my-3">
                                                    <div class="col-sm-4 offset-3">
                                                        <select class="form-select from-control btn-square">
                                                            <option value="0">-Hubungi-</option>
                                                            <option value="1">BDI RSKM</option>
                                                            <option value="2">Bakor UMKRIS RSKM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <script>
                                                muncul = () => {
                                                    var select1 = document.getElementById('rohani');
                                                    var select2 = document.getElementById('pilihan');

                                                    if (select1.value == "0") {
                                                        select2.style.display = "block";
                                                    } else {
                                                        select2.style.display = "none";
                                                    }
                                                }
                                                </script>
                                                <div class="col-sm-12 my-2">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <label class="col-form-label">- Keluarga menginginkan
                                                                perawatan pasien di rumah
                                                                Bila ya, lakukan edukasi perawatan pasien di rumah
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 my-2">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <label class="col-form-label">- Keluarga menginginkan tenaga
                                                                kesehatan untuk perawatan di rumah
                                                                Bila ya, hubungi penyedia home care
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 my-2">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <label class="col-form-label">- Keluarga setuju untuk
                                                                dilakukan Resusitasi Jantung Paru
                                                                Bila ya, keluarga menandatangani informed consent
                                                                persetujuan tindakan
                                                                Bila tidak,keluarga menadatangani informed consent
                                                                penolakan tindakan
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-4 my-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 my-2">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <label class="col-form-label">- Keluarga meminta DNR
                                                                Bila ya, DPJP mengisi Form Perintah DNR dan Pasien /
                                                                Keluarga mengisi Surat Pernyataan Jangan Dilakukan
                                                                Resusitasi / DNR
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 text-end">
                                                    <a href="#"><button class="btn btn-outline-info">Tanda
                                                            Tangan</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- Page Sidebar Ends-->

            <!-- footer start-->
            <?php
            require 'footer.php';
            ?>
        </div>
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