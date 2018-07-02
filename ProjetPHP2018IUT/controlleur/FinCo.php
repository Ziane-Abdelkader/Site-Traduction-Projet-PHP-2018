<?php
/**
 * Created by PhpStorm.
 * User: Trocmé julie
 */
include '../fonction.php';
tradInit('trad','../locale');
$data=[
    'titrePage'=> _('Fin connexion')
];
getView('view/VueMenuBarre.php',$data);
getView('view/VueFinDeco.php',$data);