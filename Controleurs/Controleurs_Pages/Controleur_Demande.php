<?php
require("../../Modeles/Modele_Annonce.php");
require("../../Modeles/Modele_Demande.php");
require("../../Modeles/Modele_User.php");

$id=$_POST['idAnnonce'];
$mess=$_POST['messageDemande'];
$prix=$_POST['prixProp'];
$date =date("Y-m-d H:i:s");
$cookie=$_COOKIE["cookie_Connexion"];
$user=existCookie($cookie);

if( !empty($mess)){
    $dateTemp=date_create($date);
    $date = date_format($dateTemp,'Y-m-d H:i:s');
    ajoutDemande($mess,$prix,$date,$user['email'],'1',$id);

}
else{
    echo "demande invalide";
}
?>