<?php
/**
 * Created by PhpStorm.
 * User: Simon Kristofer
 */

include '../fonction.php';
include '../model/ModelMotDePasseOublie.php';
tradInit('trad','../locale');
    $mail=$_POST['mail'];
    $action = $_POST['action'];
    envoieMailMdp($mail,$action);

    $data=[
        'titrePage'=> _('Mot de passe oublié')
    ];
    getView('view/VueMenuBarre.php',$data);
    getView('../view/VueDemandeMdpOublier.php',$data);

