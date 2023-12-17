<?php
$master = "V-Claim";
$page = "Spesialistik Rujukan";
require 'head.php';
error_reporting(0);
require_once 'vendor/autoload.php';
if (!empty($_POST['cari'])) {
  $cari = $_POST['cari'];
} else {
  $cari = '';
}
include 'fungsi.php';
require_once 'vendor/autoload.php';
if (isset($_POST['submit'])) {
  $ppkrujukan = $_POST['ppkrujukan'];
  $tglrujukan = $_POST['tglrujukan'];
  $info = "Kode PPK: ".$ppkrujukan."&emsp;Tanggal Rujukan: ".$tglrujukan;
} else {
  $ppkrujukan = '';
  $tglrujukan = '';
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
//  print_r($string);

 $key = $consid . $secretKey . $tStamp;
 $string = json_decode($string);
 $dtdecrypt = $string->response;
 $message = $string->metaData->message;
 $code = $string->metaData->code;
 if ($code != "200"){
     ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: '<?= $message;?>',
}).then((result) => {
    if (result.isConfirmed) {
        document.location = "bpjs-rujukan.php";
    }
})
</script>
<?php
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
// echo $alihi;
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
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control form-control-sm"
                                                placeholder="Kode PPK Rujukan" name="ppkrujukan" id="">
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <input type="date" class="form-control form-control-sm"
                                                    name="tglrujukan">
                                                <button class=" btn btn-danger btn-sm" name="submit"
                                                    type="submit">Cari</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <hr>
                                <?php echo $info;?>
                                <div class="table-responsive">
                                    <table class="display table-sm" id="basic-1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Spesialis</th>
                                                <th>Nama Spesialis</th>
                                                <th>Kapasitas</th>
                                                <th>Jumlah Rujukan</th>
                                                <th>Persentase</th>
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
                                                <td><?php echo $item['namaSpesialis'];?></td>
                                                <td><?php echo $item['kapasitas'];?></td>
                                                <td><?php echo $item['jumlahRujukan'];?></td>
                                                <td><?php echo $item['persentase'];?></td>
                                            </tr>
                                            <?php }}  ?>
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
         require 'footer.php';
         ?>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
    <?= include 'script.php'; ?>
</body>

</html>