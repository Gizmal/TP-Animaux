<?php 

    // Script d'ajout de tuple(s) //

    // Requiert le fichier de connexion à la base de données
    require("./conn.php");

    // S'assure que la connexion à la base de données soit faite
    if($connexion){ 

        // Récupère les données issues du formulaire d'ajout (cf. formulaireAjout.html)
        $nom = $_POST['nom'];
        $categorie = $_POST['categorie'];
        $groupe = $_POST['groupe'];
        $habitat = $_POST['habitat'];
        $regime = $_POST['regime'];
        $photo = $_POST['photo'];

        // Déclaration puis exécution de la requête d'ajout
        // (dynamique en fonction des données issues du formulaire)
        $execResult = $connexion->query("INSERT INTO animaux (nom,categorie,groupe,habitat,regime_al,photo) VALUES ('$nom','$categorie','$groupe','$habitat','$regime','$photo')");

        /* var_dump($execResult); */

    }
?>