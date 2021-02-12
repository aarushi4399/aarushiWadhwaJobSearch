<?php

ob_start();
session_start();
require('../private/controllers/db.php');
if (!isset($_SESSION['email'])) {
    header("location: ../vendorLogin.php");
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("location: ../vendorLogin.php");
}


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
    <link rel="stylesheet" href=".././css/admin.css">
    <!-- <link rel="icon" href="./img/running.png" type="image/png" sizes="32x32"> -->
    <title>JOB SEARCH</title>
</head>

<body>
    <?php require("nav.php") ?>
    <!-- <div class="sidenav">
        <a href="#">All Posts</a>
        <a href="#">Applications</a>
        <a href="#">Post a job</a>
        <a href="#">xyz</a>

    </div> -->

    <section class="mg100">
        <div class="container">
            <h1 class="text-center">
                Create a Job
            </h1>
            <form method="POST" action="#" style="padding-top: 50px;">
                <div class="form-group">
                    <label for="inputAddress">Job title</label>
                    <input type="text" name="title" class="form-control" id="inputAddress" placeholder="Job title">
                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Location</label>
                        <input type="text" name="city" class="form-control" placeholder="City/Town/Village">
                    </div>
                    <div class="form-group col-md-6">
                        <label>State</label>
                        <select name="state" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Experience</label>
                    <input type="text" name="experience" class="form-control" id="inputAddress" placeholder="Experience in years">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Salary</label>
                    <input type="text" name="salary" class="form-control" id="inputAddress2" placeholder="Salary">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Working hours</label>
                    <input type="text" name="hours" class="form-control" id="inputAddress2" placeholder="Working hours per day">
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control">
                        <option>Not specified</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <input type="submit" value="Submit" class="btn btn-md btn-primary" name="post">

            </form>
        </div>
    </section>

    <?php

    if (isset($_POST['post'])) {

        $user_email = $_SESSION['email'];
        $query = "SELECT * from users where email = '{$user_email}'";
        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            $user_id = $row['id'];
        }

        $title = $_POST['title'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $experience = $_POST['experience'];
        $gender = $_POST['gender'];
        $hours = $_POST['hours'];
        $salary = $_POST['salary'];

        $query2 = "INSERT INTO posts(user_id, title, city, state, experience, gender, hours, salary)";
        $query2 .= "VALUES ('{$user_id}','{$title}','{$city}','{$state}','{$experience}','{$gender}','{$hours}','{$salary}')";
        $post_query = mysqli_query($connection, $query2);

        if ($post_query) {

            header("location: allPosts.php");
        } else {
    ?>
            <div class="container" style="margin-top: 40px;">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>There was an error. </strong>Please try again later.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
    <?php
        }
    }

    ?>


    <div style="height: 200px; background-color: royalblue">
    </div>

    <!--Footer-->
    <?php require('../footer.php') ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src=".././js/script.js"></script>


</body>

</html>