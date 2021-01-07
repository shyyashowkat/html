<?php session_start();
$conn = mysqli_connect('192.145.239.50', 'datace9_uplink209', 'Uplink209@', 'datace9_learnintern');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if ($_GET['send_admin_otp']) {
          $otp = rand(100000,999999);
          $to = "sharadmcp2003@gmail.com";
          require '../php-mailer/PHPMailerAutoload.php';
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
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'LearnIntern.com reset password.';
$mail->Body    = 'Your One Time Password (OTP) for reset admin password at learnintern.com is: '. $otp .' <br><br>--- for
security reason do not share this password with anyone.<br><br><br>------------This is a system generated password
sent from https://learnintern.com/';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  $_SESSION['admin_otp'] = $otp;
  $_SESSION['email'] = $to;
  echo "<script>alert('an OTP has been sent to admin email.');</script>";
  echo "<script>location.href='/admin-login/forgot-password.php';</script>";
}
}


if (isset($_POST['reset_password'])) {
  $otp = mysqli_real_escape_string($conn, $_POST['otp']);
  $pass = mysqli_real_escape_string($conn, $_POST['form_choose_password']);
  $email =  $_SESSION['email'];
  if ($otp == $_SESSION['admin_otp']) {
   $query2 = "UPDATE admin SET password = '$pass' WHERE email = '$email'";
if (mysqli_query($conn, $query2)) {
    unset($_SESSION['admin_otp']);
    unset($_SESSION['email']);
    session_destroy();
    require '../php-mailer/PHPMailerAutoload.php';
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
   $mail->addAddress($email);     // Add a recipient
   // $mail->addAddress('ellen@example.com');               // Name is optional
   $mail->addReplyTo('class@learnintern.com', 'Learnintern.com');

   $mail->isHTML(true);                                  // Set email format to HTML

   $mail->Subject = 'Password changed.';
   $mail->Body    = "LearnIntern.com admin password has been changed Successfullly. <br><br><br>
   If you haven't done this change your password now here: https://learnintern.com/admin-login/forgot-password.php";
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

   if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   }
else {
    echo "<script>alert('Password Changed Successfullly!');</script>";
    echo "<script>location.href= '/admin-login/';</script>";
  }
}}
  else {
    echo "<script>alert('wrong OTP!');</script>";
    echo "<script>location.href= '/admin-login/forgot-password.php';</script>";
  }

}
mysqli_close($conn);
?>
<?php if (isset($_SESSION['admin_otp'])) {?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Edit Profile | LearnIntern & Grow" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />

<!-- Page Title -->
<title>Reset Password | LearnIntern & Grow</title>

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
                  <a href="mailto:class@learnintern.com" class="text-white"><i class="fa fa-envelope-o text-white mr-5"></i>class@learnintern.com</a>
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
              <?php if (isset($_SESSION['user'])) {
               ?>
               <li class="m-0 pl-0 pr-10">
                 <a href="/logout.php"  class="text-white "><i class="fa fa-sign-out mr-5"></i>Logout</a>
               </li><?php }else{ ?>
              <li class="m-0 pl-10"> <a href="/login.php" class="text-white "><i class="fa fa-user-o mr-5 text-white"></i> Login /</a> </li>
              <li class="m-0 pl-0 pr-10"><a href="#promoModal1" data-lightbox="inline" class="text-white"><i class="fa fa-edit mr-5"></i>Register</a>
              </li><?php }?>
                 </ul>
               </div>
             </div>
           </div>
         </div>
         <section>
                <!-- popup modal -->
                <div id="promoModal1" class="modal-promo-box mfp-hide bg-img-cover inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/reg.jpg">
                  <div class="container pt-50 pb-50">
                    <div class="section-content">
                      <div class="row">
                        <div class="col-md-6 ">
                          <h2 class="text-theme-colored2 font-40 text-center ">Choose to Register</h2>
                            <div class="double-line-bottom-centered-theme-colored-2"></div>
                          <div class="row" class="text-white">
                            <div class="col text-center font-20">
                              <a href="/register.php" class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15 text-white" style="font-size:18px;width:250px;border-radius:25px;"> Register as a Student</a>
                            </div>
                            <div class="col text-center font-20">
                              <a href="/trainer-register.php" class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15 text-white" style="font-size:18px;width:250px;border-radius:25px;"> Register as a Trainer</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
         </section>

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
                  <li><a href="/free-modules.php">Free</a></li>
                  <li><a href="#">Premium</a></li>
                </ul>
              </li>
              <li><a href="/courses.php">Courses</a></li>
              <li><a href="/our-trainers.php">Our Trainers</a>  </li>
              <?php if (isset($_SESSION['user'])) {
               ?> <li><a href="/dashboard.php">Dashboard</a> <?php } ?>
               </li>
               <li class =""><a  href="/contact-us.php">Contact Us</a>
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
      <div class="container pt-50 pb-50">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Reset Password</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/">Home</a></li>
                <li><a href="/login.php">Login</a></li>
                <li class="active">Forgot password</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>


          <!-- Section: enter email -->

          <section>
            <div class="container">

                        <div class="row enter-otp">
                          <div class="col-xs-12 col-sm-8 col-md-8">
                            <form name="editprofile-form" method="post" action="forgot-password.php" onsubmit="return checkPass();">
                              <div class="icon-box mb-0 p-0">
                                <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                                  <i class="fa fa-key"></i>
                                </a>
                                <h4 class="text-gray pt-10 mt-0 mb-30">Reset Password</h4>
                              </div>
                              <hr>
                              <div class="icon-box mb-0 p-0 border  otp">
                                <a href="#" class="icon icon-rounded icon-sm pull-left mb-0 mr-5">
                                  <i class="fa fa-check text-theme-colored2"></i>
                                </a>
                                <h4 class="text-theme-colored2 pt-10 mt-0 mb-0">an OTP has been sent to your email!</h4>
                              </div>
                              <div class="row  otp">
                                <div class="form-group col-md-12">
                                  <label>Enter 6 digit OTP</label>
                                  <input name="otp" class="form-control otp" id="enterotp" maxlength="6" type="number" required>
                                </div>
                              </div>
                              <div class="row rpass">
                                <div class="form-group col-md-6">
                                  <label>Choose a new Password</label>
                                  <input name="form_choose_password" id="pass2" class="form-control" type="text" onsubmit="retuen checkPass()">
                                </div>
                                <div class="form-group col-md-6">
                                  <label>Re-enter Password</label>
                                  <input name="form_re_enter_password" onkeyup="checkPass();" id="pass1" class="form-control" type="text">
                                </div>
                                <div class="err-msg" style="display: none; color: red"> Password not matched!</div>
                              </div>

                              <script>
                              onload = document.querySelector('.err-msg').style.display = "none";
                              function checkPass(){
                              if ($('#pass1').val() !==  $('#pass2').val()) {
                                onload = document.querySelector('.err-msg').style.display = "block";
                                             return false;
                            }
                            else {
                              document.querySelector('.err-msg').style.display = "none";
                            }
                          }
                              </script>

                              <div class="form-group">
                                <button class="btn btn-dark btn-lg mt-15" name="reset_password" id="getotp" type="submit">Submit</button>
                              </div>
                            </form>
                          </div>
                        </div>

        </div>
        </section>
      </div>
    </div>
</div>
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
              <li><a href="/about-us.php">About Us</a></li>
              <li><a href="/mission.php">Our Mission</a></li>
              <li><a href="/terms-conditions.php">Terms and Conditions</a></li>
              <li><a href="/contact-us.php">Contact us</a></li>
              <li><a href="/faqs.php">FAQs</a></li>
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
<script src="/js/custom.js"></script>
<script>document.addEventListener('contextmenu', event => event.preventDefault());</script>
<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy', function (e) {
        e.preventDefault();
    });

    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});</script>
</body>
</html>

<?php } else {
  header("location: /admin-login");
} ?>
