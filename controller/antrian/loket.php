<?php
require __DIR__ . '/../../db/connect.php';
require __DIR__ . '/../../controller/base/integrasi.php';
$act = $_GET['actions'];
$loketId = $_GET['loket_id'];
$previousUrl = $_SERVER["HTTP_REFERER"];
date_default_timezone_set('Asia/Jakarta');

if ($act == 1) {
   // TODO add flag dipanggil to display it in monitor
   $id = $_GET['id'];

   echo json_encode([
      'metadata' => [
         'code' => 200,
         'message' => 'Ok'
      ]
   ]);
   exit;
} else if ($act == 2) {
   $id = $_GET['id'];
   $kode = @$_GET['kode'];

   if ($kode) {
      $task = "4";
      $insert = mysqli_query($koneksi, "INSERT INTO admisi_taskid (kodebooking, task_id)VALUES('$kode','$task')");

      $data = [
         "kodebooking" => $kode,
         "taskid" => $task,
         "waktu" => strtotime(date('Y-m-d H:i:s')) * 1000,
      ];
      $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/updatewaktu";
      post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

      $updateantrian = mysqli_query($koneksi, "UPDATE antrian_poli SET status=1 WHERE id='$id'");
   } else {
      $updateantrian = mysqli_query($koneksi, "UPDATE antrian_loket SET status=1 WHERE id='$id'");
   }

   echo " <script>alert ('Silakan panggil antrian berikutnya');
   document.location='$previousUrl'</script>";
} else if ($act == 3) {
   $id = $_GET['id'];
   $status = 0;
   $antrian = mysqli_query($koneksi, "SELECT * FROM antrian_loket WHERE id='$id'");
   $antrian = mysqli_fetch_array($antrian);

   $update = mysqli_query($koneksi, "DELETE FROM antrian_loket WHERE id='$id'");

   echo " <script>alert ('Anda Membatalkan Pasien Ini');
   document.location='$previousUrl'</script>";
} else if ($act == 4) {
   $id = $_GET['id'];
   $kode = @$_GET['kode'];

   if ($kode) {
      $timestamp = date('Y-m-d H:i:s');
      $update = mysqli_query($koneksi, "UPDATE antrian_poli SET antri_at = '$timestamp' WHERE kodebooking='$kode'");
   } else {
      $update = mysqli_query($koneksi, "UPDATE antrian_loket SET lewati='1' WHERE id='$id'");
   }
   echo " <script>alert ('Anda telah melewati pasien Ini');
   document.location='$previousUrl'</script>";
} else if ($act == 5) {
   $id = $_GET['id'];
   $status = 0;
   $antrian = mysqli_query($koneksi, "SELECT * FROM antrian_poli WHERE id='$id'");
   $antrian = mysqli_fetch_array($antrian);

   $update = mysqli_query($koneksi, "UPDATE antrian_poli set batal = 1 WHERE id='$id'");

   // API Endpoint URL
   $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/batal";

   $data = [
      "kodebooking" => $antrian['kodebooking'],
      "keterangan" => 'Pasien tidak hadir',
   ];
   $response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

   echo " <script>alert ('Anda Membatalkan Pasien Ini');
   document.location='$previousUrl'</script>";
}
