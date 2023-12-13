<?php
require 'view.php';
$page = "Poli";
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
                                <h3>Antrian Poli</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Ambil Antrian</li>
                                    <li class="breadcrumb-item active">Poli </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6">
                            <div class="card text-center" data-bs-toggle="modal" data-bs-target="#jkn">
                                <div class="card-body bg-primary">
                                    <h1 class="card-title">JKN</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card text-center" data-bs-toggle="modal" data-bs-target="#nonjkn">
                                <div class="card-body bg-warning">
                                    <h1 class="card-title">NON-JKN</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="jkn" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Antrian Poli JKN</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="../controller/antrian/ambil-poli" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="jeniskunjungan" class="form-label">Jenis Kunjungan</label>
                                    <select name="jeniskunjungan" id="jeniskunjungan" class="form-select" required>
                                        <option value="">--PILIH--</option>
                                        <option value="1">Rujukan FKTP</option>
                                        <option value="2">Rujukan Internal</option>
                                        <option value="3">Kontrol</option>
                                        <option value="4">Rujukan Antar RS</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nomor" class="form-label">No.Kartu Identitas (KTP)</label>
                                    <input type="text" name="nomor" id="nomor" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="poli" class="form-label">Pilih Poli</label>
                                    <select name="poli" id="poli" class="form-control select2 poli" required>
                                        <option value="">-- PILIH --</option>
                                        <?php
                                        $query = tampildata("SELECT * FROM poli");
                                        foreach ($query as $row) {
                                        ?>
                                            <option value="<?= $row['kdpoli'] ?>"><?= $row['nmpoli'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="dokter" class="form-label">Pilih Dokter</label>
                                    <select name="dokter" id="dokter" class="form-control select2 dokter" required>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="jadwal" class="form-label">Jadwal Dokter</label>
                                    <input type="text" name="jadwal" id="jadwal" class="form-control jadwal" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="nomorreferensi" class="form-label">No.Referensi (opsional)</label>
                                    <input type="text" name="nomorreferensi" id="nomorreferensi" class="form-control">
                                </div>
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
            <!-- Modal -->
            <div class="modal fade" id="nonjkn" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Antrian Poli NON-JKN</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="../controller/antrian/ambil-poli" method="POST">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="jeniskunjungan" class="form-label">Jenis Kunjungan</label>
                                    <select name="jeniskunjungan" id="jeniskunjungan" class="form-select" required>
                                        <option value="">--PILIH--</option>
                                        <option value="1">Rujukan FKTP</option>
                                        <option value="2">Rujukan Internal</option>
                                        <option value="3">Kontrol</option>
                                        <option value="4">Rujukan Antar RS</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nomor" class="form-label">No.Kartu Identitas (KTP)</label>
                                    <input type="text" name="nomor" id="nomor" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="poli" class="form-label">Pilih Poli</label>
                                    <select name="poli" id="poli" class="form-control select2 poli" required>
                                        <option value="">-- PILIH --</option>
                                        <?php
                                        $query = tampildata("SELECT * FROM poli");
                                        foreach ($query as $row) {
                                        ?>
                                            <option value="<?= $row['kdpoli'] ?>"><?= $row['nmpoli'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="dokter" class="form-label">Pilih Dokter</label>
                                    <select name="dokter" id="dokter" class="form-control select2 dokter" required>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="jadwal" class="form-label">Jadwal Dokter</label>
                                    <input type="text" name="jadwal" id="jadwal" class="form-control jadwal" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="nomorreferensi" class="form-label">No.Referensi (opsional)</label>
                                    <input type="text" name="nomorreferensi" id="nomorreferensi" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="keterangan" class="form-label">Keterangan (opsional)</label>
                                    <textarea class="form-control" name="keterangan"></textarea>
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
    <script src="../assets/js/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2/select2-custom.js"></script>

    <script>
        // $('#poli').select2();

        $('.poli').on('change', function() {
            // Get the selected category value
            const poli = $(this).val();

            // Make an AJAX request
            $.ajax({
                url: '../controller/antrian/ambil-dokter',
                type: 'POST',
                data: {
                    poli: poli
                },
                dataType: 'json',
                success: function(data) {
                    // Clear existing options
                    $('.dokter').empty();

                    // Populate options based on the response
                    $('.dokter').append(`<option value="">-- Pilih Dokter --</option>`);

                    $.each(data, function(index, dokter) {
                        $('.dokter').append(`<option value="${dokter.kodedokter}" data-jadwal="${dokter.jadwal}">${dokter.namadokter}</option>`);
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });

        $('.dokter').on('change', function() {
            // Get the selected category value
            var selectedOption = $(this).find('option:selected');

            var jadwal = selectedOption.data('jadwal');

            $('.jadwal').val(jadwal);
        });
    </script>
</body>

</html>