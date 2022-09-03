<?php 

    // Fichier permettant d'établir la connexion à la base de données //
    // Sont éventuellement à changer la valeur des variables : $hote, $user, $pass et $dbname //

    $hote = "ftp.vw-dev.fr";
    $user = "vw-de1842142";
    $pass = "z3V4C8r7d4r8!";
    $dbname = "vwdev1842142_6khbmn";

    $connexion = new PDO("mysql:host=$hote; dbname=$dbname", $user, $pass);

    if($connexion){
        // Creation de la table et de ses champs
        $req = "CREATE TABLE IF NOT EXISTS animaux (id SERIAL, nom VARCHAR(255), classe VARCHAR(255), ordre VARCHAR(255),famille VARCHAR(255),habitat VARCHAR(255),statut VARCHAR(255),photo VARCHAR(255))";
        $resultat = $connexion->query($req);    
    }
