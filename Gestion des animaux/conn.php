<?php 

    $hote = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "tp-animaux";

    $connexion = new PDO("mysql:host=$hote; dbname=$dbname", $user, $pass);

    if($connexion){
        
        $req = "CREATE TABLE IF NOT EXISTS animaux (id SERIAL, nom VARCHAR(255), classe VARCHAR(255), ordre VARCHAR(255),famille VARCHAR(255),habitat VARCHAR(255),statut VARCHAR(255),photo VARCHAR(255))";
        $resultat = $connexion->query($req);    
    }
