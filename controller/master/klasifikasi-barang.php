<?php
require '../../db/connect.php';
if (isset($_POST['simpanjenis'])) {
   $tipe = $_POST['tipe'];
   $jenis = $_POST['jenis'];
   $insert = mysqli_query($koneksi, "INSERT INTO barang_jenis(tipe,jenis)VALUES('$tipe','$jenis') ");
}
if (isset($_POST['ubahjenis'])) {
   $id = $_POST['id'];
   $jenis = $_POST['jenis'];
   $update = mysqli_query($koneksi, "UPDATE barang_jenis SET jenis='$jenis' WHERE id='$id' ");
}

if (isset($_POST['hapusjenis'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM barang_jenis WHERE id='$id' ");
}

if (isset($_POST['simpankategori'])) {
   $tipe = $_POST['tipe'];
   $kategori = $_POST['kategori'];
   $insert = mysqli_query($koneksi, "INSERT INTO barang_kategori(tipe, kategori)VALUES('$tipe','$kategori') ");
}
if (isset($_POST['ubahkategori'])) {
   $id = $_POST['id'];
   $kategori = $_POST['kategori'];
   $update = mysqli_query($koneksi, "UPDATE barang_kategori SET kategori='$kategori' WHERE id='$id' ");
}

if (isset($_POST['hapuskategori'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM barang_kategori WHERE id='$id' ");
}

if (isset($_POST['simpangolongan'])) {
   $golongan = $_POST['golongan'];
   $insert = mysqli_query($koneksi, "INSERT INTO barang_golongan(golongan)VALUES('$golongan') ");
}
if (isset($_POST['ubahgolongan'])) {
   $id = $_POST['id'];
   $golongan = $_POST['golongan'];
   $update = mysqli_query($koneksi, "UPDATE barang_golongan SET golongan='$golongan' WHERE id='$id' ");
}

if (isset($_POST['hapusgolongan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM barang_golongan WHERE id='$id' ");
}


if (isset($_POST['simpanmerk'])) {
   $merk = $_POST['merk'];
   $tipe = $_POST['tipe'];
   $insert = mysqli_query($koneksi, "INSERT INTO barang_merk(tipe, merk)VALUES('$tipe','$merk') ");
}
if (isset($_POST['ubahmerk'])) {
   $id = $_POST['id'];
   $merk = $_POST['merk'];
   $update = mysqli_query($koneksi, "UPDATE barang_merk SET merk='$merk' WHERE id='$id' ");
}

if (isset($_POST['hapusmerk'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM barang_merk WHERE id='$id' ");
}
