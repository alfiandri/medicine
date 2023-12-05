<head>
    <base href="../">
    <?php
    $master = "Pemeriksaan";
    $page = "Kajian Awal Pasien";
    require 'head.php';
    ?>

</head>

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
                    <div class="col-md-12 project-list">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i data-feather="target"></i>Data Pasien</a></li>
                                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><i data-feather="check-circle"></i>Active</a></li>
                                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="alert-circle"></i>Inactive</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-0 me-0"></div><a class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#add" href="javascript:;"> <i data-feather="plus-square"> </i>Tambah Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="">
                        <div class="card">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Data
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
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
                                                            <div class="form-check form-check-inline radio radio-primary">
                                                                <input class="form-check-input" id="pria" type="radio" name="kelamin" value="option1">
                                                                <label class="form-check-label mb-0" for="pria">Laki -
                                                                    laki<span class="digits"></span></label>
                                                            </div>
                                                            <div class="form-check form-check-inline radio radio-primary">
                                                                <input class="form-check-input" id="wanita" type="radio" name="kelamin" value="option1">
                                                                <label class="form-check-label mb-0" for="wanita">Perempuan<span class="digits"></span></label>
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Data Sosial
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <h6>Saya yang bertanda tangan dibawah ini, bertindak untuk diri
                                                sendiri
                                                / orang tua /istri / suami /anak* saya , yaitu:</h6>
                                            <br>
                                            <div class="row">
                                                <div class="row sm-12">
                                                    <label class="col-sm-2 col-form-label">Nama Pasien
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row sm-12 my-2">
                                                    <label class="col-sm-2 col-form-label">Nama Ayah
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row sm-12 my-2">
                                                    <label class="col-sm-2 col-form-label">Nama Ibu
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row sm-12 my-2">
                                                    <label class="col-sm-2 col-form-label">Tanggal Lahir
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row sm-2">
                                                    <label class="col-sm-2 col-form-label">Alamat Tetap</label>
                                                    <div class="col-sm-5">
                                                        <textarea class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row sm-12 my-2">
                                                    <label class="col-sm-2 col-form-label">NIK
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row sm-12 my-2">
                                                    <label class="col-sm-2 col-form-label">Telepon
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row sm-12 my-2">
                                                    <label class="col-sm-2 col-form-label">Telepon di Medan
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <hr>
                                                <p>Keluarga Dekat Yang Dapat di Hubungi :</p>
                                                <div class="row sm-12 my-2">
                                                    <label class="col-sm-2 col-form-label">Nama
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row sm-2">
                                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                                    <div class="col-sm-5">
                                                        <textarea class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="row sm-12 my-2">
                                                    <label class="col-sm-2 col-form-label">Telepon
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="col-md-3">
                                                    <select class="form-select from-control btn-square">
                                                        <option value="0">--Status Kawin--</option>
                                                        <option value="1">Belum Nikah</option>
                                                        <option value="2">Menikah</option>
                                                        <option value="3">Janda / Duda</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-select from-control btn-square">
                                                        <option value="0">--Agama--</option>
                                                        <option value="1">Islam</option>
                                                        <option value="2">Protestan</option>
                                                        <option value="3">Katolik</option>
                                                        <option value="4">Hindu</option>
                                                        <option value="5">Budha</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-select from-control btn-square">
                                                        <option value="0">--Kebangsaan--</option>
                                                        <option value="1">Warga Negara Indonesia</option>
                                                        <option value="2">Warna Negara Asing</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-select from-control btn-square">
                                                        <option value="0">--Pendidikan Terakhir--</option>
                                                        <option value="1">SD</option>
                                                        <option value="2">SMP</option>
                                                        <option value="3">SLTP</option>
                                                        <option value="4">SLTA</option>
                                                        <option value="5">Dipolma</option>
                                                        <option value="6">S1/S2/S3</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Pekerjaan
                                                    </label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Surat Rujukan
                                                    </label>
                                                    <input type="text" class="form-control" placeholder="Tulis Instansi Yang Merujuk">
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Jenis Pembayaran</label>
                                                    <select class="form-select from-control btn-square">
                                                        <option value="0">Umum</option>
                                                        <option value="1">BPJS Kesehatan</option>
                                                        <option value="2">BPJS Ketenagakerjaan</option>
                                                        <option value="3">Jamsoskes</option>
                                                        <option value="4">Lainnya</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">No Kartu BPJS
                                                    </label>
                                                    <input type="number" class="form-control" placeholder="Tulis Instansi Yang Merujuk">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Riwayat Medis
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label">Riwayat Penyakit
                                                    </label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-form-label">Obat Yang Digunakan Saat
                                                        Ini
                                                    </label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-form-label">Pernah Di Operasi
                                                    </label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            Skrining Awal
                                        </button>
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="col-form-label">Keluhan Utama
                                                    </label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-form-label">Adakah Alergi
                                                    </label>
                                                    <input type="text" class="form-control" value="Tidak">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="col-form-label">Apakah Sedang Batuk</label>
                                                    <select class="form-select from-control btn-square">
                                                        <option value="0">Tidak</option>
                                                        <option value="1">Beri Masker</option>
                                                        <option value="2">Ya</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Riwayat Jatuh 3 Bulan Terakhir</label>
                                                    <select class="form-select from-control btn-square">
                                                        <option value="0">Tidak</option>
                                                        <option value="1">Ya</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Perhatikan Cara Berjalan</label>
                                                    <select class="form-select from-control btn-square">
                                                        <option value="0">Tegap</option>
                                                        <option value="1">Sempoyongan</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Adakah Nyeri Saat Ini</label>
                                                    <select class="form-select from-control btn-square">
                                                        <option value="0">Tidak</option>
                                                        <option value="1">Ya</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Penggunaan Alat Bantu</label>
                                                    <select class="form-select from-control btn-square">
                                                        <option value="0">Alat Bantu Dengar</option>
                                                        <option value="1">Alat Bantu Penglihatan</option>
                                                        <option value="2">Kursi Roda</option>
                                                        <option value="3">Tongkat</option>
                                                        <option value="4">Tidak Ada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <h6>Jenis pelayanan yang dipilih tidak dapat diubah pada satu episode
                                                pelayanan atau pada pelayanan hari yang sama.</h6>
                                            <br>
                                            <div class="row sm-2">
                                                <label class="col-sm-2 col-form-label"><b>Nama Dokter</b></label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 offset-2">
                                                <p>Menyatakan data yang saya isikan adalah benar, saya paham dan setuju
                                                    mengenai ketentuan yang telah dituliskan pada lembar identifikasi
                                                    ini.</p>
                                            </div>
                                            <div class="col-sm-3 offset-9">
                                                <a href="#"><button class="btn btn-outline-info">Tanda Tangan
                                                        Dokter</button></a>
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
    <!-- Modal -->
    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No.Undang Undang</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tahun</label>
                        <input type="year" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tentang</label>
                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
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