<?php
session_start();

$pdo = new PDO("mysql:host=localhost;dbname=watchly", "root", "");

$user_id = $_SESSION['id'];
$trailer_id = $_POST['trailer_id'];

$sql = "DELETE FROM favorite WHERE user_id = :user_id AND trailer_id = :trailer_id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindParam(':trailer_id', $trailer_id, PDO::PARAM_INT);
$stmt->execute();

header('Location: favoriteList.php');
?>
