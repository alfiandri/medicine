<?php
$html = '';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process the form submission

    // Include your post function and other necessary functions
    require_once '../../variable.php';
    require_once '../../curl.php';
    require_once '../../decrypt.php';

    $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/add";

    // Add other form fields based on your $data array
    $data = [
        "kodebooking" => $_POST["kodebooking"],
        "jenispasien" => $_POST["jenispasien"],
        "nomorkartu" => $_POST["nomorkartu"],
        "nik" => $_POST["nik"],
        "nohp" => $_POST["nohp"],
        "kodepoli" => $_POST["kodepoli"],
        "namapoli" => $_POST["namapoli"],
        "pasienbaru" => $_POST["pasienbaru"],
        "norm" => $_POST["norm"],
        "tanggalperiksa" => $_POST['tanggalperiksa'],
        "kodedokter" => $_POST["kodedokter"],
        "namadokter" => $_POST["namadokter"],
        "jampraktek" => $_POST["jampraktek"],
        "jeniskunjungan" => $_POST["jeniskunjungan"],
        "nomorreferensi" => $_POST["nomorreferensi"],
        "nomorantrean" => $_POST["nomorantrean"],
        "angkaantrean" => $_POST["angkaantrean"],
        "estimasidilayani" => strtotime($_POST["estimasidilayani"]),
        "sisakuotajkn" => $_POST["sisakuotajkn"],
        "kuotajkn" => $_POST["kuotajkn"],
        "sisakuotanonjkn" => $_POST["sisakuotanonjkn"],
        "kuotanonjkn" => $_POST["kuotanonjkn"],
        "keterangan" => $_POST["keterangan"],
    ];

    // Add your post function and other necessary variables
    $response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

    // Handle the API response
    $html = '';
    $timeStamp = $response[1];
    $jsonData = json_decode($response[0], true);

    // Check if metadata->code is equal to 1
    if (isset($jsonData['metadata']['code'])) {
        if ($jsonData['metadata']['code'] == 200) {
            $html = 'Antrean has been added.';
        } else {
            $html = $jsonData['metadata']['message'];
        }
    } else {
        $html = 'Error from the API.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Form</title>
</head>

<body>

    <h1><?= $html ?></h1>
    <form method="post">
        <label for="tanggalperiksa">Tanggal Diperiksa:</label>
        <input type="date" id="tanggalperiksa" name="tanggalperiksa" required><br>

        <label for="kodebooking">Kode Booking:</label>
        <input type="text" id="kodebooking" name="kodebooking" required><br>

        <label for="jenispasien">Jenis Pasien:</label>
        <input type="text" id="jenispasien" name="jenispasien" required><br>

        <label for="nomorkartu">Nomor Kartu:</label>
        <input type="text" id="nomorkartu" name="nomorkartu"><br>

        <label for="nik">NIK:</label>
        <input type="text" id="nik" name="nik"><br>

        <label for="nohp">Nomor HP:</label>
        <input type="text" id="nohp" name="nohp"><br>

        <label for="kodepoli">Kode Poli:</label>
        <input type="text" id="kodepoli" name="kodepoli"><br>

        <label for="namapoli">Nama Poli:</label>
        <input type="text" id="namapoli" name="namapoli"><br>

        <label for="pasienbaru">Pasien Baru:</label>
        <input type="text" id="pasienbaru" name="pasienbaru"><br>

        <label for="norm">Norm:</label>
        <input type="text" id="norm" name="norm"><br>

        <label for="kodedokter">Kode Dokter:</label>
        <input type="text" id="kodedokter" name="kodedokter"><br>

        <label for="namadokter">Nama Dokter:</label>
        <input type="text" id="namadokter" name="namadokter"><br>

        <label for="jampraktek">Jam Praktek:</label>
        <input type="text" id="jampraktek" name="jampraktek"><br>

        <label for="jeniskunjungan">Jenis Kunjungan:</label>
        <input type="text" id="jeniskunjungan" name="jeniskunjungan"><br>

        <label for="nomorreferensi">Nomor Referensi:</label>
        <input type="text" id="nomorreferensi" name="nomorreferensi"><br>

        <label for="nomorantrean">Nomor Antrean:</label>
        <input type="text" id="nomorantrean" name="nomorantrean"><br>

        <label for="angkaantrean">Angka Antrean:</label>
        <input type="text" id="angkaantrean" name="angkaantrean"><br>

        <label for="estimasidilayani">Estimasi Dilayani:</label>
        <input type="date" id="estimasidilayani" name="estimasidilayani"><br>

        <label for="sisakuotajkn">Sisa Kuota JKN:</label>
        <input type="text" id="sisakuotajkn" name="sisakuotajkn"><br>

        <label for="kuotajkn">Kuota JKN:</label>
        <input type="text" id="kuotajkn" name="kuotajkn"><br>

        <label for="sisakuotanonjkn">Sisa Kuota Non-JKN:</label>
        <input type="text" id="sisakuotanonjkn" name="sisakuotanonjkn"><br>

        <label for="kuotanonjkn">Kuota Non-JKN:</label>
        <input type="text" id="kuotanonjkn" name="kuotanonjkn"><br>

        <label for="keterangan">Keterangan:</label>
        <input type="text" id="keterangan" name="keterangan"><br>

        <button type="submit">Submit</button>
    </form>

</body>

</html>