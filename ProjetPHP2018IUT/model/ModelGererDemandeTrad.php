<?php
/**
 * Created by PhpStorm.
 * User: zizo
 * Date: 27/01/2018
 * Time: 10:49
 */
function connection(){
    $dbLink = mysqli_connect('mysql-projetphp2018.alwaysdata.net', '149432_admin', 'cavachier2018')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , 'projetphp2018_admin')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    return $dbLink;
}
function requeteGerer(){
    $id=$_SESSION['id'];
    $query ="SELECT * FROM traducteur WHERE utilisateur ='$id'";
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
function enAttente($trad){
    if(isset($trad)){
        return $trad;
    }else{
        $trad= 'Traduction en attente';
        return $trad;

    }
}
function afficherGererDemandeTrad(){
    $dbLink =connection();

    $query =requeteGerer();
    $dbResult =selection($dbLink,$query);
    if (!($dbResult)) {
        erreur($dbLink,$query);
    }
    else {
        while($dbRow = mysqli_fetch_assoc($dbResult))
        {
            $anglais=enAttente($dbRow['EN']);
            $esp=enAttente($dbRow['SP']);
            $it=enAttente($dbRow['IT']);
            $all=enAttente($dbRow['DU']);

            echo '<h2> ' .'francais&nbsp=&nbsp'. $dbRow['FR'] .'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'  .
                'anglais&nbsp=&nbsp'. $anglais .'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'  .
                'espagnol&nbsp=&nbsp'.$esp . '&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'  .
                'italien&nbsp=&nbsp'.$it .'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'  .
                'allemand&nbsp=&nbsp'.$all .'</h2>';

        }
    }}