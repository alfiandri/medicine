<?php

use Mpdf\Tag\Q;

require '../../db/connect.php';
if (isset($_POST['simpanbarang'])) {
   $jenis = $_POST['jenis'];
   $kategori = $_POST['kategori'];
   $satuan = $_POST['satuan'];
   $nama = $_POST['nama'];
   $barcode = $_POST['barcode'];
   $catatan = $_POST['catatan'];
   $tipe = $_POST['tipe'];
   if ($tipe == 1) {
      $insert = mysqli_query($koneksi, "INSERT INTO barang_obat(jenis, kategori, satuan, nama_barang, barcode, catatan )VALUES('$jenis','$kategori','$satuan','$nama','$barcode','$catatan') ");
   } else if ($tipe == 2) {
      $insert = mysqli_query($koneksi, "INSERT INTO barang_bmhp(jenis, kategori, satuan, nama_barang, barcode, catatan )VALUES('$jenis','$kategori','$satuan','$nama','$barcode','$catatan') ");
   } else if ($tipe == 3) {
      $insert = mysqli_query($koneksi, "INSERT INTO barang_alkes(jenis, kategori, satuan, nama_barang, barcode, catatan )VALUES('$jenis','$kategori','$satuan','$nama','$barcode','$catatan') ");
   } else if ($tipe == 4) {
      $insert = mysqli_query($koneksi, "INSERT INTO barang_operasional(jenis, kategori, satuan, nama_barang, barcode, catatan )VALUES('$jenis','$kategori','$satuan','$nama','$barcode','$catatan') ");
   } else if ($tipe == 5) {
      $insert = mysqli_query($koneksi, "INSERT INTO barang_it(jenis, kategori, satuan, nama_barang, barcode, catatan )VALUES('$jenis','$kategori','$satuan','$nama','$barcode','$catatan') ");
   }
}
if (isset($_POST['ubahbarang'])) {
   $id = $_POST['id'];
   $jenis = $_POST['jenis'];
   $kategori = $_POST['kategori'];
   $satuan = $_POST['satuan'];
   $nama = $_POST['nama'];
   $barcode = $_POST['barcode'];
   $catatan = $_POST['catatan'];
   $tipe = $_POST['tipe'];
   if ($tipe == 1) {
      $update = mysqli_query($koneksi, "UPDATE barang_obat SET jenis='$jenis', kategori='$kategori', satuan='$satuan', nama_barang='$nama', barcode='$barcode', catatan='$catatan' WHERE id='$id' ");
   } else if ($tipe == 2) {
      $update = mysqli_query($koneksi, "UPDATE barang_bhp SET jenis='$jenis', kategori='$kategori', satuan='$satuan', nama_barang='$nama', barcode='$barcode', catatan='$catatan' WHERE id='$id' ");
   } else if ($tipe == 3) {
      $update = mysqli_query($koneksi, "UPDATE barang_alkes SET jenis='$jenis', kategori='$kategori', satuan='$satuan', nama_barang='$nama', barcode='$barcode', catatan='$catatan' WHERE id='$id' ");
   } else if ($tipe == 4) {
      $update = mysqli_query($koneksi, "UPDATE barang_operasional SET jenis='$jenis', kategori='$kategori', satuan='$satuan', nama_barang='$nama', barcode='$barcode', catatan='$catatan' WHERE id='$id' ");
   } else if ($tipe == 5) {
      $update = mysqli_query($koneksi, "UPDATE barang_it SET jenis='$jenis', kategori='$kategori', satuan='$satuan', nama_barang='$nama', barcode='$barcode', catatan='$catatan' WHERE id='$id' ");
   }
}

if (isset($_POST['hapusbarang'])) {
   $id = $_POST['id'];
   $tipe = $_POST['tipe'];
   if ($tipe == 1) {
      $delete = mysqli_query($koneksi, "DELETE FROM barang_obat WHERE id='$id'");
   } else if ($tipe == 2) {
      $delete = mysqli_query($koneksi, "DELETE FROM barang_bhp WHERE id='$id'");
   } else if ($tipe == 3) {
      $delete = mysqli_query($koneksi, "DELETE FROM barang_alkes WHERE id='$id'");
   } else if ($tipe == 4) {
      $delete = mysqli_query($koneksi, "DELETE FROM barang_operasional WHERE id='$id'");
   } else if ($tipe == 5) {
      $delete = mysqli_query($koneksi, "DELETE FROM barang_operasional WHERE id='$id'");
   }
}
