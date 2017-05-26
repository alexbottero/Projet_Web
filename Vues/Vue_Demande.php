<?php require("Vue_Entete.php"); ?>
<body>
<form method="post" action="/Controleurs/Controleurs_Pages/Controleur_Demande.php<?php echo"?IdAnnonce=".$_GET['idAnnonce'];?>" >
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
    <div>
        <?php
        require('Vue_Menu.php');
        $id=$_GET['idAnnonce'];?>
        <h2> Demande</h2>

        <div class="row">
            <div class="row">
                <div class="input-field col s12">
                    <textarea id="messageDemande" name="messageDemande" class="materialize-textarea"></textarea>
                    <label for="messageDemande">Message demande</label>
                </div>
            </div>

        </div>
    <div class="row">
        <div class="input-field col s3">
            <input  id="prixProp" type="text" name="prixProp" class="validate">
            <label for="Prix">Prix proposé (optionnel)</label>
        </div>
    </div>
    <div class="Envoi">
        <button class="btn waves-effect waves-light" type="submit" name="action">Demander
            <i class="material-icons right">send</i>
        </button>
    </div>
    </div>
    <input type="hidden" name="idAnnonce" value="<?php echo $id; ?>" />
</form>

<?php include ('Configs/Config_js.php'); ?>
</body>
</html>
