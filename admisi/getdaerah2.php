<?php
include 'fungsi.php';
require_once 'vendor/autoload.php';
$data = $_POST['data'];
$id = $_POST['id'];

if($data == "propinsi"){
$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/referensi/propinsi");
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

<select id="form_prov">
    <option selected="true" disabled="disabled" value="">-- Pilih Propinsi Kejadian --</option>
    <?php
    foreach($items as $item) { ?>
        <option value="<?php echo $item['kode'];?>"><?php echo $item['nama'];?></option>
    <?php } ?>
</select>

<?php }


if($data == "kabupaten"){

    $ch = curl_init();
    $headers = array(
    'X-cons-id: '.$consid .'',
    'X-timestamp: '.$tStamp.'' ,
    'X-signature: '.$encodedSignature.'',
    'user_key: '.$userkey.'',
    'Content-Type:application/json'
    );
    curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/referensi/kabupaten/propinsi/".$id."");
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

    <select id="form_kab">
            <option selected="true" disabled="disabled" value="">-- Pilih Kab/Kota Kejadian --</option>
            <?php
            foreach($items as $item) { ?>
                <option value="<?php echo $item['kode'];?>"><?php echo $item['nama'];?></option>
            <?php } ?>
    </select>

<?php } 

if($data == "kecamatan"){
    
    $ch = curl_init();
    $headers = array(
    'X-cons-id: '.$consid .'',
    'X-timestamp: '.$tStamp.'' ,
    'X-signature: '.$encodedSignature.'',
    'user_key: '.$userkey.'',
    'Content-Type:application/json'
     );
    curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/referensi/kecamatan/kabupaten/".$id."");
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
    
    <select id="form_kab">
            <option selected="true" disabled="disabled" value="">-- Pilih Kecamatan Kejadian --</option>
            <?php
            foreach($items as $item) { ?>
                <option value="<?php echo $item['kode'];?>"><?php echo $item['nama'];?></option>
            <?php } ?>
    </select>

<?php } ?>
