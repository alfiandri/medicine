<?php
require '../db/connect.php';
if (isset($_POST['simpanpaket'])) {
   $kode = $_POST['kode'];
   $paket = $_POST['paket'];
   $biaya = $_POST['biaya'];
   $deskripsi = $_POST['deskripsi'];
   $insert = mysqli_query($koneksi, "INSERT INTO paket_mcu (kode, paket, deskripsi, biaya) VALUES ('$kode','$paket','$deskripsi','$biaya')");
   if ($insert) {
      echo " <script>alert ('Berhasil Menambah Data Paket MCU');
      document.location='../admisi/paket-mcu'</script>";
   } else {
      echo " <script>alert ('Gagal Menambah Data');
      document.location='../admisi/paket-mcu'</script>";
   }
}
if (isset($_POST['ubahpaket'])) {
   $id = $_POST['id'];
   $kode = $_POST['kode'];
   $paket = $_POST['paket'];
   $biaya = $_POST['biaya'];
   $deskripsi = $_POST['deskripsi'];
   $update = mysqli_query($koneksi, "UPDATE paket_mcu SET kode='$kode', paket='$paket', deskripsi='$deskripsi', biaya='$biaya'
   WHERE id='$id' ");
   if ($update) {
      echo " <script>alert ('Berhasil Melakukan Perubahan Data Paket MCU');
      document.location='../admisi/paket-mcu'</script>";
   } else {
      echo " <script>alert ('Gagal Memperbarui Data');
      document.location='../admisi/paket-mcu'</script>";
   }
}

if (isset($_POST['hapuspaket'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM paket_mcu WHERE id='$id' ");
   if ($delete) {
      echo " <script>alert ('Berhasil Menghapus Data Paket MCU');
      document.location='../admisi/paket-mcu'</script>";
   } else {
      echo " <script>alert ('Gagal Menghapus Data');
      document.location='../admisi/paket-mcu'</script>";
   }
}
