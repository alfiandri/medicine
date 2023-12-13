
<?php
$page = 'Print';
require '../../db/connect.php';
$nomor = @$_POST['nomor'];
$checkdata = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nik='$nomor'");
$getdata = mysqli_fetch_array($checkdata);
$nik = $getdata['nik'];

if (!$nomor) {
    $tipe = "UB";
    echo " <script>alert ('Pasien Baru');
    document.location='../../module/console-box-antrian/print/print-umum?tipe=$tipe&nomor=$nomor'</script>";
    exit;
}

if ($nik == $nomor) {
    $tipe = "UL";
    echo " <script>alert ('Pasien Lama');
    document.location='../../module/console-box-antrian/print/print-umum?tipe=$tipe&nomor=$nomor'</script>";
    exit;
} else {
    echo " <script>alert ('Data NIK tidak ditemukan!');
    document.location='../../module/console-box-antrian/index'</script>";
}

?>
