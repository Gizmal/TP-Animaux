<h1>Liste des utilisateurs </h1>
<ul>
<?php 

    

      
    require("./connexion.php");

    
    if($connexion){ 

        
        $execResult = $connexion->query("SELECT * FROM users");
        $assocResults = $execResult->fetchAll(PDO::FETCH_ASSOC);

        
        foreach($assocResults as $singleRes):
        ?>
            <li>
                <?= $singleRes["Id"] ?> | <?= $singleRes["pseudo"] ?> | <?= $singleRes["email"] ?> | <?= $singleRes["motDePasse"] ?>
                <a href="./update.php?id=<?= $singleRes["Id"] ?>">Modifier</a>
                <form method="POST" action="./suppressionUtilisateur" style="display:inline">
                    <input type="hidden" name="hiddenField" value="<?= $singleRes["id"] ?>">
                    <input type="submit" value="Supprimer">
                </form>
            </li>
    <?php
        endforeach;
    }
?>
</ul>
<a href="./ajout.html" title="Redirection sur la page d'ajout d'utilisateur">Ajouter un utilisateur</a>