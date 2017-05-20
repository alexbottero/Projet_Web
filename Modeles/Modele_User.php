<?php
    function existUser($mail){
        require_once('Modele_ConnexionBDD.php');
        $connexion=connexionBD();
        $req=$connexion->prepare('SELECT * FROM User Where email=:mail');
        $req->bindParam(':mail',$mail);
        $req->execute();
        $data=$req->fetch();
        return $data;
    }
    function existCookie($cookie){
        require_once('Modele_ConnexionBDD.php');
        $connexion=connexionBD();
        $req=$connexion->prepare('SELECT * FROM User WHERE seed=:cookie');
        $req->bindParam(':cookie',$cookie);
        $req->execute();
        $data=$req->fetch();
        return $data;

    }
    function updateCookie($mail,$cookie){
        require_once('Modele_ConnexionBDD.php');
        $connexion=connexionBD();
        $req=$connexion->prepare('UPDATE User SET seed=:cookie WHERE email=:mail');
        $req->bindParam(':mail',$mail);
        $req->bindParam(':cookie',$cookie);
        $req->execute();
    }
    function ajoutUser($mail,$nom,$prenom,$section,$mdp,$seed,$annee,$statut,$parrain,$tel){
        require_once("Modele_ConnexionBDD.php");
        $connexion = connexionBD();
        $req = $connexion->prepare('INSERT INTO User(email,nom,prenom,section,password,seed,annee,statut,parrain,phone)
        VALUES (:mail,:nom,:prenom,:section,:mdp,:seed,:annee,:statut,:parrain,:tel)'
        );

        $req->bindParam(':mail',$mail);
        $req->bindParam(':nom',$nom);
        $req->bindParam(':prenom',$prenom);
        $req->bindParam(':section',$section);
        $req->bindParam(':mdp',$mdp);
        $req->bindParam(':seed',$seed);
        $req->bindParam(':annee',$annee);
        $req->bindParam(':statut',$statut);
        $req->bindParam(':parrain',$parrain);
        $req->bindParam(':tel',$tel);

        $req->execute();

    }

?>