<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);
if(isset($_POST['login'])) 
  {
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql ="SELECT ID FROM tbluser WHERE Email=:email and Password=:password";
    $query=$dbh->prepare($sql);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['obbsuid']=$result->ID;
}
$_SESSION['login']=$_POST['email'];
echo "<script type='text/javascript'> document.location ='home.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Banquet Booking System | Login</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->

	
			
			
	
	<!-- //banner -->
	<!-- contact -->
	<!-- <div class="contact">
		<div class="container">
			<div class="agile-contact-form">
				<div class="col-md-6 contact-form-left">
				
					<div class="agileits-contact-address">
				<img src="images/gallery-8.jpg" alt="" height="500" width="500">
					</div>
				</div> -->
				<!-- <div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3>Login </h3>
					</div>
					<div class="agileinfo-contact-form-grid">
						<form action="#" method="post" name="login">
							<input type="email" name="email" placeholder="E-mail" required="true">
							<input type="password" name="password" placeholder="Password"  required="true">
							<br>
							<div class="forgot">
                                                            <a href="forgot-password.php">Forgot Password?</a>
                                                        </div>
                                                        <br>
							<button class="btn1"  id="do" name="login">LOGIN NOW</button>

						</form>

					</div>
				</div>
				<br>
				<div class="col-md-6 contact-form-right">
					 <div class="forgot">
                                                            <a href="signup.php">Register Yourself</a>
                                                        </div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			
		
		</div>
	</div> -->
	<!-- //contact -->
	
	<!-- jarallax -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
		
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/modernizr.custom.js"></script>

</body>	
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css2/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="#" method="post" name="login" class="signup-form">
                        <h2 class="form-title">Create account</h2>

                        <div class="form-group">
						<input type="email" name="email" placeholder="E-mail" required="true" class="form-input" >
                        </div>
                        <div class="form-group">
						<input type="password" name="password" placeholder="Password" class="form-input" required="true">
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
						<div class="forgot">
                                                            <a href="forgot-password.php">Forgot Password?</a>
                                                        </div>
                        <!-- <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div> -->
                        <div class="form-group">
						<button class="form-submit"  name="login">LOGIN NOW</button>
                        </div>
                    </form>
                    <p class="loginhere">
					Don't have an accout? <a href="signup.php" class="loginhere-link">sign up</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
	
    <!-- JS -->
   
    <script src="js2/main.js"></script>
</body>





