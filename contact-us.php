<?php session_start();
if (isset($_POST['submit']))
{ $db = mysqli_connect('192.145.239.50', 'datace9_uplink209', 'Uplink209@', 'datace9_learnintern');
  if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
  $name = mysqli_real_escape_string($db, $_POST['form_name']);
  $email = mysqli_real_escape_string($db, $_POST['form_email']);
  $phone = mysqli_real_escape_string($db, $_POST['form_phone']);
  $subject1 = mysqli_real_escape_string($db, $_POST['form_subject']);
  $message = mysqli_real_escape_string($db, $_POST['form_message']);
  $ip = $_SERVER['REMOTE_ADDR'];
  $to="kushwahad00@gmail.com";
  $to1="sharadmcp2003@gmail.com";
  $to2="class@learnintern.com";
 if ($_POST['captcha'] == $_SESSION['captcha'])
    {
          $query = "INSERT INTO contact_us (name, email, phone, subject, message, ip_address)
            VALUES('$name','$email', '$phone', '$subject1', '$message','$ip')";

            $result = mysqli_query($db, $query);
            if ($result)
            {
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

              $mail->Subject = 'New query from LearnIntern.com.';
              $mail->Body    = "<b>Name: </b>".$name."<br><b>Email:</b> ".$email."<br><b>Phone no.:</b> ".$phone.
              "<br><b>Subject:</b> ".$subject1."<br><b>Message:</b> ".$message.
              "<b><br>captcha:</b> ".$_SESSION['captcha']."<b><br>Visitor Ip:</b> ".$ip."<br><br>------<br>This e-mail was sent from a inquiry form on learnintern.com .
              (https://learnintern.com/contact-us.php)";
              // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

              if(!$mail->send()) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
              } else {

                $mail1 = new PHPMailer;

                // $mail->SMTPDebug = 4;                               // Enable verbose debug output

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
                 //$mail->addBCC($to2);

                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                $mail1->isHTML(true);                                  // Set email format to HTML

                $mail1->Subject = 'Thank you for contacted us.';
                $mail1->Body    = "Dear ".$name."<center>Thank you for contacting us</center><br>we have have received your mail
                We are the top 10 online learning plateform .
                we provide a better solution for your future.
                so, what are you waiting for :<a href= 'https://learnintern.com/courses.php'>click here</a> and choose your favorite course at minimum price than ever.
                  if you are a trainer register your <a href='https://learnintern.com/trainer-register.php'>here</a>.";
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                if(!$mail1->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail1->ErrorInfo;
                } else {
                  echo "<script>alert('your message has been sent.')</script>";
                }

              }

          }
          else
          {
            echo "<script>alert('failed to connect! try again after some time.')</script>";
            unset($_SESSION['captcha']);
            session_destroy();
          }
        }
        else {
          echo "<script>alert('wrong captcha value!');</script>";
          unset($_SESSION['captcha']);
          session_destroy();
        }
      }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Contact US | LearnIntern & Grow" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />

<!-- Page Title -->
<title>Contact Us | LearnIntern & Grow</title>

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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
.zoom {
    transition: transform .2s; /* Animation */
}
.zoom:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
.zoom1 {
    transition: transform .2s; /* Animation */
}
.zoom1:hover {
    transform: scale(1.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
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
               <li class ="active"><a  href="/contact-us.php">Contact Us</a>
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
              <h2 class="text-theme-colored2 font-36">Contact</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/">Home</a></li>
                <li class="active">Contact Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Have Any Question -->
    <section class="divider">
      <div class="container pt-60 pb-60">
        <div class="section-title mb-60">
          <div class="row">
            <div class="col-md-12">
              <div class="esc-heading small-border text-center">
                <h3>Have any Questions?</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-phone font-36 mb-10 text-theme-colored2 zoom"></i>
                <h4>Call Us</h4>
                <h6 href="tel:+91-837-782-5955" class="text-gray">Phone: +91-837-782-5955</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored2 zoom"></i>
                <h4>Address</h4>
                <h6 class="text-gray">D-23 A, Ground Floor, Gate No.1, Surya Enclave, New Delhi 110056</h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center">
                <i class="fa fa-envelope font-36 mb-10 text-theme-colored2 zoom"></i>
                <h4>Email</h4>
                <h6 href="mailto:class@learnintern.com" class="text-gray">class@learnintern.com</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider bg-lighter">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-7">
            <h3 class="line-bottom-theme-colored-2 mt-0 mb-30">Interested in discussing?</h3>

            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" method="post" action="contact-us.php">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name <small>*</small></label>
                    <input name="form_name" class="form-control zoom1" type="text" placeholder="Enter Your Name" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="form_email" class="form-control zoom1 email" required type="email" placeholder="Enter Email Id">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Subject <small>*</small></label>
                    <select name="form_subject" class="form-check-input form-check-label form-control zoom1" type="text" placeholder="Choose Subject" required>
                      <option value="choose"selected disabled> -- CHOOSE --</option>
                    <option value="Course Fee Inquiry">Course Fee Inquiry</option>
                    <option value="Admission Procedures">Admission Procedures</option>
                    <option value="Internship Opportunity">Internship Opportunity</option>
                    <option value="Job opportunity">Job opportunity</option>
                    <option value="Franchise">Franchise</option>
                    <option value="Others">Others</option>
                </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input name="form_phone" class="form-control zoom1" type="text" placeholder="Enter Phone" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea name="form_message" class="form-control zoom1 required" rows="5" placeholder="Enter Message" maxlength="500"></textarea>
              </div>
              <div class="row">
              <div class="col-sm-6">
                <img src="/image.php?captcha_text=<?php echo $_SESSION['captcha'];?> " id="capimg"><a href="javascript:void(0);" onclick="document.getElementById('capimg').src = 'image.php?' + Math.random(); return false;"><i class="fa fa-refresh"></i></a>
                <input type="text" name="captcha" required maxlength="6"  placeholder="Enter captcha" class="zoom1" style="border:1px solid #e4e0e0;">
              </div>
              <div class="col-sm-6">
              <div class="form-group">
                <button type="submit" id="submit" name="submit" class="zoom1 btn btn-dark btn-theme-colored btn-flat" data-loading-text="Please wait...">Send your message</button>
              </div>
            </div>
          </div>

            </form>
            <!-- Contact Form Validation-->
            <script type="text/javascript">
            jQuery('#contact_form').on('submit',function(){
     jQuery('#btn').html('Sending your message...');
     jQuery('#btn').attr('disabled',true);
   });
            </script>

          </div>
          <div class="col-md-5">

            <!-- Google Map HTML Codes -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56005.31829337057!2d77.0705625682618!3d28.679701929596554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d038b1e8e55af%3A0xfced9fd931411e2!2sSurya%20Enclave%2C%20Shakur%20Basti%2C%20Delhi%2C%20110063!5e0!3m2!1sen!2sin!4v1600068610789!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

          </div>
        </div>
      </div>
    </section>
  </div>
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
