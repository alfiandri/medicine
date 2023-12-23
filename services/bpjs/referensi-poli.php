<?php
require_once '../../variable.php';
require_once '../../curl.php';
require_once '../../decrypt.php';

// API Endpoint URL
$apiUrl = "$baseUrl/$serviceNameAntrean/ref/poli";

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
    $html .= '<table border="1" cellspacing="0" cellpadding="1">
    <tr>
        <th>No</th>
        <th>Poliklinik</th>
        <th>Subspesialis</th>
        <th>Kode Subspesialis</th>
        <th>Kode Poli</th>
    </tr>';
    foreach ($listData as $key => $item) {
        $html .= '<tr>';
        $html .= '<td>' . ($key + 1) . '</td>';
        $html .= '<td>' . $item['nmpoli'] . '</td>';
        $html .= '<td>' . $item['nmsubspesialis'] . '</td>';
        $html .= '<td>' . $item['kdsubspesialis'] . '</td>';
        $html .= '<td>' . $item['kdpoli'] . '</td>';
        $html .= '</tr>';
    }
    $html .= '</table>';
} else {
    $html .= 'Error fetching data from the API.';
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Referensi Poli Response</title>
</head>

<body>
    <!-- Display the generated HTML here -->
    <?php echo $html; ?>
</body>

</html>