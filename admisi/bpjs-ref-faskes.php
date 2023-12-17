<?php
$master = "V-Claim ";
$page = "Referensi Faskes";
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
if (isset($_POST['faskes'])) {
    if (!empty($_POST['cari'])) {
        $cari1 = $_POST['cari'];
        $jnslayanan1 = $_POST['jnsPelayanan'];
    } else {
        $cari1 = '0201R051';
        $jnslayanan1 = '2';
    }
    $url = "" . $base_url . "/" . $service . "/referensi/faskes/" . $cari1 . "/" . $jnslayanan1 . "";
    $items = kirim($url, 'faskes');
}
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
                    <div class="col-md-12 project-list">
                        <div class="card">
                            <div class="row">
                                <div class="table-responsive">
                                    <form action="" method="post">
                                        <div class="mb-1 row">
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control form-control-sm" autocomplete="off" name="cari" placeholder="Masukkan kata kunci" required="true">
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <select name="jnsPelayanan" class="form-select form-select-sm" id="" required="">
                                                        <option selected="true" disabled="disabled">-- Pilih
                                                            Jenis Pelayanan --</option>
                                                        <option value="1">Rawat Inap</option>
                                                        <option value="2">Rawat Jalan</option>
                                                    </select>
                                                    <button class="btn btn-danger btn-sm" type="submit" name="faskes">Cari</button>
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
                                                <th class="text-center">Actions</th>
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
                                                        <td><?php echo $item['kode']; ?></td>
                                                        <td><?php echo $item['nama']; ?></td>
                                                        <td class="col-2">
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pilih<?= $item['kode'] ?>">
                                                                Simpan Database
                                                            </button>

                                                        </td>
                                                    </tr>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="pilih<?= $item['kode'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Faskes </h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Kode</label>
                                                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="<?= $item['kode'] ?>">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Faskes</label>
                                                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="<?= $item['nama'] ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                            <?php }
                                            }  ?>


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