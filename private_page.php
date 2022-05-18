<?php

session_start();

//verif si l'utilisateutr est authentifier
if (!isset($_SESSION["authentificated"]) || $_SESSION["authentificated"] != true){
    //redirection temporaire
    $url = "/login.php";
    header("Location: {$url}", 302);
    exit();
}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page privée</title>
</head>
<body>
    <h1>Page privée</h1>
    <p>
        <a href="/logout.php">se deconnecter</a>
    </p>
</body>
</html>