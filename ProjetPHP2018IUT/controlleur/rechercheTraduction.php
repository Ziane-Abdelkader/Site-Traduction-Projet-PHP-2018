<?php
/**
 * Created by PhpStorm.
 * User: Simon Kristofer
 */
include '../fonction.php';
include '../model/ModelRechercheTrad.php';
tradInit('trad','../locale');

if (!isset($_POST['identifiant'])) {
    getView('../view/VueRechercheTradFormulaire.php');
}
else{
    getView('../view/VueRechercheTradFormulaire.php');

    $traduction=$_POST['identifiant'];
    $langue=$_POST['langue'];
    $data =recherche($traduction,$langue);
    getView('../view/VueRechercheTradFin.php',$data);
    ;}
