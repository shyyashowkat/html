<?php session_start();
$conn = mysqli_connect('192.145.239.50', 'datace9_uplink209', 'Uplink209@', 'datace9_learnintern');
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
} ?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="File Upload | LearnIntern & Grow " />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<meta name="author" content="Essential Services" />

<!-- Page Title -->
<title>File Upload | LearnIntern & Grow</title>

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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-min.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HY62C2WBH8"></script>
<style>
#filedrag
{
	/*display: none;*/
	font-weight: bold;
	text-align: center;
	padding: 1em 0;
	margin: 1em 0;
	color: #555;
	border: 2px dashed #555;
	border-radius: 7px;
	cursor: default;
}

#filedrag.hover
{
	color: #37bf91;
	border-color: #37bf91;
	border-style: solid;
	box-shadow: inset 0 3px 4px #888;
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
              <li class=""><a href="#">Learning Modules</a>
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
              <h2 class="text-theme-colored2 font-36">File Upload</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="/">Home</a></li>
                <li class="active">File Upload</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
<section>
<div class="container p-0 " style="max-width: 700px;">
	  <div class="border border-primary rounded mb-30" style="background-color:#d4d4d6;">
	<div class="col-md-12 mb-20">
	<h3><span class="text-uppercase mt-0 text-theme-colored2">Drag to Upload</span> </h3>
  <form id="upload" action="" method="POST"  class="reservation-form" enctype="multipart/form-data">
      <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />
      <div>
        <input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
        <div id="filedrag">or drop files here</div>
      </div>
      <div id="submitbutton">
        <button type="submit" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-lg btn-flat" style="border-radius:25px" data-loading-text="Please wait...">Upload Files</button>
      </div>
  </form>
  <div id="messages">
    <p><b>File(s) Information</b></p>
  </div>

  <div>
    <ul data-bind="foreach: filesUploaded">
      <li>
        <p>
          <i class="fa" data-bind="css: icon"></i>
        Name: <strong data-bind="text: name"></strong> | Type: <strong data-bind="text: type"></strong> | Size: <strong data-bind="text: size"></strong> bytes</p>
      </li>
    </ul>
  </div>
    </div>
	</div>
	</div>
</section>
		<?php
if ($_FILES['fileselect']) {

		$files = array_filter($_FILES['fileselect']['name']); //Use something similar before processing files.
// Count the number of uploaded files in array
$total_count = count($_FILES['fileselect']['name']);
// Loop through every file
for( $i=0 ; $i <= $total_count ; $i++ ) {
   //The temp file path is obtained
   $tmpFilePath = $_FILES['fileselect']['tmp_name'][$i];
   //A file path needs to be present
   if ($tmpFilePath != ""){
      //Setup our new file path
      $newFilePath = "uploadFiles/" . $_FILES['fileselect']['name'][$i];
      //File is uploaded to temp dir
      if(move_uploaded_file($tmpFilePath, $newFilePath)) {
         //Other code goes here
			$query = "INSERT INTO multi_module (mod1) VALUES (' " . $_FILES['fileselect']['name'][$i] . "')";
			$result = mysqli_query($conn, $query);
			if ($result) {
				echo "success";
			}

}}}} ?>

<script type="text/javascript">
var ViewModel = function() {
  var self = this;
  var filesUploaded = ko.observableArray([]);
  function addFileToList(file) {
    filesUploaded.push(new File(file));
  }

  function File(newFile) {
    var self = this;
    construct(newFile);

    function construct(file) {
      self.name = file.name;
		  self.type = file.type;
		  self.size = file.size;
      self.icon = setIconBasedOnFileType(file.type);
    }

    function setIconBasedOnFileType(fileType) {
      switch(fileType) {
        case 'text/plain':
          return "fa-file-text-o";
        case 'application/pdf':
          return "fa-file-pdf-o";
        case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
          return "fa-file-word-o";
        default:
          return "fa-file-o";
      }
    }
  }

  return {
    filesUploaded: filesUploaded,
    addFileToList: addFileToList
  };
}

var vm = new ViewModel();

ko.applyBindings(vm);

// getElementById
function $id(id) {
  return document.getElementById(id);
}

//
// output information
function Output(msg) {
  var m = $id("messages");
  m.innerHTML = msg + m.innerHTML;
}

// call initialization file
if (window.File && window.FileList && window.FileReader) {
  Init();
}

//
// initialize
function Init() {

  var fileselect = $id("fileselect"),
    filedrag = $id("filedrag"),
    submitbutton = $id("submitbutton");

  // file select
  fileselect.addEventListener("change", FileSelectHandler, false);

  // is XHR2 available?
  var xhr = new XMLHttpRequest();
  if (xhr.upload) {

    // file drop
    filedrag.addEventListener("dragover", FileDragHover, false);
    filedrag.addEventListener("dragleave", FileDragHover, false);
    filedrag.addEventListener("drop", FileSelectHandler, false);
    //filedrag.style.display = "block";

  }

}

// file drag hover
function FileDragHover(e) {
  e.stopPropagation();
  e.preventDefault();
  e.target.className = (e.type == "dragover" ? "hover" : "");
}

// file selection
function FileSelectHandler(e) {
	// cancel event and hover styling
	FileDragHover(e);

	// fetch FileList object
	var files = e.target.files || e.dataTransfer.files;

	// process all File objects
	for (var i = 0, f; f = files[i]; i++) {
		//ParseFile(f);
    vm.addFileToList(f);
	}

}

function ParseFile(file) {

	Output(
		"<p>File information: <strong>" + file.name +
		"</strong> type: <strong>" + file.type +
		"</strong> size: <strong>" + file.size +
		"</strong> bytes</p>"
	);

}

</script>





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
