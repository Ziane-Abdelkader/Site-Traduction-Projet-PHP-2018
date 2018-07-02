<?php
/**
 * Created by PhpStorm.
 * User: Trocmé julie
 */
include '../fonction.php';
tradInit('trad','../locale');
$data=[
    'titrePage'=> _('Traduction')
];
getView('view/VueMenuBarre.php',$data);
getView('view/VueTraduction.php',$data);
