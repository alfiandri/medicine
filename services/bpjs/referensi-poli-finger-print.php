<?php
require_once '../../variable.php';
require_once '../../curl.php';
require_once '../../decrypt.php';

// API Endpoint URL
$apiUrl = "$baseUrl/$serviceNameAntrean/ref/poli/fp";

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
   echo $responseData = decrypt($key, $responseData);
   return;
    $listData = json_decode($responseData, true);

    // Generate HTML for the list of items
    $html .= '<ul>';
    foreach ($listData as $item) {
        $html .= '<li>';
        $html .= 'Kode Sub Spesialis: ' . $item['kodesubspesialis'] . '<br>';
        $html .= 'Nama Sub Spesialis: ' . $item['namasubspesialis'] . '<br>';
        $html .= 'Kode Poli: ' . $item['kodepoli'] . '<br>';
        $html .= 'Nama Poli: ' . $item['namapoli'] . '<br>';
        $html .= '</li><br>';
    }
    $html .= '</ul>';
} else {
    $html .= 'Error fetching data from the API.';
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Referensi Poli Finger Print Response</title>
</head>

<body>
    <!-- Display the generated HTML here -->
    <?php echo $html; ?>
</body>

</html>