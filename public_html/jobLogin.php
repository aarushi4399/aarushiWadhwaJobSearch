<?php
session_start();
ob_start();
require('./private/controllers/db.php')
?>
<!doctype html>
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
    <title>JOB SEARCH</title>
</head>

<body>


    <?php require('header.php') ?>

    <section class="pilot">
        <div class="container align-items-center">

            <center>
                <!-- <h1 class="entry-0">2021</h1> -->
                <h1 class="entry-1">FOR JOBSEEKERS</h1>
                <h3 class="entry-2">We provide services for Labour hire in various domains at your doorstep</h3>
            </center>
        </div>

        <!-- <a href="#section07"><span></span>SCROLL</a> -->
    </section>

    <?php


    if (isset($_SESSION['failed'])) {
    ?>


        <div class="container" style="margin-top: 40px;">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error</strong> Login failed.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>


    <?php
        session_destroy();
    }



    ?>

    <div id="login" style="height: 70px; margin-top: -70px"></div>
    <div class="container" style="margin-top: 80px; margin-bottom: 100px">
        <h1 class="text-center">LOGIN</h1>
        <br><br>
        <div class="text-center">
            <button class="loginBtn loginBtn--facebook">
                Login with Facebook
            </button>

            <button class="loginBtn loginBtn--google">
                Login with Google
            </button>

        </div>

        <br>
        <hr class="hr-text" data-content="OR">
        <br>
        <form method="POST" action="./private/controllers/login.php">

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>

            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <input type="submit" class="btn btn-primary" value="Log in" name="login" id="">

            <br>
            <small style="font-size: 14px;">Don't have an account? <a href="./jobSeekers.php#register">Sign up</a></small>
        </form>
    </div>

    <div style="height: 200px; background-color: royalblue">
    </div>




    <!--Footer-->
    <?php require('footer.php') ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>

</html>