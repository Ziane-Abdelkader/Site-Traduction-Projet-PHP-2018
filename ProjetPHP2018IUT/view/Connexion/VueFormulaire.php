<?php
 if(isset($_GET['step'])and $_GET['step']='MDP'){
    echo '<h2>' . _('un nouveau mot de passe vous a été envoier par mail').'</h2>';
}
echo '<!DOCTYPE html>
<html lang="fr">
<head>
    <title>'._('Connexion').'</title>
</head>
<body>
<br><br>
<form action="" method="post" action ="../controlleur/connexion.php">
    <fieldset>
        <legend>'._('Veuillez vous connecter').'</legend>
        <div>
            <br><strong><label for="identifiant">'._('Identifiant :').'</label></strong>
            <input name="identifiant" type="text" id="identifiant" /><br><br>

            <strong><label for="mdp">'._('Mot de passe :').'</label></strong>
            <input name="mdp" type="password" id="mdp" /><br><br>
        </div>
        <p><input type="submit" value="Connexion" /></p></form>
<a href="../controlleur/inscriptionBD.php">'._('Pas encore inscrit ?').'</a>
</div>
<a href="../controlleur/motDePasseOublier.php"> '._('Mot de passe oublié ?').' </a> <br>
</fieldset><br>
</body>
</html>';
