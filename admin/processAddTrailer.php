
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

// Handle trailer image upload
if(isset($_POST['submit'])) {
    // Check if the file was uploaded without errors
    if(isset($_FILES["trailer_img"]) && $_FILES["trailer_img"]["error"] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["trailer_img"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Allow certain image file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        } else {
            // Upload the file to the server
            if(move_uploaded_file($_FILES["trailer_img"]["tmp_name"], $target_file)) {
                // Insert the new trailer into the database
                $stmt = $pdo->prepare("INSERT INTO trailer (trailer_name, trailer_description, trailer_url, trailer_img) VALUES (?, ?, ?, ?)");
                $stmt->execute([$_POST['trailer_name'], $_POST['trailer_description'], $_POST['trailer_url'], $target_file]);
                header("Location: filmControl.php");
                exit();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}
?>
