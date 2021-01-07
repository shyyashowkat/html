<?php session_start();?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="About | LearnIntern & Grow" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<!-- Page Title -->
<title>About Us | LearnIntern & Grow</title>

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
<style style="text/css">
.navtop {
    background-color: #3f69a8;
    height: 60px;
    width: 100%;
    border: 0;
}
.navtop div {
    display: flex;
    margin: 0 auto;
    width: 1000px;
    height: 100%;
}
.navtop div h1, .navtop div a {
    display: inline-flex;
    align-items: center;
}
.navtop div h1 {
    flex: 1;
    font-size: 24px;
    padding: 0;
    margin: 0;
    color: #ecf0f6;
    font-weight: normal;
}
.navtop div a {
    padding: 0 20px;
    text-decoration: none;
    color: #c5d2e5;
    font-weight: bold;
}
.navtop div a i {
    padding: 2px 8px 0 0;
}
.navtop div a:hover {
    color: #ecf0f6;
}
.content {
    width: 1000px;
    margin: 0 auto;
}
.content h2 {
    margin: 0;
    padding: 25px 0;
    font-size: 22px;
    border-bottom: 1px solid #ebebeb;
    color: #666666;
}
.reviews .overall_rating .num {
    font-size: 30px;
    font-weight: bold;
    color: #F5A624;
}
.reviews .overall_rating .stars {
    letter-spacing: 3px;
    font-size: 32px;
    color: #F5A624;
    padding: 0 5px 0 10px;
}
.reviews .overall_rating .total {
    color: #777777;
    font-size: 14px;
}
.reviews .write_review_btn, .reviews .write_review button {
    display: inline-block;
    background-color: #565656;
    color: #fff;
    text-decoration: none;
    margin: 10px 0 0 0;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: 600;
    border: 0;
}
.reviews .write_review_btn:hover, .reviews .write_review button:hover {
    background-color: #636363;
}
.reviews .write_review {
    display: none;
    padding: 20px 0 10px 0;
}
.reviews .write_review textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    height: 150px;
    margin-top: 10px;
}
.reviews .write_review input {
    display: block;
    width: 250px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 10px;
}
.reviews .write_review button {
    cursor: pointer;
}
.reviews .review {
    padding: 20px 0;
    border-bottom: 1px solid #eee;
}
.reviews .review .name {
    padding: 0 0 3px 0;
    margin: 0;
    font-size: 18px;
    color: #555555;
}
.reviews .review .rating {
    letter-spacing: 2px;
    font-size: 22px;
    color: #F5A624;
}
.reviews .review .date {
    color: #777777;
    font-size: 14px;
}
.reviews .review .content {
    padding: 5px 0;
}
.reviews .review:last-child {
    border-bottom: 0;
}
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
              <li class="active"><a href="/about-us.php">About Us <span class="label label-danger"></span></a>

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
              <h2 class="text-theme-colored2 font-36">About</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/">Home</a></li>
                <li class="active">About Us</li>
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
            <div class="col-md-6">
              <h3 class="text-uppercase mt-0">WHO <span class="text-theme-colored2">WE ARE </span></h3>
					  	<div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20">Learn Intern is an effort by essential services team to cater a students, working professionals, small business, job seekers, that often have no right counselling about their careers, jobs.</p>
              <p>We simply believe in cutting down the cost, so that our profits can be increased and that can further be passed on to the students and among our employees, so that they can feel and see the difference of dealing with the right people.</p>
              <p>Online training’s helps us reduce the cost to almost 50% as we dont have to spend money on rent and infra.</p>
              <p>The indian market has great scope in training, internship programs and corrective job placement strategies and we, here at esopl are more than willing to explore such possibilities.</p>
              <p>LearnIntern.com is a LOB and a Brand name of Essential Services Outsource Pvt Ltd, any legal rights and liabilities to be taken care by ESOPL.</p>
              <!--<a href="#" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-15">Read More</a>-->
            </div>
            <div class="col-md-6">
              <h3 class="text-uppercase mt-0">WHAT <span class="text-theme-colored2"> WE DO</span></h3>
					  	<div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20">We definitely see a growing need of manpower and skilled labour in india. we take pride to share that we keep free on job training programs for job seekers and internship programs, they get work experience certificate to showcase their industry exposure when they apply for a job.</p>
              <p>Search all the open positions on the web. get your own personalized salary estimate. read reviews on over 600,000 companies worldwide. the right job is out there.</p>
              <br><br>
              <h3 class="text-uppercase mt-0 mt-sm-30">Upcoming <span class="text-theme-colored2">Events</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <article>
                <div class="event-block">
                  <div class="event-date text-center">
                    <ul class="text-white font-18 font-weight-600">
                      <li class="border-bottom"> </li>
                      <li class="">Now</li>
                    </ul>
                  </div>
                  <div class="event-meta border-1px pl-40">
                    <div class="event-content pull-left flip">
                      <h4 class="event-title media-heading font-roboto-slab font-weight-700"><a href="https://docs.google.com/forms/d/17qZMtJzQJDaOJMIoLc5Pqxuv0d_Qaho08NIcA5qcaPA/">Online Regsitration Started for live classes</a></h4>
                      <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored2"></i>24/7</span>
                      <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5 text-theme-colored2"></i> at learnIntern.com</span>
                      <p class="mt-5"></p>
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



    <!-- Portfolio Gallery Grid -->
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-title">
          <div class="row">
            <h3 class="text-uppercase mt-0 text-center">Our <span class="text-theme-colored2">Batches </span></h3>
            <div class="double-line-bottom-centered-theme-colored-2"></div>
            <div class="gallery-isotope default-animation-effect grid-3 gutter-small clearfix" data-lightbox="gallery">
    <!-- Portfolio Item Start -->
    <div class="gallery-item">
      <a href="/images/batch/batch3.jpg" data-lightbox="gallery-item" title=""><img src="/images/batch/batch3.jpg" alt=""></a>
    </div>
    <!-- Portfolio Item End -->

    <!-- Portfolio Item Start -->
    <div class="gallery-item">
        <a href="/images/batch/batch2.jpg" data-lightbox="gallery-item" title=""><img  src="/images/batch/batch2.jpg" alt=""></a>
          <a href="/images/batch/batch1.jpg" data-lightbox="gallery-item" title=""><img  src="/images/batch/batch1.jpg" alt=""></a>
    </div>
  </div>
</div>
</div>
</div>
</section>



  <!-- End Portfolio Gallery Grid -->

    <!-- Divider: Funfact -->
    <section id="review" class="layer-overlay overlay-theme-colored-9" data-bg-img="images/bg/bg1.jpg" data-parallax-ratio="0.7">
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

    <!--Reviews-->
    <section>
      <div class="container ">
          <div class="row">
            <div class="col-md-12">
              <div class="content home">
                <h2>Ratings & Reviews</h2>
                <p>Check out the below reviews for our website.</p>
                <div class="reviews"></div>
                <script>
                const reviews_page_id = 1;
                fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
                  document.querySelector(".reviews").innerHTML = data;
                  document.querySelector(".reviews .write_review_btn").onclick = event => {
                  event.preventDefault();
                  document.querySelector(".reviews .write_review").style.display = 'block';
                  document.querySelector(".reviews .write_review input[name='name']").focus();
                };
                document.querySelector(".reviews .write_review form").onsubmit = event => {
                  event.preventDefault();
                  fetch("reviews.php?page_id=" + reviews_page_id, {
                    method: 'POST',
                    body: new FormData(document.querySelector(".reviews .write_review form"))
                  }).then(response => response.text()).then(data => {
                    document.querySelector(".reviews .write_review").innerHTML = data;
                  });
                };
              });
            </script>
          </div>
        </div>
        </div>
      </div>
    </section>


    <!--partners-->
    <div class="item">
      <div class="text-center">
        <div class="content pt-10">
          <h2 class="text-uppercase text-center">Our<span class="text-theme-colored2"> Hiring Partners</span></h2>
          <div class="double-line-bottom-centered-theme-colored-2"></div>
        </div>
        <div class="thumb"><a href="https://placementconsultancy.in/"><img style="max-height:150px" alt="" src="/images/partners/placementconsultancy.jpg"></a>
        <a href="https://wenlighting.com/"><img style="max-height:100px" alt="" src="/images/partners/wenlighting.jpg"></a></div>
      </div>
    </div>


    <!-- Section: Team -->
    <section id="team" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Qualified <span class="text-theme-colored2">Team</span></h2>
              <p class="text-uppercase mb-0">We Have Highly Qualified Team of Professionals</p>
              <div class="double-line-bottom-centered-theme-colored-2"></div>
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="" style="width:75%;height:250px" alt="" src="images/team/3.jpg">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div style="height:140px" class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">Sharad Goel</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">International business & Digital Marketing Expert</h6>
                <p class="hidden-md">Experience: 15+ years</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="" style="width:75%;height:250px" alt="" src="images/team/4.jpg">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div style="height:140px" class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">Sanjhee Shrivastav</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Legal Councelor</h6>
                <p class="hidden-md">Experience: 2+ years</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="" style="width:75%;height:250px" alt="" src="images/team/1.jpg">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div style="height:140px" class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">Sumana</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Career Counselor</h6>
                <p class="hidden-md">Experience: 2+ years<br> </p>
              </div>
            </div>
          </div>
        </div>
      <div class="row mtli-row-clearfix">
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-30">
              <div class="team-thumb">
                <img class="" style="width:75%;height:250px" alt="" src="images/team/5.jpg">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div style="height:140px" class="team-details">
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">Sreekutty P V</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Counselor Cum HR</h6>
                <p class="hidden-md">Experience: 6+ years</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <div   class="team-members border-bottom-theme-colored2px text-center maxwidth400 mb-40">
              <div class="team-thumb">
                <img  style="width:75%;height:250px" alt="" src="images/team/6.jpg">
                <div class="team-overlay"></div>
                <ul class="styled-icons team-social icon-sm">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
              <div style="height:140px" class="team-details" >
                <h4 class="text-uppercase text-theme-colored font-weight-600 m-5">Mostakim Mullick</h4>
                <h6 class="text-gray font-13 font-weight-400 line-bottom-centered mt-0">Intern Developer</h6>
                <p class="hidden-md">BCA Graduate</p>
              </div>
            </div>
          </div>
      </div>
    </section>
  </div>
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
