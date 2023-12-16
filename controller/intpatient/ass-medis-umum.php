<?php
require '../../db/connect.php';
if (isset($_POST['simpanmedisumum'])) {
   $uid = $_POST['id'];
   $norawat = $_POST['norawat'];
   //Riwayat Kesehatan
   $keluhanutama = $_POST['keluhanutama'];
   $penyakitkeluarga = $_POST['penyakitkeluarga'];
   $penyakitdahulu = $_POST['penyakitdahulu'];
   $pengobatan = $_POST['pengobatan'];
   $alergi = $_POST['alergi'];
   $penyakitsekarang = $_POST['penyakitsekarang'];
   $penggunaanobat = $_POST['penggunaanobat'];
   //Pemeriksaan Fisik
   $keadaanumum = $_POST['keadaanumum'];
   $kesadaran = $_POST['kesadaran'];
   $td = $_POST['td'];
   $nd = $_POST['nd'];
   $rr = $_POST['rr'];
   $suhu = $_POST['suhu'];
   $gcsE = $_POST['gcsE'];
   $gcsV = $_POST['gcsV'];
   $gcsM = $_POST['gcsM'];
   $spo = $_POST['spo'];
   $bb = $_POST['bb'];
   $tb = $_POST['tb'];
   //Fisik Tubuh
   $kepala = $_POST['kepala'];
   $gigi = $_POST['gigi'];
   $tht = $_POST['tht'];
   $thoraks = $_POST['thoraks'];
   $abdomen = $_POST['abdomen'];
   $genital = $_POST['genital'];
   $ekstremitas = $_POST['ekstremitas'];
   $kulit = $_POST['kulit'];
   $catatan = $_POST['catatan'];
   $lokalis = $_POST['keteranganlokalis'];
   $penunjang = $_POST['penunjang'];
   $diagnosis = $_POST['diagnosis'];
   $tatalaksana = $_POST['tatalaksana'];
   $konsul = $_POST['konsul'];

   $updatekesehatan = mysqli_query($koneksi, "UPDATE assKepUmum_Kesehatan SET keluhanUtama='$keluhanutama',penyakitKeluarga='$penyakitkeluarga', penyakitDahulu='$penyakitdahulu', pengobatan='$pengobatan', alergi='$alergi', penyakitSekarang='$penyakitsekarang', penggunaanObat='$penggunaanobat' WHERE  nomorRawat='$norawat'");

   $updatekeadaanumum  = mysqli_query($koneksi, "UPDATE assKepUmum_Keadaan SET td='$td', nadi='$nd', rr='$rr', suhu='$suhu', gcsE='$gcsE', gcsV='$gcsV', gcsM='$gcsM', spo='$spo', keadaanUmum='$keadaanumum', kesadaran='$kesadaran' WHERE nomorRawat='$norawat'");

   $insertfisik = mysqli_query($koneksi, "INSERT INTO assMedUmum_Fisik (uidPasien, nomorRawat, kepala, gigimulut, THT, thorax, abdomen, genital, ekstremitas, kulit, catatan, lokalis, penunjang, diagnosa, tatalaksana, konsul) VALUES ('$uid','$norawat','$kepala','$gigi','$tht','$thoraks','$abdomen','$genital','$ekstremitas','$kulit','$catatan','$lokalis','$penunjang','$diagnosis','$tatalaksana','$konsul')");

   if ($updatekesehatan && $updatekeadaanumum && $insertfisik) {
      echo " <script>alert ('Berhasil Menyimpan Data Pemeriksaan Medis Umum');
      document.location='../inpatient/awal-med-umum?id=$uid&norawat=$norawat'</script>";
   } else {
      echo " <script>alert ('Gagal Simpan Data !!!');
      document.location='../inpatient/awal-med-umum?id=$uid&norawat=$norawat'</script>";
   }
}
