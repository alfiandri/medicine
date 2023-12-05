<?php
error_reporting(E_ALL&~E_NOTICE);
include 'fungsi.php';
require_once 'vendor/autoload.php';
$id = $_POST['norujuk'];

if (isset($_POST['pcare'])) {

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
 curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Rujukan/" . $id . "");
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
 $message = $string->metaData->message;
 $code = $string->metaData->code;

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

if ($uhuy->rujukan->peserta->sex=="L") {
    $jenis_kelamin = "Pria";
    } else {
    $jenis_kelamin = "Wanita";
    }
if ($uhuy->asalFaskes=="1") {
    $asalfaskes = "Faskes Tingkat I";
    }
if ($uhuy->asalFaskes=="2") {
    $asalfaskes = "Faskes Tingkat II";
    }
if ($uhuy->rujukan->peserta->statusPeserta->keterangan=="AKTIF") {
    $warna = "green";
} else {
    $warna = "red";
}

//Data Form Insert SEP
$nama = $uhuy->rujukan->peserta->nama;
$noKartu = $uhuy->rujukan->peserta->noKartu;
$asalrujukan = $uhuy->asalFaskes;
$tglrujukan = $uhuy->rujukan->tglKunjungan;
$norujukan = $uhuy->rujukan->noKunjungan;
$kdfaskesrujukan = $uhuy->rujukan->provPerujuk->kode;
$nmfaskesrujukan = $uhuy->rujukan->provPerujuk->nama;
$politujuan = $uhuy->rujukan->poliRujukan->kode;
$jenispelayanan = $uhuy->rujukan->pelayanan->kode;
$kddiagawal = $uhuy->rujukan->diagnosa->kode;
$notelp = $uhuy->rujukan->peserta->mr->noTelepon;
  if ($notelp=="") {
    $notelp="-";
  }
$noMR = $uhuy->rujukan->peserta->mr->noMR;
  if ($noMR=="") {
    $noMR="-";
  }
$kelasrawathak = $uhuy->rujukan->peserta->hakKelas->kode;
$nik = $uhuy->rujukan->peserta->nik;
$keluhan = $uhuy->rujukan->keluhan;
  if ($keluhan=="") {
        $keluhan="-";
  }

if ($code!="200") {
  echo "<script>alert('$code - $message'); window.history.go(-1);</script>";
}
}

if (isset($_POST['rs'])) {

  $ch = curl_init();
  $headers = array(
  'X-cons-id: '.$consid .'',
  'X-timestamp: '.$tStamp.'' ,
  'X-signature: '.$encodedSignature.'',
  'user_key: '.$userkey.'',
  'Content-Type:application/json'
   );
   curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/Rujukan/RS/" . $id . "");
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
   $message = $string->metaData->message;
   $code = $string->metaData->code;
  
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
  
  if ($uhuy->rujukan->peserta->sex=="L") {
      $jenis_kelamin = "Pria";
      } else {
      $jenis_kelamin = "Wanita";
      }
  if ($uhuy->asalFaskes=="1") {
      $asalfaskes = "Faskes Tingkat I";
      }
  if ($uhuy->asalFaskes=="2") {
      $asalfaskes = "Faskes Tingkat II";
      }
  if ($uhuy->rujukan->peserta->statusPeserta->keterangan=="AKTIF") {
      $warna = "green";
  } else {
      $warna = "red";
  }
  
  //Data Form Insert SEP
  $nama = $uhuy->rujukan->peserta->nama;
  $noKartu = $uhuy->rujukan->peserta->noKartu;
  $asalrujukan = $uhuy->asalFaskes;
  $tglrujukan = $uhuy->rujukan->tglKunjungan;
  $norujukan = $uhuy->rujukan->noKunjungan;
  $kdfaskesrujukan = $uhuy->rujukan->provPerujuk->kode;
  $nmfaskesrujukan = $uhuy->rujukan->provPerujuk->nama;
  $politujuan = $uhuy->rujukan->poliRujukan->kode;
  $jenispelayanan = $uhuy->rujukan->pelayanan->kode;
  $kddiagawal = $uhuy->rujukan->diagnosa->kode;
  $notelp = $uhuy->rujukan->peserta->mr->noTelepon;
  if ($notelp=="") {
    $notelp="-";
  }
  $noMR = $uhuy->rujukan->peserta->mr->noMR;
  if ($noMR=="") {
    $noMR="-";
  }
  $kelasrawathak = $uhuy->rujukan->peserta->hakKelas->kode;
  $nik = $uhuy->rujukan->peserta->nik;
  $keluhan = $uhuy->rujukan->keluhan;
  if ($keluhan=="") {
        $keluhan="-";
  }
  
  if ($code!="200") {
    echo "<script>alert('$code - $message'); window.history.go(-1);</script>";
  }
  }

  include 'connect.php';
  $admin = $mysqli->query("SELECT * FROM tpasien WHERE nik='$nik'");
  $n = mysqli_fetch_array($admin);
  $norm = $n['nomorrm'];

?>

<!DOCTYPE html>
<head>
<?php
  require '../function.php';
  require 'headertop.php';
  include 'lteheader.php';
  $fullname = $_SESSION['namalengkap'];
  ?>
</head>

<body id="page-top">
  <div id="wrapper">
<?php
require 'menu.php';
?>
<div id="content-wrapper" class="d-flex flex-column">
<div id="content">
<?php
require 'navbar.php';
include 'fungsi.php';
?>

<!-- Main content -->
<br>
<h3 style="text-align: center;">DETAIL DATA NO. RUJUKAN &nbsp;&nbsp; |&nbsp;&nbsp;<b><?php echo "{$uhuy->rujukan->noKunjungan}";?></b></h3>
<hr>
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-newspaper text-white"></i>
                  &nbsp;&nbsp;DATA RUJUK
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <dl class="row">
                  <dt class="col-sm-4">Asal Faskes</dt>
                  <dd class="col-sm-8"><?php echo $asalfaskes;?></dd>
                  <dt class="col-sm-4">No. Kunjungan</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->noKunjungan}";?></dd>
                  <dt class="col-sm-4">Tanggal Kunjungan</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->tglKunjungan}";?></dd>
                  <dt class="col-sm-4">Kode Provider Perujuk</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->provPerujuk->kode}";?><dd>
                  <dt class="col-sm-4">Nama Provider Perujuk</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->provPerujuk->nama}";?></dd>
                  <dt class="col-sm-4">Kode Provider Umum</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->peserta->provUmum->kdProvider}";?></dd>
                  <dt class="col-sm-4">Nama Provider Umum</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->peserta->provUmum->nmProvider}";?></dd>
                  <dt class="col-sm-4">Kode Diagnosa</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->diagnosa->kode}";?></dd>
                  <dt class="col-sm-4">Nama Diagnosa</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->diagnosa->nama}";?></dd>
                  <dt class="col-sm-4">Keluhan</dt>
                  <dd class="col-sm-8"><?php echo $keluhan;?></dd>
                  <dt class="col-sm-4">Poli Rujukan</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->poliRujukan->kode} - {$uhuy->rujukan->poliRujukan->nama}";?></dd>
                  <dt class="col-sm-4">Jenis pelayanan</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->pelayanan->nama}";?></dd>
                  </dd>
                </dl>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-newspaper text-white"></i>
                  &nbsp;&nbsp;DATA PESERTA
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <dl class="row">
                  <dt class="col-sm-4">No. Kartu BPJS</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->peserta->noKartu}";?></dd>
                  <dt class="col-sm-4">NIK Peserta</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->peserta->nik}";?></dd>
                  <dt class="col-sm-4">Nama Peserta</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->peserta->nama}";?></dd>
                  <dt class="col-sm-4">Pisa</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->peserta->pisa}";?></dd>
                  <dt class="col-sm-4">Jenis Kelamin</dt>
                  <dd class="col-sm-8"><?php echo $jenis_kelamin;?></dd>
                  <dt class="col-sm-4">No. MR</dt>
                  <dd class="col-sm-8"><?php echo $noMR;?></dd>
                  <dt class="col-sm-4">No. Telp</dt>
                  <dd class="col-sm-8"><?php echo $notelp;?></dd>
                  <dt class="col-sm-4">Tanggal Lahir</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->peserta->tglLahir}";?></dd>
                  <dt class="col-sm-4">Status Peserta</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->peserta->statusPeserta->keterangan}";?></dd>
                  <dt class="col-sm-4">Jenis Peserta</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->peserta->jenisPeserta->keterangan}";?><dd>
                  <dt class="col-sm-4">Hak Kelas</dt>
                  <dd class="col-sm-8"><?php echo "{$uhuy->rujukan->peserta->hakKelas->keterangan}";?></dd>
                  <dt class="col-sm-4">No. RM RSK MATA</dt>
                  <dd class="col-sm-8"><?php echo "$norm";?></dd>
                  </dd>
                </dl>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>
        <div>
            <form role="form" method="post" action="create_sep.php">
            <input type="hidden" class="form-control" name="noKartu" value="<?php echo $noKartu;?>">
            <input type="hidden" class="form-control" name="nik" value="<?php echo $nik;?>">
            <input type="hidden" class="form-control" name="asalrujukan" value="<?php echo $asalrujukan?>">
            <input type="hidden" class="form-control" name="tglrujukan" value="<?php echo $tglrujukan;?>">
            <input type="hidden" class="form-control" name="norujukan" value="<?php echo $norujukan;?>">
            <input type="hidden" class="form-control" name="asalfaskes" value="<?php echo $asalfaskes;?>">
            <input type="hidden" class="form-control" name="kdfaskesrujukan" value="<?php echo $kdfaskesrujukan;?>">
            <input type="hidden" class="form-control" name="nmfaskesrujukan" value="<?php echo $nmfaskesrujukan;?>">
            <input type="hidden" class="form-control" name="politujuan" value="<?php echo $politujuan;?>">
            <input type="hidden" class="form-control" name="jenispelayanan" value="<?php echo $jenispelayanan;?>">
            <input type="hidden" class="form-control" name="kddiagawal" value="<?php echo $kddiagawal;?>">
            <input type="hidden" class="form-control" name="notelp" value="<?php echo $notelp;?>">
            <input type="hidden" class="form-control" name="kelasrawathak" value="<?php echo $kelasrawathak;?>">
            <?php if (!empty($norm)) { ?>
            <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-fax"></i>&nbsp;&nbsp; INSERT SEP</button>
            <?php } else { ?>
              <font color='red'><i>Registrasi Peserta Untuk Melanjutkan Insert SEP</i></font>
	      <form method="POST">
                <input type="hidden" name="namapasien" value="<?php echo ucwords($nama);?>">
                <input type="hidden" name="tanggallahir" value="<?php echo "{$uhuy->rujukan->peserta->tglLahir}";?>">
                <input type="hidden" name="jeniskelamin" value="<?php echo "{$uhuy->rujukan->peserta->sex}";?>">
                <input type="hidden" name="nik" value="<?php echo $nik;?>">
                <input type="hidden" name="nokartu" value="<?php echo $noKartu;?>">
                <input type="hidden" name="namapetugas" value="<?php echo $fullname;?>">
                <div style='text-align:center'>
                <button class="btn btn-primary" name="simpanregistrasibpjs" type="submit">Registrasi</button>
                </div>
             </form>
            <?php } ?>
            </form>
        </div>
    </div>
</section>
<?php require '../template/footer.php';?>
</div></div><div>
<?php 
include 'script.php';
?>
</body>
</html>