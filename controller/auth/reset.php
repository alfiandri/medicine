<?php
require '../../db/connect.php';
$user = $_POST['user'];
$check = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user'");
$data = mysqli_fetch_array($check);
if ($data != NULL) {
   $pass = rand(1111, 9999);
   $passenc = md5($pass);
   $update = mysqli_query($koneksi, "UPDATE user SET password='$passenc' WHERE username='$user' ");
   echo " <script>alert ('Password anda berhasil di reset :$pass');
   document.location='../../index'</script>";
} else {
   echo " <script>alert ('Username anda tidak terdaftar, anda tidak dapat melakukan reset password, periksa kembali username anda');
   document.location='../../auth/forgot-password'</script>";
}
