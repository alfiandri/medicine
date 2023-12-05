<?php
require '../db/connect.php';
if (isset($_POST['simpancheck'])) {
   $id = $_POST['id'];
   $dokter = $_POST['dokter'];
   $catatan = $_POST['catatan'];
   $notransaksi = $_POST['notransaksi'];
   $status = "2";
   $update = mysqli_query($koneksi, "UPDATE pasien_layanan SET dokter='$dokter', notransaksi='$notransaksi', catatan='$catatan', status='$status' WHERE idvisit='$id'");
   if ($update) {
      echo " <script>alert ('Berhasil Menambah Data Dokter');
      document.location='../admisi/register'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
      document.location='../admisi/register'</script>";
   }
}
