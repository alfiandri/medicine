<?php
require '../../db/connect.php';
if (isset($_POST['simpankeperawatan'])) {
   $uid = $_POST['id'];
   $norawat = $_POST['norawat'];
   //Keadaan Umum
   $td = $_POST['td'];
   $nd = $_POST['nd'];
   $rr = $_POST['rr'];
   $suhu = $_POST['suhu'];
   $gcsE = $_POST['gcsE'];
   $gcsV = $_POST['gcsV'];
   $gcsM = $_POST['gcsM'];
   //Nutrisi
   $bb = $_POST['bb'];
   $tb = $_POST['tb'];
   $bmi = $_POST['bmi'];
   //Riwayat Kesehatan
   $keluhanutama = $_POST['keluhanutama'];
   $penyakitkeluarga = $_POST['penyakitkeluarga'];
   $penyakitdahulu = $_POST['penyakitdahulu'];
   $pengobatan = $_POST['pengobatan'];
   $alergi = $_POST['alergi'];
   //Fungsional
   $alatbantu = $_POST['alatbantu'];
   $catatanalatbantu = $_POST['catatanalatbantu'];
   $prothesa = $_POST['prothesa'];
   $catatanprothesa = $_POST['catatanprothesa'];
   $cacatfisik = $_POST['cacatfisik'];
   $adl = $_POST['adl'];
   //Psikologis
   $statuspsikologis = $_POST['statuspsikologis'];
   $catatanpsikologis = $_POST['catatanpsikologis'];
   $bahasa = $_POST['bahasa'];
   $catatanbahasa = $_POST['catatanbahasa'];
   $hubungan = $_POST['hubungan'];
   $tinggal = $_POST['tinggal'];
   $ekonomi = $_POST['ekonomi'];
   $kepercayaan = $_POST['kepercayaan'];
   $catatankepercayaan = $_POST['catatankepercayaan'];
   $edukasi = $_POST['edukasi'];
   $catatanedukasi = $_POST['catatanedukasi'];
   //Resiko Jatuh
   $seimbang = $_POST['seimbang'];
   $alatbantu = $_POST['alatbantu'];
   $menopang = $_POST['menopang'];
   $hasil = $_POST['hasil'];
   $dilaporkan = $_POST['dilaporkan'];
   $jam = $_POST['jam'];
   //Skrining Gizi
   $penurunanbb = $_POST['penurunanbb'];
   $nafsumakan = $_POST['nafsumakan'];
   //Risiko Jatuh
   $rasanyeri = $_POST['rasanyeri'];
   $penyabab = $_POST['penyabab'];
   $kualitas = $_POST['kualitas'];
   $lokasi = $_POST['lokasi'];
   $menyebar = $_POST['menyebar'];
   $skala = $_POST['skala'];
   $waktudurasi = $_POST['waktudurasi'];
   $nyerihilang = $_POST['nyerihilang'];
   $dilaporkan = $_POST['dilaporkan'];
   $jam = $_POST['jam'];

   $insertkeadaanumum = mysqli_query($koneksi, "INSERT INTO assKepUmum_Keadaan (uidPasien, nomorRawat, td, nadi, rr, suhu, gcsE, gcsV, gcsM) VALUES ('$uid','$norawat','$td', '$nd','$rr','$suhu','$gcsE','$gcsV','$gcsM')");
   $insertnutrisi = mysqli_query($koneksi, "INSERT INTO assKepUmum_Nutrisi (uidPasien, nomorRawat, bb, tb, bmi) VALUES ('$uid','$norawat','$bb','$tb','$bmi')");
   $inserkesehatan = mysqli_query($koneksi, "INSERT INTO assKepUmum_Kesehatan (uidPasien, nomorRawat, keluhanUtama, penyakitKeluarga, penyakitDahulu, pengobatan, alergi)VALUES('$uid','$norawat','$keluhanutama','$penyakitkeluarga','$penyakitdahulu','$pengobatan','$alergi')");
   $insertfungsional = mysqli_query($koneksi, "INSERT INTO assKepUmum_Fungisonal (uidPasien, nomorRawat, alatBantu, alatBantuCatatan, prothesa, prothesaCatatan, cacatFisik, ADL) VALUES ('$uid','$norawat','$alatbantu','$catatanalatbantu','$prothesa','$catatanprothesa','$cacatfisik','$adl')");
   $insertpsikologis = mysqli_query($koneksi, "INSERT INTO assKepUmum_Psikolog (uidPasien, nomorRawat, statusPsikologis, catatanPsikologis, bahasa, catatanBahasa, hubunganKeluarga, tinggal, ekonomi, kepercayaan, catatanKepercayaan, edukasi, catatanEdukasi) VALUES ('$uid','$norawat','$statuspsikologis','$catatanpsikologis','$bahasa','$catatanbahasa','$hubungan','$tinggal','$ekonomi','$kepercayaan','$catatankepercayaan','$edukasi','$catatanedukasi')");
   $insertjatuh = mysqli_query($koneksi, "INSERT INTO assKepUmum_Jatuh (uidPasien, nomorRawat, seimbang, alatBantu, menopang, hasil, dilaporkan, jam) VALUES ('$uid','$norawat','$seimbang','$alatbantu','$menopang','$hasil','$dilaporkan','$jam')");
   $insertgizi = mysqli_query($koneksi, "INSERT INTO assKepUmum_Gizi (uidPasien, nomorRawat, penurunanBB, nafsuMakan) VALUES ('$uid','$norawat','$penurunanbb','$nafsumakan')");
   $insertnyeri = mysqli_query($koneksi, "INSERT INTO assKepUmum_TingkatNyeri (uidPasien, nomorRawat, rasaNyeri, penyebab, kualitas, lokasi, menyebar, skala, waktuDurasi, nyeriHilang, dilaporkan, jam) VALUES ('$uid','$norawat','$rasanyeri','$penyabab','$kualitas','$lokasi','$menyebar','$skala','$waktudurasi','$nyerihilang','$dilaporkan','$jam')");
   if ($insertkeadaanumum && $insertnutrisi && $insertnutrisi && $insertfungsional && $insertpsikologis && $insertjatuh && $insertgizi && $insertnyeri) {
      echo " <script>alert ('Berhasil Menyimpan Data Pemeriksaan Keperawatan');
      document.location='../inpatient/awal-kep-umum?id=$uid&norawat=$norawat'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan Data !!!');
      document.location='../inpatient/awal-kep-umum?id=$uid&norawat=$norawat'</script>";
   }
}
if (isset($_POST['simpanmasalahkeparawatan'])) {
   $id = $_POST['id'];
   $norawat = $_POST['norawat'];
   $masalah = $_POST['masalah'];
   $insert = mysqli_query($koneksi, "INSERT INTO assKepUmum_masalahKeperawatan (uidPasien, nomorRawat, masalah) VALUES ('$id','$norawat','$masalah')");
   if ($insert) {
      echo " <script>alert ('Berhasil Menyimpan Data Masalah Keperawatan');
      document.location='../inpatient/awal-kep-umum?id=$uid&norawat=$norawat'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan Data !!!');
      document.location='../inpatient/awal-kep-umum?id=$uid&norawat=$norawat'</script>";
   }
}
