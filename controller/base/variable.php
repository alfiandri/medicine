<?php

require_once 'func.php';

$baseUrl = getSetting('base_url', 'setting_antrean');
$serviceNameAntrean = getSetting('service_name', 'setting_antrean');
$consId = getSetting('cons_id', 'setting_antrean');
$secretKey = getSetting('secret_key', 'setting_antrean');
$userKeyAntrean = getSetting('user_key', 'setting_antrean');

$baseUrlAplicare = getSetting('base_url', 'setting_aplicare');
$serviceNameAplicare = getSetting('service_name', 'setting_aplicare');
$consIdAplicare  = getSetting('cons_id', 'setting_aplicare');
$secretKeyAplicare  = getSetting('secret_key', 'setting_aplicare');
$userKeyAplicare = getSetting('user_key', 'setting_aplicare');

$baseUrlIcare = getSetting('base_url', 'setting_icare');
$serviceNameIcare = getSetting('service_name', 'setting_icare');
$consIdIcare  = getSetting('cons_id', 'setting_icare');
$secretKeyIcare  = getSetting('secret_key', 'setting_icare');
$userKeyIcare = getSetting('user_key', 'setting_icare');

$baseUrlVclaim = getSetting('base_url', 'setting_vclaim');
$serviceNameVclaim = getSetting('service_name', 'setting_vclaim');
$consIdVclaim  = getSetting('cons_id', 'setting_vclaim');
$secretKeyVclaim  = getSetting('secret_key', 'setting_vclaim');
$userKeyVclaim = getSetting('user_key', 'setting_vclaim');

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
