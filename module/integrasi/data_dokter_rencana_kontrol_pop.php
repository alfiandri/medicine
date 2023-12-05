<?php
error_reporting(E_ALL&~E_NOTICE);
include 'fungsi.php';
require_once 'vendor/autoload.php';
if (!empty($_POST['jnsKontrol']) && ($_POST['kodepoli']) && ($_POST['tglkontrol'])) {
      $jnsKontrol = $_POST['jnsKontrol'];
      $kodepoli = $_POST['kodepoli'];
      $tglkontrol = $_POST['tglkontrol'];
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
 curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/RencanaKontrol/JadwalPraktekDokter/JnsKontrol/".$jnsKontrol."/KdPoli/".$kodepoli."/TglRencanaKontrol/".$tglkontrol."");
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
    <title>Data Dokter Rencana Kontrol</title>
    <?php include('head.php');?>
    <link rel="stylesheet" type="text/css" href="popup.css">
    <script language="javascript">
    function post_value(s) {
        opener.document.getElementById('dok').value = s;
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
            <select name="jnsKontrol" required="true">
                <option selected="true" disabled="disabled">-- Pilih Jenis Kontrol --</option>
                <option value="1">SPRI</option>
                <option value="2">Rencana Kontrol</option>
            </select>&emsp;
            <select name="kodepoli" required="true">
                <option selected="true" disabled="disabled">-- Pilih Poli --</option>
                <option value="MAT">Mata</option>
                <option value="135">Vitreo - Retina</option>
                <option value="INT">Penyakit Dalam</option>
            </select>&emsp;
            <input type="date" name="tglkontrol" required>&emsp;
            <input type="submit" name="submit" value="Cari">
        </div>
    </form>
    <?php
  if (isset($_POST['submit'])) {
    echo $info;
  }
?>
    <br><br>
    <div class="table-responsive">
        <table id="basic-1" class="display table">
            <thead>
                <tr>
                    <th width='10'>NO.</th>
                    <th width='10'>KODE DOKTER</th>
                    <th>NAMA DOKTER</th>
                    <th width="75">JADWAL PRAKTEK</th>
                    <th width='10'>KAP</th>
                    <th width='10'>OPSI</th>
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
                    <td><a href='#' onclick="post_value('<?php echo $item['kodeDokter'];?>');"><button
                                class="btn btn-success">Pilih</button></a></td>
                </tr>
                <?php }}  ?>
            </tbody>
        </table>
    </div>

</body>

</html>