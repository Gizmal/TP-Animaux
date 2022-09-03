<?php 

    require("./connexion.php");

    if($connexion){ 

        $userId = $_POST['hiddenField'];
        
        $execResult = $connexion->query("DELETE FROM users WHERE id = $userId");

        /* var_dump($execResult); */
        
    }
?>