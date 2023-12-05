    <?php
    session_start();
    require "../koneksi.php";
    // if (empty($_SESSION['username'])) {
    //     echo "<script>alert('Maaf, Untuk Akses Halaman Ini, anda Harus Login Terlebih Dahulu');
    // document.location='../index.php'</script>";
    // }
    date_default_timezone_set('Asia/Jakarta');
    function tampildata($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
    function tampildetail($tampil)
    {
        global $koneksi;
        $result = mysqli_query($koneksi, $tampil);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    //  Module Rawat Jalan
    if (isset($_POST['simpanpengkajian'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $keluhan = $_POST['keluhan'];
        $kesadaranumum = $_POST['keadaanumum'];
        $kesadaran = $_POST['kesadaran'];
        $bb = $_POST['bb'];
        $tb = $_POST['tb'];
        $td = $_POST['td'];
        $nadi = $_POST['nadi'];
        $napas = $_POST['napas'];
        $statusgizi = $_POST['statusgizi'];
        $pengkajiannyeri = $_POST['pengkajiannyeri'];
        $lokasinyeri = $_POST['lokasinyeri'];
        $pencetus = $_POST['pencetus'];
        $durasi = $_POST['durasi'];
        $skala = $_POST['skala'];
        $resikojatuh= $_POST['resikojatuh'];
        $pengetahuan = $_POST['pengetahuan'];
        $penyimpangan = $_POST['penyimpangan'];
        $hambatan = $_POST['hambatan'];
        $keteranganhamabatan = $_POST['keteranganhamabatan'];
        $insert = mysqli_query($koneksi, "INSERT INTO tpasienperawatanawal (novisit, nomorrm, keluhan, kesadaran, kesadaranumum, bb, tb, td, nadi, napas,
        statusgizi, nyeri, lokasinyeri, pencetus, durasi, skala, resikojatuh, pengetahuan, perilaku, hambatankomunikasi, keterangankomunikasi)
        VALUES('$novisit','$nomorrm','$keluhan','$kesadaran','$kesadaranumum','$bb','$tb','$td','$nadi','$napas','$statusgizi','$pengkajiannyeri','$lokasinyeri',
        '$pencetus','$durasi','$skala','$resikojatuh','$pengetahuan','$penyimpangan','$hambatan','$keteranganhamabatan')");
    }

    if (isset($_POST['simpanpemeriksaanumum'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $pemeriksaan = $_POST['pemeriksaan'];
        $riwayatalergi = $_POST['riwayatalergi'];
        $penyakitterdahulu = $_POST['penyakitterdahulu'];
        $penyakitkeluarga = $_POST['penyakitkeluarga'];
        $riwayatberobat = $_POST['riwayatberobat'];
        $catatan = $_POST['catatan'];
        $icdutama = $_POST['icdutama'];
        $terapi = $_POST['terapi'];
        $penyulit = $_POST['penyulit'];
        $tindakan = $_POST['tindakan'];
        $penunjang = (count($_POST['penunjang']) > 0) ? implode(',', $_POST['penunjang']) : ""; 
        $catatanlain = $_POST['catatanlain'];
        $catatanpenunjang = $_POST['catatanpenunjang'];
        $insert = mysqli_query($koneksi, "INSERT INTO tpasienpemeriksaanumum (novisit, nomorrm, pemeriksaan, alergi, 
        penyakitterdahulu, penyakitkeluarga, pengobatan, catatan, diagnosautama, penyulit, tindakan, 
        terapi, penunjang, catatanlain, catatanpenunjang)
        VALUES('$novisit','$nomorrm','$pemeriksaan','$riwayatalergi','$penyakitterdahulu','$penyakitkeluarga','$riwayatberobat',
        '$catatan','$icdutama','$penyulit','$tindakan','$terapi','$penunjang','$catatanlain','$catatanpenunjang')");
    }
    if (isset($_POST['ubahpemeriksaanumum'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $pemeriksaan = $_POST['pemeriksaan'];
        $riwayatalergi = $_POST['riwayatalergi'];
        $penyakitterdahulu = $_POST['penyakitterdahulu'];
        $penyakitkeluarga = $_POST['penyakitkeluarga'];
        $riwayatberobat = $_POST['riwayatberobat'];
        $catatan = $_POST['catatan'];
        $icdutama = $_POST['icdutama'];
        $terapi = $_POST['terapi'];
        $penyulit = $_POST['penyulit'];
        $tindakan = $_POST['tindakan'];
        $penunjang = (count($_POST['penunjang']) > 0) ? implode(',', $_POST['penunjang']) : ""; 
        $catatanlain = $_POST['catatanlain'];
        $catatanpenunjang = $_POST['catatanpenunjang'];
        $id = $_POST['idpemeriksaanawalumum'];
        $update = mysqli_query($koneksi, "UPDATE tpasienpemeriksaanumum SET pemeriksaan='$pemeriksaan', alergi='$riwayatalergi',
        penyakitterdahulu='$penyakitterdahulu', penyakitkeluarga='$penyakitkeluarga', pengobatan='$riwayatberobat',
        catatan='$catatan', diagnosautama='$icdutama', penyulit='$penyulit', tindakan='$tindakan',
        terapi='$terapi', penunjang='$penunjang', catatanpenunjang='$catatanpenunjang', catatanlain='$catatanlain' WHERE idpemeriksaanawalumum='$id' ");

    }

    if (isset($_POST['ubahpemeriksaanumumdetail'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $pemeriksaan = $_POST['pemeriksaan'];
        $riwayatalergi = $_POST['riwayatalergi'];
        $penyakitterdahulu = $_POST['penyakitterdahulu'];
        $penyakitkeluarga = $_POST['penyakitkeluarga'];
        $riwayatberobat = $_POST['riwayatberobat'];
        $catatan = $_POST['catatan'];
        $icdutama = $_POST['icdutama'];
        $diagnosasekunder = $_POST['diagnosasekunder'];
        $terapi = $_POST['terapi'];
        $penyulit = $_POST['penyulit'];
        $tindakan = $_POST['tindakan'];
        $penunjang = (count($_POST['penunjang']) > 0) ? implode(',', $_POST['penunjang']) : ""; 
        $catatanlain = $_POST['catatanlain'];
        $catatanpenunjang = $_POST['catatanpenunjang'];
        $id = $_POST['idpemeriksaanawalumum'];
        $update = mysqli_query($koneksi, "UPDATE tpasienpemeriksaanumum SET pemeriksaan='$pemeriksaan', alergi='$riwayatalergi',
        penyakitterdahulu='$penyakitterdahulu', penyakitkeluarga='$penyakitkeluarga', pengobatan='$riwayatberobat',
        catatan='$catatan', diagnosautama='$icdutama', diagnosasekunder='$diagnosasekunder', penyulit='$penyulit', tindakan='$tindakan',
        terapi='$terapi', penunjang='$penunjang', catatanpenunjang='$catatanpenunjang', catatanlain='$catatanlain' WHERE nomorrm='$nomorrm' AND novisit='$novisit' ");
    

    }

    if (isset($_POST['simpanpemeriksaanlanjutandetail'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $pemeriksaan = $_POST['pemeriksaan'];
        $riwayatalergi = $_POST['riwayatalergi'];
        $penyakitterdahulu = $_POST['penyakitterdahulu'];
        $penyakitkeluarga = $_POST['penyakitkeluarga'];
        $riwayatberobat = $_POST['riwayatberobat'];
        // $catatan = $_POST['catatan'];
        $icdutama = $_POST['icdutama'];
        $diagnosasekunder = $_POST['diagnosasekunder'];
        $terapi = $_POST['terapi'];
        $penyulit = $_POST['penyulit'];
        $tindakan = $_POST['tindakan'];
        $penunjang = (count($_POST['penunjang']) > 0) ? implode(',', $_POST['penunjang']) : ""; 
        $catatanlain = $_POST['catatanlain'];
        $catatanpenunjang = $_POST['catatanpenunjang'];
        $insert = mysqli_query($koneksi, "INSERT INTO tpasienpemeriksaanumum (novisit, nomorrm, pemeriksaan, alergi, 
        penyakitterdahulu, penyakitkeluarga, pengobatan, diagnosautama, diagnosasekunder, penyulit, tindakan,
        terapi, penunjang, catatanpenunjang, catatanlain) 
        VALUES ('$novisit','$nomorrm','$pemeriksaan','$riwayatalergi','$penyakitterdahulu','$penyakitkeluarga',
        '$riwayatberobat','$icdutama','$diagnosasekunder','$penyulit','$tindakan','$terapi','$penunjang','$catatanpenunjang','$catatanlain') ");
    

    }

    if (isset($_POST['ubahpemeriksaanlanjutandetail'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $pemeriksaan = $_POST['pemeriksaan'];
        $riwayatalergi = $_POST['riwayatalergi'];
        $penyakitterdahulu = $_POST['penyakitterdahulu'];
        $penyakitkeluarga = $_POST['penyakitkeluarga'];
        $riwayatberobat = $_POST['riwayatberobat'];
        // $catatan = $_POST['catatan'];
        $icdutama = $_POST['icdutama'];
        $diagnosasekunder = $_POST['diagnosasekunder'];
        $terapi = $_POST['terapi'];
        $penyulit = $_POST['penyulit'];
        $tindakan = $_POST['tindakan'];
        $penunjang = (count($_POST['penunjang']) > 0) ? implode(',', $_POST['penunjang']) : ""; 
        $catatanlain = $_POST['catatanlain'];
        $catatanpenunjang = $_POST['catatanpenunjang'];
        $update = mysqli_query($koneksi, "UPDATE tpasienpemeriksaanumum SET pemeriksaan='$pemeriksaan', alergi='$riwayatalergi',
        penyakitterdahulu='$penyakitterdahulu', penyakitkeluarga='$penyakitkeluarga', pengobatan='$riwayatberobat', diagnosautama='$icdutama', diagnosasekunder='$diagnosasekunder', penyulit='$penyulit', tindakan='$tindakan',
        terapi='$terapi', penunjang='$penunjang', catatanpenunjang='$catatanpenunjang', catatanlain='$catatanlain' WHERE nomorrm='$nomorrm' AND novisit='$novisit' ");
    

    }

    if (isset($_POST['simpanpemeriksaanumumsekunder'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $diagnosa = $_POST['diagnosa'];
        $diagnosasekunder = $_POST['diagnosasekunder'];
        $diaganosakedua = $diagnosa . "+" . $diagnosasekunder;
        $updatesekunder = mysqli_query($koneksi, "UPDATE tpasienpemeriksaanumum SET diagnosasekunder='$diaganosakedua'
        WHERE novisit='$novisit' AND nomorrm='$nomorrm'");

    }

    if (isset($_POST['ubahpengkajianawal'])) {
        $keluhan = $_POST['keluhan'];
        $kesadaranumum = $_POST['keadaanumum'];
        $kesadaran = $_POST['kesadaran'];
        $bb = $_POST['bb'];
        $tb = $_POST['tb'];
        $td = $_POST['td'];
        $nadi = $_POST['nadi'];
        $napas = $_POST['napas'];
        $statusgizi = $_POST['statusgizi'];
        $pengkajiannyeri = $_POST['pengkajiannyeri'];
        $lokasinyeri = $_POST['lokasinyeri'];
        $pencetus = $_POST['pencetus'];
        $durasi = $_POST['durasi'];
        $skala = $_POST['skala'];
        $resikojatuh= $_POST['resikojatuh'];
        $pengetahuan = $_POST['pengetahuan'];
        $penyimpangan = $_POST['penyimpangan'];
        $hambatan = $_POST['hambatan'];
        $keteranganhamabatan = $_POST['keterangankomunikasi'];
        $id = $_POST['novisit'];
        $update = mysqli_query($koneksi,"UPDATE tpasienperawatanawal SET keluhan='$keluhan', kesadaran='$kesadaran', kesadaranumum='$kesadaranumum',
        bb='$bb', tb='$tb', td='$td', nadi='$nadi', napas='$napas', statusgizi='$statusgizi', nyeri='$pengkajiannyeri',
        lokasinyeri='$lokasinyeri', pencetus='$pencetus', durasi='$durasi', skala='$skala',
        resikojatuh='$resikojatuh', pengetahuan='$pengetahuan', perilaku='$penyimpangan', hambatankomunikasi='$hambatan',
        keterangankomunikasi='$keteranganhamabatan' WHERE novisit='$id'");
    }

    if (isset($_POST['simpanriwayatpenyakit'])) {
        $konsumsiobat = $_POST['konsumsiobat'];
        $konsumsijamu = $_POST['konsumsijamu'];
        $operasi = $_POST['operasi'];
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $jenisoperasi = $_POST['jenisoperasi'];
        $op = $operasi ." ". $jenisoperasi;
        $riwayatpenyakit = (count($_POST['riwayatpenyakit']) > 0) ? implode(',', $_POST['riwayatpenyakit']) : ""; 
        $insert = mysqli_query($koneksi, "INSERT INTO tpasienriwayatpenyakit (novisit, nomorrm, riwayatpenyakit, konsumsiobat,
        konsumsijamu, operasi, keteranganoperasi) VALUES ('$novisit','$nomorrm','$riwayatpenyakit','$konsumsiobat',
        '$konsumsijamu','$operasi','$jenisoperasi')");
    }


    if (isset($_POST['simpanintegrasicatatan'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $namappa = $_POST['namappa'];
        $profesi = $_POST['profesi'];
        $namadokter = $_POST['dokter'];
        $pemeriksaan = $_POST['pemeriksaan'];
        $analisa = $_POST['analisa'];
        $tindakan = $_POST['tindakan'];
        $tanggal = $_POST['tanggal'];
        $waktu = date('H:i:s');
        $insert = mysqli_query($koneksi, "INSERT INTO tpasiencatatanintegrasi (nomorrm, novisit, namappa, profesi, pemeriksaan, analisa, tindakan, dpjp, tanggal, waktu)
        VALUES ('$nomorrm','$novisit','$namappa','$profesi','$pemeriksaan','$analisa','$tindakan','$namadokter','$tanggal','$waktu')");
    }

    if (isset($_POST['ubahintegrasicatatan'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $namappa = $_POST['namappa'];
        $profesi = $_POST['profesi'];
        $namadokter = $_POST['dokter'];
        $pemeriksaan = $_POST['pemeriksaan'];
        $analisa = $_POST['analisa'];
        $tindakan = $_POST['tindakan'];
        $id = $_POST['idcatatanintegrasi'];
        $update = mysqli_query($koneksi, "UPDATE tpasiencatatanintegrasi SET namappa='$namappa', profesi='$profesi',
        pemeriksaan='$pemeriksaan', analisa='$analisa', tindakan='$tindakan', dpjp='$namadokter' WHERE idcatatanintegrasi='$id'");
    }

    if (isset($_POST['hapuscatatanintegrasi'])) {
        $id = $_POST['idcatatanintegrasi'];
    $delete = mysqli_query($koneksi, "DELETE FROM tpasiencatatanintegrasi WHERE idcatatanintegrasi='$id'");
    }

    if (isset($_POST['simpandokumenintegrasi'])) {
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        $jenisdokumen = $_POST['jenisdokumen'];
        $catatan = $_POST['catatan'];

        $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG', 'jpeg', 'PDF', 'PNG');
        $namafile = $_FILES['dokumen']['name'];
        $x = explode('.', $namafile);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['dokumen']['size'];
        $file_tmp = $_FILES['dokumen']['tmp_name'];
        $generatename = uniqid();
        $namafile = $generatename;
        $namafile = $generatename . "." . $ekstensi;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 100044070) {
                move_uploaded_file($file_tmp, '../file/' . $namafile);
                $insert = mysqli_query($koneksi, "INSERT INTO tpasiencatatanintegrasidokumen (novisit, nomorrm, tipe, dokumen, catatan) 
                VALUES ('$novisit','$nomorrm','$jenisdokumen','$namafile','$catatan')");
            } else {
                echo 'UKURAN FILE TERLALU BESAR';
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }
    if (isset($_POST['ubahdokumenintegrasi'])) {
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];

        $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG', 'jpeg', 'PDF', 'PNG');
        $namafile = $_FILES['dokumen']['name'];
        $x = explode('.', $namafile);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['dokumen']['size'];
        $file_tmp = $_FILES['dokumen']['tmp_name'];
        $generatename = uniqid();
        $namafile = $generatename;
        $namafile = $generatename . "." . $ekstensi;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 100044070) {
                move_uploaded_file($file_tmp, '../file/' . $namafile);
                $update = mysqli_query($koneksi, "UPDATE tpasiencatatanintegrasidokumen SET dokumen='$namafile' WHERE nomorrm='$nomorrm' AND novisit='$novisit' ");
            } else {
                echo 'UKURAN FILE TERLALU BESAR';
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }
    if (isset($_POST['ubahcatatandokumenintegrasi'])) {
        $catatan = $_POST['catatan'];
        $id = $_POST['iddokumen'];
        $update = mysqli_query($koneksi, "UPDATE tpasiencatatanintegrasidokumen SET catatan='$catatan' WHERE iddokumen='$id'");
    }
    if (isset($_POST['hapusdokumenintegrasi'])) {
        $id = $_POST['iddokumen'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasiencatatanintegrasidokumen WHERE iddokumen='$id'");
    }

    if (isset($_POST['ubahriwayatpenyakit'])) {
        $konsumsiobat = $_POST['konsumsiobat'];
        $konsumsijamu = $_POST['konsumsijamu'];
        $operasi = $_POST['operasi'];
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $jenisoperasi = $_POST['jenisoperasi'];
        $op = $operasi ." ". $jenisoperasi;
        $riwayatpenyakit = (count($_POST['riwayatpenyakit']) > 0) ? implode(',', $_POST['riwayatpenyakit']) : ""; 
        $id = $_POST['idriwayatpenyakit'];
        $update = mysqli_query($koneksi, "UPDATE tpasienriwayatpenyakit SET riwayatpenyakit='$riwayatpenyakit',
        konsumsiobat='$konsumsiobat', konsumsijamu='$konsumsijamu', operasi='$operasi',
        keteranganoperasi='$jenisoperasi' WHERE idriwayatpenyakit='$id'");
    }
    if (isset($_POST['hapusriwayatpenyakit'])) {
        $id = $_POST['idriwayatpenyakit'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasienriwayatpenyakit WHERE idriwayatpenyakit='$id'");
    }
    if (isset($_POST['hapuspengkajianawal'])) {
    $id = $_POST['idperawatanawal'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasienperawatanawal WHERE idperawatanawal='$id'");
    }
    if (isset($_POST['simpankeperawatan'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $diagnosa = (count($_POST['diagnosa']) > 0) ? implode(',', $_POST['diagnosa']) : ""; 
        $insert = mysqli_query($koneksi, "INSERT INTO tpasienkeperawatan (novisit, nomorrm, diagnosakeperawatan)
        VALUES ('$novisit','$nomorrm','$diagnosa')");
    }
    if (isset($_POST['ubahkeperawatan'])) {
        $id = $_POST['idkeperawatan'];
        $diagnosa = (count($_POST['diagnosa']) > 0) ? implode(',', $_POST['diagnosa']) : ""; 
        $update = mysqli_query($koneksi, "UPDATE tpasienkeperawatan SET diagnosakeperawatan='$diagnosa' WHERE idkeperawatan='$id' ");
    }

    if (isset($_POST['hapuskeperawatan'])) {
        $id = $_POST['idkeperawatan'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasienkeperawatan WHERE idkeperawatan='$id'");
    }
    if (isset($_POST['simpanrencanakeperawatan'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $rencana = (count($_POST['rencana']) > 0) ? implode(',', $_POST['rencana']) : ""; 
        $insert = mysqli_query($koneksi, "INSERT INTO tpasienrencanakeperawatan (novisit, nomorrm, rencanakeperawatan)
        VALUES ('$novisit','$nomorrm','$rencana')");
    }
    if (isset($_POST['ubahrencanakeperawatan'])) {
        $id = $_POST['idrencana'];
        $rencana = (count($_POST['rencana']) > 0) ? implode(',', $_POST['rencana']) : ""; 
        $update = mysqli_query($koneksi, "UPDATE tpasienrencanakeperawatan SET rencanakeperawatan='$rencana' WHERE idrencana='$id' ");
    }
    if (isset($_POST['simpanresep'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $depofarmasi = $_POST['depofarmasi'];
        $alergi = $_POST['alergi'];
        $hamil = $_POST['hamil'];
        $menyusui = $_POST['menyusui'];
        $keterangan = $_POST['keterangan'];
        $statusresep = "Permintaan";
        $asuransi  = $_POST['asuransi'];
        $dokter = $_POST['dokter'];
        $insert = mysqli_query($koneksi, "INSERT INTO tresep (iddepartemant, idasuransi, noresep, nomorrm, alergiobat, hamil,
        menyusui, keterangan,  statusresep)
        VALUES ('$depofarmasi','$asuransi','$novisit','$nomorrm','$alergi','$hamil','$menyusui','$keterangan','$statusresep')");
    }
    if (isset($_POST['ubahreseppasien'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $depofarmasi = $_POST['depofarmasi'];
        $alergi = $_POST['alergi'];
        $hamil = $_POST['hamil'];
        $menyusui = $_POST['menyusui'];
        $keterangan = $_POST['keterangan'];
        $asuransi  = $_POST['asuransi'];
        $noresep = $_POST['noresep'];
        $update = mysqli_query($koneksi, "UPDATE tresep SET alergiobat='$alergi', hamil='$hamil',
        menyusui='$menyusui', keterangan='$keterangan', idasuransi='$asuransi', iddepartemant='$depofarmasi' WHERE noresep='$noresep'");
    }

    if (isset($_POST['hapusresep'])) {
        $id = $_POST['noresep'];
        $delete = mysqli_query($koneksi, "DELETE FROM tresep WHERE noresep='$id'");
    }

    if (isset($_POST['simpanresepdetail'])) {
        $novisit = $_POST['noresep'];
        $obat = $_POST['obat'];
        $signa = $_POST['signa'];
        $route = $_POST['rute'];
        $catatan = $_POST['catatanresep'];
        $jumlah = $_POST['jumlah'];
        $unit = $_POST['unit'];
        $depofarmasi = $_POST['depofarmasi'];
        $nomorrm = $_POST['nomorrm'];
        $insert = mysqli_query($koneksi, "INSERT INTO tresepdetail (nomorrm, noresep, iddepartemant, idobat, signa, idrute, idunit, jumlah, catatanresep)
        VALUES ('$nomorrm','$novisit','$depofarmasi','$obat','$signa','$route','$unit','$jumlah','$catatan')");

    }

    if (isset($_POST['simpanresepbhp'])) {
        $novisit = $_POST['noresep'];
        $bhp = $_POST['bhp'];
        $signa = $_POST['signa'];
        $route = $_POST['rute'];
        $catatan = $_POST['catatanresep'];
        $jumlah = $_POST['jumlah'];
        $unit = $_POST['unit'];
        $depofarmasi = $_POST['depofarmasi'];
        $insert = mysqli_query($koneksi, "INSERT INTO tresepbhp (noresep, iddepartemant, idbhp, signa, idrute, idunit, jumlah, catatanresep)
        VALUES ('$novisit','$depofarmasi','$bhp','$signa','$route','$unit','$jumlah','$catatan')");
    }

    if (isset($_POST['ubahresepdetail'])) {
        $id = $_POST['idresepdetail'];
        $signa = $_POST['signa'];
        $route = $_POST['rute'];
        $catatan = $_POST['catatanresep'];
        $jumlah = $_POST['jumlah'];
        $unit = $_POST['unit'];
        $udpate = mysqli_query($koneksi, "UPDATE tresepdetail SET signa='$signa', idrute='$route',
        catatanresep='$catatan', jumlah='$jumlah', idunit='$unit' WHERE idresepdetail='$id'");
    }

    if (isset($_POST['ubahresepbhp'])) {
        $id = $_POST['idresepdetail'];
        $bhp = $_POST['bhp'];
        $signa = $_POST['signa'];
        $route = $_POST['rute'];
        $catatan = $_POST['catatanresep'];
        $jumlah = $_POST['jumlah'];
        $unit = $_POST['unit'];
        $udpate = mysqli_query($koneksi, "UPDATE tresepbhp SET idbhp='$bhp', signa='$signa', idrute='$route',
        catatanresep='$catatan', jumlah='$jumlah', idunit='$unit' WHERE idresepdetail='$id'");
    }

    if (isset($_POST['hapusresepdetail'])) {
        $id = $_POST['idresepdetail'];
        $delete = mysqli_query($koneksi, "DELETE FROM tresepdetail WHERE idresepdetail='$id'");
    }
    if (isset($_POST['hapusresepbhp'])) {
        $id = $_POST['idresepdetail'];
        $delete = mysqli_query($koneksi, "DELETE FROM tresepbhp WHERE idresepdetail='$id'");
    }
    if (isset($_POST['hapusrencana'])) {
        $id = $_POST['idrencana'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasienrencanakeperawatan WHERE idrencana='$id'");
    }
    if (isset($_POST['validaspasien'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $statuskehadiran = 'Selesai';
        $update = mysqli_query($koneksi, "UPDATE tpasienvisit SET statuskehadiran = '$statuskehadiran' WHERE novisit='$novisit' AND
        nomorrm='$nomorrm'");
    }

    if (isset($_POST['simpanpemeriksaanmata'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $anamnesa = $_POST['anamnesa'];
        $kananvisus = (count($_POST['kananvisus']) > 0) ? implode(',', $_POST['kananvisus']) : ""; 
        $kanankacamata = (count($_POST['kanankacamata']) > 0) ? implode(',', $_POST['kanankacamata']) : ""; 
        $kananrefraksi = (count($_POST['kananrefraksi']) > 0) ? implode(',', $_POST['kananrefraksi']) : ""; 
        $kananintra = $_POST['kananintra'];
        $alatkanan = (count($_POST['alatkanan']) > 0) ? implode(',', $_POST['alatkanan']) : ""; 
        $kirivisus = (count($_POST['kirivisus']) > 0) ? implode(',', $_POST['kirivisus']) : ""; 
        $kirikacamata = (count($_POST['kirikacamata']) > 0) ? implode(',', $_POST['kirikacamata']) : ""; 
        $kirirefraksi = (count($_POST['kirirefraksi']) > 0) ? implode(',', $_POST['kirirefraksi']) : ""; 
        $kiriintra = $_POST['kiriintra'];
        $alatkiri = (count($_POST['alatkiri']) > 0) ? implode(',', $_POST['alatkiri']) : ""; 
        $funduscopy = $_POST['funduscopy'];
        $keterangan = $_POST['keterangan'];
        $autorefkanan = (count($_POST['autorefkanan']) > 0) ? implode(',', $_POST['autorefkanan']) : ""; 
        $autorefkiri = (count($_POST['autorefkiri']) > 0) ? implode(',', $_POST['autorefkiri']) : ""; 
        $namadokter = $_POST['dokter'];
        $pd = $_POST['pd'];
        $insert = mysqli_query($koneksi, "INSERT INTO tpasienpemeriksaanmata (novisit, nomorrm, anamnesa, kananvisus, kanankacamatalama, 
        kananrefraksi, kananintra, alatkanan, kirivisus, kirikacamatalama, kirirefraksi, kiriintra, alatkiri, funduscopy, autorefkanan, autorefkiri, pd, keterangan)
        VALUES ('$novisit','$nomorrm','$anamnesa','$kananvisus','$kanankacamata','$kananrefraksi','$kananintra','$alatkanan',
        '$kirivisus','$kirikacamata','$kirirefraksi','$kiriintra','$alatkiri','$funduscopy','$autorefkanan','$autorefkiri','$pd','$keterangan')");


    }
    if (isset($_POST['ubahpemeriksaanmata'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $anamnesa = $_POST['anamnesa'];
        $kananvisus = (count($_POST['kananvisus']) > 0) ? implode(',', $_POST['kananvisus']) : ""; 
        $kanankacamata = (count($_POST['kanankacamata']) > 0) ? implode(',', $_POST['kanankacamata']) : ""; 
        $kananrefraksi = (count($_POST['kananrefraksi']) > 0) ? implode(',', $_POST['kananrefraksi']) : ""; 
        $kananintra = $_POST['kananintra'];
        $alatkanan = (count($_POST['alatkanan']) > 0) ? implode(',', $_POST['alatkanan']) : ""; 
        $kirivisus = (count($_POST['kirivisus']) > 0) ? implode(',', $_POST['kirivisus']) : ""; 
        $kirikacamata = (count($_POST['kirikacamata']) > 0) ? implode(',', $_POST['kirikacamata']) : ""; 
        $kirirefraksi = (count($_POST['kirirefraksi']) > 0) ? implode(',', $_POST['kirirefraksi']) : ""; 
        $kiriintra = $_POST['kiriintra'];
        $alatkiri = (count($_POST['alatkiri']) > 0) ? implode(',', $_POST['alatkiri']) : ""; 
        $funduscopy = $_POST['funduscopy'];
        $keterangan = $_POST['keterangan'];
        $autorefkanan = (count($_POST['autorefkanan']) > 0) ? implode(',', $_POST['autorefkanan']) : ""; 
        $autorefkiri = (count($_POST['autorefkiri']) > 0) ? implode(',', $_POST['autorefkiri']) : ""; 
        $pd = $_POST['pd'];
        $namadokter = $_POST['dokter'];
        $update = mysqli_query($koneksi, "UPDATE tpasienpemeriksaanmata SET anamnesa='$anamnesa', kananvisus='$kananvisus',
        kanankacamatalama='$kanankacamata', kananrefraksi='$kananrefraksi', kananintra='$kananintra', alatkanan='$alatkanan',
        kirikacamatalama='$kirikacamata', kirirefraksi='$kirirefraksi', kiriintra='$kiriintra', alatkiri='$alatkiri',
        funduscopy='$funduscopy', keterangan='$keterangan', autorefkanan='$autorefkanan', autorefkiri='$autorefkiri', pd='$pd' WHERE nomorrm='$nomorrm' AND novisit='$novisit' ");
    
    }
    if (isset($_POST['hapuspemeriksaanmata'])) {
        $id = $_POST['idpemeriksaanawalmata'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasienpemeriksaanmata WHERE idpemeriksaanawalmata='$id'");
    }
    if (isset($_POST['hapuspemeriksaanumum'])) {
        $id = $_POST['idpemeriksaanawalumum'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasienpemeriksaanumum WHERE idpemeriksaanawalumum='$id'");
    }

    if (isset($_POST['simpanmedismata'])) {
        $autoref = $_POST['autoref'];
        $anamnesa = $_POST['anamnesa'];
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $namadokter = $_POST['dokter'];
        $insert = mysqli_query($koneksi, "INSERT INTO tpasienpemeriksaanmata (novisit, nomorrm, anamnesa, autoref) VALUES ('$novisit','$nomorrm','$anamnesa','$autoref')");
    
    }
    if (isset($_POST['ubahmedismata'])) {
        $autoref = $_POST['autoref'];
        $anamnesa = $_POST['anamnesa'];
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $namadokter = $_POST['dokter'];
        $update = mysqli_query($koneksi, "UPDATE tpasienpemeriksaanmata SET anamnesa='$anamnesa', autoref='$autoref'
        WHERE nomorrm='$nomorrm' AND novisit='$novisit' ");
    
    }
    if (isset($_POST['ubahprofile'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $md5 = md5($password);
        $id = $_POST['namalengkap'];
        $update = mysqli_query($koneksi, "UPDATE tuser SET username='$username', password='$md5' WHERE namalengkap = '$id'");
    }

    //  Module Accounting
    if (isset($_POST['simpankategoripelayanan'])) {
        $kategori = $_POST['kategori'];
        $insert = mysqli_query($koneksi, "INSERT INTO tkategoripelayanan (kategoripelayanan) VALUES('$kategori')");
    }
    if (isset($_POST['ubahkategoripelayanan'])) {
        $kategori = $_POST['kategori'];
        $id = $_POST['idkategoripelayanan'];
        $update = mysqli_query($koneksi,"UPDATE tkategoripelayanan SET kategoripelayanan WHERE idkategoripelayanan='$id'");
    }
    if (isset($_POST['simpantarifumum'])) {
        $kategori = $_POST['kategori'];
        $pelayanan = $_POST['pelayanan'];
        $tarif = $_POST['tarif'];
        $tipe = 'Umum';
        $insert = mysqli_query($koneksi, "INSERT INTO tkeuangantarifpelayanan (idkategoripelayanan, pelayanan, tarif, tipe) 
        VALUES('$kategori','$pelayanan','$tarif','$tipe')");
    }
    if (isset($_POST['ubahtarifumum'])) {
        $kategori = $_POST['kategori'];
        $pelayanan = $_POST['pelayanan'];
        $tarif = $_POST['tarif'];
        $id = $_POST['idtarifpelayanan'];
        $update = mysqli_query($koneksi, "UPDATE tkeuangantarifpelayanan SET idkategoripelayanan='$kategori',
        pelayanan='$pelayanan', tarif='$tarif' WHERE idtarifpelayanan='$id'");
    }
    if (isset($_POST['simpantarifbpjs'])) {
        $kategori = $_POST['kategori'];
        $pelayanan = $_POST['pelayanan'];
        $tarif = $_POST['tarif'];
        $tipe = 'BPJS';
        $insert = mysqli_query($koneksi, "INSERT INTO tkeuangantarifpelayanan (idkategoripelayanan, pelayanan, tarif, tipe) 
        VALUES('$kategori','$pelayanan','$tarif','$tipe')");
    }
    if (isset($_POST['ubahtarifbpjs'])) {
        $kategori = $_POST['kategori'];
        $pelayanan = $_POST['pelayanan'];
        $tarif = $_POST['tarif'];
        $id = $_POST['idtarifpelayanan'];
        $update = mysqli_query($koneksi, "UPDATE tkeuangantarifpelayanan SET idkategoripelayanan='$kategori',
        pelayanan='$pelayanan', tarif='$tarif' WHERE idtarifpelayanan='$id'");
    }
    if (isset($_POST['simpantarifasuransi'])) {
        $kategori = $_POST['kategori'];
        $pelayanan = $_POST['pelayanan'];
        $tarif = $_POST['tarif'];
        $tipe = 'Asuransi';
        $insert = mysqli_query($koneksi, "INSERT INTO tkeuangantarifpelayanan (idkategoripelayanan, pelayanan, tarif, tipe) 
        VALUES('$kategori','$pelayanan','$tarif','$tipe')");
    }
    if (isset($_POST['ubahtarifasuransi'])) {
        $kategori = $_POST['kategori'];
        $pelayanan = $_POST['pelayanan'];
        $tarif = $_POST['tarif'];
        $id = $_POST['idtarifpelayanan'];
        $update = mysqli_query($koneksi, "UPDATE tkeuangantarifpelayanan SET idkategoripelayanan='$kategori',
        pelayanan='$pelayanan', tarif='$tarif' WHERE idtarifpelayanan='$id'");
    }


    if (isset($_POST['simpanpassuser'])) {
        $nama = $_POST['namalengkap'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $md5 = md5($password);
        $role = $_POST['role'];
        $insert = mysqli_query($koneksi, "INSERT INTO tuser (namalengkap, username, password, email, role) VALUES 
        ('$nama','$username','$md5','$email','$role')");
        $statusapprove = 'Approve';
        $id = $_POST['idpermintaanuser'];
        $update = mysqli_query($koneksi,"UPDATE tpermintaanuser SET statuspermintaan='$statusapprove' WHERE idpermintaanuser='$id'");
    }

    if (isset($_POST['simpanuserdokter'])) {
        $nama = $_POST['namalengkap'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $md5 = md5($password);
        $role = $_POST['role'];
        $insert = mysqli_query($koneksi, "INSERT INTO tuser (namalengkap, username, password, email, role) VALUES 
        ('$nama','$username','$md5','$email','$role')");
    }

    if (isset($_POST['ubahuserdokter'])) {
        $nama = $_POST['namalengkap'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $md5 = md5($password);
        $update = mysqli_query($koneksi, "UPDATE tuser SET username='$username', email='$email', password='$md5' WHERE namalengkap='$nama'");
    }

    if (isset($_POST['simpanuser'])) {
        $nama = $_POST['namalengkap'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $md5 = md5($password);
        $role = $_POST['role'];
        $statuspermintaan = 'Register Admin';
        $insert = mysqli_query($koneksi,"INSERT INTO tpermintaanuser (namalengkap, username, email, role, statuspermintaan)
        VALUES ('$nama','$username','$email','$role''$statuspermintaan')");
        $insert = mysqli_query($koneksi,"INSERT INTO tuser (namalengkap, username, email, password, role)
        VALUES ('$nama','$username','$email','$md5','$role')");
        
    }

    if (isset($_POST['updateuser'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $md5 = md5($password);
        $namalengkap = $_POST['namalengkap'];
        $email = $_POST['email'];
        $update = mysqli_query($koneksi,"UPDATE tuser SET username='$username', password='$md5', email='$email' WHERE namalengkap='$namalengkap'");
    }

    if (isset($_POST['updatefaskes'])) {
        $faskes = $_POST['faskes'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $hp = $_POST['handphone'];
        $id = $_POST['idfaskes'];
        $update = mysqli_query($koneksi,"UPDATE tfaskes SET faskes='$faskes', alamat='$alamat', telepon='$hp',
        email='$email' WHERE idfaskes='$id'");
    }

    if (isset($_POST['simpankategoritransaksi'])) {
        $tipe = $_POST['tipe'];
        $kategori = $_POST['kategori'];
        $deksripsi = $_POST['deskripsi'];
        $insert = mysqli_query($koneksi, "INSERT INTO tkategoriakun (tipeakun, kategoriakun, deskripsi) VALUES 
        ('$tipe','$kategori','$deskripsi')");
    }
    if (isset($_POST['simpantipetransaksi'])) {
        $tipe = $_POST['tipe'];
        $deksripsi = $_POST['deskripsi'];
        $insert = mysqli_query($koneksi, "INSERT INTO ttipetransaksi ( tipetransaksi, deskripsitipe) VALUES 
        ('$tipe','$deksripsi')");
    }
    if (isset($_POST['simpanakun'])) {
        $kategori = $_POST['kategori'];
        $coa = $_POST['coa'];
        $nocoa = $_POST['nocoa'];
        $saldoawal = $_POST['saldoawal'];
        $insert = mysqli_query($koneksi, "INSERT INTO takun (idkategoriakun, noakun, akun, saldoawal)
        VALUES('$kategori','$nocoa','$coa','$saldoawal')");
        var_dump($_POST);
        var_dump($insert);
    }
    if (isset($_POST['updatecoa'])) {
        $coa = $_POST['coa'];
        $nocoa = $_POST['nocoa'];
        $kategori = $_POST['kategori'];
        $saldoawal = $_POST['saldoawal'];
        $id = $_POST['idakun'];
        $update = mysqli_query($koneksi, "UPDATE takun SET akun='$coa', noakun='$nocoa', idkategoriakun='$kategori',
        saldoawal='$saldoawal'  WHERE idakun='$id' ");
    }
    if (isset($_POST['simpankategoriaset'])) {
        $kategori = $_POST['kategori'];
        $deskripsi = $_POST['deskripsi'];
        $insert = mysqli_query($koneksi, "INSERT INTO tkategoriaset (kategoriaset, deskripsiaset)VALUES('$kategori','$deskripsi')");
    
    }
    if (isset($_POST['ubahkategoriaset'])) {
        $kategori = $_POST['kategori'];
        $deskripsi = $_POST['deskripsi'];
        $id = $_POST['idkategoriaset'];
        $update = mysqli_query($koneksi, "UPDATE tkategoriaset SET kategoriaset='$kategori', deskripsiaset='$deskripsi'
        WHERE idkategoriaset = '$id'");
    
    }
    if (isset($_POST['simpantipeaset'])) {
        $tipe = $_POST['tipe'];
        $deskripsi = $_POST['deskripsi'];
        $insert = mysqli_query($koneksi, "INSERT INTO ttipeaset (tipeaset, deskripsitipe)VALUES('$tipe','$deskripsi')");
    
    }
    if (isset($_POST['ubahtipeaset'])) {
        $tipe = $_POST['tipe'];
        $deskripsi = $_POST['deskripsi'];
        $id = $_POST['idtipeaset'];
        $update = mysqli_query($koneksi, "UPDATE ttipeaset SET tipeaset='$tipe', deskripsitipe='$deskripsi' WHERE
        idtipeaset='$id'");
    
    }
    if (isset($_POST['simpanunitkeuangan'])) {
        $unit = $_POST['unit'];
        $deskripsi = $_POST['deskripsi'];
        $penggunaan = 'Keuangan';
        $insert = mysqli_query($koneksi, "INSERT INTO tunit (unit, keterangan, penggunaan)VALUES('$unit','$deskripsi','$penggunaan')");
    
    }
    if (isset($_POST['ubahunitkeuangan'])) {
        $unit = $_POST['unit'];
        $deskripsi = $_POST['deskripsi'];
        $id = $_POST['idunit'];
        $update = mysqli_query($koneksi, "UPDATE tunit SET unit='$unit', keterangan='$deskripsi' WHERE
        idunit='$id'");
    
    }
    if (isset($_POST['simpanvalidasitransaksi'])) {
        $status = 'Validation';
        $id = $_POST['notransaksi'];
        $update = mysqli_query($koneksi, "UPDATE tjurnalumum set statustransaksi='$status' WHERE notransaksi='$id'  ");
    }
    if (isset($_POST['simpanasuransi'])) {
        $asuransi = $_POST['asuransi'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $insert = mysqli_query($koneksi, "INSERT INTO tasuransi (asuransi, alamat, telepon, email) VALUES 
        ('$asuransi','$alamat','$telepon','$email')");
    }

    if (isset($_POST['ubahasuransi'])) {
        $asuransi = $_POST['asuransi'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $id = $_POST['idasuransi'];
        $update = mysqli_query($koneksi, "UPDATE tasuransi SET asuransi='$asuransi', alamat='$alamat', telepon='$telepon',
        email='$email' WHERE idasuransi='$id'");
    }

    if (isset($_POST['hapusasuransi'])) {
        $id = $_POST['idasuransi'];
        $delete = mysqli_query($koneksi, "DELETE FROM tasuransi WHERE idasuransi='$id'");
    }
    if (isset($_POST['updatebudget'])) {
        $budgetsaatini = $_POST['budgetsaatini'];
        $budgettahunlalu = $_POST['budgettahunlalu'];
        $id = $_POST['idcoa'];
        $update = mysqli_query($koneksi, "UPDATE tcoa set budgetprevious='$budgettahunlalu', 
        budgetyear='$budgetsaatini' WHERE idcoa='$id'  ");
    }


    if (isset($_POST['simpanaddvisit'])) {
        $nomorrm = $_POST['nomorrm'];
        $dokter = $_POST['dokter'];
        $poliklinik = $_POST['poliklinik'];
        $asuransi = $_POST['pembayaran'];
        $noasuransi = $_POST['noasuransi'];
        $walipasien = $_POST['walipasien'];
        $visit = $_POST['visit'];
        $addvisit = $visit+1;
        $insert = mysqli_query($koneksi, "INSERT INTO tvisit (nomorrm, idpoliklinik, iddokter, idasuransi, noasuransi, walipasien) VALUES 
        ('$nomorrm','$poliklinik','$dokter','$asuransi','$noasuransi','$walipasien')");
        $update = mysqli_query($koneksi,"UPDATE tpasien SET visit='$addvisit' WHERE nomorrm='$nomorrm'");
    }
    if (isset($_POST['simpanpasien'])) {
        $nomorrm = $_POST['nomorrm'];
        $nik = $_POST['nik'];
        $kk = $_POST['kk'];
        $namapasien =  $_POST['namapasien'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $agama = $_POST['agama'];
        $tempatlahir = $_POST['tempatlahir'];
        $tanggallahir = $_POST['tanggallahir'];
        $alamat = $_POST['alamat'];
        $registrasi= 'Loket';
        $statuspasien = 'Baru';
        $orangtua = $_POST['namaorangtua'];
        $hpwali = $_POST['hpwali'];

        $tanggal = date('Y-m-d');
        $petugas = $_POST['namapetugas'];
        $statusvisit = 'Hadir';
        $novisit = date('Ymd').rand(00000,99999);
        // $data1 = $_POST['provinsi'];
        // $propinsi = explode("-",$data1);
        // $data2 = $_POST['kota'];
        // $kabupaten = explode("-",$data2);
        // $data3 = $_POST['kecamatan'];
        // $kecamatan = explode("-",$data3);
        $cekktp = mysqli_num_rows(mysqli_query($koneksi,"SELECT nik FROM tpasien WHERE nik = '$_POST[nik]'"));
        $ceknorm = mysqli_num_rows(mysqli_query($koneksi,"SELECT nomorrm FROM tpasien WHERE nomorrm = '$_POST[nomorrm]'"));
        if ($cekktp>0) {
            echo "<script>alert ('NIK sudah ada pada data pasien')</script>";
        } elseif ($ceknorm>0) {
            echo "<script>alert ('Nomor RM sudah ada pada data pasien')</script>";
        } else {
        $insert = mysqli_query($koneksi,"INSERT INTO tpasien (nomorrm, nik, nokk, namapasien, namaorangtua, hpwali, jeniskelamin,
        agama, tempatlahir, tanggallahir, alamat, register, statuspasien, namapetugas) 
        VALUES('$nomorrm','$nik','$kk','$namapasien','$orangtua','$hpwali','$jeniskelamin','$agama','$tempatlahir','$tanggallahir',
        '$alamat','$registrasi','$statuspasien','$petugas')");
        $insertvisit = mysqli_query($koneksi,"INSERT INTO tpasienvisit (novisit, nomorrm, tanggal, namapetugas, sumberadmisi, statuskehadiran)
        VALUES ('$novisit','$nomorrm','$tanggal','$petugas','$registrasi','$statusvisit')");
        if ($insert && $insertvisit)
        {  
          echo "<script>alert ('Berhasil Menambah Data Pasien Baru');
          document.location='admisi.php'</script>";
        } else {
          echo "<script>alert ('Gagal Menambah Data Pasien Baru');
          document.location='admisi.php'</script>";
        }
        }


    }

    if (isset($_POST['ubahdatapasien'])) {
        $nik = $_POST['nik'];
        $kk = $_POST['kk'];
        $namapasien =  $_POST['namapasien'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $agama = $_POST['agama'];
        $tempatlahir = $_POST['tempatlahir'];
        $tanggallahir = $_POST['tanggallahir'];
        $alamat = $_POST['alamat'];
        $id = $_POST['nomorrm'];
        $hpwali = $_POST['hpwali'];
        $orangtua = $_POST['namaorangtua'];
        $idpasien = $_POST['idpasien'];
        $visit = $_POST['idvisit'];
        $update = mysqli_query($koneksi,"UPDATE tpasien SET nomorrm='$id', namaorangtua='$orangtua', hpwali='$hpwali',
        nik='$nik', nokk='$kk', namapasien='$namapasien', jeniskelamin='$jeniskelamin', agama='$agama',
        tempatlahir='$tempatlahir', tanggallahir='$tanggallahir', alamat='$alamat' WHERE idpasien='$idpasien'");
        $updatevisit = mysqli_query($koneksi, "UPDATE tpasienvisit SET nomorrm='$id' WHERE idvisit='$visit'");
        header("location:admisi.php");
    }

    if (isset($_POST['hapuspasienvisit'])) {
        $id = $_POST['idvisit'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasienvisit WHERE idvisit='$id'");
    }
    if (isset($_POST['hapuspasienlama'])) {
        $id = $_POST['idpasien'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasien WHERE idpasien='$id'");
    }

    if (isset($_POST['simpanregistrasibpjs'])) {
        $jeniskelamin = $_POST['jeniskelamin'];
        if($jeniskelamin=="Pria"){
            $jk = "L";
        }else{
            $jk = "P";
        }
        $tanggallahir = $_POST['tanggallahir'];
        $namapasien = $_POST['namapasien'];
	//$query = mysqli_query($koneksi, "SELECT max(nomorrm) as noakhir FROM tpasien");
        //$data = mysqli_fetch_array($query);
        //$nomorrm = $data['noakhir'];
        //$nomorm++;
        $nomorrm = rand(111111,999999);
        $nik = $_POST['nik'];
        $registrasi= 'Loket';
        $statuspasien = 'Baru';
        $tanggal = date('Y-m-d');
        $petugas = $_POST['namapetugas'];
        $statusvisit = 'Hadir';
	$nomorrmpd = $nomorrm;
        $novisit = date('Ymd').rand(00000,99999);
        $insert = mysqli_query($koneksi,"INSERT INTO tpasien (nomorrm, nik,  namapasien, jeniskelamin, register, statuspasien, namapetugas) 
        VALUES('$nomorrm','$nik','$namapasien','$jk','$registrasi','$statuspasien','$petugas')");
        $insertvisit = mysqli_query($koneksi,"INSERT INTO tpasienvisit (novisit, nomorrm, tanggal, namapetugas, sumberadmisi, statuskehadiran)
        VALUES ('$novisit','$nomorrm','$tanggal','$petugas','$registrasi','$statusvisit')");
	$insertdet = mysqli_query($koneksi,"INSERT INTO tpasiendetail (nomorrm, idasuransi, nokepesertaan) VALUES ('$nomorrmpd','2','$nokartu')");
        echo " <script>alert ('Berhasil Menambah Data Pasien Baru');
        document.location='admisi.php'</script>";
    }


    if (isset($_POST['simpanpasiendetail'])) {
        $pekerjaan = $_POST['pekerjaan'];
        $statusperkawinan = $_POST['statusperkawinan'];
        $pribadi = $_POST['pribadi'];
        $bahasa = $_POST['bahasa'];
        $asuransi = $_POST['asuransi'];
        $noasuransi = $_POST['nomorasuransi'];
        $id = $_POST['nomorrm'];
        $rujukan = $_POST['rujukan'];
        $pendidikan = $_POST['pendidikan'];
        $namarujukan = $_POST['namarujukan'];
        $kebangsaan = $_POST['kebangsaan'];
        $suku = $_POST['suku'];
        $insert = mysqli_query($koneksi,"INSERT INTO tpasiendetail (nomorrm, idrujukan, asal, idpekerjaan, idasuransi, nokepesertaan,
        statusperkawinan, pribadi, bahasa, pendidikan)
        VALUES('$id','$rujukan','$namarujukan','$pekerjaan','$asuransi','$noasuransi','$statusperkawinan','$pribadi','$bahasa','$pendidikan')");
        $update = mysqli_query($koneksi, "UPDATE tpasien SET kebangsaan='$kebangsaan', suku='$suku' WHERE nomorrm='$id'");
    }

    if (isset($_POST['ubahpasiendetail'])) {
        $pekerjaan = $_POST['pekerjaan'];
        $statusperkawinan = $_POST['statusperkawinan'];
        $pribadi = $_POST['pribadi'];
        $bahasa = $_POST['bahasa'];
        $asuransi = $_POST['asuransi'];
        $noasuransi = $_POST['nomorasuransi'];
        $id = $_POST['nomorrm'];
        $rujukan = $_POST['rujukan'];
        $pendidikan = $_POST['pendidikan'];
        $namarujukan = $_POST['namarujukan'];
        $warganegara = $_POST['kebangsaan'];
        $suku = $_POST['suku'];

        $udpate = mysqli_query($koneksi,"UPDATE tpasiendetail SET idrujukan='$rujukan', asal='$namarujukan',
        idpekerjaan='$pekerjaan', idasuransi='$asuransi', nokepesertaan='$noasuransi', statusperkawinan='$statusperkawinan', pribadi='$pribadi', bahasa='$bahasa',
        pendidikan='$pendidikan' WHERE nomorrm='$id'");
        $updatedetail = mysqli_query($koneksi, "UPDATE tpasien SET kebangsaan='$warganegara', suku='$suku' WHERE nomorrm='$id'");
    }

    if (isset($_POST['simpanpasienkeluarga'])) {
        
        $nama = $_POST['nama'];
        $hubungan = $_POST['hubungan'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $id = $_POST['nomorrm'];
        $insert = mysqli_query($koneksi,"INSERT INTO tpasienkeluarga (nomorrm, namakeluarga,
        hubungan, alamatkeluarga, teleponkeluarga)VALUES('$id','$nama','$hubungan','$alamat','$telepon')");
    }

    if (isset($_POST['hapuskeluarga'])) {
        $id = $_POST['idkeluarga'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasienkeluarga WHERE idkeluarga='$id'");
    }

    if (isset($_POST['simpanalamat'])) {
        $rt = $_POST['rtrw'];
        $data1 = $_POST['provinsi'];
        $propinsi = explode("-",$data1);
        $data2 = $_POST['kota'];
        $kabupaten = explode("-",$data2);
        $data3 = $_POST['kecamatan'];
        $kecamatan = explode("-",$data3);
        $kel = $_POST['kelurahan'];
        $id = $_POST['nomorrm'];
        $update = mysqli_query($koneksi, "UPDATE tpasien SET rtrw='$rt', kelurahan='$kel', idprov='$propinsi[0]', provinsi='$propinsi[1]', 
        idkab='$kabupaten[0]', kabupaten='$kabupaten[1]', idkec='$kecamatan[0]', kecamatan='$kecamatan[1]' WHERE nomorrm='$id'");
    }

    if (isset($_POST['simpantriase'])) {
        $tanggal = $_POST['tanggalmasuk'];
        $jam = $_POST['pukul'];
        $telepon = $_POST['telepon'];
        $diantar = $_POST['diantaroleh'];
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        $catatan = $_POST['catatan'];
        $statuspasien = 'Masuk';
        $insert = mysqli_query($koneksi, "INSERT INTO tpasienugd (nomorrm, novisit, tanggalmasuk, jammasuk, diantar, handphone, catatanantar, statuspasien) 
        VALUES ('$nomorrm','$novisit','$tanggal','$jam','$diantar','$telepon','$catatan','$statuspasien')");
    }

    if (isset($_POST['ubahtriase'])) {
        $tanggal = $_POST['tanggalmasuk'];
        $jam = $_POST['pukul'];
        $telepon = $_POST['telepon'];
        $diantar = $_POST['diantaroleh'];
        $catatan = $_POST['catatan'];
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        $udpate = mysqli_query($koneksi, "UPDATE tpasienugd SET tanggalmasuk='$tanggal', jammasuk='$jam', 
        diantar='$diantar', handphone='$telepon', catatanantar='$catatan'
        WHERE nomorrm='$nomorrm' AND novisit='$novisit'");
    }

    if (isset($_POST['hapustriase'])) {
        $id = $_POST['idpasienugd'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasienugd WHERE idpasienugd='$id' ");
    }
    if (isset($_POST['simpankeadaanumum'])) {
        $penyakit = $_POST['penyakit'];
        $pengobatan = $_POST['pengobatan'];
        $tanggal = $_POST['tanggal'];
        $tempat = $_POST['tempat'];
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        $update = mysqli_query($koneksi, "UPDATE tpasienugd SET riwayatpenyakit='$penyakit', riwayatpengobatan='$pengobatan',
        tanggalkecelakaan='$tanggal', tempat='$tempat' WHERE nomorrm='$nomorrm' AND novisit='$novisit' ");
    }

    if (isset($_POST['simpankeadaanumumugd'])) {
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        $td = $_POST['td'];
        $nadi = $_POST['nadi'];
        $pernapasan = $_POST['pernapasan'];
        $suhu = $_POST['suhu'];
        $gcs = $_POST['gcs'];
        $tb = $_POST['tb'];
        $bb = $_POST['bb'];
        $oksigen = $_POST['oksigen'];
        $pupil = $_POST['pupil'];
        $reflek = $_POST['reflek'];
        $akral = $_POST['akral'];
        $statuselergi = $_POST['statusalergi'];
        $alergi = $_POST['alergi'];
        $gangguan = $_POST['gangguan'];
        $nutrisional = $_POST['nutrisional'];
        $jatuh = $_POST['jatuh'];
        $nyeri = $_POST['nyeri'];
        $komunikasi = $_POST['komunikasi'];
        $gangguandetail = $_POST['gangguandetail'];
        $update = mysqli_query($koneksi, "UPDATE tpasienugd SET td='$td', nadi='$nadi', pernapasan='$pernapasan', suhu='$suhu', gcs='$gcs',
        bb='$bb', tb='$tb', spo='$oksigen', pupil='$pupil', reflek='$reflek', akral='$akral', statusalergi='$statuselergi', gangguanprilaku='$gangguan',
        risikonutrisional='$nutrisional', risikojatuh='$jatuh', risikonyeri='$nyeri', komunikasi='$komunikasi'
        WHERE nomorrm='$nomorrm' AND novisit='$novisit'");
    }

    if (isset($_POST['simpanpersetujuan'])) {
        $folderPath = "../upload/";
        if(empty($_POST['signed'])){
            echo "Kosong";
        }else{
        $image_parts = explode(";base64,", $_POST['signed']); 
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $datattd = uniqid() . '.'.$image_type;
        $file = $folderPath . $datattd;
        file_put_contents($file, $image_base64);
        echo "Gambar Sukses di Upload ";
        }
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $insert = mysqli_query($koneksi, "INSERT INTO  tpasienpemeriksaanmatagambar (novisit, nomorrm, gambar) VALUES('$novisit','$nomorrm','$datattd')");

    }

    if (isset($_POST['updatekeluarga'])) {
        $nama = $_POST['nama'];
        $hubungan = $_POST['hubungan'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $id = $_POST['idkeluarga'];
        $update = mysqli_query($koneksi, "UPDATE tpasienkeluarga SET namakeluarga='$nama', hubungan='$hubungan',
        alamatkeluarga='$alamat', teleponkeluarga='$telepon' WHERE idkeluarga='$id'");
    }
    if (isset($_POST['simpanpasienkontak'])) {
        $hp = $_POST['hp'];
        $email = $_POST['email'];
        $id = $_POST['nomorrm'];
        $insert = mysqli_query($koneksi,"INSERT INTO tpasienkontak (nomorrm, handphone, email)VALUES('$id','$hp','$email')");
    }
    if (isset($_POST['updatekontak'])) {
        $hp = $_POST['hp'];
        $email = $_POST['email'];
        $id = $_POST['idkontak'];
        $update = mysqli_query($koneksi,"UPDATE tpasienkontak SET handphone='$hp', email='$email' WHERE idkontak='$id'");
    }

    if (isset($_POST['hapuskontak'])) {
        $id = $_POST['idkontak'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasienkontak WHERE idkontak='$id'");
    }

    if (isset($_POST['simpanfileekg'])) {
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        $keterangan = $_POST['keterangan'];

        $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG', 'jpeg', 'PDF', 'PNG');
        $namafile = $_FILES['filedokumen']['name'];
        $x = explode('.', $namafile);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['filedokumen']['size'];
        $file_tmp = $_FILES['filedokumen']['tmp_name'];
        $generatename = uniqid();
        $namafile = $generatename;
        $namafile = $generatename . "." . $ekstensi;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 100044070) {
                move_uploaded_file($file_tmp, '../file/' . $namafile);
                $insert = mysqli_query($koneksi, "INSERT INTO tpasiendokumenekg (novisit, nomorrm, dokumenekg, keterangan) 
                VALUES ('$novisit','$nomorrm','$namafile','$keterangan')");
            } else {
                echo 'UKURAN FILE TERLALU BESAR';
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }
    if (isset($_POST['ubahhasilekg'])) {
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        $id = $_POST['iddokumenekg'];
        $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG', 'jpeg', 'PDF', 'PNG');
        $namafile = $_FILES['filedokumen']['name'];
        $x = explode('.', $namafile);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['filedokumen']['size'];
        $file_tmp = $_FILES['filedokumen']['tmp_name'];
        $generatename = uniqid();
        $namafile = $generatename;
        $namafile = $generatename . "." . $ekstensi;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 100044070) {
                move_uploaded_file($file_tmp, '../file/' . $namafile);
            $update = mysqli_query($koneksi, "UPDATE tpasiendokumenekg SET dokumenekg='$namafile' WHERE iddokumenekg='$id'  ");
            } else {
                echo 'UKURAN FILE TERLALU BESAR';
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }
    if (isset($_POST['ubahketeranganekg'])) {
        $id = $_POST['iddokumenekg'];
        $keterangan = $_POST['keterangan'];
        $update = mysqli_query($koneksi, "UPDATE tpasiendokumenekg SET keterangan='$keterangan' WHERE iddokumenekg='$id'");
    }

    if (isset($_POST['hapusekg'])) {
        $id = $_POST['iddokumenekg'];
        $keterangan = $_POST['keterangan'];
        $update = mysqli_query($koneksi, "UPDATE tpasiendokumenekg SET keterangan='$keterangan' WHERE iddokumenekg='$id'");
    }
    if (isset($_POST['simpanlokasioperasi'])) {
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        $od = $_POST['od'];
        $os = $_POST['os'];
        $catatan = $_POST['catatan'];
        $tanggal = $_POST['tanggal'];
        $dokter = $_POST['dokter'];

        $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG', 'jpeg', 'PDF', 'PNG');
        $namafile = $_FILES['filedokumen']['name'];
        $x = explode('.', $namafile);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['filedokumen']['size'];
        $file_tmp = $_FILES['filedokumen']['tmp_name'];
        $generatename = uniqid();
        $namafile = $generatename;
        $namafile = $generatename . "." . $ekstensi;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 100044070) {
                move_uploaded_file($file_tmp, '../file/' . $namafile);
                $insert = mysqli_query($koneksi, "INSERT INTO toperasilokasi (iddokter, novisit, nomorrm, tanggaloperasi, od, os, dokumen, catatan) 
                VALUES ('$dokter','$novisit','$nomorrm','$tanggal','$od','$os','$namafile','$catatan')");
            } else {
                echo 'UKURAN FILE TERLALU BESAR';
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }
    if (isset($_POST['hapuslokasioperasi'])) {
        $id = $_POST['idlokasi'];
        $delete = mysqli_query($koneksi, "DELETE FROM toperasilokasi WHERE idlokasi='$id'");
    }
    if (isset($_POST['ubahlokasioperasi'])) {
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        $od = $_POST['od'];
        $os = $_POST['os'];
        $catatan = $_POST['catatan'];
        $tanggal = $_POST['tanggal'];
        $dokter = $_POST['dokter'];
        $id = $_POST['idlokasi'];
        $update = mysqli_query($koneksi, "UPDATE toperasilokasi SET iddokter='$dokter',
        tanggaloperasi='$tanggal', od='$od', os='$os', catatan='$catatan' WHERE idlokasi='$id'");
    }

    if (isset($_POST['ubahgambarlokasioperasi'])) {
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        $id = $_POST['idlokasi'];
        $catatan = $_POST['catatan'];

        $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG', 'jpeg', 'PDF', 'PNG');
        $namafile = $_FILES['filedokumen']['name'];
        $x = explode('.', $namafile);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['filedokumen']['size'];
        $file_tmp = $_FILES['filedokumen']['tmp_name'];
        $generatename = uniqid();
        $namafile = $generatename;
        $namafile = $generatename . "." . $ekstensi;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 100044070) {
                move_uploaded_file($file_tmp, '../file/' . $namafile);
                $update = mysqli_query($koneksi, "UPDATE toperasilokasi SET dokumen='$namafile', catatan='$catatan' WHERE idlokasi='$id' ");
            } else {
                echo 'UKURAN FILE TERLALU BESAR';
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }

    if (isset($_POST['simpanalergi'])) {
        $dokter = $_POST['dokter'];
        $alergi = $_POST['alergi'];
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $insert = mysqli_query($koneksi, "INSERT INTO tpasienalergi (novisit, nomorrm, alergi, namadokter)
        VALUES ('$novisit','$nomorrm','$alergi','$dokter')");
    }

    if (isset($_POST['ubahalergi'])) {
        $dokter = $_POST['dokter'];
        $alergi = $_POST['alergi'];
        $id = $_POST['idalergi'];
        $update = mysqli_query($koneksi, "UPDATE tpasienalergi SET alergi='$alergi',
        namadokter='$dokter' WHERE idalergi='$id'");
    }

    if (isset($_POST['hapusalergi'])) {
        $id = $_POST['idalergi'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasienalergi WHERE idalergi='$id'");
    }

    if (isset($_POST['simpanedukasi'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $bahasa = $_POST['bahasa'];
        $penerjemah = $_POST['penerjemah'];
        $baca = $_POST['baca'];
        $belajar = $_POST['belajar'];
        $hambatan = $_POST['hambatan'];
        $petugas = $_POST['petugas'];
        $bagian = $_POST['bagian'];
        $evaluasi = $_POST['evaluasi'];
        $namapasien = $_POST['namapasien'];
        $edukasi = $_POST['edukasi'];
        $insert = mysqli_query($koneksi, "INSERT INTO tpasienedukasi (novisit, nomorrm, edukasi, bahasa, penerjemah, baca, belajar, 
        hambatan, petugas, bagian, namapasien, evaluasi)VALUES('$novisit','$nomorrm','$edukasi','$bahasa','$penerjemah','$baca','$belajar',
        '$hambatan','$petugas','$bagian','$namapasien','$evaluasi')");
    }

    if (isset($_POST['ubahedukasi'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $bahasa = $_POST['bahasa'];
        $penerjemah = $_POST['penerjemah'];
        $baca = $_POST['baca'];
        $belajar = $_POST['belajar'];
        $hambatan = $_POST['hambatan'];
        $petugas = $_POST['petugas'];
        $bagian = $_POST['bagian'];
        $evaluasi = $_POST['evaluasi'];
        $namapasien = $_POST['namapasien'];
        $edukasi = $_POST['edukasi'];
        $id = $_POST['idedukasi'];
        $update = mysqli_query($koneksi, "UPDATE tpasienedukasi SET edukasi='$edukasi', bahasa='$bahasa', penerjemah='$penerjemah', baca='$baca', belajar='$belajar',
        hambatan='$hambatan', petugas='$petugas', bagian='$bagian', namapasien='$namapasien', evaluasi='$evaluasi' WHERE idedukasi='$id'");
        
    }

    if (isset($_POST['hapusedukasi'])) {
        $id = $_POST['idedukasi'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasienedukasi WHERE idedukasi='$id");
    }

    if (isset($_POST['simpanpasiendokumen'])) {
        $nomorrm = $_POST['nomorrm'];
        $dokumen = $_POST['dokumen'];

        $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG', 'jpeg', 'PDF', 'PNG');
        $namafile = $_FILES['filedokumen']['name'];
        $x = explode('.', $namafile);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['filedokumen']['size'];
        $file_tmp = $_FILES['filedokumen']['tmp_name'];
        $generatename = uniqid();
        $namafile = $generatename;
        $namafile = $generatename . "." . $ekstensi;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 3044070) {
                move_uploaded_file($file_tmp, '../file/' . $namafile);
                $insert = mysqli_query($koneksi, "INSERT INTO tpasiendokumen (nomorrm, iddokumen, filedokumen) 
                VALUES ('$nomorrm','$dokumen','$namafile')");
            } else {
                echo 'UKURAN FILE TERLALU BESAR';
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }
    if (isset($_POST['ubahpasiendokumen'])) {
        $id = $_POST['idpasiendokumen'];
        $dokumen = $_POST['dokumen'];

        $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG', 'jpeg', 'PDF', 'PNG');
        $namafile = $_FILES['filedokumen']['name'];
        $x = explode('.', $namafile);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['filedokumen']['size'];
        $file_tmp = $_FILES['filedokumen']['tmp_name'];
        $generatename = uniqid();
        $namafile = $generatename;
        $namafile = $generatename . "." . $ekstensi;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 3044070) {
                move_uploaded_file($file_tmp, '../file/' . $namafile);
                $update = mysqli_query($koneksi, "UPDATE tpasiendokumen SET iddokumen='$dokumen',
                filedokumen='$namafile' WHERE idpasiendokumen='$id'");
            } else {
                echo 'UKURAN FILE TERLALU BESAR';
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }

    if (isset($_POST['simpangambarmedismata'])) {
        $id = $_POST['idpemeriksaanawalmata'];
        
        $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG');
        $namafile = $_FILES['dokumen']['name'];
        $x = explode('.', $namafile);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['dokumen']['size'];
        $file_tmp = $_FILES['dokumen']['tmp_name'];
        $generatename = uniqid();
        $namafile = $generatename;
        $namafile = $generatename . "." . $ekstensi;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 3044070) {
                move_uploaded_file($file_tmp, '../file/' . $namafile);
                $insert = mysqli_query($koneksi, "UPDATE tpasienpemeriksaanmata SET gambar='$namafile' WHERE idpemeriksaanawalmata='$id'");
            } else {
                echo 'UKURAN FILE TERLALU BESAR';
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }

    if (isset($_POST['hapusdokumenpasien'])) {
        $id = $_POST['idpasiendokumen'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasiendokumen WHERE idpasiendokumen='$id'");
    }

    if (isset($_POST['simpangambarmedismatalanjutan'])) {
        $id = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        
        $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG');
        $namafile = $_FILES['dokumen']['name'];
        $x = explode('.', $namafile);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['dokumen']['size'];
        $file_tmp = $_FILES['dokumen']['tmp_name'];
        $generatename = uniqid();
        $namafile = $generatename;
        $namafile = $generatename . "." . $ekstensi;

        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            if ($ukuran < 3044070) {
                move_uploaded_file($file_tmp, '../file/' . $namafile);
                $update = mysqli_query($koneksi, "UPDATE tpasienpemeriksaanmata SET gambar='$namafile' WHERE nomorrm='$id' AND novisit='$novisit'");
            } else {
                echo 'UKURAN FILE TERLALU BESAR';
            }
        } else {
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }

    if (isset($_POST['simpanpemeriksaanmatalanjutan'])) {
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        $kananpalbera = $_POST['kananpalbera'];
        $kanankonjuctiva = $_POST['kanankonjuctiva'];
        $kanankornea = $_POST['kanankornea'];
        $kanancoa = $_POST['kanancoa'];
        $kananiris = $_POST['kananiris'];
        $kananpupil = $_POST['kananpupil'];
        $kananlensa = $_POST['kananlensa'];
        $kananvitrous = $_POST['kananvitrous'];
        $kananfundus = $_POST['kananfundus'];
        $kiripalbera = $_POST['kiripalbera'];
        $kirikonjuctiva = $_POST['kiriconjuctiva'];
        $kirikornea = $_POST['kirikornea'];
        $kananpalbera = $_POST['kananpalbera'];
        $kiriiris = $_POST['kiriiris'];
        $kiricoa = $_POST['kiricoa'];
        $kiripupil = $_POST['kiripupil'];
        $kirilensa = $_POST['kirilensa'];
        $kirivitrous = $_POST['kirivitrous'];
        $kirifundus = $_POST['kirifundus'];
        $insert = mysqli_query($koneksi, "INSERT INTO tpasienpemeriksaanmatalanjutan (nomorrm, novisit, kananpalbera, kananconjuctiva, kanankornea, kanancoa, kananiris, kananpupil,
        kananlensa, kananvitrous, kananfundus, kiripalbera, kiriconjuctiva, kirikornea, kiricoa, kiriiris, kiripupil, kirilensa, kirivitrous, kirifundus)
        VALUES ('$nomorrm','$novisit','$kananpalbera','$kanankonjuctiva','$kanankornea','$kanancoa','$kananiris','$kananpupil',
        '$kananlensa','$kananvitrous','$kananfundus','$kiripalbera','$kirikonjuctiva','$kirikornea','$kiricoa','$kiriiris','$kiripupil','$kirilensa','$kirivitrous','$kirifundus')");
    }

    if (isset($_POST['ubahpemeriksaanmatalanjutan'])) {
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        $kananpalbera = $_POST['kananpalbera'];
        $kanankonjuctiva = $_POST['kanankonjuctiva'];
        $kanankornea = $_POST['kanankornea'];
        $kanancoa = $_POST['kanancoa'];
        $kananiris = $_POST['kananiris'];
        $kananpupil = $_POST['kananpupil'];
        $kananlensa = $_POST['kananlensa'];
        $kananvitrous = $_POST['kananvitrous'];
        $kananfundus = $_POST['kananfundus'];
        $kiripalbera = $_POST['kiripalbera'];
        $kirikonjuctiva = $_POST['kiriconjuctiva'];
        $kirikornea = $_POST['kirikornea'];
        $kananpalbera = $_POST['kananpalbera'];
        $kiriiris = $_POST['kiriiris'];
        $kiricoa = $_POST['kiricoa'];
        $kiripupil = $_POST['kiripupil'];
        $kirilensa = $_POST['kirilensa'];
        $kirivitrous = $_POST['kirivitrous'];
        $kirifundus = $_POST['kirifundus'];
        $update = mysqli_query($koneksi, "UPDATE tpasienpemeriksaanmatalanjutan SET kananpalbera='$kananpalbera', kananconjuctiva='$kanankonjuctiva',
        kanankornea='$kanankornea', kanancoa='$kanancoa', kananiris='$kananiris', kananpupil='$kananpupil',kananlensa='$kananlensa', kananvitrous='$kananvitrous', kananfundus='$kananfundus',
        kiripalbera='$kiripalbera', kiriconjuctiva='$kirikonjuctiva', kirikornea='$kirikornea', kiricoa='$kiricoa', kiriiris='$kiriiris', kiripupil='$kiripupil', kirilensa='$kirilensa', kirivitrous='$kirivitrous', kirifundus='$kirifundus' WHERE nomorrm='$nomorrm' AND novisit='$novisit' ");
    }

    if (isset($_POST['simpanpemeriksaanumumlanjutan'])) {
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        $diagnosautama = $_POST['diagnosautama'];
        $diagnosasekunder = $_POST['diagnosasekunder'];
        $penyulit = $_POST['penyulit'];
        $tindakan = $_POST['tindakan'];
        $terapi = $_POST['terapi'];
        $penunjang = (count($_POST['penunjang']) > 0) ? implode(',', $_POST['penunjang']) : ""; 
        $catatan = $_POST['catatan'];
        $pemeriksaan = $_POST['pemeriksaan'];
        $dokter = $_POST['dokter'];
        $insert = mysqli_query($koneksi, "INSERT INTO tpasienpemeriksaanumum (novisit, nomorrm, pemeriksaan, diagnosautama, diagnosasekunder, penyulit, tindakan, terapi, penunjang, catatanlain)
        VALUES ('$novisit','$nomorrm','$pemeriksaan','$diagnosautama','$diagnosasekunder','$penyulit','$tindakan','$terapi','$penunjang','$catatan')");
        
    }

    if (isset($_POST['ubahpemeriksaanumumlanjutan'])) {
        $nomorrm = $_POST['nomorrm'];
        $novisit = $_POST['novisit'];
        $diagnosautama = $_POST['diagnosautama'];
        $diagnosasekunder = $_POST['diagnosasekunder'];
        $penyulit = $_POST['penyulit'];
        $tindakan = $_POST['tindakan'];
        $terapi = $_POST['terapi'];
        $penunjang = (count($_POST['penunjang']) > 0) ? implode(',', $_POST['penunjang']) : ""; 
        $catatan = $_POST['catatan'];
        $pemeriksaan = $_POST['pemeriksaan'];
        $dokter = $_POST['dokter'];
        $update = mysqli_query($koneksi, "UPDATE tpasienpemeriksaanumum SET pemeriksaan='$pemeriksaan', diagnosautama='$diagnosautama', diagnosasekunder='$diagnosasekunder',
        penyulit='$penyulit', tindakan='$tindakan', terapi='$terapi', penunjang='$penunjang', catatanlain='$catatan' WHERE nomorrm='$nomorrm' AND novisit='$novisit' ");
    
    }

    if (isset($_POST['ubahpelayanan'])) {
        
        $dokter = $_POST['dokter'];
        $pelayanan = $_POST['pelayanan'];
        $catatan = $_POST['catatan'];
        $tanggalvisit = $_POST['tanggalvisit'];
        $idvisit = $_POST['novisit'];
        $asuransi = $_POST['asuransi'];
        $statuspelayanan = $_POST['tujuan'];
        $update = mysqli_query($koneksi,"UPDATE tpasienvisit SET iddokter='$dokter', idpelayanan='$pelayanan', idasuransi='$asuransi',
        tanggal='$tanggalvisit', catatanvisit='$catatan', statuspelayanan='$statuspelayanan' WHERE novisit='$idvisit' ");

    }

    if (isset($_POST['simpanpelayananpasienlama'])) {
        $petugas = $_POST['petugas'];
        $dokter = $_POST['dokter'];
        $pelayanan = $_POST['pelayanan'];
        $catatan = $_POST['catatan'];
        $tanggalvisit = $_POST['tanggalvisit'];
        $asuransi = $_POST['asuransi'];
        $statuspelayanan = 'Hadir';
        $visitke = $_POST['visitke'];
        $novisit = date('Ymd').rand(00000,99999);
        $nomorrm = $_POST['nomorrm'];
        $sumberadmisi = 'Loket';
        $statuskehadiran =  $_POST['tujuan'];
        $status = 'Lama';
        $insert = mysqli_query($koneksi, "INSERT INTO tpasienvisit (iddokter, idpelayanan, idasuransi, novisit, 
        nomorrm, tanggal, namapetugas, sumberadmisi, statuskehadiran, statuspelayanan, catatanvisit) VALUES
        ('$dokter','$pelayanan','$asuransi','$novisit','$nomorrm','$tanggalvisit','$petugas','$sumberadmisi','$statuspelayanan','$statuskehadiran','$catatan')"); 
        $update = mysqli_query($koneksi, "UPDATE tpasien SET visit='$visitke', statuspasien='$status' WHERE nomorrm='$nomorrm'");
        echo " <script>alert ('Berhasil Menambah Data Pasien Baru');
        document.location='admisi.php'</script>";
    }
    if (isset($_POST['simpandokter'])) {
        $nopegawai = rand(0000000,999999);
        $nip = $_POST['nip'];
        $nik = $_POST['nik'];
        $izin = $_POST['izin'];
        $namalengkap = $_POST['namalengkap'];
        $jk = $_POST['jk'];
        $tempatlahir = $_POST['tempatlahir'];
        $tanggallahir = $_POST['tanggallahir'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];
        $keahlian = $_POST['keahlian'];
        $handphone = $_POST['handphone'];
        $email = $_POST['emaildokter'];
    $insert = mysqli_query($koneksi, "INSERT INTO tdokter (nopegawai, nippegawai, nikdokter, noizin, namadokter, jkdokter,
    tempatlahirdokter, tanggallahirdokter, agamadokter, alamatdokter, hpdokter, emaildokter, keahlian) VALUES
        ('$nopegawai','$nip','$nik','$izin','$namalengkap','$jk','$tempatlahir','$tanggallahir',
    '$agama','$alamat','$handphone','$email','$keahlian')");
    }

    if (isset($_POST['updatedokter'])) {
        $nip = $_POST['nip'];
        $nik = $_POST['nik'];
        $izin = $_POST['izin'];
        $namalengkap = $_POST['namalengkap'];
        $jk = $_POST['jk'];
        $tempatlahir = $_POST['tempatlahir'];
        $tanggallahir = $_POST['tanggallahir'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];
        $keahlian = $_POST['keahlian'];
        $id = $_POST['iddokter'];
        $handphone = $_POST['handphone'];
        $email = $_POST['emaildokter'];
        $update = mysqli_query($koneksi, "UPDATE tdokter SET nippegawai='$nip', nikdokter='$nik', noizin='$izin', namadokter='$namalengkap',
        jkdokter='$jk', tempatlahirdokter='$tempatlahir', tanggallahirdokter='$tanggallahir', agamadokter='$agama', alamatdokter='$alamat', keahlian='$keahlian',
        hpdokter='$handphone', emaildokter='$email' WHERE iddokter='$id'");
    }

    if (isset($_POST['hapusdokter'])) {
        $id = $_POST['iddokter'];
        $iduser = $_POST['iduser'];
        $delete = mysqli_query($koneksi, "DELETE FROM tdokter  WHERE iddokter='$id'");
        $deleteuser = mysqli_query($koneksi, "DELETE FROM tuser WHERE namalengkap='$iduser'");
    }
    if (isset($_POST['hapusperawat'])) {
        $id = $_POST['idperawat'];
        $iduser = $_POST['iduser'];
        $delete = mysqli_query($koneksi, "DELETE FROM tperawat  WHERE idperawat='$id'");
        $deleteuser = mysqli_query($koneksi, "DELETE FROM tuser WHERE namalengkap='$iduser'");
    }
    if (isset($_POST['hapusgambarpemeriksaan'])) {
        $id = $_POST['idgambar'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpasienpemeriksaanmatagambar  WHERE idgambar='$id'");
    }

    if (isset($_POST['hapusgambarpemeriksaanmata'])) {
        $id = $_POST['idpemeriksaanawalmata'];
        $gambar = "";
        $update = mysqli_query($koneksi, "UPDATE tpasienpemeriksaanmata SET gambar='$gambar'  WHERE idpemeriksaanawalmata='$id'");
    }

    if (isset($_POST['simpanpelayanan'])) {
        $pelayanan = $_POST['pelayanan'];
        $deskripsi = $_POST['deskripsi'];
        $insert = mysqli_query($koneksi, "INSERT INTO tpelayanan (pelayanan, deskripsi) VALUES ('$pelayanan','$deskripsi')");
    }
    if (isset($_POST['ubahpelayananmedis'])) {
        $pelayanan = $_POST['pelayanan'];
        $deskripsi = $_POST['deskripsi'];
        $id = $_POST['idpelayanan'];
        $update = mysqli_query($koneksi, "UPDATE tpelayanan SET pelayanan='$pelayanan', deskripsi='$deskripsi' WHERE idpelayanan='$id'");
    }
    if (isset($_POST['hapuspelayanan'])) {
        $id = $_POST['idpelayanan'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpelayanan WHERE idpelayanan='$id'");
    }

    if (isset($_POST['simpanpekerjaan'])) {
        $pekerjaan = $_POST['pekerjaan'];
        $insert = mysqli_query($koneksi, "INSERT INTO tpekerjaan (pekerjaan) VALUES ('$pekerjaan')");
    }
    if (isset($_POST['ubahpekerjaan'])) {
        $pekerjaan = $_POST['pekerjaan'];
        $id = $_POST['idpekerjaan'];
        $update = mysqli_query($koneksi, "UPDATE tpekerjaan SET pekerjaan='$pekerjaan' WHERE idpekerjaan='$id'");
    }
    if (isset($_POST['hapuspekerjaan'])) {
        $id = $_POST['idpekerjaan'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpekerjaan WHERE idpekerjaan='$id'");
    }

    if (isset($_POST['simpandokumen'])) {
        $dokumen = $_POST['dokumen'];
        $insert = mysqli_query($koneksi, "INSERT INTO tdokumen (dokumen) VALUES ('$dokumen')");
    }
    if (isset($_POST['ubahdokumen'])) {
        $dokumen = $_POST['dokumen'];
        $id = $_POST['iddokumen'];
        $update = mysqli_query($koneksi, "UPDATE tdokumen SET dokumen='$dokumen' WHERE iddokumen='$id'");
    }
    if (isset($_POST['hapusdokumen'])) {
        $id = $_POST['iddokumen'];
        $delete = mysqli_query($koneksi, "DELETE FROM tdokumen WHERE iddokumen='$id'");
    }

    if (isset($_POST['simpanperawat'])) {
        $nopegawai = rand(0000000,999999);
        $nip = $_POST['nip'];
        $nik = $_POST['nik'];
        $izin = $_POST['izin'];
        $namalengkap = $_POST['namalengkap'];
        $jk = $_POST['jk'];
        $tempatlahir = $_POST['tempatlahir'];
        $tanggallahir = $_POST['tanggallahir'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];
    $insert = mysqli_query($koneksi, "INSERT INTO tperawat (nopegawai, nippegawai, nikperawat, noizin, namaperawat, jkperawat,
    tempatlahirperawat, tanggallahirperawat, agamaperawat,  alamatperawat) VALUES ('$nopegawai','$nip','$nik','$izin','$namalengkap','$jk','$tempatlahir','$tanggallahir',
    '$agama','$alamat')");
    }

    if (isset($_POST['updateperawat'])) {
        $nip = $_POST['nip'];
        $nik = $_POST['nik'];
        $izin = $_POST['izin'];
        $namalengkap = $_POST['namalengkap'];
        $jk = $_POST['jk'];
        $tempatlahir = $_POST['tempatlahir'];
        $tanggallahir = $_POST['tanggallahir'];
        $agama = $_POST['agama'];
        $alamat = $_POST['alamat'];
        $id = $_POST['idperawat'];
        $update = mysqli_query($koneksi, "UPDATE tperawat SET nippegawai='$nip', nikperawat='$nik', noizin='$izin', namaperawat='$namalengkap',
        jkperawat='$jk', tempatlahirperawat='$tempatlahir', tanggallahirperawat='$tanggallahir', agamaperawat='$agama', alamatperawat='$alamat'
        WHERE idperawat='$id'");
    }

    if (isset($_POST['simpantipedokumen'])) {
        $dokumen = $_POST['dokumen'];
        $deskripsi = $_POST['deskripsi'];
        $insert = mysqli_query($koneksi, "INSERT INTO tdokumen (dokumen, deskripsidokumen) VALUES 
        ('$dokumen','$deskripsi')");
    }
    if (isset($_POST['simpantamu'])) {
        $nik = $_POST['nik'];
        $namatamu = $_POST['namatamu'];
        $hp = $_POST['hp'];
        $tujuan = $_POST['tujuan'];
        $namatujuan = $_POST['namatujuan'];
        $catatan = $_POST['catatan'];
        $petugas = $_POST['petugas'];
        $statustamu = 1;
        $insert = mysqli_query($koneksi, "INSERT INTO tbukutamu (nik, namatamu, hp, tujuan, namatujuan, catatan, petugas, statustamu) VALUES 
        ('$nik','$namatamu','$hp','$tujuan','$namatujuan','$catatan','$petugas','$statustamu')");
    }
    if (isset($_POST['ubahtamu'])) {
        $nik = $_POST['nik'];
        $namatamu = $_POST['namatamu'];
        $hp = $_POST['hp'];
        $tujuan = $_POST['tujuan'];
        $namatujuan = $_POST['namatujuan'];
        $catatan = $_POST['catatan'];
        $petugas = $_POST['petugas'];
        $id = $_POST['idtamu'];
        $update = mysqli_query($koneksi, "UPDATE tbukutamu SET nik='$nik', namatamu='$namatamu', hp='$hp', tujuan='$tujuan',
        catatan='$catatan', petugas='$petugas' WHERE idtamu='$id' ");
    }
    if (isset($_POST['hapustamu'])) {
        $id = $_POST['idtamu'];
        $delete = mysqli_query($koneksi, "DELETE FROM tbukutamu WHERE idtamu='$id'");
    }

    if (isset($_POST['updateasuransi'])) {
        $asuransi = $_POST['asuransi'];
        $singkatan = $_POST['singkatan'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $website = $_POST['website'];
        $email = $_POST['email'];
        $statusasuransi = $_POST['statusasuransi'];
        $id = $_POST['idasuransi'];
        $update = mysqli_query($koneksi, "UPDATE tasuransi set asuransi='$asuransi', singkatan='$singkatan',
    alamat='$alamat', telepon='$telepon', website='$website', email='$email', status_asuransi='$statusasuransi WHERE idasuransi='$id'  ");
    }
    if (isset($_POST['updatetipedokumen'])) {
        $dokumen = $_POST['dokumen'];
        $deskripsi = $_POST['deskripsi'];
        $id = $_POST['iddokumen'];
        $update = mysqli_query($koneksi, "UPDATE tdokumen set dokumen='$dokumen', deskripsidokumen='$deskripsi' WHERE iddokumen='$id'  ");
    }
    if (isset($_POST['simpandokumentenagamedis'])) {
        $iddokumen = $_POST['iddokumen'];
        $iddokter = $_POST['iddokter'];
        $catatan = $_POST['catatan'];

        $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG');
        $namafile = $_FILES['dokumen']['name'];
        $x = explode('.', $namafile);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['dokumen']['size'];
        $file_tmp = $_FILES['dokumen']['tmp_name'];
        $generatename = uniqid();
        $namafile = $generatename;
        $namafile = $generatename . "." . $ekstensi;

        move_uploaded_file($file_tmp, '../file/' . $namafile);
        $insert = mysqli_query($koneksi, "INSERT INTO tdokumendokter (iddokumen, iddokter, filedokumen, catatandokumen) VALUES 
        ('$iddokumen','$iddokter','$namafile','$catatan')");
    }
    if (isset($_POST['simpandokumenperawat'])) {
        $iddokumen = $_POST['iddokumen'];
        $idperawat = $_POST['idperawat'];
        $catatan = $_POST['catatan'];

        $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG');
        $namafile = $_FILES['dokumen']['name'];
        $x = explode('.', $namafile);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['dokumen']['size'];
        $file_tmp = $_FILES['dokumen']['tmp_name'];
        $generatename = uniqid();
        $namafile = $generatename;
        $namafile = $generatename . "." . $ekstensi;

        move_uploaded_file($file_tmp, '../file/' . $namafile);
        $insert = mysqli_query($koneksi, "INSERT INTO tdokumenperawat (iddokumen, idperawat, filedokumen, catatandokumen) VALUES 
        ('$iddokumen','$idperawat','$namafile','$catatan')");
    }
    if (isset($_POST['uploadmouasuransi'])) {
        $penanggungjawab = $_POST['penanggungjawab'];
        $tanggalmulai = $_POST['tanggalmulai'];
        $tanggalakhir = $_POST['tanggalakhir'];
        $id = $_POST['idasuransi'];
        $ekstensi_diperbolehkan = array('pdf', 'jpg', 'png', 'JPG', 'JPEG');
        $namafile = $_FILES['dokumen']['name'];
        $x = explode('.', $namafile);
        $ekstensi = strtolower(end($x));
        $ukuran    = $_FILES['dokumen']['size'];
        $file_tmp = $_FILES['dokumen']['tmp_name'];
        $generatename = uniqid();
        $namafile = $generatename;
        $namafile = $generatename . "." . $ekstensi;

        move_uploaded_file($file_tmp, '../file/' . $namafile);
        $update = mysqli_query($koneksi, "UPDATE tasuransi set dokumen='$namafile', kerjasama_mulai='$tanggalmulai',
                kerjasama_akhir='$tanggalakhir', penanggungjawab='$penanggungjawab' WHERE idasuransi='$id'  ");
    }
    if (isset($_POST['updateasuransi'])) {
        $asuransi = $_POST['asuransi'];
        $nama = $_POST['nama'];
        $telepon = $_POST['telepon'];
        $posisi = $_POST['posisi'];
        $email = $_POST['email'];
        $id = $_POST['idkontakasuransi'];
        $update = mysqli_query($koneksi, "UPDATE tasuransikontak set nama='$nama', 
    handphone='$telepon', mail='$email', posisi='$posisi' WHERE idkontakasuransi='$id'  ");
    }

    if (isset($_POST['simpanpoliklinik'])) {
        $poliklinik = $_POST['poliklinik'];
        $tanggaloperasi = $_POST['tanggaloperasi'];
        $tarif = $_POST['tariflayanan'];
        $insert = mysqli_query($koneksi, "INSERT INTO tpoliklinik (poliklinik, tanggal_operasi, tarif_layanan) VALUES 
        ('$poliklinik','$tanggaloperasi','$tarif')");
    }
    if (isset($_POST['updatepoliklinik'])) {
        $poliklinik = $_POST['poliklinik'];
        $tanggaloperasi = $_POST['tanggaloperasi'];
        $tarif = $_POST['tariflayanan'];
        $id = $_POST['idpoliklinik'];
        $update = mysqli_query($koneksi, "UPDATE tpoliklinik set poliklinik='$poliklinik',
        tanggal_operasi='$tanggaloperasi', tarif_layanan='$tarif' WHERE idpoliklinik='$id'  ");
    }
    if (isset($_POST['hapuspoliklinik'])) {
        $id = $_POST['idpoliklinik'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpoliklinik WHERE idpoliklinik='$id'  ");
    }
    if (isset($_POST['simpanjadwaldokter'])) {
        $namadokter = $_POST['dokter'];
        $poliklinik = $_POST['poliklinik'];
        $hari = $_POST['hari'];
        $mulai = $_POST['mulai'];
        $akhir = $_POST['akhir'];
        $insert = mysqli_query($koneksi, "INSERT INTO tpoliklinikjadwal (idpoliklinik, iddokter, hari, mulai, selesai) VALUES 
        ('$poliklinik','$namadokter','$hari','$mulai','$akhir')");
    }
    if (isset($_POST['updatejadwal'])) {
        $hari = $_POST['hari'];
        $mulai = $_POST['mulai'];
        $akhir = $_POST['akhir'];
        $id = $_POST['idjadwal'];
        $update = mysqli_query($koneksi, "UPDATE tpoliklinikjadwal set hari='$hari',
        mulai='$mulai', selesai='$akhir' WHERE idjadwal='$id'  ");
    }
    if (isset($_POST['hapusjadwal'])) {
        $id = $_POST['idjadwal'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpoliklinikjadwal WHERE idjadwal='$id'  ");
    }

    if (isset($_POST['simpansupplier'])) {
        $supplier = $_POST['supplier'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $website = $_POST['website'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $kategori = implode(",", $_POST['kategori']);
        $insert = mysqli_query($koneksi, "INSERT INTO tsupplier (supplier, alamat, telepon, website, email, kategori) VALUES 
        ('$supplier','$alamat','$telepon','$website','$email','$kategori')");
    }
    if (isset($_POST['ubahsupplier'])) {
        $supplier = $_POST['supplier'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $website = $_POST['website'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $kategori = implode(",", $_POST['kategori']);
        $id = $_POST['idsupplier'];
        $update = mysqli_query($koneksi, "UPDATE tsupplier set supplier='$supplier',
        alamat='$alamat', telepon='$telepon', website='$website', email='$email',
        kategori='$kategori' WHERE idsupplier='$id'  ");
    }
    if (isset($_POST['hapussupplier'])) {
        $id = $_POST['idsupplier'];
        $delete = mysqli_query($koneksi, "DELETE FROM tsupplier WHERE idsupplier='$id'");
    }


    if (isset($_POST['simpanrawatjalan'])) {
        $namadokter = $_POST['dokter'];
        $idadmisi = $_POST['idadmisi'];
        $poliklinik = $_POST['poliklinik'];
        $noantrian = $_POST['noantrian'];
        $statuspasien = 'Hadir';

        $insert = mysqli_query($koneksi, "INSERT INTO trawatjalan (idadmisi, iddokter, idpoliklinik, noantrian) VALUES 
        ('$idadmisi','$namadokter','$poliklinik','$noantrian')");

        $update = mysqli_query($koneksi, "UPDATE tadmisi set statuspasien='$statuspasien' WHERE idadmisi='$idadmisi'  ");
    }
    if (isset($_POST['simpanobat'])) {
        $barcode = $_POST['idbarcode'];
        $noobat = $_POST['noobat'];
        $obat = $_POST['namaobat'];
        $kategoriobat = $_POST['kategoriobat'];
        $unit = $_POST['unit'];
        $deskripsi = $_POST['deskripsi'];
        $komposisi = $_POST['komposisi'];
        $insert = mysqli_query($koneksi, "INSERT INTO tobat (idkategoriobat, noobat, barcode, obat, kandunganobat, deskripsi, idunit) VALUES 
        ('$kategoriobat','$noobat','$barcode','$obat','$komposisi','$deskripsi','$unit')");
    }

    if (isset($_POST['simpanbhp'])) {
        $barcode = $_POST['idbarcode'];
        $nobhp = $_POST['nobhp'];
        $bhp = $_POST['bhp'];
        $kategori = $_POST['kategoribhp'];
        $unit = $_POST['unit'];
        $deskripsi = $_POST['deskripsi'];
        $insert = mysqli_query($koneksi, "INSERT INTO tbhp (idkategoribhp, nobhp, barcode, bhp, deskripsi, idunit) VALUES 
        ('$kategori','$nobhp','$barcode','$bhp','$deskripsi','$unit')");
    }
    if (isset($_POST['ubahobat'])) {
        $barcode = $_POST['idbarcode'];
        $noobat = $_POST['noobat'];
        $obat = $_POST['namaobat'];
        $kategoriobat = $_POST['kategoriobat'];
        $unit = $_POST['unit'];
        $deskripsi = $_POST['deskripsi'];
        $stockmin = $_POST['stockmin'];
        $komposisi = $_POST['komposisi'];
        $stockmax = $_POST['stockmax'];
        $id = $_POST['idobat'];
        $hargabeli = $_POST['hargabeli'];
        $hargajual = $_POST['hargajual'];
        $update = mysqli_query($koneksi, "UPDATE tobat SET idkategoriobat='$kategoriobat', noobat='$noobat',
        barcode='$barcode', obat='$obat', kandunganobat='$komposisi', deskripsi='$deskripsi', idunit='$unit',
        hargabeli='$hargabeli', hargajual='$hargajual', minstock='$stockmin', maxstock='$stockmax' WHERE idobat='$id'");
    }
    if (isset($_POST['ubahbhp'])) {
        $barcode = $_POST['idbarcode'];
        $nobhp = $_POST['nobhp'];
        $bhp = $_POST['bhp'];
        $kategori = $_POST['kategoribhp'];
        $unit = $_POST['unit'];
        $deskripsi = $_POST['deskripsi'];
        $id = $_POST['idbhp'];
        $stockmin = $_POST['stockmin'];
        $stockmax = $_POST['stockmax'];
        $hargabeli = $_POST['hargabeli'];
        $hargajual = $_POST['hargajual'];
        $update = mysqli_query($koneksi, "UPDATE tbhp SET idkategoribhp='$kategori', nobhp='$nobhp',
        barcode='$barcode', bhp='$bhp',  deskripsi='$deskripsi',
        idunit='$unit', minstock='$stockmin', maxstock='$stockmax', hargabeli='$hargabeli', hargajual='$hargajual' WHERE idbhp='$id'");
    }
    if (isset($_POST['simpankeluarobat'])) {
        $statuskoreksi = 'Approve';
        $id = $_POST['idresepdetail'];
        $idobat = $_POST['idobat'];
        $nobatch= $_POST['nobatch'];
        $expaired = $_POST['expaired'];
        $asuransi = $_POST['asuransi'];
        $keluar = $_POST['keluar'];
        $statusitem = "Keluar";
        $nomorrm = $_POST['nomorrm'];
        $noresep = $_POST['noresep'];
        $stock = $_POST['stock'];
        $stockakhir = $stock-$keluar;
        $catatan = "No.Resep : ". $noresep . " No.RM : ". $nomorrm;
        $update = mysqli_query($koneksi,"UPDATE tresepdetail SET statuskoreksi='$statuskoreksi' WHERE idresepdetail='$id'");
        $insert = mysqli_query($koneksi, "INSERT INTO tobatstock (idobat, nobatch, expaired, keluar, statusitem, catatanstock) 
        VALUES ('$idobat','$nobatch','$expaired','$keluar','$statusitem','$catatan') ");
        $updatestockobat = mysqli_query($koneksi, "UPDATE tobat SET stockakhir='$stockakhir' WHERE idobat='$idobat'");
        $inseroutobat = mysqli_query($koneksi, "INSERT INTO tobatkeluar (nomorrm, idasuransi, idobat, notransaksi, jumlah)
        VALUES ('$nomorrm','$asuransi','$idobat','$noresep','$keluar')");
    }

    if (isset($_POST['simpankeluarobatpermintaan'])) {
        $idobat = $_POST['idobat'];
        $nobatch= $_POST['nobatch'];
        $expaired = $_POST['expaired'];
        $jumlah = $_POST['jumlah'];
        $statusitem = "Keluar";
        $nopermintaan = $_POST['nopermintaan'];
        $stock = $_POST['stock'];
        $stockakhir = $stock-$jumlah;
        $catatan = "No.Permintaan : ". $nopermintaan;
        $realisasi = 'Approve';

        $insert = mysqli_query($koneksi, "INSERT INTO tobatstock (idobat, nobatch, expaired, keluar, statusitem, catatanstock) 
        VALUES ('$idobat','$nobatch','$expaired','$jumlah','$statusitem','$catatan') ");
        $updatestockobat = mysqli_query($koneksi, "UPDATE tobat SET stockakhir='$stockakhir' WHERE idobat='$idobat'");
        $inseroutobat = mysqli_query($koneksi, "INSERT INTO tobatkeluar (idobat, notransaksi, jumlah)
        VALUES ('$idobat','$catatan','$jumlah')");
        $updatepermintaan = mysqli_query($koneksi,"UPDATE tpermintaanitemobat SET statusrealisasi ='$realisasi' WHERE 
        nopermintaan='$nopermintaan' AND idobat='$idobat'");
    }

    if (isset($_POST['simpankeluarbhppermintaan'])) {
        $idbhp = $_POST['idbhp'];
        $nobatch= $_POST['nobatch'];
        $expaired = $_POST['expaired'];
        $jumlah = $_POST['jumlah'];
        $statusitem = "Keluar";
        $nomorrm = $_POST['nomorrm'];
        $nopermintaan = $_POST['nopermintaan'];
        $stock = $_POST['stock'];
        $stockakhir = $stock-$jumlah;
        $catatan = "No.Permintaan : ". $nopermintaan;
        $realisasi = 'Approve';

        $insert = mysqli_query($koneksi, "INSERT INTO tbhpstock (idbhp, nobatch, expaired, keluar, statusitem, catatanstock) 
        VALUES ('$idbhp','$nobatch','$expaired','$jumlah','$statusitem','$catatan') ");
        $updatestockobat = mysqli_query($koneksi, "UPDATE tbhp SET stockakhir='$stockakhir' WHERE idbhp='$idbhp'");
        $inseroutobat = mysqli_query($koneksi, "INSERT INTO tbhpkeluar (nomorrm, idbhp, notransaksi, jumlah)
        VALUES ('$nomorrm','$idbhp','$catatan','$jumlah')");
        $updatepermintaan = mysqli_query($koneksi,"UPDATE tpermintaanitembhp SET statusrealisasi ='$realisasi' WHERE 
        nopermintaan='$nopermintaan' AND idbhp='$idbhp'");
    }

    if (isset($_POST['ubahresep'])) {
        $obat = $_POST['obat'];
        $id = $_POST['idresepdetail'];
        $koreksi = $_POST['koreksi'];
        $statuskoreksi = 'Correct';
        $noresep = $_POST['noresep'];
        $update = mysqli_query($koneksi,"UPDATE tresepdetail SET idobat='$obat', statuskoreksi='$statuskoreksi', 
        catatankoreksi='$koreksi' WHERE idresepdetail='$id'");
        $updateresep = mysqli_query($koneksi,"UPDATE tresep SET koreksi='$statuskoreksi' WHERE noresep='$noresep'");
    }

    if (isset($_POST['validasipermintaan'])) {
        $id = $_POST['nopermintaan'];
        $status = 'Approve';
        $update = mysqli_query($koneksi,"UPDATE tpermintaanitem SET statuspermintaan='$status' WHERE nopermintaan='$id' ");
    }

    if (isset($_POST['simpanpermintaaninternal'])) {
        $nopermintaan = date('Ymd').rand(0000,9999);
        $departemant = $_POST['departemant'];
        $namapemohon = $_POST['namapemohon'];
        $statuspermintaan = 'Permintaan';
        $catatan = $_POST['catatan'];
        $insert = mysqli_query($koneksi, "INSERT INTO tpermintaanitem (nopermintaan, iddepartemant, namapemohon, statuspermintaan, catatanitem) 
        VALUES ('$nopermintaan','$departemant','$namapemohon','$statuspermintaan','$catatan')");
    }

    if (isset($_POST['simpanpermintaanobat'])) {
        $penerima = $_POST['penerima'];
        $dispancing = $_POST['dispancing'];
        $validasi = date("Y-m-d H:i:s");
        $noresep = $_POST['noresep'];
        $statuskoreksi = 'Approve';
        $update = mysqli_query($koneksi,"UPDATE tresep SET penerima='$penerima', dispancing='$dispancing', 
        penyerahan='$validasi', koreksi='$statuskoreksi' WHERE noresep='$noresep'");
    }
    if (isset($_POST['simpankategoriobat'])) {
        $kategoriobat = $_POST['kategoriobat'];
        $insert = mysqli_query($koneksi, "INSERT INTO tkategoriobat (kategoriobat) VALUES 
        ('$kategoriobat')");
    }
    if (isset($_POST['simpankategoribhp'])) {
        $kategori = $_POST['kategoribhp'];
        $insert = mysqli_query($koneksi, "INSERT INTO tkategoribhp (kategoribhp) VALUES 
        ('$kategori')");
    }
    if (isset($_POST['simpanunit'])) {
        $unit = $_POST['unit'];
        $deskripsi = $_POST['deskripsi'];
        $penggunaan = 'Farmasi';
        $insert = mysqli_query($koneksi, "INSERT INTO tunit (unit, keterangan, penggunaan) VALUES 
        ('$unit','$deskripsi','$penggunaan')");
    }
    if (isset($_POST['simpansigna'])) {
        $signa = $_POST['signa'];
        $deskripsi = $_POST['deskripsi'];
        $insert = mysqli_query($koneksi, "INSERT INTO tsigna (signa, catatan) VALUES 
        ('$signa','$deskripsi')");
    }

    if (isset($_POST['simpanobatracikan'])) {
        $novisit = $_POST['novisit'];
        $nomorrm = $_POST['nomorrm'];
        $namaobat = $_POST['namaobat'];
        $deskripsi = $_POST['deskripsi'];
        $unit = $_POST['unit'];
        $insert = mysqli_query($koneksi, "INSERT INTO tobatracikan (novisit, nomorrm, namaracikan, keteranganracikan, idunit) VALUES 
        ('$novisit','$nomorrm','$namaobat','$deskripsi','$unit')");
    }

    if (isset($_POST['ubahobatracikan'])) {
        $namaobat = $_POST['namaobat'];
        $deskripsi = $_POST['deskripsi'];
        $unit = $_POST['unit'];
        $id = $_POST['idracikan'];
        $insert = mysqli_query($koneksi, "UPDATE tobatracikan SET namaracikan='$namaobat',
        keteranganracikan='$deskripsi', idunit='$unit' WHERE idracikan='$id'");
    }

    if (isset($_POST['hapusobatracikan'])) {
        $id = $_POST['idracikan'];
        $delete = mysqli_query($koneksi, "DELETE FROM tobatracikan WHERE idracikan='$id'");
    }
    if (isset($_POST['simpanroute'])) {
        $rute = $_POST['rute'];
        $deskripsi = $_POST['deskripsi'];
        $insert = mysqli_query($koneksi, "INSERT INTO troute (rute, keterangan) VALUES 
        ('$rute','$deskripsi')");
    }
    if (isset($_POST['simpankomposisi'])) {
        $idracikan = $_POST['idracikan'];
        $obat = $_POST['obat'];
        $jumlah = $_POST['jumlah'];
        $unit = $_POST['unit'];
        $insert = mysqli_query($koneksi, "INSERT INTO tobatracikandetail (idracikan, idobat, idunit, jumlah) VALUES 
        ('$idracikan','$obat','$unit','$jumlah')");
    }

    if (isset($_POST['ubahkomposisi'])) {
        $obat = $_POST['obat'];
        $jumlah = $_POST['jumlah'];
        $unit = $_POST['idunit'];
        $id = $_POST['idracikandetail'];
        $update = mysqli_query($koneksi,"UPDATE tobatracikandetail SET idobat='$obat', jumlah='$jumlah', idunit='$unit' WHERE idracikandetail='$id'");
    }
    if (isset($_POST['ubahkategoriobat'])) {
        $kategoriobat = $_POST['kategoriobat'];
        $idkategoriobat = $_POST['idkategoriobat'];
        $update = mysqli_query($koneksi, "UPDATE tkategoriobat set kategoriobat='$kategoriobat'WHERE idkategoriobat='$idkategoriobat'  ");
    }
    if (isset($_POST['ubahkategoribhp'])) {
        $kategori = $_POST['kategoribhp'];
        $id = $_POST['idkategoribhp'];
        $update = mysqli_query($koneksi, "UPDATE tkategoribhp set kategoribhp='$kategori'WHERE idkategoribhp='$id'  ");
    }
    if (isset($_POST['ubahunit'])) {
        $unit = $_POST['unit'];
        $deskripsi = $_POST['deskripsi'];
        $idunit = $_POST['idunit'];
        $update = mysqli_query($koneksi, "UPDATE tunit set unit='$unit', keterangan='$deskripsi' WHERE idunit='$idunit'  ");
    }
    if (isset($_POST['ubahsigna'])) {
        $signa = $_POST['signa'];
        $deskripsi = $_POST['deskripsi'];
        $id = $_POST['idsigna'];
        $update = mysqli_query($koneksi,"UPDATE tsigna SET signa='$signa', catatan='$deskripsi' WHERE idsigna='$id'");
    }
    if (isset($_POST['ubahroute'])) {
        $rute = $_POST['rute'];
        $deskripsi = $_POST['deskripsi'];
        $id = $_POST['idrute'];
        $update = mysqli_query($koneksi, "UPDATE troure SET rute='$rute', keterangan='$deksripsi' WHERE dirute='$id'  ");
    }

    if (isset($_POST['simpandepofarmasi'])) {
        $depofarmasi = $_POST['depofarmasi'];
        $pj = $_POST['pj'];
        $kategori = 'Farmasi';
        $catatan = $_POST['catatan'];
        $insert = mysqli_query($koneksi, "INSERT INTO tdepartemant (departemant, penanggungjawab, catatan, kategoridepartemant) VALUES 
        ('$depofarmasi','$pj','$catatan','$kategori')");
    }

    if (isset($_POST['simpanuserfarmasi'])) {
        $namalengkap = $_POST['namalengkap'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $md5 = md5($password);
        $iddepartemant = $_POST['iddepartemant'];
        $insert = mysqli_query($koneksi, "INSERT INTO tuserdepofarmasi (namalengkap, username, password, iddepartemant) VALUES 
        ('$namalengkap','$username','$md5','$iddepartemant')");
    }
    if (isset($_POST['ubahdepofarmasi'])) {
        $depofarmasi = $_POST['depofarmasi'];
        $pj = $_POST['pj'];
        $catatan = $_POST['catatan'];
        $id = $_POST['iddepartemant'];
        $update = mysqli_query($koneksi, "UPDATE tdepartemant SET departemant='$depofarmasi', 
        pj = '$pj',  catatan='$catatan' WHERE iddepartemant='$id'  ");
    }

    if (isset($_POST['ubahuserfarmasi'])) {
        $namalengkap = $_POST['namalengkap'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $md5 = md5($password);
        $id = $_POST['iduserfarmasi'];
        $update = mysqli_query($koneksi, "UPDATE tuserdepofarmasi SET namalengkap='$namalengkap',
        username='$username', password='$md5' WHERE iduserfarmasi ='$id' ");
    }

    if (isset($_POST['simpanobatmasuk'])) {
        $nobatch = $_POST['nobatch'];
        $expaired = $_POST['expaired'];
        $jumlah = $_POST['masuk'];
        $idobat = $_POST['idobat'];
        $statusitem = 'Masuk';
        $insert = mysqli_query($koneksi, "INSERT INTO tobatstock (idobat, nobatch, expaired, masuk, statusitem) 
        VALUES('$idobat','$nobatch','$expaired','$jumlah','$statusitem')");
    }
    if (isset($_POST['simpanobatmasukdepo'])) {
        $departemant = $_POST['iddepartemant'];
        $nobatch = $_POST['nobatch'];
        $expaired = $_POST['expaired'];
        $jumlah = $_POST['masuk'];
        $idobat = $_POST['idobat'];
        $statusitem = 'Masuk';
        $insert = mysqli_query($koneksi, "INSERT INTO tobatstockdepo (iddepartemant, idobat, nobatch, expaired, masuk, statusitem) 
        VALUES('$departemant','$idobat','$nobatch','$expaired','$jumlah','$statusitem')");
    }
    if (isset($_POST['simpanobatmasukdepoadd'])) {
        $departemant = $_POST['iddepartemant'];
        $nobatch = $_POST['nobatch'];
        $expaired = $_POST['expaired'];
        $jumlah = $_POST['masuk'];
        $idobat = $_POST['idobat'];
        $statusitem = 'Masuk';
        $nopermintaan = $_POST['nopermintaan'];
        $statusrealisasi = 'Diterima';
        $insert = mysqli_query($koneksi, "INSERT INTO tobatstockdepo (iddepartemant, idobat, nobatch, expaired, masuk, statusitem) 
        VALUES('$departemant','$idobat','$nobatch','$expaired','$jumlah','$statusitem')");
        $update = mysqli_query($koneksi, "UPDATE tpermintaanitemobat SET statusrealisasi = '$statusrealisasi' WHERE
        idobat='$idobat' AND nopermintaan='$nopermintaan'");
    }
    if (isset($_POST['simpanbhpmasuk'])) {
        $nobatch = $_POST['nobatch'];
        $expaired = $_POST['expaired'];
        $jumlah = $_POST['masuk'];
        $idbhp = $_POST['idbhp'];
        $statusitem = 'Masuk';
        $insert = mysqli_query($koneksi, "INSERT INTO tbhpstock (idbhp, nobatch, expaired, masuk, statusitem) 
        VALUES('$idbhp','$nobatch','$expaired','$jumlah','$statusitem')");
    }
    if (isset($_POST['simpanbhpmasukdepo'])) {
        $departemant = $_POST['iddepartemant'];
        $nobatch = $_POST['nobatch'];
        $expaired = $_POST['expaired'];
        $jumlah = $_POST['masuk'];
        $idbhp = $_POST['idbhp'];
        $statusitem = 'Masuk';
        $insert = mysqli_query($koneksi, "INSERT INTO tdepostockbhp (iddepartemant, idbhp, nobatch, expaired, masuk, statusitem) 
        VALUES('$departemant','$idbhp','$nobatch','$expaired','$jumlah','$statusitem')");
    }
    if (isset($_POST['simpanpermintaanobatdetail'])) {
        $statusrealisasi = 'Approve';
        $id = $_POST['iddetailobat'];
        $jumlah = $_POST['jumlah'];
        $statusitem = 'Keluar';
        $idobat = $_POST['idobat'];
        $nobatch = $_POST['nobatch'];
        $update = mysqli_query($koneksi,"UPDATE tpermintaanitemobat SET statusrealisasi='$statusrealisasi' WHERE iddetailobat='$id'");
        $insert = mysqli_query($koneksi,"INSERT INTO tobatstock (idobat, nobatch, keluar, statusitem) 
        VALUES('$idobat','$nobatch','$jumlah','$statusitem')");
    }

    if (isset($_POST['simpanpermintaanbhpdetail'])) {
        $statusrealisasi = 'Approve';
        $id = $_POST['iddetailbhp'];
        $jumlah = $_POST['jumlah'];
        $statusitem = 'Keluar';
        $idbhp = $_POST['idbhp'];
        $nobatch = $_POST['nobatch'];
        $update = mysqli_query($koneksi,"UPDATE tpermintaanitembhp SET statusrealisasi='$statusrealisasi' WHERE iddetailbhp='$id'");
        $insert = mysqli_query($koneksi,"INSERT INTO tbhpstock (idbhp, nobatch, keluar, statusitem) 
        VALUES('$idbhp','$nobatch','$jumlah','$statusitem')");
    }

    if (isset($_POST['simpanpendingobat'])) {
        $statusrealisasi = $_POST['status'];
        $catatan = $_POST['catatan'];
        $id = $_POST['iddetailobat'];
        $idpermintaan = $_POST['idpermintaan'];
        $update = mysqli_query($koneksi,"UPDATE tpermintaanitemobat SET statusrealisasi='$statusrealisasi',
        catatanpermintaan='$catatan' WHERE iddetailobat='$id'");
        $updatestatus = mysqli_query($koneksi, "UPDATE tpermintaanitem SET statuspermintaan='$statusrealisasi',
        catatanitem='$catatan' WHERE nopermintaan='$idpermintaan' ");
    }

    if (isset($_POST['simpanpendingbhp'])) {
        $statusrealisasi = $_POST['status'];
        $catatan = $_POST['catatan'];
        $id = $_POST['iddetailbhp'];
        $idpermintaan = $_POST['idpermintaan'];
        $update = mysqli_query($koneksi,"UPDATE tpermintaanitembhp SET statusrealisasi='$statusrealisasi',
        catatanpermintaan='$catatan' WHERE iddetailbhp='$id'");
        $updatestatus = mysqli_query($koneksi, "UPDATE tpermintaanitem SET statuspermintaan='$statusrealisasi',
        catatanitem='$catatan' WHERE nopermintaan='$idpermintaan' ");
    }

    if (isset($_POST['ubahstockmasuk'])) {
        $nobatch = $_POST['nobatch'];
        $expaired = $_POST['expaired'];
        $jumlah = $_POST['masuk'];
        $id = $_POST['idstock'];
        $update = mysqli_query($koneksi, "UPDATE tobatstock SET nobatch='$nobatch', expaired='$expaired', masuk='$jumlah'
        WHERE idstock='$id'");
    }

    if (isset($_POST['ubahstockmasukdepo'])) {
        $nobatch = $_POST['nobatch'];
        $expaired = $_POST['expaired'];
        $jumlah = $_POST['masuk'];
        $id = $_POST['idstock'];
        $update = mysqli_query($koneksi, "UPDATE tobatstockdepo SET nobatch='$nobatch', expaired='$expaired', masuk='$jumlah'
        WHERE idstock='$id'");
    }
    if (isset($_POST['ubahstockmasukdepobhp'])) {
        $nobatch = $_POST['nobatch'];
        $expaired = $_POST['expaired'];
        $jumlah = $_POST['masuk'];
        $id = $_POST['idstock'];
        $update = mysqli_query($koneksi, "UPDATE tdepostockbhp SET nobatch='$nobatch', expaired='$expaired', masuk='$jumlah'
        WHERE idstock='$id'");
    }

    if (isset($_POST['sinkronstockobat'])) {
        $stock = $_POST['stock'];
        $id = $_POST['idobat'];
        $tanggal = date('Y-m-d H:i:s');
        $nama = $_POST['namalengkap'];
        $update = mysqli_query($koneksi, "UPDATE tobat SET stockakhir='$stock', tanggalsinkron='$tanggal', namasinkron='$nama' WHERE idobat='$id'");
    }
    if (isset($_POST['sinkronstockbhptdepo'])) {
        $stock = $_POST['stock'];
        $id = $_POST['idbhp'];
        $departemant = $_POST['iddepartemant'];
        $tanggal = date('Y-m-d H:i:s');
        $nama = $_POST['namalengkap'];
        $update = mysqli_query($koneksi, "UPDATE tbhpdepo SET stockakhirdepo='$stock', tanggalstock='$tanggal', petugas='$nama' WHERE idbhp='$id'
        AND iddepartemant='$departemant'");
    }

    if (isset($_POST['sinkronstockobatdepo'])) {
        $stock = $_POST['stock'];
        $id = $_POST['idobat'];
        $departemant = $_POST['iddepartemant'];
        $tanggal = date('Y-m-d H:i:s');
        $nama = $_POST['namalengkap'];
        $update = mysqli_query($koneksi, "UPDATE tobatdepo SET stockakhirdepo='$stock', tanggalstock='$tanggal', petugas='$nama' WHERE idobat='$id'
        AND iddepartemant='$departemant'");
    }

    if (isset($_POST['sinkronstockbhp'])) {
        $stock = $_POST['stock'];
        $id = $_POST['idbhp'];
        $tanggal = date('Y-m-d H:i:s');
        $nama = $_POST['namalengkap'];
        $update = mysqli_query($koneksi, "UPDATE tbhp SET stockakhir='$stock', tanggalsinkron='$tanggal', namasinkron='$nama' WHERE idbhp='$id'");
    }

    if (isset($_POST['ubahstockbhp'])) {
        $nobatch = $_POST['nobatch'];
        $expaired = $_POST['expaired'];
        $jumlah = $_POST['masuk'];
        $id = $_POST['idstock'];
        $update = mysqli_query($koneksi, "UPDATE tbhpstock SET nobatch='$nobatch', expaired='$expaired', masuk='$jumlah'
        WHERE idstock='$id'");
    }

    if (isset($_POST['hapusstockmasuk'])) {
        $masuk = $_POST['masuk'];
        $catatan = $_POST['catatan'];
        $tanggalhapus = date('Y-m-d H:i:s');
        $id = $_POST['idstock'];
        $update = mysqli_query($koneksi,"UPDATE tobatstock SET masuk='$masuk', tanggalpenghapusan='$tanggalhapus', catatanstock='$catatan'
        WHERE idstock='$id'");
    }
    if (isset($_POST['hapusstockmasukdepoobat'])) {
        $masuk = $_POST['masuk'];
        $catatan = $_POST['catatan'];
        $tanggalhapus = date('Y-m-d H:i:s');
        $id = $_POST['idstock'];
        $update = mysqli_query($koneksi,"UPDATE tobatstockdepo SET masuk='$masuk', tanggalpenghapusan='$tanggalhapus', catatanstock='$catatan'
        WHERE idstock='$id'");
    }
    if (isset($_POST['hapusstockmasukdepobhp'])) {
        $masuk = $_POST['masuk'];
        $catatan = $_POST['catatan'];
        $tanggalhapus = date('Y-m-d H:i:s');
        $id = $_POST['idstock'];
        $update = mysqli_query($koneksi,"UPDATE tdepostockbhp SET masuk='$masuk', tanggalpenghapusan='$tanggalhapus', catatanstock='$catatan'
        WHERE idstock='$id'");
    }

    if (isset($_POST['hapusstockmasukbhp'])) {
        $masuk = $_POST['masuk'];
        $catatan = $_POST['catatan'];
        $tanggalhapus = date('Y-m-d H:i:s');
        $id = $_POST['idstock'];
        $update = mysqli_query($koneksi,"UPDATE tbhpstock SET masuk='$masuk', tanggalpenghapusan='$tanggalhapus', catatanstock='$catatan'
        WHERE idstock='$id'");
    }



    if (isset($_POST['simpanpermintaandetailobat'])) {
        $id = $_POST['nopermintaan'];
        $obat = $_POST['obat'];
        $unit = $_POST['unit'];
        $jumlah = $_POST['jumlah'];
        $catatan = $_POST['catatan'];
        $status = 'Permintaan';
        $insert = mysqli_query($koneksi, "INSERT INTO tpermintaanitemobat (nopermintaan, idobat, idunit, jumlah, statusrealisasi, catatanpermintaan)
        VALUES ('$id','$obat','$unit','$jumlah','$status','$catatan')");
    }
    if (isset($_POST['ubahpermintaandetailobat'])) {
        $obat = $_POST['obat'];
        $unit = $_POST['unit'];
        $jumlah = $_POST['jumlah'];
        $catatan = $_POST['catatan'];
        $id = $_POST['iddetailobat'];
        $update = mysqli_query($koneksi,"UPDATE tpermintaanitemobat SET idobat='$obat', idunit='$unit',
        jumlah='$jumlah', catatanpermintaan='$catatan' WHERE iddetailobat='$id' ");
    }


    if (isset($_POST['simpanpermintaandetailbhp'])) {
        $id = $_POST['nopermintaan'];
        $bhp = $_POST['bhp'];
        $unit = $_POST['unit'];
        $jumlah = $_POST['jumlah'];
        $catatan = $_POST['catatan'];
        $status = 'Proses';
        $insert = mysqli_query($koneksi, "INSERT INTO tpermintaanitembhp (nopermintaan, idbhp, idunit, jumlah, statusrealisasi, catatanpermintaan)
        VALUES ('$id','$bhp','$unit','$jumlah','$status','$catatan')");
    }
    if (isset($_POST['ubahpermintaandetailbhp'])) {
        $bhp = $_POST['bhp'];
        $unit = $_POST['unit'];
        $jumlah = $_POST['jumlah'];
        $catatan = $_POST['catatan'];
        $id = $_POST['iddetailbhp'];
        $update = mysqli_query($koneksi,"UPDATE tpermintaanitembhp SET idbhp='$bhp', idunit='$unit',
        jumlah='$jumlah', catatanpermintaan='$catatan' WHERE iddetailbhp='$id' ");
    }




    if (isset($_POST['simpanpermintaan'])) {
        $nopermintaan = rand(000000,999999);
        $tanggal = $_POST['tanggal'];
        $supplier = $_POST['supplier'];
        $statuspermintaan = 'Permintaan';
        $insert = mysqli_query($koneksi, "INSERT INTO tpermintaan (nopermintaan, tanggal, idsupplier, statuspermintaan) VALUES 
        ('$nopermintaan','$tanggal','$supplier','$statuspermintaan')");
    }

    if (isset($_POST['simpanstockdepoobat'])) {
        $departemant = $_POST['iddepartemant'];
        $obat = $_POST['obat'];
        $unit = $_POST['unit'];
        $minstock = $_POST['minstock'];
        $maxstock = $_POST['maxstock'];
        $insert = mysqli_query($koneksi, "INSERT INTO tobatdepo (idobat, iddepartemant, idunit, minstockdepo, maxstockdepo) VALUES 
        ('$obat','$departemant','$unit','$minstock','$maxstock')");
    }

    if (isset($_POST['simpanstockdepobhp'])) {
        $departemant = $_POST['iddepartemant'];
        $bhp = $_POST['bhp'];
        $unit = $_POST['unit'];
        $minstock = $_POST['minstock'];
        $maxstock = $_POST['maxstock'];
        $tanggalstock = $_POST['tanggalstock'];
        $insert = mysqli_query($koneksi, "INSERT INTO tbhpdepo (idbhp, iddepartemant, idunit, minstockdepo, maxstockdepo) VALUES 
        ('$bhp','$departemant','$unit','$minstock','$maxstock')");
    }

    if (isset($_POST['ubahstockdepoobat'])) {
        $obat = $_POST['obat'];
        $unit = $_POST['unit'];
        $minstock = $_POST['minstock'];
        $maxstock = $_POST['maxstock'];
        $id= $_POST['idobatdepo'];
        $update = mysqli_query($koneksi, "UPDATE tobatdepo SET idobat='$obat', idunit='$unit', minstockdepo='$minstock',
        maxstockdepo='$maxstock' WHERE idobatdepo='$id'");
    }

    if (isset($_POST['ubahstockdepobhp'])) {
        $bhp = $_POST['bhp'];
        $unit = $_POST['unit'];
        $minstock = $_POST['minstock'];
        $maxstock = $_POST['maxstock'];
        $id= $_POST['idobatdepo'];
        $update = mysqli_query($koneksi, "UPDATE tbhpdepo SET idbhp='$bhp', idunit='$unit', minstockdepo='$minstock',
        maxstockdepo='$maxstock' WHERE idbhpdepo='$id'");
    }

    if (isset($_POST['ubahpermintaandetailobat'])) {
        $obat = $_POST['obat'];
        $jumlah = $_POST['jumlah'];
        $catatan = $_POST['catatan'];
        $id = $_POST['iddetail'];
        $update = mysqli_query($koneksi,"UPDATE tpermintaandetailobat SET jumlah='$jumlah', idobat='$obat',
        catatanpermintaan='$catatan' WHERE iddetail='$id'");
    }

    if (isset($_POST['ubahpermintaandetailbhp'])) {
        $bhp = $_POST['bhp'];
        $jumlah = $_POST['jumlah'];
        $catatan = $_POST['catatan'];
        $id = $_POST['iddetail'];
        $update = mysqli_query($koneksi,"UPDATE tpermintaandetailbhp SET jumlah='$jumlah', idbhp='$bhp',
        catatanpermintaan='$catatan' WHERE iddetail='$id'");
    }

    if (isset($_POST['ubahpermintaan'])) {
        $tanggal = $_POST['tanggal'];
        $supplier = $_POST['supplier'];
        $id = $_POST['idpermintaan'];
        $update = mysqli_query($koneksi,"UPDATE tpermintaan SET idsupplier='$supplier', tanggal='$tanggal' WHERE idpermintaan='$id'");
    }

    if (isset($_POST['updatedetailpermintaan'])) {
        $id = $_POST['iddetail'];
        $jumlah = $_POST['jumlah'];
        $catatan = $_POST['catatan'];
        $update = mysqli_query($koneksi, "UPDATE tpermintaandetail set jumlah='$jumlah',
        catatan='$catatan' WHERE iddetail='$id'  ");
    }
    if (isset($_POST['simpanharga'])) {
        $total = $_POST['total'];
        $jumlah = $_POST['jumlah'];
        $hargasatuan = $total/$jumlah;
        $id = $_POST['iddetail'];
        $update = mysqli_query($koneksi,"UPDATE tpermintaandetailobat SET hargasatuan='$hargasatuan' WHERE iddetail='$id'");
    }
    if (isset($_POST['simpanhargabhp'])) {
        $total = $_POST['total'];
        $jumlah = $_POST['jumlah'];
        $hargasatuan = $total/$jumlah;
        $id = $_POST['iddetail'];
        $update = mysqli_query($koneksi,"UPDATE tpermintaandetailbhp SET hargasatuan='$hargasatuan' WHERE iddetail='$id'");
    }
    if (isset($_POST['simpanpembelian'])) {
        $nopembelian = rand(000000,999999);
        $nopermintaan = $_POST['nopermintaan'];
        $supplier = $_POST['supplier'];
        $status = 'Belum Bayar';
        $statuspermintaan = 'Pembelian';
        $insert = mysqli_query($koneksi, "INSERT INTO tpembelian (nopermintaan, idsupplier, nopembelian, statuspembelian) VALUES 
        ('$nopermintaan','$supplier','$nopembelian','$status')");
        $update = mysqli_query($koneksi,"UPDATE tpermintaan SET statuspermintaan='$statuspermintaan' WHERE nopermintaan='$nopermintaan'");
    }

    if (isset($_POST['updatepembelianobat'])) {
        $totalpembelian = $_POST['jumlah'];
        $id = $_POST['nopermintaan'];
        $update = mysqli_query($koneksi,"UPDATE tpermintaan SET totalobat='$totalpembelian' WHERE nopermintaan='$id'");
    }

    if (isset($_POST['updatepembelianbhp'])) {
        $totalpembelian = $_POST['jumlah'];
        $id = $_POST['nopermintaan'];
        $update = mysqli_query($koneksi,"UPDATE tpermintaan SET totalbhp='$totalpembelian' WHERE nopermintaan='$id'");
    }


    if (isset($_POST['hapuspermintaandetial'])) {
        $id = $_POST['iddetail'];
        $delete = mysqli_query($koneksi, "DELETE FROM tpermintaandetail WHERE iddetail='$id'  ");
    }

    if(isset($_POST['checkrm'])){
        $nomorrm = $_POST['nomorrm'];
        $check = mysqli_query($koneksi, "SELECT * FROM tpasien");
        $data = mysqli_fetch_array($check);
        var_dump($data['nomorrm']);
        if($data['nomorrm'] == $nomorrm){
           echo" <script>alert('Nomor RM Sudah Ada')</script>";
        }else{
            
        }
    }