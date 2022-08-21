<?php 

    // Script d'ajout de tuple(s) //

    // Requiert le fichier de connexion à la base de données
    require("./conn.php");

    // S'assure que la connexion à la base de données soit faite
    if($connexion){ 

        // Récupère les données issues du formulaire d'ajout (cf. formulaireAjout.html)
        $nom = $_POST['nom'];
        $classe= $_POST['classe'];
        $ordre = $_POST['ordre'];
        $famille = $_POST['famille'];
        $habitat = $_POST['habitat'];
        $statut = $_POST['statut'];
        $photo = $_POST['photo'];

        // Déclaration puis exécution de la requête d'ajout
        // (dynamique en fonction des données issues du formulaire)
        $execResult = $connexion->query("INSERT INTO animaux (nom,classe,ordre,famille,habitat,statut,photo)
         VALUES ('$nom','$classe','$ordre','$famille','$habitat','$statut','$photo')");

        /* var_dump($execResult); */

    }
?>
<h1>Ajout effectué avec succés</h1>
<a href="./read.php" title="Redirection sur la page d'affichage">Afficher tous les animaux</a>