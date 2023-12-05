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
                                <h3>Input Resep</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">Input Resep</li>
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
                                        <label for="exampleFormControlInput1" class="form-label">Resep</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="02-08-2023 18:12:00">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Total Item</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="3">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">IDR</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="780.000">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">PPN</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="78.000">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Grand Total</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="858.000">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Peresep</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="dr. Hidayatul Huda">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Apoteker</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="Indah Putri">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No.Resep</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="202301293123">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-md-12 box-col-12">
                        <div class="file-content">
                            <div class="card">

                                <div class="card-header">
                                    <div class="media">
                                        <div class="media-body text-end">
                                            <a href="input-resep">
                                                <div class="btn btn-outline-primary"> <i data-feather="arrow-left"></i>Kembali</div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display" id="basic-1">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Racikan</th>
                                                    <th>Metode Racikan</th>
                                                    <th>Jml.Racikan</th>
                                                    <th>Aturan Pakai</th>
                                                    <th>Keterangan</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Obat FHC</td>
                                                    <td>Campuran</td>
                                                    <td>3</td>
                                                    <td>Tetes</td>
                                                    <td>-</td>
                                                    <td class="text-center">
                                                        <button class="btn btn-sm btn-primary"><i data-feather="info"></i></button>
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