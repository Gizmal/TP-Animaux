<?php 

// CHIFFREMENT

    $pseudo = $_POST ["pseudo"];


    $pseudo = str_replace(" ", "", $pseudo);
    if (isset($pseudo)){
    echo $pseudo;
    }


    preg_match("/^[A-Za-z ,.'-]+$/i",$_POST["pseudo"]);


    $REC = $dbh->prepare("INSERT INTO users VALUES(:pseudo, :email, :password)");
    // correction
    // $REC->bindParam (1, $pseudo, PDO::PARAM_STR);
    $REC->bindParam (:pseudo, $pseudo, PDO::PARAM_STR);
        // correction
    // $REC->bindParam (2, $email, PDO::PARAM_STR);
    $REC->bindParam (:email, $email, PDO::PARAM_STR);
        // correction
    // $REC->bindParam (3, $password, PDO::PARAM_STR);
    $REC->bindParam (:password, $password, PDO::PARAM_STR);
    $req->execute();
?>