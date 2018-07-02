<?php
function connection(){
    $dblink = mysqli_connect('mysql-projetphp2018.alwaysdata.net', '149432_admin', 'cavachier2018')
    or die('Erreur de connexion au serveur: ' . mysqli_connect_error());
    mysqli_select_db($dblink, 'projetphp2018_admin') or die ('Pb de sélection BD : ' . mysqli_error($dblink));
    return $dblink;}

function requete($traduction){
    $utilisateur=$_SESSION['id'];
    $query = 'INSERT INTO traducteur (FR,utilisateur) VALUES (\'' . $traduction . '\'' .','. '\'' . $utilisateur . '\')';
    return $query;}

function verification($dblink,$query){
    if (!($dbResult = mysqli_query($dblink, $query))) {
        echo _('Erreur dans requête').'<br />';
        // Affiche le type d'erreur.
        echo _('Erreur : ') .' mysqli_error($dbLink)' . '<br/>';
        // Affiche la requête envoyée.
        echo _('Requête : ') . $query . '<br/>';
        exit();
    }
    return $dbResult;}

function execution($dbResult){
$dbRow = mysqli_fetch_assoc($dbResult);
}

function rechercheMotBD($id){
    $traduction=$id;
    $dblink=connection();
    $requete=requete($traduction);
    $dbResult=verification($dblink,$requete);
    return $dbResult ;
}