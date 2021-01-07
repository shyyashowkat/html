<?php session_start();?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/j/learnpro/v4.0/demo/page-faq-style2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Sep 2020 15:41:41 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Comparison | LearnIntern & Grow" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Comparison | LearnIntern & Grow</title>

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
<link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

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
              <h2 class="text-theme-colored2 font-36">Comparison with other Digital Marketing Training Institutes.</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/">Home</a></li>
                <li class="active">Comparison</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="position-inherit">
      <div class="container">
        <div class="row">
          <div class="section-title mb-50">
              <div class="col-md-12">
                <div class="esc-heading small-border text-center">
                  <h2>OTHER <span class="text-theme-colored2">DIGITAL INSTITUTIONS</span></h2>
                </div>
            </div>
          </div>
          <div class="col-md-3 scrolltofixed-container">
            <div class="list-group scrolltofixed z-index-0">
              <div class="small-border text-center">
                <h4 class="bg-theme-colored2 text-white">NAME OF INSTITUTIONS</h4>
              </div>
              <a href="#section-one" class="list-group-item smooth-scroll-to-target"><b>IIMSKILLS</b></a>

              <a href="#section-two" class="list-group-item smooth-scroll-to-target"><b>Digital Vaidya</b></a>

              <a href="#section-three" class="list-group-item smooth-scroll-to-target"><b>Delhi School of Internet Marketing (DSIM)</b></a>

              <a href="#section-four" class="list-group-item smooth-scroll-to-target"><b>NIIT Digital Marketing</b> </a>

              <a href="#section-five" class="list-group-item smooth-scroll-to-target"><b>MCTA</b></a>

              <a href="#section-six" class="list-group-item smooth-scroll-to-target"><b>Digital Academy India</b></a>

              <a href="#section-seven" class="list-group-item smooth-scroll-to-target"><b>UpGrad</b></a>
              <a href="#section-eight" class="list-group-item smooth-scroll-to-target"><b>Operating Media</b></a>
              <a href="#section-nine" class="list-group-item smooth-scroll-to-target"><b>Manipal Prolearn</b></a>
              <a href="#section-ten" class="list-group-item smooth-scroll-to-target"><b>All India Management Association (AIMA)</b></a>
              <a href="#section-eleven" class="list-group-item smooth-scroll-to-target"><b>Simply Learn</b></a>
            </div>
          </div>
          <div class="col-md-9">
            <div id="section-one" class="mb-50">
              <h3 <span class="text-theme-colored2">IIMSKILLS</span></h3>
              <hr>
              <table style="width:100%" class="mb-20">
                                    <tr><td style="width:25%"><b>Rating                 :</b></td>                              <td>   4.9/5</td></tr>
                                    <tr><td style="width:25%"><b>Course Type            :</b></td>                         <td>   Certification Course</td></tr>
                                    <tr><td style="width:25%"><b>Course Name            :</b></td>                         <td>   Digital Marketing Master Course</td></tr>
                                    <tr><td style="width:25%"><b>Couse Duration         :</b></td>                      <td>   3 Months</td></tr>
                                    <tr><td style="width:25%"><b>Fee                    :</b> </td>                                <td>   29990/- INR+GST</td></tr>
                                    <tr><td style="width:25%"><b>Modules                :</b> </td>                            <td>   39</td></tr>
                                    <tr><td style="width:25%"><b>Description            :</b> </td>                        <td>   SEO, Content Writing, email marketing, google Adwords, MVM, Affiliated Marketing, Social Media Marketing, Web Development.</td></tr>
                                    <tr><td style="width:25%"><b>Hours                  :</b></td>                               <td>   180 hours of curriculum, 12+ hours of curriculum, 60+ hours of live training</td></tr>

                                    <tr><td style="width:25%"><b>In-depth knowledge of  :</b></td>               <td><br/><br/>Facebook Ads, Facebook Insights, Google Analytics, Keyword Planner, LinkedIn Ads, YouTube Analytics,
                                                                                                                          Twitter Ads, Semrush, Moz, Google Ads,
                                                                                                                         Ubersuggest, Google Trend, Yoast SEO, Succuri Security among many others.</td></tr>
                                    <tr><td style="width:25%"><b>Sessions type          :</b></td>                       <td>   Online Demo Session</td></tr>
                                    <tr><td style="width:25%"><b>Placement Support      :</b></td>                   <td>   Yes</td></tr>
                                    <tr><td style="width:25%"><b>Works with             :</b></td>                       <td>   Global conglomerates like Amazon, Flipkart, TCS, Accenture</td></tr>
                                    <tr><td style="width:25%"><b>Address                :</b></td>                         <td>   IIMSKILLS Corporate Office: H B Twin Tower, 8th Floor, Max Hospital Building, Netaji Subhash Place, Pitampura, New Delhi-110034 </td></tr>
    <!--  <tr><td style="width:25%"><b>Contact                :</b></td>                            <td>   <a style="color:#37BF91" href="tel:+91-921-109-9503">+91-921-109-9503</a></td></tr>-->
                                    <tr><td style="width:25%"><b>Website                :</b></td>                            <td>   <a style="color:#37BF91" href="https://iimskills.com/digital-marketing/">https://iimskills.com/digital-marketing/</a></td></tr> </table>
                                  </div>
                    <div id="section-two" class="mb-50">
                      <h3 <span class="text-theme-colored2">Digital Vaidya</span></h3>
                      <hr>
                      <table style="width:100%" class="mb-20">
                                            <tr><td style="width:25%"><b>Rating                 :</b></td>                              <td>  4.3/5</td></tr>
                                            <tr><td style="width:25%"><b>Course Type            :</b></td>                         <td>   Certification Course</td></tr>
                                            <tr><td style="width:25%"><b>Established in            :</b></td>                         <td>   2009</td></tr>
                                            <tr><td style="width:25%"><b>Founders         :</b></td>                      <td>   Pradeep Chopra and Kapil Nakra</td></tr>
                                            <tr><td style="width:25%"><b>Modules                :</b> </td>                            <td>   40</td></tr>
                                            <tr><td style="width:25%"><b>Description            :</b> </td>                        <td>   <br/>Search Engine Optimization, Search Engine Marketing, Content Writing, email marketing, google Adwords, MVM, Affiliated Marketing, Social Media Marketing, Web Development.</td></tr>

                                            <tr><td style="width:25%"><b>Address                :</b></td>                         <td>  1001, 10th Floor, Tower 1, Pearls Omaxe Building, Netaji Subhash Place, Pitampura, New Delhi-110034</td></tr>
                                          <!--  <tr><td style="width:25%"><b>Contact                :</b></td>                            <td>   <a style="color:#37BF91" href="tel:+91-918-010-0303">+91-918-010-0303</a></td></tr>--> </table>
                                          </div>
                      <div id="section-three" class="mb-50">
                            <h3 <span class="text-theme-colored2">Delhi School of Internet Marketing (DSIM)</span></h3>
                                  <hr>
                                  <table style="width:100%" class="mb-20">
                                    <tr><td style="width:25%"><b>Rating                 :</b></td>                              <td>  4.3/5</td></tr>
                                    <tr><td style="width:25%"><b>Course Type            :</b></td>                         <td>   Certification Course (15+Certfications)</td></tr>
                                    <tr><td style="width:25%"><b>Course Name            :</b></td>                         <td>   Masters in Digital Marketing</td></tr>
                                    <tr><td style="width:25%"><b>Couse Duration         :</b></td>                      <td>   4-6 Months</td></tr>
                                        <tr><td style="width:25%"><b>Fee                    :</b> </td>                                <td>   66450 INR+18%GST</td></tr>
                                        <tr><td style="width:25%"><b>Modules                :</b> </td>                            <td>   36</td></tr>
                                        <tr><td style="width:25%"><b>Description            :</b> </td>                        <td>   <br/>SEO, Content Writing, email marketing, google Adwords, Video Marketing, Affiliated Marketing, Social Media Marketing, Web Development, Google Analytics, Website planning and creation, Online reputation Management, Influencer Marketing, Growth Hacking, Adsense and blogging.</td></tr>
                                          <tr><td style="width:25%"><b>Address                :</b></td>                         <td>   Malviya Nagar Centre, Near Aurobindo College, Near Malviya Nagar Metro Station, New Delhi- 110017 </td></tr>
                                  <!--  <tr><td style="width:25%"><b>Contact                :</b></td>                            <td>   <a style="color:#37BF91" href="tel:+011-40-624-179">+011-40-624-179</a>, <a style="color:#37BF91" href="tel:+91-880-029-0309">+91-880-029-0309</a></td></tr>--> </table>
                                    </div>
                    <div id="section-four" class="mb-50">
                              <h3 <span class="text-theme-colored2">NIIT Digital Marketing </span></h3>
                                  <hr>
                          <table style="width:100%" class="mb-20">
                                                                                        <tr><td style="width:25%"><b>Rating                 :</b></td>                              <td>   4.2/5</td></tr>
                                                                                        <tr><td style="width:25%"><b>Course Type            :</b></td>                         <td>   Diploma Course</td></tr>
                                                                                        <tr><td style="width:25%"><b>Course Name            :</b></td>                         <td>   Professional Diploma In Digital Marketing, Professional Diploma In Mobile Marketing, Diploma In Social Media Marketing,Professional, Diploma in Search Marketing.</td></tr>
                                                                                        <tr><td style="width:25%"><b>Certification from         :</b></td>                      <td>   University of Edinburgh</td></tr>
                                                                                        <tr><td style="width:25%"><b>Hours                    :</b> </td>                                <td>  140 Hours</td></tr>
                                                                                        <tr><td style="width:25%"><b>Course mode              :</b> </td>                            <td>   Classroom only</td></tr>
                                                                                        <tr><td style="width:25%"><b>Description            :</b> </td>                        <td>   Experience of Google and Facebook.</td></tr>
                                                                                        <tr><td style="width:25%"><b>Address                :</b></td>                         <td>   NIIT Limited, Plot No.  85, Sector 32, Gurgaon-122001 </td></tr>
                                                                                      <!--  <tr><td style="width:25%"><b>Contact                :</b></td>                            <td>   <a style="color:#37BF91" href="tel:+91-124-429-3000">+91-124-429-3000</a>, <a style="color:#37BF91" href="tel:+91-124-429-3333">+91-124-429-3333</a></td></tr>--> </table>
                                                                                      </div>
                                          <div id="section-five" class="mb-50">
                                                      <h3 <span class="text-theme-colored2">MCTA </span></h3>
                                                                    <hr>
                                                                                        <table style="width:100%" class="mb-20">
                                                                                                              <tr><td style="width:25%"><b>Rating                 :</b></td>                              <td>   4.5/5</td></tr>
                                                                                                              <tr><td style="width:25%"><b>Course Type            :</b></td>                         <td>   Diploma Course</td></tr>
                                                                                                              <tr><td style="width:25%"><b>Course Name            :</b></td>                         <td>   Master program in Digital Marketing, Executive Program in Digital Marketing.</td></tr>
                                                                                                              <tr><td style="width:25%"><b>Modules        :</b></td>                      <td>   30+ Digital Codes, 12+ core modules</td></tr>
                                                                                                              <tr><td style="width:25%"><b>Hours                    :</b> </td>                                <td>  60 hours of classroom training</td></tr>
                                                                                                              <tr><td style="width:25%"><b>Course mode              :</b> </td>                            <td>   Classroom only</td></tr>
                                                                                                              <tr><td style="width:25%"><b>Description            :</b> </td>                        <td>   <br/>Google Analytics, Search Engine Marketing, Mobile Marketing, Social Media Marketing, Email Marketing, WhatsApp and web chat process, Drip Marketing, Overview of Digital Marketing, Search Engine Optimisation, E-Commerce and Drop Shipping, Media buying and planning.</td></tr>
                                                                                                                  <tr><td style="width:25%"><b>Tools                 :</b></td>                              <td>  <br/>Hands-on Training on important Digital Marketing tools like Yoast SEO, Ubersuggest, KW finder, Google keyword planner; Web code tools, YouTube Advertising, Hootsuite, Google Alerts, Fanpage Karma, Google Analytics, Buzzsumo, Freepik, Affiliate Pro, Canva and many such very important tools</td></tr>
                                                                                                                    <tr><td style="width:25%"><b>Certification                 :</b></td>                              <td><br/> The master program has 7 important Industry Recognised Certifications from Google, Hubspot, FB Blueprint and it’s very own MCTA Certification.</td></tr>

                                                                                                              <tr><td style="width:25%"><b>Address                :</b></td>                         <td>   707 Haware Infotech Park Sector 30a Plot Number 39, Near Inorbit Mall, Vashi, Navi Mumbai-400703</td></tr>
                                                                                                            <!--  <tr><td style="width:25%"><b>Contact                :</b></td>                            <td>    <a style="color:#37BF91" href="tel:+91-982-189-9890">+91-982-189-9890</a></td></tr>--> </table>
                                                                                                            </div>

                                                                                                            <div id="section-six" class="mb-50">
                                                                                                              <h3 <span class="text-theme-colored2">Digital Academy India </span></h3>
                                                                                                              <hr>
                                                                                                              <table style="width:100%" class="mb-20">
                                                                                                                                    <tr><td style="width:25%"><b>Rating                 :</b></td>                              <td>   4.8/5</td></tr>
                                                                                                                                    <tr><td style="width:25%"><b>Course Type            :</b></td>                         <td>   Certification course in collaboration with Digital Vaidya.</td></tr>
                                                                                                                                    <tr><td style="width:25%"><b>Course Name            :</b></td>                         <td>   <br/>Designing An Effective Online Marketing Strategy, Implementing All The Marketing Objectives, Remarketing And Retargeting, Essentials Of Mobile Marketing, Introduction To Digital Marketing, Website Optimisation And Usability, Search Engine Marketing, Digital Display Advertising, Youtube Advertising, Social Media Marketing, Lead Generation For Business,Web Analytics, Integrated Digital Marketing Communications Affiliate Marketing.</td></tr>
                                                                                                                                    <tr><td style="width:25%"><b>Fee       :</b></td>                      <td>   40,000 INR</td></tr>
                                                                                                                                    <tr><td style="width:25%"><b>Training mode                  :</b> </td>                                <td>  Online</td></tr>

                                                                                                                                    <tr><td style="width:25%"><b>Address                :</b></td>                         <td> B-32, 3rd floor, Lajpat Nagar 2,Landmark Lajpat Nagar Metro Station, New Delhi-110024  </td></tr>
                                                                                                                                  <!--  <tr><td style="width:25%"><b>Contact                :</b></td>                            <td>    <a style="color:#37BF91" href="tel:+91-801-003-3033">+91-801-003-3033</a></td></tr> --></table>
                                                                                                                                  </div>
                                                                                                                                  <div id="section-seven" class="mb-50">
                                                                                                                                    <h3 <span class="text-theme-colored2">UpGrad </span></h3>
                                                                                                                                    <hr>
                                                                                                                                    <table style="width:100%" class="mb-20">
                                                                                                                                                          <tr><td style="width:25%"><b>Rating                 :</b></td>                              <td>   4.2/5</td></tr>
                                                                                                                                                          <tr><td style="width:25%"><b>Course Type            :</b></td>                         <td>   Certification Course.</td></tr>
                                                                                                                                                          <tr><td style="width:25%"><b>Course Name            :</b></td>                         <td>  MICA – Digital Marketing (6.5-9.5 Months), UpGrad – Digital Marketing Certification Program (5 Months).</td></tr>
                                                                                                                                                          <tr><td style="width:25%"><b>Established in      :</b></td>                      <td>   2015</td></tr>
                                                                                                                                                          <tr><td style="width:25%"><b>Founders                 :</b> </td>                                <td> Phalgun Kompally and Ronnie Screwvala</td></tr>
                                                                                                                                                          <tr><td style="width:25%"><b>Headquater     :</b></td>                      <td>   Mumbai</td></tr>
                                                                                                                                                          <tr><td style="width:25%"><b>Description      :</b></td>                      <td>   <br/>Search Engine Optimisation, Search Engine Marketing, Content Marketing, Campaign Management, Social Media Marketing, and Optimisation.</td></tr>

                      <tr><td style="width:25%"><b>Additional     :</b></td>                      <td>  <br/>Strategic Digital Marketing from the University of Cambridge Judge Business school which is an Executive program spanning for a period of 5 months.</td></tr>
                      <tr><td style="width:25%"><b>Course Mode    :</b></td>                      <td>  Online</td></tr>
                                                                                                                                                          <tr><td style="width:25%"><b>Address                :</b></td>                         <td> Main Office, Ground Floor, Nishuvi, 75 Dr. Annie Besant Road, Worli Mumbai-400018 </td></tr>
                                                                                                                                                      <!--    <tr><td style="width:25%"><b>Contact                :</b></td>                            <td>    <a style="color:#37BF91" href="tel:+91-1800-210-2020">+91-1800-210-2020</a></td></tr> --></table>
                              </div>
                              <div id="section-eight" class="mb-50">
                                <h3 <span class="text-theme-colored2">Operating Media</span></h3>
                                <hr>
                                <table style="width:100%" class="mb-20">
                                                      <tr><td style="width:25%"><b>Rating                 :</b></td>                              <td>   4.6/5</td></tr>
                                                      <tr><td style="width:25%"><b>Course Type            :</b></td>                         <td>  Diploma and Advance Diploma Course other 10+ certifications</td></tr>

                                                      <tr><td style="width:25%"><b>Fee                    :</b> </td>                                <td>   22,000/- INR</td></tr>
                                                      <tr><td style="width:25%"><b>Modules                :</b> </td>                            <td>   39</td></tr>
                                                      <tr><td style="width:25%"><b>Description            :</b> </td>                        <td>   <br/>Introduction To Digital Marketing, WordPress and  Blogging, Creating Ads & PPC Reporting, Introduction To Affiliate Marketing, Introduction To Mobile Marketing, Social Media Optimisation, Social Media Marketing, Introduction To Mobile Sites, Performance And Reporting, Email Guidelines, Introduction To Search Engine Optimization, Off-Page Optimization On-Page Optimization, Social Media Promotions Including YouTube, Twitter, Instagram, LinkedIn, Google Tag Manager, Research And Management And Many More.</td></tr>
                                                      <tr><td style="width:25%"><b>Hours                  :</b></td>                               <td>   75 hours </td></tr>


                                                      <tr><td style="width:25%"><b>Sessions type          :</b></td>                       <td>   Practical Live Session</td></tr>
                                                      <tr><td style="width:25%"><b>Placement Support      :</b></td>                   <td>   Yes</td></tr>

                                                      <tr><td style="width:25%"><b>Address                :</b></td>                         <td> B1 Ground Floor, Shruti Sagar, Old Police Quarter Lane, Opposite Bus Depot, Andheri East,  Mumbai-400069 </td></tr>
                      <!--  <tr><td style="width:25%"><b>Contact                :</b></td>                            <td>   <a style="color:#37BF91" href="tel:+91-931-997-7749">+91-931-997-7749</a></td></tr>-->
                                                     </table>
                                                    </div>
                                                    <div id="section-nine" class="mb-50">
                                                      <h3 <span class="text-theme-colored2">Manipal Prolearn</span></h3>
                                                      <hr>
                                                      <table style="width:100%" class="mb-20">
                                                                            <tr><td style="width:25%"><b>Rating                 :</b></td>                              <td>   4.8/5</td></tr>
                                                                            <tr><td style="width:25%"><b>Course Type            :</b></td>                         <td>  Certification Course, PG Certificate Course</td></tr>
                                                                            <tr><td style="width:25%"><b>Courses            :</b></td>                         <td>  6 various types</td></tr>

                                                                            <tr><td style="width:25%"><b>Fee                    :</b> </td>                                <td>  49,100 INR, 94400 INR</td></tr>

                                                                            <tr><td style="width:25%"><b>Description            :</b> </td>                        <td>   <br/>Introduction to Digital Marketing, Creation of website fundamental, Google Ads, Search Advertising, Video advertising using YouTube, Display advertising using Google, Ads shopping advertising with Google, Mobile Advertising, Social Media Marketing, Content-driven Inbound Marketing, Brand strategy and Social Media Optimization, Storytelling, Facebook Branding, Key Mobile Marketing tools, Integrating real-world and Mobile and many such important components that make up the Digital Marketing program.</td></tr>
                                                                            <tr><td style="width:25%"><b>Modules                 :</b></td>                               <td>  <br/>Digital Marketing professional program in Association with Google, Google Analytics and Tag Manager, Social Media Marketing, Mobile Marketing, The certificate program in Affiliate Marketing, The certificate program in User experience and user interaction design.</td></tr>


                                                                            <tr><td style="width:25%"><b>Sessions type          :</b></td>                       <td>  Hands-on exercise,  Video tutorials, and 1 Ebook. 8.	Access to the Course for 3 years after completion of the Certificate</td></tr>


                                                                            <tr><td style="width:25%"><b>Address                :</b></td>                         <td> Manipal Prolearn, 7 Service Road, Pragati Nagar, Electronic Cit,  Pragati Nagar Bangalore-560100</td></tr>
                                              </table>
                      </div>
                      <div id="section-ten" class="mb-50">
                        <h3 <span class="text-theme-colored2">All India Management Association (AIMA)</span></h3>
                        <hr>
                        <table style="width:100%" class="mb-20">
                                              <tr><td style="width:25%"><b>Rating                 :</b></td>                              <td>   4.6/5</td></tr>
                                                <tr><td style="width:25%"><b>Collaboration                 :</b></td>                              <td>  2.	The Digital Marketing Course at AIMA is created in collaboration with Digital Vidya.</td></tr>
                                              <tr><td style="width:25%"><b>Course Type            :</b></td>                         <td> Certification Course</td></tr>
                                              <tr><td style="width:25%"><b>Courses            :</b></td>                         <td> Certification Program in Digital Marketing and Analytics</td></tr>
                                                  <tr><td style="width:25%"><b>Duration                :</b></td>                              <td>  5 months</td></tr>
                                              <tr><td style="width:25%"><b>Fee                    :</b> </td>                                <td>  36000 + 18% GST</td></tr>

                                              <tr><td style="width:25%"><b>Description            :</b> </td>                        <td>   Mobile Marketing, Content  Marketing, and Strategy,  Search Engine Marketing,  Search Engine Optimisation with Analytics, Email Marketing.</td></tr>
                                              <tr><td style="width:25%"><b> Additional Program              :</b></td>                               <td>  <br/>AICTE approved Digital Marketing program.<br/><b>Course Fee:</b> 31000 per semester<br/>	<b>Duration:</b> 1 year</td></tr>


                                              <tr><td style="width:25%"><b>Sessions type          :</b></td>                       <td>  <br/>Hands-on exercise,  Video tutorials, and 1 Ebook.Access to the Course for 3 years after completion of the Certificate</td></tr>


                                              <tr><td style="width:25%"><b>Address                :</b></td>                         <td> 15 Link Road, Lajpat Nagar III, New Delhi 110024 </td></tr>
                                                                          <!--        <tr><td style="width:25%"><b>Contact                :</b></td>                            <td>   <a style="color:#37BF91" href="tel:+011-47-673-000">+011-47-673-000</a>, <a style="color:#37BF91" href="tel:+011-49-868-399">+011-49-868-399</a></td></tr>-->
                </table>
                                            </div>
                                            <div id="section-eleven" class="mb-50">
                                              <h3 <span class="text-theme-colored2">Simply Learn </span></h3>
                                              <hr>
                                              <table style="width:100%" class="mb-20">
                                                                    <tr><td style="width:25%"><b>Rating                 :</b></td>                              <td>   4.1/5</td></tr>
                                                                    <tr><td style="width:25%"><b>Course Type            :</b></td>                         <td>   Certification Course.</td></tr>
                                                                    <tr><td style="width:25%"><b>Course Name            :</b></td>                         <td>  Digital Marketing Specialist – 11 Courses, Digital Marketing Associate – 3 Courses.</td></tr>
                                                                    <tr><td style="width:25%"><b>Established in      :</b></td>                      <td>   2010</td></tr>
                                                                    <tr><td style="width:25%"><b>Founders                 :</b> </td>                                <td> Krishna kumar</td></tr>
                                                                    <tr><td style="width:25%"><b>Headquater     :</b></td>                      <td>   Bangaluru</td></tr>
                                                                    <tr><td style="width:25%"><b>Description      :</b></td>                      <td>   <br/> Fundamentals of Marketing, Demystifying Digital channels, Conversion and Strategy, Web Analytics, Advanced Search Engine Optimization Techniques, Advanced Social Media with OMCP (Online Certified Marketing Professional).</td></tr>

<tr><td style="width:25%"><b>Course Fee    :</b></td>                      <td>  50,000 INR approx</td></tr>
<tr><td style="width:25%"><b>Course Mode    :</b></td>                      <td>  Online</td></tr>
                                                                    <tr><td style="width:25%"><b>Address                :</b></td>                         <td>Simplilearn Solutions Private Limited, Nalanda, 53/1C, Manoj Arcade, 24th Main Road, Sector 2, HSR Layout, Bengaluru-560102 </td></tr>
                                                                  <!--  <tr><td style="width:25%"><b>Contact                :</b></td>                            <td>    <a style="color:#37BF91" href="tel:+91-1800-2127-688">+91-1800-2127-688</a></td></tr>--> </table>
</div>
                      </div>
                                            </div

                                        </div>
                                      </section>

                                    </div>
                                    <!-- end main-content -->
</div>

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
            <li><a href="/index.php">Home Page</a></li>
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
