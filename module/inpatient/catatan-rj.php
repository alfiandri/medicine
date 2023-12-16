<head>
   <base href="../">
   <?php
   $master = "Rawat Jalan";
   $page = "Catatan Rawat Jalan";
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
                        <div class="col-md-6">
                           <ul class="nav nav-pills" id="pills-icontab" role="tablist">
                              <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Pemeriksaan Medis Mata</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconcontact-tab" data-bs-toggle="pill" href="#pills-iconcontact" role="tab" aria-controls="pills-iconcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Catatan Rawat Jalan</a></li>
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
                              <span class="badge badge-danger">Anamnesa (S)</span>
                              <hr>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Anamnesa / Keluhan Utama (S)</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control form-control-sm" id="" cols="30" rows="10"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Visual Acuity</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="UCVA OD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="UCVA OS" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="BCVA OD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="BCVA OS" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Hasil AutoREF" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Kaca Mata</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OS" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OD" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Hirschberg</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OS" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OD" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">TIO</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">NCT</option>
                                       <option value="">CT</option>
                                    </select>
                                 </div>
                              </div>
                              <span class="badge badge-danger">Pemeriksaan (O)</span>
                              <hr>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Palbera</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OS" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Conjuctiva</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OS" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Cornea</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OS" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">COA</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OS" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Iris</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OS" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pupil</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OS" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Lensa</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OS" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Vitreous</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OS" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Fundus</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="OS" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <span class="badge badge-danger">Diagnosa (A)</span>
                              <hr>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Diagnosa Utama</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Kode ICD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-8">
                                    <input type="text" placeholder="Diagnosa Name" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Diagnosa Sekunder</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Kode ICD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-8">
                                    <input type="text" placeholder="Diagnosa Name" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Penyulit</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Penunjang</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">Lab</option>
                                       <option value="">USG</option>
                                       <option value="">Catatan Lain</option>
                                    </select>
                                 </div>
                              </div>
                              <span class="badge badge-danger">Terapi/Tindakan (P)</span>
                              <hr>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tindakan</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control form-control-sm" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                 <div class="col-sm-10">
                                    <button class="btn btn-success btn-sm">Simpan</button>
                                    <button class="btn btn-light btn-sm">Tandan Tangan</button>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-iconcontact" role="tabpanel" aria-labelledby="pills-iconcontact-tab">
                              <div class="table-responsive">
                                 <table class="display table-sm" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>Tanggal Waktu</th>
                                          <th>Anamnesa (S) dan Pemeriksaan Fisik (O)</th>
                                          <th>Diagnosa (A) ICD-10</th>
                                          <th>Terapi (P) dan Edukasi (E)</th>
                                          <th>Nama Dokter</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
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
                           <div class="tab-pane fade" id="pills-operasi" role="tabpanel" aria-labelledby="pills-operasi-tab">
                              <div class="table-responsive">
                                 <table class="display table-sm" id="basic-3">
                                    <thead>
                                       <tr>
                                          <th>Tanggal Kunjungan</th>
                                          <th>Nama Dokter</th>
                                          <th>Diagnosis</th>
                                          <th>Terapi</th>
                                          <th>Keterangan</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
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
   <!-- Modal -->
   <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
   <?php
   include 'library.php';
   ?>
</body>

</html>