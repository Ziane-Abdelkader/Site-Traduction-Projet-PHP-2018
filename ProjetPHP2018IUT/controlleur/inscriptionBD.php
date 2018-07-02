<?php
/**
 * Created by PhpStorm.
 * User: Simon Kristofer
 */
include '../fonction.php';
include '../model/ModelInscription.php';
tradInit('trad','../locale');

$id = $_POST['identifiant'];
$mdp = $_POST['mdp'];
$mdp2 = $_POST['mdp2'];
$mail = $_POST['mail'];
$action = $_POST['action'];
$recupDonnee=recuperationDonnee($id,$mdp,$mdp2,$mail,$action);

$data=[
    'titrePage'=> _('Inscription')

];
getView('view/VueMenuBarre.php',$data);
getView('view/VueInscription.php',$data);
