<?php
$page = 'Print';
include('head.php');
date_default_timezone_set('Asia/Jakarta');
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
require __DIR__ . '/../../db/connect.php';
require __DIR__ . '/../../controller/base/integrasi.php';

if (isset($_POST['carijkn'])) {
    $nomor = $_POST['nomor'];
    $check = mysqli_query($koneksi, "SELECT * FROM antrian_poli WHERE kodebooking='$nomor'");
    $datacheck = mysqli_fetch_array($check);

    $data = @$datacheck['kodebooking'];
    if ($data == NULL) {
        echo " <script>alert ('Kode Booking Anda Tidak Tersedia');
        document.location='../../module/console-box-antrian/index'</script>";
    } else {
        $check = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nik='$datacheck[nik]' or nomor_kartu = '$datacheck[nokartu]'");
        $pasien = mysqli_fetch_array($check);

        if ($pasien == null) {
            echo " <script>alert ('Pasien tidak ditemukan');
        document.location='../../module/console-box-antrian/index'</script>";
        }
        
        // jika pasien baru
        if ($pasien['status_pasien'] == 1) {
            $update = mysqli_query($koneksi, "UPDATE pasien SET status_pasien= 0 WHERE nik='$pasien[nik]'");

            echo " <script>
            document.location='../../module/console-box-antrian/print/print-mjkn?nomor=$nomor'</script>";
        }

        $status = 1;
        $task = 3;
        $waktu = date('Y-m-d H:i:s');
        $update = mysqli_query($koneksi, "UPDATE antrian_poli SET status='$status' WHERE kodebooking='$nomor'");
        $insert = mysqli_query($koneksi, "INSERT INTO admisi_taskid (kodebooking, task_id, waktu)VALUES('$nomor','$task','$waktu')");

        // update task id ws bpjs
        $data = [
            "kodebooking" => $nomor,
            "taskid" => 3,
            "waktu" => time() * 1000,
        ];
        $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/updatewaktu";
        post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

        echo " <script>
        document.location='../../module/console-box-antrian/print/print-poli?nomor=$nomor'</script>";
    }
}
?>