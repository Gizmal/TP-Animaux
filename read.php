<h1>Liste des animaux </h1>
<ul>
<?php 

    // Script de lecture de tuple(s) //

    // Requiert le fichier de connexion à la base de données    
    require("./conn.php");

    // S'assure que la connexion à la base de données soit faite
    if($connexion){ 

        // Déclaration puis exécution de la requête permettant de récupérer 
        // l'ensemble des informations au sujet des utilisateurs stockés en BDD
        if($_GET && $_GET["chClasse"]) {
            $choix=$_GET["chClasse"];
            $req="SELECT * FROM animaux WHERE classe='$choix'";
        }
        else{
            $req="SELECT * FROM animaux";
        }
        $execResult = $connexion->query($req);
        $assocResults = $execResult->fetchAll(PDO::FETCH_ASSOC);

        // Parcours du tableau de résultats (afin d'afficher chaque utilisateur)
        foreach($assocResults as $singleRes):
        ?>
            <li>
                <?= $singleRes["id"] ?> | <?= $singleRes["nom"] ?> | <?= $singleRes["classe"] ?> | 
                <?= $singleRes["ordre"] ?> | <?= $singleRes["famille"] ?> | <?= $singleRes["habitat"] ?> | 
                <?= $singleRes["statut"]?> | <?= $singleRes["photo"]?>;
                <a href="./update.php?id=<?= $singleRes["id"] ?>">Modifier</a>
                <form method="POST" action="./delete.php" style="display:inline">
                    <input type="hidden" name="hiddenField" value="<?= $singleRes["id"] ?>">
                    <input type="submit" value="Supprimer">
                </form>
            </li>
    <?php
        endforeach;
    }
?>
</ul>
<a href="./formulaireAjout.html" title="Redirection sur la page d'ajout d'utilisateur">Ajouter un animal</a>
<br><br>
<?php
    require("./selectCategorie.php"); ?>