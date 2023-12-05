<?php
require '../../db/connect.php';
if (isset($_POST['simpanstatus'])) {
   $kode = $_POST['kode'];
   $status = $_POST['status'];
   $task = "5";
   $waktu = date('H:i:s');
   $sts = 1;
   $update = mysqli_query($koneksi, "UPDATE admisi_jkn SET task_id='$task', waktu='$waktu' WHERE kodebooking='$kode'");
   $insert = mysqli_query($koneksi, "INSERT INTO admisi_taskid (kodebooking, task_id)VALUES('$kode','$task')");
   $updatestatus = mysqli_query($koneksi, "UPDATE pasien_visit SET status_visit='$sts' WHERE kodebooking='$kode'");
}
