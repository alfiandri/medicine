<?php
$page = "Admisi";
require '../../db/connect.php';
require 'view.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM loket WHERE id='$id'");
$datainfo = mysqli_fetch_array($data);
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
        require 'header.php';
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
                                <h3>Admisi</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Panggil Antrian</li>
                                    <li class="breadcrumb-item active">Admisi </li>
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
                                <div class="row">
                                    <div class="col-8">
                                        <div class="card">
                                            <div class="card-header bg-primary">
                                                Nomor Antrian Sedang Berjalan
                                            </div>
                                            <div class="card-body">
                                                <?php
                                                $callantrian = mysqli_query($koneksi, "SELECT * FROM antrian_loket WHERE status=1");
                                                $panggil = mysqli_fetch_array($callantrian);
                                                ?>
                                                <h1><?= $panggil['loket'] ?>-<?= $panggil['nomor'] ?></h1>
                                                <p>
                                                    <?php
                                                    $antrian  = mysqli_query($koneksi, "SELECT * FROM antrian_loket");
                                                    $dataantrian = mysqli_num_rows($antrian);
                                                    ?>
                                                    <hr>
                                                    Total Antrian : <strong><?= number_format($dataantrian) ?></strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-header bg-primary">
                                                Menu Panggil Antrian
                                            </div>
                                            <div class="card-body">
                                                <h4><?= $datainfo['loket'] ?></h4>
                                                <a href="../controller/antrian/loket?actions=1&loket?id=<?= $panggil['id'] ?>">
                                                    <button class="btn btn-success mb-2 col-12">Panggil Berikutnya</button>
                                                </a>
                                                <a href="../controller/antrian/loket?actions=2&loket?id=<?= $panggil['id'] ?>">
                                                    <button class="btn btn-primary mb-2 col-12">Panggil Ulang</button>
                                                </a>
                                                <a href="admisi/print-antrian?id=<?= $panggil['id'] ?>" target="_blank">
                                                    <button class="btn btn-warning mb-2 col-12">Cetak Antrian Poli</button>
                                                </a>
                                                <a href="../controller/antrian/loket?actions=3&loket?id=<?= $panggil['id'] ?>">
                                                    <button class="btn btn-danger mb-2 col-12">Batal</button>
                                                </a>
                                            </div>
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