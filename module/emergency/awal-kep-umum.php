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
                                <h3>Awal Keperawatan Umum</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">Awal Keperawatan Umum</li>
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
                                    I. Keadaan Umum
                                </h6>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">TD (mmHg)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nadi (x/menit)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">RR (x/menit)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Suhu (C)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">GCS (E,V,M)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    II. Status Nutrisi
                                </h6>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">BB (Kg)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">TB (cm)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">BMI (Kg/m2)</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    III. Riwayat Kesehatan
                                </h6>

                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Keluhan Utama</label>
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
                                        <label for="exampleFormControlInput1" class="form-label">Riwayat Pengobatan</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Riwayat Alergi</label>
                                        <input type="text" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    IV. Fungsional
                                </h6>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Alat Bantu</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">TAK</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Sebutkan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Prothesa</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Normal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Sebutkan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Cacat Fisik</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Aktivitas Kehidupan Sehari Hari (ADL)</label>
                                        <select name="" id="" class="form-select">
                                            <option value="">Mandiri</option>
                                        </select>
                                    </div>
                                </div>

                                <hr>
                                <h6 class="text-danger">
                                    V. Riwayat Psikologis - Sosial - Ekonomi- Budaya - Spiritual
                                </h6>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">a. Kondisi Psikologis</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak ada Masalah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">b. Gangguan Jiwa di Masa Lalu</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">c. Status Pernikahan</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Belum Menikah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">d. Adakah Perilaku</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Perilaku Kekerasan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Dilaporkan Ke</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Sebutkan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">e. Hubungan Pasien Dengan Anggota Keluarga</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Harmonis</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">f. Pekerjaan</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Guru</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">g. Pembayaran</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Umum</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">h. Tinggal Dengan</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Sendiri</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Sebutkan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">i. Bahasa Sehari Hari</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">j. Pendidikan</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">SMK</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">k. Agama</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Islam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">l. Kepercayaan / Budaya</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak Ada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Sebutkan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">m. Pendidikan PJ</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">S1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Sebutkan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">n. Edukasi Diberikan Kepada</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Pasien</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Sebutkan</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    VI. Penilaian Resiko Jatuh (Get Up And Go)
                                </h6>
                                <p>a. Cara Berjalan</p>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">1. Tidak seimbang / sempoyongan / limbung </label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">2. Jalan dengan alat bantu (kruk, tripot, kursi roda, orang lain) </label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">b. Menopang saat akan duduk, tampak memegang pinggiran kursi atau meja / benda lain sebagai penopang </label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Hasil </label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak berisko (tidak ditemukan a dan b)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Dilaporkan kepada dokter ? </label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jam dilaporkan </label>
                                        <input type="time" class="form-control" name="" id="">
                                    </div>
                                </div>
                                <hr>
                                <h6 class="text-danger">
                                    VII. Skrining Gizi
                                </h6>
                                <div class="col-10">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">a. Apakah ada penurunan berat badan yang tidak diinginkan selama 6 bulan terakhir ?</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nilai</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">0</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">b. Apakah nafsu makan berkurang karena tidak nafsu makan ?</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nilai</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">0</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <div class="mb-3">

                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Total Nilai</label>
                                        <input type="text" class="form-control">
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