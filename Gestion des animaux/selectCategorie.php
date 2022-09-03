<?php
require("./conn.php");
$execResult = $connexion->query("SELECT DISTINCT classe FROM animaux");
$tableAnimaux = $execResult->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
<h2>Selectionnez une classe d'animaux</h2>        
<form class="cat1" method="GET" action="./read.php">
    <select name="chClasse" id="selectClasse">
        <?php foreach($tableAnimaux as $key => $classeG ) :?>
            <option><?=$classeG["classe"]; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit">
</form>

    
</body>
</html>