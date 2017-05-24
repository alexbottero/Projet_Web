<!doctype html>
<!doctype html>
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
    <?php
    foreach ($mesCovoits as $covoit){
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
            echo"<div class=\"card-action\">
                     <a class=\"waves-effect waves-light btn indigo darken-4\" href='demande.php?idAnnonce=".$covoit['idAnnonce']."'><i class=\"material-icons left\">input</i>Demander</a>
                </div>";
        echo "</div>
                    </div>";
    }


    foreach ($mesApparts as $App){
        echo" <div class=\"col s6 m6 divAn\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img src=\"alexandrebottero.com/".$App['photoAppartement']."\"/>
              <span class=\"card-title\">".$App['titreAnnonce']." libre le ".$App['dateCessionAppartement']."</span>
            </div>
            <div class=\"card-content\">
              <p>".$App['messageAnnonce']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
              <p>Adresse: ".$App['numAppartement']." ".$App['rueAppartement']." ".$App['villeAppartement'].".</p>
              <p>Loyer: ".$App['loyer']." Surface appartement: ".$App['surfaceAppartement']." nombre de piece: ".$App['nbPiece'].".</p>
            </div>";

            echo"<div class=\"card-action\">
                <a class=\"waves-effect waves-light btn indigo darken-4\" href=''><i class=\"material-icons left\">input</i>Demander</a>
            </div>";

        echo"</div>
        </div>";

    }

    foreach ($mesTrocs as $Troc){

        echo" <div class=\"col s6 m6 divAn\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img src=\"alexandrebottero.com/".$Troc['photoTroc']."\"/>
              <span class=\"card-title\">".$Troc['titreAnnonce']."</span>
            </div>
            <div class=\"card-content\">
              <p>".$Troc['messageAnnonce']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
              <p>Adresse: ".$Troc['numRecup']." ".$Troc['rueRecup']." ".$Troc['villeRecup'].".</p>
              <p>prix: ".$Troc['prixTroc'].".</p>
            </div>";
            echo"<div class=\"card-action\">
            <a class=\"waves-effect waves-light btn indigo darken-4\" href='?idAnnonce=".$Troc['idAnnonce']."'><i class=\"material-icons left\">input</i>Demander</a>
            </div>";


        echo " </div>
                </div>";
    }
    foreach ($demandesRecues as $demande){
        echo "<div class=\"col s12 m6 divAn\">
          <div class=\"card  \">
            <div class=\"card-content black-text\">
              <span class=\"card-title\">".$demande['titreAnnonce']."</span>
              <p>".$demande['messageDemande']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
            <p>Prix :".$demande['prixDemande']."</p>
            </div>";
            echo"<div class=\"card-action\">
                     <a class=\"waves-effect waves-light btn indigo darken-4\" href='Controleurs/Controleurs_Pages/Controleur_GestionMonEspace.php?idDemande=".$demande['idDemande']."&value=2'><i class=\"material-icons left\">input</i>Demander</a>
                </div>";
        echo "</div>
                    </div>";
    }
    foreach ($demandesFaites as $demande){
        echo "<div class=\"col s12 m6 divAn\">
          <div class=\"card  \">
            <div class=\"card-content black-text\">
              <span class=\"card-title\">".$demande['titreAnnonce']."</span>
              <p>".$demande['messageDemande']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
            <p>Prix :".$demande['prixDemande']."</p>
            </div>";
            echo"<div class=\"card-action\">
                     <a class=\"waves-effect waves-light btn indigo darken-4\" href='Controleurs/Controleurs_Pages/Controleur_GestionMonEspace.php?idDemande=".$demande['idDemande']."&value=2'><i class=\"material-icons left\">input</i>Demander</a>
                </div>";
        echo "</div>
                    </div>";
    }


    if($user['statut']==2){

        foreach ($allCovs as $covoit){
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
            echo"<div class=\"card-action\">
                     <a class=\"waves-effect waves-light btn indigo darken-4\" href='Controleurs/Controleurs_Pages/Controleur_GestionMonEspace.php?idAnnonce=".$covoit['idAnnonce']."&value=2'><i class=\"material-icons left\">input</i>Demander</a>
                </div>";
            echo "</div>
                    </div>";
        }


        foreach ($allApps as $App){
            echo" <div class=\"col s6 m6 divAn\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img src=\"alexandrebottero.com/".$App['photoAppartement']."\"/>
              <span class=\"card-title\">".$App['titreAnnonce']." libre le ".$App['dateCessionAppartement']."</span>
            </div>
            <div class=\"card-content\">
              <p>".$App['messageAnnonce']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
              <p>Adresse: ".$App['numAppartement']." ".$App['rueAppartement']." ".$App['villeAppartement'].".</p>
              <p>Loyer: ".$App['loyer']." Surface appartement: ".$App['surfaceAppartement']." nombre de piece: ".$App['nbPiece'].".</p>
            </div>";

            echo"<div class=\"card-action\">
                <a class=\"waves-effect waves-light btn indigo darken-4\" href='demande.php?idAnnonce=".$App['idAnnonce']."'><i class=\"material-icons left\">input</i>Demander</a>
            </div>";

            echo"</div>
        </div>";

        }

        foreach ($allTrocs as $Troc){

            echo" <div class=\"col s6 m6 divAn\">
          <div class=\"card\">
            <div class=\"card-image\">
              <img src=\"alexandrebottero.com/".$Troc['photoTroc']."\"/>
              <span class=\"card-title\">".$Troc['titreAnnonce']."</span>
            </div>
            <div class=\"card-content\">
              <p>".$Troc['messageAnnonce']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
              <p>Adresse: ".$Troc['numRecup']." ".$Troc['rueRecup']." ".$Troc['villeRecup'].".</p>
              <p>prix: ".$Troc['prixTroc'].".</p>
            </div>";
            echo"<div class=\"card-action\">
            <a class=\"waves-effect waves-light btn indigo darken-4\" href='demande.php?idAnnonce=".$Troc['idAnnonce']."'><i class=\"material-icons left\">input</i>Demander</a>
            </div>";


            echo " </div>
                </div>";
        }

    }
    ?>
<div>
    <?php require("Vue_PiedDePage.php"); ?>
</div>
<?php include ('Configs/Config_js.php'); ?>
</body>
</html>