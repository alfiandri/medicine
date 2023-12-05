<?php
require '../../db/connect.php';
if (isset($_POST['simpanunit'])) {
   $unit = $_POST['unit'];
   $insert = mysqli_query($koneksi, "INSERT INTO farmasi_unit (unit)VALUES('$unit') ");
}
if (isset($_POST['ubahunit'])) {
   $id = $_POST['id'];
   $unit = $_POST['unit'];
   $update = mysqli_query($koneksi, "UPDATE farmasi_unit SET unit='$unit' WHERE id='$id' ");
}
if (isset($_POST['hapusunit'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM farmasi_unit WHERE id='$id' ");
}

if (isset($_POST['simpansigna'])) {
   $signa = $_POST['signa'];
   $insert = mysqli_query($koneksi, "INSERT INTO farmasi_signa (signa)VALUES('$signa') ");
}
if (isset($_POST['ubahsigna'])) {
   $id = $_POST['id'];
   $signa = $_POST['signa'];
   $update = mysqli_query($koneksi, "UPDATE farmasi_signa SET signa='$signa' WHERE id='$id' ");
}
if (isset($_POST['hapussigna'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM farmasi_signa WHERE id='$id' ");
}

if (isset($_POST['simpanmetode'])) {
   $metode = $_POST['metode'];
   $insert = mysqli_query($koneksi, "INSERT INTO farmasi_buatracikan (metode)VALUES('$metode') ");
}
if (isset($_POST['ubahmetode'])) {
   $id = $_POST['id'];
   $metode = $_POST['metode'];
   $update = mysqli_query($koneksi, "UPDATE farmasi_buatracikan SET metode='$metode' WHERE id='$id' ");
}
if (isset($_POST['hapusmetode'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM farmasi_buatracikan WHERE id='$id' ");
}


if (isset($_POST['simpangolongan'])) {
   $golongan = $_POST['golongan'];
   $insert = mysqli_query($koneksi, "INSERT INTO farmasi_golonganobat (golongan)VALUES('$golongan') ");
}
if (isset($_POST['ubahgolongan'])) {
   $id = $_POST['id'];
   $golongan = $_POST['golongan'];
   $update = mysqli_query($koneksi, "UPDATE farmasi_golonganobat SET golongan='$golongan' WHERE id='$id' ");
}
if (isset($_POST['hapusgolongan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM farmasi_golonganobat WHERE id='$id' ");
}

if (isset($_POST['simpanobat'])) {
   $kategori = $_POST['kategori'];
   $nama = $_POST['namaobat'];
   $satuan = $_POST['satuan'];
   $kandungan = $_POST['kandungan'];
   $alias = $_POST['alias'];
   $insert = mysqli_query($koneksi, "INSERT INTO obat (kategori, nama, kandungan, alias, unit)VALUES('$kategori','$nama','$kandungan','$alias','$satuan') ");
}
if (isset($_POST['ubahobat'])) {
   $id = $_POST['id'];
   $kategori = $_POST['kategori'];
   $nama = $_POST['namaobat'];
   $satuan = $_POST['satuan'];
   $kandungan = $_POST['kandungan'];
   $alias = $_POST['alias'];
   $update = mysqli_query($koneksi, "UPDATE obat SET kategori='$kategori', nama='$nama', kandungan='$kandungan', alias='$alias', unit='$unit' WHERE id='$id' ");
}
if (isset($_POST['hapusobat'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM obat WHERE id='$id' ");
}


if (isset($_POST['simpanbhp'])) {
   $kategori = $_POST['kategori'];
   $nama = $_POST['namaobat'];
   $satuan = $_POST['satuan'];
   $deskripsi = $_POST['deskripsi'];
   $insert = mysqli_query($koneksi, "INSERT INTO barang_bmhp  (kategori, satuan, nama_barang, catatan)VALUES('$kategori','$satuan','$nama','$deskripsi') ");
}
if (isset($_POST['ubahbhp'])) {
   $id = $_POST['id'];
   $kategori = $_POST['kategori'];
   $nama = $_POST['namaobat'];
   $satuan = $_POST['satuan'];
   $deskripsi = $_POST['deskripsi'];
   $update = mysqli_query($koneksi, "UPDATE barang_bmhp SET kategori='$kategori', satuan='$satuan', nama_barang='$nama', catatan='$deskripsi' WHERE id='$id' ");
}
if (isset($_POST['hapusbhp'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM barang_bmhp WHERE id='$id' ");
}



if (isset($_POST['simpanpaket'])) {
   $nama = $_POST['nama'];
   $catatan = $_POST['catatan'];
   $kode = rand(111, 999);
   $insert = mysqli_query($koneksi, "INSERT INTO obat_paket (kode, paket, catatan)VALUES('$kode','$nama','$catatan') ");
}
if (isset($_POST['ubahpaket'])) {
   $id = $_POST['id'];
   $nama = $_POST['nama'];
   $catatan = $_POST['catatan'];
   $update = mysqli_query($koneksi, "UPDATE obat_paket SET paket='$nama', catatan='$catatan' WHERE id='$id' ");
}
if (isset($_POST['hapuspaket'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM obat_paket WHERE id='$id' ");
}



if (isset($_POST['simpankategoribhp'])) {
   $kategori = $_POST['kategori'];
   $insert = mysqli_query($koneksi, "INSERT INTO bmhp_kategori (kategori)VALUES('$kategori') ");
}
if (isset($_POST['ubahkategoribhp'])) {
   $id = $_POST['id'];
   $kategori = $_POST['kategori'];
   $update = mysqli_query($koneksi, "UPDATE bmhp_kategori SET kategori='$kategori' WHERE id='$id' ");
}
if (isset($_POST['hapuskategoribhp'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM bmhp_kategori WHERE id='$id' ");
}


if (isset($_POST['simpanpaketdetail'])) {
   $kode = $_POST['kode'];
   $nama = $_POST['nama'];
   $satuan = $_POST['satuan'];
   $qty = $_POST['qty'];
   $signa = $_POST['signa'];
   $insert = mysqli_query($koneksi, "INSERT INTO obat_paket_detail (kode, obat, satuan, qty, signa)VALUES('$kode','$nama','$satuan','$qty','$signa') ");
}
if (isset($_POST['ubahpaketdetail'])) {
   $id = $_POST['id'];
   $nama = $_POST['nama'];
   $satuan = $_POST['satuan'];
   $qty = $_POST['qty'];
   $signa = $_POST['signa'];
   $update = mysqli_query($koneksi, "UPDATE obat_paket_detail SET obat='$nama', satuan='$satuan', qty='$qty', signa='$signa' WHERE id='$id' ");
}
if (isset($_POST['hapuspaketdetail'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM obat_paket_detail WHERE id='$id' ");
}
