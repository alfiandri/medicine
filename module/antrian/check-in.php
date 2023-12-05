<?php
session_start();
$page = "Check In";
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
                                <h3>Check In</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Ambil Antrian</li>
                                    <li class="breadcrumb-item active">Check In </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <p class="card-text text-center">Scan Code</p>
                                    <img src="../assets/notfoundimage.jpeg" width="240" alt="">
                                    <br>
                                    <button class="btn btn-primary mt-3 col-6">On Camera</button>
                                    <button class="btn btn-danger mt-2 col-6">Check In</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <form action="../controller/antrian/ambil-farmasi" method="POST">
                                        <p class="card-text text-center">Masukkan Kode Booking</p>
                                        <h1 class="card-title mt-3 fs-10">
                                            <input type="text" placeholder="Kode Booking" class="form-control mb-3" name="nomor" id="nomor" required>
                                        </h1>
                                        <button class="btn btn-danger mt-2 col-12" name="caribooking">Check In</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="upload" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Upload File</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nomor" class="form-label">Fille</label>
                                    <input type="file" name="nomor" id="nomor" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" name="caridatanonjkn" class="btn btn-primary">Proses</button>
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
    <?php
    include 'library.php';
    ?>
</body>



</html>