<?php

    if($_POST) {
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // $hschars = preg_match($password, PREG_OFFSET_CAPTURE);

        // var_dump($hschars);

        $hash = hash('sha512', $password);
       
        echo $hash;

    }  

?>

