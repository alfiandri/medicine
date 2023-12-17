<?php
$master = "V-Claim ";
$page = "Referensi Pasca Pulang";
require 'head.php';
require 'function.php';
error_reporting(E_ALL & ~E_NOTICE);
require_once 'vendor/autoload.php';
include 'fungsi.php';

function kirim($url, $tujuan)
{
    include 'fungsi.php';
    $ch = curl_init();
    $headers = array(
        'X-cons-id: ' . $consid . '',
        'X-timestamp: ' . $tStamp . '',
        'X-signature: ' . $encodedSignature . '',
        'user_key: ' . $userkey . '',
        'Content-Type:application/json'
    );
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);
    curl_setopt($ch, CURLOPT_HTTPGET, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $string = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);
    // return $string;

    $key = $consid . $secretKey . $tStamp;
    $string = json_decode($string);
    $dtdecrypt = $string->response;
    $code = $string->metaData->code;
    $pesan = $string->metaData->message;
    if ($code != "200") {
        echo "<script>alert('$code - $pesan');</script>";
    }
    $aloha = stringDecrypt($key, $dtdecrypt);
    $alihi = decompress($aloha);
    //echo $alihi;
    $data = json_decode($alihi, true);
    $items = $data[$tujuan];
    return $items;
}
function stringDecrypt($key, $dtdecrypt)
{
    $encrypt_method = 'AES-256-CBC';
    $key_hash = hex2bin(hash('sha256', $key));
    $iv = substr(hex2bin(hash('sha256', $key)), 0, 16);
    $output = openssl_decrypt(base64_decode($dtdecrypt), $encrypt_method, $key_hash, OPENSSL_RAW_DATA, $iv);
    return $output;
}
function decompress($aloha)
{
    return \LZCompressor\LZString::decompressFromEncodedURIComponent($aloha);
}
$url = "" . $base_url . "/" . $service . "/referensi/pascapulang";
$items7 = kirim($url, 'list');
?>

<body>
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <?php require 'header.php'; ?>
        <div class="page-body-wrapper">
            <?php require 'sidebar.php'; ?>
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
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="display table-sm" id="basic-1">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kode</th>
                                                <th>Nama</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no5 = 0;
                                            if (is_array($items7)) {
                                                foreach ($items7 as $item7) {
                                                    $no5++;
                                            ?>
                                                    <tr>
                                                        <td><?php echo $no5; ?></td>
                                                        <td><?php echo $item7['kode']; ?></td>
                                                        <td><?php echo $item7['nama']; ?></td>
                                                        <td class="col-2">
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pilih<?= $item['kode'] ?>">
                                                                Simpan Database
                                                            </button>

                                                        </td>
                                                    </tr>
                                            <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require 'footer.php'; ?>
        </div>
    </div>
    <?= include 'script.php'; ?>
</body>

</html>