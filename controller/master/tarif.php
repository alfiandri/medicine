<?php
require '../../db/connect.php';
if (isset($_POST['simpantarifobat'])) {
   $tarif = $_POST['tarif'];
   $id = $_POST['id'];
   $update = mysqli_query($koneksi, "UPDATE obat SET tarif_dasar='$tarif' WHERE id='$id' ");
}

if (isset($_POST['simpanlayananobat'])) {
   $layanan = $_POST['layanan'];
   $tarif = $_POST['tarif'];
   $obat = $_POST['obat'];
   $update = mysqli_query($koneksi, "INSERT INTO obat_tarif_layanan (obat, layanan, tarif)VALUES('$obat','$layanan','$tarif')");
}
if (isset($_POST['simpanjaminanobat'])) {
   $jaminan = $_POST['jaminan'];
   $tarif = $_POST['tarif'];
   $obat = $_POST['obat'];
   $update = mysqli_query($koneksi, "INSERT INTO obat_tarif_jaminan (obat, jaminan, tarif)VALUES('$obat','$jaminan','$tarif')");
}

if (isset($_POST['simpanmargin'])) {
   $jaminan = $_POST['jaminan'];
   $margin = $_POST['persen'];
   $update = mysqli_query($koneksi, "INSERT INTO obat_margin (jaminan, margin)VALUES('$jaminan','$margin')");
}
