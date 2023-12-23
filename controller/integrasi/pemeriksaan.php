<?php
require __DIR__ . '/../../db/connect.php';
require __DIR__ . '/../../controller/base/integrasi.php';
date_default_timezone_set('Asia/Jakarta');

$tipe = $_GET['tipe'];
$kode = $_GET['kode'];
$id = $_GET['id'];
$norawat = $_GET['norawat'];
if ($tipe == 1) {
   // $task = "4";
   // $insert = mysqli_query($koneksi, "INSERT INTO admisi_taskid (kodebooking, task_id)VALUES('$kode','$task')");

   // $data = [
   //    "kodebooking" => $kode,
   //    "taskid" => $task,
   //    "waktu" => strtotime(date('Y-m-d H:i:s')) * 1000,
   // ];
   // $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/updatewaktu";
   // post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

   echo " <script>alert ('Silahkan Melakukan Pemeriksaan Medis');
   document.location='../../module/inpatient/ass-detail?id=$id&norawat=$norawat&kode=$kode'</script>";
}
