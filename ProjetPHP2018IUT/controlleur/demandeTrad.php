<?php
/**
 * Created by PhpStorm.
 * User: Simon Kristofer
 */
include '../fonction.php';
include '../model/ModelDemandeTrad.php';
tradInit('trad','../locale');

$data=[
    'titrePage'=> _('Demande de traduction')
];
getView('view/VueMenuBarre.php',$data);
    if (!isset($_POST['identifiant'])) {
        $lien='../view/DemandeTrad/VueFormulaireDemande.php';
    }
    else{

        $MotBD=rechercheMotBD($_POST['identifiant']);
        $lien='../view/DemandeTrad/VueDemandeReussite.php';
    }




getView($lien,$data);
