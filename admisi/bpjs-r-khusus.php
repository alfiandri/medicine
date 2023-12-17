<?php
$master = "V-Claim ";
$page = "Rujukan Khusus";
require 'head.php';
error_reporting(0);
session_start();
$id_nama = $_SESSION['namalengkap'];
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
                                    <li class="breadcrumb-item">Rujukan</li>
                                    <li class="breadcrumb-item active">Khusus</li>
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
                                                    class="icofont icofont-ui-home"></i>Tambah</a></li>
                                        <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconcontact-tab"
                                                data-bs-toggle="pill" href="#pills-iconcontact" role="tab"
                                                aria-controls="pills-iconcontact" aria-selected="false"><i
                                                    class="icofont icofont-contacts"></i>Data Rujukan</a></li>
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
                                        <form action="proses_insert_rujukan_khusus.php" method="post">
                                            <div class="mb-1 row">
                                                <label for="inputPassword"
                                                    class="col-sm-2 col-form-label-sm ">No.Rujukan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control form-control-sm"
                                                        id="inputPassword" name="noRujukan">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-end">
                                                <button class="btn btn-info" id="tambah">Tambah</button>
                                            </div>
                                            <div class="isi">
                                                <div class="row my-3">
                                                    <div class="col-sm-4 offset-2">
                                                        <select name="ps[]" class="form-select form-select-sm" id=""
                                                            required>
                                                            <option value="">-Level-</option>
                                                            <option value="P">Primare</option>
                                                            <option value="S">Sekunder</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control form-control-sm"
                                                                name="kode[]">
                                                            <button class="btn btn-success btn-sm"><i class="fa fa-plus"
                                                                    aria-hidden="true" id="tambahForm"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                            var tambah = document.getElementById('tambah');
                                            tambah.addEventListener('click', function() {
                                                var newRow = document.createElement("div");
                                                newRow.className = "row my-3";

                                                // Buat elemen <div> dengan kelas "col-sm-4 offset-2"
                                                var col1 = document.createElement("div");
                                                col1.className = "col-sm-4 offset-2";

                                                // Buat elemen <select>
                                                var selectElement = document.createElement("select");
                                                selectElement.name = "ps[]";
                                                selectElement.className = "form-select form-select-sm";
                                                selectElement.required = true;

                                                // Buat elemen <option> untuk select
                                                var option1 = document.createElement("option");
                                                option1.value = "";
                                                option1.textContent = "-Level-";
                                                var option2 = document.createElement("option");
                                                option2.value = "P";
                                                option2.textContent = "Primare";
                                                var option3 = document.createElement("option");
                                                option3.value = "S";
                                                option3.textContent = "Sekunder";

                                                // Tambahkan elemen <option> ke elemen <select>
                                                selectElement.appendChild(option1);
                                                selectElement.appendChild(option2);
                                                selectElement.appendChild(option3);

                                                // Tambahkan elemen <select> ke elemen "col-sm-4 offset-2"
                                                col1.appendChild(selectElement);

                                                // Buat elemen <div> dengan kelas "col-sm-6"
                                                var col2 = document.createElement("div");
                                                col2.className = "col-sm-6";

                                                // Buat elemen <div> dengan kelas "input-group"
                                                var inputGroupDiv = document.createElement("div");
                                                inputGroupDiv.className = "input-group";

                                                // Buat elemen input
                                                var inputElement = document.createElement("input");
                                                inputElement.type = "text";
                                                inputElement.className = "form-control form-control-sm";
                                                inputElement.name = "kode[]";

                                                // Buat elemen tombol
                                                var buttonElement = document.createElement("button");
                                                buttonElement.className = "btn btn-success btn-sm";
                                                var iconElement = document.createElement("i");
                                                iconElement.className = "fa fa-plus";
                                                iconElement.setAttribute("aria-hidden", "true");
                                                buttonElement.appendChild(iconElement);

                                                // Tambahkan elemen input dan tombol ke dalam elemen "input-group"
                                                inputGroupDiv.appendChild(inputElement);
                                                inputGroupDiv.appendChild(buttonElement);

                                                // Tambahkan elemen "input-group" ke elemen "col-sm-6"
                                                col2.appendChild(inputGroupDiv);

                                                // Tambahkan elemen "col-sm-4 offset-2" dan "col-sm-6" ke elemen "row my-3"
                                                newRow.appendChild(col1);
                                                newRow.appendChild(col2);

                                                // Tambahkan elemen "row my-3" ke elemen "container"
                                                var container = document.querySelector(".isi");
                                                container.appendChild(newRow);
                                            });
                                            </script>
                                            <div class="col-sm-12 text-end">
                                                <button class="btn btn-info" id="tambah2">Tambah</button>
                                            </div>
                                            <div class="row my-2">
                                                <label for="inputPassword"
                                                    class="col-sm-2 col-form-label-sm ">Prosedur</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control form-control-sm"
                                                            name="procedure[]">
                                                        <button class="btn btn-success btn-sm"><i class="fa fa-plus"
                                                                aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="isi2"></div>
                                            <script>
                                            document.getElementById('tambah2').addEventListener('click', function() {
                                                var newRow = document.createElement("div");
                                                newRow.className = "row my-2";

                                                // Buat elemen <div> dengan kelas "col-sm-10 offset-2"
                                                var colElement = document.createElement("div");
                                                colElement.className = "col-sm-10 offset-2";

                                                // Buat elemen <div> dengan kelas "input-group"
                                                var inputGroupDiv = document.createElement("div");
                                                inputGroupDiv.className = "input-group";

                                                // Buat elemen input
                                                var inputElement = document.createElement("input");
                                                inputElement.type = "text";
                                                inputElement.className = "form-control form-control-sm";
                                                inputElement.name = "procedure[]";

                                                // Buat elemen tombol
                                                var buttonElement = document.createElement("button");
                                                buttonElement.className = "btn btn-success btn-sm";
                                                var iconElement = document.createElement("i");
                                                iconElement.className = "fa fa-plus";
                                                iconElement.setAttribute("aria-hidden", "true");
                                                buttonElement.appendChild(iconElement);

                                                // Tambahkan elemen input dan tombol ke dalam elemen "input-group"
                                                inputGroupDiv.appendChild(inputElement);
                                                inputGroupDiv.appendChild(buttonElement);

                                                // Tambahkan elemen "input-group" ke dalam elemen "col-sm-10 offset-2"
                                                colElement.appendChild(inputGroupDiv);

                                                // Tambahkan elemen "col-sm-10 offset-2" ke dalam elemen "mb-12 row my-2"
                                                newRow.appendChild(colElement);

                                                // Tambahkan elemen "row my-2" ke dalam elemen "container"
                                                var container = document.querySelector(".isi2");
                                                container.appendChild(newRow);
                                            })
                                            </script>
                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm ">User
                                                    Entry</label>
                                                <div class="col-sm-10">
                                                    <input type="text" readonly class="form-control form-control-sm"
                                                        id="inputPassword" name="user" value="<?php echo $id_nama;?>">
                                                </div>
                                            </div>

                                            <div class="mb-1 row">
                                                <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                                <div class="col-sm-10">
                                                    <button class="btn btn-success btn-sm">Proses</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <script>
                                    $(document).ready(function() {
                                        $('[data-toggle="tooltip"]').tooltip({
                                            placement: 'top'
                                        });
                                    });
                                    </script>
                                    <?php
                                        include 'fungsi.php';
                                            require_once 'vendor/autoload.php';
                                            if (!empty($_POST['bulan']) && ($_POST['tahun'])) {
                                            $bulan = $_POST['bulan'];
                                            $tahun = $_POST['tahun'];
                                            $info = "Bulan : ".$bulan."&emsp; Tahun : ".$tahun;
                                            } else {
                                            $bulan = "";
                                            $tahun = "";
                                            $info = "Bulan : ".$bulan."&emsp; Tahun : ".$tahun;
                                            }

                                            if(isset($_GET['kd'])=='sukses'){
                                            echo "<script type='text/javascript'>alert('Rujukan Khusus Berhasil Di insert')</script>";
                                            } elseif (isset($_GET['kd'])=='gagal') {
                                            echo "<script type='text/javascript'>alert('Rujukan Khusus Gagal Di insert')</script>";
                                            } elseif (isset($_GET['kd'])=='hpssukses') {
                                            echo "<script type='text/javascript'>alert('Rujukan Khusus Sukses Di Hapus')</script>";
                                            } elseif (isset($_GET['kd'])=='hpsgagal') {
                                            echo "<script type='text/javascript'>alert('Rujukan Khusus Gagal Di Hapus')</script>"; 
                                            }
                                            $ch = curl_init();
                                            $headers = array(
                                            'X-cons-id: '.$consid .'',
                                            'X-timestamp: '.$tStamp.'' ,
                                            'X-signature: '.$encodedSignature.'',
                                            'user_key: '.$userkey.'',
                                            'Content-Type:application/json'
                                            );
                                            curl_setopt($ch, CURLOPT_URL, "".$base_url."/".$service."/Rujukan/Khusus/List/Bulan/".$bulan."/Tahun/".$tahun."");
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
                                            $data = json_decode($alihi, true);
                                            $items = $data['rujukan'];

                                            ?>
                                    <div class="tab-pane fade" id="pills-iconcontact" role="tabpanel"
                                        aria-labelledby="pills-iconcontact-tab">
                                        <form action="" method="post">
                                            <div class="mb-1 row">
                                                <div class="col-sm-8">
                                                    <select class="form-select form-select-sm" name="bulan"
                                                        required="true">
                                                        <option selected="true" disabled="disabled">-- Pilih Bulan--
                                                        </option>
                                                        <option value="1">Januari</option>
                                                        <option value="2">Februari</option>
                                                        <option value="3">Maret</option>
                                                        <option value="4">April</option>
                                                        <option value="5">Mei</option>
                                                        <option value="6">Juni</option>
                                                        <option value="7">Juli</option>
                                                        <option value="8">Agustus</option>
                                                        <option value="9">September</option>
                                                        <option value="10">Oktober</option>
                                                        <option value="11">November</option>
                                                        <option value="12">Desember</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="input-group">
                                                        <input type="number" class="form-control form-control-sm"
                                                            placeholder="Masukan Tahun" name="tahun" min="2000"
                                                            max="2100" required>
                                                        <button class="btn btn-danger btn-sm"
                                                            type="submit">Cari</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <hr>
                                        <div class="table-responsive">
                                            <table class="display table-sm" id="basic-1">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>ID Rujukan</th>
                                                        <th>No.Kartu</th>
                                                        <th>Nama</th>
                                                        <th>Diagnosa</th>
                                                        <th>Tgl.Rujuk Awal</th>
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
                                                        <td><?php echo $item['idrujukan'];?></td>
                                                        <td><?php echo $item['norujukan'];?></td>
                                                        <td><?php echo $item['nokapst'];?></td>
                                                        <td><?php echo $item['nmpst'];?></td>
                                                        <td><?php echo $item['diagppk'];?></td>
                                                        <td><?php echo $item['tglrujukan_awal'];?></td>
                                                        <td><?php echo $item['tglrujukan_berakhir'];?></td>
                                                        <td>
                                                            <a href="delete_rujukan_khusus&kode=<?php echo $n['idrujukan'];?>&norujukan=<?php echo $n['norujukan'];?>"
                                                                onclick="return confirm('Yakin akan menghapus data?')">
                                                                <button type="button" class="btn btn-danger btn-xs"><i
                                                                        class="fa fa-trash" data-toggle="tooltip"
                                                                        data-original-title="Hapus Rujukan Khusus"></i></button>
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
    <?= include 'script.php'; ?>
</body>

</html>