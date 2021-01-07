<?php
session_start();
$email = $password = "";
$email_err = $password_err = "";
if(isset($_POST['login_user'])){
$link = mysqli_connect('192.145.239.50', 'datace9_uplink209', 'Uplink209@', 'datace9_learnintern');
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    if(empty($email_err) && empty($password_err)){
      if(trim($_POST["register"]) == 'student'){
        $sql = "SELECT email, password FROM students WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($link, $sql);
        if(mysqli_num_rows($result)){
          session_start();
          $_SESSION['user'] = $email;
          $_SESSION['type'] = "students";
          header('location: /dashboard.php');
        }
        else {
          $email_err = "Wrong Details";
          $password_err = "Wrong Details";
          echo "<script>location.href='/login.php'</script>";
        }}
        if(trim($_POST["register"]) == 'trainer'){
          $sql = "SELECT email, password FROM trainers WHERE email = '$email' AND password = '$password'";
          $result = mysqli_query($link, $sql);
          if(mysqli_num_rows($result)){
            session_start();
            $_SESSION['user'] = $email;
            $_SESSION['type'] = "trainers";
            header('location: /dashboard.php');
          }
          else {
            $email_err = "Wrong Details";
            $password_err = "Wrong Details";
            echo "<script>location.href='/login.php'</script>";
          }}

}
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="max-width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Login - Learnintern" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<meta name="" content="" />

<!-- Page Title -->
<title>Login - Learnintern</title>

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
<link email="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
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

<!-- Revolution Slemailer 5.x CSS settings -->
<!-- <link  href="js/revolution-slemailer/css/settings.css" rel="stylesheet" type="text/css"/> -->
<!-- <link  href="js/revolution-slemailer/css/layers.css" rel="stylesheet" type="text/css"/> -->
<!-- <link  href="js/revolution-slemailer/css/navigation.css" rel="stylesheet" type="text/css"/> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set4.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slemailer 5.x SCRIPTS -->
<!-- <script src="js/revolution-slemailer/js/jquery.themepunch.tools.min.js"></script> -->
<!-- <script src="js/revolution-slemailer/js/jquery.themepunch.revolution.min.js"></script> -->
<style>
.zoom {
    transition: transform .2s; /* Animation */
}
.zoom:hover {
    transform: scale(1.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>

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
</head>
<body>
  <div id="wrapper" class="clearfix">
  <div class="header-middle p-0 bg-lightest xs-text-center">
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
    <div class="container position-relative p-20 mt-0 container-fluid border-rounded" style="max-width:550px; width: 500px">

        <div class="col-md-12">
          <!-- login Form Starts -->
          <form  name="login_form" class="reservation-form mb-0 bg-silver-deep" method="post" action="login.php" onsubmit="return validate();">

            <h3 class="text-center mb-10 mt-0 pt-30 text-theme-colored2">Enter Your Credentials</h3>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group mb-30 pl-20 pr-20">
                  <div  class="form-check text-center">
                    <input type="radio" name="register" class="form-check-input" id="1" value="student" required> <label for="1" class="form-check-label">I am an student</label> &nbsp;&nbsp;&nbsp;
                    <input type="radio" name="register" id="2" class="form-check-input" value="trainer" required > <label for="2" class="form-check-label">I am a trainer</label>
                </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30 pl-20 pr-20 <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                  <input placeholder="Enter Your email" id="email" name="email" class="zoom form-control" type="email">
                  <span class="help-block"><?php echo $email_err; ?></span>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30 pl-20 pr-20 <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                  <input placeholder="Enter Your Password" id="password" name="password" class="zoom form-control"  type="password">
                   <span class="help-block"><?php echo $password_err; ?></span>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-0 mt-0 pl-20 pr-20">
                  <button name="login_user" id="login" type="submit" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-lg btn-flat" style="border-radius:25px;" data-loading-text="Please wait...">Login Now</button>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mt-15 pl-20 pr-20 pull-left">
                  <p>Don't have any account? Register now!<br><a id="register" href="/register.php" class="text-theme-colored2 ">Register as Student</a> OR <a id="register" href="/trainer-register.php" class="text-theme-colored2 ">Register as Trainer</a> </p>
                </div>
                <div class="form-group mt-15 pull-right">
                  <a id="" href="/forgot-password.php" class="text-theme-colored2">Forget Password?</a>
                </div>
              </div>
            </div>
          </form>


</div>
</div>

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
