<?php
/**
 * Created by PhpStorm.
 * User: Ziane-Cherif Abdelkader
 */
    session_start();
    include '../fonction.php';
    include '../model/ModelConnexion.php';
tradInit('trad','../locale');


$data=[ ];

if (!isset($_POST['identifiant'])) {
    $lien='../view/Connexion/VueFormulaire.php';
}
else{
    $verification=getVerif($_POST['mdp'],$_POST['identifiant']);
    if($verification)
    {
            session_start();
            $dbRow=getDonner($_POST['identifiant']);
            $_SESSION['login'] = 'ok';
            $_SESSION['statut'] = $dbRow['STATUT'];
            $_SESSION['id'] = $dbRow['ID'];
            $_SESSION['mail'] = $dbRow['EMAIL'];
            $_SESSION['mdp'] = $dbRow['MDP'];
            header('Location: ../index.php');
    }
    else
    {
        $lien='../view/Connexion/VueAfficherErreur.php';
    }
}

$data=[
    'titrePage'=> _('Connexion')
];
getView('view/VueMenuBarre.php',$data);
getView($lien,$data);