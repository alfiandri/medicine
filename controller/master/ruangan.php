<?php
require '../../db/connect.php';
if (isset($_POST['simpangedung'])) {
   $gedung = $_POST['gedung'];
   $insert = mysqli_query($koneksi, "INSERT INTO ruangan_gedung(gedung)VALUES('$gedung') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahgedung'])) {
   $id = $_POST['id'];
   $gedung = $_POST['gedung'];
   $update = mysqli_query($koneksi, "UPDATE ruangan_gedung SET gedung='$gedung' WHERE id='$id'  ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusgedung'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM ruangan_gedung WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanlantai'])) {
   $lantai = $_POST['lantai'];
   $insert = mysqli_query($koneksi, "INSERT INTO ruangan_lantai(lantai)VALUES('$lantai') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahlantai'])) {
   $id = $_POST['id'];
   $lantai = $_POST['lantai'];
   $update = mysqli_query($koneksi, "UPDATE ruangan_lantai SET lantai='$lantai' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapuslantai'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM ruangan_lantai WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}


if (isset($_POST['simpankamar'])) {
   $gedung = $_POST['gedung'];
   $lantai = $_POST['lantai'];
   $nama = $_POST['nama'];
   $kelas = $_POST['kelas'];
   $totalkamar = $_POST['totalkamar'];
   $kode = rand(11, 99);
   $insert = mysqli_query($koneksi, "INSERT INTO ruangan_kamar(kode, kelas, kamar, gedung, lantai, total_kamar)VALUES('$kode','$kelas','$nama','$gedung','$lantai','$totalkamar') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahkamar'])) {
   $id = $_POST['id'];
   $gedung = $_POST['gedung'];
   $lantai = $_POST['lantai'];
   $nama = $_POST['nama'];
   $kelas = $_POST['kelas'];
   $totalkamar = $_POST['totalkamar'];
   $update = mysqli_query($koneksi, "UPDATE ruangan_kamar SET kelas='$kelas', kamar='$kamar', gedung='$gedung', lantai='$lantai', total_kamar='$totalkamar' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapuskamar'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM ruangan_kamar WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpankelas'])) {
   $kelas = $_POST['kelas'];
   $insert = mysqli_query($koneksi, "INSERT INTO ruangan_kelas(kelas)VALUES('$kelas') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahkelas'])) {
   $id = $_POST['id'];
   $kelas = $_POST['kelas'];
   $update = mysqli_query($koneksi, "UPDATE ruangan_kelas SET kelas='$kelas' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapuskelas'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM ruangan_kelas WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpantempattidur'])) {
   $kamar = $_POST['kamar'];
   $nokamar = $_POST['nokamar'];
   $nott = $_POST['nott'];
   $check = mysqli_query($koneksi, "SELECT * FROM ruangan_kamar WHERE kamar='$kamar'");
   $datacheck = mysqli_fetch_array($check);
   $kode = $datacheck['kode'];
   $kelas = $datacheck['kelas'];
   $insert = mysqli_query($koneksi, "INSERT INTO ruangan_tt(kamar, kelas, kode, no_kamar, no_bed)VALUES('$kamar','$kelas','$kode','$nokamar','$nott') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahtempattidur'])) {
   $id = $_POST['id'];
   $kamar = $_POST['kamar'];
   $nokamar = $_POST['nokamar'];
   $nott = $_POST['nott'];
   $check = mysqli_query($koneksi, "SELECT * FROM ruangan_kamar WHERE kamar='$kamar'");
   $datacheck = mysqli_fetch_array($check);
   $kode = $datacheck['kode'];
   $kelas = $datacheck['kelas'];
   $update = mysqli_query($koneksi, "UPDATE ruangan_tt SET kamar='$kamar', kelas='$kelas', kode='$kode', no_kamar='$nokamar',no_bed='$nott' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapustempattidur'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM ruangan_tt WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpankamarok'])) {
   $tipe = $_POST['tipe'];
   $kamar = $_POST['kamar'];
   if ($tipe == "1") {
      $table = "kamar_operasi";
   } else if ($tipe == "2") {
      $table = "kamar_bersalin";
   }
   $insert = mysqli_query($koneksi, "INSERT INTO $table(kamar)VALUES('$kamar') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahkamarok'])) {
   $id = $_POST['id'];
   $kamar = $_POST['kamar'];
   $tipe = $_POST['tipe'];
   if ($tipe == 1) {
      $table = "kamar_operasi";
   } else if ($tipe == 2) {
      $table = "kamar_bersalin";
   }
   $update = mysqli_query($koneksi, "UPDATE $table SET kamar='$kamar' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}


if (isset($_POST['hapuskamarok'])) {
   $id = $_POST['id'];
   $tipe = $_POST['tipe'];
   if ($tipe == 1) {
      $table = "kamar_operasi";
   } else if ($tipe == 2) {
      $table = "kamar_bersalin";
   }
   $delete = mysqli_query($koneksi, "DELETE FROM $table WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}


if (isset($_POST['simpanoktt'])) {
   $kamar = $_POST['kamar'];
   $kode = $_POST['kode'];
   $catatan = $_POST['catatan'];
   $tipe = $_POST['tipe'];
   if ($tipe == 1) {
      $table = "kamar_operasi_tt";
   } else if ($tipe == 2) {
      $table = "kamar_bersalin_tt";
   }
   $insert = mysqli_query($koneksi, "INSERT INTO $table(kamar, kode_tt, catatan)VALUES('$kamar','$kode','$catatan') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahoktt'])) {
   $id = $_POST['id'];
   $kode = $_POST['kode'];
   $catatan = $_POST['catatan'];
   $tipe = $_POST['tipe'];
   if ($tipe == 1) {
      $table = "kamar_operasi_tt";
   } else if ($tipe == 2) {
      $table = "kamar_bersalin_tt";
   }
   $update = mysqli_query($koneksi, "UPDATE $table SET kode_tt='$kode', catatan='$catatan' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}


if (isset($_POST['hapusoktt'])) {
   $id = $_POST['id'];
   $tipe = $_POST['tipe'];
   if ($tipe == 1) {
      $table = "kamar_operasi_tt";
   } else if ($tipe == 2) {
      $table = "kamar_bersalin_tt";
   }
   $delete = mysqli_query($koneksi, "DELETE FROM $table WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}
