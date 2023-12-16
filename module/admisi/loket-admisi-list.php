<?php
$page = "Admisi List";
require '../../db/connect.php';
require 'view.php';
$data = mysqli_query($koneksi, "SELECT * FROM antrian_loket");
$totaldata = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="../">
    <?php
    require 'head.php';
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                                <h3>Admisi List</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Panggil Antrian</li>
                                    <li class="breadcrumb-item active">Admisi List </li>
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
                                            <p>Total List Antrean
                                                <strong><?= number_format($totaldata) ?></strong> saat ini
                                            </p>
                                            <div class="media-body text-end">
                                                <a href="admisi/loket-admisi">
                                                    <div class="btn btn-light btn-sm"> <i data-feather="chevron-left"></i>Kembali</div>
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
                                                        <th class="text-center">Kode Booking</th>
                                                        <th class="text-center">Nomor Antrean</th>
                                                        <th class="text-center">Tipe</th>
                                                        <th class="text-center">Waktu Pengambilan Tiket</th>
                                                        <th class="text-center">Selesai Pelayanan</th>
                                                        <th class="text-center">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = tampildata("SELECT * FROM antrian_loket");
                                                    ?>
                                                    <?php foreach ($query as $row) : ?>
                                                        <tr>
                                                            <td class="text-center">
                                                                <?php
                                                                $status = $row['status'];
                                                                if ($status == 1) {
                                                                    $color = 'success';
                                                                    $note = "Sedang di Layani";
                                                                } else {
                                                                    $color = 'danger';
                                                                    $note = "Antri";
                                                                }
                                                                ?>
                                                                <span class="badge col-12 bg-<?= $color ?>"><?= $note ?></span>
                                                            </td>
                                                            <td class="text-start"><?= $row['kodebooking'] ?></td>
                                                            <td class="text-start"><?= $row['loket'] ?>-<?= $row['nomor'] ?></td>
                                                            <td class="text-start"><?= $row['tipe'] ?></td>
                                                            <td class="text-center"><?= $row['create_at'] ?></td>
                                                            <td class="text-center"><?= $row['update_at'] ?></td>
                                                            <td class="text-center col-3">
                                                                <button class="btn btn-primary" onclick="panggil('Antrian nomor ' + <?= $row['nomor'] ?> + ' silakan ke loket')">Panggil Ulang</button>
                                                                <button class="btn btn-danger" data-bs-toggle="modal" data-bst-target="#hapus">Batal</button>
                                                            </td>
                                                        </tr>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="hapus<?= $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <form action="" method="POST">
                                                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                                        <div class="modal-body">
                                                                            <p>Apakah anda yakin menghapus data antrian <strong><?= $row['loket'] ?>-<?= $row['nomor'] ?></strong> secara permanent, karena data yang telah anda hapus tidak dapat di kembalikan lagi</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                            <button type="submit" name="hapusantrean" class="btn btn-danger">Ya, Hapus</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
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
            <?php if (@$_SESSION['sukses']) { ?>
                <script>
                    swal("Good job!", "<?php echo $_SESSION['sukses']; ?>", "success");
                </script>
            <?php unset($_SESSION['sukses']);
            } ?>
            <!-- footer start-->
            <?php
            require '../../template/footer.php';
            ?>
        </div>
    </div>
    <script type="text/javascript">
        function panggil(text) {
            // let open = new Audio('antrian/sound/open.mp3');
            // let nomor = new Audio('antrian/sound/a1.mp3');
            // let loket = new Audio('antrian/sound/loket.mp3');
            // open.play();
            // setTimeout(function() {
            //     nomor.play();
            // }, 1900);
            // setTimeout(function() {
            //     loket.play();
            // }, 3000);
            if (text.trim() != "") {
                var katakata = text.split(' ');
                console.log(katakata)
                for (var i =
                        0; i < katakata.length; i++) {
                    setTimeout(function(kata) {
                        return function() {};
                        var suara = new SpeechSynthesisUtterance(kata);
                        suara.lang = 'id-ID';
                        window.speechSynthesis.speak(suara);
                                    console.log(text);

                    }(katakata[i]), i * 10);
                }
            }

        }
    </script>
    <?php
    include 'library.php';
    ?>
</body>



</html>