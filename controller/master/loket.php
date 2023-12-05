<?php

use Mpdf\Tag\Q;

require '../../db/connect.php';
if (isset($_POST['simpanloket'])) {
   $tipe = $_POST['tipe'];
   $nama = $_POST['nama'];
   $kode = $_POST['kode'];
   $mulai = $_POST['mulai'];
   $selesai = $_POST['selesai'];
   $layanan = 1;
   if ($tipe == 1) {
      $insert = mysqli_query($koneksi, "INSERT INTO loket_admisi(loket, kode_loket, layanan, mulai, selesai)VALUES('$nama','$kode','$layanan','$mulai','$selesai') ");
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
