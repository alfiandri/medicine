<?php
$page = "Pelaksanaan Operasi";
require '../db/connect.php';
require '../controller/view.php';
require '../controller/admisi.php';
$id = $_GET['id'];
$info = mysqli_query($koneksi, "SELECT * FROM pasien WHERE uidPasien='$id'");
$data = mysqli_fetch_array($info);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   require 'head.php';
   ?>
   <script type="text/javascript" src="signature.js"></script>
   <style>
      body {
         padding: 15px;
      }

      #note {
         position: absolute;
         left: 50px;
         top: 35px;
         padding: 0px;
         margin: 0px;
         cursor: default;
      }
   </style>
</head>

<body onload="startTime()">
   <div class="loader-wrapper">
      <div class="loader-index"><span></span></div>
      <svg>
         <defs></defs>
         <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>
         </filter>
      </svg>
   </div>
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
         <!-- Page Sidebar Ends-->
         <div class="page-body">
            <div class="container-fluid">
               <div class="page-title">
                  <div class="row">
                     <div class="col-6">
                        <h3>Pelaksanaan Operasi</h3>
                     </div>
                     <div class="col-6">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                           <li class="breadcrumb-item">Pelaksanaan Operasi</li>
                           <li class="breadcrumb-item active">List Pasien </li>
                        </ol>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-12 col-md-12 box-col-12">
                     <div class="file-content">
                        <div class="card">
                           <div class="card-header">
                              <ul class="nav nav-tabs nav-primary" id="pills-warningtab" role="tablist">
                                 <li class="nav-item"><a class="nav-link active" id="pills-warninghome-tab" data-bs-toggle="pill" href="#pills-warninghome" role="tab" aria-controls="pills-warninghome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Pelaksanaan Operasi</a></li>
                                 <li class="nav-item"><a class="nav-link" id="pills-warningcontact-tab" data-bs-toggle="pill" href="#pills-warningcontact" role="tab" aria-controls="pills-warningcontact" aria-selected="false"><i class="icofont icofont-contacts"></i>History Operasi</a></li>
                              </ul>
                           </div>
                           <div class="card-body file-manager">
                              <div class="tab-content" id="pills-warningtabContent">
                                 <div class="tab-pane fade show active" id="pills-warninghome" role="tabpanel" aria-labelledby="pills-warninghome-tab">
                                    <div class="row">
                                       <div class="col-xl-12 col-md-12 box-col-12">
                                          <div class="file-content">
                                             <div class="card">
                                                <div class="card-header">
                                                   <div class="media">
                                                      <p>Hari ini kamu memiliki
                                                         <strong>1</strong> antrian pasien
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="card-body file-manager">
                                                   <div class="table-responsive">
                                                      <table class="display table-striped" id="basic-1">
                                                         <thead>
                                                            <tr>
                                                               <th></th>
                                                               <th>Tanggal</th>
                                                               <th>Waktu</th>
                                                               <th>Ruang OK</th>
                                                               <th>No.RM</th>
                                                               <th>Nama Pasien</th>
                                                               <th>Klasifikasi</th>
                                                               <th class="text-center">Actions</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <td class="bg-warning"></td>
                                                               <td>2021-09-01</td>
                                                               <td> 16:00:00</td>
                                                               <td>OK 1</td>
                                                               <td>000010</td>
                                                               <td> DILA FADIA</td>
                                                               <td> ELECTIF</td>
                                                               <td class="text-center">
                                                                  <a href="pelaksanaan-operasi-ass?id=d57edf2d2082b0865e15d11edaecdb20&norawat=RJ20230902466/468">
                                                                     <button class="btn btn-primary">Assesment</button>
                                                                  </a>
                                                               </td>
                                                            </tr>
                                                            <tr>
                                                               <td class="bg-warning"></td>
                                                               <td>2021-10-26</td>
                                                               <td>12:30:00</td>
                                                               <td>OK 2</td>
                                                               <td>001919</td>
                                                               <td>EKO SETIAWAN</td>
                                                               <td>CITO</td>
                                                               <td class="text-center">
                                                                  <button class="btn btn-primary">Assesment</button>
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>
                                             <hr>
                                             Keterangan Warna : <span class="badge bg-warning">Registrasi</span>
                                             <span class="badge bg-danger">Antrian</span> <span class="badge bg-success">Dilayani</span>
                                             <span class="badge bg-dark">Batal</span> <span class="badge bg-secondary">Selesai</span>
                                             <span class="badge bg-info">Rujukan</span><span class="badge bg-primary">Exit</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="tab-pane fade" id="pills-warningcontact" role="tabpanel" aria-labelledby="pills-warningcontact-tab">
                                    <div class="row">
                                       <div class="col-xl-12 col-md-12 box-col-12">
                                          <div class="file-content">
                                             <div class="card">
                                                <div class="card-header">
                                                   <div class="media">
                                                      <p>Hari ini kamu memiliki
                                                         <strong>1</strong> antrian pasien
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="card-body file-manager">
                                                   <div class="table-responsive">
                                                      <table class="table table-striped" id="basic-1">
                                                         <thead>
                                                            <tr>
                                                               <th></th>
                                                               <th>Tanggal</th>
                                                               <th>Waktu</th>
                                                               <th>Ruang OK</th>
                                                               <th>No.RM</th>
                                                               <th>Nama Pasien</th>
                                                               <th>Klasifikasi</th>
                                                               <th class="text-center">Actions</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>

                                                         </tbody>
                                                      </table>
                                                   </div>
                                                </div>
                                             </div>
                                             <hr>
                                             Keterangan Warna : <span class="badge bg-warning">CITO</span>
                                             <span class="badge bg-danger">ELECTIF</span>
                                          </div>
                                       </div>
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
         <!-- footer start-->
         <?php
         require 'footer.php';
         ?>
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
   <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
   <script src="../assets/js/rating/jquery.barrating.js"></script>
   <script src="../assets/js/rating/rating-script.js"></script>
   <script src="../assets/js/owlcarousel/owl.carousel.js"></script>
   <script src="../assets/js/ecommerce.js"></script>
   <script src="../assets/js/product-list-custom.js"></script>
   <script src="../assets/js/tooltip-init.js"></script>
   <!-- Plugins JS Ends-->
   <!-- Theme js-->
   <script src="../assets/js/script.js"></script>
   <script src="../assets/js/theme-customizer/customizer.js"></script>
   <!-- Plugin used-->
</body>

</html>