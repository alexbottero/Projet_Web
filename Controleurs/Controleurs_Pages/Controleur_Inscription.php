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
    $err="";
    echo $prenon." ".$nom." ".$mail." ".$mdp." ".$section." ".$annee." ".$mailParrain." ".$tel;
    if(empty($prenon)||empty($nom)||empty($mail)||empty($confmdp)||empty($tel)||empty($annee)||empty($section)){
        $err="Certains champs de recherche sont vides";
        Header('Location:/inscription/erreur/'.$err);
    }
    elseif(!(filter_var($mail,FILTER_VALIDATE_EMAIL))){
        $err="Mail invalide";
        Header('Location:/inscription/erreur/'.$err);
    }
    elseif($confmdp!=$mdp){
        $err="Les mots de passe ne correspondent pas ";
        Header('Location:/inscription/erreur/'.$err);
    }
    elseif(!(filter_var($mailParrain,FILTER_VALIDATE_EMAIL))&& !empty($mailParrain)) {
        $err="Mail parrain invalide";
        Header('Location:/inscription/erreur/'.$err);
    }
    elseif(!empty(existUser($mail))){
        $err="Email deja utilisé";
        Header('Location:/inscription/erreur/'.$err);
    }
    else{
        ajoutUser($mail,$nom,$prenon,$section,sha1(sha1($mdp)),$seed,$annee,1,$mailParrain,$tel);
        header('Location:/connexion');
    }
?>