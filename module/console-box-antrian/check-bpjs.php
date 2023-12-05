<?php
$page = 'Print';
include('head.php');
$waktu = date("H:i:s");
$tanggal = date("d-m-Y");
?>

<head>

</head>
<style>
    .garis {
        height: 5px;
        background-color: black;
        width: 100%;
    }
</style>
<?php
require '../../db/connect.php';
$tipe = $_POST['tipe']; //1 KTP, 2 BPJS
$nomor = $_POST['nomor'];
if ($tipe == 1) {
    $checkdata = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nik='$nomor'");
    $getdata = mysqli_fetch_array($checkdata);
} else if ($tipe == 2) {
    $checkdata = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nomor_kartu='$nomor'");
    $getdata = mysqli_fetch_array($checkdata);
}

if ($getdata == NULL) {
    echo " <script>alert ('Data Tidak Ditemukan ');
    document.location='../../module/console-box-antrian/index'</script>";
} else {
    $nomorrm = $getdata['nomor_rm'];
    if ($nomorrm == NULL) {
        $tipe = "BB";
        echo " <script>alert ('Silahkan Anda Melengkapi Data Diri Pasien Ke Loket Admisi');
        document.location='../../module/console-box-antrian/print/print-umum?tipe=$tipe&nomor=$nomor'</script>";
    } else {
        $tipe = "BL";
        echo " <script>alert ('Antri Di Layanan Poliklinik Anda');
        document.location='../../module/console-box-antrian/print/print-bpjs?tipe=$tipe&nomor=$nomor'</script>";
    }
}

?>