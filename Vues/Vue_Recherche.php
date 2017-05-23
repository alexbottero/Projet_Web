<head>
    <?php include ('Configs/Config_css.php'); ?>
</head>
<body>
<div>
    <?php require("Vue_Menu.php"); ?>
</div>

<h2> Recherche</h2>
<form method="post" action="resultat.php ">
<div class="row">
    <div class="input-field col s12" >
        <select name="TypeAnnonce" id="TypeAnnonce">
            <option value="" disabled selected>Choisis ton type d'annonce</option>
            <option value="Covoit">Covoiturage</option>
            <option value="Appartement">Appartement</option>
            <option value="Troc">Troc</option>
        </select>
        <label>Type d'annonce</label>
    </div>
</div>

<div id="DivOption">


    <div id="covoit">
        <div class="row">
            <div class="input-field col s3">
                <input  id="PrixCov" type="text" name="PrixMax" class="validate">
                <label for="PrixMax">PrixMax</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input  id="villeDepart" type="text" name="villeDepart" class="validate">
                <label for="villeDepart">Depart</label>
            </div>
            <div class="input-field col s4">
                <input  id="villeArrive" type="text" name="villeArrive" class="validate">
                <label for="villeArrive">Ville arrivée</label>
            </div>
            <div class="input-field col s4">
                <input type="date" name="dateCovoit" class="datepicker">
                <label for="dateCovoit">Date</label>
            </div>
        </div>
    </div>



    <div id="appart">
        <div class="row">
            <div class="input-field col s4">
                <input  id="villeAppart" type="text" name="villeAppart" class="validate">
                <label for="villeAppart">Ville</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input  id="Loyer" type="text" name="LoyerMax" class="validate">
                <label for="Loyer">Loyer maximum</label>
            </div>
            <div class="input-field col s4">
                <input  id="nbPiece" type="number" name="NbPiece" class="validate">
                <label for="nbPiece">Nombre de pieces minimum</label>
            </div>
            <div class="input-field col s4">
                <input  id="Surface" type="text" name="Surface" class="validate">
                <label for="Surface">Surface minimum</label>
            </div>
        </div>
    </div>




    <div id="troc">

        <div class="row">
            <div class="input-field col s6">
                <input  id="villeRecup" type="text" name="villeRecup" class="validate">
                <label for="villeRecup">Ville</label>
            </div>
            <div class="input-field col s6">
                <input  id="prixTroc" type="text" name="PrixTroc" class="validate">
                <label for="prixTroc">Prix maximum</label>
            </div>
        </div>
    </div>
    <div class="Envoi">
        <button class="btn waves-effect waves-light" type="submit" name="action">Rechercher
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
