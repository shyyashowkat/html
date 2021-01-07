<?php session_start();
if (isset($_SESSION['uname']) || isset($_SESSION['user']) || isset($_SESSION['cname'])) {
  session_destroy();
  unset($_SESSION['uname']);
  unset($_SESSION['cname']);
  unset($_SESSION['user']);
  echo "<script>alert('Logout Successfullly!');</script>";
   echo "<script>location.href='/';</script>";
}
else {
  echo "<script>location.href='/login.php';</script>";
}
 ?>
