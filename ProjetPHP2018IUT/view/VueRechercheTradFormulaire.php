<?php
include '../view/VueMenuBarre.php';

if (empty($_SESSION['statut']) ) {
    if(isset($_SESSION['temps'])){
        if(time()<$_SESSION['temps']+6){
            die('<h1>'._('attender 10 minute').'</h1>');
        }
    }
}?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
        <title><?php print(_('Recherche'))?></title>
    </head>
    <body>
        <br><br>
        <form action="" method="post" action ="../rechercheTraduction.php">
            <fieldset>
                <legend><?php print(_('que desirait vous traduire'))?></legend>
                <div>
                    <br><strong><label for="identifiant"><?php print(_('texte a traduire :'))?></label></strong>
                    <input name="identifiant" type="text" id="identifiant" /><br><br>
                    <SELECT name="langue" size="1" id="langue">
                    <OPTION>EN
                    <OPTION>SP
                    <OPTION>IT
                    <OPTION>DU
                    </SELECT>
                </div>
                <p><input type="submit" value="traduction" /></p></for
            </fieldset><br>