<?php
require '../../db/connect.php';
if (isset($_POST['simpanpemeriksaan'])) {
   $pemeriksaan = $_POST['pemeriksaan'];
   $kode = rand(11, 99);
   $insert = mysqli_query($koneksi, "INSERT INTO radiologi(kode, pemeriksaan)VALUES('$kode','$pemeriksaan') ");
}
if (isset($_POST['ubahpemeriksaan'])) {
   $pemeriksaan = $_POST['pemeriksaan'];
   $id = $_POST['id'];
   $update = mysqli_query($koneksi, "UPDATE radiologi SET pemeriksaan='$pemeriksaan' WHERE id='$id' ");
}
if (isset($_POST['hapuspemeriksaan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM radiologi WHERE id='$id' ");
}
if (isset($_POST['simpanjenis'])) {
   $kode = $_POST['kode'];
   $jenis = $_POST['jenis'];
   $catatan = $_POST['catatan'];
   $insert = mysqli_query($koneksi, "INSERT INTO radiologi_detail(kode, assemen, catatan)VALUES('$kode','$jenis','$catatan') ");
}
if (isset($_POST['ubahjenis'])) {
   $id = $_POST['id'];
   $kode = $_POST['kode'];
   $jenis = $_POST['jenis'];
   $catatan = $_POST['catatan'];
   $update = mysqli_query($koneksi, "UPDATE radiologi_detail SET kode='$kode', assemen='$jenis', catatan='$catatan' WHERE id='$id' ");
}
if (isset($_POST['hapusjenis'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM radiologi_detail WHERE id='$id' ");
}

if (isset($_POST['simpanukuran'])) {
   $ukuran = $_POST['ukuran'];
   $keterangan = $_POST['keterangan'];
   $insert = mysqli_query($koneksi, "INSERT INTO radiologi_ukuran(ukuran, keterangan)VALUES('$ukuran','$keterangan') ");
}

if (isset($_POST['ubahukuran'])) {
   $id = $_POST['id'];
   $ukuran = $_POST['ukuran'];
   $keterangan = $_POST['keterangan'];
   $update = mysqli_query($koneksi, "UPDATE radiologi_ukuran SET ukuran='$ukuran', keterangan='$keterangan' WHERE id='$id'  ");
}
if (isset($_POST['hapusukuran'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM  radiologi_ukuran WHERE id='$id'  ");
}
