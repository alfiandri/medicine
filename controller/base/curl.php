<?php

function get($apiUrl, $consId, $secretKey, $userKey)
{
    [$timeStamp, $encodedSignature] = createSignature($consId, $secretKey);

    // Headers
    $headers = [
        'x-cons-id:' . $consId,
        'x-timestamp:' . $timeStamp,
        'x-signature:' . $encodedSignature,
        'user_key:' . $userKey,
        'Content-Type:application/json'
    ];

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Execute cURL session and store the response
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
        die;
    }

    // Close cURL session
    curl_close($ch);

    return [$response, $timeStamp];
}

function post($apiUrl, $data, $consId, $secretKey, $userKey)
{
    [$timeStamp, $encodedSignature] = createSignature($consId, $secretKey);

    // Headers
    $headers = [
        'Content-Type: application/json',
        'x-cons-id:' . $consId,
        'x-timestamp:' . $timeStamp,
        'x-signature:' . $encodedSignature,
        'user_key:' . $userKey,
    ];

    // Convert the data to JSON format
    $jsonData = json_encode($data);

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Execute cURL session and store the response
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
        die;
    }

    // Close cURL session
    curl_close($ch);

    return [$response, $timeStamp];
}
