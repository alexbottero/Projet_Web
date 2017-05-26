<?php require("Vue_Entete.php"); ?>
<body>
<div>
    <?php require("Vue_Menu.php"); ?>
</div>

<div class="connexion">
<form action="Controleurs/Controleurs_Pages/Controleur_Connexion.php" method="post">

        <h2> Connexion</h2>
        <div class="input-field col s12">
            <i class="material-icons prefix">email</i>
            <input id="mail" type="text" name="mail" class="validate" >
            <label for="icon_prefix">Mail</label>
        </div>
        <div class="input-field col s12">
            <i class="material-icons prefix">vpn_key</i>
            <input id="icon_prefix" type="password" name="mdp" class="validate" >
            <label for="icon_prefix">Mot de passe</label>
        </div>
        <div class="connex"><button class="waves-effect waves-light btn indigo darken-4" type="submit" name="action">connexion</button></div>
        <div> Vous n'avez pas de compte? <a href="inscription" >Inscrivez-vous</a></div>


</form>
</div>
<?php include ('Configs/Config_js.php'); ?>
</body>
</html>
