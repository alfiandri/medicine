<?php
$page = "Antrian";
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
                                <h3>Antrian Belum Dilayani</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Antrian</li>
                                    <li class="breadcrumb-item active">Belum Dilayani </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 box-col-12">
                            <div class="file-content">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table" id="basic-4">
                                                <thead>
                                                    <tr>
                                                        <th>Kode Book</th>
                                                        <th>Tanggal</th>
                                                        <th>Kode Poli</th>
                                                        <th>Kode Dokter</th>
                                                        <th>Jam Praktik</th>
                                                        <th>NIK</th>
                                                        <th>No.Kapst</th>
                                                        <th>No.Hp</th>
                                                        <th>Kode RM</th>
                                                        <th>Jenis Kunjungan</th>
                                                        <th>No.Ref</th>
                                                        <th>Sumber Data</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // API Endpoint URL
                                                    $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/pendaftaran/aktif";

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
                                                                <td><?= $row['kodebooking'] ?></td>
                                                                <td><?= $row['tanggal'] ?></td>
                                                                <td><?= $row['kodepoli'] ?></td>
                                                                <td><?= $row['kodedokter'] ?></td>
                                                                <td><?= $row['jampraktek'] ?></td>
                                                                <td><?= $row['nik'] ?></td>
                                                                <td><?= $row['nokapst'] ?></td>
                                                                <td><?= $row['nohp'] ?></td>
                                                                <td><?= $row['norekammedis'] ?></td>
                                                                <td><?= $row['jeniskunjungan'] ?></td>
                                                                <td><?= $row['nomorreferensi'] ?></td>
                                                                <td><?= $row['sumberdata'] ?></td>
                                                                <td>
                                                                    
                                                                </td>
                                                            </tr>
                                                    <?php endforeach;
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
    <script type="text/javascript">
        function panggil() {
            let open = new Audio('antrian/sound/open.mp3');
            let nomor = new Audio('antrian/sound/a1.mp3');
            let loket = new Audio('antrian/sound/loket.mp3');
            open.play();
            setTimeout(function() {
                nomor.play();
            }, 1900);
            setTimeout(function() {
                loket.play();
            }, 3000);
        }
    </script>
    <?php
    include 'library.php';
    ?>
</body>



</html>