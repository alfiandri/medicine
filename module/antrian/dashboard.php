<?php
$page = "Dashboard";
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
                                <h3>Dashboard Waktu Tunggu</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Antrian</li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <form class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="">
                                                <label for="tanggal" class="form-label">Tanggal</label>
                                                <input type="date" name="tanggal" value="<?= @$_GET['tanggal'] ?>" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="">
                                                <label for="waktu" class="form-label">Sumber Data</label>
                                                <select name="waktu" id="waktu" class="form-select" required>
                                                    <option value="">--PILIH--</option>
                                                    <option value="rs" <?= @$_GET['waktu'] == 'rs' ? 'selected' : '' ?>>Rumah Sakit</option>
                                                    <option value="server" <?= @$_GET['waktu'] == 'server' ? 'selected' : '' ?>>Server BPJS</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="">
                                                <button type="submit" class="btn btn-primary mt-3">Tampilkan</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <form class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="">
                                                <label for="tanggal" class="form-label">Bulan</label>
                                                <select name="bulan" class="form-select" id="">
                                                    <?php
                                                    for ($i = 1; $i <= 12; $i++) {
                                                        $selected = ($i == @$_GET['bulan']) ? "selected" : "";
                                                        echo "<option value='$i' $selected>$i</option>";
                                                    }
                                                    ?> </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="">
                                                <label for="tanggal" class="form-label">Tahun</label>
                                                <select name="tahun" class="form-select" id="">
                                                    <?php
                                                    for ($year = 2024; $year >= 2010; $year--) {
                                                        $selected = ($year == @$_GET['tahun']) ? "selected" : "";
                                                        echo "<option value='$year' $selected>$year</option>";
                                                    }
                                                    ?> </select>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="">
                                                <label for="waktu" class="form-label">Sumber Data</label>
                                                <select name="waktu" id="waktu" class="form-select" required>
                                                    <option value="">--PILIH--</option>
                                                    <option value="rs" <?= @$_GET['waktu'] == 'rs' ? 'selected' : '' ?>>Rumah Sakit</option>
                                                    <option value="server" <?= @$_GET['waktu'] == 'server' ? 'selected' : '' ?>>Server BPJS</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3">
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
                                                        <th>Tanggal</th>
                                                        <th>Kode PPK</th>
                                                        <th>Nama PPK</th>
                                                        <th>Kode Poli</th>
                                                        <th>Task 1</th>
                                                        <th>Task 2</th>
                                                        <th>Task 3</th>
                                                        <th>Task 4</th>
                                                        <th>Task 5</th>
                                                        <th>Task 6</th>
                                                        <th>AVG Task 1</th>
                                                        <th>AVG Task 2</th>
                                                        <th>AVG Task 3</th>
                                                        <th>AVG Task 4</th>
                                                        <th>AVG Task 5</th>
                                                        <th>AVG Task 6</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    // API Endpoint URL
                                                    $tanggal = @$_GET['tanggal'];
                                                    $bulan = @$_GET['bulan'];
                                                    $tahun = @$_GET['tahun'];
                                                    $waktu = @$_GET['waktu'];
                                                    if ($tanggal) {
                                                        $apiUrl = "$baseUrl/$serviceNameAntrean/dashboard/waktutunggu/tanggal/$tanggal/waktu/$waktu";
                                                    } else if ($bulan) {
                                                        $apiUrl = "$baseUrl/$serviceNameAntrean/dashboard/waktutunggu/bulan/$bulan/tahun/$tahun/waktu/$waktu";
                                                    } else {
                                                        $apiUrl = null;
                                                    }

                                                    if ($apiUrl) {
                                                        $response = get($apiUrl, $consId, $secretKey, $userKeyAntrean);

                                                        // Initialize an empty HTML string
                                                        $timeStamp = $response[1];
                                                        $jsonData = json_decode($response[0], true);
                                                    }

                                                    // Check if metadata->code is equal to 1
                                                    if (isset($jsonData['metadata']['code']) && $jsonData['metadata']['code'] == 200) {
                                                        // The API response is successful, you can access the response data
                                                        $responseData = $jsonData['response'];
                                                        $listData = $responseData['list'];

                                                        $no = 1;                                                    ?>
                                                        <?php foreach ($listData as $row) : ?>
                                                            <tr>
                                                                <td><?= $row['tanggal'] ?></td>
                                                                <td><?= $row['kdppk'] ?></td>
                                                                <td><?= $row['nmppk'] ?></td>
                                                                <td><?= $row['kodepoli'] ?></td>
                                                                <td><?= $row['waktu_task1'] ?></td>
                                                                <td><?= $row['waktu_task2'] ?></td>
                                                                <td><?= $row['waktu_task3'] ?></td>
                                                                <td><?= $row['waktu_task4'] ?></td>
                                                                <td><?= $row['waktu_task5'] ?></td>
                                                                <td><?= $row['waktu_task6'] ?></td>
                                                                <td><?= $row['avg_waktu_task1'] ?></td>
                                                                <td><?= $row['avg_waktu_task2'] ?></td>
                                                                <td><?= $row['avg_waktu_task3'] ?></td>
                                                                <td><?= $row['avg_waktu_task4'] ?></td>
                                                                <td><?= $row['avg_waktu_task5'] ?></td>
                                                                <td><?= $row['avg_waktu_task6'] ?></td>
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