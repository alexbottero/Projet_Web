<?php
function ajoutDemande($mess,$prix,$date,$email,$statut,$annonce)
{
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('INSERT INTO Demande(messageDemande,prixDemande,dateDemande,email,idStatutDemande,idAnnonce) 
VALUES(:mess,:prix,:date,:email,:statut,:annonce)'
    );
    $req->bindParam(':mess', $mess);
    $req->bindParam(':prix', $prix);
    $req->bindParam(':date', $date);
    $req->bindParam(':email', $email);
    $req->bindParam(':statut', $statut);
    $req->bindParam(':annonce', $annonce);
    $req->execute();
}
function modifStatutDemande($nouveauStatut,$IdAnnonce)
{
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('UPDATE Demande SET idStatutDemande=:nouveauStatut WHERE idAnnonce=:idAnnonce');
    $req->bindParam(':nouveauStatut',$nouveauStatut);
    $req->bindParam(':idAnnonce',$IdAnnonce);
    $req->execute();
}

?>