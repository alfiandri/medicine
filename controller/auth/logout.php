<?php
error_reporting(0);
session_start();
unset($_SESSION['username']);
unset($_SESSION['uid']);
session_destroy();
echo " <script>alert ('Anda Telah Mengakhiri Session Access System');
document.location='../../index'</script>";
