<head>
    <base href="../">
    <?php include("head.php"); ?>
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <?php include("header.php"); ?>
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <?php include("sidebar.php"); ?>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3>Penilaian Tambahan Resiko Melarikan Diri</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">Tambahan Melarikan Diri</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="edit-profile">
                        <div class="row">
                            <div class="col-sm-12 col-xl-12 xl-100">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-2 tabs-responsive-side">
                                                <div class="nav flex-column nav-pills border-tab nav-left" id="v-pills-tab" role="tablist" aria-orientation="vertical"><a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a><a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Faktor Statik</a><a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Faktor Dinamis</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                        <div class="file-content">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <div class="media">
                                                                        <div class="media-body text-end">
                                                                            <div class="btn btn-outline-primary ms-2"><i data-feather="upload"> </i>Upload Berkas</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body file-manager">
                                                                    <h4 class="mb-3">Susi Susanti</h4>
                                                                    <h6>RM : 129222</h6>
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Agama</label>
                                                                                <input class="form-control" type="text" placeholder="Islam" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-3">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Status Menikah</label>
                                                                                <input class="form-control" type="text" placeholder="Menikah" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Pendidikan</label>
                                                                                <input class="form-control" type="email" placeholder="-" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Tempat Lahir</label>
                                                                                <input class="form-control" type="text" placeholder="Medan" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-6">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Tanggal Lahir</label>
                                                                                <input class="form-control" type="text" placeholder="12/3/19870" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Nama Ibu Kandung</label>
                                                                                <input class="form-control" type="text" placeholder="Dela Susanti" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-4">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Bahasa</label>
                                                                                <input class="form-control" type="text" placeholder="Indonesia" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-6 col-md-8">
                                                                            <div class="mb-3">
                                                                                <label class="form-label">Cacat Fisik</label>
                                                                                <input class="form-control" type="number" placeholder="-" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div>
                                                                                <label class="form-label">Alamat</label>
                                                                                <textarea class="form-control" rows="5" placeholder="Jl. Medan - Tebing Tinggi, Desa Suka, Kab. Deli Serdang. Sumatera Utara" disabled></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                        <form class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title mb-0">Faktor Statik</h4>
                                                                <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Riwayat Melarikan Diri</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Riwayat Penolakan Pengobatan</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Usia Dibawah 35 Tahun</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Laki - Laki</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Diaknosis Skizofreria</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Belum Menikah</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Riwayat Penggunaan NAPZA</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Diagnosis Gangguan Kepribadian</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Riwayat Kriminal</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer text-end">
                                                                <button class="btn btn-primary" type="submit">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                        <form class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title mb-0">Faktor Dinamis </h4>
                                                                <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Anti Treatment/Insight
                                                                                Jelek</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Penggunaan NAPZA</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Kebosanan</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Perintah Halusinasi Melarikan
                                                                                Diri</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Kehilangan Kontrol Diri</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Perilaku Seksual Yang TIdak Wajar
                                                                            </label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Ketakutan Perawat</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Usia Dibawah 35 Tahun</label>
                                                                            <select class="form-control btn-square">
                                                                                <option value="0">Tidak</option>
                                                                                <option value="0">Tidak Tau</option>
                                                                                <option value="2">Ya</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div>
                                                                            <label class="form-label">Faktor - faktor Pencegahan :
                                                                            </label>
                                                                            <textarea class="form-control" rows="5" placeholder="-"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer text-end">
                                                                <button class="btn btn-primary" type="submit">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2021 © Cuba theme by pixelstrap </p>
                        </div>
                    </div>
                </div>
            </footer>
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
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>