<?php include ('Configs/Config_css.php'); ?>
</head>
<body>
<div>
    <?php require("Vue_Menu.php"); ?>
</div>

<div class="row">
<form class="col s12 ">
    <div class="row">
        <div class="input-field col s6">
            <input  id="Prenom" type="text" class="validate">
            <label for="nom">Prenom</label>
        </div>
        <div class="input-field col s6">
            <input id="Nom" type="text" class="validate">
            <label for="Nom">Nom</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input  id="mail" type="text" class="validate">
            <label for="disabled">Mail</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="Mot_de_passe" type="password" class="validate">
            <label for="Mot_de_passe">Mot de passe</label>
        </div>
        <div class="input-field col s6">
            <input id="Conf_Mot_de_passe" type="password" class="validate">
            <label for="Conf_Mot_de_passe">Confirmation mot de passe</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <select>
                <option value="" disabled selected>Section</option>
                <option value="IG">IG</option>
                <option value="MEA">MEA</option>
                <option value="GBA">GBA</option>
            </select>
        </div>
        <div class="input-field col s6">
            <select>
                <option value="" disabled selected>Annee</option>
                <option value="3 ieme">3 ieme</option>
                <option value="4 ieme">4 ieme</option>
                <option value="5 ieme">5 ieme</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input  id="mail_parrain" type="text" class="validate">
            <label for="disabled">Mail Parrain</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input  id="phone" type="text" class="validate">
            <label for="disabled">Telephone</label>
        </div>
    </div>
</form>
</div>
<div class="Envoi">
    <button class="btn waves-effect waves-light" type="submit" name="action">S'inscrire
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

