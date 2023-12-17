<?php
include '../db/connect.php';
include 'fungsi.php';
require 'function.php';
require_once 'vendor/autoload.php';
date_default_timezone_set('Asia/Jakarta');

$waktu = date('Y-m-d');
$nokartu = $_POST['noKartu'];
$ppkPelayanan = "0038R060";
$tglSep = $waktu;
$jnsPelayanan = $_POST['jnsPelayanan'];
$klsRawatHak = $_POST['klsRawatHak'];
$klsRawatNaik = $_POST['klsRawatNaik'];
$pembiayaan = $_POST['pembiayaan'];
$penanggungJawab = $_POST['penanggungJawab'];
$noMR = $_POST['noMR'];
$asalRujukan = $_POST['asalRujukan'];
$tglRujukan = $_POST['tglRujukan'];
$noRujukan = $_POST['noRujukan'];
$ppkRujukan = $_POST['ppkRujukan'];
$catatan = $_POST['catatan'];
$diagAwal = $_POST['diagAwal'];
$poli = $_POST['poli'];
$eksekutif = $_POST['eksekutif'];
$cob = $_POST['cob'];
$katarak = $_POST['katarak'];
$jaminan = $_POST['jaminan'];
$noLP = $_POST['noLP'];
$tglKejadian = $_POST['tglKejadian'];
$keterangan = $_POST['keterangan'];
$suplesi = $_POST['suplesi'];
$noSepSuplesi = $_POST['noSepSuplesi'];
$kdPropinsi = $_POST['kdPropinsi'];
$kdKabupaten = $_POST['kdKabupaten'];
$kdKecamatan = $_POST['kdKecamatan'];
$tujuanKunj = $_POST['tujuanKunj'];
$flagProcedure = $_POST['flagProcedure'];
$kdPenunjang = $_POST['kdPenunjang'];
$assesmentPel = $_POST['assesmentPel'];
$noSurat = $_POST['noSurat'];
$kodeDPJP = $_POST['kodeDPJP'];
$dpjpLayan = $_POST['dpjpLayan'];
$noTelp = $_POST['noTelp'];
$user = $_POST['user'];

$curl = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
 );
$data = array("request"=>
        array("t_sep"=>array("noKartu"=> $noKartu,
                                "tglSep"=> $tglSep,
                                "ppkPelayanan"=>$ppkPelayanan,
                                "jnsPelayanan"=>$jnsPelayanan,
                                "klsRawat"=>array("klsRawatHak"=>$klsRawatHak,
                                                "klsRawatNaik"=>$klsRawatNaik,
                                                "pembiayaan"=>$pembiayaan,
                                                "penanggungJawab"=>$penanggungJawab
                                                ),
                                "noMR"=>$noMR,
                                "rujukan"=>array("asalRujukan"=>$asalRujukan,
                                                "tglRujukan"=>$tglRujukan,
                                                "noRujukan"=>$noRujukan,
                                                "ppkRujukan"=>$ppkRujukan
                                                ),
                                "catatan"=>$catatan,
                                "diagAwal"=>$diagAwal,
                                "poli"=>array("tujuan"=>$tujuan,
                                                "eksekutif"=>$eksekutif
                                        ),
                                "cob"=>array("cob"=>$cob),
                                "katarak"=>array("katarak"=>$katarak),
                                "jaminan"=>array("lakaLantas"=>$lakaLantas,
                                "noLP"=>$noLP,
                                "penjamin"=>array("tglKejadian"=>$tglKejadian,
                                "keterangan"=>$keterangan,
                                "suplesi"=>array("suplesi"=>$suplesi,
                                        "noSepSuplesi"=>$noSepSuplesi,
                                        "lokasiLaka"=>array( "kdPropinsi"=>$kdPropinsi,
                                                                "kdKabupaten"=>$kdKabupaten,
                                                                "kdKecamatan"=>$kdKecamatan
                                                                )
                                                )   
                                                )
                                        ),
                                "tujuanKunj"=>$tujuanKunj,
                                "flagProcedure"=>$flagProcedure,
                                "kdPenunjang"=>$kdPenunjang,
                                "assesmentPel"=>$assesmentPel,
                                "skdp"=>array( "noSurat"=>$noSurat,
                                                "kodeDPJP"=>$kodeDPJP
                                        ),
                                "dpjpLayan"=>$dpjpLayan,
                                "noTelp"=>$noTelp,
                                "user"=>$user
                                ),
                        
                ) 
        );
$json = json_encode($data);
$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
"user_key: " .$userkey ." ",
"Content-Type:application/json"
);
curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/SEP/2.0/insert");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 3);
curl_setopt($ch, CURLOPT_HTTPGET, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$string = curl_exec($ch);
$err = curl_error($ch);
curl_close($ch);
$string = curl_exec($ch);
$err = curl_error($ch);
curl_close($ch);
$key = $consid . $secretKey . $tStamp;
$string = json_decode($string);
$message = $string->metaData->message;
$code = $string->metaData->code;
$dtdecrypt = $string->response;
if ($code!="200") {
        $response = [
                'success' => false,
                'message' => $message
        ];
header('Content-Type: application/json');
echo json_encode($response);
}