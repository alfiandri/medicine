<?php
$page = 'Print';
include('../head.php');
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
$currentdate = date('Y-m-d');
$tipe = 'U';
$check = mysqli_query($koneksi, "SELECT * FROM antrian_loket where date(create_at) = '$currentdate' AND tipe = '$tipe'");
$dataantrian = mysqli_num_rows($check);
$antrian = $dataantrian + 1;

$kodebooking = generateKodeBooking();

$insert = mysqli_query($koneksi, "INSERT INTO antrian_loket(kodebooking, nomor, tipe) VALUES('$kodebooking','$antrian','$tipe') ");
?>

<body>
    <div class="container" style="background-color: skyblue;">
        <h5 style="margin-top:10px;">NOMOR ANTRIAN</h5>
        <div class="garis"></div>
        <p>NO BOOKING : <?= $kodebooking ?></p>
        <p style="font-size:50px;"><b><?= $tipe ?>-<?= $antrian ?></b></p>
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