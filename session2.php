<?php

session_start();

if (isset($_SESSION["foo"])){
    echo $_SESSION["foo"];
}
else{
    echo "vous devez d'abord éxecuter le script session1.php";
}