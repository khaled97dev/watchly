<?php
session_start();

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


if(isset($_POST['user_id'])) {  
    $trailer_id = $_POST['trailer_id'];
    $user_id = $_POST['user_id'];
    $stmt = $pdo->prepare("INSERT INTO favorite (user_id, trailer_id) VALUES (?, ?)");
    $stmt->execute([$user_id, $trailer_id]);
    header("Location: /watchly/film.php?id=$trailer_id");

}
?>