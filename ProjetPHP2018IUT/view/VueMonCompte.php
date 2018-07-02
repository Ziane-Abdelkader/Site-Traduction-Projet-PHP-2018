<?php
include 'VueMenuBarre.php';
if (empty($_SESSION['statut'])) {
    echo '<h1>'._('connecter vous').'</h1>';
}
else{
    echo '<!DOCTYPE html>
<html lang="fr">
<head>
    <title> '. _('bla').'</title>
</head>
<body>
<h1>'._('Mon compte').'</h1>'.
        '<h7>'._('Nom de compte : '). $_SESSION['id'] .'</h7>'.
        '<h7>'._('Statue du compte : '). $_SESSION['statut'] .'</h7>'.
        '<h7>'._('Mail du compte : '). $_SESSION['mail'] .'</h7>'.
        '<form method="POST" action="updateCompte.php" name="email"><h6><?php= _('.'Changer mail'.') ?> </h6>
        <input type="text" name="email" >
        <button type="submit" name="action" value="valider">Ok</button>
        </form>'.

        '<h7>'._('Mot de passe : ').'</h7>'.
        '<form method="POST" action="updateMDP.php" name="mdp"><h6><?php= _('.'Changer mdp'.') ?> </h6>
        <input type="text" name="mdp" >
        <button type="submit" name="action" value="valider">Ok</button>
        </form>'.


        '</body>
</html>';

}


?>