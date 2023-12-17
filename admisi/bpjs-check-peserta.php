<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $master = "V-Claim ";
        $page = "Check Kepesertaan";
        require_once 'vendor/autoload.php';
        include 'fungsi.php';
        require 'head.php';
    ?>
</head>

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
                                    <li class="breadcrumb-item active"><?= $page ?></li>
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
                                                    class="icofont icofont-ui-home"></i>Berdasarkan NIK KTP</a></li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconprofile-tab"
                                                data-bs-toggle="pill" href="#pills-iconprofile" role="tab"
                                                aria-controls="pills-iconprofile" aria-selected="false"><i
                                                    class="icofont icofont-man-in-glasses"></i>Berdasarkan Kartu
                                                BPJS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="pills-icontabContent">
                                    <div class="tab-pane fade show active" id="pills-iconhome" role="tabpanel"
                                        aria-labelledby="pills-iconhome-tab">
                                        <form id="ktp" method="post">
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nomor
                                                    Identitas KTP</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm" name="noktp"
                                                        maxlength="16">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                <div class="col-sm-10">
                                                    <button type="button" class="btn btn-success btn-sm"
                                                        id="ktpsubmit">Proses</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-iconprofile" role="tabpanel"
                                        aria-labelledby="pills-iconprofile-tab">
                                        <form id="bpjs" method="post">
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nomor
                                                    Kartu
                                                    BPJS</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="inputPassword" name="nokartu" maxlength="13" required>
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                <div class="col-sm-10">
                                                    <button class="btn btn-success btn-sm" type="button"
                                                        id="kartusubmit">Proses</button>
                                                </div>
                                            </div>
                                        </form>
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
    <script type="text/javascript">
    $(document).ready(function() {
        $("#ktpsubmit").click(function() {
            aksi('#ktp', 'ktp');
        });
        $("#kartusubmit").click(function() {
            aksi('#bpjs', 'bpjs');
        });

        function aksi(id, url) {
            var data = $(id).serialize();
            data += "&id=" + url;
            $.ajax({
                type: "POST",
                data: data,
                url: "pencarian-peserta.php",
                dataType: "json",
                success: function(data) {
                    if (data.success == false) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: data.message,
                        });
                    } else {
                        document.getElementById('status').innerHTML = data.data['pencarian'];
                        catat('#nama', 'nama');
                        catat('#nokartu', 'nokartu');
                        catat('#nik', 'nik');
                        catat('#tgllahir', 'tgllahir');
                        catat('#jeniskelamin', 'jeniskelamin');
                        catat('#jenislayanan', 'jenislayanan');
                        catat('#umur', 'umur');
                        catat('#jenispeserta', 'jenispeserta');
                        catat('#kdstatus', 'kdstatus');
                        catat('#ketstatus', 'ketstatus');

                        function catat(id, nama) {
                            document.querySelectorAll(id).forEach(function(
                                element) {
                                element.innerHTML = data.data[nama];
                            })
                        }
                        if (data.data['kdstatus'] == "0") {
                            $('#staticBackdrop').modal('show');
                        } else {
                            Swal.fire({
                                icon: "warning",
                                title: "Status",
                                text: data.data['ketstatus'],
                            });
                        }
                    }
                }
            })
        }
    })
    </script>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Pencarian Dengan <span id="status"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-sm-12 text-center">
                                            <img src="assets/dist/img/bpjsprofile.png" width="250px" height="220px">
                                        </div>
                                        <div class="col-sm-12 my-4">
                                            <h5 class="profile-username text-center">
                                                <span id="nama"></span>
                                            </h5>
                                        </div>
                                        <div class="col-sm-12 text-center">
                                            <p id="jenispeserta"></p>
                                        </div>
                                        <div class="col-sm-12" style="margin-top: 15px;">
                                            <div class="row">
                                                <div class="col-sm-7">
                                                    <p><b>No. Kartu BPJS</b></p>
                                                </div>
                                                <div class="col-sm-5 text-end" style="color: blue;">
                                                    <p id="nokartu"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p><b>NIK KTP</b></p>
                                                </div>
                                                <div class="col-sm-8 text-end" style="color: blue;">
                                                    <P id="nik"></P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row col-sm-12">
                                            <div class="col-sm-6">
                                                <h6>Nama Lengkap</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p id="nama"></p>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 my-2">
                                            <div class="col-sm-6">
                                                <h6>Tanggal Lahir</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p id="tgllahir"></p>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 my-2">
                                            <div class="col-sm-6">
                                                <h6>Jenis Kelamin</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p id="jeniskelamin"></p>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 my-2">
                                            <div class="col-sm-6">
                                                <h6>Jenis Layanan</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p id="jenislayanan"></p>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 my-2">
                                            <div class="col-sm-6">
                                                <h6>Usia</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p id="umur"></p>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 my-2">
                                            <div class="col-sm-6">
                                                <h6>Jenis Peserta</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p id="jenispeserta"></p>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 my-2">
                                            <div class="col-sm-6">
                                                <h6>No. Kartu</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p id="nokartu"></p>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 my-2">
                                            <div class="col-sm-6">
                                                <h6>NIK</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p id="nik"></p>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 my-2">
                                            <div class="col-sm-6">
                                                <h6>Kode Status</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p id="kdstatus"></p>
                                            </div>
                                        </div>
                                        <div class="row col-sm-12 my-2">
                                            <div class="col-sm-6">
                                                <h6>Keterangan Status</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p id="ketstatus"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
    <?= include 'script.php';?>
</body>

</html>