<?php
require '../../db/connect.php';
$act = $_GET['actions'];
if ($act == 1) {
   $id = $_GET['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM antrian_loket WHERE id='$id' ");
   if ($delete) {
      $inc = $id + 1;
      $statusnew = 1;
      $updateantrian = mysqli_query($koneksi, "UPDATE antrian_loket SET status='$statusnew' WHERE id='$inc'");
      if ($updateantrian) {
         echo " <script>alert ('Anda Telah Memanggil Antrian Berikutnya');
   document.location='../../module/admisi/loket-admisi-call?id=1'</script>";
      } else {
      }
   } else {
   }
} else if ($act == 2) {
   echo " <script>alert ('Anda Panggil Ulang Antrian');
   document.location='../../module/admisi/loket-admisi-call?id=1'</script>";
} else if ($act == 3) {
   $id = $_GET['id'];
   $status = 0;
   $update = mysqli_query($koneksi, "UPDATE antrian_loket SET status='$status' WHERE id='$id'");
   if ($update) {
      $inc = $id + 1;
      $statusnew = 2;
      $updateantrian = mysqli_query($koneksi, "UPDATE antrian_loket SET status='$statusnew' WHERE id='$inc'");
      if ($updateantrian) {
         echo " <script>alert ('Anda Membatalkan Pasien Ini');
   document.location='../../module/admisi/loket-admisi-call?id=1'</script>";
      } else {
      }
   } else {
   }
}
