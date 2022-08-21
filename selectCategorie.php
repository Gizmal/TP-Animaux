<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection de catégorie</title>
</head>
<?php
require("./conn.php");
$execResult = $connexion->query("SELECT DISTINCT categorie FROM animaux");
$tableAnimaux = $execResult->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
<h1>Selectionnez une catégorie d'animaux<h1>        
<form method="GET" action="./readCategorie.php">
    <select name="chCategorie" id="selectCategorie">
        <?php foreach($tableAnimaux as $key => $catG ) :?>
            <option><?=$catG["categorie"]; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit">
</form>

    
</body>
</html>