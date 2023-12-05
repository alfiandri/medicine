<?php

require_once 'function.php';

$baseUrl = getSetting('base_url');
$serviceNameAntrean = getSetting('service_name');
$consId = getSetting('cons_id');
$secretKey = getSetting('secret_key');
$userKeyAntrean = getSetting('user_key');

function createSignature($consId, $secretKey)
{ // Computes the timestamp
    date_default_timezone_set('UTC');
    $tStamp = strval(time() - strtotime('1970-01-01 00:00:00'));
    // Computes the signature by hashing the salt with the secret key as the key
    $signature = hash_hmac('sha256', $consId . "&" . $tStamp, $secretKey, true);

    // base64 encode�
    $encodedSignature = base64_encode($signature);

    // urlencode�
    // $encodedSignature = urlencode($encodedSignature);

    // echo "X-cons-id: " . $consId . " ";
    // echo "X-timestamp: " . $tStamp . " ";
    // echo "X-signature: " . $encodedSignature;

    return [
        $tStamp,
        $encodedSignature,
    ];
}
