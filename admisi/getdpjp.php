<?php
include 'fungsi.php';
require_once 'vendor/autoload.php';
$jenis = $_POST['jenis'];
$poli = $_POST['poli'];
$tanggal = $_POST['tanggal'];

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/referensi/dokter/pelayanan/".$jenis."/tglPelayanan/".$tanggal."/Spesialis/".$poli."");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_TIMEOUT, 3);
 curl_setopt($ch, CURLOPT_HTTPGET, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 $string = curl_exec($ch);
 $err = curl_error($ch);
 curl_close($ch);

 $key = $consid . $secretKey . $tStamp;
 $string = json_decode($string);
 $dtdecrypt = $string->response;
 $code = $string->metaData->code;
 $message = $string->metaData->message;
 if ($code!="200") {
    echo "<script>alert('$message')";
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
$data = json_decode($alihi, true);
$items = $data['list'];
?>

<select id="iddpjpLayan">
    <option selected="true" disabled="disabled">-- Pilih Dokter DPJP--</option>
    <?php
    foreach($items as $item) { ?>
        <option value="<?php echo $item['kode'];?>"><?php echo $item['nama'];?></option>
    <?php } ?>
</select>