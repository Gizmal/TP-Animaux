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
    <main>
        <h1 id="titre">Liste des animaux </h1>
        <?php        
            require("./conn.php");
                    
            if($connexion){
        
                if($_GET && $_GET["chClasse"]) {
                    $choix=$_GET["chClasse"];
                    $req="SELECT * FROM animaux WHERE classe='$choix'";
                }
                else{
                    $req="SELECT * FROM animaux";
                }
                $execResult = $connexion->query($req);
                $assocResults = $execResult->fetchAll(PDO::FETCH_ASSOC); ?>
               
                <div class="cat1">
                    <table class="table" >
                        <tr>
                            <th class="tr">N°</th>
                            <th class="tr">Nom</th>
                            <th class="tr">Classe</th>
                            <th class="tr">Ordre</th>
                            <th class="tr">Famille</th>
                            <th class="tr">Habitat</th>
                            <th class="tr">Statut</th>
                            <th class="tr">Photo</th>
                        </tr>
                        <?php
                        foreach($assocResults as $singleRes):
                        ?>
                            <tr>
                                <td class="tr"><?= $singleRes["id"] ?></td>
                                <td class="tr"><?= $singleRes["nom"] ?></td>
                                <td class="tr"><?= $singleRes["classe"] ?></td>
                                <td class="tr"><?= $singleRes["ordre"] ?></td>
                                <td class="tr"><?= $singleRes["famille"] ?></td>
                                <td class="tr"><?= $singleRes["habitat"] ?></td>
                                <td class="tr"><?= $singleRes["statut"]?></td>
                                <td class="tr"><a href="<?= $singleRes["photo"]?>" title="Lien vers une photo"><?= "Image de ".$singleRes["nom"]?></a></td>
                                <td class="td"><a class="bouton1" href="./update.php?id=<?= $singleRes["id"] ?>">Modifier</a></td>
                                <td class="td">
                                    <form method="POST" action="./delete.php" style="display:inline">
                                        <input type="hidden" name="hiddenField1" value="<?= $singleRes["id"] ?>">
                                        <input type="submit" value="Supprimer">
                                    </form>
                                </td>
                            </tr>
                            <?php
                        endforeach; ?>
                    </table>
                </div>
    </main>
        <?php }
    ?>
    <br>
    <p class="fPhp"><a href="./formulaireAjout.html" title="Redirection sur la page d'ajout d'utilisateur">Ajouter un animal</a></p>
    <br><br>

    <?php require("./selectCategorie.php"); ?>

</body>
</html>