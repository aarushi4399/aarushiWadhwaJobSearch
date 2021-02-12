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
            <h1>All Posts by you</h1>
            <div class="row align-items-center">

                <?php

                $user_email = $_SESSION['email'];
                $query = "SELECT * from users where email = '{$user_email}'";
                $result = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $user_id = $row['id'];
                }

                $query2 = "SELECT * from posts where user_id = '{$user_id}'";
                $result = mysqli_query($connection, $query2);

                while ($row = mysqli_fetch_assoc($result)) {
                    $title = $row['title'];
                    $city = $row['city'];
                    $state = $row['state'];
                    $experience = $row['experience'];
                    $hours = $row['hours'];
                    $salary = $row['salary'];
                    $gender = $row['gender'];

                ?>


                    <div class="col-lg-6">
                        <div class="card " style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $title; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $city; ?></h6>
                                <p class="card-text">Requirement of a person</p>
                                <a href="" class="card-link">Edit Post<i class="far fa-edit" style="padding-left: 7px;"></i></a>
                                <a href="" class="card-link" style="color: red;">Delete<i class="far fa-trash-alt" style="padding-left: 7px;"></i></a>

                            </div>
                        </div>
                    </div>
                <?php
                }


                ?>


            </div>
        </div>
    </section>



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