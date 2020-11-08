<!DOCTYPE html>
<!--  Website created by Alexandra French
      For the Robotics Club of Central Florida
      Created on August 5, 2020
      Contact club: ucfroboticsclubnews@gmail.com
                    robotics@ucf.edu

      Last Updated on: November 4, 2020
      Last Updated By: Alexandra French
-->

<html lang="en">

<head>

  <!-- bare minimum -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- icons -->
  <link rel="icon" href="/assets/imgs/favicon.ico">
  <link rel="roboskull icon" href="/assets/imgs/favicon.ico">
  <link rel="mask-icon" href="/assets/imgs/favicon.ico" color="white">
  <link rel=”apple-touch-icon” sizes="114×114" href="/assets/imgs/favicon.ico" />
  <link rel=”apple-touch-icon” sizes="72×72" href="/assets/imgs/favicon.ico" />
  <link rel=”apple-touch-icon” href="/assets/imgs/favicon.ico" />

  <!-- Website Info -->
  <title>Robotics Club of Central Florida</title>
  <meta name="author" content="Alexandra French">
  <meta name="description" content="The Robotics Club of Central Florida is a student powered club based on hands on work with autonomous robotics.">
  <meta name="keywords" content="UCF robotics club, University of Central Florida, UCF, robotics club, robotics club,
                                 UCF robotics, UCF club, RSO, AUVSI, autonomous, SUAS, AHRS, IMU, i2C, ROS, ROS melodic,
                                 melodic, linux, ubuntu, open source, opensource, engineering, mechanical,
                                 mechanical engineering, electrical, eletrical engineering, computer, computers,
                                 computer science, FOSS, undergraduate, graduate, operating system, vehicles, unmanned,
                                 machine learning, computer vision, sensors, lidar, demobot, citrobot, Robotics Club of
                                 Central Florida, central florida, robotics club">
  <link rel="canonical" href="https://robotics.ucf.edu"/>

  <!-- facebook open graphs -->
  <meta property="og:url"                content="https://robotics.ucf.edu" />
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="Robotics Club of Central Florida" />
  <meta property="og:description"        content="A student run club dedicated to exploring and improving robotics. Current projects: a combat bot, an autonomous bot, and a demonstration bot." />
  <meta property="og:image"              content="https://robotics.ucf.edu/assets/imgs/header/roboskull-gold.png" />

  <!-- twitter card -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@RoboticsClubCFl" />
  <meta name="twitter:title" content="Robotics Club of Central Florida" />
  <meta name="twitter:description" content="A student run club dedicated to exploring and improving robotics. Current projects: a combat bot, an autonomous bot, and a demonstration bot." />
  <meta name="twitter:image" content="https://robotics.ucf.edu/assets/imgs/header/roboskull-gold.png" />

  <!-- verification of ownership for google search -->
  <meta name="google-site-verification" content="NDgsiRwy1o33-MY4WCiz7Fi69rFDe5iEHkB2cfptC8I" />

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-18245445-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-18245445-1');
  </script>

  <!-- schema markup  -->
  <script type="application/ld+json">
  {
    "@context" : "https://schema.org",
    "@type" : "Organization",
    "image" : "https://robotics.ucf.edu/assets/imgs/header/roboskull-gold.png",
    "name" : "Robotics Club of Central Florida",
    "telephone" : "(407) 882-0293",
    "email" : "robotics@ucf.edu",
    "address" : {
      "@type" : "PostalAddress",
      "streetAddress" : "Partnership II Rm 108, 3100 Technology Pkwy",
      "addressLocality" : "Orlando",
      "addressRegion" : "Florida",
      "addressCountry" : "USA",
      "postalCode" : "32826"
    },
    "url" : "https://robotics.ucf.edu/",
    "sameAs" : [
      "https://facebook.com/RoboticsClub",
      "https://instagram.com/RoboticsClubCFl",
      "https://twitter.com/RoboticsClubCFl",
      "https://www.youtube.com/channel/UCZEPdNUFzkciC7MIiI-yPKg",
      "https://linkedin.com/company/robotics-club-at-ucf"
    ]
  }
  </script>

  <!-- geotags -->
  <meta name="ICBM" content="28.585626, -81.199236">
  <meta name="geo.position" content="28.585626;-81.199236">
  <meta name="geo.region" content="US-FL">
  <meta name="geo.placename" content="Orlando">

  <!-- Bootstrap -->
  <link href="assets/rsrc/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Page styles -->
  <link href="assets/css/global-styles.css" rel="stylesheet">
  <link href="assets/css/index.css" rel="stylesheet">

</head>

<body>  
  <div class="page-container">
  <!-- Navbar -->
  <div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-clear text-right" id="navigation bar">
      <div class="container">
        <!-- logo and name -->
          <a class="navbar-brand" href="/">
            <div class="nav-img">
              <img src="/assets/imgs/header/roboskull-white.png" alt="club logo white">
              <img class="overlay" src="/assets/imgs/header/roboskull-gold.png" loading="lazy" alt="club logo gold">
              <div class="d-none d-md-block" id="nav-logo-text" aria-label="navigation-logo-text">Robotics Club of Central Florida</div>
              <div class="d-none d-block d-md-none">&nbsp;</div>
            </div>
          </a>
          <!-- navigation links -->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
                <a class="dropdown-item" href="/about/index">About Us</a>
                <a class="dropdown-item" href="/about/contact">Contact Us</a>
                <a class="dropdown-item" href="/about/constitution">Constitution</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/projects/index">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/announcements/index">Announcements</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                News
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
                <a class="dropdown-item" href="/news/index">Newsletter</a>
                <a class="dropdown-item" href="/news/social-media">Social Media Feed</a>
                <a class="dropdown-item" href="https://us11.campaign-archive.com/home/?u=ba5c2944886feb2964a80fe11&id=e63d752fa6">News Archive</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/sponsors/index">Sponsors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/faq/index">FAQ</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
                <a class="dropdown-item" href="/more/gallery">Photo Gallery</a>
                <div id="theme-toggle">
                  <label for="toggle-dark">Dark Mode
                  <div class="switch">
                    <input type="checkbox" id="toggle-dark">
                    <div class="slider round" id="switch-toggle"></div>
                  </div>
                  </label>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- /.navbar -->


  <!-- snap container for page -->
  <div class="snapper y mandatory-snapping">
  
    <!-- snap slideshow and news -->
    <div class="snap-child justify-content-center align-items-center">
      <!-- slideshow -->
      <div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
          <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselIndicators" data-slide-to="1"></li>
          <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('assets/imgs/home/roboticsSlide.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h1>Robotics</h1>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('assets/imgs/home/innovationSlide.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h2>Innovation</h2>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('assets/imgs/home/successSlide.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h2>Success</h2>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- /.slide show -->

      <!-- Page Content Container 1 -->
      <div class="container">
        <!-- calendar and announcements -->
        <div class="ann-cal-container">
          <!-- calendar/announcements -->
          <div class="row h-100 no-gutters">
            <!-- button to show calendar -->
            <div class="button-container">
              <button type="button" class="btn btn-secondary calendar-button d-flex align-items-center justify-content-center" id="calendar-button">
                <div class="calendar-text">Calendar</div>
              </button>
            </div>
            <!-- button to show announcements -->
            <div class="button-container">
              <button type="button" class="btn btn-secondary calendar-button d-flex align-items-center justify-content-center disabled" id="announcement-button">
                <div class="calendar-text">News</div>
              </button>
            </div>
            <!-- /.announcements button -->
            <!-- container for announcements and calendar-->
            <div class="events">
              <!-- calendar, shows initially -->
              <div class="calendar-container hidden" id="calendar">
                <div class="fix-calendar">
                  <iframe loading="lazy" src="https://calendar.google.com/calendar/embed?height=300&amp;wkst=1&amp;bgcolor=%23212121&amp;ctz=America%2FNew_York&amp;src=bThzbzIwNXJqMjUyNm40cm92YnAzdDRmMDRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%239D7000&amp;color=%23227F63&amp;showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;mode=MONTH" style="border:solid 1px #777" width="350" height="500" frameborder="0" scrolling="no"></iframe>
                </div>
              </div>
              <!-- /.calendar -->
              <!-- announcements, hidden initially -->
              <div class="announcements-container align-items-center justify-content-center" id="announcements">
                  <div class="row align-items-center justify-content-center text-center" style="margin: auto">
                      <div class="announcements-title title-gold p-2"><h2 class="font-weight-bold">News</h2></div>
                  </div>
                  <div class="d-flex row align-self-center justify-self-center p-2" style="margin: auto">
                    <div class="d-none d-md-block tax-center w-100">
                      <p class="text-center w-100">A ROS workshop and officer nominations are coming up!
                      </p>
                    </div>
                    <p class="text-center w-100">
                      Our ROS/Gazebo workshop is planned for November 6th at 6:30pm.
                      Our officer nominations will be sometime next week!
                      Join our <a href="https://discord.gg/ypWpanw">Discord</a> to join us for nominations and workshops.
                    </p>
                    <div class="d-none d-md-block tax-center w-100">
                      <p class="text-center w-100">
                        In the ROS workshop, you can learn some tips and tricks for using ROS and gazebo.
                        For nominations, any dues paying member can nominate themselves to a position!
                      </p>
                    </div>
                  </div>
              </div>
            <!-- /.announcements -->
            </div>
            <!--- /.container for announcements and events -->
          </div>
          <!-- /.calendar/announcements -->
        </div>
        <!-- /.calendar and announcements -->
      </div>
      <!-- /.container 1 -->
    </div>
    <!-- snap slideshow and news -->


    <!-- who are we snap container -->
    <div class="snap-child justify-content-center align-items-center">
    <!-- Page Content Container 2 -->
      <div class="container justify-content-center align-items-center">
        <!-- flex containers -->
        <div class="intermediate-container-flex justify-content-center align-items-center">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <!-- intro -->
            <div class="intro justify-content-center align-items-center">
              <!-- title row -->
              <div class="row w-100 no-gutters">
                <div class="col-lg-12">
                  <h2 class="text-center p-2 rounded title-blk-wht w-100 font-weight-bold">Who Are We?</h2>
                </div>
              </div>
              <!-- /.title row -->
              <!-- content row -->
              <div class="row w-100 h-100 no-gutters">
                <div class="col-lg-12">
                  <div class="text-center p-4 container-wht-blk rounded w-100">
                    <div class="d-none d-md-block"><p>Welcome to the Robotics Club of Central Florida.
                      <br> This is an entirely student run organization.
                    </p></div>
                    <div class="d-none d-sm-block">
                      <p>We focus on creating innovative and competitive robots and we are always
                        looking for members join in the advancement of the demanding robotics field.
                      </p>
                   </div>
                    <p>
                        Every year we take on projects that involve
                        demonstrations of robotics, pushing the bounds of automation, and innovative, robust designs.
                    </p>
                    <p>
                      Currently, we are realizing three challenging projects...
                    </p>
                  </div>
                </div>
              </div>
              <!-- /.content row -->
            </div>
            <!-- /.intro -->
          </div>
        </div>
        <!-- flex container -->
      </div>
      <!-- /.page container -->
    </div>
    <!-- /.who we are snap container -->

    <!-- robot slides snap container-->
    <div class="snap-child">
      <!-- Page Content Container 2 -->
      <div class="container">
        <!-- flex containers -->
        <div class="intermediate-container-flex">
          <h2 class="sr-only">Our Robots</h2>
          <!-- slides -->
          <div id="robotCarousel" class="carousel slide d-flex align-items-center justify-content-center" data-ride="carousel" data-interval="false" data-touch="false">
            <div class="carousel-inner align-items-center justify-content-center" role="listbox">
              <!-- bowser -->
              <div class="carousel-item robo-item active small-1 justify-content-center align-content-center">
                <div class="card text-center card-clear robot-card-0 justify-self-center align-self-center">
                  <!-- overlay container -->
                  <div class="overlay-container">
                    <img class="card-img rounded-circle img-fluid" src="assets/imgs/placeholder-600x600.png" alt="demobot">
                    <div class="card-img-overlay rounded-circle">
                      <div class="card-overlay">
                        <p class="card-text align-middle text-center title-gold">Demobot</p>
                        <p class="card-text align-middle text-center d-none d-lg-block">Demonstrates all aspects of robotics.</p>
                      </div>
                    </div>
                  </div>
                  <!-- /.overlay container -->
                </div>
              </div>
              <!-- /.demobot -->
              <!-- bowser -->
              <div class="carousel-item robo-item small-1 justify-content-center align-content-center">
                <div class="card text-center card-clear robot-card-1 justify-self-center align-self-center">
                  <!-- overlay container -->
                  <div class="overlay-container">
                    <img class="card-img rounded-circle img-fluid" src="assets/imgs/home/bowser.jpg" alt="bowser">
                    <div class="card-img-overlay rounded-circle">
                      <div class="card-overlay">
                        <p class="card-text align-middle text-center title-gold">Bowser</p>
                        <p class="card-text align-middle text-center d-none d-lg-block">Uses computer vision to avoid objects.</p>
                      </div>
                    </div>
                  </div>
                  <!-- /.overlay container-->
                </div>
              </div>
              <!-- /.bowser -->
              <!-- citrobot -->
              <div class="carousel-item robo-item small-1 justify-content-center align-content-center">
                <div class="card text-center card-clear robot-card-2 justify-self-center align-self-center">
                  <!-- overlay container -->
                  <div class="overlay-container justify-self-center align-self-center">
                    <img class="card-img rounded-circle img-fluid" src="assets/imgs/home/citrobot.jpg" alt="citrobot">
                    <div class="card-img-overlay rounded-circle">
                      <div class="card-overlay">
                        <p class="card-text align-middle text-center title-gold">Citrobot</p>
                        <p class="card-text align-middle text-center d-none d-lg-block">Our 15lb combat monster.</p>
                      </div>
                    </div>
                  </div>
                  <!-- /.overlay container -->
                </div>
              </div>
              <!-- /.citrobot -->
            </div>
            <!-- prev arrow -->
            <a class="carousel-control-prev w-auto" href="#robotCarousel" role="button" data-slide="prev" id="robot-prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- /.prev arrow -->
            <!-- next arrow -->
            <a class="carousel-control-next w-auto" href="#robotCarousel" role="button" data-slide="next" id="robot-next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!-- /.next arrow -->
          </div>
          <!-- /.slides -->
        </div>
        <!-- /.flex containers -->
      </div>
      <!-- /.page content container -->
    </div>
    <!-- /.robot slides snapper -->


    <!-- grid snapper -->
    <div class="snap-child justify-content-center align-items-center" id="grid-snapper">
      <!-- flex containers -->
      <div class="end-container-flex justify-self-center align-self-center grid" id="grid-end-1">
        <!-- first row of the bottom grid -->
        <div class="row no-gutters w-100 align-items-center justify-content-center" style="margin:auto;" id="grid-r-1">
          <!-- page containers -->
          <div class="container justify-self-center align-self-center">
            <!-- card row -->
            <div class="row no-gutters w-100 h-100 align-items-center justify-content-center" id="grid-r-1">
              <!-- upper left card -->
              <div class="col-md-6">
                <div class="grid-container">
                  <div class="card" id="join-grid">
                    <!-- shown title -->
                    <div class="grid-body">
                      <h2 class="d-flex align-items-center justify-content-center h-100">Join Us</h2>
                    </div>
                    <!-- /.shown title -->
                    <!-- hidden overlay -->
                    <div class="grid-body-overlay" id="join-overlay">
                      <div class="grid-overlay h-100 d-flex flex-column justify-content-center align-items-center">
                        <p>Join us on Discord: <a href="https://discord.gg/ypWpanw" class="grid1-link">discord.gg</a></p>
                        <br>
                        <p>Subscribe to our mail list:<br /></p>

                        <!-- mail button -->
                        <p><a href="faq/index#subscribe" class="grid1-link">Subscribe at Our FAQ</a></p>
                        <!-- /.mail button -->
                      </div>
                    </div>
                    <!-- /.hidden overlay -->
                  </div>
                </div>
              </div>
              <!-- /.upper left card -->
              <!-- upper right card -->
              <div class="col-md-6 text-center">
                <div class="grid-container">
                  <div class="card flex-fill align-items-center justify-content-center align-text-middle" id="follow-grid">
                    <!-- shown title -->
                    <div class="grid-body" id="follow-body">
                      <h2 class="d-flex align-items-center justify-content-center h-100">Follow Us</h2>
                    </div>
                    <!-- /.shown title -->
                    <!-- hidden overlay -->
                    <div class="grid-body-overlay" id="follow-overlay">
                      <div class="grid-overlay h-100 d-flex flex-column justify-content-center align-items-center p-5">
                        <!-- facebook -->
                        <div class="row justify-content-center align-items-center d-flex">
                          <div class="col-lg-12 w-100 justify-content-center align-self-center">
                            <a href="https://www.facebook.com/RoboticsClub" class="grid2-link justify-content-center align-items-center">
                              <img src="assets/imgs/home/facebook.png" loading="lazy" alt="facebook">
                            </a>
                          </div>
                        </div>
                        <!-- /.facebook -->
                        <!-- instagram & twitter -->
                        <div class="row w-100 justify-content-center align-items-center d-flex">
                          <div class="col-lg-6 w-50 justify-content-center align-items-center">
                            <a href="https://www.instagram.com/roboticsclubcfl/" class="grid2-link justify-content-center align-items-center">
                              <img src="assets/imgs/home/instagram.png" loading="lazy" alt="instagram">
                            </a>
                          </div>
                          <div class="col-lg-6 w-50 justify-content-center align-items-center">
                            <a href="https://twitter.com/RoboticsClubCFl" class="grid2-link justify-content-center align-items-center">
                              <img src="assets/imgs/home/twitter.png" loading="lazy" alt="twitter">
                            </a>
                          </div>
                        </div>
                        <!-- /.instagram & twitter -->
                        <!-- youtube -->
                        <div class="row w-100 justify-content-center align-items-center d-flex">
                          <div class="col-lg-12 w-100 justify-content-center align-items-center">
                            <a href="https://www.youtube.com/channel/UCZEPdNUFzkciC7MIiI-yPKg" class="grid2-link justify-content-center align-items-center">
                              <img src="assets/imgs/home/youtube.png" loading="lazy" alt="youtube">
                            </a>
                          </div>
                        </div>
                        <!-- /.youtube -->
                      </div>
                    </div>
                    <!-- /.hidden overlay -->
                  </div>
                </div>
              </div>
              <!-- /.upper right card -->
            </div>
          <!-- /.card row -->
          </div>
          <!-- /.page containers -->
        </div>
        <!-- /.first row of bottom grid -->

        <!-- second row of the bottom grid -->
        <div class="row no-gutters w-100 align-items-center justify-content-center" id="grid-r-2">
          <!-- inner snap child for mobile -->
          <div class="snap-child-r2 justify-content-center align-items-center" id="r2-snapper">
            <!-- flex containers -->
            <div class="end-container-flex justify-self-center align-self-center d-flex grid">
              <!-- container -->
              <div class="container justify-self-center align-self-center">
                <!-- inner content row -->
                <div class="row no-gutters w-100 h-100 align-items-center justify-content-center">
                <!-- lower left card -->
                  <div class="col-md-6 justify-content-center">
                    <div class="grid-container">
                      <div class="card flex-fill align-items-center justify-content-center align-text-middle"  id="contact-grid">
                        <!-- shown title -->
                        <div class="grid-body">
                          <h2 class="d-flex align-items-center justify-content-center h-100">Contact Us</h2>
                        </div>
                        <!-- /.shown title -->
                        <!-- hidden overlay -->
                        <div class="grid-body-overlay" id="contact-overlay">
                          <!-- content -->
                          <div class="grid-overlay h-100 d-flex flex-column justify-content-center align-self-center">
                            <div class="d-none d-md-block" style="font-size: 22px"><p>Email: </p></div>
                            <p><a href="mailto:robotics@ucf.edu" class="grid3-link">robotics@ucf.edu</a></p>
                            <div class="d-none d-sm-none d-md-block" style="font-size: 22px"><p>Phone:</p></div>
                            <p><a href="tel:4078220293" class="grid3-link">(407) 822-0293</a></p>
                            <div class="d-none d-sm-none d-md-block" style="font-size: 22px"><p>Read the FAQ:</p></div>
                            <p><a href="faq/index" class="grid3-link">FAQ</a></p>
                          </div>
                          <!-- /.content -->
                        </div>
                        <!-- hidden overlay -->
                      </div>
                    </div>
                  </div>
                  <!-- /.lower left card -->
                  <!-- lower right card -->
                  <div class="col-md-6 justify-content-center align-items-center">
                    <div class="grid-container">
                      <div class="card flex-fill align-items-center justify-content-center align-text-middle"  id="visit-grid">
                        <!-- shown title -->
                        <div class="grid-body text-center">
                          <h2 class="d-flex align-items-center justify-content-center h-100">Visit Us</h2>
                        </div>
                        <!-- /.shown title -->
                        <!-- hidden overlay -->
                        <div class="grid-body-overlay" id="contact-overlay">
                          <div class="z-depth-2-half map-container">
                            <iframe class="z-depth-1-half" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7006.943183984203!2d-81.199236!3d28.585626!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4993a772fa30de24!2sRobotics%20Club%20at%20UCF!5e0!3m2!1sen!2sus!4v1577236854926!5m2!1sen!2sus" frameborder="0"
                            style="border:0" allowfullscreen></iframe>
                          </div>
                        </div>
                        <!-- /.hidden overlay -->
                      </div>
                    </div>
                  </div>
                  <!-- /.lower right card -->
                </div>
                <!-- /. inner content row -->
              </div>
              <!-- /.container -->

              <!-- Footer -->
              <footer class="py-2 bg-clear">
                <div class="container">
                  <div class="row">
                    <!-- copyright -->
                    <p class="col-md-4 m-0 text-center text-white">Copyright &copy; 2003-2020
                    </p>
                    <!-- /.copyright -->
                    <!--- address -->
                    <p class="col-md-4 text-center text-white d-none d-lg-block">3100 Technology Parkway
                      <br>Orlando, FL 32826
                    </p>
                    <!-- /.address -->
                    <!-- social media -->
                    <p class="col-md-4 text-center text-white d-lg-none"></p>
                    <p class="col-md-4 text-center text-white d-none d-md-block">
                      <a href="https://facebook.com/RoboticsClub" aria-label="Robotics Club facebook"><img src="assets/imgs/footer/facebook.png" alt="facebook mini logo"></a>
                      <a href="https://instagram.com/RoboticsClubCFl" aria-label="Robotics Club instagram"><img src="assets/imgs/footer/instagram.png" alt="instagram mini logo"></a>
                      <a href="https://twitter.com/RoboticsClubCFl" aria-label="Robotics Club twitter"><img src="assets/imgs/footer/twitter.png" alt="twitter mini logo"></a>
                      <a href="https://www.youtube.com/channel/UCZEPdNUFzkciC7MIiI-yPKg" aria-label="Robotics Club youtube"><img src="assets/imgs/footer/youtube.png" alt="youtube mini logo"></a>
                    </p>
                    <!-- /.social media -->
                  </div>
                </div>
              </footer>
              <!-- /.footer -->
            </div>
            <!-- /.flex containrs -->
          </div>
          <!-- /.inner snap child for mobile -->
        </div>
        <!-- /.second row for grid -->
      </div>
      <!-- /.page container -->
    </div>
    <!-- /.grid -->


  </div>
  <!-- /.page snap container -->
</div>
<!-- page container -->

<!-- scripts -->
  <!-- Bootstrap -->
  <script src="/assets/rsrc/jquery/jquery.min.js"></script>
  <script src="/assets/rsrc/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom Css -->
  <script src="/assets/js/global-scripts.js"></script>
  <script src="/assets/js/index.js"></script>
<!-- /.scripts -->

</body>

</html>