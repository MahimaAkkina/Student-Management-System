<nav class="navbar navbar-expand navbar-light bg-light">
    <div class="container-fluid">
        <div class="col-sm-2 bg-dark text-center py-3">
            <p class="navbar-brand text-white h2">SMS</p>
        </div>
        <div class="col-sm-5 text-center py-3">
                <p class="h5"><?php echo $_SESSION['Username']; ?>  Welcome to Dashboard</p></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end me-5" id="navbarNavDarkDropdown">             
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle ms-2" src="pics/face8.jpg" alt="Profile image" style="width:30px;height:30px;"> <span class="font-weight-normal"><?php echo $_SESSION['Username']; ?></span></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink" style="margin-left:-60px !important; width:210px;">
                                <div class="dropdown-header text-center">
                                    <img class="img-md rounded-circle border border-2 mt-3" src="pics/face8.jpg" alt="Profile image" width="85%" height="170px">
                                    <p class="mb-1 mt-3"><?php echo $_SESSION['Username']; ?></p>
                                    <p class="font-weight-light text-muted mb-0"><?php echo $_SESSION['Email'];?></p>
                                </div>
                                <ul class="list-unstyled mx-4 my-2">
                                    <li><a class="dropdown-item border-bottom border-2 py-2" href="my_profile.php"><i class="bi bi-person text-info me-2"></i>My Profile</a></li>
                                    <li><a class="dropdown-item border-bottom border-2 py-2" href="setting_password.php"><i class="bi bi-gear text-info me-2"></i>Setting</a></li>
                                    <li><a class="dropdown-item mb-1 py-2" href="admin_dashboard.php?log='1'"><i class="bi bi-power text-info me-2"></i>Sign Out</a></li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
</nav>