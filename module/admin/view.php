<?php
require_once "../../db/connect.php";
session_start();
if (empty($_SESSION['username'])) {
   echo "<script>alert('Akses halaman ini diabatasi, silahkan login terlebih dahulu');
document.location='../../index'</script>";
}

function tampildata($query)
{
   global $koneksi;
   $result = mysqli_query($koneksi, $query);
   $rows = [];
   while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
   }
   return $rows;
}
