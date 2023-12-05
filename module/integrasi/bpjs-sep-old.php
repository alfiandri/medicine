<?php
$master = "V-Claim ";
$page = "SEP";
require 'head.php';
error_reporting(0);
require 'function.php';
include 'fungsi.php';
require_once 'vendor/autoload.php';
include 'connect.php';

if($_GET['kd']=='sukses'){
    echo "<script type='text/javascript'>toastr.success('Data Berhasil Di Tambahkan')</script>";
  } elseif ($_GET['kd']=='gagal') {
    echo "<script type='text/javascript'>toastr.error('Data Gagal Di Tambahkan')</script>";
  } elseif ($_GET['kd']=='hpssukses') {
    echo "<script type='text/javascript'>toastr.success('Data Sukses Di Hapus')</script>";
  } elseif ($_GET['kd']=='hpsgagal') {
    echo "<script type='text/javascript'>toastr.error('Data Gagal Di Hapus')</script>"; 
  } elseif ($_GET['kd']=='updsukses') {
    echo "<script type='text/javascript'>toastr.success('Data Berhasil Di Update')</script>"; 
  } elseif ($_GET['kd']=='updgagal') {
    echo "<script type='text/javascript'>toastr.error('Data Gagal Di Update')</script>"; 
  }


  $noSep = $_POST['noSep'];

if($_GET['kd']=='hpssukses') {
  echo "<script type='text/javascript'>toastr.success('Data Sukses Di Hapus')</script>";
} elseif ($_GET['kd']=='hpsgagal') {
  echo "<script type='text/javascript'>toastr.error('Data Gagal Di Hapus')</script>";
}


if (isset($_POST['submit'])) {

$ch = curl_init();
$headers = array(
'X-cons-id: '.$consid .'',
'X-timestamp: '.$tStamp.'' ,
'X-signature: '.$encodedSignature.'',
'user_key: '.$userkey.'',
'Content-Type:application/json'
  );
curl_setopt($ch, CURLOPT_URL, "https://apijkn.bpjs-kesehatan.go.id/vclaim-rest/SEP/Internal/".$noSep."");
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_TIMEOUT, 3);
  curl_setopt($ch, CURLOPT_HTTPGET, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $string = curl_exec($ch);
  $err = curl_error($ch);
  curl_close($ch);
  //print_r($string);

  $key = $consid . $secretKey . $tStamp;
  $string = json_decode($string);
  $dtdecrypt = $string->response;
  $code = $string->metaData->code;
  $message = $string->metaData->message;
  $dtdecrypt = $string->response;
  if ($code!="200") {
      echo "<script>alert('$code - $message');</script>";
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
$uhuy = json_decode($alihi, true);
$items = $uhuy['list'];
}
?>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php
      require 'header.php';
      ?>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php
         require 'sidebar.php';
         ?>
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <h3><?= $page ?></h3>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><?= $master ?></li>
                                    <li class="breadcrumb-item active"><?= $page ?> </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="col-md-12 project-list">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="nav nav-pills" id="pills-icontab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab"
                                                data-bs-toggle="pill" href="#pills-iconhome" role="tab"
                                                aria-controls="pills-iconhome" aria-selected="true"><i
                                                    class="icofont icofont-ui-home"></i>Data Insert SEP</a></li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconprofile-tab"
                                                data-bs-toggle="pill" href="#pills-iconprofile" role="tab"
                                                aria-controls="pills-iconprofile" aria-selected="false"><i
                                                    class="icofont icofont-man-in-glasses"></i>Cari</a></li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconcontact-tab"
                                                data-bs-toggle="pill" href="#pills-iconcontact" role="tab"
                                                aria-controls="pills-iconcontact" aria-selected="false"><i
                                                    class="icofont icofont-contacts"></i>Data SEP Internal</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content" id="pills-icontabContent">
                                    <div class="tab-pane fade show active" id="pills-iconhome" role="tabpanel"
                                        aria-labelledby="pills-iconhome-tab">
                                        <div class="table-responsive">
                                            <table class="display table-sm" id="basic-1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>No.Kartu</th>
                                                        <th>No.SEP</th>
                                                        <th>Tanggal</th>
                                                        <th>No.MR</th>
                                                        <th>Diagnosa Awal</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                     $no = 0;
                     $admin = $mysqli->query("SELECT * FROM t_sep ORDER BY id DESC");
                     while ($n=mysqli_fetch_array($admin)) {
                        $no++;
                     ?>
                                                    <tr>
                                                        <td><?php echo $no;?></td>
                                                        <td><?php echo $n['noKartu'];?></td>
                                                        <td><?php echo $n['noSep'];?></td>
                                                        <td><?php echo $n['tglSep'];?></td>
                                                        <td><?php echo $n['noMR'];?></td>
                                                        <td><?php echo $n['diagAwal'];?></td>
                                                        <td>
                                                            <a
                                                                href="update_sep.php?kode=<?php echo $n['noSep'];?>&diag=<?php echo $n['diagAwal'];?>&telp=<?php echo $n['noTelp'];?>">
                                                                <button type="button" class="btn btn-warning btn-xs"><i
                                                                        class="fa fa-edit" data-toggle="tooltip"
                                                                        data-original-title="Update SEP"></i></button>
                                                            </a>
                                                            <a href="delete_sep.php?kode=<?php echo $n['noSep'];?>"
                                                                onclick="return confirm('Anda yakin akan menghapus data?')">
                                                                <button type="button" class="btn btn-danger btn-xs"><i
                                                                        class="fa fa-trash" data-toggle="tooltip"
                                                                        data-original-title="Hapus SEP"></i></button>
                                                            </a>
                                                            <a href="detail_sep.php?kode=<?php echo $n['noSep'];?>">
                                                                <button type="button" class="btn btn-success btn-xs"><i
                                                                        class="fa fa-eye" data-toggle="tooltip"
                                                                        data-original-title="Lihat Detail SEP"></i></button>
                                                            </a>
                                                            <a href="cetaksep.php?kode=<?php echo $n['noSep'];?>">
                                                                <button type="button" class="btn btn-primary btn-xs"><i
                                                                        class="fa fa-print" data-toggle="tooltip"
                                                                        data-original-title="Cetak SEP"></i></button>
                                                            </a>
                                                            <a
                                                                href="insert_rencana_kontrol.php?kode=<?php echo $n['noSep'];?>&poli=<?php echo $n['tujuan'];?>">
                                                                <button type="button" class="btn btn-primary btn-xs"><i
                                                                        class="fa fa-stethoscope" data-toggle="tooltip"
                                                                        data-original-title="Buat Rencana Kontrol"></i></button>
                                                            </a>
                                                            <a
                                                                href="insert_rujukan.php?kode=<?php echo $n['noSep'];?>&tgl=<?php echo $n['tglSep'];?>">
                                                                <button type="button" class="btn btn-primary btn-xs"><i
                                                                        class="fa fa-location-arrow"
                                                                        data-toggle="tooltip"
                                                                        data-original-title="Buat Rujukan"></i></button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-iconprofile" role="tabpanel"
                                        aria-labelledby="pills-iconprofile-tab">
                                        <form action="detail_sep.php" method="post">
                                            <div class="mb-1 row">
                                                <label for="inputPassword"
                                                    class="col-sm-2 col-form-label-sm ">No.SEP</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="inputPassword" name="noSep">
                                                </div>
                                            </div>

                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                <div class="col-sm-10">
                                                    <button class="btn btn-success btn-sm" type="submit">Proses</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="pills-iconcontact" role="tabpanel"
                                        aria-labelledby="pills-iconcontact-tab">
                                        <div class="table-responsive">
                                            <table class="display table-sm" id="basic-3">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>No.SEP</th>
                                                        <th>No.Surat</th>
                                                        <th>Tanggal Rujukan Int</th>
                                                        <th>Poli Tujuan</th>
                                                        <th>Diagnosa</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                     $no = 0;
                     if (is_array($items)){
                     foreach($items as $item){
                        $no++;
                     ?>
                                                    <tr>
                                                        <td><?php echo $no;?></td>
                                                        <td><?php echo $item['nosep'];?></td>
                                                        <td><?php echo $item['tglsep'];?></td>
                                                        <td><?php echo $item['nosurat'];?></td>
                                                        <td><?php echo $item['tglrujukinternal'];?></td>
                                                        <td><?php echo $item['kdpolituj'];?></td>
                                                        <td><?php echo $item['nmdiag'];?></td>
                                                        <td>
                                                            <a href="delete_sep.php?par1=<?php echo $item['nosep'];?>&par2=<?php echo $item['nosurat'];?>&par3=<?php echo $item['tglrujukinternal'];?>&par4=<?php echo $item['kdpolituj'];?>"
                                                                onclick="return confirm('Yakin akan menghapus data?')">
                                                                <button type="button" class="btn btn-danger btn-xs"><i
                                                                        class="fa fa-trash"></i></button>
                                                            </a>
                                                            <a href="detail_sep.php?kode=<?php echo $item['nosep'];?>">
                                                                <button type="button" class="btn btn-success btn-xs"><i
                                                                        class="fa fa-eye"></i></button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php }}  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- Page Sidebar Ends-->

            <!-- footer start-->
            <?php
         require 'footer.php';
         ?>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tempat & Tanggal Lahir</label>
                        <div class="row">
                            <div class="col-7">
                                <input type="text" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="col-5">
                                <input type="date" class="form-control" id="exampleFormControlInput1">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                        <select name="" class="form-select" id="">
                            <option value="">Laki-Laki</option>
                            <option value="">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">No.Handphone</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Booking Via</label>
                        <select name="" class="form-select" id="">
                            <option value="">Mobile JKN</option>
                            <option value="">On-Site</option>
                            <option value="">Online Channel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Layanan</label>
                        <select name="" class="form-select" id="">
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <script src="../assets/js/chart/chartist/chartist.js"></script>
    <script src="../assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="../assets/js/chart/knob/knob.min.js"></script>
    <script src="../assets/js/chart/knob/knob-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="../assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="../assets/js/dashboard/default.js"></script>
    <script src="../assets/js/notify/index.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="../assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>