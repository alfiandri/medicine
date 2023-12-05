
<?php
$page = 'Print';
require '../../db/connect.php';
$nomor = $_POST['nomor'];
$checkdata = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nik='$nomor'");
$getdata = mysqli_fetch_array($checkdata);
$nik = $getdata['nik'];
if ($nik == $nomor) {
    $tipe = "UL";
    echo " <script>alert ('Pasien Lama');
    document.location='../../module/console-box-antrian/print/print-umum?tipe=$tipe&nomor=$nomor'</script>";
} else {
    $tipe = "UB";
    echo " <script>alert ('Pasien Baru');
    document.location='../../module/console-box-antrian/print/print-umum?tipe=$tipe&nomor=$nomor'</script>";
}

?>
