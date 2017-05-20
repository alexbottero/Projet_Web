<?php

    require("../../Modeles/Modele_User.php");
    $prenon=$_POST['Prenom'];
    $nom=$_POST['Nom'];
    $mail=$_POST['Mail'];
    $mdp=$_POST['Mdp'];
    $confmdp=$_POST['Confmdp'];
    $section=$_POST['Section'];
    $annee=$_POST['Annee'];
    $mailParrain=$_POST['MailParrain'];
    $tel=$_POST['Tel'];
    $seed=substr(str_shuffle("0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVB"),0,30);

    echo $prenon." ".$nom." ".$mail." ".$mdp." ".$section." ".$annee." ".$mailParrain." ".$tel;
    if(empty($prenon)||empty($nom)||empty($mail)||empty($confmdp)||empty($tel)||empty($annee)||empty($section)){
        echo "pas tout les trucs remplis";
    }
    elseif(!(filter_var($mail,FILTER_VALIDATE_EMAIL))){
        echo "mail invalide";
    }
    elseif($confmdp!=$mdp){
        echo "les mdp ne correspondent pas ";
    }
    elseif(!(filter_var($mailParrain,FILTER_VALIDATE_EMAIL))&& !empty($mailParrain)) {
        echo "mail Parrain invalide";
    }
    elseif(!empty(existUser($mail))){
        echo "t'existe dejac";
    }
    else{
        ajoutUser($mail,$nom,$prenon,$section,sha1(sha1($mdp)),$seed,$annee,1,$mailParrain,$tel);
    }
?>