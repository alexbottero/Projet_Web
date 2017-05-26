<?php
require('Configs/Config_pages.php');
if(estConnecte()){
require("Vues/Vue_Recherche.php");
}
else {
    header("Location:connexion");
}

?>