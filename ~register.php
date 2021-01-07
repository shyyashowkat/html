<?php
$name = "";
$email = "";
$phone = "";
$state =  "";
$audience = "";
$password= "";
$confirm_password= "";
$username = "";
$ip_address = "";
$registration_time = "";
$errors = array();
$db = mysqli_connect('192.145.239.50', 'datace9_uplink209', 'Uplink209@', 'datace9_learnintern');

if (isset($_POST['reg_user'])) {
// Registration code

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $state = mysqli_real_escape_string($db, $_POST['state']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirm_password= mysqli_real_escape_string($db, $_POST['confirm_password']);
    $ip_address = $_SERVER['REMOTE_ADDR'];
    date_default_timezone_set('Asia/Kolkata');
    $registration_time = date( 'd-m-Y h:i:s A', time () );

    if (count($errors) == 0) {



          $query = "INSERT INTO students (id, name, email, phone, state, password, ip_address, registration_time)
                    VALUES('$username', '$name','$email', '$phone', '$state', '$password','$ip_address', '$registration_time')";

         $result = mysqli_query($db, $query);
         if($stmt = mysqli_prepare($db, $query)){
           // Bind variables to the prepared statement as parameters
           mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);

           // Set parameters
           $param_email = $email;
           $param_password = $password; // Creates a password hash
         }


        if ($result) {

       echo "<h2 style='color:#37BF91'><center> You have Registered Succesfully! Log in with same details. </center></h2>";
       echo "<h6 style='color:grey'><center> Your details have been sent to your Email Id </center></h6>";

       $to="kushwahad00@gmail.com";
       $to1="sharadmcp2003@gmail.com";
       $to2="class@learnintern.com";

       $subject="New User Registered in learnintern.com";

       $body="Name: ".$name."\n\nEmail: ".$email."\n\nPhone: ".$phone."\n\nRegistration Time: ".$registration_time.
      "\n\nState: ".$state."\n\nRegistered as a: ".$_POST['register'].
       "\n\ncaptcha: "."\n\nVisitor Ip: ".$ip_address."\n\n\n\n\n------\nThis e-mail was sent from learnintern.com .
       (https://learnintern.com/)";

       $headers="From:learnintern.com <class@learnintern.com>";

       $user_body="Dear ".$name."\n Thanks for registering with us,\n
       here are you credentials: \n\n username: ".$username."\n Email: ".$email."\n Password: ".$password."
       \n use you login credentials to login here: https://learnintern.com/login.php
       \n\n\n\n------\nDo not share your credentials with anyone.";

       if(mail($to,$subject,$body,$headers) && mail($to1,$subject,$body,$headers) && mail($to2,$subject,$body,$headers)){
         mail($email,"Here are your credentials of learnintern.com.",$user_body,$headers);


        // Page on which the user will be redirected after logging in

       echo "<script>location.href='/login.php';</script>";
       }
       else{
        echo "<h2 style='color:#37BF91'><center> Some problem occured! Try again later. </center></h2>";
         echo "<h6 style='color:red'><center> This Email Id is already used. Try another Email Id! </center></h6>";
       }
     }
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
<meta name="description" content="Students Registration - Learnintern" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<meta name="" content="" />

<!-- Page Title -->
<title>Students Registration | Learnintern</title>

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

<!-- Revolution Slider 5.x SCRIPTS -->
<!-- <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script> -->
<!-- <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> -->
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
<style>
.area{margin: 30px; background-color: #EEE; border: 1px solid #c5c5ff}
</style>
</head>
<body>
  <body class="">
  <div id="wrapper" class="clearfix">
    <!-- preloader -->
    <!-- <div id="preloader">
      <div id="spinner">
        <img alt="" src="images/preloaders/5.gif">
      </div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div> -->

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
                <form id="registration_form" name="registration_form" class="reservation-form bg-silver-deep" method="post" action="register.php" onsubmit="return confirmPassword()">
                <h3 class="text-center mt-0 mb-30">REGISTER<span class="text-theme-colored2"> AS AN STUDENT</span></h3>
                <div class="area">
                  <label class="ml-10" for=""> Personal info:</label>
                <div class="row pl-20 pr-20">
                    <div class="col-md-6 mt-20">
                      <div class="form-group mb-20">
                        <input placeholder="Enter Your Name" id="name" name="name" required="Required" class="form-control zoom" aria-required="true" type="text">
                      </div>
                    </div>
                    <div class="col-md-6 mt-20">
                      <div class="form-group mb-20">
                        <input placeholder="Enter a Valid Email Id" id="email" name="email" class="form-control zoom" required="Required" aria-required="true" type="email" >
                      </div>
                    </div>
                  </div>
                  <div class="row pl-20 pr-20">
                    <div class="col-md-6">
                      <div class="form-group mb-20">
                        <input placeholder="Enter Your Mobile Number(min 10 Digits)" id="phone" name="phone" required="Required" class="form-control zoom" aria-required="true" type="tel" maxlength="10" pattern="[6-9]{1}[0-9]{9}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-30">
                        <input placeholder="Enter Your State" id="state" name="state" required="Required" class="form-control zoom" aria-required="true" type="text">
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="area">
                   <label for="" class="ml-10">Secure your account: </label>
                  <div class="row pl-20 pr-20">
                    <div class="col-md-6 mt-20">
                      <div class="form-group mb-20">
                        <input placeholder="Enter Your Password" id="password" onkeyup="CheckPasswordStrength(this.value)" name="password" required="Required" class="zoom form-control" aria-required="true" type="password" >
                        <div><span id="password_strength"></span></div>
                      </div>
                    </div>
                    <div class="col-md-6 mt-20">
                      <div class="form-group mb-20">
                        <input placeholder="Confirm Password" id="confirm_password" name="confirm_password" required="Required" class="zoom form-control" aria-required="true" type="password">
                        <div class="alert" id="error" style="color:red">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row pl-20 pr-20">
                      <div class="col-md-6 text-center">
                          <img src = " /image.php?captcha_text = <?php echo $_SESSION['captcha']; ?> " id="capimg" style="outline:none;" alt="Captacha code" id="capimg">
                          <a href="javascript: void(0);" onclick="document.getElementById('capimg').src = '/image.php?' + Math.random(); return false"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-md-6 mt-20">
                          <div class="form-group mb-20">
                          <input type="text" name="captcha" class="form-control"  placeholder="Enter captcha" style="border:1px solid #eee" class=" zoom ml-20 mr-20">
                     </div>
                   </div>
                 </div>
                 </div>
               <div class="row">
                    <div class="col-md-12">
                      <div class="form-group ml-50 mr-50">
                        <button type="submit" name="reg_user" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-lg btn-flat" style="border-radius:25px;" data-loading-text="Please wait...">Submit Now</button>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mt-15 text-center">
                        <p>Already have an account? <a id="login" href="login.php" class="text-theme-colored2 text-underline">Sign In Here</a> </p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mt-15 text-center">
                        <p>Want to be a Trainer? <a id="" href="/trainer-register.php" class="text-theme-colored2 text-underline">Click here!</a> </p>
                      </div>
                    </div>
                    </div>
                  </div>
                  </div>
                </form>
              </div>
              </div>


          <script type="text/javascript">
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
