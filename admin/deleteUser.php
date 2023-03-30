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

// Check if user ID is provided
if (!isset($_GET['id'])) {
    header("Location: userControl.php");
    exit();
}

// Get user ID from GET parameter
$user_id = $_GET['id'];

// Delete user from the database
$stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
$stmt->execute([$user_id]);

// Redirect to admin page after deletion
header("Location: userControl.php");
exit();
?>
