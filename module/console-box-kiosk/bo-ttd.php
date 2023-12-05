<?php
$page = "BO";
require 'view.php';
$ticket = $_GET['ticket'];
$kode = $_GET['kode'];
$dok = $_GET['dok'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
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

<body>
   <!-- login page start-->
   <div class="container-fluid p-0">
      <div class="row m-0">
         <div class="col-12 p-0">
            <div class="login-card">
               <div>
                  <div><a class="logo"><img class=" img-fluid for-light" src="../assets/Logo - Primary.png" width="200" alt="looginpage"><img class="img-fluid for-dark" src="../assets/Logo - Secondary.png" width="200" alt="looginpage"></a></div>
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                              <p class="card-text">SKetentuan Umum Pendaftaran Online RS.Medicine yakni pendaftaran hanya dapat dilakukan pada jam operasional 08.00 sd 17.20.00 pendaftaran tidak dapat dilakukan Hari tersebut kecuali menggunakan fitur layanan registeri E-KISOK yang terdapat di Rumah Sakit selanjutnya pendaftaran yang tidak ada konfirmasi di hari registrasi booking maka akan di batalkan secara otomatis melalui sistem.</p>
                              <div class="row">
                                 <div class="col-2">
                                    <span class="badge bg-danger mb-2">1</span>
                                    <p>Kategori Pasien</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-danger mb-2">2</span>
                                    <p>Identitas Diri</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-danger mb-2">3</span>
                                    <p>Layanan & Dokter</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-danger mb-2">4</span>
                                    <p>Metode Pembayaran</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-success mb-2">5</span>
                                    <p>Tanda Tangan</p>
                                 </div>
                                 <div class="col-2">
                                    <span class="badge bg-dark mb-2">6</span>
                                    <p>E-Ticket Download</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div class="card-body">
                              <h5 class="card-title">Tanda Tangan Digital</h5>
                              <form method="POST" action="../controller/ttd" enctype="multipart/form-data">
                                 <input type="hidden" name="id" value="<?= $ticket ?>">
                                 <div id="signature-pad">
                                    <div style="border:solid 1px teal; width:1200;height:300px;padding:3px;position:relative;">
                                       <div id="note" onmouseover="my_function();">Lakukan Tanda Tangan Digital Disini</div>
                                       <canvas id="the_canvas" width="1200px" height="300px"></canvas>
                                    </div>
                                    <div style="margin:10px;">
                                       <input type="hidden" id="signature" name="signature">
                                       <button type="submit" id="save_btn" class="btn btn-sm btn-primary" data-action="save-png"><span class="glyphicon glyphicon-ok"></span>Simpan</button>
                                       <button type="button" id="clear_btn" class="btn btn-sm btn-light" data-action="clear"><span class="glyphicon glyphicon-remove"></span>Hapus</button>
                                    </div>
                                 </div>
                                 <form>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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
            document.getElementById("note").innerHTML = "Tandan tangan pada area hijau yang tersedia";
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
      <!-- Sidebar jquery-->
      <script src="../assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="../assets/js/script.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
   </div>
</body>

</html>