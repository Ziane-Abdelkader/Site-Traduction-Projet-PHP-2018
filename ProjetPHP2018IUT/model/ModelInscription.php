<?php
function connection()
{

    $dbLink = mysqli_connect('mysql-projetphp2018.alwaysdata.net', '149432_admin', 'cavachier2018')
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink, 'projetphp2018_admin')
    or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    return $dbLink;
}

function requete($id, $mdp, $mail)
{
    $query = 'INSERT INTO user (ID,MDP,EMAIL) VALUES (\'' . $id . '\', \'' . $mdp . '\', \''
        . $mail . '\'' . ')';
    return $query;
}

function insertion($query)
{
    if (!($dbResult = mysqli_query(connection(), $query))) {
        echo _('Erreur dans requête').'<br />';
        // Affiche le type d'erreur.
        echo _('Erreur : ') .' mysqli_error($dbLink)' . '<br/>';
        // Affiche la requête envoyée.
        echo _('Requête : ') . $query . '<br/>';
        exit();

    }
}

function recuperationDonnee($id,$mdp,$mdp2,$mail,$action)
{

    if ($action == 'Envoyer') {
    if ($id != null or $mdp != null or $mail != null) {
        if ($mdp == $mdp2) {



                $message = _('Voici vos identifiants d\'inscription :') . PHP_EOL;
                $message .= _('Email : ' . $mail . PHP_EOL);
                $message .= _('Mot de passe : ') . PHP_EOL . $mdp;
                mail($mail, _('inscription'), $message);


            $mdp = password_hash($mdp, PASSWORD_DEFAULT);
            $query = requete($id, $mdp, $mail);
            try {
                insertion($query);
                header("Location: ../controlleur/inscriptionBD.php?step4=GOOD");
            } catch (Exception $exception) {
                header("Location: ../controlleur/inscriptionBD.php?step3=ERREUR");
            }
        }

    else {
            header("Location: ../controlleur/inscriptionBD.php?step=MDP");
        }
    } else {
        header("Location: ../controlleur/inscriptionBD.php?step2=VIDE");
    }}
}