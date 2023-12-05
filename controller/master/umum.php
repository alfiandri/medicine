<?php
require '../../db/connect.php';
if (isset($_POST['simpanstatus'])) {
   $status = $_POST['status'];
   $insert = mysqli_query($koneksi, "INSERT INTO status_kawin(kawin)VALUES('$status') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahstatus'])) {
   $id = $_POST['id'];
   $status = $_POST['status'];
   $update = mysqli_query($koneksi, "UPDATE  status_kawin SET kawin='$status' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusstatus'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM status_kawin WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}
if (isset($_POST['simpanagama'])) {
   $agama = $_POST['agama'];
   $insert = mysqli_query($koneksi, "INSERT INTO agama(agama)VALUES('$agama') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahagama'])) {
   $id = $_POST['id'];
   $agama = $_POST['agama'];
   $update = mysqli_query($koneksi, "UPDATE agama SET agama='$agama' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusagama'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM agama WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpangender'])) {
   $gender = $_POST['gender'];
   $insert = mysqli_query($koneksi, "INSERT INTO gender(gender)VALUES('$gender') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahgender'])) {
   $id = $_POST['id'];
   $gender = $_POST['gender'];
   $update = mysqli_query($koneksi, "UPDATE gender SET gender='$gender' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusgender'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM gender WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanpendidikan'])) {
   $pendidikan = $_POST['pendidikan'];
   $insert = mysqli_query($koneksi, "INSERT INTO pendidikan(pendidikan)VALUES('$pendidikan') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahpendidikan'])) {
   $id = $_POST['id'];
   $pendidikan = $_POST['pendidikan'];
   $update = mysqli_query($koneksi, "UPDATE pendidikan SET pendidikan='$pendidikan' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapuspendidikan'])) {
   $id = $_POST['id'];
   $pendidikan = $_POST['pendidikan'];
   $delete = mysqli_query($koneksi, "DELETE FROM pendidikan WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}


if (isset($_POST['simpanpekerjaan'])) {
   $pekerjaan = $_POST['pekerjaan'];
   $insert = mysqli_query($koneksi, "INSERT INTO pekerjaan(pekerjaan)VALUES('$pekerjaan') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahpekerjaan'])) {
   $id = $_POST['id'];
   $pekerjaan = $_POST['pekerjaan'];
   $update = mysqli_query($koneksi, "UPDATE pekerjaan SET pekerjaan='$pekerjaan' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapuspekerjaan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM pekerjaan WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanhubungan'])) {
   $hubungan = $_POST['hubungan'];
   $insert = mysqli_query($koneksi, "INSERT INTO hubungan(hubungan)VALUES('$hubungan') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahhubungan'])) {
   $id = $_POST['id'];
   $hubungan = $_POST['hubungan'];
   $update = mysqli_query($koneksi, "UPDATE hubungan SET hubungan='$hubungan' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapushubungan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM hubungan WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}
