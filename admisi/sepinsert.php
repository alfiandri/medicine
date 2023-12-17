<?php
$master = "V-Claim";
$page = "Insert SEP";
require 'head.php';
error_reporting(0);
require_once 'vendor/autoload.php';
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
        <!--Page Header Ends-->
        <!--Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php require 'sidebar.php';?>
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
                                    <li class="breadcrumb-item active"><?= $page ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-mb-12 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Cari No
                                                Rujuk</label>
                                            <div class="col-sm-3">
                                                <select id="pilihan" class="form-select form-select-sm" require>
                                                    <option value="1">Rujukan</option>
                                                    <option value="2">Pcare</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4" require>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id='noRUJUK'>
                                                    <button class="btn btn-danger btn-sm" type="button"
                                                        id="norujuksubmit">Cari</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <form id="isisep" method="post">
                                    <div class="row">
                                        <div class="col-mb-6 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nama</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control form-control-sm" id="nama"
                                                    name="nama" readonly>
                                            </div>
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm">No.
                                                RM</label>
                                            <div class="col-sm-4">
                                                <div class="input-group sm-3">
                                                    <div class="input-group-text">
                                                        <input class="form-check-input mt-0" type="checkbox" value=""
                                                            aria-label="" name="cob">
                                                        <span class="input-text">
                                                            <p> Peserta COB</p>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-sm"
                                                        aria-label="" name="norm" id="norm" readonly>
                                                </div>
                                            </div>
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tgl
                                                Lahir</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control form-control-sm" id="tgllahir"
                                                    name="tgllahir" readonly>
                                            </div>
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm">No
                                                Kartu</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control form-control-sm" id="noK"
                                                    name="noKartu" readonly>
                                            </div>
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Kelas Rawat
                                            </label>
                                            <div class="col-sm-4">
                                                <select name="klsRawatHak" class="form-select form-select-sm"
                                                    id="kelasrawathak" require readonly>
                                                    <option value="">-</option>
                                                    <option value="1">Kelas 1</option>
                                                    <option value="2">Kelas 2</option>
                                                    <option value="3">Kelas 3</option>
                                                </select>
                                            </div>
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm">Jenis
                                                Peserta</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control form-control-sm" id="jnspeserta"
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="md-6 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jenis
                                                Pelayanan </label>
                                            <div class="col-sm-4">
                                                <select name="jnsPelayanan" class="form-select form-select-sm"
                                                    id="jenispelayanankode" require readonly>
                                                    <option value="">-</option>
                                                    <option value="1">Rawat Inap</option>
                                                    <option value="2">Rawat Jalan</option>
                                                </select>
                                            </div>
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Kelas Rawat
                                                Naik
                                            </label>
                                            <div class="col-sm-4">
                                                <select name="klsRawatNaik" class="form-select form-select-sm" id="naik"
                                                    require>
                                                    <option value="">-Diisi Jika Naik Kelas-</option>
                                                    <option value="1">VVIP</option>
                                                    <option value="2">VIP</option>
                                                    <option value="3">Kelas 1</option>
                                                    <option value="4">Kelas 2</option>
                                                    <option value="5">Kelas 3</option>
                                                    <option value="6">ICCU</option>
                                                    <option value="7">ICU</option>
                                                    <option value="8">Diatas Kelas 1</option>
                                                </select>
                                            </div>
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Asal Rujukan
                                            </label>
                                            <div class="col-sm-4">
                                                <select name="asalRujukan" class="form-select form-select-sm"
                                                    id="asalrujukkode" require readonly>
                                                    <option value="">-Asal Rujukan-</option>
                                                    <option value="1">Faskes 1</option>
                                                    <option value="2">Faskes 2 (RS)</option>
                                                </select>
                                            </div>
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Dokter
                                                DPJP</label>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm" name=""
                                                        id="">
                                                    <a href="javascript:void(0);" name="Cari Diagnosa"
                                                        onClick='javascript:window.open("cari-dpjp.php","Ratting", "width=550,height=170,left=150,top=200,toolbar=1,status=1");'><button
                                                            class="btn btn-success btn-sm" data-toggle="tooltip"
                                                            data-original-title="Cari Diagnosa"
                                                            type="button">Cari</button></a>
                                                </div>
                                            </div>
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal
                                                Rujukan</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control form-control-sm"
                                                    name="tglRujukan" id="tglkunjung" require="true" readonly>
                                            </div>
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">PPK Asal
                                                Rujukan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control form-control-sm"
                                                    id="nmfaskesrujukan" name="ppkRujukan" require readonly>
                                            </div>
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No
                                                Rujukan</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control form-control-sm" id="norujuk"
                                                    name="noRujukan" require readonly>
                                            </div>
                                            <label for="inputPassword" class="col-sm-1 col-form-label-sm ">Poli
                                                Tujuan</label>
                                            <div class="col-sm-5">
                                                <div class="input-group sm-3">
                                                    <div class="input-group-text">
                                                        <input class="form-check-input mt-0" type="checkbox"
                                                            id="eksekutif" name="eksekutif"
                                                            aria-label="Checkbox for following text input">
                                                        <span class="input-text">
                                                            <p> Eksekutif</p>
                                                        </span>
                                                    </div>
                                                    <input type="text" class="form-control form-control-sm"
                                                        aria-label="Text input with checkbox" name="tujuan"
                                                        id="politujuan" readonly>
                                                </div>
                                            </div>
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Diagnosa
                                                Awal</label>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="diagAwal" id="ndiagnosakode">
                                                    <a href="javascript:void(0);" name="Cari Diagnosa"
                                                        onClick='javascript:window.open("cari_diagnosa_popup.php","Ratting", "width=550,height=170,left=150,top=200,toolbar=1,status=1");'><button
                                                            class="btn btn-success btn-sm" data-toggle="tooltip"
                                                            data-original-title="Cari Diagnosa"
                                                            type="button">Cari</button></a>
                                                </div>
                                            </div>
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No
                                                Telp</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control form-control-sm" id="nohp"
                                                    name="noTelp" require>
                                            </div>
                                            <label for="inputPassword"
                                                class="col-sm-2 col-form-label-sm ">Catatan</label>
                                            <div class="col-sm-4">
                                                <textarea name="catatan" class="form-control form-control-sm"
                                                    id="catatan" rows="1"></textarea>
                                            </div>
                                            <div class="form-check col-sm-5">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" name="katarak">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Centang Jika Peserta Mendapatkan Surat Oprasi Katarak
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="biaya">
                                        <div class="mb-1 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pembiayaan
                                            </label>
                                            <div class="col-sm-10">
                                                <select name="pembiayaan" class="form-select form-select-sm"
                                                    id="pembiayaan" require>
                                                    <option value="">-Pembiayaan-</option>
                                                    <option value="1">Pribadi</option>
                                                    <option value="2">Pemberi Kerja</option>
                                                    <option value="3">Asuransi Kesehatan Tambahan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Penanggung
                                                Jawab</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-control-sm" id="tjawab"
                                                    name="penanggungJawab" require>
                                            </div>
                                        </div>
                                        <script>
                                        var pembiayaan = document.getElementById('pembiayaan');
                                        var tjawab = document.getElementById('tjawab');
                                        pembiayaan.addEventListener('change', function() {
                                            if (pembiayaan.value == "1") {
                                                tjawab.value = "Pribadi";
                                            } else {
                                                tjawab.value = "";
                                            }
                                        })
                                        </script>
                                    </div>
                                    <hr>
                                    <div class="mb-1">
                                        <div class="row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Status
                                                Kecelakaan
                                            </label>
                                            <div class="col-sm-10">
                                                <select name="lakalantas" class="form-select form-select-sm" id="laka"
                                                    require>
                                                    <option value="0">Bukan Kecelakaan Lalu Lintas [BKLL]</option>
                                                    <option value="1">KLL dan bukan kecelakaan kerja [BKK]</option>
                                                    <option value="2">KLL dan KK</option>
                                                    <option value="3">KK</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1 row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No LP</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-sm" id="inputPassword"
                                                name="nolp" require>
                                        </div>
                                    </div>
                                    <div id="ll">
                                        <div class="mb-1 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal
                                                Kejadian</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control form-control-sm"
                                                    name="tglkejadian" require="true">
                                            </div>
                                        </div>
                                        <div class="mb-2 row">
                                            <label for="inputPassword"
                                                class="col-sm-2 col-form-label-sm ">Keterangan</label>
                                            <div class="col-sm-10">
                                                <textarea name="keterangan" class="form-control form-control-sm" id=""
                                                    cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-1">
                                            <div class="row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Suplesi
                                                </label>
                                                <div class="col-sm-10">
                                                    <select name="noSepSuplesi" class="form-select form-select-sm"
                                                        id="suplesi" require>
                                                        <option value="0">Tidak</option>
                                                        <option value="1">Ya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-1" id="nosuplesi">
                                            <div class="row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No SEP
                                                    Suplesi</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="inputPassword" name="nosuplesi" require>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                        var suplesi = document.getElementById('suplesi');
                                        var nosuplesi = document.getElementById('nosuplesi');
                                        nosuplesi.style.display = 'none';
                                        suplesi.addEventListener('change', function() {
                                            if (suplesi.value == "0") {
                                                nosuplesi.style.display = 'none';
                                            } else {
                                                nosuplesi.style.display = 'block';
                                            }
                                        });
                                        </script>
                                        <div class="mb-1 row">
                                            <label for="inputPassword"
                                                class="col-sm-2 col-form-label-sm ">Provinsi</label>
                                            <div class="col-sm-10" require>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="kdPropinsi" id='prov'>
                                                    <a href="javascript:void(0);" name="Cari prov"
                                                        onClick='javascript:window.open("provinsi.php","Ratting", "width=550,height=170,left=150,top=200,toolbar=1,status=1");'><button
                                                            class="btn btn-success btn-sm" data-toggle="tooltip"
                                                            data-original-title="Cari Prov"
                                                            type="button">Cari</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputPassword"
                                                class="col-sm-2 col-form-label-sm ">Kabupaten</label>
                                            <div class="col-sm-10" require>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="kdKabupaten" id='kab'>
                                                    <a href="javascript:void(0);" id="btnkab" name="Cari kab"
                                                        onClick='ambil(1);'><button class="btn btn-success btn-sm"
                                                            data-toggle="tooltip" data-original-title="Cari Kab"
                                                            type="button">Cari</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <label for="inputPassword"
                                                class="col-sm-2 col-form-label-sm ">Kecamatan</label>
                                            <div class="col-sm-10" require>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="kdKecamatan" id='kec'>
                                                    <a href="javascript:void(0);" id="btnkec" name="Cari kec"
                                                        onClick='ambil(2);'><button class="btn btn-success btn-sm"
                                                            data-toggle="tooltip" data-original-title="Cari Kec"
                                                            type="button">Cari</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tujuan
                                                Kunjungan
                                            </label>
                                            <div class="col-sm-10">
                                                <select name="tujuanKunj" class="form-select form-select-sm" id="tujkun"
                                                    require>
                                                    <option value="0">Normal</option>
                                                    <option value="1">Prosedur</option>
                                                    <option value="2">Konsul Dokter</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Flag
                                                Procedure
                                            </label>
                                            <div class="col-sm-10">
                                                <select name="flagProcedure" class="form-select form-select-sm"
                                                    id="flag" require>
                                                    <option value="">-</option>
                                                    <option value="0">Prosedur Tidak Berkelanjutan</option>
                                                    <option value="1">Prosedur dan Terapi Berkelanjutan
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Penunjang
                                            </label>
                                            <div class="col-sm-10">
                                                <select name="kdPenunjang" class="form-select form-select-sm" require>
                                                    <option value="">-</option>
                                                    <option value="1">Radioterapi</option>
                                                    <option value="2">Kemoterapi</option>
                                                    <option value="3">Rehabilitasi Medik</option>
                                                    <option value="4">Rehabilitasi Psikososial</option>
                                                    <option value="5">Transfusi Darah</option>
                                                    <option value="6">Pelayanan Gigi</option>
                                                    <option value="7">Laboratorium</option>
                                                    <option value="8">USG</option>
                                                    <option value="9">Farmasi</option>
                                                    <option value="10">Lain-Lain</option>
                                                    <option value="11">MRI</option>
                                                    <option value="12">HEMODIALISA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">AssesmentPel
                                            </label>
                                            <div class="col-sm-10">
                                                <select name="assesmentPel" class="form-select form-select-sm" require>
                                                    <option value="">-</option>
                                                    <option value="1">Poli spesialis tidak tersedia pada hari sebelumnya
                                                    </option>
                                                    <option value="2">Jam Poli telah berakhir pada hari sebelumnya
                                                    </option>
                                                    <option value="3">Dokter Spesialis yang dimaksud tidak praktek pada
                                                        hari sebelumnya</option>
                                                    <option value="4">Atas Instruksi RS</option>
                                                    <option value="5">Tujuan Kontrol</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1 row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No Surat
                                            Kontrol</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control form-control-sm" name="noSurat"
                                                require="true">
                                        </div>
                                    </div>
                                    <div id="dpjplayan">
                                        <div class="mb-1 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label-sm ">DPJP</label>
                                            <div class="col-sm-10" require>
                                                <div class="input-group">
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="kodeDPJP" id='dpjp'>
                                                    <a href="javascript:void(0);" name="Cari dpjp"
                                                        onClick='ambil(3);'><button class="btn btn-success btn-sm"
                                                            data-toggle="tooltip" data-original-title="Cari dpjp"
                                                            type="button">Cari</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" name="user" value="agus" style="display: none;">
                                    <input type="text" name="noMR" id="nomr" style="display: none;">
                                    <div class="mb-12">
                                        <button class="btn btn-success" type="button" id="buatsep">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- Page Sidebar Ends-->

            <!-- footer start-->
            <?php
         require 'footer.php';
         ?>
        </div>
    </div>
    <script>
    var dpjplayan = document.getElementById('dpjplayan');
    dpjplayan.style.display = 'none';
    $(document).ready(function() {
        $("#norujuksubmit").click(function() {
            var nomor = document.getElementById('noRUJUK').value;
            var plrs = document.getElementById('pilihan').value;
            if (nomor == '') {
                Swal.fire({
                    title: "Oops...",
                    text: "Harap Diisi Form Nomor Rujuk",
                    icon: "error"
                });
            } else {
                if (plrs == "1") {
                    var hasil = "no=" + nomor + "&id=0";
                } else {
                    var hasil = "no=" + nomor + "&id=1";
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
                            cetak('noK', 'nokartu');
                            // cetak('nik', 'nik');
                            // cetak('sex', 'sex');
                            cetak('nomr', 'noMR');
                            cetak('norm', 'norm');
                            cetak('nohp', 'notelp');
                            cetak('tgllahir', 'tgllahir');
                            // cetak('pisa', 'pisa');
                            // cetak('status', 'statuspeserta');
                            cetak('jnspeserta', 'jnspeserta');
                            cetak('kelasrawathak', 'kelasrawathak');
                            cetak('asalrujukkode', 'asalrujukkode');
                            cetak('jenispelayanankode', 'jenispelayanankode');
                            cetak('tglkunjung', 'tglkunjung');
                            cetak('nmfaskesrujukan', 'kdfaskesrujukan');
                            // cetak('nmfaskesrujukan', 'nmfaskesrujukan');
                            // cetak('namapoli', 'namapoli');
                            // cetak('ndiagnosa', 'ndiagnosa');
                            // cetak('namaproum', 'namaproum');
                            // cetak('kodeproum', 'kodeproum');
                            cetak('norujuk', 'norujuk');
                            // cetak('kddiagawal', 'kddiagawal');
                            // cetak('keluhan', 'keluhan');
                            cetak('ndiagnosakode', 'ndiagnosakode');
                            cetak('politujuan', 'politujuan');
                            if (data.peserta['jenispelayanankode'] == "1") {
                                dpjplayan.style.display = 'none';
                            } else {
                                dpjplayan.style.display = 'block';
                            }

                            function cetak(id, nama) {
                                document.getElementById(id).value = data.peserta[nama];
                            }
                        }
                    }
                })
            }
        })
        // nomr, 
        $("#buatsep").click(function() {
            var data = $('#isisep').serialize();
            console.log(data);
            $.ajax({
                type: "POST",
                data: data,
                dataType: "json",
                url: 'prosesinsersep.php',
                success: function(data) {
                    if (data.success == false) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: data.message,
                        });
                    } else {
                        Swal.fire({
                            icon: "success",
                            title: "Data Berhasil Disimpan",
                            text: data.message,
                        });
                    }
                }
            })
        })
    })
    var a = document.getElementById('naik');
    var b = document.getElementById('biaya');
    b.style.display = 'none';
    a.addEventListener('change', function() {
        if (a.value == "") {
            b.style.display = 'none';
        } else {
            b.style.display = 'block';
        }
    });

    var c = document.getElementById('laka');
    var contain = document.getElementById('ll');
    contain.style.display = 'none';
    c.addEventListener('change', function() {
        if (c.value == "0") {
            contain.style.display = 'none';
        } else {
            contain.style.display = 'block';
        }
    });

    function ambil(data) {
        if (data == 1) {
            var url = "kabupaten.php?kode=" + prov.value;
            javascript: window.open(url, "Ratting",
                "width=550,height=170,left=150,top=200,toolbar=1,status=1");
        }
        if (data == 2) {
            var url = "kecamatan.php?kode=" + kab.value;
            javascript: window.open(url, "Ratting",
                "width=550,height=170,left=150,top=200,toolbar=1,status=1");
        }
        if (data == 3) {
            var url = "cari-dpjp.php"
            javascript: window.open(url, "Ratting",
                "width=550,height=170,left=150,top=200,toolbar=1,status=1");
        }
    }
    </script>
    <?= include 'script.php'; ?>

</body>

</html>

//admisi -> registrasi
//