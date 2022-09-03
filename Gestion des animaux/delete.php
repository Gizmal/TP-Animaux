<?php 

    require("./conn.php");

    if($connexion){ 

        $userId = $_POST['hiddenField'];

        $execResult = $connexion->query("DELETE FROM animaux WHERE id = $userId");
        
    }
?>