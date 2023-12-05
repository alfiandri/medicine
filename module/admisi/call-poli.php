<?php
require '../../db/connect.php';
$id = $_GET['id'];
$kode = $_GET['kode'];
$delete = mysqli_query($koneksi, "DELETE  FROM call_poli");
$insert = mysqli_query($koneksi, "INSERT INTO call_poli(kode)VALUES('$kode')");
if ($insert) {
   $status = 1;
   $update = mysqli_query($koneksi, "UPDATE antrian_poli SET status='$status' WHERE id='$id'");
   echo " <script>
   document.location='../../module/admisi/loket-poli'</script>";
}
