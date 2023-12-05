<head>
    <base href="../">
    <?php include("head.php"); ?>
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <?php include("header.php"); ?>
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <?php include("sidebar.php"); ?>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3>Triase</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">Triase</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No. RM</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="00001">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Pasien</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="Ny Indah Sari Putri">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">No.Rawat</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="123124122">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                        <input type="text" value="2023-21-12" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Waktu</label>
                                        <input type="time" class="form-control" value="Mawar" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Transportasi</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">AGD</option>
                                            <option value="">Sendiri</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Cara Masuk</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Jalan</option>
                                            <option value="">Brankar</option>
                                            <option value="">Kursi Roda</option>
                                            <option value="">Digendong</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Alasan Kedatangan</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">Datang Sendiri</option>
                                            <option value="">Polisi</option>
                                            <option value="">Rujukan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Macam Kasus</label>
                                        <input type="text" value="Trauma Kecelakaan Lalu Lintas" class="form-control" id="exampleFormControlInput1">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-md-12 box-col-12">

                        <div class="file-content">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-pills" id="pills-icontab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Triase Primer</a></li>

                                        <li class="nav-item"><a class="nav-link" id="pills-iconprofile-tab" data-bs-toggle="pill" href="#pills-iconprofile" role="tab" aria-controls="pills-iconprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Triase Sekunder</a></li>
                                        <li class="nav-item"></li>
                                    </ul>
                                    <div class="tab-content" id="pills-icontabContent">
                                        <div class="tab-pane fade show active" id="pills-iconhome" role="tabpanel" aria-labelledby="pills-iconhome-tab">
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Keluhan Utama</label>
                                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Suhu (C)</label>
                                                        <input type="number" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Nyeri</label>
                                                        <input type="number" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Tensi</label>
                                                        <input type="number" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Nadi (/menit)</label>
                                                        <input type="number" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Saturasi O2 (%)</label>
                                                        <input type="number" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Respirasi(/menit)</label>
                                                        <input type="number" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Kebutuhan Khusus</label>
                                                        <select name="" class="form-select" id="">
                                                            <option value="">UPPA</option>
                                                            <option value="">Airbone</option>
                                                            <option value="">Dekontaminan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Catatan</label>
                                                        <input type="text" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Plan Keputusan</label>
                                                        <select name="" class="form-select" id="">
                                                            <option value="">Ruangan Resusitasi</option>
                                                            <option value="">Ruang Kritis</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Dokter/Petugas IGD</label>
                                                        <input type="text" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3 tabs-responsive-side">
                                                        <div class="nav flex-column nav-pills border-tab nav-left" id="v-pills-tab" role="tablist" aria-orientation="vertical"><a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Jalan Nafas</a><a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Pernafasan Dewasa</a><a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Pernafasan Anak</a><a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Sirkulasi Dewasa</a><a class="nav-link" id="v-pills-anak-tab" data-bs-toggle="pill" href="#v-pills-anak" role="tab" aria-controls="v-pills-anak" aria-selected="false">Sirkulasi Anak</a><a class="nav-link" id="v-pills-mental-tab" data-bs-toggle="pill" href="#v-pills-mental" role="tab" aria-controls="v-pills-mental" aria-selected="false">Mental Status</a><a class="nav-link" id="v-pills-nyeri-tab" data-bs-toggle="pill" href="#v-pills-nyeri" role="tab" aria-controls="v-pills-nyeri" aria-selected="false">Skor Nyeri</a><a class="nav-link" id="v-pills-triase-tab" data-bs-toggle="pill" href="#v-pills-triase" role="tab" aria-controls="v-pills-triase" aria-selected="false">Assesment Triase</a></div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="tab-content" id="v-pills-tabContent">
                                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link text-danger active" id="info-01-tab" data-bs-toggle="tab" href="#info-01" role="tab" aria-controls="info-01" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link text-danger" id="02-info-tab" data-bs-toggle="tab" href="#info-02" role="tab" aria-controls="info-02" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-01" role="tabpanel" aria-labelledby="info-01-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="">Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Sumbatan Total
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-02" role="tabpanel" aria-labelledby="02-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Sumbatan Parsial
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link text-danger active" id="info-03-tab" data-bs-toggle="tab" href="#info-03" role="tab" aria-controls="info-03" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link text-danger" id="04-info-tab" data-bs-toggle="tab" href="#info-04" role="tab" aria-controls="info-04" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-03" role="tabpanel" aria-labelledby="info-03-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Henti Nafas
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Frekuensi Nafas < 10x/menit </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-04" role="tabpanel" aria-labelledby="04-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Ada Nafas
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link text-danger active" id="info-05-tab" data-bs-toggle="tab" href="#info-05" role="tab" aria-controls="info-05" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link text-danger" id="06-info-tab" data-bs-toggle="tab" href="#info-06" role="tab" aria-controls="info-06" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-05" role="tabpanel" aria-labelledby="info-05-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Henti Nafas
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Reaksi berat, sianosis </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-06" role="tabpanel" aria-labelledby="06-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Retraksi sedang
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link text-danger active" id="info-07-tab" data-bs-toggle="tab" href="#info-07" role="tab" aria-controls="info-07" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link text-danger" id="08-info-tab" data-bs-toggle="tab" href="#info-08" role="tab" aria-controls="info-08" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-07" role="tabpanel" aria-labelledby="info-07-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Nadi Karotis Tidak Teraba
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-08" role="tabpanel" aria-labelledby="08-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Nadi peridier tidak teraba
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                CRT > 2 detik
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Akral Dingin
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Pucat
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-anak" role="tabpanel" aria-labelledby="v-pills-anak-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link  text-danger active" id="info-09-tab" data-bs-toggle="tab" href="#info-09" role="tab" aria-controls="info-09" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link text-danger" id="10-info-tab" data-bs-toggle="tab" href="#info-10" role="tab" aria-controls="info-10" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-09" role="tabpanel" aria-labelledby="info-09-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Nadi Karotis Tidak Teraba
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Pucat
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Akral Dingin
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                CRT > 4 detik
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-10" role="tabpanel" aria-labelledby="10-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Nadi peridier tidak teraba
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Pucat
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Akral Dingin
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                CRT 2 - 4 detik
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-mental" role="tabpanel" aria-labelledby="v-pills-mental-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link text-danger active" id="info-11-tab" data-bs-toggle="tab" href="#info-11" role="tab" aria-controls="info-11" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link text-danger" id="12-info-tab" data-bs-toggle="tab" href="#info-12" role="tab" aria-controls="info-12" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-11" role="tabpanel" aria-labelledby="info-11-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Tidak Respon (GCS < 8) </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-12" role="tabpanel" aria-labelledby="12-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Respon terhadap nyer (GCS 9-12)
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-nyeri" role="tabpanel" aria-labelledby="v-pills-nyeri-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link text-danger active" id="info-13-tab" data-bs-toggle="tab" href="#info-13" role="tab" aria-controls="info-13" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link text-danger" id="14-info-tab" data-bs-toggle="tab" href="#info-14" role="tab" aria-controls="info-14" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-13" role="tabpanel" aria-labelledby="info-13-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Nyeri Jantung VAS 10 </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-14" role="tabpanel" aria-labelledby="14-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Nyeri Jantung VAS 7-9
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-triase" role="tabpanel" aria-labelledby="v-pills-triase-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link text-danger active" id="info-15-tab" data-bs-toggle="tab" href="#info-15" role="tab" aria-controls="info-15" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link text-danger" id="16-info-tab" data-bs-toggle="tab" href="#info-16" role="tab" aria-controls="info-16" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-15" role="tabpanel" aria-labelledby="info-15-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Immediate/Segera </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-16" role="tabpanel" aria-labelledby="16-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Emergent/Gawat Darurat
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
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

                                        <div class="tab-pane fade show active" id="pills-iconprofile" role="tabpanel" aria-labelledby="pills-iconprofile-tab">
                                            <hr>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Anamnesa Singkat</label>
                                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Suhu (C)</label>
                                                        <input type="number" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Nyeri</label>
                                                        <input type="number" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Tensi</label>
                                                        <input type="number" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Nadi (/menit)</label>
                                                        <input type="number" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Saturasi O2 (%)</label>
                                                        <input type="number" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Respirasi(/menit)</label>
                                                        <input type="number" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Catatan</label>
                                                        <input type="text" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Plan Keputusan</label>
                                                        <select name="" class="form-select" id="">
                                                            <option value="">Zona Kuning</option>
                                                            <option value="">Zona Hijau</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="exampleFormControlInput1" class="form-label">Dokter/Petugas IGD</label>
                                                        <input type="text" class="form-control" name="" id="">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3 tabs-responsive-side">
                                                        <div class="nav flex-column nav-pills border-tab nav-left" id="v-pills-tab" role="tablist" aria-orientation="vertical"><a class="nav-link active" id="v-pills-nafas-tab" data-bs-toggle="pill" href="#v-pills-nafas" role="tab" aria-controls="v-pills-nafas" aria-selected="true">Jalan Nafas</a><a class="nav-link" id="v-pills-dewasa-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Pernafasan Dewasa</a><a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Pernafasan Anak</a><a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Sirkulasi Dewasa</a><a class="nav-link" id="v-pills-anak-tab" data-bs-toggle="pill" href="#v-pills-anak" role="tab" aria-controls="v-pills-anak" aria-selected="false">Sirkulasi Anak</a><a class="nav-link" id="v-pills-mental-tab" data-bs-toggle="pill" href="#v-pills-mental" role="tab" aria-controls="v-pills-mental" aria-selected="false">Mental Status</a><a class="nav-link" id="v-pills-nyeri-tab" data-bs-toggle="pill" href="#v-pills-nyeri" role="tab" aria-controls="v-pills-nyeri" aria-selected="false">Skor Nyeri</a><a class="nav-link" id="v-pills-triase-tab" data-bs-toggle="pill" href="#v-pills-triase" role="tab" aria-controls="v-pills-triase" aria-selected="false">Assesment Triase</a></div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="tab-content" id="v-pills-tabContent">
                                                            <div class="tab-pane fade show active" id="v-pills-nafas" role="tabpanel" aria-labelledby="v-pills-nafas-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link text-warning active" id="info-20-tab" data-bs-toggle="tab" href="#info-20" role="tab" aria-controls="info-20" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 3</a></li>
                                                                    <li class="nav-item"><a class="nav-link text-success" id="21-info-tab" data-bs-toggle="tab" href="#info-21" role="tab" aria-controls="info-21" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 4</a></li>
                                                                    </li>
                                                                    <li class="nav-item"><a class="nav-link text-secondary" id="22-info-tab" data-bs-toggle="tab" href="#info-22" role="tab" aria-controls="info-22" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 5</a></li>

                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-20" role="tabpanel" aria-labelledby="info-20-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Urgensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Bebas
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-21" role="tabpanel" aria-labelledby="21-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Semi Urgenssi/Urgensi Rendah</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Bebas
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-22" role="tabpanel" aria-labelledby="22-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Non Urgensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Bebas
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link active" id="info-03-tab" data-bs-toggle="tab" href="#info-03" role="tab" aria-controls="info-03" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link" id="04-info-tab" data-bs-toggle="tab" href="#info-04" role="tab" aria-controls="info-04" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-03" role="tabpanel" aria-labelledby="info-03-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Henti Nafas
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Frekuensi Nafas < 10x/menit </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-04" role="tabpanel" aria-labelledby="04-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Ada Nafas
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link active" id="info-05-tab" data-bs-toggle="tab" href="#info-05" role="tab" aria-controls="info-05" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link" id="06-info-tab" data-bs-toggle="tab" href="#info-06" role="tab" aria-controls="info-06" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-05" role="tabpanel" aria-labelledby="info-05-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Henti Nafas
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Reaksi berat, sianosis </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-06" role="tabpanel" aria-labelledby="06-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Retraksi sedang
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link active" id="info-07-tab" data-bs-toggle="tab" href="#info-07" role="tab" aria-controls="info-07" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link" id="08-info-tab" data-bs-toggle="tab" href="#info-08" role="tab" aria-controls="info-08" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-07" role="tabpanel" aria-labelledby="info-07-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Nadi Karotis Tidak Teraba
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-08" role="tabpanel" aria-labelledby="08-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Nadi peridier tidak teraba
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                CRT > 2 detik
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Akral Dingin
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Pucat
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-anak" role="tabpanel" aria-labelledby="v-pills-anak-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link active" id="info-09-tab" data-bs-toggle="tab" href="#info-09" role="tab" aria-controls="info-09" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link" id="10-info-tab" data-bs-toggle="tab" href="#info-10" role="tab" aria-controls="info-10" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-09" role="tabpanel" aria-labelledby="info-09-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Nadi Karotis Tidak Teraba
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Pucat
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Akral Dingin
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                CRT > 4 detik
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-10" role="tabpanel" aria-labelledby="10-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Nadi peridier tidak teraba
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Pucat
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Akral Dingin
                                                                                            </label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                CRT 2 - 4 detik
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-mental" role="tabpanel" aria-labelledby="v-pills-mental-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link active" id="info-11-tab" data-bs-toggle="tab" href="#info-11" role="tab" aria-controls="info-11" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link" id="12-info-tab" data-bs-toggle="tab" href="#info-12" role="tab" aria-controls="info-12" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-11" role="tabpanel" aria-labelledby="info-11-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Tidak Respon (GCS < 8) </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-12" role="tabpanel" aria-labelledby="12-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Respon terhadap nyer (GCS 9-12)
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-nyeri" role="tabpanel" aria-labelledby="v-pills-nyeri-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link active" id="info-13-tab" data-bs-toggle="tab" href="#info-13" role="tab" aria-controls="info-13" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link" id="14-info-tab" data-bs-toggle="tab" href="#info-14" role="tab" aria-controls="info-14" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-13" role="tabpanel" aria-labelledby="info-13-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Nyeri Jantung VAS 10 </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-14" role="tabpanel" aria-labelledby="14-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Nyeri Jantung VAS 7-9
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-triase" role="tabpanel" aria-labelledby="v-pills-triase-tab">
                                                                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                                                                    <li class="nav-item"><a class="nav-link active" id="info-15-tab" data-bs-toggle="tab" href="#info-15" role="tab" aria-controls="info-15" aria-selected="true"><i class="icofont icofont-ui-home"></i>Skala 1</a></li>
                                                                    <li class="nav-item"><a class="nav-link" id="16-info-tab" data-bs-toggle="tab" href="#info-16" role="tab" aria-controls="info-16" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Skala 2</a></li>
                                                                    <li class="nav-item"></li>
                                                                </ul>
                                                                <div class="tab-content" id="info-tabContent">
                                                                    <div class="tab-pane fade show active" id="info-15" role="tabpanel" aria-labelledby="info-15-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Immediate/Segera</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Immediate/Segera </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="info-16" role="tabpanel" aria-labelledby="16-info-tab">
                                                                        <table class="table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Emergensi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                                Emergent/Gawat Darurat
                                                                                            </label>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
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
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->

            <?php include("footer.php"); ?>
        </div>


</body>

</html>