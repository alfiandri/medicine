<?php
include '../db/connect.php';
$sql = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM `setting_vclaim`"));
$base_url = $sql['base_url'];
$service = $sql['service_name'];
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d');
$consid = $sql['cons_id'];
$secretKey =$sql['secret_key'];
$userkey = $sql['user_key'];
date_default_timezone_set('UTC');
$tStamp = strval(time()-strtotime('1970-01-01 00:00:00'));
$signature = hash_hmac('sha256', $consid."&".$tStamp, $secretKey, true);
$encodedSignature = base64_encode($signature);
