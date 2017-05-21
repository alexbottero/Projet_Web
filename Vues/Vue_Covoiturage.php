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
</div>
<?php
    foreach ($Covoits as $covoit){
        echo "<div class=\"row\">
        <div class=\"col s12 m6\">
          <div class=\"card blue-grey darken-1\">
            <div class=\"card-content white-text\">
              <span class=\"card-title\">".$covoit['titreAnnonce']."</span>
              <p>".$covoit['titreAnnonce']."</p>
            </div>
            <div class=\"card-action\">
              <a href=\"#\">This is a link</a>
              <a href=\"#\">This is a link</a>
            </div>
          </div>
        </div>
      </div>";
    }
?>
<div>
    <?php require("Vue_PiedDePage.php"); ?>
</div>
<?php include ('Configs/Config_js.php'); ?>
</body>
</html>