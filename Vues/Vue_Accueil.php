
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

<div class="Entete">
    <image src="Medias/logo2" height="200"/>
    <div class="connection">
        <div class="input-field col s6">
            <i class="material-icons prefix">perm_identity</i>
            <input id="icon_prefix" type="text" class="validate" >
            <label for="icon_prefix">Pseudo</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">vpn_key</i>
            <input id="icon_telephone" type="tel" class="validate">
            <label for="icon_telephone">Mot de passe </label>
        </div>
        <a class="waves-effect waves-light btn amber accent-">connection</a>
    </div>
</div>


<div>
   <?php require("Vue_Menu.php"); ?>
</div>

<div class="parallax-container">
    <div class="parallax"><img src="Medias/covoit.jpg"></div>
</div>
<div class="container">
<h1>Derniers covoiturages disponibles </h1>

</div>
<div class="parallax-container">
    <div class="parallax"><img src="Medias/appartement.jpg"></div>
</div>
<div class="container">
<h1> Derniers apparements libérés</h1>
</div>
<div class="parallax-container">
    <div class="parallax"><img src="Medias/troc.jpg"></div>
</div>
<div class="container">
    <h1>Derniers trocs disponibles </h1>

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
