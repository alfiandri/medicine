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
            <!-- Page Sidebar Start-->
            <?php include("sidebar.php"); ?>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3>Penilaian Tambahan Pasien Geriatri</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">Tambahan Pasien Geriatri</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="f1" method="post">
                                        <div class="f1-steps">
                                            <div class="f1-progress">
                                                <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3"></div>
                                            </div>
                                            <div class="f1-step active">
                                                <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                                <p>Data</p>
                                            </div>
                                            <div class="f1-step">
                                                <div class="f1-step-icon"><i class="fa fa-plus"></i></div>
                                                <p>Riwayat Kesehatan</p>
                                            </div>
                                            <div class="f1-step">
                                                <div class="f1-step-icon"><i class="fa fa-heart"></i></div>
                                                <p>Penilaian Kualitas Hidup</p>
                                            </div>
                                        </div>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="f1-first-name">No Rawat</label>
                                                    <input class="form-control" id="f1-first-name" type="text" name="f1-first-name" value="2019/234/12/00000001" disabled>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="f1-first-name">NRM</label>
                                                    <input class="form-control" id="f1-first-name" type="text" name="f1-first-name" value="123123123" disabled>
                                                </div>
                                                <div class="col-md-5">
                                                    <label for="f1-first-name">Nama Pasien</label>
                                                    <input class="form-control" id="f1-first-name" type="text" name="f1-first-name" value="Susi Susila Manalu" disabled>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="f1-first-name">Tanggal Lahir</label>
                                                    <input class="form-control" id="f1-first-name" type="text" name="f1-first-name" value="12/05/1976" disabled>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label for="f1-first-name">Kd. Dokter</label>
                                                    <input class="form-control" id="f1-first-name" type="text" name="f1-first-name" value="D000001">
                                                </div>
                                                <div class="col-md-5">
                                                    <label for="f1-first-name">Nama Dokter</label>
                                                    <input class="form-control" id="f1-first-name" type="text" name="f1-first-name" value="Dr. Sulaiman">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="f1-first-name">Jenis Kelamin</label>
                                                    <input class="form-control" id="f1-first-name" type="text" name="f1-first-name" value="Perempuan" disabled>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="f1-first-name">Tanggal :</label>
                                                    <div class="input-group date" id="dt-local" data-target-input="nearest">
                                                        <input class="form-control datetimepicker-input digits" type="text" data-target="#dt-local">
                                                        <div class="input-group-text" data-target="#dt-local" data-toggle="datetimepicker"><i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="f1-buttons">
                                                <button class="btn btn-primary btn-next" type="button">Next</button>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="card">
                                                <h5 class="card-header">
                                                    Riwayat Kesehatan
                                                </h5>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Kondisi Saat Masuk</label>
                                                            <select class="form-control btn-square">
                                                                <option value="0">Mandiri</option>
                                                                <option value="1">Kursi Roda</option>
                                                                <option value="2">Dipapah</option>
                                                                <option value="3">Tempat Tidur</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <label for="f1-first-name">-</label>
                                                            <input class="form-control" id="f1-first-name" type="text" name="f1-first-name" placeholder=".">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="form-label">Anamnesis</label>
                                                            <select class="form-control btn-square">
                                                                <option value="0">Autoanamnesis</option>
                                                                <option value="1">Alloanamnesis</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="form-label">Asal Masuk</label>
                                                            <select class="form-control btn-square">
                                                                <option value="0">IGD</option>
                                                                <option value="1">Kamar Bersalin</option>
                                                                <option value="2">Klinik</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <h5 class="card-title">Riwayat Immunokompromais</h5>
                                                    <p class="card-text">Gangguan immunodefisiensi adalah kondisi ketika kekebalan tubuh terganggu, sehingga tidak bisa melawan infeksi dan penyakit. Jenis gangguan ini dapat membuat tubuh mudah terinfeksi oleh virus dan bakteri. Gangguan ini bisa dimiliki sejak lahir (primer) atau didapatkan di kemudian hari (sekunder). </p>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <p style="font-size: 16px;">- Infeksi Telinga Baru Sebanyak 8
                                                                (Delapan)
                                                                Kali Atau Lebih
                                                                Dalam
                                                                Setahun Dr. Sulaiman</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <p style="font-size: 16px;">- Infeksi Berat Pada Sinus Sebanyak 2
                                                                (Dua) Kali Atau Lebih Dalam Setahun</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <p style="font-size: 16px;">- Penggunaan Antibiotik Tanpa Dampak
                                                                Selama 2 (Dua) Bulan Atau Lebih</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <p style="font-size: 16px;">- Pneumonia Sebanyak 2 (Dua) Kali Atau
                                                                Lebih Dalam Setahun</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <p style="font-size: 16px;">- Adanya Abses Berulang Pada Kulit Atau
                                                                Organ Lainnya</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <p style="font-size: 16px;">- Adanya Sariawan Yang Menetap Atau Luka
                                                                Pada Kulit</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <p style="font-size: 16px;">- Memerlukan Antibiotik Intravena
                                                                Untuk Infeksi</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <p style="font-size: 16px;">- Terdapat 2 (Dua) Atau Lebih Infeksi
                                                                Dalam (Misalnya : Miningtis, Osteomielitis, Selulitis, Sepsis)
                                                            </p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <p style="font-size: 16px;">- Adanya Riwayat Keluarga Terhadap
                                                                Immunodefisensi Primer
                                                            </p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <p style="font-size: 16px;">- Adanya Jenis kanker (Misalnya :
                                                                Serkoma Kaposi Atau Limfoma Non+Hodgins)</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <p style="font-size: 16px;">- Adanya Infeksi Oportunistik (Misalnya
                                                                : Pneumonia "Pneumovystis Carinii" Atau Infeksi Jamur Berulang)
                                                            </p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>

                                            <div class="f1-buttons">
                                                <button class="btn btn-primary btn-previous" type="button">Previous</button>
                                                <button class="btn btn-primary btn-next" type="button">Next</button>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="card">
                                                <h5 class="card-header">Penilaian Kualitas Hidup</h5>
                                                <div class="card-body">
                                                    <h5 class="card-title">Kualitas Hidup Dengan EQ5D</h5>
                                                    <p class="card-text">
                                                        ukuran standar kualitas hidup yang berhubungan dengan kesehatan yang dikembangkan oleh Grup EuroQol untuk menyediakan kuesioner generik sederhana untuk digunakan dalam penilaian klinis dan ekonomi serta survei kesehatan populasi.
                                                        <br>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <p style="font-size: 16px;">Perawatan Diri Sendiri : </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak Mempunyai Kesulitan Dalam Perawatan Diri
                                                                    Sendiri</option>
                                                                <option value="1">Mengalami Kesulitan Untuk Membasuh Badan,
                                                                    Mandi Atau Berpakaian
                                                                </option>
                                                                <option value="2">Tidak Mampu Membasuh Badan, Mandi/Berpakaian
                                                                    Sendiri</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <p style="font-size: 16px;">Mobilitas : </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak Mempunyai Masalah Untuk Berjalan
                                                                </option>
                                                                <option value="1">Ada Masalah Untuk Berjalan
                                                                </option>
                                                                <option value="2">Hanya Mampu Berbaring</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <p style="font-size: 16px;">Aktifitas Sehari-hari : </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak Mempunyai Kesulitan Dalam Melaksanakan
                                                                    Kegiatan Sehari-hari</option>
                                                                <option value="1">Mempunyai Keterbatasan Dalam Melaksanakan
                                                                    Keiatan Sehari-hari
                                                                </option>
                                                                <option value="2">Tidak Mampu Melaksanakan Kegiatan Sehari-hari
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <p style="font-size: 16px;">Nyeri/Tidak Nyaman : </p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak Mempunyai Kesulitan Dalam Perawatan Diri
                                                                    Sendiri</option>
                                                                <option value="1">Suka MerasakanAgak Nyeri/Agak Kurang Nyaman
                                                                </option>
                                                                <option value="2">Menderita Karena Keluhan Rasa Nyeri/TIdak
                                                                    Nyaman</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    </p>
                                                    <br>
                                                    <h5 class="card-title">Pola Aktifitas Dan Istirahat</h5>
                                                    <p class="card-text">
                                                        Aktivitas dan istirahat merupakan suatu kebutuhan dasar individu, setiap individu memiliki irama atau pola dalam melakukan aktivitas
                                                        <br>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <p style="font-size: 16px;">Istirahat/Tidur : </p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Insomnia
                                                                </option>
                                                                <option value="2">Lainnya</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input class="form-control" id="f1-first-name" type="text" name="f1-first-name">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <p style="font-size: 16px;">Penggunaan Obat Tidur : </p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input class="form-control" id="f1-first-name" type="text" name="f1-first-name">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <p style="font-size: 16px;">Olahraga : </p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="form-select from-control btn-square">
                                                                <option value="0">Tidak</option>
                                                                <option value="1">Ya </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input class="form-control" id="f1-first-name" type="text" name="f1-first-name">
                                                        </div>
                                                    </div>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="f1-buttons">
                                                <button class="btn btn-primary btn-previous" type="button">Previous</button>
                                                <button class="btn btn-primary btn-submit" type="submit">Simpan</button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>