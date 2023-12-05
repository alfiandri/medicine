<?php
require '../../db/connect.php';
$kodebooking = date('Ymd') . rand(111, 999);
$check = mysqli_query($koneksi, "SELECT * FROM antrian_loket");
$datacheck = mysqli_num_rows($check);
$antrian = $datacheck + 1;
$tipe = 'AD';
$no = '-';
$checkloket = mysqli_query($koneksi, "SELECT * FROM loket_admisi WHERE status=1");
$dataloket = mysqli_fetch_array($checkloket);
$loket = $dataloket['loket'];
$insert = mysqli_query($koneksi, "INSERT INTO antrian_loket (kodebooking, loket, nomor, tipe, nokartu)VALUES('$kodebooking','$loket','$antrian','$tipe','$no')");
if ($insert) {
   echo " <script>
   document.location='../../module/antrian/ambil-admisi'</script>";
} else {
}
