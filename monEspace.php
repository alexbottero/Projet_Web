<?php
require('Configs/Config_pages.php');
if(estConnecte()){
$cookie=$_COOKIE["cookie_Connexion"];
$user=existCookie($cookie);
$mesCovoits=mesCovoits($user['email']);
$mesTrocs=mesTrocs($user['email']);
$mesApparts=mesApparts($user['email']);
$demandesFaites=demandesFaites($user['email']);
$demandesRecues=demandesRecues($user['email']);

if($user['statut']==2){
    $allCovs=allCovoit();
    $allApps=allAppart();
    $allTrocs=allTroc();
}
require('Vues/Vue_MonEspace.php');
   }
else {
    header("Location:connexion");
}
?>