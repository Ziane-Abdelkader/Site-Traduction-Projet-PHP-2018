<?php
/**
 * Created by PhpStorm.
 * User: Teusk
 * Date: 24/01/2018
 * Time: 08:58
 */
include 'VueMenuBarre.php';

if (empty($_SESSION['statut']) or !$_SESSION['statut'] == 'TRAD'or !$_SESSION['statut']=='ADMIN')  {
    die('<h1>'._('Vous n\'avez pas les droits pour accéder a cette partie').'</h1>');

}

else{
    formulaire();


}
function formulaire(){
    echo '<!DOCTYPE html>
    <html lang="fr">
    <head>
        <title>'._('Rechercher une traduction'). '</title>
    </head>
    <body>
        <br><br>
        <form action="../controlleur/placerTradFin.php" method="post" action ="">
            <fieldset>
                <legend>' ._('Placer une traduction dans une langue').'</legend>
                <div>
                    <SELECT name="langue" size="1" id="langue">
                    <OPTION>EN
                    <OPTION>SP
                    <OPTION>IT
                    <OPTION>DU
                    
                    <OPTION>PO
                    <OPTION>JP
                    <OPTION>CN
                    <OPTION>WO
                    </SELECT>
                </div>
                <p><input type="submit" value="Chercher" /></p></for
            </fieldset><br>
    ';
}
