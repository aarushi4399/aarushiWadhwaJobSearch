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


    <section class="mg100">
        <div class="container text-center">
            <h1>All Application</h1>
            <table class="table " style="margin-top: 80px;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Applicant Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Years of experience</th>
                        <th scope="col">Applied for job title</th>
                        <th scope="col">Details</th>
                        <th scope="col">Accept</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $i = 16;
                    $x = 1;
                    while ($x < $i) {

                    ?>


                        <tr>
                            <th scope="row"><?php echo $x; ?></th>
                            <td>Mark</td>
                            <td>30</td>
                            <td>8</td>
                            <td>Driver</td>
                            <td><a href="">View</a></td>
                            <td><a href="" style="color: green;">Accept</a></td>
                            <td><a style="color: red;" href=""><i class="fas fa-trash-alt"></i></a></td>
                        </tr>


                    <?php
                        $x = $x + 1;;
                    } ?>



                </tbody>
            </table>

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