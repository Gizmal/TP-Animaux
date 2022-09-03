<?php 

    require("./connexion.php");
    
    if($connexion){ 

        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $hash = hash('sha512', $password);

        echo $hash;
        
        $execResult = $connexion->query("INSERT INTO users (pseudo, email, motDePasse) VALUES ('$pseudo', '$email', '$password')");


    }
?>