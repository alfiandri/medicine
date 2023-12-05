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
                                <h3>Permintaan Radiologi</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">Permintaan Radiologi</li>
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
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Dokter Perujuk</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="dr. Hidayatul Huda">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="2023-12-2 18:22:10">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No.Permintaan</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="120129123123">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Informasi Tambahan Permintaan Foto</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Indikasi Pemerikaan / Diagnosa Klinis</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="">
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
                                                    <th>Kode Periksa</th>
                                                    <th>Nama Pemeriksaan</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>ICU-01</td>
                                                    <td>Thorax AP/PA</td>
                                                    <td class="text-center col-2">
                                                        <button class="btn btn-sm btn-primary"><i data-feather="plus"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>ICU-02</td>
                                                    <td>2 Foto</td>
                                                    <td class="text-center col-2">
                                                        <button class="btn btn-sm btn-primary"><i data-feather="plus"></i></button>
                                                    </td>
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