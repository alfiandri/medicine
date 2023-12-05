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
                                <h3>Berkas Digital</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">Berkas Digital</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">

                    <div class="col-xl-12 col-md-12 box-col-12">
                        <div class="file-content">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display" id="basic-1">
                                            <thead>
                                                <tr>
                                                    <th>No.Dokumen</th>
                                                    <th>Dokumen</th>
                                                    <th>File</th>
                                                    <th>Catatan</th>
                                                    <th>Timestamp</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1203123123123123</td>
                                                    <td>KTP</td>
                                                    <td>
                                                        <span class="badge bg-primary">Download</span>
                                                    </td>
                                                    <td>-</td>
                                                    <td>2023-12-2 18:12:10</td>
                                                    <td class="text-center col-2">
                                                        <button class="btn btn-sm btn-warning"><i data-feather="edit-3"></i></button>
                                                        <button class="btn btn-sm btn-danger"><i data-feather="trash"></i></button>
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