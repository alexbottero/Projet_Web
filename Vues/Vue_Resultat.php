
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet Web</title>
    <?php include ('Configs/Config_css.php'); ?>


</head>
<body>
<?php require("Vue_Menu.php"); ?>

<div class="all">
<?php
$type =$_POST['TypeAnnonce'];
if($type=="Covoit")
{
    foreach ($resultats as $resultat){
        echo "<div class=\"col s12 m6 divAn\">
          <div class=\"card  \">
            <div class=\"card-content black-text\">
              <span class=\"card-title\">".$resultat['titreAnnonce']." le : ".$resultat['dateCovoiturage']."</span>
              <p>".$resultat['messageAnnonce']."</p>
              <p>Prix:".$resultat['PrixTrajet']." nombre de place : ".$resultat['nbPlaceDispo']." bagage: ".$cresultat['bagageCovoiturage']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
            <p>Depart: Rue ".$resultat['rueDep']." ".$resultat['villeDep']." Arrivée: ".$resultat['villeArrive']."</p>
            </div>";
        if($val){
            echo"<div class=\"card-action\">
                     <a class=\"waves-effect waves-light btn indigo darken-4\" href='demande.php?idAnnonce=".$resultat['idAnnonce']."'><i class=\"material-icons left\">input</i>Demander</a>
                </div>";
        }
        echo "</div>
                    </div>";
    }
}
elseif($type=="Appartement"){
    foreach ($resultats as $resultat){
        echo" <div class=\"col s6 m6 divAn\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img src=\"alexandrebottero.com/".$resultat['photoAppartement']."\"/>
              <span class=\"card-title\">".$resultat['titreAnnonce']." libre le ".$resultat['dateCessionAppartement']."</span>
            </div>
            <div class=\"card-content\">
              <p>".$App['messageAnnonce']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
              <p>Adresse: ".$resultat['numAppartement']." ".$resultat['rueAppartement']." ".$resultat['villeAppartement'].".</p>
              <p>Loyer: ".$resultat['loyer']." Surface appartement: ".$resultat['surfaceAppartement']." nombre de piece: ".$resultat['nbPiece'].".</p>
            </div>";
        if($val){
            echo"<div class=\"card-action\">
                <a class=\"waves-effect waves-light btn indigo darken-4\" href='demande.php?idAnnonce=".$resultat['idAnnonce']."'><i class=\"material-icons left\">input</i>Demander</a>
            </div>";}

        echo"</div>
        </div>";
    }
}
elseif($type=="Troc"){
    foreach ($resultats as $resultat){

        echo" <div class=\"col s6 m6 divAn\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img src=\"alexandrebottero.com/".$resultat['photoTroc']."\"/>
              <span class=\"card-title\">".$resultat['titreAnnonce']."</span>
            </div>
            <div class=\"card-content\">
              <p>".$resultat['messageAnnonce']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
              <p>Adresse: ".$resultat['numRecup']." ".$resultat['rueRecup']." ".$resultat['villeRecup'].".</p>
              <p>prix: ".$resultat['prixTroc'].".</p>
            </div>";
        if($val){
            echo"<div class=\"card-action\">
            <a class=\"waves-effect waves-light btn indigo darken-4\" href='demande.php?idAnnonce=".$resultat['idAnnonce']."'><i class=\"material-icons left\">input</i>Demander</a>
            </div>";}


        echo " </div>
                </div>";

    }
}

?>
</div>
<div>
    <?php require("Vue_PiedDePage.php"); ?>
</div>
<?php include ('Configs/Config_js.php'); ?>
</body>
</html>
