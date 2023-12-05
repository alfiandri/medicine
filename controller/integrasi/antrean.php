<?php
require '../../db/connect.php';
if (isset($_POST['simpanantrean'])) {
   $kodebooking = date('dmY') . "A" . rand(000, 999);
   $jenispasien = $_POST['jenispasien'];
   $nomorkartu = $_POST['nomorkartu'];
   $nik = $_POST['nik'];
   $nohp = $_POST['nohp'];
   $kodepoli = $_POST['namapoli'];
   $checkpoli = mysqli_query($koneksi, "SELECT * FROM poli WHERE kdpoli='$kodepoli' ");
   $datapoli = mysqli_fetch_array($checkpoli);
   $namapoli = $datapoli['nmpoli'];
   $pasienbaru = $_POST['pasienbaru'];
   $norm = $_POST['norm'];
   $uidpasien = md5($norm);   
   $nama = $_POST['nama'];
   $tanggalperiksa = $_POST['tanggalperiksa'];
   $kodedokter = rand(1111, 9999);
   $namadokter = $_POST['namadokter'];
   $jampraktek = $_POST['jampraktek'];
   $jeniskunjungan = $_POST['jeniskunjungan'];
   $nomorreferensi = $_POST['nomorreferensi'];
   $checkantrian = mysqli_query($koneksi, "SELECT * FROM antrian_poli");
   $dataantrian =  mysqli_num_rows($checkantrian);
   $dataantrian = $angkaantreandataantrian + 1;
   $nomorantrean = "M-" . $dataantrian;
   $estimasidilayani = date('Hism');
   $sisakuotajkn = 9 - $noantri;
   $kuotajkn = 10;
   $sisakuotanonjkn = 0;
   $kuotanonjkn = 0;
   $novisit = date('Ymd') . rand(111, 999);
   $tanggal = date('Y-m-d');
   $waktu = date('H:m:s');
   $bayar = "BPJS";
   $sumber = "RJ";
   $keterangan = "Peserta harap 30 menit lebih awal guna pencatatan administrasi";
   $insert = mysqli_query($koneksi, "INSERT INTO admisi_jkn (kodebooking, jenispasien, nomorkartu, nik, nama, nohp, kodepoli,namapoli,pasienbaru, norm, tanggalperiksa, kodedokter, namadokter, jampraktek, jeniskunjungan, nomorreferensi,nomorantrean, angkaantrean, estimasidilayani,sisakuotajkn, kuotajkn, sisakuotanonjkn, kuotanonjkn,keterangan)VALUES('$kodebooking','$jenispasien','$nomorkartu','$nik','$nama','$nohp','$kodepoli','$namapoli','$pasienbaru','$norm','$tanggalperiksa','$kodedokter','$namadokter','$jampraktek','$jeniskunjungan','$nomorreferensi','$nomorantrean','$dataantrian','$estimasidilayani','$sisakuotajkn','$kuotajkn','$sisakuotanonjkn','$kuotanonjkn','$keterangan')");
   $insertantrian = mysqli_query($koneksi, "INSERT INTO antrian_poli (kodebooking, nomorrm, loket, antrian)VALUES('$kodebooking','$norm','$loket','$nomorantrean')");
   $insertvisit = mysqli_query($koneksi, "INSERT INTO pasien_visit (uid_pasien, nomor_rm, nomor_visit, kodebooking, tanggal, waktu, layanan, jenis_bayar, dokter, sumber)VALUES('$uidpasien','$norm','$novisit','$kodebooking','$tanggal','$waktu','$namapoli','$bayar','$namadokter','$sumber')");
   $insertpasien = mysqli_query($koneksi, "INSERT INTO pasien (uid_pasien, nik, nomor_kartu, nomor_rm, nama_pasien)VALUES('$uidpasien','$nik','$nomorkartu','$norm','$nama')");
   if ($insert) {
      echo " <script>alert ('Berhasil Tambah Data Dengan Kode Booking : $kodebooking');
      document.location='../../module/simulasi-jkn'</script>";
   } else {
      echo " <script>alert ('Gagal');
      document.location='../../module/simulasi-jkn/add'</script>";
   }
}
