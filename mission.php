<?php session_start();?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/j/learnpro/v4.0/demo/page-about2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Sep 2020 15:40:06 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Mission and Vision | LearnIntern & Grow" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Mission and Vision | LearnIntern & Grow</title>

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
<link href="css/preloader.css" rel="stylesheet" type="text/css">
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
<style style="text/css">
.text-theme-colored2
{
  color: #fff;
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
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Mission and Vision</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/">Home</a></li>
                <li class="active">Mission and Vision</li>
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
            <div class="col-md-12">
              <h3 class="text-uppercase mt-0">Mission <span class="text-theme-colored2">and Vision </span></h3>
					  	<div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20"><b>Welcome to</b> <a href="/" class="text-theme-colored2"> Learnintern.</a></p>
              <p>These mission and vision outline the target of <a href="https://essentialservices.in/" class="text-theme-colored2">Essential Service</a> Outsource Pvt Ltd’s Website, located at <a href="/" class="text-theme-colored2"> Learnintern.com</a>. </p>
              <p>Our vision is to become an educational set up that works towards the overall development of its students by strengthening the brightest and young minds to achieve and fly high in the sky so as to achieve best in their lives.
              </p><p>At <a href="/" class="text-theme-colored2"> Learnintern</a>, we nurture the students to explore their full potential so as to boost their self-confidence and moral in order to realise their dreams by advanced teaching methodology.</p>
              <p>At <a href="/" class="text-theme-colored2"> Learnintern</a>, students gain an understanding of the courses they enroll for and get mentorship in career directions while enhancing the educational process as they become the next generation of professionals who are going to run the country’s economy and steer it towards growth and prosperity.</p>
              <p>Our mission is to deliver quality education to each and every student and to ensure his or her success. We commit ourselves to excellent education and boast of a number of faculty members who are totally devoted and committed so as to build trust and compassion between teachers and students and ensure that the students achieve what they came for.</p>
              <h4 class="text-uppercase mt-0"><span class="text-theme-colored2">Pledge </span></h4>
              <p><i>"We believe that every student has the right to be treated with respect and consideration. Therefore at <a href="/" class="text-theme-colored2"> Learnintern</a> we care about students. We care about their families who are worried, we care about our colleagues and how we provide care, and because we care we will be sincere, compassionate and sensitive to make a DIFFERENCE in the lives we touch.""</i></p>
              <h4 class="text-uppercase mt-0">Our <span class="text-theme-colored2">Values </span></h4>
					  	<div class="double-line-bottom-theme-colored-2"></div>
              <ul style="list-style-type:disc">
                <li><b>Adore :</b> Loving what we do makes this process a delight</li>
                <li><b>Passion :</b> Commitment in heart and soul reflects in our work,</li>
                <li><b>Quality :</b> We offer best or nothing</li>
                <li><b>Integrity :</b> Integrity through honesty, loyalty, fairness and accountability and our guiding lights.</li>
                <li><b>Trust :</b> We believe in creating an environment with its stakeholder, employees and society at large.</li>
                <li><b>Equality :</b> <a href="/" class="text-theme-colored2"> Learnintern</a> employees are treated as a family.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <!--<section class="layer-overlay overlay-theme-colored-9" data-bg-img="images/bg/bg1.jpg" data-parallax-ratio="0.7">
      <div class="container pt-90 pb-90">
        <div class="row mt-30">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mb-20 text-theme-colored2"></i>
              <h2 data-animation-duration="2000" data-value="754" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
              <h5 class="text-white text-uppercase">Happy Students</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-notebook mb-20 text-theme-colored2"></i>
              <h2 data-animation-duration="2000" data-value="675" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
              <h5 class="text-white text-uppercase">Approved Courses</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-users mb-20 text-theme-colored2"></i>
              <h2 data-animation-duration="2000" data-value="675" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
              <h5 class="text-white text-uppercase">Certified Teachers</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-study mb-20 text-theme-colored2"></i>
              <h2 data-animation-duration="2000" data-value="1248" class="animate-number text-white font-38 font-weight-400 mt-0 mb-15">0</h2>
              <h5 class="text-white text-uppercase">Graduate Students</h5>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Team -->
    <!--<section id="team" class="bg-silver-deep">
      <div class="container">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Meet our <span class="text-theme-colored2">Team</span></h2>
              <p class="text-uppercase mb-0">We Have Highly Qualified Team</p>
					  	<div class="double-line-bottom-theme-colored-2"></div>
						</div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="images/team/1.jpg">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="https://www.facebook.com/learnintern/"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/Learnintern1/"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.instagram.com/learnintern/"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="https://join.skype.com/invite/U1NxsJTD2cW5?call"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">Sumana</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Career Counselor</h6>
                <!--<p class="hidden-md">Lorem ipsum dolor sit ametcon secte adipis elit. Debitis magnam placeat dignissimos saperator ellium</p>-->
              <!--</div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="images/team/2.jpg">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="https://www.facebook.com/learnintern/"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/Learnintern1/"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.instagram.com/learnintern/"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="https://join.skype.com/invite/U1NxsJTD2cW5?call"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">Deepak Kumar</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Web Developer</h6>
                <!--<p class="hidden-md">Lorem ipsum dolor sit ametcon secte adipis elit. Debitis magnam placeat dignissimos saperator ellium</p>-->
            <!--  </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="images/team/3.jpg">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="https://www.facebook.com/learnintern/"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/Learnintern1/"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.instagram.com/learnintern/"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="https://join.skype.com/invite/U1NxsJTD2cW5?call"><i class="fa fa-skype"></i></a></li>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">Sharad Goel</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Digital Marketing Expert</h6>
                <!--<p class="hidden-md">Lorem ipsum dolor sit ametcon secte adipis elit. Debitis magnam placeat dignissimos saperator ellium</p>-->
            <!--  </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="images/team/4.jpg">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="https://www.facebook.com/learnintern/"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/Learnintern1/"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.instagram.com/learnintern/"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="https://join.skype.com/invite/U1NxsJTD2cW5?call"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">Sanjhee Shreevastav</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Legal Consultant</h6>
                <!--<p class="hidden-md">Lorem ipsum dolor sit ametcon secte adipis elit. Debitis magnam placeat dignissimos saperator ellium</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>-->
  <!-- end main-content -->

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
