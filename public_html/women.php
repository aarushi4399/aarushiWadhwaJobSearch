<?php
session_start();
ob_start();
require('./private/controllers/db.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" />
    <link rel="stylesheet" href="./css/style.css">
    <!-- <link rel="icon" href="./img/running.png" type="image/png" sizes="32x32"> -->
    <title>About Us</title>
</head>

<body>

    <?php require('header.php') ?>

    <section class="pilot">
        <div class="container align-items-center">

            <center>
                <!-- <h1 class="entry-0">2021</h1> -->
                <h1 class="entry-1">FOR WOMEN</h1>
                <h3 class="entry-2">We provide services for Labour hire in various domains at your doorstep</h3>
            </center>
        </div>

        <!-- <a href="#section07"><span></span>SCROLL</a> -->
    </section>


    <section class="about">
        <div class="container">

            <div class="row align-items-center ">
                <div class="col-md-6 text-center">
                    <img src="./img/microsoft.jpg" class="responsive-s text-center" alt="">
                </div>
                <div class="col-md-6">
                    <h3 class="text-center text-md-start dash-x">Microsoft Springboard
                    </h3>
                    <p class="text-center text-md-start">
                    Springboard, Microsoft India’s flagship program, is a platform where women can 
                    relaunch their careers after a break. This Internship is focused on offering them an 
                    opportunity for career exploration and 
                    on-the-job training as they transition back to the workforce.
                        <br><br>
                        <a href="https://www.microsoft.com/en-in/about/empowering-women.aspx">Visit link <i class="fas fa-chevron-right"></i></a>
                    </p>
                </div>
            </div>

            <div class="row align-items-center" style="margin-top: 100px;">
                <div class="col-md-6 d-none d-md-block">
                    <h3 class="text-center text-md-start">Amazon Rekindle
                    </h3>
                    <p style="padding-right: 20px;" class="text-center text-md-start">
                    Rekindle is an initiative to provide a launch pad to women who have taken a 
                    break in their careers due to any circumstances. Through this initiative, Amazon India 
                    aims to provide opportunities and support women to professionally re-integrate themselves 
                    and resume their corporate career. 
                        <br><br>
                        <a href="https://www.amazon.jobs/en/landing_pages/rekindle">Visit link <i class="fas fa-chevron-right"></i></a>
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="./img/amazon.png" class="responsive-s text-center" alt="">

                </div>
                <div class="col-md-6 d-md-none" style="padding-top: 20px;">
                    <h3 class="text-center text-md-start">Amazon Rekindle
                    </h3>
                    <p style="padding-right: 20px;" class="text-center text-md-start">
                    Rekindle is an initiative to provide a launch pad to women who have taken a 
                    break in their careers due to any circumstances. Through this initiative, Amazon India 
                    aims to provide opportunities and support women to professionally re-integrate themselves 
                    and resume their corporate career. 
                        <br><br>
                        <a href="https://www.amazon.jobs/en/landing_pages/rekindle">Visit link <i class="fas fa-chevron-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section style="margin-top: 150px;">
        <div id="owl-one" class="owl-carousel owl-theme" style="width: 100%">
            <div class="item testimonial-item" style="background-color: rgb(213,232,246);">
                <div class="container text-center">
                    <h2 style="color: rgb(70,67,83);">"We help-out women return
                        to work after a career break"</h2>
                </div>
            </div>
            <div class="item testimonial-item" style="background-color: rgb(153,164,199);">
                <div class="container text-center">
                    <h2>"One place to find all the jobs for Women."</h2>
                </div>
            </div>
            <div class="item testimonial-item" style="background-color: cadetblue;">
                <div class="container text-center">
                    <h2>"Post-pandamic job openings for you. "</h2>
                </div>
            </div>
        </div>

    </section>

    <!--Footer-->
    <?php require('footer.php') ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>

</body>

</html>