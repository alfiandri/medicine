<?php
include 'connect.php';
include 'fungsi.php';
require 'function.php';
require_once 'vendor/autoload.php';
$curl = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
 );
$data = array("request"=>
            array("t_sep"=>array("noSep"=>"0201R0511023V000931",
                                "user"=>"Agus",
                            )
                    ) 
            );
$json = json_encode($data);
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/SEP/2.0/delete',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'DELETE',
    CURLOPT_POSTFIELDS => $json,
    CURLOPT_HTTPHEADER => $headers,
));

$response = curl_exec($curl);
curl_close($curl);
echo $response;