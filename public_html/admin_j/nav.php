<section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-2 fixed-top">
        <a class=" navbar-brand" href="#">JobSearch</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="applications.php">My Applications</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="dashboard.php">Avialable jobs</a>
                </li>

                <li class="nav-item dropdown">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle"></i> Profile
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