<?php
$master = "V-Claim ";
$page = "Monitoring";
require 'head.php';
error_reporting(E_ALL&~E_NOTICE);
require_once 'vendor/autoload.php';
require 'function.php';
include 'fungsi.php';

if (isset($_POST['datakunjungan'])){
if (!empty($_POST['jnsPelayanan1']) && ($_POST['tglpelayanan1'])) {
      $jnslayanan1 = $_POST['jnsPelayanan1'];
      $tglpelayanan1 = $_POST['tglpelayanan1'];
      $info1 = "Jenis Pelayanan: ".$jnslayanan1."&emsp;Tanggal: ".$tglpelayanan1;
   } else {
      $jnslayanan1 = '';
      $tglpelayanan1 = '';
      $info1 = "Jenis Pelayanan: ".$jnslayanan1."&emsp;Tanggal: ".$tglpelayanan1;
}

$ch1 = curl_init();
$headers1 = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
 curl_setopt($ch1, CURLOPT_URL, "".$base_url."/".$service."/Monitoring/Kunjungan/Tanggal/".$tglpelayanan1."/jnsPelayanan/".$jnslayanan1."");
 curl_setopt($ch1, CURLOPT_HTTPHEADER, $headers1);
 curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch1, CURLOPT_TIMEOUT, 3);
 curl_setopt($ch1, CURLOPT_HTTPGET, 1);
 curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
 $string1 = curl_exec($ch1);
 $err1 = curl_error($ch1);
 curl_close($ch1);
 //print_r($string);

 $key1 = $consid . $secretKey . $tStamp;
 $string1 = json_decode($string1);
 $dtdecrypt1 = $string1->response;

function stringDecrypt($key1, $dtdecrypt){
    $encrypt_method1 = 'AES-256-CBC';
    $key_hash1 = hex2bin(hash('sha256', $key1));
    $iv1 = substr(hex2bin(hash('sha256', $key1)), 0, 16);
    $output1 = openssl_decrypt(base64_decode($dtdecrypt), $encrypt_method1, $key_hash1, OPENSSL_RAW_DATA, $iv1);
    return $output1;
}

$aloha1 = stringDecrypt($key1, $dtdecrypt1);
function decompress($aloha1){
    return \LZCompressor\LZString::decompressFromEncodedURIComponent($aloha1);
}

$alihi1 = decompress($aloha1);
//echo $alihi;
$data1 = json_decode($alihi1, true);
$items1 = $data1['sep'];

}
if (isset($_POST['historypelayanan'])){
   if (!empty($_POST['nokartu2']) && ($_POST['tglawal2']) && ($_POST['tglakhir2'])) {
      $nokartu2 = $_POST['nokartu2'];
      $tglawal2 = $_POST['tglawal2'];
      $tglakhir2 = $_POST['tglakhir2'];
      $info2 = "Tanggal Awal: ".$tglawal2."&emsp;Tanggal Akhir: ".$tglakhir2."&emsp;No. Kartu: ".$nokartu2;
   } else {
      $nokart2 = '';
      $tglawal2 = '';
      $tglakhir2 = '';
      $info2 = "Tanggal Awal: ".$tglawal2."&emsp;Tanggal Akhir: ".$tglakhir2."&emsp;No. Kartu: ".$nokartu2;
   }

   include 'fungsi.php';

$ch2 = curl_init();
$headers2 = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
 curl_setopt($ch2, CURLOPT_URL, "".$base_url."/".$service."/monitoring/HistoriPelayanan/NoKartu/".$nokartu2."/tglMulai/".$tglawal2."/tglAkhir/".$tglakhir2."");
 curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers2);
 curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch2, CURLOPT_TIMEOUT, 3);
 curl_setopt($ch2, CURLOPT_HTTPGET, 1);
 curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
 $string2 = curl_exec($ch2);
 $err2 = curl_error($ch2);
 curl_close($ch2);
 //print_r($string);

 $key2 = $consid . $secretKey . $tStamp;
 $string2 = json_decode($string2);
 $dtdecrypt2 = $string2->response;
 
 function stringDecrypt($key2, $dtdecrypt2){
    $encrypt_method2 = 'AES-256-CBC';
    $key_hash2 = hex2bin(hash('sha256', $key2));
    $iv2 = substr(hex2bin(hash('sha256', $key2)), 0, 16);
    $output2 = openssl_decrypt(base64_decode($dtdecrypt2), $encrypt_method2, $key_hash2, OPENSSL_RAW_DATA, $iv2);
    return $output2;
}
$aloha2 = stringDecrypt($key2, $dtdecrypt2);
function decompress($aloha2){
    return \LZCompressor\LZString::decompressFromEncodedURIComponent($aloha2);
}
$alihi2 = decompress($aloha2);
//echo $alihi;
$data2 = json_decode($alihi2, true);
$items2 = $data2['histori'];
}

if(isset($_POST['dataklaim'])){
if (!empty($_POST['jnsPelayanan3']) && ($_POST['tanggal3']) && ($_POST['status3'])) {
      $jnslayanan3 = $_POST['jnsPelayanan3'];
      $tanggal3 = $_POST['tanggal3'];
      $status3 = $_POST['status3'];
      $info3 = "Status Klaim: " . $status3 . "&emsp;Jenis Layanan: " . $jnslayanan3 . "&emsp;Tanggal Pulang: " . $tanggal3;
} else {
      $jnslayanan3 = '';
      $tanggal3 = '';
      $status3 = '';
      $info3 = "Status Klaim: " . $status3 . "&emsp;Jenis Layanan: " . $jnslayanan3 . "&emsp;Tanggal Pulang: " . $tanggal3;
}
include 'fungsi.php';

   $ch3 = curl_init();
   $headers3 = array(
      'X-cons-id: ' . $consid . '',
      'X-timestamp: ' . $tStamp . '',
      'X-signature: ' . $encodedSignature . '',
      'user_key: ' . $userkey . '',
      'Content-Type:application/json'
   );
   curl_setopt($ch3, CURLOPT_URL, "".$base_url."/".$service."/Monitoring/Klaim/Tanggal/" . $tanggal3 . "/JnsPelayanan/" . $jnslayanan3 . "/Status/" . $status3 . "");
   curl_setopt($ch3, CURLOPT_HTTPHEADER, $headers3);
   curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch3, CURLOPT_TIMEOUT, 3);
   curl_setopt($ch3, CURLOPT_HTTPGET, 1);
   curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);
   $string3 = curl_exec($ch3);
   $err3 = curl_error($ch3);
   curl_close($ch3);
   //print_r($string);

   $key3 = $consid . $secretKey . $tStamp;
   $string3 = json_decode($string3);
   $dtdecrypt3 = $string3->response;

   function stringDecrypt($key3, $dtdecrypt3){
      $encrypt_method3 = 'AES-256-CBC';
      $key_hash3 = hex2bin(hash('sha256', $key3));
      $iv3 = substr(hex2bin(hash('sha256', $key3)), 0, 16);
      $output3 = openssl_decrypt(base64_decode($dtdecrypt3), $encrypt_method3, $key_hash3, OPENSSL_RAW_DATA, $iv3);
      return $output3;
   }

   $aloha3 = stringDecrypt($key3, $dtdecrypt3);
   function decompress($aloha3)
   {
      return \LZCompressor\LZString::decompressFromEncodedURIComponent($aloha3);
   }

   $alihi3 = decompress($aloha3);
   //echo $alihi;
   $data3 = json_decode($alihi3, true);
   $items3 = $data3['klaim'];
}

if(isset($_POST['jasa'])){
   if (!empty($_POST['tglawal4']) && ($_POST['tglakhir4']) && ($_POST['jnsPelayanan4'])) {
      $jnslayanan4 = $_POST['jnsPelayanan4'];
      $tglawal4 = $_POST['tglawal4'];
      $tglakhi4 = $_POST['tglakhir4'];
      $info4 = "Tanggal Awal: ".$tglawal4."&emsp;Tanggal Akhir: ".$tglakhir4."&emsp;Jenis Layanan: ".$jnslayanan4;
} else {
      $jnslayann4 = '';
      $tglawal4 = '';
      $tglakhir4 = '';
      $info4 = "Tanggal Awal: ".$tglawal4."&emsp;Tanggal Akhir: ".$tglakhir4."&emsp;Jenis Layanan: ".$jnslayanan4;
   }

   include 'fungsi.php';

$ch4 = curl_init();
$headers4 = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
 curl_setopt($ch4, CURLOPT_URL, "".$base_url."/".$service."/monitoring/JasaRaharja/JnsPelayanan/".$jnslayanan4."/tglMulai/".$tglawal4."/tglAkhir/".$tglakhir4."");
 curl_setopt($ch4, CURLOPT_HTTPHEADER, $headers4);
 curl_setopt($ch4, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch4, CURLOPT_TIMEOUT, 3);
 curl_setopt($ch4, CURLOPT_HTTPGET, 1);
 curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER, false);
 $string4 = curl_exec($ch4);
 $err4 = curl_error($ch4);
 curl_close($ch4);
 //print_r($string);

 $key4 = $consid . $secretKey . $tStamp;
 $string4 = json_decode($string4);
 $dtdecrypt4 = $string4->response;

function stringDecrypt($key4, $dtdecrypt4){
    $encrypt_method4 = 'AES-256-CBC';
    $key_hash4 = hex2bin(hash('sha256', $key4));
    $iv4 = substr(hex2bin(hash('sha256', $key4)), 0, 16);
    $output4 = openssl_decrypt(base64_decode($dtdecrypt4), $encrypt_method4, $key_hash4, OPENSSL_RAW_DATA, $iv4);
    return $output4;
}

$aloha4 = stringDecrypt($key4, $dtdecrypt4);
function decompress($aloha4){
    return \LZCompressor\LZString::decompressFromEncodedURIComponent($aloha4);
}

$alihi4 = decompress($aloha4);
//echo $alihi;
$data4 = json_decode($alihi4, true);
$items = $data4['jaminan'];

}

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
                    <div class="col-md-12 project-list">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-pills" id="pills-icontab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab"
                                                data-bs-toggle="pill" href="#pills-iconhome" role="tab"
                                                aria-controls="pills-iconhome" aria-selected="true"><i
                                                    class="icofont icofont-ui-home"></i>Data Kunjungan</a></li>

                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-riwayat-tab"
                                                data-bs-toggle="pill" href="#pills-riwayat" role="tab"
                                                aria-controls="pills-riwayat" aria-selected="false"><i
                                                    class="icofont icofont-man-in-glasses"></i>Riwayat Pelayanan
                                                Peserta</a></li>

                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-klaim-tab"
                                                data-bs-toggle="pill" href="#pills-klaim" role="tab"
                                                aria-controls="pills-klaim" aria-selected="false"><i
                                                    class="icofont icofont-man-in-glasses"></i>Data Klaim</a></li>

                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-jasa-tab"
                                                data-bs-toggle="pill" href="#pills-jasa" role="tab"
                                                aria-controls="pills-jasa" aria-selected="false"><i
                                                    class="icofont icofont-man-in-glasses"></i>Data Klaim Jasa
                                                Raharja</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="pills-icontabContent">
                                    <div class="tab-pane fade show active" id="pills-iconhome" role="tabpanel"
                                        aria-labelledby="pills-iconhome-tab">
                                        <div class="table-responsive">
                                            <form action="" method="post">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-8">
                                                        <select name="jnsPelayanan1" class="form-select form-select-sm"
                                                            require>
                                                            <option selected="true" disabled="disabled">-- Pilih Jenis
                                                                Pelayanan --</option>
                                                            <option value="1">Rawat Inap</option>
                                                            <option value="2">Rawat Jalan</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="input-group">
                                                            <input type="date" class="form-control form-control-sm"
                                                                placeholder="Masukan Tahun" name="tglpelayanan1">
                                                            <button class="btn btn-danger btn-sm" type="submit"
                                                                name="datakunjungan">Cari</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr>
                                            <table class="display table-sm" id="basic-1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>No.Kartu</th>
                                                        <th>No.SEP</th>
                                                        <th>No.Rujukan</th>
                                                        <th>Jenis Layanan</th>
                                                        <th>Diagnosa</th>
                                                        <th>Tgl.SEP</th>
                                                        <th>Tgl.Pulang SEP</th>
                                                        <th>Poli</th>
                                                        <th>Kelas Rawat</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                      $no1 = 0;
                                                      if (is_array($items1)){
                                                      foreach($items1 as $item1){
                                                         $no1++;
                                                         $jenis1 = $item1['jnsPelayanan1'];
                                                      ?>
                                                    <tr>
                                                        <td><?php echo $no1;?></td>
                                                        <td><?php echo $item1['nama'];?></td>
                                                        <td><?php echo $item1['noKartu'];?></td>
                                                        <td><?php echo $item1['noSep'];?></td>
                                                        <td><?php echo $item1['noRujukan'];?></td>
                                                        <td><?php
                                                         if ($jenis1=="1") {
                                                            $jenis1 = "Rawat Inap";
                                                         } elseif ($jenis1=="2") {
                                                            $jenis1 = "Rawat Jalan";
                                                         } else {
                                                            $jenis1 = "-";
                                                         }
                                                         echo $jenis1;?></td>
                                                        <td><?php echo $item1['diagnosa'];?></td>
                                                        <td><?php echo $item1['tglSep'];?></td>
                                                        <td><?php echo $item1['tglPlgSep'];?></td>
                                                        <td><?php echo $item1['poli'];?></td>
                                                        <td><?php echo $item1['kelasRawat'];?></td>
                                                    </tr>
                                                    <?php }}  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-riwayat" role="tabpanel"
                                        aria-labelledby="pills-riwayat-tab">
                                        <div class="table-responsive">
                                            <form action="" method="post">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Masukkan Tanggal Awal"
                                                            onfocus="(this.type='date')"
                                                            onblur="if(this.value==''){this.type='text'}"
                                                            name="tglawal2" required>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="text" class="form-control form-control-sm"
                                                            placeholder="Masukkan Tanggal Akhir"
                                                            onfocus="(this.type='date')"
                                                            onblur="if(this.value==''){this.type='text'}"
                                                            name="tglakhir2" required>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="No.Kartu Peserta" name="nokartu2">
                                                            <button class="btn btn-danger btn-sm" type="submit"
                                                                name="historypelayanan">Cari</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr>
                                            <table class="display table-sm" id="basic-3">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>No.Kartu</th>
                                                        <th>No.SEP</th>
                                                        <th>No.Rujukan</th>
                                                        <th>Jenis</th>
                                                        <th>Diagnosa</th>
                                                        <th>Tgl.SEP</th>
                                                        <th>Tgl.Pulang SEP</th>
                                                        <th>Poli</th>
                                                        <th>Kelas Rawat</th>
                                                        <th>PPK Pelayanan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                  $no2 = 0;
                                                  if (is_array($items2)){
                                                  foreach($items2 as $item2){
                                                      $no2++;
                                                      $jenis2 = $item2['jnsPelayanan'];
                                                  ?>
                                                    <tr>
                                                        <td><?php echo $no2;?></td>
                                                        <td><?php echo $item2['namaPeserta'];?></td>
                                                        <td><?php echo $item2['noKartu'];?></td>
                                                        <td><?php echo $item2['noSep'];?></td>
                                                        <td><?php echo $item2['noRujukan'];?></td>
                                                        <td><?php
                                                         if ($jenis2=="1") {
                                                            $jenis2 = "Rawat Inap";
                                                         } elseif ($jenis2=="2") {
                                                            $jenis2 = "Rawat Jalan";
                                                         } else {
                                                            $jenis2 = "Kosong";
                                                         }
                                                         echo $jenis2;?></td>
                                                        <td><?php echo $item2['diagnosa'];?></td>
                                                        <td><?php echo $item2['tglSep'];?></td>
                                                        <td><?php echo $item2['tglPlgSep'];?></td>
                                                        <td><?php echo $item2['poli'];?></td>
                                                        <td><?php echo $item2['kelasRawat'];?></td>
                                                        <td><?php echo $item2['ppkPelayanan'];?></td>
                                                    </tr>
                                                    <?php }}  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-klaim" role="tabpanel"
                                        aria-labelledby="pills-klaim-tab">
                                        <div class="table-responsive">
                                            <form action="" method="post">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-4">
                                                        <select name="status3" class="form-select form-select-sm" id="">
                                                            <option selected="true" disabled="disabled">-- Pilih Status
                                                                Klaim --</option>
                                                            <option value="1">Proses Verifikasi</option>
                                                            <option value="2">Pending Verifikasi</option>
                                                            <option value="3">Klaim</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <select name="jnsPelayanan3" class="form-select form-select-sm"
                                                            id="">
                                                            <option selected="true" disabled="disabled">-- Pilih Jenis
                                                                Pelayanan --</option>
                                                            <option value="1">Rawat Inap</option>
                                                            <option value="2">Rawat Jalan</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Tanggal Pulang"
                                                                onfocus="(this.type='date')"
                                                                onblur="if(this.value==''){this.type='text'}"
                                                                name="tanggal3" required>
                                                            <button class="btn btn-danger btn-sm" type="submit"
                                                                name="dataklaim">Cari</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr>
                                            <table class="display table-sm" id="basic-4">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Status</th>
                                                        <th>No.SEP</th>
                                                        <th>No.Kartu</th>
                                                        <th>No.MR</th>
                                                        <th>Peserta</th>
                                                        <th>Poli</th>
                                                        <th>Tgl.SEP</th>
                                                        <th>Tgl.Pulang SEP</th>
                                                        <th>No.PPK</th>
                                                        <th>Kelas Rawat</th>
                                                        <th>KD. INACBG</th>
                                                        <th>B.Pengajuan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                      $no3 = 0;
                                                      if (is_array($items3)) {
                                                      foreach ($items3 as $item3) {
                                                         $no3++;
                                                         $inacbg3 = $item3['Inacbg'];
                                                         $peserta3 = $item3['peserta'];
                                                         $biaya3 = $item3['biaya'];
                                                      ?>
                                                    <tr>
                                                        <td><?php echo $no3; ?></td>
                                                        <td><?php echo $item3['status']; ?></td>
                                                        <td><?php echo $item3['noSEP']; ?></td>
                                                        <td><?php echo $peserta3['noKartu']; ?></td>
                                                        <td><?php echo $peserta3['noMR']; ?></td>
                                                        <td><?php echo $peserta3['nama']; ?></td>
                                                        <td><?php echo $item3['poli']; ?></td>
                                                        <td><?php echo $item3['tglSep']; ?></td>
                                                        <td><?php echo $item3['tglPulang']; ?></td>
                                                        <td><?php echo $item3['noFPK']; ?></td>
                                                        <td><?php echo $item3['kelasRawat']; ?></td>
                                                        <td><?php echo $inacbg3['kode']; ?></td>
                                                        <td><?php echo $inacbg3['nama']; ?></td>
                                                        <td><?php echo $biaya3['byPengajuan']; ?></td>
                                                        <td><?php echo $biaya3['bySetujui']; ?></td>
                                                        <td><?php echo $biaya3['byTarifGruper']; ?></td>
                                                        <td><?php echo $biaya3['byTarifRS']; ?></td>
                                                        <td><?php echo $biaya3['byTopup']; ?></td>
                                                    </tr>
                                                    <?php }
                                                      }  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-jasa" role="tabpanel"
                                        aria-labelledby="pills-jasa-tab">
                                        <div class="table-responsive">
                                            <form action="" method="post">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-4">
                                                        <input type="date" class="form-control form-control-sm"
                                                            placeholder="Masukkan Tanggal Awal"
                                                            onfocus="(this.type='date')"
                                                            onblur="if(this.value==''){this.type='text'}"
                                                            name="tglawal4" required>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="date" class="form-control form-control-sm"
                                                            placeholder="Masukkan Tanggal Akhir"
                                                            onfocus="(this.type='date')"
                                                            onblur="if(this.value==''){this.type='text'}"
                                                            name="tglakhir4" required>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="input-group">
                                                            <select name="jnsPelayanan4"
                                                                class="form-select form-select-sm">
                                                                <option selected="true" disabled="disabled" require>--
                                                                    Pilih
                                                                    Jenis Pelayanan --</option>
                                                                <option value="1">Rawat Inap</option>
                                                                <option value="2">Rawat Jalan</option>
                                                            </select>
                                                            <button class="btn btn-danger btn-sm" type="submit"
                                                                name="jasa">Cari</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr>
                                            <table class="display table-sm" id="basic-5">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>No.SEP</th>
                                                        <th>Tgl.SEP</th>
                                                        <th>Tgl.SEP Pulang</th>
                                                        <th>Nama</th>
                                                        <th>No.Kartu</th>
                                                        <th>No.MR</th>
                                                        <th>Jenis</th>
                                                        <th>Poli</th>
                                                        <th>Diagnosa</th>
                                                        <th>Tgl.Kejadian</th>
                                                        <th>No.Register</th>
                                                        <th>Ket.Status Jamin</th>
                                                        <th>Ket.Status Kirim</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                         $no4 = 0;
                                                         if (is_array($items4)){
                                                         foreach($items4 as $item4){
                                                            $no4++;
                                                            $sep4 = $item4['sep'];
                                                            $jenis4 = $sep4['jnsPelayanan'];
                                                            $jasaraharja4 = $item4['jasaRaharja'];
                                                            $peserta4 = $sep4['peserta'];
                                                         ?>
                                                    <tr>
                                                        <td><?php echo $no4;?></td>
                                                        <td><?php echo $sep4['noSEP'];?></td>
                                                        <td><?php echo $sep4['tglSEP'];?></td>
                                                        <td><?php echo $sep4['tglPlgSEP'];?></td>
                                                        <td><?php echo $peserta4['nama'];?></td>
                                                        <td><?php echo $peserta4['noKartu'];?></td>
                                                        <td><?php echo $peserta4['noMR'];?></td>
                                                        <td><?php echo $peserta4['nama'];?></td>
                                                        <td><?php
                                                            if ($jenis4=="1") {
                                                               $jenis4 = "Rawat Inap";
                                                            } elseif ($jenis4=="2") {
                                                               $jenis4 = "Rawat Jalan";
                                                            } else {
                                                               $jenis4 = "-";
                                                            }
                                                            echo $jenis4;?></td>
                                                        <td><?php echo $item4['poli'];?></td>
                                                        <td><?php echo $item4['diagnosa'];?></td>
                                                        <td><?php echo $jasaraharja4['tglKejadian'];?></td>
                                                        <td><?php echo $jasaraharja4['noRegister'];?></td>
                                                        <td><?php echo $jasaraharja4['ketStatusDijamin'];?></td>
                                                        <td><?php echo $jasaraharja4['ketStatusDikirim'];?></td>
                                                        <td><?php echo $jasaraharja4['biayaDijamin'];?></td>
                                                        <td><?php echo $jasaraharja4['plafon'];?></td>
                                                        <td><?php echo $jasaraharja4['jmlDibayar'];?></td>
                                                        <td><?php echo $jasaraharja4['resultsJasaRaharja'];?></td>
                                                    </tr>
                                                    <?php }}  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
    <!-- Modal -->
    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tempat & Tanggal Lahir</label>
                        <div class="row">
                            <div class="col-7">
                                <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="col-5">
                                <input type="date" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                        <select name="" class="form-select" id="">
                            <option value="">Laki-Laki</option>
                            <option value="">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No.Handphone</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Booking Via</label>
                        <select name="" class="form-select" id="">
                            <option value="">Mobile JKN</option>
                            <option value="">On-Site</option>
                            <option value="">Online Channel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Layanan</label>
                        <select name="" class="form-select" id="">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <?= include 'script.php'; ?>
</body>

</html>