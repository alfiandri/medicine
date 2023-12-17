<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$master = "V-Claim";
$page = "Dokter Rencana Kontrol";
require 'head.php';
error_reporting(0);

include 'fungsi.php';
require_once 'vendor/autoload.php';
if (!empty($_POST['jnsKontrol']) && ($_POST['kodepoli']) && ($_POST['tglkontrol'])) {
      $jnsKontrol = $_POST['jnsKontrol'];
      $kodepoli = $_POST['kodepoli'];
      $tglkontrol = $_POST['tglkontrol'];
      $info = "Jenis Kontrol: ".$jnsKontrol."&emsp;Poli: ".$kodepoli."&emsp;Tanggal: ".$tglkontrol;
    } else {
      $jnsKontrol = '';
      $kodepoli = '';
      $tglkontrol = '';
      $info = "Jenis Kontrol: ".$jnsKontrol."&emsp;Poli: ".$kodepoli."&emsp;Tanggal: ".$tglkontrol;
    }

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
 curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/RencanaKontrol/JadwalPraktekDokter/JnsKontrol/".$jnsKontrol."/KdPoli/".$kodepoli."/TglRencanaKontrol/".$tglkontrol."");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_TIMEOUT, 3);
 curl_setopt($ch, CURLOPT_HTTPGET, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 $string = curl_exec($ch);
 $err = curl_error($ch);
 curl_close($ch);
 //print_r($string);

 $key = $consid . $secretKey . $tStamp;
 $string = json_decode($string);
 $dtdecrypt = $string->response;

function stringDecrypt($key, $dtdecrypt){
    $encrypt_method = 'AES-256-CBC';
    $key_hash = hex2bin(hash('sha256', $key));
    $iv = substr(hex2bin(hash('sha256', $key)), 0, 16);
    $output = openssl_decrypt(base64_decode($dtdecrypt), $encrypt_method, $key_hash, OPENSSL_RAW_DATA, $iv);
    return $output;
}

$aloha = stringDecrypt($key, $dtdecrypt);
function decompress($aloha){
    return \LZCompressor\LZString::decompressFromEncodedURIComponent($aloha);
}

$alihi = decompress($aloha);
//echo $alihi;
$data = json_decode($alihi, true);
$items = $data['list'];

?>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php
      require 'header.php';
      ?>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php
         require 'sidebar.php';
         ?>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3><?= $page ?></h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><?= $master ?></li>
                                    <li class="breadcrumb-item active"><?= $page ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="mb-1 row">
                                        <div class="col-sm-4">
                                            <select name="jnsKontrol" class="form-select form-select-sm" require>
                                                <option selected="true" disabled="disabled">-- Pilih Jenis Kontrol --
                                                </option>
                                                <option value="1">SPRI</option>
                                                <option value="2">Rencana Kontrol</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <select name="kodepoli" class="form-select form-select-sm" require>
                                                <option selected="true" disabled="disabled">-- Pilih Poli --</option>
                                                <option value="MAT">Mata</option>
                                                <option value="135">Vitreo - Retina</option>
                                                <option value="INT">Penyakit Dalam</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <input type="date" class="form-control form-control-sm"
                                                    placeholder="Masukan Tahun" name="tglkontrol" require>
                                                <button class="btn btn-danger btn-sm">Cari</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <?php
                                 if (isset($_POST['submit'])) {
                                    echo $info;
                                 }
                              ?>
                                <hr>
                                <div class="table-responsive">
                                    <table class="display table-sm" id="basic-1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Dokter</th>
                                                <th>Nama Dokter</th>
                                                <th>Jadwal Praktek</th>
                                                <th>Kapasitas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 0;
                                                if (is_array($items)){
                                                foreach($items as $item){
                                                   $no++;
                                                ?>
                                            <tr>
                                                <td><?php echo $no;?></td>
                                                <td><?php echo $item['kodeDokter'];?></td>
                                                <td><?php echo $item['namaDokter'];?></td>
                                                <td><?php echo $item['jadwalPraktek'];?></td>
                                                <td><?php echo $item['kapasitas'];?></td>
                                            </tr>
                                            <?php }}  ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- Page Sidebar Ends-->

            <!-- footer start-->
            <?php
         require 'footer.php';
         ?>
        </div>
    </div>
    <?= include 'script.php'; ?>
</body>

</html>