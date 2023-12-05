<?php
require '../../db/connect.php';
if (isset($_POST['simpanpemeriksaan'])) {
   $pemeriksaan = $_POST['pemeriksaan'];
   $kode = rand(11, 99);
   $insert = mysqli_query($koneksi, "INSERT INTO laboratorium(kode, pemeriksaan)VALUES('$kode','$pemeriksaan') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahpemeriksaan'])) {
   $pemeriksaan = $_POST['pemeriksaan'];
   $id = $_POST['id'];
   $update = mysqli_query($koneksi, "UPDATE laboratorium SET pemeriksaan='$pemeriksaan' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapuspemeriksaan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM laboratorium WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}
if (isset($_POST['simpanjenis'])) {
   $kode = $_POST['kode'];
   $jenis = $_POST['jenis'];
   $catatan = $_POST['catatan'];
   $satuan = $_POST['satuan'];
   $insert = mysqli_query($koneksi, "INSERT INTO laboratorium_detail(kode, assemen, satuan, catatan)VALUES('$kode','$jenis','$satuan','$catatan') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahjenis'])) {
   $id = $_POST['id'];
   $kode = $_POST['kode'];
   $jenis = $_POST['jenis'];
   $catatan = $_POST['catatan'];
   $satuan = $_POST['satuan'];
   $update = mysqli_query($koneksi, "UPDATE laboratorium_detail SET kode='$kode', assemen='$jenis', satuan='$satuan', catatan='$catatan' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusjenis'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM laboratorium_detail WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanspesimen'])) {
   $spesimen = $_POST['spesimen'];
   $insert = mysqli_query($koneksi, "INSERT INTO lab_spesimen(spesimen)VALUES('$spesimen') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahspesimen'])) {
   $id = $_POST['id'];
   $spesimen = $_POST['spesimen'];
   $update = mysqli_query($koneksi, "UPDATE lab_spesimen SET spesimen='$spesimen' WHERE id='$id'  ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusspesimen'])) {
   $id = $_POST['id'];
   $spesimen = $_POST['spesimen'];
   $delete = mysqli_query($koneksi, "DELETE FROM  lab_spesimen WHERE id='$id'  ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpansatuan'])) {
   $satuan = $_POST['satuan'];
   $insert = mysqli_query($koneksi, "INSERT INTO lab_satuan(satuan)VALUES('$satuan') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahsatuan'])) {
   $id = $_POST['id'];
   $satuan = $_POST['satuan'];
   $update = mysqli_query($koneksi, "UPDATE lab_satuan SET satuan='$satuan' WHERE id='$id'  ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapussatuan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM  lab_satuan WHERE id='$id'  ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}
