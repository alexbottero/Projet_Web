<?php
    require("../../Modeles/Modele_Annonce.php");
    require("../../Modeles/Modele_Troc.php");
    require("../../Modeles/Modele_Appartement.php");
    require("../../Modeles/Modele_Covoiturage.php");
    require("../../Modeles/Modele_User.php");

    $type=$_POST['TypeAnnonce'];
    $titre=$_POST['Titre'];
    $desc=$_POST['Description'];
    $date =date("Y-m-d H:i:s");

    $prixCov=$_POST['PrixCov'];
    $nbPlace=$_POST['NbPlace'];
    $bag=$_POST['Bagage'];
    $rueDepart=$_POST['rueDepart'];
    $villeDepart=$_POST['villeDepart'];
    $villeArrive=$_POST['villeArrive'];
    $dateCov=$_POST['dateCovoit'];

    $numAppart=$_POST['numAppart'];
    $rueAppart=$_POST['rueAppart'];
    $villeAppart=$_POST['villeAppart'];
    $loyer=$_POST['Loyer'];
    $nbPiece=$_POST['NbPiece'];
    $surface=$_POST['Surface'];
    $dateCess=$_POST['dateAppart'];
    $extensionApp=strtolower( substr(strrchr($_FILES['FileApp']['name'],'.'),1));


    $numRecup=$_POST['numRecup'];
    $rueRecup=$_POST['rueRecup'];
    $villeRecup=$_POST['villeRecup'];
    $prixTroc=$_POST['PrixTroc'];
    $cookie=$_COOKIE["cookie_Connexion"];
    $user=existCookie($cookie);
    $extensionTroc=strtolower(substr(strrchr($_FILES['FileTroc']['name'],'.'),1));

    $extensionsPossible= array('jpg','jpeg','gif','png');
    $err="";
    if($type=="Covoit"){

        if( !empty($titre) && !empty($desc) && !empty($prixCov) &&
            !empty($nbPlace) && !empty($bag) && !empty($rueDepart) &&  !empty($villeArrive) &&  !empty($villeDepart) && !empty($dateCov)){
            $idA=ajoutAnnonce($desc,$titre,$date,'1',$user['email']);
            $dateTemp=date_create($dateCov);
            $dateCov = date_format($dateTemp,'Y-m-d H:i:s');
            ajoutCovoit($prixCov,$dateCov,$nbPlace,$bag,$rueDepart,$villeDepart,$villeArrive,$idA);
            header("Location: ../../index.php");
        }
        else{
            $err="Formulaire incomplet";
            Header('Location:/ajoutAnnonce/erreur/'.$err);
        }
    }
    elseif($type=="Appartement"){
        if(!empty($type) && !empty($titre) && !empty($desc) && !empty($numAppart)&& !empty($rueAppart)&& !empty($villeAppart)&& !empty($dateCess) &&!empty($surface)
            &&!empty($loyer) &&!empty($nbPiece) &&($_FILES['FileApp']['error'] == 0) && in_array($extensionApp,$extensionsPossible))
        {
            $dossier = "../../Medias/imageUpload/".$user['email'];
            if(!is_dir($dossier)){
                mkdir($dossier);
            }
            $idA=ajoutAnnonce($desc,$titre,$date,'1',$user['email']);
            $photo="../../Medias/imageUpload/".$user['email']."/".$idA.".".$extensionApp;
            $res = move_uploaded_file($_FILES['FileApp']['tmp_name'],$photo);
            $dateTemp=date_create($dateCess);
            $dateCess = date_format($dateTemp,'Y-m-d H:i:s');
            ajoutAppart($dateCess,$rueAppart,$nbPiece,$surface,$photo,$loyer,$numAppart,$villeAppart,$idA);
            header("Location: ../../index");

        }
        else{
            $err="Formulaire incomplet";
            Header('Location:/ajoutAnnonce/erreur/'.$err);
        }

    }
    elseif($type=="Troc"){
        if(!empty($type) && !empty($titre) && !empty($desc) && !empty($rueRecup) && !empty($numRecup)
            &&!empty($villeRecup) &&($_FILES['FileTroc']['error'] == 0) && in_array($extensionTroc,$extensionsPossible))
            {
            $dossier = "../../Medias/imageUpload/".$user['email'];
            if(!is_dir($dossier)){
                mkdir($dossier);
            }

            $idA=ajoutAnnonce($desc,$titre,$date,'1',$user['email']);
            $photo="../../Medias/imageUpload/".$user['email']."/".$idA.".".$extensionTroc;
            $res = move_uploaded_file($_FILES['FileTroc']['tmp_name'],$photo);
            ajoutTroc($prixTroc,$numRecup,$photo,$rueRecup,$villeRecup,$idA);
            header("Location: ../../index");
        }
        else{
            $err="Formulaire incomplet";
            Header('Location:/ajoutAnnonce/erreur/'.$err);
        }
    }
    else{
        $err="Formulaire incomplet";
        Header('Location:/ajoutAnnonce/erreur/'.$err);
    }

?>

