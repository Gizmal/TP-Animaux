<?php 

    $hote = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "tp-animaux";

    $connexion = new PDO("mysql:host=$hote; dbname=$dbname", $user, $pass);
?>