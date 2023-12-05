<?php
require '../../db/connect.php';
$id = $_GET['id'];
$kode = $_GET['kode'];
$delete = mysqli_query($koneksi, "DELETE  FROM call_farmasi");
$insert = mysqli_query($koneksi, "INSERT INTO call_farmasi(kode)VALUES('$kode')");
if ($insert) {
   $status = 1;
   $update = mysqli_query($koneksi, "UPDATE antrian_farmasi SET status='$status' WHERE id='$id'");
   echo " <script>
   document.location='../../module/admisi/loket-farmasi'</script>";
}
