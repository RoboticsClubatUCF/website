<?php

// all variables
$pageCreator = "Alexandra French";
$pageCreationDate = "August 5, 2020";
$title = "Robotics Club of Central Florida";
$currentWebmaster = "Alexandra French";
$updateDate = "November 4, 2020";
$pageDescription = "The Robotics Club of Central Florida is a student powered club based on hands on work with autonomous robotics.";
$keywords = "UCF robotics club, University of Central Florida, UCF, robotics club, robotics club,
                               UCF robotics, UCF club, RSO, AUVSI, autonomous, SUAS, AHRS, IMU, i2C, ROS, ROS melodic,
                               melodic, linux, ubuntu, open source, opensource, engineering, mechanical,
                               mechanical engineering, electrical, eletrical engineering, computer, computers,
                               computer science, FOSS, undergraduate, graduate, operating system, vehicles, unmanned,
                               machine learning, computer vision, sensors, lidar, demobot, citrobot, Robotics Club of
                               Central Florida, central florida, robotics club";
$url = "https://robotics.ucf.edu/";
$markupImage = "https://robotics.ucf.edu/assets/imgs/bowser.jpg";

// header content
#include_once('assets/templates/header.html');

// page content with snap containers
include_once('assets/templates/snap-index.php');

// footer content
include_once('assets/templates/footer.php');
$footerGen = new Footer();

$customJs = array("/assets/js/index.js");
$footerGen->generateJs($customJs);
$footerGen->endFile();

?>
