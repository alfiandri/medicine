<?php
$page = "Poli";
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
                                    <li class="breadcrumb-item">Panggil Antrian</li>
                                    <li class="breadcrumb-item active">Poli </li>
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
                                            <table class="display" id="basic-2">
                                                <thead>
                                                    <tr>
                                                        <th>Kode Booking</th>
                                                        <th>Loket</th>
                                                        <th>Tipe</th>
                                                        <th>No Antrian</th>
                                                        <th>Timestamp</th>
                                                        <th>Estimasi Dilayani</th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = tampildata("SELECT * FROM antrian_poli ORDER BY nomor ASC");
                                                    ?>
                                                    <?php foreach ($query as $row) : ?>
                                                        <tr>
                                                            <td><?= $row['kodebooking'] ?></td>
                                                            <td><?= $row['loket'] ?></td>
                                                            <td><?= $row['tipe'] ?></td>
                                                            <td><?= $row['nomor'] ?></td>
                                                            <td><?= $row['create_at'] ?></td>
                                                            <td><?= $row['estimasi'] ?></td>
                                                            <td class="text-center">
                                                                <a href="../controller/antrian/call-poli" class="btn btn-primary">Panggil</a>
                                                                <a href="../controller/antrian/call-poli" class="btn btn-success">Selesaikan</a>
                                                                <a data-batal="<?=$row['kodebooking']?>" class="btn btn-danger batal">Batal</a>
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
            <div class="modal fade" id="batal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Batal Antrian</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="../controller/antrian/batal-poli" method="POST">
                            <div class="modal-body">
                                <input type="text" name="kodebooking">
                                <div class="mb-3">
                                    <label for="keterangan" class="form-label">Keterangan (opsional)</label>
                                    <textarea class="form-control" name="keterangan"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" name="caridatajkn" class="btn btn-primary">Proses</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- footer start-->
            <?php
            require '../../template/footer.php';
            ?>
        </div>
    </div>
    <script type="text/javascript">
        $('.batal').click(function() {
         // Show the modal
         const kodebooking = $(this).data('kodebooking');
         console.log(kodebooking)
         $('[name="kodebooking"]').val(kodebooking)
         $('#batal').modal('show');
      });

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