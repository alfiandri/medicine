<?php
require '../../db/connect.php';
if (isset($_POST['simpanukuran'])) {
   $kode = $_POST['kode'];
   $ukuran = $_POST['ukuran'];
   $insert = mysqli_query($koneksi, "INSERT INTO blood_ukuran(kode, ukuran)VALUES('$kode','$ukuran') ");
}
if (isset($_POST['ubahukuran'])) {
   $kode = $_POST['kode'];
   $ukuran = $_POST['ukuran'];
   $id = $_POST['id'];
   $update = mysqli_query($koneksi, "UPDATE blood_ukuran SET kode='$kode', ukuran='$ukuran' WHERE id='$id' ");
}
if (isset($_POST['hapusukuran'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM blood_ukuran WHERE id='$id' ");
}

if (isset($_POST['simpanrak'])) {
   $rak = $_POST['rak'];
   $insert = mysqli_query($koneksi, "INSERT INTO ruangan_bloodbank(loker)VALUES('$rak') ");
}
if (isset($_POST['ubahrak'])) {
   $rak = $_POST['rak'];
   $id = $_POST['id'];
   $update = mysqli_query($koneksi, "UPDATE ruangan_bloodbank SET loker='$rak' WHERE id='$id' ");
}
if (isset($_POST['hapusrak'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM ruangan_bloodbank WHERE id='$id' ");
}


if (isset($_POST['simpanpemeriksaan'])) {
   $pemeriksaan = $_POST['pemeriksaan'];
   $catatan = $_POST['catatan'];
   $insert = mysqli_query($koneksi, "INSERT INTO blood_pemeriksaan(pemeriksaan, catatan)VALUES('$pemeriksaan','$catatan') ");
}
if (isset($_POST['ubahpemeriksaan'])) {
   $pemeriksaan = $_POST['pemeriksaan'];
   $catatan = $_POST['catatan'];
   $id = $_POST['id'];
   $update = mysqli_query($koneksi, "UPDATE blood_pemeriksaan SET pemeriksaan='$pemeriksaan', catatan='$catatan' WHERE id='$id' ");
}
if (isset($_POST['hapuspemeriksaan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM blood_pemeriksaan WHERE id='$id' ");
}
