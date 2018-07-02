<?php
include '../model/ModelPlacerTrad.php';
include '../fonction.php';

tradInit('trad','../locale');
$data=[
    'titrePage'=> _('placement')
];
getView('../view/VueMenuBarre.php',$data);
$langue=$_SESSION['langue'];
if(isset($_POST['motTraduit']) && isset($_POST['motVerif']) && isset($_POST['motATraduire'])  &&  !empty($_POST['motVerif']) && !empty($_POST['motTraduit']) && $_POST['motVerif'] == $_POST['motTraduit'] )
{$newMot = $_POST['motTraduit'];
    $mot = $_POST['motATraduire'];
    updateMot($mot,$langue,$newMot);
    getView('../view/VuePlacerTradFin2.php',$data);

    }
    else
        {
        echo '<h1> Champ non valide ! </h1>';
            echo '</br>'  . '<a href="../controlleur/placerTrad.php">'._('Revenir a la traduction ?').'</a>' ;
    }