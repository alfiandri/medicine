<?php

use Mpdf\Tag\Q;

require '../../db/connect.php';
if (isset($_POST['simpanjabatan'])) {
   $jabatan = $_POST['jabatan'];
   $insert = mysqli_query($koneksi, "INSERT INTO jabatan(jabatan)VALUES('$jabatan') ");
}
if (isset($_POST['ubahjabatan'])) {
   $id = $_POST['id'];
   $jabatan = $_POST['jabatan'];
   $update =  mysqli_query($koneksi, "UPDATE jabatan SET jabatan='$jabatan' WHERE id='$id'");
}
if (isset($_POST['hapusjabatan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM jabatan WHERE id='$id'");
}
if (isset($_POST['simpanstatuskaryawan'])) {
   $status = $_POST['status'];
   $insert = mysqli_query($koneksi, "INSERT INTO status_karyawan(status_karyawan)VALUES('$status') ");
}
if (isset($_POST['ubahstatuskaryawan'])) {
   $status = $_POST['status'];
   $id = $_POST['id'];
   $update = mysqli_query($koneksi, "UPDATE status_karyawan SET status_karyawan='$status' WHERE id='$id' ");
}
if (isset($_POST['hapusstatuskaryawan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM status_karyawan WHERE id='$id' ");
}
if (isset($_POST['simpanptkp'])) {
   $golongan = $_POST['golongan'];
   $insert = mysqli_query($koneksi, "INSERT INTO status_ptkp(golongan)VALUES('$golongan') ");
}
if (isset($_POST['ubahptkp'])) {
   $id = $_POST['id'];
   $golongan = $_POST['golongan'];
   $update = mysqli_query($koneksi, "UPDATE status_ptkp SET golongan='$golongan' WHERE id='$id' ");
}
if (isset($_POST['hapusptkp'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM status_ptkp WHERE id='$id' ");
}
if (isset($_POST['simpantarif'])) {
   $kode = $_POST['kode'];
   $tarif = $_POST['tarif'];
   $id = $_POST['id'];
   $insert = mysqli_query($koneksi, "INSERT INTO status_ptkp_detail (golongan, kode, tarif) VALUES('$id','$kode','$tarif')");
}
if (isset($_POST['ubahtarif'])) {
   $kode = $_POST['kode'];
   $tarif = $_POST['tarif'];
   $id = $_POST['id'];
   $update = mysqli_query($koneksi, "UPDATE status_ptkp_detail SET kode='$kode', tarif='$tarif' WHERE id='$id'");
}
if (isset($_POST['hapustarif'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM status_ptkp_detail WHERE id='$id' ");
}

if (isset($_POST['simpanpph'])) {
   $dari = $_POST['dari'];
   $sampai = $_POST['sampai'];
   $tarif = $_POST['tarif'];
   $insert = mysqli_query($koneksi, "INSERT INTO tarif_pph(dari, sampai, tarif)VALUES('$dari','$sampai','$tarif') ");
}

if (isset($_POST['simpancuti'])) {
   $jenis = $_POST['jenis'];
   $insert = mysqli_query($koneksi, "INSERT INTO jenis_cuti(jenis)VALUES('$jenis') ");
}

if (isset($_POST['simpanpelatihan'])) {
   $jenis = $_POST['jenis'];
   $insert = mysqli_query($koneksi, "INSERT INTO jenis_pelatihan(jenis)VALUES('$jenis') ");
}

if (isset($_POST['simpanprofesi'])) {
   $profesi = $_POST['profesi'];
   $insert = mysqli_query($koneksi, "INSERT INTO jenis_profesi(jenis)VALUES('$profesi') ");
}

if (isset($_POST['simpankaryawan'])) {
   $nomor = $_POST['nomor'];
   $nama = $_POST['nama'];
   $tempatlahir = $_POST['tempatlahir'];
   $tanggallahir = $_POST['tanggallahir'];
   $agama = $_POST['agama'];
   $gender = $_POST['gender'];
   $status = $_POST['status'];
   $insert = mysqli_query($koneksi, "INSERT INTO karyawan(nomor, nama, tempat_lahir, tanggal_lahir, agama, gender, status_karyawan)VALUES('$nomor','$nama','$tempatlahir','$tanggallahir','$agama','$gender','$status') ");
}

if (isset($_POST['hapuskaryawan'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM karyawan WHERE id='$id'");
}
