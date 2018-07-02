<?php

if(!isset($_SESSION['statut'])){
    echo '<h1>'._('connecter vous').'</h1>'.
        '<h1><a href="http://projetphp2018.alwaysdata.net/controlleur/connexion.php">'._('Se connecter').' </a></h1> <br>';
}
else if($_SESSION['statut']=='STAND'){
    echo '<h1>'._('votre rang est insufisant').'</h1>';
}else{
    echo '<!DOCTYPE html>
    <html lang="fr">
    <head>
        <title>'._('Connexion').'</title>
    </head>
    <body>
        <br><br>
        <form action="" method="post" action ="../demandeTraduction.php">
            <fieldset>
                <legend>'._('écrivais le texte a envoyer ').'</legend>
                <div>
                    <br><strong><label for="identifiant">'._('demande de traduction :').'</label></strong>
                    <input name="identifiant" type="text" id="identifiant" /><br><br>
    
                </div>
                <p><input type="submit" value="envoyer une demande" /></p></for
            </fieldset><br>
    ';}
