<?php
require '../../db/connect.php';
if (isset($_POST['simpannakes'])) {
   $noizin = $_POST['noizin'];
   $kategori = $_POST['kategori'];
   $nama = $_POST['nama'];
   $uid = md5(rand(1111, 9999));
   $insert = mysqli_query($koneksi, "INSERT INTO tenaga_kesehatan(no_izin, uid_nakes, nama, kategori)VALUES('$noizin','$uid','$nama','$kategori') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Simpan';
   }
}

if (isset($_POST['simpannakesdetail'])) {
   $id = $_POST['id'];
   $gelardepan = $_POST['gelardepan'];
   $nama = $_POST['nama'];
   $gelarbelakang = $_POST['gelarbelakang'];
   $tempatlahir = $_POST['tempatlahir'];
   $tanggallahir = $_POST['tanggallahir'];
   $gender = $_POST['gender'];
   $agama = $_POST['agama'];
   $kategori = $_POST['kategori'];
   $nip = $_POST['nip'];
   $noizin = $_POST['noizin'];
   $nik = $_POST['nik'];
   $pendidikan = $_POST['pendidikan'];
   $statuskawin = $_POST['status_kawin'];
   $update = mysqli_query($koneksi, "UPDATE tenaga_kesehatan SET nip='$nip', no_izin='$noizin', id_card='$nik', nama='$nama',
   kategori='$kategori', agama='$agama', gender='$gender', gelardepan='$gelardepan', gelarbelakang='$gelarbelakang', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir', pendidikan='$pendidikan', statuskawin='$statuskawin' WHERE uid_nakes='$id' ");

   $update = mysqli_query($koneksi, "INSERT INTO tenaga_kesehatan(no_izin, uid_nakes, nama, kategori)VALUES('$noizin','$uid','$nama','$kategori') ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Perbarui';
   }
}

if (isset($_POST['hapusnakes'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM tenaga_kesehatan WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Hapus';
   } else {
      $_SESSION["error"] = 'Gagal Hapus';
   }
}

if (isset($_POST['simpankategori'])) {
   $kategori = $_POST['kategori'];
   $insert = mysqli_query($koneksi, "INSERT INTO kategori_nakes (kategori) VALUES('$kategori')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Simpan';
   }
}

if (isset($_POST['ubahkategori'])) {
   $id = $_POST['id'];
   $kategori = $_POST['kategori'];
   $update = mysqli_query($koneksi, "UPDATE kategori_nakes SET kategori='$kategori' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Perbarui';
   }
}

if (isset($_POST['hapuskategori'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM kategori_nakes  WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Hapus';
   } else {
      $_SESSION["error"] = 'Gagal Hapus';
   }
}
if (isset($_POST['simpanpendidikan'])) {
   $pendidikan = $_POST['pendidikan'];
   $institusi = $_POST['institusi'];
   $jurusan = $_POST['jurusan'];
   $masuk = $_POST['masuk'];
   $lulus = $_POST['lulus'];
   $id = $_POST['id'];
   $tipe = $_POST['tipe'];
   $insert = mysqli_query($koneksi, "INSERT INTO nakes_pendidikan (uid, pendidikan, institusi, jurusan, masuk, lulus)VALUES('$id','$pendidikan','$institusi','$jurusan','$masuk','$lulus')");
   if ($insert) {
      echo " <script>alert ('Berhasil Tambah Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Tambah Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
   }
}

if (isset($_POST['ubahpendidikan'])) {
   $uid = $_POST['uid'];
   $pendidikan = $_POST['pendidikan'];
   $institusi = $_POST['institusi'];
   $jurusan = $_POST['jurusan'];
   $masuk = $_POST['masuk'];
   $lulus = $_POST['lulus'];
   $id = $_POST['id'];
   $tipe = $_POST['tipe'];
   $update = mysqli_query($koneksi, "UPDATE nakes_pendidikan SET pendidikan='$pendidikan',institusi='$institusi', jurusan='$jurusan', masuk='$masuk', lulus='$lulus' WHERE id='$id'  ");
   if ($update) {
      echo " <script>alert ('Berhasil Perbarui Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$uid'</script>";
   } else {
      echo " <script>alert ('Gagal Perbarui Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$uid'</script>";
   }
}

if (isset($_POST['hapuspendidikan'])) {
   $uid = $_POST['uid'];
   $id = $_POST['id'];
   $tipe = $_POST['tipe'];
   $delete = mysqli_query($koneksi, "DELETE FROM nakes_pendidikan WHERE id='$id' ");
   if ($delete) {
      echo " <script>alert ('Berhasil Hapus Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$uid'</script>";
   } else {
      echo " <script>alert ('Gagal Hapus Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$uid'</script>";
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
   $insert = mysqli_query($koneksi, "INSERT INTO nakes_alamat (uid, warga_negara, negara, alamat, provinsi, kabupaten, kecamatan, kelurahan, rtrw, kodepos)VALUES('$id','$warganegara','$negara','$alamat','$provinsi','$kabupaten','$kecamatan','$kelurahan','$rtrw','$kodepos')");
   if ($insert) {
      echo " <script>alert ('Berhasil Tambah Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Tambah Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
   }
}

if (isset($_POST['simpankeluarga'])) {
   $hubungan = $_POST['hubungan'];
   $nama = $_POST['nama'];
   $telepon = $_POST['telepon'];
   $alamat = $_POST['alamat'];
   $tipe = $_POST['tipe'];
   $id = $_POST['id'];
   $insert = mysqli_query($koneksi, "INSERT INTO nakes_keluarga (uid, hubungan, nama, telepon, alamat)VALUES('$id','$hubungan','$nama','$telepon','$alamat')");
   if ($insert) {
      echo " <script>alert ('Berhasil Tambah Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Tambah Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
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
   $update = mysqli_query($koneksi, "UPDATE nakes_keluarga SET hubungan='$hubungan', nama='$nama', telepon='$telepon', alamat='$alamat' WHERE id='$id'");
   if ($update) {
      echo " <script>alert ('Berhasil Perbarui Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$uid'</script>";
   } else {
      echo " <script>alert ('Gagal Perbarui Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$uid'</script>";
   }
}
if (isset($_POST['hapuskeluarga'])) {
   $uid = $_POST['uid'];
   $tipe = $_POST['tipe'];
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM nakes_keluarga WHERE id='$id'");
   if ($delete) {
      echo " <script>alert ('Berhasil Hapus Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$uid'</script>";
   } else {
      echo " <script>alert ('Gagal Hapus Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$uid'</script>";
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
         $insert = mysqli_query($koneksi, "INSERT INTO nakes_dokumen(uid, kategori, nomor, dokumen)VALUES('$id','$kategori','$nomor','$namafile')");
         if ($insert) {
            echo " <script>alert ('Berhasil Tambah Data');
            document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
         } else {
            echo " <script>alert ('Gagal Tambah Data');
            document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
         }
      } else {
         echo " <script>alert ('Ukuran File Terlalu Besar Max File 5MB');
         document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
      }
   } else {
      echo " <script>alert ('Ekstension File Upload Tidak Diperbolehkan, File Harus Format JPG, PNG, PDF');
      document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
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
         $update = mysqli_query($koneksi, "UPDATE nakes_dokumen SET kategori='$kategori', nomor='$nomor', dokumen='$namafile' WHERE id='$id' ");
         if ($update) {
            echo " <script>alert ('Berhasil Perbarui Data');
            document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
         } else {
            echo " <script>alert ('Gagal Perbarui Data');
            document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
         }
      } else {
         echo " <script>alert ('Ukuran File Terlalu Besar Max File 5MB');
         document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
      }
   } else {
      echo " <script>alert ('Ekstension File Upload Tidak Diperbolehkan, File Harus Format JPG, PNG, PDF');
      document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
   }
}

if (isset($_POST['hapusdokumen'])) {
   $uid = $_POST['uid'];
   $id = $_POST['id'];
   $tipe = $_POST['tipe'];
   $delete = mysqli_query($koneksi, "DELETE FROM nakes_dokumen WHERE id='$id' ");
   if ($delete) {
      echo " <script>alert ('Berhasil Hapus Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$uid'</script>";
   } else {
      echo " <script>alert ('Gagal Hapus Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$uid'</script>";
   }
}
if (isset($_POST['simpancatatan'])) {
   $id = $_POST['id'];
   $catatan = $_POST['catatan'];
   $tipe = $_POST['tipe'];
   $insert = mysqli_query($koneksi, "UPDATE tenaga_kesehatan SET catatan='$catatan' WHERE uid_nakes='$id'");
   if ($insert) {
      echo " <script>alert ('Berhasil Simpan Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan Data');
      document.location='../master/nakes-detail?tipe=$tipe&id=$id'</script>";
   }
}
if (isset($_POST['simpankategoridokumn'])) {
   $tipe = '2';
   $dokumen = $_POST['dokumen'];
   $insert = mysqli_query($koneksi, "INSERT INTO tipe_dokumen(tipe, tipeDokumen)VALUES('$tipe','$dokumen')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Simpan';
   }
}
if (isset($_POST['ubahkategoridokumen'])) {
   $id = $_POST['id'];
   $dokumen = $_POST['dokumen'];
   $update = mysqli_query($koneksi, "UPDATE tipe_dokumen SET tipeDokumen='$dokumen' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapuskategoridokumen'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM tipe_dokumen WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}
