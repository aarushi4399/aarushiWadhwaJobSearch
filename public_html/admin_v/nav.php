<?php

$user_email = $_SESSION['email'];

$query = "SELECT * from users where email = '{$user_email}'";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $user_name = $row['first_name'];
}

?>

<section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-2 ">
        <a class="navbar-brand" href="dashboard.php">JobSearch</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item d-md-none">
                    <a class="nav-link" href="newPost.php">Post job</a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link" href="application.php">Applications</a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link" href="allPosts.php">All posts</a>
                </li>
                <li class="nav-item dropdown">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle"></i> <?php echo $user_name; ?>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" class="abcd" type="button"><i class="fas fa-user-circle" style="padding-right: 16px;"></i>Profile</button>
                            <form method="POST" action="#">
                                <i class="fas fa-sign-out-alt" style=" padding-left: 23px;"></i> <input type="submit" class="btn" value="logout" name="logout" id="">
                            </form>
                            <!-- <button class="dropdown-item" name="logout" type="button"><i class="fas fa-sign-out-alt" style="padding-right: 10px;"></i>log out</button> -->

                        </div>
                    </div>
                </li>

            </ul>

        </div>
    </nav>
</section>