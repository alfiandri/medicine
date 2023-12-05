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
                                <h3>Checklist Kriteria Masuk ICU</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">ICU</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No. Rawat</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="2023/06/02/000001">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Identitas Pasien</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="00001 NY.INDAH PUTRI (28 Th 12 Bl 8Hr)">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                        <input type="text" class="form-control" value="2010-05-14">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="Laki Laki">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">DPJP/Dokter Jaga/IGD</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="Putri">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="2023-12-2 07:12:20">
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    I.Prioritas I
                                </h6>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pasca operasi dengan gangguan nafas atau hipotensi</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Gagal nafas</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Gagal jantung dengan tanda bendungan paru</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Gangguan asam basa / elektrolit</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Gagal ginjal dengan tanda bendungan paru</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Syok karena perdarahan anafiaksis</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    II. Prioritas 2
                                </h6>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pasca operasi besar </label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kejang berulang</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Gangguan Kesadaran</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Dehidrasi berat</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Gangguan jalan nafas</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Arimia Jantung</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    III.Prioritas 3
                                </h6>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Penyakit Keganasan dengna metastasis</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pasien geriatrik dengan fungsi hidup sebelumnya minimal</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pasien dengan GCS 3</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pasien Jantung, Penyakit Paru Disertai komplikasi penyakit akut berat</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    IV.Kriteria Fisiologis Tanda Tanda Vital
                                </h6>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nadi dibawah 40 atau diatas 150 x/menit</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">SBP dibawah 80 mmHg atau 20 mmHg dibawah SBP pasien</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">MAP dibawha 60 mmHg</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">DBP diatas 120 mmHg</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">R diatas 35 x/menit</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    V.Kriteria Fisiologis Laboratorium
                                </h6>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Na < 100 megl </label>
                                                <select name="" class="form-select" id="">
                                                    <option value="">Tidak</option>
                                                </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">SBP 80 mg</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    VI.Kriteria Fisiologis Radiologi
                                </h6>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Perbedaan cerebovaslukar, SAh atau consoirn dengan gangguan kesadaran</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Ruptor organ dalam, kandung kemih hati</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <h6 class="text-danger">
                                    VII. Kriteria Fisiologis Klinis
                                </h6>
                                <hr>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pupi Ansiokor</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Obstruksi Jalan Nafas</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Anuria</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kejang Berulang</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Temponade Jantung</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Coma</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->

            <?php include("footer.php"); ?>
        </div>


</body>

</html>