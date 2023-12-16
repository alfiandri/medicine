<head>
   <base href="../">
   <?php
   $master = "Rawat Jalan";
   $page = "Edukasi Integrasi";
   require 'head.php';
   ?>
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
                              <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Formulir</a></li>

                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconcontact-tab" data-bs-toggle="pill" href="#pills-iconcontact" role="tab" aria-controls="pills-iconcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Data Edukasi Integrasi</a></li>

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
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Bahasa Digunakan</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">Indonesia</option>
                                       <option value="">Inggris</option>
                                       <option value="">Daerah</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Penerjemah</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">Tidak</option>
                                       <option value="">Ya</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Baca dan Tulis</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">Baik</option>
                                       <option value="">Kurang</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pilihan Belajar</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">Verbal</option>
                                       <option value="">Tulisan</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Hambatan Edukasi</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">Tidak Ada</option>
                                       <option value="">Nilai/Budaya/Agama/Spiritual</option>
                                       <option value="">Kognitif Terbatas</option>
                                       <option value="">Bahasa</option>
                                       <option value="">Emosional</option>
                                       <option value="">Gangguan Wicara</option>
                                    </select>
                                 </div>
                              </div>
                              <hr>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal & Jam</label>
                                 <div class="col-sm-5">
                                    <input type="date" class="form-control form-control-sm" name="" id="">
                                 </div>
                                 <div class="col-sm-5">
                                    <input class="form-control form-control-sm" type="time" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Bagian</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">Pilih</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Penjelasan Edukasi</label>
                                 <div class="col-sm-10">
                                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Profesi Edukator</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">Pilih</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Sasaran Edukasi</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">Pilih</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Evaluasi</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">Mengerti</option>
                                       <option value="">Re-Edukasi</option>
                                       <option value="">Re Demonstrasi</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Penerima Edukasi</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                 <div class="col-sm-10">
                                    <button class="btn btn-success btn-sm">Simpan</button>
                                    <button class="btn btn-light btn-sm">Tanda Tangan</button>
                                 </div>
                              </div>
                           </div>

                           <div class="tab-pane fade" id="pills-iconcontact" role="tabpanel" aria-labelledby="pills-iconcontact-tab">
                              <div class="table-responsive">
                                 <table class="display table-sm" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>Tanggal</th>
                                          <th>Bagian</th>
                                          <th>Penjelasan Edukasi</th>
                                          <th>Profesi</th>
                                          <th>Sasaran Edukasi </th>
                                          <th>Evaluasi</th>
                                          <th>Peneriman Edukasi</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                       </tr>
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

   <?php
   include 'library.php';
   ?>
</body>

</html>