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
            $userID = $_POST["userID"];
            $newAname = $_POST["nom"];
            $newAcategorie = $_POST["categorie"];
            $newAgroupe = $_POST["groupe"];
            $newAhabitat = $_POST["habitat"];
            $newAregime = $_POST["regime"];
            $newAphoto = $_POST["photo"];


            $execResult = $connexion->query("UPDATE animaux SET nom = '$newAname', categorie = '$newAcategorie', groupe = '$newAgroupe', habitat = '$newAhabitat', regime_al = '$newAregime', photo = '$newAphoto' WHERE id='$userID'");
            var_dump($execResult);
        }
    }
?>

<form method="POST" action="./update.php">

    <input type="hidden" name="userID" value="<?php if(isset($result)){ echo $_GET["id"];} ?>">

    <div>
        <label for="aName">Nom&nbsp;: </label>
        <input type="text" name="nom" id="aName" value="<?php if(isset($result)){ echo $result[0]["nom"];} ?>">
    </div>

    <div>
        <label for="aCategorie">Catégorie&nbsp;: </label>
        <input type="text" name="categorie" id="aCategorie" value="<?php if(isset($result)){ echo $result[0]["categorie"];} ?>">
    </div>

    <div>
        <label for="aGroupe">Groupe&nbsp;: </label>
        <input type="text" name="groupe" id="aGroupe" value="<?php if(isset($result)){ echo $result[0]["groupe"];} ?>">
    </div>

    <div>
        <label for="aHabitat">Habitat&nbsp;: </label>
        <input type="text" name="habitat" id="aHabitat" value="<?php if(isset($result)){ echo $result[0]["habitat"];} ?>">
    </div>

    <div>
        <label for="aRegime">Régime alimentaire&nbsp;: </label>
        <input type="text" name="regime" id="aRegime" value="<?php if(isset($result)){ echo $result[0]["regime_al"];} ?>">
    </div>

    <div>
        <label for="aPhoto">Photo&nbsp;: </label>
        <input type="files" name="photo" id="aPhoto" value="<?php if(isset($result)){ echo $result[0]["photo"];} ?>">
    </div>

    <input type="submit" value="Mettre à jour">
</form>