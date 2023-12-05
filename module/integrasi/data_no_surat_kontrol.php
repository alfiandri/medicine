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
 curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/RencanaKontrol/ListRencanaKontrol/tglAwal/".$tglawal."/tglAkhir/".$tglakhir."/filter/". $filter . "");
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
   echo "<script>alert('Kode: $code - $message'); window.location = 'cari_rencana_kontrol.php';</script>";
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
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/chart/chartist/chartist.js"></script>
    <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="../assets/js/chart/knob/knob.min.js"></script>
    <script src="../assets/js/chart/knob/knob-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="../assets/js/dashboard/default.js"></script>
    <script src="../assets/js/notify/index.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!-- <script src="../assets/js/theme-customizer/customizer.js"></script> -->
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>