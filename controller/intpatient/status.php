<?php
require_once __DIR__ . '/../../db/connect.php';
require_once __DIR__ . '/../../controller/base/integrasi.php';
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['simpanstatus'])) {
   // var_dump($_POST);die;
   $kode = $_POST['kode'];
   $status = $_POST['status'];
   $catatan_kondisi = $_POST['catatan'];

   $jenisresep = $_POST['jenisresep'];
   $task = "5";
   $waktu = date('H:i:s');
   $sts = 1;

   $update = mysqli_query($koneksi, "UPDATE antrian_poli SET sudah_dilayani='1', jenisresep='$jenisresep' WHERE kodebooking='$kode'");
   $insert = mysqli_query($koneksi, "INSERT INTO admisi_taskid (kodebooking, task_id)VALUES('$kode','$task')");

   if ($jenisresep && $jenisresep != 'Tidak ada') {
      $insertFarmasi = mysqli_query($koneksi, "INSERT INTO permintaan_farmasi (kodebooking, jenis) VALUES('$kode','$jenisresep')");
   }
   $updatestatus = mysqli_query($koneksi, "UPDATE pasien_visit SET status_visit='$sts', catatan_kondisi = '$catatan_kondisi' WHERE kodebooking='$kode'");

   $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/updatewaktu";
   $data = [
      "kodebooking" => $kode,
      "taskid" => $task,
      "waktu" => strtotime(date('Y-m-d H:i:s')) * 1000,
      "jenisresep" => $jenisresep
   ];
   post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);
}
