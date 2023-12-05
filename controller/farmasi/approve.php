<?php

use Mpdf\Tag\Q;

require '../../db/connect.php';
$id = $_GET['id'];
$nopermintaan = $_GET['nopermintaan'];
$rm = $_GET['rm'];
if ($id == 1) {
   $status = 1;
   $update = mysqli_query($koneksi, "UPDATE permintaan_resep SET status='$status' WHERE nopermintaan='$nopermintaan'");
   if ($update) {
      echo " <script>alert ('Anda Telah Menerima Resep dan Resep Segera Anda Perisapkan');
document.location='../../module/farmasi/resep-detail?id=1&nopermintaan=$nopermintaan&rm=$rm'</script>";
   }
}
