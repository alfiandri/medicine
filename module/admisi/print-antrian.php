<?php
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
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM antrian_loket WHERE id='$id'");
$datacheck = mysqli_fetch_array($data);
$kode = $datacheck['loket'];
$antrian = $datacheck['nomor'];
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
      window.location.href = "loket-admisi-call?id=1";
   })
</script>