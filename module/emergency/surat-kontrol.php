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
                                <h3>Surat Kontrol</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">Surat Kontrol</li>
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
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal Surat</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="2023-12-22">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Waktu Surat</label>
                                        <input type="time" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No.Surat</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Diagnosa</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" v>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Terapi</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Alasan 1</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Alasan 2</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tindak Lanjut 1</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tindak Lanjut 2</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Dokter</label>
                                        <input type="text" class="form-control" value="dr. Hidaytul Nadia" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Unit Poli</label>
                                        <input type="text" class="form-control" value="Penyakit Dalam" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Periksa Kembali</label>
                                        <input type="text" class="form-control" value="2023-12-02 08:30:12" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No.Registrasi</label>
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
                                                    <th>Diagnosa</th>
                                                    <th>Terapi</th>
                                                    <th>Alasan 1</th>
                                                    <th>Alasan 2</th>
                                                    <th>Rencana TL 1</th>
                                                    <th>Rencana TL 2</th>
                                                    <th>Periksa Kembali</th>
                                                    <th>Tanggal Surat</th>
                                                    <th>No.Surat</th>
                                                    <th>Dokter</th>
                                                    <th>Poli</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>I50.01-Congestive heart</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>2023-12-02 08:30:12</td>
                                                    <td>2023-12-22</td>
                                                    <td>-</td>
                                                    <td>dr. Hidaytul Nadia</td>
                                                    <td>Penyakit Dalam</td>
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