<?php
require '../db/connect.php';
if (isset($_POST['simpanidentitas'])) {
   $id = md5(rand(11111, 99999));
   $kartu = $_POST['kartu'];
   $nokartu = $_POST['nokartu'];
   $sebutan = $_POST['sebutan'];
   $nama = $_POST['nama'];
   $tempatlahir = $_POST['tempatlahir'];
   $tanggallahir = $_POST['tanggallahir'];
   $gender = $_POST['jk'];
   $agama = $_POST['agama'];
   $hp = $_POST['hp'];
   $email = $_POST['email'];
   $alamat = $_POST['alamat'];
   $insert = mysqli_query($koneksi, "INSERT INTO pasien (uid, identitas, no_identitas, sebutan, namalengkap,tempatlahir, tanggallahir, jk, agama, hp, email, alamat) VALUES ('$id','$kartu','$nokartu','$sebutan','$nama','$tempatlahir','$tanggallahir','$gender','$agama','$hp','$email','$alamat')");
   if ($insert) {
      echo " <script>alert ('Identitas Anda Berhasil Di Registrasi, Berikut Isi Data Kelengkapan Dokumen');
   document.location='../admisi/dokumen?id=$id'</script>";
   }
}

if (isset($_POST['simpandokumen'])) {
   $kategori = "KTP";
   $id = $_POST['id'];
   $nodokumen = $_POST['nodokumen'];
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
         $insert = mysqli_query($koneksi, "INSERT INTO pasien_dokumen (uid, kategori, nodokumen, dokumen) VALUES ('$id','$kategori','$nodokumen','$namafile')");
         if ($insert) {
            echo " <script>alert ('Dokumen Anda Berhasil Di Upload');
            document.location='../admisi/layanan?id=$id'</script>";
         }
      } else {
         echo " <script>alert ('Ukuran File Terlalu Besar Max File 5MB');
         document.location='../admisi/dokumen?id=$id'</script>";
      }
   } else {
      echo " <script>alert ('Ekstension File Upload Tidak Diperbolehkan, File Harus Format JPG, PNG, PDF');
      document.location='../admisi/dokumen?id=$id'</script>";
   }
}

if (isset($_POST['simpanlayanan'])) {
   $id = $_POST['id'];
   $kode = $_POST['kode'];
   $paket = $_POST['paket'];
   $biaya = $_POST['biaya'];
   $tanggal = $_POST['tanggal'];
   $waktu = $_POST['waktu'];
   $insert = mysqli_query($koneksi, "INSERT INTO pasien_layanan (uid, kode, paket, biaya, tanggal, waktu) VALUES ('$id','$kode','$paket','$biaya','$tanggal','$waktu')");

   if ($insert) {
      echo " <script>alert ('Berhasil Menambahkan Paket MCU');
   document.location='../admisi/tandatangan?id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
   document.location='../admisi/layanan?id=$id'</script>";
   }
}

if (isset($_POST['simpanttd'])) {
   $id = $_POST['id'];
   $folderPath = "../file/foto/";
   // $sig_string = $_POST['signature'];
   $nama_file = "signature_" . date("his") . ".png";
   $image_parts = explode(";base64,", $_POST['signature']);
   $image_type_aux = explode("image/", $image_parts[0]);
   $image_type = $image_type_aux[1];
   $image_base64 = base64_decode($image_parts[1]);
   $namafile = uniqid() . '.' . $image_type;
   $file = $folderPath . $namafile;

   file_put_contents($file, $image_base64);
   $update = mysqli_query($koneksi, "UPDATE pasien SET tandatangan='$namafile' WHERE uid='$id'");
   if ($update) {
      echo " <script>alert ('Tandan Tangan Anda Telah Tersimpan Berikutnya Anda Bisa Datang Langsung Ke RSU HAJI MEDAN untuk dilakukan Pemeriskaan MCU Sesuai Paket Anda Pilih');
   document.location='../admisi/register'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan');
   document.location='../admisi/tandatangan?id=$id'</script>";
   }
}
