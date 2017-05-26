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
function modifStatutDemande($nouveauStatut,$IdDemande)
{
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('UPDATE Demande SET idStatutDemande=:nouveauStatut WHERE idDemande=:idDemande');
    $req->bindParam(':nouveauStatut',$nouveauStatut);
    $req->bindParam(':idDemande',$IdDemande);
    $req->execute();
}
function demandesFaites($mail){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM  Demande NATURAL JOIN User NATURAL JOIN StatutDemande INNER JOIN Annonce ON Demande.idAnnonce=Annonce.idAnnonce  WHERE User.email=:mail');
    $req->bindParam(':mail', $mail);
    $req->execute();

    $data=$req->fetchAll();
    return $data;
}

function demandesRecues($mail){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM  Demande NATURAL JOIN User NATURAL JOIN StatutDemande INNER JOIN Annonce ON Demande.idAnnonce=Annonce.idAnnonce  WHERE Annonce.email=:mail');
    $req->bindParam(':mail', $mail);
    $req->execute();

    $data=$req->fetchAll();
    return $data;
}

?>