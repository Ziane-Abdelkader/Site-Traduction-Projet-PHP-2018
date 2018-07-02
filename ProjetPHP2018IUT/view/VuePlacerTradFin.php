<?php

if (empty($_SESSION['statut']) || !$_SESSION['statut'] == 'TRAD' || !$_SESSION['statut'] == 'ADMIN' ) {

    die('<h1>'._('Vous n\'avez pas les droits pour accéder a cette partie').'</h1>');
}


 if(isset($_GET['step'])and $_GET['step']='ERREUR'){
    echo '<h4>' . _('le mot de passe et sa vérification sont différents').'</h4>';}
    echo '
            <form  action="../controlleur/placerTradFin2.php" method="post" action ="">   
            <div>
            <br><strong><label for="motATraduire"><h3>' . _('Saisir le mot que vous voulez traduire :')  . '</h3></label></strong>
                <input name="motATraduire" type="text" id="motATraduire" /><br><br>
                
                <br><strong><label for="motTraduit"><h3>' . _('Saisir le mot traduit :')  . '</h3></label></strong>
                <input name="motTraduit" type="text" id="motTraduit" /><br><br>
    
                <strong><label for="motVerif"><h3>' . _('Resaisir le mot traduit  : ') . '</h3></label></strong>
                <input name="motVerif" type="text" id="motVerif" /><br><br>
                <p><input type="submit" name="action" value="Confirmer" /></p></form>
            </div>';

echo '</br>'  . '<a href="../controlleur/placerTrad.php">'._('Revenir a la traduction ?').'</a>' ;
