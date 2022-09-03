<?php 

    require("./connexion.php");

    if($connexion){
        
        if($_GET && $_GET["id"]){
            $userId = $_GET["id"];
            
            $execResult = $connexion->query("SELECT * FROM users WHERE id=$userId");
            $result = $execResult->fetchAll(PDO::FETCH_ASSOC);
        }

        else{
            $userID = $_POST["id"];
            $newPseudo = $_POST["pseudo"];
            $newEmail = $_POST["email"];
            $newPassword = $_POST["motDePasse"];

            $execResult = $connexion->query("UPDATE users SET id='$userID', pseudo = '$newPseudo', email = '$newEmail', motDePasse = '$newPassword' WHERE id='$userID'");
            var_dump($execResult);
        }
    }
?>

<form method="POST" action="./update.php">

    <input type="hidden" name="userID" value="<?php if(isset($result)){ echo $_GET["id"];} ?>">

    <div>
        <label for="uPseudo">Votre pseudo : </label>
        <input type="text" name="pseudo" id="uPseudo" value="<?php if(isset($result)){ echo $result[0]["nom"];} ?>">
    </div>

    <div>
        <label for="uMail">Votre email : </label>
        <input type="email" name="email" id="uMail" value="<?php if(isset($result)){ echo $result[0]["prenom"];} ?>">
    </div>

    <div>
        <label for="uPass">Votre mot de passe : </label>
        <input type="password" name="motDePasse" id="uPass" value="<?php if(isset($result)){ echo $result[0]["motDePasse"];} ?>">
    </div>

    <input type="submit" value="Mettre à jour">
</form>