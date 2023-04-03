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
  
if (!isset($_GET['id'])) {
    header("Location: filmControl.php");
    exit();
}

$trailer_id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM trailer WHERE id = ?");
$stmt->execute([$trailer_id]);

header("Location: filmControl.php");
exit();
?>
