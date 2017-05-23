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
            echo "manques info 2";
        }

    }
    elseif($typeAnnonce=="Appartement"){
        if(!empty($villeAppart) && !empty($loyer) && !empty($pieceMin) && !empty($surface)){
            $resultats=rechercheApp($villeAppart,$pieceMin,$surface,$loyer);
        }
        else{
            echo "manques info3";
        }

    }
    elseif($typeAnnonce=="Troc"){
        if(!empty($villeTroc) && !empty($prixMaxTroc) ){
            $resultats=rechercheTroc($prixMaxTroc,$villeTroc);

        }
        else{
            echo "manques info";
        }

    }
    else{
        echo "erreur";
    }

?>

