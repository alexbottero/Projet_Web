<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper lime  grey lighten-4"  ">
            <a href="index.php" class="brand-logo right">  <image src="Medias/logo2" height="60"/></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse active"><i class="material-icons  indigo darken-4">menu</i></a>
            <ul class="center hide-on-med-and-down ">
                <li><a href="covoiturage.php">Covoiturage</a></li>
                <li><a href="appartement.php">Appartement</a></li>
                <li><a href="troc.php">Troc</a></li>
                <li><a href="ajoutAnnonce.php"/> Ajouter Annonce</a></li>
                <?php
                if($val=estConnecte()){
                    echo"<li><a href=\"recherche.php\"/> Rechercher </a></li>
                        <li><a href=\"deconnexion.php\"/> Deconnexion </a></li>
                    </ul>";
                }
                else{
                    echo"<li><a href=\"connexion.php\"/> Connexion </a></li>
            </ul>";
                }
                ?>

        </div>
    </nav>
</div>
<ul class="side-nav grey lighten-2" id="mobile-demo">
    <li><a href="covoiturage.php">Covoiturage</a></li>
    <li><a href="appartement.php">Appartement</a></li>
    <li><a href="troc.php">Troc</a></li>
    <li><a href="ajoutAnnonce.php"/> Ajouter Annonce</a></li>
    <?php
    if(estConnecte()){
        echo"<li><a href=\"recherche.php\"/> Rechercher </a></li>
             <li><a href=\"deconnexion.php\"/> Deconnexion </a></li>
                    </ul>";

    }
    else{
        echo"<li><a href=\"connexion.php\"/> connexion </a></li>
            </ul>";
    }
    ?>
</ul>


