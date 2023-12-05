<?php
require '../db/connect.php';
$user = $_POST['user'];
$pass = md5($_POST['pass']);
$uid = md5($user);
$insert = mysqli_query($koneksi, "INSERT INTO user (uid, username, password) VALUES ('$uid','$user','$pass')");
if ($insert) {
   echo " <script>alert ('Registrasi Anda Berhasil, Silahkan Login Untuk Melengkapi Form Registrasi MCU Online');
   document.location='../login'</script>";
} else {
   echo " <script>alert ('Registrasi Anda Gagal !!!');
   document.location='../index'</script>";
}
