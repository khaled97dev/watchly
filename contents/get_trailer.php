<?php
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



// for having the id of the trailer from the page film.php
$trailerId = $_GET['id'];

//to diplay one film 
$sql = "SELECT * FROM trailer WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $trailerId]);
$trailer = $stmt->fetch(PDO::FETCH_ASSOC);




?>