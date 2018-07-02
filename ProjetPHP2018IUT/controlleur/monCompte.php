<?php
/**
 * Created by PhpStorm.
 * User: Trocmé julie
 */
include '../fonction.php';
include '../model/ModelMonCompte.php';
tradInit('trad','../locale');
$Tableau=getDonneeCompte();

$data=[
    'titrePage'=> _('Mon compte'),
    'tableau' => $Tableau
];

getView('view/VueMonCompte.php',$data);