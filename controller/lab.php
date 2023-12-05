<?php
require '../db/connect.php';
if (isset($_POST['simpanlab'])) {
   $id = $_POST['id'];
   $lab = $_POST['lab'];
   $insert = mysqli_query($koneksi, "INSERT INTO pasien_lab (uid, lab) VALUES ('$id','$lab')");
   if ($insert) {
      echo " <script>alert ('Berhasil menambah permintaan lab');
      document.location='../mcu/permintaan-lab?id=$id'</script>";
   }
}

if (isset($_POST['simpanrad'])) {
   $id = $_POST['id'];
   $rad = $_POST['rad'];
   $insert = mysqli_query($koneksi, "INSERT INTO pasien_rad (uid, rad) VALUES ('$id','$rad')");
   if ($insert) {
      echo " <script>alert ('Berhasil menambah permintaan Radiologi');
      document.location='../mcu/permintaan-radiologi?id=$id'</script>";
   }
}
