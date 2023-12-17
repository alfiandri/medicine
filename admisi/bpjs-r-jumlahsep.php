<?php
$master = "V-Claim ";
$page = "Jumlah SEP";
require 'head.php';
error_reporting(E_ALL&~E_NOTICE);
require 'function.php';
?>
<?php
include 'fungsi.php';
require_once 'vendor/autoload.php';
if (!empty($_POST['norujukan'])) {
      $norujukan = $_POST['norujukan'];
      $jnsrujukan = $_POST['jnsrujukan'];
    } else {
      $norujukan = '';
      $jnsrujukan = '';
    }

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/Rujukan/JumlahSEP/".$jnsrujukan."/".$norujukan."");
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
$uhuy = json_decode($alihi);
$jumlahsep = $uhuy->jumlahSEP;

if ($norujukan=="") {
    $norujukan = "-";
}
if ($jnsrujukan=="") {
    $jnsrujukan = "-";
}
if ($jnsrujukan=="1") {
  $jnsrujukan = "FKTP";
}
if ($jnsrujukan=="2") {
  $jnsrujukan = "FKTRL";
}
if ($jumlahsep=="") {
    $jumlahsep = "-";
}

$status = $message;

if ($code=="" && $message=="") {
    $status= "-";
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
                                    <li class="breadcrumb-item">Rujukan</li>
                                    <li class="breadcrumb-item active"><?= $page ?> </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <form action="" method="post" role="form">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-1 row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jenis
                                            Rujukan</label>
                                        <div class="col-sm-10">
                                            <select class="form-select form-select-sm" name="jnsrujukan"
                                                required="true">
                                                <option value="">-- Pilih Jenis Rujukan --</option>
                                                <option value="1">FKTP</option>
                                                <option value="2">FKTRL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-1 row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.
                                            Rujukan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="norujukan" class="form-control form-control-sm"
                                                id="inputPassword" require>
                                        </div>
                                    </div>
                                    <div class="mb-1 row">
                                        <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                        <div class="col-sm-10">
                                            <button class="btn btn-success btn-sm" type="submit">Proses</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label-sm ">No. Rujukan</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control form-control-sm" id=""
                                            value="<?php echo $norujukan;?>">
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label-sm ">Jenis Rujukan</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control form-control-sm" id=""
                                            value="<?php echo $jnsrujukan;?>">
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label-sm ">Jumlah SEP</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control form-control-sm" id=""
                                            value="<?php echo $jumlahsep;?>">
                                    </div>
                                </div>
                                <div class="mb-1 row">
                                    <label class="col-sm-2 col-form-label-sm ">Status</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control form-control-sm" id=""
                                            value="<?php echo $status;?>">
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
    <?= include 'script.php'; ?>
</body>

</html>