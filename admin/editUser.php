<!DOCTYPE html>
<html>
<head>
	<title>User Management</title>
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

// Get the user to be edited
if(isset($_GET['id'])) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$_GET['id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    die("User ID not specified.");
}

// Update the user in the database
if(isset($_POST['submit'])) {
    $stmt = $pdo->prepare("UPDATE users SET user_name = ?, user_email = ?, role_id = ? WHERE id = ?");
    $stmt->execute([$_POST['user_name'], $_POST['user_email'], $_POST['role_id'], $_GET['id']]);
    header("Location: userControl.php");
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
              <label for="user_name">Name:</label>
              <input type="text" name="user_name" value="<?= $user['user_name'] ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="user_email">Email:</label>
              <input type="email" name="user_email" value="<?= $user['user_email'] ?>" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="role_id">Role:</label>
              <select name="role_id" class="form-control" required>
                <option value="">Select a role</option>
                <option value="1" <?= $user['role_id'] == 1 ? 'selected' : '' ?>>Admin</option>
                <option value="2" <?= $user['role_id'] == 2 ? 'selected' : '' ?>>User</option>
              </select>
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




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>