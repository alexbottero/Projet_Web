<?php

    require('Modeles/Modele_Covoiturage.php');
    require('Modeles/Modele_Demande.php');
    require('Modeles/Modele_StatutAnnonce.php');
    require('Modeles/Modele_StatutDemande.php');
    require('Modeles/Modele_Troc.php');
    require('Modeles/Modele_User.php');
    require('Modeles/Modele_Annonce.php');
    require('Modeles/Modele_Appartement.php');

    function estConnecte(){
        if(isset($_COOKIE["cookie_Connexion"])){
            $cookie=$_COOKIE["cookie_Connexion"];
            if(!empty(existCookie($cookie))){
                $user=existCookie($cookie);
                setcookie("cookie_Connexion",$user['seed'],time()+(10000),"/",'' );
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