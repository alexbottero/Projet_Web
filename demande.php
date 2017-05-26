<?php
require("Configs/Config_pages.php");
if(estConnecte()){
require("Vues/Vue_Demande.php");
}
else {
    header("Location:connexion");
}

?>