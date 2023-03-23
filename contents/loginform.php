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
                    <form action="usertrait.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" id="floatingEmail" name="email" placeholder="Email" required>
                            <label for="floatingEmail">email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="floatingMdp" name="password" placeholder="Mot de passe" required></input>
                            <label for="floatingMdp">password</label>
                        </div>
                        <a href="#" type="button" class="w-100 btn btn-dark rounded-3 btn-primary" name="contactus">Connexion</a>
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