<?php
$page = "Referensi Pasien Fingerprint";
require 'view.php';
require '../../controller/base/integrasi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../">
    <?php
    require 'head.php';
    ?>
</head>

<body onload="startTime()">
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php
        require 'navbar.php';
        ?>
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php
            require 'sidebar.php';
            ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3>Pasien Fingerprint</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Referensi</li>
                                    <li class="breadcrumb-item active">Pasien Fingerprint</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <div class="card text-center" data-bs-toggle="modal" data-bs-target="#nik">
                                <div class="card-body bg-primary">
                                    <h1 class="card-title">NIK</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card text-center" data-bs-toggle="modal" data-bs-target="#noka">
                                <div class="card-body bg-warning">
                                    <h1 class="card-title">Nomor Kartu</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="nik" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ambil Berdasarkan NIK</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <input type="hidden" name="identitas" value="nik">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="text" name="noidentitas" id="noidentitas" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Proses</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="noka" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ambil berdasarkan Nomor Kartu</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <input type="hidden" name="identitas" value="noka">
                                            <label for="noka" class="form-label">No.Kartu</label>
                                            <input type="text" name="noidentitas" id="noidentitas" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Proses</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xl-12 col-md-12 box-col-12">
                            <div class="file-content">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table" id="basic-4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nomor Kartu</th>
                                                        <th>NIK</th>
                                                        <th>Tgl Lahir</th>
                                                        <th>Daftar FP</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // API Endpoint URL
                                                    $identitas = @$_GET['identitas'];
                                                    $noIdentitas = @$_GET['noidentitas'];
                                                    $apiUrl = "$baseUrl/$serviceNameAntrean/ref/pasien/fp/identitas/$identitas/noidentitas/$noIdentitas";


                                                    $response = get($apiUrl, $consId, $secretKey, $userKeyAntrean);

                                                    // Initialize an empty HTML string
                                                    $timeStamp = $response[1];
                                                    $jsonData = json_decode($response[0], true);

                                                    // Check if metadata->code is equal to 1
                                                    if (isset($jsonData['metadata']['code']) && $jsonData['metadata']['code'] == 1) {
                                                        // The API response is successful, you can access the response data
                                                        $responseData = $jsonData['response'];
                                                        $key = $consId . $secretKey . $timeStamp;
                                                        $responseData = decrypt($key, $responseData);
                                                        $listData = json_decode($responseData, true);

                                                        $no = 1;
                                                    ?>
                                                        <tr>
                                                            <td><?= $no ?></td>
                                                            <td><?= $listData['nomorkartu'] ?></td>
                                                            <td><?= $listData['nik'] ?></td>
                                                            <td><?= ($listData['tgllahir']) ?></td>
                                                            <td><?= time() .$listData['daftarfp'] ?></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    if (isset($jsonData['metadata']['code']) && $jsonData['metadata']['code'] == 0) {
                                                        $message = $jsonData['metadata']['message'];
                                                        echo "<script>alert('$message')</script>";
                                                    }
                                                    ?>
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
            <?php
            require '../../template/footer.php';
            ?>
        </div>
    </div>
    <?php
    include 'library.php';
    ?>
</body>



</html>