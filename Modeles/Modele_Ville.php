<?php
    function recupVille(){
        require_once('Modele_ConnexionBDD.php');
        $connexion=connexionBD();
        $req=$connexion->prepare('SELECT * FROM Ville');
        $req->execute();
        $data=$req->fetchAll();
        return $data;
    }
?>