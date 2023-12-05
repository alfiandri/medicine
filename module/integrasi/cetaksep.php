<?php
error_reporting(E_ALL&~E_NOTICE);
include 'fungsi.php';
require_once 'vendor/autoload.php';
if (!empty($_GET['kode'])) {
    $idsep = $_GET['kode'];
}

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/SEP/".$idsep."");
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
 if ($string->metaData->code=="201") {
    echo "<script>alert('$message'); URL='data_sep.php';</script>";
 }


function stringDecrypt($key, $dtdecrypt){
    
    $encrypt_method = 'AES-256-CBC';

    // hash
    $key_hash = hex2bin(hash('sha256', $key));

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
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

if ($uhuy->peserta->kelamin=="L") {
    $jenis_kelamin = "Pria";
    }
if ($uhuy->peserta->kelamin=="P") {
    $jenis_kelamin = "Wanita";
    }

?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <title>Surat Elegebilitas Pasien</title>
  <link id="openElement" rel="stylesheet" type="text/css" href="WEFiles/Css/v02/openElement.css?v=50491148400" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="sep.css?v=50491148400" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/ie7.css?v=50491148400" />
  <![endif]-->
  <script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", 'cetaksep.php');
    }
  </script>
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"sep","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"","RenderMode":"Export","PageAssociatePath":"sep","EditorTexts":null};
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/migrate.js?v=50491148400"></script>
  <script type="text/javascript" src="WEFiles/Client/Common/oe.min.js?v=50491148400"></script>
 </head>
<!--koneksi-->
 <body class="">
<?php
    $noSep = $_GET['kode'];
    include 'connect.php';
    $admin = $mysqli->query("SELECT * FROM t_sep WHERE noSep='$noSep'");
    $n = mysqli_fetch_array($admin);
    $asalRujukan = $n['asalRujukan'];
    if ($asalRujukan=="1") {
        $asalRujukan = "Asal Faskes Tk. I";
    } 
    if ($asalRujukan=="2") {
        $asalRujukan = "Asal Faskes Tk. II";
    }
    $nmperujuk = $n['nmppkRujukan'];
    $cetak = $n['cetak'];
    $jmlcetak = $cetak+1;
    $upcetak = $mysqli->query("UPDATE t_sep SET cetak='$jmlcetak' WHERE noSep='$noSep'");
    header("Refresh: 5; URL=data_sep.php");
?>
  <form id="XForm" method="post" action="#"></form>
  <div id="XBody" class="BaseDiv RWidth OEPageXbody OESK_XBody_Default" style="z-index:0">
   <div class="OESZ OESZ_DivContent OESZG_XBody">
    <div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTAbs">
     <div id="WE934b3fc68c" class="BaseDiv RBoth OEWECadre OESK_WECadre_f51b18d5" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WE934b3fc68c">
       <div class="OESZ OESZ_Top OESZG_WE934b3fc68c"></div>
       <div class="OESZ OESZ_Content OESZG_WE934b3fc68c"></div>
       <div class="OESZ OESZ_Bottom OESZG_WE934b3fc68c"></div>
      </div>
     </div>
     <div id="WEb6841c9295" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:2">
      <div class="OESZ OESZ_DivContent OESZG_WEb6841c9295">
       <div class="OESZ OESZ_Top OESZG_WEb6841c9295"></div>
       <div class="OESZ OESZ_Content OESZG_WEb6841c9295"></div>
       <div class="OESZ OESZ_Bottom OESZG_WEb6841c9295"></div>
      </div>
     </div>
     <div id="WE10bc804188" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
      <div class="OESZ OESZ_DivContent OESZG_WE10bc804188">
       <div class="OESZ OESZ_Top OESZG_WE10bc804188"></div>
       <div class="OESZ OESZ_Content OESZG_WE10bc804188"></div>
       <div class="OESZ OESZ_Bottom OESZG_WE10bc804188"></div>
      </div>
     </div>
     <div id="WE8f59f91f58" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:5">
      <div class="OESZ OESZ_DivContent OESZG_WE8f59f91f58">
       <img src="WEFiles/Image/WEImage/logobpjs-WE8f59f91f58.png" class="OESZ OESZ_Img OESZG_WE8f59f91f58" alt="" />
      </div>
     </div>
     <div id="WEd8046cd3bc" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:6">
      <div class="OESZ OESZ_DivContent OESZG_WEd8046cd3bc">
       <span class="ContentBox"><b><span style="font-family:Arial, Helvetica, sans-serif;font-size:22px;">SURAT ELEGEBILITAS&nbsp;PESERTA</span></b><br /><span style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">UPT RUMAH&nbsp;SAKIT KHUSUS MATA PEMROVSU</span><br /></span>
      </div>
     </div>
     <div id="WEee18a7e6b4" class="BaseDiv RWidth OEWETable OESK_WETable_Default" style="z-index:7">
      <div class="OESZ OESZ_DivContent OESZG_WEee18a7e6b4">
       <table class="OESZ OESZ_TableMain OESZG_WEee18a7e6b4">
        <tr class="OESZ OESZ_Row_0 OESZG_WEee18a7e6b4">
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">No. SEP<br /></span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp; :<br /></span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox"><?php echo $uhuy->noSep;?></span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_1 OESZG_WEee18a7e6b4">
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">Tgl. SEP</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp; :</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox"><?php echo $uhuy->tglSep;?></span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_2 OESZG_WEee18a7e6b4">
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">No. Kartu</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp; :</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox"><?php echo $uhuy->peserta->noKartu;?></span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_3 OESZG_WEee18a7e6b4">
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">Nama Peserta</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp; :</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox"><?php echo $uhuy->peserta->nama;?></span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_4 OESZG_WEee18a7e6b4">
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">Tgl. Lahir</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp; :</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox"><?php echo $uhuy->peserta->tglLahir;?></span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_5 OESZG_WEee18a7e6b4">
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">Jenis Kelamin</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp; :</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox"><?php echo $jenis_kelamin;?></span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_6 OESZG_WEee18a7e6b4">
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">Poli Tujuan</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp; :</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox"><?php echo $uhuy->poli;?></span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_7 OESZG_WEee18a7e6b4">
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox"><?php echo $asalRujukan;?></span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp; :</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox"><?php echo $nmperujuk;?></span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_8 OESZG_WEee18a7e6b4">
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">Diagnosa Awal<br /></span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp; :</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox"><?php echo $uhuy->diagnosa;?></span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_9 OESZG_WEee18a7e6b4">
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">Catatan</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp; :</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox"><?php echo $uhuy->catatan;?></span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_10 OESZG_WEee18a7e6b4">
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">&nbsp;</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp;</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox">&nbsp;</span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_11 OESZG_WEee18a7e6b4">
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">&nbsp;</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp;</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WEee18a7e6b4 OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox">&nbsp;</span>
         </td>
        </tr>
       </table>
      </div>
     </div>
     <div id="WE132b017e3b" class="BaseDiv RWidth OEWETable OESK_WETable_Default" style="z-index:8">
      <div class="OESZ OESZ_DivContent OESZG_WE132b017e3b">
       <table class="OESZ OESZ_TableMain OESZG_WE132b017e3b">
        <tr class="OESZ OESZ_Row_0 OESZG_WE132b017e3b">
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">Peserta</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp; :</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox"><?php echo $uhuy->peserta->jnsPeserta;?></span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_1 OESZG_WE132b017e3b">
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">&nbsp;</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp;</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox">&nbsp;</span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_2 OESZG_WE132b017e3b">
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">COB</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp; :</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox"><?php echo $uhuy->cob;?></span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_3 OESZG_WE132b017e3b">
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">Jenis Rawat</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp; :</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox"><?php echo $uhuy->jnsPelayanan;?></span>
         </td>
        </tr>
        <tr class="OESZ OESZ_Row_4 OESZG_WE132b017e3b">
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_0 WEEdTableCell">
          <span class="MaxBox">Kelas Rawat</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_1 WEEdTableCell">
          <span class="MaxBox">&nbsp; :</span>
         </td>
         <td class="OESZ OESZ_TableCell OESZG_WE132b017e3b OESZ_Column_2 WEEdTableCell">
          <span class="MaxBox"><?php echo $uhuy->kelasRawat;?></span>
         </td>
        </tr>
       </table>
      </div>
     </div>
     <div id="WE826d01d897" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:9">
      <div class="OESZ OESZ_DivContent OESZG_WE826d01d897">
       <span class="ContentBox">Pasien/<br />Keluarga Pasien<br /></span>
      </div>
     </div>
     <div id="WE2a69f5cccd" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:10">
      <div class="OESZ OESZ_DivContent OESZG_WE2a69f5cccd">
       <span class="ContentBox">Petugas<br />BPJS&nbsp;Kesehatan<br /></span>
      </div>
     </div>
     <div id="WE766166c0e5" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:13">
      <div class="OESZ OESZ_DivContent OESZG_WE766166c0e5">
       <span class="ContentBox"><span style="font-size:13px;">*Saya menyetujui BPJS&nbsp;Kesehatan menggunakan informasi medis pasien jika diperlukan<br />*SEP bukan sebagai bukti penjaminan peserta<br /></span></span>
      </div>
     </div>
     <div id="WE5b729a156c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
      <div class="OESZ OESZ_DivContent OESZG_WE5b729a156c">
       <span class="OESZ OESZ_Text OESZG_WE5b729a156c ContentBox"><span style="font-size:14px;">Cetakan ke &nbsp;<?php echo $jmlcetak;?> - <?php date_default_timezone_set('Asia/Jakarta'); echo date("d/m/Y H:i:s");?></span></span>
      </div>
     </div>
     <div id="WE62bdac7b38" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:11">
      <div class="OESZ OESZ_DivContent OESZG_WE62bdac7b38">
       <div class="OESZ OESZ_Deco1 OESZG_WE62bdac7b38" style="position:absolute"></div>
       <div class="OESZ OESZ_Deco2 OESZG_WE62bdac7b38" style="position:absolute"></div>
       <div class="OESZ OESZ_Deco3 OESZG_WE62bdac7b38" style="position:absolute"></div>
      </div>
     </div>
     <div id="WE87dd79d264" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:12">
      <div class="OESZ OESZ_DivContent OESZG_WE87dd79d264">
       <div class="OESZ OESZ_Deco1 OESZG_WE87dd79d264" style="position:absolute"></div>
       <div class="OESZ OESZ_Deco2 OESZG_WE87dd79d264" style="position:absolute"></div>
       <div class="OESZ OESZ_Deco3 OESZG_WE87dd79d264" style="position:absolute"></div>
      </div>
     </div>
     <div id="WEbbe8ad7992" class="BaseDiv RBoth OEWECadre OESK_WECadre_f51b18d5" style="z-index:4">
      <div class="OESZ OESZ_DivContent OESZG_WEbbe8ad7992">
       <div class="OESZ OESZ_Top OESZG_WEbbe8ad7992"></div>
       <div class="OESZ OESZ_Content OESZG_WEbbe8ad7992"></div>
       <div class="OESZ OESZ_Bottom OESZG_WEbbe8ad7992"></div>
      </div>
     </div>
    </div>
    <div class="OESZ OESZ_XBodyFooter OESZG_XBody OECT OECT_Footer OECTAbs"></div>
   </div>
  </div>
 </body>
 <script>
    window.print();
 </script>
</html>