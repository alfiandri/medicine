<?php
require __DIR__ . '/../../db/connect.php';
require __DIR__ . '/../../controller/base/integrasi.php';
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['simpanoperasi'])) {
   $rm = $_POST['nomorrm'];
   $notiket = date('ymd') . "OK" . rand(111, 999);
   $tanggal = $_POST['tanggal'];
   $waktu = $_POST['waktu'];
   $kamar = $_POST['kamar'];
   $tempattidur = $_POST['tempattidur'];
   $dokteranastesi = $_POST['dokteranastesi'];
   $dokterok = $_POST['dokterok'];
   $catatan = $_POST['catatan'];
   $insert = mysqli_query($koneksi, "INSERT INTO permintaan_ok (nomor_rm, nopermintaan, tanggal, waktu, kamar, bed, dokter_anastesi, dokter_ok, catatan) VALUES ('$rm','$notiket','$tanggal','$waktu','$kamar','$bed','$dokteranastesi','$dokterok','$catatan')");
}

if (isset($_POST['simpanlab'])) {
   $notiket = date('ymd') . "LAB" . rand(111, 999);
   $tanggal = date('Y-m-d');
   $waktu = date('H:i:s');
   $catatan = $_POST['catatan'];
   $nomorrm = $_POST['nomorrm'];
   $insert = mysqli_query($koneksi, "INSERT INTO permintaan_lab (nopermintaan, nomor_rm, tanggal, waktu, catatan) VALUES('$notiket','$nomorrm','$tanggal','$waktu','$catatan')");
}

if (isset($_POST['simpanlabdetail'])) {
   $nomorrm = $_POST['nomorrm'];
   $nopermintaan = $_POST['nopermintaan'];
   $lab = $_POST['lab'];
   $catatan = $_POST['catatan'];
   $insert = mysqli_query($koneksi, "INSERT INTO permintaan_lab_detail (nomor_rm, nopermintaan, lab, catatan) VALUES('$nomorrm','$nopermintaan','$lab','$catatan')");
}


if (isset($_POST['simpanradiologi'])) {
   $notiket = date('ymd') . "LAB" . rand(111, 999);
   $tanggal = date('Y-m-d');
   $waktu = date('H:i:s');
   $catatan = $_POST['catatan'];
   $nomorrm = $_POST['nomorrm'];
   $insert = mysqli_query($koneksi, "INSERT INTO permintaan_radiologi (nopermintaan, nomor_rm, tanggal, waktu, catatan) VALUES('$notiket','$nomorrm','$tanggal','$waktu','$catatan')");
}

if (isset($_POST['simpanraddetail'])) {
   $nomorrm = $_POST['nomorrm'];
   $nopermintaan = $_POST['nopermintaan'];
   $lab = $_POST['lab'];
   $catatan = $_POST['catatan'];
   $insert = mysqli_query($koneksi, "INSERT INTO permintaan_radiologi_detail (nomor_rm, nopermintaan, radiologi, catatan) VALUES('$nomorrm','$nopermintaan','$lab','$catatan')");
}


if (isset($_POST['simpanpermintaanri'])) {
   $rm = $_POST['nomorrm'];
   $notiket = date('ymd') . "OK" . rand(111, 999);
   $tanggal = $_POST['tanggal'];
   $waktu = $_POST['waktu'];
   $kamar = $_POST['kamar'];
   $tempattidur = $_POST['tempattidur'];
   $catatan = $_POST['catatan'];
   $insert = mysqli_query($koneksi, "INSERT INTO permintaan_rawatinap (nomor_rm, nopermintaan, tanggal, waktu, kamar, bed, catatan) VALUES ('$rm','$notiket','$tanggal','$waktu','$kamar','$bed','$catatan')");
}

if (isset($_POST['simpanresep'])) {
   $notiket = date('ymd') . "RSP" . rand(111, 999);
   $tanggal = date('Y-m-d');
   $waktu = date('H:i:s');
   $catatan = $_POST['catatan'];
   $nomorrm = $_POST['nomorrm'];
   $kode = $_POST['kode'];
   $task = "6";
   $waktu = date('H:i:s');
   // $update = mysqli_query($koneksi, "UPDATE admisi_jkn SET task_id='$task', waktu='$waktu' WHERE kodebooking='$kode'");
   $inserttask = mysqli_query($koneksi, "INSERT INTO admisi_taskid (kodebooking, task_id)VALUES('$kode','$task')");
   $insertresep = mysqli_query($koneksi, "INSERT INTO permintaan_resep (nopermintaan, nomor_rm, tanggal, waktu, catatan) VALUES('$notiket','$nomorrm','$tanggal','$waktu','$catatan')");
   // $insertantrian = mysqli_query($koneksi, "INSERT INTO antrian_farmasi (kodebooking, tanggal, keterangan, nomor, tipe)VALUES('$kode','$tanggal', '$catatan', '1', 'F')");

   $data = [
      "kodebooking" => $kode,
      "taskid" => $task,
      "waktu" => strtotime(date('Y-m-d H:i:s')) * 1000,
   ];
   $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/updatewaktu";
   post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean)[0];
}

if (isset($_POST['simpanresepdetail'])) {
   $nomorrm = $_POST['nomorrm'];
   $nopermintaan = $_POST['nopermintaan'];
   $resep = $_POST['obat'];
   $signa = $_POST['signa'];
   $qty = $_POST['qty'];
   $satuan = $_POST['satuan'];
   $catatan = $_POST['catatan'];
   $insert = mysqli_query($koneksi, "INSERT INTO permintaan_resep_detail (nomor_rm, nopermintaan, resep, signa, satuan, qty, catatan) VALUES('$nomorrm','$nopermintaan','$resep','$signa','$satuan','$qty','$catatan')");
}
