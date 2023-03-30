<?php

session_start();

// Vérifier que tous les champs ont bien été remplis
if(isset($_POST['submit']))
{

   if(!empty($_POST['email']) AND !empty($_POST['password']))
   {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    try
    {
      $conn = new PDO(
        'mysql:host=localhost;dbname=watchly;charset=utf8',
        'root',
        ''
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (Exception $e)
    
    {
            die('Erreur : ' . $e->getMessage());
    }
    // Prepare the SQL statement to check if the user exists in the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_email= ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $id = $user['id'];
    $role_id = $user['role_id'];

    // Vérifier que les champs utilisateur et les données serveur correspondent
    if (password_verify($password, $user['user_password'])) 
    {
        $rolestmt = $conn->prepare('SELECT * FROM users WHERE id = ?');
        $rolestmt->execute([$id]);
        $role = $rolestmt->fetchAll();

      // Vérification du rôle de l'utilisateur connecté
        if ($role_id == 1) {
          $_SESSION['message'] = 'Bonjour '.$user["user_name"].', vous êtes connecté avec le mail administrateur ' . $user['user_email'];
          $_SESSION['gestion_admin'] = ' <a href="/watchly/admin.php"> Admin </a> ';
          $_SESSION['user_email'] = $_POST['email'];
          $_SESSION['user_password'] = $_POST['password'];
          $_SESSION['user_name'] = $user['user_name'];
          $_SESSION['id'] = $user['id'];
          $_SESSION['id_role'] = $role_id;
          
          header("Location: /watchly/index.php");
        }

          elseif ($role_id == 2) {
          $_SESSION['message'] = 'Bonjour '.$user["user_name"].', vous êtes connecté avec le compte ' . $user['user_email'];
          $_SESSION['gestion_admin'] = null;
          $_SESSION['user_email'] = $_POST['email'];
          $_SESSION['user_password'] = $_POST['password'];
          $_SESSION['user_name'] = $user['user_name'];
          $_SESSION['id'] = $user['id'];
          $_SESSION['id_role'] = $role_id;
          header("Location: /watchly/index.php");
        }}
// Messages d'erreur
      elseif ($user['user_email'] == $email && $user['user_password'] != $password) {
        $_SESSION['message'] = 'Mot de passe incorrect';
        header("Location: /watchly/login.php");
        exit();
      }
      else { 
        $_SESSION['message'] = "Le compte n'existe pas avec cet email, veuillez vérifier votre email ou vous inscrire";
        header("Location: /watchly/login.php");
        exit();
      }
    }
    else {
      die("erreur");
    }
  }
//  Vérifier que tous les champs ont bien été remplis
 else
 {
  $_SESSION['message'] = 'Veuillez remplir tous les champs';
        header("Location: /watchly/login.php");
        exit();
 }



?>
