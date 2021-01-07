<?php
 session_start();
if (isset($_SESSION['uname'])) {
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
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="robots" content="noindex, nofollow" />

<!-- Page Title -->
<title>Admin Dashboard | LearnIntern & Grow</title>

<!-- Favicon and Touch Icons -->
<link href="../images/logo-and-favicon/favicon.png" rel="shortcut icon" type="image/png">
<link href="../images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="../images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="../images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="../images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">
<link href="../css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="../css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="../css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="../css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<!-- <link href="css/preloader.css" rel="stylesheet" type="text/css"> -->
<!-- CSS | Custom Margin Padding Collection -->
<link href="../css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="../css/colors/theme-skin-color-set4.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="../js/jquery-2.2.4.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="../js/jquery-plugin-collection.js"></script>

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
table {
  text-align: left;
  position: relative;
  border-collapse: collapse;
}
th {
  font-weight: normal;
  background: #37BF91;
  color:white;
  position: sticky;
  top: 100px; /* Don't forget this, required for the stickiness */
  box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);
}

</style>
</head>
<body class="" style="overflow-x: scroll;">
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
                <a href="../logout.php" class="text-white"><i class="fa fa-sign-out mr-5"></i>Logout </a>
            </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default"><a class="pull-left flip mt-sm-10 mb-sm-20" href="/"><img style="max-height:100px;" src="../images/logo-and-favicon/light-theme-transparent-logo.png" alt=""></a>
            <ul class="menuzord-menu">
              <li class=""><a href="/">Home</a></li>
              <li><a href="../about-us.php">About Us </a>  </li>
              <li><a href="/admin-login/agreement-for-online-trainings">Agreement for online training <span class="label label-danger">new</span></a></li>
              <li><a href="../courses.php">Courses</a></li>
              <li><a href="/contact-us.php">Contact Us</a></li>
              <?php if (isset($_SESSION['uname'])){ ?>
             <li class="active"><a href="#">Admin Dashboard</a> <?php } ?>
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
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="../images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Admin Dashboard</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/">Home</a></li>
                <li class="active">Admin Dashboard</li>
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
            <div class="col-sx-12 col-sm-3 col-md-3">
              <div class="doctor-thumb">
                <img src="../images/icons/admin.png" alt="">
              </div>
              <div class="info p-20 bg-black-333">
                <h4 class="text-uppercase text-white">Admin</h4>
                <a class="btn btn-danger btn-flat mt-10 mb-sm-30" href="../logout.php">Logout</a>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-12">
              <div><h2 class="text-uppercase title text-center">Users -
                <span class="text-theme-colored2"> Learnintern.com</span></h2>
                <div class="double-line-bottom-centered-theme-colored-2"></div>
           <table class="table table-hover table-responsive table-striped table-sm table-responsive-sm">
               <caption class=" font-25 text-center">Students' Information</caption>
             <thead class="thead-dark">
               <tr class="bg-success">
             			<th>ID</th>
             			<th>Name</th>
             			<th>Email</th>
             			<th>Phone</th>
                  <th>State</th>
             			<th>Registration time & date</th>
             			<th>IP address</th>
             			<th>Payments</th>
                  <th>Delete</th>
               </tr></thead>
               <tbody>
                 <?php $sql1 = "SELECT id, name, email, phone, state, registration_time, ip_address, payment FROM students";
                 $result1 = $conn->query($sql1);
                 if ($result1->num_rows > 0) {
                    while($row1 = $result1->fetch_assoc()) { ?>
               		<tr>
               			<td> <?php echo $row1["id"];  ?></td>
               			<td> <?php echo $row1["name"]; ?></td>
               			<td> <?php echo $row1["email"]; ?></td>
               			<td> <?php echo $row1["phone"]; ?></td>
                    <td> <?php echo $row1["state"];  ?></td>
               			<td> <?php echo $row1["registration_time"]; ?></td>
                    <td> <?php echo $row1["ip_address"]; ?></td>
               			<td> <?php echo $row1["payment"]; ?></td>
                    <td><a href="delete-student.php?id=<?php echo $row1['id']; ?>"> <i class="fa fa-trash-o" style="font-size:24px;color:red"></i></a></td>

               <?php } }else {
                 echo "<td>0 student</td>";
               } ?></tr>
             </tbody>
           </table>
           <a  href="export-student.php?export=true" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-flat" style="width:190px;border-radius:50px">Export students Data</a>
         </div>
           </div>
           </section>

           <table class="table table-hover table-responsive table-striped table-sm table-responsive-sm " style=" overflow-x: scroll" >
               <caption class="font-25 text-center">Trainers' Information</caption>
             <thead class="thead-dark  w-100">
               <tr class="bg-info">
                 <th>Rating or notes area</th>
                 <th>Photo</th>
                  <th>State & Contact Info</th>
             			<th>Area</th>
             			<th>Resume</th>
                  <th>Payments</th>
                  <th>Timings & Type</th>
                  <th>Audience</th>
                  <th>Language(s)</th>
                  <th>Curriculum</th>
                  <th>Experience</th>
                  <th>Skills</th>
                  <th>Introduction</th>
             			<th>Reg.date & IP address</th>
                  <th>Delete</th>
               </tr></thead>
               <tbody>
               <?php $sql2 = "SELECT * FROM trainers";
               $result2 = $conn->query($sql2);
               if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) { ?>
                <tr>
                  <td>
                    <form class="" action="trainer-notes.php" method="post">
                      <input type="hidden" name="email" value="<?php echo $row2["email"]; ?>">
                  <textarea name="tr_notes" style="resize:auto; border: none" rows="3" cols="27" placeholder=""><?php echo $row2['tr_notes']; ?></textarea><br>
                  <button type="submit" name="tr_tag" class="btn btn-colored btn-theme-colored2 text-white font-12 p-5 btn-flat" onclick="">Update</button>
                </form>
                </td>
                  <td> <img src=" /trainer/image/<?php echo $row2['photo']; ?>" height = '50px' width = '50px'>
                  <?php echo $row2["name"]; ?></td>
                  <td> <?php echo $row2["state"];  ?><br>
                   <?php echo $row2["email"]; ?><br>
                   <?php echo $row2["phone"]; ?></td>
                  <td> <?php echo $row2["area"]; ?></td>
                  <td> <a href="/trainer/resume/<?php echo $row2['resume'];?>" download ><?php echo $row2['resume'];?></a></td>
                  <td> <?php if ($row2["payment"] == NULL) {
                    echo "No any Payment done yet";
                  } else{ echo $row2["payment"];} ?></td>
                  <td> <?php echo $row2["ptime"]; ?><br>
                  <?php echo $row2["type"]; ?></td>
                  <td> <?php echo $row2["audience"]; ?></td>
                  <td> <?php echo $row2["language"]; ?></td>
                  <td><a href="/trainer/curriculum/<?php echo $row2['curriculum'];?>" download ><?php echo $row2['curriculum'];?></a></td>
                  <td> <?php echo $row2["experience"]; ?></td>
                  <td> <?php echo $row2["skills"]; ?></td>
                  <td> <?php echo $row2["intro_vid"]; ?></td>
                  <td> <?php echo $row2["registration_time"]; ?><br>
                   <?php echo $row2["ip_address"]; ?></td>

                  <td><a href="/admin-login/delete-trainer.php?email=<?php echo $row2['email']; ?>"> <i class="fa fa-trash-o" style="font-size:24px;color:red"></i></a></td>
              <?php } }else {
                echo " <td>0 trainers</td>";
              } ?></tr>
             </tbody>

           </table>
           <a  href="export-trainer.php?export=true" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-flat" style="width:190px;border-radius:50px">Export Trainers Data</a>
           <section>
             <div class="container">
               <div class="section-content">
           <table class="table table-hover table-responsive table-striped table-sm table-responsive-sm">

           <caption class=" font-25 text-center">Subscribers</caption>
            <thead class="thead-dark">
               <tr class="bg-danger">
                 <th><input type="checkbox" class="check3" id="checkAll3"> Select All</th>
	                <th>S no</th>
	                 <th>Email</th>
                  <th>Registration time & date</th>
             			<th>IP address</th>
                  <th>Delete</th>
               </tr></thead>
               <tbody>
               <?php $sql = "SELECT * FROM subscribers";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) { ?>
                 <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                  <td><input type="checkbox" name="subscribers[]" class="check3" value="<?php echo $row["id"]; ?>" ></td>
                  <td> <?php echo $row["id"];  ?></td>
                  <td> <?php echo $row["email"]; ?></td>
                  <td> <?php echo $row["curr_time"]; ?></td>
                  <td> <?php echo $row["ip_address"]; ?></td>
                  <td><a href="delete-subscribers.php?id=<?php echo $row['id']; ?>"> <i class="fa fa-trash-o" style="font-size:24px;color:red"></i></a></td>

              <?php } }else {
                echo "<td>0 Subscriber</td>";
              } ?></tr>
             </tbody>
           </table>

           <table class="table table-hover table-responsive table-striped table-sm table-responsive-sm">

           <caption class=" font-25 text-center">Contacted users</caption>
            <thead class="thead-dark">


               <tr class="bg-warning">
                  <th><input type="checkbox" class="check4" id="checkAll4"> Select All</th>
                  <th>S no</th>
                  <th>Name</th>
                   <th>Email</th>
                   <th>Phone</th>
                   <th>Subject</th>
                   <th>Message</th>
                  <th>IP address</th>
                  <th>Delete</th>
               </tr></thead>
               <tbody>


               <?php $sql3 = "SELECT * FROM contact_us";
               $result3 = $conn->query($sql3);
               if ($result3->num_rows > 0) { ?>
                 <?php while($row3 = $result3->fetch_assoc()) { ?>
                <tr >
                  <td><input type="checkbox" name="contact_us[]" class="check4" value="<?php echo $row3["s_no"]; ?>" ></td>
                  <td> <?php echo $row3["s_no"];  ?></td>
                  <td> <?php echo $row3["name"]; ?></td>
                  <td> <?php echo $row3["email"];  ?></td>
                  <td> <?php echo $row3["phone"]; ?></td>
                  <td> <?php echo $row3["subject"]; ?></td>
                  <td> <?php echo $row3["message"]; ?></td>
                  <td> <?php echo $row3["ip_address"]; ?></td>
                  <td><a href="delete-contactus.php?s_no=<?php echo $row3['s_no']; ?>"> <i class="fa fa-trash-o" style="font-size:24px;color:red"></i></a></td>

              <?php } }else {
                echo "<td>No one contacted</td>";
              } ?></tr>
             </tbody>
           </table>

           <table class="table table-hover table-responsive table-striped table-sm table-responsive-sm">

           <caption class=" font-25 text-center">Blog</caption>
            <thead class="thead-dark">
               <tr class="bg-danger">
                 <th><input type="checkbox" class="check5" id="checkAll5"> Select All</th>
                 <th>Blogger's Name</th>
                  <th>Email</th>
                  <th>title</th>

                  <th>Publish time & date</th>
                  <th>Delete</th>
                  <th>Edit</th>
               </tr></thead>
               <tbody>
               <?php $sql4 = "SELECT * FROM blog";
               $result4 = $conn->query($sql4);
               if ($result4->num_rows > 0) { ?>
                 <?php while($row4 = $result4->fetch_assoc()) { ?>
                <tr>

                  <td><input type="checkbox" name="blog[]" class="check5" value="<?php echo $row4["email"]; ?>" ></td>
                  <td> <?php echo $row4["name"];  ?></td>
                  <td> <?php echo $row4["email"]; ?></td>
                  <td> <?php echo $row4["title"];  ?></td>

                  <td> <?php echo $row4["pub_time"]; ?></td>
                  <td><a href="delete-blog.php?id=<?php echo $row4['id']; ?>"> <i class="fa fa-trash-o" style="font-size:24px;color:red"></i></a></td>
                  <td><a href="edit-blog.php?id=<?php echo $row4['id']; ?>"> <i class="fa fa-edit" style="font-size:24px;color:#7c8fd3"></i></a></td>

              <?php } }else {
                echo "<td>0 Blogs</td>";
              } ?></tr>
             </tbody>
           </table>
<div class="col-sx-12 col-sm-3 col-md-3"><p>Total no of Users in the website:
              <?php
             $a=$result1->num_rows;
             $b =$result2->num_rows; $c =$result3->num_rows; $d=$result4->num_rows; $e=$result->num_rows; echo $a+$b+$c+$d+$e;
             ?>
</p>
          </div>
        </div>
      </div>
</div>
    </section>
  </div>

  <!-- end main-content -->
  <!-- Footer -->
  <footer id="footer" class="footer" data-bg-color="#212331">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img style="max-height:120px" class="mt-5 mb-20" alt="" src="../images/logo-and-favicon/dark-theme-transparent-logo.png">
            <p>D-23 A, Ground Floor, Gate No.1, Surya Enclave, New Delhi 110056</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <a class="text-gray" href="tel:+91-837-782-5955"> +91-837-782-5955</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a class="text-gray" href="mailto:class@learnintern.com">class@learnintern.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored2 mr-5"></i> <a class="text-gray" href="/">https://learnintern.com</a> </li>
            </ul>
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10">
              <li><a href="https://www.facebook.com/learnintern/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/Learnintern1/"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://join.skype.com/invite/U1NxsJTD2cW5?call"><i class="fa fa-skype"></i></a></li>
              <li><a href="https://www.instagram.com/learnintern/"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.linkedin.com/company/learnintern/"><i class="fa fa-linkedin"></i></a></li>
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
                <!--<li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right bg-theme-color-2 text-white closed"> Closed </div>
                </li>-->
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
  <!-- JS | Custom script for all pages -->
  <script src="../js/custom.js"></script>
 <script>
 $("#checkAll1").click(function () {
    $(".check1").prop('checked', $(this).prop('checked'));
});

$("#checkAll2").click(function () {
   $(".check2").prop('checked', $(this).prop('checked'));
});

$("#checkAll3").click(function () {
   $(".check3").prop('checked', $(this).prop('checked'));
});

$("#checkAll4").click(function () {
   $(".check4").prop('checked', $(this).prop('checked'));
});

$("#checkAll5").click(function () {
   $(".check5").prop('checked', $(this).prop('checked'));
});
 </script>
  </body>
 </html>
<?php mysqli_close($conn); }
 else {
    session_destroy();
   echo "<script>location.href='/';</script>";
 }
 ?>
