<?php
/**
 * Created by PhpStorm.
 * User: zizo
 * Date: 27/01/2018
 * Time: 12:32
 */
include '../fonction.php';
include '../model/ModelUpdateMDP.php';
tradInit('trad','../locale');
$data=[
    'titrePage'=> _('changement MDP')
];
getView('view/VueMenuBarre.php',$data);

$email = $_SESSION['mail'];
$action = $_POST['action'];
$id = $_SESSION['id'];
$mdp2=$_POST['mdp'];
$mdp2=password_hash($mdp2, PASSWORD_DEFAULT);
$recupMail=recupMail($action,$id,$mdp2);


getView('view/VueUpdateMail.php');