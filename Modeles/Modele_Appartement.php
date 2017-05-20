<?php
function ajoutAppart($date,$rue,$nbPiece,$surf,$photo,$loyer,$num,$ville,$idAnnonce)
{
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('INSERT INTO Appartement(dateCessionAppartement,rueAppartement,nbPiece,surfaceAppartement,photoAppartement,loyer,numAppartement,villeAppartement,idAnnonce) 
VALUES(:dateCess,:rue,:nbPiece,:surf,:photo,:loyer,:num,:ville,:idAnnonce)'
    );
    $req->bindParam(':dateCess', $date);
    $req->bindParam(':rue', $rue);
    $req->bindParam(':nbPiece', $nbPiece);
    $req->bindParam(':surf', $surf);
    $req->bindParam(':photo', $photo);
    $req->bindParam(':loyer', $loyer);
    $req->bindParam(':num', $num);
    $req->bindParam(':ville', $ville);
    $req->bindParam(':idAnnonce',$idAnnonce);
    $req->execute();
}
function dernierAppart(){
    require_once("Modele_ConnexionBDD.php");
    $connexion = connexionBD();
    $req = $connexion->prepare('SELECT * FROM Apppartement WHERE idAppartement=MAX(idAppartement)');
    $req->execute();
    $data=$req->fetch();
    return $data;
}
?>