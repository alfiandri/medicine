<?php
require_once __DIR__ . '/../../db/connect.php';
session_start();
if (empty($_SESSION['username'])) {
   echo "<script>alert('Akses halaman ini diabatasi, silahkan login terlebih dahulu');
document.location='../index'</script>";
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


function generateKodeBooking()
{
   global $koneksi;

   // kode booking start
   $isUnique = false;
   $kodebooking = '';
   $date = date('Ymd');

   while (!$isUnique) {
      // Generate the unique code
      $unique = rand(0, 999);

      $kodebooking = $date . sprintf('%03d', $unique);

      // Check if the code already exists in the database
      $checkQuery = "SELECT COUNT(*) as count FROM antrian_loket WHERE kodebooking = '$kodebooking'";
      $result = mysqli_query($koneksi, $checkQuery);

      $row = mysqli_fetch_array($result);
      $count = $row['count'];

      // If the code is not unique, regenerate it
      if ($count == 0) {
         $isUnique = true; // Exit the loop if the code is unique
      }
   }
   // kode booking end
   return $kodebooking;
}
