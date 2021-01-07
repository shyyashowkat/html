<?php session_start();
 if (isset($_SESSION['user'])){
$conn = mysqli_connect('192.145.239.50', 'datace9_uplink209', 'Uplink209@', 'datace9_learnintern');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$user = $_SESSION['user'];
if ($_SESSION['type'] == 'trainers') {
$sql = "SELECT * FROM trainers WHERE email =  '$user'";}
if ($_SESSION['type'] == 'students') {
$sql = "SELECT * FROM students WHERE email =  '$user'";}

$result = mysqli_query($conn, $sql);
  ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />

<!-- Page Title -->
<title>Dashboard | LearnIntern & Grow</title>

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
<!-- <link href="css/preloader.css" rel="stylesheet" type="text/css"> -->
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set4.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HY62C2WBH8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HY62C2WBH8');
</script>
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
	border-radius: 25px;
	cursor: default;
}

#filedrag.hover
{
	color: #37bf91;
	border-color: #37bf91;
	border-style: solid;
	box-shadow: inset 0 3px 4px #888;
}
</style>
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-colored2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget text-white">
              <ul class="list-inline xs-text-center text-white">
                <li class="m-0 pl-10 pr-10"> <a href="tel:+91-837-782-5955" class="text-white"><i class="fa fa-phone text-white"></i> +91-837-782-5955</a> </li>
                <li class="m-0 pl-10 pr-10">
                  <a href="mailto:class@learnintern.com" class="text-white"><i class="fa fa-envelope-o text-white mr-5"></i> class@learnintern.com</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-0">
            <div class="widget">
              <ul class="styled-icons icon-sm pull-right flip sm-pull-none sm-text-center mt-5">
                <li><a href="https://www.facebook.com/learnintern/"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="https://twitter.com/Learnintern1/"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="https://join.skype.com/invite/U1NxsJTD2cW5?call"><i class="fa fa-skype text-white"></i></a></li>
                <li><a href="https://www.instagram.com/learnintern/"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="https://www.linkedin.com/company/learnintern/"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10">
              <li class="m-0 pl-0 pr-10">
                <a href="/logout.php" class="text-white"><i class="fa fa-sign-out mr-5"></i>Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default"><a class="pull-left flip mt-sm-10 mb-sm-20" href="/"><img style="max-height:100px;" src="images/logo-and-favicon/light-theme-transparent-logo.png" alt=""></a>
            <ul class="menuzord-menu">
              <li class=""><a href="/">Home</a>

              </li>
              <li><a href="/about-us.php">About Us <span class="label label-danger"></span></a>

              </li>
              <li><a href="#">Learning Modules</a>
                <ul class="dropdown">
                  <li><a href="/free-modules.php">Free</a>
                    <!-- <ul class="dropdown">
                      <li><a href="page-about1.html">About Style 1</a></li>
                      <li><a href="page-about2.html">About Style 2</a></li>
                    </ul> -->
                  </li>
                  <li><a href="#">personal</a>
                    <!-- <ul class="dropdown">
                      <li><a href="page-teachers-style1.html">Teachers style 1</a></li>
                      <li><a href="page-teachers-style2.html">Teachers style 2</a></li>
                      <li><a href="page-teacher-details.html">Teachers Details</a></li>
                    </ul> -->
                  </li>

                </ul>
              </li>
              <li><a href="/courses.php">Courses</a>
                <!-- <ul class="dropdown">
                  <li><a href="page-course-gird.html">Course Gird</a></li>
                  <li><a href="page-course-list.html">Course List</a></li>
                  <li><a href="page-course-details.html">Course Details</a></li>
                </ul> -->
              </li>
              <li><a href="/our-trainers.php">Our Trainers</a>  </li>
              <?php if (isset($_SESSION['user'])) {
               ?>
              <li class="active"><a href="/dashboard.php">Dashboard</a><?php  } ?></li>
              <li><a href="/contact-us.php">Contact Us</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <?php if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result); ?>
              <h2 class="text-theme-colored2 font-36">Welcome, <?php echo $row['name']; ?> </h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/">Home</a></li>
                <li class="active"> Dashboard</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Doctor Details -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sx-12 col-sm-4 col-md-3">
              <div class="doctor-thumb" >
                <?php if ($_SESSION['type'] == 'trainers') { ?>
                  <img src="trainer/image/<?php echo $row['photo']; ?>" width="260" height="310" alt=""><?php
                } else { ?>
                <img src="images/about/profile1.jpg" alt=""> <?php } ?>
              </div>
              <div class="info p-20 bg-black-333">
                <h4 class="text-uppercase text-white"><?php echo $row['name']; ?></h4>

                <a name="edit_btn" class="btn btn-info btn-flat mt-10 mb-sm-30" href="/edit-details.php">Edit Profile</a>
                <a name="logout" class="btn btn-danger btn-flat mt-10 mb-sm-30" href="/logout.php">Logout</a>
                <p class="font-12 mt-10">Last Login: <?php date_default_timezone_set("Asia/Kolkata"); echo date('D d M Y H:i:s'); ?></p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">

              <div>
                <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">

                  <li role="presentation" class="active" ><a href="#personal" aria-controls="personal" role="tab" data-toggle="tab" class="font-15 text-uppercase">Personal Details<span class="badge"></span></a></li>
                  <?php if ($_SESSION['type'] == 'trainers') {?>
                  <li role="presentation"><a href="#free" aria-controls="free" role="tab" data-toggle="tab" class="font-15 text-uppercase">Professional Details<span class="badge"></span></a></li>
                <?php } ?>
                  <?php if ($_SESSION['type'] == 'students') {?>
                  <li role="presentation"><a href="#free" aria-controls="free" role="tab" data-toggle="tab" class="font-15 text-uppercase">Free Course <span class="badge">5</span></a></li>
                <?php } ?>
                <li role="presentation" ><a href="#payment" aria-controls="payment" role="tab" data-toggle="tab" class="font-15 text-uppercase">Payment Info. <span class="badge"></span></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="personal">
                    <table class="table">
                       <tbody>
                          <tr>
                             <th scope="row">Email </th>
                             <td><?php echo $row['email']; ?></td>
                          </tr>
                          <tr>
                             <th scope="row">Phone</th>
                             <td><?php echo $row['phone']; ?></td>
                          </tr>
                          <tr>
                             <th scope="row">State</th>
                             <td><?php echo $row['state']; ?></td>

                          </tr>
                          <tr>
                             <th scope="row">Registration Time</th>
                             <td><?php echo $row['registration_time']; ?></td>

                          </tr>
                          <tr>
                             <th scope="row">Your Current IP address</th>
                             <td><?php echo $_SERVER['REMOTE_ADDR']; ?></td>

                          </tr>
                       </tbody>
                    </table>
                  </div>
                  <?php if ($_SESSION['type'] == 'trainers') { ?>

                    <div role="tabpanel" class="tab-pane" id="free">
                      <table class="table">
                         <tbody>
                            <tr>
                               <th scope="row">Your Skills</th>
                               <td><?php echo $row['skills']; ?></td>

                            </tr>
                            <tr>
                               <th scope="row">Your Area of Teaching</th>
                               <td><?php echo $row['area']; ?></td>

                            </tr>
                            <tr>
                               <th scope="row">Your Teaching Timing</th>
                               <td><?php echo $row['ptime']; ?></td>

                            </tr>
                            <tr>
                               <th scope="row">Your mode(s) of teaching</th>
                               <td><?php echo $row['type']; ?></td>

                            </tr>
                            <tr>
                               <th scope="row">Language(s)</th>
                               <td><?php echo $row['language']; ?></td>

                            </tr>
                            <tr>
                               <th scope="row">Your experience of year(s)</th>
                               <td><?php echo $row['experience']; ?></td>

                            </tr>
                            <tr>
                               <th scope="row">Type of Audience(s) that you'll teach</th>
                               <td><?php echo $row['audience']; ?></td>

                            </tr>
                            <tr>
                               <th scope="row">Your Introduction video link</th>
                               <td><a href= "<?php echo $row['intro_vid']; ?>" target="_blank"><?php echo $row['intro_vid']; ?> </a></td>

                            </tr>
                         </tbody>
                      </table>
                    </div>
               <?php   } ?>

                  <?php if ($_SESSION['type'] == 'students') {?>
                  <div role="tabpanel" class="tab-pane" id="free">
                    <table class="table">
                       <tbody>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>Web Development Course</h3></h4>
                             <td><h4>Free</h3></h4>
                             <td><h4><a class="btn btn-primary btn-xs" href="#">Download</a></h4></td>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>Software Development Course</h3></h4>
                             <td><h4>Free</h3></h4>
                             <td><h4><a class="btn btn-primary btn-xs" href="#">Download</a></h4></td>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>App Development Course</h3></h4>
                             <td><h4>Free</h3></h4>
                             <td><h4><a class="btn btn-primary btn-xs" href="#">Download</a></h4></td>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>Photoshop Course</h3></h4>
                             <td><h4>Free</h3></h4>
                             <td><h4><a class="btn btn-primary btn-xs" href="#">Download</a></h4></td>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                       </tbody>
                    </table>
                  </div> <?php } ?>
                  <div role="tabpanel" class="tab-pane" id="payment">
                    <div class="table-responsive">
                      <?php if ($row['payment'] == NUll) {
                        if ($_SESSION['type'] == 'trainers') {
                          echo "You haven't done or recieved any payment yet!";
                        } else echo "You haven't done any payment yet!";
                      } else{ ?>
                      <table class="table table-hover">
                         <thead>
                            <tr>
                               <th>Payment ID</th>
                               <th>Date</th>
                               <th>Payment Module</th>
                               <th>Total</th>
                               <th></th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <th scope="row">#1264</th>
                               <td></td>
                               <td></td>
                               <td><?php echo $row['payment']; ?></td>
                               <td><a class="btn btn-success btn-xs" href="#">View Details</a></td>
                            </tr>
                         </tbody>
                      </table> <?php } ?>
                    </div>
                  </div>
                </div>

                <!-- <p class="mb-15">Though, to get more effective course modules and to get tuitions from experienced trainers, Students can buy personal MEMBERSHIP. </p>
                <blockquote class="theme-colored pt-20 pb-20">
                  <p>“It is important to remember that neither can be a substitute for well-trained teachers, leadership, and parental involvement.”</p>
                  <footer><cite title="Source Title">Keith Krueger</cite></footer>
                </blockquote>
                <p><a style="color:#37BF91" href="/">Take our personal MEMBERSHIP and get the best possible advantages.</a></p>
           -->
           <section>
           <div class="container p-0 text-center mt-30" style="max-width: 700px;">
             <button type="button" style="border-radius:25px" class="btn btn-colored btn-flat btn-theme-colored text-white" onclick="var x = document.querySelector('.files'); if(x.style.display ==='none'){x.style.display='block';} else { x.style.display='none';} ">Upload more modules</button>
           	  <div class="border border-primary rounded mb-30" style="background-color:#d4d4d6;">
           	<div class="col-md-12 mb-20 files" style="display:">
           	<h3><span class="text-uppercase mt-0 text-theme-colored2">Upload your Modules</span> </h3>
             <h5> (maximum 9 modules can be uploaded through single account)</h5>
             <form id="upload" action="" method="POST"  class="reservation-form bg-silver-deep" enctype="multipart/form-data">
                 <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />
                 <div class="form-group">
                   <div id="filedrag">Drop your files here <br> or</div>
                   <input type="file" id="fileselect" accept="application/pdf" name="files[]" class="form-control text-center" multiple="multiple" />
                 </div>
                 <div id="submitbutton">
                   <button type="submit" id="submitmodule" class="btn btn-colored btn-flat btn-theme-colored2 text-white" style="border-radius:25px" name="submitmodule">Upload</button>
                 </div>
             </form>
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
               <?php

// Check if form was submited
if(isset($_POST['submit'])) {

    // Configure upload directory and allowed file types
   $upload_dir = 'uploads'.DIRECTORY_SEPARATOR;
    $allowed_types = array('pdf', 'doc', 'docx');

    // Define maxsize for files i.e 5MB
    $maxsize = 5 * 1024 * 1024;

    // Checks if user sent an empty form
    if(!empty(array_filter($_FILES['files']['name']))) {

        // Loop through each file in files[] array
        foreach ($_FILES['files']['tmp_name'] as $key => $value) {

            $file_tmpname = $_FILES['files']['tmp_name'][$key];
            $file_name = $_FILES['files']['name'][$key];
            $file_size = $_FILES['files']['size'][$key];
            $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

            // Set upload file path
            $filepath = $upload_dir.$file_name;

            // Check file type is allowed or not
            if(in_array(strtolower($file_ext), $allowed_types)) {

                // Verify file size - 2MB max
                if ($file_size > $maxsize)
                    echo "Error: File size is larger than the allowed limit.";

                // If file with name already exist then append time in
                // front of name of the file to avoid overwriting of file
                if(file_exists($filepath)) {
                    $filepath = $upload_dir.time().$file_name;

                    if( move_uploaded_file($file_tmpname, $filepath)) {
                      $uplo = "INSERT INTO multi_module (email, mod1) VALUES ('$user',  $file_name)";
                      if (mysqli_query($conn, $uplo)) {
                        echo "{$file_name} successfully uploaded <br />";
                      }

                    }
                    else {
                        echo "Error uploading {$file_name} <br />";
                    }
                }
                else {

                    if( move_uploaded_file($file_tmpname, $filepath)) {
                      $uplo = "INSERT INTO multi_module (email, mod1) VALUES ('$user',  $file_name)";
                      if (mysqli_query($conn, $uplo)) {
                        echo "{$file_name} successfully uploaded <br />";
                      }
                    }
                    else {
                        echo "Error uploading {$file_name} <br />";
                    }
                }
            }
            else {

                // If file extention not valid
                echo "Error uploading {$file_name} ";
                echo "({$file_ext} file type is not allowed)<br / >";
            }
        }
    }
    else {

        // If no files selected
        echo "No files selected.";
    }
}
 ?>
           	</div>
           	</div>
           </section>
          </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- Divider: Clients -->
 <?php }                  mysqli_close($conn); ?>
  <section class="clients ">
    <div class="container pt-10 pb-10">
      <div class="row">
        <div class="col-md-12">
          <!-- Section: Clients -->
          <div class="owl-carousel-6col clients-logo transparent text-center">

            <div class="item"> <a href="#"><img src="/images/clients/a4.png" alt=""></a></div>
            <div class="item"> <a href="#"><img src="/images/clients/a3.png" alt=""></a></div>
            <div class="item"> <a href="#"><img src="/images/clients/a2.png" alt=""></a></div>
            <div class="item"> <a href="#"><img src="/images/clients/a5.png" alt=""></a></div>
            <div class="item"> <a href="#"><img src="/images/clients/a6.png" alt=""></a></div>
            <div class="item"> <a href="#"><img src="/images/clients/a7.png" alt=""></a></div>
            <div class="item"> <a href="#"><img src="/images/clients/a8.png" alt=""></a></div>
            <div class="item"> <a href="#"><img src="/images/clients/a9.png" alt=""></a></div>
            <div class="item"> <a href="#"><img src="/images/clients/a10.png" alt=""></a></div>
            <div class="item"> <a href="#"><img src="/images/clients/a11.png" alt=""></a></div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end main-content -->
  <!-- Footer -->
  <footer id="footer" class="footer" data-bg-color="#212331">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-0 mb-0" alt="" src="/images/logo-and-favicon/dark-theme-transparent-logo.png" style="max-width:60%">
            <p>D-23 A, Ground Floor, Gate No.1, Surya Enclave, New Delhi 110056</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="tel:+91-837-782-5955">+91-837-782-5955</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="mailto:class@learnintern.com">class@learnintern.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href="/">learnintern.com</a> </li>
            </ul>
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10">
              <li><a href="https://www.facebook.com/learnintern/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/Learnintern1"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/learnintern/"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://linkedin.com/school/learnintern"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="skype:https://join.skype.com/invite/U1NxsJTD2cW5?call"><i class="fa fa-skype"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Useful Links</h4>
            <ul class="angle-double-right list-border">
              <li><a href="/">Home Page</a></li>
                <li><a href="/blog/">Blogs</a></li>
              <li><a href="/about-us.php">About Us</a></li>
              <li><a href="/mission.php">Our Mission</a></li>
              <li><a href="/terms-conditions.php">Terms and Conditions</a></li>
              <li><a href="/contact-us.php">Contact us</a></li>
              <li><a href="/faqs.php">FAQ's</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Top News</h4>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img width="80" height="55" src="/images/foot/php.png" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">PHP Learning</a></h5>
                  <p class="post-date mb-0 font-12">Oct 08, 2020</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img width="80" height="55" src="/images/foot/web.png" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Web Development</a></h5>
                  <p class="post-date mb-0 font-12">Oct 08, 2020</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img width="80" height="55" src="/images/foot/seo.png" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Search Engine Optimization</a></h5>
                  <p class="post-date mb-0 font-12">Oct 08, 2020</p>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Useful Applications</h4>
            <ul class="angle-double-right ">
              <li><a href="/internet-speed-test.php">Test Internet Speed</a></li>
              <li><a href="/typing-speed-test">Test Typing Speed</a></li>
            </ul>
          </br>
            <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
            <div class="opening-hours">
              <ul class="">
                <li class="clearfix"> <span> Mon - Sun :  </span>
                  <div class="value pull-right"> 09.00 am - 10.00 pm </div>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2b2d3b">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <a href="https://essentialservices.in/" class="font-12 text-black-777 m-0 sm-text-center">Copyright &copy; 2020 ESSENTIAL SERVICES. All Rights Reserved</a>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="/faqs.php">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="/privacy-policy.php">Privacy Policy</a>
                </li>
                <li>|</li>
                <li>
                  <a href="/contact-us.php">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
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
<!-- JS | Custom script for all pages -->
<script src="/js/custom.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });

    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script>
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
</body>
</html>
<?php
 }
else {
  session_destroy();
  header('location: /login.php');
} ?>
