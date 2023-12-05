<?php
$master = "V-Claim ";
$page = "Rujukan Keluar RS";
require 'head.php';
require 'function.php';
error_reporting(0);
?>
<?php
include 'fungsi.php';
require_once 'vendor/autoload.php';
if (!empty($_POST['tglawal']) && ($_POST['tglakhir'])) {
    $tglawal = $_POST['tglawal'];
    $tglakhir = $_POST['tglakhir'];
} else {
    $tglawal = '';
    $tglakhir = '';
}

$ch = curl_init();
$headers = array(
    'X-cons-id: ' . $consid . '',
    'X-timestamp: ' . $tStamp . '',
    'X-signature: ' . $encodedSignature . '',
    'user_key: ' . $userkey . '',
    'Content-Type:application/json'
);
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Rujukan/Keluar/List/tglMulai/" . $tglawal . "/tglAkhir/" . $tglakhir . "");
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
                                    <li class="breadcrumb-item">Rujukan</li>
                                    <li class="breadcrumb-item active">Keluar RS </li>
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
                                <div class="col-md-6">
                                    <ul class="nav nav-pills" id="pills-icontab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Tanggal</a></li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconprofile-tab" data-bs-toggle="pill" href="#pills-iconprofile" role="tab" aria-controls="pills-iconprofile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Nomor</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="pills-icontabContent">
                                    <div class="tab-pane fade show active" id="pills-iconhome" role="tabpanel" aria-labelledby="pills-iconhome-tab">
                                        <form action="" method="post">
                                            <div class="mb-1 row">
                                                <div class="col-sm-5">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm" placeholder="Masukkan Tanggal Awal" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" name="tglawal" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm" placeholder="Masukkan Tanggal Akhir" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" name="tglakhir" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="input-group">
                                                        <button class=" btn btn-danger btn-sm" type="submit" name="submit">Cari</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                        if (isset($_POST['submit'])) {
                                            echo "Tanggal Awal : " . $tglawal . "&emsp; Tanggal Akhir : " . $tglakhir;
                                        }
                                        ?>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="display table-sm" id="basic-1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>No.Rujukan</th>
                                                        <th>TGL. Rujuk</th>
                                                        <th>JNS Layanan</th>
                                                        <th>No.SEP</th>
                                                        <th>No. Kartu</th>
                                                        <th>Nama</th>
                                                        <th>PPK</th>
                                                        <th>Nama PPK</th>
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
                                                                <td><?php echo $item['noRujukan']; ?></td>
                                                                <td><?php echo $item['tglRujukan']; ?></td>
                                                                <td><?php echo $item['jnsPelayanan']; ?></td>
                                                                <td><?php echo $item['noSep']; ?></td>
                                                                <td><?php echo $item['noKartu']; ?></td>
                                                                <td><?php echo $item['nama']; ?></td>
                                                                <td><?php echo $item['ppkDirujuk']; ?></td>
                                                                <td><?php echo $item['namaPpkDirujuk']; ?></td>
                                                            </tr>
                                                    <?php }
                                                    }  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-iconprofile" role="tabpanel" aria-labelledby="pills-iconprofile-tab">
                                        <form role="form" method="post" action="detail_rujukan_keluar_norujuk.php">
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nomor
                                                    Rujukan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm" id="inputPassword" name="norujukan">
                                                </div>
                                            </div>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" name="norujukan" class="col-sm-2 col-form-label-sm "></label>
                                                <div class="col-sm-10">
                                                    <button class="btn btn-success btn-sm" type="submit">Proses</button>
                                                </div>
                                            </div>
                                        </form>
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
            require '../template/footer.php';
            ?>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tempat & Tanggal Lahir</label>
                        <div class="row">
                            <div class="col-7">
                                <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="col-5">
                                <input type="date" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                        <select name="" class="form-select" id="">
                            <option value="">Laki-Laki</option>
                            <option value="">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No.Handphone</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Booking Via</label>
                        <select name="" class="form-select" id="">
                            <option value="">Mobile JKN</option>
                            <option value="">On-Site</option>
                            <option value="">Online Channel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Layanan</label>
                        <select name="" class="form-select" id="">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'library.php';
    ?>
</body>

</html>