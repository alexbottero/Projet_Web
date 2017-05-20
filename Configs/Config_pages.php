<?php

    require('Modeles/Modele_Covoiturage.php');
    require('Modeles/Modele_Demande.php');
    require('Modeles/Modele_StatutAnnonce.php');
    require('Modeles/Modele_StatutDemande.php');
    require('Modeles/Modele_Troc.php');
    require('Modeles/Modele_User.php');
    require('Modeles/Modele_Ville.php');
    require('Modeles/Modele_Annonce.php');
    require('Modeles/Modele_Appartement.php');

    function estConnecte(){
        if(isset($_COOKIE["cookie_Connexion"])){
            $cookie=$_COOKIE["cookie_Connexion"];
            if(!empty(existCookie($cookie))){
                $user=existCookie($cookie);
               $nCodeCookie=substr(str_shuffle("0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVB"),0,30);
                setcookie("cookie_Connexion",$nCodeCookie,time()+(10000),"/",'' );
                updateCookie($user['email'],$nCodeCookie);
                return true;

            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }


?>