<?php
session_start();
if (isset($_SESSION['uname'])) {
if (isset($_POST['tr_tag'])) {
  $servername = "192.145.239.50";
  $username = "datace9_uplink209";
  $password = "Uplink209@";
  $dbname = "datace9_learnintern";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $tr_notes = trim($_POST['tr_notes']);
  if (mysqli_query($conn, "UPDATE trainers SET tr_notes = '$tr_notes' WHERE email = '" . $_POST['email'] . "'")) {
    echo "<script>alert('notes updated successfully!');</script>";
    echo "<script>location.href='dashboard.php'</script>";
  }else {
     echo "<script>alert('failed to update!');</script>";
       echo "<script>location.href='dashboard.php'</script>";
  }
}
}
mysqli_close($conn);
 ?>
