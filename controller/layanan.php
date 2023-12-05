<?php
require '../db/connect.php';
$uid = $_POST['uid'];
$kode = $_POST['kode'];
$paket = $_POST['paket'];
$biaya = $_POST['biaya'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$insert = mysqli_query($koneksi, "INSERT INTO pasien_layanan (uid, kode, paket, biaya, tanggal, waktu) VALUES ('$uid','$kode','$paket','$biaya','$tanggal','$waktu')");

if ($insert) {
   echo " <script>alert ('Berhasil Menambahkan Paket MCU');
   document.location='../pasien/tandatangan'</script>";
} else {
   echo " <script>alert ('Gagal Simpan');
   document.location='../pasien/layanan'</script>";
}
