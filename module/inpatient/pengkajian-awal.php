<?php
$master = "Rawat Jalan";
$page = "Pengkajian Awal Pasien";
require 'head.php';
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
                              <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Pengkajian Keperawatan</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconcontact-tab" data-bs-toggle="pill" href="#pills-iconcontact" role="tab" aria-controls="pills-iconcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Pemeriksaan Medis Mata</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-umum-tab" data-bs-toggle="pill" href="#pills-umum" role="tab" aria-controls="pills-umum" aria-selected="false"><i class="icofont icofont-contacts"></i>Pemeriksaan Medis Umum</a></li>
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
                              <h6 class="badge bg-danger">Data Identitas Pasien</h6>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pendidikan</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id=""></select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Status Perkawinan</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id=""></select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pekerjaan</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id=""></select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Agama</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id=""></select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Rujukan Dari</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id=""></select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Status Pembayaran</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id=""></select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanda Pengenal</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id=""></select>
                                 </div>
                              </div>
                              <hr>
                              <h6 class="badge bg-danger">Pemeriksaan Fisik</h6>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pemeriksaan Fisik</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Kesadaran</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Keadaan Umum</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pemeriksaan</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="BB (Kg)" class="form-control form-control-sm" name="" id="">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="TB (cm)" class="form-control form-control-sm" name="" id="">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="TD (mmHg)" class="form-control form-control-sm" name="" id="">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Nadi (x/menit)" class="form-control form-control-sm" name="" id="">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Napas (x/menit)" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Status Gizi</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id=""></select>
                                 </div>
                              </div>
                              <hr>
                              <h6 class="badge bg-danger">Pengkajian Nyeri</h6>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nyeri</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id=""></select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Lokasi</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pencetus</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Durasi</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Skala</label>
                                 <div class="col-sm-10">
                                    <input type="range" class="form-range" min="0" max="5" id="customRange2">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Keterangan Skala</label>
                                 <div class="col-sm-10">
                                    <span class="badge bg-success">Tidak Nyeri (0)</span>
                                    <span class="badge bg-warning"> Ringan (1-3)</span>
                                    <span class="badge bg-danger"> Sedang (4-6)</span>
                                    <span class="badge bg-dark"> Berat (7-10)</span>
                                 </div>
                              </div>
                              <hr>
                              <h6 class="badge bg-danger">Risiko Jatuh / Cedera</h6>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Risiko</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">Cara Berjalan</option>
                                       <option value="">Perlu Alat Bantu</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">P.Penyakit</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">Tahu</option>
                                       <option value="">Tidak Tahu</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">P. Perilaku</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">Tenang</option>
                                       <option value="">Takut</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Hambatan Komunikasi</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">Tidak</option>
                                       <option value="">Ada</option>
                                    </select>
                                 </div>
                              </div>
                              <hr>
                              <h6 class="badge bg-danger">Riwayat Penyakit</h6>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Penyakit</label>
                                 <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                       <select name="" class="form-select form-select-sm" id="">
                                          <option value="">Diabetes</option>
                                          <option value="">Hipertensi</option>
                                       </select>
                                       <span class="btn btn-sm btn-primary">Tambah</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Obat Digunakan</label>
                                 <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                       <input type="text" class="form-control form-control-sm" name="" id="">
                                       <span class="btn btn-sm btn-primary">Tambah</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jamu Digunakan</label>
                                 <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                       <input type="text" class="form-control form-control-sm" name="" id="">
                                       <span class="btn btn-sm btn-primary">Tambah</span>
                                    </div>
                                 </div>
                              </div>
                              <hr>
                              <h6 class="badge bg-danger">Masalah Keperawatan </h6>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Diagnosa</label>
                                 <div class="col-sm-10">
                                    <div class="row">
                                       <div class="col">
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Tekanan bola mata meningkat
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Masalah tumbuh kembang
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Kurang Perawatan Diri
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Pola Nafas Tidak Teratur
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col">
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Gangguan sensorik penglihatan
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Gangguan komunikasi verval
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Gangguan mobilitas fisik
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Gangguan integritas kulit
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col">
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Risiko infeksi
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Risiko Cedera
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Risiko Jatuh
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Pendarahan
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col">
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Konstipasi
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Nyeri
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Cemar
                                             </label>
                                          </div>
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                Diare
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr>
                              <h6 class="badge bg-danger">Rencana Keperawatan</h6>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Rencana</label>
                                 <div class="col-sm-10">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                       <label class="form-check-label" for="flexCheckDefault">
                                          Kaji gangguan penglihatan / penyebab kabur
                                       </label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                       <label class="form-check-label" for="flexCheckDefault">
                                          Kaji skala nyeri dan penyebab nyeri
                                       </label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                       <label class="form-check-label" for="flexCheckDefault">
                                          Jelaskan pada pasien / keluarga tentang penyebab nyeri
                                       </label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                       <label class="form-check-label" for="flexCheckDefault">
                                          Jelaskan pada pasien akibat penurunan penglihatan sesuai kewenangan perawat
                                       </label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                       <label class="form-check-label" for="flexCheckDefault">
                                          Kolaborasi dengan medis untuk pemberian obat analgesik atau obat pengontrol TIO
                                       </label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                       <label class="form-check-label" for="flexCheckDefault">
                                          Edukasi pasien/keluarga tentang pemberian obat dan pesanan lain
                                       </label>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="mb-1 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                    <div class="col-sm-10">
                                       <button class="btn btn-success btn-sm">Simpan</button>
                                       <button class="btn btn-light btn-sm">Tandan Tangan</button>
                                    </div>
                                 </div>
                              </div>
                           </div>


                           <div class="tab-pane fade" id="pills-iconcontact" role="tabpanel" aria-labelledby="pills-iconcontact-tab">
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Anamnesa (S)</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pemeriksaan (O)</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control form-control-sm" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Kanan</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Visus" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Kc.Lama" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Refraksi" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Intra Okuler" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">Schiotz</option>
                                       <option value="">NCT</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Kiri</label>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Visus" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Kc.Lama" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Refraksi" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Intra Okuler" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-2">
                                    <select name="" class="form-select form-select-sm" id="">
                                       <option value="">Schiotz</option>
                                       <option value="">NCT</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Check</label>
                                 <div class="col-sm-5">
                                    <input type="text" placeholder="OD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-5">
                                    <input type="text" placeholder="OS" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Funduscopy</label>
                                 <div class="col-sm-5">
                                    <input type="text" placeholder="OD" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-5">
                                    <input type="text" placeholder="OS" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <hr>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                 <div class="col-sm-10">
                                    <img src="../assets/rm/fundus.png" width="800" alt="">
                                 </div>
                              </div>
                              <hr>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                 <div class="col-sm-10">
                                    <button class="btn btn-sm btn-success">Simpan</button>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-umum" role="tabpanel" aria-labelledby="pills-operasi-tab">
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pemeriksaan (O)</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Riwayat Alergi</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Riwayat Penyakit Dahulu</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Riwayat Penyakit Keluarga</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Riwayat Pengobatan</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Diagnosa Utama</label>
                                 <div class="col-sm-3">
                                    <input type="text" readonly placeholder="Kode ICD 10" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-7">

                                    <select name="" class="form-select form-select-sm" id=""></select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Diagnosa Sekunder</label>
                                 <div class="col-sm-3">
                                    <input type="text" readonly placeholder="Kode ICD 10" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-7">
                                    <div class="input-group">
                                       <input type="text" class="form-control form-control-sm">
                                       <span class="btn btn-primary btn-sm">Tambah</span>
                                    </div>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Penyulit</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Perencanaan Tindakan (P)</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Terapi/Rencana Pelayanan(P)</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Penunjang</label>
                                 <div class="col-sm-10">
                                    <div class="input-group">
                                       <select name="" class="form-select form-select-sm" id="">
                                          <option value="">Lab</option>
                                          <option value="">USG</option>
                                          <option value="">Catatan Lain</option>
                                       </select>
                                       <span class="btn btn-sm btn-primary">Tambah</span>
                                    </div>
                                 </div>
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