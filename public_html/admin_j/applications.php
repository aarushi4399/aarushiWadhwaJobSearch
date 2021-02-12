<?php

ob_start();
session_start();
require('../private/controllers/db.php');
if (!isset($_SESSION['email'])) {
    header("location: ../vendorLogin.php");
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("location: ../jobLogin.php");
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
    <link rel="stylesheet" href=".././css/adminj.css">
    <!-- <link rel="icon" href="./img/running.png" type="image/png" sizes="32x32"> -->

    <title>JOB SEARCH</title>

</head>

<body>
    <?php require("nav.php") ?>



    <div id="wrapper">

        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">

                    <a href="#" style="color: rgb(67,47,71) ; font-weight: bold; font-size: 28px; margin-top: 20px">
                        Filters
                    </a>
                </li>

                <hr>
                <li>
                    <a href="#">Age</a>
                    <form class="form-inline">
                        <!-- <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Salary range</label> -->
                        <select style="margin-left: 20px;" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <?php
                            $n = 50;
                            $i = 19;
                            while ($i < $n) {
                            ?>
                                <option selected><?php
                                                    echo $i;
                                                    ?></option>
                            <?php
                                $i = $i + 1;
                            }
                            ?>
                        </select>
                    </form>
                </li>
                <hr>
                <li>
                    <a href="#">Gender</a>
                    <form class="form-inline">
                        <!-- <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Salary range</label> -->
                        <select style="margin-left: 20px;" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option selected>Male</option>
                            <option value="1">Female</option>
                            <option value="1">Nor specified</option>

                        </select>
                    </form>
                </li>
                <hr>
                <li>
                    <a href="#">Salary Range</a>
                    <form class="form-inline">
                        <!-- <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Salary range</label> -->
                        <select style="margin-left: 20px;" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option selected>5,000 - 10,000</option>
                            <option value="1">10,000 - 20,000</option>
                            <option value="2">20,000 - 30,000</option>
                            <option value="3">30,000 - 40,000</option>
                        </select>
                    </form>
                </li>
                <hr>
                <li>
                    <a href="#">Location</a>
                    <div class="form-group row">

                        <div class="col-10">
                            <input style="margin-left: 20px;" type="text" class="form-control " placeholder="Location">
                        </div>
                    </div>
                </li>
                <hr>
                <!-- <li>
                    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                        <label class="custom-control-label" for="customControlInline">Part time</label>

                    </div>
                </li> -->
                <li>
                    <a href="#">Years of experience</a>
                    <div class="form-group row">

                        <div class="col-10">
                            <input style="margin-left: 20px;" type="text" class="form-control " placeholder="Years of experience">
                        </div>
                    </div>
                </li>
                <hr>
                <li>
                    <a href="#">Working hours</a>
                    <div class="form-group row">

                        <div class="col-10">
                            <input style="margin-left: 20px;" type="text" class="form-control " placeholder="Hours">
                        </div>
                    </div>


                </li>


            </ul>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fas fa-arrow-circle-left" style="font-size: 25px;"></i></a>
                <h1>My Applications</h1>
                <div class="row align-items-center">

                    <section class="mg100">
                        <div class="container text-center">

                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Applicant Name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Years of experience</th>
                                        <th scope="col">Applied for job title</th>
                                        <th scope="col">Details</th>

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

                                            <td><a style="color: red;" href=""><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>


                                    <?php
                                        $x = $x + 1;;
                                    } ?>



                                </tbody>
                            </table>

                        </div>
                    </section>







                </div>
            </div>

        </div>


    </div>





    <div class="d-none d-md-block" style="height: 200px; background-color: rgb(52,58,64)">
    </div>

    <!--Footer -->

    <div class="d-none d-md-block">
        <?php require('../footer.php') ?>

    </div>









    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src=".././js/script.js"></script>


</body>

</html>