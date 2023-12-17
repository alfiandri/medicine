<?php
error_reporting(E_ALL&~E_NOTICE);
include 'fungsi.php';
require_once 'vendor/autoload.php';

$jnslayanan = $_POST['jenislayanan'];
$cari = $_POST['cari'];

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/referensi/faskes/".$cari."/".$jnslayanan."");
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
$data = json_decode($alihi, true);
$items = $data['faskes'];

?>
<div class="table-responsive">
    <table class="table table-sm">
        <thead>
            <tr>
                <th width='5'>NO.</th>
                <th width='25'>KODE</th>
                <th>NAMA FASKES</th>
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
                <td width='5'><?php echo $no;?></td>
                <td width='25'><?php echo $item['kode'];?></td>
                <td><?php echo $item['nama'];?></td>
                <td><button onclick="value_data('<?php echo $item['kode'];?>');modal('popup', 0);"
                        class="btn btn-outline-success"><i class="fa fa-plus" aria-hidden="true"
                            data-dismiss="modal"></i></button>
                </td>
            </tr>
            <?php }}  ?>
        </tbody>
    </table>
</div>
</div>