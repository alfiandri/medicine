<?php
require_once '../../variable.php';
require_once '../../curl.php';
require_once '../../decrypt.php';

// API Endpoint URL
$kodePoli = 'ANA';
$tanggal = '2023-09-18';
$apiUrl = "$baseUrl/$serviceNameAntrean/jadwaldokter/kodepoli/$kodePoli/tanggal/$tanggal";

$response = get($apiUrl, $consId, $secretKey, $userKeyAntrean);

// Initialize an empty HTML string
$html = '';
$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);

// Check if metadata->code is equal to 1
if (isset($jsonData['metadata']['code'])) {
    if ($jsonData['metadata']['code'] == 204) {
        $html .= 'Tidak ada data';
    }
    if ($jsonData['metadata']['code'] == 200) {
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
    }
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