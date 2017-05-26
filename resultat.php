<?
require('Configs/Config_pages.php');
if(estConnecte()){
require("Controleurs/Controleurs_Pages/Controleur_Recherche.php");
require('Vues/Vue_Resultat.php');
}
else {
    header("Location:connexion");
}


?>