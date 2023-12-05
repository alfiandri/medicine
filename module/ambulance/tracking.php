<?php
$path = 'master';
$page = "Tracking";
require '../admin/view.php';
require '../../controller/ambulance/master.php';
$query = tampildata("SELECT * FROM permintaan_ambulance");
$data = mysqli_query($koneksi, "SELECT id FROM permintaan_ambulance");
$totaldata = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require '../admin/head.php';
   ?>
   <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initialize" async defer></script>
   <script type="text/javascript">
      var marker;

      function initialize() {
         // Variabel untuk menyimpan informasi lokasi
         var infoWindow = new google.maps.InfoWindow;
         //  Variabel berisi properti tipe peta
         var mapOptions = {
            mapTypeId: google.maps.MapTypeId.ROADMAP
         }
         // Pembuatan peta
         var peta = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
         // Variabel untuk menyimpan batas kordinat
         var bounds = new google.maps.LatLngBounds();
         // Pengambilan data dari database MySQL
         <?php
         // Sesuaikan dengan konfigurasi koneksi Anda
         require '../../db/connect.php';
         $query = mysqli_query($koneksi, "SELECT * FROM lokasi ORDER BY nama_lokasi ASC");
         while ($row = $query->fetch_assoc()) {
            $nama = $row["nama_lokasi"];
            $lat  = $row["latitude"];
            $long = $row["longitude"];
            echo "addMarker($lat, $long, '$nama');\n";
         }
         ?>
         // Proses membuat marker 
         function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
               map: peta,
               position: lokasi
            });
            peta.fitBounds(bounds);
            bindInfoWindow(marker, peta, infoWindow, info);
         }
         // Menampilkan informasi pada masing-masing marker yang diklik
         function bindInfoWindow(marker, peta, infoWindow, html) {
            google.maps.event.addListener(marker, 'click', function() {
               infoWindow.setContent(html);
               infoWindow.open(peta, marker);
            });
         }
      }
   </script>
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
      require '../admin/header.php';
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
                        <h3>Tracking</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Master Data</li>
                           <li class="breadcrumb-item">Ambulance</li>
                           <li class="breadcrumb-item active">Tracking</li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-12 col-md-12 box-col-12">
                     <div class="file-content">
                        <div class="card">
                           <div class="card-header">
                              <div class="media">
                                 <p>Total data
                                    <strong><?= $totaldata ?></strong> <?= $page ?>
                                 </p>
                                 <div class="media-body text-end">
                                    <!-- <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add"> <i data-feather="plus-square"></i>Tambah</div> -->
                                 </div>
                              </div>
                           </div>
                           <div class="card-body file-manager">
                              <div id="googleMap" style="width:1100px;height:500px;"></div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid Ends-->
         </div>
         <!-- footer start-->
         <?php
         require '../../template/footer.php';
         ?>
      </div>
   </div>


   <?php
   include '../admin/library.php';
   ?>
</body>

</html>