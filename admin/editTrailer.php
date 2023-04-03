<!DOCTYPE html>
<html>
<head>
	<title>Edit Trailer</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "watchly";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Get the trailer to be edited
if(isset($_GET['id'])) {
    $stmt = $pdo->prepare("SELECT * FROM trailer WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $trailer = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    die("Trailer ID not specified.");
}

// Update the trailer in the database
if(isset($_POST['submit'])) {
    $stmt = $pdo->prepare("UPDATE trailer SET trailer_name = ?, trailer_description = ?, trailer_url = ?, trailer_img = ? WHERE id = ?");
    $stmt->execute([$_POST['trailer_name'], $_POST['trailer_description'], $_POST['trailer_url'], $_POST['trailer_img'], $_GET['id']]);
    header("Location: filmControl.php");
    exit();
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Trailer</h3>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="trailer_name">Trailer Name:</label>
                            <input type="text" name="trailer_name" value="<?= $trailer['trailer_name'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="trailer_description">Trailer Description:</label>
                            <textarea name="trailer_description" class="form-control" required><?= $trailer['trailer_description'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="trailer_url">Trailer URL:</label>
                            <input type="text" name="trailer_url" value="<?= $trailer['trailer_url'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="trailer_img">Trailer Image URL:</label>
                            <input type="text" name="trailer_img" value="<?= $trailer['trailer_img'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>