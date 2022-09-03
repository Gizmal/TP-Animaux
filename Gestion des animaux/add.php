<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="description" content="Les animaux">
    <link rel="stylesheet" href="../webfiles/css/style.css">
    
    <title>Affichage des animaux</title>
</head>
<body>
<?php 

    require("./conn.php");

    if($connexion){ 

        $nom = $_POST['nom'];
        $classe= $_POST['classe'];
        $ordre = $_POST['ordre'];
        $famille = $_POST['famille'];
        $habitat = $_POST['habitat'];
        $statut = $_POST['statut'];
        $photo = $_POST['photo'];

        $execResult = $connexion->query("INSERT INTO animaux (nom,classe,ordre,famille,habitat,statut,photo)
         VALUES ('$nom','$classe','$ordre','$famille','$habitat','$statut','$photo')");
        
    }
?>
<h1  id="titre">Ajout effectué avec succés</h1>
<p class="fPhp"><a href="./read.php" title="Redirection sur la page d'affichage">Afficher tous les animaux</a></p>

</body>
</html>