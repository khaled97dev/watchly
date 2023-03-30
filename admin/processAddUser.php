<?php

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "watchly";

// Create connection
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully au serveur SQL";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
if(isset($_POST['submit'])) {
   

    if (!empty($_POST["fname"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["confirm_password"])) {
       
        if ($_POST["password"] == $_POST["confirm_password"]) {
            
            $password = htmlspecialchars(password_hash($_POST["password"], PASSWORD_BCRYPT));
            $email = htmlspecialchars($_POST["email"]);
            $name = htmlspecialchars($_POST["fname"]);

            
            $sql = "INSERT INTO users (user_name, user_email, user_password, role_id) VALUES (:user_name, :user_email, :user_password, :role_id)";
            $stmt= $pdo->prepare($sql);     
            $stmt->execute([
                'user_name' => $name,
                'user_email' => $email,
                'user_password' => $password,
                'role_id' => 2,
            ]);
            
            $_SESSION['message'] = "Welcome in our family !";
            header("Location:userControl.php");
            exit();
        } else {
            echo "Les mots de passe ne correspondent pas.";
        }
    } else {
        echo "Tous les champs sont requis.";
    }
}

?>