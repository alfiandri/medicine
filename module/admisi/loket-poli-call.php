<?php
$page = "Poli";
require '../../db/connect.php';
require 'view.php';
$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM poli WHERE id = '$id'");
$poli = mysqli_fetch_array($data);

$data = mysqli_query($koneksi, "SELECT * FROM antrian_poli WHERE sudah_dilayani = 0 AND batal = 0 AND tipe = '$poli[kode_antri]' AND status = 0");
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
                                                $callantrian = mysqli_query($koneksi, "SELECT * FROM antrian_poli WHERE sudah_dilayani = 0 AND batal = 0 AND tipe = '$poli[kode_antri]' AND status = 0 ORDER BY antri_at");
                                                $panggil = mysqli_fetch_array($callantrian);
                                                ?>
                                                <h1><?= @$panggil['tipe'] ?>-<?= @$panggil['nomor'] ?></h1>
                                                <p>
                                                    <?php
                                                    $antrian  = mysqli_query($koneksi, "SELECT * FROM antrian_poli WHERE sudah_dilayani = 0 AND batal = 0 AND tipe = '$poli[kode_antri]' AND status = 0");
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
                                                <h4>Loket <?= $panggil['loket'] ?></h4>
                                                <button onclick="panggil('Antrian Nomor <?php echo $panggil['tipe'] . $panggil['nomor']; ?> Dipanggil Ke <?php echo $datainfo['loket']; ?>');" class="btn btn-primary mb-2 col-12">
                                                    Panggil
                                                </button>
                                                <a href="../controller/antrian/loket?actions=2&id=<?= $panggil['id'] ?>&loket_id=<?= $poli['id'] ?>&kode=<?= $panggil['kodebooking'] ?>">
                                                    <button class="btn btn-success mb-2 col-12">Hadir</button>
                                                </a>
                                                <a href="../controller/antrian/loket?actions=4&id=<?= $panggil['id'] ?>&loket_id=<?= $poli['id'] ?>&kode=<?= $panggil['kodebooking'] ?>">
                                                    <button class="btn btn-warning mb-2 col-12">Lewati</button>
                                                </a>
                                                <a href="../controller/antrian/loket?actions=5&id=<?= $panggil['id'] ?>&loket_id=<?= $poli['id'] ?>">
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
        function panggil(text) {
            if (text.trim() !== "") {
                var kataKata = text.split(' ');
                console.log(kataKata)
                for (var i = 0; i < kataKata.length; i++) {
                    setTimeout(function(kata) {
                        return function() {
                            var suara = new SpeechSynthesisUtterance(kata);
                            suara.lang = 'id-ID';
                            window.speechSynthesis.speak(suara);
                        };
                    }(kataKata[i]), i * 1000);
                }
            }
        }
    </script>
    <?php
    include 'library.php';
    ?>
</body>



</html>