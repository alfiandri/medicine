<?php

use function PHPSTORM_META\map;

$page = 'Print';
include('../head.php');
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

require_once __DIR__ . '/../../../db/connect.php';
require_once __DIR__ . '/../view.php';
$tipe = $_GET['tipe'];
$nomor = @$_GET['nomor'];
$kodebooking = @$_GET['kodebooking'];

if ($tipe == "baru") {
    $date = date('Y-m-d');
    $kodebooking = generateKodeBooking();
    $tipe = 'B';
    $check = mysqli_query($koneksi, "SELECT * FROM antrian_loket WHERE tipe = 'B' AND date(create_at) = '$date' ORDER BY nomor DESC");
    $dataantrian = mysqli_num_rows($check);
    $antrian = $dataantrian + 1;

    $insert = mysqli_query($koneksi, "INSERT INTO antrian_loket(kodebooking, nomor, tipe, nokartu)VALUES('$kodebooking','$antrian','$tipe','$nomor') ");
    $nomor = $antrian;

    $task = "1";

    mysqli_query($koneksi, "INSERT INTO admisi_taskid (kodebooking, task_id)VALUES('$kodebooking','1')");
}
?>

<body>
    <div class="container" style="background-color: skyblue;">
        <h5 style="margin-top:10px;">NOMOR ANTRIAN</h5>
        <div class="garis"></div>
        <p>NO BOOKING : <?= $kodebooking ?></p>
        <p style="font-size:50px;"><b><?= $tipe ?>-<?= $nomor ?></b></p>
        <p><b><?php echo $tanggal . " " . $waktu; ?></b></p>
        <p style="margin-top: 20px;">.</p>
    </div>
</body>

<script>
    window.print();
    window.addEventListener('afterprint', function() {
        window.location.href = "../index";
    })
</script>