<?php
$page = "Referensi Dokter";
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
        <!-- Page Header Ends                              -->
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
                                <h3>Dokter</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Referensi</li>
                                    <li class="breadcrumb-item active">Dokter</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <form class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="">
                                                <label for="poli" class="form-label">Nama Poli</label>
                                                <select name="poli" class="form-control" id="poli" required>
                                                    <option value="">--PILIH POLI--</option>
                                                    <?php
                                                    $query = tampildata("SELECT * FROM poli");
                                                    ?>
                                                    <?php foreach ($query as $row) : ?>
                                                        <option value="<?= $row['kdpoli'] ?>" <?= @$_GET['poli'] == $row['kdpoli'] ? 'selected' : '' ?>><?= $row['nmpoli'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="">
                                                <label for="poli" class="form-label">Tanggal</label>
                                                <input type="date" name="tanggal" class="form-control" value="<?= @$_GET['tanggal'] ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="">
                                                <button type="submit" class="btn btn-primary mt-3">Tampilkan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-xl-12 col-md-12 box-col-12">
                            <div class="file-content">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table" id="basic-4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Poli</th>
                                                        <th>Subspesialis</th>
                                                        <th>Hari</th>
                                                        <th>Jadwal</th>
                                                        <th>Kode Dokter</th>
                                                        <th>Kode Dokter</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $kodePoli = @$_GET['poli'];
                                                    $tanggal = @$_GET['tanggal'];

                                                    // API Endpoint URL
                                                    $apiUrl = "$baseUrl/$serviceNameAntrean/jadwaldokter/kodepoli/$kodePoli/tanggal/$tanggal";

                                                    $response = get($apiUrl, $consId, $secretKey, $userKeyAntrean);

                                                    // Initialize an empty HTML string
                                                    $timeStamp = $response[1];
                                                    $jsonData = json_decode($response[0], true);

                                                    // Check if metadata->code is equal to 1
                                                    if (isset($jsonData['metadata']['code']) && $jsonData['metadata']['code'] == 200) {
                                                        // The API response is successful, you can access the response data
                                                        $responseData = $jsonData['response'];
                                                        $key = $consId . $secretKey . $timeStamp;
                                                        $responseData = decrypt($key, $responseData);
                                                        $listData = json_decode($responseData, true);

                                                        $no = 1;
                                                    ?>
                                                        <?php foreach ($listData as $row) : ?>
                                                            <tr>
                                                                <td><?= $no ?></td>
                                                                <td><?= $row['namapoli'] ?></td>
                                                                <td><?= $row['namasubspesialis'] ?></td>
                                                                <td><?= $row['namahari'] ?></td>
                                                                <td><?= $row['jadwal'] ?></td>
                                                                <td><?= $row['namadokter'] ?></td>
                                                                <td><?= $row['kodedokter'] ?></td>
                                                            </tr>
                                                    <?php $no++;
                                                        endforeach;
                                                    } ?>
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