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
                                <h3>Kamar Inap</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">Kamar Inap</li>
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
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No. RM</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="00001">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Pasien</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="Ny Indah Sari Putri">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No.Rawat</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="123124122">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                        <input type="text" value="2023-21-12" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Waktu</label>
                                        <input type="time" class="form-control" value="Mawar" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kamar</label>
                                        <input type="text" class="form-control" value="Mawar" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                                        <input type="text" value="Kelas 1" class="form-control" id="exampleFormControlInput1" v>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nomor Bed</label>
                                        <input type="text" value="K1.01" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Diagnosa Awal Masuk</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Biaya</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Estimasi Hari</label>
                                        <input type="number" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Total</label>
                                        <input type="number" class="form-control" value="dr. Hidaytul Nadia" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">PJ</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Proses Status</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-md-12 box-col-12">
                        <div class="file-content">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display" id="basic-1">
                                            <thead>
                                                <tr>

                                                    <th>No.Rawat</th>
                                                    <th>PJ</th>
                                                    <th>Hubungan PJ</th>
                                                    <th>Jenis Bayar</th>
                                                    <th>Kamar</th>
                                                    <th>Tarif Kamar</th>
                                                    <th>Diagnosa Awal</th>
                                                    <th>Diagnosa Akhir</th>
                                                    <th>Tgl Masuk</th>
                                                    <th>Tgl Keluar</th>
                                                    <th>Lama</th>
                                                    <th>Dokter</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>123124122</td>
                                                    <td>Dedi</td>
                                                    <td>Saudara</td>
                                                    <td>BPJS</td>
                                                    <td>K1.01 Mawar Kelas 1</td>
                                                    <td>55.000</td>
                                                    <td>F001</td>
                                                    <td>-</td>
                                                    <td>2023-12-02 08:30:12</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>dr. Hidaytul Nadia</td>
                                                </tr>


                                            </tbody>
                                        </table>
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