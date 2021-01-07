<?php session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Blogs | LearnIntern & Grow" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop, blog" />


<!-- Page Title -->
<title>Blogs | LearnIntern & Grow</title>

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
<link href="/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="/css/style.css" rel="stylesheet" type="text/css"> -->

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
  <script src="/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HY62C2WBH8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HY62C2WBH8');
</script>
<style>
.zoom {
    transition: transform .2s; /* Animation */
}
.zoom:hover {
    transform: scale(1.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
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
          <nav id="menuzord-right" class="menuzord default"><a class="pull-left flip mt-sm-10 mb-sm-20" href="/"><img style="max-height:100px;" src="/images/logo-and-favicon/light-theme-transparent-logo.png" alt=""></a>
            <ul class="menuzord-menu">
              <li class=""><a href="/">Home</a>

              </li>
              <li><a href="/about-us.php">About Us <span class="label label-danger"></span></a>

              </li>
              <li><a href="/#">Learning Modules</a>
                <ul class="dropdown">
                  <li><a href="/free-modules.php">Free</a></li>
                  <li><a href="/#">Premium</a></li>
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
  <?php $conn = mysqli_connect('192.145.239.50', 'datace9_uplink209', 'Uplink209@', 'datace9_learnintern');
  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }
        $id = $_GET['id'];
        $query = "SELECT * FROM blog WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)> 0){
          $row = mysqli_fetch_assoc($result);
        }
         ?>
    <!-- Start main-content -->
    <div class="main-content">

      <!-- Section: inner-header -->
      <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="../images/bg/bg1.jpg">
        <div class="container pt-120 pb-60">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-6">
                <h2 class="text-theme-colored2 font-36"><?php echo $row['title']; ?></h2>
                <ol class="breadcrumb text-left mt-10 white">
                  <li><a href="/">Home</a></li>
                  <li><a href="../blog">Blog</a></li>
                  <li class="active"><?php echo $row['title']; ?></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Blog -->

      <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
          <div class="row">
            <div class="col-md-9">
              <div class="blog-posts single-post">
                <article class="post clearfix mb-0">

                  <div class="entry-content">
                    <div class="entry-meta media no-bg no-border mt-15 pb-20">
                      <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600"><?php echo $row['pub_time']; ?></li>
                          <li class="font-12 text-white text-uppercase"></li>
                          <li class="font-14 text-white font-weight-600"></li>
                        </ul>
                      </div>
                      <div class="media-body pl-15">
                        <div class="event-content pull-left flip">
                          <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a href="#"><?php echo $row['title']; ?></a></h3>
                          <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>
                          <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>
                        </div>
                      </div>
                      <div class="entry-header">
                        <div class="post-thumb thumb"> <img src="<?php if ($row['photo']) {echo 'images/'. $row['photo'];
                        }else echo '../images/logo-and-favicon/light-theme-transparent-logo.png';  ?>" alt="" class="img-responsive img-fullwidth"> </div>
                      </div>
                    </div>
                    <?php echo $row['content']; ?>
                    <div class="mt-30 mb-0">
                      <h5 class="pull-left flip mt-10 mr-20 text-theme-colored">Share:</h5>
                      <ul class="styled-icons icon-circled m-0">
                        <li><a href="#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
                        <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
                       </ul>
                    </div>
                  </div>
                </article>

                <div class="comments-area">
                  <h3 class="comments-title"><i class="fa fa-commenting-o text-theme-colored"></i> Comments</h3>
                  <ul class="comment-list">
                    <?php $query2 = "SELECT * from blog_comments ORDER BY id DESC";
                    $result2 = mysqli_query($conn, $query2);
                      if (mysqli_num_rows($result) > 0) {
                        while ($row2 =  mysqli_fetch_assoc($result2)) {
                      ?>
                    <li>
                      <div class="media comment-author"> <a class="media-left" href="#"><img class="media-object img-thumbnail" src="images/blog/comment1.jpg" alt=""></a>
                        <div class="media-body">
                          <h5 class="media-heading comment-heading"><?php echo $row2['name'] ?> says:</h5>
                          <!-- <div class="comment-date">23/06/2014</div> -->
                          <p><?php echo $row2['message']; ?></p>
                           </div>
                      </div>
                    </li>
                  <?php } }
                  else {
                    echo "no comments.";
                  } ?>

                  </ul>
                </div>
                <div class="comment-box">
                  <div class="row">
                    <div class="col-sm-12">
                      <h5>Leave a Comment</h5>
                      <div class="row">
                        <form role="form" id="comment-form" method="post" action="comments.php">
                          <div class="col-sm-6 pt-0 pb-0">
                            <div class="form-group">
                              <input type="text" class="form-control" required name="contact_name" id="contact_name" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group">
                              <input type="text" required class="form-control" name="contact_email2" id="contact_email2" placeholder="Enter Email" required>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <textarea class="form-control" required name="contact_message2" id="contact_message2"  placeholder="Enter Message" rows="7" required></textarea>
                            </div>
                            <div class="form-group">
                              <button type="submit" name="comment" class="btn btn-dark btn-flat pull-right m-0" data-loading-text="Please wait...">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <button type="button" name="button" class="btn btn-flat btn-colored btn-theme-colored2 text-white mb-30" onclick="location.href='../blog/post-your-blog/'"> Post your blog </button>
              <div class="sidebar sidebar-left mt-sm-30">
                <div class="widget">
                  <h5 class="widget-title line-bottom">Search box</h5>
                  <div class="search-form">
                    <form>
                      <div class="input-group">
                        <input type="text" placeholder="Click to Search" class="form-control search-input zoom">
                        <span class="input-group-btn">
                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                        </span>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- <div class="widget">
                  <h5 class="widget-title line-bottom">Categories</h5>
                  <div class="categories">
                    <ul class="list list-border angle-double-right">
                      <li><a href="#">Digital Marketing<span>(19)</span></a></li>
                      <li><a href="#">Web Development<span>(21)</span></a></li>
                      <li><a href="#">SEO<span>(15)</span></a></li>
                      <li><a href="#">Social Media Marketing<span>(35)</span></a></li>
                      <li><a href="#">Email Marketing<span>(16)</span></a></li>
                    </ul>
                  </div>
                </div> -->

                <div class="widget">
                  <h5 class="widget-title line-bottom">Recent Posts</h5>
                  <div class="latest-posts">
                    <?php $query1 = "SELECT * FROM blog ORDER BY id DESC";
                    $result1 = mysqli_query($conn, $query1);
                    if(mysqli_num_rows($result1)> 0){
                     while ($row1 = mysqli_fetch_assoc($result1)) {
                     ?>
                    <article class="post media-post clearfix pb-0 mb-10 zoom">
                      <a class="post-thumb" href="#"><img src="<?php if ($row1['photo']) echo '../blog/images/'.$row1['photo'];  else echo '../images/logo-and-favicon/light-theme-transparent-logo.png'; ?> " width="75" height="55" alt=""></a>
                      <div class="post-right">
                        <h5 class="post-title mt-0"><a href="published-post.php?id=<?php echo $row1['id'] ?>"> <?php echo $row1['title']; ?></a></h5>
                        <ul class="list-inline font-12 mb-20 mt-10">
                          <li>Posted by <a href="#" class="text-theme-colored2"><?php echo $row1['name']; ?>, <span class="text-theme-colored">on <?php echo $row1['pub_time']; ?></span></a></li>
                        </ul>
                      </div>
                    </article>  <?php } } ?>
                  </div>
                </div>

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
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-2 mr-5"></i> <a class="text-gray" href="/tel:+91-837-782-5955">+91-837-782-5955</a> </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-2 mr-5"></i> <a class="text-gray" href="/mailto:class@learnintern.com">class@learnintern.com</a> </li>
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-2 mr-5"></i> <a class="text-gray" href="/">learnintern.com</a> </li>
              </ul>
              <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10">
                <li><a href="/https://www.facebook.com/learnintern/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="/https://twitter.com/Learnintern1"><i class="fa fa-twitter"></i></a></li>
                <li><a href="/https://www.instagram.com/learnintern/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="/https://linkedin.com/school/learnintern"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="/skype:https://join.skype.com/invite/U1NxsJTD2cW5?call"><i class="fa fa-skype"></i></a></li>
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
                  <a class="post-thumb" href="/#"><img width="80" height="55" src="/images/foot/php.png" alt=""></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="/#">PHP Learning</a></h5>
                    <p class="post-date mb-0 font-12">Oct 08, 2020</p>
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-10">
                  <a class="post-thumb" href="/#"><img width="80" height="55" src="/images/foot/web.png" alt=""></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="/#">Web Development</a></h5>
                    <p class="post-date mb-0 font-12">Oct 08, 2020</p>
                  </div>
                </article>
                <article class="post media-post clearfix pb-0 mb-10">
                  <a class="post-thumb" href="/#"><img width="80" height="55" src="/images/foot/seo.png" alt=""></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-5"><a href="/#">Search Engine Optimization</a></h5>
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
              <a href="/https://essentialservices.in/" class="font-12 text-black-777 m-0 sm-text-center">Copyright &copy; 2020 ESSENTIAL SERVICES. All Rights Reserved</a>
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
    <a class="scrollToTop" href="/#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="/js/custom.js"></script>
    <!--<script type="text/javascript">
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
