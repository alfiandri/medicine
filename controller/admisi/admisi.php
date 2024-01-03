<?php
require_once __DIR__ . '/../../db/connect.php';
require_once __DIR__ . '/../../controller/base/integrasi.php';
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['simpancheck'])) {
   $id = $_POST['id'];
   $dokter = $_POST['dokter'];
   $catatan = $_POST['catatan'];
   $notransaksi = $_POST['notransaksi'];
   $status = "2";
   $update = mysqli_query($koneksi, "UPDATE pasien_layanan SET dokter='$dokter', notransaksi='$notransaksi', catatan='$catatan', status='$status' WHERE idvisit='$id'");
   if ($update) {
      echo " <script>alert ('Berhasil Menambah Data Dokter');
      document.location='../admisi/register'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
      document.location='../admisi/register'</script>";
   }
}

if (isset($_POST['simpanpasienrj'])) {
   $uid = $_POST['uid'];
   $nomorRM = $_POST['nomorRM'];
   $noregistrasi = "RJ-" . date('Ymd') . rand(111, 999);
   $layanan = $_POST['layanan'];
   $jenisBayar = $_POST['jenisBayar'];
   $dokter = $_POST['dokter'];
   $tanggalVisit = date('Y-m-d');
   $waktu = date('H:i:s');
   $tipe = $_POST['tipe'];
   if ($tipe == 1) {
      $sumber = "RJ";
   } else {
      $sumber = "UGD";
   }
   $status = 2;
   $insert = mysqli_query($koneksi, "INSERT INTO pasien_visit (uid_pasien, nomor_rm, nomor_visit, tanggal, waktu, layanan, jenis_bayar, dokter, sumber)VALUES ('$uid','$nomorRM','$noregistrasi','$tanggalVisit','$waktu','$layanan','$jenisBayar','$dokter','$sumber')");
   $update = mysqli_query($koneksi, "UPDATE pasien SET status_pasien='$status' WHERE uid_pasien='$uid' ");
   if ($insert && $update) {
      echo " <script>alert ('Berhasil Menambah Pasien Registrasi Rawat Jalan');
      document.location='../admisi/admisi-rj'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
      document.location='../admisi/admisi-list?id=1'</script>";
   }
}

if (isset($_POST['simpanrjbooking'])) {
   $uid = $_POST['uid'];
   $data = mysqli_query($koneksi, "SELECT * FROM pasien_booking WHERE uid_pasien='$uid'");
   $detail = mysqli_fetch_array($data);
   $nomorRM = $detail['nomor_rm'];
   $noregistrasi = "RJ-" . date('Ymd') . rand(111, 999);
   $layanan = $detail['layanan'];
   $jenisBayar = $detail['jenis_bayar'];
   $dokter = $_POST['dokter'];
   $tanggalVisit = date('Y-m-d');
   $waktu = date('H:i:s');
   $tipe = $_POST['tipe'];
   if ($tipe == 1) {
      $sumber = "RJ";
   } else {
      $sumber = "UGD";
   }
   $status = 2;
   $insert = mysqli_query($koneksi, "INSERT INTO pasien_visit (uid_pasien, nomor_rm, nomor_visit, tanggal, waktu, layanan, jenis_bayar, dokter, sumber)VALUES ('$uid','$nomorRM','$noregistrasi','$tanggalVisit','$waktu','$layanan','$jenisBayar','$dokter','$sumber')");
   $update = mysqli_query($koneksi, "UPDATE pasien_booking SET status_booking='$status' WHERE uid_pasien='$uid'");
   if ($insert && $update) {
      echo " <script>alert ('Berhasil Menambah Pasien Registrasi Rawat Jalan');
      document.location='../admisi/admisi-rj'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
      document.location='../admisi/admisi-booking?id=1'</script>";
   }
}



if (isset($_POST['simpanantrian'])) {
   $id = $_POST['id'];
   $antrian = $_POST['antrian'];
   $status = "1";
   $update = mysqli_query($koneksi, "UPDATE pasien_visit SET no_antrian='$antrian', status_visit='$status' WHERE uid_pasien='$id'");
}



if (isset($_POST['simpanbatal'])) {
   $id = $_POST['id'];
   $status = "2";
   $catatan = $_POST['catatan'];
   $update = mysqli_query($koneksi, "UPDATE pasien_visit SET status_visit='$status', catatan_batal='$catatan' WHERE uid_pasien='$id'");
}


if (isset($_POST['simpandaftarulang'])) {
   $id = $_POST['id'];
   $status = "1";
   $catatan = $_POST['catatan'];
   $update = mysqli_query($koneksi, "UPDATE pasien_visit SET status_visit='$status'WHERE uid_pasien='$id'");
}



if (isset($_POST['simpanpasien'])) {
   $tipe = $_POST['tipe'];
   $uid = md5(rand(1111, 9999));


   $sql = "SELECT * FROM pasien order by nomor_rm DESC";

   $result = mysqli_query($koneksi, $sql);
   $row = mysqli_fetch_array($result);

   if ($row) {
      $rm = intval($row['nomor_rm']) + 1;
      $nomorrm = sprintf("%06d", $rm);
   } else {
      $nomorrm = sprintf("%06d", 1);
   }

   $kodebooking = @$_POST['kodebooking'];
   $sebutan = $_POST['sebutan'];
   $nama = $_POST['nama'];
   $nokartu = $_POST['nokartu'];
   $nobpjs = $_POST['nobpjs'];
   $tempatlahir = $_POST['tempatlahir'];
   $tanggallahir = $_POST['tanggallahir'];
   $agama = $_POST['agama'];
   $gender = $_POST['gender'];
   $pendidikan = $_POST['pendidikan'];
   $pekerjaan = $_POST['pekerjaan'];
   $golongandarah = $_POST['golongandarah'];
   $statuskawin = $_POST['statuskawin'];
   $notelepon = $_POST['notelepon'];
   $email = $_POST['email'];
   if ($tipe == 1) {
      $ket = "Rawat Jalan";
   } else if ($tipe == 2) {
      $ket = "Rawat Darurat";
   }
   $checkdata = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nik='$nokartu' or nomor_rm='$nomorrm'");
   $datacheck = mysqli_fetch_array($checkdata);
   if ($datacheck == NULL) {

      $insert = mysqli_query($koneksi, "INSERT INTO pasien (uid_pasien, nik, nomor_kartu, kodebooking, nomor_rm, sebutan, nama_pasien, tempat_lahir, tanggal_lahir, gender,  agama, no_handphone, email, status_kawin, pendidikan, pekerjaan, golongan_darah)
      VALUES ('$uid','$nokartu','$nobpjs','$kodebooking','$nomorrm','$sebutan','$nama','$tempatlahir','$tanggallahir','$gender','$agama','$notelepon','$email','$statuskawin','$pendidikan','$pekerjaan','$golongandarah')");
      if ($insert) {
         $task = "2";
         $inserttask = mysqli_query($koneksi, "INSERT INTO admisi_taskid (kodebooking, task_id)VALUES('$kodebooking','$task')");

         echo " <script>alert ('Berhasil Menambah Pasien Registrasi $ket');
         document.location='../admisi/admisi-add-detail?tipe=$tipe&id=$uid&status=1'</script>";
      } else {
         echo " <script>alert ('Gagal Simpan');
         document.location='../admisi/admisi-add'</script>";
      }
   } else {
      echo " <script>alert ('NIK atau Nomor RM Sudah Ada Pada Database');
      document.location='../admisi/admisi-add'</script>";
   }
}

if (isset($_POST['ubahpasien'])) {
   $uid = $_POST['id'];
   $nomorrm = $_POST['nomorrm'];
   $sebutan = $_POST['sebutan'];
   $nama = $_POST['nama'];
   $nobpjs = $_POST['nobpjs'];
   $nokartu = $_POST['nokartu'];
   $tempatlahir = $_POST['tempatlahir'];
   $tanggallahir = $_POST['tanggallahir'];
   $agama = $_POST['agama'];
   $gender = $_POST['gender'];
   $pendidikan = $_POST['pendidikan'];
   $pekerjaan = $_POST['pekerjaan'];
   $golongandarah = $_POST['golongandarah'];
   $statuskawin = $_POST['statuskawin'];
   $notelepon = $_POST['notelepon'];
   $email = $_POST['email'];
   $tipe = $_POST['tipe'];
   $update = mysqli_query($koneksi, "UPDATE pasien SET nik='$nokartu', nomor_kartu='$nobpjs', nomor_rm='$nomorrm', sebutan='$sebutan', tempat_lahir='$tempatlahir', tanggal_lahir='$tanggallahir', gender='$gender', agama='$agama', no_handphone='$notelepon', email='$email', status_kawin='$statuskawin', pendidikan='$pendidikan', pekerjaan='$pekerjaan',golongan_darah='$golongandarah' WHERE uid_pasien='$uid'");
   if ($update) {
      echo " <script>alert ('Berhasil Melakukan Perubahan Data Pasien');
      document.location='../admisi/admisi-add-detail?tipe=$tipe&id=$uid&status=1'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
      document.location='../admisi/admisi-add-detail?tipe=$tipe&id=$uid&status=1'</script>";
   }
}


if (isset($_POST['simpanlayanan'])) {
   $uid = $_POST['id'];
   $nomorrm = $_POST['nomorRM'];
   $kodebooking = @$_POST['kodebooking'];
   $jenislayanan = $_POST['jenislayanan'];
   $rujukan = $_POST['rujukan'];
   $catatanrujukan = $_POST['catatanrujukan'];
   $jenisbayar = $_POST['jenisbayar'];
   $catatanbayar = $_POST['catatanbayar'];
   $layanan = $_POST['layanan'];
   $dokter = $_POST['dokter'];
   $tanggal = date('Y-m-d');
   $waktu = date('H:i:s');
   $noregistrasi = "RJ-" . date('Ymd') . rand(111, 999);
   $tipe = $_POST['tipe'];
   if ($tipe == 1 || $jenislayanan == 'Poliklinik') {
      $sumber = 'RJ';
   } else if ($tipe == 2) {
      $sumber = "UGD";
   }

   $previousUrl = $_SERVER["HTTP_REFERER"];

   if (!$kodebooking) {
      // kode booking start
      $isUnique = false;
      $date = date('Ymd');

      while (!$isUnique) {
         // Generate the unique code
         $unique = rand(0, 999);

         $kodebooking = $date . sprintf('%03d', $unique);

         // Check if the code already exists in the database
         $checkQuery = "SELECT COUNT(*) as count FROM antrian_loket WHERE kodebooking = '$kodebooking'";
         $result = mysqli_query($koneksi, $checkQuery);

         $row = mysqli_fetch_array($result);
         $count = $row['count'];

         // If the code is not unique, regenerate it
         if ($count == 0) {
            $isUnique = true; // Exit the loop if the code is unique
         }
      }
      // kode booking end
   }

   $check = mysqli_query($koneksi, "SELECT * FROM pasien WHERE uid_pasien='$uid'");
   $pasien = mysqli_fetch_array($check);
   if ($pasien == NULL) {
      echo " <script>alert ('Data pasien tidak ditemukan');
      document.location='$previousUrl'</script>";
   }
   // poli
   $check = mysqli_query($koneksi, "SELECT * FROM poli WHERE kdpoli='$_POST[layanan]'");
   $poli = mysqli_fetch_array($check);
   if ($poli == NULL) {
      echo " <script>alert ('Poli tidak ditemukan');
            document.location='$previousUrl'</script>";
   }

   // dokter
   $check = mysqli_query($koneksi, "SELECT * FROM dokter WHERE kode_dokter='$_POST[dokter]'");
   $dokter = mysqli_fetch_array($check);
   if ($dokter == NULL) {
      echo " <script>alert ('Dokter tidak ditemukan');
            document.location='$previousUrl'</script>";
   }

   $estimasidilayani = (time() + 600) * 1000;
   $tanggalperiksa = date('Y-m-d');

   // get last antrean
   $check = mysqli_query($koneksi, "SELECT * FROM antrian_poli WHERE kodepoli='$poli[kdpoli]' AND tanggalperiksa = '$tanggalperiksa' ORDER BY nomor DESC LIMIT 1");
   $antrian_poli = mysqli_fetch_array($check);
   if ($antrian_poli == null) {
      $angkaantrean = 1;
      $nomorantrean = $poli['kode_antri'] . '-' . $angkaantrean;
   } else {
      $angkaantrean = ($antrian_poli['nomor'] + 1);
      $nomorantrean = $poli['kode_antri'] . '-' . $angkaantrean;
   }
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

   $jenispasien = 'NON JKN';
   if ($_POST['jenisbayar'] == 'BPJS Kesehatan') {
      $jenispasien = 'JKN';
   }

   mysqli_begin_transaction($koneksi);

   $status = 1;
   $task = 3;
   $waktuTaskId = date('Y-m-d H:i:s');
   $prefix = $poli['kode_antri'];

   $insertantrian = mysqli_query($koneksi, "INSERT INTO antrian_poli(kodebooking, kodepoli, kodedokter, jampraktek, nomor, tipe, nokartu, nik, tanggalperiksa, jenispasien, estimasi) VALUES('$kodebooking', '$poli[kdpoli]', '$dokter[kode_dokter]', '$_POST[jadwal]', '$angkaantrean','$prefix', '$pasien[nomor_kartu]', '$pasien[nik]', '$tanggalperiksa', '$jenispasien', '$estimasidilayani') ");

   $insert = mysqli_query($koneksi, "INSERT INTO admisi_taskid (kodebooking, task_id, waktu)VALUES('$kodebooking','$task','$waktuTaskId')");

   $insert = mysqli_query($koneksi, "INSERT INTO pasien_visit (uid_pasien, nomor_rm, nomor_visit, kodebooking, tanggal, waktu, jenis_layanan, rujukan, rujukan_catatan, layanan,  jenis_bayar, catatan_bayar, dokter, sumber)
   VALUES ('$uid','$nomorrm','$noregistrasi', '$kodebooking', '$tanggal','$waktu','$jenislayanan','$rujukan','$catatanrujukan','$layanan','$jenisbayar','$catatanbayar','$dokter[nama]','$sumber')");

   // add to WS BPJS
   $data = [
      "kodebooking" => $kodebooking,
      "jenispasien" => $jenispasien,
      "nomorkartu" => $pasien['nomor_kartu'],
      "nik" => $pasien["nik"],
      "nohp" => $pasien['no_handphone'],
      "kodepoli" => $_POST["layanan"],
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

   $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/add";
   $response = post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

   $jsonData = json_decode($response[0], true);
   // Check if metadata->code is equal to 1
   if (isset($jsonData['metadata']['code'])) {
      $message = $jsonData['metadata']['message'];
      if ($jsonData['metadata']['code'] != 200) {
         mysqli_rollback($koneksi);
         echo " <script>alert (`$message`);
				document.location='$previousUrl'</script>";
      } else {
         // sukses
         mysqli_commit($koneksi);
         $apiUrl = "$baseUrl/$serviceNameAntrean/antrean/updatewaktu";

         // insert task id 1 and/or 2 if exists
         $check = mysqli_query($koneksi, "SELECT * FROM admisi_taskid WHERE kodebooking='$kodebooking' AND task_id = 1");
         $taskid = mysqli_fetch_array($check);
         if ($taskid != NULL) {
            $data = [
               "kodebooking" => $kodebooking,
               "taskid" => 1,
               "waktu" => strtotime($taskid['waktu']) * 1000,
            ];
            post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);
         }
         $check = mysqli_query($koneksi, "SELECT * FROM admisi_taskid WHERE kodebooking='$kodebooking' AND task_id = 2");
         $taskid = mysqli_fetch_array($check);
         if ($taskid != NULL) {
            $data = [
               "kodebooking" => $kodebooking,
               "taskid" => 2,
               "waktu" => strtotime($taskid['waktu']) * 1000,
            ];
            post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);
         }

         // update task id ws bpjs
         $data = [
            "kodebooking" => $kodebooking,
            "taskid" => 3,
            "waktu" => time() * 1000,
         ];
         post($apiUrl, $data, $consId, $secretKey, $userKeyAntrean);

         echo " <script>alert ('Berhasil Menambah Layanan');
				document.location='../../module/console-box-antrian/print/print-poli?nomor=$kodebooking'</script>";
      }
   } else {
      mysqli_rollback($koneksi);
      echo " <script>alert ('Terjadi kesalahan');
		  document.location='$previousUrl'</script>";
   }
   exit;
}


if (isset($_POST['simpanalamat'])) {
   $warganegara = $_POST['warganegara'];
   $negara = $_POST['negara'];
   $alamat = $_POST['alamat'];
   $kelurahan = $_POST['kelurahan'];
   $checkkec = mysqli_query($koneksi, "SELECT * FROM wil_kelurahan WHERE kel='$kelurahan'");
   $datacheckkec = mysqli_fetch_array($checkkec);
   $kec_id = $datacheckkec['kec_id'];
   $datakecamatan = mysqli_query($koneksi, "SELECT * FROM wil_kecamatan WHERE id='$kec_id'");
   $infokecamatan = mysqli_fetch_array($datakecamatan);
   $kecamatan = $infokecamatan['kec'];
   $kab_id = $infokecamatan['kab_id'];
   $datakabupaten = mysqli_query($koneksi, "SELECT * FROM wil_kabupaten WHERE id='$kab_id'");
   $infokabupten = mysqli_fetch_array($datakabupaten);
   $kabupaten = $infokabupten['kab'];
   $prov_id = $infokabupten['kodeprovinsi'];
   $dataprovinsi = mysqli_query($koneksi, "SELECT * FROM wil_provinsi WHERE id='$prov_id'");
   $infoprpovinsi = mysqli_fetch_array($dataprovinsi);
   $provinsi = $infoprpovinsi['provinsi'];
   $rtrw = $_POST['rtrw'];
   $kel = " " . $kelurahan;
   $check = mysqli_query($koneksi, "SELECT * FROM wil_kodepos WHERE kelurahan='$kel'");
   $datacheck = mysqli_fetch_array($check);
   $kodepos = $datacheck['kode_pos'];
   $id = $_POST['id'];
   $visit = $_POST['visit'];
   $update = mysqli_query($koneksi, "UPDATE pasien SET warga_negara='$warganegara', negara='$negara', alamat='$alamat', provinsi='$provinsi', kabupaten='$kabupaten', kecamatan='$kecamatan', kelurahan='$kelurahan', rtrw='$rtrw', kodepos='$kodepos' WHERE uid_pasien='$id'");
   if ($update) {
      echo " <script>alert ('Berhasil Menambah Alamat');
      document.location='../admisi/admisi-add-detail?id=$id&status=3&visit=$visit'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
      document.location='../admisi/admisi-add-detail?id=$id&status=3&visit=$visit</script>";
   }
}

if (isset($_POST['simpankeluarga'])) {
   $visit = $_POST['visit'];
   $uid = $_POST['id'];
   $hubungan = $_POST['hubungan'];
   $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
   $notelepon = $_POST['notelepon'];
   $email = $_POST['email'];

   $insert = mysqli_query($koneksi, "INSERT INTO pasien_keluarga (uid_pasien, hubungan, nama, telepon, alamat, email) VALUES ('$uid','$hubungan','$nama','$notelepon','$alamat','$email')");
   if ($insert) {
      echo " <script>alert ('Berhasil Menambah Keluarga');
      document.location='../admisi/admisi-add-detail?id=$uid&status=4&visit=$visit'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
      document.location='../admisi/admisi-add-detail?id=$uid&status=4&visit=$visit'</script>";
   }
}


if (isset($_POST['ubahkeluarga'])) {
   $visit = $_POST['visit'];
   $uid = $_POST['id'];
   $hubungan = $_POST['hubungan'];
   $nama = $_POST['nama'];
   $alamat = $_POST['alamat'];
   $notelepon = $_POST['telepon'];
   $email = $_POST['email'];
   $id = $_POST['iddata'];

   $update = mysqli_query($koneksi, "UPDATE pasien_keluarga SET hubungan='$hubungan', nama='$nama', telepon='$notelepon', alamat='$alamat', email='$email' WHERE id='$id'");
   if ($update) {
      echo " <script>alert ('Berhasil Melakukan Perubahan');
      document.location='../admisi/admisi-add-detail?id=$uid&status=4&visit=$visit'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
      document.location='../admisi/admisi-add-detail?id=$uid&status=4&visit=$visit'</script>";
   }
}

if (isset($_POST['hapuskeluarga'])) {
   $visit = $_POST['visit'];
   $uid = $_POST['id'];
   $id = $_POST['iddata'];
   $delete = mysqli_query($koneksi, "DELETE FROM pasien_keluarga  WHERE id='$id'");
   if ($delete) {
      echo " <script>alert ('Berhasil Hapus Data');
      document.location='../admisi/admisi-add-detail?id=$uid&status=4&visit=$visit'</script>";
   } else {
      echo " <script>alert ('Gagal Hapus');
      document.location='../admisi/admisi-add-detail?id=$uid&status=4&visit=$visit'</script>";
   }
}


if (isset($_POST['simpanid'])) {
   $visit = $_POST['visit'];
   $uid = $_POST['id'];
   $kategori = $_POST['kategori'];
   $nomorKartu = $_POST['nomorKartu'];

   $insert = mysqli_query($koneksi, "INSERT INTO pasien_id (uid_pasien, kategori, nomor_kartu) VALUES ('$uid','$kategori','$nomorKartu')");
   if ($insert) {
      echo " <script>alert ('Berhasil Menambah Data Identitas');
      document.location='../admisi/admisi-add-detail?id=$uid&status=5&visit=$visit'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
      document.location='../admisi/admisi-add-detail?id=$uid&status=5&visit=$visit'</script>";
   }
}


if (isset($_POST['simpancatatan'])) {
   $uid = $_POST['id'];
   $catatan = $_POST['catatan'];
   $visit = $_POST['visit'];
   $update = mysqli_query($koneksi, "UPDATE pasien SET catatan='$catatan' WHERE uid_pasien='$uid'");
   if ($update) {
      echo " <script>alert ('Berhasil Menambah Catatan');
      document.location='../admisi/admisi-add-detail?id=$uid&status=6&visit=$visit'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
      document.location='../admisi/admisi-add-detail?id=$uid&status=6&visit=$visit'</script>";
   }
}

if (isset($_POST['simpantambahan'])) {
   $uid = $_POST['id'];
   $nomorKK = $_POST['nomorKK'];
   $suku = $_POST['suku'];
   $bahasa = $_POST['bahasa'];
   $visit = $_POST['visit'];
   $update = mysqli_query($koneksi, "UPDATE pasien SET nomor_kk='$nomorKK', suku='$suku', bahasa='$bahasa' WHERE uid_pasien='$uid'");
   if ($update) {
      echo " <script>alert ('Berhasil Menambah Data Lainnya');
      document.location='../admisi/admisi-add-detail?id=$uid&status=7&visit=$visit'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
      document.location='../admisi/admisi-add-detail?id=$uid&status=7&visit=$visit'</script>";
   }
}



if (isset($_POST['simpanfileid'])) {
   $id = $_POST['id'];
   $uid = $_POST['uid'];
   $nomorRM = $_POST['nomorRM'];
   $visit = $_POST['visit'];
   $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG', 'jpeg', 'doc', 'docx');
   $namafile = $_FILES['dokumen']['name'];
   $x = explode('.', $namafile);
   $ekstensi = strtolower(end($x));
   $ukuran    = $_FILES['dokumen']['size'];
   $file_tmp = $_FILES['dokumen']['tmp_name'];
   $generatename = uniqid();
   $namafile = $generatename;
   $namafile = $generatename . "." . $ekstensi;

   if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      if ($ukuran < 5044070) {
         move_uploaded_file($file_tmp, '../file/dokumen/' . $namafile);
         $update = mysqli_query($koneksi, "UPDATE pasien_id SET dokumen='$namafile' WHERE id='$id'");
         if ($insert) {
            echo " <script>alert ('Dokumen Anda Berhasil Di Upload');
            document.location='../admisi/admisi-add-detail?id=$uid&status=6&visit=$visit'</script>";
         }
      } else {
         echo " <script>alert ('Ukuran File Terlalu Besar Max File 5MB');
         document.location='../admisi/admisi-add-detail?id=$uid&status=6&visit=$visit'</script>";
      }
   } else {
      echo " <script>alert ('Ekstension File Upload Tidak Diperbolehkan, File Harus Format JPG, PNG, PDF');
      document.location='../admisi/admisi-add-detail?id=$uid&status=6&visit=$visit'</script>";
   }
}


if (isset($_POST['simpanfoto'])) {
   $uid = $_POST['uidpasien'];
   $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG', 'jpeg', 'doc', 'docx');
   $namafile = $_FILES['dokumen']['name'];
   $x = explode('.', $namafile);
   $ekstensi = strtolower(end($x));
   $ukuran    = $_FILES['dokumen']['size'];
   $file_tmp = $_FILES['dokumen']['tmp_name'];
   $generatename = uniqid();
   $namafile = $generatename;
   $namafile = $generatename . "." . $ekstensi;

   if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      if ($ukuran < 5044070) {
         move_uploaded_file($file_tmp, '../file/fotopasien/' . $namafile);
         $update = mysqli_query($koneksi, "UPDATE pasien SET foto='$namafile' WHERE uid_pasien='$uid'");
         if ($insert) {
            echo " <script>alert ('Dokumen Anda Berhasil Di Upload');
            document.location='../admisi/admisi-add-detail?id=$uid&status=8&visit=$visit'</script>";
         }
      } else {
         echo " <script>alert ('Ukuran File Terlalu Besar Max File 5MB');
         document.location='../admisi/admisi-add-detail?id=$uid&status=8&visit=$visit'</script>";
      }
   } else {
      echo " <script>alert ('Ekstension File Upload Tidak Diperbolehkan, File Harus Format JPG, PNG, PDF');
      document.location='../admisi/admisi-add-detail?id=$uid&status=8&visit=$visit'</script>";
   }
}

if (isset($_POST['simpanttd'])) {
   $id = $_POST['id'];
   $folderPath = "../file/ttdpasien/";
   // $sig_string = $_POST['signature'];
   $nama_file = "signature_" . date("his") . ".png";
   $image_parts = explode(";base64,", $_POST['signature']);
   $image_type_aux = explode("image/", $image_parts[0]);
   $image_type = $image_type_aux[1];
   $image_base64 = base64_decode($image_parts[1]);
   $namafile = uniqid() . '.' . $image_type;
   $file = $folderPath . $namafile;

   file_put_contents($file, $image_base64);
   $update = mysqli_query($koneksi, "UPDATE pasien SET tandatangan='$namafile' WHERE uid_pasien='$id'");
   if ($update) {
      echo " <script>alert ('Tandan Tangan Anda Telah Tersimpan');
   document.location='../admisi/capture?id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
   document.location='../admisi/capture?id=$id'</script>";
   }
}

if (isset($_POST['hapuspasien'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM pasien WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['hapusantrean'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM antrian_loket WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}
