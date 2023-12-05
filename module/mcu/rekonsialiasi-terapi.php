<?php
$master = "RM";
$page = "Formulir Rekonsiliasi Terapi Dan Serah Terima Obat";
require 'head.php';
?>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table,
th,
td {
    border: 1px solid black;
}

th,
td {
    padding: 10px;
    text-align: center;
}

.center-text {
    vertical-align: middle;
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
                                            <div>
                                                <label class="form-label">Alamat</label>
                                                <textarea class="form-control" rows="7" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-12 text-end">
                                        <h6>Diisi Oleh Dokter / Perawat</h6>
                                    </div>
                                    <div class="col-sm-4 my-2">
                                        <label class="form-label">- Nama Lengkap Pasien</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">- Pasien Bersedia</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Ya</option>
                                            <option value="1">Menolak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-options"><a class="card-options-collapse" href="#"
                                        data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                        class="card-options-remove" href="" data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-2 my-2">
                                        <label class="form-label">- Nama Obat</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-1 my-2">
                                        <label class="form-label">- Dosis</label>
                                        <input class="form-control" placeholder="" type="number">
                                    </div>
                                    <div class="col-sm-2 my-2">
                                        <label class="form-label"> -Frekuensi</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-2 my-2">
                                        <label class="form-label">- Rute</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3 my-2">
                                        <label class="form-label">- Pemberian Waktu Terakhir </label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label">- Lanjut</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Ya</option>
                                            <option value="1">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 text-end">
                                        <button class="btn btn-success">Tambah</button>
                                    </div>
                                    <div class="col-sm-12 my-3">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="table-primary">
                                                    <tr class="center-text">
                                                        <th scope="col" rowspan="2">No</th>
                                                        <th scope="col" rowspan="2">Nama Obat</th>
                                                        <th scope="col" rowspan="2">Dosis</th>
                                                        <th scope="col" rowspan="2">Frekuansi</th>
                                                        <th scope="col" rowspan="2">Rute</th>
                                                        <th scope="col" rowspan="2">Pemberian Waktu Terakhir</th>
                                                        <th scope="col" colspan="2">Lanjut</th>
                                                        <th scope="col" rowspan="2">Perubahan Aturan Pakai</th>
                                                    </tr>
                                                    <tr class="center-text">
                                                        <th scope="col">Ya</th>
                                                        <th scope="col">Tidak</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <p>Pasien membawa obat dari luar UPT. RS. Khusus Mata Provinsi Sumatera Utara :
                                        </p>
                                        <p>Yang bertanda tangan dibawah ini :</p>
                                    </div>
                                    <div class="col-sm-3 my-2">
                                        <label class="form-label">Nama</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-4 my-2">
                                        <label class="form-label">Alamat</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3 my-2">
                                        <label class="form-label">No HP</label>
                                        <input class="form-control" placeholder="" type="number">
                                    </div>
                                    <div class="col-sm-2 my-2">
                                        <label class="form-label">Hubungan</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-12">
                                        <p>Dengan ini menyerahkan obat/alat Kesehatan yang kami bawa dari luar
                                            RS untuk digunakan sesuai merawat. Jika obat/alat kesehatan tersebut
                                            sudah habis,maka kami bersedia menggunakan obat/alat kesehatan dari
                                            RS</p>
                                        <p>Saya akan memenuhi segala ketentuan di UPT. RS. Khusus Mata Provinsi Sumatera
                                            Utara mengenai penggunaan dan pengembalian obat/alat Kesehatan sebagaimana
                                            yang dijelaskan oleh petugas.
                                            UPT. RS. Khusus Mata Provinsi Sumatera Utara tidak bertanggungjawab atas
                                            kejadian tidak diharapkan (KTD) akibat penggunaan Obatdan Alkes yang berasal
                                            dari luar UPT. RS. Khusus Mata Provinsi Sumatera Utara.
                                        </p>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4 text-center">
                                                <button class="btn btn-success">Pasien/Keluarga</button>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <button class="btn btn-success">Penerima Perawat</button>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <button class="btn btn-success">Penerima Farmasi</button>
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