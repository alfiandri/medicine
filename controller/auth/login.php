<?php
require '../../db/connect.php';
$user = $_POST['user'];
$pass = md5($_POST['password']);
$check = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user' AND password='$pass'");
$data = mysqli_fetch_array($check);
if ($data != NULL) {
   session_start();
   $_SESSION['uid'] = $data['uid'];
   $_SESSION['fullname'] = $data['fullname'];
   $_SESSION['username'] = $data['username'];
   $_SESSION['status'] = $data['status_user'];
   $roles = $data['roles'];
   $path = $data['path'];
   if ($path == 'usecase') {
      echo " <script>alert ('Berhasil Login Sebagai $roles ');
      document.location='../../module/$path/$roles'</script>";
   } else {
      echo " <script>alert ('Berhasil Login Sebagai $roles ');
      document.location='../../module/$path'</script>";
   }
} else {
   echo " <script>alert ('Login anda gagal, periksa kembali username or password anda');
   document.location='../../auth/'</script>";
}
