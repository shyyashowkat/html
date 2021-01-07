<?php
session_start();
if (isset($_SESSION['uname'])) {
$servername = "192.145.239.50";
$username = "datace9_uplink209";
$password = "Uplink209@";
$dbname = "datace9_learnintern";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "DELETE FROM blog WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
  header("Location:/admin-login/dashboard.php");
} else {
    alert ("Error deleting record");
}}
?>
