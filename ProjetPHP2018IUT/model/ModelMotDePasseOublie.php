
<?php
function connection()
{
    $dbLink = mysqli_connect('mysql-projetphp2018.alwaysdata.net', '149432_admin', 'cavachier2018')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'projetphp2018_admin')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    return $dbLink;
}


function requete1($mail)
{
    $query = "SELECT EMAIL,MDP FROM user WHERE EMAIL = '$mail'";
    return $query;
}

function verification($query, $dbLink)
{

    if (!($dbResult = mysqli_query($dbLink, $query))) {
        echo 'Erreur dans requête<br />';
        // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }
    $dbRow=mysqli_fetch_assoc($dbResult);
    $mail=$dbRow['EMAIL'];
    return $mail;
}

function requete2($mdp2, $mail)
{
    $query2 = "UPDATE user SET MDP='$mdp2'WHERE EMAIL = '$mail'";
    return $query2;
}

function miseAJour($dbLink, $query2)
{
    if (!($dbResult = mysqli_query($dbLink, $query2))) {
        echo _('Erreur dans requête').'<br />';
        // Affiche le type d'erreur.
        echo _('Erreur : ') . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo _('Requête : ') . $query2 . '<br/>';
        exit();
    }
}


function envoieMailMdp($mail,$action){
    $dbLink = connection();
    $mdp2=rand();
    $query=requete1($mail);
    if ($action == 'Envoyer') {
    if (verification($query,$dbLink)==null){
        header("Location: ../controlleur/motDePasseOublier.php?step=ERREUR");
    }else {
        mail('projetphp2018@gmail.com','test','test');
        $message = _('Voici votre nouveau mot de passe:') . PHP_EOL;
        $message .= _('Nouveau mot de passe : ') . PHP_EOL . $mdp2;
        mail($mail, _('inscription'), $message);
        $mdp2=password_hash($mdp2, PASSWORD_DEFAULT);

        $query2=requete2($mdp2,$mail);
        miseAJour($dbLink,$query2);
        header("Location: ../controlleur/connexion.php?step=MDP");

    }
}}
