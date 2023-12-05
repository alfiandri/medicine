<?php
require '../../db/connect.php';
if (isset($_POST['simpandokter'])) {
   $nama = $_POST['nama'];
   $kategori = $_POST['kategori'];
   $spesialis = $_POST['spesialis'];
   $layanan = $_POST['layanan'];
   $uid = md5(rand(1111, 9999));
   $insert = mysqli_query($koneksi, "INSERT INTO dokter (uid_dokter, nama, kategori, spesialis, layanan) VALUES ('$uid','$nama','$kategori','$spesialis','$layanan')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Simpan';
   }
}
if (isset($_POST['simpandokterdetail'])) {
   $id = $_POST['id'];
   $gelardepan = $_POST['gelardepan'];
   $nip = $_POST['nip'];
   $sip = $_POST['sip'];
   $id_card = $_POST['nik'];
   $gelarbelakang = $_POST['gelarbelakang'];
   $nama = $_POST['nama'];
   $tempatlahir = $_POST['tempatlahir'];
   $tanggallahir = $_POST['tanggallahir'];
   $agama = $_POST['agama'];
   $gender = $_POST['gender'];
   $pendidikan = $_POST['pendidikan'];
   $email = $_POST['email'];
   $telepon = $_POST['telepon'];
   $kategori = $_POST['kategori'];
   $spesialis = $_POST['spesialis'];
   $sub = $_POST['sub'];
   $layanan = $_POST['layanan'];
   $tipe = $_POST['tipe'];
   $status_kawin = $_POST['status_kawin'];
   $update = mysqli_query($koneksi, "UPDATE dokter SET nip='$nip', sip='$sip', id_card='$id_card',
   gelar_depan='$gelardepan', gelar_belakang='$gelarbelakang', nama='$nama', tempat_lahir='$tempatlahir',
   tanggal_lahir='$tanggallahir', agama='$agama', gender='$gender', pendidikan='$pendidikan', email='$email', 
   telepon='$telepon', kategori='$kategori', spesialis='$spesialis', sub='$sub', layanan='$layanan', status_kawin='$status_kawin' WHERE uid_dokter='$id'");
   if ($update) {
      echo " <script>alert ('Berhasil Perbarui Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Perbarui');
      document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
   }
}
if (isset($_POST['hapusdokter'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM dokter WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
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
   $insert = mysqli_query($koneksi, "INSERT INTO dokter_pendidikan (uid, pendidikan, institusi, jurusan, masuk, lulus)VALUES('$id','$pendidikan','$institusi','$jurusan','$masuk','$lulus')");
   if ($insert) {
      echo " <script>alert ('Berhasil Tambah Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Tambah Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
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
   $update = mysqli_query($koneksi, "UPDATE dokter_pendidikan SET pendidikan='$pendidikan',institusi='$institusi', jurusan='$jurusan', masuk='$masuk', lulus='$lulus' WHERE id='$id'  ");
   if ($update) {
      echo " <script>alert ('Berhasil Perbarui Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$uid'</script>";
   } else {
      echo " <script>alert ('Gagal Perbarui Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$uid'</script>";
   }
}

if (isset($_POST['hapuspendidikan'])) {
   $uid = $_POST['uid'];
   $id = $_POST['id'];
   $tipe = $_POST['tipe'];
   $delete = mysqli_query($koneksi, "DELETE FROM dokter_pendidikan WHERE id='$id' ");
   if ($delete) {
      echo " <script>alert ('Berhasil Hapus Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$uid'</script>";
   } else {
      echo " <script>alert ('Gagal Hapus Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$uid'</script>";
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
   $insert = mysqli_query($koneksi, "INSERT INTO dokter_alamat (uid, warga_negara, negara, alamat, provinsi, kabupaten, kecamatan, kelurahan, rtrw, kodepos)VALUES('$id','$warganegara','$negara','$alamat','$provinsi','$kabupaten','$kecamatan','$kelurahan','$rtrw','$kodepos')");
   if ($insert) {
      echo " <script>alert ('Berhasil Tambah Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Tambah Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
   }
}
if (isset($_POST['simpankeluarga'])) {
   $hubungan = $_POST['hubungan'];
   $nama = $_POST['nama'];
   $telepon = $_POST['telepon'];
   $alamat = $_POST['alamat'];
   $tipe = $_POST['tipe'];
   $id = $_POST['id'];
   $insert = mysqli_query($koneksi, "INSERT INTO dokter_keluarga (uid, hubungan, nama, telepon, alamat)VALUES('$id','$hubungan','$nama','$telepon','$alamat')");
   if ($insert) {
      echo " <script>alert ('Berhasil Tambah Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Tambah Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
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
   $update = mysqli_query($koneksi, "UPDATE dokter_keluarga SET hubungan='$hubungan', nama='$nama', telepon='$telepon', alamat='$alamat' WHERE id='$id'");
   if ($update) {
      echo " <script>alert ('Berhasil Perbarui Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$uid'</script>";
   } else {
      echo " <script>alert ('Gagal Perbarui Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$uid'</script>";
   }
}
if (isset($_POST['hapuskeluarga'])) {
   $uid = $_POST['uid'];
   $tipe = $_POST['tipe'];
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM dokter_keluarga WHERE id='$id'");
   if ($delete) {
      echo " <script>alert ('Berhasil Hapus Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$uid'</script>";
   } else {
      echo " <script>alert ('Gagal Hapus Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$uid'</script>";
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
         $insert = mysqli_query($koneksi, "INSERT INTO dokter_dokumen(uid, kategori, nomor, dokumen)VALUES('$id','$kategori','$nomor','$namafile')");
         if ($insert) {
            echo " <script>alert ('Berhasil Tambah Data');
            document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
         } else {
            echo " <script>alert ('Gagal Tambah Data');
            document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
         }
      } else {
         echo " <script>alert ('Ukuran File Terlalu Besar Max File 5MB');
         document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
      }
   } else {
      echo " <script>alert ('Ekstension File Upload Tidak Diperbolehkan, File Harus Format JPG, PNG, PDF');
      document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
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
         $update = mysqli_query($koneksi, "UPDATE dokter_dokumen SET kategori='$kategori', nomor='$nomor', dokumen='$namafile' WHERE id='$id' ");
         if ($update) {
            echo " <script>alert ('Berhasil Perbarui Data');
            document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
         } else {
            echo " <script>alert ('Gagal Perbarui Data');
            document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
         }
      } else {
         echo " <script>alert ('Ukuran File Terlalu Besar Max File 5MB');
         document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
      }
   } else {
      echo " <script>alert ('Ekstension File Upload Tidak Diperbolehkan, File Harus Format JPG, PNG, PDF');
      document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
   }
}

if (isset($_POST['hapusdokumen'])) {
   $uid = $_POST['uid'];
   $id = $_POST['id'];
   $tipe = $_POST['tipe'];
   $delete = mysqli_query($koneksi, "DELETE FROM dokter_dokumen WHERE id='$id' ");
   if ($delete) {
      echo " <script>alert ('Berhasil Hapus Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$uid'</script>";
   } else {
      echo " <script>alert ('Gagal Hapus Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$uid'</script>";
   }
}

if (isset($_POST['simpanfilettd'])) {
   $id = $_POST['id'];
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
         move_uploaded_file($file_tmp, '../file/foto/' . $namafile);
         $update = mysqli_query($koneksi, "UPDATE dokter SET ttd='$namafile' WHERE id='$id'");
         if ($update) {
            echo " <script>alert ('Dokumen Anda Berhasil Di Upload');
            document.location='../admisi/dokter'</script>";
         }
      } else {
         echo " <script>alert ('Ukuran File Terlalu Besar Max File 5MB');
         document.location='../admisi/dokter'</script>";
      }
   } else {
      echo " <script>alert ('Ekstension File Upload Tidak Diperbolehkan, File Harus Format JPG, PNG, PDF');
      document.location='../admisi/dokter'</script>";
   }
}
if (isset($_POST['simpancatatan'])) {
   $id = $_POST['id'];
   $catatan = $_POST['catatan'];
   $tipe = $_POST['tipe'];
   $insert = mysqli_query($koneksi, "UPDATE dokter SET catatan='$catatan' WHERE uid_dokter='$id'");
   if ($insert) {
      echo " <script>alert ('Berhasil Simpan Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan Data');
      document.location='../master/dokter-detail?tipe=$tipe&id=$id'</script>";
   }
}
if (isset($_POST['simpanjadwal'])) {
   $id = $_POST['id'];
   $hari = $_POST['hari'];
   $mulai = $_POST['mulai'];
   $akhir = $_POST['akhir'];
   $insert = mysqli_query($koneksi, "INSERT INTO dokter_sch(uid, hari, mulai, akhir)VALUES('$id','$hari','$mulai','$akhir')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Simpan';
   }
}

if (isset($_POST['ubahjadwal'])) {
   $id = $_POST['id'];
   $hari = $_POST['hari'];
   $mulai = $_POST['mulai'];
   $akhir = $_POST['akhir'];
   $catatan = $_POST['catatan'];
   $update = mysqli_query($koneksi, "UPDATE dokter_sch SET hari='$hari', mulai='$mulai', akhir='$akhir', catatan='$catatan' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Perbarui';
   } else {
      $_SESSION["error"] = 'Gagal Perbarui';
   }
}

if (isset($_POST['hapusjadwal'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM dokter_sch WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Hapus';
   }
}

if (isset($_POST['simpankategori'])) {
   $kategori = $_POST['kategori'];
   $insert = mysqli_query($koneksi, "INSERT INTO kategori_dokter(kategori)VALUES('$kategori')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Simpan';
   }
}
if (isset($_POST['ubahkategori'])) {
   $id = $_POST['id'];
   $kategori = $_POST['kategori'];
   $update = mysqli_query($koneksi, "UPDATE kategori_dokter SET kategori='$kategori' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Perbarui';
   }
}
if (isset($_POST['hapuskategori'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM kategori_dokter WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Hapus';
   } else {
      $_SESSION["error"] = 'Gagal Hapus';
   }
}


if (isset($_POST['simpanspesialis'])) {
   $spesialis = $_POST['spesialis'];
   $insert = mysqli_query($koneksi, "INSERT INTO spesialis(spesialis)VALUES('$spesialis')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Simpan';
   }
}
if (isset($_POST['ubahspesialis'])) {
   $id = $_POST['id'];
   $spesialis = $_POST['spesialis'];
   $update = mysqli_query($koneksi, "UPDATE spesialis SET spesialis='$spesialis' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Perbarui';
   }
}
if (isset($_POST['hapusspesialis'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM spesialis WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Hapus';
   } else {
      $_SESSION["error"] = 'Gagal Hapus';
   }
}


if (isset($_POST['simpantipedokumen'])) {
   $tipe = '1';
   $dokumen = $_POST['dokumen'];
   $insert = mysqli_query($koneksi, "INSERT INTO tipe_dokumen(tipe, tipeDokumen)VALUES('$tipe','$dokumen')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Simpan';
   }
}
if (isset($_POST['ubahtipedokumen'])) {
   $id = $_POST['id'];
   $dokumen = $_POST['dokumen'];
   $update = mysqli_query($koneksi, "UPDATE tipe_dokumen SET tipeDokumen='$dokumen' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Perbarui';
   }
}
if (isset($_POST['hapustipedokumen'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM tipe_dokumen WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Hapus';
   } else {
      $_SESSION["error"] = 'Gagal Hapus';
   }
}


if (isset($_POST['simpaninstitusi'])) {
   $institusi = $_POST['institusi'];
   $insert = mysqli_query($koneksi, "INSERT INTO institusi(institusi)VALUES('$institusi')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Simpan';
   }
}
if (isset($_POST['ubahinstitusi'])) {
   $id = $_POST['id'];
   $institusi = $_POST['institusi'];
   $update = mysqli_query($koneksi, "UPDATE institusi SET institusi='$institusi' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Perbarui';
   }
}
if (isset($_POST['hapusinstitusi'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM institusi WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Hapus';
   } else {
      $_SESSION["error"] = 'Gagal Hapus';
   }
}

if (isset($_POST['simpanjurusan'])) {
   $jurusan = $_POST['jurusan'];
   $insert = mysqli_query($koneksi, "INSERT INTO jurusan(jurusan)VALUES('$jurusan')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Simpan';
   }
}
if (isset($_POST['ubahjurusan'])) {
   $id = $_POST['id'];
   $jurusan = $_POST['jurusan'];
   $update = mysqli_query($koneksi, "UPDATE jurusan SET jurusan='$jurusan' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Perbarui';
   }
}
if (isset($_POST['hapusjurusan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM jurusan WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Hapus';
   } else {
      $_SESSION["error"] = 'Gagal Hapus';
   }
}
