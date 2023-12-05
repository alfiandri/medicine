<?php
require "../db/connect.php";
$img = $_POST['image'];
$folderPath = "../file/fotopasien/";

$image_parts = explode(";base64,", $img);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];

$image_base64 = base64_decode($image_parts[1]);
$fileName = uniqid() . '.png';

$file = $folderPath . $fileName;
file_put_contents($file, $image_base64);

$id = $_GET['id'];
// print_r($fileName);
$update = mysqli_query($koneksi, "UPDATE pasien SET foto='$fileName' WHERE uid_pasien='$id'");
if ($update) {
   $_SESSION["sukses"] = 'Foto Berhasil Disimpan';
   echo " <script>alert('Berhasil Ambil Gambar dan Disimpan Di Database');
document.location='../module/admisi/capture?id=$id'</script>";
} else {
   $_SESSION["error"] = 'Gagal Simpan';
}
