<?php
$master = "RM";
$page = "Site Marking / Penandaan Lokasi Operasi";
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
                    <form action="" method="post">
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
                                    <div class="col-sm-12">
                                        <h6>Beri tanda (lingkaran) pada lokasi yang akan dioperasi menggunakan
                                            <span style="color:red;">Warna Merah</span>
                                        </h6>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <h5>OD</h5>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <h5>OS</h5>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <canvas id="signatureCanvas1" width="400" height="800"></canvas>
                                    </div>
                                    <div class="col-sm-6 text-center">
                                        <canvas id="signatureCanvas2" width="400" height="800"></canvas>
                                    </div>
                                </div>
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
    <script>
    const canvas1 = document.getElementById('signatureCanvas1');
    const canvas2 = document.getElementById('signatureCanvas2');
    const ctx1 = canvas1.getContext('2d');
    const ctx2 = canvas2.getContext('2d');

    let isDrawing1 = false;
    let isDrawing2 = false;

    let lastX1 = 0;
    let lastY1 = 0;
    let lastX2 = 0;
    let lastY2 = 0;

    function startDrawing1(e) {
        isDrawing1 = true;
        [lastX1, lastY1] = [e.offsetX, e.offsetY];
    }

    function startDrawing2(e) {
        isDrawing2 = true;
        [lastX2, lastY2] = [e.offsetX, e.offsetY];
    }

    // Fungsi untuk menggambar tanda tangan
    function draw1(e) {
        if (!isDrawing1) return;
        ctx1.beginPath();
        ctx1.moveTo(lastX1, lastY1);
        ctx1.lineTo(e.offsetX, e.offsetY);
        ctx1.strokeStyle = 'red'; // Warna tanda tangan (hitam)
        ctx1.lineWidth = 2; // Ketebalan tanda tangan
        ctx1.stroke();
        [lastX1, lastY1] = [e.offsetX, e.offsetY];
    }

    function draw2(e) {
        if (!isDrawing2) return;
        ctx2.beginPath();
        ctx2.moveTo(lastX2, lastY2);
        ctx2.lineTo(e.offsetX, e.offsetY);
        ctx2.strokeStyle = 'red'; // Warna tanda tangan (hitam)
        ctx2.lineWidth = 2; // Ketebalan tanda tangan
        ctx2.stroke();
        [lastX2, lastY2] = [e.offsetX, e.offsetY];
    }

    function stopDrawing1() {
        isDrawing1 = false;
    }

    function stopDrawing2() {
        isDrawing2 = false;
    }

    function clearSignature() {
        ctx1.clearRect(0, 0, canvas1.width, canvas1.height);
    }

    function clearSignature() {
        ctx2.clearRect(0, 0, canvas2.width, canvas2.height);
    }

    function saveSignature1() {
        const dataURL1 = canvas1.toDataURL(); // Mengambil data URL dari gambar tanda tangan
        console.log(dataURL1); // Anda dapat mengirim dataURL ini ke server atau menggunakannya sesuai kebutuhan
    }

    function saveSignature2() {
        const dataURL2 = canvas2.toDataURL(); // Mengambil data URL dari gambar tanda tangan
        console.log(dataURL2); // Anda dapat mengirim dataURL ini ke server atau menggunakannya sesuai kebutuhan
    }

    canvas1.style.backgroundImage = `url(../assets/images/od.png)`;
    canvas1.style.backgroundSize = '400px 800px';
    canvas1.style.backgroundRepeat = 'no-repeat';
    canvas1.style.backgroundPosition = 'center';

    canvas2.style.backgroundImage = `url(../assets/images/os.png)`;
    canvas2.style.backgroundSize = '400px 800px';
    canvas2.style.backgroundRepeat = 'no-repeat';
    canvas2.style.backgroundPosition = 'center';

    canvas1.addEventListener('mousedown', startDrawing1);
    canvas1.addEventListener('mousemove', draw1);
    canvas1.addEventListener('mouseup', stopDrawing1);
    canvas1.addEventListener('mouseout', stopDrawing1);

    canvas2.addEventListener('mousedown', startDrawing2);
    canvas2.addEventListener('mousemove', draw2);
    canvas2.addEventListener('mouseup', stopDrawing2);
    canvas2.addEventListener('mouseout', stopDrawing2);
    </script>

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