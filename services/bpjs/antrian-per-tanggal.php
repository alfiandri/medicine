<?php
require_once '../../variable.php';
require_once '../../curl.php';
require_once '../../decrypt.php';

// API Endpoint URL
$tanggal = '2023-09-18';
$apiUrl = "$baseUrl/$serviceNameAntrean/antrean/pendaftaran/tanggal/$tanggal";

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
            $html .= 'kodebooking: ' . $item['kodebooking'] . '<br>';
            $html .= 'tanggal: ' . $item['tanggal'] . '<br>';
            $html .= 'kodepoli: ' . $item['kodepoli'] . '<br>';
            $html .= 'kodedokter: ' . $item['kodedokter'] . '<br>';
            $html .= 'jampraktek: ' . $item['jampraktek'] . '<br>';
            $html .= 'nik: ' . $item['nik'] . '<br>';
            $html .= 'nokapst: ' . $item['nokapst'] . '<br>';
            $html .= 'nohp: ' . $item['nohp'] . '<br>';
            $html .= 'norekammedis: ' . $item['norekammedis'] . '<br>';
            $html .= 'jeniskunjungan: ' . $item['jeniskunjungan'] . '<br>';
            $html .= 'nomorreferensi: ' . $item['nomorreferensi'] . '<br>';
            $html .= 'sumberdata: ' . $item['sumberdata'] . '<br>';
            $html .= 'ispeserta: ' . $item['ispeserta'] . '<br>';
            $html .= 'noantrean: ' . $item['noantrean'] . '<br>';
            $html .= 'estimasidilayani: ' . $item['estimasidilayani'] . '<br>';
            $html .= 'createdtime: ' . $item['createdtime'] . '<br>';
            $html .= 'status: ' . $item['status'] . '<br>';
            $html .= '</li><br>';
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
    <title>Antrean Per Tanggal Response</title>
</head>

<body>
    <!-- Display the generated HTML here -->
    <?php echo $html; ?>
</body>

</html>