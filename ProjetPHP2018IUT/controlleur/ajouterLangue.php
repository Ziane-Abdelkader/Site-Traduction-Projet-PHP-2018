<?php
/**
 * Created by PhpStorm.
 * User: Peyric Alban
 */
include "../fonction.php";
include "../model/ModelAjouterLangue.php";
tradInit('trad','../locale');
$data=[
    'titrePage'=> _('ajoutLangue')
];
getView("../view/VueMenuBarre.php",$data);
getView("../view/VueAjouterLangue.php",$data);
if(isset($_POST['action'])){
$langue = $_POST['langue'];
$action = $_POST['action'];

ajout($langue,$action);

}

?>