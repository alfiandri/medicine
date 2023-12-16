<head>
   <base href="../">
   <?php
   $master = "Rawat Jalan";
   $page = "Pengkajian Resiko Jatuh Skala Morse";
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
                              <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Faktor Resiko</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconcontact-tab" data-bs-toggle="pill" href="#pills-iconcontact" role="tab" aria-controls="pills-iconcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Intervensi Pencegahan</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-resiko-tab" data-bs-toggle="pill" href="#pills-resiko" role="tab" aria-controls="pills-iconcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Faktor Resiko</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-data-tab" data-bs-toggle="pill" href="#pills-data" role="tab" aria-controls="pills-iconcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Data Pengkajian Resiko Jatuh</a></li>
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
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal</label>
                                 <div class="col-sm-5">
                                    <input type="date" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-5">
                                    <input type="time" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <hr>
                              <div class="table-responsive">
                                 <table class="table table-sm">
                                    <thead class="bg-light">
                                       <tr>
                                          <th>No</th>
                                          <th>Faktor Risiko</th>
                                          <th>Indikator</th>
                                          <th>Skala</th>
                                          <th class="col-1 text-center">Timestamp</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>1</td>
                                          <td>Riwayat Jatuh</td>
                                          <td>
                                             <select name="" class="form-select form-select-sm" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </td>
                                          <td>25</td>
                                          <td>-</td>
                                       </tr>
                                       <tr>
                                          <td>2</td>
                                          <td>Dx Sekunder (2 Dx Medis)</td>
                                          <td>
                                             <select name="" class="form-select form-select-sm" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </td>
                                          <td>15</td>
                                          <td>-</td>
                                       </tr>
                                       <tr>
                                          <td>3</td>
                                          <td>Alat Bantu</td>
                                          <td>
                                             <select name="" class="form-select form-select-sm" id="">
                                                <option value="">Berpegangan pada Perabot</option>
                                                <option value="">Tongkat/Alat Penopang</option>
                                             </select>
                                          </td>
                                          <td>30</td>
                                          <td>-</td>
                                       </tr>
                                       <tr>
                                          <td>4</td>
                                          <td>Terpasang Infus</td>
                                          <td>
                                             <select name="" class="form-select form-select-sm" id="">
                                                <option value="">Ya</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </td>
                                          <td>20</td>
                                          <td>-</td>
                                       </tr>
                                       <tr>
                                          <td>5</td>
                                          <td>Gaya Berjalan</td>
                                          <td>
                                             <select name="" class="form-select form-select-sm" id="">
                                                <option value="">Terganggu</option>
                                                <option value="">Lemah</option>
                                             </select>
                                          </td>
                                          <td>20</td>
                                          <td>-</td>
                                       </tr>
                                       <tr>
                                          <td>6</td>
                                          <td>Status Mental</td>
                                          <td>
                                             <select name="" class="form-select form-select-sm" id="">
                                                <option value="">Sering Lup akan keterbatasan dimiliki</option>
                                                <option value="">Tidak</option>
                                             </select>
                                          </td>
                                          <td>15</td>
                                          <td>-</td>
                                       </tr>
                                    </tbody>
                                    <tfoot>
                                       <th>
                                          <tr>
                                             <td>Skor</td>
                                             <td class="bg-success">
                                                <p>
                                                   Resiko Rendah (0-24)
                                                </p>
                                             </td>
                                             <td class="bg-warning">
                                                <p>
                                                   Resiko Sedang (25-44)
                                                </p>
                                             </td>
                                             <td class="bg-danger">
                                                <p>
                                                   Resiko Tinggi (>45)
                                                </p>
                                             </td>
                                             <td>Total Nilai</td>
                                          </tr>
                                       </th>
                                    </tfoot>
                                 </table>
                              </div>
                              <hr>
                              <button class="btn btn-sm btn-success">Simpan</button>
                           </div>
                           <div class="tab-pane fade" id="pills-iconcontact" role="tabpanel" aria-labelledby="pills-iconcontact-tab">
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Perawat</label>
                                 <div class="col-sm-5">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">Pilih</option>
                                    </select>
                                 </div>
                                 <div class="col-sm-3">
                                    <input type="date" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="time" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <hr>
                              <div class="table-responsive">
                                 <table class="table table-sm">
                                    <thead class="bg-light">
                                       <tr>
                                          <th>No</th>
                                          <th>Intervensi Pencegahan</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>1</td>
                                          <td class="text-wrap">
                                             Menjelaskan kepada pasien dan keluarga bahwa pasien tergolong memiliki risiko jatuh, dan harus didampingi
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>2</td>
                                          <td class="text-wrap">
                                             Pasang gelang penandaan berwarna kuning
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>3</td>
                                          <td class="text-wrap">
                                             Pasang tanda berwarna kuning di atas tempat tidur pasien
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>4</td>
                                          <td class="text-wrap">
                                             Pasang pagar pengaman tempat tidur pasien dan pastikan rodanya terkunci
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>5</td>
                                          <td class="text-wrap">
                                             Siapkan kursi roda / walker di samping tempat tidur pasien
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>6</td>
                                          <td class="text-wrap">
                                             Pastikan bel berfungsi dan mudah dijangkau
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>7</td>
                                          <td class="text-wrap">
                                             Tempatkan pasien di kamar terdekat dengan Nurse Station
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>8</td>
                                          <td class="text-wrap">
                                             Monitor pasien setiap 2 (dua) jam
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>9</td>
                                          <td class="text-wrap">
                                             Memberitahu dokter
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <hr>
                              <button class="btn btn-sm btn-success">Simpan</button>
                           </div>
                           <div class="tab-pane fade" id="pills-resiko" role="tabpanel" aria-labelledby="pills-resiko-tab">
                              <div class="table-responsive">
                                 <table class="table">
                                    <thead class="bg-light">
                                       <tr>
                                          <th>Faktor Risiko Lain</th>
                                          <th>
                                             Beri Check Pada Kolom Sesuai Obat yang diminum pasien, bila pemakaian obat lebih dari 4 digolongan risiko tinggi
                                          </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>
                                             Obat-obatan yang dikonsumsi
                                          </td>
                                          <td>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Psikotropika
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Diuretic
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Anti – Hipertensi
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Oploid / Narkotik
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Hipnotik / Sedative
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Kardiovaskuler
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Anti – Ansietas / CPZ
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Laksatif
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                   Anti – Parkinson
                                                </label>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                                 <hr>
                                 <button class="btn btn-sm btn-success">Simpan</button>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-data" role="tabpanel" aria-labelledby="pills-data-tab">
                              <div class="table-responsive">
                                 <table class="display table-sm" id="basic-1">
                                    <thead>
                                       <tr>
                                          <th>Tanggal Pemeriksaan</th>
                                          <th>Faktor Risiko Skor</th>
                                          <th>Intervensi Pencegahan</th>
                                          <th>Perawat</th>
                                          <th>Faktor Risiko Lain </th>
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