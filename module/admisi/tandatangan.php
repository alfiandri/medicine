<?php
session_start();
$page = "Admisi OK";
require '../db/connect.php';
require '../controller/view.php';
require '../controller/admisi.php';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require 'head.php';
    ?>
    <script type="text/javascript" src="signature.js"></script>
    <style>
        body {
            padding: 15px;
        }

        #note {
            position: absolute;
            left: 50px;
            top: 35px;
            padding: 0px;
            margin: 0px;
            cursor: default;
        }
    </style>
</head>

<body onload="startTime()">
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
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
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php
            require 'sidebar.php';
            ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3>Tanda Tangan</h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                                    <li class="breadcrumb-item">Pusat Registrasi</li>
                                    <li class="breadcrumb-item active">Signature </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 box-col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                        <div id="signature-pad">
                                            <div style="border:solid 1px teal; width:1030px;height:400px;padding:3px;position:relative;">
                                                <div id="note" onmouseover="my_function();">Lakukan Tanda Tangan Digital Disini</div>
                                                <canvas id="the_canvas" width="1030px" height="400px"></canvas>
                                            </div>
                                            <div style="margin:10px;">
                                                <input type="hidden" id="signature" name="signature">
                                                <button type="submit" id="save_btn" name="simpanttd" class="btn btn-sm btn-primary" data-action="save-png"><span class="glyphicon glyphicon-ok"></span>Simpan</button>
                                                <button type="button" id="clear_btn" class="btn btn-sm btn-light" data-action="clear"><span class="glyphicon glyphicon-remove"></span>Hapus</button>
                                            </div>
                                        </div>
                                        <form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            <?php
            require 'footer.php';
            ?>
        </div>
    </div>

    <script>
        var wrapper = document.getElementById("signature-pad");
        var clearButton = wrapper.querySelector("[data-action=clear]");
        var savePNGButton = wrapper.querySelector("[data-action=save-png]");
        var canvas = wrapper.querySelector("canvas");
        var el_note = document.getElementById("note");
        var signaturePad;
        signaturePad = new SignaturePad(canvas);
        clearButton.addEventListener("click", function(event) {
            document.getElementById("note").innerHTML = "The signature should be inside box";
            signaturePad.clear();
        });
        savePNGButton.addEventListener("click", function(event) {
            if (signaturePad.isEmpty()) {
                alert("Please provide signature first.");
                event.preventDefault();
            } else {
                var canvas = document.getElementById("the_canvas");
                var dataUrl = canvas.toDataURL();
                document.getElementById("signature").value = dataUrl;
            }
        });

        function my_function() {
            document.getElementById("note").innerHTML = "";
        }
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
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/rating/jquery.barrating.js"></script>
    <script src="../assets/js/rating/rating-script.js"></script>
    <script src="../assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="../assets/js/ecommerce.js"></script>
    <script src="../assets/js/product-list-custom.js"></script>
    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- Plugin used-->
</body>

</html>