<?php session_start();
$id = $_GET['id'];
$errors = array();

$db = mysqli_connect('192.145.239.50', 'datace9_uplink209', 'Uplink209@', 'datace9_learnintern');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

if (isset($_POST['editpost'])) {

  if (isset($_FILES['photo'])) {
    $img = $_FILES['photo'];
    $img_name = rand(1,10000) . '_'. $img['name'];
    $img_size = $img['size'];
    $img_tmp = $img['tmp_name'];
    $img_type = $img['type'];
    $img_ext = strtolower(end(explode('.',$img_name)));
    $img_path = "../images/".$img_name;
    // $extensions= array("jpeg","jpg","png");
    //
    // if(in_array($img_ext,$extensions)=== false){
    //    $errors[]="extension not allowed, please choose a jpg, JPEG or PNG file.";
    // }

        if($img_size > 5000000){
           $errors[]='File size must be less than 5mb';
        }
        if(empty($errors)){
           move_uploaded_file($img_tmp, $img_path);
        }
        }
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $content = mysqli_real_escape_string($db, $_POST['content']);

    if (empty($errors))
      {
        if ($_POST['captcha'] == $_SESSION['captcha']) {
        	unset($_SESSION['captcha']);
          $query = "UPDATE blog SET photo = '$img_name', name = '$name', title = '$title', content = '$content', email = '$email' WHERE id = '$id'";
          $result = mysqli_query($db, $query);
            if($result){
              echo "<h2 style='color:#37BF91'><center> BLOG HAS EDITED POSTED SUCCESSFULLY!! </center></h2>";
              echo "<h4 style='color:grey'><center> Redirecting you to the Admin Dashboard.</center></h4>";
              echo "<script>location.href='/admin-login/dashboard.php'</script>";
            }
            else {
              echo("Error description: " .  mysqli_error($db));
            }
          }
          else {
          	echo "<script>alert('wrong captcha!');</script>";
          }
      }
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Edit Blog | LearnIntern & Grow" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />


<!-- Page Title -->
<title>Edit Blog | LearnIntern & Grow</title>

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
<link href="/css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

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
<style>
.zoom {
    transition: transform .2s; /* Animation */
}
.zoom:hover {
    transform: scale(1.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

.border-success{border: 1px dashed #37BF91; padding: 10px;}
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
            <li class="m-0 pl-0 pr-10">
                <a href="../logout.php" class="text-white"><i class="fa fa-sign-out mr-5"></i>Logout </a>
            </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default"><a class="pull-left flip mt-sm-10 mb-sm-20" href="/"><img style="max-height:100px;" src="../images/logo-and-favicon/light-theme-transparent-logo.png" alt=""></a>
            <ul class="menuzord-menu">
              <li class=""><a href="/">Home</a></li>
              <li><a href="../about-us.php">About Us </a>  </li>
              <li><a href="/admin-login/agreement-for-online-trainings">Agreement for online training <span class="label label-danger">new</span></a></li>
              <li><a href="../courses.php">Courses</a></li>
              <li><a href="/contact-us.php">Contact Us</a></li>
              <?php if (isset($_SESSION['uname'])){ ?>
             <li class="active"><a href="#">Admin Dashboard</a> <?php } ?>
             </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <?php
        $query1 = "SELECT * FROM blog WHERE id = '$id'";
        $result1 = mysqli_query($db, $query1);
        if(mysqli_num_rows($result1)> 0){
          $row = mysqli_fetch_assoc($result1);
         ?>
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="/images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Edit Blog</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/">Home</a></li>
                <li><a href="/admin-login/dashboard.php">Admin Dashboard</a></li>
                <li class="active">Edit Blog</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

      <div class="container">
        <div class="row">
          <div class="section-title mb-50">
              <div class="col-md-12">
                <div class="esc-heading small-border text-center">
                  <h2>Edit<span class="text-theme-colored2"> Content</span></h2>
                    <div class="double-line-bottom-centered-theme-colored-2"></div>
                </div>
            </div>
          </div>
        </div>
        <form id="blog" name="blog" class="" method="post" action="/admin-login/edit-blog.php" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-3">
              <h4 class="text-theme-colored2">Edit Details</h4>
              <p class="line-bottom-theme-colored-2">General info</p>
              <div class="form-group">
                <label>Name <small>*</small></label>
                <input name="name" value= "<?php echo $row['name']; ?>" class="zoom form-control" type="text" placeholder="Enter Your Name">
              </div>
              <div class="form-group">
                <label>Email <small>*</small></label>
                <input name="email" value="<?php echo $row['email']; ?>" class="zoom form-control email"  type="email" placeholder="Enter Email Id">
              </div>
            </div>
       <div class="col-md-9">
         <h3 class="text-uppercase mt-0">Edit Blog Title</h3>
         <input name="title" value="<?php echo $row['title']; ?>" class="zoom form-control" type="text" style="font-weight:bold;font-size:22px;" placeholder="Add Title" ><br>
         <div class="form-group mb-30">
           <h3 class="text-uppercase mt-0">Edit Blog Image <span style="font-size:12px;">(only .jpg, .jpeg, .png format supported)</span></h3>
           <input class="form-control zoom border border-success" placeholder="Upload Your Photo" type="file" onchange="Filevalidation2()" id="photo" accept="image/*" name="photo" maxlength="1" >
           <div><span id="size"></span></div>
         </div>
         <h3 class="text-uppercase mt-0">Edit Content</h3>
         <textarea class="zoom form-control" name="content" > <?php echo $row['content'];?> </textarea>
          <div class="mt-20">
         <img src = " /image.php?captcha_text = <?php echo $_SESSION['captcha']; ?> " id="capimg" alt="Captacha code" id="capimg">
          <a href="javascript: void(0);" onclick="document.getElementById('capimg').src = '/image.php?' + Math.random(); return false"><i class="fa fa-refresh" aria-hidden="true"></i></a>
          <input type="text" name="captcha"  placeholder="Enter captcha" style="border: 1px solid #DDD;" class="zoom ml-20 mr-20 p-10" required>
      </div>
         <div class="form-group mt">
           <button type="submit" id="editpost" name="editpost" class="zoom btn btn-dark btn-theme-colored btn-flat pull-right" style="border-radius:25px;" data-loading-text="Please wait...">Edit</button>
         </div>
         </div>
       </div>
     </div>
   </form>
<?php }
   mysqli_close($db);?>
   </div>

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
<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy', function (e) {
        e.preventDefault();
    });

    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});

Filevalidation2 = () => {
  const fi = document.getElementById('image');
  // Check if any file is selected.
  if (fi.files.length > 0) {
    for (const i = 0; i <= fi.files.length - 1; i++) {

      const fsize = fi.files.item(i).size;
      const file = Math.round((fsize / 1024));
      // The size of the file.
      if (file >= 500) {
        size.style.color="red";
        document.getElementById('size').innerHTML = '<b>'+'Image File too Big! Please select a file less than 500KB' +'</b>';
        }
      else {size.style.color="green";
            document.getElementById('size').innerHTML = '<b>'+'File Size: ' + file +' KB</b>';}
         }
       }
   }
</script>
<script src="https://cdn.ckeditor.com/4.15.0/standard-all/ckeditor.js"></script>
<script>
        CKEDITOR.replace( 'content' );
</script>
<script>
   function validate(){
    if ($('#user').val()=="" && $('#pass').val()=='' && $('#capimg').val()=='') {
      alert('Enter All Details');
      return false;
    }
   }
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
