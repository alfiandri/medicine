<?php
require '../../db/connect.php';
if (isset($_POST['simpanhasil'])) {
   $hasil = $_POST['hasil'];
   $id = $_POST['id'];
   $insert = mysqli_query($koneksi, "UPDATE permintaan_radiologi_detail SET hasil='$hasil' WHERE id='$id' ");
}
