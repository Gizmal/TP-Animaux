<?php 

    // A vous de le déchiffrer :) //

    require("./conn.php");

    if($connexion){
        
        if($_GET && $_GET["id"]){
            $userId = $_GET["id"];
            
            $execResult = $connexion->query("SELECT * FROM animaux WHERE id=$userId");
            $result = $execResult->fetchAll(PDO::FETCH_ASSOC);
        }

        else{
            $newID = $_POST["userID"];
            $newNom = $_POST["nom"];
            $newClasse = $_POST["classe"];
            $newOrdre = $_POST["ordre"];
            $newFamille = $_POST["famille"];
            $newHabitat = $_POST["habitat"];
            $newStatut = $_POST["statut"];
            $newPhoto = $_POST["photo"];


            $execResult = $connexion->query("UPDATE animaux SET nom = '$newNom', classe = '$newClasse', ordre = '$newOrdre', 
            famille = '$newFamille', habitat = '$newHabitat', statut = '$newStatut' , photo = '$newPhoto' WHERE id='$newID'");
        }
    }
?>

<form method="POST" action="./update.php">

    <input type="hidden" name="userID" value="<?php if(isset($result)){ echo $_GET["id"];} ?>">

    <div>
        <label for="aNom">Nom&nbsp;: </label>
        <input type="text" name="nom" id="aNom" value="<?php if(isset($result)){ echo $result[0]["nom"];} ?>">
    </div>

    <div>
        <label for="aClasse">Catégorie&nbsp;: </label>
        <input type="text" name="classe" id="aClasse" value="<?php if(isset($result)){ echo $result[0]["classe"];} ?>">
    </div>

    <div>
        <label for="aOrdre">Groupe&nbsp;: </label>
        <input type="text" name="ordre" id="aOrdre" value="<?php if(isset($result)){ echo $result[0]["ordre"];} ?>">
    </div>

    <div>
        <label for="aFamille">Habitat&nbsp;: </label>
        <input type="text" name="famille" id="aFamille" value="<?php if(isset($result)){ echo $result[0]["famille"];} ?>">
    </div>

    <div>
        <label for="aHabitat">Régime alimentaire&nbsp;: </label>
        <input type="text" name="habitat" id="aHabitat" value="<?php if(isset($result)){ echo $result[0]["habitat"];} ?>">
    </div>

    <div>
        <label for="aStatut">Statut ( UICN )&nbsp;: </label>
        <input type="text" name="statut" id="aStatut" value="<?php if(isset($result)){ echo $result[0]["statut"];} ?>">
    </div>

    <div>
        <label for="aPhoto">Photo&nbsp;: </label>
        <input type="text" name="photo" id="aPhoto" value="<?php if(isset($result)){ echo $result[0]["photo"];} ?>">
    </div>

    <input type="submit" value="Mettre à jour">
</form>