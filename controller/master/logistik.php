<?php

use Mpdf\Tag\Q;

require '../../db/connect.php';
if (isset($_POST['simpandepartemant'])) {
   $departemant = $_POST['departemant'];
   $kode = rand(11, 99);
   $insert = mysqli_query($koneksi, "INSERT INTO departemant(kode, departemant)VALUES('$kode','$departemant') ");
}
if (isset($_POST['hapusdepartemant'])) {
   $id = $_POST['id'];
   $departemant = $_POST['departemant'];
   $update = mysqli_query($koneksi, "UPDATE departemant SET departemant='$departemant' WHERE id='$id' ");
}

if (isset($_POST['hapusdepartemant'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM departemant WHERE id='$id' ");
}

if (isset($_POST['simpandivisi'])) {
   $departemant = $_POST['departemant'];
   $divisi = $_POST['divisi'];
   $insert = mysqli_query($koneksi, "INSERT INTO divisi(departemant, divisi )VALUES('$departemant','$divisi') ");
}
if (isset($_POST['ubahdivisi'])) {
   $id = $_POST['id'];
   $departemant = $_POST['departemant'];
   $divisi = $_POST['divisi'];
   $update = mysqli_query($koneksi, "UPDATE divisi SET departemant='$departemant', divisi='$divisi' WHERE id='$id' ");
}

if (isset($_POST['hapusdivisi'])) {
   $id = $_POST['id'];
   $delete = mysqli_query($koneksi, "DELETE FROM divisi WHERE id='$id' ");
}
