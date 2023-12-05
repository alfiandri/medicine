<?php
require '../../db/connect.php';
$rm = $_POST['nomorrm'];
$tipe = $_GET['tipe'];
$check = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nomor_rm='$rm'");
$datacheck = mysqli_fetch_array($check);
$nomorrm = $datacheck['nomor_rm'];
if ($nomorrm == $rm) {
   echo " <script>alert ('Nomor Rekam Medis Telah Digunakan');
   document.location='../../module/admisi/admisi-add?tipe=$tipe'</script>";
} else {
   echo " <script>
   document.location='../../module/admisi/admisi-add?rm=$rm&tipe=$tipe'</script>";
}
