<?php
function connexionBD() 
{
    try
    {
        $bdd = new PDO('mysql:host=alexandrktbotbot.mysql.db; dbname=alexandrktbotbot; charset=utf8', 'alexandrktbotbot', 'Fafa2017');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    return $bdd;
}
?>