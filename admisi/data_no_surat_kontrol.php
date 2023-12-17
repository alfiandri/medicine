<!DOCTYPE html>

<head>
    <?php
  require 'function.php';
  include('head.php');
  error_reporting(0);
  ?>
</head>
<?php
include 'fungsi.php';
require_once 'vendor/autoload.php';

$tglawal = $_POST['tglawal'];
$tglakhir = $_POST['tglakhir'];
$filter = $_POST['filter'];

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
 curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/RencanaKontrol/ListRencanaKontrol/tglAwal/".$tglawal."/tglAkhir/".$tglakhir."/filter/". $filter . "");
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
 $message = $string->metaData->message;
 $code = $string->metaData->code;
 $dtdecrypt = $string->response;
 if ($code=="201") {
   ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: '<?= $message?>',
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ok'
}).then((result) => {
    if (result.isConfirmed) {
        document.location = "bpjs-rencana-kontrol.php";
    }
})
</script>
<?php
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
$data = json_decode($alihi, true);
$items = $data['list'];
?>

<body id="page-top">
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <?php
        require 'header.php';
        ?>
        <div class="page-body-wrapper">
            <?php require 'sidebar.php';?>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3></h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">V-Claim</li>
                                    <li class="breadcrumb-item">SEP</li>
                                    <li class="breadcrumb-item active">Cari Nomor</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <h4>DATA NOMOR SURAT KONTROL &nbsp;&nbsp; |&nbsp;&nbsp;<b>DBASE BPJS
                                        KESEHATAN</b></h4>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-body">
                                <!-- /.card-header -->
                                <div class="table-responsive">
                                    <table id="basic-1" class="display table">
                                        <thead>
                                            <tr>
                                                <th>NO.</th>
                                                <th>NO. SURAT KONTROL</th>
                                                <th>NAMA PESERTA</th>
                                                <th>TGL. RENCANA KONTROL</th>
                                                <th>POLI TUJUAN</th>
                                                <th>NAMA DOKTER</th>
                                                <th>ACTION</th>
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
                                                <td><?php echo $item['noSuratKontrol'];?></td>
                                                <td><?php echo $item['nama'];?></td>
                                                <td><?php echo $item['tglRencanaKontrol'];?></td>
                                                <td><?php echo $item['namaPoliTujuan'];?></td>
                                                <td><?php echo $item['namaDokter'];?></td>
                                                <td>
                                                    <a
                                                        href="update_rencana_kontrol.php?nosrtktrl=<?php echo $item['noSuratKontrol'];?>">
                                                        <button type="button" class="btn btn-warning btn-xs"><i
                                                                class="fa fa-edit"></i></button>
                                                    </a>
                                                    <a href="delete_rencana_kontrol.php?kode=<?php echo $item['noSuratKontrol'];?>"
                                                        onclick="return confirm('Yakin akan menghapus data?')">
                                                        <button type="button" class="btn btn-danger btn-xs"><i
                                                                class="fa fa-trash"></i></button>
                                                    </a>
                                                    <a
                                                        href="detail_data_no_renc_kontrol.php?nosrtktrl=<?php echo $item['noSuratKontrol'];?>">
                                                        <button type="button" class="btn btn-success btn-xs"><i
                                                                class="fa fa-eye"></i></button>
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
                </div>
            </div>
        </div>
        <?php require 'footer.php';?>
    </div>
    <?= include 'script.php'; ?>
</body>

</html>