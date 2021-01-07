<?php session_start();?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/j/learnpro/v4.0/demo/page-about2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Sep 2020 15:40:06 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Terms & Conditions - Learnintern" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Terms & Conditions - Learnintern</title>

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
              <h2 class="text-theme-colored2 font-36">Terms & Conditions</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/">Home</a></li>
                <li class="active">Terms & Conditions</li>
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
              <h3 class="text-uppercase mt-0">Terms<span class="text-theme-colored2"> & Conditions </span></h3>
					  	<div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20"><b>Welcome to</b> <a href="/" class="text-theme-colored2"> Learnintern.</a></p>
              <p>These terms and conditions outline the rules and regulations for the use of <a href="https://essentialservices.in/" class="text-theme-colored2">Essential Service</a> Outsource Pvt Ltd’s Website, located at <a href="/" class="text-theme-colored2"> Learnintern.com</a>. By accessing this website we assume you accept these terms and conditions. Do not continue to use <a href="/" class="text-theme-colored2"> Learnintern.com</a> if you do not agree to take all of the terms and conditions stated on this page.</p>
              <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: “Client”, “You” and “Your” refers to you, the person log on this website and compliant to the Company’s terms and conditions. “The Company”, “Ourselves”, “We”, “Our” and “Us”, refers to our Company. “Party”, “Parties”, or “Us”, refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
              <h3 class="text-uppercase mt-0"><span class="text-theme-colored2">Cookies </span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20">We employ the use of cookies. By accessing <a href="/" class="text-theme-colored2"> Learnintern.com</a>, you agreed to use cookies in agreement with the <a href="https://essentialservices.in/" class="text-theme-colored2">Essential Service</a> Outsource Pvt Ltd’s Privacy Policy.</p>
              <p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>
              <h3 class="text-uppercase mt-0"><span class="text-theme-colored2"> License </span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20">Unless otherwise stated, Essential Service Outsource Pvt Ltd and/or its licensors own the intellectual property rights for all material on <a href="/" class="text-theme-colored2"> Learnintern.com</a>. All intellectual property rights are reserved. You may access this from <a href="/" class="text-theme-colored2"> Learnintern.com</a> for your own personal use subjected to restrictions set in these terms and conditions.</br>
                You must not:</p>
              <ul style="list-style-type:disc">
                <li>Republish material from <a href="/" class="text-theme-colored2"> Learnintern.</a></li>
                <li>Sell, rent or sub-license material from <a href="/" class="text-theme-colored2"> Learnintern.</a></li>
                <li>Reproduce, duplicate or copy material from <a href="/" class="text-theme-colored2"> Learnintern.</a></li>
                <li>Redistribute content from <a href="/" class="text-theme-colored2"> Learnintern.</a></li>
              </ul>
              <p>This Agreement shall begin on the date hereof.</p>
                <p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Essential Service Outsource Pvt Ltd does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Essential Service Outsource Pvt Ltd,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by   applicable laws, Essential Service Outsource Pvt Ltd shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>
                <p>Essential Service Outsource Pvt Ltd reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.
              </p><p>You warrant and represent that:</p>
                <ul style="list-style-type:disc">
                  <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
                  <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
                  <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
                  <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
                  <p>You hereby grant <a href="https://essentialservices.in/" class="text-theme-colored2">Essential Service</a> Outsource Pvt Ltd a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>
                </ul>
              <h3 class="text-uppercase mt-0">Reservation<span class="text-theme-colored2"> of Rights</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20">We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>
              <h3 class="text-uppercase mt-0">Removal of links <span class="text-theme-colored2">from our website</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20">If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.
              </p><p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>
              <!--<a href="#" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-15">Read More</a>-->
            </div>
            <div class="col-md-6">
              <h3 class="text-uppercase mt-0">Hyperlinking<span class="text-theme-colored2"> to our Content</span></h3>
					  	<div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20">The following organizations may link to our Website without prior written approval:</p>
              <ul style="list-style-type:disc">
                <li>Government agencies;</li>
                <li>Search engines;</li>
                <li>News organizations;</li>
                <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
                <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
                </ul>
                <p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.
                </p><p>We may consider and approve other link requests from the following types of organizations:</p>
                <ul style="list-style-type:disc">
                  <li>commonly-known consumer and/or business information sources;</li>
                  <li>dot.com community sites;</li>
                  <li>associations or other groups representing charities;</li>
                  <li>online directory distributors;</li>
                  <li>internet portals;</li>
                  <li>accounting, law and consulting firms; and</li>
                  <li>educational institutions and trade associations.</li>
                </ul>
              <p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Essential Service Outsource Pvt Ltd; and (d) the link is in the context of general resource information.
              </p><p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.
              </p><p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Essential Service Outsource Pvt Ltd. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.
              </p><p>Approved organizations may hyperlink to our Website as follows:</p>
              <ul style="list-style-type:disc">
                <li>By use of our corporate name; or</li>
                <li>By use of the uniform resource locator being linked to; or</li>
                <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
              </ul>
              <p>No use of Essential Service Outsource Pvt Ltd’s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>
              <h3 class="text-uppercase mt-0">Your <span class="text-theme-colored2">Privacy</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p>Please read <a href="/privacy-policy.php" class="text-theme-colored2">Privacy Policy</a></p>
              <h3 class="text-uppercase mt-0">Content <span class="text-theme-colored2">Liability </span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>
              <h3 class="text-uppercase mt-0"><span class="text-theme-colored2">iframe</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>
              <h3 class="text-uppercase mt-0"><span class="text-theme-colored2">DISCLAIMER</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20">To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>
              <ul style="list-style-type:disc">
                <li>limit or exclude our or your liability for death or personal injury;</li>
                <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
                <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
                <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
              </ul>
              <p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.
              </p><p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
              <h3 class="text-uppercase mt-0">EXTERNAL<span class="text-theme-colored2"> QUESTIONS</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p class="mt-20">Any questions regarding this statement should be directed to our site coordinator at <a style="color:#37BF91" href= "/">learnintern.com</a> or send an email to <a style="color:#37BF91" href= "mailto:class@learnintern.com">class@learnintern.com</a></p>
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
  <script>document.addEventListener('contextmenu', event => event.preventDefault());</script>
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
