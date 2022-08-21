<h1>Liste des animaux par catégorie </h1>
<ul>
<?php 

    // Script de lecture de tuple(s) //

    // Requiert le fichier de connexion à la base de données    
    require("./conn.php");

    // S'assure que la connexion à la base de données soit faite
    if($connexion){ 

        // Déclaration puis exécution de la requête permettant de récupérer 
        // l'ensemble des informations au sujet des utilisateurs stockés en BDD
        $choix=$_GET["chCategorie"];
        $execResult = $connexion->query("SELECT * FROM animaux WHERE categorie='$choix'");
        $assocResults = $execResult->fetchAll(PDO::FETCH_ASSOC);

        // Parcours du tableau de résultats (afin d'afficher chaque utilisateur)
        foreach($assocResults as $singleRes):
        ?>
            <li>
                <?= $singleRes["id"] ?> | <?= $singleRes["nom"] ?> | <?= $singleRes["categorie"] ?> | 
                <?= $singleRes["groupe"] ?> | <?= $singleRes["habitat"] ?> | <?= $singleRes["regime_al"] ?> | <?= $singleRes["photo"]?>;
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