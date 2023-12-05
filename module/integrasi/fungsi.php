<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');
$consid = "28319";
$secretKey = "8bNCECEF94";
$userkey = "41d49eb595770aaaaa1fa55ed619df3a";
date_default_timezone_set('UTC');
$tStamp = strval(time()-strtotime('1970-01-01 00:00:00'));
$signature = hash_hmac('sha256', $consid."&".$tStamp, $secretKey, true);
$encodedSignature = base64_encode($signature);
?>