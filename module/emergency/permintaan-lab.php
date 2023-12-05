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
                                <h3>Permintaan Lab</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">Permintaan Lab</li>
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
                                        <label for="exampleFormControlInput1" class="form-label">Indikasi / Klinis</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Informasi Tambahan</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-md-12 box-col-12">
                        <div class="file-content">
                            <div class="card">
                                <ul class="nav nav-tabs" id="icon-tab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="icon-home-tab" data-bs-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><i class="icofont icofont-ui-home"></i>Patologi Klinis</a></li>
                                    <li class="nav-item"><a class="nav-link" id="profile-icon-tab" data-bs-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile-icon" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Patologi Anatomi</a></li>
                                    <li class="nav-item"><a class="nav-link" id="contact-icon-tab" data-bs-toggle="tab" href="#contact-icon" role="tab" aria-controls="contact-icon" aria-selected="false"><i class="icofont icofont-contacts"></i>Mikrobiologi & Bio Molekuler</a></li>
                                </ul>
                                <div class="tab-content" id="icon-tabContent">
                                    <div class="tab-pane fade show active" id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Kode Periksa</th>
                                                            <th>Nama Pemeriksaan</th>
                                                            <th class="text-center">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>101.K.3</td>
                                                            <td>Hematologi Darah Rutin (CITO)</td>
                                                            <td class="text-center col-1">
                                                                <button class="btn btn-sm btn-primary"><i data-feather="plus"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>101.K.2</td>
                                                            <td>Hematologi Darah</td>
                                                            <td class="text-center col-1">
                                                                <button class="btn btn-sm btn-primary"><i data-feather="plus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile-icon" role="tabpanel" aria-labelledby="profile-icon-tab">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Pengambilan Bahan</label>
                                                        <input type="date" class="form-control" id="exampleFormControlInput1">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Diperoleh Dengan</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Lokasi Pengambilan Jaringan</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Diawetkan/Direndam Dengan</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Pernah Dilakukan PA Di</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Pada Tanggal</label>
                                                        <input type="date" class="form-control" id="exampleFormControlInput1">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Dengan Nomor PA</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Dengan Diagnosa PA</label>
                                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="table-responsive">
                                                <table class="table" id="">
                                                    <thead>
                                                        <tr>
                                                            <th>Kode Periksa</th>
                                                            <th>Nama Pemeriksaan</th>
                                                            <th class="text-center">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>PA0001</td>
                                                            <td>Histopologi</td>
                                                            <td class="text-center col-2">
                                                                <button class="btn btn-sm btn-primary"><i data-feather="plus"></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>PA0002</td>
                                                            <td>Histokimia</td>
                                                            <td class="text-center col-2">
                                                                <button class="btn btn-sm btn-primary"><i data-feather="plus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact-icon" role="tabpanel" aria-labelledby="contact-icon-tab">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Kode Periksa</th>
                                                        <th>Nama Pemeriksaan</th>
                                                        <th class="text-center">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>J002023</td>
                                                        <td>PT-PCR+SWAB</td>
                                                        <td class="text-center col-1">
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
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->

            <?php include("footer.php"); ?>
        </div>


</body>

</html>