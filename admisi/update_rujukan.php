<?php
require_once 'vendor/autoload.php';
if (!empty($_POST['cari'])) {
  $cari = $_POST['cari'];
} else {
  $cari = '';
}
include 'fungsi.php';
include 'head.php';
session_start();
$id_nama = $_SESSION['namalengkap'];
if (!empty($_GET['kode'])) {
  $norujukan = $_GET['kode'];
} else {
  $norujukan = $_POST['norujukan'];
}

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
 curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/Rujukan/Keluar/".$norujukan."");
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
$uhuy = json_decode($alihi);

//Data Form Insert SEP
$norujukan = $uhuy->rujukan->noRujukan;
$nosep = $uhuy->rujukan->noSep;
$noKartu = $uhuy->rujukan->noKartu;
$nama = $uhuy->rujukan->nama;
$kelasRawat = $uhuy->rujukan->kelasRawat;
$kelamin = $uhuy->rujukan->kelamin;
$tglLahir = $uhuy->rujukan->tglLahir;
$tglSep = $uhuy->rujukan->tglSep;
$tglRujukan = $uhuy->rujukan->tglRujukan;
$tglRencanaKunjungan = $uhuy->rujukan->tglRencanaKunjungan;
$ppkDirujuk = $uhuy->rujukan->ppkDirujuk;
$namaPpkDirujuk = $uhuy->rujukan->namaPpkDirujuk;
$jnsPelayanan = $uhuy->rujukan->jnsPelayanan;
$catatan = $uhuy->rujukan->catatan;
$diagRujukan = $uhuy->rujukan->diagRujukan;
$namaDiagRujukan = $uhuy->rujukan->namaDiagRujukan;
$tipeRujukan = $uhuy->rujukan->tipeRujukan;
$namaTipeRujukan = $uhuy->rujukan->namaTipeRujukan;
$poliRujukan = $uhuy->rujukan->poliRujukan;
$namaPoliRujukan = $uhuy->rujukan->namaPoliRujukan;

if ($kelamin=="L") {
  $jenis_kelamin = "Pria";
  }
if ($kelamin=="P") {
  $jenis_kelamin = "Wanita";
  }
if ($jnsPelayanan=="1") {
    $pelayanan = "Rawat Inap";
  }
if ($jnsPelayanan=="2") {
    $pelayanan = "Rawat Jalan";
  }
    
?>
<!DOCTYPE html>

<head>
    <?php
  require 'function.php';
  ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <!-- Content Wrapper. Contains page content -->
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div style="text-align: center">
                            <h1>UPDATE RUJUKAN PESERTA</h1>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <form role="form" method="post" action="proses_update_rujukan.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- general form elements -->
                                    <div class="card card-success">
                                        <div class="card-header">
                                            <h3 class="card-title">UPDATE DATA</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputnoRujukan">No. Rujukan</label>
                                                <input type="text" class="form-control" name="noRujukan"
                                                    value="<?php echo $norujukan;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputtglRujukan">Tanggal Rujukan</label>
                                                <input type="date" class="form-control" name="tglRujukan"
                                                    value="<?php echo $tglRujukan;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputtglRencanaKunjungan">Tgl. Rencana
                                                    Kunjungan</label>
                                                <input type="date" class="form-control" name="tglRencanaKunjungan"
                                                    value="<?php echo $tglRencanaKunjungan;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputppkDirujuk">Kode PPK Dirujuk</label>
                                                <div class="row">
                                                    <div class="col-8">
                                                        <input type="text" class="form-control" name="ppkDirujuk"
                                                            id="fas" value="<?php echo $ppkDirujuk;?>" required>
                                                    </div>
                                                    <div class="col-2">
                                                        <a href="javascript:void(0);" name="Cari Faskes"
                                                            title="Cari Faskes"
                                                            onClick='javascript:window.open("cari_faskes_popup.php","Ratting", "width=550,height=170,left=150,top=200,toolbar=1,status=1");'>
                                                            <button type="button" class="btn btn-primary btn-s"><i
                                                                    class="fa fa-search" data-toggle="tooltip"
                                                                    data-original-title="Cari Faskes"></i></button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputjnsPelayanan"
                                                    class="col-sm-5 col-form-label-sm">Jenis Pelayanan</label>
                                                <select class="form-select form-select-sm" name="jnsPelayanan" required>
                                                    <option <?= ($jnsPelayanan=='') ? 'selected' : '' ?>>-- Pilih Jenis
                                                        Pelayanan --</option>
                                                    <option value="1" <?= ($jnsPelayanan=='1') ? 'selected' : '' ?>>
                                                        Rawat Inap</option>
                                                    <option value="2" <?= ($jnsPelayanan=='2') ? 'selected' : '' ?>>
                                                        Rawat Jalan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </div>
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">UPDATE DATA</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputcatatan">Catatan</label>
                            <textarea name="catatan" class="form-control"><?php echo $catatan;?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputdiagRujukan">Kode Diagnosa Rujukan</label>
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" class="form-control" name="diagRujukan" id="diag"
                                        value="<?php echo $diagRujukan;?>" required>
                                </div>
                                <div class="col-2">
                                    <a href="javascript:void(0);" name="Cari Diagnosa" title="Cari Diagnosa"
                                        onClick='javascript:window.open("cari_diagnosa_popup.php","Ratting", "width=550,height=170,left=150,top=200,toolbar=1,status=1");'>
                                        <button type="button" class="btn btn-primary btn-s"><i class="fa fa-search"
                                                data-toggle="tooltip" data-original-title="Cari Diagnosa"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtipeRujukan" class="col-sm-5 col-form-label-sm">Tipe Rujukan</label>
                            <select class="form-select form-select-sm" name="tipeRujukan" required>
                                <option <?= ($tipeRujukan=='') ? 'selected' : '' ?>>-- Pilih Tipe Rujukan --</option>
                                <option value="0" <?= ($tipeRujukan=='0') ? 'selected' : '' ?>>Penuh</option>
                                <option value="1" <?= ($tipeRujukan=='1') ? 'selected' : '' ?>>Partial</option>
                                <option value="2" <?= ($tipeRujukan=='2') ? 'selected' : '' ?>>Balik PRB</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputtglpoliRujukan">Kode Poli Rujukan</label>
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" class="form-control" name="poliRujukan" id="pol"
                                        value="<?php echo $poliRujukan;?>" required>
                                </div>
                                <div class="col-2">
                                    <a href="javascript:void(0);" name="Cari Poli" title="Cari Poli"
                                        onClick='javascript:window.open("data_list_spesialistik_rujukan_pop.php","Ratting", "width=750,height=170,left=150,top=200,toolbar=1,status=1,");'>
                                        <button type="button" class="btn btn-primary btn-s"><i class="fa fa-search"
                                                data-toggle="tooltip" data-original-title="Cari Poli"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputuser">User Update</label>
                            <input type="text" class="form-control" name="user" value="<?php echo $id_nama;?>" readonly>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
        </form>
    </div><!-- /.container-fluid -->
    </section>
    </div>
    </div>
    <!-- Modal -->

    </div>
    <?php include 'script.php'; ?>
</body>

</html>>