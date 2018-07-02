<?php
function connection(){
    $dbLink = mysqli_connect('mysql-projetphp2018.alwaysdata.net', '149432_admin', 'cavachier2018')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'projetphp2018_admin')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    return $dbLink;
}
function requeteMail($MDP,$id){
    $queryUpdateMail = "UPDATE user SET MDP = '" . $MDP ."' WHERE ID = '" . $id . "'" ;
    return $queryUpdateMail;
}
function modification($dbLink,$queryUpdateMail){
    if (!($dbResult = mysqli_query($dbLink, $queryUpdateMail))) {
        echo _('Erreur dans requête').'<br />';
        // Affiche le type d'erreur.
        echo _('Erreur : ') .' mysqli_error($dbLink)' . '<br/>';
        // Affiche la requête envoyée.
        echo _('Requête : ') . $query . '<br/>';
        exit();
    }
}
function recupMail($action,$id,$email)
{
    $dbLink = connection();

    if($action == 'valider') {

        $queryUpdateMail=requeteMail($email,$id);
        modification($dbLink,$queryUpdateMail);
        return $id;
    }
}