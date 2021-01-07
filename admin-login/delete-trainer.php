<?php
session_start();
if (isset($_SESSION['uname'])) {
$servername = "192.145.239.50";
$username = "datace9_uplink209";
$password = "Uplink209@";
$dbname = "datace9_learnintern";
// Create connection
$data = $_GET['email'];
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "DELETE FROM trainers WHERE email='$data'";
$del = "SELECT photo, curriculum, resume FROM trainers WHERE email = '$data'";
  $result = mysqli_query($conn, $del);
  if (mysqli_num_rows($result) > 0) {
   echo $row = mysqli_fetch_assoc($result);
    $pic = "../trainer/image/" . $row['photo'];
    $cv =  "../trainer/resume/" . $row['resume'];
     $mod = "../trainer/curriculum/" . $row['curriculum'];

  }
if (unlink($pic) && unlink($cv) && unlink($mod)) {
   if(mysqli_query($conn, $sql)){
      echo "<script>alert('record deleted successfully!');</script>";
    echo "<script>location.href='/admin-login/dashboard.php';</script>";
    }
    else {
     echo "<script>alert('Error deleting record');</script>";
     echo "<script>location.href='/admin-login/dashboard.php';</script>";
    }
                                }
 else {
    echo "<script>alert('Error deleting files');</script>";
    echo "<script>location.href='/admin-login/dashboard.php';</script>";
        }
}
?>
