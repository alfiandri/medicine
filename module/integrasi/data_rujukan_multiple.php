<!DOCTYPE html>

<head>
    <?php
  require '../function.php';
  require 'head.php';
  ?>
    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip({
            placement: 'top'
        });
    });
    </script>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php
require 'menu.php';
?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php
require 'navbar.php';
include 'fungsi.php';
require_once 'vendor/autoload.php';
$nokartu = $_POST['nokartu'];

if (isset($_POST['pcare'])) {
$ket = "pcare";

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
  );
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Rujukan/List/Peserta/".$nokartu."");
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
  $code = $string->metaData->code;
  $message = $string->metaData->message;
  $dtdecrypt = $string->response;
  if ($code!="200") {
      echo "<script>alert('$code - $message') window.location='index.php?page=cari_rujukan';</script>";
  }


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
$uhuy = json_decode($alihi, true);
$items = $uhuy['rujukan'];
}

if (isset($_POST['rs'])) {
$ket = "rs";

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
  );
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Rujukan/RS/List/Peserta/".$nokartu."");
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
  $code = $string->metaData->code;
  $message = $string->metaData->message;
  $dtdecrypt = $string->response;
  if ($code!="200") {
      echo "<script>alert('$code - $message') window.location='index.php?page=cari_rujukan';</script>";
  }


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
$uhuy = json_decode($alihi, true);
$items = $uhuy['rujukan'];
}


?>
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <h4>DATA RUJUKAN MULTIPLE REC. NO. KARTU &nbsp;&nbsp; | &nbsp;&nbsp;
                                    <b><?php echo $nokartu;?></b></h4>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width='10'>NO.</th>
                                                    <th>NO. KUNJUNGAN</th>
                                                    <th>POLI RUJUKAN</th>
                                                    <th>PROV PERUJUK</th>
                                                    <th>TGL. KUNJUNGAN</th>
                                                    <th>DIAGNOSA</th>
                                                    <th>KELUHAN</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                     $no = 0;
                     if (is_array($items)){
                     foreach($items as $item){
                        $no++;
                        $diag = $item['diagnosa'];
                        $polrjk = $item['poliRujukan'];
                        $prvrjk = $item['provPerujuk'];
                     ?>
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $item['noKunjungan'];?></td>
                                                    <td><?php echo $polrjk['nama'];?></td>
                                                    <td><?php echo $prvrjk['nama'];?></td>
                                                    <td><?php echo $item['tglKunjungan'];?></td>
                                                    <td><?php echo $diag['kode'];?></td>
                                                    <td><?php echo $item['keluhan'];?></td>
                                                    <td>
                                                        <a
                                                            href="detail_rujuk_norujuk_multi.php?kode=<?php echo $item['noKunjungan'];?>&ket=<?php echo $ket;?>">
                                                            <button type="button" class="btn btn-success btn-xs"><i
                                                                    class="fa fa-eye" data-toggle="tooltip"
                                                                    data-original-title="Lihat Detail SEP"></i></button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php }}  ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
                <?php require '../template/footer.php';?>
            </div>
        </div>
        <div>
            <?php 
include 'script.php';
?>
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
</body>

</html>