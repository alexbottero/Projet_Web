<?php
require("../../Modeles/Modele_Annonce.php");
require("../../Modeles/Modele_Demande.php");

if(isset($_GET['idAnnonce'])){
    if($_GET['value']==2){
        modifStatutAnnonce($_GET['idAnnonce'],'2');
    }
    else{
        modifStatutAnnonce($_GET['idAnnonce'],'3');
        supAnnonceInvalide();
    }
}
if(isset($_GET['idDemande'])) {
    if($_GET['value']==2){
        modifStatutDemande('2',$_GET['idDemande']);
    }
    else{
        modifStatutDemande('3',$_GET['idDemande']);
    }
}
header('Location:../../monEspace');
?>