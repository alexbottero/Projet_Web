<?php
    require("../../Modeles/Modele_User.php");
    $mail=$_POST['mail'];
    $mdp=$_POST['mdp'];
    $err="";
    if(empty($mail)||empty($mdp)){
        $err="Champs vides";
        Header('Location:/connexion/erreur/'.$err);
    }
    elseif(!(filter_var($mail,FILTER_VALIDATE_EMAIL))){
        $err="Email invalide";
        Header('Location:/connexion/erreur/'.$err);

    }
    elseif(empty(existUser($mail))){
        $err="Compte inexistant";
        Header('Location:/connexion/erreur/'.$err);
    }
    else{
        $mdp=sha1(sha1($mdp));
        $user=existUser($mail);
        if($mdp==$user['password']){
            $nCodeCookie=substr(str_shuffle("0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVB"),0,30);
            setcookie("cookie_Connexion",$nCodeCookie,time()+(10000),"/",'' );
            updateCookie($user['email'],$nCodeCookie);
            header("Location:/index");
        }
        else{
            $err="Mot de passe erroné";
            Header('Location:/connexion/erreur/'.$err);
        }
    }
?>