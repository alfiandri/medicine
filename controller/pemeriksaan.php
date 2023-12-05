<?php
require '../db/connect.php';
if (isset($_POST['simpanidentitas'])) {
   $id = $_POST['id'];
   $warganegera = $_POST['warganegara'];
   $status = $_POST['statusperkawinan'];
   $pekerjaan = $_POST['pekerjaan'];
   $insert = mysqli_query($koneksi, "UPDATE pasien SET warganegara='$warganegera', statusperkawinan='$status', pekerjaan='$pekerjaan' WHERE uid='$id'");
}
if (isset($_POST['simpanvitalsign'])) {
   $id = $_POST['id'];
   $td = $_POST['td'];
   $nd = $_POST['nd'];
   $isi = $_POST['isi'];
   $tegangan = $_POST['tegangan'];
   $napas = $_POST['napas'];
   $suhu = $_POST['suhu'];
   $insert = mysqli_query($koneksi, "INSERT INTO pasien_pemeriksaan (uid, td, nd, nafas, suhu, isi, tegangan) VALUES ('$id','$td','$nd','$napas','$suhu','$isi','$tegangan')");
}
if (isset($_POST['ubahvitalsign'])) {
   $id = $_POST['id'];
   $td = $_POST['td'];
   $nd = $_POST['nd'];
   $isi = $_POST['isi'];
   $tegangan = $_POST['tegangan'];
   $napas = $_POST['napas'];
   $suhu = $_POST['suhu'];
   $update = mysqli_query($koneksi, "UPDATE pasien_pemeriksaan SET td='$td', nd='$nd', nafas='$napas', suhu='$suhu', isi='$isi',
   tegangan='$tegangan' WHERE uid='$id'");
}

if (isset($_POST['simpanpostur'])) {
   $id = $_POST['id'];
   $bentuk = $_POST['bentuk'];
   $tb = $_POST['tb'];
   $bb = $_POST['bb'];
   $lp = $_POST['lp'];
   $lpa = $_POST['lpa'];
   $update = mysqli_query($koneksi, "UPDATE pasien_pemeriksaan SET bentuk='$bentuk', tb='$tb', bb='$bb', lp='$lp', lpa='$lpa' WHERE uid='$id' ");
}

if (isset($_POST['simpankulit'])) {
   $id = $_POST['id'];
   $inspeksi = $_POST['inspeksi'];
   $palpasi = $_POST['palpasi'];
   $catatan = $_POST['catatan'];
   $update = mysqli_query($koneksi, "UPDATE pasien_pemeriksaan SET kulit_inspeksi='$inspeksi', kulit_palpasi='$palpasi', kulit_catatan='$catatan' WHERE uid='$id' ");
}

if (isset($_POST['simpanjiwa'])) {
   $id = $_POST['id'];
   $somatic = $_POST['somatic'];
   $catatansomatic = $_POST['catatansomatic'];
   $psiokosomatik = $_POST['psiokosomatik'];
   $catatanpsiokosomatik = $_POST['catatanpsiokosomatik'];
   $emosional = $_POST['emosional'];
   $catatanemosional = $_POST['catatanemosional'];

   $insert = mysqli_query($koneksi, "INSERT INTO pasien_pemeriksaan_jiwa (uid,somatic, catatan_somatic, psiokosmatik, catatan_psiokosmatik, emosional, catatan_emosional) VALUES ('$id','$somatic','$catatansomatic','$psiokosomatik','$catatanpsiokosomatik','$emosional','$catatanemosional')");
}
