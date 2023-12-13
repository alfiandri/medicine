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
if (isset($_POST['carijkn'])) {
    $nomor = $_POST['nomor'];
    $check = mysqli_query($koneksi, "SELECT * FROM antrian_poli WHERE kodebooking='$nomor'");
    $datacheck = mysqli_fetch_array($check);
    $data = @$datacheck['kodebooking'];
    if ($data == NULL) {
        echo " <script>alert ('Kode Booking Anda Tidak Tersedia');
        document.location='../../module/console-box-antrian/index'</script>";
    } else {
        $status = 1;
        $task = 3;
        $waktu = date('Y-m-d H:i:s');
        $update = mysqli_query($koneksi, "UPDATE antrian_poli SET status='$status' WHERE kodebooking='$nomor'");
        $updatejkn = mysqli_query($koneksi, "UPDATE admisi_jkn SET task_id='$task', waktu='$waktu' WHERE kodebooking='$nomor'");
        $insert = mysqli_query($koneksi, "INSERT INTO admisi_taskid (kodebooking, task_id, waktu)VALUES('$nomor','$task','$waktu')");
        echo " <script>
        document.location='../../module/console-box-antrian/print/print-poli?tipe=JKN&nomor=$nomor'</script>";
    }
}
?>