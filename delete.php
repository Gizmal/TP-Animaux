<?php 

    // Script de suppression de tuple(s) //

    // Requiert le fichier de connexion à la base de données 
    require("./conn.php");

    // S'assure que la connexion à la base de données soit faite
    if($connexion){ 

        // Récupère la valeur du champ de type hidden issu des formulaires 
        // présents au sein du fichier "read.php"
        $userId = $_POST['hiddenField'];

        // Déclaration puis exécution de la requête de suppression (selon l'ID) //
        $execResult = $connexion->query("DELETE FROM animaux WHERE id = $userId");

        /* var_dump($execResult); */
        
    }
?>