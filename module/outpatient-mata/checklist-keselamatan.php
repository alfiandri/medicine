<?php
$master = "Pemeriksaan";
$page = "Formulir Checklist Keselamatan Pasien Kamar Bedah";
require 'head.php';
?>

<body onload="startTime()">
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
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
                                    <li class="breadcrumb-item active"><?= $page ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <form action="">
                        <div class="card">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Data
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="card-body">
                                                <div class="sm-2 row my-2">
                                                    <label class="col-sm-2 col-form-label">No - RM</label>
                                                    <div class="col-sm-5">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <input class="form-control" type="text" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row sm-2">
                                                    <label class="col-sm-2 col-form-label">Nama </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="row sm-2">
                                                    <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                    <div class="col-sm-5">
                                                        <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                                            <div class="form-check form-check-inline radio radio-primary">
                                                                <input class="form-check-input" id="pria" type="radio" name="kelamin" value="option1">
                                                                <label class="form-check-label mb-0" for="pria">Laki -
                                                                    laki<span class="digits"></span></label>
                                                            </div>
                                                            <div class="form-check form-check-inline radio radio-primary">
                                                                <input class="form-check-input" id="wanita" type="radio" name="kelamin" value="option1">
                                                                <label class="form-check-label mb-0" for="wanita">Perempuan<span class="digits"></span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row sm-2">
                                                    <label class="col-sm-2 col-form-label">Tanggal Lahir </label>
                                                    <div class="col-sm-5">
                                                        <input type="date" class="form-control" value="12/05/1965">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row sm-2">
                                                    <label class="col-sm-2 col-form-label">Alamat </label>
                                                    <div class="col-sm-5">
                                                        <textarea class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            SIGN IN
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>Sebelum Tindakan Anastesi</p>
                                                    <p>Perawatan rawat inap / rawat jalan dengan persiapan dan / perawat
                                                        anastesi melakukan verifikasi dan konfirmasi</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" id="validationFormCheck1" type="checkbox" required="">
                                                    <label class="form-check-label" for="validationFormCheck1">Identitas
                                                        Pasien</label>
                                                </div>
                                                <div class="col-sm-3">
                                                    <input class="form-check-input" id="validationFormCheck2" type="checkbox" required="">
                                                    <label class="form-check-label" for="validationFormCheck2">Prosedur
                                                        & Area Operasi </label>
                                                </div>
                                                <div class="row sm-2 my-2">
                                                    <label class="col-sm-4 col-form-label">Diagnosa</label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row sm-2 my-2">
                                                    <label class="col-sm-4 col-form-label">Prosedur dan area Operasi
                                                    </label>
                                                    <div class="col-sm-5">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row sm-3 position-relative">
                                                    <label class=" col-sm-4 form-label" for="validationTooltip04">Kelengkapan Inform Consent</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-check-input" id="validationFormCheck3" type="checkbox">
                                                        <label class="form-check-label" for="validationFormCheck3">Surat
                                                            Izin penggunaan produk darah </label>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input class="form-check-input" id="validationFormCheck4" type="checkbox">
                                                        <label class="form-check-label" for="validationFormCheck4">SIA
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <input class="form-check-input" id="validationFormCheck5" type="checkbox">
                                                        <label class="form-check-label" for="validationFormCheck5">SIO</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 my-3">
                                                    <h6>Penandaan Area Operasi Kanan Kiri
                                                        (Oleh DPJP atau dokter yang sedang bertugas di Unit DPJP
                                                        tersebut)
                                                    </h6>
                                                </div>
                                                <div class="row col-sm-12 position-relative">
                                                    <label class="col-sm-4 form-label" for="validationTooltip04">Persetujuan 3 Konsulen (untuk
                                                        operasi pembuangan mata)</label>
                                                    <div class="col-sm-5">
                                                        <select class="form-select" id="validationTooltip04" required="">
                                                            <option value="0">Ada</option>
                                                            <option value="1">Tidak Ada</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row col-sm-12 position-relative">
                                                    <label class="col-sm-4 form-label" for="validationTooltip05">Pemeriksaan Diagnostik &
                                                        Pemeriksaan Penunjang:</label>
                                                    <div class="col-sm-5">
                                                        <select class="form-select" id="validationTooltip05" required="" onchange="aksi();">
                                                            <option value="0">TIO</option>
                                                            <option value="1">CT Scan</option>
                                                            <option value="2">Biometri</option>
                                                            <option value="3">USG</option>
                                                            <option value="4">OCT</option>
                                                            <option value="5">EKG</option>
                                                            <option value="6">FFA</option>
                                                            <option value="7">Ketatometri</option>
                                                            <option value="8">Laboratorium</option>
                                                            <option value="9">Foto Fundus</option>
                                                            <option value="10">Thorax Foto</option>
                                                            <option value="11">Lainnya</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3" id="tampil">
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>
                                                    <script>
                                                        var select2 = document.getElementById('tampil');
                                                        select2.style.display = "none";
                                                        aksi = () => {
                                                            var select1 = document.getElementById(
                                                                'validationTooltip05');

                                                            if (select1.value == "11") {
                                                                select2.style.display = "block";
                                                            } else {
                                                                select2.style.display = "none";
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                                <div class="row col-sm-12 position-relative">
                                                    <label class="col-sm-4 form-label" for="validationTooltip05">Konsul</label>
                                                    <div class="col-sm-5">
                                                        <select class="form-select" id="validationTooltip05" required="">
                                                            <option value="0">IPD</option>
                                                            <option value="1">Anak</option>
                                                            <option value="2">Anastesi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row col-sm-12 my-2">
                                                    <label class="col-sm-4 form-label" for="validationTooltip06">Personal Higiene</label>
                                                    <div class="col-sm-5">
                                                        <select class="form-select" id="validationTooltip06" required="">
                                                            <option value="0">Mandi</option>
                                                            <option value="1">Cuci Muka</option>
                                                            <option value="2">Lepas Gigi Palsu</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row col-sm-12 my-2">
                                                    <label class="col-sm-4 form-label" for="validationTooltip07">Jenis
                                                        Anastesi</label>
                                                    <div class="col-sm-5">
                                                        <select class="form-select" id="validationTooltip07" required="">
                                                            <option value="0">AU</option>
                                                            <option value="1">Lokal</option>
                                                            <option value="2">NR / MAC</option>
                                                            <option value="3">Regional</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row col-sm-12 position-relative">
                                                    <label class="col-sm-4 form-label" for="validationTooltip08">Riwayat
                                                        Alergi</label>
                                                    <div class="col-sm-5">
                                                        <select class="form-select" id="validationTooltip08" required="" onchange="tampil();">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ada</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-3" id="alergi">
                                                        <input type="text" class="form-control" placeholder="Alergi Apa?">
                                                    </div>
                                                    <script>
                                                        var select2 = document.getElementById('alergi');
                                                        select2.style.display = "none";
                                                        tampil = () => {
                                                            var select1 = document.getElementById(
                                                                'validationTooltip08');

                                                            if (select1.value == "1") {
                                                                select2.style.display = "block";
                                                            } else {
                                                                select2.style.display = "none";
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                                <div class="row col-sm-12 my-2">
                                                    <label class="col-sm-4 form-label" for="">Puasa</label>
                                                    <div class="col-sm-5">
                                                        <select class="form-select" id="" required="">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row col-sm-12 my-2">
                                                    <label class="col-sm-4 form-label" for="">Persediaan
                                                        Darah</label>
                                                    <div class="col-sm-5">
                                                        <select class="form-select" id="" required="">
                                                            <option value="0">Tidak</option>
                                                            <option value="1">Ya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row col-sm-12 my-2">
                                                    <label class="col-sm-4 form-label" for="">Tanggal</label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" placeholder="" type="date">
                                                    </div>
                                                </div>
                                                <div class="row col-sm-12 my-2">
                                                    <label class="col-sm-4 form-label" for="">Jam</label>
                                                    <div class="col-sm-5">
                                                        <input class="form-control" placeholder="" type="time">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-center">
                                                    <button class="btn btn-success">Perawat Ruangan</button>
                                                </div>
                                                <div class="col-sm-6 text-center">
                                                    <button class="btn btn-success">Perawat Ruangan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        TIME OUT
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>Sebelum Tindakan Insisi</p>
                                                <p>Dipimpin oleh Perawat Sirkuler
                                                    Semua kegiatan ditangguhkan kecuali mengancam jiwa
                                                </p>
                                                <p>- Verbalisasi </p>
                                            </div>
                                            <div class="row col-sm-12">
                                                <div class="sm-3">
                                                    <input class="form-check-input" id="" type="checkbox">
                                                    <label class="form-check-label" for="">Anggota
                                                        Tim Bedah</label>
                                                </div>
                                                <div class="sm-4">
                                                    <input class="form-check-input" id="" type="checkbox">
                                                    <label class="form-check-label" for="">Kelengkapan Informed
                                                        Consent</label>
                                                </div>
                                                <div class="sm-3">
                                                    <input class="form-check-input" id="" type="checkbox">
                                                    <label class="form-check-label" for="">Identitas
                                                        Pasien </label>
                                                </div>
                                                <div class="sm-4">
                                                    <input class="form-check-input" id="" type="checkbox">
                                                    <label class="form-check-label" for="">Jenis dan
                                                        Ukuran Implant / IOL</label>
                                                </div>
                                                <div class="sm-4">
                                                    <input class="form-check-input" id="" type="checkbox">
                                                    <label class="form-check-label" for="">Jenis dan
                                                        Prosedur dan Area Operasi</label>
                                                </div>
                                            </div>
                                            <div class="row col-sm-12 my-2">
                                                <label class="col-sm-4 form-label" for="">Diagnosa</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <p>Prosedur / Tindakan Operasi :</p>
                                            </div>
                                            <div class="row col-sm-12 my-2">
                                                <label class="col-sm-4 form-label" for="">Penandaan Area
                                                    Operasi</label>
                                                <div class="col-sm-5">
                                                    <select class="form-select" id="" required="">
                                                        <option value="0">Kanan</option>
                                                        <option value="1">Kiri</option>
                                                        <option value="2">AU</option>
                                                        <option value="3">Lokal</option>
                                                        <option value="4">NR / MAC</option>
                                                        <option value="5">Regional</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row col-sm-12 my-2">
                                                <label class="col-sm-4 form-label" for="">Data Imaging </label>
                                                <div class="col-sm-5">
                                                    <select class="form-select" id="" required="">
                                                        <option value="0">Tidak Ada</option>
                                                        <option value="1">Ada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <p>Untuk Operator Anasthesi
                                                    Adakah Hal Khusus yang perlu perhatian :
                                                </p>
                                            </div>
                                            <div class="row col-sm-12 my-2">
                                                <label class="col-sm-4 form-label" for="">Untuk Perawat Instrumen
                                                    :</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <h6>Instrumen</h6>
                                            </div>
                                            <div class="row col-sm-12 my-2">
                                                <label class="col-sm-4 form-label" for="">Data Imaging </label>
                                                <div class="col-sm-5">
                                                    <select class="form-select" id="" required="">
                                                        <option value="0">Tidak</option>
                                                        <option value="1">Ya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row col-sm-12 my-2">
                                                <label class="col-sm-4 form-label" for="">Jam</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" placeholder="" type="time">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        SIGN OUT
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>Sebelum Menutup Luka dan Meninggalkan Kamar Operasi</p>
                                                <p>Perawat Sirkuler Melakukan dan Meninggalkan Kamar Operasi</p>
                                            </div>
                                            <div class="row col-sm-12 my-2">
                                                <label class="col-sm-4 form-label" for="">Prosedur Operasi yang telah
                                                    dilakukan:</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="row col-sm-12 my-2">
                                                <label class="col-sm-4 form-label" for="">Kelengkapan Instrumen, alat
                                                    tajam, kassa / sponge</label>
                                                <div class="col-sm-5">
                                                    <select class="form-select" id="" required="">
                                                        <option value="0">Tidak</option>
                                                        <option value="1">Ya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row col-sm-12 my-2">
                                                <label class="col-sm-4 form-label" for="">Spesimen untuk pemeriksaan
                                                    :</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="row col-sm-12">
                                                <div class="sm-3">
                                                    <input class="form-check-input" id="" type="checkbox">
                                                    <label class="form-check-label" for="">Diberi
                                                        label, lengkap dengan identitas pasien</label>
                                                </div>
                                                <div class="sm-4">
                                                    <input class="form-check-input" id="" type="checkbox">
                                                    <label class="form-check-label" for="">Formulir</label>
                                                </div>
                                                <div class="sm-3">
                                                    <input class="form-check-input" id="" type="checkbox">
                                                    <label class="form-check-label" for="">Tidak ada
                                                        pemeriksaan specimen</label>
                                                </div>
                                                <div class="sm-3">
                                                    <input class="form-check-input" id="" type="checkbox">
                                                    <label class="form-check-label" for="">Ada
                                                        Masalah Pada Alat</label>
                                                </div>
                                                <div class="sm-3">
                                                    <input class="form-check-input" id="" type="checkbox">
                                                    <label class="form-check-label" for="">Perhatian
                                                        Utama Fase Pemulihan:</label>
                                                </div>
                                            </div>
                                            <div class="row col-sm-12 my-2">
                                                <label class="col-sm-4 form-label" for="">Pemeriksaan Labor Pasca
                                                    Bedah</label>
                                                <div class="col-sm-5">
                                                    <select class="form-select" id="">
                                                        <option value="0">Tidak</option>
                                                        <option value="1">Ya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row col-sm-12 my-2">
                                                <label class="col-sm-4 form-label" for="">Puasa Pasca Bedah</label>
                                                <div class="col-sm-5">
                                                    <select class="form-select" id="" required="">
                                                        <option value="0">Tidak Perlu</option>
                                                        <option value="1">1 Jam</option>
                                                        <option value="2">4 Jam</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row col-sm-12 my-2">
                                                <label class="col-sm-4 form-label" for="">Jam</label>
                                                <div class="col-sm-5">
                                                    <input class="form-control" placeholder="" type="time">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <button class="btn btn-success">Perawat Sirkuler</button>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <button class="btn btn-success">DPJP</button>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <button class="btn btn-success">Anasthesi</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/chart/chartist/chartist.js"></script>
    <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="../assets/js/chart/knob/knob.min.js"></script>
    <script src="../assets/js/chart/knob/knob-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="../assets/js/dashboard/default.js"></script>
    <script src="../assets/js/notify/index.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/moment.min.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/tempusdominus-bootstrap-4.min.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <script src="../assets/js/datepicker/date-time-picker/datetimepicker.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>