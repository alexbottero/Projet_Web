<?php
require("../../Modeles/Modele_Annonce.php");
require("../../Modeles/Modele_Demande.php");

var_dump($_GET);
if(isset($_GET['idAnnonce'])){
    if($_GET['value']=2){
    echo "jsuis la";
        modifStatutAnnonce($_GET['idAnnonce'],'2');
    }
    else{
        modifStatutAnnonce($_GET['idAnnonce'],'3');
    }
}
if(isset($_GET['idDemande'])) {
    if($_GET['value']=2){
        modifStatutDemande('2',$id=$_GET['idDemande']);
    }
    else{
        modifStatutAnnonce('3',$id=$_GET['idAnnonce']);
    }
}
?>