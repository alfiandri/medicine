<?php
$page = "Referensi Poli";
require 'view.php';
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
                                <h3>Poli</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Referensi</li>
                                    <li class="breadcrumb-item active">Poli</li>
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
                                                        <th>#</th>
                                                        <th>Poliklinik</th>
                                                        <th>Kode Poli</th>
                                                        <th>Jam Tutup</th>
                                                        <th>Kode Antri</th>
                                                        <th>Kuota JKN</th>
                                                        <th>Kuota Non JKN</th>
                                                        <th>Buka?</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = tampildata("SELECT * FROM poli");
                                                    $no = 1;
                                                    ?>
                                                    <?php foreach ($query as $row) : ?>
                                                        <tr>
                                                            <td><?= $no ?></td>
                                                            <td><?= $row['nmpoli'] ?></td>
                                                            <td><?= $row['kdpoli'] ?></td>
                                                            <td><?= $row['jam_tutup'] ?></td>
                                                            <td><?= $row['kode_antri'] ?></td>
                                                            <td><?= $row['kuotajkn'] ?></td>
                                                            <td><?= $row['kuotanonjkn'] ?></td>
                                                            <td><?= $row['buka'] ?></td>
                                                            <td><?= $row['status'] ?></td>
                                                        </tr>
                                                    <?php $no++; endforeach ?>
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