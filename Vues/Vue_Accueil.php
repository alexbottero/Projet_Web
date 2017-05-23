
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P-Share</title>
    <?php include ('Configs/Config_css.php'); ?>


</head>
<body>

<div>
   <?php require("Vue_Menu.php"); ?>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="Medias/comedie.jpg"></div>
</div>
<div class="dernAnnonces">

    <?php
    echo "<div class=\"row\">";

    echo" <div class=\"col s6 m6\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img src=\"alexandrebottero.com/".$dernierTroc['photoTroc']."\"/>
              <span class=\"card-title\">".$dernierTroc['titreAnnonce']."</span>
            </div>
            <div class=\"card-content\">
              <p>".$dernierTroc['messageAnnonce']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
              <p>Adresse: ".$dernierTroc['numRecup']." ".$dernierTroc['rueRecup']." ".$dernierTroc['villeRecup'].".</p>
              <p>prix: ".$dernierTroc['prixTroc'].".</p>
            </div>";
        if($val){
            echo"<div class=\"card-action\">
            <a class=\"waves-effect waves-light btn indigo darken-4\" href='demande.php?idAnnonce=".$dernierTroc['idAnnonce']."'><i class=\"material-icons left\">input</i>Demander</a>
            </div>";}


       echo " </div>
                </div>";

    echo "<div class=\"row\">";
    echo" <div class=\"col s6 m6\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img src=\"alexandrebottero.com/".$dernierApp['photoAppartement']."\"/>
              <span class=\"card-title\">".$dernierApp['titreAnnonce']." libre le ".$dernierApp['dateCessionAppartement']."</span>
            </div>
            <div class=\"card-content\">
              <p>".$dernierApp['messageAnnonce']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
              <p>Adresse: ".$dernierApp['numAppartement']." ".$dernierApp['rueAppartement']." ".$dernierApp['villeAppartement'].".</p>
              <p>Loyer: ".$dernierApp['loyer']." Surface appartement: ".$dernierApp['surfaceAppartement']." nombre de piece: ".$dernierApp['nbPiece'].".</p>
            </div>";
            if($val){
                echo"<div class=\"card-action\">
                <a class=\"waves-effect waves-light btn indigo darken-4\" href='demande.php?idAnnonce=".$dernierApp['idAnnonce']."'><i class=\"material-icons left\">input</i>Demander</a>
            </div>";}

          echo"</div>
        </div>
        </div>";

    echo " <div class=\"col s12 m6\">
          <div class=\"card  \">
            <div class=\"card-content black-text\">
              <span class=\"card-title\">".$dernierCov['titreAnnonce']." le : ".$dernierCov['dateCovoiturage']."</span>
              <p>".$dernierCov['messageAnnonce']."</p>
              <p>Prix:".$dernierCov['PrixTrajet']." nombre de place : ".$dernierCov['nbPlaceDispo']." bagage: ".$dernierCov['bagageCovoiturage']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
            <p>Depart: Rue ".$dernierCov['rueDep']." ".$dernierCov['villeDep']." Arrivée: ".$dernierCov['villeArrive']."</p>
            </div>";
                if($val){
                     echo"<div class=\"card-action\">
                     <a class=\"waves-effect waves-light btn indigo darken-4\" href='demande.php?idAnnonce=".$dernierCov['idAnnonce']."'><i class=\"material-icons left\">input</i>Demander</a>
                </div>";}

    echo "</div>
        </div>";
    ?>
</div>

<?php include ('Configs/Config_js.php'); ?>
</body>
</html>

<script > $(document).ready(function(){
        $('.parallax').parallax();
    });</script>



