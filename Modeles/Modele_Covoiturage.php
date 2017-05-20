<?php
function ajoutCovoit($prix,$date,$nbPlace,$bag,$rueDep,$villeDep,$villeArrive,$idAnnonce)
{
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('INSERT INTO Covoiturage(prixTrajet,dateCovoiturage,nbPlaceDispo,bagageCovoiturage,rueDep,villeDep,villeArrive,idAnnonce) 
VALUES(:prix,:date,:nbPlace,:bag,:rueDep,:villeDep,:villeArrive,:idAnnonce)');

    $req->bindParam(':prix', $prix);
    $req->bindParam(':date', $date);
    $req->bindParam(':nbPlace', $nbPlace);
    $req->bindParam(':bag', $bag);
    $req->bindParam(':villeDep', $villeDep);
    $req->bindParam(':rueDep', $rueDep);
    $req->bindParam(':villeArrive',$villeArrive);
    $req->bindParam(':idAnnonce',$idAnnonce);
    $req->execute();
}
function dernierCovoit(){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM Covoiturage WHERE idCovoiturage=MAX(idCovoiturage)');
    $req->execute();
    $data=$req->fetch();
    return $data;
}
?>