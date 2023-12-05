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
                                <h3>EWS Neonatus</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">EWS Neonatus</li>
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
                                <hr>
                                <h6>Parameter</h6>
                                <div class="col-5">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">1. Pernapasan</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">12-20</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Skor</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">5. Retraksi Data</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Skor</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">2. Saturasi Oksigen</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">> = 94</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Skor</label>
                                        <input type="text" class="form-control " id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">6. CRT</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">
                                                <=3 detik</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Skor</label>
                                        <input type="text" class="form-control " id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">3. Penggunaan O2</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Skor</label>
                                        <input type="text" class="form-control " id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">7.Suhu</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">36.5-37.5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Skor</label>
                                        <input type="text" class="form-control " id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">4. Denyut Jantung</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">120-160</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Skor</label>
                                        <input type="text" class="form-control " id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">8.Warna Kulit</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Pink</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Skor</label>
                                        <input type="text" class="form-control " id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Total Skor</label>
                                        <input type="text" class="form-control" value="0" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                                        <input type="text" value="Bersiko rendah, ulangi setiap 7 jam" class="form-control " id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Aktifkan Code Blue</label>
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