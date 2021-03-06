<?php

// header functions and include
include_once("../assets/templates/header.php");
$pageDescription = "The Robotics Club of Central Florida kept a gallery of all our socials for 2019.";
$keywords = "UCF robotics club, University of Central Florida, UCF, robotics club, robotics club,
                               UCF robotics, UCF club, RSO, AUVSI, autonomous, SUAS, AHRS, IMU, i2C, ROS, ROS melodic,
                               melodic, linux, ubuntu, open source, opensource, engineering, mechanical,
                               mechanical engineering, electrical, eletrical engineering, computer, computers,
                               computer science, FOSS, undergraduate, graduate, operating system, vehicles, unmanned,
                               machine learning, computer vision, sensors, lidar, demobot, citrobot, Robotics Club of
                               Central Florida, central florida, robotics club, photo gallery 2020, current photo gallery,
                               workshops gallery 2020, workshops gallery, workshop photos 2020, workshop photos, social gallery 2020,
                               social photos 2020, social gallery, social photos";
$headerGen = new Header("Alexandra French", "August 26, 2020", "Alexandra French", "November 12, 2020");
$headerGen->generateComment();
$headerGen->generateCommon("Robotics Club 2019 Photo Gallery", $pageDescription, $keywords, "https://robotics.ucf.edu/more/gallery-2019");
$headerGen->generateCSS();
$headerGen->genWebsiteSEO("https://robotics.ucf.edu/more/gallery-2019", "Robotics Club 2019 Photo Gallery", $pageDescription, "https://robotics.ucf.edu/more/assets/imgs/2019/halloween-2.jpg");
$headerGen->endHeader();


// navbar
include_once("../assets/templates/navbar.php");
$navbarGen = new Navbar(False);


// page content
include_once('assets/templates/gallery-2019.html');


// footer functions and include
include_once("../assets/templates/footer.php");
$footerGen = new Footer();
$footerGen->generateFooter();
$footerGen->generateJs();
$footerGen->endFile();

?>
