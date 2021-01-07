<?php session_start();?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/j/learnpro/v4.0/demo/page-about2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Sep 2020 15:40:06 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="FAQs | LearnIntern & Grow" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>FAQs | LearnIntern & Grow</title>

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
              <h2 class="text-theme-colored2 font-36">FAQ's</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="index.php">Home</a></li>
                <li class="active">FAQ's</li>
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
              <h3 class="text-uppercase mt-0">FREQUENTLY ASKED<span class="text-theme-colored2"> QUESTIONS</span></h3>
					  	<div class="double-line-bottom-theme-colored-2"></div>
              <div class="panel-group accordion-icon-left" id="accordion3" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne3">
                    <h3 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                        Q1. Concerned person to enroll the course. Whom should i refer?
                      </a>
                    </h3>
                  </div>
                  <div id="collapseOne3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne3">
                    <div class="panel-body">
                      Tele-Counselor, Do Not Ask Trainer For That, As They Will Route You To The Counselors Only.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo3">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                        Q2. What about fees structure? And how it is to be paid? Installment wise or Lump sum?
                      </a>
                    </h3>
                  </div>
                  <div id="collapseTwo3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo3">
                    <div class="panel-body">
                      Fee Package Is 70,000/- However We Are Offering This Package For INR 25,000 To Make It Affordable, It Can Paid Via Credit Card, Debit Card, Check Deposit Or Online Transfer Or From Debit Card, We Allow Only Lump Sum As The Duration Is Of 3 Months To 6 Months.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree3">
                    <h3 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                      Q3. How long the course duration will be?
                      </a>
                    </h3>
                  </div>
                  <div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree3">
                    <div class="panel-body">
                    2-3 Months (Theory) And 3 To 6 Months(Practical And Internship).
                    </div>
                  </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingfour3">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapsefour3" aria-expanded="false" aria-controls="collapsefour3">
                    Q4. How the class will conduct? Whether onlie class or PDF's?
                  </a>
                </h3>
              </div>
              <div id="collapsefour3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour3">
                <div class="panel-body">
                  Live Online Classes With Digital Marketing Trainer, Employee Code Of Conduct Trainer And A Soft Copy Of Training Material.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingfive3">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapsefive3" aria-expanded="false" aria-controls="collapsefive3">
                    Q5. How genuine is your live online course?
                  </a>
                </h3>
              </div>
              <div id="collapsefive3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive3">
                <div class="panel-body">
                  It Is As Genuine As Any Registered Business Or Company Is, We Have Been Running Our Business Since 2011 And Understand The Value And Business Ethics.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingsix3">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapsesix3" aria-expanded="false" aria-controls="collapsesix3">
                    Q6. Whether our money is in the safe hand or is it fraud?
                  </a>
                </h3>
              </div>
              <div id="collapsesix3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix3">
                <div class="panel-body">
                  Yes It Is In Safe Hands, As It You Are Paying To The Registered Company. Also After The Completion Of Your Training, You Will Get Your Certificate, And A Internship To Work With A Company.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingseven3">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseseven3" aria-expanded="false" aria-controls="collapseseven3">
                    Q7. How old is the Institute?
                  </a>
                </h3>
              </div>
              <div id="collapseseven3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven3">
                <div class="panel-body">
                  This Is A Year Old Startup Institute However The Owners, Mangers And Senior Teams Have The 15+ Years Of Experience.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading83">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse83" aria-expanded="false" aria-controls="collapse83">
                    Q8. If a person agree to enroll, How should he provide the details?
                  </a>
                </h3>
              </div>
              <div id="collapse83" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading83">
                <div class="panel-body">
                  ID Proof, Address Proof, Photograph, Resume, Payment Details And Contract Sign Up.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading93">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse93" aria-expanded="false" aria-controls="collapse93">
                    Q9. What kind of Internship do i get after completing the course?
                  </a>
                </h3>
              </div>
              <div id="collapse93" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading93">
                <div class="panel-body">
                  It Can Be Any Related To Digital Marketing, Website’s Related, Email Marketer, SEO Onpage, Seo Off Page, Website Auditor, Ad-Words Specialist, Etc.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading103">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse103" aria-expanded="false" aria-controls="collapse103">
                    Q10. If it is a live class, i will be n English onl or even other anguages will be used too?
                  </a>
                </h3>
              </div>
              <div id="collapse103" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading103">
                <div class="panel-body">
                Only English And Hindi Right Now.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading113">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse113" aria-expanded="false" aria-controls="collapse113">
                    Q11. Who is providing us the course? are they well trained and experienced?
                  </a>
                </h3>
              </div>
              <div id="collapse113" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading113">
                <div class="panel-body">
                  Yes, 5 – 11 Years Of Digital Marketing Experience.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading123">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse123" aria-expanded="false" aria-controls="collapse123">
                    Q12. What if in between we don't feel like attending and leave. will there be any refund?
                  </a>
                </h3>
              </div>
              <div id="collapse123" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading123">
                <div class="panel-body">
                No, Because We Have A One Hour Demo Class For That. This Is A Non-Refundable High Impact Trainings.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading133">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse133" aria-expanded="false" aria-controls="collapse133">
                    Q13. What if a student doesn't has computer. can they manage with their phone?
                  </a>
                </h3>
              </div>
              <div id="collapse133" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading133">
                <div class="panel-body">
                No, Only Students That Have A Computer With Good Internet Will Be Eligible For This Course.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading143">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse143" aria-expanded="false" aria-controls="collapse143">
                    Q14. What will be the course content?
                  </a>
                </h3>
              </div>
              <div id="collapse143" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading143">
                <div class="panel-body">
                  We Are Adding Our Course Content, You Can Read That In Detail Here.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading153">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse153" aria-expanded="false" aria-controls="collapse153">
                    Q15. what's the training method?
                  </a>
                </h3>
              </div>
              <div id="collapse153" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading153">
                <div class="panel-body">
                  <p>We Will Train You On A White Board Via Live Cam – Skype Or Zoom.</p>
                  <p>You Must Have A Laptop And A High Speed Internet.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading163">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse163" aria-expanded="false" aria-controls="collapse163">
                    Q16. How many hours daily?
                  </a>
                </h3>
              </div>
              <div id="collapse163" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading163">
                <div class="panel-body">
                <p>1 Hour Daily, Sundays Are Off – Students Batch.</p>
                <p>2 Hours Daily, Sundays Are Off – Professional Batch.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading173">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse173" aria-expanded="false" aria-controls="collapse173">
                    Q17. If there will be any practical training?
                  </a>
                </h3>
              </div>
              <div id="collapse173" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading173">
                <div class="panel-body">
                  Yes, Practical Trainings Will Be Given And Tools Are Also Given To Get You Going.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading183">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse183" aria-expanded="false" aria-controls="collapse183">
                    Q17. Will my trainer be experienced?
                  </a>
                </h3>
              </div>
              <div id="collapse183" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading183">
                <div class="panel-body">
                  Trainers Are 4-15 Years Experienced, Purpose Is To Add Value In The Life Of Students And The Job Seekers. So That Your Understanding About Websites, Computers, Marketing Improves And You Can Face Interviews Really Well.
                  <p>Also This Course Will Open Up Your Options To Get More Job Opportunities And Help You To Appear For Interviews.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading193">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse193" aria-expanded="false" aria-controls="collapse193">
                    Q19. Can i repeat y training if i miss something?
                  </a>
                </h3>
              </div>
              <div id="collapse193" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading193">
                <div class="panel-body">
                  Yes, But You Are Not Allowed To Repeat It In Between, Until Your 3 Months Are Completed. You Will Then Be Allowed After Completion Of Your Course.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading203">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse203" aria-expanded="false" aria-controls="collapse203">
                    Q20. Will i get the marksheet instantly?
                  </a>
                </h3>
              </div>
              <div id="collapse203" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading203">
                <div class="panel-body">
                  Yes, After Completing Your Test. You Will Get Your Marksheet.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading213">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse213" aria-expanded="false" aria-controls="collapse213">
                    Q21. Will i get the certificates immediately?
                  </a>
                </h3>
              </div>
              <div id="collapse213" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading213">
                <div class="panel-body">
                Yes, As You Clear Your Trainings And Clears The Tests. Your Certificates Will Be Issued Immediately.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading223">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse223" aria-expanded="false" aria-controls="collapse223">
                    Q22. How to apply for the training?
                  </a>
                </h3>
              </div>
              <div id="collapse223" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading223">
                <div class="panel-body">
                  <p>Attend Counseling And Demo Class.</p>
                  <p>Provide Your ID Proof’s, Agreement And Admission Slips.</p>
                  <p>Must Have A Computer And A Internet.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading233">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse233" aria-expanded="false" aria-controls="collapse233">
                    Q23. What's the duration of training?'
                  </a>
                </h3>
              </div>
              <div id="collapse233" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading233">
                <div class="panel-body">
                  Training Duration Is For 3 Months, Out Of Which You Will Be Covered All Your Pending Topics, Though We Try To Target It Till 2 Months.
                  <ul>
                  <li>2 Months – Training Practical Or Theoritical.</li>
                  <li>2 Months – Retraining Practical Or Theoritical.</li>
                  <li>2 Months – Internships And Job Interviews.</li>
                </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading243">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse243" aria-expanded="false" aria-controls="collapse243">
                    Q24. How to apply for the internship?
                  </a>
                </h3>
              </div>
              <div id="collapse243" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading243">
                <div class="panel-body">
                  You Firstly Need To Give Some Tests Related To Communication, Typing Test, Tests Related To The Course You Have Completed. After Getting Your Scores, Produce Your Certificates And Contact Placementconsultancy.In Contact Number And Speak To The Recruiter, They Will Help You To Get The Internship.

                <p>Usually Internships Are Of 2 Types:</p>
                  <ul>
                  <li>1. Paid Internships</li>
                  <li>2. Unpaid Internships ( Recommended, As Your Focus Is More Towards Learnings)</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading253">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse253" aria-expanded="false" aria-controls="collapse253">
                    Q25. Duration of the Internship?
                  </a>
                </h3>
              </div>
              <div id="collapse253" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading253">
                <div class="panel-body">
                  Duration Of The Internship Can Be From 15 Days To 6 Months.
                  <p>However We Stress To Get You The Internship In Between 45 Days To 3 Months Minimum.</p>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="heading263">
                <h3 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse263" aria-expanded="false" aria-controls="collapse263">
                    Q26. Do i have a Job assurance?
                  </a>
                </h3>
              </div>
              <div id="collapse263" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading263">
                <div class="panel-body">
                  Of Course, Thats Why These Courses Have Been Introduced, We Are In A Tie-Up With The Placement Agency And We Understand Exactly Where The Candidate’s Are Lacking To Get A Back End Jobs, Front End Jobs, Etc.
                  <p>Our Focus Will Remain To Show You To The Companies, If You Have Learnt Well, Companies Wont Deny You, If They Feel You Are Not Prepared Yet, They May Reject You. So Always Keep Learning.</p>
                </div>
              </div>
            </div>
              <!--<a href="#" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-15">Read More</a>-->
                </div>
            </div>
            <div class="col-md-4">
              <h3 class="text-uppercase mt-0 mt-sm-30">Upcoming <span class="text-theme-colored2">Events</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <article>
                <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                  <div class="event-date text-center">
                    <ul class="text-white">
                      <li class="font-18 font-weight-700 border-bottom">11</li>
                      <li class="font-14 text-center text-uppercase mt-5">Sep</li>
                    </ul>
                  </div>
                  <div class="event-content pt-5">
                    <h5 class="media-heading font-16 font-weight-600 mb-5"><a href="#">No upcoming events.</a></h5>
                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> Time</span>
                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> Place</span>
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
