<?php
$master = "RM";
$page = "OPERASI STRABISMUS ";
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
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Tanggal Operasi</label>
                                        <input class="form-control" placeholder="" type="date">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Area Operasi</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">OS</option>
                                            <option value="1">OD</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Jam Mulai Operasi</label>
                                        <input class="form-control" placeholder="" type="time">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Jenis Tindakan Pembedahan</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Diagnosis Pre Operasi</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Diagnosis Post Operasi</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">DPJP Bedah</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Asisten</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label">Selesai Operasi</label>
                                        <input class="form-control" placeholder="" type="time">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Perawat Instrumenr</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Jenis Anestesi</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Anestesi Umum</option>
                                            <option value="1">Anestesi Blok</option>
                                            <option value="2">Lokal</option>
                                            <option value="3">Sedasi</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">DPJP Anestesi</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">A/ Anteseptik</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Pavidon iodine</option>
                                            <option value="1">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Spekulum</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Wire</option>
                                            <option value="1">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Force Duction Test</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Ya</option>
                                            <option value="1">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Insisi Konjungtiva</label>
                                        <select class="form-select from-control btn-square" id="force" onchange="a();">
                                            <option value="0">Limbah</option>
                                            <option value="1">Culdesac</option>
                                            <option value="2">Lokasi</option>
                                            <option value="3">Lain</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3" id="lokasi">
                                        <label class="col-form-label">Lokasi</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3" id="lain">
                                        <label class="col-form-label">Lain</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <script>
                                    var select2 = document.getElementById('lokasi');
                                    var select3 = document.getElementById('lain');
                                    select2.style.display = "none";
                                    select3.style.display = "none";
                                    a = () => {
                                        var select1 = document.getElementById('force');
                                        if (select1.value == "2") {
                                            select2.style.display = "block";
                                            select3.style.display = "none";
                                        } else if (select1.value == "3") {
                                            select3.style.display = "block";
                                            select2.style.display = "none";
                                        } else {
                                            select2.style.display = "none";
                                            select3.style.display = "none";
                                        }
                                    }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h5>Ressensi / Resection / Myotomy /Tuck / Lainnya</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Benang Otot</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">6.0 Double armed vicryl</option>
                                            <option value="1">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Jahitan Konjungtiva</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">8.0 Vicryl</option>
                                            <option value="1">Interrupted (jahitan)</option>
                                            <option value="2">Continue</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Pendarahan</label>
                                        <select class="form-select from-control btn-square" id="pendarahan"
                                            onchange="b();">
                                            <option value="0">Ya</option>
                                            <option value="1">Tidak</option>
                                            <option value="2">Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 my-1" id="jpendarahan">
                                        <label class="form-label" for="validationCustomUsername">Jumlah Pendarahan
                                        </label>
                                        <div class="input-group">
                                            <input class="form-control" id="validationCustomUsername" type="number"
                                                aria-describedby="inputGroupPrepend" value="0">
                                            <span class="input-group-text" id="inputGroupPrepend">CC</span>
                                        </div>
                                    </div>
                                    <script>
                                    var select5 = document.getElementById('jpendarahan');
                                    select5.style.display = "none";
                                    b = () => {
                                        var select4 = document.getElementById('pendarahan');
                                        if (select4.value == "2") {
                                            select5.style.display = "block";
                                        } else {
                                            select5.style.display = "none";
                                        }
                                    }
                                    </script>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Komplikasi</label>
                                        <select class="form-select from-control btn-square" id="komplikasi"
                                            onchange="c();">
                                            <option value="0">Tidak</option>
                                            <option value="1">Ya</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3" id="jya">
                                        <label class="col-form-label">Lain</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <script>
                                    var select7 = document.getElementById('jya');
                                    select7.style.display = "none";
                                    c = () => {
                                        var select6 = document.getElementById('komplikasi');
                                        if (select6.value == "1") {
                                            select7.style.display = "block";
                                        } else {
                                            select7.style.display = "none";
                                        }
                                    }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h6>Laporan Operasi (Tambahan)</h6>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Pemeriksaan PA</label>
                                        <select class="form-select from-control btn-square" id="pemeriksaan"
                                            onchange="aksi();">
                                            <option value="0">Ya Jenis Spesimen</option>
                                            <option value="1">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3" id="hasilpemeriksaan">
                                        <label class="col-form-label">Pemeriksaan...</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <script>
                                    var select9 = document.getElementById('hasilpemeriksaan');
                                    select9.style.display = "none";
                                    aksi = () => {
                                        var select8 = document.getElementById('pemeriksaan');
                                        if (select8.value == "1") {
                                            select9.style.display = "block";
                                        } else {
                                            select9.style.display = "none";
                                        }
                                    }
                                    </script>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Gambaran Pre Operasi</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Deskripsi Tumor</option>
                                            <option value="1">Deskripsi defek</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 my-3">
                                        <h5>GAMBAR / LAPORAN OPERASI</h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Komplikasi dan penanganannya</label>
                                        <select class="form-select from-control btn-square" id="komplikasi2"
                                            onchange="komp();">
                                            <option value="0">Tidak</option>
                                            <option value="1">Ya</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6" id="jikaya">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Jumlah</label>
                                                <input class="form-control" placeholder="" type="number">
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Dilakukan Transfusi</label>
                                                <input class="form-control" placeholder="" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                    var select10 = document.getElementById('jikaya');
                                    select10.style.display = "none";
                                    komp = () => {
                                        var select11 = document.getElementById('komplikasi2');
                                        if (select11.value == "1") {
                                            select10.style.display = "block";
                                        } else {
                                            select10.style.display = "none";
                                        }
                                    }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h6>TATALAKSANA PASCA BEDAH</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Kontrol Nadi / tensi/ pernafasan / suhu /</label>
                                        <textarea class="form-control" rows="2" placeholder=""></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Puasa</label>
                                        <textarea class="form-control" rows="2" placeholder=""></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Drain</label>
                                        <textarea class="form-control" rows="2" placeholder=""></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Infus</label>
                                        <textarea class="form-control" rows="2" placeholder=""></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Obat-obatan</label>
                                        <textarea class="form-control" rows="2" placeholder=""></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Ganti Balut</label>
                                        <textarea class="form-control" rows="2" placeholder=""></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Lain - lain</label>
                                        <textarea class="form-control" rows="2" placeholder=""></textarea>
                                    </div>
                                    <div class="col-sm-3 my-2">
                                        <label class="col-form-label">Tanggal</label>
                                        <input class="form-control" placeholder="Tanggal" type="date">
                                    </div>
                                    <div class="col-sm-3 my-2">
                                        <label class="col-form-label">Jam</label>
                                        <input class="form-control" placeholder="Jam" type="time">
                                    </div>
                                    <div class="col-sm-6 text-center my-3">
                                        <button class="btn btn-success">Tanda Tangan DPJP I</button>
                                    </div>
                                    <div class="col-sm-6 text-center my-3">
                                        <button class="btn btn-success">Tanda Tangan DPJP II</button>
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