<?php
require '../../db/connect.php';
if (isset($_POST['simpansatuan'])) {
   $kode = $_POST['kode'];
   $satuan = $_POST['satuan'];
   $tipe = $_POST['tipe'];
   $insert = mysqli_query($koneksi, "INSERT INTO satuan(tipe, kode, satuan)VALUES('$tipe','$kode','$satuan') ");
}
if (isset($_POST['ubahsatuan'])) {
   $id = $_POST['id'];
   $kode = $_POST['kode'];
   $satuan = $_POST['satuan'];
   $update = mysqli_query($koneksi, "UPDATE satuan SET kode='$kode', satuan='$satuan' WHERE id='$id' ");
}

if (isset($_POST['hapussatuan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM satuan WHERE id='$id' ");
}
