<?php session_start();

$name = "";
$phone = "";
$state =  "";
$ptime = "";
$old_password= "";
$password= "";
$confirm_password= "";
$errors = array();

 if (isset($_SESSION['user'])){
$conn = mysqli_connect('192.145.239.50', 'datace9_uplink209', 'Uplink209@', 'datace9_learnintern');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$name = mysqli_real_escape_string($conn, $_POST['name']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$ptime = mysqli_real_escape_string($conn, $_POST['ptime']);
$old_password = mysqli_real_escape_string($conn, $_POST['old_password']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$confirm_password= mysqli_real_escape_string($conn, $_POST['confirm_password']);

      if(isset($_FILES['curriculum'])){

            $cur_name = rand(1,1000) . '_' . $_FILES['curriculum']['name'];
            $cur_size =$_FILES['curriculum']['size'];
            $cur_tmp =$_FILES['curriculum']['tmp_name'];
            $error = $_FILES['cv']['error'];
            $cur_type=$_FILES['curriculum']['type'];
            $cur_ext=strtolower(end(explode('.',$_FILES['curriculum']['name'])));
            $cur_path = "trainer/curriculum/".$cur_name;
            // $extensions= array("jpeg","jpg","png");
            //
            // if(in_array($file_ext,$extensions)=== false){
            //    $errors[]="extension not allowed, please choose a jpg, JPEG or PNG file.";
            // }

            if($cur_size > 5000000){
              echo "<h3 style='color:red'><center>Module file too large. </center></h3>";
            }

            if(empty($errors)==true){
               move_uploaded_file($cur_tmp,$cur_path);

            }
            echo $error;
         }

  $user = $_SESSION['user'];
  if ($_SESSION['type'] == 'trainers'){
    $sql = "SELECT * FROM trainers WHERE email =  '$user'";
  }
  if ($_SESSION['type'] == 'students'){
    $sql = "SELECT * FROM students WHERE email =  '$user'";
  }
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {

if ($_SESSION['type'] == 'trainers')
{
  if (isset($_POST['cng_btn']))
  {
    $query = "UPDATE trainers SET name='$name', phone='$phone', state='$state' WHERE email =  '$user'";
    $result1 = mysqli_query($conn, $query);
    if($result1)
    {
      echo "<script>alert('Updated successfully!');</script>";
      echo "<script>location.href='/login.php'</script>";
    }
    else
    {
      echo "<script>alert('Some error occured!');</script>";
    }
  }

  if (isset($_POST['cng_mod']))
  { $mod = "../trainer/curriculum/" . $row['curriculum'];
    if($mod){
      unlink($mod);
       }
    $query = "UPDATE trainers SET curriculum='$cur_name' WHERE email =  '$user'";
    $result1 = mysqli_query($conn, $query);
    if($result1)
    {
      echo "<script>alert('Module Added!');</script>";
    }
    else
    {
      echo "<script>alert('Some error occured!');</script>";
    }
  }

  if (isset($_POST['pass_btn']))
  {
   $check= "SELECT password FROM trainers WHERE email = '$user'";
   $result2 = mysqli_query($conn, $check);
   if($result2)
   {
     $query1 = "UPDATE trainers SET password='$password' WHERE email =  '$user'";
     $result3 = mysqli_query($conn, $query1);
     if($result3)
     {
       echo "<script>alert('Password changed successfully!');</script>";
       echo "<script>location.href='/login.php'</script>";
     }
     else
     {
       echo "<script>alert('Some eror occured!');</script>";
     }
   }
  }
}


if ($_SESSION['type'] == 'students')
{
  if (isset($_POST['cng_btn']))
  {
    $query = "UPDATE students SET name='$name', phone='$phone', state='$state' WHERE email =  '$user'";
    $result1 = mysqli_query($conn, $query);
    if($result1)
    {
      echo "<script>alert('Updated successfully!');</script>";
      echo "<script>location.href='/login.php'</script>";
    }
    else
    {
      echo "<script>alert('Some eror occured!');</script>";
    }
  }
  if (isset($_POST['pass_btn']))
  {
   $check= "SELECT password FROM students WHERE email = '$user'";
   $result2 = mysqli_query($conn, $check);
   if($result2)
   {
     $query1 = "UPDATE students SET password='$password' WHERE email =  '$user'";
     $result3 = mysqli_query($conn, $query1);
     if($result3)
     {
       echo "<script>alert('Password changed successfully!');</script>";
       echo "<script>location.href='/login.php'</script>";
     }
     else
     {
       echo "<script>alert('Some eror occured!');</script>";
     }
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
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />

<!-- Page Title -->
<title>Edit Profile | LearnIntern & Grow</title>

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
                  <a href="mailto:class@learnintern.com" class="text-white"><i class="fa fa-envelope-o text-white mr-5"></i> class@learnintern.com</a>
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
                <a href="/logout.php" class="text-white"><i class="fa fa-sign-out mr-5"></i>Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
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
                  <li><a href="/free-modules.php">Free</a>
                    <!-- <ul class="dropdown">
                      <li><a href="page-about1.html">About Style 1</a></li>
                      <li><a href="page-about2.html">About Style 2</a></li>
                    </ul> -->
                  </li>
                  <li><a href="#">Premium</a>
                    <!-- <ul class="dropdown">
                      <li><a href="page-teachers-style1.html">Teachers style 1</a></li>
                      <li><a href="page-teachers-style2.html">Teachers style 2</a></li>
                      <li><a href="page-teacher-details.html">Teachers Details</a></li>
                    </ul> -->
                  </li>

                </ul>
              </li>
              <li><a href="/courses.php">Courses</a>
                <!-- <ul class="dropdown">
                  <li><a href="page-course-gird.html">Course Gird</a></li>
                  <li><a href="page-course-list.html">Course List</a></li>
                  <li><a href="page-course-details.html">Course Details</a></li>
                </ul> -->
              </li>
              <li><a href="/our-trainers.php">Our Trainers</a>  </li>
              <?php if (isset($_SESSION['user'])) {
               ?>
              <li><a href="/dashboard.php">Dashboard</a><?php  } ?></li>
              <li><a href="/contact-us.php">Contact Us</a></li>
                </ul>
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

              <h2 class="text-theme-colored2 font-36">Welcome, <?php echo $row['name']; ?> </h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/">Home</a></li>
                <li> <a href="/dashboard.php">Dashboard</a></li>
                <li class="active"> Edit Profile</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Doctor Details -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sx-12 col-sm-4 col-md-3">
              <div class="doctor-thumb" >
                <?php if ($_SESSION['type'] == 'trainers') {?>
                  <img src="trainer/image/<?php echo $row['photo']; ?>" alt=""><?php
                } else { ?>
                <img src="images/about/profile1.jpg" alt=""> <?php } ?>
              </div>
              <div class="info p-20 bg-black-333">
                <h4 class="text-uppercase text-white"><?php echo $row['name']; ?></h4>
                <ul class="list angle-double-right m-0">
                  <li class="mt-0 text-gray-silver"><strong class="text-gray-lighter">Email :</strong> <?php echo $row['email']; ?></li>
                  <li class="mt-0 text-gray-silver"><strong class="text-gray-lighter">Phone :</strong> <?php echo $row['phone']; ?></li>
                  <li class="mt-0 text-gray-silver"><strong class="text-gray-lighter">State :</strong> <?php echo $row['state']; ?></li>

                </ul>
                <a name="edit_btn" class="btn btn-info btn-flat mt-10 mb-sm-30" href="/dashboard.php">Profile</a>
                <a name="logout" class="btn btn-danger btn-flat mt-10 mb-sm-30" href="/logout.php">Logout</a>
              </div>
              <br><br>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
                  <div class="icon-box mb-0 p-0">
                    <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                      <i class="fa fa-user"></i>
                    </a>
                    <h4 class="text-gray pt-10 mt-0 mb-30">Edit Profile</h4>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Name</label>
                        <input  placeholder="Enter Your Name" id="name" name="name"  value= <?php echo $row['name']; ?> class="form-control"  type="text">
                    </div>
                    <div class="form-group col-md-6">
                      <label>State</label>
                      <input  placeholder="Enter State" id="state" name="state"  value= <?php echo $row['state']; ?> class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Phone</label>
                      <input  placeholder="Enter Your Mobile Number" id="phone" name="phone" value= <?php echo $row['phone']; ?> class="form-control"  type="tel" maxlength="10" pattern="[6-9]{1}[0-9]{9}">
                    </div>
                  </div>
                  <?php if ($_SESSION['type'] == 'trainers') { ?>
                    <form name="editprofile-form" method="post" action="" enctype="multipart/form-data">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="" >Upload Your Photo (maximum size: 200 X 170 px)</label><input class="zoom border border-success" placeholder="Upload Your Photo" type="file" onchange="Filevalidation2()" id="myphoto" accept="image/*" name="photo" class="form-control"  maxlength="1">
                      (only .jpg, .jpeg, .png format supported)
                      <div><span id="size"></span></div>
                    </div>
                    <div class="form-group col-md-3">
                      <button type="upload" id="cng_dp" name="cng_dp" class="btn btn-danger btn-block text-white" style="border-radius:25px" data-loading-text="Please wait...">Upload Image</button>
                    </div>
                     </form>
                    <?php if(isset($_FILES['photo'])){

                          $img = $_FILES['photo'];
                          $img_name = rand(1,1000) . '_'. $img['name'];
                          $img_size = $img['size'];
                          $img_tmp = $img['tmp_name'];
                          $img_type = $img['type'];
                          $img_ext=strtolower(end(explode('.',$img_name)));
                          $img_path = "trainer/image/".$img_name;
                          // $extensions= array("jpeg","jpg","png");
                          //
                          // if(in_array($file_ext,$extensions)=== false){
                          //    $errors[]="extension not allowed, please choose a jpg, JPEG or PNG file.";
                          // }

                          if($img_size > 500000){
                             echo "<h3 style='color:red'><center>Image file too large. </center></h3>";
                          }

                          if(empty($errors)==true){
                          if (move_uploaded_file($img_tmp,$img_path)){
                            if (isset($_POST['cng_dp']))
                            { $pic = "../trainer/image/" . $row['photo'];
                              if ($pic){
                              unlink($pic);
                              }
                              $query = "UPDATE trainers SET photo='$img_name' WHERE email =  '$user'";
                              $result1 = mysqli_query($conn, $query);
                              if($result1)
                              {
                                echo "<script>alert('Profile Image Updated!');</script>";
                              }
                              else
                              {
                                echo "<script>alert('Some error occured!');</script>";
                              }
                            }
                          }

                          }
                       } ?>

                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="" >Upload Your Module</label>  &nbsp;&nbsp;i.e. Teaching Syllabus (only pdf format supported)<input class="zoom border border-success" type="file" id="curriculum" accept="application/pdf" onchange="Filevalidation1()"  name="curriculum" class="form-control"  maxlength="1">
                      <div><span id="cursize"></span></div>
                    </div>
                    <div class="form-group col-md-3">
                      <button type="upload" id="cng_mod" name="cng_mod" class="btn btn-danger btn-block text-white" style="border-radius:25px" data-loading-text="Please wait...">Upload Module</button>
                    </div>
                  </div>
                <?php  } ?>
                  <div class="row">
                  <div class="form-group col-md-3">
                    <button name="cng_btn" id="cng_btn" class="btn btn-primary btn-block text-white" type="submit">Save Changes</button>
                  </div>
                </div>


                <hr class="mt-70 mb-70">

                <form name="editprofile-form" method="post">
                  <div class="icon-box mb-0 p-0">
                    <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                      <i class="fa fa-key"></i>
                    </a>
                    <h4 class="text-gray pt-10 mt-0 mb-30">Change Password</h4>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Old Password</label>
                      <input name="old_password" class="form-control" type="password">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Enter New Password</label>
                      <input placeholder="Enter Your Password" id="password" onkeyup="CheckPasswordStrength(this.value)" name="password" class="form-control"  type="password" >
                      <div><span id="password_strength"></span></div>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Re-enter Password</label>
                      <input placeholder="Confirm Password" id="confirm_password" name="confirm_password"  class="form-control"  type="password">
                      <div class="alert" id="error" style="color:red">
                    </div>
                  </div>
                  <div class="form-group col-md-3">
                    <button name="pass_btn" id="pass_btn" class="btn btn-primary btn-block text-white" type="submit">Update Password</button>
                  </div>
                </form>

              <?php }
              }

              mysqli_close($conn); ?>
              </div>
            </div>
          </div>
        </div>
      </section>

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
<script type="text/javascript">
Filevalidation2 = () => {
  const fi = document.getElementById('myphoto');
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

         Filevalidation1 = () => {
           const fi = document.getElementById('curriculum');
           // Check if any file is selected.
           if (fi.files.length > 0) {
             for (const i = 0; i <= fi.files.length - 1; i++) {

               const fsize = fi.files.item(i).size;
               const file = Math.round((fsize / 1024));
               const mbfile =Math.round((file / 1024));;
               // The size of the file.
               if (file >= 4096) {
                 cursize.style.color="red";
                 document.getElementById('cursize').innerHTML = '<b>'+'PDF File too Big! Please select a file less than 4MB' +'</b>';
                 }
               else {cursize.style.color="green";
                     document.getElementById('cursize').innerHTML = '<b>'+'File Size: ' + mbfile +' MB or ' + file +' KB</b>';}
                     }
                    }
                   }




$('.dropdown-toggle').dropdown();
function CheckPasswordStrength(password) {
    var password_strength = document.getElementById("password_strength");

    //TextBox left blank.
    if (password.length == 0) {
        password_strength.innerHTML = "";
        return;
    }

    //Regular Expressions.
    var regex = new Array();
    regex.push("[A-Z]"); //Uppercase Alphabet.
    regex.push("[a-z]"); //Lowercase Alphabet.
    regex.push("[0-9]"); //Digit.
    regex.push("[$@$!%*#?&]"); //Special Character.

    var passed = 0;

    //Validate for each Regular Expression.
    for (var i = 0; i < regex.length; i++) {
        if (new RegExp(regex[i]).test(password)) {
            passed++;
        }
    }

    //Validate for length of Password.
    if (passed > 2 && password.length > 8) {
        passed++;
    }

    //Display status.
    var color = "";
    var strength = "";
    switch (passed) {
        case 0:
        case 1:
            strength = "Weak Password, Try some alphabets, numericals and symbols like @/.";
            color = "red";
            break;
        case 2:
            strength = "Good, Make it more strong.";
            color = "darkorange";
            break;
        case 3:
        case 4:
            strength = "Strong Password, Well done!";
            color = "green";
            break;
        case 5:
            strength = "Very Strong Password";
            color = "darkgreen";
            break;
    }
    password_strength.innerHTML = strength;
    password_strength.style.color = color;
}


function confirmPassword() {
if(document.querySelector('#password').value !== document.querySelector('#confirm_password').value){
document.querySelector('#error').innerHTML ="Password do not matched.";
return false;
}
else{
document.querySelector('#error').style.display = "none";
}
}
$(document).ready(function () {
$("#confirm_password").keyup(confirmPassword);
});

      </script>

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
<script>
    function pageRedirect() {
      alert(Account deleted Successfully"");
      window.location.href = "https://learnintern.com/login.php/";
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
<?php
 }
else {
  session_destroy();
  header('location: /login.php');
} ?>
