<?php
$page = "Login";
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <base href="../">
   <?php
   require '../template/head.php';
   ?>
</head>

<body>
   <!-- login page start-->
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-7"><img class="bg-img-cover bg-center" src="assets/hospital-bed-concept-illustration_114360-8209.avif" alt="looginpage"></div>
         <div class="col-xl-5 p-0">
            <div class="login-card">
               <div>
                  <div><a class="logo text-start" href="javascript:;"><img class="img-fluid for-light" src="assets/Logo - Primary.png" width="150" alt="looginpage"><img class="img-fluid for-dark" src="assets/Logo - Secondary.png" width="150" alt="looginpage"></a></div>
                  <div class="login-main">
                     <form class="theme-form" method="POST" action="controller/auth/login">
                        <h4>Access Login</h4>
                        <p>Masukkan username dan password anda</p>
                        <div class="form-group">
                           <label class="col-form-label">Username</label>
                           <input class="form-control" type="text" name="user" autocomplete="off" required="" placeholder="medicine@gmail.com">
                        </div>
                        <div class="form-group">
                           <label class="col-form-label">Password</label>
                           <div class="form-input position-relative">
                              <input class="form-control" type="password" autocomplete="off" name="password" required="" placeholder="*********">
                              <!-- <div class="show-hide"><span class="show"> </span></div> -->
                           </div>
                        </div>
                        <div class="form-group mb-0">
                           <button class="btn btn-primary btn-block w-100" type="submit">Masuk</button>
                        </div>
                        <p class="mt-3 mb-0 text-center"><a class="ms-2" href="auth/forgot-password">Reset password</a></p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- latest jquery-->
      <script src="assets/js/jquery-3.5.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="assets/js/script.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
   </div>
</body>

</html>