<?php


include '../fonction.php';
include '../model/ModelUpdate.php';
tradInit('trad','../locale');
$rang = $_POST['rang'];
$action = $_POST['action'];
$id = $_POST['id'];
   $recupRang=recupRang($action,$id,$rang);
getView('view/VueUpdate.php',$data);