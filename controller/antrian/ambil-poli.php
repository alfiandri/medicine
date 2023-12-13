<?php
date_default_timezone_set('Asia/Jakarta');
require '../../db/connect.php';
require '../../controller/base/integrasi.php';
if (isset($_POST['caridatanonjkn'])) {

	$apiUrl = "$baseUrl/$serviceNameAntrean/antrean/add";

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$tanggalperiksa = date('Y-m-d');
		$poli = $_POST['poli'];
		$dokter = $_POST['dokter'];
		$nomor = $_POST['nomor'];
		$check = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nik='$nomor'");
		$pasien = mysqli_fetch_array($check);
		if ($pasien == NULL) {
			echo " <script>alert ('Data pasien tidak ditemukan');
      document.location='../../module/antrian/ambil-poli'</script>";
		}
		if (empty($pasien['nomor_rm'])) {
			echo " <script>alert ('Data pasien ini tidak ditemukan, silahkan Melakukan Registrasi Pasien Baru');
         document.location='../../module/antrian/ambil-poli'</script>";
		}

		// poli
		$check = mysqli_query($koneksi, "SELECT * FROM poli WHERE kdpoli='$poli'");
		$poli = mysqli_fetch_array($check);
		if ($poli == NULL) {
			echo " <script>alert ('Poli tidak ditemukan');
            document.location='../../module/antrian/ambil-poli'</script>";
		}

		// dokter
		$check = mysqli_query($koneksi, "SELECT * FROM dokter WHERE kode_dokter='$dokter'");
		$dokter = mysqli_fetch_array($check);
		if ($dokter == NULL) {
			echo " <script>alert ('Dokter tidak ditemukan');
            document.location='../../module/antrian/ambil-poli'</script>";
		}

		// kodebooking
		$date = date("dmY");
		$prefix = $poli['kode_antri'];

		// Generate the kodebooking

		$estimasidilayani = (time() + 600) * 1000;

		// get last antrean
		$check = mysqli_query($koneksi, "SELECT * FROM antrian_poli WHERE kodepoli='$poli[kdpoli]' AND tanggalperiksa = '$tanggalperiksa' ORDER BY nomor DESC LIMIT 1");
		$antrian_poli = mysqli_fetch_array($check);
		if ($antrian_poli === null) {
			$angkaantrean = 1;
			$nomorantrean = $poli['kode_antri'] . '-' . $angkaantrean;
		} else {
			$angkaantrean = ($antrian_poli['nomor'] + 1);
			$nomorantrean = $poli['kode_antri'] . '-' . $angkaantrean;
		}

		$kodebooking = $date . $prefix . sprintf('%03d', $angkaantrean);

		$kuotajkn = $poli['kuotajkn'];
		$sisakuotajkn = $kuotajkn;
		$kuotanonjkn = $poli['kuotanonjkn'];
		$sisakuotanonjkn = $kuotanonjkn;

		// get sisa kuota jkn
		$check = mysqli_query($koneksi, "SELECT COUNT(*) as count FROM antrian_poli WHERE kodepoli = '$poli[kdpoli]' AND tanggalperiksa = '$tanggalperiksa' AND batal = 0 AND sudah_dilayani = 0 AND jenispasien = 'JKN'");
		$row = mysqli_fetch_array($check);
		if ($row) {
			$sisakuotajkn = $sisakuotajkn - $row['count'];
		}

		// get sisa kuota non jkn
		$check = mysqli_query($koneksi, "SELECT COUNT(*) as count FROM antrian_poli WHERE kodepoli = '$poli[kdpoli]' AND tanggalperiksa = '$tanggalperiksa' AND batal = 0 AND sudah_dilayani = 0 AND jenispasien = 'NON JKN'");
		$row = mysqli_fetch_array($check);
		if ($row) {
			$sisakuotanonjkn = $sisakuotanonjkn - $row['count'];
		}

		// Start the transaction
		mysqli_begin_transaction($koneksi);
		try {

			mysqli_query($koneksi, "INSERT INTO antrian_poli(kodebooking, kodepoli, nomor, tipe, nokartu, tanggalperiksa, jenispasien) VALUES('$kodebooking', '$poli[kdpoli]','$angkaantrean','$prefix','$nomor', '$tanggalperiksa', 'NON JKN') ");

			// update pasien
			mysqli_query($koneksi, "UPDATE pasien SET status_pasien = 0 WHERE id = $pasien[id]");

			$data = [
				"kodebooking" => $kodebooking,
				"jenispasien" => 'NON JKN',
				"nomorkartu" => $pasien['nomor_kartu'],
				"nik" => $_POST["nomor"],
				"nohp" => $pasien['no_handphone'],
				"kodepoli" => $_POST["poli"],
				"namapoli" => $poli['nmpoli'],
				"pasienbaru" => $pasien['status_pasien'],
				"norm" => $pasien['nomor_rm'],
				"tanggalperiksa" => $tanggalperiksa,
				"kodedokter" => $dokter['kode_dokter'],
				"namadokter" => $dokter['nama'],
				"jampraktek" => $_POST["jadwal"],
				"jeniskunjungan" => $_POST['jeniskunjungan'],
				"nomorreferensi" => @$_POST['nomorreferensi'],
				"nomorantrean" => $nomorantrean,
				"angkaantrean" => $angkaantrean,
				"estimasidilayani" => $estimasidilayani,
				"sisakuotajkn" => $sisakuotajkn,
				"kuotajkn" => $kuotajkn,
				"sisakuotanonjkn" => $sisakuotanonjkn,
				"kuotanonjkn" => $kuotanonjkn,
				"keterangan" => @$_POST["keterangan"],
			];

			$response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

			$jsonData = json_decode($response[0], true);
			// Check if metadata->code is equal to 1
			if (isset($jsonData['metadata']['code'])) {
				$message = $jsonData['metadata']['message'];
				if ($jsonData['metadata']['code'] != 200) {
					echo " <script>alert (`$message`);
				document.location='../../module/antrian/ambil-poli'</script>";
				} else {
					// sukses
					mysqli_commit($koneksi);

					echo " <script>alert ('$message');
				document.location='../../module/antrian/ambil-poli'</script>";
				}
			} else {
				echo " <script>alert ('Terjadi kesalahan');
		  document.location='../../module/antrian/ambil-poli'</script>";
			}
		} catch (\Throwable $th) {
			mysqli_rollback($koneksi);
			$msg = $th->getMessage();
			echo " <script>alert (`$msg`);
			document.location='../../module/antrian/ambil-poli'</script>";
		}
	}
}

if (isset($_POST['caridatajkn'])) {
	$nomor = $_POST['nomor'];
	$jenis = $_POST['jenis'];
	$check = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nik='$nomor'");
	$datacheck = mysqli_fetch_array($check);
	if ($datacheck == NULL) {
		echo " <script>alert ('Data Tidak Ditemukan');
      document.location='../../module/antrian/ambil-poli'</script>";
	} else {
		echo " <script>alert ('Data Ditemukan');
      document.location='../../module/antrian/ambil-poli'</script>";
	}
}
