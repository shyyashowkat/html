<?php
session_start();
if (isset($_SESSION['uname'])) {
$servername = "192.145.239.50";
$username = "datace9_uplink209";
$password = "Uplink209@";
$dbname = "datace9_learnintern";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$output = '';
$query = "SELECT id, name, phone, email, state, ip_address, payment FROM students";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" border="1">
                    <tr style="font-weight:700">
                         <th>ID</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Phone</th>
                         <th>State</th>
                         <th>IP </th>
                         <th>Payments</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>
                         <td>'.$row["id"].'</td>
                         <td>'.$row["name"].'</td>
                         <td>'.$row["email"].'</td>
                         <td>'.$row["phone"].'</td>
                         <td>'.$row["state"].'</td>
                         <td>'.$row["ip_address"].'</td>
                         <td>'.$row["payment"].'</td>
                    </tr>
   ';
  }
  $output .= '</table>';

  header('Content-Type: application/');
  header('Content-Disposition: attachment; filename=learnintern_students.xls');
  echo $output;
}}
?>
