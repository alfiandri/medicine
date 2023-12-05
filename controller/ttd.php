<?php
require '../db/connect.php';
$id = $_POST['id'];
$folderPath = "../file/ttdpasien/";
// $sig_string = $_POST['signature'];
$nama_file = "signature_" . date("his") . ".png";
$image_parts = explode(";base64,", $_POST['signature']);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);
$namafile = uniqid() . '.' . $image_type;
$file = $folderPath . $namafile;
file_put_contents($file, $image_base64);
$update = mysqli_query($koneksi, "UPDATE pasienBooking SET ttd='$namafile' WHERE uidBooking='$id'");
if ($update) {
   echo " <script>alert ('Tandan Tangan Anda Telah Tersimpan Berikutnya Anda Bisa Datang Langsung Ke RS.Medicine untuk Check Reservasi dengan Memperlihatkan E-Ticket Berikut Ini');
   document.location='../booking/bo-ticket?id=$id'</script>";
} else {
   echo " <script>alert ('Gagal Simpan');
   document.location='../booking/bo-ttd?ticket=$id'</script>";
}
