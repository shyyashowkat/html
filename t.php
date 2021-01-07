<?php
 session_start();
$area= "";
$name = "";
$email = "";
$phone = "";
$state =  "";
$audience ="";
$ptime = "";
$type = "";
$skill= "";
$language = "";
$experience = "";
$password= "";
$confirm_password= "";
$ip_address = "";
$registration_time = "";
$errors = array();

if (isset($_POST['reg_trainer'])) {
$db = mysqli_connect('192.145.239.50', 'datace9_uplink209', 'Uplink209@', 'datace9_learnintern');
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
    $area= mysqli_real_escape_string($db, $_POST['area']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $state = mysqli_real_escape_string($db, $_POST['state']);
    $ptime = mysqli_real_escape_string($db, $_POST['ptime']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $skill = mysqli_real_escape_string($db, $_POST['skill']);
    $intro = mysqli_real_escape_string($db, $_POST['intro']);
    $language = mysqli_real_escape_string($db, $_POST['language']);
    $experience = mysqli_real_escape_string($db, $_POST['experience']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirm_password= mysqli_real_escape_string($db, $_POST['confirm_password']);
    $ip_address = $_SERVER['REMOTE_ADDR'];
    date_default_timezone_set('Asia/Kolkata');
    $registration_time = date( 'd-m-Y h:i:s A', time () );
    $audience = mysqli_real_escape_string($db, $_POST['audience']);
    if(isset($_FILES['photo'])){

          $img = $_FILES['photo'];
          $img_name = rand(1,1000) . '_'. $img['name'];
          $img_size = $img['size'];
          $img_tmp = $img['tmp_name'];
          $img_type = $img['type'];
          $img_ext=strtolower(end(explode('.',$img_name)));
          $img_path = "trainer/image/".$img_name;
          // $extensions= array("jpeg","jpg","png");
          //
          // if(in_array($file_ext,$extensions)=== false){
          //    $errors[]="extension not allowed, please choose a jpg, JPEG or PNG file.";
          // }

          if($img_size > 500000){
             echo "<h3 style='color:red'><center>Image file too large. </center></h3>";
          }

          if(empty($errors)==true){
             move_uploaded_file($img_tmp,$img_path);

          }
       }
       if(isset($_FILES['cv'])){

             $cv_name = rand(1,1000) . "_" . $_FILES['cv']['name'];
             $cv_size =$_FILES['cv']['size'];
             $error = $_FILES['cv']['error'];
             $cv_tmp =$_FILES['cv']['tmp_name'];
             $cv_type=$_FILES['cv']['type'];
             $cv_ext=strtolower(end(explode('.',$_FILES['cv']['name'])));
             $cv_path = "trainer/resume/".$cv_name;
             // $extensions= array("jpeg","jpg","png");
             //
             // if(in_array($file_ext,$extensions)=== false){
             //    $errors[]="extension not allowed, please choose a jpg, JPEG or PNG file.";
             // }

             if($cv_size > 5000000){
              echo "<h3 style='color:red'><center>CV File too large. </center></h3>";
             }

             if(empty($errors)==true){
                move_uploaded_file($cv_tmp,$cv_path);

             }
             echo $error;
          }

          if(isset($_FILES['fileselect'])){
            // Count total uploaded files
            $totalfiles = count($_FILES['file']['name']);

            // Looping over all files
            for($i=0;$i<$totalfiles;$i++){

                $cur_name = rand(1,1000) . '_' . $_FILES['fileselect']['name'][$i];
                $cur_size =$_FILES['fileselect']['size'][$i];
                $cur_tmp =$_FILES['fileselect']['tmp_name'][$i];
                $error = $_FILES['cv']['error'][$i];
                $cur_type=$_FILES['fileselect']['type'][$i];
                $cur_ext=strtolower(end(explode('.',$_FILES['fileselect']['name'][$i])));
                $cur_path = "trainer/curriculum/".$cur_name;
                // $extensions= array("jpeg","jpg","png");
                //
                // if(in_array($file_ext,$extensions)=== false){
                //    $errors[]="extension not allowed, please choose a jpg, JPEG or PNG file.";
                // }

                if($cur_size > 5000000){
                  echo "<h3 style='color:red'><center>Module file too large. </center></h3>";
                }

                if(empty($errors)==true){
                   move_uploaded_file($cur_tmp,$cur_path);
                }
                echo $error;
             }

     }

     if (count($errors) == 0) {
           $query = "INSERT INTO trainers (area, resume, photo, name, email, phone, audience,  state, ptime, type, curriculum, skills, password, ip_address, registration_time, experience, language, intro_vid)
                     VALUES('$area', '$cv_name', '$img_name', '$name','$email', '$phone', '$audience', '$state', '$ptime', '$type', '$cur_name', '$skill',  '$password', '$ip_address', '$registration_time', '$experience', '$language', '$intro')";
                     $result = mysqli_query($db, $query);

         // if($stmt = mysqli_prepare($db, $query)){
         //   // Bind variables to the prepared statement as parameters
         //   mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);
         //
         //   // Set parameters
         //   $param_email = $email;
         //   $param_password = $password; // Creates a password hash
         // }
       }
/////////////////////////////////////////////////////////////
        if ($result) {
       $to="kushwahad00@gmail.com";
       $to1="sharadmcp2003@gmail.com";
       $to2="class@learnintern.com";
       require 'php-mailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

 // $mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'learninterncom@gmail.com ';                 // SMTP username
$mail->Password = 'Learnintern123@';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('class@learnintern.com', 'Learnintern.com');
$mail->addAddress($to);     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('class@learnintern.com', 'Learnintern.com');
 $mail->addCC($to1);
 $mail->addBCC($to2);

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'New User Registered in Learnintern.com';
$mail->Body    = '<center><img src="https://learnintern.com/trainer/image/'.$img_name.'"></center><br>
<b>Name: </b>'.$name.'<br><b>Email: </b>'.$email.'<br><b>Phone: </b>'.$phone.'<br>
<b>Resume: </b> <a href="https://learnintern.com/trainer/resume/'.$cv_name.'">Click Here</a><br>
<b> IP address: </b>'.$ip_address.'<br><br><br>-------This is system generated email form <a href="https://learnintern.com/our-trainers.php">learnintern.com</a>';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
 echo 'Message could not be sent.';
 echo 'Mailer Error: ' . $mail->ErrorInfo;
}


else {

$mail1 = new PHPMailer;

// $mail1->SMTPDebug = 4;                               // Enable verbose debug output

$mail1->isSMTP();                                      // Set mailer to use SMTP
$mail1->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail1->SMTPAuth = true;                               // Enable SMTP authentication
$mail1->Username = 'learninterncom@gmail.com ';                 // SMTP username
$mail1->Password = 'Learnintern123@';                           // SMTP password
$mail1->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail1->Port = 587;                                    // TCP port to connect to

$mail1->setFrom('class@learnintern.com', 'Learnintern.com');
$mail1->addAddress($email);     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
$mail1->addReplyTo('class@learnintern.com', 'Learnintern.com');
// $mail->addCC($to1);
// $mail->addBCC($to2);

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail1->isHTML(true);                                  // Set email format to HTML

$mail1->Subject = 'Welcome to Learnintern.com family';
$mail1->Body    = '<center><b>Hi '.$name.' You have registered successfully</b></center><br> Here are your credentials:
<br><b>Email: </b>'.$email.'<br><b>Password: </b>'.$password.'<br><a href="https://learnintern.com/login.php">Click Here to login
</a><br><br><b>----------
Do not share these details with anyone<b>';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail1->send()) {
echo 'Message could not be sent.';
echo 'Mailer Error: ' . $mail1->ErrorInfo;
} else {
echo "<script>alert('registered successfully!');</script>";
echo "<script>location.href='/login.php'</script>";
}
}

}
else {
  echo "<h2 style='color:#37BF91'><center> Some problem occured! Try again later. </center></h2>";
  echo("<center>Error description: " . mysqli_error($db)."</center>");
   // echo "<h6 style='color:red'><center> This Email Id is already used. Try another Email Id! </center></h6>";
}
  mysqli_close($db);
}

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Trainer Registration | LearnIntern & Grow" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<meta name="" content="" />

<!-- Page Title -->
<title>Trainer Registration | LearnIntern & Grow</title>

<!-- Favicon and Touch Icons -->
<link href="images/logo-and-favicon/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<!-- <link href="css/preloader.css" rel="stylesheet" type="text/css">-->
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<!-- <link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/> -->
<!-- <link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/> -->
<!-- <link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set4.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-min.js"></script>
<!-- Revolution Slider 5.x SCRIPTS -->
<!-- <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script> -->
<!-- <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
#filedrag
{
	/*display: none;*/
	font-weight: bold;
	text-align: center;
	padding: 1em 0;
	margin: 1em 0;
	color:  #37bf91;
	border: 2px dashed  #37bf91;
	border-radius: 7px;
	cursor: default;
}

#filedrag.hover
{
	color: #ea1919;
	border-color: #ea1919;
	border-style: solid;
	box-shadow: inset 0 3px 4px #888;
}
.zoom {
    transition: transform .2s; /* Animation */
}
.zoom:hover {
    transform: scale(1.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

.border-success{border: 1px dashed #37BF91; padding: 10px;}
.border-primary{border: 1px solid #c5c5ff; padding: 10px}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HY62C2WBH8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HY62C2WBH8');
</script>
</head>
<body>
  <body>
  <div id="wrapper" class="clearfix">

    <!-- Header -->
    <div class="header-middle p-0 bg-lightest xs-text-center pb-0">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
            <a class="pull-left flip sm-pull-center mb-15" href="/"><img style="max-height:100px" src="images/logo-and-favicon/light-theme-transparent-logo.png" alt="Learnintern.com"></a>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="header-widget-contact-info-box sm-text-center">
              <div class="media element contact-info">
                <div class="media-left">
                  <a href="mailto:class@learnintern.com">
                    <i class="fa fa-envelope text-theme-colored2 font-icon sm-display-block"></i>
                  </a>
                </div>
                <div class="media-body">
                  <a href="mailto:class@learnintern.com" class="title">Mail Us Today</a>
                  <h5 class="media-heading subtitle">class@learnintern.com</h5>
                </div>
              </div>
              <div class="media element contact-info">
                <div class="media-left">
                  <a href="#">
                    <i class="fa fa-phone-square text-theme-colored2 font-icon sm-display-block"></i>
                  </a>
                </div>
                <div class="media-body">
                  <a href="tel:+918377825955" class="title">For more details</a>
                  <h5 class="media-heading subtitle">+91-837-782-5955</h5>
                </div>
              </div>
              <div class="media element contact-info">
                <div class="media-left">
                  <a href="#">
                    <i class="fa fa-building-o text-theme-colored2 font-icon sm-display-block"></i>
                  </a>
                </div>
                <div class="media-body">
                  <a href="#" class="title">Company Location</a>
                  <h5 class="media-heading subtitle">D-23 A, Ground Floor, Gate No.1, Surya Enclave, New Delhi 110056</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

              <div class="pull-right sm-pull-none mb-sm-15">
                <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15" style="border-radius:25px;" href="/">Back to Home</a>
              </div>
        <div class="container p-0 " style="max-width: 700px;">
          <div class="row">
              <div class="col-md-12">
                <!-- Register Form Starts -->
                <form id="registration_form" name="registration_form" class="reservation-form bg-silver-deep" method="post" action="trainer-register.php" onsubmit="return confirmPassword()" enctype="multipart/form-data">
                <br>
                <div class="row pl-20 pr-20">
                <div class="col-sm-12">
                <h4 class="text-center mt-0 mb-30 text-theme-colored2">Perks to REGISTER with us :</h4>
                <p>&#x2611; Trainer can select to work Full-Time or Part-time.
                  <br>&#x2611; Trainer can Work Online i.e. Work from home.
                  <br>&#x2611; Choose your working hours according to you timings.
                  <br>&#x2611; Become Certified Trainer, Certification through
                  <a href="/" class="text-theme-colored2">Learnintern.com.</a>
                  <br>&#x2611; Upload multiple modules related to different courses.</p>
                </div>
              </div>
                <br><br><h3 class="text-center mt-0 mb-30 text-theme-colored2">REGISTER NOW!</h3>
                <div class="border border-primary rounded mb-30" style="background-color:#EEE;">
                  <div class="col-md-12 mb-20">
                    <label>Personal Info:</label>
                  </div>
                <div class="row pl-20 pr-20">
                  <div class="col-md-6">
                    <div class="zoom form-group mb-30">
                      <input  placeholder="Enter Your Name" id="name" name="name" required="Required" class="form-control" aria-required="true" type="text">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class=" zoom form-group mb-30">
                      <input  placeholder="Enter a Valid Email Id" id="email" name="email" class="form-control" required="Required" aria-required="true" type="email" >
                    </div>
                  </div>
                </div>
                <div class="row pl-20 pr-20">
                  <div class="col-md-6">
                    <div class="zoom form-group mb-30">
                      <input  placeholder="Enter Your Mobile Number" id="phone" name="phone" required="Required" class="form-control" aria-required="true" type="tel" maxlength="10" pattern="[6-9]{1}[0-9]{9}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="zoom form-group mb-30">
                      <input  placeholder="Enter State" id="state" name="state" required="Required" class="form-control" aria-required="true" type="text">
                    </div>
                  </div>
                </div>
              </div>
              <div class="border border-primary rounded mb-30" style="background-color:#EEE;">
                <div class="col-md-12 mb-20">
                  <label>Professionals Info:</label>
                </div>
                <div class="row pl-20 pr-20">
                  <div class="col-md-6">
                    <div class="form-group mb-30 select" >
                      <label for="" >Training Type</label>
                      <div  class="zoom form-check">
                        <select class="zoom form-check-input custom-select form-control bg-theme-colored2 form-check-label text-white" id="type" name="type" required>
                       <option value="" disabled selected="selected" > - Choose - </option>
                          <option value="Both (Physical & Online)">Both (Physical & Online)</option>
                          <option value="Physical On-site">Physical On-site Training</option>
                          <option value="Online Training">Online Training</option>
                        </select>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-30 select" >
                      <label for="" class="">Specialized Area</label>
                      <div  class="form-check">
                        <select class="zoom form-check-input custom-select form-control bg-theme-colored2 text-white form-check-label" id="area" name="area" required>
                       <option value="" selected="selected" disabled> - Choose - </option>
                       <option value="Digital Marketing" >Digital Marketing</option>
                       <option value="Affliate Marketing">Affliate Marketing</option>
                       <option value="Email Marketing">Email Marketing</option>
                       <option value="Inbound Marketing & E-Commerce">Inbound Marketing & E-Commerce</option>
                       <option value="Search Engine Optimization">Search Engine Optimization</option>
                       <option value="Social Media Optimization">Social Media Optimization</option>
                       <option value="Social Media Marketing">Social Media Marketing</option>
                       <optgroup label="Website Designing">
                       <option value="Website Designing Complete Course">&nbsp;&nbsp;&nbsp;&nbsp;Website Designing Complete Course</option>
                       <option value="Website Designing - Front End">&nbsp;&nbsp;&nbsp;&nbsp;Website Designing - Front End</option>
                       <option value="Website Designing - Back End">&nbsp;&nbsp;&nbsp;&nbsp;Website Designing - Back End</option>
                       <option value="Website Designing - PHP">&nbsp;&nbsp;&nbsp;&nbsp;Website Designing - PHP</option>
                       <option value="Website Designing - MySQL">&nbsp;&nbsp;&nbsp;&nbsp;Website Designing - MySQL</option>
                       </optgroup>
                       <option value="Python Complete Course">Python Complete Course</option>
                       <option value="Laravel Course">Laravel Course</option>
                       <option value="Youtube Marketing & Adsense">Youtube Marketing & Adsense</option>
                       <option value="Analytics">Analytics</option>
                       <option value="Computer Repairing">Computer Repairing</option>
                       <option value="English Langauge">English Langauge</option>
                       <option value="Call Center Trainings International"> Call Center Trainings International</option>
                       <option value="Self Personality Development">Self Personality Development</option>
                       <option value="Stress & Anxiety Management">Stress & Anxiety Management</option>
                       <option value="HR Trainer">HR Trainer</option>
                      </select>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="row pl-20 pr-20">
                  <div class="col-md-6">
                    <div class="form-group mb-30">
                      <label>Training Audience</label><br>
                      <div  class="form-check">
                        <select class="zoom form-check-input custom-select form-control bg-theme-colored2 text-white form-check-label" id="audience" name="audience" required>
                          <option value="" selected="selected" disabled> - Choose - </option>
                          <option value="All type of Audience" >All type of Audience</option>
                          <option value="Students" >Students (10th to Post Graduation)</option>
                          <option value="Working Professionals" >Working Professionals</option>
                          <option value="Business Men - (Startups or Shopkeepers)" >Business Men - (Startups or Shopkeepers)</option>
                          <option value="Students & Working Professionals" >Students & Working Professionals</option>
                          <option value="Students & Business Men" >Students & Business Men </option>
                          <option value="Working Professionals & Business Men" >Working Professionals & Business Men</option>
                        </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-30 select" >
                    <label for="" >Availability Timing</label>
                    <div  class="zoom form-check">
                      <select class=" zoom form-check-input custom-select form-control bg-theme-colored2 form-check-label text-white" id="ptime" name="ptime" required>
                     <option value="" selected="selected" >  - Choose - </option>
                        <option value="6:00 AM - 12:00 PM">6:00 AM - 12:00 PM</option>
                        <option value="12:00 PM - 6:00 PM">12:00 PM - 6:00 PM</option>
                        <option value="6:00 PM - 12:00 AM">6:00 PM - 12:00 AM</option>
                        <option value="12:00 AM - 6:00 AM">12:00 AM - 6:00 AM</option>
                        <option value="Day Shift (09:00 AM - 6:00 PM)"><b>FULL TIME</b> Day Shift (09:00 AM - 6:00 PM)</option>
                        <option value="Night Shift (09:00 PM - 6:00 AM)"><b>FULL TIME</b> Night Shift (09:00 PM - 6:00 AM)</option>
                        <option value="Saturday & Sunday">Saturday & Sunday- <b>FULL Day</b> Shift</option>
                    </select>
                  </div>
                  </div>
                </div>
                </div>
                  <div class="row pl-20 pr-20">
                  <div class="col-md-6">
                    <div class=" zoom form-group mb-30">
                      <input  placeholder="Preferred Language to teach (eg. Hindi/English/Tamil e.t.c)" id="language" name="language" class="form-control" required="Required" aria-required="true" type="text" >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class=" zoom form-group mb-30">
                    <input name="experience" type="number" min="0" max="20" placeholder="Total Job Experience (in Years)" class="form-control" required="Required" aria-required="true">
                    </div>
                  </div>
                </div>
                <div class="row pl-20 pr-20">
                      <div class="col-md-6">
                        <div class="form-group mb-30">
                          <label for="" >Upload Your Resume </label> (only pdf format supported)<input class="zoom border border-success" placeholder="Upload Your CV" type="file" id="mycv" accept="application/pdf" onchange="Filevalidation()" required="Required" name="cv" class="form-control" aria-required="true" maxlength="1">
                          <div><span id="cvsize"></span></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group mb-30">
                          <label for="" >Upload Your Photo (maximum size: 200X170)</label> (only .jpg, .jpeg, .png format supported) <input class="zoom border border-success" placeholder="Upload Your Photo" type="file" onchange="Filevalidation2()" id="myphoto" accept="image/*" required="Required" name="photo" class="form-control" aria-required="true" maxlength="1">
                          <div><span id="size"></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="row pl-20 pr-20">
                      <div class="col-sm-12">
                        <div class="form-group mb-30">
                        </div>
                        <input type="text" class="form-control" name="intro" placeholder="Introductory Video Link (Eg: https://youtu.be/xyz)"><br>
                      </div>
                    </div>

                    <div class="row pl-20 pr-20">
                    <div class="col-md-12">
                      <div class="zoom form-group mb-30">
                        <textarea  rows="3" cols="20" maxlength="50" id="skill" name="skill" class="form-control" placeholder="Add Your Skills [with comma seperated]"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="border border-primary rounded mb-30" style="background-color:#EEE;">
                  <div class="col-md-12 mb-20">
                    <label>Upload Your Modules</label>&nbsp;i.e. Teaching Syllabus (only pdf format supported)
                  </div>
                  <div class="row pl-20 pr-20">
                  <div class="col-md-12">
                    <div class="form-group mb-30">
                      <input type="file" id="fileselect" accept="application/pdf" name="fileselect[]" multiple="multiple" />
                      <div id="filedrag">or drop files here</div>
                    </div>
                    <div id="messages">
                      <p><b>File(s) Information</b></p>
                    </div>

                    <div>
                      <ul data-bind="foreach: filesUploaded">
                        <li>
                          <p>
                            <i style="color:#f95959" class="fa" data-bind="css: icon"></i>
                          Name: <strong data-bind="text: name"></strong> | Type: <strong data-bind="text: type"></strong> | Size: <strong data-bind="text: size"></strong> bytes</p>
                        </li>
                      </ul>
                    </div>
                    </div>
                  </div>
                  </div>
                  <div class="border border-primary rounded mb-30" style="background-color:#EEE;">
                    <div class="col-md-12 mb-20">
                      <label>Secure your account:</label>
                    </div>
                    <div class="row pl-20 pr-20">
                    <div class="col-md-6">
                      <div class="form-group mb-30">
                        <input placeholder="Enter Your Password" id="password" onkeyup="CheckPasswordStrength(this.value)" name="password" required="Required" class="form-control" aria-required="true" type="password" >
                        <div><span id="password_strength"></span></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-30">
                        <input placeholder="Confirm Password" id="confirm_password" name="confirm_password" required="Required" class="form-control" aria-required="true" type="password">
                        <div class="alert" id="error" style="color:red">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pl-20 pr-20">
                      <div class="col-md-6">
                      		<img src = " /image.php?captcha_text = <?php echo $_SESSION['captcha']; ?> " id="capimg" style="outline:none;" alt="Captacha code" id="capimg">
                      		<a href="javascript: void(0);" onclick="document.getElementById('capimg').src = '/image.php?' + Math.random(); return false"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                           </div>
                        <div class="col-md-6">
                          	<input type="text" name="captcha"  placeholder="Enter captcha" class="zoom ml-20 mr-20 p-10" style="border:1px solid #eee">
                      </div>
                    </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-0 mt-0">
                        <button type="submit" id="reg_trainer" name="reg_trainer" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-lg btn-flat" style="border-radius:25px" data-loading-text="Please wait...">Submit Now</button>
                      </div>
                    </div>

                  <div class="row pl-20 pr-20">
                    <div class="col-sm-12">
                      <div class="form-group mt-15 text-center">
                        <p>Already have an account? <a id="login" href="login.php" class="text-theme-colored2 ajaxload-popup text-underline">Sign In Here</a> </p>
                      </div>
                    </div>
                  </div>

                </form>
              </div>
                 </div>
               </div>


               <script type="text/javascript">
               var ViewModel = function() {
                 var self = this;
                 var filesUploaded = ko.observableArray([]);
                 function addFileToList(file) {
                   filesUploaded.push(new File(file));
                 }

                 function File(newFile) {
                   var self = this;
                   construct(newFile);

                   function construct(file) {
                     self.name = file.name;
               		  self.type = file.type;
               		  self.size = file.size;
                     self.icon = setIconBasedOnFileType(file.type);
                   }

                   function setIconBasedOnFileType(fileType) {
                     switch(fileType) {
                       case 'text/plain':
                         return "fa-file-text-o";
                       case 'application/pdf':
                         return "fa-file-pdf-o";
                       case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
                         return "fa-file-word-o";
                       default:
                         return "fa-file-o";
                     }
                   }
                 }

                 return {
                   filesUploaded: filesUploaded,
                   addFileToList: addFileToList
                 };
               }

               var vm = new ViewModel();

               ko.applyBindings(vm);

               // getElementById
               function $id(id) {
                 return document.getElementById(id);
               }

               //
               // output information
               function Output(msg) {
                 var m = $id("messages");
                 m.innerHTML = msg + m.innerHTML;
               }

               // call initialization file
               if (window.File && window.FileList && window.FileReader) {
                 Init();
               }

               //
               // initialize
               function Init() {

                 var fileselect = $id("fileselect"),
                   filedrag = $id("filedrag"),
                   submitbutton = $id("submitbutton");

                 // file select
                 fileselect.addEventListener("change", FileSelectHandler, false);

                 // is XHR2 available?
                 var xhr = new XMLHttpRequest();
                 if (xhr.upload) {

                   // file drop
                   filedrag.addEventListener("dragover", FileDragHover, false);
                   filedrag.addEventListener("dragleave", FileDragHover, false);
                   filedrag.addEventListener("drop", FileSelectHandler, false);
                   //filedrag.style.display = "block";

                 }

               }

               // file drag hover
               function FileDragHover(e) {
                 e.stopPropagation();
                 e.preventDefault();
                 e.target.className = (e.type == "dragover" ? "hover" : "");
               }

               // file selection
               function FileSelectHandler(e) {
               	// cancel event and hover styling
               	FileDragHover(e);

               	// fetch FileList object
               	var files = e.target.files || e.dataTransfer.files;

               	// process all File objects
               	for (var i = 0, f; f = files[i]; i++) {
               		//ParseFile(f);
                   vm.addFileToList(f);
               	}

               }

               function ParseFile(file) {
               	Output(
               		"<p>File information: <strong>" + file.name +
               		"</strong> type: <strong>" + file.type +
               		"</strong> size: <strong>" + file.size +
               		"</strong> bytes</p>"
               	);

               }

               </script>

                <script type="text/javascript">
                Filevalidation2 = () => {
                  const fi = document.getElementById('myphoto');
                  // Check if any file is selected.
                  if (fi.files.length > 0) {
                    for (const i = 0; i <= fi.files.length - 1; i++) {

                      const fsize = fi.files.item(i).size;
                      const file = Math.round((fsize / 1024));
                      // The size of the file.
                      if (file >= 500) {
                        size.style.color="red";
                        document.getElementById('size').innerHTML = '<b>'+'Image File too Big! Please select a file less than 500KB' +'</b>';
                        }
                      else {size.style.color="green";
                            document.getElementById('size').innerHTML = '<b>'+'File Size: ' + file +' KB</b>';}
		                     }
	                     }
	                 }
                   Filevalidation = () => {
                     const fi = document.getElementById('mycv');
                     // Check if any file is selected.
                     if (fi.files.length > 0) {
                       for (const i = 0; i <= fi.files.length - 1; i++) {

                         const fsize = fi.files.item(i).size;
                         const file = Math.round((fsize / 1024));
                         const mbfile =Math.round((file / 1024));;
                         // The size of the file.
                         if (file >= 4096) {
                           cvsize.style.color="red";
                           document.getElementById('cvsize').innerHTML = '<b>'+'PDF File too Big! Please select a file less than 4MB' +'</b>';
                           }
                         else {cvsize.style.color="green";
                               document.getElementById('cvsize').innerHTML = '<b>'+'File Size: ' + mbfile +' MB or ' + file +' KB</b>';}
                               }
                              }
                         }





                $('.dropdown-toggle').dropdown();
                function CheckPasswordStrength(password) {
                    var password_strength = document.getElementById("password_strength");

                    //TextBox left blank.
                    if (password.length == 0) {
                        password_strength.innerHTML = "";
                        return;
                    }

                    //Regular Expressions.
                    var regex = new Array();
                    regex.push("[A-Z]"); //Uppercase Alphabet.
                    regex.push("[a-z]"); //Lowercase Alphabet.
                    regex.push("[0-9]"); //Digit.
                    regex.push("[$@$!%*#?&]"); //Special Character.

                    var passed = 0;

                    //Validate for each Regular Expression.
                    for (var i = 0; i < regex.length; i++) {
                        if (new RegExp(regex[i]).test(password)) {
                            passed++;
                        }
                    }

                    //Validate for length of Password.
                    if (passed > 2 && password.length > 8) {
                        passed++;
                    }

                    //Display status.
                    var color = "";
                    var strength = "";
                    switch (passed) {
                        case 0:
                        case 1:
                            strength = "Weak Password, Try some alphabets, numericals and symbols like @/.";
                            color = "red";
                            break;
                        case 2:
                            strength = "Good, Make it more strong.";
                            color = "darkorange";
                            break;
                        case 3:
                        case 4:
                            strength = "Strong Password, Well done!";
                            color = "green";
                            break;
                        case 5:
                            strength = "Very Strong Password";
                            color = "darkgreen";
                            break;
                    }
                    password_strength.innerHTML = strength;
                    password_strength.style.color = color;
                }


            function confirmPassword() {
              if(document.querySelector('#password').value !== document.querySelector('#confirm_password').value){
                document.querySelector('#error').innerHTML ="Password do not matched.";
                return false;
              }
              else{
                document.querySelector('#error').style.display = "none";
              }
            }
            $(document).ready(function () {
            $("#confirm_password").keyup(confirmPassword);
            });

                      </script>



          <!-- JS -->
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="js/main.js"></script>



          <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v8.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=install_email
        page_id="644140642882018">
      </div>
    </div>
      </body>
      </html>
