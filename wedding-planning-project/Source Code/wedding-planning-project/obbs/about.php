<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Banquet Booking System|| About </title>

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

	
		<?php include_once('includes/header.php');?>
		

			
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

   <!-- Page Header Start -->
   <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
               
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="images/about3.jpg" alt="">
                        <img class="img-fluid" src="images/about4.jpg" alt="">
                    </div>
                </div>
				<?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title"><?php  echo htmlentities($row->PageTitle);?></h4>
                    <h1 class="display-5 mb-4">All You Need In One Website To Have Your Ideal Wedding</h1>
                    <p><p><?php  echo $row->PageDescription;?></p><?php $cnt=$cnt+1;}} ?>
                    <p class="mb-4"></p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary" style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">25</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Years</h3>
                            <h3>Working</h3>
                            <h3 class="mb-0">Experience</h3>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


   

    <!-- Team Start -->
	<div class="container-xxl py-5">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <h4 class="section-title">Creative Team</h4>
              <h1 class="display-5 mb-4">We are a creative event planning team for your dream wedding</h1>
          </div>
          <div class="row g-0 team-items">
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="team-item position-relative">
                      <div class="position-relative">
                          <img class="img-fluid" src="img/d1.jpg" alt="">
                          <div class="team-social text-center">
                              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                      <div class="bg-light text-center p-4">
                          <h3 class="mt-2">Jennifer Zabinski</h3>
                          <span class="text-primary">Wedding &amp; Event Planner</span>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="team-item position-relative">
                      <div class="position-relative">
                          <img class="img-fluid" src="img/d2.jpeg" alt="">
                          <div class="team-social text-center">
                              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                      <div class="bg-light text-center p-4">
                          <h3 class="mt-2">Marcy Blum</h3>
                          <span class="text-primary">Wedding designer</span>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="team-item position-relative">
                      <div class="position-relative">
                          <img class="img-fluid" src="img/d3.jpg" alt="">
                          <div class="team-social text-center">
                              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                      <div class="bg-light text-center p-4">
                          <h3 class="mt-2">mindy weiss</h3>
                          <span class="text-primary">Event Planner</span>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                  <div class="team-item position-relative">
                      <div class="position-relative">
                          <img class="img-fluid" src="img/d4.jpg" alt="">
                          <div class="team-social text-center">
                              <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                              <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                          </div>
                      </div>
                      <div class="bg-light text-center p-4">
                          <h3 class="mt-2">Colin Cowie</h3>
                          <span class="text-primary">Event Planner</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <!-- Team End -->

	<?php include_once('includes/footer.php');?>