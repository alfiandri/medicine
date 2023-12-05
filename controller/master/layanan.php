<?php
require '../../db/connect.php';
if (isset($_POST['simpantipe'])) {
   $kode = $_POST['kode'];
   $tipe = $_POST['tipe'];
   $keterangan = $_POST['keterangan'];
   $insert = mysqli_query($koneksi, "INSERT INTO tipe_kunjungan(kode, tipe, keterangan)VALUES('$kode','$tipe','$keterangan') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahtipe'])) {
   $id = $_POST['id'];
   $kode = $_POST['kode'];
   $tipe = $_POST['tipe'];
   $keterangan = $_POST['keterangan'];
   $update = mysqli_query($koneksi, "UPDATE tipe_kunjungan SET kode='$kode', tipe='$tipe', keterangan='$keterangan' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapustipe'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM tipe_kunjungan WHERE id='$id' ");
}
if (isset($_POST['simpanfaskes'])) {
   $tipe = $_POST['tipe'];
   $faskes = $_POST['faskes'];
   $telepon = $_POST['telepon'];
   $alamat = $_POST['alamat'];
   if ($tipe == 3) {
      $kategori = $_POST['kategori'];
      $insert = mysqli_query($koneksi, "INSERT INTO faskes_rekanan(tipe, kategori, faskes, telepon, alamat)VALUES('$tipe','$kategori','$faskes','$telepon','$alamat') ");
   } else {
      $insert = mysqli_query($koneksi, "INSERT INTO faskes_rekanan(tipe, faskes, telepon, alamat)VALUES('$tipe','$faskes','$telepon','$alamat') ");
   }
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahfaskes'])) {
   $id = $_POST['id'];
   $mou = $_POST['mou'];
   $faskes = $_POST['faskes'];
   $telepon = $_POST['telepon'];
   $alamat = $_POST['alamat'];
   $check = mysqli_query($koneksi, "SELECT * FROM faskes_rekanan WHERE id='$id' ");
   $datacheck = mysqli_fetch_array($check);
   $tipe = $datacheck['tipe'];
   if ($tipe == 3) {
      $kategori = $_POST['kategori'];
      $update = mysqli_query($koneksi, "UPDATE faskes_rekanan SET kategori='$kategori', faskes='$faskes', telepon='$telepon', alamat='$alamat', mou='$mou' WHERE id='$id' ");
   } else {
      $update = mysqli_query($koneksi, "UPDATE faskes_rekanan SET faskes='$faskes', telepon='$telepon', alamat='$alamat', mou='$mou' WHERE id='$id' ");
   }

   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusfaskes'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM faskes_rekanan WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanjaminan'])) {
   $jaminan = $_POST['jaminan'];
   $insert = mysqli_query($koneksi, "INSERT INTO jaminan(jaminan)VALUES('$jaminan') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahjaminan'])) {
   $id = $_POST['id'];
   $jaminan = $_POST['jaminan'];
   $update = mysqli_query($koneksi, "UPDATE jaminan SET jaminan='$jaminan' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusjaminan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM jaminan WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanasuransi'])) {
   $kategori = $_POST['kategori'];
   $asuransi = $_POST['asuransi'];
   $telepon = $_POST['telepon'];
   $alamat = $_POST['alamat'];
   $insert = mysqli_query($koneksi, "INSERT INTO asuransi(kategori, asuransi, telepon, alamat)VALUES('$kategori','$asuransi','$telepon','$alamat') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahasuransi'])) {
   $id = $_POST['id'];
   $asuransi = $_POST['asuransi'];
   $kategori = $_POST['kategori'];
   $telepon = $_POST['telepon'];
   $mou = $_POST['mou'];
   $alamat = $_POST['alamat'];
   $update = mysqli_query($koneksi, "UPDATE asuransi SET kategori='$kategori', asuransi='$asuransi', telepon='$telepon', mou='$mou', alamat='$alamat' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusasuransi'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM asuransi WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}


if (isset($_POST['simpankelaslayanan'])) {
   $kode = $_POST['kode'];
   $bpjs = $_POST['bpjs'];
   $kelas = $_POST['kelas'];
   $keterangan = $_POST['keterangan'];
   $insert = mysqli_query($koneksi, "INSERT INTO kelas_layanan(kode_kelas, kode_bpjs, kelas, keterangan)VALUES('$kode','$bpjs','$kelas','$keterangan') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahkelaslayanan'])) {
   $id = $_POST['id'];
   $kode = $_POST['kode'];
   $bpjs = $_POST['bpjs'];
   $kelas = $_POST['kelas'];
   $keterangan = $_POST['keterangan'];
   $update = mysqli_query($koneksi, "UPDATE kelas_layanan SET kode_kelas='$kode', kode_bpjs='$bpjs', kelas='$kelas', keterangan='$keterangan'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapuskelaslayanan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM kelas_layanan WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}



if (isset($_POST['simpanlayanan'])) {
   $kategori = $_POST['kategori'];
   $layanan = $_POST['layanan'];
   $insert = mysqli_query($koneksi, "INSERT INTO jenis_layanan(kategori, jenis)VALUES('$kategori','$layanan') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahlayanan'])) {
   $id = $_POST['id'];
   $kategori = $_POST['kategori'];
   $layanan = $_POST['layanan'];
   $update = mysqli_query($koneksi, "UPDATE jenis_layanan SET kategori='$kategori', jenis='$layanan' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapuslayanan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM jenis_layanan WHERE id='$id' ");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}


if (isset($_POST['simpanpenunjang'])) {
   $penunjang = $_POST['penunjang'];
   $insert = mysqli_query($koneksi, "INSERT INTO penunjang(penunjang)VALUES('$penunjang') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahpenunjang'])) {
   $id = $_POST['id'];
   $penunjang = $_POST['penunjang'];
   $update = mysqli_query($koneksi, "UPDATE penunjang SET penunjang='$penunjang' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapuspenunjang'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM penunjang WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpanpoli'])) {
   $kode = $_POST['kode'];
   $poli = $_POST['poli'];
   $status = $_POST['status'];
   $jam = $_POST['jam'];
   $kodeantri = $_POST['kodeantri'];
   $kuotajkn = $_POST['kuotajkn'];
   $kuotanon = $_POST['kuotanon'];
   $insert = mysqli_query($koneksi, "INSERT INTO poli(kdpoli, nmpoli, buka, jam_tutup, kode_antri, kuotajkn, kuotanonjkn)VALUES('$kode','$poli','$status','$jam','$kodeantri','$kuotajkn','$kuotanon') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahpoli'])) {
   $id = $_POST['id'];
   $kode = $_POST['kode'];
   $poli = $_POST['poli'];
   $status = $_POST['status'];
   $jam = $_POST['jam'];
   $kodeantri = $_POST['kodeantri'];
   $kuotajkn = $_POST['kuotajkn'];
   $kuotanon = $_POST['kuotanon'];
   $update = mysqli_query($koneksi, "UPDATE poli SET kdpoli='$kode', nmpoli='$poli', buka='$status', jam_tutup='$jam', kode_antri='$kodeantri', kuotajkn='$kuotajkn', kuotanonjkn='$kuotanon' WHERE id='$id'");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapuspoli'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM poli WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}

if (isset($_POST['simpannurse'])) {
   $kode = $_POST['kode'];
   $station = $_POST['station'];
   $keterangan = $_POST['keterangan'];
   $insert = mysqli_query($koneksi, "INSERT INTO nurse_station(kode, station, keterangan)VALUES('$kode','$station','$keterangan') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}

if (isset($_POST['ubahnurse'])) {
   $id = $_POST['id'];
   $kode = $_POST['kode'];
   $station = $_POST['station'];
   $keterangan = $_POST['keterangan'];
   $update = mysqli_query($koneksi, "UPDATE nurse_station SET kode='$kode', station='$station', keterangan='$keterangan' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}

if (isset($_POST['hapusnurse'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM nurse_station WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}


if (isset($_POST['simpanjenisoperasi'])) {
   $operasi = $_POST['operasi'];
   $insert = mysqli_query($koneksi, "INSERT INTO jenis_operasi(operasi)VALUES('$operasi') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahjenisoperasi'])) {
   $id = $_POST['id'];
   $operasi = $_POST['operasi'];
   $update = mysqli_query($koneksi, "UPDATE jenis_operasi SET operasi='$operasi' WHERE id='$id' ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapusjenisoperasi'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM jenis_operasi WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}


if (isset($_POST['simpankategorioperasi'])) {
   $kategori = $_POST['kategori'];
   $insert = mysqli_query($koneksi, "INSERT INTO kategori_operasi(kategori)VALUES('$kategori') ");
   if ($insert) {
      $_SESSION["sukses"] = 'Data Berhasil Disimpan';
   } else {
      $_SESSION["error"] = 'Gagal Disimpan';
   }
}
if (isset($_POST['ubahkategorioperasi'])) {
   $id = $_POST['id'];
   $kategori = $_POST['kategori'];
   $update = mysqli_query($koneksi, "UPDATE kategori_operasi SET kategori='$kategori' WHERE id='$id'  ");
   if ($update) {
      $_SESSION["sukses"] = 'Data Berhasil Diperbarui';
   } else {
      $_SESSION["error"] = 'Gagal Diperbarui';
   }
}
if (isset($_POST['hapuskategorioperasi'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM kategori_operasi WHERE id='$id'");
   if ($delete) {
      $_SESSION["sukses"] = 'Data Berhasil Dihapus';
   } else {
      $_SESSION["error"] = 'Gagal Dihapus';
   }
}
