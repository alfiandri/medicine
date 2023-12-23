<?php
require_once '../../variable.php';
require_once '../../curl.php';
require_once '../../decrypt.php';

// API Endpoint URL
$bulan = '09';
$tahun = '2023';
$waktu = 'rs';
$apiUrl = "$baseUrl/$serviceNameAntrean/dashboard/waktutunggu/bulan/$bulan/tahun/$tahun/waktu/$waktu";

$response = get($apiUrl, $consId, $secretKey, $userKeyAntrean);

// Initialize an empty HTML string
$html = '';
$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);

echo $response[0];
die;

// Check if metadata->code is equal to 1
if (isset($jsonData['metadata']['code'])) {
    if ($jsonData['metadata']['code'] == 204) {
        $html .= 'Tidak ada data';
    }
    if ($jsonData['metadata']['code'] == 200) {
        // The API response is successful, you can access the response data
        $responseData = $jsonData['response'];
        $listData = $responseData['list'];

        // Generate HTML for the list of items
        $html .= '<ul>';
        foreach ($listData as $item) {
            $html .= '<li>';
            $html .= 'kdppk: ' . $item['kdppk'] . '<br>';
            $html .= 'waktu_task1: ' . $item['waktu_task1'] . '<br>';
            $html .= 'avg_waktu_task4: ' . $item['avg_waktu_task4'] . '<br>';
            $html .= 'jumlah_antrean: ' . $item['jumlah_antrean'] . '<br>';
            $html .= 'avg_waktu_task3: ' . $item['avg_waktu_task3'] . '<br>';
            $html .= 'namapoli: ' . $item['namapoli'] . '<br>';
            $html .= 'avg_waktu_task6: ' . $item['avg_waktu_task6'] . '<br>';
            $html .= 'avg_waktu_task5: ' . $item['avg_waktu_task5'] . '<br>';
            $html .= 'nmppk: ' . $item['nmppk'] . '<br>';
            $html .= 'avg_waktu_task2: ' . $item['avg_waktu_task2'] . '<br>';
            $html .= 'avg_waktu_task1: ' . $item['avg_waktu_task1'] . '<br>';
            $html .= 'kodepoli: ' . $item['kodepoli'] . '<br>';
            $html .= 'waktu_task5: ' . $item['waktu_task5'] . '<br>';
            $html .= 'waktu_task4: ' . $item['waktu_task4'] . '<br>';
            $html .= 'waktu_task3: ' . $item['waktu_task3'] . '<br>';
            $html .= 'insertdate: ' . $item['insertdate'] . '<br>';
            $html .= 'tanggal: ' . $item['tanggal'] . '<br>';
            $html .= 'waktu_task2: ' . $item['waktu_task2'] . '<br>';
            $html .= 'waktu_task6: ' . $item['waktu_task6'] . '<br>';
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
    <title>Dashboard Per Tanggal Response</title>
</head>

<body>
    <!-- Display the generated HTML here -->
    <?php echo $html; ?>
</body>

</html>