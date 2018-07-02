<?php
/**
 * Created by PhpStorm.
 * User: Peyric Alban
 */


include '../fonction.php';
include '../model/ModelAdministration.php';
tradInit('trad','../locale');

$Tableau=getuser();

$data=[
    'titrePage'=> _('Administration'),
    'tableau' => $Tableau
];

getView('view/VueMenuBarre.php',$data);
getView('view/VueAdministration.php',$data);



