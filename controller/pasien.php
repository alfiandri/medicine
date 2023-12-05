<?php
require '../db/connect.php';
$uid = $_POST['uid'];
$kartu = $_POST['kartu'];
$nokartu = $_POST['nokartu'];
$sebutan = $_POST['sebutan'];
$nama = $_POST['nama'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];
$gender = $_POST['jk'];
$agama = $_POST['agama'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$insert = mysqli_query($koneksi, "INSERT INTO pasien (uid, identitas, no_identitas, sebutan, namalengkap,tempatlahir, tanggallahir, jk, agama, hp, email, alamat) VALUES ('$uid','$kartu','$nokartu','$sebutan','$nama','$tempatlahir','$tanggallahir','$gender','$agama','$hp','$email','$alamat')");
if ($insert) {
   echo " <script>alert ('Identitas Anda Berhasil Di Registrasi, Berikut Isi Data Kelengkapan Dokumen');
document.location='../pasien/dokumen'</script>";
}
