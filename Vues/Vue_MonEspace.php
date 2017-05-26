<?php require("Vue_Entete.php"); ?>
<body>
<?php require("Vue_Menu.php"); ?>

    <?php
    $compteur=1;
    if(!empty($mesCovoits)){
        echo"<h2> Mes annonces de covoiturage:</h2>";
    }

    foreach ($mesCovoits as $covoit){
        if($compteur==1){
            echo '<div class="row">';
        }

        echo "<div class=\"col s4 m4 \">
          <div class=\"card  mesAnnonces\">
            <div class=\"card-content black-text\">
              <span class=\"card-title\">".$covoit['titreAnnonce']." le : ".$covoit['dateCovoiturage']."</span>
              <p>".$covoit['messageAnnonce']."</p>
              <p>Prix:".$covoit['PrixTrajet']." nombre de place : ".$covoit['nbPlaceDispo']." bagage: ".$covoit['bagageCovoiturage']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
            <p>Depart: Rue ".$covoit['rueDep']." ".$covoit['villeDep']." Arrivée: ".$covoit['villeArrive']."</p>
            </div>";
            echo"<div class=\"card-action\">
                   <a class=\"waves-effect waves-light btn\"href='Controleurs/Controleurs_Pages/Controleur_GestionMonEspace.php?idAnnonce=".$covoit['idAnnonce']."&value=3'>retirer annonce</a>
                </div>";
        echo "</div>
                    </div>";
         if( $compteur==3){
            echo '</div>';
            $compteur=0;
        }
        $compteur++;
    }
    if($compteur!=4){
        echo '</div>';
    }



    $compteur=1;
    if(!empty($mesApparts)){     echo"<h2> Mes annonces d'appartement:</h2>";}
    foreach ($mesApparts as $App){
        if($compteur==1){
            echo '<div class="row">';
        }
        echo" <div class=\"col s4 m4 \">
          <div class=\"card mesAnnonces\">
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
               <a class=\"waves-effect waves-light btn\"href='Controleurs/Controleurs_Pages/Controleur_GestionMonEspace.php?idAnnonce=".$App['idAnnonce']."&value=3'>retirer annonce</a>
            </div>";

        echo"</div>
        </div>";

        if( $compteur==3){
            echo '</div>';
            $compteur=0;
        }
        $compteur++;
    }
    if($compteur!=4){
        echo '</div>';
    }

    if(!empty($mesTrocs)){
        echo"<h2> Mes annonces de troc:</h2>";
    }

    $compteur=1;
    foreach ($mesTrocs as $Troc){
        if($compteur==1){
            echo '<div class="row">';
        }
        echo" <div class=\"col s4 m4\">
          <div class=\"card mesAnnonces\">
            <div class=\"card-image\" >
              <img src=\"alexandrebottero.com/".$Troc['photoTroc']." \"height=\"250px\" />
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
           <a class=\"waves-effect waves-light btn\"href='Controleurs/Controleurs_Pages/Controleur_GestionMonEspace.php?idAnnonce=".$Troc['idAnnonce']."&value=3'>retirer annonce</a>
            </div>";


        echo " </div>
                </div>";
        if( $compteur==3){
            echo '</div>';
            $compteur=0;
        }
        $compteur++;
    }
    if($compteur!=4){
        echo '</div>';
    }

    if(!empty($demandesRecues)) {
        echo "<h2> Mes demandes recues:</h2>";
    }
    $compteur=1;
    foreach ($demandesRecues as $demande){
        if($compteur==1){
            echo '<div class="row">';
        }
        echo "<div class=\"col s4 m4 \">
          <div class=\"card  mesAnnonces\">
            <div class=\"card-content black-text\">
              <span class=\"card-title\">".$demande['titreAnnonce']."</span>
              <p>".$demande['messageDemande']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
            <p>Statut: ".$demande['libelleStatutDemande']."</p>
            </div>";
            echo"<div class=\"card-action\">
                     <a class=\"btn-floating btn-large waves-effect waves-light darken-4\" href='Controleurs/Controleurs_Pages/Controleur_GestionMonEspace.php?idDemande=".$demande['idDemande']."&value=2'><i class=\"material-icons\" >thumb_up</i></a>
                     <a class=\"btn-floating btn-large waves-effect waves-light darken-4\"  href='Controleurs/Controleurs_Pages/Controleur_GestionMonEspace.php?idDemande=".$demande['idDemande']."&value=3'><i class=\"material-icons\">thumb_down</i></a>
                </div>";
        echo "</div>
                    </div>";
        if( $compteur==3){
            echo '</div>';
            $compteur=0;
        }
        $compteur++;

    }

    if($compteur!=4){
        echo '</div>';
    }

    if(!empty($demandesFaites)) {
        echo "<h2> Mes demandes faites:</h2>";
    }
    $compteur=1;
    foreach ($demandesFaites as $demande){
        if($compteur==1){
            echo '<div class="row">';
        }
        echo "<div class=\"col s4 m4 \">
          <div class=\"card  mesAnnonces\">
            <div class=\"card-content black-text\">
              <span class=\"card-title\">".$demande['titreAnnonce']."</span>
              <p>".$demande['messageDemande']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
            <p>Statut: ".$demande['libelleStatutDemande']."</p>
            </div>";
        echo "</div>
                    </div>";
        if( $compteur==3){
            echo '</div>';
            $compteur=0;
        }
        $compteur++;

    }

    if($compteur!=4){
        echo '</div>';
    }



    if($user['statut']==2){

        if(!empty($allCovs)){
        echo"<h2> Annonces de covoiturage à valider:</h2>";}
        $compteur=1;
        foreach ($allCovs as $covoit){
            if($compteur==1){
                echo '<div class="row">';
            }
            echo "<div class=\"col s4 m4 \">
          <div class=\"card  mesAnnonces\">
            <div class=\"card-content black-text\">
              <span class=\"card-title\">".$covoit['titreAnnonce']." le : ".$covoit['dateCovoiturage']."</span>
              <p>".$covoit['messageAnnonce']."</p>
              <p>Prix: ".$covoit['PrixTrajet']." nombre de place: ".$covoit['nbPlaceDispo']." bagage: ".$covoit['bagageCovoiturage']."</p>
            </div>
            <div class=\"card-content indigo darken-4 white-text\">
            <p>Depart: Rue ".$covoit['rueDep']." ".$covoit['villeDep']." Arrivée: ".$covoit['villeArrive']."</p>
            </div>";
            echo"<div class=\"card-action\">
                       <a class=\"btn-floating btn-large waves-effect waves-light \" href='Controleurs/Controleurs_Pages/Controleur_GestionMonEspace.php?idAnnonce=".$covoit['idAnnonce']."&value=2'><i class=\"material-icons\">thumb_up</i></a>
                     <a class=\"btn-floating btn-large waves-effect waves-light \" href='Controleurs/Controleurs_Pages/Controleur_GestionMonEspace.php?idAnnonce=".$covoit['idAnnonce']."&value=3'><i class=\"material-icons\">thumb_down</i></a>
                </div>";
            echo "</div>
                    </div>";
            if( $compteur==3){
                echo '</div>';
                $compteur=0;
            }
            $compteur++;

        }

        if($compteur!=4){
            echo '</div>';
        }
        if(!empty($allApps)){
        echo"<h2> Annonces d'appartement à valider:</h2>";}
        $compteur=1;
        foreach ($allApps as $App){
            if($compteur==1){
                echo '<div class="row">';
            }
            echo" <div class=\"col s4 m4 \">
          <div class=\"card mesAnnonces\">
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
                 <a class=\"btn-floating btn-large waves-effect waves-light \" href='Controleurs/Controleurs_Pages/Controleur_GestionMonEspace.php?idAnnonce=".$App['idAnnonce']."&value=2'><i class=\"material-icons\">thumb_up</i></a>
                     <a class=\"btn-floating btn-large  \" href='Controleurs/Controleurs_Pages/Controleur_GestionMonEspace.php?idAnnonce=".$App['idAnnonce']."&value=3'><i class=\"material-icons\">thumb_down</i></a>
            </div>";

            echo"</div>
        </div>";

            if( $compteur==3){
                echo '</div>';
                $compteur=0;
            }
            $compteur++;

        }

        if($compteur!=4){
            echo '</div>';
        }

        if(!empty($allTrocs)){
            echo"<h2> Annonces de troc à valider:</h2>";

        }
        $compteur=1;
        foreach ($allTrocs as $Troc){
            if($compteur==1){
                echo '<div class="row">';
            }

            echo" <div class=\"col s4 m4 \">
          <div class=\"card mesAnnonces\">
            <div class=\"card-image\">
              <img src=\"alexandrebottero.com/".$Troc['photoTroc']."\"height=\"150px\"/>
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
             <a class=\"btn-floating btn-large waves-effect waves-light \" href='Controleurs/Controleurs_Pages/Controleur_GestionMonEspace.php?idAnnonce=".$Troc['idAnnonce']."&value=2'><i class=\"material-icons\">thumb_up</i></a>
                     <a class=\"btn-floating btn-large waves-effect waves-light \" href='Controleurs/Controleurs_Pages/Controleur_GestionMonEspace.php?idAnnonce=".$Troc['idAnnonce']."&value=3'><i class=\"material-icons\">thumb_down</i></a>
            </div>";


            echo " </div>
                </div>";
            if( $compteur==3){
                echo '</div>';
                $compteur=0;
            }
            $compteur++;

        }

        if($compteur!=4){
            echo '</div>';
        }

    }
    ?>
<?php include ('Configs/Config_js.php'); ?>
</body>
</html>