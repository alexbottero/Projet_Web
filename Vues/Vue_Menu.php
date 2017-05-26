<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper lime  grey lighten-4"  ">
            <a href="index" class="brand-logo right">  <image src="/Medias/logo2.png" height="60"/></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse active"><i class="material-icons  indigo darken-4">menu</i></a>
            <ul class="center hide-on-med-and-down ">
                <li><a href="/covoiturages">Covoiturage</a></li>
                <li><a href="/appartements">Appartement</a></li>
                <li><a href="/trocs">Troc</a></li>
                <li><a href="/ajoutAnnonce"/> Ajouter Annonce</a></li>
                <?php
                if($val=estConnecte()){
                    echo"<li><a href=\"/recherche\"/> Rechercher </a></li>
                        <li><a href=\"/monEspace\"/> Mon Espace</a></li>
                        <li><a href=\"/deconnexion\"/> Deconnexion </a></li>
                    </ul>";
                }
                else{
                    echo"<li><a href=\"/connexion\"/> Connexion </a></li>
            </ul>";
                }
                ?>

        </div>
    </nav>
</div>
<ul class="side-nav grey lighten-2" id="mobile-demo">
    <li><a href="/covoiturages">Covoiturage</a></li>
    <li><a href="/appartements">Appartement</a></li>
    <li><a href="/trocs">Troc</a></li>
    <li><a href="/ajoutAnnonce"> Ajouter Annonce</a></li>
    <?php
    if(estConnecte()){
        echo"<li><a href=\"/recherche\"/> Rechercher </a></li>
              <li><a href=\"/monEspace\"/> Mon Espace</a></li>
             <li><a href=\"/deconnexion\"/> Deconnexion </a></li>
                    </ul>";

    }
    else{
        echo"<li><a href=\"connexion\"/> Connexion </a></li>
            </ul>";
    }
    ?>
</ul>


