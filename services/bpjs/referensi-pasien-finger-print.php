<?php
require_once '../../variable.php';
require_once '../../curl.php';
require_once '../../decrypt.php';

// API Endpoint URL
// $nik = '1271071501980003';
$noIdentitas = '0000127295921';
$apiUrl = "$baseUrl/$serviceNameAntrean/ref/pasien/fp/identitas/noka/noidentitas/$noIdentitas";

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
    $item = decrypt($key, $responseData);
    $item = json_decode($item, true);

    // Generate HTML for the list of items
    $html .= '<ul>';
    $html .= '<li>';
    $html .= 'Nomor Kartu: ' . $item['nomorkartu'] . '<br>';
    $html .= 'NIK: ' . $item['nik'] . '<br>';
    $html .= 'Tgl Lahir: ' . $item['tgllahir'] . '<br>';
    $html .= 'Daftar Fp: ' . $item['daftarfp'] . '<br>';
    $html .= '</li>';
    $html .= '</ul>';
} else {
    $html .= 'Error fetching data from the API.';
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Referensi Pasien Finger Print Response</title>
</head>

<body>
    <!-- Display the generated HTML here -->
    <?php echo $html; ?>
</body>

</html>