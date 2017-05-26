<?php require("Vue_Entete.php"); ?>
<body>
<?php require("Vue_Menu.php"); ?>
<div class="all">
<?php
    foreach ($Covoits as $covoit){
        echo "<div class=\"col s12 m6 divAn\">
          <div class=\"card  \">
            <div class=\"card-content black-text\">
              <span class=\"card-title\">".$covoit['titreAnnonce']." le : ".$covoit['dateCovoiturage']."</span>
              <p>".$covoit['messageAnnonce']."</p>
              <p>Prix:".$covoit['PrixTrajet']." nombre de place : ".$covoit['nbPlaceDispo']." bagage: ".$covoit['bagageCovoiturage']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
            <p>Depart: Rue ".$covoit['rueDep']." ".$covoit['villeDep']." Arrivée: ".$covoit['villeArrive']."</p>
            </div>";
        if($val){
            echo"<div class=\"card-action\">
                     <a class=\"waves-effect waves-light btn indigo darken-4\" href='demande/annonce/".$covoit['idAnnonce']."'><i class=\"material-icons left\">input</i>Demander</a>
                </div>";
            }
        echo "</div>
                    </div>";
    }
?>
</div>
<div>
    <?php require("Vue_PiedDePage.php"); ?>
</div>
<?php include ('Configs/Config_js.php'); ?>
</body>
</html>