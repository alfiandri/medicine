<?php
require '../../db/connect.php';
if (isset($_POST['simpansupplier'])) {
   $nama = $_POST['nama'];
   $telepon = $_POST['telepon'];
   $alamat = $_POST['alamat'];
   $deskripsi = $_POST['deskripsi'];
   $tipe = $_POST['tipe'];
   $insert = mysqli_query($koneksi, "INSERT INTO supplier(tipe, nama_principle, telepon, alamat, deskripsi )VALUES('$tipe','$nama','$telepon','$alamat','$deskripsi') ");
}

if (isset($_POST['ubahsupplier'])) {
   $id = $_POST['id'];
   $nama = $_POST['nama'];
   $telepon = $_POST['telepon'];
   $alamat = $_POST['alamat'];
   $deskripsi = $_POST['deskripsi'];
   $update = mysqli_query($koneksi, "UPDATE  supplier SET nama_principle='$nama', telepon='$telepon', alamat='$alamat', deskripsi='$deskripsi' WHERE id='$id'");
}

if (isset($_POST['hapussupplier'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM supplier WHERE id='$id' ");
}

if (isset($_POST['simpanjadwal'])) {
   $id = $_POST['id'];
   $hari = $_POST['hari'];
   $mulai = $_POST['mulai'];
   $akhir = $_POST['akhir'];
   $insert = mysqli_query($koneksi, "INSERT INTO shiftDurasi(idshift, hari, mulai, akhir)VALUES('$id','$hari','$mulai','$akhir') ");
}


if (isset($_POST['ubahjadwal'])) {
   $id = $_POST['id'];
   $hari = $_POST['hari'];
   $mulai = $_POST['mulai'];
   $akhir = $_POST['akhir'];
   $update = mysqli_query($koneksi, "UPDATE shiftDurasi SET hari='$hari', mulai='$mulai', akhir='$akhir' WHERE id='$id' ");
}

if (isset($_POST['hapusjadwal'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM shiftDurasi WHERE id='$id'");
}
