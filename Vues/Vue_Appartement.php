<?php require("Vue_Entete.php"); ?>
<body>
<?php require("Vue_Menu.php"); ?>

<div class="all">
<?php
foreach ($Apparts as $App){
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
    if($val){
        echo"<div class=\"card-action\">
                <a class=\"waves-effect waves-light btn indigo darken-4\" href='demande/annonce/".$App['idAnnonce']."'><i class=\"material-icons left\">input</i>Demander</a>
            </div>";}

    echo"</div>
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