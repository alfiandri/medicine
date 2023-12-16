<?php

require_once __DIR__ . '/../../db/connect.php';
require_once __DIR__ . '/view.php';
require __DIR__ . '/../../controller/base/integrasi.php';
$previousUrl = $_SERVER["HTTP_REFERER"];

$tanggalperiksa = date('Y-m-d');
$poli = $_POST['poli'];
$dokter = $_POST['dokter'];
$nik = $_POST['nik'];
$nokartu = $_POST['no_kartu'];
$check = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nik='$nik'");
$pasien = mysqli_fetch_array($check);
if ($pasien == NULL) {
    echo " <script>alert ('Data pasien tidak ditemukan');
      document.location='$previousUrl'</script>";
}
if (empty($pasien['nomor_rm'])) {
    echo " <script>alert ('Data nomor rekam medis pasien ini tidak ditemukan, silahkan Melakukan Registrasi Pasien Baru');
         document.location='$previousUrl'</script>";
}

// poli
$check = mysqli_query($koneksi, "SELECT * FROM poli WHERE kdpoli='$poli'");
$poli = mysqli_fetch_array($check);
if ($poli == NULL) {
    echo " <script>alert ('Poli tidak ditemukan');
            document.location='$previousUrl'</script>";
}

// dokter
$check = mysqli_query($koneksi, "SELECT * FROM dokter WHERE kode_dokter='$dokter'");
$dokter = mysqli_fetch_array($check);
if ($dokter == NULL) {
    echo " <script>alert ('Dokter tidak ditemukan');
            document.location='$previousUrl'</script>";
}

// kodebooking
$date = date("Ymd");
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
    $checkloket = mysqli_query($koneksi, "SELECT * FROM loket_poliklinik WHERE status=1");
    $dataloket = mysqli_fetch_array($checkloket);
    $kode = $dataloket['kode_loket'];

    mysqli_query($koneksi, "INSERT INTO antrian_poli(kodebooking, loket, kodepoli, nomor, tipe, nokartu, nik, tanggalperiksa, jenispasien) VALUES('$kodebooking', '$kode', '$poli[kdpoli]','$angkaantrean','$prefix','$nokartu', '$nik', '$tanggalperiksa', 'JKN') ");

    $uid = $pasien['uid_pasien'];
    $nomorrm = $pasien['nomor_rm'];
    $noregistrasi = "RJ-" . date('Ymd') . rand(111, 999);
    $tanggal = date('Y-m-d');
    $waktu = date('H:i:s');
    $jenislayanan = 'Poliklinik';
    $rujukan = $_POST['jenis_rujukan'];
    $catatanrujukan = $_POST['provperujuk'];
    $layanan = $poli['nmpoli'];
    $jenisbayar = 'BPJS Kesehatan';
    $catatanbayar = $_POST['jenispeserta'];
    $dokter = $dokter['nama'];
    $sumber = 'RJ';

    $insertRawatJalan = mysqli_query($koneksi, "INSERT INTO pasien_visit (uid_pasien, nomor_rm, nomor_visit, tanggal, waktu, jenis_layanan, rujukan, rujukan_catatan, layanan,  jenis_bayar, catatan_bayar, dokter, sumber)
    VALUES ('$uid','$nomorrm','$noregistrasi','$tanggal','$waktu','$jenislayanan','$rujukan','$catatanrujukan','$layanan','$jenisbayar','$catatanbayar','$dokter','$sumber')");

    $data = [
        "kodebooking" => $kodebooking,
        "jenispasien" => 'JKN',
        "nomorkartu" => $nokartu,
        "nik" => $_POST["nik"],
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
        "nomorreferensi" => @$_POST['no_rujukan'],
        "nomorantrean" => $nomorantrean,
        "angkaantrean" => $angkaantrean,
        "estimasidilayani" => $estimasidilayani,
        "sisakuotajkn" => $sisakuotajkn,
        "kuotajkn" => $kuotajkn,
        "sisakuotanonjkn" => $sisakuotanonjkn,
        "kuotanonjkn" => $kuotanonjkn,
        "keterangan" => @$_POST["keterangan"],
    ];

    $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/add";
    $response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

    $jsonData = json_decode($response[0], true);
    // Check if metadata->code is equal to 1
    if (isset($jsonData['metadata']['code'])) {
        $message = $jsonData['metadata']['message'];
        if ($jsonData['metadata']['code'] != 200) {
            echo " <script>alert (`$message`);
				document.location='$previousUrl'</script>";
        } else {
            // sukses
            mysqli_commit($koneksi);

            // update task id ws bpjs
            $data = [
                "kodebooking" => $kodebooking,
                "taskid" => 3,
                "waktu" => time() * 1000,
            ];
            $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/updatewaktu";
            post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

            $tipe = $prefix;
            $nomor = $angkaantrean;
            echo " <script>alert (`$message`);
         document.location='../../module/console-box-antrian/print/print-bpjs?tipe=$tipe&nomor=$nomor&kodebooking=$kodebooking'</script>";
        }
    } else {
        echo " <script>alert ('Terjadi kesalahan');
		  document.location='$previousUrl'</script>";
    }
} catch (\Throwable $th) {
    mysqli_rollback($koneksi);
    $msg = $th->getMessage();
    echo " <script>alert (`$msg`);
			document.location='$previousUrl'</script>";
}
