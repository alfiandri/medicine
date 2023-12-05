<?php
require '../../db/connect.php';

if (isset($_POST['hapuspasien'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM pasien WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpansebutan'])) {
   $sebutan = $_POST['sebutan'];
   $insert = mysqli_query($koneksi, "INSERT INTO sebutan(sebutan)VALUES('$sebutan')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahsebutan'])) {
   $id = $_POST['id'];
   $sebutan = $_POST['sebutan'];
   $update = mysqli_query($koneksi, "UPDATE sebutan SET sebutan='$sebutan' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapusebutan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM sebutan WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpankategori'])) {
   $kategori = $_POST['kategori'];
   $insert = mysqli_query($koneksi, "INSERT INTO kategori_identitas(kategori)VALUES('$kategori')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahkategori'])) {
   $id = $_POST['id'];
   $kategori = $_POST['kategori'];
   $update = mysqli_query($koneksi, "UPDATE kategori_identitas SET kategori='$kategori' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapuskategori'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM kategori_identitas WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpangolongan'])) {
   $golongan = $_POST['golongan'];
   $insert = mysqli_query($koneksi, "INSERT INTO golongan_darah(blood)VALUES('$golongan')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahgolongan'])) {
   $id = $_POST['id'];
   $golongan = $_POST['golongan'];
   $update = mysqli_query($koneksi, "UPDATE golongan_darah SET blood='$golongan' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapusgolongan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM golongan_darah WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpansuku'])) {
   $suku = $_POST['suku'];
   $insert = mysqli_query($koneksi, "INSERT INTO suku(suku)VALUES('$suku')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahsuku'])) {
   $id = $_POST['id'];
   $suku = $_POST['suku'];
   $update = mysqli_query($koneksi, "UPDATE suku SET suku='$suku' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapussuku'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM suku WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanbahasa'])) {
   $bahasa = $_POST['bahasa'];
   $insert = mysqli_query($koneksi, "INSERT INTO bahasa(bahasa)VALUES('$bahasa')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahbahasa'])) {
   $id = $_POST['id'];
   $bahasa = $_POST['bahasa'];
   $update = mysqli_query($koneksi, "UPDATE bahasa SET bahasa='$bahasa' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapusbahasa'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM bahasa WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}


if (isset($_POST['simpanpasien'])) {
   $nomorrm = $_POST['nomorrm'];
   $nama = $_POST['nama'];
   $tempatlahir = $_POST['tempatlahir'];
   $tanggallahir = $_POST['tanggallahir'];
   $agama = $_POST['agama'];
   $gender = $_POST['gender'];
   $alamat = $_POST['alamat'];
   $uid = md5($nomorrm);
   $insert = mysqli_query($koneksi, "INSERT INTO pasien(uid_pasien, nomor_rm, nama_pasien, tempat_lahir, tanggal_lahir, gender, agama, alamat)VALUES('$uid','$nomorrm','$nama','$tempatlahir','$tanggallahir','$gender','$agama','$alamat')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['simpanpasiendetail'])) {
   $id = $_POST['id'];
   $tipe = $_POST['tipe'];
   $nik = $_POST['nik'];
   $nomorkk = $_POST['nomorkk'];
   $sebutan = $_POST['sebutan'];
   $nomorrm = $_POST['nomorrm'];
   $tempatlahir = $_POST['tempatlahir'];
   $tanggallahir = $_POST['tanggallahir'];
   $agama = $_POST['agama'];
   $gender = $_POST['gender'];
   $pekerjaan = $_POST['pekerjaan'];
   $pendidikan = $_POST['pendidikan'];
   $statuskawin = $_POST['statuskawin'];
   $handphone = $_POST['handphone'];
   $email = $_POST['email'];
   $bahasa = $_POST['bahasa'];
   $suku = $_POST['suku'];
   $golongandarah = $_POST['golongandarah'];
   $update = mysqli_query($koneksi, "UPDATE pasien SET nik='$nik', nomor_rm='$nomorrm', sebutan='$sebutan', nama_pasien='$nama', tempat_lahir='$tempatlahir', tanggal_lahir='$tanggallahir', gender='$gender', agama='$agama', no_handphone='$handphone', email='$email', status_kawin='$statuskawin', pendidikan='$pendidikan', pekerjaan='$pekerjaan', golongan_darah='$golongandarah', nomor_kk='$nomorkk', suku='$suku', bahasa='$bahasa' WHERE uid_pasien='$id'");
   if ($update) {
      echo " <script>alert ('Berhasil Perbarui Data');
      document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Perbarui');
      document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
   }
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
   $tipe = $_POST['tipe'];
   $update  = mysqli_query($koneksi, "UPDATE pasien SET alamat='$alamat', warga_negara='$warganegara', negara='$negara', provinsi='$provinsi', kabupaten='$kabupaten', kecamatan='$kecamatan', kelurahan='$kelurahan', rtrw='$rtrw', kodepos='$kodepos' WHERE uid_pasien='$id'");
   if ($update) {
      echo " <script>alert ('Berhasil Tambah Data');
      document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Tambah Data');
      document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
   }
}

if (isset($_POST['simpankeluarga'])) {
   $hubungan = $_POST['hubungan'];
   $nama = $_POST['nama'];
   $telepon = $_POST['telepon'];
   $alamat = $_POST['alamat'];
   $tipe = $_POST['tipe'];
   $id = $_POST['id'];
   $insert = mysqli_query($koneksi, "INSERT INTO pasien_keluarga (uid_pasien, hubungan, nama, telepon, alamat)VALUES('$id','$hubungan','$nama','$telepon','$alamat')");
   if ($insert) {
      echo " <script>alert ('Berhasil Tambah Data');
      document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Tambah Data');
      document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
   }
}
if (isset($_POST['ubahkeluarga'])) {
   $uid = $_POST['uid'];
   $hubungan = $_POST['hubungan'];
   $nama = $_POST['nama'];
   $telepon = $_POST['telepon'];
   $alamat = $_POST['alamat'];
   $tipe = $_POST['tipe'];
   $id = $_POST['id'];
   $update = mysqli_query($koneksi, "UPDATE pasien_keluarga SET hubungan='$hubungan', nama='$nama', telepon='$telepon', alamat='$alamat' WHERE id='$id'");
   if ($update) {
      echo " <script>alert ('Berhasil Perbarui Data');
      document.location='../master/pasien-detail?tipe=$tipe&id=$uid'</script>";
   } else {
      echo " <script>alert ('Gagal Perbarui Data');
      document.location='../master/pasien-detail?tipe=$tipe&id=$uid'</script>";
   }
}
if (isset($_POST['hapuskeluarga'])) {
   $uid = $_POST['uid'];
   $tipe = $_POST['tipe'];
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM pasien_keluarga WHERE id='$id'");
   if ($delete) {
      echo " <script>alert ('Berhasil Hapus Data');
      document.location='../master/pasien-detail?tipe=$tipe&id=$uid'</script>";
   } else {
      echo " <script>alert ('Gagal Hapus Data');
      document.location='../master/pasien-detail?tipe=$tipe&id=$uid'</script>";
   }
}

if (isset($_POST['simpanstatusdatang'])) {
   $status = $_POST['status'];
   $insert = mysqli_query($koneksi, "INSERT INTO status_datang(status)VALUES('$status')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahstatusdatang'])) {
   $id = $_POST['id'];
   $status = $_POST['status'];
   $update = mysqli_query($koneksi, "UPDATE status_datang SET status='$status' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapustatusdatang'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM status_datang WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanstatuspulang'])) {
   $status = $_POST['status'];
   $insert = mysqli_query($koneksi, "INSERT INTO status_pulang(status)VALUES('$status')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahstatuspulang'])) {
   $id = $_POST['id'];
   $status = $_POST['status'];
   $update = mysqli_query($koneksi, "UPDATE status_pulang SET status='$status' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapusstatuspulang'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM status_pulang WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpandokumen'])) {
   $id = $_POST['id'];
   $kategori = $_POST['kategori'];
   $nomor = $_POST['nomor'];
   $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG', 'jpeg', 'doc', 'docx');
   $namafile = $_FILES['dokumen']['name'];
   $x = explode('.', $namafile);
   $ekstensi = strtolower(end($x));
   $ukuran    = $_FILES['dokumen']['size'];
   $file_tmp = $_FILES['dokumen']['tmp_name'];
   $generatename = uniqid();
   $namafile = $generatename;
   $namafile = $generatename . "." . $ekstensi;
   $tipe = $_POST['tipe'];

   if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      if ($ukuran < 5044070) {
         move_uploaded_file($file_tmp, '../file/dokumen/' . $namafile);
         $insert = mysqli_query($koneksi, "INSERT INTO pasien_dokumen(uid, kategori, nomor, dokumen)VALUES('$id','$kategori','$nomor','$namafile')");
         if ($insert) {
            echo " <script>alert ('Berhasil Tambah Data');
            document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
         } else {
            echo " <script>alert ('Gagal Tambah Data');
            document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
         }
      } else {
         echo " <script>alert ('Ukuran File Terlalu Besar Max File 5MB');
         document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
      }
   } else {
      echo " <script>alert ('Ekstension File Upload Tidak Diperbolehkan, File Harus Format JPG, PNG, PDF');
      document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
   }
}

if (isset($_POST['ubahdokumen'])) {
   $uid = $_POST['uid'];
   $id = $_POST['id'];
   $kategori = $_POST['kategori'];
   $nomor = $_POST['nomor'];
   $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG', 'jpeg', 'doc', 'docx');
   $namafile = $_FILES['dokumen']['name'];
   $x = explode('.', $namafile);
   $ekstensi = strtolower(end($x));
   $ukuran    = $_FILES['dokumen']['size'];
   $file_tmp = $_FILES['dokumen']['tmp_name'];
   $generatename = uniqid();
   $namafile = $generatename;
   $namafile = $generatename . "." . $ekstensi;
   $tipe = $_POST['tipe'];

   if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
      if ($ukuran < 5044070) {
         move_uploaded_file($file_tmp, '../file/dokumen/' . $namafile);
         $update = mysqli_query($koneksi, "UPDATE pasien_dokumen SET kategori='$kategori', nomor='$nomor', dokumen='$namafile' WHERE id='$id' ");
         if ($update) {
            echo " <script>alert ('Berhasil Perbarui Data');
            document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
         } else {
            echo " <script>alert ('Gagal Perbarui Data');
            document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
         }
      } else {
         echo " <script>alert ('Ukuran File Terlalu Besar Max File 5MB');
         document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
      }
   } else {
      echo " <script>alert ('Ekstension File Upload Tidak Diperbolehkan, File Harus Format JPG, PNG, PDF');
      document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
   }
}

if (isset($_POST['hapusdokumen'])) {
   $uid = $_POST['uid'];
   $id = $_POST['id'];
   $tipe = $_POST['tipe'];
   $delete = mysqli_query($koneksi, "DELETE FROM pasien_dokumen WHERE id='$id' ");
   if ($delete) {
      echo " <script>alert ('Berhasil Hapus Data');
      document.location='../master/pasien-detail?tipe=$tipe&id=$uid'</script>";
   } else {
      echo " <script>alert ('Gagal Hapus Data');
      document.location='../master/pasien-detail?tipe=$tipe&id=$uid'</script>";
   }
}

if (isset($_POST['simpancatatan'])) {
   $id = $_POST['id'];
   $catatan = $_POST['catatan'];
   $tipe = $_POST['tipe'];
   $insert = mysqli_query($koneksi, "UPDATE pasien SET catatan='$catatan' WHERE uid_pasien='$id'");
   if ($insert) {
      echo " <script>alert ('Berhasil Simpan Data');
      document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan Data');
      document.location='../master/pasien-detail?tipe=$tipe&id=$id'</script>";
   }
}
