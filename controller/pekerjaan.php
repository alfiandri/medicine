<?php
require '../db/connect.php';
if (isset($_POST['simpanpekerjaan'])) {
   $id = $_POST['id'];
   $impact = $_POST['impact'];
   $catatanimpact = $_POST['catatan_impact'];
   $situasi = $_POST['situasi'];
   $catatansituasi = $_POST['catatan_situasi'];
   $insert = mysqli_query($koneksi, "INSERT INTO pasien_pekerjaan (uid, impact, catatan_impact, situasi, catatan_situasi) VALUES ('$id','$impact','$catatanimpact','$situasi','$catatansituasi')");
}
