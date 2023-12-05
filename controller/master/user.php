<?php
require '../../db/connect.php';
if (isset($_POST['simpanuserbpjs'])) {
   $nama = $_POST['nama'];
   $username = $_POST['username'];
   $role = $_POST['role'];
   $password = md5($_POST['password']);
   $uid = rand(1111, 9999);
   $path = "integrasi";
   $insert = mysqli_query($koneksi, "INSERT INTO user_bpjs(uid, fullname, username, password, path, roles)VALUES('$uid','$nama','$username','$password','$path','$role') ");
}
if (isset($_POST['ubahuserbpjs'])) {
   $nama = $_POST['nama'];
   $username = $_POST['username'];
   $role = $_POST['role'];
   $password = $_POST['password'];
   $id = $_POST['id'];
   $check = mysqli_query($koneksi, "SELECT * FROM user_bpjs WHERE id='$id'");
   $datacheck = mysqli_fetch_array($check);
   $pass = $datacheck['password'];
   if ($pass == $password) {
      $update = mysqli_query($koneksi, "UPDATE  user_bpjs SET fullname='$nama', username='$username', roles='$role' WHERE id='$id'");
   } else {
      $md5 = md5($password);
      $update = mysqli_query($koneksi, "UPDATE  user_bpjs SET fullname='$nama', username='$username', roles='$role', password='$md5' WHERE id='$id'");
   }
}
if (isset($_POST['hapususerbpjs'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM user_bpjs WHERE id='$id'");
}

if (isset($_POST['simpanuser'])) {
   $nama = $_POST['nama'];
   $username = $_POST['username'];
   $role = $_POST['role'];
   $password = md5($_POST['password']);
   $uid = rand(1111, 9999);
   $insert = mysqli_query($koneksi, "INSERT INTO user(uid, fullname, username, password, path, roles)VALUES('$uid','$nama','$username','$password','$role','$role') ");
}
if (isset($_POST['ubahuser'])) {
   $nama = $_POST['nama'];
   $username = $_POST['username'];
   $role = $_POST['role'];
   $password = $_POST['password'];
   $id = $_POST['id'];
   $check = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
   $datacheck = mysqli_fetch_array($check);
   $pass = $datacheck['password'];
   if ($pass == $password) {
      $update = mysqli_query($koneksi, "UPDATE  user SET fullname='$nama', username='$username', roles='$role', path='$role' WHERE id='$id'");
   } else {
      $md5 = md5($password);
      $update = mysqli_query($koneksi, "UPDATE  user SET fullname='$nama', username='$username', roles='$role', path='$role', password='$md5' WHERE id='$id'");
   }
}
if (isset($_POST['hapususer'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'");
}
