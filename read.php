<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="description" content="Les animaux">
    <title>Affichage des animaux</title>
</head>
<body>
    <h1>Liste des animaux </h1>
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
            $assocResults = $execResult->fetchAll(PDO::FETCH_ASSOC); ?>
    
           <!--  Parcours du tableau de résultats (afin d'afficher chaque utilisateur) -->
            <table border=1>
                <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Classe</th>
                    <th>Ordre</th>
                    <th>Famille</th>
                    <th>Habitat</th>
                    <th>Statut</th>
                    <th>Photo</th>
                </tr>
                <?php
                foreach($assocResults as $singleRes):
                ?>
                    <tr>
                        <td><?= $singleRes["id"] ?></td>
                        <td><?= $singleRes["nom"] ?></td>
                        <td><?= $singleRes["classe"] ?></td>
                        <td><?= $singleRes["ordre"] ?></td>
                        <td><?= $singleRes["famille"] ?></td>
                        <td><?= $singleRes["habitat"] ?></td>
                        <td><?= $singleRes["statut"]?></td>
                        <td><a href="<?= $singleRes["photo"]?>" title="Lien vers une photo"><?= $singleRes["photo"]?></a></td>
                        <td><a href="./update.php?id=<?= $singleRes["id"] ?>">Modifier</a></td>
                        <td>
                            <form method="POST" action="./delete.php" style="display:inline">
                                <input type="hidden" name="hiddenField" value="<?= $singleRes["id"] ?>">
                                <input type="submit" value="Supprimer">
                            </form>
                        </td>
                    </tr>
                    <?php
                endforeach; ?>
            </table>
        <?php }
    ?>
    <br>
    <a href="./formulaireAjout.html" title="Redirection sur la page d'ajout d'utilisateur">Ajouter un animal</a>
    <br><br>
    <?php
        require("./selectCategorie.php"); ?>
</body>
</html>