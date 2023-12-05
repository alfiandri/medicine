<?php
require '../../db/connect.php';
if (isset($_POST['simpanservices'])); {
   $tipe = $_POST['tipe']; //1 Aplicares, 2 Vclaim, 3 Antrean, 4 Icare, 5 P Care
   $stag = $_POST['stag'];
   $baseurl = $_POST['baseurl'];
   $cons = $_POST['cons'];
   $secret = $_POST['secret'];
   $userkey = $_POST['userkey'];
   $services = $_POST['services'];
   if ($tipe == 1) {
      $table = "setting_aplicare";
      $insert = mysqli_query($koneksi, "INSERT INTO $table (level, base_url, cons_id, secret_key, user_key, service_name)
      VALUES('$stag','$baseurl','$cons','$secret','$userkey','$services')");
   } else if ($tipe == 2) {
      $table = "setting_vclaim";
      $insert = mysqli_query($koneksi, "INSERT INTO $table (level, base_url, cons_id, secret_key, user_key, service_name)
      VALUES('$stag','$baseurl','$cons','$secret','$userkey','$services')");
   } else if ($tipe == 3) {
      $table = "setting_anteran";
      $insert = mysqli_query($koneksi, "INSERT INTO $table (level, base_url, cons_id, secret_key, user_key, service_name)
      VALUES('$stag','$baseurl','$cons','$secret','$userkey','$services')");
   } else if ($tipe == 4) {
      $table = "setting_icare";
      $insert = mysqli_query($koneksi, "INSERT INTO $table (level, base_url, cons_id, secret_key, user_key, service_name)
      VALUES('$stag','$baseurl','$cons','$secret','$userkey','$services')");
   } else if ($tipe == 5) {
      $table = "setting_pcare";
      $insert = mysqli_query($koneksi, "INSERT INTO $table (level, base_url, cons_id, secret_key, user_key, service_name)
      VALUES('$stag','$baseurl','$cons','$secret','$userkey','$services')");
   } else  if ($tipe == 6) {
      $table = "setting_rekammedis";
      $insert = mysqli_query($koneksi, "INSERT INTO $table (level, base_url, cons_id, secret_key, user_key, service_name)
      VALUES('$stag','$baseurl','$cons','$secret','$userkey','$services')");
   }
}

if (isset($_POST['hapusservices'])); {
   $id = $_POST['id'];
   $tipe = $_POST['tipe']; //1 Aplicares
   if ($tipe == 1) {
      $table = "setting_aplicare";
      $delete = mysqli_query($koneksi, "DELETE FROM $table WHERE id='$id' ");
   } else if ($tipe == 2) {
      $table = "setting_vclaim";
      $delete = mysqli_query($koneksi, "DELETE FROM $table WHERE id='$id' ");
   } else if ($tipe == 3) {
      $table = "setting_anteran";
      $delete = mysqli_query($koneksi, "DELETE FROM $table WHERE id='$id' ");
   } else if ($tipe == 4) {
      $table = "setting_icare";
      $delete = mysqli_query($koneksi, "DELETE FROM $table WHERE id='$id' ");
   } else if ($tipe == 5) {
      $table = "setting_pcare";
      $delete = mysqli_query($koneksi, "DELETE FROM $table WHERE id='$id' ");
   } else if ($tipe == 6) {
      $table = "setting_rekammedis";
      $delete = mysqli_query($koneksi, "DELETE FROM $table WHERE id='$id' ");
   }
}


if (isset($_POST['disable'])); {
   $id = $_POST['id'];
   $tipe = $_POST['tipe']; //1 Aplicares
   if ($tipe == 1) {
      $table = "setting_aplicare";
      $status = 0;
      $update = mysqli_query($koneksi, "UPDATE $table SET status='$status' WHERE id='$id'");
   } else  if ($tipe == 2) {
      $table = "setting_vclaim";
      $status = 0;
      $update = mysqli_query($koneksi, "UPDATE $table SET status='$status' WHERE id='$id'");
   } else  if ($tipe == 3) {
      $table = "setting_anteran";
      $status = 0;
      $update = mysqli_query($koneksi, "UPDATE $table SET status='$status' WHERE id='$id'");
   } else  if ($tipe == 4) {
      $table = "setting_icare";
      $status = 0;
      $update = mysqli_query($koneksi, "UPDATE $table SET status='$status' WHERE id='$id'");
   } else  if ($tipe == 5) {
      $table = "setting_pcare";
      $status = 0;
      $update = mysqli_query($koneksi, "UPDATE $table SET status='$status' WHERE id='$id'");
   } else if ($tipe == 6) {
      $table = "setting_rekammedis";
      $status = 0;
      $update = mysqli_query($koneksi, "UPDATE $table SET status='$status' WHERE id='$id'");
   }
}


if (isset($_POST['enable'])); {
   $id = $_POST['id'];
   $tipe = $_POST['tipe']; //1 Aplicares
   if ($tipe == 1) {
      $table = "setting_aplicare";
      $status = 1;
      $update = mysqli_query($koneksi, "UPDATE $table SET status='$status' WHERE id='$id'");
   } else if ($tipe == 2) {
      $table = "setting_vclaim";
      $status = 1;
      $update = mysqli_query($koneksi, "UPDATE $table SET status='$status' WHERE id='$id'");
   } else if ($tipe == 3) {
      $table = "setting_anteran";
      $status = 1;
      $update = mysqli_query($koneksi, "UPDATE $table SET status='$status' WHERE id='$id'");
   } else if ($tipe == 4) {
      $table = "setting_icare";
      $status = 1;
      $update = mysqli_query($koneksi, "UPDATE $table SET status='$status' WHERE id='$id'");
   } else if ($tipe == 5) {
      $table = "setting_pcare";
      $status = 1;
      $update = mysqli_query($koneksi, "UPDATE $table SET status='$status' WHERE id='$id'");
   } else if ($tipe == 6) {
      $table = "setting_rekammedis";
      $status = 1;
      $update = mysqli_query($koneksi, "UPDATE $table SET status='$status' WHERE id='$id'");
   }
}
