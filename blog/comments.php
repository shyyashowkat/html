<?php
session_start();
$conn = mysqli_connect('192.145.239.50', 'datace9_uplink209', 'Uplink209@', 'datace9_learnintern');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
    if (isset($_POST['comment'])) {
     $name = mysqli_real_escape_string($conn, $_POST['contact_name']);
     $email = mysqli_real_escape_string($conn, $_POST['contact_email2']);
     $message = mysqli_real_escape_string($conn, $_POST['contact_message2']);
    }
    $query = "INSERT INTO blog_comments (name, email, message)
    VALUES('$name', '$email', '$message')";
    if (mysqli_query($conn, $query)) {
      echo "<script>alert('commented successfully!');</script>";
      echo "<script>location.href='../blog'</script>";
    }
    else {
      echo "<script>alert('internal error!');</script>";
      echo "<script>location.href='../blog'</script>";
    }


       ?>
