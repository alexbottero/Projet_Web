<?php
    require("../../Modeles/Modele_User.php");
    $mail=$_POST['mail'];
    $mdp=$_POST['mdp'];
    if(empty($mail)||empty($mdp)){
        echo "rentre";
    }
    elseif(!(filter_var($mail,FILTER_VALIDATE_EMAIL))){
        echo "t'es con ton mail pas valide";
    }
    elseif(empty(existUser($mail))){
        echo "t'existe pas connard";
    }
    else{
        $mdp=sha1(sha1($mdp));
        $user=existUser($mail);
        if($mdp==$user['password']){
            $nCodeCookie=substr(str_shuffle("0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVB"),0,30);
            setcookie("cookie_Connexion",$nCodeCookie,time()+(10000),"/",'' );
            updateCookie($user['email'],$nCodeCookie);
            header("Location: ../../index.php");
        }
        else{
            echo "mauvais mot de passe ta race ";
        }
    }
?>