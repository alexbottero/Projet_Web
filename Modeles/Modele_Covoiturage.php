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
    $req = $connexion->prepare('SELECT * FROM Covoiturage NATURAL JOIN Annonce WHERE idCovoiturage=(SELECT MAX(idCovoiturage) FROM Covoiturage)');
    $req->execute();
    $data=$req->fetch();
    return $data;
}

function allCovoit(){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM  Covoiturage NATURAL JOIN Annonce ORDER BY dateAjoutAnnonce DESC ');
    $req->execute();
    $data=$req->fetchAll();
    return $data;
}
function allCovoitValide(){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM  Covoiturage NATURAL JOIN Annonce WHERE idStatutAnnonce=2 ORDER BY dateAjoutAnnonce DESC ');
    $req->execute();
    $data=$req->fetchAll();
    return $data;
}

function mesCovoits($mail){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM  Covoiturage NATURAL JOIN Annonce WHERE email=:mail');
    $req->bindParam(':mail', $mail);
    $req->execute();

    $data=$req->fetchAll();
    return $data;
}

function rechercheCov($prixMax,$dep,$arriv,$date){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM  Covoiturage NATURAL JOIN Annonce
    WHERE prixTrajet<:prixMax AND LOWER (villeDep)=LOWER (:dep) AND LOWER (villeArrive)=LOWER (:arriv) AND dateCovoiturage=:date');
    $req->bindParam(':prixMax', $prixMax);
    $req->bindParam(':dep',$dep);
    $req->bindParam(':arriv',$arriv);
    $req->bindParam(':date',$date);
    $req->execute();
    $data=$req->fetchAll();
    return $data;
}
?>