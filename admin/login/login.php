<?php 
//Start session
session_start(); 

//Username and password
$ID = "admin";
$pass = "Elliot_19";

if (isset($_POST["ID"]) && isset($_POST["pass"])) { 

    if ($_POST['ID'] === $ID && $_POST['pass'] === $pass) { 
    $_SESSION['admin'] == true;
    header("Location: ../index.php");
    } 
        //Wrong login - message
        else {$wrong = "Mauvais identifiant/mot de passe";

        echo '<a href="index.php">Se connecter a nouveau</a>';
        
    
    }

        
}
?>