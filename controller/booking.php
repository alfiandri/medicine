<?php
require '../db/connect.php';
if (isset($_POST['simpanbooking'])) {
   $uid = $_POST['uid'];
   $check = mysqli_query($koneksi, "SELECT * FROM pasien WHERE uid_pasien='$uid'");
   $datacheck = mysqli_fetch_array($check);
   $nik = $datacheck['nik'];
   $nomorrm = $datacheck['nomor_rm'];
   $nama = $datacheck['nama_pasien'];
   $tipe = "Booking Online";
   $nobooking = date('Ymd') . rand(111, 999);
   $insert = mysqli_query($koneksi, "INSERT INTO pasien_booking (no_booking) VALUES ('$nobooking')");


   // if ($insert) {
   //    echo " <script>alert ('Berhasil Melengkapi Identitas Diri, Klik Ok Melanjutkan Registrasi');
   //    document.location='../booking/bo-layanan?ticket=$uid'</script>";
   // } else {
   //    echo " <script>alert ('Gagal Registrasi, Maaf Sistem Dalam Perbaikan, Segera Hubungi Call Center RS di 082166524717');
   //    document.location='../booking/bo'</script>";
   // }
}



if (isset($_POST['caridatapasien'])) {
   $nomorRM = $_POST['nomorRM'];
   $tanggallahir = $_POST['tanggallahir'];
   $nik = $_POST['nik'];
   $cari = mysqli_query($koneksi, "SELECT * FROM pasien WHERE nomor_kartu='$nik' AND nomor_rm='$nomorRM' AND tanggal_lahir='$tanggallahir'");
   $data =  mysqli_fetch_array($cari);
   if ($data == NULL) {
      echo " <script>alert ('Data Anda Tidak Ditemukan, Pastikan anda mengingat data diri anda pada sistem kami, atau registrasi pasien baru');
      document.location='../booking/bo-lama'</script>";
   } else {
      $id = $data['uid_pasien'];
      echo " <script>alert ('Periksa data anda terlbih dahulu untuk memastikan data identitas diri anda terupdate');
      document.location='../booking/bo-data?id=$id'</script>";
   }
}


if (isset($_POST['simpanmetodebayar'])) {
   $jenisBayar = $_POST['jenisBayar'];
   $noKartu = $_POST['noKartu'];
   $tanggal = $_POST['tanggal'];
   $waktu = $_POST['waktu'];
   $ticket = $_POST['ticket'];
   $kode = $_POST['kode'];
   $dok = $_POST['dok'];
   $caridokter = mysqli_query($koneksi, "SELECT * FROM dokter WHERE iddokter='$dok'");
   $datadokter = mysqli_fetch_array($caridokter);
   $carilayanan = mysqli_query($koneksi, "SELECT * FROM layanan WHERE id='$kode'");
   $datalayanan = mysqli_fetch_array($carilayanan);
   $dokter = $datadokter['nama'];
   $layanan = $datalayanan['layanan'];
   $update = mysqli_query($koneksi, "UPDATE pasienBooking SET tanggalBooking='$tanggal', waktuBooking='$waktu', layanan='$layanan', dokter='$dokter', jenisBayar='$jenisBayar', noKartu='$noKartu' WHERE uidBooking='$ticket'");
   if ($update) {
      echo " <script>alert ('Berhasil Menyimpan Metode Pembayaran, Lanjutkan Tanda Tangan Digital');
      document.location='../booking/bo-ttd?ticket=$ticket'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan Data, Pastikan memilih metode pembayayaran dan masukkan no kartu apabila memilih metode bayar selain umum');
      document.location='../booking/bo-ttd'</script>";
   }
}



if (isset($_POST['simpanadmisics'])) {
   $uid = md5(rand(111, 999));
   $id = date('Ymd' . rand(111, 999));
   $via = $_POST['via'];
   $tipe = "CS" . "-" . $via;
   $nama = $_POST['nama'];
   $tempatlahir = $_POST['tempatlahir'];
   $tanggallahir = $_POST['tanggallahir'];
   $gender = $_POST['gender'];
   $pekerjaan = $_POST['pekerjaan'];
   $pendidikan = $_POST['pendidikan'];
   $statuskawin = $_POST['statuskawin'];
   $jenisbayar = $_POST['jenisbayar'];
   $nohandphone = $_POST['nohandphone'];
   $alamat = $_POST['alamat'];
   $layanan = $_POST['layanan'];
   $dokter = $_POST['dokter'];
   $tanggal = $_POST['tanggal'];
   $waktu = $_POST['waktu'];
   $catatan = $_POST['catatan'];
   $insert = mysqli_query($koneksi, "INSERT INTO pasienBooking (uidBooking, noBooking, tipe, nik, namaPasien, tempatLahir, tanggalLahir, gender, statusKawin, alamat, pendidikan, pekerjaan, noHandphone, layanan, dokter, jenisBayar)
   VALUES ('$uid','$id','$tipe','$nik','$nama','$tempatlahir','$tanggallahir','$gender','$statuskawin','$alamat','$pendidikan','$pekerjaan','$nohandphone','$layanan','$dokter','$jenisBayar')");
   if ($insert) {
      echo " <script>alert ('Berhasil Menyimpan Data Registrasi Booking Melalui CS);
      document.location='../admisi/cs'</script>";
   } else {
      echo " <script>alert ('Gagal Registrasi, Maaf Sistem Dalam Perbaikan, Segera Hubungi Call Center RS di 082166524717');
      document.location='../admisi/cs'</script>";
   }
}
