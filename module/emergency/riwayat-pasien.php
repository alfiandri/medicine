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
                                    <li class="breadcrumb-item active">Riwayat Pasien</li>
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
                                            <div class="nav flex-column nav-pills border-tab nav-left" id="v-pills-tab" role="tablist" aria-orientation="vertical"><a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a><a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Kunjungan</a><a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">S.O.A.P.I.E</a>
                                                <a class="nav-link" id="v-pills-perawatan-tab" data-bs-toggle="pill" href="#v-pills-perawatan" role="tab" aria-controls="v-pills-perawatan" aria-selected="false">Perawatan</a>
                                                <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Pembelian Obat</a>
                                                <a class="nav-link" id="v-pills-piutang-tab" data-bs-toggle="pill" href="#v-pills-piutang" role="tab" aria-controls="v-pills-piutang" aria-selected="false">Piutang Obat</a>
                                                <a class="nav-link" id="v-pills-berkas-tab" data-bs-toggle="pill" href="#v-pills-berkas" role="tab" aria-controls="v-pills-berkas" aria-selected="false">Retensi Berkas</a>
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
                                                            <h5>Riwayat Kunjungan</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="show-case">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No. Rawat</th>
                                                                            <th>Tanggal</th>
                                                                            <th>Jam</th>
                                                                            <th>Dokter Dituju / Dp JB</th>
                                                                            <th>Umur</th>
                                                                            <th>Poliklinik / Kamar</th>
                                                                            <th>Jenis Bayar</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>2018/11/27/00001</td>
                                                                            <td>28 May 2018</td>
                                                                            <td>13:34:00</td>
                                                                            <td>dr. Bambang </td>
                                                                            <td>41 th</td>
                                                                            <td>IGDK Unit IGD</td>
                                                                            <td>BPJS</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2018/11/27/00001</td>
                                                                            <td>28 May 2018</td>
                                                                            <td>13:34:00</td>
                                                                            <td>dr. Bambang </td>
                                                                            <td>41 th</td>
                                                                            <td>IGDK Unit IGD</td>
                                                                            <td>UMUM</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2018/11/27/00001</td>
                                                                            <td>28 May 2018</td>
                                                                            <td>13:34:00</td>
                                                                            <td>dr. Bambang </td>
                                                                            <td>41 th</td>
                                                                            <td>IGDK Unit IGD</td>
                                                                            <td>BPJS</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>Riwayat S.O.A.P.I.E</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="show-case">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Tgl. Reg</th>
                                                                            <th>No. Rawat</th>
                                                                            <th>Status</th>
                                                                            <th>S.O.A.P.I.E</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>28 May 2018</td>
                                                                            <td>2018/11/27/00001</td>
                                                                            <td>Ralan</td>
                                                                            <td>-</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>28 May 2018</td>
                                                                            <td>2018/11/27/00001</td>
                                                                            <td>Ralan</td>
                                                                            <td>-</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>28 May 2018</td>
                                                                            <td>2018/11/27/00001</td>
                                                                            <td>Ralan</td>
                                                                            <td>-</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-perawatan" role="tabpanel" aria-labelledby="v-pills-perawatan-tab">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>Riwayat Perawatan</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="accordion" id="accordionExample">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                            2018-11-27 15:12:22 IGD
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>No.Rawat</td>
                                                                                        <td>:</td>
                                                                                        <td>2018/11/27/000001</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>No.Registrasi</td>
                                                                                        <td>:</td>
                                                                                        <td>001</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Tanggal Registrasi</td>
                                                                                        <td>:</td>
                                                                                        <td>2018-11-27 15:12:22</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Unit / Poliklinik</td>
                                                                                        <td>:</td>
                                                                                        <td>IGD</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Dokter</td>
                                                                                        <td>:</td>
                                                                                        <td>dr. Bambang Kurniawan Sp.OG</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Cara Bayar</td>
                                                                                        <td>:</td>
                                                                                        <td>Asuransi AA International</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>PJ</td>
                                                                                        <td>:</td>
                                                                                        <td>Eko Setiawan</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Alamat PJ</td>
                                                                                        <td>:</td>
                                                                                        <td>Jl. Medan</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Hubungan</td>
                                                                                        <td>:</td>
                                                                                        <td>Suami</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Status</td>
                                                                                        <td>:</td>
                                                                                        <td>Rawat Jalan</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Biaya</td>
                                                                                        <td>:</td>
                                                                                        <td>
                                                                                            <table>
                                                                                                Administrasi
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>No</th>
                                                                                                        <th>Tanggal</th>
                                                                                                        <td>Kode</td>
                                                                                                        <td>Nama Tindakan</td>
                                                                                                        <td>Petugas</td>
                                                                                                        <td>Biaya</td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td>1.</td>
                                                                                                        <td>2018-11-28 11:42:31</td>
                                                                                                        <td>J022222</td>
                                                                                                        <td>Administrasi Asuransi</td>
                                                                                                        <td>Dedi Sanjaya</td>
                                                                                                        <td>150.000</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>1.</td>
                                                                                                        <td>2018-11-28 14:12:10</td>
                                                                                                        <td>J820222</td>
                                                                                                        <td>Administrasi Dokter </td>
                                                                                                        <td>Dedi Sanjaya</td>
                                                                                                        <td>75.000</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                            <hr>
                                                                                            <table>
                                                                                                Tindakan Rawat Jalan Dokter
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>No</th>
                                                                                                        <th>Tanggal</th>
                                                                                                        <td>Kode</td>
                                                                                                        <td>Nama Tindakan</td>
                                                                                                        <td>Dokter</td>
                                                                                                        <td>Biaya</td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td>1.</td>
                                                                                                        <td>2018-11-28 11:42:31</td>
                                                                                                        <td>J022222</td>
                                                                                                        <td>Administrasi Asuransi</td>
                                                                                                        <td>dr. Bambang Kurniawan Sp.OG</td>
                                                                                                        <td>85.000</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                            <hr>
                                                                                            <table>
                                                                                                Tindakan Rawat Jalan Paramedis
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>No</th>
                                                                                                        <th>Tanggal</th>
                                                                                                        <td>Kode</td>
                                                                                                        <td>Nama Tindakan</td>
                                                                                                        <td>Dokter</td>
                                                                                                        <td>Biaya</td>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td>1.</td>
                                                                                                        <td>2018-11-28 11:42:31</td>
                                                                                                        <td>J922122</td>
                                                                                                        <td>aff Heating</td>
                                                                                                        <td>Fadilah</td>
                                                                                                        <td>35.000</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                            <hr>
                                                                                            <table>
                                                                                                <thead>
                                                                                                    <th colspan="5" class="bg-primary">Total</th>
                                                                                                    <th>345.000</th>
                                                                                                </thead>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Perawatan & Tindakan</td>
                                                                                        <td>:</td>
                                                                                        <td>Pemerikaan Medis</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header">
                                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                            2018-11-30 08:12:22 RAWAT JALAN
                                                                        </button>
                                                                    </h2>
                                                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                                        <div class="accordion-body">
                                                                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>Pembelian Obat</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table">
                                                                <table class="show-case">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No. Nota</th>
                                                                            <th>Tanggal</th>
                                                                            <th>Petugas</th>
                                                                            <th>Jenis Jual</th>
                                                                            <th>Keterangan</th>
                                                                            <th>Asal Barang</th>
                                                                            <th>Cara Bayar</th>
                                                                            <th>PPN</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>-</td>
                                                                            <td>-</td>
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
                                                <div class="tab-pane fade" id="v-pills-piutang" role="tabpanel" aria-labelledby="v-pills-piutang-tab">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>Piutang Obat</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table">
                                                                <table class="show-case">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No. Nota</th>
                                                                            <th>Tanggal</th>
                                                                            <th>Petugas</th>
                                                                            <th>Jenis</th>
                                                                            <th>Catatan</th>
                                                                            <th>Asal Barang</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>-</td>
                                                                            <td>-</td>
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
                                                <div class="tab-pane fade" id="v-pills-berkas" role="tabpanel" aria-labelledby="v-pills-berkas-tab">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5>Retensi Berkas</h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="show-case">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Tanggal Retensi</th>
                                                                            <th>File Retensi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
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