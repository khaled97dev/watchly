<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/style.css">
    <title>WATCHLY/ADMIN</title>
</head>
<body style="background-color: ;">

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="../index.php"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">WATCHLY</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashbord</span>
                            </a>
                        </li>
                        <li>
                            <a href="filmControl.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="bi bi-film"></i> <span class="ms-1 d-none d-sm-inline">Trailers</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="filmControl.php" class="nav-link px-0"> <span
                                            class="d-none d-sm-inline">Films</span> </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span
                                            class="d-none d-sm-inline">Writers</span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span
                                            class="d-none d-sm-inline">Actors</span></a>
                                </li>
                                <li>
                                    <a href="/watchly/admin/favoriteList.php" class="nav-link px-0 align-middle">
                                        <i class="bi bi-star-fill"></i> <span class="ms-1 d-none d-sm-inline">My List</span> </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="userControl.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Users</span> </a>
                        </li>
                        <li>
                            <a href="../logout.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Log out</span> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col py-3">
                <?php
                if (isset($_SESSION['message'])) {
                    echo '<span class="">' . $_SESSION['message'] . '</span><br>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>