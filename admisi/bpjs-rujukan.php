<?php
$master = "V-Claim ";
$page = "Rujukan";
require 'head.php';
require 'function.php';
include '../db/connect.php';
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');
session_start();
$id_nama = $_SESSION['namalengkap'];
if (!empty($_GET['kode'])) {
    $noSep = $_GET['kode'];
    $tglSep = $_GET['tgl'];
} else {
    $noSep = "";
    $tglSep = "";
}
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
                                        <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab"
                                                data-bs-toggle="pill" href="#pills-iconhome" role="tab"
                                                aria-controls="pills-iconhome" aria-selected="true"><i
                                                    class="icofont icofont-ui-home"></i>Tambah</a></li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconprofile-tab"
                                                data-bs-toggle="pill" href="#pills-iconprofile" role="tab"
                                                aria-controls="pills-iconprofile" aria-selected="false"><i
                                                    class="icofont icofont-man-in-glasses"></i>Cari</a></li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconcontact-tab"
                                                data-bs-toggle="pill" href="#pills-iconcontact" role="tab"
                                                aria-controls="pills-iconcontact" aria-selected="false"><i
                                                    class="icofont icofont-contacts"></i>Data Rujukan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="pills-icontabContent" role="form">
                                    <div class="tab-pane fade show active" id="pills-iconhome" role="tabpanel"
                                        aria-labelledby="pills-iconhome-tab">
                                        <form action="proses_insert_rujukan.php" method="post" role="form">
                                            <div class="mb-1 row">
                                                <label for="inputPassword"
                                                    class="col-sm-2 col-form-label-sm ">No.SEP</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="inputPassword" name="noSep" require
                                                        value="<?php echo $noSep;?>">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal
                                                    Rujukan</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control form-control-sm"
                                                        name="tglRujukan" value="<?php echo $tglSep;?>" require="true">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="" class="col-sm-2 col-form-label-sm ">Rencana
                                                    Kunjungan</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control form-control-sm"
                                                        name="tglRencanaKunjungan" require="true">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">PPK
                                                    Dirujuk</label>
                                                <div class="col-sm-10" require>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm"
                                                            name="ppkDirujuk" id='fas'>
                                                        <button class="btn btn-danger btn-sm" type="button" id="ppk"
                                                            onclick="modal('popup', 1)">Cari</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jenis
                                                    Pelayanan </label>
                                                <div class="col-sm-10">
                                                    <select name="jnsPelayanan" class="form-select form-select-sm" id=""
                                                        require>
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
                                                        <input type="text" class="form-control form-control-sm"
                                                            name="diagRujukan" id="diag">
                                                        <a href="javascript:void(0);" name="Cari Diagnosa"
                                                            onClick='javascript:window.open("cari_diagnosa_popup.php","Ratting", "width=550,height=170,left=150,top=200,toolbar=1,status=1");'><button
                                                                class="btn btn-danger btn-sm" data-toggle="tooltip"
                                                                data-original-title="Cari Diagnosa"
                                                                type="button">Cari</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tipe
                                                    Rujukan
                                                </label>
                                                <div class="col-sm-10">
                                                    <select name="tipeRujukan" class="form-select form-select-sm"
                                                        id="tipe-rujuk" require>
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
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="poliRujukan" id="pol">
                                                            <a href="javascript:void(0);" name="Cari Poli"
                                                                onClick='javascript:window.open("data_list_spesialistik_rujukan_pop.php","Ratting", "width=800,height=170,left=150,top=200,toolbar=1,status=1");'><button
                                                                    class="btn btn-danger btn-sm"
                                                                    data-original-title="Cari poli"
                                                                    type="button">Cari</button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                            var select1 = document.getElementById('tipe-rujuk');
                                            var select2 = document.getElementById('hasil');
                                            select2.style.display = 'none';

                                            select1.addEventListener('change', function() {
                                                if (this.value == "0" || this.value == "1") {
                                                    select2.style.display = 'block';
                                                } else {
                                                    select2.style.display = 'none';
                                                }
                                            })
                                            </script>
                                            <div class="mb-2 row">
                                                <label for="inputPassword"
                                                    class="col-sm-2 col-form-label-sm ">Catatan</label>
                                                <div class="col-sm-10">
                                                    <textarea name="catatan" class="form-control form-control-sm" id=""
                                                        cols="30" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">User
                                                    Entry</label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly class="form-control form-control-sm"
                                                        id="inputPassword" value="<?php echo $id_nama; ?>" name="user">
                                                </div>
                                            </div>

                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                <div class="col-sm-10">
                                                    <button class="btn btn-success btn-sm" type="submit">Proses</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-iconprofile" role="tabpanel"
                                        aria-labelledby="pills-iconprofile-tab">
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
                                            <div class="mb-1 row">
                                                <label for="inputPassword"
                                                    class="col-sm-2 col-form-label-sm ">Nomor</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm" id="noRujuk"
                                                        placeholder="Isi No Rujuk" required>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                <div class="col-sm-10">
                                                    <!-- <button class="btn btn-success btn-sm" name="pcare">P
                                                            Care</button> -->
                                                    <button class="btn btn-danger btn-sm" id="crujuk">Rumah
                                                        sakit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div id="bpjs">
                                            <div class="mb-1 row">
                                                <label for="inputPassword"
                                                    class="col-sm-2 col-form-label-sm ">Nomor</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm" id="nobpjs"
                                                        placeholder="Isi Nomor Kartu BPJS" name="nokartu" required>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                <div class="col-sm-10">
                                                    <!-- <button class="btn btn-success btn-sm" name="pcare">P
                                                            Care</button> -->
                                                    <button class="btn btn-danger btn-sm" id="cbpjs">Rumah
                                                        sakit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div id="multiple">
                                            <form action="data_rujukan_multiple.php" method="post" role="form">
                                                <div class="mb-1 row">
                                                    <label for="inputPassword"
                                                        class="col-sm-2 col-form-label-sm ">Nomor</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control form-control-sm"
                                                            id="inputPassword"
                                                            placeholder="Isi Nomor Kartu BPJS Multiple Rec"
                                                            name="nokartu" required>
                                                    </div>
                                                </div>
                                                <div class="mb-1 row">
                                                    <label for="inputPassword"
                                                        class="col-sm-2 col-form-label-sm "></label>
                                                    <div class="col-sm-10">
                                                        <!-- <button class="btn btn-success btn-sm" name="pcare">P
                                                            Care</button> -->
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
                                    $(document).ready(function() {
                                        $('[data-toggle="tooltip"]').tooltip({
                                            placement: 'top'
                                        });
                                    });
                                    </script>
                                    <?php
                                    include 'fungsi.php';
                                        $id_nama = $_SESSION['namalengkap'];
                                        ?>
                                    <div class="tab-pane fade" id="pills-iconcontact" role="tabpanel"
                                        aria-labelledby="pills-iconcontact-tab">
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
                                                        while ($n=mysqli_fetch_array($admin)) {
                                                            $no++;
                                                        ?>
                                                    <tr>
                                                        <td><?php echo $no;?></td>
                                                        <td><?php echo $n['noRujukan'];?></td>
                                                        <td><?php echo $n['noSep'];?></td>
                                                        <td><?php echo $n['tglRujukan'];?></td>
                                                        <td><?php echo $n['tglRencanaKunjungan'];?></td>
                                                        <td><?php echo $n['ppkDirujuk'];?></td>
                                                        <td><?php echo $n['diagRujukan'];?></td>
                                                        <td>
                                                            <a
                                                                href="update_rujukan.php?kode=<?php echo $n['noRujukan'];?>">
                                                                <button type="button" class="btn btn-warning btn-xs"><i
                                                                        class="fa fa-edit" data-toggle="tooltip"
                                                                        data-original-title="Update Rujukan"></i></button>
                                                            </a>
                                                            <a href="delete_rujukan.php?kode=<?php echo $n['noRujukan'];?>"
                                                                onclick="return confirm('Yakin akan menghapus data?')">
                                                                <button type="button" class="btn btn-danger btn-xs"><i
                                                                        class="fa fa-trash" data-toggle="tooltip"
                                                                        data-original-title="Hapus Rujukan"></i></button>
                                                            </a>
                                                            <a
                                                                href="detail_rujukan_keluar_norujuk.php?kode=<?php echo $n['noRujukan'];?>">
                                                                <button type="button" class="btn btn-success btn-xs"><i
                                                                        class="fa fa-eye" data-toggle="tooltip"
                                                                        data-original-title="Lihat Detail Rujukan"></i></button>
                                                            </a>
                                                            <a href="cetakrujukan/rujukan.php?kode=<?php echo $n['noRujukan'];?>&user=<?=$id_nama;?>"
                                                                target="_blank">
                                                                <button type="button" class="btn btn-primary btn-xs"><i
                                                                        class="fa fa-print" data-toggle="tooltip"
                                                                        data-original-title="Cetak Rujukan"></i></button>
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
            </div>
            <?php require 'footer.php';?>
        </div>
    </div>
    <!-- Modal Faskes -->
    <div class="modal fade" id="popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="ppk-cari">
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="text" class="form-control form-control-sm" name="cari" require="true"
                                    placeholder="kata Kunci">
                            </div>
                            <div class="col-sm-4">
                                <select name="jenislayanan" class="form-select form-select-sm">
                                    <option>- Jenis Layanan -</option>
                                    <option value="1">Rawat Inap</option>
                                    <option value="2">Rawat Jalan</option>
                                </select>
                            </div>
                            <div class="col sm-4 text-end">
                                <button class="btn btn-outline-info" type="button" id="carippk">Cari</button>
                            </div>
                        </div>
                    </form>
                    <div id="isi">

                    </div>
                    <script type="text/javascript">
                    function value_data(id) {
                        document.getElementById('fas').value = id;
                    }
                    </script>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

    <!-- Modal Cari Rujukan -->
    <div class="modal fade" id="carirujukan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="carirujukanLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="carirujukanLabel">Detail Rujukan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: #edede9;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-success">
                                    <div class="card-header" style="background-color: #2a9d8f; color:white;">
                                        <h3 class="card-title">
                                            <i class="fas fa-newspaper text-white"></i>
                                            &nbsp;&nbsp;DATA RUJUK
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <dl class="row">
                                            <dt class="col-sm-4">Asal Faskes</dt>
                                            <dd class="col-sm-8"><span id="asalrujuk"></span></dd>
                                            <dt class="col-sm-4">No. Kunjungan</dt>
                                            <dd class="col-sm-8"><span id="nokunjung"></span></dd>
                                            <dt class="col-sm-4">Tanggal Kunjungan</dt>
                                            <dd class="col-sm-8"><span id="tglkunjung"></span></dd>
                                            <dt class="col-sm-4">Kode Provider Perujuk</dt>
                                            <dd class="col-sm-8"><span id="kdfaskesrujukan"></span>
                                            <dd>
                                            <dt class="col-sm-4">Nama Provider Perujuk</dt>
                                            <dd class="col-sm-8"><span id="nmfaskesrujukan"></span></dd>
                                            <dt class="col-sm-4">Kode Provider Umum</dt>
                                            <dd class="col-sm-8"><span id="kodeproum"></span></dd>
                                            <dt class="col-sm-4">Nama Provider Umum</dt>
                                            <dd class="col-sm-8"><span id="namaproum"></span></dd>
                                            <dt class="col-sm-4">Kode Diagnosa</dt>
                                            <dd class="col-sm-8"><span id="kddiagawal"></span></dd>
                                            <dt class="col-sm-4">Nama Diagnosa</dt>
                                            <dd class="col-sm-8"><span id="ndiagnosa"></span></dd>
                                            <dt class="col-sm-4">Keluhan</dt>
                                            <dd class="col-sm-8"><span id="keluhan"></span></dd>
                                            <dt class="col-sm-4">Poli Rujukan</dt>
                                            <dd class="col-sm-8"><span id="politujuan"></span> - <span
                                                    id="namapoli"></span></dd>
                                            <dt class="col-sm-4">Jenis pelayanan</dt>
                                            <dd class="col-sm-8"><span id="jenislayanan"></span></dd>
                                            </dd>
                                        </dl>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-success">
                                    <div class="card-header" style="background-color: #2a9d8f; color:white;">
                                        <h3 class="card-title">
                                            <i class="fas fa-newspaper text-white"></i>
                                            &nbsp;&nbsp;DATA PESERTA
                                        </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <dl class="row">
                                            <dt class="col-sm-4">No. Kartu BPJS</dt>
                                            <dd class="col-sm-8"><span id="nokartu"></span></dd>
                                            <dt class="col-sm-4">NIK Peserta</dt>
                                            <dd class="col-sm-8"><span id="nik"></span></dd>
                                            <dt class="col-sm-4">Nama Peserta</dt>
                                            <dd class="col-sm-8"><span id="nama"></span></dd>
                                            <dt class="col-sm-4">Jenis Kelamin</dt>
                                            <dd class="col-sm-8"><span id="sex"></span></dd>
                                            <dt class="col-sm-4">Pisa</dt>
                                            <dd class="col-sm-8"><span id="pisa"></span></dd>
                                            <dt class="col-sm-4">No. MR</dt>
                                            <dd class="col-sm-8"><span id="nomr"></span></dd>
                                            <dt class="col-sm-4">No. Telp</dt>
                                            <dd class="col-sm-8"><span id="nohp"></span></dd>
                                            <dt class="col-sm-4">Tanggal Lahir</dt>
                                            <dd class="col-sm-8"><span id="tgllahir"></span></dd>
                                            <dt class="col-sm-4">Status Peserta</dt>
                                            <dd class="col-sm-8"><span id="status"></span></dd>
                                            <dt class="col-sm-4">Jenis Peserta</dt>
                                            <dd class="col-sm-8"><span id="jnspeserta"></span>
                                            <dd>
                                            <dt class="col-sm-4">Hak Kelas</dt>
                                            <dd class="col-sm-8"><span id="kelasrawathak"></span>
                                            <dt class="col-sm-4">No. RM</dt>
                                            <dd class="col-sm-8"><span id="norm"></span></dd>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'script.php';?>
</body>

</html>
<script type="text/javascript">
$(document).ready(function() {
    $("#carippk").click(function() {
        aksi();
    })
    $("#crujuk").click(function() {
        cekrujuk('noRujuk', 'rujuk');
    })
    $("#cbpjs").click(function() {
        cekrujuk('nobpjs', 'bpjs');
    })

    function cekrujuk(id, a) {
        var no = document.getElementById(id).value;
        if (no == '') {
            Swal.fire({
                title: "Oops...",
                text: "Form Tidak Tidak Boleh Kosong",
                icon: "error"
            });
        } else {
            if (a == "rujuk") {
                var hasil = "no=" + no + "&id=0";
            } else {
                var hasil = "no=" + no + "&id=1";
            }
            $.ajax({
                type: "POST",
                data: hasil,
                url: "detail_rujukan.php",
                dataType: "json",
                success: function(data) {
                    if (data.success == false) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: data.message,
                        });
                    } else {
                        cetak('nama', 'nama');
                        cetak('nokartu', 'nokartu');
                        cetak('nik', 'nik');
                        cetak('sex', 'sex');
                        cetak('nomr', 'noMR');
                        cetak('norm', 'norm');
                        cetak('nohp', 'notelp');
                        cetak('tgllahir', 'tgllahir');
                        cetak('pisa', 'pisa');
                        cetak('status', 'statuspeserta');
                        cetak('jnspeserta', 'jnspeserta');
                        cetak('kelasrawathak', 'kelasrawathak');
                        cetak('asalrujuk', 'asalrujuk');
                        cetak('tglkunjung', 'tglkunjung');
                        cetak('kdfaskesrujukan', 'kdfaskesrujukan');
                        cetak('nmfaskesrujukan', 'nmfaskesrujukan');
                        cetak('namapoli', 'namapoli');
                        cetak('ndiagnosa', 'ndiagnosa');
                        cetak('namaproum', 'namaproum');
                        cetak('kodeproum', 'kodeproum');
                        cetak('nokunjung', 'nokunjung');
                        cetak('jenislayanan', 'jenispelayanan');
                        cetak('kddiagawal', 'kddiagawal');
                        cetak('keluhan', 'keluhan');
                        cetak('politujuan', 'politujuan');

                        function cetak(id, nama) {
                            document.getElementById(id).innerHTML = data.peserta[nama];
                        }
                        modal('carirujukan', 1);
                    }
                }
            })
        }
    }

    function aksi() {
        var data = $("#ppk-cari").serialize();
        $.ajax({
            type: "POST",
            data: data,
            url: "cari_faskes_popup.php",
            success: function(data) {
                $('#isi').html(data);
            }
        })
    }
})

function modal(id, fungsi) {
    var modalfs = new bootstrap.Modal(document.getElementById(id));
    if (fungsi) {
        modalfs.show();
        console.log('Modal Tampil');
    } else {
        modalfs.hide();
        console.log('Modal Tutup');
    }
}
</script>