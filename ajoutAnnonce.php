<?php
    require('Configs/Config_pages.php');
    if(estConnecte()){
        require_once('Vues/Vue_AjoutAnnonce.php');
    }
    else {
        header("Location:connexion");
    }

?>