<?php
$master = "V-Claim";
$page = "Sarana Rujukan";
error_reporting(0)
?>

<head>
    <base href="../">
    <?php
    require 'head.php';
    ?>
</head>
<?php
include 'fungsi.php';
require_once 'vendor/autoload.php';
if (!empty($_POST['ppkrujukan'])) {
    $ppkrujukan = $_POST['ppkrujukan'];
} else {
    $ppkrujukan = '';
}

$ch = curl_init();
$headers = array(
    'X-cons-id: ' . $consid . '',
    'X-timestamp: ' . $tStamp . '',
    'X-signature: ' . $encodedSignature . '',
    'user_key: ' . $userkey . '',
    'Content-Type:application/json'
);
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Rujukan/ListSarana/PPKRujukan/" . $ppkrujukan . "");
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

function stringDecrypt($key, $dtdecrypt)
{
    $encrypt_method = 'AES-256-CBC';
    $key_hash = hex2bin(hash('sha256', $key));
    $iv = substr(hex2bin(hash('sha256', $key)), 0, 16);
    $output = openssl_decrypt(base64_decode($dtdecrypt), $encrypt_method, $key_hash, OPENSSL_RAW_DATA, $iv);
    return $output;
}

$aloha = stringDecrypt($key, $dtdecrypt);
function decompress($aloha)
{
    return \LZCompressor\LZString::decompressFromEncodedURIComponent($aloha);
}

$alihi = decompress($aloha);
//echo $alihi;
$data = json_decode($alihi, true);
$items = $data['list'];

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
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="mb-1 row">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" placeholder="Masukkan Kode PPK" name="ppkrujukan" require>
                                                <button class=" btn btn-danger btn-sm" name="submit" type="submit">Cari</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <div class="table-responsive">
                                    <table class="display table-sm" id="basic-1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Sarana</th>
                                                <th>Nama Sarana</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            if (is_array($items)) {
                                                foreach ($items as $item) {
                                                    $no++;
                                            ?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><?php echo $item['kodeSarana']; ?></td>
                                                        <td><?php echo $item['namaSarana']; ?></td>
                                                    </tr>
                                            <?php }
                                            }  ?>
                                        </tbody>
                                    </table>
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
            require '../../template/footer.php';
            ?>
        </div>
    </div>
    <?php
    require 'library.php';
    ?>
</body>

</html>