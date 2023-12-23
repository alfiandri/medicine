<?php
require_once '../../variable.php';
require_once '../../curl.php';
require_once '../../decrypt.php';

// API Endpoint URL
$apiUrl = "$baseUrl/$serviceNameAntrean/ref/dokter";

$response = get($apiUrl, $consId, $secretKey, $userKeyAntrean);

// Initialize an empty HTML string
$html = '';
$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);

// Check if metadata->code is equal to 1
if (isset($jsonData['metadata']['code']) && $jsonData['metadata']['code'] == 1) {
    // The API response is successful, you can access the response data
    $responseData = $jsonData['response'];
    $key = $consId . $secretKey . $timeStamp;
    $responseData = decrypt($key, $responseData);
    $listData = json_decode($responseData, true);

    // Generate HTML for the list of items
    $html .= '<ul>';
    foreach ($listData as $item) {
        $html .= '<li>';
        $html .= 'Nama Dokter: ' . $item['namadokter'] . '<br>';
        $html .= 'Kode Dokter: ' . $item['kodedokter'] . '<br>';
        $html .= '</li>';
    }
    $html .= '</ul>';
} else {
    $html .= 'Error fetching data from the API.';
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Referensi Dokter Response</title>
</head>

<body>
    <!-- Display the generated HTML here -->
    <?php echo $html; ?>
</body>

</html>