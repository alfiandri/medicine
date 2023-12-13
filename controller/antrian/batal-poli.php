<?php
date_default_timezone_set('Asia/Jakarta');
require '../../db/connect.php';
require '../../controller/base/integrasi.php';

$apiUrl = "$baseUrl/$serviceNameAntrean/antrean/batal";

$kodebooking = $_POST['kodebooking'];
$keterangan = $_POST['keterangan'];

$check = mysqli_query($koneksi, "SELECT * FROM antrian_poli WHERE kodebooking='$kodebooking'");
$antrian = mysqli_fetch_array($check);
if ($antrian == NULL) {
	echo " <script>alert ('Data antrian tidak ditemukan');
      document.location='../../module/antrian/batal-poli'</script>";
}

// Start the transaction
mysqli_begin_transaction($koneksi);
try {
	mysqli_query($koneksi, "UPDATE antrian_poli SET batal = 1 WHERE kodebooking = $kodebooking");

	$data = [
		"kodebooking" => $kodebooking,
		"keterangan" => @$_POST["keterangan"],
	];

	$response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

	$jsonData = json_decode($response[0], true);
	// Check if metadata->code is equal to 1
	if (isset($jsonData['metadata']['code'])) {
		$message = $jsonData['metadata']['message'];
		if ($jsonData['metadata']['code'] != 200) {
			echo " <script>alert (`$message`);
				document.location='../../module/antrian/batal-poli'</script>";
		} else {
			// sukses
			mysqli_commit($koneksi);

			echo " <script>alert ('$message');
				document.location='../../module/antrian/batal-poli'</script>";
		}
	} else {
		echo " <script>alert ('Terjadi kesalahan');
		  document.location='../../module/antrian/batal-poli'</script>";
	}
} catch (\Throwable $th) {
	mysqli_rollback($koneksi);
	$msg = $th->getMessage();
	echo " <script>alert (`$msg`);
			document.location='../../module/antrian/batal-poli'</script>";
}
