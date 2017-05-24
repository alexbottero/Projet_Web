<?php
    function ajoutAnnonce($message,$titre,$date,$statut,$user){
        require_once("Modele_ConnexionBDD.php");
        $connexion=connexionBD();
        $req=$connexion->prepare('INSERT INTO Annonce(messageAnnonce,titreAnnonce,dateAjoutAnnonce,idStatutAnnonce,email) VALUES(:message,:titre,:date,:statut,:user);'
        );
        $req->bindParam(':message',$message);
        $req->bindParam(':titre',$titre);
        $req->bindParam(':date',$date);
        $req->bindParam(':user',$user);
        $req->bindParam(':statut',$statut);
        $req->execute();
        $data=$connexion->lastInsertId();
        return $data;
    }
    function recupAnnonce($id){
        require_once("Modele_ConnexionBDD.php");
        $connexion=connexionBD();
        $req=$connexion->prepare('SELECT * FROM Annonce WHERE idAnnonce=:id'
        );
        $req->bindParam(':id',$id);
        $req->execute();
        $data=$req->fetch();
        return $data;
    }

    function modifStatutAnnonce($id,$statut){
        require_once("Modele_ConnexionBDD.php");
        $connexion=connexionBD();
        $req=$connexion->prepare('UPDATE Annonce SET idStatutAnnonce=:statut WHERE idAnnonce=:id'
        );
        $req->bindParam(':id',$id);
        $req->bindParam(':statut',$statut);
        $req->execute();
    }
?>