<?php
$page = "MJKN";
require '../../db/connect.php';
require 'view.php';
$data = mysqli_query($koneksi, "SELECT * FROM loket where tipe = 'MJKN'");
$totaldata = mysqli_num_rows($data);
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
                                <h3>MJKN</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Panggil Antrian</li>
                                    <li class="breadcrumb-item active">MJKN </li>
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
                                    <div class="card-header">

                                        <div class="media">
                                            <p>Total Loket
                                                <strong><?= number_format($totaldata) ?></strong> saat ini
                                            </p>
                                            <div class="media-body text-end">
                                                <a href="admisi/tampilan-loket-admisi" target="_blank">
                                                    <div class="btn btn-outline-primary btn-sm"> <i data-feather="airplay"></i> Tampilan Display</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="display" id="basic-2">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Status</th>
                                                        <th class="text-center">Loket</th>
                                                        <th class="text-center">Tipe Loket</th>
                                                        <th class="text-center">Layanan</th>
                                                        <th class="text-center">Mulai</th>
                                                        <th class="text-center">Selesai</th>
                                                        <th class="text-center">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = tampildata("SELECT * FROM loket where tipe = 'MJKN'");
                                                    ?>
                                                    <?php foreach ($query as $row) : ?>
                                                        <tr>
                                                            <td class="text-center">
                                                                <?php
                                                                $status = $row['status'];
                                                                if ($status == 1) {
                                                                    $color = 'success';
                                                                    $note = "Buka";
                                                                } else {
                                                                    $color = 'danger';
                                                                    $note = "Tutup";
                                                                }
                                                                ?>
                                                                <span class="badge col-8 bg-<?= $color ?>"><?= $note ?></span>
                                                            </td>
                                                            <td class="text-center"><?= $row['loket'] ?></td>
                                                            <td class="text-center"><?= $row['tipe'] ?></td>
                                                            <td class="text-center"><?= $row['layanan'] ?></td>
                                                            <td class="text-center"><?= $row['mulai'] ?></td>
                                                            <td class="text-center"><?= $row['selesai'] ?></td>
                                                            <td class="text-center col-3">
                                                                <a href="admisi/loket-admisi-list?id=<?= $row['id'] ?>">
                                                                    <button class="btn btn-success">Lihat Antrian</button>
                                                                </a>
                                                                <?php
                                                                $status = $row['status'];
                                                                if ($status == 1) {
                                                                    $url = '../controller/loket/status?id=' . $row['id'];
                                                                    $keterangan = 'Tutup Loket';
                                                                    $color = 'danger';
                                                                } else {
                                                                    $url = '../controller/loket/status?id=' . $row['id'];
                                                                    $keterangan = 'Buka Loket';
                                                                    $color = 'primary';
                                                                }
                                                                ?>
                                                                <a href="<?= $url ?>">
                                                                    <button class="btn btn-<?= $color ?>"><?= $keterangan ?></button>
                                                                </a>

                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
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