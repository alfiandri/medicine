<?php
require '../../db/connect.php';
$tipe = $_GET['tipe'];
$kode = $_GET['kode'];
$id = $_GET['id'];
$norawat = $_GET['norawat'];
if ($tipe == 1) {
   $task = "4";
   $waktu = date('H:i:s');
   $update = mysqli_query($koneksi, "UPDATE admisi_jkn SET task_id='$task', waktu='$waktu' WHERE kodebooking='$kode'");
   $insert = mysqli_query($koneksi, "INSERT INTO admisi_taskid (kodebooking, task_id)VALUES('$kode','$task')");
   if ($insert) {
      echo " <script>alert ('Silahkan Melakukan Pemeriksaan Medis');
   document.location='../../module/inpatient/ass-detail?id=$id&norawat=$norawat&kode=$kode'</script>";
   } else {
   }
}
