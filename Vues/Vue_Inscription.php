<?php require("Vue_Entete.php"); ?>
<body>
<div>
    <?php require("Vue_Menu.php"); ?>
</div>

<form method="post"  action="/Controleurs/Controleurs_Pages/Controleur_Inscription.php">
<div class="formInscription">
    <h2> Inscription </h2>
    <div class="row">
        <div class="row">
            <div class="input-field col s6">
                <input  id="Prenom" type="text" name="Prenom" class="validate">
                <label for="nom">Prenom</label>
            </div>
            <div class="input-field col s6">
                <input id="Nom" type="text" name="Nom" class="validate">
                <label for="Nom">Nom</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input  id="Mail" type="text" name="Mail" class="validate">
                <label for="disabled">Mail</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="MotDePasse" type="password" name="Mdp" class="validate">
                <label for="mdp">Mot de passe</label>
            </div>
            <div class="input-field col s12">
                <input id="Confmdp" type="password" name="Confmdp" class="validate">
                <label for="confmdp">Confirmation mot de passe</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6" >
                <select name="Section">
                    <option value="" disabled selected>Section</option>
                    <option value="IG">IG</option>
                    <option value="MEA">MEA</option>
                    <option value="GBA">GBA</option>
                </select>
            </div>
            <div class="input-field col s6" >
                <select name="Annee">
                    <option value="" disabled selected>Annee</option>
                    <option value="3">3 ieme</option>
                    <option value="4">4 ieme</option>
                    <option value="5">5 ieme</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12" >
                <input  id="MailParrain" type="text" name="MailParrain" class="validate">
                <label for="disabled">Mail Parrain</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input  id="tel" type="text" name="Tel" class="validate">
                <label for="disabled">Telephone</label>
            </div>
        </div>
    </div>
    </form>
    <div class="Envoi">
        <button class="btn waves-effect waves-light indigo darken-4" type="submit" name="action">S'inscrire
            <i class="material-icons right">send</i>
        </button>
    </div>
<?php include ('Configs/Config_js.php'); ?>
</body>
</html>

<script> $(document).ready(function() {
$('select').material_select();
});</script>

<script> $('select').material_select('destroy');</script>
