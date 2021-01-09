<?php session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Courses | LearnIntern & Grow" />
    <meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
    <!-- Page Title -->
    <title>Courses | LearnIntern & Grow </title>
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
          transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
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
        <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
          <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
              <div class="row">
                <div class="col-md-6">
                  <h2 class="text-theme-colored2 font-36">Courses</h2>
                  <ol class="breadcrumb text-left mt-10 white">
                    <li><a href="/">Home</a></li>
                    <li class="active">Courses</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Available <span class="text-theme-colored2">Courses</span></h2>
              <p class="text-uppercase mb-0">Choose according to your interest and improve your skillset.</p>
              <div class="double-line-bottom-theme-colored-2">
              </div>
              <p>There are various kinds of courses available. Courses serve a multitude of purposes for different students. They are sometimes used to bridge the gap between different phases of academic study, or to provide additional professional training and qualifications. There are <span class="text-theme-colored2">BEGINNER</span> and <span class="text-theme-colored2">ADVANCE</span> courses in a wide variety of subjects. The variety of different courses can be overwhelming - don't let it stop you! Start your search by looking at the most popular courses listed below.</p>
            </div>
          </div>
        </div>

        <!-- Section: Courses -->
        <section id="courses">
          <div class="container pb-40">
            <div class="section-title text-center">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="title">Digital Marketing <span class="text-theme-colored2">Courses</span></h2>
                  <p class="text-uppercase mb-0">Choose Your Desired Course</p>
                  <div class="double-line-bottom-centered-theme-colored-2"></div>
                </div>
              </div>
            </div>

            <div class="row mtli-row-clearfix">
                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                  <div class="course-single-item style2 text-center mb-40">
                                                    <div class="course-thumb">
                                                      <img class="img-fullwidth" alt="" src="/images/course/digital-marketing.jpg">
                                                      <div class="price-tag">10000 INR</div>
                                                      <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                                                    </div>
                                                    <div class="course-details clearfix p-20 pt-15">
                                                      <div class="course-top-part pull-left mr-40">
                                                        <a href="/courses/basic1-digital-marketing.php"><h4 class="mt-0 mb-5">Basics of Digital Marketing</h4></a>
                                                        <ul class="list-inline">
                                                          <li class="review-stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                          </li>
                                                          <li>133 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                                                          <li>255 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                                                        </ul>
                                                      </div>
                                                      
                                                      <div class="clearfix"></div>
                                                      <p class="course-description mt-20">Learn Basic Concepts Of Digital Marketing From Industry Experts Give A Boost To Your Career. Practical Exposure.</p>
                                                      <ul class="list-inline course-meta mt-15">
                                                        <ul class="list-inline">
                                                          <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                                                          <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                                                          <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                                                        </ul>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                  <div class="course-single-item style2 text-center mb-40">
                                                    <div class="course-thumb">
                                                      <img class="img-fullwidth" alt="" src="/images/course/digital-marketing2.jpg">
                                                      <div class="price-tag">25000 INR</div>
                                                      <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                                                    </div>
                                                    <div class="course-details clearfix p-20 pt-15">
                                                      <div class="course-top-part pull-left mr-40">
                                                        <a href="/courses/basic2-digital-marketing.php"><h4 class="mt-0 mb-5">Basic of Complete Digital Marketing</h4></a>
                                                        <ul class="list-inline">
                                                          <li class="review-stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                          </li>
                                                          <li>143<i class="fa fa-comments-o text-theme-colored2"></i></li>
                                                          <li>155 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                                                        </ul>
                                                      </div>
                                                      <div class="clearfix"></div>
                                                      <p class="course-description mt-20">Learn Basic Concepts Of Complete Digital Marketing From Industry Experts Give A Boost To Your Career. Get Practical Exposure.</p>
                                                      <ul class="list-inline">
                                                        <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>45 Days</li>
                                                       <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                                                       <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                  <div class="course-single-item style2 text-center mb-40">
                                                    <div class="course-thumb">
                                                      <img class="img-fullwidth" alt="" src="/images/course/digital-marketing3.jpg">
                                                      <div class="price-tag">20000 INR</div>
                                                      <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                                                    </div>
                                                    <div class="course-details clearfix p-20 pt-15">
                                                      <div class="course-top-part pull-left mr-40">
                                                        <a href="/courses/advance1-digital-marketing.php"><h4 class="mt-0 mb-5">Advance Digital Marketing</h4></a>
                                                        <ul class="list-inline">
                                                          <li class="review-stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                          </li>
                                                          <li>243 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                                                          <li>355 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                                                        </ul>
                                                      </div>
                                                      <div class="clearfix"></div>
                                                      <p class="course-description mt-20">Learn Advance Concepts Of Digital Marketing From Industry Experts Give A Boost To Your Career. Practical Exposure.</p>
                                                      <ul class="list-inline">
                                                        <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>30 Days</li>
                                                        <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                                                        <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                                  <div class="course-single-item style2 text-center mb-40">
                                                    <div class="course-thumb">
                                                      <img class="img-fullwidth" alt="" src="/images/course/digital-marketing4.jpg">
                                                      <div class="price-tag">35000 INR</div>
                                                      <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                                                    </div>
                                                    <div class="course-details clearfix p-20 pt-15">
                                                      <div class="course-top-part pull-left mr-40">
                                                        <a href="/courses/advance2-digital-marketing.php"><h4 class="mt-0 mb-5">Advance of Complete Digital Marketing</h4></a>
                                                        <ul class="list-inline">
                                                          <li class="review-stars">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                          </li>
                                                          <li>233 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                                                          <li>345 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                                                        </ul>
                                                      </div>
                                                      <div class="clearfix"></div>
                                                      <p class="course-description mt-20">Learn Advance Concepts Of Complete Digital Marketing From Industry Experts Give A Boost To Your Career. Practical Exposure.</p>
                                                      <ul class="list-inline">
                                                        <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>60 Days</li>
                                                        <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                                                        <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                                                      </ul>
                                                    </div>
                                                  </div>
                                                </div>
            </div>

            <div class="row mtli-row-clearfix">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="images/course/email.jpg">
                  <div class="price-tag">12000 INR</div>
                  <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="/courses/basic-email-marketing.php"><h4 class="mt-0 mb-5">Basics of Email Marketing</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                      <li>43 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                  <p class="course-description mt-20">Email marketing is a digital marketing strategy based on sending emails and developing relationships with prospects and customers.</p>
                  <ul class="list-inline">
                  <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="/images/course/yt-marketing.jpg">
                  <div class="price-tag">12000 INR</div>
                  <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="/courses/youtube-marketing.php"><h4 class="mt-0 mb-5">Youtube Marketing</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </li>
                      <li>33 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>98 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul>
                  </div>
                      <div class="clearfix"></div>
                      <p class="course-description mt-20">This course will help you to learn how to create and optimize a successful YouTube channel.</p>
                      <ul class="list-inline">
                        <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                        <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                        <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="images/course/email1.jpg">
                  <div class="price-tag">12000 INR</div>
                  <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="/courses/email-marketing-advance.php"><h4 class="mt-0 mb-5">Advance Email Marketing + Server Setup</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                      <li>75 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                  <p class="course-description mt-20">This Email marketing course will help you to form a direct market that uses email to promote your business's products or services. It can help make your customers aware of your latest items or offers.</p>
                  <ul class="list-inline">
                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="/images/course/affliate.jpg">
                  <div class="price-tag">12000 INR</div>
                  <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="/courses/affliate-marketing.php"><h4 class="mt-0 mb-5">Affiliate Marketing</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </li>
                      <li>89 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>223 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                  <p class="course-description mt-20">Affiliate marketing is a popular tactic to drive sales and generate significant online revenue. Extremely beneficial to both brands and affiliate marketers, the new push towards less traditional marketing tactics has paid off.</p>
                  <ul class="list-inline">
                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                </ul>
                </div>
              </div>
            </div>
            </div>

            <div class="row mtli-row-clearfix">
             <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="images/course/mobad.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/mobile-ad.php"><h4 class="mt-0 mb-5">Mobile Ads</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </li>
                        <li>14 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">In mobile ads masterclass, you will learn to track and create eye-catching mobile content that impresses your followers.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="images/course/ad.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                    <div class="course-details clearfix p-20 pt-15">
                      <div class="course-top-part pull-left mr-40">
                        <a href="/courses/adsense.php"><h4 class="mt-0 mb-5">Adsense - Youtube</h4></a>
                        <ul class="list-inline">
                          <li class="review-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                          </li>
                          <li>56 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                          <li>98 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                        </ul>
                      </div>
                      <div class="clearfix"></div>
                      <p class="course-description mt-20">This course will help you to learn thr features of AdSense , which can be used to earn money from your website.</p>
                      <ul class="list-inline">
                        <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                        <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                        <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                      </ul>
                    </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="images/course/sms.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                    <div class="course-details clearfix p-20 pt-15">
                      <div class="course-top-part pull-left mr-40">
                        <a href="/courses/whatsapp-marketing.php"><h4 class="mt-0 mb-5">WhatsApp Marketing</h4></a>
                        <ul class="list-inline">
                          <li class="review-stars">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                          </li>
                          <li>12 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                          <li>98 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                        </ul>
                      </div>
                      <div class="clearfix"></div>
                      <p class="course-description mt-20">The beginners guide to SMS marketing course provides you with everything you need to know about a General Overview of SMS Marketing.</p>
                      <ul class="list-inline">
                        <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                        <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                        <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                      </ul>
                    </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="images/course/smm1.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/smm-advance.php"><h4 class="mt-0 mb-5">Social Media Marketing - Advance</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </li>
                        <li>24 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>61 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">Learn to market your Product and services on social media. Explore features and strategies which can help you to boost your sales and online presence using the popular social media platform.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>14 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mtli-row-clearfix">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="images/course/inbound.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/inbound-marketing.php"><h4 class="mt-0 mb-5">Inbound Marketing</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li>15 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>66 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">Learn how to attract customers to you so you don't have to chase them down.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="images/course/content.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/content-writing.php"><h4 class="mt-0 mb-5">Content Writing and Influencer marketing</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </li>
                        <li>115 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>168 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">This course will make you an expert communicator who is responsible for creating online written content – blogs, articles, ebooks, white papers, social media copy, infographic copy.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="images/course/ecom.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/ecommerce.php"><h4 class="mt-0 mb-5">Ecommerce</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li>15 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>66 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">A detailed Course to understand how to think out of the box brings more earnings and beats competition.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>14 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="images/course/sms1.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/sms-marketing.php"><h4 class="mt-0 mb-5">SMS Marketing</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half"></i>
                          <i class="fa fa-star-o"></i>
                          <i class="fa fa-star-o"></i>
                        </li>
                        <li>14 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">This Course will help you to learn how to write text messages to prospects and customers to increase brand awareness, boost engagement, and even generate salesate marketers.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mtli-row-clearfix">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="images/course/smm.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/smm-beginner.php"><h4 class="mt-0 mb-5">Social Media Marketing - Beginner</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </li>
                        <li>24 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>61 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">Learn to market your Product and services on social media. Explore features and strategies which can help you to boost your sales and online presence using the popular social media platform. </p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
                                        
            <div class="section-title text-center">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="title">Programming <span class="text-theme-colored2">Courses</span></h2>
                  <p class="text-uppercase mb-0">Choose Your Desired Course</p>
                  <div class="double-line-bottom-centered-theme-colored-2"></div>
                </div>
              </div>
            </div>

            <div class="row mtli-row-clearfix">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="/images/course/hacking.jpg">
                    <div class="price-tag">24000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/hacking.php"><h4 class="mt-0 mb-5">Ethical Hacking</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li>43 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">Learn ethical hacking as well as website hacking under the supervision of professional.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>15 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" style="height:200px" alt="Python and Django" src="/images/course/python_django.jpeg">
                    <div class="price-tag">25000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/python_django.php"><h4 class="mt-0 mb-5">Python and Django</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li>43 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">Python and Django is used by professional software developers, which is used for development of web Apps.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>20 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>7 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                 </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="Java programming" src="/images/course/java.png">
                    <div class="price-tag">20000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/java.php"><h4 class="mt-0 mb-5">Java programming</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li>4 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>98 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">Learn Core and Advanced Java to become industry ready Java Developer.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>30 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>10 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>10 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="C,CPP, DSA" src="/images/course/c_cpp_dsa.jpeg">
                    <div class="price-tag">15000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/c_cpp_dsa.php"><h4 class="mt-0 mb-5">C,C++ and Data Structures</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li>50 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>78 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">learn C C++ and Data Structure and Algorithm, whic is the base for the Development of real world softwares.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>15 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>15 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>

              
            </div>


            <div class="section-title text-center">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="title">Data Science <span class="text-theme-colored2">Courses</span></h2>
                  <p class="text-uppercase mb-0">Choose Your Desired Course</p>
                  <div class="double-line-bottom-centered-theme-colored-2"></div>
                </div>
              </div>
            </div>

            <div class="row mtli-row-clearfix">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="/images/course/seo1.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/seo.php"><h4 class="mt-0 mb-5">SEO Onpage and Off Page</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li>11 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">This course includes the expertise required for your promotion methods, taking into account the amount of exposure something gets on social media.</p>
                    <ul class="list-inline course-meta mt-15">
                      <ul class="list-inline">
                        <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>15 Days</li>
                        <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                        <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                      </ul>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="/images/course/smo1.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/smo.php"><h4 class="mt-0 mb-5">Social Media Optimizations (FB, Linkedin, Twitter, Instagram)</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li>28<i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">This course will add expertise in you by adding knowledge of how to increase awareness of new products and services, connect with customers, and ameliorate potential damaging news.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="/images/course/analytics.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/analytics.php"><h4 class="mt-0 mb-5">Analytics - Google</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li>98 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>222 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">This course will help you to learn a tool that you need to better understand your customers. You can then use those business insights to take action.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="/images/course/cloud_azure_and_aws_salesforce.jpeg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/cloud_azure_and_aws_salesforce.php"><h4 class="mt-0 mb-5">Cloud Aazure and AWS Salesforce</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li>98 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>222 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">cloud computing is the delivery of computing services—including servers, storage, databases, networking, software, analytics, and intelligence—over the Internet (“the cloud”) to offer faster innovation, flexible resources, and economies of scale.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mtli-row-clearfix">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="/images/course/data_science_with_python.jpeg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/data_science_with_python.php"><h4 class="mt-0 mb-5">Data Science with Python</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li>98 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>222 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">Data science is an inter-disciplinary field that uses scientific methods, processes, algorithms and systems to extract knowledge and insights from many structural and unstructured data. Data science is related to data mining, machine learning and big data.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div> 
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="/images/course/data_visualisation_with_power_bi_and_tableau.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/data_visualisation_with_power_bi_and_tableau.php"><h4 class="mt-0 mb-5">Data Visualisation with  power BI and Tableau</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li>98 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>222 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">While Tableau strongly focuses on visuals, Power BI offers features of data manipulation first and provides simple visualizations later. Uploading data is easy in Power BI, and selecting different blueprint visualizations, a user can drag the data and drop in the visualization through a sidebar.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>                                     
            </div>

            <div class="section-title text-center">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="title">Non IT<span class="text-theme-colored2">Courses</span></h2>
                  <p class="text-uppercase mb-0">Choose Your Desired Course</p>
                  <div class="double-line-bottom-centered-theme-colored-2"></div>
                </div>
              </div>
            </div>          
                                                  
            <div class="row mtli-row-clearfix">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="images/course/basic.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/basic-computer-course.php"><h4 class="mt-0 mb-5">Basic Computer Course - Word | Excel | PPT | Notepad++ | Google Docs | Google Sheets</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li>125 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>268 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">After completing the course the incumbent is able to the use the computer for basic purposes of preparing his personnel/business letters, viewing information on anything, or use computer for any digital purpose.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>14 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="/images/course/video.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/video-editing.php"><h4 class="mt-0 mb-5">Video Ads Making & Video Editing</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </li>
                        <li>33 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>98 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">This course will help you to learn how to create and optimize a good quality video.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="images/course/repair.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/computer-repair-beginner.php"><h4 class="mt-0 mb-5">Computer Repair Course - Beginner</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </li>
                        <li>32 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">Learn slow computer fix and other tricks and secrets to fixing your own computer with basic computer repair course.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="/images/course/english1.jpg">
                    <div class="price-tag">24000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/english.php"><h4 class="mt-0 mb-5">Learn English - Spoken and Written</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </li>
                        <li>87 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>289 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">Select your level, from beginner (CEFR level A1) to advanced (CEFR level C2), and improve your writing and speaking skills as an expert.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mtli-row-clearfix">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="images/course/repair1.jpg">
                  <div class="price-tag">12000 INR</div>
                  <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="/courses/computer-repair-advance.php"><h4 class="mt-0 mb-5">Computer Repair Course - Advance</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      </li>
                      <li>88 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>181 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                  <p class="course-description mt-20">After completing this Hardware Course you will become expert in computer hardware repairing Engineering of desktop and laptop computers.</p>
                  <ul class="list-inline">
                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="images/course/hr.jpg">
                  <div class="price-tag">12000 INR</div>
                  <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="/courses/HR.php"><h4 class="mt-0 mb-5">Human Resource Management</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </li>
                      <li>78 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>134 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                  <p class="course-description mt-20">his course covers every aspect of human resource management from the planning, recruitment, selection, training, performance management, to the compensation.</p>
                  <ul class="list-inline">
                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="images/course/filmora_video_editing.png">
                  <div class="price-tag">10000 INR</div>
                  <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="/courses/filmora_video_editing.php"><h4 class="mt-0 mb-5">Filmora Video Editing</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      </li>
                      <li>32 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                  <p class="course-description mt-20">FilmoraGo- the best free HD video editor and video maker with all features, text, audio, emoji, special effects, filters, backgrounds, etc. FilmoraGo is an easy-to-use, full-featured video editor loaded with powerful tools.</p>
                  <ul class="list-inline">
                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="course-single-item style2 text-center mb-40">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="images/course/tally_module.png">
                  <div class="price-tag">10000 INR</div>
                  <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="/courses/tally_module.php"><h4 class="mt-0 mb-5">Tally Module</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </li>
                      <li>32 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul>
                  </div>
                  <div class="clearfix"></div>
                  <p class="course-description mt-20">Tally software has become the most wanted accounting software in many enterprises, Few Tally modules may automate the processes including auto emailing, workflow management, auto backup, audit trail, excel import, invoice format, and many more.</p>
                  <ul class="list-inline">
                    <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>14 Days</li>
                    <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                    <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                  </ul>
                </div>
              </div>
            </div>
            </div>

            <div class="row mtli-row-clearfix">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="images/course/basic_excel.jpeg">
                    <div class="price-tag">5000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/basic_excel.php"><h4 class="mt-0 mb-5">Basic Excel</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </li>
                        <li>32 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">a software program created by Microsoft that uses spreadsheets to organize numbers and data with formulas and functions. Excel analysis is ubiquitous around the world and used by businesses of all sizes to perform financial analysis. </p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="section-title text-center">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="title">Web Development <span class="text-theme-colored2">Courses</span></h2>
                  <p class="text-uppercase mb-0">Choose Your Desired Course</p>
                  <div class="double-line-bottom-centered-theme-colored-2"></div>
                </div>
              </div>
            </div>

            <div class="row mtli-row-clearfix">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="images/course/html.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/html-css.php"><h4 class="mt-0 mb-5">HTML & CSS & Website Installation</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </li>
                        <li>69 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>167 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">HTML and CSS are the beginning of everything you need to know to make your first web page! Learn both and start creating amazing websites.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>14 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="course-single-item style2 text-center mb-40">
                  <div class="course-thumb">
                    <img class="img-fullwidth" alt="" src="images/course/wordpress.jpg">
                    <div class="price-tag">12000 INR</div>
                    <div class="order-btn"><a href="https://rzp.io/l/bo61s9oAi" class="btn btn-xs btn-theme-colored2">Get it now</a></div>
                  </div>
                  <div class="course-details clearfix p-20 pt-15">
                    <div class="course-top-part pull-left mr-40">
                      <a href="/courses/wordpress.php"><h4 class="mt-0 mb-5">Wordpress Installation and Website Designing</h4></a>
                      <ul class="list-inline">
                        <li class="review-stars">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </li>
                        <li>47 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                        <li>89 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                      </ul>
                    </div>
                    <div class="clearfix"></div>
                    <p class="course-description mt-20">WordPress is the force behind a third of the websites live today. Learn with professionals offering one-click WordPress installation, download any WordPress-made themes made by a responsible developer.</p>
                    <ul class="list-inline">
                      <li><i class="fa fa-calendar text-theme-colored2 mr-5"></i>7 Days</li>
                      <li><i class="fa fa-book text-theme-colored2 mr-5"></i>4 Seats</li>
                      <li><i class="fa fa-clock-o text-theme-colored2 mr-5"></i>2 Hours</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
                                                      
          </div>
        </section>

        <!-- Section: Tools -->
        <section class="clients ">
          <div class="container pt-10 pb-10">
            <div class="row">
              <div class="col-md-12">
                <h3 class="text-uppercase title text-center">Paid <span class="text-theme-colored2">Tools</span></h3>
                <p class="text-uppercase mb-0 text-center">Paid tools to be offered to our students</p>
                <div class="double-line-bottom-centered-theme-colored-2">
                </div>
                <div class="owl-carousel-6col clients-logo transparent text-center">
                  <div class="item zoom"> <a href="#"><img  src="/images/tools/keyword.jpg" alt=""></a></div>
                  <div class="item zoom"> <a href="#"><img src="/images/tools/spyfu.jpg" alt=""></a></div>
                  <div class="item zoom"> <a href="#"><img src="/images/tools/crello.jpg" alt=""></a></div>
                  <div class="item zoom"> <a href="#"><img src="/images/tools/grammarly.jpg" alt=""></a></div>
                  <div class="item zoom"> <a href="#"><img src="/images/tools/canva.jpg" alt=""></a></div>
                  <div class="item zoom"> <a href="#"><img src="/images/tools/ahrefs.jpg" alt=""></a></div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="layer-overlay overlay-theme-colored-9" data-bg-img="" data-parallax-ratio="0.7">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-12 mb-md-50">
                <h3 class = "line-bottom-theme-colored-2 text-white"><b>Free Digital Marketing <span style="color:#37BF91"> PDF Books</span></b></h3>
                <p class="text-white" >Knowledge is power ! As a Digital Marketer, you need to add as many reading materials into your collection as possible and you can go through them whenever you have some leisure time. There are plenty of free digital marketing PDF books to download available on the Internet. Here is the list of some of the best free ebooks available online. I will keep on updating the list with time, as I keep on researching on good tutorials and books for our digital marketing readers and learners.</p>
                <div class="pull-right sm-pull-none mb-sm-15">
                  <a class="btn btn-colored  btn-flat btn-theme-colored2 mt-0" href="/content-list.php">READ MORE</a>
                </div>
              </div>
            </div>
          </div>
        </section>
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
                <img class="mt-0 mb-0" alt="" src="images/logo-and-favicon/dark-theme-transparent-logo.png" style="max-width:60%">
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
                  <li><a href="/typing-speed-test/index.html">Test Typing Speed</a></li>
                </ul>
                </br>
                <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
                <div class="opening-hours">
                  <ul class="">
                    <li class="clearfix"> <span> Mon - Sun :  </span>
                      <div class="value pull-right"> 09.00 am - 10.00 pm 
                      </div>
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
      <script src="js/custom.js"></script>
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
        }(document, 'script', 'facebook-jssdk'));
      </script>
      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=install_email
        page_id="644140642882018">
      </div>

  </body>
</html>
