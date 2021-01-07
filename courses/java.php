<?php session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Ethical Hacking | Learnintern & Grow" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<!-- Page Title -->
<title>Java Programming | Learnintern  & Grow</title>

<!-- Favicon and Touch Icons -->
<link href="/images/logo-and-favicon/favicon.png" rel="shortcut icon" type="image/png">
<link href="/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="/css/animate.css" rel="stylesheet" type="text/css">
<link href="/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="/css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<!-- <link href="css/preloader.css" rel="stylesheet" type="text/css"> -->
<!-- CSS | Custom Margin Padding Collection -->
<link href="/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="/css/colors/theme-skin-color-set4.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="/js/jquery-2.2.4.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="/js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style style="text/css">
.card {
  background-color: #fff;
  border: 2px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}
.card-body {
  padding: 1.25rem;
}
.card-title {
  margin-bottom: 0.75rem;
}
.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: #e09718;
  border-bottom: 1px solid #e09718;
  border-radius: 0.25rem;
}
.btn-colors {
  color: #fff;
  background-color: #e09718;
  border-color:#e09718;
}
.text-theme-colored2
{
  color: #fff;
}
.checked {
  color: orange;
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
                <div id="promoModal1" class="modal-promo-box mfp-hide bg-img-cover inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="/images/bg/reg.jpg">
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
              <li class="active"><a href="/courses.php">Courses</a></li>
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
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="/images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Java Programming</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/">Home</a></li>
                  <li><a href="/courses.php">Courses</a></li>
                <li class="active">Java Programming</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section About -->
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8">
              <h3 class="text-uppercase mt-0">Java Programming<span class="text-theme-colored2">Java Programming</span></h3>
					  	<div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20">Java is a high-level programming language developed by Sun Microsystems. It was originally designed for developing programs for set-top boxes and handheld devices, but later became a popular choice for creating web applications.</p>
              <a style="color:#3d3030" href="/about-us.php#review"><b>Ratings and Reviews :</b>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span> </p>
              <h3 class= "text-theme-colored2">Course fee : <span style="color:black">20000/- INR</span></h3>
            </br>
              <div class="pull-left sm-pull-none mb-sm-15">
              </br>
              <a style="width:170px;border-radius: 25px;" class="btn btn-colored btn-xs btn-flat btn-theme-colored2 mt-0" href="https://docs.google.com/forms/d/17qZMtJzQJDaOJMIoLc5Pqxuv0d_Qaho08NIcA5qcaPA/">JOIN LIVE CLASS</a>
              </br>
              <a style="color:orange;width:210px;border-radius: 25px;" class="btn btn-dark btn-xs btn-flat mt-0" href="/free-modules/javamodule.pdf" download><i class="fa fa-download"></i> &nbsp;Download Java Programming Module</a><br>
                <a style="color:orange;width:210px;border-radius: 25px;" class="btn btn-dark btn-xs btn-flat mt-0" href="/free-modules/javamodule.pdf" download><i class="fa fa-download"></i> &nbsp;Download Java Programming Module</a>
              </br>
              <ul>
            </br>
                <li><i class="fa fa-user text-theme-colored2 mr-5"></i> &nbsp;<b>7+ Years Experienced Trainer</b></li>
                <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i> &nbsp;<b>30 Days Course</b></li>
                <li><i class="fa fa-book text-theme-colored2 mr-5"></i> &nbsp;<b>10 Seats Available</b></li>
                <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i> &nbsp;<b>10 Hours Daily</b></li>
              </br>
                <li><i class="fa fa-briefcase text-theme-colored2 mr-5"></i> &nbsp;<b>Performance-Based Placement Support</b></li>
                <li><i class="fa fa-paper-plane text-theme-colored2 mr-5"></i> &nbsp;<b>Performance-Based Internship</b></li>
              </br>
                <li><i class="fa fa-credit-card text-theme-colored2 mr-5"></i> &nbsp;<b>Scholarship Available</b> (upto 50% Discount)</li>
                <li><i class="fa fa-trophy text-theme-colored2 mr-5"></i> &nbsp;<b>Certification after Completion of Course</b></li>
            </ul>
          </br>
             <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_FeVeqkHlxDC99H"> </script> </form>
           </br>
           <a style="border-radius: 25px;" class="btn btn-colored btn-flat btn-theme-colored2 mt-0" href="/placement-trends.php"><i class="fa fa-briefcase"></i> &nbsp; CHECK PLACEMENT TRENDS</a></br></br>
           <a style="border-radius: 25px;" class="btn btn-colored btn-flat btn-theme-colored2 mt-0" href="/comparison.php"><i class="fa fa-building"></i> &nbsp; CHECK ON OUR COMPETITORS</a>

              </div>
            </div>
              <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header"><b>SCHOLORSHIP AVAILABLE</b></h5>
                    <div class="card-body">
                      <h3 class="card-title">Discount upto 50%</h3>
                      <h4><b>Welcome to</b><a class="text-theme-colored2" href="/"> LearnIntern</a></h4>
                      <p><b>Here is a great oppurtunity for you!</b> </br></br>
                        Whether you’re a high school student, college student or adult-learner, fill up the form then get matched to scholarships and complete the course to grow your skill-set. </p>
                      <a href="https://docs.google.com/forms/d/17qZMtJzQJDaOJMIoLc5Pqxuv0d_Qaho08NIcA5qcaPA" class="btn btn-colors">Fill Now</a>
                    </div>
                  </div>
        </div>
        </div>


              </div>
            </article>
              <!--<article>
                <div class="event-small media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                  <div class="event-date text-center">
                    <ul class="text-white">
                      <li class="font-18 font-weight-700 border-bottom">28</li>
                      <li class="font-14 text-center text-uppercase mt-5">Feb</li>
                    </ul>
                  </div>
                  <div class="event-content pt-5">
                    <h5 class="media-heading font-16 font-weight-600 mb-5"><a href="#">Learning Spoken English</a></h5>
                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> 5.00 pm - 7.30 pm</span>
                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> 25 Newyork City.</span>
                  </div>
                </div>
              </article>-->
              <!--<article>
                <div class="event-small media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                  <div class="event-date text-center">
                    <ul class="text-white">
                      <li class="font-18 font-weight-700 border-bottom">28</li>
                      <li class="font-14 text-center text-uppercase mt-5">Feb</li>
                    </ul>
                  </div>
                  <div class="event-content pt-5">
                    <h5 class="media-heading font-16 font-weight-600 mb-5"><a href="#">Workshop Online Marketing</a></h5>
                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> 5.00 pm - 7.30 pm</span>
                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> 25 Newyork City.</span>
                  </div>
                </div>
              </article>-->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="layer-overlay overlay-theme-colored-9" data-bg-img="" data-parallax-ratio="0.7">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 mb-md-50">

            <h3 class="text-theme-colored2">COURSE DESCRIPTION</h3>
            <div class="double-line-bottom-theme-colored-2"></div>
            <h4 class="text-theme-colored2">Who this course is for:</h4>
            <ul style="list-style-type:disc">
                <li>Eager to learn Java Programming once and for all</li>
          <li>Looking forward to a career in software development</li>
            <li>Want to learn Java Programming for Web Designing</li>
              <li>Willing to write their own Java Programming tools</li>
                <li>Passionate for designing and development of softwares</li>
                  <li>Looking to enhance IT skills and be prepared for software development</li>
            </ul>
            <h4 class="text-theme-colored2">What you'll learn ?</h4>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;Introduction to Java Programming<br/>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;Installation and First Program<br/>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;Basics of Java Programming<br/>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;Control Structure and Its Flow<br/>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;Arrays<br/>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;java.lang Package<br/>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;OOPS Concepts<br/>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;Exception Handling<br/>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;File and Stream Handling – java.io package<br/>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;Multithreading<br/>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;Collections and Maps<br/>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;AWT – Abstract Window Toolkit<br/>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;Swing<br/>
              <p style="color:black">&#10004; &nbsp;&nbsp;&nbsp;etc<br/>
            <h4 class="text-theme-colored2">Requirements?</h4>
                <ul style="list-style-type:disc">
                  <li>Min 4GB of RAM for your computer.</li>
                  <li>Optional: USB wi-fi card (Only for wireless password cracking sections, will show how to get one in course)</li>
                </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Events -->
    <!-- Divider: Clients -->

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
  </diV>
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
