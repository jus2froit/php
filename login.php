<?php

session_start();

if ($_POST){
    //le tableau $_POST contient des donnée

    // verif de l'existence de la clé "password dans le tableu $_POST
    if (isset($_POST["password"])){
        //la cle $_POST existe


        if($_POST["password"]=="123"){
            //le mdp est correct

            //on declare que l'utilisateur est autentifier
            $_SESSION["authentificated"] = true;

            //redirection temporaire 
            $url = "/private_page.php";
            header("Location: {$url}", 302);
            exit();
        }
    }
}





?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="/login.php" method="post">
        <input type="text" name="password" placeholder="password">
        <button type="submit">OK</button>
    </form>
</body>
</html>