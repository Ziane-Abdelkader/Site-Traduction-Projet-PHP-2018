<?php
/**
 * Created by PhpStorm.
 * User: Teusk
 * Date: 24/01/2018
 * Time: 08:49
 */
function connection(){
    $dbLink = mysqli_connect('mysql-projetphp2018.alwaysdata.net', '149432_admin', 'cavachier2018')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'projetphp2018_admin')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    return $dbLink;
}

function selection($dbLink,$query){
    $dbResult = mysqli_query($dbLink, $query);
    return $dbResult;
}
function erreur($dbLink,$query){
    echo _('Erreur dans requête').'<br />';
    // Affiche le type d'erreur.
    echo _('Erreur : ') . mysqli_error($dbLink) . '<br/>';
    // Affiche la requête envoyée.
    echo _('Requête : ') . $query . '<br/>';
    exit();
}


function updateMot ($mot,$langue,$newMot)
{
    $dbLink = connection();
    $query =  requete($mot,$langue,$newMot);
    $dbResult = selection($dbLink,$query);
    if (!($dbResult)) {
        erreur($dbLink, $query);
    }
}

function requete ($mot , $langue , $newMot){
    $updateMot = "UPDATE traducteur SET $langue = '$newMot' WHERE FR = '$mot'";

   // UPDATE traducteur SET EN = 'red' WHERE FR = 'rouge';

    return $updateMot;
}
