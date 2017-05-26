<?php
    $typeAnnonce=$_POST['TypeAnnonce'];
    $prixMax=$_POST['PrixMax'];

    $depart=$_POST['villeDepart'];

    $arrive=$_POST['villeArrive'];

    $dateCovoit=$_POST['dateCovoit'];

    $villeAppart=$_POST['villeAppart'];

    $loyer=$_POST['LoyerMax'];

    $pieceMin=$_POST['NbPiece'];


    $surface=$_POST['Surface'];


    $villeTroc=$_POST['villeRecup'];
    $prixMaxTroc=$_POST['PrixTroc'];

    $resultats = null;

    if($typeAnnonce=="Covoit"){
        if(!empty($prixMax) && !empty($depart) && !empty($arrive) && !empty($dateCovoit)){
            $dateTemp=date_create($dateCovoit);
            $dateCovoit = date_format($dateTemp,'Y-m-d');
            $resultats=rechercheCov($prixMax,$depart,$arrive,$dateCovoit);
        }
        else{
            $err="Certains champs de recherche sont vides";
            Header('Location:/recherche/erreur/'.$err);
        }

    }
    elseif($typeAnnonce=="Appartement"){
        if(!empty($villeAppart) && !empty($loyer) && !empty($pieceMin) && !empty($surface)){
            $resultats=rechercheApp($villeAppart,$pieceMin,$surface,$loyer);
        }
        else{
            $err="Certains champs de recherche sont vides";
            Header('Location:/recherche/erreur/'.$err);
        }

    }
    elseif($typeAnnonce=="Troc"){
        if(!empty($villeTroc) && !empty($prixMaxTroc) ){
            $resultats=rechercheTroc($prixMaxTroc,$villeTroc);

        }
        else{
            $err="Certains champs de recherche sont vides";
            Header('Location:/recherche/erreur/'.$err);
        }

    }
    else{
        $err="Certains champs de recherche sont vides";
        Header('Location:/recherche/erreur/'.$err);
    }

?>

