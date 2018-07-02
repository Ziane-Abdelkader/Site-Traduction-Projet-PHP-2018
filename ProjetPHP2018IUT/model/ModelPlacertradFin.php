<?php
function connection(){
    $dbLink = mysqli_connect('mysql-projetphp2018.alwaysdata.net', '149432_admin', 'cavachier2018')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'projetphp2018_admin')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    return $dbLink;
}
function requeteTrad($trad){
    $query = "SELECT $trad FROM traducteur WHERE FR = ''";

    return $query;
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


function afficheLangue($trad)
{
    $dbLink = connection();
    $query = requeteTrad($trad);
    $dbResult = selection($dbLink, $query);
    if (!($dbResult)) {
        erreur($dbLink, $query);
    } else {
        while ($dbRow = mysqli_fetch_assoc($dbResult)) {
            $dbRow = mysqli_fetch_assoc($dbResult);
            echo '<h1> ' . $dbRow['FR'] . '</h1>';

        }
    }
}