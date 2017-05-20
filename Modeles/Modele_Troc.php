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

function recupTroc($idAnnonce){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM Troc Where idAnnonce=:idAnnonce');
    $req->bindParam(':idAnnonce',$idAnnonce);
    $req->execute();
    $data=$req->fetch();
    return $data;

}
function dernierCovoit(){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM Troc WHERE idTroc=MAX(idTroc)');
    $req->execute();
    $data=$req->fetch();
    return $data;
}
?>