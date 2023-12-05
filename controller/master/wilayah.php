<?php
require '../../db/connect.php';
if (isset($_POST['simpannegara'])) {
   $iso = $_POST['iso'];
   $iso3 = $_POST['iso3'];
   $kode = $_POST['kode'];
   $telepon = $_POST['telepon'];
   $negara = $_POST['negara'];
   $insert = mysqli_query($koneksi, "INSERT INTO negara (iso, name, nicename, iso3, numcode, phonecode) VALUES('$iso','$negara','$negara','$iso3','$kode','$telepon')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahnegara'])) {
   $id = $_POST['id'];
   $iso = $_POST['iso'];
   $iso3 = $_POST['iso3'];
   $kode = $_POST['kode'];
   $telepon = $_POST['telepon'];
   $negara = $_POST['negara'];
   $update = mysqli_query($koneksi, "UPDATE negara SET iso='$iso', iso3='$iso3', name='$negara', nicename='$negara', numcode='$kode', phonecode='$telepon' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusnegara'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM negara  WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanprovinsi'])) {
   $kode = $_POST['kode'];
   $provinsi = $_POST['provinsi'];
   $insert = mysqli_query($koneksi, "INSERT INTO wil_provinsi (id, provinsi) VALUES('$kode','$provinsi')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahprovinsi'])) {
   $id = $_POST['id'];
   $provinsi = $_POST['provinsi'];
   $update = mysqli_query($koneksi, "UPDATE wil_provinsi SET provinsi='$provinsi' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusprovinsi'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM wil_provinsi  WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}
if (isset($_POST['simpankabupaten'])) {
   $kode = $_POST['kode'];
   $provinsi = $_POST['provinsi'];
   $kabupaten = $_POST['kabupaten'];
   $checkprov = mysqli_query($koneksi, "SELECT * FROM wil_provinsi WHERE provinsi='$provinsi'");
   $dataprov = mysqli_fetch_array($checkprov);
   $prov = $dataprov['id'];
   $insert = mysqli_query($koneksi, "INSERT INTO wil_kabupaten (id, kodeprovinsi, kab) VALUES('$kode','$prov','$kabupaten')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahkabupaten'])) {
   $id = $_POST['id'];
   $kabupaten = $_POST['kabupaten'];
   $update = mysqli_query($koneksi, "UPDATE wil_kabupaten SET kab='$kabupaten' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapuskabupaten'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM wil_kabupaten WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpankecamatan'])) {
   $kode = $_POST['kode'];
   $kabupaten = $_POST['kabupaten'];
   $kecamatan = $_POST['kecamatan'];
   $checkkab = mysqli_query($koneksi, "SELECT * FROM wil_kabupaten WHERE kab='$kabupaten'");
   $datakab = mysqli_fetch_array($checkkab);
   $kabid = $datakab['id'];
   $insert = mysqli_query($koneksi, "INSERT INTO wil_kecamatan (id, kab_id, kec) VALUES('$kode','$kabid','$kecamatan')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahkecamatan'])) {
   $id = $_POST['id'];
   $kecamatan = $_POST['kecamatan'];
   $update = mysqli_query($koneksi, "UPDATE wil_kecamatan SET kec='$kecamatan' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapuskecamatan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM wil_kecamatan WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpankelurahan'])) {
   $kode = $_POST['kode'];
   $kecamatan = $_POST['kecamatan'];
   $kelurahan = $_POST['kelurahan'];
   $checkkec = mysqli_query($koneksi, "SELECT * FROM wil_kecamatan WHERE kec='$kecamatan'");
   $datakec = mysqli_fetch_array($checkkec);
   $kecid = $datakec['id'];
   $insert = mysqli_query($koneksi, "INSERT INTO wil_kelurahan (id, kec_id, kel) VALUES('$kode','$kecid','$kelurahan')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahkelurahan'])) {
   $id = $_POST['id'];
   $kelurahan = $_POST['kelurahan'];
   $update = mysqli_query($koneksi, "UPDATE wil_kelurahan SET kel='$kelurahan' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapuskelurahan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM wil_kelurahan WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}
if (isset($_POST['carikabupaten'])) {
   $provinsi = $_POST['provinsi'];
   $caridata = mysqli_query($koneksi, "SELECT * FROM wil_provinsi WHERE provinsi='$provinsi'");
   $data = mysqli_fetch_array($caridata);
   $kode = $data['id'];
   echo "<script>document.location='../../module/master/wil-kabupaten?id=$kode'</script>";
}

if (isset($_POST['carikecamatan'])) {
   $kabupaten = $_POST['kabupaten'];
   $caridata = mysqli_query($koneksi, "SELECT * FROM wil_kabupaten WHERE kab='$kabupaten'");
   $data = mysqli_fetch_array($caridata);
   $kode = $data['id'];
   echo "<script>document.location='../../module/master/wil-kecamatan?id=$kode'</script>";
}


if (isset($_POST['carikelurahan'])) {
   $kecamatan = $_POST['kecamatan'];
   $caridata = mysqli_query($koneksi, "SELECT * FROM wil_kecamatan WHERE kec='$kecamatan'");
   $data = mysqli_fetch_array($caridata);
   $kode = $data['id'];
   echo "<script>document.location='../../module/master/wil-kelurahan?id=$kode'</script>";
}


if (isset($_POST['carikodepos'])) {
   $kecamatan = $_POST['kecamatan'];
   $caridata = mysqli_query($koneksi, "SELECT * FROM wil_kecamatan WHERE kec='$kecamatan'");
   $data = mysqli_fetch_array($caridata);
   $kode = $data['kec'];
   echo "<script>document.location='../../module/master/wil-kodepos?id=$kode'</script>";
}

if (isset($_POST['simpankodepos'])) {
   $kode_wilayah = $_POST['kode_wilayah'];
   $kode = $_POST['kode'];
   $provinsi = $_POST['provinsi'];
   $kabupaten = $_POST['kabupaten'];
   $kecamatan = $_POST['kecamatan'];
   $kelurahan = $_POST['kelurahan'];
   $insert = mysqli_query($koneksi, "INSERT INTO wil_kodepos (kode_wilayah, kode_pos, provinsi, kabupaten, kecamatan, kelurahan) VALUES('$kode_wilayah','$kode','$provinsi','$kabupaten','$kecamatan','$kelurahan')");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahkodepos'])) {
   $id = $_POST['id'];
   $kode_wilayah = $_POST['kode_wilayah'];
   $kode = $_POST['kode'];
   $provinsi = $_POST['provinsi'];
   $kabupaten = $_POST['kabupaten'];
   $kecamatan = $_POST['kecamatan'];
   $kelurahan = $_POST['kelurahan'];
   $update = mysqli_query($koneksi, "UPDATE wil_kodepos SET kode_wilayah='$kode_wilayah', kode_pos='$kode', provinsi='$provinsi', kabupaten='$kabupaten', kecamatan='$kecamatan', kelurahan='$kelurahan' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapuskodepos'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM wil_kodepos WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}
