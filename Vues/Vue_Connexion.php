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
<form action="Controleurs/Controleurs_Pages/Controleur_Connexion.php" method="post">
<div class="connexion">
        <h2> Connexion</h2>
        <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input id="icon_prefix" type="text" name="mail" class="validate" >
            <label for="icon_prefix">Mail</label>
        </div>
        <div class="input-field col s12">
            <i class="material-icons prefix">vpn_key</i>
            <input id="icon_prefix" type="password" name="mdp" class="validate" >
            <label for="icon_prefix">Mot de passe</label>
        </div>
        <div><button class="waves-effect waves-light btn amber accent-" type="submit" name="action">connexion</button></div>
       <div> Vous n'avez pas de compte? <a href="inscription.php" >Inscrivez-vous</div>

</div>
</form>
<?php include ('Configs/Config_js.php'); ?>
</body>
</html>