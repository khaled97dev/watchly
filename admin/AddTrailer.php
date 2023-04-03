<!DOCTYPE html>
<html>
<head>
    <title>Add Trailer</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body style="background-color: #457b9d;">

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

// Add the trailer to the database
if(isset($_POST['submit'])) {
    $stmt = $pdo->prepare("INSERT INTO trailer (trailer_name, trailer_description, trailer_url, trailer_img) VALUES (?, ?, ?, ?)");
    $stmt->execute([$_POST['trailer_name'], $_POST['trailer_description'], $_POST['trailer_url'], $_POST['trailer_img']]);
    header("Location: filmControl.php");
    exit();
}
?>

<div class="mt-4 container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <form method="post">
            <div class="form-group">
              <label for="trailer_name">Trailer Name:</label>
              <input type="text" name="trailer_name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="trailer_description">Description:</label>
              <textarea name="trailer_description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
              <label for="trailer_url">Video URL:</label>
              <input type="url" name="trailer_url" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="trailer_img">Image URL:</label>
              <input type="text" name="trailer_img" class="form-control" required>
            </div>
            <div class="form-group text-right">
              <button type="submit" name="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.
