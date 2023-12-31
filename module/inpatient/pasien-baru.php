<head>
   <base href="../">
   <?php
   $master = "Rawat Jalan";
   $page = "Pasien Baru";
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
                              <li class="nav-item"><a class="nav-link active btn-sm" id="pills-iconhome-tab" data-bs-toggle="pill" href="#pills-iconhome" role="tab" aria-controls="pills-iconhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Data Sosial</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-iconcontact-tab" data-bs-toggle="pill" href="#pills-iconcontact" role="tab" aria-controls="pills-iconcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>Riwayat Medis</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-skrining-tab" data-bs-toggle="pill" href="#pills-skrining" role="tab" aria-controls="pills-skrining" aria-selected="false"><i class="icofont icofont-contacts"></i>Skrining Awal</a></li>
                              <li class="nav-item"><a class="nav-link btn-sm" id="pills-baru-tab" data-bs-toggle="pill" href="#pills-baru" role="tab" aria-controls="pills-baru" aria-selected="false"><i class="icofont icofont-folder"></i>Data Pasien Baru</a></li>
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
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">NIK</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nama Pasien</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nama Marga</label>
                                 <div class="col-sm-5">
                                    <input type="text" placeholder="Ayah" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-5">
                                    <input type="text" placeholder="Ibu" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal Lahir</label>
                                 <div class="col-sm-7">
                                    <input type="text" placeholder="Tempat Lahir" class="form-control form-control-sm" name="" id="">
                                 </div>
                                 <div class="col-sm-3">
                                    <input type="date" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Alamat Tetap</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.Telepon</label>
                                 <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm" name="" id="">
                                 </div>
                                 <div class="col-sm-6">
                                    <input type="text" placeholder="Telepon di Medan" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Keluarga Terdekat</label>
                                 <div class="col-sm-4">
                                    <input type="text" placeholder="Nama" class="form-control form-control-sm" name="" id="">
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="text" placeholder="Alamat" class="form-control form-control-sm" name="" id="">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Telepon / HP" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Status Perkawinan</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Agama</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Kebangsaan</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Suku</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pendidikan Terakhir</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pekerjaan</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Surat Pengantar</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jenis Pembayaran</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.Kartu BPJS</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                 <div class="col-sm-10">
                                    <button class="btn btn-success btn-sm">Simpan</button>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-iconcontact" role="tabpanel" aria-labelledby="pills-iconcontact-tab">
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Riwayat Penyakit</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nama Obat Digunakan</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pernah Dioperasi</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                 <div class="col-sm-10">
                                    <button class="btn btn-success btn-sm">Simpan</button>

                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-skrining" role="tabpanel" aria-labelledby="pills-skrining-tab">
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Keluhan Utama</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control form-control-sm" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Adakah Alergi</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Sedang Batuk Saat Ini</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Risiko Jatuh</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Adakah Nyeri</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Alat Bantu</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Dokter</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm "></label>
                                 <div class="col-sm-10">
                                    <button class="btn btn-success btn-sm">Simpan</button>

                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-baru" role="tabpanel" aria-labelledby="pills-baru-tab">
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">NIK</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nama Pasien</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nama Marga</label>
                                 <div class="col-sm-5">
                                    <input type="text" placeholder="Ayah" class="form-control form-control-sm">
                                 </div>
                                 <div class="col-sm-5">
                                    <input type="text" placeholder="Ibu" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Tanggal Lahir</label>
                                 <div class="col-sm-7">
                                    <input type="text" placeholder="Tempat Lahir" class="form-control form-control-sm" name="" id="">
                                 </div>
                                 <div class="col-sm-3">
                                    <input type="date" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Alamat Tetap</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.Telepon</label>
                                 <div class="col-sm-4">
                                    <input type="text" class="form-control form-control-sm" name="" id="">
                                 </div>
                                 <div class="col-sm-6">
                                    <input type="text" placeholder="Telepon di Medan" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Keluarga Terdekat</label>
                                 <div class="col-sm-4">
                                    <input type="text" placeholder="Nama" class="form-control form-control-sm" name="" id="">
                                 </div>
                                 <div class="col-sm-4">
                                    <input type="text" placeholder="Alamat" class="form-control form-control-sm" name="" id="">
                                 </div>
                                 <div class="col-sm-2">
                                    <input type="text" placeholder="Telepon / HP" class="form-control form-control-sm" name="" id="">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Status Perkawinan</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">
                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Agama</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Kebangsaan</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Suku</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pendidikan Terakhir</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pekerjaan</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Surat Pengantar</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Jenis Pembayaran</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">No.Kartu BPJS</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Riwayat Penyakit</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Nama Obat Digunakan</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Pernah Dioperasi</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Keluhan Utama</label>
                                 <div class="col-sm-10">
                                    <textarea name="" class="form-control form-control-sm" id="" cols="30" rows="5"></textarea>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Adakah Alergi</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-sm">
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Sedang Batuk Saat Ini</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Risiko Jatuh</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Adakah Nyeri</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Alat Bantu</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
                                 </div>
                              </div>
                              <div class="mb-1 row">
                                 <label for="inputPassword" class="col-sm-2 col-form-label-sm ">Dokter</label>
                                 <div class="col-sm-10">
                                    <select name="" class="form-select form-select-sm" id="">

                                    </select>
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