<?php

use Mpdf\Tag\Q;

require '../../db/connect.php';
if (isset($_POST['simpanmetodebayar'])) {
   $metode = $_POST['metode'];
   $keterangan = $_POST['keterangan'];
   $insert = mysqli_query($koneksi, "INSERT INTO metode_bayar(metode, keterangan)VALUES('$metode','$keterangan') ");
}
if (isset($_POST['ubahmetodebayar'])) {
   $id = $_POST['id'];
   $metode = $_POST['metode'];
   $keterangan = $_POST['keterangan'];
   $update = mysqli_query($koneksi, "UPDATE metode_bayar SET metode='$metode', keterangan='$keterangan' WHERE id='$id' ");
}

if (isset($_POST['hapusmetodebayar'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM metode_bayar WHERE id='$id' ");
}


if (isset($_POST['simpanrekening'])) {
   $bank = $_POST['bank'];
   $rekening = $_POST['rekening'];
   $insert = mysqli_query($koneksi, "INSERT INTO account_bank(bank, rekening)VALUES('$bank','$rekening') ");
}
if (isset($_POST['ubahrekening'])) {
   $id = $_POST['id'];
   $bank = $_POST['bank'];
   $rekening = $_POST['rekening'];
   $update = mysqli_query($koneksi, "UPDATE account_bank SET bank='$bank', rekening='$rekening' WHERE id='$id' ");
}

if (isset($_POST['hapusrekening'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM account_bank WHERE id='$id' ");
}


if (isset($_POST['simpankategorikasir'])) {
   $kategori = $_POST['kategori'];
   $catatan = $_POST['catatan'];
   $insert = mysqli_query($koneksi, "INSERT INTO kategori_biaya(kategori, catatan)VALUES('$kategori','$catatan') ");
}
if (isset($_POST['ubahkategorikasir'])) {
   $id = $_POST['id'];
   $kategori = $_POST['kategori'];
   $catatan = $_POST['catatan'];
   $update = mysqli_query($koneksi, "UPDATE kategori_biaya SET kategori='$kategori', catatan='$catatan' WHERE id='$id' ");
}

if (isset($_POST['hapuskategorikasir'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM kategori_biaya WHERE id='$id' ");
}
