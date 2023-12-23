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

function generateUniqueNRM()
{
    global $koneksi;
    $sql = "SELECT * FROM pasien order by nomor_rm DESC";

    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_array($result);

    if ($row) {
        $rm = intval($row['nomor_rm']) + 1;
        return sprintf("%06d", $rm);
    }
    return sprintf("%06d", 1);
}