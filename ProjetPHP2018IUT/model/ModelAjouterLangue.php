<?php
/**
 * Created by PhpStorm.
 * User: p16002371
 * Date: 24/01/18
 * Time: 10:10
 */

function connection(){

    $dbLink = mysqli_connect('mysql-projetphp2018.alwaysdata.net', '149432_admin', 'cavachier2018')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'projetphp2018_admin')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    return $dbLink;}

function requete($langue){
    $query = "ALTER TABLE traducteur ADD " . $langue ." VARCHAR(2) ";
    return $query;
}
function modification($dbLink,$query)
{
    if (!($dbResult = mysqli_query($dbLink, $query))) {
        echo _('Erreur dans requête') .'<br />';
        // Affiche le type d'erreur.
        echo _('Erreur : ') . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo _('Requête : ') . $query . '<br/>';
        exit();


    }
}
function ajout($langue,$action){
    $dblink = connection();


        if(!(empty($_POST['langue']) && !(empty($_POST['action'])))) {
            $langue = $_POST['langue'];
            $action = $_POST['action'];

            if(strlen($langue)<=2  )
            {
                if($action == "Ajouter")
                {
                    $queryNouvLangue=requete($langue);
                    modification($dblink,$queryNouvLangue);
                    echo 'Votre langue a bien été rajouter ! ';



                }
            }}

}
