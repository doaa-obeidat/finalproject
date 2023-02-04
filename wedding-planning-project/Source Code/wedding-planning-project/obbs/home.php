<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');


?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Arkitektur - Architecture HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css1" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css1/style.css" rel="stylesheet">
</head>

<body>
<div class="banner jarallax">
		<div class="agileinfo-dot">
			<?php include_once('includes/header.php');?>
			</div>
			</div>
			
    <!-- Spinner Start
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/icon-1.png" alt="Icon">
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:+0123456789"><i class="fa fa-phone-alt text-primary me-2"></i>+012 345 6789</a>
                    <a class="text-body px-2" href="mailto:info@example.com"><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                    <a class="text-body px-2" href="">Terms</a>
                    <a class="text-body px-2" href="">Privacy</a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>  -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <!-- <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0"><img class="me-3" src="img/icons/logo.png" alt="Icon"></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index" class="nav-item nav-link active">Home</a>
                <!-- <a href="about" class="nav-item nav-link">About</a> -->
                <!-- <a href="service" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu border-0 m-0"> -->
                        <!-- <a href="feature" class="dropdown-item">Our Features</a>
                        <a href="project" class="dropdown-item">Our Projects</a> -->
                        <!-- <a href="team" class="dropdown-item">Team Members</a> -->
                        <!-- <a href="appointment" class="dropdown-item">Appointment</a> -->
                        <!-- <a href="testimonial" class="dropdown-item">Testimonial</a> -->
                        <!-- <a href="404" class="dropdown-item">404 Page</a> -->
                    <!-- </div>
                </div>
                <a href="contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ route('register') }}" class="nav-item nav-link active">Register</a>
                <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
            
        </div> -->
    <!-- </nav>  -->
    <!-- Navbar End -->

     <!-- Back to Top -->
     <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->

     

       <!-- Carousel Start -->
       <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="owl-carousel header-carousel position-relative">
          <div class="owl-carousel-item position-relative" data-dot="<img src='img/c2.jpg'>">
              <img class="img-fluid" src="img/c2.jpg" alt="doaa">
              <div class="owl-carousel-inner">
                  <div class="container">
                      <div class="row justify-content-start">
                          <div class="col-10 col-lg-8">
                              <h1 class="display-1 text-white animated slideInDown">Your Personal Dream Maker </h1>
                              <h2 class="display-1 text-white animated slideInDown">Planning Planner</h2>
                              <p class="fs-5 fw-medium text-white mb-4 pb-3">We believe that it is all about the BIG DREAMS and the small details!</p>
                              <a href="https://planning.wedding/guest-list" class="btn btn-primary py-3 px-5 animated slideInLeft">Read More</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative" data-dot="<img src='img/c.jpg'>">
              <img class="img-fluid" src="img/c.jpg" alt="">
              <div class="owl-carousel-inner">
                  <div class="container">
                      <div class="row justify-content-start">
                          <div class="col-10 col-lg-8">
                              <h1 class="display-1 text-white animated slideInDown">To Know Us is to Love Us!</h1>
                              <h2 class="display-1 text-white animated slideInDown">Wedding &amp; Event Planner</h2>
                              <p class="fs-5 fw-medium text-white mb-4 pb-3">We would love to meet up and chat about how we can make YOUR DREAM wedding happen!</p>
                              <a href="https://planning.wedding/guest-list" class="btn btn-primary py-3 px-5 animated slideInLeft">Read More</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="owl-carousel-item position-relative" data-dot="<img src='img/c3.jpg'>">
              <img class="img-fluid" src="img/c3.jpg" alt="">
              <div class="owl-carousel-inner">
                  <div class="container">
                      <div class="row justify-content-start">
                          <div class="col-10 col-lg-8">
                              <h1 class="display-1 text-white animated slideInDown">Destination Wedding Planner</h1>
                              <h2 class="display-1 text-white animated slideInDown">Wedding &amp; Event Planner</h2>
                              <p class="fs-5 fw-medium text-white mb-4 pb-3">No matter your dreams - we can assist you in planning your PWE WEDDINGS &amp; EVENTS.</p>
                              <a href="https://planning.wedding/guest-list" class="btn btn-primary py-3 px-5 animated slideInLeft">Read More</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Carousel End -->


  <!-- Facts Start -->
  <div class="container-xxl py-5">
      <div class="container pt-5">
          <div class="row g-4">
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                      <div class="fact-icon">
                          <img src="img/icons/c9.png" alt="Icon">
                      </div>
                      <h3 class="mb-3">Wedding Planner</h3>
                      <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                      <div class="fact-icon">
                          <img src="img/icons/c8.png" alt="Icon">
                      </div>
                      <h3 class="mb-3">Book a consultaion</h3>
                      <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                      <div class="fact-icon">
                          <img src="img/icons/c0.png" alt="Icon">
                      </div>
                      <h3 class="mb-3">The Bride</h3>
                      <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Facts End -->


  <!-- About Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="row g-5">
              <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                  <div class="about-img">
                      <img class="img-fluid" src="img/about3.jpg" alt="">
                      <img class="img-fluid" src="img/about4.jpg" alt="">
                  </div>
              </div>
              <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                  <h4 class="section-title">About Us</h4>
                  <h1 class="display-5 mb-4">All You Need In One Website To Have Your Ideal Wedding</h1>
                  <p>Our website will help you from A to Z so that you can get the best wedding ceremony, this website is characterized by the availability of all the services required to hold a wedding, this will save a lot of effort and time,</p>
                  <p class="mb-4">and of course you as a client will be aware of all the preparations and you can modify them at any time, we will be so happy if you choose our website to be a part of this happy occasion.</p>
                 
                  <a class="btn btn-primary py-3 px-5" href="about.php">Read More</a>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->




  <!-- Project Start -->
  <div class="container-xxl project py-5">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <h4 class="section-title">Suggested Themes</h4>
              <h1 class="display-5 mb-4">You can get some ideas that you can add to your wedding</h1>
          </div>
          <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
              <div class="col-lg-4">
                  <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                      <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                          <h3 class="m-0">01. Royal wedding</h3>
                      </button>
                      <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                          <h3 class="m-0">02. Forest wedding</h3>
                      </button>
                      <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                          <h3 class="m-0">03. Beach wedding</h3>
                      </button>
                      <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                          <h3 class="m-0">04. Simple wedding</h3>
                      </button>
                  </div>
              </div>
              <div class="col-lg-8">
                  <div class="tab-content w-100">
                      <div class="tab-pane fade show active" id="tab-pane-1">
                          <div class="row g-4">
                              <div class="col-md-6" style="min-height: 350px;">
                                  <div class="position-relative h-100">
                                      <img class="position-absolute img-fluid w-100 h-100" src="img/7.jpg"
                                          style="object-fit: cover;" alt="">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <h1 class="mb-3">Get best fancy wedding experience</h1>
                                  <p class="mb-4">Our website gives u all the needed services that would make you the best royal wedding you ever imagined your wedding and nature at the same time.</p>
                                  <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                  <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                  <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                  <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="tab-pane-2">
                          <div class="row g-4">
                              <div class="col-md-6" style="min-height: 350px;">
                                  <div class="position-relative h-100">
                                      <img class="position-absolute img-fluid w-100 h-100" src="img/0.jpg"
                                          style="object-fit: cover;" alt="">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <h1 class="mb-3">Wedding in the depths of nature</h1>
                                  <p class="mb-4">You can have such a Unique wedding with this wedding theme that our website highly recommended,enjoying your wedding and nature at the same time.</p>
                                  <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                  <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                  <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                  <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="tab-pane-3">
                          <div class="row g-4">
                              <div class="col-md-6" style="min-height: 350px;">
                                  <div class="position-relative h-100">
                                      <img class="position-absolute img-fluid w-100 h-100" src="img/6.jpg"
                                          style="object-fit: cover;" alt="">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <h1 class="mb-3">A wonderful and amazing wedding </h1>
                                  <p class="mb-4">With sea view on the beach and Full wedding preparations dedicated to the beach environment you will be having the best wedding .</p>
                                  <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                  <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                  <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                  <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="tab-pane-4">
                          <div class="row g-4">
                              <div class="col-md-6" style="min-height: 350px;">
                                  <div class="position-relative h-100">
                                      <img class="position-absolute img-fluid w-100 h-100" src="img/5.jpg"
                                          style="object-fit: cover;" alt="">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <h1 class="mb-3">Simplicity in wedding design is key</h1>
                                  <p class="mb-4">You still can enjoy your wedding with a simple theme of your choice that will be simple but with the best preparation. </p>
                                  <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                  <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                  <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                  <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Project End -->


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






  <section id="gallery" class="gallery">

      
      <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <h4 class="section-title">Gallery</h4>
              <h1 class="display-5 mb-4">Some pictures of our </h1>
          </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

          <div class="row g-0">

              <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                      <a href="img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                          <img src="img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                      </a>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                      <a href="img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                          <img src="img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                      </a>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                      <a href="img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                          <img src="img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                      </a>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                      <a href="img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                          <img src="img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                      </a>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                      <a href="img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                          <img src="img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                      </a>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                      <a href="img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                          <img src="img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                      </a>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                      <a href="img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                          <img src="img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                      </a>
                  </div>
              </div>

              <div class="col-lg-3 col-md-4">
                  <div class="gallery-item">
                      <a href="img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                          <img src="img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                      </a>
                  </div>
              </div>

          </div>

      </div>
  </section>
  <!-- Appointment End -->


  <!-- Testimonial Start -->
  <!-- <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <h4 class="section-title">Testimonial</h4>
              <h1 class="display-5 mb-4">Thousands Of Customers Who Trust Us And Our Services</h1>
          </div>
          <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
              <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                  <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                  <h3>Client Name</h3>
                  <span class="text-primary">Profession</span>
              </div>
              <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt=''>">
                  <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                  <h3>Client Name</h3>
                  <span class="text-primary">Profession</span>
              </div>
              <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>">
                  <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                  <h3>Client Name</h3>
                  <span class="text-primary">Profession</span>
              </div>
          </div>      
      </div>
  </div> -->
  <!-- Testimonial End -->




  <?php include_once('includes/footer.php');?>




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>




<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js1/main.js"></script>
</body>
</html>
