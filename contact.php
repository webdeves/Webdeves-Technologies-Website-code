<!DOCTYPE html>
<html lang="en">
  

<head>
      <script> 
      function disableClick(){ 
        document.onclick=function(event){ 
          if (event.button == 2) { 
            alert('Right Click Message'); 
            return false; 
          } 
        } 
      } 
    </script> 
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Contact - Webdeves Technologies" />
    <meta name="author" content="webdeves.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact - Webdeves Technologies</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- Google Font -->
    <link rel="stylesheet" href="../../../fonts.googleapis.com/cssc15a.css?family=Archivo:400,400i,500,500i,600,600i,700,700i&amp;display=swap">

    <!-- CSS Global -->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins -->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/animate/animate.min.css"/>
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css" />

    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css" />

  </head>
  <body>

     <!--=================================
    header -->
    <header class="header default">
      <div class="topbar">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="d-block d-md-flex align-items-center text-center">
                <div class="mr-4 d-inline-block py-1">
                  <a href="#"><i class="far fa-envelope mr-2 fa-flip-horizontal text-primary"></i>info@webdeves.com</a>
                </div>
                <div class="mr-auto d-inline-block py-1">
                  <a href="tel:1-800-555-1234"><i class="fas fa-map-marker-alt text-primary mr-2"></i>56 Azikiwe Rd, beside Union Bank, Aba, Abia State</a>
                </div>
                <div class="d-inline-block py-1">
                  <ul class="list-unstyled">
                    <li><a href="careers">Careers</a></li>
                    <li><a href="pricing">Pricing</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar bg-white navbar-static-top navbar-expand-lg">
        <div class="container-fluid">
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
          <a class="navbar-brand" href="index">
            <img class="img-fluid" src="images/Webdeves%20logo.png" alt="logo">
          </a>
          <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index" id="navbarDropdown1" role="button" aria-haspopup="false" aria-expanded="false">Home</a>
              
              </li>
                    <li class="nav-item">
                <a href="about-us" class="nav-link">About Us</a>
             
              </li>
                    <li class="nav-item">
                <a href="service" class="nav-link">Services</a>
             
              </li>
              <li class="nav-item">
                <a href="projects" class="nav-link">Projects</a>
             
              </li>
              <li class="nav-item">
                <a href="blog" class="nav-link">Blog</a>
               
              </li>
              <li class="nav-item mega-menu">
                <a href="contact" class="nav-link">Contact Us</a>
                
              </li>
            </ul>
              </div>
          <div class="d-none d-sm-flex ml-auto mr-5 mr-lg-0 pr-4 pr-lg-0">
            <ul class="nav ml-1 ml-lg-2 align-self-center">
              <li class="contact-number nav-item pr-4 ">
                <a class="font-weight-bold" href="#"><i class="fab fa-whatsapp pr-2"></i>+(234) 8038988532</a>
              </li>
            
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!--=================================
    header -->
    <!--=================================
    Contat Form -->
    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-title text-center">
              <h1 style="color: #ff8c00">Contact us</h1>
              <p>Drop us a line! We’ll set up a time to chat over the phone or in-person to know more about your business needs. All primary conferences are free of charge.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-lg-around position-relative pt-5">
          <div class="col-lg-4 col-md-5 mb-4">
            <div class="is-sticky">
              <h4 class="mb-4" style="color: #ff8c00">Let’s talk about what you want to accomplish and how we can make it happen.</h4>
              <h5 class="text-light">This is the beginning of creating the life that you want to live.</h5>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 pr-lg-5">
            <div class="p-4 p-md-5 bg-white shadow">
              <h3 style="color: #ff8c00">Need assistance? please fill the form</h3>
              <form class="mt-4" action="contactsent.php" method="post" id="contact-form">
                <div class="form-group mb-3">
                  <input type="text" class="form-control"  placeholder="Full Name" name="name" required autocomplete="on">
                </div>
                   <div class="form-group mb-3">
                  <input type="tel" class="form-control"  placeholder="Phone Number" name="phone" required autocomplete="on">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control"  placeholder="Email Address" name="mail" required autocomplete="on">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control"  placeholder="Enquiry Type" name="subject" required>
                </div>
                <div class="form-group mb-4">
                  <textarea class="form-control"  placeholder="Enquiry Description" rows="5" name="message" required></textarea>
                </div>
                <div class="form-group mb-4">
                 
                </div>
                <div class="form-group mb-0">
                   <button type="submit" name="submit" class="btn btn-primary-round btn-round text-white w-space">Send mail<i class="fas fa-arrow-right pl-3"></i></button>
                </div>
              </form>
            </div>
          </div>
          <div class="contact-bg-logo">
            <i class="fas fa-comment"></i>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Contat Form  -->

    <!--=================================
    Contat Form info -->
    <section class="space-pb">
      <div class="container">
        <div class="row justify-content-lg-around">
          <div class="col-lg-4 col-md-5 mb-4">
            <div class="is-sticky">
              <div class="section-title">
                <h2 style="color: #ff8c00">Doing business with us is easy</h2>
              </div>
              <a href="https://www.google.com/maps/dir/6.537216,3.3521664/Webdeves+Technologies,+56+Azikiwe+Rd,+beside+Union+Bank,+450272,+Aba/@6.3581858,3.1145324,7z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x1069cd1a13070eab:0xae7d98c80834dcf5!2m2!1d7.3661002!2d5.1086679" target="_blank" class="btn btn-light-round btn-round">Get Direction<i class="fas fa-arrow-right pl-3"></i></a>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 pr-lg-5">
            <div class="row">
              <div class="col-sm-6 mb-4 mb-md-5">
                <img class="img-fluid mb-4" src="images/about/map-lacation-img1.png" alt="">
                <h4 style="color: #ff8c00">Abia State</h4>
                <h6 class="text-light mb-0">56 Azikiwe Road, beside Union Bank, Aba, Abia State.</h6>
              </div>
              <div class="col-sm-6 mb-4 mb-md-5">
                <img class="img-fluid mb-4" src="images/about/map-lacation-img2.png" alt="">
                <h4 style="color: #ff8c00">Port Harcourt</h4>
                <h6 class="text-light mb-0">280 Ph/Aba express Road, 2nd floor, opp Rumokwurishi Bus Stop.</h6>
              </div>
              <div class="col-sm-6">
                <img class="img-fluid mb-4" src="images/about/map-lacation-img4.png" alt="">
                <h4 style="color: #ff8c00">New York</h4>
                <h6 class="text-light mb-0">214 West Arnold St. New York, NY 10002</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Contat Form info-->

   <!--=================================
    News -->
    <section class="space-pb">
      <div class="container">
        <div class="row dark-background">
          <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
            <div class="feature-info feature-info-style-04">
              <div class="feature-info-content">
                <h4 class="mb-3 font-weight-normal feature-info-title" style="color: #ff8c00">Careers</h4>
                <p>Check out if we have any available work. You can see that in our career page. View available positions</p>
                <a href="careers" class="btn btn-primary-round btn-round text-white">View Positions<i class="fas fa-arrow-right pl-3"></i></a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
            <div class="feature-info feature-info-style-04">
              <div class="feature-info-content">
                <h4 class="mb-3 font-weight-normal feature-info-title" style="color: #ff8c00">Latest News</h4>
                <p>We have updates that can help you grow your business(s). Check out our blog page for our updates</p>
                <a href="blog" class="btn btn-primary-round btn-round text-white">Read Articles<i class="fas fa-arrow-right pl-3"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature-info feature-info-style-04">
              <div class="feature-info-content">
                <h4 class="mb-3 font-weight-normal feature-info-title" style="color: #ff8c00">Contact</h4>
                <p>We employ a staff of fully trained, friendly and professional agents that are available 24/7</p>
                <a href="contact" class="btn btn-primary-round btn-round text-white">Get in Touch<i class="fas fa-arrow-right pl-3"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    News -->

 <!--=================================
    footer-->
    <footer class="footer space-ptb bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-6 mb-5 mb-lg-0">
            <h5 class="mb-2 mb-sm-4" style="color: #ff8c00">IT Services</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-3 mb-sm-0">
                <li><a href="website-development">Website Development</a></li>
                <li><a href="digital-marketing">Digital Marketing</a></li>
                <li><a href="search-engine-optimization">Search Engine Optimization</a></li>
                <li><a href="branding">Branding</a></li>
              </ul>
              <ul class="list-unstyled mb-3 mb-sm-0">
                <li><a href="email-marketing">Email Marketing</a></li>
                <li><a href="#"></a></li>
                <li><a href="ecommerce-website">E-Commerce Website</a></li>
                <li><a href="start-up">Start-up Ideas</a></li>
              </ul>
              <ul class="list-unstyled mb-0">
                <li><a href="social-media">Social Media Growth</a></li>
                <li><a href="social-media">Social Media Engagement</a></li>
                <li><a href="social-media">Social Media Management</a></li>
                <li><a href="#"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
            <h5 class="mb-2 mb-sm-4" style="color: #ff8c00">Company</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
                <li><a href="about-us">About</a></li>
                <li><a href="our-team">Our Team</a></li>
                <li><a href="blog">Company News</a></li>
                <li><a href="https://webdeves.com/blog/">Blog</a></li>
                <li><a href="careers">Careers <span class="badge badge-success ml-2">We're hiring</span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <h5 class="mb-2 mb-sm-4" style="color: #ff8c00">Support</h5>
            <div class="footer-link">
              <ul class="list-unstyled mb-0">
                <li><a href="https://wa.me/2348038988532?text=Hello%0AI%20want%20to%20know%20more%20about%20the%20Webdeves.%0AMy%20name%20is%20-">Chat with us</a></li>
                <li><a href="contact">Contact Us</a></li>
                <li><a href="pricing">Pricing And Plans</a></li>
                <li><a href="internship-webdeves">Internship</a></li>
                <li><a href="privacy-policy">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 mt-5">
            <h5 class="mb-2 mb-sm-4" style="color: #ff8c00">Social</h5>
            <ul class="list-unstyled social-icon">
              <li><a href="https://facebook.com/webdevestech"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="https://twitter.com/webdevest"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/in/webdeves-technologies-b073001aa"><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="https://www.instagram.com/webdeves"><i class="fab fa-instagram"></i></a></li>
            </ul>
             <p class="mb-0 text-white mt-4">©Copyright 2020 <a href="index" style="color: #ff8c00">Webdeves Technologies</a> All Rights Reserved</p>
          </div>
          <div class="col-sm-6 mt-5">
            <h5 class="mb-2 mb-sm-4" style="color: #ff8c00">Where we are</h5>
            <div class="d-flex align-items-center mb-3">
              <img class="img-fluid flag-svg" src="images/svg/Nigeria.png" alt="">
              <div class="ml-4">
                <h6 class="mb-0 text-white">56 Azikiwe Rd, beside Union Bank, Aba, Abia State</h6>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <img class="img-fluid flag-svg" src="images/svg/usa.svg" alt="">
              <div class="ml-4">
                <h6 class="mb-0 text-white">214 West Arnold St. New York, NY 10002</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--=================================
    footer-->


    <!--=================================
    Back To Top-->
    <div id="back-to-top" class="back-to-top">Up</div>
    <!--=================================
    Back To Top-->

    <!--=================================
    Javascript -->

    <!-- JS Global -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Page JS Implementing Plugins -->
    <script src="js/jquery.appear.js"></script>
    <script src="js/counter/jquery.countTo.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jarallax/jarallax.min.js"></script>
    <script src="js/jarallax/jarallax-video.min.js"></script>
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/horizontal-timeline/horizontal-timeline.js"></script>
    <script src="js/shuffle/shuffle.min.js"></script>

    <!-- Custom Scripts -->
    <script src="js/custom.js"></script>
  </body>


</html>
