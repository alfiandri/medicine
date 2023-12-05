<?php
$master = "RM";
$page = "Form Code Blue";
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="sm-3">
                                            <label class="form-label">No RM</label>
                                            <input class="form-control" placeholder="" type="text">
                                        </div>
                                        <div class="sm-3 my-1">
                                            <label class="form-label">Nama</label>
                                            <input class="form-control" placeholder="" type="text">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Jenis Kelamin</label>
                                                <select class="form-select from-control btn-square">
                                                    <option value="0">Laki - Laki</option>
                                                    <option value="1">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Tanggal Lahir</label>
                                                <input class="form-control" placeholder="" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="sm-6">
                                            <div>
                                                <label class="form-label">Alamat</label>
                                                <textarea class="form-control" rows="7" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="form-label">Tanggal Henti Jantung-Nafas</label>
                                        <input class="form-control" placeholder="" type="date">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Diagnosa Utama</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Jam Henti Jantung-Nafas</label>
                                        <input class="form-control" placeholder="" type="time">
                                    </div>
                                    <div class="col-sm-5 my-3">
                                        <label class=" form-label">Penyebab Henti Jantung-Nafas (bila
                                            diketahui)</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3 my-3">
                                        <label class=" form-label">Tempat Henti Jantung-Nafas</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-4 my-2">
                                        <label class="col-form-label">Apakah Henti Jantung-Nafas Disaksikan</label>
                                        <select id="saksi" onchange="muncul();"
                                            class="form-select from-control btn-square">
                                            <option value="0">Ya</option>
                                            <option value="1">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3" id="aksi">
                                        <label class="form-label">Oleh : </label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <script>
                                    muncul = () => {
                                        var select1 = document.getElementById('saksi');
                                        var select2 = document.getElementById('aksi');

                                        if (select1.value == "0") {
                                            select2.style.display = "block";
                                        } else {
                                            select2.style.display = "none";
                                        }
                                    }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="vol-sm-12">
                                        <h5>RESUSITASI</h5>
                                    </div>
                                    <div class="col-sm-4 my-3">
                                        <label class=" form-label">Jam Resusitasi Dimulai</label>
                                        <input class="form-control" placeholder="" type="time">
                                    </div>
                                    <div class="col-sm-4 my-3">
                                        <label class=" form-label">Jam Kedatangan Team Bluecode</label>
                                        <input class="form-control" placeholder="" type="time">
                                    </div>
                                    <div class="col-sm-4 my-2">
                                        <label class="col-form-label">Yang Memulai CPR</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Dokter</option>
                                            <option value="1">Perawat</option>
                                            <option value="2">Ambulan</option>
                                            <option value="3">Lain - lain</option>
                                        </select>
                                    </div>
                                    <div class="vol-sm-12 my-2">
                                        <h5>PENATALAKSANAAN PERNAFASAN</h5>
                                    </div>
                                    <div class="col-sm-4 my-2">
                                        <label class="col-form-label">Permulaan Nafas Buatan :</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Mulut Ke Mulut</option>
                                            <option value="1">Mulut ke Masker Resusitasi</option>
                                            <option value="2">Sungkup Ambu bag ke Mulut</option>
                                            <option value="3">Petugas Ambulans</option>
                                            <option value="4">Dokter</option>
                                            <option value="5">Perawat</option>
                                            <option value="6">Lain - lain</option>
                                        </select>
                                    </div>
                                    <div class="vol-sm-12 my-2">
                                        <h5>INTUBASI</h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">Dilakukan Intubasi </label>
                                        <select id="Intubasi" onchange="a();"
                                            class="form-select from-control btn-square">
                                            <option value="0">Ya</option>
                                            <option value="1">Tidak</option>
                                        </select>
                                    </div>
                                    <div id="perintah" class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-6 my-2">
                                                <label class="form-label">Ukuran : </label>
                                                <input class="form-control" placeholder="" type="text">
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="col-form-label">Oleh</label>
                                                <select class="form-select from-control btn-square">
                                                    <option value="0">Dokter</option>
                                                    <option value="1">Perawat</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                    a = () => {
                                        var select1 = document.getElementById('Intubasi');
                                        var select2 = document.getElementById('perintah');

                                        if (select1.value == "0") {
                                            select2.style.display = "block";
                                        } else {
                                            select2.style.display = "none";
                                        }
                                    }
                                    </script>
                                    <div class="vol-sm-12 my-2">
                                        <h5>PENATALAKSANAAN PEREDARAN DARAH</h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class=" form-label">Irama EKG Awal</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-4">
                                        <label class=" form-label">Irama EKG Akhir</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="vol-sm-12 my-4">
                                        <h5>URUTAN PENATALAKSANAAN : (Daftar obat yang diberikan, defibrilasi, dll)</h5>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class=" form-label">Jam</label>
                                        <input class="form-control" placeholder="" type="time">
                                    </div>
                                    <div class="col-sm-2">
                                        <label class=" form-label">Pengobatan</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-2">
                                        <label class=" form-label">Dosis</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class=" form-label">Cara Pemberian </label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class=" form-label">Hasil Dari Tindakan </label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="col-sm-12 text-end my-2">
                                        <button class="btn btn-success">Tambah</button>
                                    </div>
                                    <div class="col-sm-12 my-3">
                                        <h6>Table</h6>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th scope="col">#</th>
                                                        <th scope="col">Jam</th>
                                                        <th scope="col">Pengobatan</th>
                                                        <th scope="col">Dosis</th>
                                                        <th scope="col">Cara Pemberian</th>
                                                        <th scope="col">Hasil Dari Tindakan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-center">
                                                        <th scope="row">1</th>
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
                                    <div class="sol-sm-12 my-4">
                                        <h5>HASIL AKHIR</h5>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label">Meninggal</label>
                                        <select id="meninggal" class="form-select from-control btn-square"
                                            onchange="b();">
                                            <option value="0">Ya</option>
                                            <option value="1">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2 my-1" id="jam">
                                        <label class=" form-label">Jam</label>
                                        <input class="form-control" placeholder="" type="time">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Dilakukan resusitasi</label>
                                        <select class="form-select from-control btn-square">
                                            <option value="0">Dipindahkan</option>
                                            <option value="1">ICU.ICCU</option>
                                            <option value="2">SU Lain</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="col-form-label">Sadar</label>
                                        <select id="sadar" class="form-select from-control btn-square" onchange="c();">
                                            <option value="0">Ya</option>
                                            <option value="1">TIdak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 my-1" id="ukur">
                                        <label class=" form-label">Tekanan Nadi Terakhir</label>
                                        <input class="form-control" placeholder="" type="number">
                                    </div>
                                    <script>
                                    b = () => {
                                        var select3 = document.getElementById('meninggal');
                                        var select4 = document.getElementById('jam');

                                        if (select3.value == "0") {
                                            select4.style.display = "block";
                                        } else {
                                            select4.style.display = "none";
                                        }
                                    }
                                    c = () => {
                                        var select5 = document.getElementById('sadar');
                                        var select6 = document.getElementById('ukur');

                                        if (select5.value == "0") {
                                            select6.style.display = "block";
                                        } else {
                                            select6.style.display = "none";
                                        }
                                    }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="col-sm-2 my-1">
                                    <label class=" form-label">Nama Petugas</label>
                                    <input class="form-control" placeholder="" type="text">
                                </div>
                                <div class="col-sm5">
                                    <p>Tanda Tangan</p>
                                    <canvas id="signatureCanvas" width="300" height="100"
                                        style="border:1px solid #000000;">
                                    </canvas>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Simpan</button>
                                </div>
                                <script>
                                // Mendapatkan elemen canvas dan konteksnya
                                const canvas = document.getElementById('signatureCanvas');
                                const ctx = canvas.getContext('2d');

                                // Variabel untuk melacak apakah pengguna sedang menandatangani atau tidak
                                let isDrawing = false;

                                // Variabel untuk menyimpan posisi tanda tangan sebelumnya
                                let lastX = 0;
                                let lastY = 0;

                                // Fungsi untuk memulai tanda tangan
                                function startDrawing(e) {
                                    isDrawing = true;
                                    [lastX, lastY] = [e.offsetX, e.offsetY];
                                }

                                // Fungsi untuk menggambar tanda tangan
                                function draw(e) {
                                    if (!isDrawing) return;
                                    ctx.beginPath();
                                    ctx.moveTo(lastX, lastY);
                                    ctx.lineTo(e.offsetX, e.offsetY);
                                    ctx.strokeStyle = '#000'; // Warna tanda tangan (hitam)
                                    ctx.lineWidth = 2; // Ketebalan tanda tangan
                                    ctx.stroke();
                                    [lastX, lastY] = [e.offsetX, e.offsetY];
                                }

                                // Fungsi untuk menghentikan tanda tangan
                                function stopDrawing() {
                                    isDrawing = false;
                                }

                                // Fungsi untuk menghapus tanda tangan
                                function clearSignature() {
                                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                                }

                                // Fungsi untuk menyimpan tanda tangan (misalnya, dalam format gambar atau JSON)
                                function saveSignature() {
                                    const dataURL = canvas.toDataURL(); // Mengambil data URL dari gambar tanda tangan
                                    console.log(
                                        dataURL
                                    ); // Anda dapat mengirim dataURL ini ke server atau menggunakannya sesuai kebutuhan
                                }

                                // Event listener untuk mengatur interaksi pengguna dengan tanda tangan
                                canvas.addEventListener('mousedown', startDrawing);
                                canvas.addEventListener('mousemove', draw);
                                canvas.addEventListener('mouseup', stopDrawing);
                                canvas.addEventListener('mouseout', stopDrawing);

                                // Event listener untuk tombol-tombol
                                const clearButton = document.getElementById('clearButton');
                                const saveButton = document.getElementById('saveButton');

                                clearButton.addEventListener('click', clearSignature);
                                saveButton.addEventListener('click', saveSignature);
                                </script>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        require 'footer.php';
        ?>
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