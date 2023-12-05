<?php
session_start();
$master = "Antrean ";
$page = "Referensi";

require '../../controller/base/integrasi.php';

// API Endpoint URL
$apiUrl = "$baseUrl/$serviceName/ref/poli";

$response = get($apiUrl, $consId, $secretKey, $userKey);

// Initialize an empty HTML string
$html = '';
$timeStamp = $response[1];
$jsonData = json_decode($response[0], true);
// Check if metadata->code is equal to 1
if (isset($jsonData['metadata']['code']) && $jsonData['metadata']['code'] == 1) {
   // The API response is successful, you can access the response data
   $responseData = $jsonData['response'];
   $key = $consId . $secretKey . $timeStamp;
   $responseData = decrypt($key, $responseData);
   $listData = json_decode($responseData, true);
   $html .= 'Success Fetch Data.';
} else {
   $html .= 'Error fetching data from the API.';
}
?>

<head>
   <base href="../">
   <?php require 'head.php'; ?>
</head>

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
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item"><?= $master ?></li>
                           <li class="breadcrumb-item active"><?= $page ?></li>
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
                        <div class="col-md-12">
                           <ul class="nav nav-pills" id="pills-icontab" role="tablist">
                              <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Poli</a></li>

                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-klaim-tab" data-bs-toggle="pill" href="#pills-klaim" role="tab" aria-controls="pills-klaim" aria-selected="false"><i class="icofont icofont-list"></i>Poli Fingerprint</a></li>

                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-jasa-tab" data-bs-toggle="pill" href="#pills-jasa" role="tab" aria-controls="pills-jasa" aria-selected="false"><i class="icofont icofont-list"></i>Pasien Finger Print</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12">
                  <div class="card">
                     <div class="card-body">
                        <div class="tab-content" id="pills-icontabContent">
                           <div class="tab-pane fade show active" id="pills-iconhome" role="tabpanel" aria-labelledby="pills-iconhome-tab">
                              <div class="table-responsive">
                                 <div class="mb-1 row">
                                    <div class="col-sm-8">
                                       <input type="text" class="form-control form-control-sm" placeholder="Masukkan Kata Kunci">
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="input-group">
                                          <select name="" class="form-select form-select-sm" id="">
                                             <option selected>Pilih Jenis Layanan</option>
                                             <option value=""></option>
                                          </select>
                                          <button class="btn btn-danger btn-sm">Cari</button>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <table class="display table-sm" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>No</th>
                                          <th>Poliklinik</th>
                                          <th>Subspesialis</th>
                                          <th>Kode Subspesialis</th>
                                          <th>Kode Pol</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($listData as $key => $item) : ?>
                                          <tr>
                                             <td><?= $key ?></td>
                                             <td><?= $item['nmpoli'] ?></td>
                                             <td><?= $item['nmsubspesialis'] ?></td>
                                             <td><?= $item['kdsubspesialis'] ?></td>
                                             <td><?= $item['kdpoli'] ?></td>
                                          </tr>
                                       <?php endforeach ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-klaim" role="tabpanel" aria-labelledby="pills-klaim-tab">
                              <div class="table-responsive">
                                 <table class="table table-sm" id="basic-5">
                                    <thead>
                                       <tr>
                                          <th>Kode Subspesialis</th>
                                          <th>Nama Subspesialis</th>
                                          <th>Kode Poli</th>
                                          <th>Nama Poli</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-jasa" role="tabpanel" aria-labelledby="pills-jasa-tab">
                              <div class="table-responsive">
                                 <div class="mb-1 row">
                                    <div class="col-sm-12">
                                       <div class="input-group">
                                          <input type="date" class="form-control form-control-sm" placeholder="Masukkan Kata Kunci" name="" id="">
                                          <button class="btn btn-danger btn-sm">Cari</button>
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <table class="display table-sm" id="basic-8">
                                    <thead>
                                       <tr>
                                          <th>Nomor Kartu</th>
                                          <th>NIK</th>
                                          <th>Tanggal Lahir</th>
                                          <th>Daftar FP</th>
                                       </tr>
                                    </thead>
                                    <tbody>

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
         require '../../template/footer.php';
         ?>
      </div>
   </div>

   <?php
   include 'library.php';
   ?>
</body>

</html>