<?php session_start();?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/j/learnpro/v4.0/demo/page-teacher-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Sep 2020 15:40:22 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Content list | LearnIntern & Grow" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>Content List | LearnIntern & Grow</title>

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
              <h2 class="text-theme-colored2 font-36">Content-List</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="index.php">Home</a></li>
                <li class="active">Content-List</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Experts Details -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-8">
              <h1 class = "line-bottom-theme-colored-2"><b>Free Digital Marketing <span style="color:#37BF91">PDF Books</span></b></h1>
              <p style="color:grey">Knowledge is power ! As a Digital Marketer, you need to add as many reading materials into your collection as possible and you can go through them whenever you have some leisure time. There are plenty of free digital marketing PDF books to download available on the Internet. Here is the list of some of the best free ebooks available online. I will keep on updating the list with time, as I keep on researching on good tutorials and books for our digital marketing readers and learners.</p>
              <p style="color:grey">At a high level, digital marketing refers to advertising delivered through digital channels such as search engines, websites, social media, email, and mobile apps. Using these online media channels, digital marketing is the method by which companies endorse goods, services, and brands. </p>

            </div>
            <div class="col-md-4">
              <div class="clearfix">
                <h4 class="line-bottom-theme-colored-2">Register For Free Digital Marketing Orientation Session.</h4>
              </div>
              <form  id="contact-form" class="contact-form-transparent">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" placeholder="Enter Name" id="name" name="name" required class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" placeholder="Enter Email" id="email" name="email" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="tel" placeholder="Enter Phone no." id="phone" name="phone" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" placeholder="Enter State" id="state" name="state" class="form-control" required>
                    </div>
                  </div>
                </div>

                  <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15" href="https://docs.google.com/forms/d/17qZMtJzQJDaOJMIoLc5Pqxuv0d_Qaho08NIcA5qcaPA/">Register Now</a>
                </div>
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <h3 style="color:grey">Download links are below.</h3>
            </div>
          </div>
          <div>
          </br></br>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="images/book/book1.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h1 class="name mt-0 mb-0"><b>Big Book of Digital Marketing</b></h1>

              <h4><b>Description:</b></h4>
              <p>It is a Small Book with 130 odd pages. The fonts and graphics have been used wisely to attract readers. Catchy and informative pictures are provided wherever necessary.</p>
              <p><b>Publisher:</b> Digital Firefly Marketing</p>
              <p><b>Pages:</b> 130</p>
              <p><b>Topics Covered</b></p>
              <ul style="list-style-type:disc;">
               <li>SEO</li>
               <li>Content Marketing</li>
               <li>Website Redesign</li>
               <li>SMM</li>
               <li>Pinterest</li>
             </ul>
              <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15" href=" https://digitalfireflymarketing.com/wp-content/uploads/2017/02/Big-Book-of-Digital-Marketing.pdf " style="border-radius:25px">DOWNLOAD PDF</a>
            </div>
          </div>
          <div>
            </br></br>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="images/book/book2.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h1 class="name mt-0 mb-0"><b>Big Book of Digital Marketing</b></h1>

              <h4><b>Description:</b></h4>
              <p>The name seems to be inspired by a famous Hollywood movie. But relax, the books has 50 chapters in it and hence the name. The book has well written, informative articles regarding Digital Marketing. The book has collected different points of views from 50 different Digital Marketing experts.</p>
              <p><b>Authors:</b> Francesca James, Hannan Durham</p>
              <p><b>Pages:</b> 114</p>
              <p><b>Publisher: </b> BookBoon.com</p>
              <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15" href="https://www.7boats.com/academy/wp-content/uploads/2016/10/50-shades-of-digital-marketing.pdf " style="border-radius:25px">DOWNLOAD PDF</a>
            </div>
          </div>
          <div>
            </br></br>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="images/book/book3.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h1 class="name mt-0 mb-0"><b>Understanding Digital Marketing</b></h1>
              <h3>Marketing Strategies For Engaging the Digital Generation</h3>

              <h4><b>Description:</b></h4>
              <p>It is a medium sized book for any moderate reader. It fairly focuses on different modules of Digital Marketing. Hence, the learner can go for it and learn Digital Marketing Fundamentals as well as generating Marketing Strategies for businesses.</p>
              <p><b>Author:</b> Damian Ryan, Calvin Jones</p>
              <p><b>Publisher:</b> Kogan Page</p>
              <p><b>Pages:</b> 289</p>
              <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15" href=" http://www.gbv.de/dms/zbw/865712123.pdf"  style="border-radius:25px">DOWNLOAD PDF</a>
            </div>
          </div>
          <div>
            </br></br>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="images/book/book4.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h1 class="name mt-0 mb-0"><b>Understanding Digital Marketing- Basics and Actions</b></h1>

              <h4><b>Description:</b></h4>
              <p>It is a very small sized book. You can read it while traveling, or in a waiting room. A quick glance could be given before any presentation for reference.</p>
              <p><b>Authors:</b> Teresa Pineiro-Otero and Xabier Martinez-Rolan</p>
              <p><b>Pages:</b> 39</p>
              <p><b>Publisher: </b> Springer International Publishing</p>
              <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15" href="http://jatuka.com/wp-content/uploads/2009/05/0749453893-Digital-Marketing.pdf " style="border-radius:25px">DOWNLOAD PDF</a>
            </div>
          </div>
          <div>
            </br></br>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="images/book/book5.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h1 class="name mt-0 mb-0"><b>A step-by-step Guide to Modern Digital Marketing</b></h1>

              <h4><b>Description:</b></h4>
              <p>It is also a small booklet. It is a PowerPoint document. 20 topics are covered in the power-point presentations. The use of PPT tools is beautiful. The digital marketing strategies covered are quite good. You can count on the book for a quick revision as well as it is a quick read for beginners if they want to start with Digital Marketing for their projects.</p>
              <p><b>Authors:</b> Suresh Babu</p>
              <p><b>Pages:</b> 27</p>
              <p><b>Publisher: </b> Web Marketing Academy</p>
              <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15" href=" https://webmarketingacademy.in/wp-content/uploads/2015/09/A-Step-By-Step-Guide-to-Modern-Digital-Marketing.pdf " style="border-radius:25px">DOWNLOAD PDF</a>
            </div>
          </div>
          <div>
            </br></br>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="images/book/book6.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h1 class="name mt-0 mb-0"><b>Digital Marketing Strategy</b></h1>

              <p><b>Authors:</b> Unknown</p>
              <p><b>Pages:</b> 60</p>
              <p><b>Publisher: </b> Lyfe Marketing</p>
              <p><b>Points Covered: </b></p>
              <ul style="list-style-type:disc;">
               <li>Building customer avatar</li>
               <li>Developing long term assets</li>
               <li>Short term strategies</li>
               <li>Lead nurturing</li>
               <li>Website hub, etc.</li>
             </ul>
              <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15" href=" https://www.lyfemarketing.com/blog/wp-content/uploads/2017/12/Digital-Marketing-Strategy-eBook.pdf " style="border-radius:25px">DOWNLOAD PDF</a>
            </div>
          </div>
          <div>
            </br></br>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="images/book/book7.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h1 class="name mt-0 mb-0"><b>eMarketing</b></h1>
              <h3>The Essential Guide to Marketing in a digital world</h3>

              <h4><b>Description:</b></h4>
              <p>The book is structured according to the following theme</p>
              <p><b><i>Think : </i></b>Research, plan and strategies for brands and campaign</p>
              <p><b><i>Create : </i></b>Build beautiful, highly functional assets and content for brands and campaigns</p>
              <p><b><i>Engage : </i></b>Use the power of the connected web to drive the traffic to those assets and leverage the available channels</p>
              <p><b><i> Optimize : </i></b>Relentlessly use data and analysis to improve all the marketing efforts</p>
              <p><b>Authors:</b> Rob Stokes</p>
              <p><b>Pages:</b> 305</p>
              <p><b>Publisher: </b> Quirk eMarketing</p>
              <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15" href=" https://www.redandyellow.co.za/content/uploads/woocommerce_uploads/2017/10/emarketing_textbook_download.pdf  " style="border-radius:25px">DOWNLOAD PDF</a>
            </div>
          </div>
          <div>
            </br></br>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="images/book/book8.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h1 class="name mt-0 mb-0"><b>Internet Marketing</b></h1>
              <h3>A highly practical guide to every aspect of internet marketing</h3>

              <p><b>Authors:</b> Alex Trengove Jones, Anna Malczyk and Justin Beneke</p>
              <p><b>Pages:</b> 229</p>
              <p><b>Publisher: </b> GetSmarter</p>
              <p><b>Key Concepts Covered: </b></p>
              <ul style="list-style-type:disc;">
               <li>What is Internet Marketing?</li>
               <li>History and pioneers of Internet Marketing</li>
               <li>Todays Internet Marketing context</li>
               <li>Future trends,</li>
               <li>How the tactics taught in this textbook fit together?</li>
             </ul>
              <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15" href=" https://vula.uct.ac.za/access/content/group/95dfae58-9991-4317-8a1d-e2d58f80b3a3/Published%20OER%20UCT%20Resources/Internet%20Marketing%20textbook.pdf " style="border-radius:25px">DOWNLOAD PDF</a>
            </div>
          </div>
          <div>
            </br></br>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="images/book/book9.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h1 class="name mt-0 mb-0"><b>Netmark’s 2016 Guide to the 6 fundamentals of Digital Marketing</b></h1>

              <h4><b>Description:</b></h4>
              <p>A very small book. But with a very nice content. Covered the Digital Marketing modules of SEO, SMM, SEM, UX Design, Email Markting, etc.</p>
              <p><b>These fundamentals will help you solve the questions: </b></p>
              <ul style="list-style-type:disc;">
               <li>How can I get more traffic to my website?</li>
               <li>How can I increase my Website conversions?</li>
             </ul>
              <p><b>Authors:</b> Dan Morley</p>
              <p><b>Pages:</b> 15</p>
              <p><b>Publisher: </b> Netmark</p>
              <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15" href=" https://namp.americansforthearts.org/sites/default/files/Netmarks-2016-Guide-to-Digital-Marketing.pdf  " style="border-radius:25px">DOWNLOAD PDF</a>
            </div>
          </div>
          <div>
            </br></br>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="images/book/book10.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h1 class="name mt-0 mb-0"><b>Big Book of Digital Marketing</b></h1>

              <h4><b>Description:</b></h4>
                <p>All the topics are written and nicely explained by multiple people. Every author is an expert Digital Marketer.</p>
              <p><b>Topics Covered: </b></p>
              <ul style="list-style-type:disc;">
               <li>People & Big Data</li>
               <li>Understanding Ad Tech</li>
               <li>Programatic/ RTB</li>
               <li>Mobile & Device</li>
               <li>Integration</li>
               <li>Best Marketing Practices</li>
               <li>Shifts in The Marketing Landscape</li>
             </ul>

              <p><b>Authors:</b> Multiple</p>
              <p><b>Pages:</b> 80</p>
              <p><b>Publisher: </b> IgnitionOne, netmining</p>
              <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15" href=" http://netmining.com/wp-content/uploads/2015/09/Netmining-Marketing-Big-Book.pdf  " style="border-radius:25px">DOWNLOAD PDF</a>
            </div>
          </div>
          <div>
            </br></br>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="images/book/book11.png" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h1 class="name mt-0 mb-0"><b>SEO Book</b></h1>
              <h3>A new chapter every day</h3>

              <h4><b>Description:</b></h4>
              <p>A detailed guide regarding search engine optimization.</p>
              <p><b>Topics Covered: </b></p>
              <ul style="list-style-type:disc;">
               <li>SEO tools</li>
               <li>Analytics</li>
               <li>Case Studies and many more.</li>
               </ul>
              <p><b>Authors:</b> Aaron Matthew Wall</p>
              <p><b>Pages:</b> 350</p>
              <p><b>Publisher: </b> BookBoon.com</p>
              <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15" href=" http://www.seobook.com/seobook53.pdf  " style="border-radius:25px">DOWNLOAD PDF</a>
            </div>
          </div>
          <div>
            </br></br>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="images/book/book12.png" alt="">
              </div>
            </div>
            <div>
            </div>
            <div class="col-md-8">
              <h1 class="name mt-0 mb-0"><b>The Small Business Online Marketing Guide</b></h1>

              <h4><b>Description:</b></h4>
              <p>A small guide booklet from a Marketer from the Google. A good informative book.</p>
              <p><b>Topics Covered: </b></p>
              <ul style="list-style-type:disc;">
               <li>Why you should be marketing online?</li>
               <li>Case Studies: How happy hound gets 90% of its sales online</li>
               <li>10 things you can do today to boost your online marketing</li>
               <li>Worksheet: How you can get started?</li>
               </ul>
              <p><b>Authors:</b> Brynn Zuccaro</p>
              <p><b>Pages:</b> 20</p>

              <a class="btn btn-colored btn-flat btn-theme-colored2 mt-15 mr-15 ml-15" href=" https://static.googleusercontent.com/media/www.google.com/en//ads/pdfs/small_business_online_marketing_guide.pdf  " style="border-radius:25px">DOWNLOAD PDF</a>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!--<section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="images/team/team-details.jpg" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h4 class="name font-24 mt-0 mb-0">Selena Martin</h4>
              <h5 class="mt-5">Web Design</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam vero expedita fugiat illo quasi doloremque, in unde omnis sint assumenda! Quaerat in, reprehenderit corporis voluptatum natus sequi reiciendis ullam. Quam eaque dolorum voluptates cupiditate explicabo.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt culpa dicta quaerat qui recusandae possimus placeat quidem ipsam voluptates similique libero tempore, labore quasi delectus vero alias, consectetur blanditiis eum maxime sunt accusantium ipsa doloribus reiciendis. Ea quod reprehenderit deserunt. Veritatis omnis similique tempora delectus a consequuntur, quis.  Adipisicing elit. Nesciunt culpa dicta quaerat qui recusandae possimus placeat quidem ipsam voluptates similique libero tempore, labore quasi delectus vero alias.</p>
              <ul class="styled-icons icon-dark icon-theme-colored2 icon-sm mt-15 mb-0">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
             </ul>
            </div>
          </div>
          <div class="row mt-30">
            <div class="col-md-4">

              </div>
            </div>
            <div class="col-md-4">
              <h4 class="line-bottom-theme-colored-2"></h4>


            </div>
            <div class="col-md-4">
              <div class="clearfix">
                <h4 class="line-bottom-theme-colored-2">Register For Free Digital Marketing Orientation Session.</h4>
              </div>
              <form id="contact-form" class="contact-form-transparent">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" placeholder="Enter Name" id="name" name="name" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" placeholder="Enter Email" id="email" name="email" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" placeholder="Enter Subject" id="subject" name="subject" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" placeholder="Enter State" id="state" name="state" class="form-control" required="">
                    </div>
                  </div>
                </div>

                  <button data-loading-text="Please wait..." class="btn btn-flat btn-dark btn-theme-colored2 mt-5" type="submit">Send your message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
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
