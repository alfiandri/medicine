<?php

use Mpdf\Tag\Q;

require '../../db/connect.php';

if (isset($_POST['ubahloket'])) {
   $nama = $_POST['nama'];
   $mulai = $_POST['mulai'];
   $selesai = $_POST['selesai'];
   $id = $_POST['id'];

   $update = mysqli_query($koneksi, "UPDATE loket SET loket='$nama', mulai='$mulai', selesai='$selesai' WHERE
   id='$id'");
}

if (isset($_POST['hapusloket'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM loket WHERE id='$id' ");
}

if (isset($_POST['simpanloket'])) {
   $tipe = $_POST['tipe'];
   $tipe_loket = $_POST['tipe_loket'];
   $nama = $_POST['nama'];
   $mulai = $_POST['mulai'];
   $selesai = $_POST['selesai'];
   $layanan = 1;
   if ($tipe == 1) {
      $insert = mysqli_query($koneksi, "INSERT INTO loket(loket, tipe, layanan, mulai, selesai)VALUES('$nama','$tipe_loket','$layanan','$mulai','$selesai') ");
   } else if ($tipe == 2) {
      $insert = mysqli_query($koneksi, "INSERT INTO loket_poliklinik(loket, kode_loket, layanan, mulai, selesai)VALUES('$nama','$kode','$layanan','$mulai','$selesai') ");
   } else if ($tipe == 3) {
      $insert = mysqli_query($koneksi, "INSERT INTO loket_farmasi(loket, kode_loket, layanan, mulai, selesai)VALUES('$nama','$kode','$layanan','$mulai','$selesai') ");
   } else if ($tipe == 4) {
      $insert = mysqli_query($koneksi, "INSERT INTO loket_lab(loket, kode_loket, layanan, mulai, selesai)VALUES('$nama','$kode','$layanan','$mulai','$selesai') ");
   } else if ($tipe == 5) {
      $insert = mysqli_query($koneksi, "INSERT INTO loket_radiologi(loket, kode_loket, layanan, mulai, selesai)VALUES('$nama','$kode','$layanan','$mulai','$selesai') ");
   }
}
