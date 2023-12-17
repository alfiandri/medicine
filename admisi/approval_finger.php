<!DOCTYPE html>

<head>
    <?php
  require 'function.php';
  require 'head.php';
  include 'connect.php';
  include 'fungsi.php';
  ?>
</head>

body>
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
                <?php
require_once 'vendor/autoload.php';

$noKartu = $_GET['kode'];
$user = $_SESSION['namalengkap'];
$query = $mysqli->query("SELECT * FROM t_pengajuan WHERE noKartu='$noKartu' AND stat='1'");
$row = $query->fetch_array(MYSQLI_ASSOC);
$tglSep = $row['tglSep'];
$jnsPelayanan = $row['jnsPelayanan'];
$jnsPengajuan = $row['jnsPengajuan'];
$keterangan = $row['keterangan'];

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
 );

$arr = array("request"=>
array("t_sep"=>
    array(
            "noKartu"=>"$noKartu",
            "tglSep"=>"$tglSep",
            "jnsPelayanan"=>"$jnsPelayanan",
            "jnsPengajuan"=>"$jnsPengajuan",
            "keterangan"=>"$keterangan",
            "user"=>"$user"
        )   
    ),
 );

 $json = json_encode($arr);

 curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Sep/aprovalSEP");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
 curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
 curl_setopt($ch, CURLOPT_POST, 1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($ch, CURLOPT_TIMEOUT, 3);

 $string = curl_exec($ch);
 $err = curl_error($ch);
 curl_close($ch);
//  print_r($string);
//  print_r($err);

 $key = $consid . $secretKey . $tStamp;
 $string = json_decode($string);
 $message = $string->metaData->message;
 $code = $string->metaData->code;
 $dtdecrypt = $string->response;
 if ($code!="200") {
   echo "<script>alert('Kode: $code - $message'); window.location = bpjs-pengajuan.php';</script>";
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
$uhuy = json_decode($alihi);


if ($code=="200") {
   $sql = ("UPDATE t_pengajuan SET uapp='$user',stat='2',code='$code',pesan='$message' WHERE noKartu='$noKartu'");
   if (mysqli_query($mysqli, $sql))  
   {  
     echo "<script type='text/javascript'> document.location='bpjs-pengajuan.php?kd=updsukses';</script>";
   } else {
     echo "<script type='text/javascript'> document.location='bpjs-pengajuan.php?kd=updgagal';</script>";  
   }
 }
 ?>

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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="../assets/js/script.js"></script>
<!-- <script src="../assets/js/theme-customizer/customizer.js"></script> -->
<!-- login js-->
<!-- Plugin used-->
</body>

</html>