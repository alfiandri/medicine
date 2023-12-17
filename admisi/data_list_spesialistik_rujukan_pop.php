<?php
include('head.php');
error_reporting(E_ALL&~E_NOTICE);
include 'fungsi.php';
require_once 'vendor/autoload.php';
if (isset($_POST['submit'])) {
  $ppkrujukan = $_POST['ppkrujukan'];
  $tglrujukan = $_POST['tglrujukan'];
  $info = "Kode PPK: ".$ppkrujukan."&emsp;Tanggal Rujukan: ".$tglrujukan;
}

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
 curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/Rujukan/ListSpesialistik/PPKRujukan/".$ppkrujukan."/TglRujukan/".$tglrujukan."");
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Spesialistik Rujukan</title>
    <link rel="stylesheet" type="text/css" href="popup.css">
    <script language="javascript">
    function post_value(s) {
        opener.document.getElementById('pol').value = s;
        self.close();
    }
    </script>
    <script>
    if (typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '');
    }
    </script>
</head>

<body>

    <form action="" method="post">
        <div>
            <input type="text" name="ppkrujukan" placeholder="Masukkan Kode PPK Rujukan" required>&emsp;
            <input type="date" name="tglrujukan" required>&emsp;
            <input type="submit" name="submit" value="Cari">
        </div>
    </form>
    <?php
 echo $info;
?>
    <br><br>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>KODE SPESIALIS</th>
                    <th>NAMA SPESIALIS</th>
                    <th>KAP</th>
                    <th>JML RUJUKAN</th>
                    <th>PERSENTASE</th>
                    <th>OPSI</th>
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
                    <td><?php echo $item['kodeSpesialis'];?></td>
                    <td style="text-align: left;"><?php echo $item['namaSpesialis'];?></td>
                    <td><?php echo $item['kapasitas'];?></td>
                    <td><?php echo $item['jumlahRujukan'];?></td>
                    <td><?php echo $item['persentase'];?></td>
                    <td><a href='#' onclick="post_value('<?php echo $item['kodeSpesialis'];?>');"><button
                                class="btn btn-outline-success"><i class="fa fa-plus"
                                    aria-hidden="true"></i></button></a></td>
                </tr>
                <?php }}  ?>
            </tbody>
        </table>
    </div>

</body>

</html>