
<?php require("Vue_Entete.php"); ?>
<body>
<?php require("Vue_Menu.php"); ?>

<div class="all">
<?php
$type =$_POST['TypeAnnonce'];

if($type=="Covoit")
{
    if(!empty($resultats)){
    foreach ($resultats as $resultat){
        echo "<div class=\"col s12 m6 divAn\">
          <div class=\"card  \">
            <div class=\"card-content black-text\">
              <span class=\"card-title\">".$resultat['titreAnnonce']." le : ".$resultat['dateCovoiturage']."</span>
              <p>".$resultat['messageAnnonce']."</p>
              <p>Prix:".$resultat['PrixTrajet']." nombre de place : ".$resultat['nbPlaceDispo']." bagage: ".$resultat['bagageCovoiturage']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
            <p>Depart: Rue ".$resultat['rueDep']." ".$resultat['villeDep']." Arrivée: ".$resultat['villeArrive']."</p>
            </div>";
        if($val){
            echo"<div class=\"card-action\">
                     <a class=\"waves-effect waves-light btn indigo darken-4\" href='demande/annonce/".$resultat['idAnnonce']."'><i class=\"material-icons left\">input</i>Demander</a>
                </div>";
        }
        echo "</div>
                    </div>";
    }
    }
    else{echo "<h2> Aucune annonce ne correspond</h2>";}
}
elseif($type=="Appartement"){
if(!empty($resultats)) {
    foreach ($resultats as $resultat) {
        echo " <div class=\"col s6 m6 divAn\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img src=\"alexandrebottero.com/" . $resultat['photoAppartement'] . "\"/>
              <span class=\"card-title\">" . $resultat['titreAnnonce'] . " libre le " . $resultat['dateCessionAppartement'] . "</span>
            </div>
            <div class=\"card-content\">
              <p>" . $App['messageAnnonce'] . "</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
              <p>Adresse: " . $resultat['numAppartement'] . " " . $resultat['rueAppartement'] . " " . $resultat['villeAppartement'] . ".</p>
              <p>Loyer: " . $resultat['loyer'] . " Surface appartement: " . $resultat['surfaceAppartement'] . " nombre de piece: " . $resultat['nbPiece'] . ".</p>
            </div>";
        if ($val) {
            echo "<div class=\"card-action\">
                <a class=\"waves-effect waves-light btn indigo darken-4\" href='demande/annonce/" . $resultat['idAnnonce'] . "'><i class=\"material-icons left\">input</i>Demander</a>
            </div>";
        }

        echo "</div>
        </div>";
    }
}
    else{echo "<h2> Aucune annonce ne correspond</h2>";}
}
elseif($type=="Troc") {
    if (!empty($resultats)) {
        foreach ($resultats as $resultat) {
            echo " <div class=\"col s6 m6 divAn\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img src=\"alexandrebottero.com/" . $resultat['photoTroc'] . "\"/>
              <span class=\"card-title\">" . $resultat['titreAnnonce'] . "</span>
            </div>
            <div class=\"card-content\">
              <p>" . $resultat['messageAnnonce'] . "</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
              <p>Adresse: " . $resultat['numRecup'] . " " . $resultat['rueRecup'] . " " . $resultat['villeRecup'] . ".</p>
              <p>prix: " . $resultat['prixTroc'] . ".</p>
            </div>";
            if ($val) {
                echo "<div class=\"card-action\">
            <a class=\"waves-effect waves-light btn indigo darken-4\" href='demande/annonce/" . $resultat['idAnnonce'] . "'><i class=\"material-icons left\">input</i>Demander</a>
            </div>";
            }


            echo " </div>
                </div>";

        }
    }
    else {
        echo "<h2> Aucune annonce ne correspond</h2>";
    }
}
?>
</div>

<?php include ('Configs/Config_js.php'); ?>
</body>
</html>
