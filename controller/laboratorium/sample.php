<?php
require '../../db/connect.php';
if (isset($_POST['simpansample'])) {
   $nomorrm = $_POST['nomorrm'];
   $nopermintaan = $_POST['nopermintaan'];
   $tanggal = $_POST['tanggal'];
   $waktu = $_POST['waktu'];
   $sample = $_POST['sample'];
   $catatan = $_POST['catatan'];
   $insert = mysqli_query($koneksi, "INSERT INTO lab_pengambilan_sample (nomor_rm, nopermintaan, tanggal, waktu, sample, catatan) VALUES('$nomorrm','$nopermintaan','$tanggal','$waktu','$sample','$catatan')");
}
