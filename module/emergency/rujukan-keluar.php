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
                                <h3>Rujukan Keluar</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">Rujukan Keluar</li>
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
                                        <label for="exampleFormControlInput1" class="form-label">No. Rujuk</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="RK0201023">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                        <input type="date" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jam</label>
                                        <input type="time" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Rujuk Ke</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Diagnosa <a href=""><strong> Cari</strong></a></label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Ketegori Rujuk</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">-</option>
                                            <option value="">Bedah</option>
                                            <option value="">Non Bedah</option>
                                            <option value="">Kebidanan</option>
                                            <option value="">Anak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Dokter</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" value="dr.Hidayatul Nadia">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Ambulance</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">-</option>
                                            <option value="">AGD</option>
                                            <option value="">Sendiri</option>
                                            <option value="">Swasta</option>
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