<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/style.css">

    <title>CONTACT</title>
</head>
<body style="background-color:black;">
    
    <!-- NAVBAR -->
    <?php include("contents/navbar.php"); ?>

    <main class="loginsignin container-fluid">
    <div class="d-flex  flex-column align-items-center justify-content-center h-100">
        <ul class="nav nav-pills rounded-2" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Sign in</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="signin-tab" data-bs-toggle="tab" data-bs-target="#signin" type="button" role="tab" aria-controls="signin" aria-selected="false">Sign up</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                <div class="form-connexion rounded-4 p-4">
                <form class="formulaire rounded-4 p-4" method="POST" action="contents/config.php">
                    <h2 class="text-white text-center mb-4">LOGIN</h2>   
                    <div class="form-floating mb-4">
                      <input type="email" class="form-control rounded-3" id="floatingNom" name="email" placeholder="Enter your email" required>
                      <label for="floatingNom">Email</label>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="password" class="form-control rounded-3" id="floatingPrenom" name="password" placeholder="Password" required>
                      <label for="floatingPrenom">Password</label>
                    </div>
                    <div>
                      <input type="submit" value="connection" class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" name="submit">
                    </div>
                </form>
                </div>
            </div>
            <div class="tab-pane fade" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                <div class="form-inscription rounded-4 p-4">
                    <form action="" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="floatingNom" name="nom" placeholder="family name" required>
                            <label for="floatingNom">family name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="floatingPrenom" name="prenom" placeholder="first name" required>
                            <label for="floatingPrenom">first name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" id="floatingEmail" name="email" placeholder="Email" required>
                            <label for="floatingEmail">email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="floatingMdp2" name="password" placeholder="password" required></input>
                            <label for="floatingMdp2">password</label>
                        </div>
                        <a href="#" type="button" class="w-100 btn btn-dark rounded-3 btn-primary" name="contactus">Inscription</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>


    <!-- FOOTER -->
    <?php include("contents/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  </body>
</html>