<?php
require '../../db/connect.php';
if (isset($_POST['caridata'])) {
   $nomorrm = $_POST['nomorrm'];
   $nomorbooking = $_POST['nomorbooking'];
   $check = mysqli_query($koneksi, "SELECT * FROM admisi_jkn WHERE kodebooking='$nomorbooking' OR norm='$nomorrm'");
   $datacheck = mysqli_fetch_array($check);
   if ($datacheck == NULL) {
      echo " <script>alert ('Data Booking Anda Tidak Tersedia ');
      document.location='../../module/loket/index'</script>";
   } else {
      echo " <script>alert ('Data Booking Anda Tersedia ');
      document.location='../../module/loket/print-poli?kode=$nomorbooking&rm=$nomorrm'</script>";
   }
}

if (isset($_POST['carifarmasi'])) {
   $nomorrm = $_POST['nomorrm'];
   $nomorbooking = $_POST['nomorbooking'];
   $check = mysqli_query($koneksi, "SELECT * FROM permintaan_farmasi WHERE kodebooking='$nomorbooking' OR nomorrm='$nomorrm'");
   $datacheck = mysqli_fetch_array($check);
   if ($datacheck == NULL) {
      echo " <script>alert ('Data Anda Belum Tersedia ');
      document.location='../../module/loket/index'</script>";
   } else {
      echo " <script>alert ('Data Anda Telah Tersedia ');
      document.location='../../module/loket/print-farmasi?kode=$nomorbooking&rm=$nomorrm'</script>";
   }
}
