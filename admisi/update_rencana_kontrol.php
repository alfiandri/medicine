<!DOCTYPE html>

<head>
    <?php
    $page ="Edit Data";
  require 'function.php';
  require 'head.php';
  error_reporting(0);
  ?>
</head>

<?php
include 'fungsi.php';
require_once 'vendor/autoload.php';
$skontrol = $_GET['nosrtktrl'];
$id_nama = $_SESSION['iduser'];

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
 curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/RencanaKontrol/noSuratKontrol/".$skontrol."");
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
 $message = $string->metaData->message;
 $dtdecrypt = $string->response;
 if ($string->metaData->code=="201") {
  ?>
<script>
Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: '<?= $message?>',
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ok'
}).then((result) => {
    if (result.isConfirmed) {
        document.location = "update_rencana_kontrol.php";
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
//echo $alihi;
$uhuy = json_decode($alihi);

$srtktrl = $uhuy->noSuratKontrol;
$NoSep = $uhuy->sep->noSep;
$kddokter = $uhuy->kodeDokter;
$kodepoli = $uhuy->poliTujuan;
$tglktrl = $uhuy->tglRencanaKontrol;
?>


<body id="page-top">
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
            <?php require 'sidebar.php';?>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3></h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">V-Claim</li>
                                    <li class="breadcrumb-item">SEP</li>
                                    <li class="breadcrumb-item active">Cari Nomor</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <section class="content-header">
                        <div class="container-fluid">
                            <div style="text-align: center; margin-bottom:50px;">
                                <h3>UPDATE DATA RENCANA KONTROL</h3>
                            </div>
                        </div><!-- /.container-fluid -->
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <div class="container-fluid">
                            <form role="form" method="post" action="proses_update_rencana_kontrol.php">
                                <div class="row">
                                    <div class="col-md-6" style="margin: 0 auto;">
                                        <!-- general form elements -->
                                        <div class="card card-success">
                                            <div class="card-header">
                                                <h3 class="card-title">UPDATE DATA</h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputnoSuratKontrol">No. Surat Kontrol</label>
                                                    <input type="text" class="form-control" name="noSuratKontrol"
                                                        value="<?php echo $srtktrl;?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputnoSEP">No. SEP</label>
                                                    <input type="text" class="form-control" name="noSEP"
                                                        value="<?php echo $NoSep;?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputkodeDokter">Kode Dokter</label>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <input type="text" class="form-control" name="kodeDokter"
                                                                id="dok" value="<?php echo $kddokter;?>" required>
                                                        </div>
                                                        <div class="col-2">
                                                            <a href="javascript:void(0);" name="Kode Dokter"
                                                                title="Kode Dokter"
                                                                onClick='javascript:window.open("data_dokter_rencana_kontrol_pop.php","Ratting", "width=675,height=170,left=150,top=200,toolbar=1,status=1");'>
                                                                <button type="button" class="btn btn-primary btn-s"><i
                                                                        class="fa fa-search" data-toggle="tooltip"
                                                                        data-original-title="Cari Diagnosa"></i></button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputpoliKontrol">Kode Poli Kontrol</label>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <input type="text" class="form-control" name="poliKontrol"
                                                                id="polirk" value="<?php echo $kodepoli;?>" required>
                                                        </div>
                                                        <div class="col-2">
                                                            <a href="javascript:void(0);" name="Cari Poli"
                                                                title="Cari Poli"
                                                                onClick='javascript:window.open("data_poli_rencana_kontrol_pop.php","Ratting", "width=650,height=170,left=150,top=200,toolbar=1,status=1");'>
                                                                <button type="button" class="btn btn-primary btn-s"><i
                                                                        class="fa fa-search" data-toggle="tooltip"
                                                                        data-original-title="Cari Diagnosa"></i></button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputtglRencanaKontrol">Tanggal Rencana
                                                        Kontrol</label>
                                                    <input type="date" class="form-control" name="tglRencanaKontrol"
                                                        value="<?php echo $tglktrl;?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputnoTelp">User Update</label>
                                                    <input type="text" class="form-control" name="user"
                                                        value="<?php echo $id_nama;?>">
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <?php require 'footer.php';?>
    </div>
    <?= include 'script.php'; ?>
</body>

</html>