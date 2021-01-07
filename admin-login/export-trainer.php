<?php
$servername = "192.145.239.50";
$username = "datace9_uplink209";
$password = "Uplink209@";
$dbname = "datace9_learnintern";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$output = '';
$query = "SELECT area, resume, photo, name, email, phone, state, ptime, type, curriculum, skills,  ip_address, registration_time FROM trainers";
 $result = mysqli_query($conn, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" border="1">
                    <tr style="font-weight:700">
                    <th>Photo</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Phone</th>
                     <th>Area</th>
                     <th>Resume</th>
                     <th>State</th>
                     <th>Training</th>
                     <th>Timings</th>
                     <th>Curriculum</th>
                     <th>Skills</th>
                     <th>Payments</th>
                     <th>Registration time & date</th>
                     <th>IP address</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>
                         <td>'.$row["photo"].'</td>
                         <td>'.$row["name"].'</td>
                         <td>'.$row["email"].'</td>
                         <td>'.$row["phone"].'</td>
                         <td>'.$row["area"].'</td>
                         <td>'.$row["resume"].'</td>
                         <td>'.$row["state"].'</td>
                         <td>'.$row["type"].'</td>
                         <td>'.$row["ptime"].'</td>
                         <td>'.$row["curriculum"].'</td>
                         <td>'.$row["skills"].'</td>
                         <td>'.$row["payment"].'</td>
                         <td>'.$row["ip_address"].'</td>
                         <td>'.$row["registration_time"].'</td>

                    </tr>
   ';
  }
  $output .= '</table>';

  header('Content-Type: application/');
  header('Content-Disposition: attachment; filename=learnintern_trainers.xls');
  echo $output;
 }
?>
