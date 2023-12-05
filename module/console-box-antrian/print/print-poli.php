<?php

use function PHPSTORM_META\map;

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

require '../../../db/connect.php';
$tipe = $_GET['tipe'];
$nomor = $_GET['nomor'];
$check = mysqli_query($koneksi, "SELECT * FROM antrian_poli");
$dataantrian = mysqli_fetch_array($check);
$kodebooking = $dataantrian['kodebooking'];
$tipe = $dataantrian['tipe'];
$antrian = $dataantrian['nomor'];
$loket = $dataantrian['loket'];
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