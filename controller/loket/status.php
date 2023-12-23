<?php
require '../../db/connect.php';
$id = $_GET['id'];
$check = mysqli_query($koneksi, "SELECT * FROM loket WHERE id='$id'");
$datacheck = mysqli_fetch_array($check);
$status = $datacheck['status'];
if ($status == 0) {
   $status = 1;
   $updatestatus = mysqli_query($koneksi, "UPDATE loket SET status='$status' WHERE id='$id' ");
   if ($updatestatus) {
      echo " <script>alert ('Loket Telah Dibuka');
   document.location='../../module/admisi/loket-admisi-call?id=$id'</script>";
   }
} else if ($status == 1) {
   $status = 0;
   $updatestatus = mysqli_query($koneksi, "UPDATE loket SET status='$status' WHERE id='$id' ");
   if ($updatestatus) {
      echo " <script>alert ('Loket Telah Di Tutup');
   document.location='../../module/admisi/loket-admisi'</script>";
   }
}
