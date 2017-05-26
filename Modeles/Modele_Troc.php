<?php
function ajoutTroc($prix,$num,$photo,$rue,$ville,$idA)
{
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('INSERT INTO Troc(prixTroc,numRecup,photoTroc,rueRecup,villeRecup,idAnnonce) 
VALUES(:prix,:num,:photo,:rue,:ville,:id)'
    );
    $req->bindParam(':prix', $prix);
    $req->bindParam(':num', $num);
    $req->bindParam(':photo', $photo);
    $req->bindParam(':rue', $rue);
    $req->bindParam(':ville', $ville);
    $req->bindParam(':id', $idA);

    $req->execute();
}

function mesTrocs($mail){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM  Troc NATURAL JOIN Annonce WHERE email=:mail');
    $req->bindParam(':mail', $mail);
    $req->execute();

    $data=$req->fetchAll();
    return $data;
}


function allTroc(){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM Troc NATURAL JOIN Annonce WHERE idStatutAnnonce=1 ORDER BY dateAjoutAnnonce');
    $req->execute();
    $data=$req->fetchAll();
    return $data;
}
function allTrocValide(){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM Troc NATURAL JOIN Annonce WHERE idStatutAnnonce=2 ORDER BY dateAjoutAnnonce');
    $req->execute();
    $data=$req->fetchAll();
    return $data;
}

function dernierTroc(){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM Troc NATURAL JOIN Annonce WHERE idTroc=(SELECT MAX(idTroc) FROM Troc NATURAL JOIN Annonce WHERE idStatutAnnonce=2)');
    $req->execute();
    $data=$req->fetch();
    return $data;
}

function rechercheTroc($prixMax,$ville){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM  Troc NATURAL JOIN Annonce
    WHERE idStatutAnnonce=2 AND prixTroc<:prixMax AND LOWER (villeRecup)=LOWER (:ville)');
    $req->bindParam(':prixMax', $prixMax);
    $req->bindParam(':ville',$ville);
    $req->execute();
    $data=$req->fetchAll();
    return $data;}

?>