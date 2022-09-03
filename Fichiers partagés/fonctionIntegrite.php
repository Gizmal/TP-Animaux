<?php
/**
 * @author VULQUIN Jérôme
 * @param string    $variable  Spécifier la variable dont vous souhaitez controler l'intégrité
 * @param string    $type      Spécifier le type de variable ( nom => nom,prenom,nom commun // mail => adresse mail // url => lien internet // mdp => mot de p0asse)
 * @return array    $reponse   Retourne le tableau des erreurs en guise de réponse
 */
function integrite(string $variable,string $type) :array {
    $variable = trim($variable);
    $variable = stripslashes($variable);
    $variable = htmlspecialchars($variable);
    if($type==="mail"){
        if(!filter_var($variable,FILTER_VALIDATE_EMAIL)){
            $reponse["mail"]="L'adresse mail n'est pas valide";
        }        
    }
    if($type==="url"){
        if(!filter_var($variable,FILTER_VALIDATE_URL)){
            $reponse["url"]="Le lien n'est pas valide";
        }
    }
    if($type==="nom"){
        $variable=ucfirst(strtolower($variable));
        if(preg_match("/^[A-Za-z '-]+$/i",$variable)===0){
            $reponse["nom"]="Le nom ne peut contenir que des lettres, des espaces, un trait d'union et/ou une apostrophe";
        }
    }
    if($type==="mdp"){
        $variable=trim($variable);
        if(preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/i",$variable)===0){
            $reponse["mdp"]="Le mot de passe doit contenir au moins 1 Majuscule, 1 minuscule, 1 chiffre et 8 caractères";
        }
    }
    if(!isset($reponse)){
        $reponse["parfait"]="Rien à signaler";
    }
    return $reponse;   
}
$reponses=integrite("Jean  Michel","mdp");

foreach($reponses as $error){
        echo $error;
    }

?>