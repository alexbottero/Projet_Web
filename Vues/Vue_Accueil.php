
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

<div>
   <?php require("Vue_Menu.php"); ?>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="Medias/covoit.jpg"></div>
</div>
<div class="dernAnnonces">
<h2>Derniers covoiturages disponibles<h2>

</div>
<div class="parallax-container">
    <div class="parallax"><img src="Medias/appartement.jpg"></div>
</div>
<div class="dernAnnonces">
<h2> Derniers apparements libérés</h2>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="Medias/troc.jpg"></div>
</div>
<div class="dernAnnonces">
    <h2>Derniers trocs disponibles </h2>

</div>
<div>
    <?php require("Vue_PiedDePage.php"); ?>
</div>
<?php include ('Configs/Config_js.php'); ?>
</body>
</html>

<script > $(document).ready(function(){
        $('.parallax').parallax();
    });</script>



