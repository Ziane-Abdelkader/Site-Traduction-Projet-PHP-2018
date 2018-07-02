<?php
/**
 * Created by PhpStorm.
 * User: zizo
 * Date: 27/01/2018
 * Time: 10:49
 */
include '../fonction.php';
tradInit('trad','../locale');
$data=[
    'titrePage'=> _('Gerer traduction')
];
include '../model/ModelGererDemandeTrad.php';
getView('../view/VueMenuBarre.php',$data);
afficherGererDemandeTrad();