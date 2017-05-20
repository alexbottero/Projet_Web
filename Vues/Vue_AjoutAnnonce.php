

<head>
    <?php include ('Configs/Config_css.php'); ?>
</head>
    <form method="post" action="/Controleurs/Controleurs_Pages/Controleur_AjoutAnnonce.php " enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
<div>
<?php require('Vue_Menu.php');?>
<h2> Ajout Annonce</h2>

<div class="row">


    <div class="input-field col s6" >
        <select name="TypeAnnonce" id="TypeAnnonce">
            <option value="" disabled selected>Choisis ton type d'annonce</option>
            <option value="Covoit">Covoiturage</option>
            <option value="Appartement">Appartement</option>
            <option value="Troc">Troc</option>
        </select>
        <label>Type d'annonce</label>
    </div>
    <div class="input-field col s6">
        <input  id="Titre" type="text" name="Titre" class="validate">
        <label for="Titre">Titre</label>
    </div>
</div>


<div class="row">
        <div class="input-field col s12">
            <textarea id="Description" name="Description" class="materialize-textarea"></textarea>
            <label for="Description">Description</label>
        </div>
</div>

<div id="DivOption">


    <div id="covoit">
    <div class="row">
        <div class="input-field col s3">
            <input  id="PrixCov" type="text" name="PrixCov" class="validate">
            <label for="PrixCov">Prix</label>
        </div>
        <div class="input-field col s3">
            <input  id="NbPlace" type="number" name="NbPlace" class="validate">
            <label for="NbPlace">places</label>
        </div>
        <div class="input-field col s6">
            <select name="Bagage" id="Bagage">
                <option value="aucun">aucun</option>
                <option value="petit">petit</option>
                <option value="moyen">moyen</option>
                <option value="grand">grand</option>
            </select>
            <label>Type bagage</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input  id="rueDepart" type="text" name="rueDepart" class="validate">
            <label for="rueDepart">Rue départ</label>
        </div>
        <div class="input-field col s6">
            <input  id="villeDepart" type="text" name="villeDepart" class="validate">
            <label for="villeDepart">Ville départ</label>
        </div>

    </div>
    <div class="row">
        <div class="input-field col s6">
            <input  id="villeArrive" type="text" name="villeArrive" class="validate">
            <label for="villeArrive">Ville arrivée</label>
        </div>
        <div class="input-field col s6">
            <input type="date" name="dateCovoit" class="datepicker">
            <label for="dateCovoit">Covoiturage le:</label>
        </div>
    </div>
</div>



<div id="appart">
    <div class="row">
        <div class="input-field col s4">
            <input  id="numAppart" type="number" name="numAppart" class="validate">
            <label for="numAppart">Numero</label>
        </div>
        <div class="input-field col s4">
            <input  id="rueAppart" type="text" name="rueAppart" class="validate">
            <label for="rueAppart">Rue</label>
            </div>

        <div class="input-field col s4">
            <input  id="villeAppart" type="text" name="villeAppart" class="validate">
            <label for="villeAppart">Ville</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4">
            <input  id="Loyer" type="text" name="Loyer" class="validate">
            <label for="Loyer">Loyer</label>
            </div>
        <div class="input-field col s4">
            <input  id="nbPiece" type="number" name="NbPiece" class="validate">
            <label for="nbPiece">Pieces</label>
            </div>
        <div class="input-field col s4">
            <input  id="Surface" type="text" name="Surface" class="validate">
            <label for="Surface">Surface</label>
            </div>
    </div>
    <div class="row">
        <div class="file-field input-field col s4">
            <div class="btn">
                <span>Photo</span>
                <input type="file" name="FileApp">
                </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
                </div>
            </div>
        <div class="input-field col s6">
            <input type="date" name="dateAppart" class="datepicker">
            <label for="dateAppart">Disponible le:</label>
        </div>
    </div>
</div>




<div id="troc">

    <div class="row">
        <div class="input-field col s4">
            <input  id="numRecup" type="number" name="numRecup" class="validate">
            <label for="numRecup">Numero</label>
            </div>
        <div class="input-field col s4">
            <input  id="rueRecup" type="text" name="rueRecup" class="validate">
            <label for="rueRecup">Rue</label>
        </div>
        <div class="input-field col s4">
            <input  id="villeRecup" type="text" name="villeRecup" class="validate">
            <label for="villeRecup">Ville</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input  id="prixTroc" type="text" name="PrixTroc" class="validate">
            <label for="prixTroc">Prix</label>
            </div>

        <div class="file-field input-field col s6">
            <div class="btn">
                <span>Photo</span>
                <input type="file" name="FileTroc" >
                </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>
    </div>
</div>



<div class="Envoi">
    <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter
        <i class="material-icons right">send</i>
    </button>
</div>
</form>
<div>



    <?php require("Vue_PiedDePage.php"); ?>
</div>
<?php include ('Configs/Config_js.php'); ?>
<script>
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });

    $('#TypeAnnonce').on('change', function() {

        var selectVal = $("#TypeAnnonce option:selected").val();
        if(selectVal.toString()=="Covoit"){
            $('#covoit').show();
            $('#troc').hide();
            $('#appart').hide();


        }

        if(selectVal.toString()=="Appartement"){
            $('#covoit').hide();
            $('#troc').hide();
            $('#appart').show();
        }


        if(selectVal.toString()=="Troc"){
            $('#covoit').hide();
            $('#troc').show();
            $('#appart').hide();
        }
    });
</script>
</body>



