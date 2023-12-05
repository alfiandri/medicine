<?php
require '../db/connect.php';
if (isset($_POST['simpandokumen'])) {
   $kategori = "KTP";
   $id = $_POST['uid'];
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
            document.location='../pasien/layanan'</script>";
         }
      } else {
         echo " <script>alert ('Ukuran File Terlalu Besar Max File 5MB');
         document.location='../pasien/dokumen'</script>";
      }
   } else {
      echo " <script>alert ('Ekstension File Upload Tidak Diperbolehkan, File Harus Format JPG, PNG, PDF');
      document.location='../pasien/dokumen'</script>";
   }
}

if (isset($_POST['simpan'])) {
   $kategori = $_POST['kategori'];
   $id = $_POST['uid'];
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
            document.location='../pasien/dokumen-pasien'</script>";
         }
      } else {
         echo " <script>alert ('Ukuran File Terlalu Besar Max File 5MB');
         document.location='../pasien/dokumen-pasien'</script>";
      }
   } else {
      echo " <script>alert ('Ekstension File Upload Tidak Diperbolehkan, File Harus Format JPG, PNG, PDF');
      document.location='../pasien/dokumen-pasien'</script>";
   }
}
