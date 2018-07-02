<?php
/**
 * Created by PhpStorm.
 * User: Trocmé julie
 */
include '../fonction.php';
tradInit('trad','../locale');
$data=[
    'titrePage'=> _('Condition général')
];
getView('view/VueMenuBarre.php',$data);
getView('view/VueCondiGe.php',$data);
