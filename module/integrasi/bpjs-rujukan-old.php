<?php
$master = "V-Claim ";
$page = "Rujukan";
require 'head.php';
error_reporting(0);
?>

<body>
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
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3><?= $page ?></h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><?= $master ?></li>
                                    <li class="breadcrumb-item"><?= $page ?></li>
                                    <li class="breadcrumb-item active">Umum </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="col-md-12 project-list">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="nav nav-pills" id="pills-icontab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Tambah</a></li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconprofile-tab" data-bs-toggle="pill" href="#pills-iconprofile" role="tab" aria-controls="pills-iconprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Cari</a></li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconcontact-tab" data-bs-toggle="pill" href="#pills-iconcontact" role="tab" aria-controls="pills-iconcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Data Rujukan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="pills-icontabContent">
                                    <div class="tab-pane fade show active" id="pills-iconhome" role="tabpanel" aria-labelledby="pills-iconhome-tab">
                                        <form action="" method="post">
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.SEP</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm" id="inputPassword">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal
                                                    Rujukan</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control form-control-sm" id="inputPassword">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Rencana
                                                    Kunjungan</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control form-control-sm" id="inputPassword">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">PPK
                                                    Dirujuk</label>
                                                <div class="col-sm-10">

                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm" name="ppkDirujuk" id='fas'>
                                                        <a href="javascript:void(0);" name="Cari Faskes" onClick='javascript:window.open("cari_faskes_popup.php","Ratting", "width=550,height=170,left=150,top=200,toolbar=1,status=1");'><button class="btn btn-danger btn-sm">Cari</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jenis
                                                    Pelayanan </label>
                                                <div class="col-sm-10">
                                                    <select name="" class="form-select form-select-sm" id="">
                                                        <option value="">-Pilih Jenis Pelayanan-</option>
                                                        <option value="1">Rawat Inap</option>
                                                        <option value="2">Rawat Jalan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Diagnosa
                                                    Rujukan</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm" name="diagRujukan" id="diag">
                                                        <a href="javascript:void(0);" name="Cari Diagnosa" onClick='javascript:window.open("cari_diagnosa_popup.php","Ratting", "width=550,height=170,left=150,top=200,toolbar=1,status=1");'><button class="btn btn-danger btn-sm">Cari</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tipe
                                                    Rujukan
                                                </label>
                                                <div class="col-sm-10">
                                                    <select name="" class="form-select form-select-sm" id="tipe-rujuk">
                                                        <option value="">-- Pilih Tipe Rujukan --</option>
                                                        <option value="0">Penuh</option>
                                                        <option value="1">Partial</option>
                                                        <option value="2">Balik PRB</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-1" id="hasil">
                                                <div class="row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Poli
                                                        Rujukan</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm" name="poliRujukan" id="pol">
                                                            <a href="javascript:void(0);" name="Cari Poli" onClick='javascript:window.open("data_list_spesialistik_rujukan_pop.php","Ratting", "width=800,height=170,left=150,top=200,toolbar=1,status=1");'><button class="btn btn-danger btn-sm">Cari</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                var select1 = document.getElementById('tipe-rujuk');
                                                var select2 = document.getElementById('hasil');
                                                select2.style.display = 'none';

                                                select1.addEventListener('change', function() {
                                                    if (this.value == "1" || this.value == "2") {
                                                        select2.style.display = 'block';
                                                    } else {
                                                        select2.style.display = 'none';
                                                    }
                                                })
                                            </script>
                                            <div class="mb-2 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Catatan</label>
                                                <div class="col-sm-10">
                                                    <textarea name="" class="form-control form-control-sm" id="" cols="30" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">User
                                                    Entry</label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly class="form-control form-control-sm" id="inputPassword">
                                                </div>
                                            </div>

                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                <div class="col-sm-10">
                                                    <button class="btn btn-success btn-sm">Proses</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-iconprofile" role="tabpanel" aria-labelledby="pills-iconprofile-tab">
                                        <div class="mb-1 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Cari
                                                Berdasarkan</label>
                                            <div class="col-sm-10">
                                                <select name="" class="form-select form-select-sm" id="no-bpjs">
                                                    <option value="0">No.Rujukan</option>
                                                    <option value="1">No.Kartu BPJS</option>
                                                    <option value="2">No.Kartu BPJS Multiple Rec</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="rujuk">
                                            <form action="detail_rujuk_nokartu.php" method="post" role="form">
                                                <div class="mb-1 row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nomor</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control form-control-sm" id="inputPassword" placeholder="Isi No Rujuk" name="nokartu" required>
                                                    </div>
                                                </div>
                                                <div class="mb-1 row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                    <div class="col-sm-10">
                                                        <button class="btn btn-success btn-sm" name="pcare">P
                                                            Care</button>
                                                        <button class="btn btn-danger btn-sm" name="rs">Rumah
                                                            sakit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!--  -->
                                        <div id="bpjs">
                                            <form action="detail_rujuk_nokartu.php" method="post" role="form">
                                                <div class="mb-1 row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nomor</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control form-control-sm" id="inputPassword" placeholder="Isi Nomor Kartu BPJS" name="nokartu" required>
                                                    </div>
                                                </div>
                                                <div class="mb-1 row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                    <div class="col-sm-10">
                                                        <button class="btn btn-success btn-sm" name="pcare">P
                                                            Care</button>
                                                        <button class="btn btn-danger btn-sm" name="rs">Rumah
                                                            sakit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!--  -->
                                        <div id="multiple">
                                            <form action="data_rujukan_multiple.php" method="post" role="form">
                                                <div class="mb-1 row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nomor</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control form-control-sm" id="inputPassword" placeholder="Isi Nomor Kartu BPJS Multiple Rec" name="nokartu" required>
                                                    </div>
                                                </div>
                                                <div class="mb-1 row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                    <div class="col-sm-10">
                                                        <button class="btn btn-success btn-sm" name="pcare">P
                                                            Care</button>
                                                        <button class="btn btn-danger btn-sm" name="rs">Rumah
                                                            sakit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <script>
                                            document.getElementById('rujuk').style.display = 'block';
                                            document.getElementById('bpjs').style.display = 'none';
                                            document.getElementById('multiple').style.display = 'none';

                                            document.getElementById('no-bpjs').addEventListener('change', function() {
                                                if (this.value == "0") {
                                                    document.getElementById('rujuk').style.display = 'block';
                                                    document.getElementById('bpjs').style.display = 'none';
                                                    document.getElementById('multiple').style.display = 'none';
                                                } else if (this.value == "1") {
                                                    document.getElementById('rujuk').style.display = 'none';
                                                    document.getElementById('bpjs').style.display = 'block';
                                                    document.getElementById('multiple').style.display = 'none';
                                                } else {
                                                    document.getElementById('rujuk').style.display = 'none';
                                                    document.getElementById('bpjs').style.display = 'none';
                                                    document.getElementById('multiple').style.display = 'block';
                                                }
                                            })
                                        </script>
                                    </div>
                                    <script>
                                        // if (typeof window.history.pushState == 'function') {
                                        //     window.history.pushState({}, "Hide", 'data_insert_rujukan.php');
                                        // }
                                        $(document).ready(function() {
                                            $('[data-toggle="tooltip"]').tooltip({
                                                placement: 'top'
                                            });
                                        });
                                    </script>
                                    <?php
                                    include 'fungsi.php';
                                    $id_nama = $_SESSION['namalengkap'];
                                    if (isset($_GET['kd']) == 'sukses') {
                                        echo "<script type='text/javascript'>toastr.success('Data Berhasil Di Tambahkan')</script>";
                                    } elseif (isset($_GET['kd']) == 'gagal') {
                                        echo "<script type='text/javascript'>toastr.error('Data Gagal Di Tambahkan')</script>";
                                    } elseif (isset($_GET['kd']) == 'hpssukses') {
                                        echo "<script type='text/javascript'>toastr.success('Data Sukses Di Hapus')</script>";
                                    } elseif (isset($_GET['kd']) == 'hpsgagal') {
                                        echo "<script type='text/javascript'>toastr.error('Data Gagal Di Hapus')</script>";
                                    } elseif (isset($_GET['kd']) == 'updsukses') {
                                        echo "<script type='text/javascript'>toastr.success('Data Berhasil Di Update')</script>";
                                    } elseif (isset($_GET['kd']) == 'updgagal') {
                                        echo "<script type='text/javascript'>toastr.error('Data Gagal Di Update')</script>";
                                    }
                                    ?>
                                    <div class="tab-pane fade" id="pills-iconcontact" role="tabpanel" aria-labelledby="pills-iconcontact-tab">
                                        <div class="table-responsive">
                                            <table class="display table-sm" id="basic-1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>No.Rujukan</th>
                                                        <th>No.SEP</th>
                                                        <th>Tgl.Rujukan</th>
                                                        <th>Rencana Kunjungan</th>
                                                        <th>PPK Dirujuk</th>
                                                        <th>Diagnosa</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 0;
                                                    $admin = mysqli_query($koneksi, "SELECT * FROM t_rujukan ORDER BY id DESC");
                                                    while ($n = mysqli_fetch_array($admin)) {
                                                        $no++;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $n['noRujukan']; ?></td>
                                                            <td><?php echo $n['noSep']; ?></td>
                                                            <td><?php echo $n['tglRujukan']; ?></td>
                                                            <td><?php echo $n['tglRencanaKunjungan']; ?></td>
                                                            <td><?php echo $n['ppkDirujuk']; ?></td>
                                                            <td><?php echo $n['diagRujukan']; ?></td>
                                                            <td>
                                                                <a href="update_rujukan.php?kode=<?php echo $n['noRujukan']; ?>">
                                                                    <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit" data-toggle="tooltip" data-original-title="Update Rujukan"></i></button>
                                                                </a>
                                                                <a href="delete_rujukan.php?kode=<?php echo $n['noRujukan']; ?>" onclick="return confirm('Yakin akan menghapus data?')">
                                                                    <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash" data-toggle="tooltip" data-original-title="Hapus Rujukan"></i></button>
                                                                </a>
                                                                <a href="detail_rujukan_keluar_norujuk.php?kode=<?php echo $n['noRujukan']; ?>">
                                                                    <button type="button" class="btn btn-success btn-xs"><i class="fa fa-eye" data-toggle="tooltip" data-original-title="Lihat Detail Rujukan"></i></button>
                                                                </a>
                                                                <a href="cetakrujukan/rujukan.php?kode=<?php echo $n['noRujukan']; ?>&user=<?= $id_nama; ?>" target="_blank">
                                                                    <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-print" data-toggle="tooltip" data-original-title="Cetak Rujukan"></i></button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
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
            <!-- Page Sidebar Ends-->

            <!-- footer start-->
            <?php
            require '../template/footer.php';
            ?>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tempat & Tanggal Lahir</label>
                        <div class="row">
                            <div class="col-7">
                                <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="col-5">
                                <input type="date" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                        <select name="" class="form-select" id="">
                            <option value="">Laki-Laki</option>
                            <option value="">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No.Handphone</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Booking Via</label>
                        <select name="" class="form-select" id="">
                            <option value="">Mobile JKN</option>
                            <option value="">On-Site</option>
                            <option value="">Online Channel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Layanan</label>
                        <select name="" class="form-select" id="">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'library.php';
    ?>
</body>

</html>