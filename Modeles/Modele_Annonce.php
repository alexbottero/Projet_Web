<?php
// ajoute une annonce
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
    //recupere une annonce a partir de son id
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
    // modifie le statut de l'annonce passe en parametre par la valeur passer en parametre
    function modifStatutAnnonce($id,$statut){
        require_once("Modele_ConnexionBDD.php");
        $connexion=connexionBD();
        $req=$connexion->prepare('UPDATE Annonce SET idStatutAnnonce=:statut WHERE idAnnonce=:id'
        );
        $req->bindParam(':id',$id);
        $req->bindParam(':statut',$statut);
        $req->execute();
    }
// supprimer les annonces invalide (et par consequent les demandes /covoit ou appart ou troc  grace a propiriete on casade dans la bd)
    function supAnnonceInvalide(){
        require_once("Modele_ConnexionBDD.php");
        $connexion=connexionBD();
        $req=$connexion->prepare('DELETE FROM Annonce WHERE idStatutAnnonce=3'
        );
        $req->execute();
    }
?>