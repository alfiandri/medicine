<?php

include 'connect.php';

$noKartu = '111111111111';
$kodeDokter = '1111';
$poliKontrol = '1';
$tglRencanaKontrol = '2023-10-10';
$user = 'Agus';
$noSPRI = '123123';
$namaDokter = 'budi';
$nama = 'aaaa';
$kelamin = 'L';
$tglLahir = '2023-10-10';
$namaDiagnosa = 'asdasd';

$sql = mysqli_query($mysqli, "INSERT INTO t_spri(noSPRI,tglRencanaKontrol,kodeDokter,namaDokter,noKartu,nama,kelamin,tglLahir,namaDiagnosa,poliKontrol,user) 
VALUES('$noSPRI','$tglRencanaKontrol','$kodeDokter','$namaDokter','$noKartu','$nama','$kelamin','$tglLahir','$namaDiagnosa','$poliKontrol', '$user')");