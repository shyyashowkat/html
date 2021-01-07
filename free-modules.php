<?php session_start();?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Free Learning modules | LearnIntern & Grow " />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<meta name="author" content="Essential Services" />

<!-- Page Title -->
<title>Free Learning Modules | LearnIntern & Grow</title>

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
              <li class="active"><a href="#">Learning Modules</a>
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
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="/images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Free Learning Modules</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/">Home</a></li>
                <li><a href="#">Learning Modules</a></li>
                <li class="active">Free</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->

      <div class="container mt-30 mb-30 pt-30 pb-0">
        <div class="row multi-row-clearfix">
          <div class="col-md-12">
            <h3>Take your <span class="text-uppercase mt-0 text-theme-colored2">learning</span> further</h3>
            <div class="double-line-bottom-theme-colored-2"></div>
            <p class="mt-20">Making the decision to study can be a big step, which is why you'll want a trusted Traning centre. The <a href="/" class="text-theme-colored2">LearnIntern</a> has experience of delivering flexible learning and numerous students are studying with us right now. Take a look at all <a href="/courses.php" class="text-theme-colored2"> open courses.</a> If you are new to online coaching level study, find out more about the types of qualifications we offer, including our entry <a href="/courses.php" class="text-theme-colored2">level Access courses</a> and <a href="#" class="text-theme-colored2">Certificates.</a></p>
            <p>Many of the materials you'll find in <a href="/" class="text-theme-colored2">LearnIntern</a> have been peer reviewed by higher education faculty with expertise in using online resources.</p>
          </br>
            <h3> Let's<span class="text-uppercase mt-0 text-theme-colored2"> STUDY</span></h3>
            <div class="double-line-bottom-theme-colored-2"></div>
          </div>
          <div id="blog-posts-wrapper" class="blog-posts">
            <div class="col-sm-6 col-md-3 col-lg-3">
              <article class="post clearfix maxwidth600 mb-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="images/blog/1.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content border-1px p-20">
                  <h5 class="entry-title mt-0 pt-0"><a href="/courses/adsense.php">Adsense</a></h5>
                  <ul class="list-inline entry-date font-12 mt-5">
                    <li class="pr-0"><a class="text-theme-colored2" href="#">free</a></li>
                    <li class="pl-0"><span class="text-theme-colored2"></span></li>
                  </ul>
                  <p class="text-left mb-20 mt-15 font-13">This course will help you to learn thr features of AdSense , which can be used to earn money from your website.</p>
                  <a class="btn btn-dark btn-theme-colored2 btn-xs btn-flat mt-0" target="_blank" href="/free-modules/Adsense.pdf" download><i class="fa fa-download"></i> &nbsp;Download</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <article class="post clearfix maxwidth600 mb-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="images/blog/2.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content border-1px p-20">
                  <h5 class="entry-title mt-0 pt-0"><a href="/courses/computer-repair-advance.php">Advance Computer Repair</a></h5>
                  <ul class="list-inline entry-date font-12 mt-5">
                    <li class="pr-0"><a class="text-theme-colored2" href="#">free</a></li>
                    <li class="pl-0"><span class="text-theme-colored2"></span></li>
                  </ul>
                  <p class="text-left mb-20 mt-15 font-13">After completing this Hardware Course you will become expert in computer hardware repairing Engineering of desktop and laptop computers.</p>
                  <a class="btn btn-dark btn-theme-colored2 btn-xs btn-flat mt-0" target="_blank" href="/free-modules/Advance-Computer-Repair.pdf" download><i class="fa fa-download"></i> &nbsp;Download</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <article class="post clearfix maxwidth600 mb-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="images/blog/3.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content border-1px p-20">
                  <h5 class="entry-title mt-0 pt-0"><a href="/courses/advance-email-marketing.php">Advance Email Marketing</a></h5>
                  <ul class="list-inline entry-date font-12 mt-5">
                    <li class="pr-0"><a class="text-theme-colored2" href="#">free</a></li>
                    <li class="pl-0"><span class="text-theme-colored2"></span></li>
                  </ul>
                  <p class="text-left mb-20 mt-15 font-13">This Email marketing course will help you to form a direct market that uses email to promote your business's products or services. It can help make your customers aware of your latest items or offers.</p>
                  <a class="btn btn-dark btn-theme-colored2 btn-xs btn-flat mt-0" target="_blank" href="/free-modules/Advance-Email-Marketing.pdf" download><i class="fa fa-download"></i> &nbsp;Download</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <article class="post clearfix maxwidth600 mb-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="images/blog/1.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content border-1px p-20">
                  <h5 class="entry-title mt-0 pt-0"><a href="/courses/affliate-marketing.php">Affiliate Marketing Course</a></h5>
                  <ul class="list-inline entry-date font-12 mt-5">
                    <li class="pr-0"><a class="text-theme-colored2" href="#">free</a></li>
                    <li class="pl-0"><span class="text-theme-colored2"></span></li>
                  </ul>
                  <p class="text-left mb-20 mt-15 font-13">Affiliate marketing is extremely beneficial to both brands and affiliate marketers, the new push towards less traditional marketing tactics has paid off.</p>
                  <a class="btn btn-dark btn-theme-colored2 btn-xs btn-flat mt-0" target="_blank" href="/free-modules/Affiliate-marketing-course.pdf" download><i class="fa fa-download"></i> &nbsp;Download</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <article class="post clearfix maxwidth600 mb-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="images/blog/2.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content border-1px p-20">
                  <h5 class="entry-title mt-0 pt-0"><a href="/courses/computer-repair-beginner.php">Basics of Computer Repair</a></h5>
                  <ul class="list-inline entry-date font-12 mt-5">
                    <li class="pr-0"><a class="text-theme-colored2" href="#">free</a></li>
                    <li class="pl-0"><span class="text-theme-colored2"></span></li>
                  </ul>
                  <p class="text-left mb-20 mt-15 font-13">Learn slow computer fix and other tricks and secrets to fixing your own computer with basic computer repair course.</p>
                  <a class="btn btn-dark btn-theme-colored2 btn-xs btn-flat mt-0" target="_blank" href="/free-moduless/Basics-of-Computer-Repair.pdf" download><i class="fa fa-download"></i> &nbsp;Download</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <article class="post clearfix maxwidth600 mb-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="images/blog/3.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content border-1px p-20">
                  <h5 class="entry-title mt-0 pt-0"><a href="/courses/computer-repair-beginner.php">Basics of Email Markeing</a></h5>
                  <ul class="list-inline entry-date font-12 mt-5">
                    <li class="pr-0"><a class="text-theme-colored2" href="#">Free</a></li>
                    <li class="pl-0"><span class="text-theme-colored2"></span></li>
                  </ul>
                  <p class="text-left mb-20 mt-15 font-13">Email marketing is a digital marketing strategy based on sending emails and developing relationships with prospects and customers.</p>
                  <a class="btn btn-dark btn-theme-colored2 btn-xs btn-flat mt-0" target="_blank" href="/free-modules/Basics-of-Email-Markeing.pdf" download><i class="fa fa-download"></i> &nbsp;Download</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <article class="post clearfix maxwidth600 mb-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="images/blog/1.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content border-1px p-20">
                  <h5 class="entry-title mt-0 pt-0"><a href="/courses/html-css.php">Web Development Module</a></h5>
                  <ul class="list-inline entry-date font-12 mt-5">
                    <li class="pr-0"><a class="text-theme-colored2" href="#">free</a></li>
                    <li class="pl-0"><span class="text-theme-colored2"></span></li>
                  </ul>
                  <p class="text-left mb-20 mt-15 font-13">HTML and CSS are the beginning of everything you need to know to make your first web page! Learn both and start creating amazing websites.</p>
                  <a class="btn btn-dark btn-theme-colored2 btn-xs btn-flat mt-0" target="_blank" href="/free-modules/Website-Development-Module.pdf" download><i class="fa fa-download"></i> &nbsp;Download</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <article class="post clearfix maxwidth600 mb-30">
                <div class="entry-header">
                  <div class="post-thumb thumb"> <img src="images/blog/2.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                </div>
                <div class="entry-content border-1px p-20">
                  <h5 class="entry-title mt-0 pt-0"><a href="/courses/digital-marketing.php">Basics of Digital Markeing</a></h5>
                  <ul class="list-inline entry-date font-12 mt-5">
                    <li class="pr-0"><a class="text-theme-colored2" href="#">free</a></li>
                    <li class="pl-0"><span class="text-theme-colored2"></span></li>
                  </ul>
                  <p class="text-left mb-20 mt-15 font-13">The Advanced Digital Marketing Certification Program has been designed keeping in mind the needs of today’s job seekers and entrepreneurs. </p>
                  <a class="btn btn-dark btn-theme-colored2 btn-xs btn-flat mt-0" target="_blank" download href="/free-modules/Basics-of-Paid-Digital-Markeing.pdf"><i class="fa fa-download"></i> &nbsp;Download</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
          </div>

          <div class="clearfix"></div>
          <!-- Infinity Loadmore Button -->
          <div id="load-next-posts" class="p-15 pt-0 pb-0 ">
            <a href="blog-extra-infinity-scroll-data-2.html" class="btn btn-default btn-lg btn-block bg-theme-colored2 text-white">Load more</a>
          </div>


          <!-- Infinity Loadmore Script -->
          <script>
            $(window).load(function(){
              var $infinityload_container = $('#blog-posts-wrapper');
              $infinityload_container.infinitescroll({
                //debug         : true,
                loading: {
                  finishedMsg: '<i class="fa fa-check"></i>',
                  msgText: '<i class="fa fa-spinner fa-spin"></i>',
                  img: "images/preloaders/1.gif",
                  speed: 'normal'
                },
                state: {
                  isDone: false
                },
                nextSelector: "#load-next-posts a",
                navSelector: "#load-next-posts",
                itemSelector  : "#blog-posts-wrapper > .col-sm-6",
                behavior: 'twitter'
              },
              function( newElements ) {
                $infinityload_container.find('#infscr-loading').remove();
              });
            });
          </script>

        </div>
      </div>
    </section>
  </div>
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
<!-- Load Facebook SDK for JavaScript -->
<script>
document.addEventListener('contextmenu', event => event.preventDefault());
</script>
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
