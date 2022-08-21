<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection de classe</title>
</head>
<?php
require("./conn.php");
$execResult = $connexion->query("SELECT DISTINCT classe FROM animaux");
$tableAnimaux = $execResult->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
<h1>Selectionnez une classe d'animaux<h1>        
<form method="GET" action="./read.php">
    <select name="chClasse" id="selectClasse">
        <?php foreach($tableAnimaux as $key => $classeG ) :?>
            <option><?=$classeG["classe"]; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit">
</form>

    
</body>
</html>