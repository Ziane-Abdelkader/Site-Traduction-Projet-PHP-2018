<?php

include '../fonction.php';

tradInit('trad','../locale');

$data=[
    'titrePage'=> _('Choisir langue')
];

getView('../model/ModelPlacerTrad.php',$data);
getView('view/VuePlacerTrad.php',$data);




