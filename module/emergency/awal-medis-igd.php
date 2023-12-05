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
                                <h3>Awal Medis IGD</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">Awal Medis IGD</li>
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
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Petugas</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="Putri">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="2023-12-2 07:12:20">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Informasi Didapat Dari</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Autoanamnesis</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    I. Riwayat Kesehatan Pasien
                                </h6>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Keluhan Utama</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Riwayat Penyakit Sekarang</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Riwayat Penyakit Keluarga</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Riwayat Penyakit Dahulu</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Riwayat Penggunaan Obat</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Riwayat Alergi</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>

                                <hr>
                                <h6 class="text-danger">
                                    II. Pemeriksaan Fisik
                                </h6>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kedaaan Umum</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Sehat</option>
                                            <option value="">Sakit Ringan</option>
                                            <option value="">Sakit Sedang</option>
                                            <option value="">Sakit Berat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kesadaran</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Compos Mentis</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">GCS (E,V,M)</label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">TB (cm)</label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">BB (Kg)</label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">TD (mmHg)</label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nadi (x/menit)</label>
                                        < <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">RR (x/menit)</label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Suhu (c)</label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">SpO2 (%)</label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <hr>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kepala</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Normal</option>
                                            <option value="">Abnormal</option>
                                            <option value="">Tidak diperiksa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Thoraks</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Normal</option>
                                            <option value="">Abnormal</option>
                                            <option value="">Tidak diperiksa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Mata</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Normal</option>
                                            <option value="">Abnormal</option>
                                            <option value="">Tidak diperiksa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Abdomen</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Normal</option>
                                            <option value="">Abnormal</option>
                                            <option value="">Tidak diperiksa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Giti & Mulut</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Normal</option>
                                            <option value="">Abnormal</option>
                                            <option value="">Tidak diperiksa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Genital & Anus</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Normal</option>
                                            <option value="">Abnormal</option>
                                            <option value="">Tidak diperiksa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Leher</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Normal</option>
                                            <option value="">Abnormal</option>
                                            <option value="">Tidak diperiksa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Ekstermitas</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Normal</option>
                                            <option value="">Abnormal</option>
                                            <option value="">Tidak diperiksa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Catatan</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    III. Status Lokalis
                                </h6>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    IV. Pemeriksaan Penunjang
                                </h6>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">EKG</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Radiologi</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Laborat</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    V. Diagnosa / Asesmen
                                </h6>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Diagnosa</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    VI. Tatalaksana
                                </h6>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tatalaksana</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
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