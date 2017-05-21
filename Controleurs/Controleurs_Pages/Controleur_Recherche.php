<?php
    $typeAnnonce=$_POST['TypeAnnonce'];

    $prixMax=$_POST['PrixMax'];
    $depart=$_POST['villeDepart'];
    $arrive=$_POST['villeArrive'];
    $dateCovoit=$_POST['dateCovoit'];

    $villeAppart=$_POST['villeAppart'];
    $loyer=$_POST['Loyer'];
    $pieceMin=$_POST['nbPiece'];
    $surface=$_POST['Surface'];

    $villeTroc=$_POST['villeRecup'];
    $prixMaxTroc=$_POST['PrixTroc'];

    if($type=="Covoit"){
        if(!empty($prixMax) && !empty($depart) && !empty($arrive) && !empty($dateCovoit)){
            $rech=rechercheCov($prixMax,$depart,$arrive,$dateCovoit);
            header("Location:../../resultat.php");
        }
        else{
            echo "manques info";
        }

    }
    elseif($type=="Appartement"){
        if(!empty($villeAppart) && !empty($loyer) && !empty($pieceMin) && !empty($surface)){
            $rech=rechercheCov($villeAppart,$pieceMin,$surface,$loyer);
            header("Location:../../resultat.php");
        }
        else{
            echo "manques info";
        }

    }
    elseif($type=="Troc"){
        if(!empty($villeTroc) && !empty($prixMaxTroc) ){
            $rech=rechercheTroc($prixMaxTroc,$villeTroc);
            header("Location:../../resultat.php");

        }
        else{
            echo "manques info";
        }

    }
    else{
        echo "erreur";
    }

?>

