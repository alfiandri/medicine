<?php
require '../db/connect.php';


if (isset($_POST['simpanpemeriksaanfisik'])) {
   $uid = $_POST['id'];
   $noregistrasi = $_POST['noregistrasi'];
   $keadaanumum = $_POST['keadaanumum'];
   $kesadaran = $_POST['kesadaran'];
   $bb = $_POST['bb'];
   $tb = $_POST['tb'];
   $td = $_POST['td'];
   $nadi = $_POST['nadi'];
   $napas = $_POST['napas'];
   $nyeri = $_POST['nyeri'];
   $lokasi = $_POST['lokasi'];
   $pencetus = $_POST['pencetus'];
   $durasi = $_POST['durasi'];
   $skala = $_POST['skala'];
   $skornyeri = $_POST['skornyeri'];
   $statusgizi = $_POST['statusgizi'];
   $risikojatuh = $_POST['risikojatuh'];
   $penyakit = $_POST['penyakit'];
   $prilaku = $_POST['prilaku'];
   $komunikasi = $_POST['komunikasi'];
   $insert = mysqli_query($koneksi, "INSERT INTO assPemeriksaanFisik (uidPasien, nomorRawat, keadaanUmum, kesadaran, bb, tb, td, nadi, napas, nyeri, lokasi, pencetus, durasi, skala, skor, statusGizi, risikoJatuh, kognitif, penyimpangan, komunikasi) VALUES ('$uid','$noregistrasi','$keadaanumum','$kesadaran','$bb','$tb','$td','$nadi','$napas','$nyeri','$lokasi','$pencetus','$durasi','$skala','$skornyeri','$statusgizi','$risikojatuh','$penyakit','$prilaku','$komunikasi')");
   if ($insert) {
      echo " <script>alert ('Berhasil Simpan Data Pemeriksaan');
      document.location='../inpatient/bdr-pasien-ass?id=$id&no=$noregistrasi'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
      document.location='../inpatient/bdr-pasien-ass?id=$id&no=$noregistrasi'</script>";
   }
}
