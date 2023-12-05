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
$kodebooking = $_POST['kode'];
$check = mysqli_query($koneksi, "SELECT * FROM antrian_farmasi");
$dataantrian = mysqli_num_rows($check);
$antrian = $dataantrian + 1;
$check = mysqli_query($koneksi, "SELECT * FROM permintaan_farmasi WHERE kodebooking='$kodebooking'");
$datacheck = mysqli_fetch_array($check);
if ($datacheck == NULL) {
    echo " <script>alert ('Kode Booking Anda Tidak Tersedia');
    document.location='../../module/console-box-antrian/index'</script>";
} else {
    $checkloket = mysqli_query($koneksi, "SELECT * FROM loket_farmasi WHERE status=1");
    $dataloket = mysqli_fetch_array($checkloket);
    $loket = $dataloket['loket'];
    $kode = $dataloket['kode_loket'];
    $checkvisit = mysqli_query($koneksi, "SELECT * FROM pasien_visit WHERE kodebooking='$kodebooking'");
    $datavisit = mysqli_fetch_array($checkvisit);
    $nomorrm = $datavisit['nomor_rm'];
    if ($nomorrm == NULL) {
        $nomorrm = 0;
    } else {
        $nomorrm = $nomorrm;
    }
    $insert = mysqli_query($koneksi, "INSERT INTO antrian_farmasi(kodebooking, loket, nomor, tipe, nokartu)VALUES('$kodebooking','$loket','$antrian','$kode','$nomorrm')");
}

?>

<body>
    <div class="container" style="background-color: skyblue;">
        <h5 style="margin-top:10px;">NOMOR ANTRIAN</h5>
        <div class="garis"></div>
        <p>NO BOOKING : <?= date('dmY') . rand(000, 999) ?></p>
        <p style="font-size:50px;"><b><?= $kode ?>-<?= $antrian ?></b></p>
        <!-- <h6>POLI UMUM</h6> -->
        <p><b><?php echo $tanggal . " " . $waktu; ?></b></p>
        <p style="margin-top: 20px;">.</p>
    </div>
</body>

<script>
    window.print();
    window.addEventListener('afterprint', function() {
        window.location.href = "index";
    })
</script>