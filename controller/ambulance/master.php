<?php
require '../../db/connect.php';
if (isset($_POST['simpansupir'])) {
   $nomor = $_POST['nomor'];
   $telepon = $_POST['telepon'];
   $alamat = $_POST['alamat'];
   $nama = $_POST['nama'];
   $insert = mysqli_query($koneksi, "INSERT INTO karyawan_supir(nomor, nama, telepon, alamat)VALUES('$nomor','$nama','$telepon','$alamat') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahsupir'])) {
   $id = $_POST['id'];
   $nomor = $_POST['nomor'];
   $telepon = $_POST['telepon'];
   $alamat = $_POST['alamat'];
   $nama = $_POST['nama'];
   $update = mysqli_query($koneksi, "UPDATE karyawan_supir SET nomor='$nomor', nama='$nama', telepon='$telepon', alamat='$alamat' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapussupir'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM karyawan_supir  WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanperalatan'])) {
   $kode = $_POST['kode'];
   $barcode = $_POST['barcode'];
   $barang = $_POST['barang'];
   $satuan = $_POST['satuan'];
   $catatan = $_POST['catatan'];
   $insert = mysqli_query($koneksi, "INSERT INTO ambulance_barang(kode, barcode, barang, satuan, catatan)VALUES('$kode','$barcode','$barang','$satuan','$catatan') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}


if (isset($_POST['ubahperalatan'])) {
   $id = $_POST['id'];
   $kode = $_POST['kode'];
   $barcode = $_POST['barcode'];
   $barang = $_POST['barang'];
   $satuan = $_POST['satuan'];
   $catatan = $_POST['catatan'];
   $update = mysqli_query($koneksi, "UPDATE ambulance_barang SET kode='$kode', barcode='$barcode', barang='$barang', satuan='$satuan', catatan='$catatan' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusperalatan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM ambulance_barang WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}


if (isset($_POST['simpankendaraan'])) {
   $nomor = $_POST['nomor'];
   $plat = $_POST['plat'];
   $merk = $_POST['merk'];
   $satuan = $_POST['satuan'];
   $catatan = $_POST['catatan'];
   $insert = mysqli_query($koneksi, "INSERT INTO ambulance(nomor, plat, merk, tahun, catatan)VALUES('$nomor','$barcode','$barang','$satuan','$catatan') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
