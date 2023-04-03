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
    <style>
        .parallax {
            /* The image used */
            background-image: url("assets/parallax.jpg");
            min-height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <title>WATCHLY</title>
</head>

<body style="background-color: black;">

    <!-- PARALLAX -->
    <div class="parallax"></div>

    <!-- NAVBAR -->
    <?php include("contents/navbar.php"); ?>

    <?php
    if (isset($_SESSION['message'])) {
        echo '<span class="text-white ">' . $_SESSION['message'] . '</span><br>';
    }
    ?>
    <!-- CAROUSEL -->
    <?php include("contents/carousel.php"); ?>
    <br>
    <!-- SLIDER -->
    <?php include("contents/slider.php"); ?>
    <br>
    <!-- PARALLAX -->
    <?php include("contents/parallax.php"); ?>
    <br>
    <!-- FOOTER -->
    <?php include("contents/footer.php"); ?>

    <!-- PARALLAX -->
    <div class="parallax"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>