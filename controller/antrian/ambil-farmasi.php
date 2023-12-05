<?php
require '../../db/connect.php';
if (isset($_POST['caribooking'])) {
   $nomor = $_POST['nomor'];
   $jenis = $_POST['jenis'];
   $check = mysqli_query($koneksi, "SELECT * FROM permintaan_farmasi WHERE kodebooking='$nomor'");
   $datacheck = mysqli_fetch_array($check);
   if ($datacheck == NULL) {
      echo " <script>alert ('Data Tidak Ditemukan');
      document.location='../../module/antrian/ambil-farmasi'</script>";
   } else {
      $update = mysqli_query($koneksi, "UPDATE permintaan_farmasi SET jenis='$jenis' WHERE kodebooking='$nomor'");
      if ($update) {
         echo " <script>alert ('Nomor Antrian Anda Dapat Di Ambil');
      document.location='../../module/antrian/ambil-farmasi'</script>";
      }
   }
}
