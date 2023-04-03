<!DOCTYPE html>
<html>

<head>
    <title>Add User</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body style="background-color: #457b9d;">
    <div class="mt-4 container">
        <h1 class="text-white">Add User</h1>
        <form action="processAddUser.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control rounded-3" id="floatingPrenom" name="fname" placeholder=" name"
                    required>
                <label for="floatingPrenom">name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-3" id="floatingEmail" name="email" placeholder="Email"
                    required>
                <label for="floatingEmail">email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-3" id="floatingMdp2" name="password"
                    placeholder="password" required></input>
                <label for="floatingMdp2">password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control rounded-3" id="floatingMdp2" name="confirm_password"
                    placeholder="password" required></input>
                <label for="floatingMdp2">password confirmtion</label>
            </div>

            <input type="submit" value="Inscription" class=" mb-2 btn btn-lg  btn-primary" name="submit">
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>