<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "watchly";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// for display all my films on page cards.php

$sql = "SELECT * FROM trailer
            INNER JOIN trailer_category ON trailer.id = trailer_category.trailer_id 
            INNER JOIN category ON category.id = trailer_category.category_id";
$stmt = $pdo->query($sql);
$trailers = $stmt->fetchAll(PDO::FETCH_ASSOC);



// foreach ($trailers as $trailer) {
//     $categoryId = $trailer['category_id'];
//     $sql = "SELECT * FROM category WHERE id = '$categoryId'";
//     $stmt = $pdo->query($sql);
//     $category = $stmt->fetch(PDO::FETCH_ASSOC);
//     $categoryName = $category['category_name'];
    

// }



?>