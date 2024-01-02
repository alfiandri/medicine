<?php
require_once __DIR__ . '/../../db/connect.php';
require_once __DIR__ . '/../../controller/base/integrasi.php';
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['simpanobatfarmasi'])) {
   $nomorrm = $_POST['nomorrm'];
   $nopermintaan = $_POST['nopermintaan'];
   $obat  = $_POST['obat'];
   $carapakai = $_POST['pakai'];
   $signa = $_POST['signa'];
   $catatan = $_POST['catatan'];
   $insert = mysqli_query($koneksi, "INSERT INTO farmasi_permintaan_resep (nomor_rm, nopermintaan, obat, carapakai, signa, catatan) VALUES('$nomorrm','$nopermintaan','$obat','$carapakai','$signa','$catatan')");
}

if (isset($_POST['simpanterimaobat'])) {
   $rm = $_POST['rm'];
   $kode = $_POST['kode'];
   $task = "7";
   $waktu = date('H:i:s');
   $no = $_POST['no'];
   // $update = mysqli_query($koneksi, "UPDATE admisi_jkn SET task_id='$task', waktu='$waktu' WHERE kodebooking='$kode'");
   $inserttask = mysqli_query($koneksi, "INSERT INTO admisi_taskid (kodebooking, task_id)VALUES('$kode','$task')");
   $insert = mysqli_query($koneksi, "INSERT INTO farmasi_permintaan_resep (nomor_rm, nopermintaan, obat, carapakai, signa, catatan) VALUES('$nomorrm','$nopermintaan','$obat','$carapakai','$signa','$catatan')");
   $status = 2;
   $updatepermintaan = mysqli_query($koneksi, "UPDATE permintaan_resep SET status='$status' WHERE nopermintaan='$no' ");

   $data = [
      "kodebooking" => $kode,
      "taskid" => $task,
      "waktu" => strtotime(date('Y-m-d H:i:s')) * 1000,
   ];
   $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/updatewaktu";
   post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

   if ($updatepermintaan) {
      echo " <script>alert ('Obat Telah Di Terima Pasien');
      document.location='../../module/farmasi/resep'</script>";
   }
}
