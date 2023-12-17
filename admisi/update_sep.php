<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $page = "Edit";
  error_reporting(E_ALL&~E_NOTICE);
  require 'function.php';
  include 'head.php';
  include 'fungsi.php';
require_once 'vendor/autoload.php';
$idsep = $_GET['kode'];
$diag = $_GET['diag'];
$telp = $_GET['telp'];
$id_nama = $_SESSION['namalengkap'];

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
 );
 curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/SEP/".$idsep."");
 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_TIMEOUT, 3);
 curl_setopt($ch, CURLOPT_HTTPGET, 1);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 $string = curl_exec($ch);
 $err = curl_error($ch);
 curl_close($ch);


 $key = $consid . $secretKey . $tStamp;
 $string = json_decode($string);
 $message = $string->metaData->message;
 $dtdecrypt = $string->response;
 if ($string->metaData->code=="201") {
    ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?= $message?>',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location = "data-sep.php";
        }
    })
    </script>
    <?php
 }

function stringDecrypt($key, $dtdecrypt){   
    $encrypt_method = 'AES-256-CBC';
    $key_hash = hex2bin(hash('sha256', $key));
    $iv = substr(hex2bin(hash('sha256', $key)), 0, 16);
    $output = openssl_decrypt(base64_decode($dtdecrypt), $encrypt_method, $key_hash, OPENSSL_RAW_DATA, $iv);
    return $output;
}
$aloha = stringDecrypt($key, $dtdecrypt);
function decompress($aloha){
    return \LZCompressor\LZString::decompressFromEncodedURIComponent($aloha);
}

$alihi = decompress($aloha);
//echo $alihi;
$uhuy = json_decode($alihi);

if ($uhuy->peserta->kelamin=="L") {
  $jenis_kelamin = "Pria";
  }
if ($uhuy->peserta->kelamin=="P") {
  $jenis_kelamin = "Wanita";
  }
$kdStatusKecelakaan = $uhuy->kdStatusKecelakaan;
$klsRawatHak = $uhuy->klsRawat->klsRawatHak;
$klsRawatNaik = $uhuy->klsRawat->klsRawatNaik;
$pembiayaan = $uhuy->klsRawat->pembiayaan;
$penanggungJawab = $uhuy->klsRawat->penanggungJawab;
$penanggungJawab = $uhuy->klsRawat->penanggungJawab;
$tglKejadian = $uhuy->jaminan->penjamin->tglKejadian;
$keterangan = $uhuy->jaminan->penjamin->keterangan;
$suplesi = $uhuy->jaminan->penjamin->suplesi->suplesi;
$noSepSuplesi = $uhuy->jaminan->penjamin->suplesi->noSepSuplesi;
$kdPropinsi = $uhuy->jaminan->penjamin->suplesi->lokasiLaka->kdPropinsi;
$kdKabupaten = $uhuy->jaminan->penjamin->suplesi->lokasiLaka->kdKabupaten;
$kdKecamatan = $uhuy->jaminan->penjamin->suplesi->lokasiLaka->kdKecamatan;
$katarak = $uhuy->katarak;
$dpjp = $uhuy->dpjp->kdDPJP;
$cob = $uhuy->cob;
$poliEksekutif = $uhuy->poliEksekutif;
$poli = $uhuy->poli;
if ($poli=='MATA') {
      $kodepoli='MAT';
  } elseif ($poli=='PENYAKIT DALAM') {
      $kodepoli='INT';
  } elseif ($poli=='Vitreo - Retina') {
    $kodepoli='135';
  } else {
    $kodepoli='';
}

  ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">


                <!-- Content Wrapper. Contains page content -->
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6" style="text-align: center;">
                                <h1>UPDATE SURAT ELEGEBILITAS PESERTA (SEP)</h1>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <form role="form" method="post" action="proses_update_sep.php">
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-6">
                                    <!-- general form elements -->
                                    <div class="card">
                                        <div class="card-header" style="background-color: #06d6a0;color:white;">
                                            <h3 class="card-title">SEP</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->

                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputnoMR">No. SEP</label>
                                                <input type="text" class="form-control" name="noSep"
                                                    value="<?php echo $uhuy->noSep;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputnoMR">No. Medical Record (MR)</label>
                                                <input type="text" class="form-control" name="noMR"
                                                    value="<?php echo $uhuy->peserta->noMr;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputcatatan">Catatan Peserta</label>
                                                <textarea class="form-control" rows="3"
                                                    name="catatan"><?php echo $uhuy->catatan;?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputdiagAwal">Diagnosa Awal</label>
                                                <input type="text" class="form-control" name="diagAwal"
                                                    value="<?php echo $diag;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputdpjpLayan">DPJP Pelayanan</label>
                                                <input type="text" class="form-control" name="dpjpLayan"
                                                    value="<?php echo $uhuy->dpjp->kdDPJP;?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputnoTelp">No. Telp Peserta</label>
                                                <input type="text" class="form-control" name="noTelp"
                                                    value="<?php echo $telp;?>" placeholder="" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputuser">User</label>
                                                <input type="text" class="form-control" name="user"
                                                    value="<?php echo $id_nama;?>" required>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                        </form>
                    </div>
                    <div class="card card-success">
                        <div class="card-header" style="background-color: #06d6a0;color:white;">
                            <h3 class="card-title">KELAS RAWAT</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="col-sm-12 col-form-label-sm ">
                                <label for="exampleSelectklsRawatHak">Kelas Rawat Hak</label>
                                <select class="form-select form-select-sm" name="klsRawatHak" required="true">
                                    <option <?= ($klsRawatHak=='') ? 'selected' : '' ?>>-- Pilih Kelas Rawat --</option>
                                    <option value="1" <?= ($klsRawatHak=='1') ? 'selected' : '' ?>>Kelas I</option>
                                    <option value="2" <?= ($klsRawatHak=='2') ? 'selected' : '' ?>>Kelas II</option>
                                    <option value="3" <?= ($klsRawatHak=='3') ? 'selected' : '' ?>>Kelas III</option>
                                </select>
                            </div>
                            <div class="col-sm-12 col-form-label-sm ">
                                <label for="exampleSelectklsRawatNaik">Kelas Rawat Naik</label>
                                <select class="form-select form-select-sm" name="klsRawatNaik">
                                    <option value="" <?= ($klsRawatNaik=='') ? 'selected' : '' ?>>-- Pilih Kelas Rawat
                                        Naik --</option>
                                    <option value="1" <?= ($klsRawatNaik=='1') ? 'selected' : '' ?>>VVIP</option>
                                    <option value="2" <?= ($klsRawatNaik=='2') ? 'selected' : '' ?>>VIP</option>
                                    <option value="3" <?= ($klsRawatNaik=='3') ? 'selected' : '' ?>>Kelas 1</option>
                                    <option value="4" <?= ($klsRawatNaik=='4') ? 'selected' : '' ?>>Kelas 2</option>
                                    <option value="5" <?= ($klsRawatNaik=='5') ? 'selected' : '' ?>>Kelas 3</option>
                                    <option value="6" <?= ($klsRawatNaik=='6') ? 'selected' : '' ?>>ICCU</option>
                                    <option value="7" <?= ($klsRawatNaik=='7') ? 'selected' : '' ?>>ICU</option>
                                </select>
                            </div>
                            <div class="col-sm-12 col-form-label-sm ">
                                <label for="exampleSelectpembiayaan">Pembiayaan (Naik Kelas Rawat)</label>
                                <select class="form-select form-select-sm" name="pembiayaan">
                                    <option value="" <?= ($pembiayaan=='') ? 'selected' : '' ?>>-- Pilih Pembiayaan --
                                    </option>
                                    <option value="1" <?= ($pembiayaan=='1') ? 'selected' : '' ?>>Pribadi</option>
                                    <option value="2" <?= ($pembiayaan=='2') ? 'selected' : '' ?>>Pemberi Kerja</option>
                                    <option value="3" <?= ($pembiayaan=='3') ? 'selected' : '' ?>>Asuransi Kesehatan
                                        Tambahan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputpenanggungJawab">Penanggung Jawab</label>
                                <input type="text" class="form-control" name="penanggungJawab"
                                    value="<?php echo $penanggungJawab;?>">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card card-success">
                        <div class="card-header" style="background-color: #06d6a0;color:white;">
                            <h3 class="card-title">KATARAK</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleSelectkatarak" class="col-sm-2 col-form-label-sm ">KATARAK</label>
                                <select class="form-select form-select-sm" name="katarak">
                                    <option <?= ($katarak=='') ? 'selected' : '' ?>>-- Pilih --</option>
                                    <option value="0" <?= ($katarak=='0') ? 'selected' : '' ?>>Tidak</option>
                                    <option value="1" <?= ($katarak=='1') ? 'selected' : '' ?>>Ya</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>

            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-success">
                    <div class="card-header" style="background-color: #06d6a0; color:white;">
                        <h3 class="card-title">POLI</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputtujuan">Poli Tujuan</label>
                            <input type="text" class="form-control" name="tujuan" value="<?php echo $kodepoli;?>"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelecteksekutif" class="col-sm-2 col-form-label-sm ">Poli
                                Eksekutif</label>
                            <select class="form-select form-select-sm" name="eksekutif" required>
                                <option <?= ($poliEksekutif=='') ? 'selected' : '' ?>>-- Pilih --</option>
                                <option value="0" <?= ($poliEksekutif=='0') ? 'selected' : '' ?>>Tidak</option>
                                <option value="1" <?= ($poliEksekutif=='1') ? 'selected' : '' ?>>Ya</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card card-success">
                    <div class="card-header" style="background-color: #06d6a0;color:white;">
                        <h3 class="card-title">COB</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleSelectcob" class="col-sm-2 col-form-label-sm ">COB</label>
                            <select class="form-select form-select-sm" name="cob">
                                <option value="" <?= ($cob=='') ? 'selected' : '' ?>>-- Pilih --</option>
                                <option value="0" <?= ($cob=='0') ? 'selected' : '' ?>>Tidak</option>
                                <option value="1" <?= ($cob=='1') ? 'selected' : '' ?>>Ya</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

                <div class="card card-success">
                    <div class="card-header" style="background-color: #06d6a0; color: white;">
                        <h3 class="card-title">JAMINAN LAKA LANTAS</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleSelectlakaLantas" class="col-sm-2 col-form-label-sm ">Laka Lantas</label>
                            <select class="form-select form-select-sm" name="lakaLantas"
                                onchange="if (this.selectedIndex==2 || this.selectedIndex==3 || this.selectedIndex==4){ document.getElementById('tampil_bkk').style.display='inline'} else { document.getElementById('tampil_bkk').style.display='none'};"
                                required="true">
                                <option value="" <?= ($kdStatusKecelakaan=='') ? 'selected' : '' ?>>-- Pilih --</option>
                                <option value="0" <?= ($kdStatusKecelakaan=='0') ? 'selected' : '' ?>>Bukan Kecelakaan
                                    Lalu Lintas [BKLL]</option>
                                <option value="1" <?= ($kdStatusKecelakaan=='1') ? 'selected' : '' ?>>KLL Dan Bukan
                                    Kecelakaan Kerja [BKK]</option>
                                <option value="2" <?= ($kdStatusKecelakaan=='2') ? 'selected' : '' ?>>Kecelakaan Lalu
                                    Lintas dan Kecelakaan KerjaK</option>
                                <option value="3" <?= ($kdStatusKecelakaan=='3') ? 'selected' : '' ?>>Kecelakaan Kerja
                                </option>
                            </select>
                        </div>
                        <span id="tampil_bkk" style="display:none;">
                            <div class="form-group">
                                <label for="exampleInputtglKejadian">Tanggal Kejadian</label>
                                <input type="date" class="form-control" name="tglKejadian"
                                    value="<?php echo $tglKejadian;?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputketerangan">Keterangan</label>
                                <textarea class="form-control" rows="3" name="keterangan"
                                    value="<?php echo $keterangan;?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectsuplesi">Suplesi</label>
                                <select class="form-select form-select-sm" name="suplesi">
                                    <option value="" <?= ($suplesi=='') ? 'selected' : '' ?>>-- Pilih --</option>
                                    <option value="0" <?= ($suplesi=='0') ? 'selected' : '' ?>>Tidak</option>
                                    <option value="1" <?= ($suplesi=='1') ? 'selected' : '' ?>>Ya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputnoSepSuplesi">No. SEP Suplesi</label>
                                <input type="text" class="form-control" name="noSepSuplesi"
                                    value="<?php echo $noSepSuplesi;?>">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-1 custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="switch1">
                                        <label class="custom-control-label" for="switch1">Get</label>
                                    </div>&emsp;&emsp;
                                    <div class="col-10">
                                        <label for="exampleSelectkdPropinsi"
                                            class="col-sm-2 col-form-label-sm ">Propinsi</label>
                                        <select class="form-select form-select-sm" name="kdPropinsi" id="form_prov">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectkdKabupaten"
                                    class="col-sm-2 col-form-label-sm ">Kabupaten</label>
                                <select name="kdKabupaten" id="form_kab" class="form-select form-select-sm">
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectkdKecamatan"
                                    class="col-sm-2 col-form-label-sm ">Kecamatan</label>
                                <select name="kdKecamatan" id="form_kec" class="form-select form-select-sm">
                                </select>
                            </div>
                        </span>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!--/.col (right) -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <!-- /.row -->
        </form>
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?=  include 'script.php'; ?>

    <script>
    function myFunction() {
        var checkBox = document.getElementById("myCheck");
        var text = document.getElementById("text");
        if (checkBox.checked == true) {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('body').on("change", "#switch1", function() {
            var data = "data=propinsi";
            $.ajax({
                type: 'POST',
                url: "getdaerah2.php",
                data: data,
                success: function(hasil) {
                    $("#form_prov").html(hasil);
                    $("#form_prov").show();
                }
            });
        });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function() {

        // sembunyikan form kabupaten, kecamatan dan desa
        $("#form_kab").hide();
        $("#form_kec").hide();
        $("#form_des").hide();

        // ambil data kabupaten ketika data memilih provinsi
        $('body').on("change", "#form_prov", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=kabupaten";
            $.ajax({
                type: 'POST',
                url: "getdaerah2.php",
                data: data,
                success: function(hasil) {
                    $("#form_kab").html(hasil);
                    $("#form_kab").show();
                    $("#form_kec").hide();
                    $("#form_des").hide();
                }
            });
        });

        // ambil data kecamatan/kota ketika data memilih kabupaten
        $('body').on("change", "#form_kab", function() {
            var id = $(this).val();
            var data = "id=" + id + "&data=kecamatan";
            $.ajax({
                type: 'POST',
                url: "getdaerah2.php",
                data: data,
                success: function(hasil) {
                    $("#form_kec").html(hasil);
                    $("#form_kec").show();
                    $("#form_des").hide();
                }
            });
        });

    });
    </script>
    <script>
    $(function() {
        $("#datepicker").datepicker({
            minDate: new Date(),
        });
    });
    </script>

    <script>
    function yesnoCheck() {
        if (document.getElementById('yesCheck').checked) {
            document.getElementById('ifYes').style.visibility = 'visible';
        } else document.getElementById('ifYes').style.visibility = 'hidden';
    }
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('body').on("click", "#yesCheck", function() {
            var a = document.getElementById("idjenis").value;
            var b = document.getElementById("idtglsep").value;
            var c = document.getElementById("idpoli").value;
            var data = "jenis=" + a + "&tanggal=" + b + "&poli=" + c;
            $.ajax({
                type: 'POST',
                url: "getdpjp.php",
                data: data,
                success: function(hasil) {
                    $("#iddpjpLayan").html(hasil);
                    $("#iddpjpLayan").show();
                }
            });
        });
    });
    </script>

    </div>
    </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</body>

</html>