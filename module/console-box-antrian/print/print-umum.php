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
$check = mysqli_query($koneksi, "SELECT * FROM antrian_loket where date(create_at) = '$currentdate'");
$dataantrian = mysqli_num_rows($check);
$antrian = $dataantrian + 1;

$kodebooking = generateKodeBooking();

$tipe = 'U';
$checkloket = mysqli_query($koneksi, "SELECT * FROM loket_admisi WHERE status=1");
$dataloket = mysqli_fetch_array($checkloket);
$loket = $dataloket['loket'];
$kode = $dataloket['kode_loket'];
$insert = mysqli_query($koneksi, "INSERT INTO antrian_loket(kodebooking, loket, nomor, tipe)VALUES('$kodebooking','$loket','$antrian','$tipe') ");

?>

<body>
    <div class="container" style="background-color: skyblue;">
        <h5 style="margin-top:10px;">NOMOR ANTRIAN</h5>
        <div class="garis"></div>
        <p>NO BOOKING : <?= $kodebooking ?></p>
        <p style="font-size:50px;"><b><?= $tipe ?>-<?= $antrian ?></b></p>
        <h4><?= $loket ?></h4>
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