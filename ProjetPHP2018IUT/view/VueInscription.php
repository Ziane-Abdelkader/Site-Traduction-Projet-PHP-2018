
    <br><br>
<?php if(isset($_GET['step'])and $_GET['step']='MPD'){
    echo '<h4>' . _('le mot de passe et sa vérification sont différents').'</h4>';
}
if(isset($_GET['step2'])and $_GET['step2']='VIDE'){
    echo '<h4>' . _('remplissez les champs').'</h4> ';
}
if(isset($_GET['step3'])and $_GET['step3']='ERREUR'){
    echo '<h4>'._('données déjà enregistrées').'</h4> ';
}
if(isset($_GET['step4'])and $_GET['step4']='GOOD'){
    echo '<h4>'._('votre inscription est reussi nous vous avons envoyer un email avec vos identifiant').'</h4> ';
}
?>

    <form action="../controlleur/inscriptionBD.php" method="post">
        <fieldset>
            <legend><?php print(_('Remplissez le formulaire'))?></legend>
            <div>
                <br><strong><label for="identifiant" ><?php print(_('Identifiant :'))?></label></strong>
                <input name="identifiant" type="text" id="identifiant" /><br><br>

                <strong><label for="mail"><?php print(_('Adresse mail :'))?></label></strong>
                <input name="mail" type="email" id="mail" /><br><br>

                <strong><label for="mdp"><?php print(_('Mot de passe :'))?></label></strong>
                <input name="mdp" type="password" id="mdp" /><br><br>

                <strong><label for="mdp2"><?php print(_('Vérification de mot de passe :'))?></label></strong>
                <input name="mdp2" type="password" id="mdp2" /><br><br>

                </select><br><br>

                <strong><label for="condiGe"><?php print(_('J\'accepte les conditions générales'))?></label></strong>
                <input name="condiGe" type="checkbox" id="condiGe" required/>
                <a href="http://projetphp2018.alwaysdata.net/controlleur/CondiG.php"> ? </a> <br>
            </div>
        </fieldset><br>
        <div>
            <input type="submit" name="action" value="Envoyer">
            <input type="reset" name="action" value="Annuler">
        </div>
    </form>
</body>
</html>