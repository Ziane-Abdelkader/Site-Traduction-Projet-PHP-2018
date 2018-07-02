<?php
function connection(){
    $dblink = mysqli_connect('mysql-projetphp2018.alwaysdata.net', '149432_admin', 'cavachier2018')
    or die('Erreur de connexion au serveur: ' . mysqli_connect_error());
    mysqli_select_db($dblink, 'projetphp2018_admin') or die ('Pb de sélection BD : ' . mysqli_error($dblink));
    return $dblink;
}
function requeteConnection ($identifiant){
    $query = "SELECT EMAIL,MDP,STATUT,ID FROM user WHERE EMAIL = '$identifiant'";
    return $query;
}
function recuperation($dblink,$query){
    if (!($dbResult = mysqli_query($dblink, $query)))
    {
        echo _('Erreur dans requête').'<br />';
        // Affiche le type d'erreur.
        echo _('Erreur : ') .' mysqli_error($dbLink)' . '<br/>';
        // Affiche la requête envoyée.
        echo _('Requête : ') . $query . '<br/>';
        exit();
    }
    return $dbResult;
}

function utilisation($dbResult){
    $dbRow = mysqli_fetch_assoc($dbResult);
    return $dbRow;
}
//CONNEXION A LA BASE DE DONNEE
function getVerif($password,$identifiant){
    $dblink = connection();

        $query = requeteConnection($identifiant);

        $dbResult=recuperation($dblink,$query);

        $dbRow=mysqli_fetch_assoc($dbResult);
        return password_verify($password,$dbRow['MDP']);


}
function getDonner($identifiant){
    $dblink = connection();

    $query = requeteConnection($identifiant);

    $dbResult=recuperation($dblink,$query);

    $dbRow=mysqli_fetch_assoc($dbResult);
    return $dbRow;


}