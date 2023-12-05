<?php
$master = "V-Claim ";
$page = "Referensi";
require 'head.php';
require 'function.php';
error_reporting(E_ALL&~E_NOTICE);
require_once 'vendor/autoload.php';
if (isset($_POST['faskes'])){
   if (!empty($_POST['cari'])) {
      $cari = $_POST['cari'];
      $jnslayanan = $_POST['jnsPelayanan'];
   } else {
      $cari = '0201R051';
      $jnslayanan = '2';
   }
   include 'fungsi.php';


$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/referensi/faskes/".$cari."/".$jnslayanan."");
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
$items = $data['faskes'];
}

if (isset($_POST['poli'])){
   if (!empty($_POST['cari2'])) {
   $cari2 = $_POST['cari2'];
   } else {
   $cari2 = '';
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
curl_setopt($ch2, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/referensi/poli/".$cari2."");
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
$data2 = json_decode($alihi2, true);
$items2 = $data2['poli'];
}

if (isset($_POST['dpjp'])){
   if (!empty($_POST['kdspesialis3']) && ($_POST['jnsPelayanan3']) && ($_POST['tglPelayanan3'])) {
      $kdspesialis3 = $_POST['kdspesialis3'];
      $jnslayanan3 = $_POST['jnsPelayanan3'];
      $tglpelayanan3 = $_POST['tglPelayanan3'];
      $info3 = "Jenis Pelayanan: ".$jnslayanan3."&emsp;Spesialis: ".$kdspesialis3."&emsp;Tanggal: ".$tglpelayanan3;
   } else {
      $kdspesialis3 = '';
      $jnslayanan3 = '';
      $tglpelayanan3 = '';
      $info3 = "Jenis Pelayanan: ".$jnslayanan3."&emsp;Spesialis: ".$kdspesialis3."&emsp;Tanggal: ".$tglpelayanan3;
   }
   include 'fungsi.php';


$ch3 = curl_init();
$headers3 = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
 curl_setopt($ch3, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/referensi/dokter/pelayanan/".$jnslayanan3."/tglPelayanan/".$tglpelayanan3."/Spesialis/".$kdspesialis3."");
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
function decompress($aloha3){
   return \LZCompressor\LZString::decompressFromEncodedURIComponent($aloha3);
}

$alihi3 = decompress($aloha3);
//echo $alihi;
$data3 = json_decode($alihi3, true);
$items3 = $data3['list'];

}

if (isset($_POST['diagnosa'])){
   if (!empty($_POST['cari4'])) {
   $cari4 = $_POST['cari4'];
   } else {
   $cari4 = '';
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
curl_setopt($ch4, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/referensi/diagnosa/".$cari4."");
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
$items4 = $data4['diagnosa'];

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
                                                    class="icofont icofont-ui-home"></i>Faskes</a></li>

                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-riwayat-tab"
                                                data-bs-toggle="pill" href="#pills-riwayat" role="tab"
                                                aria-controls="pills-riwayat" aria-selected="false"><i
                                                    class="icofont icofont-man-in-glasses"></i>Kode Poli</a></li>

                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-klaim-tab"
                                                data-bs-toggle="pill" href="#pills-klaim" role="tab"
                                                aria-controls="pills-klaim" aria-selected="false"><i
                                                    class="icofont icofont-man-in-glasses"></i>Kode DPJP</a></li>

                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-jasa-tab"
                                                data-bs-toggle="pill" href="#pills-jasa" role="tab"
                                                aria-controls="pills-jasa" aria-selected="false"><i
                                                    class="icofont icofont-list"></i>Diagnosa</a></li>
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
                                                        <input type="text" class="form-control form-control-sm"
                                                            name="cari" placeholder="Masukkan kata kunci"
                                                            required="true">
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="input-group">
                                                            <select name="jnsPelayanan"
                                                                class="form-select form-select-sm" id="" require>
                                                                <option selected="true" disabled="disabled">-- Pilih
                                                                    Jenis Pelayanan --</option>
                                                                <option value="1">Rawat Inap</option>
                                                                <option value="2">Rawat Jalan</option>
                                                            </select>
                                                            <button class="btn btn-danger btn-sm" type="submit"
                                                                name="faskes">Cari</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr>
                                            <table class="display table-sm" id="basic-1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode Faskes</th>
                                                        <th>Nama Faskes</th>
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
                                                        <td><?php echo $item['kode'];?></td>
                                                        <td><?php echo $item['nama'];?></td>
                                                    </tr>
                                                    <?php }}  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-riwayat" role="tabpanel"
                                        aria-labelledby="pills-riwayat-tab">
                                        <div class="table-responsive">
                                            <div class="mb-1 row">
                                                <form action="" method="post">
                                                    <div class="col-sm-12">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm"
                                                                placeholder="Masukkan Kata Kunci" name="cari2" require>
                                                            <button class="btn btn-danger btn-sm" type="submit"
                                                                name="poli">Cari</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <hr>
                                            <table class="display table-sm" id="basic-2">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode Poli</th>
                                                        <th>Nama Poli</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                      $no2 = 0;
                                                      if (is_array($items2)){
                                                      foreach($items2 as $item2){
                                                         $no2++;
                                                      ?>
                                                    <tr>
                                                        <td><?php echo $no2;?></td>
                                                        <td><?php echo $item2['kode'];?></td>
                                                        <td><?php echo $item2['nama'];?></td>
                                                    </tr>
                                                    <?php } }?>
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
                                                        <select name="jnsPelayanan3" required="true"
                                                            class="form-select form-select-sm" id="">
                                                            <option selected="true" disabled="disabled">-- Pilih Jenis
                                                                Pelayanan --</option>
                                                            <option value="1">Rawat Inap</option>
                                                            <option value="2">Rawat Jalan</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <select name="kdspesialis3" required="true"
                                                            class="form-select form-select-sm" id="">
                                                            <option selected="true" disabled="disabled">-- Pilih
                                                                Spesialis --</option>
                                                            <option value="MAT">Mata</option>
                                                            <option value="135">Vitreo - Retina</option>
                                                            <option value="INT">Penyakit Dalam</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="input-group">
                                                            <input type="date" class="form-control form-control-sm"
                                                                placeholder="No.Kartu Peserta" name="tglPelayanan3"
                                                                required>
                                                            <button class="btn btn-danger btn-sm" type="submit"
                                                                name="dpjp">Cari</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr>
                                            <table class="display table-sm" id="basic-7">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode DPJP</th>
                                                        <th>Nama DPJP</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                      $no3 = 0;
                                                      if (is_array($items3)){
                                                      foreach($items3 as $item3){
                                                         $no3++;
                                                      ?>
                                                    <tr>
                                                        <td><?php echo $no3;?></td>
                                                        <td><?php echo $item3['kode'];?></td>
                                                        <td><?php echo $item3['nama'];?></td>
                                                    </tr>
                                                    <?php }}  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-jasa" role="tabpanel"
                                        aria-labelledby="pills-jasa-tab">
                                        <div class="table-responsive">
                                            <form action="" method="post">
                                                <div class="mb-1 row">
                                                    <div class="col-sm-12">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="cari4" placeholder="Masukkan kata kunci" required>
                                                            <button class="btn btn-danger btn-sm" type="submit"
                                                                name="diagnosa">Cari</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr>
                                            <table class="display table-sm" id="basic-8">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode Diagnosa</th>
                                                        <th>Nama Diagnosa</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                      $no4 = 0;
                                                      if (is_array($items4)){
                                                      foreach($items4 as $item4){
                                                         $diag4 = explode("-",$item4['nama']);
                                                         $no4++;
                                                      ?>
                                                    <tr>
                                                        <td><?php echo $no4;?></td>
                                                        <td><?php echo $diag4[0];?></td>
                                                        <td><?php echo $diag4[1];?></td>
                                                    </tr>
                                                    <?php } }?>
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
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>