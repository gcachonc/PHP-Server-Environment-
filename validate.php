<?php
// Start session
    session_start();

    // Get form input values
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $emailDB = "caxon@maquina.com";
    $passDB = "123456";

    if($email === $emailDB && $pass === $passDB){
        $_SESSION["email"] = "te has logeado";
        header("Location:./panel.php");
    }
    else{
        header("Location:./panel.php");
    }

?>
