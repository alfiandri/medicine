<?php
require '../../db/connect.php';
if (isset($_POST['simpanicd9'])) {
   $kode = $_POST['kode'];
   $nama = $_POST['nama'];
   $deskripsi = $_POST['deskripsi'];
   $insert = mysqli_query($koneksi, "INSERT INTO icd_09(icd09, kode, nama)VALUES('$nama','$kode','$deskripsi') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahicd09'])) {
   $id = $_POST['id'];
   $kode = $_POST['kode'];
   $nama = $_POST['nama'];
   $deskripsi = $_POST['deskripsi'];
   $update = mysqli_query($koneksi, "UPDATE icd_09 SET kode='$kode', icd09='$nama', nama='$deskripsi' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapusicd09'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM icd_09 WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanicd10'])) {
   $kode = $_POST['kode'];
   $icd = $_POST['icd'];
   $icd_ind = $_POST['icd_ind'];
   $insert = mysqli_query($koneksi, "INSERT INTO icd_10(code, icd10, icd10_ind)VALUES('$kode','$icd','$icd_ind') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahicd10'])) {
   $id = $_POST['id'];
   $kode = $_POST['kode'];
   $icd = $_POST['icd'];
   $icd_ind = $_POST['icd_ind'];
   $update = mysqli_query($koneksi, "UPDATE icd_10 SET code='$kode', icd10='$icd', icd10_ind='$icd_ind' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapusicd10'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM icd_10 WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanjenis'])) {
   $jenis = $_POST['jenis'];
   $insert = mysqli_query($koneksi, "INSERT INTO jenis_penyakit(jenis)VALUES('$jenis') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahjenis'])) {
   $id = $_POST['id'];
   $jenis = $_POST['jenis'];
   $update = mysqli_query($koneksi, "UPDATE jenis_penyakit SET jenis='$jenis' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusjenis'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM jenis_penyakit WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanstatus'])) {
   $status = $_POST['status'];
   $insert = mysqli_query($koneksi, "INSERT INTO status_penyakit(jenis)VALUES('$status') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahstatus'])) {
   $id = $_POST['id'];
   $status = $_POST['status'];
   $update = mysqli_query($koneksi, "UPDATE status_penyakit SET jenis='$status' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusstatus'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROm status_penyakit WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}


if (isset($_POST['simpan10besar'])) {
   $icd = $_POST['icd'];
   $data = mysqli_query($koneksi, "SELECT * FROM icd_10 WHERE icd10='$icd'");
   $datacheck = mysqli_fetch_array($data);
   $kode = $datacheck['code'];
   $penyakit = $datacheck['icd10'];
   $deskripsi = $datacheck['icd10_ind'];
   $insert = mysqli_query($koneksi, "INSERT INTO penyakit_10_besar(kode, penyakit, deskripsi)VALUES('$kode','$penyakit','$deskripsi') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['hapus10besar'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROm penyakit_10_besar WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}
