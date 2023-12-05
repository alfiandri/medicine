<?php
require '../../db/connect.php';
if (isset($_POST['simpanshift'])) {
   $shift = $_POST['shift'];
   $insert = mysqli_query($koneksi, "INSERT INTO shift_kerja(shift)VALUES('$shift') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Simpan';
   }
}

if (isset($_POST['ubahshift'])) {
   $id = $_POST['id'];
   $shift = $_POST['shift'];
   $update = mysqli_query($koneksi, "DELETE FROM shift_kerja SET shift='$shift' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapusshift'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM shift_kerja WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanjadwal'])) {
   $id = $_POST['id'];
   $hari = $_POST['hari'];
   $mulai = $_POST['mulai'];
   $akhir = $_POST['akhir'];
   $insert = mysqli_query($koneksi, "INSERT INTO shiftDurasi(idshift, hari, mulai, akhir)VALUES('$id','$hari','$mulai','$akhir') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Simpan';
   }
}


if (isset($_POST['ubahjadwal'])) {
   $id = $_POST['id'];
   $hari = $_POST['hari'];
   $mulai = $_POST['mulai'];
   $akhir = $_POST['akhir'];
   $update = mysqli_query($koneksi, "UPDATE shiftDurasi SET hari='$hari', mulai='$mulai', akhir='$akhir' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapusjadwal'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM shiftDurasi WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}
