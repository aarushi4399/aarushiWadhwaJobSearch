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


    if (isset($_POST['submit'])) {
        $first_name = $_POST['f_name'];
        $last_name = $_POST['l_name'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = "j";

        $sql = "SELECT * From users WHERE email = '{$email}'";
        $result = mysqli_query($connection, $sql);
        $records = mysqli_num_rows($result);

        if ($records == 0) {

            $query = "INSERT INTO users(first_name, last_name, city, state, email, password, role)";
            $query .= "VALUES ('{$first_name}','{$last_name}','{$city}','{$state}','{$email}','{$password}','{$role}')";
            $post_query = mysqli_query($connection, $query);

            if ($post_query) {
                $_SESSION['email'] = $email;
                header("location: ./admin_j/dashboard.php");
            }
        } else {
    ?>

            <div class="container" style="margin-top: 40px;">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Try logging in.</strong> You're aleready a member.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
    <?php
        }
    }

    ?>
    <div id="register" style="height: 70px; margin-top: -70px"></div>
    <div class="container" style="margin-top: 80px; margin-bottom: 100px">
        <h1 class="text-center">REGISTER HERE</h1>
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
        <form method="POST" action="#">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="f_name" class="form-control" placeholder="First Name" required>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="l_name" class="form-control" placeholder="Last Name" required>

                    </div>
                </div>
            </div>
            <!-- <div class="form-group">
                <label>Address line1</label>
                <input type="text" class="form-control" placeholder="Enter your address" required>
            </div> -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Residential address</label>
                        <input type="text" name="city" class="form-control" placeholder="City/Town/Village" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>State</label>
                        <select name="state" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <input type="submit" class="btn btn-primary" value="Register" name="submit" id="">

            <br>
            <small style="font-size: 14px;">Already have an account? <a href="./jobLogin.php#login">Login</a></small>
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