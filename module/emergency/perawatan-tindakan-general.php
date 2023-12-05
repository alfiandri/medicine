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
            <!-- Page Sidebar Start-->
            <?php include("sidebar.php"); ?>
            <div class="page-body">
                <div class="container-fluid">

                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3>Riwayat Pasien</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">IGD</li>
                                    <li class="breadcrumb-item active">Perawatan & Tindakan General</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12 col-xl-12 xl-100">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-2 tabs-responsive-side">
                                            <div class="nav flex-column nav-pills border-tab nav-left" id="v-pills-tab" role="tablist" aria-orientation="vertical"><a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a><a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Penanganan Dokter</a><a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Penanganan Petugas</a><a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Pemeriksaan</a>
                                                <a class="nav-link" id="v-pills-berkas-tab" data-bs-toggle="pill" href="#v-pills-berkas" role="tab" aria-controls="v-pills-berkas" aria-selected="false">Pemeriksaan Obstetri</a>
                                                <a class="nav-link" id="v-pills-ginekologi-tab" data-bs-toggle="pill" href="#v-pills-ginekologi" role="tab" aria-controls="v-pills-ginekologi" aria-selected="false">Pemeriksaan Ginekologi</a>
                                                <a class="nav-link" id="v-pills-diagnosa-tab" data-bs-toggle="pill" href="#v-pills-diagnosa" role="tab" aria-controls="v-pills-diagnosa" aria-selected="false">Diagnosa</a>
                                                <a class="nav-link" id="v-pills-catatan-tab" data-bs-toggle="pill" href="#v-pills-catatan" role="tab" aria-controls="v-pills-catatan" aria-selected="false">Catatan Dokter</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-10">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <div class="file-content">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <div class="media">
                                                                    <div class="media-body text-end">
                                                                        <div class="btn btn-outline-primary ms-2"><i data-feather="upload"> </i>Upload Berkas</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-body file-manager">
                                                                <h4 class="mb-3">Susi Susanti</h4>
                                                                <h6>RM : 129222</h6>
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Agama</label>
                                                                            <input class="form-control" type="text" placeholder="Islam" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-3">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Status Menikah</label>
                                                                            <input class="form-control" type="text" placeholder="Menikah" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Pendidikan</label>
                                                                            <input class="form-control" type="email" placeholder="-" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Tempat Lahir</label>
                                                                            <input class="form-control" type="text" placeholder="Medan" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-6">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Tanggal Lahir</label>
                                                                            <input class="form-control" type="text" placeholder="12/3/19870" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Nama Ibu Kandung</label>
                                                                            <input class="form-control" type="text" placeholder="Dela Susanti" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Bahasa</label>
                                                                            <input class="form-control" type="text" placeholder="Indonesia" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-md-8">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Cacat Fisik</label>
                                                                            <input class="form-control" type="number" placeholder="-" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div>
                                                                            <label class="form-label">Alamat</label>
                                                                            <textarea class="form-control" rows="5" placeholder="Jl. Medan - Tebing Tinggi, Desa Suka, Kab. Deli Serdang. Sumatera Utara" disabled></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-3">Penanganan Dokter</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <ul class="nav nav-tabs mb-3" id="icon-tab" role="tablist">
                                                                <li class="nav-item"><a class="nav-link active" id="icon-home-tab" data-bs-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><i class="icofont icofont-ui-home"></i>Daftar Tindakan / Tagihan</a></li>
                                                                <li class="nav-item"><a class="nav-link" id="profile-icon-tab" data-bs-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile-icon" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Tindakan Dilakukan</a></li>
                                                                <li class="nav-item">
                                                            </ul>
                                                            <div class="tab-content" id="icon-tabContent">
                                                                <div class="tab-pane fade show active" id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab">
                                                                    <div class="table-responsive">
                                                                        <table class="show-case">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Kode</th>
                                                                                    <th>Nama Perawatan</th>
                                                                                    <th>Kategori Perawatan</th>
                                                                                    <th>Tarif / Biaya</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>2023333</td>
                                                                                    <td>Administrasi Asuransi</td>
                                                                                    <td>Dokter Umum</td>
                                                                                    <td>90.000</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="profile-icon" role="tabpanel" aria-labelledby="profile-icon-tab">
                                                                    <div class="table-responsive">
                                                                        <table class="show-case">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Kode</th>
                                                                                    <th>Nama Perawatan</th>
                                                                                    <th>Kategori Perawatan</th>
                                                                                    <th>Tarif / Biaya</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-3">Penanganan Petugas</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <ul class="nav nav-tabs mb-3" id="icon-tab" role="tablist">
                                                                <li class="nav-item"><a class="nav-link active" id="icon-home-tab" data-bs-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><i class="icofont icofont-ui-home"></i>Daftar Tindakan / Tagihan</a></li>
                                                                <li class="nav-item"><a class="nav-link" id="profile-icon-tab" data-bs-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile-icon" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Tindakan Dilakukan</a></li>
                                                                <li class="nav-item">
                                                            </ul>
                                                            <div class="tab-content" id="icon-tabContent">
                                                                <div class="tab-pane fade show active" id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab">
                                                                    <div class="table-responsive">
                                                                        <table class="show-case">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Kode</th>
                                                                                    <th>Nama Perawatan</th>
                                                                                    <th>Kategori Perawatan</th>
                                                                                    <th>Tarif / Biaya</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>2023333</td>
                                                                                    <td>Administrasi Asuransi</td>
                                                                                    <td>Dokter Umum</td>
                                                                                    <td>90.000</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="profile-icon" role="tabpanel" aria-labelledby="profile-icon-tab">
                                                                    <div class="table-responsive">
                                                                        <table class="show-case">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Kode</th>
                                                                                    <th>Nama Perawatan</th>
                                                                                    <th>Kategori Perawatan</th>
                                                                                    <th>Tarif / Biaya</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>Pemeriksaan </h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Dilakukan</label>
                                                                        <select class="form-control btn-square">
                                                                            <option value="0">dr. Budi Setiawan</option>
                                                                            <option value="0">dr. Handoko</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Profesi / Jabatan / Departemant</label>
                                                                        <input type="text" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Subjek</label>
                                                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Objek</label>
                                                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Suhu (C)</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Tinggi Badan (cm)</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Berat Badan (Kg)</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Tensi</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Respirasi (x/menit)</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Nadi (x/menit)</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">SpO2(%)</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">GCS (E,V,M)</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Kesadaran</label>
                                                                        <select name="" class="form-select" id="">
                                                                            <option value="">Compos Metrics</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">L.P (cm)</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Alergi</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Asesment</label>
                                                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Plan</label>
                                                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Instruksi</label>
                                                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Evaluasi</label>
                                                                        <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <button class="btn btn-primary">Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-berkas" role="tabpanel" aria-labelledby="v-pills-berkas-tab">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>Pemeriksaan Obstetri</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Tinggi Fundus Uteri (cm)</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Janin</label>
                                                                        <select name="" class="form-select" id=""></select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Letak</label>
                                                                        <input type="text" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Kontraksi</label>
                                                                        <select name="" class="form-select" id="">
                                                                            <option value="">+</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Kualitas (x/menit)</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">/10 menit</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">/Detik</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Vulva/Vagina</label>
                                                                        <input type="text" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Portio Inspekulo</label>
                                                                        <input type="text" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Pembukaan</label>
                                                                        <input type="text" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Penurunan</label>
                                                                        <input type="text" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Bagian Bawah Panggul</label>
                                                                        <select name="" class="form-select" id=""></select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">D Jantung Fetus (x/mnt)</label>
                                                                        <input type="text" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Fluksus</label>
                                                                        <select name="" class="form-select" id="">
                                                                            <option value="">+</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Fluor Albus</label>
                                                                        <select name="" class="form-select" id="">
                                                                            <option value="">+</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Selaput Ketuban</label>
                                                                        <select name="" class="form-select" id="">
                                                                            <option value="">-</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Dalam</label>
                                                                        <select name="" class="form-select" id="">
                                                                            <option value="">Kenyal</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Tebal (cm)</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Arah</label>
                                                                        <select name="" class="form-select" id="">
                                                                            <option value="">Depan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Denominator</label>
                                                                        <input type="text" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Imbang Feto-Pelvik</label>
                                                                        <select name="" class="form-select" id="">
                                                                            <option value="">Normal</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Catatan</label>
                                                                        <input type="text" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <button class="btn btn-primary">Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-ginekologi" role="tabpanel" aria-labelledby="v-pills-ginekologi-tab">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>Pemeriksaan Ginekologi</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Inspeksi</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Vulva/Uretra/Vagina</label>
                                                                        <select name="" class="form-select" id=""></select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Inspekulo</label>
                                                                        <input type="text" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Fluxus</label>
                                                                        <select name="" class="form-select" id="">
                                                                            <option value="">+</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Fluor Albus</label>
                                                                        <select name="" class="form-select" id="">
                                                                            <option value="">+</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Vulva/Vagina</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Portio</label>
                                                                        <input type="number" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Soundage</label>
                                                                        <input type="text" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Portio</label>
                                                                        <input type="text" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Bentuk</label>
                                                                        <input type="text" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Cavum Uteri</label>
                                                                        <select name="" class="form-select" id=""></select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Mobilitas</label>
                                                                        <select name="" class="form-select" id="">
                                                                            <option value="">+</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Ukuran</label>
                                                                        <input type="text" class="form-control" name="" id="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Nyeri Tekan</label>
                                                                        <select name="" class="form-select" id="">
                                                                            <option value="">+</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Adnexa/Paramtrium : Kanan</label>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Adnexa/Paramtrium : Kiri</label>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Cavum Douglas</label>
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <button class="btn btn-primary">Simpan</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-diagnosa" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="mb-3">Diagnosa</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <ul class="nav nav-tabs mb-3" id="icon-tab" role="tablist">
                                                                <li class="nav-item"><a class="nav-link active" id="icon-home-tab" data-bs-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><i class="icofont icofont-ui-home"></i>Input Data</a></li>
                                                                <li class="nav-item"><a class="nav-link" id="diagnosa-icon-tab" data-bs-toggle="tab" href="#diagnosa-icon" role="tab" aria-controls="diagnosa-icon" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Data Diagnosa</a></li>
                                                                <li class="nav-item">
                                                                <li class="nav-item"><a class="nav-link" id="prosedur-icon-tab" data-bs-toggle="tab" href="#prosedur-icon" role="tab" aria-controls="prosedur-icon" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Data Prosedur</a></li>
                                                                <li class="nav-item">
                                                            </ul>
                                                            <div class="tab-content" id="icon-tabContent">
                                                                <div class="tab-pane fade show active" id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab">
                                                                    <div class="table-responsive">
                                                                        <table class="show-case">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th colspan="6" class="text-center bg-primary">Diagnosa Code</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Kode</th>
                                                                                    <th>Nama Penyakit</th>
                                                                                    <th>Ciri Ciri Penyakit</th>
                                                                                    <th>Keterangan</th>
                                                                                    <th>Ktg.Penyakut</th>
                                                                                    <th>Ciri</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>A00</td>
                                                                                    <td>Cholera</td>
                                                                                    <td>Cholera</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="table-responsive">
                                                                        <table class="show-case">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th colspan="6" class="text-center bg-danger">Prosedure Code</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Kode</th>
                                                                                    <th>Nama Penyakit</th>
                                                                                    <th>Ciri Ciri Penyakit</th>
                                                                                    <th>Keterangan</th>
                                                                                    <th>Ktg.Penyakut</th>
                                                                                    <th>Ciri</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>A00</td>
                                                                                    <td>Cholera</td>
                                                                                    <td>Cholera</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="diagnosa-icon" role="tabpanel" aria-labelledby="diagnosa-icon-tab">
                                                                    <div class="table-responsive">
                                                                        <table class="show-case">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th colspan="6" class="text-center bg-primary">Diagnosa Code</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Kode</th>
                                                                                    <th>Nama Penyakit</th>
                                                                                    <th>Ciri Ciri Penyakit</th>
                                                                                    <th>Keterangan</th>
                                                                                    <th>Ktg.Penyakut</th>
                                                                                    <th>Ciri</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>A00</td>
                                                                                    <td>Cholera</td>
                                                                                    <td>Cholera</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="prosedur-icon" role="tabpanel" aria-labelledby="prosedur-icon-tab">
                                                                    <div class="table-responsive">
                                                                        <table class="show-case">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th colspan="6" class="text-center bg-danger">Procedure Code</th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Kode</th>
                                                                                    <th>Nama Penyakit</th>
                                                                                    <th>Ciri Ciri Penyakit</th>
                                                                                    <th>Keterangan</th>
                                                                                    <th>Ktg.Penyakut</th>
                                                                                    <th>Ciri</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>A00</td>
                                                                                    <td>Cholera</td>
                                                                                    <td>Cholera</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                    <td>-</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-catatan" role="tabpanel" aria-labelledby="v-pills-catatan-tab">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>Catatan Dokter</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Nama Dokter</label>
                                                                        <select name="" class="form-select" id="">
                                                                            <option value="">dr. Budi</option>
                                                                            <option value="">dr. Anto</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Catatan</label>
                                                                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <button class="btn btn-primary">Simpan</button>
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
            </div>
            <?php include("footer.php"); ?>
</body>

</html>