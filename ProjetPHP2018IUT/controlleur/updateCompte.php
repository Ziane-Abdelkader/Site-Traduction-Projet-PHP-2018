<?php

/**
 * Created by PhpStorm.
 * User: Trocmé julie
 */
include '../fonction.php';
include '../model/ModelUpdateCompte.php';
tradInit('trad','../locale');
$data=[
    'titrePage'=> _('changement email')
];
getView('view/VueMenuBarre.php',$data);

$email = $_SESSION['mail'];
$mdp = $_SESSION['mdp'];
$action = $_POST['action'];
$id = $_SESSION['id'];
$email2=$_POST['email'];
$recupMail=recupMail($action,$id,$email2);


getView('view/VueUpdateMail.php');
